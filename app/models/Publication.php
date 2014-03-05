<?php
/**
 * User
 *
 * @Table(name="Publication")
 * @Entity(repositoryClass="PublicationRepository")
 */
class Publication {
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
     * @Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     * @var string
     *
     * @Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @Column(name="reason", type="string", length=255)
     */
    private $reason;

    /**
     * @var integer
     *
     * @Column(name="price", type="integer")
     * @price
     */
    private $price;

    /**
     * @var boolean
     *
     * @Column(name="novelty", type="boolean", length=255)
     */
    private $novelty;

    /**
     * @ManyToOne(targetEntity = "User", inversedBy="publications" )
     * @JoinColumn(name = "Users", referencedColumnName="id")
     */
    private $user;

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
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return description
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }
    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return photo
     */
    public function setPhoto($photo) {
        $this->photo = $photo;
        return $this;
    }
    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto() {
        return $this->photo;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return category
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }
    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return reason
     */
    public function setReason($reason) {
        $this->reason = $reason;
        return $this;
    }
    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason() {
        return $this->reason;
    }
    
    /**
     * Set price
     *
     * @param integer $price
     * @return category
     */
    public function setPrice($price) {
        $this->price = $price;
        return $this;
    }
    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice() {
        return $this->price;
    }

     /**
     * Set novelty
     *
     * @param boolean $novelty
     * @return novelty
     */
    public function setNovelty($novelty) {
        $this->novelty = $novelty;
        return $this;
    }
    /**
     * Get novelty
     *
     * @return boolean 
     */
    public function getNovelty() {
        return $this->novelty;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return user
     */
    public function setUser($user) {
        $this->user = $user;
        return $this;
    }
    /**
     * Get user
     *
     * @return string 
     */
    public function getUser() {
        return $this->user;
    }
}
?>