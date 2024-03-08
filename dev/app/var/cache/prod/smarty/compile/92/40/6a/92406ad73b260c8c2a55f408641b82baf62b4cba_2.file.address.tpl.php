<?php
/* Smarty version 4.3.4, created on 2024-03-08 12:20:14
  from '/app/themes/classic/templates/customer/address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eb027e7c9631_09599739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92406ad73b260c8c2a55f408641b82baf62b4cba' => 
    array (
      0 => '/app/themes/classic/templates/customer/address.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eb027e7c9631_09599739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163394815965eb027e7c8290_95888030', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148077876565eb027e7c8f39_31742410', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_163394815965eb027e7c8290_95888030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_163394815965eb027e7c8290_95888030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['editing']->value) {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update your address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

  <?php } else { ?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New address','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

  <?php }
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_148077876565eb027e7c8f39_31742410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_148077876565eb027e7c8f39_31742410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="address-form">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('template'=>"customer/_partials/address-form.tpl",'ui'=>$_smarty_tpl->tpl_vars['address_form']->value),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'page_content'} */
}
