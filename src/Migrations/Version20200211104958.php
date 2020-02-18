<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200211104958 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE form DROP FOREIGN KEY FK_5288FD4FC79CAD1E');
        $this->addSql('CREATE TABLE style (id INT AUTO_INCREMENT NOT NULL, form_id INT DEFAULT NULL, class VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, INDEX IDX_33BDB86A5FF69B7D (form_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE style ADD CONSTRAINT FK_33BDB86A5FF69B7D FOREIGN KEY (form_id) REFERENCES form (id)');
        $this->addSql('DROP TABLE input');
        $this->addSql('DROP INDEX IDX_5288FD4FC79CAD1E ON form');
        $this->addSql('ALTER TABLE form ADD type VARCHAR(255) NOT NULL, ADD value VARCHAR(255) NOT NULL, DROP input_relation_id, CHANGE input name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE input (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, value VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE style');
        $this->addSql('ALTER TABLE form ADD input_relation_id INT DEFAULT NULL, ADD input VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP name, DROP type, DROP value');
        $this->addSql('ALTER TABLE form ADD CONSTRAINT FK_5288FD4FC79CAD1E FOREIGN KEY (input_relation_id) REFERENCES input (id)');
        $this->addSql('CREATE INDEX IDX_5288FD4FC79CAD1E ON form (input_relation_id)');
    }
}
