<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary back-button">
            Back
        </a>
        <h1 class="text-center mb-4">Admin Dashboard</h1>
        <div class="row justify-content-center">
            <!-- Card for Create Article -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Create Article</h5>
                        <p class="card-text">Add new articles for your website.</p>
                        <a href="{{ route('articles.create') }}" class="btn btn-primary">Go to Create Article</a>
                    </div>
                </div>
            </div>
            <!-- Card for Create Mentor -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Create Mentor</h5>
                        <p class="card-text">Add new mentors to your database.</p>
                        <a href="{{ route('mentors.create') }}" class="btn btn-primary">Go to Create Mentor</a>
                    </div>
                </div>
            </div>
            <!-- Card for User -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">User's Database</h5>
                        <p class="card-text">Sensitive Content</p>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Go to Users</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
