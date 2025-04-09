<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flight;
use Livewire\Attributes\Layout;

class FlightBookingEdit extends Component
{
    public $flight_id, $flight_name, $departure_date;
    #[Layout('layouts.app')]
    public function mount($id)
    {
        $flight = Flight::find($id);
        $this->flight_id = $flight->id;
        $this->flight_name = $flight->flight_name;
        $this->departure_date = $flight->departure_date;
    }

    public function updateFlight()
    {
        $flight = Flight::find($this->flight_id);
        $flight->update([
            'flight_name' => $this->flight_name,
            'departure_date' => $this->departure_date,
        ]);

        session()->flash('message', 'Flight updated successfully!');
        return redirect()->route('flights.view');
    }

    public function render()
    {
        return view('livewire.flight-booking-edit');
    }
}
