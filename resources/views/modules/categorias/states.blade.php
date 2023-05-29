@switch($state)
    @case(0)
        <span class="badge badge-pill badge-warning">Inactivo</span>
    @break
    @case(1)
        <span class="badge badge-pill badge-success">Activo</span>
    @break
    @case(2)
        <span class="badge badge-pill badge-danger">Eliminado</span>
    @break
    @default
        <span class="badge badge-pill badge-primary">$state</span>
    @break

@endswitch
