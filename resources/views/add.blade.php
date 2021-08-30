@extends('layouts.app')

@section('content')
    <div class="col-4 mx-auto bg-light p-3">
        <form action="{{ route('add') }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" placeholder="Title" id="title">
            </div>

            <div class="form-group">
                <label for="type">Category</label>
                <select class="form-control" name="type" id="type">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}"> {{ $category->title }} </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="type">Data</label>
                <input type="date" name="date" class="form-control" value="{{date('Y-m-d');}}" format>
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type">
                    <option value="1"> -€ al mese </option>
                    <option value="1"> +€ al mese </option>
                    <option value="1"> -€ spesa </option>
                    <option value="1"> +€ guadagno </option>
                </select>
            </div>

            <div class="form-group">
                <label for="value">Value</label>
                <input class="form-control" type="number" name="value" placeholder="Value" id="value">
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">
                    Add
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </form>
    </div>

@endsection
