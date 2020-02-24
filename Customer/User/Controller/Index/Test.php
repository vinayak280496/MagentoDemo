<?php
namespace Customer\User\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	 protected $_resultPageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		
		$this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
	}

	public function execute()
	{
		$resultPage = $this->_resultPageFactory->create();
        return $resultPage;
	}
}
