<?php
class News {
    public static string $DATA_ID = "id";
    public static string $DATA_TITLE = "naslov";
    public static string $DATA_AUTHOR = "avtor";
    public static string $DATA_DATE = "datum";
    public static string $DATA_SUMMERY = "povzetek";
    public static string $DATA_CONTENT = "vsebina";

    private int $id;
    private string $title;
    private string $author;
    private string $date;
    private string $summery;
    private string $content;

    public function __construct( int $id, string $title, string $author, string $date, string $summery, string $content) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->date = $date;
        $this->summery = $summery;
        $this->content = $content;
    }

    public static function fromJson(array $newsJson):News {
        return new News(
            $newsJson[self::$DATA_ID],
            $newsJson[self::$DATA_TITLE],
            $newsJson[self::$DATA_AUTHOR],
            $newsJson[self::$DATA_DATE],
            $newsJson[self::$DATA_SUMMERY],
            $newsJson[self::$DATA_CONTENT]
        );
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summery;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }


}