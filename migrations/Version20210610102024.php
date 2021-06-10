<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210610102024 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Sets up department, role and employee tables';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE department (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE role (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE employee (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, role_id INTEGER NOT NULL, department_id INTEGER NOT NULL, first_name VARCHAR(255) NOT NULL, middle_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, employee_number INTEGER NOT NULL, gender VARCHAR(10) NOT NULL, contact_number INTEGER DEFAULT NULL, address VARCHAR(2000) DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_5D9F75A1D60322AC ON employee (role_id)');
        $this->addSql('CREATE INDEX IDX_5D9F75A1AE80F5DF ON employee (department_id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE employee');
        $this->addSql('DROP TABLE department');
        $this->addSql('DROP TABLE role');
    }
}
