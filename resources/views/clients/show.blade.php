<x-layout>
    <h1 class="mb-4">{{$client->client_firstName}} {{$client->client_lastName}}</h1>

    <div class="mb-5">
        <h2>Informations personnel</h2>
        <ul class="list-group">
            <li class="list-group-item">Adresse : {{$client->client_email}}</li>
            <li class="list-group-item">Adresse : {{$client->client_adress}}</li>
            <li class="list-group-item">Date de naissance : {{$client->client_born_date}}</li>
        </ul>
    </div>



    <table id="commandsTable" class="display" style="width:100%; margin-top: 50px" >
        <thead>
        <tr>
            <th>ID</th>
            <th>Total (€)</th>
            <th>Quantité finale</th>
            <th>Adresse</th>
            <th>État</th>
            <th>Voir</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($commands as $command)
            <tr>
                <td>{{ $command->command_id }}</td>
                <td>{{ number_format($command->command_total, 2, ',', ' ') }} €</td>
                <td>{{ $command->command_final_quantity }}</td>
                <td>{{ $command->command_adress }}</td>
                <td>
                    @if($command->command_state === 'livré')
                        🟢 Terminer
                    @elseif($command->command_state === 'annuler')
                        🔴 Annuler
                    @else
                        🟠 En cours
                    @endif
                </td>
                <td><a href="../commands/details/{{ $command->command_id }}">Voir</a></td>
                <td><a href="../commands/edit/{{ $command->command_id }}">Modifier</a></td>
                <td><a href="commands/delete/{{ $command->command_id }}">Supprimer</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.3.3/js/dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#commandsTable').DataTable({
                responsive: true,
                pageLength: 25,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json"
                }
            });
        });
    </script>
</x-layout>
