<div class="page-header">
<h3 class="text-info temat">Dodaj nowy gatunek asortymentu</h3>
</div>
<div id="addDostawcy">
<p><?php if (isset($this->id)) {
    echo 'Dodano nowy rekord';
} ?></p>

<form  class="form-group" action="/gatunekTowaru/add" method="post">
    <div class="form-group">
        <label>Nazwa gatunku asortymentu</label><br/>
        <input type="text" name="nazwa_rodzaju" placeholder="Wpisz nazwę"/>
    </div> 
    <button type="submit" name="submit" class="btn btn-secondary">
        Dodaj
    </button>
</form>
</div>



