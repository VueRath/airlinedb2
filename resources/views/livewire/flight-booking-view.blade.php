<div>
    <h3>Your Booked Flights</h3>
    <ul>
        @foreach($flights as $flight)
            <li>
                {{ $flight->flight_name }} - {{ $flight->departure_date }}
                @if($flight->payment_status == 'pending')
                    <span class="badge badge-warning">Pending</span>
                @else
                    <span class="badge badge-success">Paid</span>
                @endif
                <button wire:click="edit({{ $flight->id }})" class="btn btn-primary">Edit</button>
                <button wire:click="delete({{ $flight->id }})" class="btn btn-danger">Delete</button>
            </li>
        @endforeach
    </ul>
</div>
