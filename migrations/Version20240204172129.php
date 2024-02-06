<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240204172129 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE asso_event_date_event (id INT AUTO_INCREMENT NOT NULL, event_id INT NOT NULL, date_event_id INT NOT NULL, horaire VARCHAR(10) NOT NULL, INDEX IDX_AE2ECC6471F7E88B (event_id), INDEX IDX_AE2ECC64B2C2812D (date_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE asso_event_reservation (id INT AUTO_INCREMENT NOT NULL, event_id INT NOT NULL, reservations_id INT NOT NULL, INDEX IDX_A484657A71F7E88B (event_id), INDEX IDX_A484657AD9A7F869 (reservations_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, nom_event VARCHAR(128) NOT NULL, nb_place INT NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE asso_event_date_event ADD CONSTRAINT FK_AE2ECC6471F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE asso_event_date_event ADD CONSTRAINT FK_AE2ECC64B2C2812D FOREIGN KEY (date_event_id) REFERENCES date_event (id)');
        $this->addSql('ALTER TABLE asso_event_reservation ADD CONSTRAINT FK_A484657A71F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE asso_event_reservation ADD CONSTRAINT FK_A484657AD9A7F869 FOREIGN KEY (reservations_id) REFERENCES reservation (id)');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('ALTER TABLE reservation ADD billet_id INT NOT NULL, ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495544973C78 FOREIGN KEY (billet_id) REFERENCES billet (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_42C8495544973C78 ON reservation (billet_id)');
        $this->addSql('CREATE INDEX IDX_42C84955A76ED395 ON reservation (user_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, nom_event VARCHAR(128) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nb_place INT NOT NULL, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE asso_event_date_event DROP FOREIGN KEY FK_AE2ECC6471F7E88B');
        $this->addSql('ALTER TABLE asso_event_date_event DROP FOREIGN KEY FK_AE2ECC64B2C2812D');
        $this->addSql('ALTER TABLE asso_event_reservation DROP FOREIGN KEY FK_A484657A71F7E88B');
        $this->addSql('ALTER TABLE asso_event_reservation DROP FOREIGN KEY FK_A484657AD9A7F869');
        $this->addSql('DROP TABLE asso_event_date_event');
        $this->addSql('DROP TABLE asso_event_reservation');
        $this->addSql('DROP TABLE event');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495544973C78');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('DROP INDEX IDX_42C8495544973C78 ON reservation');
        $this->addSql('DROP INDEX IDX_42C84955A76ED395 ON reservation');
        $this->addSql('ALTER TABLE reservation DROP billet_id, DROP user_id');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
    }
}
