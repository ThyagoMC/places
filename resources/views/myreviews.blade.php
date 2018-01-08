@extends('layouts.app')
@section('content')
<h1>Meus Reviews</h1>
@if(count($reviews) > 0)
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Lugar</th>
                <th>Tem Internet?</th>
                <th>Internet Aberta?</th>
                <th>Velocidade da Internet</th>
                <th>Senha da Internet</th>
                <th>Comida</th>
                <th>Bebida</th>
                <th>Serviço</th>
                <th>Preço</th>
                <th>Conforto</th>
                <th>Acomodações</th>
                <th>Barulho</th>
                <th>Avaliação Geral</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td>{{$review->getPlace()->name}}</td>
                    <td>{{($review->internet_has?"Sim":"Não")}}</td>
                    <td>{{($review->internet_open?"Sim":"Não")}}</td>
                    <td>{{$review->internet_speed}}</td>
                    <td>{{$review->internet_pass}}</td>
                    <td>{{$review->food_description}}</td>
                    <td>{{$review->drink_description}}</td>
                    <td>{{$review->service_rate}} <span class="glyphicon glyphicon-star-empty"></span></td>
                    <td>{{$review->price_rate}} $</td>
                    <td>{{$review->comfort_rate}} <span class="glyphicon glyphicon-star-empty"></span></td>
                    <td>{{$review->accommodations_description}}</td>
                    <td>{{$review->noise_rate}} <span class="glyphicon glyphicon-star-empty"></span></td>
                    <td>{{$review->general_rate}} <span class="glyphicon glyphicon-star-empty"></span></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    Não existem reviews ainda
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