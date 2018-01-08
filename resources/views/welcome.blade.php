@extends('layouts.app')

@section('content')


    <div class="title m-b-md" style="
        font-size: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 600px;">
        <div style=" max-width: 50%;">Places</div>
    </div>
@endsection

@section('script')
    <script>
        setTimeout(function(){
            document.location.href = "./place";
        },1500);

    </script>
@endsection
