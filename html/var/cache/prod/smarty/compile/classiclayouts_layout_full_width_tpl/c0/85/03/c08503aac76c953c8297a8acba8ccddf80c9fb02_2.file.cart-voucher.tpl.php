<?php
/* Smarty version 4.3.4, created on 2024-09-02 21:07:19
  from '/var/www/html/themes/classic/templates/checkout/_partials/cart-voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d5fed7704355_05233625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c08503aac76c953c8297a8acba8ccddf80c9fb02' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/cart-voucher.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d5fed7704355_05233625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195710605966d5fed76fc2c8_48857908', 'cart_voucher');
?>

<?php }
}
/* {block 'cart_voucher_list'} */
class Block_205408662466d5fed76fca05_33436844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="promo-name card-block">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added'], 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                <li class="cart-summary-line">
                  <span class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <div class="float-xs-right">
                    <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>
</span>
                      <?php if ((isset($_smarty_tpl->tpl_vars['voucher']->value['code'])) && $_smarty_tpl->tpl_vars['voucher']->value['code'] !== '') {?>
                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher"><i class="material-icons">&#xE872;</i></a>
                      <?php }?>
                  </div>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php
}
}
/* {/block 'cart_voucher_list'} */
/* {block 'cart_voucher_form'} */
class Block_157545351166d5fed77007c3_81949396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="addDiscount" value="1">
                <input class="promo-input" type="text" name="discount_name" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promo code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
">
                <button type="submit" class="btn btn-primary"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button>
              </form>
            <?php
}
}
/* {/block 'cart_voucher_form'} */
/* {block 'cart_voucher_notifications'} */
class Block_153682358566d5fed7701811_94717375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div class="alert alert-danger js-error" role="alert">
                <i class="material-icons">&#xE001;</i><span class="ml-1 js-error-text"></span>
              </div>
            <?php
}
}
/* {/block 'cart_voucher_notifications'} */
/* {block 'cart_voucher'} */
class Block_195710605966d5fed76fc2c8_48857908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_195710605966d5fed76fc2c8_48857908',
  ),
  'cart_voucher_list' => 
  array (
    0 => 'Block_205408662466d5fed76fca05_33436844',
  ),
  'cart_voucher_form' => 
  array (
    0 => 'Block_157545351166d5fed77007c3_81949396',
  ),
  'cart_voucher_notifications' => 
  array (
    0 => 'Block_153682358566d5fed7701811_94717375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <div class="block-promo">
      <div class="cart-voucher js-cart-voucher">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205408662466d5fed76fca05_33436844', 'cart_voucher_list', $this->tplIndex);
?>

        <?php }?>

        <p class="promo-code-button display-promo<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?> with-discounts<?php }?>">
          <a class="collapse-button" href="#promo-code">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have a promo code?','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

          </a>
        </p>

        <div id="promo-code" class="collapse<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?> in<?php }?>">
          <div class="promo-code">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157545351166d5fed77007c3_81949396', 'cart_voucher_form', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153682358566d5fed7701811_94717375', 'cart_voucher_notifications', $this->tplIndex);
?>


            <a class="collapse-button promo-code-button cancel-promo" role="button" data-toggle="collapse" data-target="#promo-code" aria-expanded="true" aria-controls="promo-code">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

            </a>
          </div>
        </div>

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?>
          <p class="block-promo promo-highlighted">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </p>
          <ul class="js-discount card-block promo-discounts">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['discounts'], 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
              <li class="cart-summary-line">
                <span class="label">
                  <span class="code"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </span>
              </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php }?>
      </div>
    </div>
  <?php
}
}
/* {/block 'cart_voucher'} */
}
