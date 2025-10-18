<x-layout>
    <form action="{{route('clients.store')}}" method="POST">
@csrf

        <label for="client_firstName">
        Prénom
            <input type="text" name="client_firstName" id="client_firstName">
        </label>

        <label for="client_lastName">
        Nom
            <input type="text" name="client_lastName" id="client_lastName">
        </label>

        <label for="client_email">
        Email
            <input type="email" name="client_email" id="client_email">
        </label>



        <label for="client_born_date">
        Date de naissance
            <input type="date" name="client_born_date" id="client_born_date">
        </label>

        <label for="client_adress">
        Adresse
            <input type="text" name="client_adress" id="client_adress">
        </label>

        <input type="number" name="client_first_conn" id="client_first_conn" value="1" min="1" max="1">

        <button type="submit" class="btn-primary">Créé le client</button>
    </form>
</x-layout>
