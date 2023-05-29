<div class="modal fade" id="editarUsuarioModal{{ $producto->id }}" tabindex="-1" role="dialog"
    aria-labelledby="crearUsuarioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Crear Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('productos.update', $producto->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombreUsuario" class="form-control-label">Id</label>
                            <input type="text" disabled class="form-control form-control-alternative"
                                id="nombreUsuario" placeholder="Id" name="code" value="{{ $producto->id }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombreUsuario" class="form-control-label">Nombre</label>
                            <input type="text" class="form-control form-control-alternative" id="nombreUsuario"
                                placeholder="Nombre" name="name" value="{{ $producto->name }}">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="dependencia" class="form-control-label">Estado</label>
                        <select id="dependencia" class="form-control form-control-alternative" name="state"
                            value="{{ $producto->state_entities }}">
                            <option selected disabled>-- Seleccione --</option>
                            <option value="3" {{ $producto->state_entities == 3 ? 'selected' : '' }}>Liquidada
                            </option>
                            <option value="2" {{ $producto->state_entities == 2 ? 'selected' : '' }}>En Liquidacion
                            </option>
                            <option value="1" {{ $producto->state_entities == 1 ? 'selected' : '' }}>Principal
                            </option>
                        </select>
                    </div> --}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombreUsuario" class="form-control-label">Description</label>
                            <input type="text" class="form-control form-control-alternative" id="nombreUsuario"
                                placeholder="Description" name="description" value="{{ $producto->description }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidoUsuario" class="form-control-label">photo</label>
                            <input type="text" class="form-control form-control-alternative" id="apellidoUsuario"
                                placeholder="photo" name="photo" value="{{ $producto->photo }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellidoUsuario" class="form-control-label">precio</label>
                            <input type="text" class="form-control form-control-alternative" id="apellidoUsuario"
                                placeholder="precio" name="precio" value="{{ $producto->precio }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dependencia" class="form-control-label">Categoria</label>
                            <select id="dependencia" class="form-control form-control-alternative" name="id_categories">
                                <option selected disabled>-- Seleccione --</option>
                                @foreach ($categorias as $item)
                                    <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
