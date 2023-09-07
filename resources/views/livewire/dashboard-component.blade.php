    <div>
        <div class="container">
            <h3 id="titre-prof">Gestion de Chiffrage </h3>
            <p id="text-prof">    Création / modification 
            </p>
        </div>
    
       <input type="text" wire:model='firstName'>
       @error('firstName')
           {{ $message }}
       @enderror
       <input type="text" wire:model='lastName' value="{{ $firstName }}">
       <button wire:click.prevent='store' >Store</button>
    
        @foreach ($emp as $em )
            <li>{{ $em->nom }}</li>
        @endforeach
    
    </div>
 

