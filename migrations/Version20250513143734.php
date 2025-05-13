<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250513143734 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE process (id INT AUTO_INCREMENT NOT NULL, process_id INT NOT NULL, active TINYINT(1) NOT NULL, process_steps INT NOT NULL, added DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE process_product (process_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_9B32DE787EC2F574 (process_id), INDEX IDX_9B32DE784584665A (product_id), PRIMARY KEY(process_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE process_product ADD CONSTRAINT FK_9B32DE787EC2F574 FOREIGN KEY (process_id) REFERENCES process (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE process_product ADD CONSTRAINT FK_9B32DE784584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE process_product DROP FOREIGN KEY FK_9B32DE787EC2F574
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE process_product DROP FOREIGN KEY FK_9B32DE784584665A
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE process
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE process_product
        SQL);
    }
}
