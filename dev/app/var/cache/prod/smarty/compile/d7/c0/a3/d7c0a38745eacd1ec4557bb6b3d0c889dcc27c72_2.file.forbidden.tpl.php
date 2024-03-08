<?php
/* Smarty version 4.3.4, created on 2024-03-08 12:20:14
  from '/app/themes/classic/templates/errors/forbidden.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eb027e53a230_25541879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7c0a38745eacd1ec4557bb6b3d0c889dcc27c72' => 
    array (
      0 => '/app/themes/classic/templates/errors/forbidden.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eb027e53a230_25541879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104657912465eb027e538056_68137583', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_151082957365eb027e538906_34308764 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_19493511865eb027e538722_56030286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151082957365eb027e538906_34308764', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_38636656665eb027e538271_37436708 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header">
      <div class="logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19493511865eb027e538722_56030286', 'page_header', $this->tplIndex);
?>

    </header>
  <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_156183041365eb027e539329_39130247 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'403 Forbidden','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You are not allowed to access this page.",'d'=>"Shop.Theme.Global"),$_smarty_tpl ) );?>
</p>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_127093135165eb027e539136_65592951 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-content page-restricted">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156183041365eb027e539329_39130247', 'page_content', $this->tplIndex);
?>

    </section>
  <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_212415830265eb027e539dd0_24859074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_104657912465eb027e538056_68137583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_104657912465eb027e538056_68137583',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_38636656665eb027e538271_37436708',
  ),
  'page_header' => 
  array (
    0 => 'Block_19493511865eb027e538722_56030286',
  ),
  'page_title' => 
  array (
    0 => 'Block_151082957365eb027e538906_34308764',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_127093135165eb027e539136_65592951',
  ),
  'page_content' => 
  array (
    0 => 'Block_156183041365eb027e539329_39130247',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_212415830265eb027e539dd0_24859074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38636656665eb027e538271_37436708', 'page_header_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127093135165eb027e539136_65592951', 'page_content_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212415830265eb027e539dd0_24859074', 'page_footer_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
