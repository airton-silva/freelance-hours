<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <h1>Meu componente Liviewire</h1>
    <input wire:model.live="search" />
    <br>
   
    <ul>
        @foreach ($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>
</div>
