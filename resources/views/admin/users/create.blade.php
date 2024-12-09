<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control, .form-select {
            border-radius: 10px;
            padding: 10px;
        }
        .form-control-file {
            border-radius: 10px;
            padding: 10px;
        }
        .form-btn {
            display: block;
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            transition: background-color 0.3s;
        }
        .form-btn:hover {
            background-color: #0056b3;
        }
        .form-label {
            font-weight: bold;
        }
        .form-text {
            font-size: 0.875rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
    <div class="form-container">
        <h2 class="form-header">Add User</h2>

        <!-- Notifikasi -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf

            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" maxlength="50" required>
                <div class="invalid-feedback">Full Name wajib diisi.</div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
                <div class="invalid-feedback">Email is required and must be valid.</div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" minlength="6" required>
                <div class="invalid-feedback">Password wajib diisi dan minimal 6 karakter.</div>
            </div>

            <!-- Role -->
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" id="role" class="form-select" required>
                    <option value="">Pilih Role</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <div class="invalid-feedback">Role harus dipilih.</div>
            </div>

            <!-- Photo -->
            <div class="mb-3">
                <label for="photo" class="form-label">Profile Photo (Optional)</label>
                <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
            </div>

            <button type="submit" class="form-btn btn btn-primary">Save</button>
        </form>
    </div>
</div>

    <!-- Bootstrap Bundle JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+AM/Jp3pLwE21DknLomyn5uHybz9I" crossorigin="anonymous"></script>

    <script>
        // JavaScript untuk validasi form
        (function() {
            'use strict'

            // Ambil semua form dengan class 'needs-validation'
            var forms = document.querySelectorAll('.needs-validation')

            // Loop melalui setiap form dan tambahkan event listener submit
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
