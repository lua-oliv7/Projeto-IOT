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
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ambientes as $a)
                <tr>
                    <th scope="row">{{ $a->id }}</th>
                    <td>{{ $a->nome }}</td>
                    <td>{{ $a->descricao }}</td>
                    <td><input class="form-check-input" type="checkbox" role="switch" id="status-{{ $a->id }}"
                            wire:click='"status({{ $a->id }})' @checked($a->status)>
                        <span class="badge bg-{{ $a->status ? 'success' : 'danger' }}">
                            {{ $a->status ? 'ATIVO' : 'INATIVO' }}
                        </span>
                    <td>
                    <td>
                        <a href="{{ route('ambiente.edit', ['id' => $a->id]) }}" class="btn btn-sm btn-info">Editar</a>

                        <button wire:click='delete({{ $a->id }})' class="btn btn-sm btn-danger">Excluir</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
