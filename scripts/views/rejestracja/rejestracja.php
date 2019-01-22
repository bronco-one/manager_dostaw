<h3 class="text-info temat">Rejestracja</h3>
<div class="col-sm-8">
    <?= $msg ?>
    <form action="/rejestracja/add" method="post" onsubmit="return checked()" >
        <!-- #2 -->
        <div class="form-group row">
            <label for="login" class="col-sm-4 col-form-label">Login:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="login" name="login"
                       placeholder="Login" maxlength="40" required
                       value="<?php if (isset($_POST['login'])) echo $_POST['login']; ?>" >
                <span id='message'>Login może zawierać do 40 znaków.</span>
            </div>
        </div>
        <div class="form-group row">
            <label for="imie" class="col-sm-4 col-form-label">Imię:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="imie" name="imie"
                       placeholder="Imię" maxlength="30" required
                       value="<?php if (isset($_POST['imie'])) echo $_POST['imie']; ?>" >
            </div>
        </div>



        <div class="form-group row">
            <label for="nazwisko" class="col-sm-4 col-form-label">Nazwisko:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="nazwisko" name="nazwisko"
                       placeholder="Nazwisko" maxlength="40" required
                       value="<?php if (isset($_POST['nazwisko'])) echo $_POST['nazwisko']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="E-mail" maxlength="60" required
                       value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="haslo" class="col-sm-4 col-form-label">Hasło:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="haslo" name="haslo"
                       placeholder="Hasło" minlength="8" maxlength="12"
                       required value="<?php if (isset($_POST['haslo'])) echo $_POST['haslo']; ?>">
                <span id='message'>Hasło powinno zawierać od 8 do 12 znaków.</span>
            </div>
        </div>
        <div class="form-group row">
            <label for="haslo2" class="col-sm-4 col-form-label">Powtórz hasło:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="haslo2" name="haslo2"
                       placeholder="Powtórz hasło" minlength="8" maxlength="12" required
                       value="<?php if (isset($_POST['haslo2'])) echo $_POST['haslo2']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input id="submit" class="btn btn-success" type="submit" name="submit"
                       value="Zarejestruj">
            </div>

        </div>
    </form>
</div>