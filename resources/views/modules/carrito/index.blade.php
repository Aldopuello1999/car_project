@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="col-8">
                        <h3 class="mb-0">Productos</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">precio</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->name }}</td>
                                        <td>{{ $producto->id_categories }}</td>
                                        <td>{{ $producto->precio }}</td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary btn-sm"
                                                onclick="addNewProduct('{{ $producto->id }}')">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-md-8 card-title" id="headerParametros">
                                Carrito
                            </div>
                            <div class="col-md-4" id="actionsButtons">
                                Total: {{ $total }}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>SubTotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="bodyTable">
                                @foreach ($carrito as $item)
                                    <tr>
                                        {{-- {{ dd($carrito) }} --}}
                                        <td>{{ $item['producto']->name }}</td>
                                        <td>
                                            <input id="txtCant{{ $item['id'] }}" type="numeric" class="form-control"
                                                placeholder="{{ $item['cantidad'] }}" name="cant"
                                                value="{{ $item['cantidad'] }}" disabled>
                                            <button id="btnGuardar{{ $item['id'] }}" style="display: none;"
                                                onclick="updateCantidad('{{ $item['id'] }}')">Guardar</button>
                                            <button id="btnCancelar{{ $item['id'] }}" style="display: none;"
                                                onclick="enableCantidad('{{ $item['id'] }}')">Cancelar</button>
                                        </td>
                                        <td>{{ $item['producto']->precio }}</td>
                                        <td>{{ $item['producto']->precio * $item['cantidad'] }}</td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-primary btn-sm"
                                                onclick="enableCantidad('{{ $item['id'] }}')">
                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            </a>

                                            <a href="javascript:;" class="btn btn-danger btn-sm"
                                                onclick="deleteProduct('{{ $item['id'] }}')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>

                                        </td>
                                    <tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <a href="javascript:;" class="btn btn-primary btn-sm" onclick="enableCantidad('{{ $item['id'] }}')">
                        <i aria-hidden="true">Comfirmar Compra</i>
                    </a>
                </div>


            </div>
        </div>
    @endsection

    @section('js')
        <script>
            function addNewProduct(id) {
                //Cambiar la ruta de la consulta
                var UrlPath_ = "{{ route('actualCar.addproduct') }}";
                $.ajax({
                    type: 'POST',
                    url: UrlPath_,
                    data: {

                        idProducto: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $(".content_loading").fadeIn("slow");
                    },
                    success: function(response) {

                        swal.fire('Muy bien!', response.message, 'success')
                        location.reload();

                    },
                    error: function(xhr) {
                        //   console.log("ERROR");
                        $(".content_loading").fadeOut("slow");
                        swal.fire('Ops!', 'Hubo un error, por favor intentelo más tarde', 'error')
                    }
                });
            }

            function load() {
                var UrlPath_ = "{{ route('actualCar.get') }}";
                $.ajax({
                    type: 'GET',
                    url: UrlPath_,
                    data: {


                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $(".content_loading").fadeIn("slow");
                    },
                    success: function(response) {

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

            function deleteProduct(id) {
                //Cambiar la ruta de la consulta
                var UrlPath_ = "{{ route('actualCar.delete') }}";
                $.ajax({
                    type: 'post',
                    url: UrlPath_,
                    data: {

                        idEliminar: id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $(".content_loading").fadeIn("slow");
                    },
                    success: function(response) {

                        swal.fire('Muy bien!', response.message, 'success')
                        location.reload();

                    },
                    error: function(xhr) {
                        //   console.log("ERROR");
                        $(".content_loading").fadeOut("slow");
                        swal.fire('Ops!', 'Hubo un error, por favor intentelo más tarde', 'error')
                    }
                });
            }

            function enableCantidad(id) {

                $('#txtCant' + id).prop('disabled', function(_, val) {
                    return !val;
                });

                if ($('#txtCant' + id).prop('disabled')) {
                    $('#btnGuardar' + id).hide();
                    $('#btnCancelar' + id).hide();

                } else {
                    $('#btnGuardar' + id).show();
                    $('#btnCancelar' + id).show();

                }
            }

            function updateCantidad(id) {
                var cantidad = $('#txtCant' + id).val();

                var UrlPath_ = "{{ route('actualCar.updateCant') }}";
                $.ajax({
                    type: 'post',
                    url: UrlPath_,
                    data: {
                        id: id,
                        cant: cantidad
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    beforeSend: function() {
                        $(".content_loading").fadeIn("slow");
                    },
                    success: function(response) {

                        swal.fire('Muy bien!', response.message, 'success')
                        location.reload();

                    },
                    error: function(xhr) {
                        //   console.log("ERROR");
                        $(".content_loading").fadeOut("slow");
                        swal.fire('Ops!', 'Hubo un error, por favor intentelo más tarde', 'error')
                    }
                });
            }
        </script>
    @endsection
