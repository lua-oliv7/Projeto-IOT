<div class="mt-5">
    <form class="row g-3"wire:submit.prevent='store'>
        <div class="col-12">
            <label for="ambiente_id" class="form-label">Ambiente_id</label>
            <input type="text" class="form-control" id="ambiente_id"
            wire:model='ambiente_id'>
        </div>
        <div class="col-12">
            <label for="codigo" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo"
            wire:model='codigo'>
        </div>
        <div class="col-md-12">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo"
            wire:model='tipo'>
        </div>
        
        <div class="col-md-12">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao"
            wire:model='descricao'>
        </div>

        <div class="col-md-12">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status"
            wire:model='status'>
        </div>
       
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>