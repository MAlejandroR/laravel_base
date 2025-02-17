<x-layouts.layout>
    <div class="flex flex-row justify-center items-center min-h-full bg-gray-300">
        <!-- Session Status -->



                <form action="{{route("alumnos.store")}}" method="POST">
                    @csrf
                    <div class="bg-white grid grid-cols-2 gap-4 divide-x-8">
                        {{--                datos--}}
                    <div class="bg-white rounded-2xl p-5 grid grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="name" value="Nombre"/>
                            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                          value="{{old('nombre')}}"/>
                            @error("nombre")
                            <div class="text-sm text-red-600">
                                {{$message}}
                            </div>
                            @enderror


                        </div>
                        <div>
                            <x-input-label for="email" value="Email"/>
                            <x-text-input id="email" class="block mt-1 w-full"
                                          type="email" name="email"
                                          value="{{old('email')}}"
                                          required autofocus autocomplete="email" />
                            @error("email")
                            <div class="text-sm text-red-600">
                                {{$message}}
                            </div>
                            @enderror

                        </div>
                        <div>
                            <x-input-label for="f_nac" value="Fecha de Nacimiento" />

                            <x-text-input id="f_nac" class="block mt-1 w-full"
                                          type="date" name="f_nac"
                                          value="{{old('f_nac')}}"
                                          required autofocus autocomplete="Fecha de nacimiento" />
                            @error("f_nac")
                            <div class="text-sm text-red-600">
                                {{$message}}
                            </div>
                            @enderror

                        </div>
                        <div>
                            <x-input-label for="dni" value="DNI" />
                            <x-text-input id="dni" class="block mt-1 w-full"
                                          type="text" name="dni"
                                          value="{{old('dni')}}"
                                          required autofocus autocomplete="Dni"/>
                            @error("dni")
                            <div class="text-sm text-red-600">
                                {{$message}}
                            </div>
                            @enderror

                        </div>
                    </div>
                        <div class="max-h-96 overflow-y-auto px-4 text-sm">
                            <h2 class="font-semibold text-lg mb-2">Listado de idiomas</h2>
                            <div x-data="{ idiomas: {} }">
                                @foreach(config("idiomas") as $idioma)
                                    <div class="flex items-center gap-3 border-b py-2">
                                        <input type="checkbox" name="idiomas[]" value="{{$idioma}}" x-model="idiomas['{{$idioma}}']">
                                        <label for="idioma_{{$loop->index}}" class="flex-grow">{{$idioma}}</label>
                                        <template x-if="idiomas['{{$idioma}}']">
                                            <div>
                                                <select name="nivel[{{$idioma}}]" class="border rounded text-sm">
                                                    <option disabled selected value="">Nivel</option>
                                                    <option value="Alto">Alto</option>
                                                    <option value="Medio">Medio</option>
                                                    <option value="Bajo">Bajo</option>
                                                </select>

                                                <select name="titulo[{{$idioma}}]" class="border rounded text-sm">
                                                    <option disabled selected value="">Título</option>
                                                    <option value=>Sin título</option>
                                                    <option value="A1">A1</option>
                                                    <option value="A2">A2</option>
                                                    <option value="B1">B1</option>
                                                    <option value="B2">B2</option>
                                                    <option value="C1">C1</option>
                                                    <option value="C2">C2</option>
                                                </select>
                                            </div>
                                        </template>
                                    </div>
                                @endforeach
                            </div>
                        </div>
{{--                        idiomas--}}
                        <div>

                        </div>
                        <div class="p-2">
                            <button class= "btn btn-sm btn-success"  type="submit">Guardar </button>
                            <a class= "btn btn-sm btn-success" href="{{route("alumnos.index")}}">Cancelar</a>
                        </div>
                    </div>
                </form>
{{--                idiomas--}}


        </div>

    </div>

</x-layouts.layout>
