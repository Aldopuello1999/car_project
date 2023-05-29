@switch($state)
    @case(3)
        <span class="badge badge-pill badge-warning">Liquidada </span>
    @break
    @case(2)
        <span class="badge badge-pill badge-success">En Liquidacion</span>
    @break
    @case(1)
        <span class="badge badge-pill badge-info">Principal</span>
    @break
    @default
        <span class="badge badge-pill badge-primary">$state</span>
    @break
@endswitch
