<x-layout>
    <form action="{{route('categories.update', $productCategory)}}" method="POST">
        @csrf
        <label for="product_categorie_name">
            Nom de la catégorie
            <input type="text" name="product_categorie_name" id="product_categorie_name" value="{{$productCategory->product_categorie_name}}">
        </label>

        <label for="product_type_sell">
            Type de vente
        <select name="product_type_sell" id="product_type_sell">
            <option value="0">Poids</option>
            <option value="1">Quantité</option>
        </select>
        </label>

        <button type="submit" class="btn-primary">Modifier</button>
    </form>
</x-layout>
