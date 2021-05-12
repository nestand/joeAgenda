<?php
/* Smarty version 3.1.39, created on 2021-05-12 08:05:00
  from 'C:\wamp64\www\smartyTest\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609b8c2c65cd36_67244444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '728e5ba78202891dca67f594d4f6fb6608eb674d' => 
    array (
      0 => 'C:\\wamp64\\www\\smartyTest\\templates\\index.tpl',
      1 => 1620806696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_609b8c2c65cd36_67244444 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<header>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</header>
<body>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Joe Agenda's"), 0, false);
?>


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


You can join the center by 
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

You can move to follow states: 
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

</body>
</html>

<?php }
}
