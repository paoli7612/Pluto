@extends('layouts.app')

@section('content')

    <div class="container">
        @if (auth()->user()->admin)
            @include('forms.event.new')
        @endif

        <div class="row">
            @foreach ($events as $event)
                <div class="col-4">
                    <x-event :event="$event" />
                </div>
            @endforeach
        </div>
    </div>
@endsection
