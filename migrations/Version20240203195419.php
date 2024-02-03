<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240203195419 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal (id INT AUTO_INCREMENT NOT NULL, famille_animal_id INT DEFAULT NULL, nom_animal VARCHAR(128) NOT NULL, date_naissance DATE NOT NULL, date_mort DATE DEFAULT NULL, taille DOUBLE PRECISION NOT NULL, poids DOUBLE PRECISION NOT NULL, caract�eristique LONGTEXT DEFAULT NULL, INDEX IDX_6AAB231FAEBED700 (famille_animal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE asso_habitat_famille_animal (id INT AUTO_INCREMENT NOT NULL, habitat_id INT NOT NULL, famille_animal_id INT NOT NULL, INDEX IDX_3B240128AFFE2D26 (habitat_id), INDEX IDX_3B240128AEBED700 (famille_animal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE espece (id INT AUTO_INCREMENT NOT NULL, lib_espece VARCHAR(128) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE famille_animal (id INT AUTO_INCREMENT NOT NULL, zone_parc_id INT DEFAULT NULL, espece_id INT DEFAULT NULL, nom_famille_animal VARCHAR(128) NOT NULL, nom_scientifique VARCHAR(128) NOT NULL, danger_extinction INT NOT NULL, description LONGTEXT NOT NULL, type_alimentation VARCHAR(128) NOT NULL, INDEX IDX_CD658AB3F1927F2 (zone_parc_id), INDEX IDX_CD658AB2D191E7A (espece_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habitat (id INT AUTO_INCREMENT NOT NULL, lib_habitat VARCHAR(128) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zone_parc (id INT AUTO_INCREMENT NOT NULL, lib_zone VARCHAR(128) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231FAEBED700 FOREIGN KEY (famille_animal_id) REFERENCES famille_animal (id)');
        $this->addSql('ALTER TABLE asso_habitat_famille_animal ADD CONSTRAINT FK_3B240128AFFE2D26 FOREIGN KEY (habitat_id) REFERENCES habitat (id)');
        $this->addSql('ALTER TABLE asso_habitat_famille_animal ADD CONSTRAINT FK_3B240128AEBED700 FOREIGN KEY (famille_animal_id) REFERENCES famille_animal (id)');
        $this->addSql('ALTER TABLE famille_animal ADD CONSTRAINT FK_CD658AB3F1927F2 FOREIGN KEY (zone_parc_id) REFERENCES zone_parc (id)');
        $this->addSql('ALTER TABLE famille_animal ADD CONSTRAINT FK_CD658AB2D191E7A FOREIGN KEY (espece_id) REFERENCES espece (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231FAEBED700');
        $this->addSql('ALTER TABLE asso_habitat_famille_animal DROP FOREIGN KEY FK_3B240128AFFE2D26');
        $this->addSql('ALTER TABLE asso_habitat_famille_animal DROP FOREIGN KEY FK_3B240128AEBED700');
        $this->addSql('ALTER TABLE famille_animal DROP FOREIGN KEY FK_CD658AB3F1927F2');
        $this->addSql('ALTER TABLE famille_animal DROP FOREIGN KEY FK_CD658AB2D191E7A');
        $this->addSql('DROP TABLE animal');
        $this->addSql('DROP TABLE asso_habitat_famille_animal');
        $this->addSql('DROP TABLE espece');
        $this->addSql('DROP TABLE famille_animal');
        $this->addSql('DROP TABLE habitat');
        $this->addSql('DROP TABLE zone_parc');
    }
}
