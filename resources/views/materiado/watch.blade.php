@extends('layouts.app')

@section('template_title')
    Materiado
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materia Dos') }}
                            </span>

                             <!--<div class="float-right">
                                <a href="{{ route('materiados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Alumno') }}
                                </a>
                              </div>-->
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Matricula</th>
										<th>U1</th>
										<th>U2</th>
										<th>U3</th>
										<th>U4</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materiados as $materiado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $materiado->matricula }}</td>
											<td>{{ $materiado->u1 }}</td>
											<td>{{ $materiado->u2 }}</td>
											<td>{{ $materiado->u3 }}</td>
											<td>{{ $materiado->u4 }}</td>

                                            <td>
                                                <form action="{{ route('materiados.destroy',$materiado->id) }}" method="POST">
                                                    <!--<a class="btn btn-sm btn-primary " href="{{ route('materiados.show',$materiado->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>-->
                                                    <!--<a class="btn btn-sm btn-success" href="{{ route('materiados.edit',$materiado->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>-->
                                                    @csrf
                                                    @method('DELETE')
                                                    <!--<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>-->
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $materiados->links() !!}
            </div>
        </div>
    </div>
@endsection
