<x-layout>
    <style>
        @import "//cdn.datatables.net/2.3.3/css/dataTables.dataTables.min.css";
    </style>

    <table id="categoryTable" class="display" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom de la catégorie</th>
            <th>Modifier</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category['product_categorie_id'] }}</td>
                <td>{{ $category['product_categorie_name'] }}</td>
                <td><a href="categories/edit/{{$category['product_categorie_id']}}">Modifier</a></td>
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
            $('#categoryTable').DataTable({
                responsive: true,
                pageLength: 25,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json"
                }
            });
        });
    </script>
</x-layout>
