<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SellerRequest;

class SellerRequestController extends Controller
{
    public function create()
    {
        return view('seller.request.create');
    }

    // Store the seller request
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'nullable|string',
        ]);

        SellerRequest::create([
            'user_id' => auth()->id(),
            'message' => $request->input('message'),
            'status' => 'pending',
        ]);

        return redirect()->route('customer.dashboard')->with('success', 'Your request to become a seller has been submitted.');
    }

    // Show all seller requests to admin
    public function index()
    {
        $requests = SellerRequest::with('user')->where('status', 'pending')->get();
        return view('admin.seller.requests', compact('requests'));
    }

    public function approve($id)
{
    $sellerRequest = SellerRequest::findOrFail($id);
    $sellerRequest->update(['status' => 'approved']);

    // Update user role to seller
    User::find($sellerRequest->user_id)->update(['role' => 'seller']);

    return redirect()->route('admin.seller.requests')->with('success', 'Seller request approved.');
}

    // Reject a seller request
    public function reject($id)
    {
        $sellerRequest = SellerRequest::findOrFail($id);
        $sellerRequest->update(['status' => 'rejected']);

        return redirect()->route('admin.seller.requests')->with('success', 'Seller request rejected.');
    }
}
