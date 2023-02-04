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
                 
                    {{-- route('datas.update', Auth::user()) --}}

                    <form class="form-horizontal" action="{{ route('shopping.store', Auth::user()) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">




                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @isset ($message)
                                <div class="alert alert-success">
                                    {{ $message }}
                                </div>
                         @endif


                        <div class="row">

                            <div class="col-sn-6">

                                <div class="form-group">
                                    <label>Selecione el producto que desea comprar</label>
                                    <select id="produts" name="produts_id" class="form-control" >

                                      
                        
                                            @foreach ($produts as $produt)
                                            
                                            <option value="{{$produt->id}}">{{$produt->name}}</option>

                                            @endforeach

                                             


                                    </select>
                                </div>

                            </div>

                        </div>
                        

                    


                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success float-right">Comprar</button>
                    </div>

                </form>

                  


                </div>

            </div>

        </div>




   









    </div>


@stop

@section('css')


@stop

@section('js')




@stop
