<h3 class="text-info temat">Dodaj dostawcę</h3>
<div id="addDostawcy">
    <p><?php
        if (isset($this->id)) {
            echo 'Dodano nowy rekord';
        }
        ?></p>
    <div class="col-md-8">
        <form  class="form-group" action="/dostawcy/add" method="post">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Nazwa</label><br/>
                <div class="col-md-8">
                    <input type="text" name="nazwa_dost" placeholder="Wpisz nazwę dostawcy"/>
                </div>
            </div>

            <div class="form-group row">

                <label class="col-sm-4 col-form-label">Miasto</label><br/>
                <div class="col-md-8">
                    <input type="text" name="miasto" placeholder="Wpisz miasto dostawcy"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Adres</label><br/>
                <div class="col-md-8">
                    <input type="text" name="adres_ul" placeholder="Wpisz adres: ulicę, nr"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">E-mail</label><br/>
                <div class="col-md-8">
                    <input required type="email" name="email" placeholder="Wpisz adres email"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Telefon</label><br/>
                <div class="col-md-8">
                    <input required type="tel" name="telefon" placeholder="Wpisz numer telefonu"/>
                </div>
            </div>
            <div class="form-group row">

                <label class="col-sm-4 col-form-label">Osoba do kontaktu</label><br/>
                <div class="col-md-8">
                    <input type="text" name="os_do_kontaktu" placeholder="Wpisz osobę do kontaktu"/>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-success">
                Dodaj
            </button>
        </form>
    </div>
</div>

