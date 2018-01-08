@extends('layouts.app')

@section('content')

    <h1>{{$place->name}}</h1>
<!--  'internet_has', 'internet_open', 'internet_speed', 'internet_pass', 'food_description', 'drink_description',
        'service_rate', 'price_rate', 'comfort_rate', 'accommodations_description', 'noise_rate', 'general_rate' -->
    <form method="post" action="./store">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-6">
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Tem internet?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="internet_has" id="gridRadios1" value="1">
                                <label class="form-check-label" for="gridRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="internet_has" id="gridRadios2" value="0">
                                <label class="form-check-label" for="gridRadios2">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="form-group col-md-6">
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Internet aberta?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="internet_open" id="gridRadios1" value="1">
                                <label class="form-check-label" for="gridRadios1">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="internet_open" id="gridRadios2" value="0">
                                <label class="form-check-label" for="gridRadios2">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress">Velocidade da internet</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Boa" name="internet_speed">
        </div>
        <div class="form-group form-group col-md-6">
            <label for="inputAddress2">Senha da internet</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="********" name="internet_pass">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Comida</label>
                <input type="text" class="form-control" id="inputCity" name="food_description">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Bebida</label>
                <input type="text" class="form-control" id="inputCity" name="drink_description">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Serviço</label>
                <input type="range"  min="1" max="5" step="1" class="form-control" name="service_rate">
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Preço</label>
                <input type="range"  min="1" max="5" step="1" class="form-control" name="price_rate">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Comforto</label>
                <input type="range"  min="1" max="5" step="1" class="form-control" name="comfort_rate">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Acomodações</label>
                <input type="text" class="form-control" id="inputCity" name="accommodations_description">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Barulho</label>
                <input type="range"  min="1" max="5" step="1" class="form-control" name="noise_rate">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Nota geral</label>
                <input type="range"  min="1" max="5" step="1" class="form-control" name="general_rate">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection

