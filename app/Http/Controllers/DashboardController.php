<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        // TODO: replace with real queries once the Products / Preorders /
        // Customers modules exist, e.g. Preorder::where('status','pending')->count()
        $stats = [
            'pendingPreorders' => 0,
            'confirmedPreorders' => 0,
            'products' => 0,
            'customers' => 0,
            'suppliers' => 0,
        ];

        return view('dashboard', compact('stats'));
    }
}
