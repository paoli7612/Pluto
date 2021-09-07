@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('partials.new-operation')
        </div>
        <div class="col-7">
            @include('partials.all-operations')
        </div>
        <div class="col">
            @include('partials.all-accounts')
        </div>
    </div>
@endsection
