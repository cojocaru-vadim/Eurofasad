<?php

class ContactController extends Zend_Controller_Action
{

    public function preDispatch(){
        //$this->_helper->layout->setLayout('layout');
    }
    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        if ($this->getRequest()->isPost()) {
            $post = $this->_request->getPost();
//            dump($post);
            Moldova_Utils::initiateMail($post['textarea']);

            Moldova_Utils::$MAIL->addTo('cojocaru.vadim@gmail.com', "Cojocaru Vadim");
            Moldova_Utils::$MAIL->addCC("poloboc@live.com", "Poloboc Alexandru");
            Moldova_Utils::$MAIL->setSubject('BS code');

            Moldova_Utils::$MAIL->send(Moldova_Utils::getSMTP());
        }

    }


}

