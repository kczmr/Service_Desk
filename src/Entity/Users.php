<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_users_email", columns={"email"}), @ORM\UniqueConstraint(name="UQ_users_id", columns={"id"}), @ORM\UniqueConstraint(name="UQ_users_login", columns={"login"})}, indexes={@ORM\Index(name="system_role", columns={"system_role"}), @ORM\Index(name="system_status", columns={"system_status"})})
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="user_name", type="string", length=50, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var \SystemRoles
     *
     * @ORM\ManyToOne(targetEntity="SystemRoles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_role", referencedColumnName="id")
     * })
     */
    private $systemRole;

    /**
     * @var \SystemStatuses
     *
     * @ORM\ManyToOne(targetEntity="SystemStatuses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="system_status", referencedColumnName="id")
     * })
     */
    private $systemStatus;

}
