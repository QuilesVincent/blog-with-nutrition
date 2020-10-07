<?php


namespace App\Application\Entity;


use App\Application\Entity\Sport\WorkType\ChilWorkType;
use App\Application\Entity\Sport\WorkType\HardWorkType;
use App\Application\Entity\Sport\WorkType\VeryHardWorkType;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Class Human
 * @package App\Application\Entity
 * @ORM\Entity(repositoryClass="App\Application\Repository\HumanRepository")
 */
class Human
{

    /**
     * @var int
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected int $id;

    /**
     * @var DateTimeImmutable
     * @ORM\Column(type="datetime_immutable")
     */
    protected DateTimeImmutable $dateBeginningProgram;

    /**
     * @var DateTimeImmutable|null
     * @ORM\Column(type="datetime_immutable", nullable=true)
     *
     */
    protected ?DateTimeImmutable $dateLastControl = null;

    /**
     * @var DateTimeImmutable|null
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    protected ?DateTimeImmutable $dateNextControl = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer")
     */
    protected ?int $age = null;

    /**
     * @var string|null
     * @ORM\Column
     */
    protected ?string $sex = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     */
    protected ?int $weight = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer")
     */
    protected ?int $size = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer")
     */
    protected ?int $chestSize = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer")
     */
    protected ?int $waistSize = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer")
     */
    protected ?int $legCircumference = null;

    /**
     * @var string|null
     * @ORM\Column
     */
    protected ?string $intolerance = null;

    /**
     * @var string|null
     * @ORM\Column
     */
    protected ?string $allergy = null;

    /**
     * @var string|null
     * @ORM\Column
     */
    protected ?string $foodPreference = null;

    /**
     * @var string|null
     * @ORM\Column
     */
    protected ?string $healthProblem = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer")
     */
    protected ?int $workType = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     */
    protected ?int $metabolism = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     */
    protected ?int $caloricMaintenance = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     */
    protected ?int $totalCaloriesNeeded = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer")
     */
    protected ?int $goalType = null;


    /**
     * @var int|null
     * @ORM\Column(type="integer")
     */
    protected ?int $sportInThePast = null;

    /**
     * @var int|null
     */
    protected ?int $levelOfPhysicalActivity = null;

    /**
     * @var int|null
     */
    protected ?int $levelOfWorkActivity = null;

    /**
     * @var int|null
     */
    protected ?int $levelOfAllActivity = null;

    /**
     * @var string|null
     * @ORM\Column(nullable=true)
     */
    protected ?string $menu = null;

    /**
     * @var string|null
     * @ORM\Column(nullable=true)
     */
    protected ?string $sportProgram = null;

    /**
     * @var UserInterface|null
     * @ORM\OneToOne(targetEntity="User")
     */
    protected ?UserInterface $user = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     */
    protected ?int $chestSizeControlLastWeek = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     */
    protected ?int $waistSizeControlLastWeek = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     */
    protected ?int $legCircumferenceControlLastWeek = null;

    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     */
    protected ?int $weightControlLastWeek = null;

    /**
     * @var array|null
     */
    protected ?array $informationPlanning = null;

    /**
     * @var array|null
     */
    protected ?array $allWeightControl = null;

    /**
     * @var array|null
     */
    protected ?array $allChestSizeControl = null;

    /**
     * @var array|null
     */
    protected ?array $allWaistSizeControl = null;

    /**
     * @var array|null
     */
    protected ?array $allLegCircumferenceControl = null;

    /**
     * @var array|null
     */
    protected ?array $allDateControl = null;

    /**
     * @var string
     * @ORM\Column
     */
    protected string $demoAccount = "false";


