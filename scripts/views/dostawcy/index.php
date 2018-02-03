<div class="page-header">
<h3 class="text-info">Spis Dostawców</h3>
</div> 
<div id="dostawcy">
    
    <table class="table table-striped table-bordered ">
        
        <tr class="active">
<th>Nazwa</th>
<th>Miasto</th>
<th>Adres</th>
<th>E-mail</th>
<th>Telefon</th>
<th>Kontakt</th>
<th>Akcja</th>
<th>Akcja</th>
</tr>
   
<?php foreach($this->dostawcy as $dostawca): ?>
<tr class="active">
<td><?= $dostawca['nazwa_dost']?></td>
<td><?= $dostawca['miasto']?></td>
<td><?= $dostawca['adres_ul']?></td>
<td><?= $dostawca['email']?></td>
<td><?= $dostawca['telefon']?></td>
<td><?= $dostawca['os_do_kontaktu']?></td>
<td>
    <form action="/dostawcy/updateView" method="post">
        <input type="hidden" name="id" value="<?= $dostawca['id_dostawcy']?>"/>
        <button type="submit" name="submit" class="btn btn-secondary">
        Aktualizuj
    </button>
    </form>
</td>
<td>
    <form action="/dostawcy/delete" method="post">
        <input type="hidden" name="id" value="<?= $dostawca['id_dostawcy']?>"/>
        <button type="submit" name="submit" class="btn btn-secondary">
        Usuń
    </button>
    </form>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>



