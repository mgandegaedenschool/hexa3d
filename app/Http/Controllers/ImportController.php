<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\CsvData;
use Illuminate\Http\Request;
use App\Imports\ContactsImport;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\CsvImportRequest;
use Maatwebsite\Excel\HeadingRowImport;

class ImportController extends Controller
{
    public function parseImport(CsvImportRequest $request)
    {
        dd($request);
        if ($request->has('header')) {
            $headings = (new HeadingRowImport)->toArray($request->file('csv_file'));
            $data = Excel::toArray(new ContactsImport, $request->file('csv_file'))[0];
        } else {
            $data = array_map('str_getcsv', file($request->file('csv_file')->getRealPath()));
        }

        if (count($data) > 0) {
            $csv_data = array_slice($data, 0, 2);
            // dd($data);
            // $csv_data_file = User::create([
            //     // 'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
            //     // 'csv_header' => $request->has('header'),
            //     'csv_data' => json_encode($data)
            // ]);
            for ($i = 0; $i < count($data); $i++) {
                User::create([
                    'firstname' => $data[$i]['firstname'],
                    'lastname' => $data[$i]['lastname'],
                    'email' => $data[$i]['email'],
                    'password' => Hash::make($data[$i]['password']),
                    'username' => $data[$i]['username'],
                    'niv_etude' => $data[$i]['niv_etude'],
                    'classe' => $data[$i]['classe'],
                    'section' => $data[$i]['section'],
                    'sexe' => $data[$i]['sexe'],
                    'age' => $data[$i]['age'],
                    'scolarise' => $data[$i]['scolarise'],
                    'etablissement' => $data[$i]['etablissement'],
                    'salarie' => $data[$i]['salarie'],
                    'emploi_actuel' => $data[$i]['emploi_actuel'],
                    'specialite' => $data[$i]['specialite'],
                    'etat' => $data[$i]['etat'],
                    'emploi_envisage' => $data[$i]['emploi_envisage'],
                ]);
            }

            return redirect()->route('pro.index')->with('success', 'Import finished.');
        }
    }

    // public function processImport(Request $request)
    // {
    //     $data = CsvData::find($request->csv_data_file_id);
    //     $csv_data = json_decode($data->csv_data, true);
    //     foreach ($csv_data as $row) {
    //         $contact = new Contact();
    //         foreach (config('app.db_fields') as $index => $field) {
    //             if ($data->csv_header) {
    //                 $contact->$field = $row[$request->fields[$field]];
    //             } else {
    //                 $contact->$field = $row[$request->fields[$index]];
    //             }
    //         }
    //         $contact->save();
    //     }

    //     return redirect()->route('contacts.index')->with('success', 'Import finished.');
    // }
}
