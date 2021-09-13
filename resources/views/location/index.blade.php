@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($locations as $location)
            {{ $location }}
        @endforeach
    </div>
@endsection
