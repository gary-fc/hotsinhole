@php
    $categories = \App\Models\Bulletin::all();
    $imgs = ["https://bo-static.imgskk.com/post/18/e8/18e8219d27db4821bd9e6d266ccb1ee2.jpg?v=84ssm3xe", "https://bo-static.imgskk.com/post/6c/c4/6cc489b8940a442eb6af030a3702eaf2.jpg?listing=premium&v=84ssm3xe"];
@endphp
@extends('layouts.main')

@section('title', 'Escorts Bolivia')

@section('content')
    @include('filters.filters')

    <section class="hsh-bulletins-container">
        <div id="app">
            <bulletin-container-component
                :bulletins="{{json_encode($categories)}}"></bulletin-container-component>
        </div>
    </section>
@endsection
