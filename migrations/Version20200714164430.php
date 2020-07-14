<?php

declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200714164430 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE subscriptios (id INT AUTO_INCREMENT NOT NULL, plan VARCHAR(255) NOT NULL, valid_to DATETIME NOT NULL, payment_status VARCHAR(45) DEFAULT NULL, free_plan_used TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, subscription_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, name VARCHAR(45) NOT NULL, last_name VARCHAR(45) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), UNIQUE INDEX UNIQ_1483A5E99A1887DC (subscription_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE videos (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, user_id INT NOT NULL, title VARCHAR(255) NOT NULL, path VARCHAR(255) NOT NULL, duration INT DEFAULT NULL, INDEX IDX_29AA643212469DE2 (category_id), INDEX IDX_29AA6432A76ED395 (user_id), INDEX title_idx (title), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rates (videos_id INT NOT NULL, users_id INT NOT NULL, INDEX IDX_44D4AB3C763C10B2 (videos_id), INDEX IDX_44D4AB3C67B3B43D (users_id), PRIMARY KEY(videos_id, users_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comments (id INT AUTO_INCREMENT NOT NULL, users_id INT NOT NULL, videos_id INT NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_5F9E962A67B3B43D (users_id), INDEX IDX_5F9E962A763C10B2 (videos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, parent_id INT DEFAULT NULL, name VARCHAR(45) NOT NULL, UNIQUE INDEX UNIQ_3AF346685E237E06 (name), INDEX IDX_3AF34668727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E99A1887DC FOREIGN KEY (subscription_id) REFERENCES subscriptios (id)');
        $this->addSql('ALTER TABLE videos ADD CONSTRAINT FK_29AA643212469DE2 FOREIGN KEY (category_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE videos ADD CONSTRAINT FK_29AA6432A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE rates ADD CONSTRAINT FK_44D4AB3C763C10B2 FOREIGN KEY (videos_id) REFERENCES videos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rates ADD CONSTRAINT FK_44D4AB3C67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A763C10B2 FOREIGN KEY (videos_id) REFERENCES videos (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF34668727ACA70 FOREIGN KEY (parent_id) REFERENCES categories (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E99A1887DC');
        $this->addSql('ALTER TABLE videos DROP FOREIGN KEY FK_29AA6432A76ED395');
        $this->addSql('ALTER TABLE rates DROP FOREIGN KEY FK_44D4AB3C67B3B43D');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A67B3B43D');
        $this->addSql('ALTER TABLE rates DROP FOREIGN KEY FK_44D4AB3C763C10B2');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A763C10B2');
        $this->addSql('ALTER TABLE videos DROP FOREIGN KEY FK_29AA643212469DE2');
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF34668727ACA70');
        $this->addSql('DROP TABLE subscriptios');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE videos');
        $this->addSql('DROP TABLE rates');
        $this->addSql('DROP TABLE comments');
        $this->addSql('DROP TABLE categories');
    }
}
