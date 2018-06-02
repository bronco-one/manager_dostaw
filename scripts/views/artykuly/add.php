<h3 class="text-info temat">Dodaj artykuł</h3>
<div id="addDostawcy">
<p><?php if (isset($this->id)) {
    echo 'Dodano nowy rekord';
} ?></p>

<form  class="form-group" action="/artykuly/add" method="post">
    <div class="form-group">
        <label>Wybierz dostawcę</label><br/>
        <select  name="id_dostawcy" >
        <?php foreach ($this->dostawcy as $dostawcy): ?>
        <option value="<?=$dostawcy['id_dostawcy']?>"><?=$dostawcy['nazwa_dost']?></option>
        <?php endforeach; ?>
        </select>
        
    </div> 
    <div class="form-group ">
        <label>Wybierz gatunek towaru</label><br/>
        <select  name="id_gat">
        <?php foreach ($this->gatunki as $gatunek): ?>
        <option value="<?=$gatunek['id_gat']?>"><?=$gatunek['nazwa_rodzaju']?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Nazwa artykułu</label><br/>
        <input type="text" name="nazwa_art" placeholder="Wpisz nazwę artykułu"/>
    </div>
    <div class="form-group">
        <label>Ilość/Waga</label><br/>
        <input required type="text" name="wielkosc_miary" placeholder="Wpisz wagę artykyłu"/>
    </div>
    <div class="form-group">
        <label>Wybierz jednostkę miary</label><br/>
        <select  name="id_miary" >
        <?php foreach ($this->miary as $jednostka): ?>
        <option value="<?=$jednostka['id_miary']?>"><?=$jednostka['miara']?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Ustaw alert</label><br/>
        <input type="text" name="alert_sztuki" placeholder="Określ ilość dnii do terminu ważności"/>
    </div>
    <button type="submit" name="submit" class="btn btn-success">
        Dodaj
    </button>
</form>
</div>

