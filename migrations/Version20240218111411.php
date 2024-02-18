<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240218111411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal ADD img_animal VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE event ADD img_event VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE famille_animal ADD img_famille VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE zone_parc ADD img_zone VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zone_parc DROP img_zone');
        $this->addSql('ALTER TABLE animal DROP img_animal');
        $this->addSql('ALTER TABLE famille_animal DROP img_famille');
        $this->addSql('ALTER TABLE event DROP img_event');
    }
}
