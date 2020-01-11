<?php
/* Smarty version 3.1.33, created on 2020-01-11 17:17:37
  from 'E:\WorkSpace\mocarze.pl\sklep.mocarze.pl\backend\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e19f521b741c9_46711771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e7d1c12d059123089b41252116b0d812252a31' => 
    array (
      0 => 'E:\\WorkSpace\\mocarze.pl\\sklep.mocarze.pl\\backend\\themes\\classic\\templates\\page.tpl',
      1 => 1578758595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e19f521b741c9_46711771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2999909645e19f521b6c8f1_93252678', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_3255872965e19f521b6d6e8_92046176 extends Smarty_Internal_Block
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
class Block_10019067215e19f521b6cf13_44195376 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3255872965e19f521b6d6e8_92046176', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_5066204945e19f521b719b7_20384675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_6404515675e19f521b721d2_76605215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14773681965e19f521b713c7_78817806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5066204945e19f521b719b7_20384675', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6404515675e19f521b721d2_76605215', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_19174586385e19f521b733d3_46755548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_8017568195e19f521b72e14_01892308 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19174586385e19f521b733d3_46755548', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2999909645e19f521b6c8f1_93252678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2999909645e19f521b6c8f1_93252678',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10019067215e19f521b6cf13_44195376',
  ),
  'page_title' => 
  array (
    0 => 'Block_3255872965e19f521b6d6e8_92046176',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14773681965e19f521b713c7_78817806',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5066204945e19f521b719b7_20384675',
  ),
  'page_content' => 
  array (
    0 => 'Block_6404515675e19f521b721d2_76605215',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8017568195e19f521b72e14_01892308',
  ),
  'page_footer' => 
  array (
    0 => 'Block_19174586385e19f521b733d3_46755548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10019067215e19f521b6cf13_44195376', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14773681965e19f521b713c7_78817806', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8017568195e19f521b72e14_01892308', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
