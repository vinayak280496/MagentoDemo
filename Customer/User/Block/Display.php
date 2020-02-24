<?php
namespace Customer\User\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	protected $_postFactory;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Customer\User\Model\PostFactory $postFactory
	)
	{
		$this->_postFactory = $postFactory;
		parent::__construct($context);
	}
	public function sayHello()
	{
		return __('');
	}

	public function getPostCollection(){
		$post = $this->_postFactory->create();
		$collection = $post->getCollection();
		return $collection;
	}
}
