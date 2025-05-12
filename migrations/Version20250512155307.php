<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250512155307 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE sales ADD client_id_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sales ADD CONSTRAINT FK_6B817044DC2902E0 FOREIGN KEY (client_id_id) REFERENCES client (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_6B817044DC2902E0 ON sales (client_id_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE sales DROP FOREIGN KEY FK_6B817044DC2902E0
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_6B817044DC2902E0 ON sales
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sales DROP client_id_id
        SQL);
    }
}
