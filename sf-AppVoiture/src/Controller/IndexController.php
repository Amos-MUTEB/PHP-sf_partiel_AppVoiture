<?php

namespace App\Controller;

use App\Repository\AdvertRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
     * @Route("/advertList", name="advertList")
     */
    public function advertList(AdvertRepository $advertRepository)
    {
        $advertLists = $advertRepository->findAll();
        return $this->render('index/advertList.html.twig', [
            'advertLists'=> $advertLists,
            'controller_name' => 'IndexController',
        ]);
    }




    /**
     * @Route("/advertEdit", name="advertEdit")
     */
    public function  advertEdit()
    {
        return $this->render('index/advertEdit.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
