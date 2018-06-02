<div class="page-header">
<h3 class="text-info temat">Dodaj nową jednostkę</h3>
</div>
<div id="addDostawcy">
<p><?php if (isset($this->id)) {
    echo 'Dodano nowy rekord';
} ?></p>

<form  class="form-group" action="/miary/add" method="post">
    <div class="form-group">
        <label>Nazwa jednostki miary</label><br/>
        <input type="text" name="miara" placeholder="Wpisz nazwę jednostki"/>
    </div> 
    <button type="submit" name="submit" class="btn btn-success">
        Dodaj
    </button>
</form>
</div>

