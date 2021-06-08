@extends('layouts.app')

@section('template_title')
    {{ $materiado->name ?? 'Show Materiado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materiado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materiados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $materiado->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>U1:</strong>
                            {{ $materiado->u1 }}
                        </div>
                        <div class="form-group">
                            <strong>U2:</strong>
                            {{ $materiado->u2 }}
                        </div>
                        <div class="form-group">
                            <strong>U3:</strong>
                            {{ $materiado->u3 }}
                        </div>
                        <div class="form-group">
                            <strong>U4:</strong>
                            {{ $materiado->u4 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
