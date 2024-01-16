<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article->setContent('Fair trade a half and half, single origin dripper sit strong est frappuccino fair trade con panna. White macchiato, to go extraction blue mountain, decaffeinated, est grinder crema shop latte café au lait. Instant grounds, spoon, steamed galão rich lungo single origin.');
        $article->setTitle('Pierwszy');
        $manager->persist($article);

        $article2 = new Article();
        $article2->setContent('Iced in grinder, mocha seasonal dripper robust decaffeinated. Java cup to go and steamed cortado strong blue mountain. Cultivar, filter instant iced barista single shot aged. Café au lait sugar, cappuccino organic saucer seasonal instant flavour crema turkish carajillo.');
        $article2->setTitle('Drugi');
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setContent('3Iced in grinder, mocha seasonal dripper robust decaffeinated. Java cup to go and steamed cortado strong blue mountain. Cultivar, filter instant iced barista single shot aged. Café au lait sugar, cappuccino organic saucer seasonal instant flavour crema turkish carajillo.');
        $article3->setTitle('Trzeci');
        $manager->persist($article3);


        $manager->flush();
    }
}
