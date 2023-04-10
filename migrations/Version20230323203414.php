<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230323203414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE informations (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(255) NOT NULL, nom_de_famille VARCHAR(255) NOT NULL, titre_du_profil VARCHAR(255) DEFAULT NULL, numero VARCHAR(255) DEFAULT NULL, email VARCHAR(255) NOT NULL, adresse VARCHAR(255) DEFAULT NULL, code_postal VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, profil VARCHAR(255) DEFAULT NULL, formation VARCHAR(255) DEFAULT NULL, etablissement VARCHAR(255) DEFAULT NULL, lieu VARCHAR(255) DEFAULT NULL, date_debut VARCHAR(255) DEFAULT NULL, dat_fin DATETIME DEFAULT NULL, description LONGTEXT DEFAULT NULL, poste VARCHAR(255) DEFAULT NULL, employer VARCHAR(255) DEFAULT NULL, date_debut_travaille DATETIME DEFAULT NULL, date_fin_travaille DATETIME DEFAULT NULL, description_travaille DATETIME DEFAULT NULL, competence LONGTEXT DEFAULT NULL, langue LONGTEXT DEFAULT NULL, interet LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE informations');
    }
}
