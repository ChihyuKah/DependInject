<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\DashSpace;
use App\Entity\DoNothing;
use App\Entity\Master;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {

        if (!isset($_POST['dropdown'])) {
            $master = new Master(new DoNothing());
        } elseif ($_POST['dropdown'] === 'capitaliser') {
            $master = new Master(new Capitalize());
        } elseif ($_POST['dropdown'] === 'dasher') {
            $master = new master (new DashSpace());
        }
//        if (isset($_POST['inputField'])) {
//            $master = new Master(new DashSpace());
//        } if else
        return $this->render('homepage/index.html.twig', [
            'controller_name' => $master->transformText($_POST['inputField']),
        ]);
    }
}

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
//    echo '<h2>$_SESSION</h2>';
//    var_dump($_SESSION);
}

whatIsHappening();
