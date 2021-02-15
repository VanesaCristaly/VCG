<h1 class="page-header" style="background:#F95792; color:#FFFFFF">
    <?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Producto'; ?>
</h1>

<ol class="breadcrumb" style="background:pink; ">
  <li><a href="?c=Producto">Producto</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->Nombre : 'Nuevo Producto'; ?></li>
</ol>

<form id="frm-producto" action="?c=Producto&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" placeholder="Ingrese Producto" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Costo</label>
        <input type="text" name="Costo" value="<?php echo $alm->Costo; ?>" class="form-control" placeholder="Ingrese Costo" data-validacion-tipo="requerido|min:1" />
    </div>
    
    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="Marca" value="<?php echo $alm->Marca; ?>" class="form-control" placeholder="Ingrese la Marca" data-validacion-tipo="requerido|min:5" />
    </div>
    
    <div class="form-group">
        <label>Tipo</label>
        <select name="Tipo" class="form-control">
            <option <?php echo $alm->Tipo == 1 ? 'selected' : ''; ?> value="1">Liquido</option>
            <option <?php echo $alm->Tipo == 2 ? 'selected' : ''; ?> value="2">Solido</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Fecha de caducidad</label>
        <input readonly type="text" name="FechaVencimiento" value="<?php echo $alm->FechaVencimiento; ?>" class="form-control datepicker" placeholder="Ingrese su fecha de caducidad" data-validacion-tipo="requerido" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>