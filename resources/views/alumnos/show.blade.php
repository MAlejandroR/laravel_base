<x-layouts.layout>
    <h1>Alumno : {{$alumno->id}}</h1>
    <h2>Idiomas que habla</h2>
    @foreach($alumno->idiomas as $idioma)
        <h2 class="space-x-2">
        <span> {{$idioma->idioma}}</span>
        <span> {{$idioma->nivel}}</span>
        <span> {{$idioma->titulo}}</span>
        </h2>
    @endforeach
</x-layouts.layout>
