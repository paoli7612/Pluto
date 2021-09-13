@extends('layouts.app')

@section('content')

    <div class="container">
        @if (auth()->user()->admin)
            <button class="btn btn-primary mb-3" type="button" data-toggle="collapse" data-target="#new" aria-expanded="false" aria-controls="new">
                New event
            </button>
            <div class="collapse mb-3" id="new">
                <div class="card card-body">
                    <form action="{{ route('events.new') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col">
                                <label>Type</label>
                                <input type="text" name="type" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>Date</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label>Arrival</label>
                                <input type="time" name="arrival" class="form-control">
                            </div>
                            <div class="form-group col">
                                <label>Boss</label>
                                <select name="user_id" class="form-control">
                                    @foreach (App\Models\User::all() as $user)
                                        <option value="{{ $user->id }}">{{ $user->complete_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                    </form>
                </div>

            </div>
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
