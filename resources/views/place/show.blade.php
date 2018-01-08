@extends('layouts.app')
@section('content')
    <h1>{{$place->name}}</h1>
    <div class="row">
        <div class="col-md-2">Endereço</div>
        <div class="col-md-10">{{$place->address}}</div>
    </div>
    <div class="row">
        <div class="col-md-2">Cidade</div>
        <div class="col-md-10">{{$place->city}}</div>
    </div>
    <div class="row">
        <div class="col-md-2">Estado</div>
        <div class="col-md-10">{{$place->state}}</div>
    </div>
    <div class="row">
        <div class="col-md-2">País</div>
        <div class="col-md-10">{{$place->country}}</div>
    </div>
    <div class="row">
        <div class="col-md-2">Tipo</div>
        <div class="col-md-10">{{$place->getTipo()}}</div>
    </div>
    <div class="row">
        <div class="col-md-10"><h3>Avaliações</h3></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(count($reviews = $place->getReviews()) > 0)
                <div class="table-responsive">
                    <table class="table table-striped">
                <thead>
                <tr>
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
                @foreach($place->getReviews() as $review)
                <tr>
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
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="./{{$place->id}}/review" >Adicionar Review</a>
        </div>

    </div>
@endsection

@section('script')

@endsection