<?php

namespace App\Controller;

use App\Entity\Student;
use App\Repository\StudentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/student')]
class StudentController extends AbstractController{

 #[Route('/show/all')]
 public function showall(StudentRepository $studentRepository){
   $students = $studentRepository->findAll();
  return $this->render('/Student/showall.html.twig',[
    'students'=>$students
  ]);

}
 #[Route('/showone/{id}')]
 public function showone(StudentRepository $studentRepository,$id){
   $student = $studentRepository->find($id);
  return $this->render('/Student/showone.html.twig',[
    'student'=>$student
  ]);
}
 #[Route('/create',name:'create')]

 public function create(StudentRepository $studentRepository){
    $student = new Student;
    
    $student->setName("Shahab");
    $student->setFatherName('Rasool');
    $student->setEmail("shabab@drupak.com");
    $student->setAddress("Marden");

    $studentRepository->add($student,true);

   return $this->render('Student/create.html.twig',[
    'student'=>$student
   ]);

 }
 #[Route('/update/{id<\d+>}',name:'update')]

 public function update(StudentRepository $studentRepository,$id){
    // $student = new Student;

   $updateStudent=  $studentRepository->find($id);
   $updateStudent->setEmail("shahab@drupak.com");     

    $studentRepository->add($updateStudent,true);

   return $this->render('Student/update.html.twig',[
    'student'=>$updateStudent
   ]);

 }
}