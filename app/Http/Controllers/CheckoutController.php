<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // ฟังก์ชันนี้จะแสดงหน้า checkout
    public function index()
    {
        // ส่งข้อมูลไปยังหน้า checkout blade
        return view('checkout');
    }

    // ฟังก์ชันแสดงหน้าจ่ายเงิน
    public function showCheckout()
    {
        // ส่งข้อมูลไปยังหน้า checkout blade
        return view('checkout');
    }
}
