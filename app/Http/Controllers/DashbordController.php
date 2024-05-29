<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\DB;

class DashbordController extends Controller {
    public function dashbord() {

        $total_earning  = DB::table( 'orders' )->sum( 'total' );
        $total_order    = DB::table( 'orders' )->count();
        $total_category = DB::table( 'categories' )->count();
        $total_product  = DB::table( 'products' )->count();
        $total_user     = DB::table( 'users' )->where( 'role_id', 2 )->count();
        $order          = Order::with( 'billing', 'orderDetails' )->latest( 'id' )->paginate( 15 );

        $order_2021 = DB::table( 'orders' )->whereBetween( 'created_at', ['2021-01-01', '2021-12-31'] )->count();
        $order_2022 = DB::table( 'orders' )->whereBetween( 'created_at', ['2022-01-01', '2022-12-31'] )->count();
        $order_2023 = DB::table( 'orders' )->whereBetween( 'created_at', ['2023-01-01', '2023-12-31'] )->count();

        $order_year_wise = array( $order_2021, $order_2022, $order_2023 );

        // return $order_2021;
        return view( 'backend.pages.dashbord', compact( 'total_earning', 'total_order', 'total_category', 'total_product', 'total_user', 'order', 'order_year_wise' ) );
    }
}
