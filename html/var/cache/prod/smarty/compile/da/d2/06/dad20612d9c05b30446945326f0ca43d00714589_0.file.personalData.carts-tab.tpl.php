<?php
/* Smarty version 4.3.4, created on 2024-09-04 10:39:49
  from '/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.carts-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d80ec5551e74_35633769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad20612d9c05b30446945326f0ca43d00714589' => 
    array (
      0 => '/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.carts-tab.tpl',
      1 => 1671098556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d80ec5551e74_35633769 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carts','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h2>
<br>
<table id="summary-tab" width="100%">
    <tr>
        <th class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Id','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
        <th colspan="2" class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
        <th colspan="2" class="header" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
    </tr>

    <?php if (count($_smarty_tpl->tpl_vars['carts']->value) >= 1) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carts']->value, 'cart');
$_smarty_tpl->tpl_vars['cart']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->do_else = false;
?>
    <tr class="separator">
        <td class="center white"><b>#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value['id_cart'],'html','UTF-8' ));?>
</b></td>
        <td colspan="2" class="center white"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value['nb_products'],'html','UTF-8' ));?>
</td>
        <td colspan="2" class="center white"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cart']->value['date_add'],'html','UTF-8' ));?>
</td>
    </tr>
    <?php if (count($_smarty_tpl->tpl_vars['cart']->value['products']) >= 1) {?>
    <tr>
        <td colspan="3" class="center white"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product(s) in the cart','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 :</b></td>
        <td colspan="2" class="center white"></td>
    </tr>
    <tr>
        <td class="center white"></td>
        <td colspan="4" class="center white">
            <table id="total-tab" width="100%">
                <tr>
                    <th class="header" valign="middle"><i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</i></th>
                    <th class="header" valign="middle"><i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</i></th>
                    <th class="header" valign="middle"><i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</i></th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <tr>
                    <td class="center white"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['product_reference'],'html','UTF-8' ));?>
</td>
                    <td class="center white"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['product_name'],'html','UTF-8' ));?>
</td>
                    <td class="center white"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['product_quantity'],'html','UTF-8' ));?>
</td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </td>
    </tr>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
    <tr>
        <td colspan="5" class="center white"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carts','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</td>
    </tr>
    <?php }?>
</table>
<?php }
}
