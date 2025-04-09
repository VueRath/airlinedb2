<div>
    <h3>Payment Confirmation</h3>
    <p>Flight: {{ $flight_name }}</p>
    <p>Amount: ${{ $amount }}</p>

    <button wire:click="processPayment" class="btn btn-success">Confirm Payment</button>
</div>
