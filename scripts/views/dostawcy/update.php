<h3>Aktualizuj dostawcę</h3>
<div id="Dostawcy">
<p><?php if (isset($this->id)) {
    echo 'Dodano nowy rekord';
} ?></p>

<?php foreach ($this->dostawcy as $dostawcy): ?>
<form  class="form-group" action="/dostawcy/update" method="post">
    <div class="form-group">
    <input type="hidden" name="id_dostawcy" value="<?= $dostawcy['id_dostawcy']?>"/>
    </div>
    <div class="form-group">
        <label>Nazwa</label><br/>
        <input type="text" name="nazwa_dost" value="<?= $dostawcy['nazwa_dost']?>"/>
    </div> 
    <div class="form-group">
        <label>Miasto</label><br/>
        <input type="text" name="miasto" value="<?= $dostawcy['miasto']?>"/>
    </div>
    <div class="form-group">
        <label>Adres</label><br/>
        <input type="text" name="adres_ul" value="<?= $dostawcy['adres_ul']?>"/>
    </div>
    <div class="form-group">
        <label>E-mail</label><br/>
        <input required type="email" name="email" value="<?= $dostawcy['email']?>"/>
    </div>
    <div class="form-group">
        <label>Telefon</label><br/>
        <input required type="tel" name="telefon" value="<?= $dostawcy['telefon']?>"/>
    </div>
    <div class="form-group">
        <label>Osoba do kontaktu</label><br/>
        <input type="text" name="os_do_kontaktu" value="<?= $dostawcy['os_do_kontaktu']?>"/>
    </div>
    <button type="submit" name="submit" class="btn btn-secondary">
        Aktualizuj
    </button>
</form>
</div>
<?php endforeach; ?>

