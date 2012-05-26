<?php
class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        /**
         * Resgata o nome do usuário
         * Caso não exista, será recebido 'Visitante'
         */
        $username = $this->_getParam('username', 'Visitante');

        /**
         * Envia um parâmetro para view
         */
        $this->view->assign('username', $username);
    }
}

