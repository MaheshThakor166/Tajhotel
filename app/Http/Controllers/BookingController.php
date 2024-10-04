<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Booking form ko dikhane ke liye function
    public function showForm() {
        return view('include.bookingprocess');
    }

    // Form data process karne aur room category page pe redirect karne ke liye function
    public function processForm(Request $request) {
        // Validate karein form data ko
        $validatedData = $request->validate([
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'adults' => 'required|array',
            'children' => 'required|array',
        ]);

        // Form data extract karein
        $checkIn = $validatedData['check_in'];
        $checkOut = $validatedData['check_out'];
        $adults = array_sum($validatedData['adults']);
        $children = array_sum($validatedData['children']);
        $totalRooms = count($validatedData['adults']);

        // Yaha aap data ko process kar sakte hain (jaise ki availability check karna, prices calculate karna, etc.)

        // Room category page par redirect karein, aur data pass karein
        return redirect()->route('room.category')->with([
            'check_in' => $checkIn,
            'check_out' => $checkOut,
            'total_rooms' => $totalRooms,
            'total_adults' => $adults,
            'total_children' => $children
        ]);
    }
}
