<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200211142926 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE form_style (form_id INT NOT NULL, style_id INT NOT NULL, INDEX IDX_B0FA1CA95FF69B7D (form_id), INDEX IDX_B0FA1CA9BACD6074 (style_id), PRIMARY KEY(form_id, style_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE form_style ADD CONSTRAINT FK_B0FA1CA95FF69B7D FOREIGN KEY (form_id) REFERENCES form (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE form_style ADD CONSTRAINT FK_B0FA1CA9BACD6074 FOREIGN KEY (style_id) REFERENCES style (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE style DROP FOREIGN KEY FK_33BDB86A5FF69B7D');
        $this->addSql('DROP INDEX IDX_33BDB86A5FF69B7D ON style');
        $this->addSql('ALTER TABLE style DROP form_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE form_style');
        $this->addSql('ALTER TABLE style ADD form_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE style ADD CONSTRAINT FK_33BDB86A5FF69B7D FOREIGN KEY (form_id) REFERENCES form (id)');
        $this->addSql('CREATE INDEX IDX_33BDB86A5FF69B7D ON style (form_id)');
    }
}
