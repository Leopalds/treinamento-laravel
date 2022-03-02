@extends('home')
@section('content')
<div class="card-body table-responsive ">
    <table  class="table table-hover table-striped" id="{{ $id ?? null }}">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Preço</td>
                <td>Quantidade</td>
                <td></td>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td class="options d-flex justify-content-center gap-1">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-dark">
                            <i class="fas fa-search"></i>
                        </a>

                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
    
                        <form class="form-delete d-inline-block" action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="margin-top: 40px;">
        <a href="{{ route('products.create') }}" class="btn btn-primary"> Adicionar +</a>
    </div>
</div>
@endsection