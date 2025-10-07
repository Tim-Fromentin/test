<x-layout>
    <form action="{{ route('categories.destroy', $productCategory->product_categorie_id) }}" method="POST">
        @csrf
        @method('DELETE')
        <h1>Voulez-vous vraiment supprimer la catégorie : {{ $productCategory->product_categorie_name }}</h1>
        <a href="{{ route('categories.index') }}">Une erreur ? Revenir aux catégories</a>
        <button type="submit">Supprimer</button>
    </form>

</x-layout>
