<x-layout>
    <form action="{{route('products.destroy', $product->product_serial_number)}}" method="post" class="">
        @csrf
        @method('DELETE')
        <h2>En cliquant sur ce button vous allez supprimer le produit : {{$product->product_name}}</h2>
        <h3>Avec l'id : {{$product->product_serial_number}}</h3>
        <a href="/products">Une erreur ? revenir à l'acceuil</a>

        <button type="submit" class="btn-danger badge-pill">Supprimer</button>
    </form>
</x-layout>
