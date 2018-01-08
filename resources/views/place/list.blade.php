@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <input id="lugar" type="text" value="{{$q}}" />
        <input id="pesquisar" type="button" value="Pesquisar" />
    </div>
</div>
<h1>Lugares</h1>
@if(count($places ) > 0)
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Nota</th>
            </tr>
            </thead>
            <tbody id="dados" tyle="cursor: pointer;">
            @foreach($places as $place)
                <a href="{{"/place/{$place->id}"}}">
                    <tr data-id="{{$place->id}}">
                        <td>{{$place->id}}</td>
                        <td>{{$place->name}}</td>
                        @if( ($rate = $place->getRating()) == 0)
                            <td>Sem Avaliações</td>
                        @else
                            <td>{{$rate}} <span class="glyphicon glyphicon-star-empty"></span></td>
                        @endif
                    </tr>
                </a>
            @endforeach
            </tbody>
        </table>
@else
    <div class="row"><div class="col-12">Nenhum lugar encontrado</div></div>
@endif
@endsection

@section('script')
<script>
    $('#dados').on('click', 'tr', function(){
        var id = $(this).data('id');
        document.location.href = "./place/"+id;
    });
    $('#pesquisar').on('click', function () {
        var q = $("#lugar").val();
        q = encodeURIComponent($.trim(q));
        document.location.href = (q?"./place?q="+q:"./place");
    });
</script>
@endsection