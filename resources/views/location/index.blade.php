@extends('layouts.app')

@section('content')
    <div class="mx-3 row">
        @foreach ($locations as $location)
            <div class="col-3">
                <div class="mb-3 border">
                    <a href="{{ $location->route }}">
                        <h3>
                            {{ $location->name }}
                        </h3>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
