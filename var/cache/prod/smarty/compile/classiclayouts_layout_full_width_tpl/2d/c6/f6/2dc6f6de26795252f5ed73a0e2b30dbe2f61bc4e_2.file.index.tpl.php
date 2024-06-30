<?php
/* Smarty version 4.3.1, created on 2024-06-26 19:11:00
  from 'C:\xampp\htdocs\divyansh\radheyinfotech.com\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667c1a6c9cd223_40907510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dc6f6de26795252f5ed73a0e2b30dbe2f61bc4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\divyansh\\radheyinfotech.com\\themes\\classic\\templates\\index.tpl',
      1 => 1719382794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667c1a6c9cd223_40907510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2025767236667c1a6c9c4319_79305969', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1512292167667c1a6c9c5fe0_42838879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_362080877667c1a6c9c8d66_12737163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1670349931667c1a6c9c7bc9_63545066 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_362080877667c1a6c9c8d66_12737163', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2025767236667c1a6c9c4319_79305969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2025767236667c1a6c9c4319_79305969',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1512292167667c1a6c9c5fe0_42838879',
  ),
  'page_content' => 
  array (
    0 => 'Block_1670349931667c1a6c9c7bc9_63545066',
  ),
  'hook_home' => 
  array (
    0 => 'Block_362080877667c1a6c9c8d66_12737163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1512292167667c1a6c9c5fe0_42838879', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1670349931667c1a6c9c7bc9_63545066', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
