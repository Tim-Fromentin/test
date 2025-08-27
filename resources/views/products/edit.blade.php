<x-layout>

    <form action="" class="d-flex flex-column">

    <input type="text" value="{{$product->product_name}}"/>
    <input type="text" value="{{$product->product_desc}}"/>

    <img width="300px" src="https://cafthe.tim.fromentin.v70208.dev-campus.fr/assets/images/products/{{$product->product_img ?? 'coffee.png'}}">
    <label for="">
    <input type="number" name="" id="" value="{{$product->product_price}}">
    $
    </label>
    </form>
</x-layout>
