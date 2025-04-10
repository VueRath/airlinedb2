<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flight;
use Livewire\Attributes\Layout;

class FlightBookingCreate extends Component
{

    #[Layout('layouts.app')]
    public $accomodation, $origin, $destination, $departure_date, $passenger_name, $age, $email, $contact, $amount;

    public function bookFlight()
    {

        Flight::create([
            'accomodation' => $this->accomodation ?? 'Economy',
            'origin' => $this->origin ?? 'Philippines',
            // 'destination' => $this->destination,
            'departure_date' => $this->departure_date,
            'payment_status' => 'pending',
            'passenger_name' => $this->passenger_name,
            'age' => $this->age,
            'email' => $this->email,
            'contact' => $this->contact,
        ]);

        session()->flash('message', 'Flight booked successfully!');
        return redirect()->route('flights.view');
    }

    public function render()
    {
        return view('livewire.flight-booking-create');
    }
}
