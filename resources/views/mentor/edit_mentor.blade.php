<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mentor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Mentor</h2>

        <!-- Form untuk Edit Mentor -->
<form action="{{ isset($mentor) ? route('mentors.update', $mentor->id) : route('mentors.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($mentor))
        @method('PUT') <!-- Jika sedang edit, kita perlu menambahkan method PUT -->
    @endif

    <!-- Menampilkan pesan error global jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Nama Mentor -->
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $mentor->name ?? '') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Umur Mentor -->
    <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age', $mentor->age ?? '') }}">
        @error('age')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Deskripsi Mentor -->
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description', $mentor->description ?? '') }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Picture (Gambar) -->
    <div class="mb-3">
        <label for="picture" class="form-label">Picture</label>
        <input type="file" class="form-control @error('picture') is-invalid @enderror" id="picture" name="picture" accept="image/*">

        <!-- Menampilkan gambar yang ada jika edit -->
        @if(isset($mentor) && $mentor->picture)
            <img src="{{ asset($mentor->picture) }}" alt="Current Picture" style="width: 100px; margin-top: 10px;">
        @endif

        @error('picture')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Tombol untuk submit form -->
    <button type="submit" class="btn btn-success">Save Mentor</button>

    <a href="{{ route('mentor_list') }}" class="btn btn-secondary back-button">
        Back
    </a>

</form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
