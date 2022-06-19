<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>Create Medicine</title>
</head>

<body>
    <h1 class="text-center mt-5">Create Medicine (Admin)</h1>
    <hr>

    <div class="container justify-content-center mt-2 mb-5">

        <form action="{{ route('admin.medicine.store') }}" method="POST">
            @csrf

            <div class="form-group m-2 p-2">
                <label for="generic_name">Medicine Generic Name</label>
                <input class="form-control" type="text" name="generic_name" placeholder="Medicine Generic Name">
            </div>

            <div class="form-group m-2 p-2">
                <label for="restriction_formula">Restriction Formula</label>
                <input class="form-control" type="text" name="restriction_formula" placeholder="Restriction Formula">
            </div>

            <div class="form-group m-2 p-2">
                <label for="form">Form</label>
                <input class="form-control" type="text" name="form" placeholder="Medicine Form">
            </div>

            <div class="form-group m-2 p-2">
                <label for="restriction">Description</label>
                <textarea class="form-control" name="restriction_formula" cols="30" rows="10"
                    placeholder="Add Medicine Descriptions..."></textarea>
            </div>

            <div class="form-group m-2 p-2">
                <label for="category_id">Category</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group m-2 p-2 form-check-inline">
                <label for="faskes1">Faskes 1</label>
                <input class="form-check-input" type="checkbox" name="faskes1">
            </div>

            <div class="form-group m-2 p-2 form-check-inline">
                <label for="faskes2">Faskes 2</label>
                <input class="form-check-input" type="checkbox" name="faskes2">
            </div>

            <div class="form-group m-2 p-2 form-check-inline">
                <label for="faskes3">Faskes 3</label>
                <input class="form-check-input" type="checkbox" name="faskes3">
            </div>

            <div class="form-group m-2 p-2">
                <label for="price">Price</label>
                <input class="form-control" type="number" name="price" placeholder="Price">
            </div>

            <div class="form-group m-2 p-2">
                <button class="btn btn-success" type="submit" value="submit">Add Medicine</button>
            </div>

        </form>

    </div>
</body>

</html>
