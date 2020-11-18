<?php
declare(strict_types=1);

require_once "Season.php";
require_once "SeasonID.php";

class DBStorage
{
    private $user = "root";
    private $pass = "dtb456";
    private $db = "season";
    private $host = "localhost";

    private PDO $pdo;

    /**
     * DBStorage constructor.
     */
    public function __construct()
    {
        $this->pdo = new PDO("mysql:dbname={$this->db};host={$this->host}", $this->user, $this->pass,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    }

    //do array ulozi vsetky prvky databazy bez id
    public function getAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM sezona");
        $seasons = [];
        while ($row = $stmt->fetch()){
            $season = new Season($row['nazov'], $row['cislo'], $row['video_link'], $row['img_link'], $row['popis']);
            $seasons[] = $season;
        }
        return $seasons;
    }

    //do array ulozi vsetky prvky databazy s id
    public function getIdAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM sezona");
        $seasons = [];
        while ($row = $stmt->fetch()){
            $season = new SeasonID($row['id'], $row['nazov'], $row['cislo'], $row['video_link'], $row['img_link'], $row['popis']);
            $seasons[] = $season;
        }
        return $seasons;
    }

    //ulozi do databazy objekt season
    public function saveSeason(Season $season): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO sezona (nazov, cislo, video_link, img_link, popis) VALUES(?, ?, ?, ?, ?)");
        $stmt->execute([$season->getNazov(), $season->getCislo(), $season->getVideoLink(), $season->getImgLink(), $season->getPopis()]);
    }

    //odstrani prvok databazy z databazy podla zadaneho id
    public function deleteSeason(int $id): void
    {
        $stmt = $this->pdo->prepare("DELETE FROM sezona WHERE id = '$id' ");
        $stmt->execute();
    }

    //uprav popis prvoku databazy z databazy podla zadaneho id a textu
    public function editSeasonPopis(int $id, $text): void
    {
        $stmt = $this->pdo->prepare("UPDATE sezona SET popis='$text' WHERE id='$id'");
        $stmt->execute();
    }

    //uprav link pre obrazok prvoku databazy z databazy podla zadaneho id a linku
    public function editSeasonImgLink(int $id, $link): void
    {
        $stmt = $this->pdo->prepare("UPDATE sezona SET img_link='$link' WHERE id='$id'");
        $stmt->execute();
    }
}