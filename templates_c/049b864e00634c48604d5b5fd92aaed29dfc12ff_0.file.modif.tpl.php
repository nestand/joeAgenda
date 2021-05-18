<?php
/* Smarty version 3.1.39, created on 2021-05-18 08:26:32
  from 'C:\wamp64\www\joeAgenda\templates\modif.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a37a3813f7c6_64891773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '049b864e00634c48604d5b5fd92aaed29dfc12ff' => 
    array (
      0 => 'C:\\wamp64\\www\\joeAgenda\\templates\\modif.tpl',
      1 => 1621326266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_60a37a3813f7c6_64891773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149566502960a37a38109df3_86235061', 'content');
?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "tamplates/index.tpl");
}
/* {block 'content'} */
class Block_149566502960a37a38109df3_86235061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_149566502960a37a38109df3_86235061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <form name="create" method="POST" action="update">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" placeholder="date" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['task']->value->date;?>
">
        <label for="time">Time</label>
        <input type="time" id="time" class="time" placeholder="time" value="<?php echo $_smarty_tpl->tpl_vars['task']->value->time;?>
">
        <label for="task">Task</label>
        <input type="text" name="task" id="task" placeholder="task" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['task']->value->task;?>
">
        <hr>
        <input type="hidden" name="action" id="action" value="update">
        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['task']->value->id;?>
">
        <a type="button" class="btn btn-secondary" href="accueil">Retour</a>
		<button type="Submit" class="btn btn-primary">Save</button>
    </form>
<?php
}
}
/* {/block 'content'} */
}
