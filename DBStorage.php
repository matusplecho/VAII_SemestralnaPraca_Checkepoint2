<?php
declare(strict_types=1);

require_once "Season.php";

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


    public function getAll(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM sezona");
        $seasons = [];
        while ($row = $stmt->fetch()){
            $season = new Season($row['id'], $row['cislo'], $row['popis'], $row['video_link'], $row['img_link'], $row['nazov']);
            $seasons[] = $season;
        }
        return $seasons;
    }

    public function saveArticle(Season $season): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO sezona (id, cislo, popis, video_link, img_link, nazov) VALUES(?, ?, ?, ?, ?, ?)");
        $stmt->execute([$season->getId(), $season->getCislo(), $season->getPopis(), $season->getVideoLink(), $season->getImgLink(), $season->getPopis()]);
    }
}