@extends('plantilla.admin')

@section('titulo','Ver Categoría')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Categorías</a></li>
    <li class="breadcrumb-item active">@yield('titulo')</li>
@endsection

@section('contenido')
<div id="apicategory">
<form>
@csrf
<span style="display:none" id="editar">{{ $editar }}</span>
<span style="display:none" id="nombretemp">{{ $cat->nombre }}</span>
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Administración de Categorías</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        
        <div class="container">
            
            <h1>Crear categoría</h1>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input v-model="nombre" 
                @blur='getCategory'
                @focus='div_aparecer=false'
                class="form-control" type="text" name="nombre" id="nombre" readonly>

                <label for="slug">Slug</label>
                <input v-model="generarSlug" class="form-control" type="text" name="slug" id="slug" readonly>

                <label for="descripcion">Descripción</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5" readonly>
                {{$cat->descripcion}}
                </textarea>
            </div>

        </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    <a href="{{ route('cancelar','admin.category.index') }}" class="btn btn-danger">Cancelar</a>
    <a href="{{ route('admin.category.edit',$cat->slug) }}" class="btn btn-outline-success float-right">Editar</a>
        
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->
</form>
</div>
@endsection