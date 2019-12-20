<?php

namespace App\Http\Controllers;

use App\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapaket = Paket::paginate(10);
        //dd($datapaket);
        return view('paket.index', compact('datapaket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paket.form', ['author'=>Auth::id()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nmpaket' => 'required|max:200',
            'pagurmp' => 'required'        
        ])->validate();

        $datapaket = Paket::create($request->all());
        if($datapaket){
            return redirect('paket');
        } else{
            return redirect('paket/create')->with('error', 'Error! Request data is not insert to database, please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        $datapaket = Paket::find($paket->id);
        $author = \App\Paket::where('id', $paket->author)->first();
        return view('paket.preview', compact('datapaket', 'author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        $datapaket = Paket::find($paket->id);
        return view('paket.form', ['paket'=>$paket, 'author'=>Auth::id()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket)
    {
        Validator::make($request->all(), [
            'nmpaket' => 'required|max:200',
            'pagurmp' => 'required'        
        ])->validate();

        $datapaket = Paket::create($request->all());
        if($datapaket){
            return redirect('paket');
        } else{
            return redirect('paket/create')->with('error', 'Error! Request data is not insert to database, please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        Paket::destroy($paket->id);
        return redirect('paket');
    }
}
