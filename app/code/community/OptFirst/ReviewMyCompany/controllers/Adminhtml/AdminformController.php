<?php

class OptFirst_ReviewMyCompany_Adminhtml_AdminformController extends Mage_Adminhtml_Controller_Action
{


    /**
     * View form action
     */
    public function indexAction()
    
    {
        $this->_registryObject();
        $this->loadLayout();
        $this->_setActiveMenu('optfirst/form');
        $this->_addBreadcrumb(Mage::helper('optfirst_reviewmycompany')->__('Form'), Mage::helper('optfirst_reviewmycompany')->__('Form'));
        $this->renderLayout();
    }

    /**
     * Grid Action
     * Display list of products related to current category
     *
     * @return void
     */
    public function gridAction()
    {
        $this->_registryObject();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('optfirst_reviewmycompany/adminhtml_form_edit')
                ->toHtml()
        );
    }

    /**
     * Grid Action
     * Display list of products related to current category
     *
     * @return void
     */
    //public function saveAction()
    //{
      //  $output  = "<pre>Full Data:\n";
       // $output .= print_r($this->getRequest()->getParams(), 1);
       // $products = Mage::helper('adminhtml/js')->decodeGridSerializedInput($this->getRequest()->getParam('products'));
       // $output .= "\nProducts:\n";
       // $output .= print_r($products, 1);
       // $output .= "</pre>";
       // $this->getResponse()->setBody($output);
        
        
   // }
    
  
   /**
     * Grid Action
     * Display list of products related to current category
     *
     * @return void
     */
     
     
     public function saveAction()
        {
        
        //$data = $this->getRequest()->getParams();
    if ( $data = $this->getRequest()->getParams() ) {
        
        $this->_getSession()->setFormData($data);
        $model = Mage::getModel('optfirst_reviewmycompany/review')->setData($data);
        
        //$model = Mage::getModel('optfirst_reviewmycompany/review');
        //print_r($model->getData());
            
            try {
                $id = 1;
        if ( $id ) {
            $model->load($id);
        }
        $model->addData($data);
        //saves data
        $model->save();

        $this->_getSession()->addSuccess(
                $this->__('Data was saved'));

        $this->_getSession()->setFormData(false);

        if ( $this->getRequest()->getParam('back') ) {
            $params = array('id' => $model->getId());
            $this->_redirect('*/*/', $params);
        } else {
            $this->_redirect('*/*/');
        }
    } catch ( Exception $e ) {
        $this->_getSession()->addError($e->getMessage());
        if ( $model && $model->getId() ) {
            $this->_redirect('*/*/', array(
                'id' => $model->getId()
            ));
        } else {
            $this->_redirect('*/*/');
        }
    }
            

        return;
    }
    //if no data has been passed an error will be thrown and user redirected
    $this->_getSession()->addError($this__('No data found to save'));
    $this->_redirect('*/*');
}
     
     
    

    /**
     * registry form object
     */
    protected function _registryObject()
    {
      Mage::register('optfirst_reviewmycompany', Mage::getModel('optfirst_reviewmycompany/review'));
    }

}