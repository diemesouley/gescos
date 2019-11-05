<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Clients;
use App\Entity\Detail;
use App\Entity\Fournisseur;
use App\Entity\Produits;
use App\Entity\Type;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class GesCosController extends AbstractController
{
    
    /**
     * @Route("/gesCos", name="gesCos_Name")
     */
    public function index()
    {
        return $this->render('ges_cos/index.html.twig', [
            'controller_name' => 'GesCosController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('ges_cos/home.html.twig');
    }

    /**
     * @Route("/Categorie/new", name="Categorie_new")
     */
    public function create(Request $request, ObjectManager $manager){

        $categorie = new Categorie();

        $form = $this->createFormBuilder($categorie)
                    ->add('libCategorie', TextType::class, [
                        'attr'=>[
                            'placeholder' => "Categorie",
                            'class' => 'form-control'
                        ]
                    ])
                    ->add('detail',
                    EntityType::class,['class' => Detail::class, 'choice_label' => 'nomDetail',
                    'attr'=>[
                        'placeholder' => "Nom Detail",
                        'class' => 'form-control'
                    ]])
                      ->getForm();
                    
                      $form->handleRequest($request);
                      if($form->isSubmitted()){
                          $manager->persist($categorie);
                          $manager->flush();
                      }

        return $this->render('ges_cos/create.html.twig',[
            'formCategorie' => $form->createView()
        ]);
    }

    /**
     * @Route("/Fournisseur/new", name="Fournisseur_new")
     */
    public function createFournisseur(Request $request, ObjectManager $manager){
        $fournisseur = new Fournisseur();
        $form = $this->createFormBuilder($fournisseur)
            ->add('nomFournisseur', TextType::class, [
            'attr'=>[
                'placeholder' => "Nom fournisseur",
                'class' => 'form-control'
            ]
        ])
        ->add('adresseFournisseur',  TextType::class, [
            'attr'=>[
                'placeholder' => "Adresse Fournisseur",
                'class' => 'form-control'
            ]
        ])
        ->add('emailFournisseur',  TextType::class, [
            'attr'=>[
                'placeholder' => "Email Fournisseur",
                'class' => 'form-control'
            ]
        ])
        ->add('telFournisseur',  TextType::class, [
            'attr'=>[
                'placeholder' => "Telephone Fournisseur",
                'class' => 'form-control'
            ]
        ])
        ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $manager->persist($fournisseur);
            $manager->flush();
        }

        return $this->render('ges_cos/createFournisseur.html.twig',[
            'formFournisseur' => $form->createView()
        ]);
    }

    /**
     * @Route("/Client/new", name="Client_new")
     */

     public function createClient(Request $request, ObjectManager $manager){

        $client = new Clients();

        $form = $this->createFormBuilder($client)
            ->add('nomClient', TextType::class, [
            'attr'=>[
                'placeholder' => "Nom Client",
                'class' => 'form-control'
            ]
        ])
        ->add('prenomClient',  TextType::class, [
            'attr'=>[
                'placeholder' => "Prenom Client",
                'class' => 'form-control'
            ]
        ])
        ->add('telClient',  TextType::class, [
            'attr'=>[
                'placeholder' => "Telephone Client",
                'class' => 'form-control'
            ]
        ])
        ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $manager->persist($client);
            $manager->flush();
        }

        return $this->render('ges_cos/createClient.html.twig',[
            'formClient' => $form->createView()
        ]);
     }

     /**
      * @Route("/Type/new", name="Type_new")
      */
      public function createType(Request $request, ObjectManager $manager){
        $type = new Type();

        $form = $this->createFormBuilder($type)
            ->add('nomType', TextType::class, [
            'attr'=>[
                'placeholder' => "Nom Type",
            ]
        ])
        ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $manager->persist($type);
            $manager->flush();
        }

        return $this->render('ges_cos/createType.html.twig',[
            'formType' => $form->createView()
        ]);
      }

      /**
      * @Route("/Detail/new", name="Detail_new")
      */
      public function createDetail(Request $request, ObjectManager $manager){
        $detail = new Detail();

        $form = $this->createFormBuilder($detail)
            ->add('nomDetail', TextType::class, [
            'attr'=>[
                'placeholder' => "Nom Detail",
            ]
        ])
        ->add('categorie',
        EntityType::class,['class' => Categorie::class, 'choice_label' => 'libCategorie',
        'attr'=>[
            'placeholder' => "Nom Categorie",
            'class' => 'form-control'
        ]])
        ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $manager->persist($detail);
            $manager->flush();
        }

        return $this->render('ges_cos/createDetail.html.twig',[
            'formDetail' => $form->createView()
        ]);
      }

      /**
      * @Route("/Produit/new", name="Produit_new")
      */
      public function createProduit(Request $request, ObjectManager $manager){
        $produit = new Produits();

        $form = $this->createFormBuilder($produit)
            ->add('libProduit', TextType::class, [
            'attr'=>[
                'placeholder' => "libellé Produit",
            ]
        ])
        ->add('descripProduit', TextType::class, [
            'attr'=>[
                'placeholder' => "Description Produit",
            ]
        ])
        ->add('prixProduit', TextType::class, [
            'attr'=>[
                'placeholder' => "Prix Produit",
            ]
        ])
        ->add('quantiteDispoProduit', TextType::class, [
            'attr'=>[
                'placeholder' => "quantité Dispo Produit",
            ]
        ])
        
        ->add('categorie',
        EntityType::class,['class' => Categorie::class, 'choice_label' => 'libCategorie',
        'attr'=>[
            'placeholder' => "Nom Categorie",
            'class' => 'form-control'
        ]])
        ->add('dateAjout', DateTimeType::class, [
            'date_label' => 'Starts On',
        ])
        ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted()){
            $manager->persist($produit);
            $manager->flush();
        }

        return $this->render('ges_cos/createProduit.html.twig',[
            'formProduit' => $form->createView()
        ]);
      }
    
}
