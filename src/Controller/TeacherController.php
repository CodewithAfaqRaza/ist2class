<?php

namespace App\Controller;

use App\Entity\Teacher;
use App\Repository\TeacherRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/teacher')]
class TeacherController extends AbstractController{

  #[Route("/create")]
    public function create(TeacherRepository $teacherRepository ){
        $teacher = new Teacher;
        $teacher->setName("Irfan Ullah");
        $teacherRepository->add($teacher,true);
       // return new Response("Handle Error");
        
       return $this->render('Teacher/create.html.twig');

    }
    #[Route("/new")]
    public function new(){
       // return new Response("Handle Error");
       return $this->render('Teacher/create.html.twig');


    }
    

}