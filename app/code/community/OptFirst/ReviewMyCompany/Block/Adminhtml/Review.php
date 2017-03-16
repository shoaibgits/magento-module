<?php
class OptFirst_ReviewMyCompany_Block_Adminhtml_Review extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_review';
        $this->_blockGroup = 'optfirst_reviewmycompany';
        $this->_headerText = Mage::helper('optfirst_reviewmycompany')->__('Review Manager');
        $this->_addButtonLabel = Mage::helper('optfirst_reviewmycompany')->__('Add Review');
        parent::__construct();
    }

}