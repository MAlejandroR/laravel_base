<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlumnoCollection;
use App\Http\Resources\AlumnoResource;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return new AlumnoCollection($alumnos);

        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $alumno)
    {
        $alumno = Alumno::find($alumno);
        if ($alumno!=null)
                return new AlumnoResource($alumno);
        return response()->json([
            "errors" => [
                "status" => 404,
                "title" => "Alumno not found",
            ]
        ], 404);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $alumno = Alumno::find($id);
        if ($alumno!=null) {
            $alumno->delete();
            return response()->noContent();
        }

        return response()->json([
            "errors" => [
                "status" => 404,
                "title" => "Alumno not found",
                "detail" => "Not posible deleted students "
            ]
        ], 404);

        //
    }
}
