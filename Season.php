<?php


class Season
{
    public $cislo;
    public $popis;
    public $video_link;
    public $img_link;
    public $nazov;

    /**
     * Season constructor.
     * @param $cislo
     * @param $popis
     * @param $video_link
     * @param $img_link
     * @param $nazov
     */
    public function __construct($nazov, $cislo, $video_link, $img_link, $popis)
    {
        $this->cislo = $cislo;
        $this->popis = $popis;
        $this->video_link = $video_link;
        $this->img_link = $img_link;
        $this->nazov = $nazov;
    }

    /**
     * @return mixed
     */
    public function getCislo()
    {
        return $this->cislo;
    }

    /**
     * @param mixed $cislo
     */
    public function setCislo($cislo): void
    {
        $this->cislo = $cislo;
    }

    /**
     * @return mixed
     */
    public function getPopis()
    {
        return $this->popis;
    }

    /**
     * @param mixed $popis
     */
    public function setPopis($popis): void
    {
        $this->popis = $popis;
    }

    /**
     * @return mixed
     */
    public function getVideoLink()
    {
        return $this->video_link;
    }

    /**
     * @return mixed
     */

    public function setVideoLink($video_link): void
    {
        $this->video_link = $video_link;
    }

    /**
     * @return mixed
     */
    public function getImgLink()
    {
        return $this->img_link;
    }

    /**
     * @param mixed $img_link
     */
    public function setImgLink($img_link): void
    {
        $this->img_link = $img_link;
    }

    /**
     * @return mixed
     */
    public function getNazov()
    {
        return $this->nazov;
    }

    /**
     * @param mixed $nazov
     */
    public function setNazov($nazov): void
    {
        $this->nazov = $nazov;
    }



}