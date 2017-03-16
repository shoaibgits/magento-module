<?php
class OptFirst_ReviewMyCompany_EmailController extends
    Mage_Core_Controller_Front_Action
{
    public function sendemailAction()
    {
        $params = $this->getRequest()->getParams();
        $mail = Mage::getModel('core/email');
        $body = '<p>Hello,</p>
        <p>A New CLient Review Is Received:</p>
        <p><b>Name:</b> ' . ($params['name']) . '<br>
        <p><b>Email:</b> ' . ($params['email']) . '<br>
        <b>Comments:</b> ' . ($params['comment']) . '</p>';
        $mail = new Zend_Mail();
        $mail->setBodyHtml($body);
        $mail->setFrom($params['email'], $params['name']);
        $mail->addTo('techleadz.wpteam@gmail.com');
        $mail->setSubject('Review Form');

        try {

            $mail->send();
            Mage::getSingleton('core/session')->addSuccess('Message has been Sent Successfully.');
            $this->_redirect('reviews/');
             }

        catch (exception $ex) {
            Mage::getSingleton('core/session')->addError('Unable to send email. Sample of a custom notification error from Contact Us Form.');

        }
        $this->_redirect('reviews/');

    }
}
