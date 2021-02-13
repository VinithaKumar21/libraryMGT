<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Subscription;
use App\Models\User;
class SubscriptionController extends Controller
{
    //
    public function getAllsubscriptions(){

    	$subscriptions = Subscription::all();
        
        return view('admin.subscription.subscriptions')->with(['subscriptions' => $subscriptions]);
    }
    
    public function deleteSubscription($id)
    {
    	$subscription = Subscription::findOrFail($id);

    	$subscription->delete();
    	return redirect('/subscriptions')->with('status', 'Subscription Entry Deleted');
    }
}
