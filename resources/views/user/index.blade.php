@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Tools</th>
            </tr>
            @foreach ($users as $user)
                <x-user :user="$user" />
            @endforeach
        </table>
    </div>
@endsection
