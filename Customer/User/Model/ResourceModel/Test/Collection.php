<?php
namespace Customer\User\Model\ResourceModel\Test;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    public function _construct()
    {
        $this->_init(
            'Customer\User\Model\Test',
            'Customer\User\Model\ResourceModel\Test'
        );
    }
}
?>