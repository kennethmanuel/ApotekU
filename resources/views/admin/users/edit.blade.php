@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Users</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('/users/'.$user->id) }}" method="POST">
                @csrf
                <div class="form-group m-2 p-2">
                    <label for="generic_name">Name</label>
                    <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group m-2 p-2">
                    <label for="generic_name">Email</label>
                    <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group m-2 p-2">
                    <button class="btn btn-success" type="submit" value="submit">Edit User Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
