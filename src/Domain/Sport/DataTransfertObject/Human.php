<?php


namespace App\Domain\Sport\DataTransfertObject;



use App\Application\Entity\Sport\WorkType\ChilWorkType;
use App\Application\Entity\Sport\WorkType\HardWorkType;
use App\Application\Entity\Sport\WorkType\VeryHardWorkType;

/**
 * Class Human
 * @package App\Domain\Sport\DataTransfertObject
 */
class Human
{

    /**
     * @var int
     */
    protected ?int $age = null;

    /**
     * @var string|null
     */
    protected ?string $sex = null;

    /**
     * @var int
     */
    protected ?int $weight = null;

    /**
     * @var int
     */
    protected ?int $size = null;

    /**
     * @var int|null
     */
    protected ?int $chestSize = null;

    /**
     * @var int|null
     */
    protected ?int $waistSize = null;

    /**
     * @var int|null
     */
    protected ?int $legCircumference = null;



    /**
     * @var string|null
     */
    protected ?string $intolerance = null;

    /**
     * @var string|null
     */
    protected ?string $allergy = null;

    /**
     * @var string|null
     */
    protected ?string $foodPreference = null;

    /**
     * @var string|null
     */
    protected ?string $healthProblem = null;

    /**
     * @var string
     */
    protected ?string $workType = null;

    /**
     * @var int|null
     */
    protected ?int $metabolism = null;

    /**
     * @var int|null
     */
    protected ?int $caloricMaintenance = null;

    /**
     * @var int|null
     */
    protected ?int $totalCaloriesNeeded = null;

    /**
     * @var int|null
     */
    protected ?int $goalType = null;


    /**
     * @var int|null
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
     * @var array|null
     */
    protected ?array $menu = null;

    /**
     * @var array|null
     */
    protected ?array $sportProgram = null;

    /**
     * @var int|null
     */
    protected ?int $chestSizeControlLastWeek = null;

    /**
     * @var int|null
     */
    protected ?int $waistSizeControlLastWeek = null;

    /**
     * @var int|null
     */
    protected ?int $legCircumferenceControlLastWeek = null;

    /**
     * @var int|null
     */
    protected ?int $weightControlLastWeek = null;

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
     * @param int|null $weight
     */
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
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
     * @return string|null
     */
    public function getWorkType(): ?string
    {
        return $this->workType;
    }

    /**
     * @param string|null $workType
     */
    public function setWorkType(?string $workType): void
    {
        $this->workType = $workType;
    }

    /**
     * @return int
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
        $this->metabolism = ($this->weight * 13.7516) + ($this->size * 500.33) - ($this->age * 6.7550) + 66.473;
    }

    /**
     * @return int
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
     * @return array
     */
    public function getMenu(): ?array
    {
        return $this->menu;
    }

    /**
     * @param array $menu
     */
    public function setMenu(array $menu): void
    {
        $this->menu = $menu;
    }

    /**
     * @return array
     */
    public function getSportProgram(): ?array
    {
        return $this->sportProgram;
    }

    /**
     * @param array $sportProgram
     */
    public function setSportProgram(array $sportProgram): void
    {
        $this->sportProgram = $sportProgram;
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
}