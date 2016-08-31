<?php

namespace FlAssociates\Http\Controllers;

use FlAssociates\Associate;
use FlAssociates\Business;
use FlAssociates\Http\Requests\AssociateRequest;

class AssociateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Sócios';

        // Pesquisa de sócios por CPF
        $search = trim(strip_tags(\Request::input('q')));

        if (empty($search))
            $data['associates'] = Associate::orderBy('id')->paginate(10);
        else
            $data['associates'] = Associate::where('cpf', 'like', "%{$search}%")->orderBy('id')->paginate(10);

        return view('associates.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Cadastrar Sócio';
        $data['businesses'] = $this->getBusinessesList();

        return view('associates.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssociateRequest $request)
    {
        Associate::create($request->all());

        return redirect()->route('socios.index')->with('alert-success', 'Sócio cadastrado com sucesso.');
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
        $data['title'] = 'Editar Sócio';
        $data['associate'] = Associate::find($id);
        $data['businesses'] = $this->getBusinessesList();

        return view('associates.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AssociateRequest $request, $id)
    {
        Associate::find($id)->update($request->all());

        return redirect()->route('socios.index')->with('alert-success', 'Sócio atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Associate::destroy($id);

        return redirect()->route('socios.index')->with('alert-warning', 'Sócio excluído com sucesso.');
    }

    /**
     * Gera um array com os nomes e os IDs das empresas.
     *
     * @return array
     */
    private function getBusinessesList()
    {
        return Business::orderBy('name')->pluck('name', 'id')->prepend('', '');
    }
}
