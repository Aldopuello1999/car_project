@extends('layouts.app')

@section('searchRoute')
    {{ route('categorias.index') }}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Categorias</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#crearUsuarioModal">
                                Crear Categoria
                            </button>
                            <!-- Modal -->
                            @include('modules.categorias.create')
                        </div>
                    </div>
                </div>

                <div class="col-12">
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre Categoria</th>
                                <th scope="col">Estado</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>{{ $item->state }}</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#editarUsuarioModal{{ $item->id }}">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:;" onclick="deleteEntidad('{{ $item->id }}')"
                                            class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>

                                        <!-- Modal -->
                                        @include('modules.categorias.editar')

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    @endsection


    @section('js')
        <script>
            function changeState(id) {
                //Cambiar la ruta de la consulta
                var UrlPath_ = "{{ route('entidades.state') }}";
                $.ajax({
                    type: 'POST',
                    url: UrlPath_,
                    data: {
                        //Cambiar los parametros para la ruta
                        idEntidad: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $(".content_loading").fadeIn("slow");
                    },
                    success: function(response) {
                        console.log(response)
                        console.log(response.data.state);
                        if (response.code == 200) {
                            swal.fire('Muy bien!', response.message, 'success')
                            location.reload();
                        } else {
                            swal.fire('Ops!', response.message, 'error')
                        }
                    },
                    error: function(xhr) {
                        //   console.log("ERROR");
                        $(".content_loading").fadeOut("slow");
                        swal.fire('Ops!', 'Hubo un error, por favor intentelo más tarde', 'error')
                    }
                });
            }




            function deleteEntidad(id) {
                Swal.fire({
                    title: '¿Estas seguro de eliminar este elemento?',
                    text: "No podrás revertir esto una vez eliminado",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'SI, quiero eliminarlo!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        var UrlPath_ = "{{ route('entidades.destroy') }}"
                        $.ajax({
                            type: 'POST',
                            url: UrlPath_,
                            data: {
                                //Editar los parametros que se desean enviar a la ruta
                                idEntidad: id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            beforeSend: function() {
                                $(".content_loading").fadeIn("slow");
                            },
                            success: function(response) {
                                console.log(response)
                                if (response.code == 200) {
                                    swal.fire('Muy bien!', response.message, 'success')
                                    location.reload();

                                } else {
                                    swal.fire('Oops!', response.message, 'error')
                                }
                            },
                            error: function(xhr) {
                                //   console.log("ERROR");
                                $(".content_loading").fadeOut("slow");
                                swal.fire('Ops!',
                                    'Hubo un error desconocido, por favor intentelo más tarde', 'error')
                            }
                        });

                    }
                })
            }
        </script>
    @endsection
