<?php
/* Smarty version 4.3.4, created on 2024-09-04 18:13:57
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d879354f5a86_84208974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1708963242,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66d879354f5a86_84208974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/d2/2d/85/d22d851f6d7c12eb35c1c34c8e84baa801a8cea2_2.file.helpers.tpl.php',
    'uid' => 'd22d851f6d7c12eb35c1c34c8e84baa801a8cea2',
    'call_name' => 'smarty_template_function_renderLogo_127514724766d592eaceff91_37651178',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/en/my-account" rel="nofollow">
      Your account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/en/identity" title="Information" rel="nofollow">Information</a></li>
                  <li><a href="http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/en/addresses" title="Addresses" rel="nofollow">Addresses</a></li>
                          <li><a href="http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/en/order-history" title="Orders" rel="nofollow">Orders</a></li>
                          <li><a href="http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/en/credit-slip" title="Credit slips" rel="nofollow">Credit slips</a></li>
                                  <li>
    <a href="http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/en/module/blockwishlist/lists" title="Моё избранное" rel="nofollow">
      Wishlist
    </a>
  </li>
<li>
  <a href="//ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/en/module/ps_emailalerts/account" title="My alerts">
    My alerts
  </a>
</li>

        <li><a href="http://ec2-18-157-81-67.eu-central-1.compute.amazonaws.com/en/?mylogout=" title="Log me out" rel="nofollow">Sign out</a></li>
       
	</ul>
</div>
<?php }
}
