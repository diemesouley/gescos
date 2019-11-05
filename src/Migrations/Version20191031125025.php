<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191031125025 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE produits (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, facture_id INT DEFAULT NULL, lib_produit VARCHAR(25) NOT NULL, descrip_produit VARCHAR(25) NOT NULL, prix_produit INT NOT NULL, quantite_dispo_produit INT NOT NULL, nouveau_produit VARCHAR(10) DEFAULT NULL, date_ajout DATETIME DEFAULT NULL, INDEX IDX_BE2DDF8CBCF5E72D (categorie_id), INDEX IDX_BE2DDF8C7F2DEE08 (facture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, nom_fournisseur VARCHAR(25) NOT NULL, adresse_fournisseur VARCHAR(25) NOT NULL, email_fournisseur VARCHAR(25) DEFAULT NULL, tel_fournisseur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_produit (id INT AUTO_INCREMENT NOT NULL, fournisseur_id INT DEFAULT NULL, produits_id INT DEFAULT NULL, quantite_fourni INT DEFAULT NULL, date_fourni DATETIME DEFAULT NULL, INDEX IDX_B63CD21E670C757F (fournisseur_id), INDEX IDX_B63CD21ECD11A2CF (produits_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, lib_categorie VARCHAR(25) NOT NULL, detail VARCHAR(25) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, nom_type VARCHAR(25) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_sortie (id INT AUTO_INCREMENT NOT NULL, commande_id INT DEFAULT NULL, produits_id INT DEFAULT NULL, facture_id INT DEFAULT NULL, quantite_sortie INT DEFAULT NULL, INDEX IDX_1AE54FB482EA2E54 (commande_id), INDEX IDX_1AE54FB4CD11A2CF (produits_id), INDEX IDX_1AE54FB47F2DEE08 (facture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, INDEX IDX_2E067F93BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detail_type (detail_id INT NOT NULL, type_id INT NOT NULL, INDEX IDX_7B8BBFA6D8D003BB (detail_id), INDEX IDX_7B8BBFA6C54C8C93 (type_id), PRIMARY KEY(detail_id, type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, nom_utilisateur VARCHAR(50) NOT NULL, prenom_utilisateur VARCHAR(50) NOT NULL, adresse_utilisateur VARCHAR(50) NOT NULL, email_utilisateur VARCHAR(50) DEFAULT NULL, tel_utilisateur INT DEFAULT NULL, login VARCHAR(25) NOT NULL, password VARCHAR(8) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, date_fact DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nouv_comm_fournisseur (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, date_entre DATETIME DEFAULT NULL, quantite_entre INT NOT NULL, INDEX IDX_C88DAEC9BCF5E72D (categorie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, nom_client VARCHAR(25) NOT NULL, prenom_client VARCHAR(25) NOT NULL, tel_client INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, facture_id INT DEFAULT NULL, date_commande DATETIME NOT NULL, etat_commande VARCHAR(15) NOT NULL, prix_totatl_commande DOUBLE PRECISION NOT NULL, INDEX IDX_6EEAA67DAB014612 (clients_id), INDEX IDX_6EEAA67D7F2DEE08 (facture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8CBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C7F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('ALTER TABLE ligne_produit ADD CONSTRAINT FK_B63CD21E670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE ligne_produit ADD CONSTRAINT FK_B63CD21ECD11A2CF FOREIGN KEY (produits_id) REFERENCES produits (id)');
        $this->addSql('ALTER TABLE ligne_sortie ADD CONSTRAINT FK_1AE54FB482EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id)');
        $this->addSql('ALTER TABLE ligne_sortie ADD CONSTRAINT FK_1AE54FB4CD11A2CF FOREIGN KEY (produits_id) REFERENCES produits (id)');
        $this->addSql('ALTER TABLE ligne_sortie ADD CONSTRAINT FK_1AE54FB47F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
        $this->addSql('ALTER TABLE detail ADD CONSTRAINT FK_2E067F93BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE detail_type ADD CONSTRAINT FK_7B8BBFA6D8D003BB FOREIGN KEY (detail_id) REFERENCES detail (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE detail_type ADD CONSTRAINT FK_7B8BBFA6C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE nouv_comm_fournisseur ADD CONSTRAINT FK_C88DAEC9BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DAB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D7F2DEE08 FOREIGN KEY (facture_id) REFERENCES facture (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ligne_produit DROP FOREIGN KEY FK_B63CD21ECD11A2CF');
        $this->addSql('ALTER TABLE ligne_sortie DROP FOREIGN KEY FK_1AE54FB4CD11A2CF');
        $this->addSql('ALTER TABLE ligne_produit DROP FOREIGN KEY FK_B63CD21E670C757F');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8CBCF5E72D');
        $this->addSql('ALTER TABLE detail DROP FOREIGN KEY FK_2E067F93BCF5E72D');
        $this->addSql('ALTER TABLE nouv_comm_fournisseur DROP FOREIGN KEY FK_C88DAEC9BCF5E72D');
        $this->addSql('ALTER TABLE detail_type DROP FOREIGN KEY FK_7B8BBFA6C54C8C93');
        $this->addSql('ALTER TABLE detail_type DROP FOREIGN KEY FK_7B8BBFA6D8D003BB');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C7F2DEE08');
        $this->addSql('ALTER TABLE ligne_sortie DROP FOREIGN KEY FK_1AE54FB47F2DEE08');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D7F2DEE08');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DAB014612');
        $this->addSql('ALTER TABLE ligne_sortie DROP FOREIGN KEY FK_1AE54FB482EA2E54');
        $this->addSql('DROP TABLE produits');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE ligne_produit');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE ligne_sortie');
        $this->addSql('DROP TABLE detail');
        $this->addSql('DROP TABLE detail_type');
        $this->addSql('DROP TABLE utilisateurs');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE nouv_comm_fournisseur');
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE commande');
    }
}