    public function __construct()
    {
        $this->setDateBeginningProgram();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDateBeginningProgram(): DateTimeImmutable
    {
        return $this->dateBeginningProgram;
    }

    /**
     * @param DateTimeImmutable $dateBeginningProgram
     */
    public function setDateBeginningProgram(?DateTimeImmutable $dateBeginningProgram = null): void
    {
        if ($dateBeginningProgram !== null) {
            $this->dateBeginningProgram = $dateBeginningProgram;
        } else {
            $this->dateBeginningProgram = new DateTimeImmutable();
        }
    }

    /**
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param int|null $age
     */
    public function setAge(?int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string|null
     */
    public function getSex(): ?string
    {
        return $this->sex;
    }

    /**
     * @param string|null $sex
     */
    public function setSex(?string $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return int
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getDateLastControl(): ?DateTimeImmutable
    {
        return $this->dateLastControl;
    }

    /**
     * @param DateTimeImmutable|null $dateLastControl
     */
    public function setDateLastControl(?DateTimeImmutable $dateLastControl = null): void
    {
        if ($dateLastControl !== null) {
            $this->dateLastControl = $dateLastControl;
        } else {
            $this->dateLastControl = new DateTimeImmutable();
        }

    }


    /**
     * @param int|null $weight
     */
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int|null $size
     */
    public function setSize(?int $size): void
    {
        $this->size = $size;
    }

    /**
     * @return int|null
     */
    public function getChestSize(): ?int
    {
        return $this->chestSize;
    }

    /**
     * @param int|null $chestSize
     */
    public function setChestSize(?int $chestSize): void
    {
        $this->chestSize = $chestSize;
    }

    /**
     * @return int|null
     */
    public function getWaistSize(): ?int
    {
        return $this->waistSize;
    }

    /**
     * @param int|null $waistSize
     */
    public function setWaistSize(?int $waistSize): void
    {
        $this->waistSize = $waistSize;
    }

    /**
     * @return int|null
     */
    public function getLegCircumference(): ?int
    {
        return $this->legCircumference;
    }

    /**
     * @param int|null $legCircumference
     */
    public function setLegCircumference(?int $legCircumference): void
    {
        $this->legCircumference = $legCircumference;
    }

    /**
     * @return string|null
     */
    public function getIntolerance(): ?string
    {
        return $this->intolerance;
    }

    /**
     * @param string|null $intolerance
     */
    public function setIntolerance(?string $intolerance): void
    {
        $this->intolerance = $intolerance;
    }

    /**
     * @return string|null
     */
    public function getAllergy(): ?string
    {
        return $this->allergy;
    }

    /**
     * @param string|null $allergy
     */
    public function setAllergy(?string $allergy): void
    {
        $this->allergy = $allergy;
    }

    /**
     * @return string|null
     */
    public function getFoodPreference(): ?string
    {
        return $this->foodPreference;
    }

    /**
     * @param string|null $foodPreference
     */
    public function setFoodPreference(?string $foodPreference): void
    {
        $this->foodPreference = $foodPreference;
    }



    /**
     * @return string|null
     */
    public function getHealthProblem(): ?string
    {
        return $this->healthProblem;
    }

    /**
     * @param string|null $healthProblem
     */
    public function setHealthProblem(?string $healthProblem): void
    {
        $this->healthProblem = $healthProblem;
    }

    /**
     * @return int
     */
    public function getWorkType(): ?int
    {
        return $this->workType;
    }

    /**
     * @param int|null $workType
     */
    public function setWorkType(?int $workType): void
    {
        $this->workType = $workType;
    }

    /**
     * @return int|null
     */
    public function getMetabolism(): ?int
    {
        return $this->metabolism;
    }

    /**
     * @return void
     */
    public function setMetabolism(): void
    {
        if ($this->sex === "Man") {
            $this->metabolism = $this->weight * 13.7516 + ($this->size / 100) * 500.33 - $this->age * 6.7550 + 66.473;
        } else {
            $this->metabolism = $this->weight * 9.5634 + ($this->size / 100) * 184.96 - $this->age * 4.6756 + 655.0955;
        }

    }


    /**
     * @return int|null
     */
    public function getCaloricMaintenance(): ?int
    {
        return $this->caloricMaintenance;
    }


    /**
     *
     */
    public function setCaloricMaintenance(): void
    {
        switch ($this->levelOfAllActivity) {
            case 0:
                $this->caloricMaintenance = $this->metabolism * 1.375;
                break;
            case 1:
                $this->caloricMaintenance = $this->metabolism * 1.56;
                break;
            case 2:
                $this->caloricMaintenance = $this->metabolism * 1.64;
                break;
            case 3:
                $this->caloricMaintenance = $this->metabolism * 1.82;
                break;
            case 4:
                $this->caloricMaintenance = $this->metabolism * 1.90;
        }

    }

    /**
     * @return int
     */
    public function getTotalCaloriesNeeded(): ?int
    {
        return $this->totalCaloriesNeeded;
    }

    public function setTotalCaloriesNeeded(): void
    {
        switch ($this->goalType) {
            case 0:
                $this->totalCaloriesNeeded = $this->caloricMaintenance * 0.7;
                break;
            case 1:
                $this->totalCaloriesNeeded = $this->caloricMaintenance * 1.05;
                break;
            case 2:
                $this->totalCaloriesNeeded = $this->caloricMaintenance * 1.08;
        }
    }

    public function setNewTotalCaloriesNeededAfterControl(): void
    {
        $this->totalCaloriesNeeded = $this->totalCaloriesNeeded * 0.9;
    }

    /**
     * @return int|null
     */
    public function getGoalType(): ?int
    {
        return $this->goalType;
    }

    /**
     * @param int|null $goalType
     */
    public function setGoalType(?int $goalType): void
    {
        $this->goalType = $goalType;
    }



    /**
     * @return int
     */
    public function getSportInThePast(): ?int
    {
        return $this->sportInThePast;
    }

    /**
     * @param int|null $sportInThePast
     */
    public function setSportInThePast(?int $sportInThePast): void
    {
        $this->sportInThePast = $sportInThePast;
    }

    /**
     * @return int
     */
    public function getLevelOfPhysicalActivity(): ?int
    {
        return $this->levelOfPhysicalActivity;
    }

    /**
     * @param int|null $levelOfPhysicalActivity
     */
    public function setLevelOfPhysicalActivity(?int $levelOfPhysicalActivity): void
    {
        //Faire une logique comme pour levelOfWorkActivity
        $this->levelOfPhysicalActivity = $levelOfPhysicalActivity;
    }

    /**
     * @return int
     */
    public function getLevelOfWorkActivity(): ?int
    {
        return $this->levelOfWorkActivity;
    }


    /**
     *
     */
    public function setLevelOfWorkActivity(): void
    {
        switch ($this->workType) {
            case "1":
                $workTypeClass = new ChilWorkType();
                break;
            case "2":
                $workTypeClass = new HardWorkType();
                break;
            case "3":
                $workTypeClass = new VeryHardWorkType();
                break;
        }
        $this->levelOfWorkActivity = $workTypeClass->getValue();
    }

    /**
     * @return int
     */
    public function getLevelOfAllActivity(): ?int
    {
        return $this->levelOfAllActivity;
    }

    /**
     *
     */
    public function setLevelOfAllActivity(): void
    {
        $this->levelOfAllActivity = $this->levelOfPhysicalActivity + $this->levelOfWorkActivity;
    }

    /**
     * @return string
     */
    public function getMenu(): ?string
    {
        return $this->menu;
    }


    public function setMenu(): void
    {
        switch ($this->goalType) {
            case 0:
                $this->menu = "perte de poids";
                break;
            case 1:
                $this->menu = "remise en forme";
                break;
            case 2:
                $this->menu = "Préparation physique générale";
                break;
        }
    }

    /**
     * @return string
     */
    public function getSportProgram(): ?string
    {
        return $this->sportProgram;
    }

    /**
     *
     */
    public function setSportProgram(): void
    {
        switch ($this->goalType) {
            case 0:
                $this->sportProgram = "perte de poids";
                break;
            case 1:
                $this->sportProgram = "remise en forme";
                break;
            case 2:
                $this->sportProgram = "Preparation physique generale";
                break;
        }
    }

    /**
     * @return UserInterface|null
     */
    public function getUser(): ?UserInterface
    {
        return $this->user;
    }

    /**
     * @param UserInterface|null $user
     */
    public function setUser(?UserInterface $user): void
    {
        $this->user = $user;
    }

    /**
     * @return int|null
     */
    public function getChestSizeControlLastWeek(): ?int
    {
        return $this->chestSizeControlLastWeek;
    }

    /**
     * @param int|null $chestSizeControlLastWeek
     */
    public function setChestSizeControlLastWeek(?int $chestSizeControlLastWeek): void
    {
        $this->chestSizeControlLastWeek = $chestSizeControlLastWeek;
    }

    /**
     * @return int|null
     */
    public function getWaistSizeControlLastWeek(): ?int
    {
        return $this->waistSizeControlLastWeek;
    }

    /**
     * @param int|null $waistSizeControlLastWeek
     */
    public function setWaistSizeControlLastWeek(?int $waistSizeControlLastWeek): void
    {
        $this->waistSizeControlLastWeek = $waistSizeControlLastWeek;
    }

    /**
     * @return int|null
     */
    public function getLegCircumferenceControlLastWeek(): ?int
    {
        return $this->legCircumferenceControlLastWeek;
    }

    /**
     * @param int|null $legCircumferenceControlLastWeek
     */
    public function setLegCircumferenceControlLastWeek(?int $legCircumferenceControlLastWeek): void
    {
        $this->legCircumferenceControlLastWeek = $legCircumferenceControlLastWeek;
    }

    /**
     * @return int|null
     */
    public function getWeightControlLastWeek(): ?int
    {
        return $this->weightControlLastWeek;
    }

    /**
     * @param int|null $weightControlLastWeek
     */
    public function setWeightControlLastWeek(?int $weightControlLastWeek): void
    {
        $this->weightControlLastWeek = $weightControlLastWeek;
    }

    /**
     * @return array|null
     */
    public function getInformationPlanning(): ?array
    {
        return $this->informationPlanning;
    }

    /**
     * @param array|null $informationPlanning
     */
    public function setInformationPlanning(?array $informationPlanning): void
    {
        $this->informationPlanning = $informationPlanning;
    }

    /**
     * @return array|null
     */
    public function getAllWeightControl(): ?array
    {
        return $this->allWeightControl;
    }

    /**
     * @param array|null $allWeightControl
     */
    public function setAllWeightControl(?array $allWeightControl): void
    {
        $this->allWeightControl = $allWeightControl;
    }

    /**
     * @return array|null
     */
    public function getAllChestSizeControl(): ?array
    {
        return $this->allChestSizeControl;
    }

    /**
     * @param array|null $allChestSizeControl
     */
    public function setAllChestSizeControl(?array $allChestSizeControl): void
    {
        $this->allChestSizeControl = $allChestSizeControl;
    }

    /**
     * @return array|null
     */
    public function getAllWaistSizeControl(): ?array
    {
        return $this->allWaistSizeControl;
    }

    /**
     * @param array|null $allWaistSizeControl
     */
    public function setAllWaistSizeControl(?array $allWaistSizeControl): void
    {
        $this->allWaistSizeControl = $allWaistSizeControl;
    }

    /**
     * @return array|null
     */
    public function getAllLegCircumferenceControl(): ?array
    {
        return $this->allLegCircumferenceControl;
    }

    /**
     * @param array|null $allLegCircumferenceControl
     */
    public function setAllLegCircumferenceControl(?array $allLegCircumferenceControl): void
    {
        $this->allLegCircumferenceControl = $allLegCircumferenceControl;
    }

    /**
     * @return array|null
     */
    public function getAllDateControl(): ?array
    {
        return $this->allDateControl;
    }

    /**
     * @param array|null $allDateControl
     */
    public function setAllDateControl(?array $allDateControl): void
    {
        $this->allDateControl = $allDateControl;
    }

    /**
     * @param int $weight
     */
    public function setWeightControlNotYetSave(int $weight): void
    {
        $contener = $this->getAllWeightControl();
        if ($contener === null) {
            $contener = [$weight];
        } else {
            array_push($contener, $weight);
        }
        $this->setAllWeightControl($contener);
    }

    /**
     * @param int $chestSize
     */
    public function setChestSizeControlNotYetSave(int $chestSize): void
    {
        $contener = $this->getAllChestSizeControl();
        if ($contener === null) {
            $contener = [$chestSize];
        } else {
            array_push($contener, $chestSize);
        }
        $this->setAllChestSizeControl($contener);
    }

    /**
     * @param int $waistSize
     */
    public function setWaistSizeControlNotYetSave(int $waistSize): void
    {
        $contener = $this->getAllWaistSizeControl();
        if ($contener === null) {
            $contener = [$waistSize];
        } else {
            array_push($contener, $waistSize);
        }
        $this->setAllWaistSizeControl($contener);
    }

    /**
     * @param int $legCircumference
     */
    public function setLegCircumferenceControlNotYetSave(int $legCircumference): void
    {
        $contener = $this->getAllLegCircumferenceControl();
        if ($contener === null) {
            $contener = [$legCircumference];
        } else {
            array_push($contener, $legCircumference);
        }

        $this->setAllLegCircumferenceControl($contener);
    }

    /**
     * @param DateTimeImmutable $dateTimeImmutable
     */
    public function setNewDateControlNotYetSave(DateTimeImmutable $dateTimeImmutable): void
    {
        $contener = $this->getAllDateControl();
        if ($contener === null) {
            $contener = [$dateTimeImmutable];
        } else {
            array_push($contener, $dateTimeImmutable);
        }
        $this->setAllDateControl($contener);
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getDateNextControl(): ?DateTimeImmutable
    {
        return $this->dateNextControl;
    }

    /**
     * @param DateTimeImmutable|null $dateNextControl
     */
    public function setDateNextControl(?DateTimeImmutable $dateNextControl = null): void
    {
        if($dateNextControl !== null) {
            $this->dateNextControl = $dateNextControl;
        } else {
            $this->dateNextControl = $this->getDateLastControl()->modify("+ 7 day");
        }

    }

    /**
     * @return string
     */
    public function getDemoAccount(): string
    {
        return $this->demoAccount;
    }

    /**
     * @param string $demoAccount
     */
    public function setDemoAccount(string $demoAccount): void
    {
        $this->demoAccount = $demoAccount;
    }

    













}