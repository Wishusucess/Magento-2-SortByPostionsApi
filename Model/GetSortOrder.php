<?php
/**
 * Category: Wishusucess Sort By Positions REST Api
 * Developer: Hemant Singh Magento 2x Developer
 * Website: http://wwww.wishusucess.com
 */
namespace Wishusucess\SortByPositionsApi\Model;

use Wishusucess\SortByPositionsApi\Api\GetSortOrderInterface;

class GetSortOrder implements GetSortOrderInterface {
    /**
     * @var \Magento\Catalog\Model\Config
     */
    private $catalogConfig;

    /**
     * @var \Magento\Framework\Escaper
     */
    private $escaper;

    /**
     * @param \Magento\Catalog\Model\Config $catalogConfig
     * @param \Magento\Framework\Escaper    $escaper
     */
    public function __construct(
        \Magento\Catalog\Model\Config $catalogConfig,
        \Magento\Framework\Escaper $escaper
    ) {
        $this->_catalogConfig = $catalogConfig;
        $this->escaper = $escaper;
    }

    /**
     * Return array of Sort By List of Options of category products list page
     * 
     * @return array
     */
    public function getSortOrderData() {
        $sortOrder = $this->_catalogConfig->getAttributeUsedForSortByArray();
        $custom_array = [];
        foreach ($sortOrder as $key => $value) {
            $custom_array[] = $this->escaper->escapeHtml(__($value));
        }
        return $custom_array;
    }
}