<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\NewsModel;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
        $news = new NewsModel;
        $newsdata = $news->getLastnews();
		$this->show('default/home', ['news' => $newsdata]);
	}

    public function admin()
    {
        $this->show('default/admin');
    }

}