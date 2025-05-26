<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function convert(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        $path = $request->file('csv_file')->getRealPath();
        $file = fopen($path, 'r');

        $header = fgetcsv($file);
        $data = [];

        while (($row = fgetcsv($file)) !== false) {
            $data[] = array_combine($header, $row);
        }

        fclose($file);

        $jsonContent = json_encode($data, JSON_PRETTY_PRINT);

        // Crear archivo temporal
        $filename = 'converted_' . time() . '.json';
        $tempPath = storage_path("app/public/{$filename}");

        file_put_contents($tempPath, $jsonContent);

        return response()->download($tempPath)->deleteFileAfterSend(true);
    }

}
