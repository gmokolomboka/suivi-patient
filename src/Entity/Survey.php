<?php

namespace App\Entity;

use App\Repository\SurveyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SurveyRepository")
 */
class Survey
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $civility;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gender;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $birthDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $maritalStatus;

     /**
     * @ORM\Column(type="string", length=255)
     */
    private $doYouHaveChild;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sonNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $familyLinkWithAlzheimerPerson;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $familyLinkWithAlzheimerPersonIfOther;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $timePerWeekWithAlzheimerPerson;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doYouChangeYourLifeOrganisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $howIsTheCare;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $areYouSurrounded;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doYouFeelAlone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doYouKnowDrugsPrescribedForAlzheimerDisease;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doYouKnowExistingAssistanceAndSupportSystems;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $doYouKnowExistingAssistanceAndSupportSystemsIfYes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $whatAreYouDoingTogether;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doYouHavePlans;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $doYouHavePlansIfYes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $anyThingToAdd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $anyComments;

    /**
     * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
     */
    private $created;
    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="surveys")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $body;

    /**
     * @ORM\Column(type="integer", options={"default": "0"})
     */
    private $views = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(string $civility): self
    {
        $this->civility = $civility;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTimeInterface $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getMaritalStatus(): ?string
    {
        return $this->maritalStatus;
    }

    public function setMaritalStatus(string $maritalStatus): self
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    public function getSonNumber(): ?string
    {
        return $this->sonNumber;
    }

    public function setSonNumber(string $sonNumber): self
    {
        $this->sonNumber = $sonNumber;

        return $this;
    }

    public function getFamilyLinkWithAlzheimerPerson(): ?string
    {
        return $this->familyLinkWithAlzheimerPerson;
    }

    public function setFamilyLinkWithAlzheimerPerson(string $familyLinkWithAlzheimerPerson): self
    {
        $this->familyLinkWithAlzheimerPerson = $familyLinkWithAlzheimerPerson;

        return $this;
    }

    public function getFamilyLinkWithAlzheimerPersonIfOther(): ?string
    {
        return $this->familyLinkWithAlzheimerPersonIfOther;
    }

    public function setFamilyLinkWithAlzheimerPersonIfOther(?string $familyLinkWithAlzheimerPersonIfOther): self
    {
        $this->familyLinkWithAlzheimerPersonIfOther = $familyLinkWithAlzheimerPersonIfOther;

        return $this;
    }

    public function getTimePerWeekWithAlzheimerPerson(): ?string
    {
        return $this->timePerWeekWithAlzheimerPerson;
    }

    public function setTimePerWeekWithAlzheimerPerson(string $timePerWeekWithAlzheimerPerson): self
    {
        $this->timePerWeekWithAlzheimerPerson = $timePerWeekWithAlzheimerPerson;

        return $this;
    }

    public function getDoYouChangeYourLifeOrganisation(): ?string
    {
        return $this->doYouChangeYourLifeOrganisation;
    }

    public function setDoYouChangeYourLifeOrganisation(string $doYouChangeYourLifeOrganisation): self
    {
        $this->doYouChangeYourLifeOrganisation = $doYouChangeYourLifeOrganisation;

        return $this;
    }

    public function getHowIsTheCare(): ?string
    {
        return $this->howIsTheCare;
    }

    public function setHowIsTheCare(string $howIsTheCare): self
    {
        $this->howIsTheCare = $howIsTheCare;

        return $this;
    }

    public function getAreYouSurrounded(): ?string
    {
        return $this->areYouSurrounded;
    }

    public function setAreYouSurrounded(string $areYouSurrounded): self
    {
        $this->areYouSurrounded = $areYouSurrounded;

        return $this;
    }

    public function getDoYouFeelAlone(): ?string
    {
        return $this->doYouFeelAlone;
    }

    public function setDoYouFeelAlone(string $doYouFeelAlone): self
    {
        $this->doYouFeelAlone = $doYouFeelAlone;

        return $this;
    }

    public function getDoYouKnowDrugsPrescribedForAlzheimerDisease(): ?string
    {
        return $this->doYouKnowDrugsPrescribedForAlzheimerDisease;
    }

    public function setDoYouKnowDrugsPrescribedForAlzheimerDisease(string $doYouKnowDrugsPrescribedForAlzheimerDisease): self
    {
        $this->doYouKnowDrugsPrescribedForAlzheimerDisease = $doYouKnowDrugsPrescribedForAlzheimerDisease;

        return $this;
    }

    public function getDoYouKnowExistingAssistanceAndSupportSystems(): ?string
    {
        return $this->doYouKnowExistingAssistanceAndSupportSystems;
    }

    public function setDoYouKnowExistingAssistanceAndSupportSystems(string $doYouKnowExistingAssistanceAndSupportSystems): self
    {
        $this->doYouKnowExistingAssistanceAndSupportSystems = $doYouKnowExistingAssistanceAndSupportSystems;

        return $this;
    }

    public function getDoYouKnowExistingAssistanceAndSupportSystemsIfYes(): ?string
    {
        return $this->doYouKnowExistingAssistanceAndSupportSystemsIfYes;
    }

    public function setDoYouKnowExistingAssistanceAndSupportSystemsIfYes(?string $doYouKnowExistingAssistanceAndSupportSystemsIfYes): self
    {
        $this->doYouKnowExistingAssistanceAndSupportSystemsIfYes = $doYouKnowExistingAssistanceAndSupportSystemsIfYes;

        return $this;
    }

    public function getWhatAreYouDoingTogether(): ?string
    {
        return $this->whatAreYouDoingTogether;
    }

    public function setWhatAreYouDoingTogether(string $whatAreYouDoingTogether): self
    {
        $this->whatAreYouDoingTogether = $whatAreYouDoingTogether;

        return $this;
    }

    public function getDoYouHavePlans(): ?string
    {
        return $this->doYouHavePlans;
    }

    public function setDoYouHavePlans(string $doYouHavePlans): self
    {
        $this->doYouHavePlans = $doYouHavePlans;

        return $this;
    }

    public function getDoYouHavePlansIfYes(): ?string
    {
        return $this->doYouHavePlansIfYes;
    }

    public function setDoYouHavePlansIfYes(?string $doYouHavePlansIfYes): self
    {
        $this->doYouHavePlansIfYes = $doYouHavePlansIfYes;

        return $this;
    }

    public function getAnyThingToAdd(): ?string
    {
        return $this->anyThingToAdd;
    }

    public function setAnyThingToAdd(?string $anyThingToAdd): self
    {
        $this->anyThingToAdd = $anyThingToAdd;

        return $this;
    }

    public function getAnyComments(): ?string
    {
        return $this->anyComments;
    }

    public function setAnyComments(?string $anyComments): self
    {
        $this->anyComments = $anyComments;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getViews(): ?int
    {
        return $this->views;
    }

    public function setViews(int $views): self
    {
        $this->views = $views;

        return $this;
    }

    public function setDoYouHaveChild(?string $doYouHaveChild): self
    {
        $this->doYouHaveChild = $doYouHaveChild;

        return $this;
    }
    
    public function getDoYouHaveChild(): ?string
    {
        return $this->doYouHaveChild;
        
    }


}
