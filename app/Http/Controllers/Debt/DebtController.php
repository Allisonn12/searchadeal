<?php

namespace App\Http\Controllers\Debt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class DebtController extends Controller
{
    public function index(){
        return view('debt');
    }
    public function submit(Request $request){
        // dd(request()->all());
        // $request->validate([
        //     'firstname' => 'required|string',
        //     'lastname' => 'required|string',
        //     'phone1' => 'required|string',
        //     'optinurl' => 'required|url',
        //     'optindate' => 'required|date_format:d/m/Y H:i:s',
        //     'channel' => 'required|string',
        //     'product' => 'required|string',
        //     'leadsource' => 'required|string',
        //     'affiliateshortcode' => 'required|string',
        //     'acceptterms' => 'required|in:true,false',
        //     'offer_id' => 'required|integer',
        // ]);
        $data = request()->all();

        // Submit the form data to the API
         $response = Http::asForm()->post('https://returnxdigital.leadbyte.co.uk/api/submit.php', array_merge($data, [
            'campid' => 'DEBT-WHITE-LABEL',
            'sid' => '25154',
            'returnjson' => 'yes',
        ]));

        // Handle the API response
        $responseBody = $response->json();
        // dd($responseBody);


        if ($responseBody['code'] == 1) {
            return redirect()->back()->with('success', 'Form submitted successfully!');
        } else {
            return redirect()->back()->with('error', 'Submission failed: ' . $responseBody['response']);
        }
    }
}
