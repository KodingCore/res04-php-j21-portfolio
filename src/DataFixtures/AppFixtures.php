<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Project;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $project = new Project();
        $project->setName('Mon premier projet');
        $project->setTechnoPrincipal('Symfony');
        $project->setTechnoSecondary('HeavenTech');
        $project->setDescription('Ceci est une description de mon projet');
        $manager->persist($project);

        $manager->flush();
    }
}
