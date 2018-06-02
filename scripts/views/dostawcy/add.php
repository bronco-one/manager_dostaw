<h3 class="text-info temat">Dodaj dostawcę</h3>
<div id="addDostawcy">
<p><?php if (isset($this->id)) {
    echo 'Dodano nowy rekord';
} ?></p>

<form  class="form-group" action="/dostawcy/add" method="post">
    <div class="form-group">
        <label>Nazwa</label><br/>
        <input type="text" name="nazwa_dost" placeholder="Wpisz nazwę dostawcy"/>
    </div> 
    <div class="form-group">
        <label>Miasto</label><br/>
        <input type="text" name="miasto" placeholder="Wpisz miasto dostawcy"/>
    </div>
    <div class="form-group">
        <label>Adres</label><br/>
        <input type="text" name="adres_ul" placeholder="Wpisz adres: ulicę, nr"/>
    </div>
    <div class="form-group">
        <label>E-mail</label><br/>
        <input required type="email" name="email" placeholder="Wpisz adres email"/>
    </div>
    <div class="form-group">
        <label>Telefon</label><br/>
        <input required type="tel" name="telefon" placeholder="Wpisz numer telefonu"/>
    </div>
    <div class="form-group">
        <label>Osoba do kontaktu</label><br/>
        <input type="text" name="os_do_kontaktu" placeholder="Wpisz osobę do kontaktu"/>
    </div>
    <button type="submit" name="submit" class="btn btn-success">
        Dodaj
    </button>
</form>
</div>

