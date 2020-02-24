<?php
namespace Customer\User\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Customer\User\Model\ResourceModel\Test');
    }
}