<div class="mt-10">
    <h1 class="text-2xl font-bold mb-6">Create Delivery</h1>
    <form action="{{ route('deliveries.store') }}" method="POST">
        @csrf
        <!-- Delivery Details Section -->
        <div class="mb-4">
            <label for="pickup_address" class="block text-sm font-medium text-gray-700">Pickup Address</label>
            <input type="text" name="pickup_address" id="pickup_address"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('pickup_address')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="pickup_name" class="block text-sm font-medium text-gray-700">Pickup Name</label>
            <input type="text" name="pickup_name" id="pickup_name"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('pickup_name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="pickup_contact_no" class="block text-sm font-medium text-gray-700">Pickup Contact No</label>
            <input type="text" name="pickup_contact_no" id="pickup_contact_no"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('pickup_contact_no')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="pickup_email" class="block text-sm font-medium text-gray-700">Pickup Email</label>
            <input type="email" name="pickup_email" id="pickup_email"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('pickup_email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="delivery_address" class="block text-sm font-medium text-gray-700">Delivery Address</label>
            <input type="text" name="delivery_address" id="delivery_address"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('delivery_address')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="delivery_name" class="block text-sm font-medium text-gray-700">Delivery Name</label>
            <input type="text" name="delivery_name" id="delivery_name"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('delivery_name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="delivery_contact_no" class="block text-sm font-medium text-gray-700">Delivery Contact No</label>
            <input type="text" name="delivery_contact_no" id="delivery_contact_no"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('delivery_contact_no')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="delivery_email" class="block text-sm font-medium text-gray-700">Delivery Email</label>
            <input type="email" name="delivery_email" id="delivery_email"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('delivery_email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="type_of_good" class="block text-sm font-medium text-gray-700">Type of Good</label>
            <select name="type_of_good" id="type_of_good"
                    class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
                <option value="">Select Type of Good</option>
                @foreach($typeofgoods as $key => $type)
                    <option value="{{ $key }}">{{ $type }}</option>
                @endforeach
            </select>
            @error('type_of_good')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="provider" class="block text-sm font-medium text-gray-700">Provider</label>
            <select name="provider" id="provider" class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm"
                    required>
                <option value="">Select Provider</option>
                @foreach($providers as $key => $provider)
                    <option value="{{ $key }}">{{ $provider }}</option>
                @endforeach
            </select>
            @error('provider')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
            <select name="priority" id="priority" class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm"
                    required>
                <option value="">Priority Provider</option>
                @foreach($priorities as $key => $priority)
                    <option value="{{ $key }}">{{ $priority }}</option>
                @endforeach
            </select>
            @error('priority')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="pickup_time" class="block text-sm font-medium text-gray-700">Pickup Time</label>
            <input type="datetime-local" name="pickup_time" id="pickup_time"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('pickup_time')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="shipment_ready_time" class="block text-sm font-medium text-gray-700">Shipment Ready Time</label>
            <input type="datetime-local" name="shipment_ready_time" id="shipment_ready_time"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('shipment_ready_time')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Separator -->
        <hr class="my-6 border-gray-300">

        <!-- Package Details Section -->
        <h2 class="text-xl font-bold mb-4">Package Details</h2>
        <div class="mb-4">
            <label for="package_description" class="block text-sm font-medium text-gray-700">Package Description</label>
            <textarea name="package_description" id="package_description"
                      class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required></textarea>
            @error('package_description')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="length" class="block text-sm font-medium text-gray-700">Length</label>
            <input type="number" name="length" id="length" step="0.01"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('length')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="height" class="block text-sm font-medium text-gray-700">Height</label>
            <input type="number" name="height" id="height" step="0.01"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('height')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="width" class="block text-sm font-medium text-gray-700">Width</label>
            <input type="number" name="width" id="width" step="0.01"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('width')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="weight" class="block text-sm font-medium text-gray-700">Weight</label>
            <input type="number" name="weight" id="weight" step="0.01"
                   class="mt-1 py-2 block w-full border-gray-300 rounded-md shadow-sm" required>
            @error('weight')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md shadow-sm hover:bg-indigo-500">
                Create
            </button>
        </div>
    </form>
</div>

