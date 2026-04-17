<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $thiqahServices = Service::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->limit(5)
            ->get();

        return view('user.pages.home', compact('thiqahServices'));
    }
}
