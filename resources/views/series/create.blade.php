<x-layout title="Nova Série">

        <form action="{{ route('series.store') }}" method="post">
            @csrf

            <div class="form-group mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id=nome class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Adicionar</button>
        </form>
        

</x-layout>
