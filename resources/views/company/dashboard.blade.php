<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container px-5 py-5 mx-5 my-5">
    <h1>Welcome to the Company Dashboard</h1>
    <p>Hello, {{ auth()->guard('company')->user()->name }}!</p>
    <!-- Add more dashboard content here -->
    <a href="{{ route('company.offres.index') }}" class="btn btn-primary">Manage Offres</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
