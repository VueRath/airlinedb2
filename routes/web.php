<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\ExportReport;
use Illuminate\Support\Facades\Route;
use App\Livewire\FlightBookingCreate;
use App\Livewire\FlightBookingEdit;
use App\Livewire\FlightBookingPayment;
use App\Livewire\FlightBookingView;
use App\Models\Flight;
use Carbon\Carbon;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/flight-booking', FlightBookingCreate::class)->name('flights.create');
Route::get('/flight-booking/edit/{id}', FlightBookingEdit::class)->name('flights.edit')->middleware('auth');
Route::get('/flight-booking/payment/{id}', FlightBookingPayment::class)->name('flights.payment')->middleware('auth');
Route::get('/flight-booking/view', FlightBookingView::class)->name('flights.view')->middleware('auth');
Route::get('/export-report', ExportReport::class)->name('export-report');
Route::get('/export-word', function () {
    $phpWord = new PhpWord();
    $section = $phpWord->addSection();

    $flights = Flight::all();
    foreach ($flights as $flight) {
        $section->addText("Passenger: {$flight->passenger_name}");
        $section->addText("From: {$flight->origin}");
        $section->addText("Departure: " . Carbon::parse($flight->departure_date)->format('d M Y'));
        $section->addTextBreak(1);
    }

    $fileName = 'flight-report.docx';
    $tempPath = tempnam(sys_get_temp_dir(), 'word');
    $writer = IOFactory::createWriter($phpWord, 'Word2007');
    $writer->save($tempPath);

    return response()->download($tempPath, $fileName)->deleteFileAfterSend(true);
})->name('export.word');
    

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
