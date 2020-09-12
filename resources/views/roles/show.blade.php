@extends('layouts.app')

@section('content')
@can('ver_roles')
    <section class="content-header">
        <h1>
            Role
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('roles.show_fields')
                    <a href="{{ route('roles.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endcan
@endsection
