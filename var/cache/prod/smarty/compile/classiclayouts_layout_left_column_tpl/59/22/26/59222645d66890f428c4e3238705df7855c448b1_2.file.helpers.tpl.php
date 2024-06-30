<?php
/* Smarty version 4.3.1, created on 2024-06-26 19:11:34
  from 'C:\xampp\htdocs\divyansh\radheyinfotech.com\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667c1a8e1955e4_99901435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59222645d66890f428c4e3238705df7855c448b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\divyansh\\radheyinfotech.com\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1719382795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667c1a8e1955e4_99901435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\divyansh\\radheyinfotech.com\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\59\\22\\26\\59222645d66890f428c4e3238705df7855c448b1_2.file.helpers.tpl.php',
    'uid' => '59222645d66890f428c4e3238705df7855c448b1',
    'call_name' => 'smarty_template_function_renderLogo_1363039239667c1a8e1895d5_75885523',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1363039239667c1a8e1895d5_75885523 */
if (!function_exists('smarty_template_function_renderLogo_1363039239667c1a8e1895d5_75885523')) {
function smarty_template_function_renderLogo_1363039239667c1a8e1895d5_75885523(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1363039239667c1a8e1895d5_75885523 */
}
