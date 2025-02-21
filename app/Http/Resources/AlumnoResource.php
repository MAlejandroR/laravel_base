<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlumnoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "data" => [
                "id" => (string)$this->id,
                "type" => "Alumno",
                "attributes" => [
                    "id" => $this->id,
                    "nombre" => $this->nombre,
                    "f_nac" => $this->f_nac,
                    "dni" => $this->dni,
                    "email" => $this->email
                ],
                "links" => [
                    "self" => url("api/alumnos/$this->id")
                ]
            ]
        ];

    }
}
