@extends('layout.standar',['title'=>$title])

@section('content')
<div class="container-fluid join py-3">
    <div class="row">
        @include('Forms.register')
        @include('Forms.sign_in')
    </div>
</div>
@include('Layout.Footer')
@stop