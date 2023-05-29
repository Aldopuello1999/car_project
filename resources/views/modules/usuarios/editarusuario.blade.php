<div class="modal fade" id="editarUsuarioModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="crearUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Crear Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('usuarios.update', ['idUsuario'=>$user->id])}}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombreUsuario" class="form-control-label">Nombre</label>
                        <input name="name" type="text" class="form-control form-control-alternative" id="nombreUsuario" placeholder="Nombre" value="{{$user->name}}" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellidoUsuario" class="form-control-label">Apellido</label>
                        <input name="lastname" type="text" class="form-control form-control-alternative" id="apellidoUsuario" placeholder="Apellido" value="{{$user->lastname}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tipoIdUsuario" class="form-control-label">Tipo identificación</label>
                        <select  id="sptipoIdUsuario" name="document_type" class="form-control form-control-alternative"  value="{{$user->document_type}}">
                            <option disabled >-- Seleccione --</option>
                            @foreach($tipoids as $item)
                                <option value="{{$item->id}}" {{ $user->document_type == $item->id ? 'selected' : '' }}>{{$item->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="idUsuario" class="form-control-label">Identificación</label>
                        <input name="identification" type="numeric" class="form-control form-control-alternative" id="idUsuario" placeholder="Identificación" value="{{$user->identification}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username" class="form-control-label">Username</label>
                        <input name="username" type="text" class="form-control form-control-alternative" id="username" placeholder="Usuario123" value="{{$user->username}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="correoUsuario" class="form-control-label">Correo</label>
                        <input name="email" type="email" class="form-control form-control-alternative" id="correoUsuario" placeholder="Usuario123@gmail.com" value="{{$user->email}}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password" class="form-control-label">Contraseña</label>
                        <input name="password" type="password" class="form-control form-control-alternative" id="password" placeholder="Contraseña">
                        <small class="text-muted">
                            Debe tener al menos 8 caracteres.
                        </small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="checkPassword" class="form-control-label">Confirmar contraseña</label>
                        <input name="password_confirmation" type="password" class="form-control form-control-alternative" id="checkPassword" placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="perfilUsuario" class="form-control-label">Perfil</label>
                        <select name="profile" id="perfilUsuario" class="form-control form-control-alternative" value="{{$user->profile}}">
                            <option selected disabled>-- Seleccione --</option>
                            <option value="1" {{ $user->profile == 1 ? 'selected' : '' }}>Administrador</option>
                            <option value="2" {{ $user->profile == 2 ? 'selected' : '' }}>Creador de Reparto</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dependencia" class="form-control-label">Dependencia</label>
                        <select name="dependence_id" id="dependencia" class="form-control form-control-alternative" value="{{$user->dependence_id}}">
                            <option selected disabled >-- Seleccione --</option>
                            <option value="1" {{ $user->dependence_id == 1 ? 'selected' : '' }}>Dependencia 1</option>
                            <option value="2" {{ $user->dependence_id == 2 ? 'selected' : '' }}>Dependencia 2</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="perfilUsuario" class="form-control-label">Estado</label>
                        <select name="state" id="perfilUsuario" class="form-control form-control-alternative" value="{{$user->state}}">
                            <option selected disabled >-- Seleccione --</option>
                            <option value="1" {{ $user->state == 1 ? 'selected' : '' }}>Activo</option>
                            <option value="0" {{ $user->state == 2 ? 'selected' : '' }}>Inactivo</option>
                        </select>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </div>
    </form>

    </div>
    </div>
