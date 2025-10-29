<x-layout>
    <style>
        tr:hover {
            background: #fbfbfb;
        }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Vous allez commander avec le client : {{$client->client_firstName}} {{$client->client_lastName}}</h6>
            <p class="m-0 font-weight-bold text-primary">Son ID client est le : {{$client->client_id}}</p>
            <div class="card mt-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Panier</h5>

                    @if(!empty($cart) && is_array($cart))
                        <ul class="list-group mb-3">
                            @php $total = 0; @endphp

                            @foreach($cart as $el)
                                @php
                                    $price = $el['price'] ?? 0;
                                    $quantity = $el['quantity'] ?? 0;
                                    $total += $price * $quantity;
                                @endphp

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold text-secondary">#{{ $el['id'] ?? '-' }}</span> —
                                        <span class="fw-medium">{{ $el['name'] ?? 'Article' }}</span>
                                        <small class="text-muted d-block">
                                            Prix : {{$price}} €
                                        </small>
                                    </div>

                                    <div class="d-flex align-items-center gap-3">
                        <span class="badge rounded-pill">
                            x{{ $quantity }}
                        </span>


                                        <form action="" method="POST" class="m-0 p-0">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="bi bi-trash"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <div class="d-flex justify-content-between align-items-center border-top pt-2">
                            <strong>Total :</strong>
                            <span class="fs-5 fw-semibold text-success">
                {{ $total }} €
            </span>
                        </div>
                    @else
                        <p class="text-center text-muted mb-0">Aucun article dans le panier</p>
                    @endif
                </div>




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
                        <th>Ajouter au panier</th>
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
                                <form action="{{ route('commands.addCart', $product->product_serial_number) }}" method="POST">
                                    @csrf
                                <button type="submit" class="btn-primary p-2">Ajouter</button>
                                </form>

                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                <form action="{{route('commands.command', $client)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Commander</button>
                </form>
            </div>
        </div>
    </div>



</x-layout>
