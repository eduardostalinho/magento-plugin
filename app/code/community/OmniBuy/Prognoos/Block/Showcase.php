<?php

/**
 * @category    OmniBuy
 * @package     OmniBuy_Prognoos
 * @author      Fábio <fabio@constance.com.br>
 */
class OmniBuy_Prognoos_Block_Showcase extends Mage_Core_Block_Template
{

    public function _construct()
    {
        $showcaseType = $this->getData('showcase_type');
        $status = null;

        switch ($showcaseType) {
            case OmniBuy_Prognoos_Model_ShowcaseTypes::WHO_SAW_ALSO_SAW:
                $status = Mage::getStoreConfig('vitrines/home/enable_who_saw_also_saw');

                if ($status == true) {
                    parent::_construct();
                    $this->setTemplate('prognoos/showcase/who-saw-also-saw.phtml');
                    break;
                }
            case OmniBuy_Prognoos_Model_ShowcaseTypes::RECOMMENDED:
                $status = Mage::getStoreConfig('vitrines/home/enable_recommended');

                if ($status == true) {
                    parent::_construct();
                    $this->setTemplate('prognoos/showcase/recommended.phtml');
                    break;
                }
            case OmniBuy_Prognoos_Model_ShowcaseTypes::THE_MOST_VISITED:
                $status = Mage::getStoreConfig('vitrines/home/enable_most_visited');

                if ($status == true) {
                    parent::_construct();
                    $this->setTemplate('prognoos/showcase/top-visited.phtml');
                    break;
                }
        }
    }
}
