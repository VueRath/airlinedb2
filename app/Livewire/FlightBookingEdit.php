<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flight;
use Livewire\Attributes\Layout;

class FlightBookingEdit extends Component
{
    public $flight_id, $accomodation, $origin, $destination, $departure_date, $passenger_name, $age, $email, $contact, $amount;

    #[Layout('layouts.app')]
    public function mount($id)
    {
        $flight = Flight::find($id);
        $this->flight_id = $flight->id;
        $this->accomodation = $flight->accomodation;
        $this->origin = $flight->origin;
        // $this->destination = $flight->destination;
        $this->departure_date = $flight->departure_date;
        $this->passenger_name = $flight->passenger_name;
        $this->age = $flight->age;
        $this->email = $flight->email;
        $this->contact = $flight->contact;
        $this->amount = $flight->amount;
    }

    public function updateFlight()
    {

        $flight = Flight::find($this->flight_id);
        $flight->update([
            'accomodation' => $this->accomodation,
            'origin' => $this->origin,
            // 'destination' => $this->destination,
            'departure_date' => $this->departure_date,
            'passenger_name' => $this->passenger_name,
            'age' => $this->age,
            'email' => $this->email,
            'contact' => $this->contact,
            'amount' => $this->amount,
        ]);

        session()->flash('message', 'Flight updated successfully!');
        return redirect()->route('flights.view');
    }

    public function render()
    {
        return view('livewire.flight-booking-edit');
    }
}
