@extends('home')
@section('content')
<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    @include('products.form')

    <button type="submit" class="btn btn-primary mt-1">Editar</button>
</form>
    
@endsection