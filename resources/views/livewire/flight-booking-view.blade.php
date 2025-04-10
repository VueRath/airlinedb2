<div class="container mx-auto mt-8 p-4">
    <h3 class="text-center text-2xl font-bold mb-6">Booked Flights</h3>
    <div class="overflow-x-auto shadow-lg rounded-lg bg-white p-4">
        <table class="min-w-full table-auto">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Origin</th>
                    {{-- <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Destination</th> --}}
                    <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Accommodation</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Departure Date</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Payment Status</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Passenger Name</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Age</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Email</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Contact</th>
                    <th class="px-4 py-2 text-sm font-medium text-gray-700 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($flights as $flight)
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-2 text-sm text-gray-700 text-center">{{ $flight->origin }}</td>
                        {{-- <td class="px-4 py-2 text-sm text-gray-700 text-center">{{ $flight->destination }}</td> --}}
                        <td class="px-4 py-2 text-sm text-gray-700 text-center">{{ $flight->accomodation }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700 text-center">{{ \Carbon\Carbon::parse($flight->departure_date)->format('d M Y, h:i A') }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700 text-center">
                            @if($flight->payment_status == 'pending')
                                <span class="inline-block px-3 py-1 text-xs font-semibold bg-yellow-200 text-yellow-800 rounded-full">Pending</span>
                            @else
                                <span class="inline-block px-3 py-1 text-xs font-semibold bg-green-200 text-green-800 rounded-full">Paid</span>
                            @endif
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700 text-center">{{ $flight->passenger_name }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700 text-center">{{ $flight->age }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700 text-center">{{ $flight->email }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700 text-center">{{ $flight->contact }}</td>
                        <td class="px-4 py-2 text-sm text-gray-700 text-center space-y-1">
                            <button wire:click="edit({{ $flight->id }})" class="w-full bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Edit</button>
                            <button wire:click="delete({{ $flight->id }})" class="w-full bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Delete</button>
                            <button onclick="window.location.href='{{ route('flights.payment', $flight->id) }}'" class="w-full bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Proceed To Payment</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
