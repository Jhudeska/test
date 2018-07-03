/*
require_once 'Model.php';


class RepairTask extends Model
{
const TABLE = 'repairTask';

public  $ID,
$description,
$solution,
$registerDate,
$repairDate,
$estimateFinishDate,
$bicycleID,
$repairBranchID;

public function __construct() {
Model::__construct();
$this->bike = new Bicycle();
$this->user = new User();
}


public function createRepair($request) {

}


public function getRepair($RepairID) {

}


public function updateRepair($request) {

}
}


/*
*
+ repairID:int
- Bike:object
- User:object

+ createRepair(request):object
+ getRepair(repairID):object
+ updateRepair(request):object

*/*/


//validation forms, messages pop up, unit testing , repsonsevieuw ??, errors, try exceptions