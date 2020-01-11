<?php
/* Smarty version 3.1.33, created on 2020-01-11 17:16:19
  from 'E:\WorkSpace\mocarze.pl\sklep.mocarze.pl\backend\modules\welcome\views\templates\tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e19f4d3659057_60443792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1c29ed818f513d96a14b9e9fe651219f141610c' => 
    array (
      0 => 'E:\\WorkSpace\\mocarze.pl\\sklep.mocarze.pl\\backend\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1578758595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e19f4d3659057_60443792 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
