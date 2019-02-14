<?php

namespace Controllers;

/**
 * @author esska
 */
class IndexController extends Controller {

    public function getHomepage() {
        $this->render('index'); // /public/views/{index}.php
    }

    public function getFirstProject() {
        $this->render('exemples/getstarted');
    }

}
