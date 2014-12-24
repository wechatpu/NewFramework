<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-24 13:54:33
         compiled from "Public\smarty\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7953549ab4a9576074-01496211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b9f1be090d33f037f1cc76bee7f5ef603a1acd1' => 
    array (
      0 => 'Public\\smarty\\templates\\home.tpl',
      1 => 1419425551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7953549ab4a9576074-01496211',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549ab4a95a0418_05031189',
  'variables' => 
  array (
    'name' => 0,
    'array' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549ab4a95a0418_05031189')) {function content_549ab4a95a0418_05031189($_smarty_tpl) {?>Hallo <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, herzlich Willkommen! <br />
Array: <br />
<ul>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
	  <li><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
	<?php } ?>
</ul><?php }} ?>
