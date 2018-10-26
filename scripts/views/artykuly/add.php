<h3 class="text-info temat">Dodaj artykuł</h3>
<div class="col-md-8" id="addDostawcy">
    <p><?php
        if (isset($this->id)) {
            echo 'Dodano nowy rekord';
        }
        ?></p>

    <form  class="form-group" action="/artykuly/add" method="post">
        <div class="form-group row">
            <label for="id_dostawcy" class="col-sm-4 col-form-label">Wybierz dostawcę</label><br/>
            <div class="col-md-8">
                <select  class="form-control" name="id_dostawcy" >
                    <?php foreach ($this->dostawcy as $dostawcy): ?>
                        <option value="<?= $dostawcy['id_dostawcy'] ?>"><?= $dostawcy['nazwa_dost'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>
        <div class="form-group row">
            <label for="id_gat" class="col-sm-4 col-form-label">Wybierz gatunek towaru</label><br/>
            <div class="col-md-8">
                <select  class="form-control" name="id_gat">
                    <?php foreach ($this->gatunki as $gatunek): ?>
                        <option value="<?= $gatunek['id_gat'] ?>"><?= $gatunek['nazwa_rodzaju'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nazwa_art" class="col-sm-4 col-form-label">Nazwa artykułu</label><br/>
            <div class="col-md-8">
                <input type="text" class="form-control" name="nazwa_art" placeholder="Wpisz nazwę artykułu"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="wielkosc_miary" class="col-sm-4 col-form-label">Ilość/Waga</label><br/>
            <div class="col-md-8">
                <input required type="text" class="form-control" name="wielkosc_miary" placeholder="Wpisz wagę artykyłu"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="id_miary" class="col-sm-4 col-form-label">Wybierz jednostkę miary</label><br/>
            <div class="col-md-8">
                <select  class="form-control" name="id_miary" >
                    <?php foreach ($this->miary as $jednostka): ?>
                        <option value="<?= $jednostka['id_miary'] ?>"><?= $jednostka['miara'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="alert_sztuki" class="col-sm-4 col-form-label">Ustaw alert</label><br/>
            <div class="col-md-8">
                <input type="text" class="form-control" name="alert_sztuki" placeholder="Określ ilość dnii do terminu ważności"/>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success">
            Dodaj
        </button>
    </form>
</div>

