<?php

if(!defined('_PS_VERSION_'))  return false;

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class CommentProduct extends Module implements WidgetInterface
{
     private $templateFile;

     public function __construct()
     {
          $this->name = "commentproduct";
          $this->author = "Adam Stankiewicz";
          $this->version = "1.0";

          $this->bootstrap = true;
          parent::__construct();

          $this->displayName = $this->trans('Product comment', array(), 'Modules.CommentProduct.Admin');
          $this->description = $this->trans('Allow store users to leave a comment for product', array(), 'Modules.CommentProduct.Admin');
          $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);

          $this->templateFile = 'module:commentproduct/views/templates/hook/CommentProduct.tpl';     
     }

     public function install()
     {
          return parent::install() && $this->installDB();
     }

     public function installDB()
     {
          return Db::getInstance()->execute('
               CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'product_comment` (
                    `id_comment` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                    `user_id` int(10) NOT NULL,
                    `product_id` int(10) NOT NULL,
                    `comment` VARCHAR(255) NOT NULL,
                    PRIMARY KEY (`id_comment`)
               ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;');
     }

     public function uninstall()
     {
          return $this->uninstallDB() && parent::uninstall();
     }

     public function uninstallDB()
     {
         return Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'product_comment');
     }

     public function renderWidget($hookName = null, array $configuration = [])
     {
          $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));

          return $this->fetch($this->templateFile);
     }

     public function getWidgetVariables($hookName = null, array $configuration = [])
     {
          // Handle form submission
          if(Tools::isSubmit('comment')) {
               dump(Tools::getAllValues());
               die();
          }

          return [
               'message' => 'Cześć, tu jest ten produkt'
          ];
     }
}