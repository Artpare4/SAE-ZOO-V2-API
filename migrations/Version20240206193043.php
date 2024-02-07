<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240206193043 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE billet ADD tarif_adult DOUBLE PRECISION NOT NULL, ADD tarif_child DOUBLE PRECISION NOT NULL, DROP tarif_adulte, DROP tarif_enfant');
        $this->addSql('ALTER TABLE event CHANGE nb_place nb_places INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE billet ADD tarif_adulte DOUBLE PRECISION NOT NULL, ADD tarif_enfant DOUBLE PRECISION NOT NULL, DROP tarif_adult, DROP tarif_child');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles JSON NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE event CHANGE nb_places nb_place INT NOT NULL');
    }
}
