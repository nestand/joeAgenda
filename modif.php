<?php
require 'libs/Smarty.class.php';
Smarty_Autoloader::register();
require 'include/class/agenda.class.php';
require 'include/autoloader.php';
Autoloader::register();

$smarty = new smarty;
//update the task

$update = Agenda::modif();
$smarty->assign('update', $update); 


?>

<div class="modal fade" id="editModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit task<?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_name" value="<?=$value['name'] ?>" placeholder="Имя">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_last_name" value="<?=$value['last_name'] ?>" placeholder="Фамилия">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_pos" value="<?=$value['pos'] ?>" placeholder="Должность">
        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>

$task= Agenda::modif($id);
header("Location: agenda.php?agenda=updateOk");
exit;