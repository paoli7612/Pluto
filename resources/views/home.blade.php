@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('partials.new-operation')
        </div>
        <div class="col-5">
            @include('partials.all-operations')
        </div>
        <div class="col">
            @include('partials.accounts')
        </div>
    </div>
@endsection
