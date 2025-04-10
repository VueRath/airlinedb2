<div class="container mx-auto mt-8 p-4">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h3 class="text-center text-2xl font-bold mb-6">Flight Booking Form</h3>
        <form wire:submit.prevent="bookFlight">

            <!-- Accommodation Dropdown -->
            {{-- <div class="mb-6">
                <label for="accommodation" class="block text-sm font-medium text-gray-700">Accommodation</label>
                <select id="accommodation" wire:model="accommodation" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" required>
                    <option value="">Select class</option>
                    <option value="Economy">Economy</option>
                    <option value="Business Class">Business Class</option>
                    <option value="First Class">First Class</option>
                </select>
            </div> --}}

            <!-- Origin Dropdown -->
            {{-- <div class="mb-6">
                <label for="origin" class="block text-sm font-medium text-gray-700">Origin</label>
                <select id="origin" wire:model="origin" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" required>
                    <option value="">Select origin</option>
                    <option value="United States">United States</option>
                    <option value="Germany">Germany</option>
                    <option value="Japan">Japan</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Australia">Australia</option>
                </select>
            </div> --}}

            <!-- Destination Dropdown -->
            {{-- <div class="mb-6">
                <label for="destination" class="block text-sm font-medium text-gray-700">Destination</label>
                <select id="destination" wire:model="destination" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" required>
                    <option value="">Select destination</option>
                    <option value="Canada">Canada</option>
                    <option value="France">France</option>
                    <option value="Singapore">Singapore</option>
                    <option value="South Africa">South Africa</option>
                    <option value="New Zealand">New Zealand</option>
                </select>
            </div> --}}

            <!-- Departure Date Field -->
            <div class="mb-6">
                <label for="departure_date" class="block text-sm font-medium text-gray-700">Departure Date</label>
                <input type="date" id="departure_date" wire:model="departure_date" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" required>
            </div>

            <!-- Passenger Name Field -->
            <div class="mb-6">
                <label for="passenger_name" class="block text-sm font-medium text-gray-700">Passenger Name</label>
                <input type="text" id="passenger_name" wire:model="passenger_name" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" required placeholder="Enter passenger's name">
            </div>

            <div class="mb-6">
                <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                <input type="number" id="age" wire:model="age" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" required placeholder="Enter passenger's age">
            </div>

            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="email" wire:model="email" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" required placeholder="Enter email address">
            </div>

            <!-- Contact Number Field -->
            <div class="mb-6">
                <label for="contact" class="block text-sm font-medium text-gray-700">Contact Number</label>
                <input type="text" id="contact" wire:model="contact" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" required placeholder="Enter contact number">
            </div>

            <!-- Submit Button -->
            <div class="mb-6 text-center">
                <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-3 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 text-lg">Book Flight</button>
            </div>
        </form>
    </div>
</div>
