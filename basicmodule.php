<?php
/*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if(!defined('_PS_VERSION_')){
    exit;
}

class BasicModule extends Module{
    
    public function __construct()
    {
        $this->name = "basicmodule";
        $this->tab = "other";
        $this->version = "1.0";
        $this->author = "Iwo Rutka";
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            "min" => "1.7",
            "max" => _PS_VERSION_
        ];
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l("PrestaShop Basic Module");
        $this->description = $this->l("Basic module for PrestaShop");
        $this->confirmUninstall = $this->l("Are You Sure?");

    }

    public function install()
    {
        return parent::install() && $this->registerHook('registerGDPRConsent');

    }

    public function uninstall()
    {
        return parent::uninstall();
        
    }
    
            // public function hookdisplayNav2($params){
    //     $this->context->smarty->assign(['paramtest' => "Iwo"]);
    //     return $this->display(__FILE__, 'views/templates/hook/displayNav2.tpl');
    // }
}
