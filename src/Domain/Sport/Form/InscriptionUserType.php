<?php


namespace App\Domain\Sport\Form;


use App\Domain\Sport\DataTransfertObject\Human;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class InscriptionUserType extends AbstractType
{

    private Security $security;

    private EntityManagerInterface $entityManager;

    public function __construct(Security $security, EntityManagerInterface $entityManager)
    {
        $this->security = $security;
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        if ($this->entityManager->getRepository(\App\Application\Entity\Human::class)->findOneBy(["user" => $this->security->getUser()->getId()]) !== null) {
            $builder
                ->add("chestSizeControlLastWeek", TextType::class, [
                    "attr" => [
                        "placeholder" => "Tour de poitrine"
                    ]
                ])
                ->add("waistSizeControlLastWeek", TextType::class, [
                    "attr" => [
                        "placeholder" => "Tour de taille"
                    ]
                ])
                ->add("legCircumferenceControlLastWeek", TextType::class, [
                    "attr" => [
                        "placeholder" => "Tour de poitrine"
                    ]
                ])
                ->add("weightControlLastWeek", TextType::class, [
                    "attr" => [
                        "placeholder" => "Poids"
                    ]
                ]);
        } else {
            $builder
                ->add("sex", ChoiceType::class, [
                    "choices" => [
                        "Man" => "Man",
                        "Woman" => "Woman"
                    ]
                ])
                ->add("age", TextType::class, [
                    "attr" => [
                        "placeholder" => "Age"
                    ]
                ])
                ->add("weight", TextType::class, [
                    "attr" => [
                        "placeholder" => "en kg"
                    ]
                ])
                ->add("size", TextType::class, [
                    "attr" => [
                        "placeholder" => "En cm"
                    ]
                ])
                ->add("chestSize", TextType::class, [
                    "attr" => [
                        "placeholder" => "Tour de poitrine"
                    ]
                ])
                ->add("waistSize", TextType::class, [
                    "attr" => [
                        "placeholder" => "Tour de taille"
                    ]
                ])
                ->add("legCircumference", TextType::class, [
                    "attr" => [
                        "placeholder" => "Tour de cuisse"
                    ]
                ])
                ->add("intolerance", ChoiceType::class, [
                    "choices" => [
                        "gluten" => "gluten",
                        "lactose" => "lactose",
                        "rien à signaler" => "rien"
                    ]
                ])
                ->add("allergy", ChoiceType::class, [
                    "choices" => [
                        "arrachides" => "arrachides",
                        "crustacés" => "crustacés",
                        "soja" => "soja",
                        "arabe" => true,
                        "lait de vache" => "lait de vache",
                        "oeufs" => "oeufs",
                        "poissons" => "poissons",
                        "multiples allergie : un nutritionniste va prendre contact avec vous sous 24 h" => "multiple allergy",
                        "non repertorié : un nutritionniste va prendre avec vous sous 24 h" => "Other"

                    ]
                ])
                ->add("foodPreference", ChoiceType::class, [
                    "choices" => [
                        "Végétarien" => "vegetarian",
                        "Vegan" => "vegan",
                        "Paleo" => "Paleo",
                        "Sans préférence" => "normal"

                    ]
                ])
                ->add("healthProblem", ChoiceType::class, [
                    "choices" => [
                        "arthrose" => "arthrose",
                        "membre amputé ? un spécialiste va prendre contact avec vous sous 24 h" => "amputation",
                        "mal entendant ? le site est adapté" => "malEntendant",
                        "hernie discale" => "herniatedDisc",
                        "inflammation du coude" => "elbowInflammation",
                        "inflammation de l'épaule" => "shoulderInflammation",
                        "inflammation du genou" => "kneeInflammation",
                        "plusieurs inflammation ? un spécialiste va prendre contact avec vous sous 24 h" => "multipleInflammation",
                        "plusieurs problèmes de santé ? un spécialiste va prendre contact avec vous sous 24 h" => "multipleHealthProblem",
                        "non répertorié ? un spécialiste va prendre contact avec vous sous 24 h" => "Other",
                        "rien à signaler" => "rien"
                    ]
                ])
                ->add("workType", ChoiceType::class, [
                    "choices" => [
                        "bureau" => 0,
                        "dynamique" => 1,
                        "très physique" => 2
                    ]
                ])
                ->add("goalType", ChoiceType::class, [
                    "choices" => [
                        "Perte de poids" => 0,
                        "Remise en forme" => 1,
                        "Preparation physique général" => 2
                    ]
                ])
                ->add("sportInThePast", ChoiceType::class, [
                    "choices" => [
                        "Aucune" => 0,
                        "De temps en temps" => 1,
                        "Régulièrement entre 2 et 4 séances par semaine" => 2,
                        "Régulièrement plus de 4 séances par semaine" => 3
                    ]
                ]);
        }

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault("data_class", Human::class);
    }

}