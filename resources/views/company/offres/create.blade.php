<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Offre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Create Offre</h1>
    <form action="{{ route('company.offres.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" required>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" name="img" class="form-control" id="img" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
