<?php
/* Smarty version 4.3.4, created on 2024-03-08 12:20:14
  from '/app/themes/classic/templates/catalog/suppliers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eb027e560885_26128520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd25fbde613009050fe1941754fc0716849df57ad' => 
    array (
      0 => '/app/themes/classic/templates/catalog/suppliers.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eb027e560885_26128520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189281236165eb027e5602e9_27577306', 'brand_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/brands.tpl');
}
/* {block 'brand_header'} */
class Block_189281236165eb027e5602e9_27577306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_header' => 
  array (
    0 => 'Block_189281236165eb027e5602e9_27577306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
<?php
}
}
/* {/block 'brand_header'} */
}
