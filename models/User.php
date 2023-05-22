<?php
class User {
    public static string $DATA_ID = "id";
    public static string $DATA_USERNAME = "username";
    public static string $DATA_PASSWORD = "geslo";
    private int $id;
    private string $username;
    private string $password;

    public function __construct(int $id, string $username, string $password) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public static function fromJson(array $userJson):User {
        return new User(
            $userJson[self::$DATA_ID],
            $userJson[User::$DATA_USERNAME],
            $userJson[self::$DATA_PASSWORD]
        );
    }

    public function getId(): int {
        return $this->id;
    }
    public function getUsername(): string {
        return $this->username;
    }
    public  function getPassword(): string {
        return $this->password;
    }
}