<h1 class="page-header"  style="background:#F95792; color:#FFFFFF">Productos</h1>

<div class="well well-sm text-right" style="background:#FFFFFF">
    <a class="btn btn-primary" href="?c=Producto&a=Crud" >Nuevo Producto</a>
</div>

<table class="table table-striped" style="background:pink; ">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th>Costo</th>
            <th>Marca</th>
            <th style="width:120px;">Tipo</th>
            <th style="width:120px;">Fecha Caducidad</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Costo; ?></td>
            <td><?php echo $r->Marca; ?></td>
            <td><?php echo $r->Tipo == 1 ? 'Liqudo' : 'Solido'; ?></td>
            <td><?php echo $r->FechaVencimiento; ?></td>
            <td>
                <a href="?c=Producto&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este producto?');" href="?c=Producto&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
