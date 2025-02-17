<?php

namespace App\Controller;

use App\Entity\Job;
use App\Form\JobApplicationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class JobApplicationController extends AbstractController
{
    #[Route('/job/application', name: 'app_job_application')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(JobApplicationType::class);
          $form->handleRequest($request);
        
          if($form->isSubmitted()&& $form->isValid()){
            $data = $form->getData();
            // dd($data);
            
             $job = $data['job'];
             $candidate = $data['candidate'];
  
             $job->addCandidate($candidate);

             $entityManager->persist($job);

             $entityManager->persist($candidate);

             $entityManager->flush();

             $this->addFlash('success', "You have been successfuully applied for the job");


          }
        return $this->render('job_application/index.html.twig', [
            'form' => $form,
        ]);
    }
}