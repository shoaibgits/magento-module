<?php
class OptFirst_ReviewMyCompany_Block_Form extends Mage_Core_Block_Template
{
    public function getFormAction()
    {
        return $this->getUrl('optfirst_reviewmycompany/email/post');
    }
}