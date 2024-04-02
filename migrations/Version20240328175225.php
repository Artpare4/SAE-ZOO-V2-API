<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240328175225 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE famille_animal DROP FOREIGN KEY FK_CD658AB3F1927F2');
        $this->addSql('ALTER TABLE famille_animal ADD CONSTRAINT FK_CD658AB3F1927F2 FOREIGN KEY (zone_parc_id) REFERENCES zone_parc (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE famille_animal DROP FOREIGN KEY FK_CD658AB3F1927F2');
        $this->addSql('ALTER TABLE famille_animal ADD CONSTRAINT FK_CD658AB3F1927F2 FOREIGN KEY (zone_parc_id) REFERENCES zone_parc (id)');
    }
}
