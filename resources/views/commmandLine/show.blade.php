<x-layout>
    <div class="container my-5">
        <h2 class="mb-4 text-center">Liste des lignes de commande</h2>

        <div class="table-responsive">
            <table class="table table-hover table-bordered align-middle shadow-sm">
                <thead class="table-dark text-center">
                <tr>
                    <th scope="col">ID Ligne</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Prix total ($)</th>
                    <th scope="col">Numéro de série</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lines as $line)
                    <tr>
                        <td class="text-center">{{ $line->command_line_id }}</td>
                        <td class="text-center">{{ $line->command_quantity }}</td>
                        <td class="text-center">{{ number_format($line->command_total_price, 2, ',', ' ') }} $</td>
                        <td class="text-center">{{ $line->product->product_name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
