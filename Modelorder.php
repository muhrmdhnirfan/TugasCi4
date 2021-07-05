<?php
namespace App\Models;
use CodeIgniter\Model;

class Modelorder extends Model
{
	public function getOrder()
	{
		return $this->db->table('orders')
		->join('shippers', 'shippers.ShipperID=orders.OrderID')
		->get()->getResultArray();
	}
}
?>