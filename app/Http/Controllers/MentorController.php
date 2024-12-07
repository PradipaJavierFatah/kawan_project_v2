<?php

namespace App\Http\Controllers;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MentorController extends Controller
{
    public function index()
{
    // Fetch mentors with pagination (6 per page)
    $mentors = Mentor::paginate(6);  // This will return a paginated result

    // Menampilkan halaman dengan daftar mentor
    return view('mentor.mentor_list', compact('mentors'));
}

    // public function showMentors() {
    //     $mentors = Mentor::paginate(3); // Get 3 mentors per page
    //     return view('payment.checkout-pembayaran-1', compact('mentors'));
    // }

    public function showCheckoutPage($page)
{
    Log::info("Page parameter: $page");
    $data = [
        'mentors' => Mentor::paginate(3), // Paginate mentors by 3 per page
        'package' => $this->getPackageDetails($page), // Fetch package details based on the page
        'page' => $page,
    ];

    return view("payment.checkout-pembayaran-$page", $data);
}


private function getPackageDetails($page)
{
    // Define details for each page
    $packages = [
        1 => ['name' => 'Paket Dasar', 'price' => 'Rp 50.000'],
        2 => ['name' => 'Paket Standar', 'price' => 'Rp 150.000'],
        3 => ['name' => 'Paket Premium', 'price' => 'Rp 250.000'],
        4 => ['name' => 'Paket Ultimate', 'price' => 'Rp 350.000'],
    ];

    return $packages[$page] ?? ['name' => 'Unknown', 'price' => 'N/A'];
}

public function showPlansLogin()
{
    // Use paginate instead of get to fetch paginated mentors
    $mentors = Mentor::paginate(6);  // 6 mentors per page

    // Return the view with paginated mentors
    return view('payment.plans-login', compact('mentors'));
}



    #CRUD MENTOR
    // Menampilkan form untuk membuat mentor baru
    public function create()
    {
        return view('mentor.create_mentor');
    }

    // Menampilkan halaman untuk edit mentor
    public function edit($id)
    {
        $mentor = Mentor::findOrFail($id);
        return view('mentor.edit_mentor', compact('mentor'));
    }

    // Menyimpan data mentor
    public function store(Request $request)
{
    // Validasi data yang dikirim
    $validated = $request->validate([
        'name' => 'required|max:255',
        'age' => 'required|integer',
        'description' => 'required',
        'picture' => 'nullable|image|max:2048',  // Validasi gambar jika ada
    ]);

    // Menangani upload gambar jika ada
    if ($request->hasFile('picture')) {
        // Ambil file gambar
        $file = $request->file('picture');

        // Generate nama file unik
        $filename = time() . '-' . $file->getClientOriginalName();

        // Menyimpan gambar di folder public/asset/payment
        $file->move(public_path('asset/payment'), $filename);

        // Simpan path relatif gambar
        $validated['picture'] = 'asset/payment/' . $filename;
    }

    // Menyimpan mentor baru ke dalam database
    Mentor::create($validated);

    // Redirect ke halaman mentor_list setelah berhasil menyimpan
    return redirect()->route('mentor_list')->with('success', 'Mentor created successfully!');
}


    // Memperbarui mentor
public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer',
        'description' => 'required|string',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto opsional
    ]);

    $mentor = Mentor::findOrFail($id);

    // Jika ada file gambar baru, simpan dan update path-nya
    if ($request->hasFile('picture')) {
        // Menghapus file gambar lama jika ada (Opsional)
        if ($mentor->picture) {
            $oldImagePath = public_path($mentor->picture);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);  // Menghapus gambar lama
            }
        }

        // Menyimpan gambar baru ke folder public/asset/payment
        $file = $request->file('picture');
        $fileName = time() . '-' . $file->getClientOriginalName();
        $filePath = 'asset/payment/' . $fileName;

        // Memindahkan file gambar ke folder public/asset/payment
        $file->move(public_path('asset/payment'), $fileName);

        // Menyimpan path gambar relatif di database
        $mentor->picture = $filePath;
    }

    // Mengupdate data mentor lainnya
    $mentor->name = $request->name;
    $mentor->age = $request->age;
    $mentor->description = $request->description;

    $mentor->save();

    return redirect()->route('mentor_list')->with('success', 'Mentor updated successfully!');
}


    // Menghapus mentor
    public function destroy($id)
    {
    // Temukan mentor berdasarkan ID
    $mentor = Mentor::findOrFail($id);

    // Hapus gambar dari public jika ada
    if ($mentor->picture && file_exists(public_path($mentor->picture))) {
        unlink(public_path($mentor->picture));  // Hapus gambar
    }

    // Hapus mentor dari database
    $mentor->delete();

    return redirect()->route('mentor_list')->with('success', 'Mentor deleted successfully!');
}
}

