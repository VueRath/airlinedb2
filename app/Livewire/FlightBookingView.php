<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flight;
use Livewire\Attributes\Layout;

class FlightBookingView extends Component
{
    #[Layout('layouts.app')]
    public function edit($id)
    {
        return redirect()->route('flights.edit', ['id' => $id]);
    }

    public function delete($id)
    {
        $flight = Flight::find($id);
        $flight->delete();
        session()->flash('message', 'Flight deleted successfully!');
    }

    public function render()
    {
        $flights = Flight::all();
        return view('livewire.flight-booking-view', compact('flights'));
    }
}
