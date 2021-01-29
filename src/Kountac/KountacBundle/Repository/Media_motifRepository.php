<?php

namespace Kountac\KountacBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MediaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Media_motifRepository extends EntityRepository
{
    public function findByProduits2($produit_2) 
    {
        $qb = $this->createQueryBuilder('images')
                ->select('images')
                ->where('images.produit_2 = :produit_2')
                ->orderBy('images.id', 'DESC')
                ->setParameter('produit_2', $produit_2)
            ;
        return $qb->getQuery()->getResult();
    }
    
    // Function to address the display pb at the single product section
    
    public function findImagesBon($categorie) 
    {
        $qb = $this->createQueryBuilder('images')
                ->select('images')
                ->leftJoin('images.produit_2', 'p2')
                ->addSelect('p2')
                ->leftJoin('p2.produit_1', 'p1')
                ->addSelect('p1')
                ->where('p1.categorie = :categorie')
                ->andWhere('images.top = 0')
                ->orderBy('images.id', 'DESC')
                ->setParameter('categorie', $categorie)
            ;
        return $qb->getQuery()->getResult();
    }
    
    public function findImagesAutres($produit) 
    {
        $qb = $this->createQueryBuilder('images')
                ->select('images')
                ->where('images.produit_2 = :produit')
                ->andWhere('images.top = 1')
                ->orderBy('images.id', 'DESC')
                ->setParameter('produit', $produit)
            ;
        return $qb->getQuery()->getResult();
    }
    
    public function findImagesTops($produit) 
    {
        $qb = $this->createQueryBuilder('images')
                ->select('images')
                ->where('images.produit_2 = :produit')
                ->andWhere('images.top = 0')
                ->orderBy('images.id', 'DESC')
                ->setParameter('produit', $produit)
            ;
        return $qb->getQuery()->getResult();
    }
    
            
    public function findImagesAutresMannequins($produit, $image) 
    {
        $qb = $this->createQueryBuilder('images')
                ->select('images')
                ->where('images.produit_2 = :produit')
                ->andWhere('images != :image')
                ->orderBy('images.id', 'DESC')
                ->setParameter('produit', $produit)
                ->setParameter('image', $image)
            ;
        return $qb->getQuery()->getResult();
    }
    
    public function findAvatar($mannequins)
    {
        $qb = $this->createQueryBuilder('images')
                ->Select('images')
                ->leftJoin('images.mannequin', 'mannequin')
                ->addSelect('mannequin')
                ->Where('mannequin.id IN (:mannequins)')
                ->orderBy('mannequin.nom_mannequin', 'ASC')
                ->setParameter('mannequins', $mannequins);
        return $qb->getQuery()->getResult();
    }
    
        public function findAvatarByMarque($mannequins,$marque_id)
    {
        $qb = $this->createQueryBuilder('images')
                ->Select('images')
                ->leftJoin('images.mannequin', 'mannequin')
                ->leftJoin('images.produit_2', 'p2')
                ->addSelect('mannequin')
                ->addSelect('p2')
                ->leftJoin('p2.produit_1', 'p1')
                ->addSelect('p1')
                ->where('p1.marque = :marque')
                ->andWhere('mannequin.id IN (:mannequins)')
                ->orderBy('mannequin.nom_mannequin', 'ASC')
                ->setParameter('mannequins', $mannequins)
                ->setParameter('marque', $marque_id)
                
                ;
        return $qb->getQuery()->getResult();
    }
    
    public function getProduitByMarque($marque_id) 
    {
        $qb = $this->createQueryBuilder('image')
                ->select('image')
                ->leftJoin('image.produit_2', 'p2')
                ->addSelect('p2')
                ->leftJoin('p2.produit_1', 'p1')
                ->addSelect('p1')
                ->where('p1.marque = :marque')
                ->andWhere('image.top = 0')
                ->setParameter('marque', $marque_id)
                ->orderBy('image.id', 'DESC');
        return $qb->getQuery()->getResult();
    }

    public function triTaillePoidsByMarque($poids_min, $poids_max, $taille_min, $taille_max, $marque_id) 
    {
        $qb = $this->createQueryBuilder('image')
                ->select('image')
                ->leftJoin('image.mannequin', 'mannequin')
                ->leftJoin('image.produit_2', 'produit_2')
                ->addSelect('mannequin')
                ->addSelect('produit_2')
                ->leftJoin('produit_2.produit_1', 'produit_1')
                ->addSelect('produit_1')
                ->where('mannequin.poids_mannequin >= :poids_min')
                ->andWhere('produit_1.marque = :marque')
                ->andWhere('mannequin.poids_mannequin <= :poids_max')
                ->andWhere('mannequin.taille_mannequin >= :taille_min')
                ->andWhere('mannequin.taille_mannequin <= :taille_max')
                ->setParameter('poids_min', $poids_min)
                ->setParameter('poids_max', $poids_max)
                ->setParameter('taille_min', $taille_min)
                ->setParameter('taille_max', $taille_max)
                ->setParameter('marque', $marque_id)
                ->orderBy('image.id', 'DESC');
                        
        return $qb->getQuery()->getResult();
    }
    
        
    public function triTaillePoids($poids_min, $poids_max, $taille_min, $taille_max) 
    {
        $qb = $this->createQueryBuilder('image')
                ->select('image')
                ->leftJoin('image.mannequin', 'mannequin')
                ->addSelect('mannequin')
                ->where('mannequin.poids_mannequin >= :poids_min')
                ->andWhere('mannequin.poids_mannequin <= :poids_max')
                ->andWhere('mannequin.taille_mannequin >= :taille_min')
                ->andWhere('mannequin.taille_mannequin <= :taille_max')
                ->setParameter('poids_min', $poids_min)
                ->setParameter('poids_max', $poids_max)
                ->setParameter('taille_min', $taille_min)
                ->setParameter('taille_max', $taille_max)
                ->orderBy('image.id', 'DESC');
        return $qb->getQuery()->getResult();
    }
    
    
    public function getProduitByMarqueResult($marque_id) 
    {
        $qb = $this->createQueryBuilder('images')
                ->select('images')
                ->leftJoin('images.produit_2', 'p2')
                ->addSelect('p2')
                ->leftJoin('p2.produit_1', 'p1')
                ->addSelect('p1')
                ->where('p1.marque = :marque')
                ->setParameter('marque', $marque_id)
                ->orderBy('p2.id', 'DESC');
        return $qb->getQuery()->getResult();
    }
    

}
