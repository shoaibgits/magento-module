<?php
class OptFirst_ReviewMyCompany_Block_Index extends Mage_Core_Block_Template
{
    public function index()
    {

        $data = Mage::getModel('optfirst_reviewmycompany/review')->load(1);

        $collection = $data->getCollection();
        return $collection;
        
    }

}
