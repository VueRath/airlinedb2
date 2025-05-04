<?php

namespace App\Livewire;

use App\Models\Flight;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Component;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

class ExportReport extends Component
{
    #[Layout('layouts.app')]
    public function exportDoc()
    {
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        // Assuming you have data to export
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

        // Download the generated file
        return response()->download($tempPath, $fileName)->deleteFileAfterSend(true);
    }

    public function render()
    {
        return view('livewire.export-report', 
        Flight::all());
    }
}
