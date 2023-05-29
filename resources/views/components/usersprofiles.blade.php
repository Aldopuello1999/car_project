@switch($profile)
    @case(1)
    <span class="badge badge-primary">Admin</span>
        @break
    @case(2)
    <span class="badge badge-warning">Digitador</span>
        @break
    @default
    <span class="badge badge-primary">{{$profile}}</span>

@endswitch
