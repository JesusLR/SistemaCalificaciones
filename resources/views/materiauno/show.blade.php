@extends('layouts.app')

@section('template_title')
    {{ $materiauno->name ?? 'Show Materiauno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Materiauno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materiauno.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Matricula:</strong>
                            {{ $materiauno->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>U1:</strong>
                            {{ $materiauno->u1 }}
                        </div>
                        <div class="form-group">
                            <strong>U2:</strong>
                            {{ $materiauno->u2 }}
                        </div>
                        <div class="form-group">
                            <strong>U3:</strong>
                            {{ $materiauno->u3 }}
                        </div>
                        <div class="form-group">
                            <strong>U4:</strong>
                            {{ $materiauno->u4 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
