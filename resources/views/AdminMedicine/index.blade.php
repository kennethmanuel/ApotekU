<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>Medicine Catalog (Admin)</title>
</head>

<body>
    <h1 class="text-center mt-5">Medicine Catalog (Admin)</h1>
    <hr>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Generic Name</th>
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
                    <td>{{ $medicine->form }}</td>
                    <td>{{ $medicine->restriction_formula }}</td>
                    <td>{{ $medicine->description }}</td>
                    <td>{{ $medicine->category->name }}</td>
                    <td>{{ $medicine->faskes1 }}</td>
                    <td>{{ $medicine->faskes2 }}</td>
                    <td>{{ $medicine->faskes3 }}</td>
                    <td>{{ $medicine->price }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.medicine.edit', $medicine->id) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.medicine.destroy', $medicine->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
