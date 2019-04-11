<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApplicationTypes
 *
 * @ORM\Table(name="application_types", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_application_types_id", columns={"id"})})
 * @ORM\Entity
 */
class ApplicationTypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;


}
