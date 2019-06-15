<div class="page-header">
<h3 class="text-info temat">Aktualizuj jednostkę</h3>
</div>
<div class="col-sm-8">
<div id="addDostawcy">
<p><?php if (isset($this->id)) {
    echo 'Rekord zaktualizowano';
} ?></p>
<?php foreach ($this->miary as $miara): ?>
<form  class="form-group" action="/miary/update" method="post">
    <div class="form-group">
    <input type="hidden" name="id_miary" value="<?= $miara['id_miary']?>"/>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Nazwa jednostki miary:</label><br/>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="miara" value="<?= $miara['miara']?>"/>
        </div>
    </div> 
    <button type="submit" name="submit" class="btn btn-success">
        Aktualizuj
    </button>
</form>
<?php endforeach; ?>
</div>
</div>
