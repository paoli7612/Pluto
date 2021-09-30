@extends('layouts.app')

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Profile</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Company (disabled)</label>
                                        <input type="text" class="form-control" disabled="" placeholder="Company"
                                            value="Creative Code Inc.">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input name="username" type="text" class="form-control" placeholder="Username" value="{{ $user->username }}">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input name="email" type="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input name="name" type="text" class="form-control" placeholder="Company" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input name="surname" type="text" class="form-control" placeholder="Last Name" value="{{ $user->surname }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea rows="4" cols="80" class="form-control" name="description"
                                            placeholder="Here can be your description"
                                            value="Mike">{{ $user->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="submit" value="Save" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="{{ asset('img/bg5.jpg') }}" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="https://i.pravatar.cc/256" alt="...">
                                <h5 class="title">Mike Andrew</h5>
                            </a>
                            <p class="description">
                                michael24
                            </p>
                        </div>
                        <p class="description text-center">
                            "Lamborghini Mercy <br> Your chick she so thirsty <br> I'm in that two seat Lambo"
                        </p>
                    </div>
                    <hr>
                    <div class="button-container">
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                            <i class="fab fa-google-plus-g"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
