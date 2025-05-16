<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    // Display a listing of the deliveries
    public function index()
    {
        $deliveries = Delivery::all();

        return view('dashboard', compact('deliveries'));
    }

    // Show the form for creating a new delivery
    public function create()
    {
        return view('deliveries.create');
    }

    // Store a newly created delivery in storage
    public function store(Request $request)
    {
        $data = $request->validate([
            'pickup_address' => 'required|string|max:255',
            'delivery_address' => 'required|string|max:255',
            'type_of_good' => 'required|integer', // Assuming this is an enum-backed column
            'priority' => 'required|integer',
            'packages' => 'required|array', // Validate packages as an array
            'packages.*.weight' => 'required|numeric|min:0.1', // Validate each package's weight
            'packages.*.dimensions' => 'required|string|max:255', // Validate each package's dimensions
        ]);

        // Create the delivery
        $delivery = Delivery::create($data);

        // Save the packages
        foreach ($data['packages'] as $packageData) {
            $delivery->packages()->create($packageData);
        }

        return redirect()->route('deliveries.index')->with('success', 'Delivery and packages created successfully!');
    }

    // Display the specified delivery
    public function show(Delivery $delivery)
    {
        return view('deliveries.show', compact('delivery'));
    }

    // Show the form for editing the specified delivery
    public function edit(Delivery $delivery)
    {
        return view('deliveries.edit', compact('delivery'));
    }

    // Update the specified delivery in storage
    public function update(Request $request, Delivery $delivery)
    {
        $data = $request->validate([
            'pickup_address' => 'required|string|max:255',
            'delivery_address' => 'required|string|max:255',
            'type_of_good' => 'required|integer',
            'priority' => 'required|integer',
            // Add other validation rules as needed
        ]);

        $delivery->update($data);

        return redirect()->route('deliveries.index')->with('success', 'Delivery updated successfully!');
    }

    // Remove the specified delivery from storage
    public function destroy(Delivery $delivery)
    {
        $delivery->delete();

        return redirect()->route('deliveries.index')->with('success', 'Delivery deleted successfully!');
    }
}
