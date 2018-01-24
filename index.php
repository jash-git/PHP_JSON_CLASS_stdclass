<?php
//stdclass 存取介紹
//https://jsonutils.com/
//{"controllers":[{"identifier":3,"active":1,"is_connected":0,"model_code":0,"serial_number":0,"network_identifier":0,"module_amount":0,"door_amount":0},{"identifier":4,"active":1,"is_connected":0,"model_code":0,"serial_number":0,"network_identifier":0,"module_amount":0,"door_amount":0},{"identifier":1,"active":1,"is_connected":1,"model_code":35089,"serial_number":388599810,"network_identifier":1,"module_amount":2,"door_amount":12,"modules":[{"identifier":1,"controller_module_index":1,"is_connected":1,"model_code":1540,"serial_number":337904130,"network_identifier":1,"function_type":1},{"identifier":5,"controller_module_index":5,"is_connected":1,"model_code":1540,"serial_number":337904144,"network_identifier":5,"function_type":2}],"doors":[{"identifier":2,"controller_door_index":2},{"identifier":3,"controller_door_index":3},{"identifier":4,"controller_door_index":4},{"identifier":5,"controller_door_index":5},{"identifier":6,"controller_door_index":6},{"identifier":7,"controller_door_index":7},{"identifier":8,"controller_door_index":8},{"identifier":9,"controller_door_index":9},{"identifier":10,"controller_door_index":10},{"identifier":11,"controller_door_index":11},{"identifier":12,"controller_door_index":12},{"identifier":1,"controller_door_index":1,"readers":[{"identifier":5,"controller_module_index":5,"is_connected":1,"model_code":1540,"serial_number":337904144,"network_identifier":5,"function_type":2},{"identifier":1,"controller_module_index":1,"is_connected":1,"model_code":1540,"serial_number":337904130,"network_identifier":1,"function_type":1}]}]},{"identifier":2,"active":1,"is_connected":1,"model_code":35089,"serial_number":388599809,"network_identifier":1,"module_amount":1,"door_amount":12,"modules":[{"identifier":33,"controller_module_index":1,"is_connected":1,"model_code":1540,"serial_number":0,"network_identifier":1,"function_type":1}],"doors":[{"identifier":14,"controller_door_index":2},{"identifier":15,"controller_door_index":3},{"identifier":16,"controller_door_index":4},{"identifier":17,"controller_door_index":5},{"identifier":18,"controller_door_index":6},{"identifier":19,"controller_door_index":7},{"identifier":20,"controller_door_index":8},{"identifier":21,"controller_door_index":9},{"identifier":22,"controller_door_index":10},{"identifier":23,"controller_door_index":11},{"identifier":24,"controller_door_index":12},{"identifier":13,"controller_door_index":1,"readers":[{"identifier":33,"controller_module_index":1,"is_connected":1,"model_code":1540,"serial_number":0,"network_identifier":1,"function_type":1}]}]}]}

class modules
{
    public $identifier; //int
    public $controller_module_index; //int
    public $is_connected; //int
    public $model_code; //int
    public $serial_number; //int
    public $network_identifier; //int
    public $function_type; //int
}

class readers
{
    public $identifier; //int
    public $controller_module_index; //int
    public $is_connected; //int
    public $model_code; //int
    public $serial_number; //int
    public $network_identifier; //int
    public $function_type; //int
}

class doors
{
    public $identifier; //int
    public $controller_door_index; //int
    public $readers; //array(Reader)
}

class controllers
{
    public $identifier; //int
    public $active; //int
    public $is_connected; //int
    public $model_code; //int
    public $serial_number; //int
    public $network_identifier; //int
    public $module_amount; //int
    public $door_amount; //int
    public $modules; //array(Module)
    public $doors; //array(Door)
}

class Example
{
    public $controllers; //array(Controller)
}

$json='{"controllers":[{"identifier":3,"active":1,"is_connected":0,"model_code":0,"serial_number":0,"network_identifier":0,"module_amount":0,"door_amount":0},{"identifier":4,"active":1,"is_connected":0,"model_code":0,"serial_number":0,"network_identifier":0,"module_amount":0,"door_amount":0},{"identifier":1,"active":1,"is_connected":1,"model_code":35089,"serial_number":388599810,"network_identifier":1,"module_amount":2,"door_amount":12,"modules":[{"identifier":1,"controller_module_index":1,"is_connected":1,"model_code":1540,"serial_number":337904130,"network_identifier":1,"function_type":1},{"identifier":5,"controller_module_index":5,"is_connected":1,"model_code":1540,"serial_number":337904144,"network_identifier":5,"function_type":2}],"doors":[{"identifier":2,"controller_door_index":2},{"identifier":3,"controller_door_index":3},{"identifier":4,"controller_door_index":4},{"identifier":5,"controller_door_index":5},{"identifier":6,"controller_door_index":6},{"identifier":7,"controller_door_index":7},{"identifier":8,"controller_door_index":8},{"identifier":9,"controller_door_index":9},{"identifier":10,"controller_door_index":10},{"identifier":11,"controller_door_index":11},{"identifier":12,"controller_door_index":12},{"identifier":1,"controller_door_index":1,"readers":[{"identifier":5,"controller_module_index":5,"is_connected":1,"model_code":1540,"serial_number":337904144,"network_identifier":5,"function_type":2},{"identifier":1,"controller_module_index":1,"is_connected":1,"model_code":1540,"serial_number":337904130,"network_identifier":1,"function_type":1}]}]},{"identifier":2,"active":1,"is_connected":1,"model_code":35089,"serial_number":388599809,"network_identifier":1,"module_amount":1,"door_amount":12,"modules":[{"identifier":33,"controller_module_index":1,"is_connected":1,"model_code":1540,"serial_number":0,"network_identifier":1,"function_type":1}],"doors":[{"identifier":14,"controller_door_index":2},{"identifier":15,"controller_door_index":3},{"identifier":16,"controller_door_index":4},{"identifier":17,"controller_door_index":5},{"identifier":18,"controller_door_index":6},{"identifier":19,"controller_door_index":7},{"identifier":20,"controller_door_index":8},{"identifier":21,"controller_door_index":9},{"identifier":22,"controller_door_index":10},{"identifier":23,"controller_door_index":11},{"identifier":24,"controller_door_index":12},{"identifier":13,"controller_door_index":1,"readers":[{"identifier":33,"controller_module_index":1,"is_connected":1,"model_code":1540,"serial_number":0,"network_identifier":1,"function_type":1}]}]}]}';
$data = json_decode($json);


echo '<pre>';
	print_r($data);//顯示全部
	//顯示controllers陣列 print_r($data->{'controllers'});
	//顯示controllers陣列的第0個元素 print_r($data->{'controllers'}[0]);
	//顯示controllers陣列的第0個元素內單一值屬性值 echo $data->{'controllers'}[0]->identifier;
	//顯示controllers陣列的第2個元素內陣列屬性 print_r($data->{'controllers'}[2]->modules[0]);
	//顯示controllers陣列的第2個元素內陣列屬性下的單一屬性值 echo $data->{'controllers'}[2]->modules[0]->serial_number;
echo '</pre>';

?>