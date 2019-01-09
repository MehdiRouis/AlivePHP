<?php

    namespace Controllers;

    /**
     * @author esska
     */
    class IndexController extends Controller {

	public function getHomepage() {
	    $this->render('index'); // /public/views/{index}.php
	}

	public function getId($string) {
	    $this->render('exemple/getUrlParams', ['id' => $string]);
	}
	
	public function getRedirection() {
	    $this->render('exemple/getRedirection');
	}
	
	public function getFullUrl() {
	    $this->render('exemple/getFullUrl');
	}
	
	public function get404() {
	    $this->render('exemple/404');
	}
	
	public function getNotFound() {
	    echo 'Erreur, page introuvable.';
	}

    }
    