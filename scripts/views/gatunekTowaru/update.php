<div class="page-header">
<h3 class="text-info temat">Aktualizuj jednostkę</h3>
</div>
<div class="col-sm-8">
<div id="addDostawcy">
<p><?php if (isset($this->id)) {
    echo 'Rekord zaktualizowano';
} ?></p>
<?php foreach ($this->gatunek as $gat): ?>
<form  class="form-group" action="/gatunekTowaru/update" method="post">
    <div class="form-group">
    <input type="hidden" name="id_gat" value="<?= $gat['id_gat']?>"/>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Nazwa rodzju artykułu:</label><br/>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="nazwa_rodzaju" value="<?= $gat['nazwa_rodzaju']?>"/>
        </div>
    </div> 
    <button type="submit" name="submit" class="btn btn-success">
        Aktualizuj
    </button>
</form>
<?php endforeach; ?>
</div>
</div>

