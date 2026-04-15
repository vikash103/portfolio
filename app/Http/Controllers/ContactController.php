<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Save to Database
            Contact::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'message' => $validated['message'],
            ]);

            // Send Email (optional – wrap in try/catch to avoid breaking response)
            try {
                Mail::raw($validated['message'], function ($message) use ($validated) {
                    $message->to('vikas-mishra@samantechnosys.com')
                            ->subject('New Contact Message from ' . $validated['name'])
                            ->replyTo($validated['email']);
                });
            } catch (\Exception $e) {
                // Log email error but still return success for DB save
                \Log::error('Email sending failed: ' . $e->getMessage());
            }

            return response()->json([
                'success' => true,
                'message' => 'Thank you! I will get back to you soon.'
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }
}