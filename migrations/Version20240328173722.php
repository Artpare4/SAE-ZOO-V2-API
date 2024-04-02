<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240328173722 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE famille_animal DROP FOREIGN KEY FK_CD658AB2D191E7A');
        $this->addSql('ALTER TABLE famille_animal ADD CONSTRAINT FK_CD658AB2D191E7A FOREIGN KEY (espece_id) REFERENCES espece (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE famille_animal DROP FOREIGN KEY FK_CD658AB2D191E7A');
        $this->addSql('ALTER TABLE famille_animal ADD CONSTRAINT FK_CD658AB2D191E7A FOREIGN KEY (espece_id) REFERENCES espece (id)');
    }
}
