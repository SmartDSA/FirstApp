<?
class Database
{
    private $dbConnection = null;

    public function __construct
    (
        private $host = 'localhost',
        private $db = 'c46163_dev_testapp_na4u_ru',
        private $login = 'c46163_dev_testapp_na4u_ru',
        private $pass = 'Mucvb-PwRj9k3d+'
    )
    {
        
    }

    public function connect()
    {

        try {
            $this->dbConnection = new PDO("mysql:host=$this->host;dbname=$this->db", $this->login, $this->pass);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }

        return $this->dbConnection;
    }
}
