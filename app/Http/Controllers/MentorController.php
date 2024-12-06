<?php

namespace App\Http\Controllers;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MentorController extends Controller
{
    public function index()
    {
        // Fetch all mentors
        $mentors = Mentor::all();
        return response()->json($mentors);
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
    // Fetch paginated mentors (e.g., 3 mentors per page)
    $mentors = Mentor::paginate(6);
    
    // Return the view with paginated mentors
    return view('payment.plans-login', compact('mentors'));
}

}

