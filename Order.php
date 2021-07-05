<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\Modelorder;

class Order extends BaseController
{
	public function index()
	{
		$model = new Modelorder();
		$data['OrderID'] = $model->getOrder();
		echo view('vieworder',$data);
	}
}
?>