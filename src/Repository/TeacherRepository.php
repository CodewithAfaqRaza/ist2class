<?php

namespace App\Repository;

use App\Entity\Teacher;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class TeacherRepository extends ServiceEntityRepository{
    public function __construct(ManagerRegistry $registry,private EntityManagerInterface $entityManagerInterface)
    {
        parent::__construct($registry, Teacher::class);
    }
    public function add(Teacher $teacher, bool $flush = false){
     $this->entityManagerInterface->persist($teacher);
     if($flush){
        $this->entityManagerInterface->flush();
     }

    }

}