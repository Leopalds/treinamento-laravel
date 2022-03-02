<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" autofocus class="form-control" required value="{{ old('name', $product->name)}}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="price" class="required">Preço </label>
        <input type="number" name="price" id="price" class="form-control" required value="{{ old('price', $product->price)}}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="quantity" class="required">Quantidade </label>
        <input type="number" name="quantity" id="quantity" class="form-control" required value="{{ old('quantity', $product->quantity)}}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="description" class="required d-block">Descrição </label>
        <textarea name="description" id="description" cols="3" class="form-control">{{ old('description', $product->description)}}</textarea>
    </div>
</div>