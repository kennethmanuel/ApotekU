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
                        <th scope="col">Name</th>
                        <th scope="col">Total Belanja</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user_collection as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->total_belanja }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection