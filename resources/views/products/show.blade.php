@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   //aqui se coloca la seguridad de los front, claro depende el @case 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">// esto esta repetido se puede eliminar, pura logica
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
            /solo usa form grup revisa y veras
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection