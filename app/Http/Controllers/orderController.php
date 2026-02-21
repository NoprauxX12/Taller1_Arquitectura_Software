<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class orderController extends Controller
{
    public function index(): View
    {
        return view('order.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'total' => 'required',
            'status' => 'required|in:pending,completed,cancelled',
            'can_be_cancelled' => 'nullable|boolean',
            'created_at' => 'nullable|date',
            'updated_at' => 'nullable|date',
        ]);

        $request['can_be_cancelled'] = (bool) ($request->input('can_be_cancelled', 0));
        if (empty($request['created_at'])) {
            $request['created_at'] = now();
        }
        if (empty($request['updated_at'])) {
            $request['updated_at'] = now();
        }
        Order::create($request->only('total', 'status', 'can_be_cancelled', 'created_at', 'updated_at'));

        return redirect()->route('order.success');
    }

    public function success(): View
    {
        return view('order.success');
    }

    public function list(): View
    {
        $viewData = [];
        $viewData['Orders'] = Order::all();

        return view('order.list')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $product = Order::findOrFail($id);
        $viewData['Order'] = $product;

        return view('order.show')->with('viewData', $viewData);
    }

    public function delete(string $id): RedirectResponse
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('order.list')->with('success', 'Order deleted successfully.');
    }
}
