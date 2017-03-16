<?php

class OptFirst_ReviewMyCompany_Block_Adminhtml_Form_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->_blockGroup = 'optfirst_reviewmycompany';
        $this->_controller = 'adminhtml_form';
        $this->_headerText = Mage::helper('optfirst_reviewmycompany')->__('Edit Form');
    }

}