<?php

namespace App\Http\Controllers\Web\Profile;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ShowController
{
    /**
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return view('app.profile.show');
    }
}
