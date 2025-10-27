<x-layout>
    <style>
        @import "//cdn.datatables.net/2.3.3/css/dataTables.dataTables.min.css";
    </style>

    <table id="clientTable" class="display" style="width:100%">
        <thead>
        <tr>
            <th>1ére connexion</th>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Commander avec ce client</th>
            <th>Voir</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            @if($client['client_firstName'] !== 'CLIENT DELETE')

            <tr>
                <td class="text-center">
                    @if($client['client_first_conn'] === 1)
                        🟢
                    @else
                        🔴
                    @endif
                </td>
                <td>{{ $client['client_id'] }}</td>
                <td>{{ $client['client_lastName'] }}</td>
                <td>{{ $client['client_firstName'] }}</td>
                <td>{{$client['client_email']}}</td>
                <td><a href="commands/create/{{$client['client_id']}}">Commander</a></td>
                <td><a href="client/{{$client['client_id']}}">Voir</a></td>
                <td><a href="client/edit/{{$client['client_id']}}">Modifier</a></td>
                <td><a href="client/delete/{{$client['client_id']}}">Supprimer</a></td>

            </tr>
            @endif
        @endforeach
        </tbody>
    </table>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/2.3.3/js/dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#clientTable').DataTable({
                responsive: true,
                pageLength: 25,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json"
                }
            });
        });
    </script>
</x-layout>
