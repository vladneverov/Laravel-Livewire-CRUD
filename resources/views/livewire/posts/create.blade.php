<div>
    <h2>Добавление записи</h2>

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

    <button wire:click="store" class="btn btn-primary">Создать запись</button>

</div>