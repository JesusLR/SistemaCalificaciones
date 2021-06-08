@extends('layouts.app')

@section('template_title')
    Materiauno
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materia Uno') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materiauno.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar a la lista') }}
                                </a>
                              </div>
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
                                    @foreach ($materiaunos as $materiauno)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $materiauno->matricula }}</td>
											<td>{{ $materiauno->u1 }}</td>
											<td>{{ $materiauno->u2 }}</td>
											<td>{{ $materiauno->u3 }}</td>
											<td>{{ $materiauno->u4 }}</td>

                                            <td>
                                                <form action="{{ route('materiauno.destroy',$materiauno->id) }}" method="POST">
                                                   <!-- <a class="btn btn-sm btn-primary " href="{{ route('materiauno.show',$materiauno->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>-->
                                                    <a class="btn btn-sm btn-success" href="{{ route('materiauno.edit',$materiauno->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $materiaunos->links() !!}
            </div>
        </div>
    </div>
@endsection
