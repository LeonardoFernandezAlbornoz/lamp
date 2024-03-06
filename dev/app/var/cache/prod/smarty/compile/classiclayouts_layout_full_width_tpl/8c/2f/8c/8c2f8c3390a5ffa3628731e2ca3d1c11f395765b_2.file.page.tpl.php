<?php
/* Smarty version 4.3.4, created on 2024-03-04 16:27:20
  from '/app/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e5e8587000e6_31486226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c2f8c3390a5ffa3628731e2ca3d1c11f395765b' => 
    array (
      0 => '/app/themes/classic/templates/page.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e5e8587000e6_31486226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50221926565e5e8586fe4d1_29037284', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_185458676065e5e8586fe997_29428175 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_28196823165e5e8586fe6f1_26641321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185458676065e5e8586fe997_29428175', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_175911194265e5e8586ff2a7_86736677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_73850991765e5e8586ff579_99339707 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_67560116465e5e8586ff0b0_28101192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175911194265e5e8586ff2a7_86736677', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73850991765e5e8586ff579_99339707', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_59290280465e5e8586ffba3_65763030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_150662392465e5e8586ff9d0_34228785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59290280465e5e8586ffba3_65763030', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_50221926565e5e8586fe4d1_29037284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_50221926565e5e8586fe4d1_29037284',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_28196823165e5e8586fe6f1_26641321',
  ),
  'page_title' => 
  array (
    0 => 'Block_185458676065e5e8586fe997_29428175',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_67560116465e5e8586ff0b0_28101192',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_175911194265e5e8586ff2a7_86736677',
  ),
  'page_content' => 
  array (
    0 => 'Block_73850991765e5e8586ff579_99339707',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_150662392465e5e8586ff9d0_34228785',
  ),
  'page_footer' => 
  array (
    0 => 'Block_59290280465e5e8586ffba3_65763030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28196823165e5e8586fe6f1_26641321', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67560116465e5e8586ff0b0_28101192', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150662392465e5e8586ff9d0_34228785', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
