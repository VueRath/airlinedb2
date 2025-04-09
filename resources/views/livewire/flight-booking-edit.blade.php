<div class="container mx-auto mt-8 p-4">
    <h3 class="text-center text-2xl font-bold mb-6">Update Flight Details</h3>
    <form wire:submit.prevent="updateFlight" class="bg-white p-6 rounded-lg shadow-lg">
        <div class="mb-4">
            <label for="flight_name" class="block text-sm font-semibold text-gray-700">Flight Name</label>
            <input type="text" id="flight_name" wire:model="flight_name" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required placeholder="Enter flight name">
        </div>

        <div class="mb-4">
            <label for="departure_date" class="block text-sm font-semibold text-gray-700">Departure Date</label>
            <input type="date" id="departure_date" wire:model="departure_date" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        </div>

        <div class="mb-4">
            <label for="passenger_name" class="block text-sm font-semibold text-gray-700">Passenger Name</label>
            <input type="text" id="passenger_name" wire:model="passenger_name" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required placeholder="Enter passenger's name">
        </div>

        <div class="mb-4">
            <label for="age" class="block text-sm font-semibold text-gray-700">Age</label>
            <input type="integer" id="age" wire:model="age" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none" required placeholder="Enter passenger's age">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
            <input type="email" id="email" wire:model="email" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required placeholder="Enter email address">
        </div>

        <div class="mb-4">
            <label for="contact" class="block text-sm font-semibold text-gray-700">Contact Number</label>
            <input type="text" id="contact" wire:model="contact" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required placeholder="Enter contact number">
        </div>

        <div class="text-center">
            <button type="submit" class="w-full py-3 px-6 bg-yellow-500 text-white text-lg rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">Update Flight</button>
        </div>
    </form>
</div>
