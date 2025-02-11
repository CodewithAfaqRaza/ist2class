<?php

namespace App\Entity;

use App\Repository\TeacherRepository;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass:TeacherRepository::class)]
class Teacher {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public  ?int $id= null;
    #[ORM\Column]
    public  ?string $name = null;
    

    /**
     * Get the value of name
     *
     * @return ?string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

   
  
    public function setName(?string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of id
     *
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}