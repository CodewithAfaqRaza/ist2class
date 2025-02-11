<?php

namespace App\DataFixtures;

use App\Factory\StudentFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        // $student = new Student;
        // $student->setName("Umer");
        // $student->setFatherName("Saleem");
        // $student->setEmail("umer@drupak.com");
        // $student->setAddress("Texilla");
        // $manager->persist($student);

        // $student2 = new Student;
        // $student2->setName("Shahab");
        // $student2->setFatherName("Rasool");
        // $student2->setEmail("shahab@drupak.com");
        // $student2->setAddress("Mardan");
        // $manager->persist($student2);
        // $manager->flush();

        StudentFactory::createMany(20);
         
    }
}