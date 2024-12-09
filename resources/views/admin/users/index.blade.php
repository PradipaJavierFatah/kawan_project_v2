<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        .table-custom {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .table-custom th,
        .table-custom td {
            padding: 12px 15px;
            text-align: center;
            vertical-align: middle;
        }

        .table-custom th {
            background-color: #f5f5f5;
            font-weight: bold;
            vertical-align: middle;
        }

        .table-custom td {
            border-top: 1px solid #dee2e6;
        }

        .profile-placeholder {
            display: inline-block;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        .actions .btn {
            font-size: 0.8rem;
            padding: 5px 10px;
        }

        .pagination .page-link {
            border-radius: 50%;
            color: #6c757d;
        }

        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }

        .alert-dismissible {
            font-size: 0.875rem;
            /* Membuat font lebih kecil */
            padding: 10px;
            /* Mengurangi padding */
            margin-top: 10px;
            opacity: 1;
            transition: opacity 0.3s ease-out;
        }

        /* Foto sejajar */
        td:first-child {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }

        /* Membuat tulisan role lebih besar */
        .badge {
            font-size: 0.8rem;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary back-button">
            Back
        </a>
        <div class="center-content">
            <h1>User Management</h1>
            <br>
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary mb-3">Add New Data</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-between mb-3">
            <form id="filterForm" method="GET" action="{{ route('admin.users.index') }}" class="d-flex">
                <select name="role" id="roleFilter" class="form-select me-2" onchange="this.form.submit()">
                    <option value="admin" {{ request('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="user" {{ request('role') === 'user' ? 'selected' : '' }}>User</option>
                    <option value="all" {{ request('role') === 'all' ? 'selected' : '' }}>All Roles</option>
                </select>
            </form>
        </div>

        @if ($users->isEmpty())
            <div class="no-data-message text-center text-muted">
                <p class="fs-4">There are no users available.</p>
            </div>
        @else
            <table class="table table-custom">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                @if ($user->photo)
                                    <img src="{{ asset('storage/' . $user->photo) }}" class="rounded-circle"
                                        style="width: 50px; height: 50px;">
                                @else
                                    @php
                                        $colors = ['#007bff', '#6c757d', '#28a745', '#ffc107', '#dc3545'];
                                        $color = $colors[$loop->index % count($colors)];
                                        $initials = implode(
                                            '',
                                            array_map(fn($word) => $word[0], explode(' ', $user->name)),
                                        );
                                    @endphp
                                    <div class="profile-placeholder" style="background-color: {{ $color }}">
                                        {{ $initials }}
                                    </div>
                                @endif
                            </td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                <span class="badge {{ $user->role == 'admin' ? 'bg-danger' : 'bg-secondary' }}">
                                    {{ ucfirst($user->role) }}
                                </span>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td class="actions">
                                <button class="btn btn-warning"
                                    onclick="openUpdateModal({{ json_encode($user) }})">Update</button>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger"
                                        onclick="confirmDelete(this)">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <div class="d-flex justify-content-end mt-4">
            {{ $users->links('pagination::bootstrap-5') }}
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="updateForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Update Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="userId" name="id">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <input type="text" class="form-control" id="role" name="role" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Update Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                            <button type="button" class="btn btn-danger mt-2 delete-photo-btn" id="deletePhotoBtn"
                                style="display: none;">
                                Delete Current Photo
                            </button>
                            <input type="hidden" name="delete_photo" id="deletePhotoInput" value="false">
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

    <script>
        // Fungsi untuk membuka modal dan mengisi data
        function openUpdateModal(user) {
            // Isi form dengan data user
            document.getElementById('userId').value = user.id;
            document.getElementById('name').value = user.name;
            document.getElementById('email').value = user.email;
            document.getElementById('role').value = user.role;

            const photoInput = document.getElementById('photo');
            const deletePhotoBtn = document.getElementById('deletePhotoBtn');
            const deletePhotoInput = document.getElementById('deletePhotoInput');

            // Tampilkan tombol hapus foto jika ada foto
            if (user.photo) {
                deletePhotoBtn.style.display = 'inline-block';
                deletePhotoInput.value = 'false'; // Default: tidak menghapus foto
            } else {
                deletePhotoBtn.style.display = 'none';
            }

            // Ketika tombol delete foto diklik
            deletePhotoBtn.onclick = function() {
                deletePhotoInput.value = 'true';
                deletePhotoBtn.style.display = 'none';
                photoInput.value = null; // Hapus foto yang ada
            };

            // Ubah action form ke URL yang sesuai
            document.getElementById('updateForm').action = `/admin/users/${user.id}`;

            // Tampilkan modal
            const modal = new bootstrap.Modal(document.getElementById('updateModal'));
            modal.show();
        }

        // Fungsi konfirmasi untuk menghapus user
        function confirmDelete(button) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            });
        }


        // Auto-dismiss alert setelah 3 detik
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert-dismissible');
            alerts.forEach(alert => alert.style.opacity = 0);
        }, 3000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
