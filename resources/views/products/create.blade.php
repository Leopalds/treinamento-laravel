@extends('home')
@section('content')
    
    <form action="{{ route('products.store') }}" method="POST" >
        @csrf
        @include('products.form')

        <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
    </form>

@endsection