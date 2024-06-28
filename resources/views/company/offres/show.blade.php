<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offre Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Offre Details</h1>
    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" id="title" class="form-control" value="{{ $offre->title }}" readonly>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea id="description" class="form-control" rows="3" readonly>{{ $offre->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price:</label>
        <input type="text" id="price" class="form-control" value=" {{ '$' . $offre->price }}" >
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Image:</label>
        <input type="text" id="img" class="form-control" value="{{ $offre->img }}" readonly>
    </div>
    <a href="{{ route('company.offres.index') }}" class="btn btn-secondary">Back to List</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
