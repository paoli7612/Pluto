@extends('layouts.app')

@section('content')
    <div class="container row">
        @foreach ($events as $event)
            <div class="col-4">
            <x-event :event="$event" />
            </div>
        @endforeach
    </div>
@endsection
