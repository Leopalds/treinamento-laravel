@extends('home')
@section('content')
    @include('products.form')
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary mt-2 ml-1"><i class="fas fa-pen"></i> Editar</a>
    <a href="{{ route('products.index') }}" class="btn btn-dark mt-2 "><i class="fas fa-undo-alt"></i> Voltar</a>
@endsection

@push('js')
    <script>
        const formControls = document.querySelectorAll('.form-control');
        formControls.forEach(formControl => {
            formControl.setAttribute("disabled", true)
        });
    </script>
@endpush