<div>
    <h2>Редактирование записи</h2>

    <div class="form-group">
        <label for="title">Название</label>
        <input wire:model="title" type="text"
               class="form-control" id="title">
    </div>

    <div class="form-group">
        <label for="description">Описание</label>
        <textarea wire:model="description" class="form-control" 
                  id="description" rows="4"></textarea>
    </div>

    <button wire:click="update" class="btn btn-primary">Отредактировать</button>

</div>