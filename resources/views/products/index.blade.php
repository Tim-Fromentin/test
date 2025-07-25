<x-layout>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Images</th>
                    <th>Name</th>
                    <th>Stocks</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->product_serial_number}}</td>
                        <td><img width="100px"  src="https://cafthe.tim.fromentin.v70208.dev-campus.fr/assets/images/products/{{$product->product_img}}"></td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{$product->product_stock}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>



</x-layout>

