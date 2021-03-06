<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CapitalizeRepository")
 */
class Capitalize implements transform
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function transform(string $input)
    {
        return preg_replace_callback('/(\w)(.)/',function ($m){
            return strtoupper($m[1]).$m[2];
        }, $input);
        // TODO: Implement transform() method.
    }
}
