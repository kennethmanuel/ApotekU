@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                Report 2
            </h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Generic Name</th>
                        <th scope="col">Total Terjual</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicine_collection as $medicine)
                        <tr>
                            <th scope="row">{{ $medicine->id }}</th>
                            <td>{{ $medicine->generic_name }}</td>
                            <td>{{ $medicine->total_terjual }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection