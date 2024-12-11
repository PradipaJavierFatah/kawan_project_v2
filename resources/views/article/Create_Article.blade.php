<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.5.1/dist/flowbite.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        .center-content h1 {
            margin-bottom: 15px;
        }

        .no-data-message {
            text-align: center;
            margin-top: 30px;
            font-size: 1.5rem;
            color: #6c757d;
        }

        .btn-submit {
            margin-top: 20px;
        }

        .card img {
            width: 100%; /* Mengatur lebar gambar agar responsif */
            height: 400px; /* Mengatur tinggi untuk menjaga konsistensi */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
        }
    </style>
</head>

<body style="background-color:#19012C">
    
<div class="w-screen">
<div>
    <div class="container mt-5"> 
        <div class="center-content">
            <h1 style="color: #d8bfd8;">Create a New Article</h1>
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="w-50">
                @csrf
                <div class="mb-3">
                    <label for="photo" style="color: #d8bfd8;" class="form-label">Image</label>
                    <input type="file" name="photo" class="form-control" required>
                    @error('photo')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="title" style="color: #d8bfd8;" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" required>
                    @error('title')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" style="color: #d8bfd8;" class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" id="category" required>
                    @error('category')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" style="color: #d8bfd8;" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="content" required></textarea>
                    @error('content')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <button type="submit"  class="btn btn-success">Submit</button>

                <a href="{{ route('dashboard_admin') }}" style="background-color: crimson" class="btn btn-secondary back-button">
                    Back
                </a>
            </form>
        </div>

        <h2 style="color: #d8bfd8;">Existing Articles</h2>
        @if ($articles->isEmpty())
            <div class="no-data-message">
                There are no articles available.
            </div>
        @else
            <div class="row" style="gap: 1rem; margin: 1rem;">
                @foreach ($articles as $article)
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('storage/' . $article->photo) }}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $article->category }}</h6>
                                <p class="card-text">{{ $article->content }}</p>
                                <button class="btn btn-warning" onclick="openUpdateModal({{ json_encode($article) }})">Edit</button>
                                <form action="/article/{{ $article->id }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete(this)">Delete</button>                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-end">
                {{ $articles->links('pagination::bootstrap-4') }}
            </div>
        @endif
    </div>

    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="updateForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Update Article</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="articleId" name="id">
                        <div class="mb-3">
                            <label for="updateTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="updateTitle" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="updateCategory" class="form-label">Category</label>
                            <input type="text" class="form-control" id="updateCategory" name="category" required>
                        </div>
                        <div class="mb-3">
                            <label for="updateContent" class="form-label">Content</label>
                            <textarea class="form-control" id="updateContent" name="content" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="updatePhoto" class="form-label">Update Photo</label>
                            <input type="file" class="form-control" id="updatePhoto" name="photo">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
        function openUpdateModal(article) {
            document.getElementById('articleId').value = article.id;
            document.getElementById('updateTitle').value = article.title;
            document.getElementById('updateCategory').value = article.category;
            document.getElementById('updateContent').value = article.content;

            document.getElementById('updateForm').action = `/article/${article.id}`;

            new bootstrap.Modal(document.getElementById('updateModal')).show();
        }
        function confirmDelete(button) {
            const confirmed = confirm("Are you sure you want to delete this article? This action cannot be undone.");
            if (confirmed) {
                // Submit the form linked to the delete button
                button.closest('form').submit();
            }else{
                button.hide();
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</html>