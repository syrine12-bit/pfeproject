<?php

namespace App\Entity;

use App\Repository\InformationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\File\File;


#[ORM\Entity(repositoryClass: InformationRepository::class)]
class Information
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_de_famille = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre_du_profil = null;

    #[ORM\Column(length: 255)]
    private ?string $numero = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $code_postal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $profil = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $formation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $etablissement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lieu = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?\DateTime $date_debut = null;

    #[ORM\Column(length: 255, nullable: true)]
    public ?\DateTime $date_fin =null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $poste = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $employer = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?\DateTime $date_debut_travaille = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?\DateTime $date_fin_travaille = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description_travaille = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $competence = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $langue = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $interet = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $niveau_etudes = null;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pdfFile;

    #[ORM\Column(length: 255, nullable: true)]
    private ?File $pdfFilename = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNomDeFamille(): ?string
    {
        return $this->nom_de_famille;
    }

    public function setNomDeFamille(string $nom_de_famille): self
    {
        $this->nom_de_famille = $nom_de_famille;

        return $this;
    }

    public function getTitreDuProfil(): ?string
    {
        return $this->titre_du_profil;
    }

    public function setTitreDuProfil(?string $titre_du_profil): self
    {
        $this->titre_du_profil = $titre_du_profil;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(?string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getProfil(): ?string
    {
        return $this->profil;
    }

    public function setProfil(?string $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getFormation(): ?string
    {
        return $this->formation;
    }

    public function setFormation(?string $formation): self
    {
        $this->formation = $formation;

        return $this;
    }

    public function getEtablissement(): ?string
    {
        return $this->etablissement;
    }

    public function setEtablissement(?string $etablissement): self
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDateDebut(): ?\DateTime
    {
        return $this->date_debut;
    }

    public function setDateDebut(?\DateTime $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->date_fin;
    }

    public function setDateFin(?\DateTime $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(?string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getEmployer(): ?string
    {
        return $this->employer;
    }

    public function setEmployer(?string $employer): self
    {
        $this->employer = $employer;

        return $this;
    }

    public function getDateDebutTravaille(): ?\DateTime
    {
        return $this->date_debut_travaille;
    }

    public function setDateDebutTravaille(?\DateTime $date_debut_travaille): self
    {
        $this->date_debut_travaille = $date_debut_travaille;

        return $this;
    }

    public function getDateFinTravaille(): ?\DateTime
    {
        return $this->date_fin_travaille;
    }

    public function setDateFinTravaille(?\DateTime $date_fin_travaille): self
    {
        $this->date_fin_travaille = $date_fin_travaille;

        return $this;
    }

    public function getDescriptionTravaille(): ?\DateTimeInterface
    {
        return $this->description_travaille;
    }

    public function setDescriptionTravaille(?\DateTimeInterface $description_travaille): self
    {
        $this->description_travaille = $description_travaille;

        return $this;
    }

    public function getCompetence(): ?string
    {
        return $this->competence;
    }

    public function setCompetence(?string $competence): self
    {
        $this->competence = $competence;

        return $this;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(?string $langue): self
    {
        $this->langue = $langue;

        return $this;
    }

    public function getInteret(): ?string
    {
        return $this->interet;
    }

    public function setInteret(?string $interet): self
    {
        $this->interet = $interet;

        return $this;
    }

    public function getPdfFile(): ?string
    {
        return $this->pdfFile;
    }

    public function getPdfFilename(): ?File
    {
        return $this->pdfFilename;
    }

    public function setPdfFilename(?File $pdfFilename): self
    {
        $this->pdfFilename = $pdfFilename;

        return $this;
    }

    public function getNiveauEtudes(): ?string
    {
        return $this->niveau_etudes;
    }

    public function setNiveauEtudes(?string $niveau_etudes): self
    {
        $this->niveau_etudes = $niveau_etudes;

        return $this;
    }
}
