@extends('layout.app')

@section('titlePage')
Laravel comincs | Home
@endSection

@section('content')

<div class="container d-flex flex-wrap py-5">

    @foreach($magazines as $elem)
    <div class="card">
        <img src="{{$elem['thumb']}}" alt="">
        <span>{{ $elem['series'] }}</span>
    </div>
    @endforeach

</div>
<div class="d-flex justify-content-center pb-5">
    <button>load more</button>
</div>

@include ('partials.fastLink')

@endSection