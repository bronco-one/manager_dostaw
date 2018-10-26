<div class="page-header">
    <h3 class="text-info temat">Dodaj nową jednostkę</h3>
</div>
<div class="col-md-8" id="addDostawcy">
    <p><?php
        if (isset($this->id)) {
            echo 'Dodano nowy rekord';
        }
        ?></p>

    <form  class="form-group" action="/miary/add" method="post">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nazwa jednostki miary</label><br/>
            <div class="col-md-8">
                <input type="text" class="form-control" name="miara" placeholder="Wpisz nazwę jednostki"/>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success">
            Dodaj
        </button>
    </form>
</div>

