<?php

/**
 * @category    OmniBuy
 * @package     OmniBuy_Prognoos
 * @author      Fábio <fabio@constance.com.br>
 */
class OmniBuy_Prognoos_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Get all categories of a product
     * @param $categories
     * @return string
     */
    public function getAllCategoriesByProduct($categories)
    {
        $allCategories = '';

        foreach ($categories as $category) {
            $allCategories .= $category->getEntityId() . ',';
        }

        $allCategories = substr($allCategories, 0, -1);

        return $allCategories;
    }

    /**
     * Get template requested
     * @param $pageName
     * @param $showcaseType
     * @return int|null
     */
    public function getTemplate($pageName, $showcaseType)
    {
        $status = null;

        switch ($showcaseType) {
            case OmniBuy_Prognoos_Model_ShowcaseTypes::WHO_SAW_ALSO_SAW:
                $status = Mage::getStoreConfig('vitrines/' . $pageName . '/enable_who_saw_also_saw');

                if ($status == true) {
                    Mage::app()->getLayout()->createBlock('core/template')
                        ->setTemplate('prognoos/showcase/who-saw-also-saw.phtml');
                }

                return $status;
                break;
            case OmniBuy_Prognoos_Model_ShowcaseTypes::WHO_BOUGHT_ALSO_BOUGHT:
                $status = Mage::getStoreConfig('vitrines/' . $pageName . '/enable_who_bought_also_bought');

                if ($status == true) {
                    Mage::app()->getLayout()->createBlock('core/template')
                        ->setTemplate('prognoos/showcase/who-bought-also-bought.phtml');
                }

                return $status;
                break;
            case OmniBuy_Prognoos_Model_ShowcaseTypes::SIMILAR_PRODUCT:
                $status = Mage::getStoreConfig('vitrines/' . $pageName . '/enable_similar_product');

                if ($status == true) {
                    Mage::app()->getLayout()->createBlock('core/template')
                        ->setTemplate('prognoos/showcase/similar-product.phtml');
                }

                return $status;
                break;
            case OmniBuy_Prognoos_Model_ShowcaseTypes::THE_BEST_SELLERS:
                $status = Mage::getStoreConfig('vitrines/' . $pageName . '/enable_best_sellers');

                if ($status == true) {
                    Mage::app()->getLayout()->createBlock('core/template')
                        ->setTemplate('prognoos/showcase/best-sellers.phtml');
                }

                return $status;
                break;
            case OmniBuy_Prognoos_Model_ShowcaseTypes::RECOMMENDED:
                $status = Mage::getStoreConfig('vitrines/' . $pageName . '/enable_recommended');

                if ($status == true) {
                    Mage::app()->getLayout()->createBlock('core/template')
                        ->setTemplate('prognoos/showcase/recommended.phtml');
                }

                return $status;
                break;
            case OmniBuy_Prognoos_Model_ShowcaseTypes::THE_MOST_VISITED:
                $status = Mage::getStoreConfig('vitrines/' . $pageName . '/enable_most_visited');

                if ($status == true) {
                    Mage::app()->getLayout()->createBlock('core/template')
                        ->setTemplate('prognoos/showcase/top-visited.phtml');
                }

                return $status;
                break;
            default:
                return 0;
        }
    }

    /**
     * Get prognoos username
     * @return mixed
     */
    public function getPrognoosUser()
    {
        return Mage::getStoreConfig('geral/geral/user_prognoos');
    }
}
	 