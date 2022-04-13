@extends('layouts.app')

@section('template_title')
    {{ $inversion->name ?? 'Show Inversion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inversion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inversion.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iduser:</strong>
                            {{ $inversion->idUser }}
                        </div>
                        <div class="form-group">
                            <strong>Valinversion:</strong>
                            {{ $inversion->valInversion }}
                        </div>
                        <div class="form-group">
                            <strong>Rentabilidad:</strong>
                            {{ $inversion->rentabilidad }}
                        </div>
                        <div class="form-group">
                            <strong>Numestado:</strong>
                            {{ $inversion->numEstado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
