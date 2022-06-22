@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Create Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('/categories/' . $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group m-2 p-2">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Category Name"
                        value="{{ $category->name }}">
                </div>

                <div class="form-group m-2 p-2">
                    <label for="restriction">Description</label>
                    <textarea class="form-control" name="description" cols="30" rows="10"
                        placeholder="Add Medicine Descriptions...">{{ $category->description }}</textarea>
                </div>

                <div class="form-group m-2 p-2">
                    <button class="btn btn-success" type="submit" value="submit">Edit Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection
