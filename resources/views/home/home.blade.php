@php
    $countries = \App\Models\Country::with('cities')->get();
@endphp
@extends('layouts.main')

@section('title','Register')

@section('content')
    @foreach($countries as $country)
        @include('country/country_item',[$category,$country])
    @endforeach
@endsection
