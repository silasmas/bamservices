<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\produit;
use Illuminate\Http\Request;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class HomeController extends Controller
{
    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: Change language
     *
     * @param  $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeLanguage($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }

    /**
     * GET: Home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $prod=produit::get();
        return view('welcome',compact('prod'));
    }

    /**
     * GET: About page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * GET: All services page
     *
     * @return \Illuminate\View\View
     */
    public function service()
    {
        return view('service');
    }

    /**
     * GET: Service details page
     *
     * @return \Illuminate\View\View
     */
    public function serviceDatas()
    {
        return view('service');
    }

    /**
     * GET: Pricing page
     *
     * @return \Illuminate\View\View
     */
    public function pricing()
    {
        return view('pricing');
    }

    /**
     * GET: Contact page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: Add item to cart
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addToCart(Request $request)
    {
        // 
    }
}
