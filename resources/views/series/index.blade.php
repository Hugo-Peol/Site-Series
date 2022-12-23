<x-layout title="Séries">


<a href="/series/create" class="btn mb-2">Adicionar</a>

<ul class="list-group">
    @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }} 

         <form method="post" action="{{ route('series.destroy', $serie->id) }}" >  
            @csrf
            @method('delete')

            <button class="btn-danger brn-sm">X</button>
        </form>   

        </li> 
    @endforeach
    

</ul>

</x-layout>






   