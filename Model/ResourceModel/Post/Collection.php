<?php
namespace AHT\Listing\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'listing_id';
    protected $_eventPrefix = 'aht_listing_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AHT\Listing\Model\Post', 'AHT\Listing\Model\ResourceModel\Post');
    }
}
