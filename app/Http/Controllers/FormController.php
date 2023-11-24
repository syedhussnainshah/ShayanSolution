<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailHeaderForm;
use Illuminate\Http\Request;


class FormController extends Controller
{
    //
    public function headerformstore(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]+$/',
            'projectDetails' => 'required|string',
        ]);
        try {

            $newData = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'projectDetails' => $request->input('projectDetails'),
            ];
            // Define the path to your JSON file
            $filePath = storage_path('app/public/JsonDatabase/HeaderFormData.json'); // Adjust the path as needed

            // Check if the file exists and decode its current content
            $currentData = [];
            if (file_exists($filePath)) {
                $currentData = json_decode(file_get_contents($filePath), true);
                if (!is_array($currentData)) {
                    throw new \Exception('Existing data is not in array format.');
                }
            }
            // Append the new data to the existing data
            $currentData[] = $newData;

            // Encode the merged data as JSON
            $jsonData = json_encode($currentData);

            // Write the JSON data to the file
            if (file_put_contents($filePath, $jsonData) !== false) {
                dispatch(new SendEmailHeaderForm($newData));
                // Mail::to('hussnain.shayansolutions@gmail.com')->send(new MailToAdminFormSub($newData));
                // Mail::to($request->input('email'))->send(new MailToClientFormSub());
                return response()->json([
                    'status' => 'success',
                    'message' => 'Data saved successfully',
                ]);
            } else {
                throw new \Exception('Failed to write data to JSON file.');
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Data saved successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
