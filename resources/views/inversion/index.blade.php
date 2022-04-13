@extends('layouts.app')

@section('template_title')
    Inversion
@endsection



@section('content')



  <!-- Main content -->
    <!-- Header -->
    <!-- Header -->
    
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Mis Inversiones</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                  <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Inversiones</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tables</li>
                  </ol>
                </nav>
              </div>
              <div class="col-lg-6 col-5 text-right">
                <a href="inversion/create" class="btn btn-sm btn-neutral">New</a>
                <a href="#" class="btn btn-sm btn-neutral">Filters</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--6">
        <!-- Dark table -->
        <div class="row">
          <div class="col">
            <div class="card bg-default shadow">
              <div class="card-header bg-transparent border-0">
                <h3 class="text-white mb-0">Mis inversiones</h3>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center table-dark table-flush">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="sort" data-sort="name">Valor Inversion</th>
                      <th scope="col" class="sort" data-sort="budget">Rentabilidad</th>
                      <th scope="col" class="sort" data-sort="status">Estado</th>
                      <th scope="col" class="sort" data-sort="completion">Completion</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                      @foreach ($inversion as $inversion)
                              <tr>
                                  <th scope="row">
                                      <div class="media-body">
                                      <span class="name mb-0 text-sm">{{ $inversion->valInversion }}</span>
                                      </div>
                                  </th>
                                  <td class="budget">
                                      {{ $inversion->rentabilidad }}
                                  </td>
                                  <td>
                                  <span class="badge badge-dot mr-4">
                                      <i class="bg-warning"></i>
                                      <span class="status">{{ $inversion->numEstado }}</span>
                                  </span>
                                  </td>
                                  <td>
                                  <div class="d-flex align-items-center">
                                      <span class="completion mr-2">60%</span>
                                      <div>
                                      <div class="progress">
                                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                      </div>
                                      </div>
                                  </div>
                                  </td>
                                  <td class="text-right">
                                  <div class="dropdown">
                                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                      <a class="dropdown-item" href="{{ route('inversion.edit',$inversion->id) }}">Editar</a>
                                      <a class="dropdown-item" href="{{ route('inversion.destroy',$inversion->id) }}">Eliminar</a>
                                      </div>
                                  </div>
                                  </td>
                              </tr>
                          @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer -->
        <footer class="footer pt-0">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
          <div class="copyright text-center text-xl-left text-muted">
              &copy; {{ now()->year }} <a href="" class="font-weight-bold ml-1" target="_blank">Jhon Rosero</a>
          </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    
    

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Inversion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inversion.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    
                                <i class="fa-solid fa-file-circle-plus"></i>
                                    {{ __('Nueva Inversion') }}
                                    
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
                                        
										<th>Iduser</th>
										<th>Valor Inversion</th>
										<th>Rentabilidad</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inversion as $inversion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inversion->idUser }}</td>
											<td>{{ $inversion->valInversion }}</td>
											<td>{{ $inversion->rentabilidad }}</td>
											<td>{{ $inversion->numEstado }}</td>

                                            <td>
                                                <form action="{{ route('inversion.destroy',$inversion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('inversion.show',$inversion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('inversion.edit',$inversion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $inversion->links() !!}
            </div>
        </div>
    </div> --}}
@endsection
