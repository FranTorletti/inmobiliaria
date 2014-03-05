<?php
/**
 * User
 *
 * @Table(name="User")
 * @Entity(repositoryClass="UsersRepository")
 */
class User {
    /**
     * @var integer
     *
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return email
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return name
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return password
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
    /**
     * Get password
     *
     * @return string 
     */
    public function getpassword() {
        return $this->password;
    }
}
 
?>