<?php
//Singleton
class DataService extends Service {
    private static ?DataService $instance = null;
    private array $userList = [];
    private array $newsList = [];
    public static function get(): DataService {
        self::init();
        return self::$instance;
    }
    private static function init(): void {
        if(self::$instance == null) {
            require_once DATA."baza.php";
            self::$instance = new DataService();
            foreach($uporabniki as $userJson) {
                self::$instance->userList[] = User::fromJson((array)$userJson);
                //array_push(self::$instance->userList, UserModel::formJson($userJson));

            }
            foreach($novice as $newsJson) {
                self::$instance->newsList[] = News::fromJson((array)$newsJson);
            }
        }
    }
    public function getUserList(): array {
        return $this->userList;
    }
    public function getNewsList(): array {
        return $this->newsList;
    }

    public function getNewsFromId(string $id): ?News {
        if(!is_numeric($id)) return null;
        foreach ($this->newsList as $news){
            if ($news->getID() == intval($id))
                return $news;
        }
        return null;
    }
}