<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DashSpaceRepository")
 */
class DashSpace implements transform
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

    public function transform(string $input) : string
    {
        str_replace( " ",'-',$input);
        // TODO: Implement transform() method.
    }
}
