@extends('adminlte::page')

@section('title', 'AdminLTE')
@section('plugins.Select2', true)
@section('content_header')
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
    <h3 id="saludos" class="m-0 text-dark">Bienvenido, {{ Auth::user()->name }}</h3>
@stop

@section('content')
    <div class="row justify-content-md-center pb-5">


        <div class="col-md-8 col-12">


            <div class="sticky-top mb-3">
                <div class="card">
                 

                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12 col-md-12">
    
                                @if (session()->has('errors'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            {{session('errors')}}
                                        </ul>
                                    </div>
                                @endif
    
                                <table id="invoces_table" class="table table-bordered" style="font-size: 0.7rem">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Precio total</th>
                                            <th>Total de impuesto</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($invoices as $invoice)
                                            <tr>

                                               
                                                <td><span class="badge bg-danger">{{ $invoice->id }}</span></td>
                                                <td>{{ $invoice->total_price }}</td>
                                                <td>{{ $invoice->total_tax }}</td>
    
                                                <td class="project-actions text-right">
    
    
                                                    <a href="{{ route('invoices.show', $invoice->id) }}"
                                                        class="btn btn-success btn-sm">
                                                        <i class="fas fa-eye"></i>
                                                        
                                                    </a>
    
                                                   
    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
    
                            </div>
                        </div>
    
                    </div>


                        <div class="card-footer justify-content-md-center">
                            <a href="{{route('invoices.create')}}"><button type="button" class="btn btn-block bg-gradient-success">Generar facturas pendientes</button>  </a>  
                         </div>
                  


                </div>

            </div>

        </div>




   









    </div>


@stop

@section('css')


@stop

@section('js')




@stop
