<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use Illuminate\Http\Response;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use Hash;

    use App\Models\Estado;
    use App\Models\Repositories\RepositorieLocal;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $estados = Estado::all();

        return view('sitio.registro', compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $store = RepositorieLocal::saveLocal($request);

        if($store) {

            return response()->json(['result' => true, 'mensaje' => 'Felicidades ahora eres parte de locales.mx']);    
        
        }

        return response()->json(['result' => false]);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}