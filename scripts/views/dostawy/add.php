<h3 class="text-info temat">Wpisz dostawę</h3>
<div class="col-md-8" id="addDostawcy">
    <p><?php
        if (isset($this->id)) {
            echo 'Dodano nowy rekord';
        }
        ?></p>

    <form  class="form-group" action="/dostawy/add" method="post">
        <div class="form-group row">
            <label for="id_dostawcy" class="col-sm-4 col-form-label">Wybierz artykuł</label><br/>
            <div class="col-md-8">
                <select  class="form-control" name="id_dostawcy" >
                    <?php foreach ($this->gatunki as $gatunek): ?>

                        <?php foreach ($this->artykuly as $value): ?>
                            <option value="<?= $value['id_art'] ?>"><?= $value['nazwa_art'] ?></option>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>


        <div class="form-group row">
            <label for="data_przyjecia" class="col-sm-4 col-form-label">Wpisz datę przyjęcia dostawy</label><br/>
            <div class="col-md-8">
                <input type="date" class="form-control" name="data_przyjecia" placeholder="Wpisz datę przyjęcia towaru"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="data_przydatnosci" class="col-sm-4 col-form-label">Wpisz datę przydatności</label><br/>
            <div class="col-md-8">
                <input type="date" class="form-control" name="data_przydatnosci" placeholder="Wpisz datę przydatności"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="alert_przydatnosci" class="col-sm-4 col-form-label">Ustaw alert</label><br/>
            <div class="col-md-8">
                <input type="number" class="form-control" name="alert_przydatnosci" placeholder="Określ ilość dnii do terminu ważności"/>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success">
            Dodaj
        </button>
    </form>
</div>
