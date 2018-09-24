<?php
class Song
{
    protected $artist;
    protected $song;
    protected $length;

    /**
     * Song constructor.
     * @param $artist
     * @param $song
     * @param $length
     * @throws Exception
     */
    public function __construct($artist, $song, $length)
    {
        $this->setArtist($artist);
        $this->setSong($song);
        $this->setLength($length);
    }

    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param mixed $artist
     * @throws Exception
     */
    public function setArtist($artist): void
    {
        if (strlen($artist) < 3 || strlen($artist) > 20 ){
            throw new Exception('Artist name should be between 3 and 20 symbols.');
        }
        $this->artist = $artist;
    }

    /**
     * @return mixed
     */
    public function getSong()
    {
        return $this->song;
    }

    /**
     * @param mixed $song
     * @throws Exception
     */
    public function setSong($song): void
    {
        if (strlen($song) < 3 || strlen($song) > 30){
            throw new Exception('Song name should be between 3 and 30 symbols.');
        }
        $this->song = $song;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     * @throws Exception
     */
    public function setLength($length): void
    {
        $time = explode(':', $length);
        $minutes = $time[0];
        $seconds = $time[1];
        $total = $minutes * 60 + $seconds;

        if ($total < 0 || $total > 899){
            throw new Exception('Invalid song length.');
        }
        if ($minutes < 0 || $minutes > 14){
            throw new Exception('Song minutes should be between 0 and 14.');
        }
        if ($seconds < 0 || $seconds > 59){
            throw new Exception('Song seconds should be between 0 and 59.');
        }
        $this->length = $total;
    }
}