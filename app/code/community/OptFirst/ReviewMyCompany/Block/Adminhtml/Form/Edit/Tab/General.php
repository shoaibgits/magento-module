<?php

class OptFirst_ReviewMyCompany_Block_Adminhtml_Form_Edit_Tab_General extends Mage_Adminhtml_Block_Widget_Form
{

    /**
     * prepare form in tab
     */
    protected function _prepareForm()
    {
        $helper = Mage::helper('optfirst_reviewmycompany');
        $form = new Varien_Data_Form();
        $form->setHtmlIdPrefix('general_');
        $form->setFieldNameSuffix('general');

        $fieldset = $form->addFieldset('display', array(
            'legend'       => $helper->__('Display Settings'),
            'class'        => 'fieldset-wide'
        ));

        $fieldset->addField('label', 'text', array(
            'name'         => 'label',
            'label'        => $helper->__('Label'),
        ));

        $form->getElement('label')->setRenderer(Mage::app()->getLayout()->createBlock(
            'optfirst_reviewmycompany/adminhtml_form_edit_renderer_label'
        ));

        $fieldset->addType('multiselect_enabled', Mage::getConfig()->getBlockClassName('optfirst_reviewmycompany/adminhtml_form_edit_renderer_multienabled'));
        $fieldset->addField('available_sortby', 'multiselect_enabled', array(
            'name'           => 'available_sortby',
            'label'          => $helper->__('Available Product Listing Sort By'),
            'values'         => Mage::getModel('catalog/category_attribute_source_sortby')->getAllOptions(),
            'checkbox_label' => $helper->__('Use All Available Attributes'),
            'required'       => true,
        ));

        if (Mage::registry('optfirst_reviewmycompany')) {
            $form->setValues(Mage::registry('optfirst_reviewmycompany')->getData());
        }

        $this->setForm($form);
        return parent::_prepareForm();
    }

}