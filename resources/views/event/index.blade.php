@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($events as $event)
                <div class=" col-lg-3 col-md-4 col-sm-6 col-12">
                    <x-event :event="$event" />
                </div>
            @endforeach
        </div>
        {{ $events->links() }}
    </div>
@endsection
