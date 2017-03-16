<?php
class OptFirst_ReviewMyCompany_Model_Mysql4_Review extends
    Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('optfirst_reviewmycompany/review', 'id_optfirst_reviewmycompany'); //the second parameter must be the primary key in your warrantydata table. If it's not `entity_id` then change it
    }
}
?>