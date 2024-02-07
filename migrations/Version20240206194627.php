<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240206194627 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asso_event_reservation DROP FOREIGN KEY FK_A484657AD9A7F869');
        $this->addSql('DROP INDEX IDX_A484657AD9A7F869 ON asso_event_reservation');
        $this->addSql('ALTER TABLE asso_event_reservation CHANGE reservations_id reservation_id INT NOT NULL');
        $this->addSql('ALTER TABLE asso_event_reservation ADD CONSTRAINT FK_A484657AB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_A484657AB83297E7 ON asso_event_reservation (reservation_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE asso_event_reservation DROP FOREIGN KEY FK_A484657AB83297E7');
        $this->addSql('DROP INDEX IDX_A484657AB83297E7 ON asso_event_reservation');
        $this->addSql('ALTER TABLE asso_event_reservation CHANGE reservation_id reservations_id INT NOT NULL');
        $this->addSql('ALTER TABLE asso_event_reservation ADD CONSTRAINT FK_A484657AD9A7F869 FOREIGN KEY (reservations_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_A484657AD9A7F869 ON asso_event_reservation (reservations_id)');
    }
}
