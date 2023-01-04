@extends('layouts.main')

@section('title', 'Escorts Bolivia')

@section('content')
    @include('filters.filters')

    <section class="hsh-bulletins-container">
        <div id="app">
            <bulletin-container-component
                :bulletins="{{json_encode($bulletins)}}"></bulletin-container-component>
        </div>
    </section>
@endsection
