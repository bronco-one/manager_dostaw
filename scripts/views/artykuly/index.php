<div class="page-header">
<h3 class="text-info">Spis artykułów</h3>
</div> 
<div id="dostawcy">
    
    <table class="table table-striped table-bordered ">
        
        <tr class="active">
<th>Dostawca</th>
<th>Rodzaj</th>
<th>Nazwa</th>
<th>Ilość</th>
<th>Miara</th>
<th>Akcja</th>
<th>Akcja</th>
</tr>
   
<?php foreach($this->artykuly as $artykul): ?>
<tr class="active">
<td><?= $artykul['nazwa_dost']?></td>
<td><?= $artykul['nazwa_rodzaju']?></td>
<td><?= $artykul['nazwa_art']?></td>
<td><?= $artykul['wielkosc_miary']?></td>
<td><?= $artykul['miara']?></td>
<td>
    <form action="/artykuly/updateView" method="post">
        <input type="hidden" name="id" value="<?= $artykul['id_art']?>"/>
        <button type="submit" name="submit" class="btn btn-secondary">
        Aktualizuj
    </button>
    </form>
</td>
<td>
    <form action="/artykuly/delete" method="post">
        <input type="hidden" name="id" value="<?= $artykul['id_art']?>"/>
        <button type="submit" name="submit" class="btn btn-secondary">
        Usuń
    </button>
    </form>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>

