<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: Account page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('account');
    }

    /**
     * GET: Cart page
     *
     * @return \Illuminate\View\View
     */
    public function cart()
    {
        return view('account');
    }

    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: Update password
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request)
    {
        // 
    }
}
