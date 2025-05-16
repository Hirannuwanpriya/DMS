<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    // Display a listing of the deliveries
    public function index()
    {
        //get all delivery records and paginate with 10
         $deliveries = Delivery::with('package')->paginate(10);

        return view('dashboard', compact('deliveries'));
    }

    // Show the form for creating a new delivery
    public function create()
    {

        $providers = \App\Enum\Provider::all();
        $priorities = \App\Enum\Priority::all();
        $typeofgoods = \App\Enum\TypeOfGood::all();

        return view('deliveries.create',
        compact('providers', 'priorities', 'typeofgoods'));
    }

    // Store a newly created delivery in storage
    public function store(Request $request)
    {
        $data = $request->validate([
            'pickup_address' => 'required|string|max:255',
            'pickup_name' => 'required|string|max:255',
            'pickup_contact_no' => 'required|string|max:15',
            'pickup_email' => 'required|email|max:255',
            'delivery_address' => 'required|string|max:255',
            'delivery_name' => 'required|string|max:255',
            'delivery_contact_no' => 'required|string|max:15',
            'delivery_email' => 'required|email|max:255',
            'type_of_good' => 'required|integer',
            'provider' => 'required|integer',
            'priority' => 'required|integer',
            'pickup_time' => 'required|date',
            'shipment_ready_time' => 'required|date',
            'package_description' => 'required|string|max:500',
            'length' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'width' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
        ]);

        $delivery = Delivery::create($data);

        //save the package details
        $delivery->package()->create([
            'delivery_id' => $delivery->id,
            'description' => $data['package_description'],
            'length' => $data['length'],
            'height' => $data['height'],
            'width' => $data['width'],
            'weight' => $data['weight'],
        ]);

        session()->flash('success', 'Delivery created successfully!');
        return redirect()->route('dashboard')->with('success', 'Delivery created successfully!');
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

        return redirect()->route('dashboard')->with('success', 'Delivery updated successfully!');
    }

    // Remove the specified delivery from storage
    public function destroy(Delivery $delivery)
    {
        $delivery->delete();

        return redirect()->route('dashboard')->with('success', 'Delivery deleted successfully!');
    }
}
