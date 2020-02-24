<?php
namespace Customer\User\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected function _construct()
        {
                $this-&gt;_init('Customer\User\Model\Post', 'Customer\User\Model\ResourceModel\Post');
        }

}

