<div class="page-header">
<h3 class="text-info temat">Aktualizuj jednostkę</h3>
</div>
<div id="addDostawcy">
<p><?php if (isset($this->id)) {
    echo 'Rekord zaktualizowano';
} ?></p>
<?php foreach ($this->miary as $miara): ?>
<form  class="form-group" action="/miary/update" method="post">
    <div class="form-group">
    <input type="hidden" name="id_miary" value="<?= $miara['id_miary']?>"/>
    </div>
    <div class="form-group">
        <label>Nazwa jednostki miary</label><br/>
        <input type="text" name="miara" value="<?= $miara['miara']?>"/>
    </div> 
    <button type="submit" name="submit" class="btn btn-success">
        Aktualizuj
    </button>
</form>
<?php endforeach; ?>
</div>
