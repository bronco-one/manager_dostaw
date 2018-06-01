<h3 class="text-info temat">Wpisz dostawę</h3>
<div id="addDostawcy">
<p><?php if (isset($this->id)) {
    echo 'Dodano nowy rekord';
} ?></p>

<form  class="form-group" action="/dostawy/add" method="post">
    <div class="form-group">
        <label>Wybierz artykuł</label><br/>
        <select  name="id_dostawcy" >
        <?php foreach ($this->gatunki as $gatunek): ?>
            
          <?php foreach ($this->artykuly as $value): ?>  
        <option value="<?=$value['id_art']?>"><?=$value['nazwa_art']?></option>
          <?php endforeach; ?>
        <?php endforeach; ?>
        </select>
        
    </div> 
   
    
    <div class="form-group">
        <label>Wpisz datę przyjęcia dostawy</label><br/>
        <input type="date" name="data_przyjecia" placeholder="Wpisz datę przyjęcia towaru"/>
    </div>
    <div class="form-group"
        <label>Wpisz datę przydatności</label><br/>
        <input type="date" name="data_przydatnosci" placeholder="Wpisz datę przydatności"/>
    </div>
   
    <div class="form-group">
        <label>Ustaw alert</label><br/>
        <input type="number" name="alert_przydatnosci" placeholder="Określ ilość dnii do terminu ważności"/>
    </div>
    <button type="submit" name="submit" class="btn btn-secondary">
        Dodaj
    </button>
</form>
</div>
