<?php
namespace Customer\User\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    public function _construct()
    {
        $this->_init('Employee_Details ', 'id');
    }
}