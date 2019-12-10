<div class="page-header">
<h3 class="text-info temat">Do wykonania:</h3>
</div> 
<div id="dostawcy">
    
    <table class="table table-striped table-bordered ">
        
        <tr class="active">
<th>Zadanie</th>
<th>Data</th>
<th>Stan</th>
<th>Akcja</th>
<th>Akcja</th>
</tr>
 
<?php foreach($this->zadania as $zadanie): ?>
<tr class="active">
<td><?= $zadanie['tresc']?></td>
<td><?= $zadanie['data']?></td>
<td><?= $zadanie['stan']?></td>
<td>
    <form action="/miary/updateView" method="post">
        <input type="hidden" name="id" value="<?= $zadanie['id_zadania']?>"/>
        <button type="submit" name="submit" class="btn btn-warning">
        Aktualizuj
    </button>
    </form>
</td>
<td>
    <form action="/miary/delete" method="post">
        <input type="hidden" name="id" value="<?= $zadanie['id_zadania']?>"/>
        <button type="submit" name="submit" class="btn btn-danger">
        Usuń
    </button>
    </form>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>


