<x-layout>
    <form action="{{ route('products.update', $product) }}" method="POST" class="d-flex flex-column">
        @csrf

        <label>
            Nom du produit :
            <input type="text" name="product_name" value="{{ $product->product_name }}" />
        </label>

        <label>
            Description :
            <input type="text" name="product_desc" value="{{ $product->product_desc }}" />
        </label>

        <img width="300" src="https://cafthe.tim.fromentin.v70208.dev-campus.fr/assets/images/products/{{ $product->product_img ?? 'coffee.png' }}">

        <label>
            Prix HT :
            <input type="number" name="product_price_pre_tax" value="{{ $product->product_price_pre_tax }}">
            $
        </label>

        <label>
            Image :
            <input type="text" name="product_img" value="{{ $product->product_img }}">
        </label>

        <button type="submit" class="btn-primary">Modifier</button>
    </form>
</x-layout>
