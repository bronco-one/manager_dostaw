<h3 class="text-info temat">Rejestracja</h3>
<div class="col-sm-8">

    <form action="register-page.php" method="post" onsubmit="return checked()" >
        <!-- #2 -->
        <div class="form-group row">
            <label for="first_name" class="col-sm-4 col-form-label">Imię:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="first_name" name="first_name"
                       placeholder="Imię" maxlength="30" required
                       value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" >
            </div>
        </div>



        <div class="form-group row">
            <label for="last_name" class="col-sm-4 col-form-label">Nazwisko:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="last_name" name="last_name"
                       placeholder="Nazwisko" maxlength="40" required
                       value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
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
            <label for="password1" class="col-sm-4 col-form-label">Hasło:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password1" name="password1"
                       placeholder="Hasło" minlength="8" maxlength="12"
                       required value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
                <span id='message'>Hasło powinno zawierać od 8 do 12 znaków.</span>
            </div>
        </div>
        <div class="form-group row">
            <label for="password2" class="col-sm-4 col-form-label">Powtórz hasło:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password2" name="password2"
                       placeholder="Powtórz hasło" minlength="8" maxlength="12" required
                       value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
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