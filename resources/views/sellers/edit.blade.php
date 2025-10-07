<x-layout>
    <form action="{{route('seller.update', $seller)}}" method="post">
        @csrf
    <label for="name">
        Nom et Prénom
    <input type="text" name="name" id="name" value="{{$seller->name}}">
    </label>


    <label for="email">
        Email
        <input type="email" name="email" id="email" value="{{$seller->email}}">
    </label>

    <label for="password">
        Mot de passe
        <input type="password" name="password" id="password" value="{{$seller->password}}">
    </label>

        <button class="btn-primary" type="submit">Modifier</button>
    </form>
</x-layout>
