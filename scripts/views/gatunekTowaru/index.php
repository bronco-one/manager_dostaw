<div class="page-header">
<h3 class="text-info">Spis rodzjów artykułów</h3>
</div> 
<div id="dostawcy">
    
    <table class="table table-striped table-bordered ">
        
        <tr class="active">
<th>Nazwa rodzju artykułu</th>
<th>Akcja</th>
<th>Akcja</th>
</tr>
   
<?php foreach($this->gatunki as $gatunek): ?>
<tr class="active">
<td><?= $gatunek['nazwa_rodzaju']?></td>
<td>
    <form action="/gatunekTowaru/updateView" method="post">
        <input type="hidden" name="id" value="<?= $gatunek['id_gat']?>"/>
        <button type="submit" name="submit" class="btn btn-secondary">
        Aktualizuj
    </button>
    </form>
</td>
<td>
    <form action="/gatunekTowaru/delete" method="post">
        <input type="hidden" name="id" value="<?= $gatunek['id_gat']?>"/>
        <button type="submit" name="submit" class="btn btn-secondary">
        Usuń
    </button>
    </form>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>

