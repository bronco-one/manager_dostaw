<h3>Logowanie</h3>

<form action="" method="post">
    <p>
        <label>Login</label>
        <input type="text" name="user" value="<?php echo $this->getData('user'); ?>"/>
    </p> 
    <p>
        <label>Hasło</label>
        <input type="password" name="pass" value="<?php echo $this->getData('pass'); ?>"/>
    </p>
    <p>
        <input type="submit" name="submit" value="Zaloguj"/>
    </p>
</form>

