<div>
    <form wire:submit.prevent="bookFlight">
        <div class="form-group">
            <label for="flight_name">Flight Name</label>
            <input type="text" id="flight_name" wire:model="flight_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="departure_date">Departure Date</label>
            <input type="date" id="departure_date" wire:model="departure_date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Book Flight</button>
    </form>
</div>
