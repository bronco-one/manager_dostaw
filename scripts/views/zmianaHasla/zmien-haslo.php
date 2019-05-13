

<div class="col-sm-8">
    <h2 class="h2 text-center">Zmień Hasło</h2>
    <form action="/rejestracja/zmien-haslo" method="post" name="regform" id="regform" onsubmit="return checked();">
        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail"
                       maxlength="60" required
                       value="<?php
                       if (isset($_POST['email'])) {
                           echo $_POST['email'];
                       }
                       ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-4 col-form-label">Aktualme Hasło:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password" name="password"
                       placeholder="Password" minlength="8" maxlength="12"
                       required value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="password1" class="col-sm-4 col-form-label">Nowe Hasło:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password1" name="password1"
                       placeholder="Password" minlength="8" maxlength="12"
                       required value="<?php if (isset($_POST['password1'])) echo $_POST['password1']; ?>">
                <span id="message">Between 8 and 12 charakters.</span>
            </div>
        </div>
        <div class="form-group row">
            <label for="password2" class="col-sm-4 col-form-label">Powtórz Hasło:</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password2" name="password2"
                       placeholder="Confirm Password" minlength="8" maxlength="12"
                       value="<?php if (isset($_POST['password2'])) echo $_POST['password2']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input id="submit" class="btn btn-primary" type="submit" name="submit"
                       value="Change Password">
            </div>
        </div>
    </form>
</div>





