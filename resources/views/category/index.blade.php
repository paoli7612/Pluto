@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="row">
        <div class="col">
            @include('partials.new-category')
        </div>
        <div class="col">
            @include('partials.all-categories')
        </div>
    </div>
@endsection