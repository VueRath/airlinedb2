<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flight;
use Livewire\Attributes\Layout;

class FlightBookingPayment extends Component
{
    public $flight_name, $amount, $flight_id, $passenger_name, $age, $email, $contact;

    #[Layout('layouts.app')]
    public function mount($id)
    {
        $flight = Flight::findOrFail($id);
        $this->flight_id = $id;
        $this->flight_name = $flight->flight_name;
        // $this->amount = 200;
        $this->passenger_name = $flight->passenger_name;
        $this->age = $flight->age;
        $this->email = $flight->email;
        $this->contact = $flight->contact;
    }

    public function processPayment()
    {
        $flight = Flight::findOrFail($this->flight_id);
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
