<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Deal;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DealsController extends Controller
{
    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $deals = Deal::select('id', 'user_id', 'cliant_name', 'products', 'payment_method', 'confidence', 'sales_amount', 'cost_amount', 'estimated_month',)
            ->where('user_id', Auth::id())
            ->orderBy('estimated_month', 'asc')
            ->get();

            return view('deals.index', compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('deals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
