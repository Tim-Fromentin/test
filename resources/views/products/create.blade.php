<x-layout>
<h1>Création d'un produit</h1>

    <form action="" class="d-flex flex-column">
        <label for="product_name" class="d-flex flex-column">
            Nom
            <input type="text" name="product_name" id="product_name" required>
        </label>

        <label for="product_desc" class="d-flex flex-column">
            Description
            <textarea name="product_desc" id="product_desc" cols="30" rows="10"></textarea>
        </label>
        <label for="product_price_pre_tax" class="d-flex flex-column">
            Prix HT
            <input type="number" name="product_price_pre_tax" id="product_price_pre_tax" min="0.1" step="0.1" required />
        </label>

        <label for="product_img" class="d-flex flex-column">
            Images
            <input type="text" name="product_img" id="product_img" />
        </label>

        <label for="product_stocks" class="d-flex flex-column">
            Stocks
            <input type="number" name="product_stocks" id="product_stocks" min="1" step="1" value="1" />
        </label>
        <label for="product_weight" class="d-flex flex-column">
Poids
            <input type="number" name="product_weight" id="product_weight" min="0.1" step="0.1" value="5" />
        </label>

        <label for="product_categorie_id">
            Catégories
            <select name="product_categorie_id" id="product_categorie_id">
                <option value="0">Aucun</option>
                @foreach($categories as $categorie)
                    <option value="{{$categorie['product_categorie_id']}}">{{$categorie['product_categorie_name']}}</option>
                @endforeach
            </select>
        </label>


        <button class="btn-primary" type="submit">Créé</button>
    </form>
</x-layout>
