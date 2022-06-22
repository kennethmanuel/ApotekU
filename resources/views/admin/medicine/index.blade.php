@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                Medicine Page
            </h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Generic Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Form</th>
                        <th scope="col">Restriction Formula</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Faskes TK 1</th>
                        <th scope="col">Faskes TK 2</th>
                        <th scope="col">Faskes TK 3</th>
                        <th scope="col">Price</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicines as $medicine)
                        <tr>
                            <th scope="row">{{ $medicine->id }}</th>
                            <td>{{ $medicine->generic_name }}</td>
                            <td>{{ $medicine->slug }}</td>
                            <td>{{ $medicine->form }}</td>
                            <td>{{ $medicine->restriction_formula }}</td>
                            <td>{{ $medicine->description }}</td>
                            <td>{{ $medicine->category->name }}</td>
                            <td>{{ $medicine->faskes1 }}</td>
                            <td>{{ $medicine->faskes2 }}</td>
                            <td>{{ $medicine->faskes3 }}</td>
                            <td>{{ $medicine->price }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('medicines/' . $medicine->id . '/edit') }}">Edit</a>
                            </td>
                            <td>
                                <form action="{{ url('medicines/' . $medicine->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
