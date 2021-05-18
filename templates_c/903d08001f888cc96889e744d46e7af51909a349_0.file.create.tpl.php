<?php
/* Smarty version 3.1.39, created on 2021-05-18 08:26:01
  from 'C:\wamp64\www\joeAgenda\templates\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a37a193fb266_49278556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '903d08001f888cc96889e744d46e7af51909a349' => 
    array (
      0 => 'C:\\wamp64\\www\\joeAgenda\\templates\\create.tpl',
      1 => 1621326271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_60a37a193fb266_49278556 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177449232860a37a193f3302_57309543', 'content');
?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "templates/index.tpl");
}
/* {block 'content'} */
class Block_177449232860a37a193f3302_57309543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_177449232860a37a193f3302_57309543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form name="add" method="POST" action="add">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" placeholder="Date" class="form-control">
        <label for="task">Task</label>
        <textarea name="task" id="task" placeholder="Task" class="form-control" ></textarea>
        <label for="annee">Time</label>
        <input type="number" name="time" id="time" placeholder="Time" class="form-control">
        <hr>
        <input type="hidden" name="action" id="action" value="add">
        <a type="button" class="btn btn-secondary" href="index.tpl">Retour</a>
		<button type="Submit" class="btn btn-primary">Save</button>
    </form>
<?php
}
}
/* {/block 'content'} */
}
