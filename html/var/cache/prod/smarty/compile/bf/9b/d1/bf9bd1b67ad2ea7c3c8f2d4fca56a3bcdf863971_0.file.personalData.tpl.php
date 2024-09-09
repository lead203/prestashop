<?php
/* Smarty version 4.3.4, created on 2024-09-04 10:39:49
  from '/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d80ec558e1b5_46761834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf9bd1b67ad2ea7c3c8f2d4fca56a3bcdf863971' => 
    array (
      0 => '/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.tpl',
      1 => 1671098556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d80ec558e1b5_46761834 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['style_tab']->value;?>



<table width="100%" id="body" border="0" cellpadding="0" cellspacing="0" style="margin:0;">
    <!-- general customer info -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['generalInfo_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="30">&nbsp;</td>
    </tr>

    <!-- addresses tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['addresses_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- order list tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['orders_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="20">&nbsp;</td>
    </tr>

    <!-- cart list tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['carts_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- messages tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['messages_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>

    <!-- connections tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['connections_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>


    <!-- modules tab -->
    <tr>
        <td colspan="12">

            <?php echo $_smarty_tpl->tpl_vars['modules_tab']->value;?>


        </td>
    </tr>

    <tr>
        <td colspan="12" height="10">&nbsp;</td>
    </tr>
</table>
<?php }
}
