<?php
require_once 'Connexion.php' ;
class DialogueBD {

    public function getTousLesProduits()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT DISTINCT * FROM produit ORDER BY idGenre";
            $sth = $conn->prepare($sql);
            $sth->execute();
            $mesProduits = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $mesProduits;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
    public function getTousLesGenres()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT DISTINCT * FROM genre ORDER BY idGenre";
            $sth = $conn->prepare($sql);
            $sth->execute();
            $mesGenres = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $mesGenres;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
    public function getTousLesArtsDeLaTable()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT DISTINCT * FROM produit WHERE idGenre = 1 ORDER BY nomProd";
            $sth = $conn->prepare($sql);
            $sth->execute();
            $mesArtsdelatable = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $mesArtsdelatable;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
    public function getToutesLesCeintures()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT DISTINCT * FROM produit WHERE idGenre = 2 ORDER BY nomProd";
            $sth = $conn->prepare($sql);
            $sth->execute();
            $mesCeintures = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $mesCeintures;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
    public function getTousLesDiademes()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT DISTINCT * FROM produit WHERE idGenre = 3 ORDER BY nomProd";
            $sth = $conn->prepare($sql);
            $sth->execute();
            $mesDiademes = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $mesDiademes;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
    public function getTousLesHeurtoires()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT DISTINCT * FROM produit WHERE idGenre = 4 ORDER BY nomProd";
            $sth = $conn->prepare($sql);
            $sth->execute();
            $mesHeurtoires = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $mesHeurtoires;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
    public function getTousLesJeuxdechecs()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT DISTINCT * FROM produit WHERE idGenre = 5 ORDER BY nomProd";
            $sth = $conn->prepare($sql);
            $sth->execute();
            $mesJeuxdechecs = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $mesJeuxdechecs;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
    public function getTousLesPendentifs()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT DISTINCT * FROM produit WHERE idGenre = 6 ORDER BY nomProd";
            $sth = $conn->prepare($sql);
            $sth->execute();
            $mesPendentifs = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $mesPendentifs;
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }

    public function addUnProduit($nomProd, $prixProd, $carProd, $imgProd, $idGenre) {
        try {
            $conn = Connexion::getConnexion();
            $sql = "INSERT INTO produit (nomProd, prixProd, carProd, imgProd, idGenre) VALUES (?,?,?,?,?)";
            $sth = $conn->prepare($sql);
            $sth->execute(array($nomProd, $prixProd, $carProd, $imgProd, $idGenre));
            header('location: ../vues/principale667.php');
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
    public function updateUnProduit($nomProd2, $prixProd, $carProd, $imgProd, $idGenre, $nomProd) {
        try {
            $conn = Connexion::getConnexion();
            $sql = "UPDATE produit SET nomProd = (?), prixProd = (?), carProd = (?), imgProd = (?), idGenre = (?) WHERE nomProd = (?)";
            $sth = $conn->prepare($sql);
            $sth->execute(array($nomProd2, $prixProd, $carProd, $imgProd, $idGenre, $nomProd));
            header('location: ../vues/principale667.php');
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
    public function deleteUnProduit($nomProd) {
        try {
            $conn = Connexion::getConnexion();
            $sql = "DELETE FROM produit WHERE nomProd = (?)";
            $sth = $conn->prepare($sql);
            $sth->execute(array($nomProd));
            header('location: ../vues/principale667.php');
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
}
