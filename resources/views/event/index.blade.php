@extends('layouts.app')

@section('content')

    <div class="container">
        <button class="btn btn-primary mb-3" type="button" data-toggle="collapse" data-target="#new" aria-expanded="false" aria-controls="new">
            New event
        </button>
        <div class="collapse mb-3" id="new">
            <div class="card card-body">
                <form action="{{ route('events.new') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <label for="type">Type</label>
                            <input type="text" name="type" class="form-control">
                        </div>
                        <div class="form-group col">
                            <label for="type">Date</label>
                            <input type="date" name="type" class="form-control">
                        </div>
                    </div>
                    
                </form>
            </div>

        </div>
        <div class="row">
            @foreach ($events as $event)
                <div class="col-4">
                    <x-event :event="$event" />
                </div>
            @endforeach
        </div>
    </div>
@endsection
