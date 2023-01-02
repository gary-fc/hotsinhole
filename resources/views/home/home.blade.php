@php
    $countries = \App\Models\Country::with('cities')->get();
@endphp
@extends('layouts.main')

@section('title','Register')

@section('content')
    @foreach($countries as $country)
        @include('home/country/country_item',[$country])
    @endforeach
@endsection
