<?php
namespace Customer\User\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'Employee_Details';

	protected $_cacheTag = 'Employee_Details';

	protected $_eventPrefix = 'Employee_Details';

	protected function _construct()
	{
		$this->_init('Customer\User\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
