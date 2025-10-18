<x-layout>
    <h1 class="mb-4">{{$client->client_firstName}} {{$client->client_lastName}}</h1>

    <div>
        <h2>Informations personnel</h2>
        <ul class="list-group">
            <li class="list-group-item">Adresse : {{$client->client_email}}</li>
            <li class="list-group-item">Adresse : {{$client->client_adress}}</li>
            <li class="list-group-item">Date de naissance : {{$client->client_born_date}}</li>
        </ul>
    </div>
</x-layout>
