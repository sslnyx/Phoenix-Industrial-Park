<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewRegistrant;
use Illuminate\Support\Facades\Mail;

class RegistrantController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //

        $this->validate($request, [
            'checkbox' => 'accepted',
        ]);

        if ($request) {
            Mail::to(explode(',', env('MAIL_RECIPIENT')))->send(new NewRegistrant($request));
        }

        // if ($request->except('_token')) {
        //     // print_r($request->all());
        //     return redirect()->route('thankyou');
        // }

        // return $request->except('_token');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        // ]);

        // The blog post is valid...
    }
}
