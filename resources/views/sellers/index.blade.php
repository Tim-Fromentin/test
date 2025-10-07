<x-layout>
    <style>
        @import "//cdn.datatables.net/2.3.3/css/dataTables.dataTables.min.css";
    </style>

    <table id="sellerTable" class="display" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom et Prénom</th>
            <th>Email</th>
            <th>Voir</th>
            <th>Modifier</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sellers as $seller)
            <tr>
                <td>{{ $seller['id'] }}</td>
                <td>{{ $seller['name'] }}</td>
                <td>{{$seller['email']}}</td>
                <td><a href="seller/{{$seller['id']}}">Voir</a></td>
                <td><a href="seller/edit/{{$seller['id']}}">Modifier</a></td>
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
            $('#sellerTable').DataTable({
                responsive: true,
                pageLength: 25,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json"
                }
            });
        });
    </script>
</x-layout>
