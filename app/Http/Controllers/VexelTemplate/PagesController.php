<?php

namespace App\Http\Controllers\VexelTemplate;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function profile()
    {
        return view('vexeltemplate.profile');
    }

    public function notify_list()
    {
        return view('vexeltemplate.notify-list');
    }

    public function email_inbox()
    {
        return view('vexeltemplate.email-inbox');
    }

    public function gallery()
    {
        return view('vexeltemplate.gallery');
    }

    public function about()
    {
        return view('vexeltemplate.about');
    }

    public function faq()
    {
        return view('vexeltemplate.faq');
    }

    public function terms()
    {
        return view('vexeltemplate.terms');
    }

    public function invoice()
    {
        return view('vexeltemplate.invoice');
    }

    public function pricing()
    {
        return view('vexeltemplate.pricing');
    }

    public function settings()
    {
        return view('vexeltemplate.settings');
    }

    public function blog()
    {
        return view('vexeltemplate.blog');
    }

    public function blog_details()
    {
        return view('vexeltemplate.blog-details');
    }

    public function blog_post()
    {
        return view('vexeltemplate.blog-post');
    }

    public function emptypage()
    {
        return view('vexeltemplate.emptypage');
    }

    public function file_manager()
    {
        return view('vexeltemplate.file-manager');
    }

    public function filemanager_list()
    {
        return view('vexeltemplate.filemanager-list');
    }

    public function shop()
    {
        return view('vexeltemplate.shop');
    }

    public function shop_description()
    {
        return view('vexeltemplate.shop-description');
    }

    public function cart()
    {
        return view('vexeltemplate.cart');
    }

    public function add_product()
    {
        return view('vexeltemplate.add-product');
    }

    public function wishlist()
    {
        return view('vexeltemplate.wishlist');
    }

    public function checkout()
    {
        return view('vexeltemplate.checkout');
    }

}
