<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests;
use App\Subject;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = Requests::orderBy('date')->get();

    /*
        $request_names = Requests::where('user_id', '=', auth()->user()->id)->get();


        $request_price = Subject::Raw('SELECT request_price 
            FROM subjects as s')->get();
    */
        // View -> apresentar
        return view('requests.index',['requests' => $requests/*,'request_price' => $request_price*/]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::orderBy('name')->get();
        return view('requests.create',[ 'subjects' => $subjects ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $subject_id = Subject::where('name', '=', $request->description)->first()->id;

        $r = new Requests;
        $r->description = $request->description;
        $r->user_id = auth()->user()->id;
        $r->subject_id = $subject_id;
        $r->date = $request->date;
        $r->save();
        
        //Requests::create($request->all());
        return redirect()->route('requests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Requests $request)
    {   
     //return view('requests.show',[ 'request' => $request ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Requests $request)
    {
      $subjects = Subject::orderBy('name')->get();
      return view('requests.edit',
        [ 'subjects' => $subjects,
        'request' => $request ]);
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

        $subject_id = Subject::where('name', '=', $request->description)->first()->id;


        $r = Requests::findOrFail($id);
        $r->fill([
            'description' =>  $request->description,
            'user_id' => auth()->user()->id,
            'subject_id' => $subject_id,
            'date' => $request->date
        ]);

        //$request->fill($r->all());
        $r->save();

        session()->flash('mensagem', 'Requisição atualizada com sucesso!');
        return redirect()->route('requests.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requests $request)
    {

       $request->delete();
       return redirect()->route('requests.index');
   }
}
