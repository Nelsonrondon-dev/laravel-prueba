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
                            <div class="col-12">

                                <div class="invoice p-3 mb-3">

                                    <div class="row">
                                        <div class="col-12">
                                            <h4>
                                                <i class="fas fa-globe"></i> Factura, Inc.
                                                {{-- <small class="float-right">Fecha: {{ $invoice->created_at }} </small> --}}
                                            </h4>
                                        </div>

                                    </div>

                                    <div class="row invoice-info">
                                        <div class="col-sm-4 invoice-col">
                                            Para
                                            <address>
                                                <strong>{{ $invoice->user->name }}.</strong><br>
                                                795 Folsom Ave, Suite 600<br>
                                                Email: {{ $invoice->user->email }}.<br>

                                            </address>
                                        </div>

                                        <div class="col-sm-4 invoice-col">
                                            To
                                            <address>
                                                <strong>Nelson Rondon</strong><br>

                                                Email: nelsonrondon36@gmail.com
                                            </address>
                                        </div>

                                        <div class="col-sm-4 invoice-col">
                                            <b>Invoice # <strong>{{ $invoice->id }}.</strong><br>
                                            </b><br>
                                            <br>

                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Nombre</th>
                                                        <th>precio</th>
                                                        <th>Impuesto</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($invoiceArrays as $invoiceArray)
                                                        <tr>
                                                            <td>{{$invoiceArray->id}}</td>
                                                            <td>{{$invoiceArray->name}}</td>

                                                            <td>{{$invoiceArray->price}}</td>
                                                            <td>{{$invoiceArray->tax*100}}%</td>
                                                          

                                                        </tr>
                                                    @endforeach



                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-6">
                                           
                                        </div>

                                        <div class="col-6">
                                            <p class="lead">Totales</p>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th style="width:50%">Subtotal:</th>
                                                            <td>{{$invoice->total_price}}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total Tax</th>
                                                            <td>{{$invoice->total_tax}}</td>
                                                        </tr>
                                                        
                                                        {{-- <tr>
                                                            <th>Total:</th>
                                                            <td>$265.24</td>
                                                        </tr> --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>


                                    
                                </div>

                            </div>
                        </div>


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
