<x-layout>
    <style>
        tr:hover {
            background: #fbfbfb;
        }
    </style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste produits</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Images</th>
                    <th>Nom</th>
                    <th>Prix TTC</th>
                    <th>Stocks</th>
                    <th>Voir/Modifier/Supprimer</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->product_serial_number}}</td>
                        <td><img width="100px" src="https://cafthe.tim.fromentin.v70208.dev-campus.fr/assets/images/products/{{$product->product_img ?? 'coffee.png'}}"></td>
                        <td>{{ $product->category->product_categorie_name ?? 'Non défini' }}</td>
                        <td>{{$product->product_price}} $</td>
                        <td>{{$product->product_stock}}</td>
                        <td>
                            <a class="btn-primary p-2" href="/product/{{$product->product_serial_number}}">Voir</a>
                            <a class="btn-primary p-2" href="/product/edit/{{$product->product_serial_number}}">Modifier</a>
                            <a class="btn-danger p-2" href="/product/delete/{{$product->product_serial_number}}">Supprimer</a>

                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>



</x-layout>

