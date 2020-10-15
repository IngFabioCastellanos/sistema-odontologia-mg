@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Desplegable Marca Instrumental</h1>
        <h1 class="pull-right">
           <a class="btn btn-danger pull-right" style="margin-top: -1px;margin-bottom: 5px" href="{{ route('desplegableMarcaInstrumentals.create') }}">Agregar Nueva Marca</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('desplegable_marca_instrumentals.table')
            </div>
        </div>
        <div class="text-center">

        @include('adminlte-templates::common.paginate', ['records' => $desplegableMarcaInstrumentals])

        </div>
    </div>
@endsection

