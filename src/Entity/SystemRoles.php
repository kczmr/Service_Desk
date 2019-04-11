<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemRoles
 *
 * @ORM\Table(name="system_roles", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_system_role_id", columns={"id"})})
 * @ORM\Entity
 */
class SystemRoles
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
