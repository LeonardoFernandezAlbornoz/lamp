<?php
/* Smarty version 4.3.4, created on 2024-03-08 13:22:15
  from '/app/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eb02f7dd6ea2_06424384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6ce1a8ddb421b61b7bc846e98a0cd584dce004' => 
    array (
      0 => '/app/themes/classic/templates/index.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eb02f7dd6ea2_06424384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55282808065eb02f7dd5a37_18115054', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_128187092765eb02f7dd5d56_75481219 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_194994694065eb02f7dd64b6_83157041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_101658502465eb02f7dd6170_84636460 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194994694065eb02f7dd64b6_83157041', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_55282808065eb02f7dd5a37_18115054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_55282808065eb02f7dd5a37_18115054',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_128187092765eb02f7dd5d56_75481219',
  ),
  'page_content' => 
  array (
    0 => 'Block_101658502465eb02f7dd6170_84636460',
  ),
  'hook_home' => 
  array (
    0 => 'Block_194994694065eb02f7dd64b6_83157041',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128187092765eb02f7dd5d56_75481219', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101658502465eb02f7dd6170_84636460', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
