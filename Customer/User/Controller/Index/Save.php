<?php
namespace Customer\User\Controller\Index;
 
use Magento\Framework\App\Action\Context;
use Customer\User\Model\TestFactory;
class Save extends \Magento\Framework\App\Action\Action
{
	/**
     * @var Test
     */
    protected $_pageFactory;
 
	public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

	public function execute()
    {
         return $this->resultPageFactory->create();
}