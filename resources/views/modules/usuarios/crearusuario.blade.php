<div class="modal fade" id="crearUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="crearUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Crear Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('usuarios.store')}}">
            @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombreUsuario" class="form-control-label">Nombre</label>
                        <input type="text" name="name" class="form-control form-control-alternative" id="nombreUsuario" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellidoUsuario" class="form-control-label">Apellido</label>
                        <input type="text" name="lastname" class="form-control form-control-alternative" id="apellidoUsuario" placeholder="Apellido">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tipoIdUsuario" class="form-control-label">Tipo identificación</label>
                        <select id="sptipoIdUsuario" name="document_type" class="form-control form-control-alternative">
                            <option selected disabled>-- Seleccione --</option>
                            @foreach($tipoids as $item)
                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="idUsuario" class="form-control-label">Identificación</label>
                        <input type="numeric" name="identification" class="form-control form-control-alternative" id="idUsuario" placeholder="Identificación">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username" class="form-control-label">Username</label>
                        <input type="text" name="username" class="form-control form-control-alternative" id="username" placeholder="Usuario123">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="correoUsuario" class="form-control-label">Correo</label>
                        <input type="email" name="email" class="form-control form-control-alternative" id="correoUsuario" placeholder="Usuario123@gmail.com" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password" class="form-control-label">Contraseña</label>
                        <input type="password" name="password" class="form-control form-control-alternative" id="password" placeholder="Contraseña">
                        <small class="text-muted">
                            Debe tener al menos 8 caracteres.
                        </small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="checkPassword" class="form-control-label">Confirmar contraseña</label>
                        <input type="password" name="password_confirmation" class="form-control form-control-alternative" id="checkPassword" placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="perfilUsuario" class="form-control-label">Perfil</label>
                        <select id="perfilUsuario" name="profile" class="form-control form-control-alternative">
                            <option selected disabled>-- Seleccione --</option>
                            <option value="1">Administrador</option>
                            <option value="2">Creador de Reparto</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dependencia" class="form-control-label">Dependencia</label>
                        <select id="dependencia" name="dependence_id" class="form-control form-control-alternative">
                            <option selected disabled>-- Seleccione --</option>
                            <option value="1">Dependencia 1</option>
                        </select>
                    </div>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Crear</button>
        </div>

        </div>
        </form>

    </div>
    </div>
