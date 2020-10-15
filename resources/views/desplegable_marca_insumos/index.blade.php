@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Desplegable Marca Insumos</h1>
        <h1 class="pull-right">
           <a class="btn btn-danger pull-right" style="margin-top: -1px;margin-bottom: 5px" href="{{ route('desplegableMarcaInsumos.create') }}">Agregar Nuevo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('desplegable_marca_insumos.table')
            </div>
        </div>
        <div class="text-center">

        @include('adminlte-templates::common.paginate', ['records' => $desplegableMarcaInsumos])

        </div>
    </div>
@endsection

