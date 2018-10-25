/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function checked() {
    if (document.getElementById('password1').value ==
            document.getElementById('password2').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Password match';
        return true;

    } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Password do not match';
        return false;
    }

}


