<?php
/* Smarty version 4.3.4, created on 2024-09-04 10:39:49
  from '/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.style-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d80ec551eba0_85802779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a5c22dec25f9d2bb5ad2ca862aed07631ebbd4' => 
    array (
      0 => '/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.style-tab.tpl',
      1 => 1671098556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d80ec551eba0_85802779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('color_header', "#F0F0F0");
$_smarty_tpl->_assignInScope('color_border', "#F0F0F0");
$_smarty_tpl->_assignInScope('color_border_lighter', "#CCCCCC");
$_smarty_tpl->_assignInScope('color_line_even', "#FFFFFF");
$_smarty_tpl->_assignInScope('color_line_odd', "#F9F9F9");
$_smarty_tpl->_assignInScope('font_size_text', "9pt");
$_smarty_tpl->_assignInScope('font_size_header', "9pt");
$_smarty_tpl->_assignInScope('font_size_product', "9pt");
$_smarty_tpl->_assignInScope('height_header', "20px");
$_smarty_tpl->_assignInScope('table_padding', "4px");?>

<style>
    table, th, td {
        margin: 0!important;
        padding: 0!important;
        vertical-align: middle;
        font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_text']->value;?>
;
        white-space: nowrap;
    }

    table.product {
        border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
        border-collapse: collapse;
    }

    table#addresses-tab tr td {
        font-size: large;
    }

    table#summary-tab {
        padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
        border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
    }
    table#total-tab {
        padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
        border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
    }
    table#note-tab {
        padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
        border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
    }
    table#note-tab td.note{
        word-wrap: break-word;
    }
    table#tax-tab {
        padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
        border: 1pt solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
    }
    table#payment-tab,
    table#shipping-tab {
        padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
        border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
    }

    th.product {
        border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
    }

    tr.discount th.header {
        border-top: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
    }

    tr.product td {
        border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border_lighter']->value;?>
;
    }

    tr.color_line_even {
        background-color: <?php echo $_smarty_tpl->tpl_vars['color_line_even']->value;?>
;
    }

    tr.color_line_odd {
        background-color: <?php echo $_smarty_tpl->tpl_vars['color_line_odd']->value;?>
;
    }

    tr.customization_data td {
    }

    td.product {
        vertical-align: middle;
        font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_product']->value;?>
;
    }

    th.header {
        font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_header']->value;?>
;
        height: <?php echo $_smarty_tpl->tpl_vars['height_header']->value;?>
;
        background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
        vertical-align: middle;
        text-align: center;
        font-weight: bold;
    }

    th.header-right {
        font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_header']->value;?>
;
        height: <?php echo $_smarty_tpl->tpl_vars['height_header']->value;?>
;
        background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
        vertical-align: middle;
        text-align: right;
        font-weight: bold;
    }

    th.payment,
    th.shipping {
        background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
        vertical-align: middle;
        font-weight: bold;
    }

    th.tva {
        background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
        vertical-align: middle;
        font-weight: bold;
    }

    tr.separator td {
        border-top: 1px solid #000000;
    }

    .left {
        text-align: left;
    }

    .fright {
        float: right;
    }

    .right {
        text-align: right;
    }

    .center {
        text-align: center;
    }

    .bold {
        font-weight: bold;
    }

    .border {
        border: 1px solid black;
    }

    .no_top_border {
        border-top:hidden;
        border-bottom:1px solid black;
        border-left:1px solid black;
        border-right:1px solid black;
    }

    .no_border {
        border-top:hidden;
        border-bottom:hidden;
        border-left:hidden;
        border-right:hidden;
    }

    .grey {
        background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;

    }

    /* This is used for the border size */
    .white {
        background-color: #FFFFFF;
    }

    .big,
    tr.big td{
        font-size: 110%;
    }

    .small, table.small th, table.small td {
        font-size:small;
    }
</style>
<?php }
}
