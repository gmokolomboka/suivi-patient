<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201111140909 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE survey (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, civility VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, birth_date DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, marital_status VARCHAR(255) NOT NULL, son_number VARCHAR(255) NOT NULL, family_link_with_alzheimer_person VARCHAR(255) NOT NULL, family_link_with_alzheimer_person_if_other VARCHAR(255) DEFAULT NULL, time_per_week_with_alzheimer_person VARCHAR(255) NOT NULL, do_you_change_your_life_organisation VARCHAR(255) NOT NULL, how_is_the_care VARCHAR(255) NOT NULL, are_you_surrounded VARCHAR(255) NOT NULL, do_you_feel_alone VARCHAR(255) NOT NULL, do_you_know_drugs_prescribed_for_alzheimer_disease VARCHAR(255) NOT NULL, do_you_know_existing_assistance_and_support_systems VARCHAR(255) NOT NULL, do_you_know_existing_assistance_and_support_systems_if_yes VARCHAR(255) DEFAULT NULL, what_are_you_doing_together VARCHAR(255) NOT NULL, do_you_have_plans VARCHAR(255) NOT NULL, do_you_have_plans_if_yes VARCHAR(255) DEFAULT NULL, any_thing_to_add VARCHAR(255) DEFAULT NULL, any_comments VARCHAR(255) DEFAULT NULL, created DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, body VARCHAR(255) DEFAULT NULL, views INT DEFAULT 0 NOT NULL, INDEX IDX_AD5F9BFCA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE survey ADD CONSTRAINT FK_AD5F9BFCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE survey');
    }
}
