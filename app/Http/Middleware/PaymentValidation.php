<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->validate([
            'Hno'=>'required',
        ]);

        if ($request['payment'] == "COD") {
            return $next($request);
        } else {
            session()->put('payment_data', $request->all());
            return redirect('/payment/get');
        }
    }
}
