<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Home';
        return view('pages.index',compact('title'));
    }

    public function about()
    {
        $title='Chi Siamo';
        return view('pages.about-us',compact('title'));
    }

    public function portfolio()
    {
        $title='Portfolio';
        return view('pages.portfolio',compact('title'));
    }


    public function filtrisocial()
    {
        $title='Filtri Social';
        return view('pages.filtri-social',compact('title'));
    }

    public function contatti()
    {
        $title='Contatti';
        return view('pages.contatti',compact('title'));
    }

    public function inviomail(Request $request)
    {
        $this->validate($request, [
            'nome'     =>  'required',
            'cognome'     =>  'required',
            'email'  =>  'required|email',
            'messaggio' =>  'required',
            'g-recaptcha-response' => 'required|captcha'
           ]);

              $data = array(
                  'nome'      =>  $request->nome,
                  'cognome'      =>  $request->nome,
                  'email'      =>  $request->email,
                  'messaggio'   =>   $request->messaggio
              );

           Mail::to('riccardo.virgilio@gmail.com')->send(new SendMail($data));
           return back()->with('success', 'Thanks for contacting us!');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
