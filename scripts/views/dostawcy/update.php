<div class="page-header">
<h3 class="text-info temat">Aktualizuj dostawcę</h3>
</div>
<div class="col-sm-8">
<div id="Dostawcy">
<p><?php if (isset($this->id)) {
    echo 'Rekord zaktualizowano';
} ?></p>

<?php foreach ($this->dostawcy as $dostawcy): ?>
<form  class="form-group" action="/dostawcy/update" method="post">
    <div class="form-group">
    <input type="hidden" name="id_dostawcy" value="<?= $dostawcy['id_dostawcy']?>"/>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Nazwa:</label><br/>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="nazwa_dost" value="<?= $dostawcy['nazwa_dost']?>"/>
        </div>
    </div> 
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Miasto:</label><br/>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="miasto" value="<?= $dostawcy['miasto']?>"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Adres:</label><br/>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="adres_ul" value="<?= $dostawcy['adres_ul']?>"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">E-mail:</label><br/>
        <div class="col-sm-8">
        <input required type="email" class="form-control" name="email" value="<?= $dostawcy['email']?>"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Telefon:</label><br/>
        <div class="col-sm-8">
        <input required type="tel" class="form-control" name="telefon" value="<?= $dostawcy['telefon']?>"/>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label">Osoba do kontaktu:</label><br/>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="os_do_kontaktu" value="<?= $dostawcy['os_do_kontaktu']?>"/>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-success">
        Aktualizuj
    </button>
</form>
</div>
<?php endforeach; ?>
</div>
