<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MasterRepository")
 */


class Master
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var transform
     */


    private $transformation;

    /**
     * Master constructor.
     * @param transform $transformation
     */
    public function __construct(transform $transformation)
    {
        $this->transformation = $transformation;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransformation(): ?string
    {
        return $this->transformation;
    }

    public function setTransformation(string $transformation): self
    {
        $this->transformation = $transformation;

        return $this;
    }

    public function transformText(string $output){
        return $this->transformation->transform($output);
    }

}
