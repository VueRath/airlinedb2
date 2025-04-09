<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flight;
use Livewire\Attributes\Layout;

class FlightBookingCreate extends Component
{

    #[Layout('layouts.app')]
    public $flight_name, $departure_date;

    public function bookFlight()
    {
        Flight::create([
            'flight_name' => $this->flight_name,
            'departure_date' => $this->departure_date,
            'payment_status' => 'pending',
        ]);

        session()->flash('message', 'Flight booked successfully!');
        return redirect()->route('flights.view');
    }

    public function render()
    {
        return view('livewire.flight-booking-create');
    }
}
