<?php

class OptFirst_ReviewMyCompany_Block_Adminhtml_Form_Edit_Form extends
    Mage_Adminhtml_Block_Widget_Form
{
    /**
     * Preparing form
     *
     * @return Mage_Adminhtml_Block_Widget_Form
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/save'),
            'method' => 'post',
            ));

        $form->setUseContainer(true);
        $this->setForm($form);

        $helper = Mage::helper('optfirst_reviewmycompany');
        $fieldset = $form->addFieldset('display', array('legend' => $helper->__('Select Social Icons'),
                'class' => 'fieldset-wide'));

        $fieldset->addField('facebook', 'text', array(
            'name' => 'facebook',
            'label' => $helper->__('Facebook'),
            'value' => 'facebook.com'
            ));
        $fieldset->addField('google', 'text', array(
            'name' => 'google',
            'label' => $helper->__('Google'),
            ));
        $fieldset->addField('twitter', 'text', array(
            'name' => 'twitter',
            'label' => $helper->__('Twitter'),
            ));
        $fieldset->addField('yelp', 'text', array(
            'name' => 'yelp',
            'label' => $helper->__('Yelp'),
            ));
        $fieldset->addField('linkedin', 'text', array(
            'name' => 'linkedin',
            'label' => $helper->__('LinkedIn'),
            ));


        if (Mage::registry('optfirst_reviewmycompany')) {
            $form->setValues(Mage::registry('optfirst_reviewmycompany')->getData());
        }

        return parent::_prepareForm();
    }
}
