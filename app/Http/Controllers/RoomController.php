<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; // Room model ko import karo

class RoomController extends Controller
{
    public function index()
    {
        // Fetch all rooms from the database
        $rooms = Room::all(); // ya tum kisi specific criteria ke according fetch kar sakte ho

        return view('booking.roomcategory', compact('rooms')); // Pass the rooms data to the view
    }

    // public function store(Request $request)
    // {
    //     // Validate request inputs
    //     $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'price' => 'required|numeric',
    //         'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image
    //     ]);

    //     // Store images and save URLs in an array
    //     $imageUrls[] = '/storage/' . $imagePath; // Correct URL

    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $image) {
    //             // Store the image in the 'public/images' directory
    //             $imagePath = $image->store('images', 'public');
    //             $imageUrls[] = '/storage/' . $imagePath; // Store the public URL of the image
    //         }
    //     }

    //     // Create a new room entry in the database
    //     Room::create([
    //         'title' => $request->title,
    //         'description' => $request->description,
    //         'price' => $request->price,
    //         'images' => json_encode($imageUrls), // Store images as a JSON array
    //     ]);

    //     // Redirect back with a success message
    //     return redirect()->back()->with('success', 'Room added successfully!');
    // }

    public function store(Request $request)
    {
        // Validate request inputs
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image
        ]);

        // Store images and save URLs in an array
        $imageUrls = []; // Initialize the array to store image URLs

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Store the image in the 'public/images' directory
                $imagePath = $image->store('images', 'public');
                $imageUrls[] = '/storage/' . $imagePath; // Store the public URL of the image
            }
        }

        // Create a new room entry in the database
        Room::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'images' => json_encode($imageUrls), // Store images as a JSON array
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Room added successfully!');
    }


}
