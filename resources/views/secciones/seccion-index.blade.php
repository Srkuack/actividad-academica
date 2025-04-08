<x-layouts.app :title="__('Info Sección')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <!-- <x-alert :titulo="$seccion->nombre"> -->
                <x-alert titulo="xd">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </x-alert>
        <h2>Secciones</h2>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Seccion</th>
                <th>NRC</th>
            </tr>

            @foreach ($secciones as $seccion)
                <tr>
                    <td><a href="{{route('seccion.show',$seccion)}}">{{ $seccion->nombre }}</a></td>
                    <td>{{ $seccion->docente->nombre }}</td>
                    <td>{{ $seccion->seccion }}</td>
                    <td>{{ $seccion->nrc }}</td>
                </tr>
            @endforeach
        </table>
        </div>
    </div>
</x-layouts.app>