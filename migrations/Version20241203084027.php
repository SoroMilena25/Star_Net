<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241203084027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnement (qui_id INT NOT NULL, a_qui_id INT NOT NULL, INDEX IDX_351268BB9FA0B4D3 (qui_id), INDEX IDX_351268BB829CF362 (a_qui_id), PRIMARY KEY(qui_id, a_qui_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE aimer (qui_id INT NOT NULL, quel_publi_id INT NOT NULL, INDEX IDX_C2D0C6E89FA0B4D3 (qui_id), INDEX IDX_C2D0C6E8479CBBEE (quel_publi_id), PRIMARY KEY(qui_id, quel_publi_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commenter (id INT AUTO_INCREMENT NOT NULL, qui_id INT NOT NULL, quel_publi_id INT NOT NULL, commentaire VARCHAR(255) NOT NULL, date DATETIME NOT NULL, INDEX IDX_AB751D0A9FA0B4D3 (qui_id), INDEX IDX_AB751D0A479CBBEE (quel_publi_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publication (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, img1 VARCHAR(255) DEFAULT NULL, img2 VARCHAR(255) DEFAULT NULL, date DATETIME NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_AF3C6779A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, pseudo VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB9FA0B4D3 FOREIGN KEY (qui_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE abonnement ADD CONSTRAINT FK_351268BB829CF362 FOREIGN KEY (a_qui_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE aimer ADD CONSTRAINT FK_C2D0C6E89FA0B4D3 FOREIGN KEY (qui_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE aimer ADD CONSTRAINT FK_C2D0C6E8479CBBEE FOREIGN KEY (quel_publi_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE commenter ADD CONSTRAINT FK_AB751D0A9FA0B4D3 FOREIGN KEY (qui_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commenter ADD CONSTRAINT FK_AB751D0A479CBBEE FOREIGN KEY (quel_publi_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C6779A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB9FA0B4D3');
        $this->addSql('ALTER TABLE abonnement DROP FOREIGN KEY FK_351268BB829CF362');
        $this->addSql('ALTER TABLE aimer DROP FOREIGN KEY FK_C2D0C6E89FA0B4D3');
        $this->addSql('ALTER TABLE aimer DROP FOREIGN KEY FK_C2D0C6E8479CBBEE');
        $this->addSql('ALTER TABLE commenter DROP FOREIGN KEY FK_AB751D0A9FA0B4D3');
        $this->addSql('ALTER TABLE commenter DROP FOREIGN KEY FK_AB751D0A479CBBEE');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C6779A76ED395');
        $this->addSql('DROP TABLE abonnement');
        $this->addSql('DROP TABLE aimer');
        $this->addSql('DROP TABLE commenter');
        $this->addSql('DROP TABLE publication');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
