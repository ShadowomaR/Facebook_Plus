@extends('layout.standar',['title'=>$title])

@section('content')
<div class="container-fluid m-0 p-0">
    @include('layout.carousel')
</div>
@include('layout.Offer_cards')
<div class="contailer more text-center">
    <h2>Get More information <small>>>></small><a href="http://" class="link">About</a></h2>
</div>
@include('layout.Service_cards')
@include('layout.Footer')
@stop