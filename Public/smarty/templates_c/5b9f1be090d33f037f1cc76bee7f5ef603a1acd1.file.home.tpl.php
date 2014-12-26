<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-24 18:23:51
         compiled from "Public\smarty\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:824549ab2ce1b8e92-16743324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b9f1be090d33f037f1cc76bee7f5ef603a1acd1' => 
    array (
      0 => 'Public\\smarty\\templates\\home.tpl',
      1 => 1419441831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824549ab2ce1b8e92-16743324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549ab2ce1fb767_25146212',
  'variables' => 
  array (
    'name' => 0,
    'array' => 0,
    'k' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549ab2ce1fb767_25146212')) {function content_549ab2ce1fb767_25146212($_smarty_tpl) {?>Hallo <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, herzlich Willkommen! <br /><hr />
Lets test out smarty looping and pdo database
<hr />
Test user from database:
<ul>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	  <li>index:<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['value']->value['first_name'];?>
</li>
	<?php } ?>
</ul>

<br />
<a href="Home/Test/">Next page</a><?php }} ?>
