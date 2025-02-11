<?php

namespace App\Controller;

use App\Repository\StudentRepo;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WelcomeController extends AbstractController{
    #[Route("/hello",name:'helloRoute')]
    public function hello(LoggerInterface $logger){
        $info = $logger->info("Route Has Been Matched");
        return $this->render("hello/hello.html.twig",['info'=>$info]);
    }
    #[Route("/uzair/{name}",name:'uzairRoute')]
    public function uzair($name){
        return $this->render("hello/hello.html.twig",['name'=>$name]);
    }
    #[Route("/about",name:'aboutusPage')]
    public function about(){
        return $this->render("hello/about.html.twig");
    }
    #[Route("/add/{a}/{b}",name:'addRoute')]
    public function add($a,$b){
        $result = $a+$b;
        return $this->render("hello/add.html.twig",['result'=>$result]);
    }
    #[Route("/getStudent",name:'getStudent')]
    public function getStudent(StudentRepo $studentRepo){
         $studentRepo->getStudent();
        return $this->render("hello/getStudent.html.twig");
    }
   
}