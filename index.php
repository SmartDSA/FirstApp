<h4>Main page</h4>
<h4>Develop (branch "test_branch")20/08/2026</h4>

<?

require_once 'composer/vendor/autoload.php';
//require_once "Database/Test.php";
//require_once "Database/DbConnect.php";

use App\Database\{Test,DbConnect};

$test = new Test();

$dbConnection = new DbConnect();

?>