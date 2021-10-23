<h3 class="text-info temat">Logowanie</h3>

<p></p>
<div class="col-md-8">
    <form class="form-group" action="/logowanie/logowanie" method="post">
        <p>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Login</label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="user" placeholder="Wpisz login"/>
            </div>
        </div>
        </p>
        <p>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Hasło</label>
            <div class="col-md-8">
                <input type="password" class="form-control" name="pass" placeholder="Wpisz hasło"/>
            </div>
        </div>
        </p>
        <p>
            <input type="submit" name="submit" value="Zaloguj" class="btn btn-success"/>
        </p>
    </form>
</div>
