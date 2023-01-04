@extends('layouts.main')

@section('title', 'MENU')

@section('content')
    @include('filters.filters')

    <section class="hsh-country-menu-container">
        <section class="hsh-country-menu-container-card">
            @include('country.components.menu_item', [$subdomain,$categories])
        </section>
    </section>
@endsection
