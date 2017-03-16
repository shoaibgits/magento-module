<?php

class OptFirst_ReviewMyCompany_Block_Adminhtml_Review_Grid extends
    Mage_Adminhtml_Block_Widget_Grid
{


    public function __construct()
    {
        parent::__construct();
        $this->setId('reviewGrid');
        $this->setDefaultSort('id_optfirst_reviewmycompany');
        $this->setDefaultDir('ASC');
        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('optfirst_reviewmycompany/review')->getCollection();
        //print_r($collection);
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('facebook', array(
            'header' => Mage::helper('optfirst_reviewmycompany')->__('Facebook'),
            'align' => 'right',
            'width' => '10px',
            'index' => 'facebook',
            ));

        $this->addColumn('google', array(
            'header' => Mage::helper('optfirst_reviewmycompany')->__('Google'),
            'align' => 'left',
            'index' => 'google',
            'width' => '50px',
            ));


        $this->addColumn('linkedin', array(
            'header' => Mage::helper('optfirst_reviewmycompany')->__('Linkedin'),
            'width' => '150px',
            'index' => 'linkedin',
            ));
            
        $this->addColumn('twitter', array(
            'header' => Mage::helper('optfirst_reviewmycompany')->__('Linkedin'),
            'width' => '150px',
            'index' => 'twitter',
            ));
            
        $this->addColumn('yelp', array(
            'header' => Mage::helper('optfirst_reviewmycompany')->__('Linkedin'),
            'width' => '150px',
            'index' => 'yelp',
            ));
            
        return parent::_prepareColumns();
    }
}
