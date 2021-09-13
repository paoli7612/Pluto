@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($users as $user)
            <x-user :user="$user" />
        @endforeach
    </div>
</div>
@endsection
