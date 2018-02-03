<div class="page-header">
<h3 class="text-info">Aktualizuj jednostkę</h3>
</div>
<div id="addDostawcy">
<p><?php if (isset($this->id)) {
    echo 'Rekord zaktualizowano';
} ?></p>
<?php foreach ($this->gatunek as $gat): ?>
<form  class="form-group" action="/gatunekTowaru/update" method="post">
    <div class="form-group">
    <input type="hidden" name="id_gat" value="<?= $gat['id_gat']?>"/>
    </div>
    <div class="form-group">
        <label>Nazwa rodzju artykułu</label><br/>
        <input type="text" name="nazwa_rodzaju" value="<?= $gat['nazwa_rodzaju']?>"/>
    </div> 
    <button type="submit" name="submit" class="btn btn-secondary">
        Aktualizuj
    </button>
</form>
<?php endforeach; ?>
</div>

