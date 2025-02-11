<?php

namespace App\Repository;

use Psr\Log\LoggerInterface;

class StudentRepo{

   private $arr = [
     1=> "umer",
     2=>'uzair',
     3=> 'bilal'
   ];
   public function __construct(private LoggerInterface $logger)
   {
    
   }

   public function getStudent(){
    $this->logger->info('The is from get Student Repo');
    return $this->arr;
   }
}