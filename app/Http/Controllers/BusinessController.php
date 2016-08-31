<?php

namespace FlAssociates\Http\Controllers;

use FlAssociates\Business;
use FlAssociates\Http\Requests\BusinessRequest;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Empresas';

        // Pesquisa de empresas por CNPJ
        $search = trim(strip_tags(\Request::input('q')));

        if (empty($search))
            $data['businesses'] = Business::orderBy('id')->paginate(10);
        else
            $data['businesses'] = Business::where('cnpj', 'like', "%{$search}%")->orderBy('id')->paginate(10);

        return view('businesses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Cadastrar Empresa';

        return view('businesses.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessRequest $request)
    {
        Business::create($request->all());

        return redirect()->route('empresas.index')->with('alert-success', 'Empresa cadastrada com sucesso.');
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
        $data['title'] = 'Editar Empresa';
        $data['business'] = Business::find($id);

        return view('businesses.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessRequest $request, $id)
    {
        Business::find($id)->update($request->all());

        return redirect()->route('empresas.index')->with('alert-success', 'Empresa atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Business::destroy($id);

        return redirect()->route('empresas.index')->with('alert-warning', 'Empresa excluída com sucesso.');
    }
}
