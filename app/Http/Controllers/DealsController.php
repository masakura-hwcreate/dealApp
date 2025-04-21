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

            $totalSales = $deals->sum('sales_amount');
            $totalCost = $deals->sum('cost_amount');
            $totalProfit = $totalSales - $totalCost;

            return view('deals.index', compact('deals', 'totalSales', 'totalCost', 'totalProfit'));
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

        $request->validate([
            'cliant_name' => ['required', 'string', 'max:25'],
            'products' => ['required', 'string', 'max:25'],
            'confidence' => ['required', 'string', 'max:3'],
            'payment_method' => ['required', 'string', 'max:10'],
            'sales_amount' => ['required', 'integer', 'digits_between:1,10'],
            'cost_amount' => ['required', 'integer', 'digits_between:1,10'],
            'estimated_month' => ['required', 'date', 'max:20'],
        ]);

        Deal::create([
            'user_id' => Auth::id(),
            'cliant_name' => $request->cliant_name,
            'products' => $request->products,
            'confidence' => $request->confidence,
            'payment_method' => $request->payment_method,
            'sales_amount' => $request->sales_amount,
            'cost_amount' => $request->cost_amount,
            'estimated_month' => $request->estimated_month,
        ]);

        return redirect()->route('deals.index');
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
