<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CampainController extends Controller
{

    public function c7() 
    {
        return view('campains.c7');
    }


    public function c7Post(Request $request) 
    {

        $request->validate([
            'name' => 'required|string|min:3|max:120',
            'surname' => 'required|string|min:3|max:120',
            'email' => 'required|email|min:6|max:150',
            'phone' => 'required|string|min:6|max:20',
        ], 
        [
            'name.required' => 'Your name is required.',
            'name.min' => 'Your name is too short.',
            'name.max' => 'Your name is too long.',
            'surname.required' => 'Your surname is required.',
            'surname.min' => 'Your surname is too short.',
            'surname.max' => 'Your surname is too long.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.min' => 'Email is too short.',
            'email.max' => 'Email is too long.',
            'phone.required' => 'Phone number is required.',
            'phone.min' => 'Phone number is too short.',
            'phone.max' => 'Phone number is too long.',
        ]);


        $responce = Http::withoutVerifying()->post('https://ovidenta.eu/api/campaign', [
            'token' => '1.ac7dc16d18ac1dc7ced829840015fc7e462d4cf8aba228eaf6b35281226ddfb3',
            'campaign' => 'campaign-7',
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ]);



        $json = $responce->json();

        if ($json['success'] !== true) {
            echo '<h1>Error</h1>';
            echo '<p>There was an error submitting the form. Please try again later.</p>';
            echo '<p>Error message: ' . $json['message'] . '</p>';
        } else {
            return redirect()->route('campain.7')->with('success', 'Form submitted successfully!');
        }


    }


}
