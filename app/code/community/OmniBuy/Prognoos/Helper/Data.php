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
}
	 