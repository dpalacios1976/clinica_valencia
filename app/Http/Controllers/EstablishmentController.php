<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstablishmentCreateRequest;
use App\Http\Requests\EstablishmentUpdateRequest;
use App\Models\Establishment;
use App\Models\Level;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class EstablishmentController extends Controller
{
    use ApiResponse;
    /**
     * Display index for Rol Admin
     * 
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $establishments = Establishment::query()
            //->activo()
            ->select('id','ruc', 'razon_social', 'nombre_comercial', 'direccion', 'state', 'created_at')
            ->get();

        return view('parametros.index', compact('establishments'));
    }

    public function show(Establishment $establishment)
    {
        return view('parametros.show', compact('establishment'));
    }

    public function create() 
    {
        $levels = Level::activo()
            ->select('id', 'descripcion')
            ->get();

        return view('parametros.create', compact('levels'));
    }

    public function store(EstablishmentCreateRequest $request)
    {
        $retorno = null;
        try {
            $establishment = new Establishment();
            $establishment->ruc = $request->ruc;
            $establishment->razon_social = $request->razon_social;
            $establishment->nombre_comercial = strtoupper($request->nombre_comercial); 
            $establishment->direccion = $request->direccion;
            $establishment->contribuyente_especial = $request->cont_especial; 
            $establishment->contabilidad = $request->contabilidad;
            $establishment->ambiente_produccion = $request->produccion;
            // $establishment->logo = $request->logo;
	        // $establishment->firma_electronica = $request;
            // $establishment->password = $request;
            $establishment->level_id = $request->nivel;

            $establishment->save();

            $retorno = $this->jsonCreated("Establecimiento creado correctamente");
        } catch (\Throwable $th) {
            //throw $th;
            $retorno = $this->jsonFail("Inconvenient",$th->getMessage());
            // $retorno = $this->jsonFail("Inconvenient", "Inconveniente al guardar registro");
        }
        return $retorno;
    }

    public function edit(Establishment $establishment)
    {
        $levels = Level::activo()
            ->select('id', 'descripcion')
            ->get();

        return view('parametros.edit', compact('establishment', 'levels'));
    }

    public function update(Establishment $establishment, EstablishmentUpdateRequest $request)
    {
        try {
            $establishment->ruc = $request->ruc;
            $establishment->razon_social = $request->razon_social;
            $establishment->nombre_comercial = strtoupper($request->nombre_comercial); 
            $establishment->direccion = $request->direccion;
            $establishment->contribuyente_especial = $request->cont_especial; 
            $establishment->contabilidad = $request->contabilidad;
            $establishment->ambiente_produccion = $request->produccion;
            // $establishment->logo = $request->logo;
	        // $establishment->firma_electronica = $request;
            // $establishment->password = $request;
            $establishment->level_id = $request->nivel;

            $establishment->save();

            return $this->jsonSuccess("Establecimiento actualizado correctamente");
        } catch (\Throwable $th) {
            //throw $th;
            return $this->jsonFail("Inconvenient", $th->getMessage());
            // return $this->jsonFail("Inconvenient", "Inconveniente al actualizar registro");
        }
    }

    public function establishmentInactive(Establishment $establishment)
    {
        try {
            $establishment->state = 0;
            $establishment->save();

            return $this->jsonSuccess("Establecimiento desactivado correctamente");
        } catch (\Throwable $th) {
            //throw $th;
            // return $this->jsonFail("Inconvenient", $th->getMessage());
            return $this->jsonFail("Inconvenient", "Inconveniente al desactivar");
        }
    }

    public function establishmentActive(Establishment $establishment)
    {
        try {
            $establishment->state = 1;
            $establishment->save();

            return $this->jsonSuccess("Establecimiento activado correctamente");
        } catch (\Throwable $th) {
            // return $this->jsonFail("Inconvenient", $th->getMessage());
            return $this->jsonFail("Inconvenient", "Inconveniente al activar.");
        }
    }

    
}
