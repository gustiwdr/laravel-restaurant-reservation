<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\DaftarLayanan;
use App\Models\Footer;
use App\Models\Product;

class Frontend extends Controller
{
    //
    public function home() {
        $modelabout = New About;
        $dataabout = $modelabout->get();

        $modelblog = New Blog;
        $datablog = $modelblog->get();

        $modelservice = New DaftarLayanan;
        $dataservice = $modelservice->get();

        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();
    
        // Mengirimkan array ke view
        return view('frontend.index', compact('dataabout', 'datablog', 'dataservice', 'datafooter'));
    }       

    public function about() {
        $modelabout = New About;
        $dataabout = $modelabout->get();

        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();

        return view('frontend.about', compact('dataabout', 'datafooter'));
    }

    public function booking() {
        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();

        return view('frontend.booking', compact('datafooter'));
    }

    public function service() {
        $modelservice = New DaftarLayanan;
        $dataservice = $modelservice->get();

        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();

        return view('frontend.service', compact('dataservice', 'datafooter'));
    }

    public function menu() {
        $products = \App\Models\Product::all();
    
        // Menyusun produk ke dalam beberapa tab, dengan setiap tab berisi maksimal 2 produk
        $tabs = [
            [
                'products' => $products->take(2),
            ],
            [
                'products' => $products->slice(2, 2),
            ],
        ];

        $modelproduct = New Product;
        $dataproduct = $modelproduct->get();

        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();
    
        return view('frontend.menu', compact('tabs', 'dataproduct', 'datafooter'));
    }

    public function contact() {
        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();

        return view('frontend.contact', compact('datafooter'));
    }

    public function team() {
        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();

        return view('frontend.team', compact('datafooter'));
    }

    public function testimonial() {
        $modelblog = New Blog;
        $datablog = $modelblog->get();
        
        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();

        return view('frontend.testimonial', compact('datablog', 'datafooter'));
    }

    // public function order() {
    //     $products = \App\Models\Product::all();
    
    //     // Menyusun produk ke dalam beberapa tab, dengan setiap tab berisi maksimal 2 produk
    //     $tabs = [
    //         [
    //             'products' => $products->take(2),
    //         ],
    //         [
    //             'products' => $products->slice(2, 2),
    //         ],
    //     ];

    //     $modelfooter = New Footer;
    //     $datafooter = $modelfooter->get();

    //     $modelproduct = New Product;
    //     $dataproduct = $modelproduct->get();

    //     return view('frontend.order', compact('tabs', 'datafooter', 'dataproduct'));
    // }

    public function form() {
        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();

        return view('frontend.reservation', compact('datafooter'));
    }

    public function orderDetail($id) {
        $modelfooter = New Footer;
        $datafooter = $modelfooter->get();
    
        $order = Booking::findOrFail($id);
    
        // Menggabungkan datafooter dan databooking ke dalam satu array untuk dikirimkan ke view
        return view('frontend.order-detail', compact('order', 'datafooter'));
    }
    
}
