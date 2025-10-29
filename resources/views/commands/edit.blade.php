<x-layout>
    <form action="{{ route('commands.update', $command) }}" method="POST">
        @csrf
        <h2 class="mb-3">Modification de la commande numéro : {{$command->command_id}}</h2>
        <label for="command_adress">
            Adresse
            <input type="text" name="command_adress" id="command_adress" value="{{$command->command_adress}}">
        </label>
        <select name="command_state" id="command_state">
            <option value="livré" @if($command->command_state === 'livré') selected @endif>Livré</option>
            <option value="annuler" @if($command->command_state === 'annuler') selected @endif>Annuler</option>
            <option value="en cours" @if($command->command_state === 'en cours') selected @endif>En cours</option>
        </select>
        <button type="submit" class="btn btn-primary">Modifier la commande</button>
    </form>
</x-layout>
