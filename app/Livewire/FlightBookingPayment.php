<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flight;
use Livewire\Attributes\Layout;

class FlightBookingPayment extends Component
{
    public $flight_name, $amount;
    #[Layout('layouts.app')]
    public function mount($flight_id)
    {
        $flight = Flight::find($flight_id);
        $this->flight_name = $flight->flight_name;
        $this->amount = 200;
    }

    public function processPayment()
    {
        $flight = Flight::where('flight_name', $this->flight_name)->first();
        $flight->payment_status = 'paid';
        $flight->save();

        session()->flash('message', 'Payment successful!');
        return redirect()->route('flights.view');
    }

    public function render()
    {
        return view('livewire.flight-booking-payment');
    }
}
