<?php

/**
 * @category    OmniBuy
 * @package     OmniBuy_Prognoos
 * @author      Fábio <fabio@constance.com.br>
 */
class OmniBuy_Prognoos_Block_HomeShowcase extends Mage_Catalog_Block_Product_Abstract //Mage_Adminhtml_Block_Template
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('prognoos/home/home-showcase.phtml');
    }
}
