<div class="page-header">
    <h3 class="text-info temat">Dodaj nowy gatunek asortymentu</h3>
</div>
<div class="col-md-8" id="addDostawcy">
    <p><?php
        if (isset($this->id)) {
            echo 'Dodano nowy rekord';
        }
        ?></p>

    <form  class="form-group" action="/gatunekTowaru/add" method="post">
        <div class="form-group row">
            <label for="nazwa_rodzaju" class="col-sm-4 col-form-label">Nazwa gatunku asortymentu</label><br/>
            <div class="col-md-8">
                <input type="text" class="form-control" name="nazwa_rodzaju" placeholder="Wpisz nazwę"/>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success">
            Dodaj
        </button>
    </form>
</div>



