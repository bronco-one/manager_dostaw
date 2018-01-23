<h3>Logowanie</h3>

<p><?php echo $this->message; ?></p>
<form action="<?php echo '/logowanie/logowanie' ?>" method="post">
    <p>
        <label>Login</label>
        <input type="text" name="user" placeholder="Wpisz login"/>
    </p> 
    <p>
        <label>Hasło</label>
        <input type="password" name="pass" placeholder="Wpisz hasło"/>
    </p>
    <p>
        <input type="submit" name="submit" value="Zaloguj"/>
    </p>
</form>

