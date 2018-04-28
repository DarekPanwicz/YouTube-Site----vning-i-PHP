<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180414134032 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE comment_enity (id INTEGER NOT NULL, user_id INTEGER NOT NULL, content CLOB DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C01F9224A76ED395 ON comment_enity (user_id)');
        $this->addSql('CREATE TABLE film_entity (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE film_entity_category_entity (film_entity_id INTEGER NOT NULL, category_entity_id INTEGER NOT NULL, PRIMARY KEY(film_entity_id, category_entity_id))');
        $this->addSql('CREATE INDEX IDX_D7479B71B5E9236E ON film_entity_category_entity (film_entity_id)');
        $this->addSql('CREATE INDEX IDX_D7479B714645AF6D ON film_entity_category_entity (category_entity_id)');
        $this->addSql('CREATE TABLE user_enity (id INTEGER NOT NULL, login VARCHAR(16) NOT NULL, password VARCHAR(64) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE category_entity (id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE comment_enity');
        $this->addSql('DROP TABLE film_entity');
        $this->addSql('DROP TABLE film_entity_category_entity');
        $this->addSql('DROP TABLE user_entity');
        $this->addSql('DROP TABLE category_entity');
    }
}
