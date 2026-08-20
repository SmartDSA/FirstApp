<?

namespace App\Database;

class GetUser
{

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;

    }

    public function findAll(){
        $statement = "SELECT uid, title, content, role FROM test_table";

        try {
            $statement = $this->db->query ($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}
