<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Subject;
use App\Requests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // Model -> recuperação dos dados
        $adminsubs = Subject::orderBy('name')->get();

        return view('admin.index',['adminsubs'=> $adminsubs]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adminsubs = Subject::orderBy('name')->get();
        return view('admin.create',[ 'adminsubs' => $adminsubs ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subject::create($request->all());
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('admin.edit',[ 'adminsubs' => $subject ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adminsubs = Subject::findOrFail($id);
        return view('admin.edit',[ 'adminsubs' => $adminsubs]);
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
        $adminsubs = Subject::findOrFail($id);
        $adminsubs->fill($request->all());
        $adminsubs->save();

        session()->flash('mensagem', 'Cidade atualizada com sucesso!');
        return redirect()->route('admin.index');

        /*$s = Subject::findOrFail($id);
        $s->fill([
            'name' =>  $request->name,
            'price' => $request->price
        ]);*/
        
        //$subject->fill($request->all());
        //$subject->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request = Requests::where('subject_id', '=', $id)->first();

        if(!is_null($request)){
            session()->flash('mensagem', 'Protocolo não pode ser excluido!');
            return redirect()->route('admin.index');
        }
        else{
            $adminsubs = Subject::findOrFail($id);
            $adminsubs->delete();
            session()->flash('mensagem', 'Protocolo excluido com sucesso!');
            return redirect()->route('admin.index');
        }
    }
}
