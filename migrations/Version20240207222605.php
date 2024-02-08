<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240207222605 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE asso_event_animal (id INT AUTO_INCREMENT NOT NULL, event_id INT NOT NULL, animal_id INT NOT NULL, INDEX IDX_B77917771F7E88B (event_id), INDEX IDX_B7791778E962C16 (animal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE asso_event_zone_parc (id INT AUTO_INCREMENT NOT NULL, event_id INT NOT NULL, zone_parc_id INT NOT NULL, INDEX IDX_4776FC9871F7E88B (event_id), INDEX IDX_4776FC983F1927F2 (zone_parc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE asso_event_animal ADD CONSTRAINT FK_B77917771F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE asso_event_animal ADD CONSTRAINT FK_B7791778E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id)');
        $this->addSql('ALTER TABLE asso_event_zone_parc ADD CONSTRAINT FK_4776FC9871F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE asso_event_zone_parc ADD CONSTRAINT FK_4776FC983F1927F2 FOREIGN KEY (zone_parc_id) REFERENCES zone_parc (id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asso_event_animal DROP FOREIGN KEY FK_B77917771F7E88B');
        $this->addSql('ALTER TABLE asso_event_animal DROP FOREIGN KEY FK_B7791778E962C16');
        $this->addSql('ALTER TABLE asso_event_zone_parc DROP FOREIGN KEY FK_4776FC9871F7E88B');
        $this->addSql('ALTER TABLE asso_event_zone_parc DROP FOREIGN KEY FK_4776FC983F1927F2');
        $this->addSql('DROP TABLE asso_event_animal');
        $this->addSql('DROP TABLE asso_event_zone_parc');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin` COMMENT \'(DC2Type:json)\'');
    }
}
