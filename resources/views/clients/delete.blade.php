<x-layout>
    <form action="{{ route('clients.destroy', $client->client_id) }}" method="POST">
        @csrf
        @method('DELETE')
        <h1>Voulez-vous vraiment supprimer le client : {{ $client->client_firstName }} {{ $client->client_lastName }}</h1>
        <blockquote>Le client ne sera pas supprimé de la base de données, mais toutes ses informations personnelles seront effacées conformément au RGPD.</blockquote>
        <a href="{{ route('clients.index') }}">Une erreur ? Revenir aux clients</a>
        <button type="submit">Supprimer</button>
    </form>

</x-layout>
