@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Create Category</h4>
        </div>
        <div class="card-body">
            <form action="{{  url('/categories') }}" method="POST">
                @csrf
                <div class="form-group m-2 p-2">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Category Name">
                </div>

                <div class="form-group m-2 p-2">
                    <label for="restriction">Description</label>
                    <textarea class="form-control" name="description" cols="30" rows="10"
                        placeholder="Add Medicine Descriptions..."></textarea>
                </div>

                <div class="form-group m-2 p-2">
                    <button class="btn btn-success" type="submit" value="submit">Add Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection
