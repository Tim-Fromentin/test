<x-layout>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf

        <label for="client_firstName">
            Prénom
            <input type="text" name="client_firstName" id="client_firstName" value="{{$client->client_firstName}}">
        </label>

        <label for="client_lastName">
            Nom
            <input type="text" name="client_lastName" id="client_lastName" value="{{$client->client_lastName}}">
        </label>

        <label for="client_email">
            Email
            <input type="email" name="client_email" id="client_email" value="{{$client->client_email}}">
        </label>



        <label for="client_born_date">
            Date de naissance
            <input type="date" name="client_born_date" id="client_born_date" value="{{$client->client_born_date}}">
        </label>

        <label for="client_adress">
            Adresse
            <input type="text" name="client_adress" id="client_adress" value="{{$client->client_adress}}">
        </label>


        <button type="submit" class="btn-primary">Modifier le client</button>
    </form>
</x-layout>
