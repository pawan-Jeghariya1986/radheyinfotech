<?php
/* Smarty version 4.3.1, created on 2024-06-26 19:08:43
  from 'C:\xampp\htdocs\divyansh\radheyinfotech.com\modules\blockreassurance\views\templates\admin\tabs\content\config_elements\cms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667c19e3274210_16905069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '669482de4045a672eed38c2b782b1646dd18fb62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\divyansh\\radheyinfotech.com\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content\\config_elements\\cms.tpl',
      1 => 1719382789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667c19e3274210_16905069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group psr-cms <?php if (((isset($_smarty_tpl->tpl_vars['block']->value)) && $_smarty_tpl->tpl_vars['block']->value['type_link'] != $_smarty_tpl->tpl_vars['LINK_TYPE_CMS']->value) || !(isset($_smarty_tpl->tpl_vars['block']->value))) {?> inactive<?php }?>">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CMS Page','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">
        <div class="input-group col-xs-12 col-sm-12 col-md-7 col-lg-12 psrea-flex">
            <select class="custom-select" name="ID_CMS_<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];
}?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCms']->value, 'cms');
$_smarty_tpl->tpl_vars['cms']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cms']->value) {
$_smarty_tpl->tpl_vars['cms']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['cms']->value['id_cms'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['block']->value)) && $_smarty_tpl->tpl_vars['block']->value['id_cms'] == $_smarty_tpl->tpl_vars['cms']->value['id_cms']) {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cms']->value['meta_title'],'htmlall','UTF-8' ));?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
