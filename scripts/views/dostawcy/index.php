<div id="dostawcy">
    <table class="table table-striped table-bordered ">
        
        <tr class="active">
<th>Nazwa</th>
<th>miasto</th>
<th>Adres</th>
<th>E-mail</th>
<th>Telefon</th>
<th>Kontakt</th>
</tr>
        
<?php foreach($this->dostawcy as $dostawca): ?>
<tr class="active">
<td><?= $dostawca['nazwa_dost']?></td>
<td><?= $dostawca['miasto']?></td>
<td><?= $dostawca['adres_ul']?></td>
<td><?= $dostawca['email']?></td>
<td><?= $dostawca['telefon']?></td>
<td><?= $dostawca['os_do_kontaktu']?></td>
</tr>
<?php endforeach; ?>
</table>
</div>



