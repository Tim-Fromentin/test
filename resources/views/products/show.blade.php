<x-layout>
    <h1>{{$product->product_name}}</h1>
    <h6>{{$product->product_desc}}</h6>
    <img width="300px" src="https://cafthe.tim.fromentin.v70208.dev-campus.fr/assets/images/products/{{$product->product_img ?? 'coffee.png'}}">
    <strong>{{$product->product_price}}  $</strong>
</x-layout>
