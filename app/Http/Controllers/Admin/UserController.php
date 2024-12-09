<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    $role = $request->input('role', 'admin'); // Default ke admin
    $query = User::query();

    if ($role !== 'all') {
        $query->where('role', $role);
    }

    $users = $query->paginate(5)->appends(['role' => $role]); // Tambahkan role ke query string

    return view('admin.users.index', compact('users', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validasi data
    $request->validate([
        'name' => 'required|string|max:50',
        'email' => 'required|email|unique:users,email', // Validasi email sudah ada
        'password' => 'required|min:6',
        'role' => 'required|in:admin,user', // Validasi role
        'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
    ]);

    // Menyimpan data user
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = bcrypt($request->password); // Enkripsi password
    $user->role = $request->role; // Menyesuaikan role dari input form

    // Menangani upload foto
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $user->photo = $photoPath; // Simpan path foto
    }

    $user->save();

    // Redirect ke halaman admin/users dengan notifikasi sukses
    return redirect()->route('admin.users.index')->with('success', 'User successfully added.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // Max 5MB
    ]);

    $user = User::findOrFail($id);

    // Update data user
    $user->name = $request->name;
    $user->email = $request->email;

    // Jika ada permintaan untuk menghapus foto
    if ($request->has('delete_photo') && $request->delete_photo == 'true') {
        if ($user->photo) {
            // Hapus foto dari storage
            Storage::delete('public/' . $user->photo);
            $user->photo = null; // Reset foto di database
        }
    }

    // Jika ada foto baru yang diunggah
    if ($request->hasFile('photo')) {
        if ($user->photo) {
            // Hapus foto lama sebelum menyimpan foto baru
            Storage::delete('public/' . $user->photo);
        }
        $user->photo = $request->file('photo')->store('photos', 'public');
    }

    $user->save();

    return redirect()->route('admin.users.index')->with('success', 'User data updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    // Cari user berdasarkan ID
    $user = User::findOrFail($id);

    // Hapus foto dari storage, jika ada
    if ($user->photo) {
        Storage::delete('public/' . $user->photo); // Pastikan path file sesuai dengan konfigurasi storage Anda
    }

    // Hapus user dari database
    $user->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }

}
