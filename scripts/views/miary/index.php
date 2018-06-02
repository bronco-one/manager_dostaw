<div class="page-header">
<h3 class="text-info temat">Spis jednostek miar</h3>
</div> 
<div id="dostawcy">
    
    <table class="table table-striped table-bordered ">
        
        <tr class="active">
<th>Nazwa jednostki</th>
<th>Akcja</th>
<th>Akcja</th>
</tr>
   
<?php foreach($this->miary as $miara): ?>
<tr class="active">
<td><?= $miara['miara']?></td>
<td>
    <form action="/miary/updateView" method="post">
        <input type="hidden" name="id" value="<?= $miara['id_miary']?>"/>
        <button type="submit" name="submit" class="btn btn-warning">
        Aktualizuj
    </button>
    </form>
</td>
<td>
    <form action="/miary/delete" method="post">
        <input type="hidden" name="id" value="<?= $miara['id_miary']?>"/>
        <button type="submit" name="submit" class="btn btn-danger">
        Usuń
    </button>
    </form>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>

