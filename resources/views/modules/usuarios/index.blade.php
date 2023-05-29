@extends('layouts.app')

@section('searchRoute') {{route('usuarios.index', ['profile'=>Request()->profile,'state'=>Request()->state])}} @endsection

@section('content')
        <div class="row justify-content-center">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <h3 class="mb-0">Usuarios </h3>
                            </div>
                        <form class="col-7" method="get"  action="{{route('usuarios.index', ['searchtxt'=>Request()->searchtxt])}}">
                        <div class="row">
                            <div class="col-5 mr-1">
                                <div class="row">
                                    <label for="perfiles"> Perfiles </label>
                                    <select id="perfil" name="profile" class="form-control" data-toggle="select" title="Simple select" onchange="this.form.submit()">
                                        <option value="*" {{ Request()->profile == "*" ? 'selected' : '' }}>Todos</option>
                                        <option value="1" {{ Request()->profile == 1 ? 'selected' : '' }}>Dependencia 1</option>
                                        <option value="2" {{ Request()->profile == 2 ? 'selected' : '' }}>Dependencia 2</option>
                                    </select>
                                </div>
                           </div>

                            <div class="col-5 ml-1">
                                <div class="row">
                                    <label for="state"> Estado </label>
                                    <select id="state" name="state" class="form-control" data-toggle="select" title="Simple select" onchange="this.form.submit()">
                                        <option value="*" {{ Request()->state == "*" ? 'selected' : '' }}>Todos</option>
                                        <option value="0" {{ Request()->state == "0" ? 'selected' : '' }}>Inactivo</option>
                                        <option value="1" {{ Request()->state == "1" ? 'selected' : '' }}>Activo</option>
                                        <option value="2" {{ Request()->state == "2" ? 'selected' : '' }}>Eliminado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        </form>
                            <div class="col-2 text-right">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#crearUsuarioModal">
                                    Crear Usuario
                                </button>
                                <!-- Modal -->
                                @include('modules.usuarios.crearusuario')
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Identificacion</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Perfil</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user )
                                    <tr>
                                        <td>{{$user->identification}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->lastname}}</td>
                                        <td> @include('components.usersprofiles',["profile"=> $user->profile ])</td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td> @include('components.states',["state"=> $user->state ])</td>

                                        <td class="text-right">
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editarUsuarioModal{{$user->id}}">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>
                                            <a href="javascript:;" onclick="deleteUser('{{$user->id}}')" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            <!-- Modal -->
                                            @include('modules.usuarios.editarusuario')

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
            var UrlPath_ = "{{route('entidades.state')}}";
            $.ajax({
                type:'POST',
                url:UrlPath_,
                data: {
                    //Cambiar los parametros para la ruta
                    idEntidad: id
                },
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                beforeSend:function(){
                    $(".content_loading").fadeIn("slow");
                },
                success:function(response){
                    console.log(response)
                    console.log(response.data.state);
                    if(response.code == 200)
                    {
                        swal.fire('Muy bien!', response.message, 'success')
                        location.reload();
                    }else{
                        swal.fire('Ops!', response.message, 'error')
                    }
                },
                error: function(xhr){
                    //   console.log("ERROR");
                    $(".content_loading").fadeOut("slow");
                    swal.fire('Ops!', 'Hubo un error, por favor intentelo más tarde', 'error')
                }
            });
        }




        function deleteUser(id) {
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

                    var UrlPath_ = "{{route('usuarios.delete')}}"
                    $.ajax({
                        type:'POST',
                        url:UrlPath_,
                        data: {
                            //Editar los parametros que se desean enviar a la ruta
                            idUsuario: id
                        },
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        beforeSend:function(){
                            $(".content_loading").fadeIn("slow");
                        },
                        success:function(response){
                            console.log(response)
                            if(response.code == 200)
                            {
                                swal.fire('Muy bien!', response.message, 'success')
                                location.reload();

                            }
                            else{
                                swal.fire('Oops!', response.message, 'error')
                            }
                        },
                        error: function(xhr){
                            //   console.log("ERROR");
                            $(".content_loading").fadeOut("slow");
                            console.log(xhr.responseJSON.errors);

                                swal.fire('Ops!', 'Hubo un error desconocido, por favor intentelo más tarde', 'error')

                        }
                    });

                }
            })
        }


    </script>
@endsection
