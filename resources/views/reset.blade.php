@extends('layouts.app')

@section('content')
    are you sure?
    <form action="{{ route('reset') }}">
        <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
        <input type="submit" value="Conferma" class="btn btn-danger">
    </form>
@endsection