<div class='mt-5'>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-3">
        <input type="text" wire:model.live='search' placeholder="pesquisar..." class="form-control">
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Ambiente_id</th>
                <th scope="col">Código</th>
                <th scope="col">Tipo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sensors as $s)
                <tr>
                    <th scope="row">{{ $p->id }}</th>
                    <td>{{ $s->ambiente_id }}</td>
                    <td>{{ $s->codigo }}</td>
                    <td>{{ $s->tipo }}</td>
                    <td>{{ $s->descricao }}</td>
                    <td><input class="form-check-input" type="checkbox" role="switch" id="status-{{ $s->id }}"
                            wire:click='"status({{ $s->id }})' @checked($s->status)>
                        <span class="badge bg-{{ $s->status ? 'success' : 'danger' }}">
                            {{ $s->status ? 'ATIVO' : 'INATIVO' }}
                        </span>
                    <td>
                        <a href="{{ route('sensor.edit', ['id' => $s->id]) }}" class="btn btn-sm btn-info">Editar</a>

                        <button wire:click='delete({{ $s->id }})' class="btn btn-sm btn-danger">Excluir</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
