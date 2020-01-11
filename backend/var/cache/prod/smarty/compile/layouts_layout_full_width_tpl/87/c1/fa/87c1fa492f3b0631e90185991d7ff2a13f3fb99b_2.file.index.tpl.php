<?php
/* Smarty version 3.1.33, created on 2020-01-11 17:17:37
  from 'E:\WorkSpace\mocarze.pl\sklep.mocarze.pl\backend\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e19f521b5b272_21773808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87c1fa492f3b0631e90185991d7ff2a13f3fb99b' => 
    array (
      0 => 'E:\\WorkSpace\\mocarze.pl\\sklep.mocarze.pl\\backend\\themes\\classic\\templates\\index.tpl',
      1 => 1578758595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e19f521b5b272_21773808 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17212782095e19f521b587b4_71167591', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_10981521355e19f521b58e13_78302267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_245045775e19f521b59cd1_59161191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_15011692125e19f521b596e7_89642154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_245045775e19f521b59cd1_59161191', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17212782095e19f521b587b4_71167591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_17212782095e19f521b587b4_71167591',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10981521355e19f521b58e13_78302267',
  ),
  'page_content' => 
  array (
    0 => 'Block_15011692125e19f521b596e7_89642154',
  ),
  'hook_home' => 
  array (
    0 => 'Block_245045775e19f521b59cd1_59161191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10981521355e19f521b58e13_78302267', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15011692125e19f521b596e7_89642154', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
