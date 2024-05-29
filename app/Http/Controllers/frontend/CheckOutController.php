<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\orderRequest;
use App\Mail\OrderConfirm;
use App\Models\Billing;
use App\Models\District;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\Upazila;
use App\Notifications\InvoiceNotification;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller {

    public function checkoutPage() {

        $carts       = \Cart::getContent();
        $total_price = \Cart::getSubTotal();
        $district    = District::select( 'id', 'name', 'bn_name' )->get();
        $user_data   = Auth::user();

        return view( 'frontend.pages.checkout', compact( 'carts', 'total_price', 'district', 'user_data' ) );

    }

    // public function directOrder() {

    //     $carts       = \Cart::getContent();
    //     $total_price = \Cart::getSubTotal();
    //     $district    = District::select( 'id', 'name', 'bn_name' )->get();
    //     $user_data   = Auth::user();

    //     return view( 'frontend.pages.wholeSale_checkout', compact( 'carts', 'total_price', 'district', 'user_data' ) );

    // }

    public function loadAjax( $district_id ) {

        $upazila = Upazila::where( 'district_id', $district_id )->select( 'id', 'name' )->get();
        return response()->json( $upazila, 200 );

    }

    public function placeOrder( orderRequest $request ) {

        // dd( $request->all() );

        $billing = Billing::create( [

            'name'        => $request->name,
            'email'       => $request->email,
            'mobile'      => $request->phone,
            'district_id' => $request->district_id,
            'upazila_id'  => $request->upazila_id,
            'address'     => $request->address,
            'message'     => $request->massage,

        ] );

        $order = Order::create( [

            'user_id'         => auth()->id(),
            'billing_id'      => $billing->id,
            'sub_total'       => Session::get( 'coupon' )['cart_total'] ?? \Cart::getSubTotal(),
            'discount_amount' => Session::get( 'coupon' )['discount_amount'] ?? 0,
            'coupon_name'     => Session::get( 'coupon' )['coupon_name'] ?? 0,
            'total'           => Session::get( 'coupon' )['balance'] ?? \Cart::getSubTotal(),

        ] );

        foreach ( \Cart::getContent() as $value ) {

            OrderDetails::create( [

                'order_id'      => $order->id,
                'user_id'       => auth()->id(),
                'product_id'    => $value->id,
                'product_qty'   => $value->quantity,
                'product_price' => $value->price,

            ] );

            //product strock decrement
            Product::find( $value->id )->decrement( 'product_stock', $value->quantity );
            //cart destroy
            \Cart::remove( $value->id );
            //session destroy
            Session::forget( 'coupon' );
        }

        $order_data = Order::whereId( $order->id )->with( 'billing', 'orderDetails' )->first();
        $user_data     = Auth::user();

        // dd($order_confirm);

        // Mail::to( $request->email )->send( new OrderConfirm( $order_confirm, $user_data ) );
        // Notification::route('mail','ekramulshawon1@gmail.con')->notify();
        $user = Auth::user();
        // $user->notify(new InvoiceNotification());
        Notification::send($user, new InvoiceNotification($order_data,$user_data));

        Toastr::success( 'your order placed successfully', 'success' );
        return redirect()->route( 'customer.profile' );
    }

}
