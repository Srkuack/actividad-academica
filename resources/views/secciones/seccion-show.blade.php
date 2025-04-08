<x-layouts.app :title="__('Registro Alumno')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            
            <h1>Nombre de la seccion: {{ $seccion->nombre }}</h1>

            <ul>
                <li>Docente: {{$seccion->docente->nombre}}</li>
                <li>Seccion: {{ $seccion->seccion }}</li>
                <li>Nrc: {{ $seccion->nrc }}</li>
            </ul>
            <hr>
            
            <h2>Alumnos inscritos en la seccion</h2>
            <ul>
                @foreach ($seccion->alumnos as $alumno)
                    <li>{{ $alumno->nombre }} - {{ $alumno->correo }}</li>
                @endforeach
            </ul>

            <hr>
            <h2>Inscribir a Alumnon</h2>
            <form action="{{ route('seccion.actualizar-alumnos', $seccion) }}" method="POST">
                @csrf
                <select name="alumno_id[]" id="alumno_id" multiple>
                    @foreach ($alumnos as $alumno)
                        <option value="{{ $alumno->id }}" @selected(array_search($alumno->id, $seccion->alumnos->pluck('id')->toArray()) !== false)>
                            {{ $alumno->nombre }} - {{ $alumno->correo }}
                        </option>
                    @endforeach
                </select>
                <br>
                <!-- {{-- <input type="hidden" name="alumno_id" value="{{ $alumno->id }}"> --}} -->
                <button type="submit" class="btn btn-primary">Inscribir</button>
                <a href="{{ route('alumno.index') }}">Regresar</a>
            </form>
        </div>
    </div>
</x-layouts.app>