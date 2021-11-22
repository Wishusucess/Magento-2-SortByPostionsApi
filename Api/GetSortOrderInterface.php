<?php
/**
 * Category: Wishusucess Sort By Positions REST Api
 * Developer: Hemant Singh Magento 2x Developer
 * Website: http://wwww.wishusucess.com
 */
namespace Wishusucess\SortByPositionsApi\Api;

interface GetSortOrderInterface {
    /**
     * Returns sort order list
     *
     * @api
     * @return array
     */
    public function getSortOrderData();
}