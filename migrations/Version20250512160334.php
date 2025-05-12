<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250512160334 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE sales ADD acct_manager_id_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sales ADD CONSTRAINT FK_6B817044FB245C48 FOREIGN KEY (acct_manager_id_id) REFERENCES account_manager (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_6B817044FB245C48 ON sales (acct_manager_id_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE sales DROP FOREIGN KEY FK_6B817044FB245C48
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_6B817044FB245C48 ON sales
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE sales DROP acct_manager_id_id
        SQL);
    }
}
