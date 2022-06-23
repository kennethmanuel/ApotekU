@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Medicine</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('/medicines', $medicine->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group m-2 p-2">
                    <label for="generic_name">Medicine Generic Name</label>
                    <input class="form-control" type="text" name="generic_name" value="{{ $medicine->generic_name }}">
                </div>
                <div class="form-group m-2 p-2">
                    <label for="generic_name">Slug</label>
                    <input class="form-control" type="text" name="slug" value="{{ $medicine->slug }}">
                </div>
                <div class="form-group m-2 p-2">
                    <label for="restriction_formula">Restriction Formula</label>
                    <input class="form-control" type="text" name="restriction_formula"
                        value="{{ $medicine->restriction_formula }}">
                </div>

                <div class="form-group m-2 p-2">
                    <label for="form">Form</label>
                    <input class="form-control" type="text" name="form" value="{{ $medicine->form }}">
                </div>

                <div class="form-group m-2 p-2">
                    <label for="form">Stock</label>
                    <input class="form-control" type="number" name="stock" value="{{ $medicine->stock }}">
                </div>

                <div class="form-group m-2 p-2">
                    <label for="restriction">Description</label>
                    <textarea class="form-control" name="description" cols="30" rows="10">{{ $medicine->description }}</textarea>
                </div>

                <div class="form-group m-2 p-2">
                    <label for="category_id">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id == $medicine->category_id ? 'selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group m-2 p-2 form-check-inline">
                    <label for="faskes1">Faskes 1</label>
                    <input class="form-check-input" type="checkbox" name="faskes1"
                        {{ $medicine->faskes1 == 1 ? 'checked' : '' }}>
                </div>

                <div class="form-group m-2 p-2 form-check-inline">
                    <label for="faskes2">Faskes 2</label>
                    <input class="form-check-input" type="checkbox" name="faskes2"
                        {{ $medicine->faskes2 == 1 ? 'checked' : '' }}>
                </div>

                <div class="form-group m-2 p-2 form-check-inline">
                    <label for="faskes3">Faskes 3</label>
                    <input class="form-check-input" type="checkbox" name="faskes3"
                        {{ $medicine->faskes3 == 1 ? 'checked' : '' }}>
                </div>

                <div class="form-group m-2 p-2">
                    <label for="price">Price</label>
                    <input class="form-control" type="number" name="price" value="{{ $medicine->price }}">
                </div>

                <div class="form-group m-2 p-2">
                    <button class="btn btn-success" type="submit" value="submit">Update Medicine</button>
                </div>

            </form>
        </div>
    </div>
@endsection
