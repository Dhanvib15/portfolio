<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        try {
            $validated = $request->validated();
            
            // Extract only the fields we need and ensure they are strings
            $contactData = [
                'name' => (string) ($validated['name'] ?? ''),
                'email' => (string) ($validated['email'] ?? ''),
                'phone' => isset($validated['phone']) && !empty($validated['phone']) ? (string) $validated['phone'] : null,
                'service' => isset($validated['service']) && !empty($validated['service']) ? (string) $validated['service'] : null,
                'timeline' => isset($validated['timeline']) && !empty($validated['timeline']) ? (string) $validated['timeline'] : null,
                'message' => (string) ($validated['message'] ?? ''),
            ];
            
            Mail::to('dhanvibhadiyadra15@gmail.com')->send(new ContactMail($contactData));

            return response()->json([
                'success' => true,
                'message' => 'Thank you for contacting me! I will get back to you soon.'
            ], 200);
        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());
            Log::error('Contact form error trace: ' . $e->getTraceAsString());
            
            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again later.'
            ], 500);
        }
    }
}

