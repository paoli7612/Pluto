@extends('layouts.app')

@section('content')
    <div class="row mx-3">
        @foreach ($locations as $location)
            <div class="col border mx-3 py-3" style="height:300px; background-image: url('{{ asset('img/location.png') }}')">
                <a class="btn btn-info w-100 text-white" href="{{ $location->route }}"> {{ $location->name }}</a>
            </div>
        @endforeach
    </div>
@endsection
