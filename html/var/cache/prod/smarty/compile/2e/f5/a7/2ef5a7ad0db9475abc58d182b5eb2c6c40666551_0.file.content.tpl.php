<?php
/* Smarty version 4.3.4, created on 2024-09-02 13:26:44
  from '/var/www/html/admin9434fu3bddgkp9ptvzu/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d592e4152f01_02174872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ef5a7ad0db9475abc58d182b5eb2c6c40666551' => 
    array (
      0 => '/var/www/html/admin9434fu3bddgkp9ptvzu/themes/new-theme/template/content.tpl',
      1 => 1718360660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d592e4152f01_02174872 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
