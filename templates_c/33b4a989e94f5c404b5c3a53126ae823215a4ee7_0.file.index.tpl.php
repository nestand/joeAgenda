<?php
/* Smarty version 3.1.39, created on 2021-05-17 12:44:07
  from 'C:\wamp64\www\joeAgenda\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a265176cfbb5_00308954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33b4a989e94f5c404b5c3a53126ae823215a4ee7' => 
    array (
      0 => 'C:\\wamp64\\www\\joeAgenda\\templates\\index.tpl',
      1 => 1621255445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_60a265176cfbb5_00308954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<header>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</header>
<body>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

 <?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
      <section class="container-fluid" id="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123802609260a26517649fd8_77593596', 'body');
?>

      </section>

<PRE>
<div class="p-3 mb-3 bg-primary text-white">
<h3> Hello <strong><?php echo $_smarty_tpl->tpl_vars['FirstName']->value[0];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[0];?>
 </strong> <br> </h3>
</div>
<div class="p-4 mb-3 bg-light text-dark shadow-lg p-3 mb-5 bg-body rounded">
<h4>We are glad to see you again!</h4></div> 
<hr>
<div class="d-inline p-2 bg-dark text-white">
You are in the class <?php echo $_smarty_tpl->tpl_vars['Class']->value[0][1];?>
 <br>
</div>
<!-- to see our list of contacts
<br>
<?php echo print_r($_smarty_tpl->tpl_vars['contacts']->value);?>
 
-->


You are in the same group as 
<hr>
<?php echo $_smarty_tpl->tpl_vars['FirstName']->value[1];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[1];?>
 <br>
<?php echo $_smarty_tpl->tpl_vars['FirstName']->value[2];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[2];?>
 <br>


You can join your University by 
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'phone', false, NULL, 'number', array (
));
$_smarty_tpl->tpl_vars['phone']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['phone']->value) {
$_smarty_tpl->tpl_vars['phone']->do_else = false;
?>
  <hr />
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['phone']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br />
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

Your time-table is <a href="index.php"></a>
<section class="row">
 <div class="col-8">
<table class="table table-striped table-hover">
    <thead class="">
        <tr class="bg-secondary text-white">
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th scope="col">Task</th>
        </tr>
    </thead>
 <tbody>

 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getTasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
                    <tr>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['task']->value->date;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['task']->value->time;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</td>
                        <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['task']->value->task;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
                        
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
	<tbody>        
 
         <tr>
                <td class="CRUD"><a href="create.php?id=<?php echo '<?php ';?>
echo $task->id;<?php echo '?>';?>
">create</a></td>
                <td class="CRUD"><a href="modif.php?id=<?php echo '<?php ';?>
echo $task->id;<?php echo '?>';?>
">update</a></td>
                <td class="CRUD"><a href="delete.php?id=<?php echo '<?php ';?>
echo $task->id;<?php echo '?>';?>
">delete</a></td>
         </tr>
          
  </tbody>
</table>

You can join student exchange university programm and move to: 
<hr>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option_output']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
<li> <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br /></li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
</ul>
</PRE>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
/* {block 'body'} */
class Block_123802609260a26517649fd8_77593596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_123802609260a26517649fd8_77593596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
