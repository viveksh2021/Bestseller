<?php

namespace Brainvire\BestSellerProducts\Model\ResourceModel\Report\Bestsellers;

class Collection extends \Magento\Sales\Model\ResourceModel\Report\Bestsellers\Collection
{
    protected function _construct()
    {
        parent::_construct();
        $this->_ratingLimit = 6; //change Default Limit Number here as you want
    }
}