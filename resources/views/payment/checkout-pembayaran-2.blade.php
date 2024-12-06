<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,width=device-width">
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;600&display=swap">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('asset/faviconlogo.png') }}">
    <title>Pembayaran Paket Mentoring</title>

</head>

<body>
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="display-6 fw-bold">Pembayaran Paket <span style="color: #ba4e8a">Mentoring</span></h1>
        </div>
        
        <!-- Progress Bar Section -->
        <div class="mb-5">
            <div class="progress" style="height: 30px;">
                <div class="progress-bar" style="width: 33%; background-color: #ba4e8a;">Paket</div>
                <div class="progress-bar" style="width: 33%; background-color: #ba4e8a;">Pembayaran</div>
                <div class="progress-bar bg-secondary" style="width: 34%;">Konfirmasi</div>
            </div>
        </div>

        <div class="container py-5">
            <div class="text-center mb-4">
                <h2 class="fw-bold">Pilih Mentor</h2>
            </div>
        
            <!-- Mentor List -->
            <div id="mentor-list" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($mentors as $mentor)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-img-wrapper" style="position: relative; padding-top: 133.33%; overflow: hidden;">
                            <img src="{{ asset($mentor->picture) }}" class="card-img-top" alt="{{ $mentor->name }}" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; height: auto;">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <!-- Mentor Name Box -->
                            <div class="d-flex align-items-center mb-3 border border-transparent p-2">
                                <h5 class="card-title mb-0">{{ $mentor->name }}</h5>
                            </div>
            
                            <!-- Mentor Age Box -->
                            <div class="d-flex align-items-center mb-3 border border-transparent p-2">
                                <p class="card-text mb-0">Age: {{ $mentor->age }}</p>
                            </div>
            
                            <!-- Mentor Description Box -->
                            <div class="d-flex align-items-center mb-3 border border-transparent p-2">
                                <p class="card-text mb-0">{{ $mentor->description }}</p>
                            </div>
            
                            <!-- Button Box -->
                            <div class="d-flex align-items-center mb-3 border border-transparent p-2">
                                <button id="mentor-button-{{ $mentor->id }}" class="btn btn-primary w-100" onclick="selectMentor({{ $mentor->id }})">
                                    Pilih Mentor
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                {{ $mentors->links('pagination::bootstrap-4') }} <!-- Use Bootstrap 4 for pagination -->
            </div>            
        </div>
        
        <!-- Payment Methods Section -->
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bank Transfer</h5>
                        <p class="card-text text-muted">| Menerima dari semua Bank</p>
                        <button class="btn btn-primary w-100 CircleButton" style="background-color: #ba4e8a;" onclick="changeColor(event, true)">
                            Pilih Bank Transfer
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pilih Tanggal</h5>
                        <p class="card-text text-muted">Pilih tanggal untuk sesi mentoring</p>
                        <!-- Date Picker Input -->
                        <input type="date" class="form-control" id="dateSelection" onchange="checkDateSelection()">
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Payment Details -->
        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $package['name'] }}</h5>
                        <div class="d-flex justify-content-between">
                            <span>SubTotal:</span>
                            <span>{{ $package['price'] }}</span>
                            </div>
                            <div class="d-flex justify-content-between fw-bold">
                            <span>Total:</span>
                            <span>{{ $package['price'] }}</span>
                        </div>

                    <form class="mt-3">
                        <div class="mb-3">
                            <label for="bankNameDropdown" class="form-label">Pilih Bank</label>
                            <select id="bankNameDropdown" class="form-select" oninput="checkForm()" disabled>
                                <option value="">Pilih Bank</option>
                                <option value="Bank Mandiri">Bank Mandiri</option>
                                <option value="BRI">BRI</option>
                                <option value="BCA">BCA</option>
                                <option value="BNI">BNI</option>
                                <option value="BTN">BTN</option>
                                <option value="BSI">BSI</option>
                                <option value="CIMB Niaga">CIMB Niaga</option>
                                <option value="Permata Bank">Permata Bank</option>
                                <option value="OCBC NISP">OCBC NISP</option>
                                <option value="Citibank">Citibank</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="input2" class="form-label">Virtual Account</label>
                            <input id="input2" class="form-control" placeholder="Masukkan Nomor VA" type="number" step="1" min="0" readonly oninput="checkVAInput()">
                        </div>
                        <div id="qrcode" class="text-center mt-4" style="display:none"></div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="d-flex justify-content-between mt-4">
            <button class="btn btn-outline-danger" onclick="redirectToPlansLogin()">Batal Order</button>
            <button class="btn btn-primary container-checkout" id="confirmOrderBtn" onclick="redirectToConfirmationPage()" disabled>Konfirmasi Order</button>
        </div>
    </div>

    <!-- Include Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        // Function to enable dropdown
        function changeColor(event, enableDropdown) {
            const dropdown = document.getElementById('bankNameDropdown');
            const input2 = document.getElementById('input2');
            if (enableDropdown) {
                dropdown.disabled = false; // Enable the dropdown
                input2.readOnly = false;  // Allow input
            }
        }

        // Placeholder functions for actions
        function redirectToPlansLogin() {
            window.location.href = 'plans-login';  // Replace with the correct URL path for the plans login page
        }

        function redirectToConfirmationPage() {
            window.location.href = 'confirmation-page';
        }

        function checkForm() {
            // Perform form validation (optional, customize as needed)
        }

        let selectedMentorId = null;

        // On page load, check if there's a previously selected mentor in localStorage
        window.onload = function() {
            // Get the selected mentor ID from localStorage
            const storedMentorId = localStorage.getItem('selectedMentorId');

            if (storedMentorId) {
                selectedMentorId = storedMentorId;  // Set the selectedMentorId from localStorage

                // Update the button style for the selected mentor
                const mentorButton = document.getElementById(`mentor-button-${selectedMentorId}`);
                if (mentorButton) {
                    mentorButton.style.backgroundColor = '#ba4e8a';  // Set the button color for the selected mentor
                }
            }
        };

        // Function to select a mentor
        function selectMentor(mentorId) {
            // If a mentor is already selected, reset the background color of that mentor's button
            if (selectedMentorId && selectedMentorId !== mentorId) {
                const previousMentorButton = document.getElementById(`mentor-button-${selectedMentorId}`);
                if (previousMentorButton) {
                    previousMentorButton.style.backgroundColor = ''; // Reset previous mentor's button color
                }
            }

            // Set the selected mentor and update the button color
            selectedMentorId = mentorId;
            const mentorButton = document.getElementById(`mentor-button-${mentorId}`);
            if (mentorButton) {
                mentorButton.style.backgroundColor = '#ba4e8a';  // Set the button color for the selected mentor
            }

            // Store the selected mentor ID in localStorage
            localStorage.setItem('selectedMentorId', mentorId);
        }

        // Function to handle VA input and enable the confirm button
        function checkVAInput() {
            const inputVA = document.getElementById('input2');
            const confirmButton = document.getElementById('confirmOrderBtn');
            if (inputVA.value.trim() !== '') {
                confirmButton.disabled = false;  // Enable the confirm button
            } else {
                confirmButton.disabled = true;  // Disable the confirm button if VA is empty
            }
        }
    </script>
</body>

</html>
