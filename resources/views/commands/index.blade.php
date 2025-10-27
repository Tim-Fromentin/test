<x-layout>
    <style>
        tr:hover {
            background: #fbfbfb;
        }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste Commande du client {{$client->client_firstName}} {{$client->client_lastName}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Total</th>
                        <th>Statut</th>
                        <th>Vendeur</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($commands as $command)
                        <tr>
                            <td>{{$command->command_id}}</td>
                            <td>{{$command->command_total}} $</td>
                            <td>{{$command->command_state}}</td>
                            <td>
                                <a href="../seller/{{$command->seller_id}}">
                                {{$command->seller_id}}
                                </a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>



</x-layout>
