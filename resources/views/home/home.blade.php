@php
    $countries = \App\Models\Country::all();

@endphp
@extends('layaouts.main')

@section('title','Register')

@section('content')
    <h1>subdomain - {{$subdomain}}</h1>
    @foreach($countries as $country)
        <h1>{{$country->country_name}}</h1>
    @endforeach
@endsection
