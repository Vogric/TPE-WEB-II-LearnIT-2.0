<?php

require_once "./libs/smarty/Smarty.class.php";

class UserView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign( 'base_url', BASE_URL );

        if ( session_status() != PHP_SESSION_ACTIVE ) {
            session_start();
        }

        if ( isset( $_SESSION['IS_LOGGED'] ) ) {
            $this->smarty->assign( 'logged', true );
            $this->smarty->assign( 'email_s', $_SESSION['EMAIL'] );
        } else {
            $this->smarty->assign( 'logged', false );
        }

    }

    public function showUser()
    {
        $this->smarty->assign( 'title_s', 'LearnIT - User' );
        $this->smarty->display( 'templates/user.tpl' );
    }

}