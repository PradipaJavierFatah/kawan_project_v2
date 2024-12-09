<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Mentor List</h2>

        <!-- Tampilkan pesan success setelah berhasil menambah mentor -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel untuk menampilkan daftar mentor -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Description</th>
                    <th>Picture</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mentors as $mentor)
                    <tr>
                        <td>{{ $mentor->id }}</td>
                        <td>{{ $mentor->name }}</td>
                        <td>{{ $mentor->age }}</td>
                        <td>{{ $mentor->description }}</td>
                        <td>
                            @if ($mentor->picture)
                                <img src="{{ asset($mentor->picture) }}" alt="Mentor Picture" style="width: 100px; height: auto;">
                            @else
                                <span>No Picture</span>
                            @endif
                        </td>
                        <td>
                            <!-- Tombol untuk edit dan delete -->
                            <a href="{{ route('mentors.edit', $mentor->id) }}" class="btn btn-primary btn-sm">Edit</a>

                            <!-- Tombol Delete dengan form -->
                            <form id="delete-form-{{ $mentor->id }}" action="{{ route('mentors.destroy', $mentor->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <!-- Tombol Delete -->
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $mentor->id }})">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Link untuk menambah mentor baru -->
        <a href="{{ route('mentors.create') }}" class="btn btn-success">Create Mentor</a>

        <a href="{{ route('dashboard_admin') }}" class="btn btn-secondary back-button">
            Back
        </a>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $mentors->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <script>
        // Fungsi untuk menampilkan popup konfirmasi sebelum menghapus
        function confirmDelete(id) {
            event.preventDefault(); // Mencegah form untuk langsung submit
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna memilih 'Yes, delete it', form akan disubmit
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
