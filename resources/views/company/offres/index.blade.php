<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Offres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a href="{{ route('front.Home') }}" class="btn btn-primary mb-3">logout</a>


<div class="container mt-5">
    <h1>Manage Offres</h1>
    <a href="{{ route('company.offres.create') }}" class="btn btn-primary mb-3">Add New Offre</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($offres as $offre)
                <tr>
                    <td>{{ $offre->id }}</td>
                    <td>{{ $offre->title }}</td>
                    <td>{{ $offre->description }}</td>
                    <td>{{ $offre->price }}</td>
                    <td><img src="{{ asset('images/logos/' . $offre->img) }}" alt="Offre Image" style="width: 100px; height: auto;"></td>
                    <td>
                        <a href="{{ route('company.offres.show', $offre->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('company.offres.edit', $offre->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('company.offres.destroy', $offre->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
