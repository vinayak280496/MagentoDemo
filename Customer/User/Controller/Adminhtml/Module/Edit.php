<?php
namespace Customer\User\Controller\Adminhtml\Edit;

class Edit extends \Magento\Backend\App\Action
{
protected function _construct(\Magento\Backend\App\Action\Context $context){
     parent::__construct($context);
}

public function execute() {

       $id = $this->getRequest()->getParam('comment_id');
        try {            
            $model = $this->_commentFactory->create();            
            $model->load($id);            
            $model->delete();
        } catch (Exception $e) {            
            $this->messageManager->addError($e->getMessage());
        }
}