<?php
/* Smarty version 4.3.4, created on 2024-09-04 02:20:25
  from '/var/www/html/themes/classic/templates/customer/_partials/address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d799b9159201_52395789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6acadfde3048f314075452a4c528c9faf062f60f' => 
    array (
      0 => '/var/www/html/themes/classic/templates/customer/_partials/address-form.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_66d799b9159201_52395789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143506128266d799b9148280_85581356', "address_form");
?>

<?php }
/* {block "address_form_url"} */
class Block_49123964566d799b914bdd6_68523439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >
    <?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_field'} */
class Block_110531583366d799b9156139_48142983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_180647048866d799b9153a77_29138968 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110531583366d799b9156139_48142983', 'form_field', $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'form_fields'} */
/* {block "address_form_fields"} */
class Block_104290316566d799b91536b8_46509067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="form-fields">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180647048866d799b9153a77_29138968', 'form_fields', $this->tplIndex);
?>

        </section>
      <?php
}
}
/* {/block "address_form_fields"} */
/* {block 'form_buttons'} */
class Block_78272330466d799b9157d27_47879643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button class="btn btn-primary form-control-submit float-xs-right" type="submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block "address_form_footer"} */
class Block_73016723966d799b9157a33_58493933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer clearfix">
        <input type="hidden" name="submitAddress" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78272330466d799b9157d27_47879643', 'form_buttons', $this->tplIndex);
?>

      </footer>
      <?php
}
}
/* {/block "address_form_footer"} */
/* {block "address_form"} */
class Block_143506128266d799b9148280_85581356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_form' => 
  array (
    0 => 'Block_143506128266d799b9148280_85581356',
  ),
  'address_form_url' => 
  array (
    0 => 'Block_49123964566d799b914bdd6_68523439',
  ),
  'address_form_fields' => 
  array (
    0 => 'Block_104290316566d799b91536b8_46509067',
  ),
  'form_fields' => 
  array (
    0 => 'Block_180647048866d799b9153a77_29138968',
  ),
  'form_field' => 
  array (
    0 => 'Block_110531583366d799b9156139_48142983',
  ),
  'address_form_footer' => 
  array (
    0 => 'Block_73016723966d799b9157a33_58493933',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_78272330466d799b9157d27_47879643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="js-address-form">
    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49123964566d799b914bdd6_68523439', "address_form_url", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104290316566d799b91536b8_46509067', "address_form_fields", $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73016723966d799b9157a33_58493933', "address_form_footer", $this->tplIndex);
?>


    </form>
  </div>
<?php
}
}
/* {/block "address_form"} */
}
