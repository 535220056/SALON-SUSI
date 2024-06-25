<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;  // Correctly import the Log facade

class PaymentController extends Controller
{
    public function process(Request $request)
    {
        $amount = $request->input('amount');
        
        // Simulate payment processing logic
        // In a real application, integrate with a payment gateway here
        
        // Example: Log the payment amount (for demonstration purposes)
        Log::info('Processing payment of amount: ' . $amount);
        
        // Redirect to the payment successful page
        return redirect()->route('paymentsuccessfull');
    }
}
