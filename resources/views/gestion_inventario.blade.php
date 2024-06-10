@extends('adminlte::page')

@section('title', 'Gestión de Inventario')

@section('content_header')
    <h1>Gestión de suministros</h1>
@stop

@section('content')
<div class="container">
    <form id="inventoryForm" class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="productName">Nombre del Producto</label>
                <input type="text" class="form-control" id="productName" placeholder="Ingresa el nombre del producto" required>
                <div class="invalid-feedback">Por favor, ingresa el nombre del producto.</div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="productCategory">Categoría del Producto</label>
                <select class="form-control" id="productCategory" required>
                    <option value="">Selecciona una categoría</option>
                    <option value="flores">Flores</option>
                    <option value="decoracion">Decoración</option>
                    <option value="herramientas">Herramientas</option>
                    <option value="otros">Otros</option>
                </select>
                <div class="invalid-feedback">Por favor, selecciona una categoría.</div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="productDescription">Descripción</label>
                <textarea class="form-control" id="productDescription" rows="3" placeholder="Ingresa la descripción" required></textarea>
                <div class="invalid-feedback">Por favor, ingresa una descripción.</div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="productPrice">Precio</label>
                <input type="number" class="form-control" id="productPrice" placeholder="Ingresa el precio" required>
                <div class="invalid-feedback">Por favor, ingresa el precio.</div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="productQuantity">Cantidad</label>
                <input type="number" class="form-control" id="productQuantity" placeholder="Ingresa la cantidad" required>
                <div class="invalid-feedback">Por favor, ingresa la cantidad.</div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="purchaseDate">Fecha de Compra</label>
                <input type="date" class="form-control" id="purchaseDate" required>
                <div class="invalid-feedback">Por favor, ingresa la fecha de compra.</div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="expiryDate">Fecha de Caducidad</label>
                <input type="date" class="form-control" id="expiryDate">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="supplier">Proveedor</label>
                <input type="text" class="form-control" id="supplier" placeholder="Ingresa el proveedor" required>
                <div class="invalid-feedback">Por favor, ingresa el proveedor.</div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="storageLocation">Ubicación en Almacén</label>
                <input type="text" class="form-control" id="storageLocation" placeholder="Ingresa la ubicación en almacén">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="additionalNotes">Notas Adicionales</label>
                <textarea class="form-control" id="additionalNotes" rows="3" placeholder="Ingresa notas adicionales"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<div class="container mt-4">
    <table class="table table-striped" id="inventoryTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del Producto</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Categoría</th>
                <th scope="col">Fecha de Compra</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Fecha de Caducidad</th>
                <th scope="col">Ubicación en Almacén</th>
                <th scope="col">Notas Adicionales</th>
            </tr>
        </thead>
        <tbody>
            <!-- Las filas se agregarán aquí dinámicamente -->
        </tbody>
    </table>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/gestion_inventario.css') }}">
@stop

@section('js')
    <script src="{{ asset('js/gestion_inventario.js') }}"></script>
@stop
