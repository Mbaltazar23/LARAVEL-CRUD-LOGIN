@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $libro->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $libro->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
