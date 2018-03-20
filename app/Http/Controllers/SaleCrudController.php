<?php 
namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SaleCrudRequest as StoreRequest;
use App\Http\Requests\SaleCrudRequest as UpdateRequest;

class SaleCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Sale");
        $this->crud->setRoute("admin/sale");
        $this->crud->setEntityNameStrings('sale', 'sales');

        $this->crud->setColumns(['number','price']);
        $this->crud->addField([
            'name' => 'number',
            'label' => "Sale Number"
        ]);
        $this->crud->addField([
            'name' => 'price',
            'label' => "Total Price"
        ]);
    }

	public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}

	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}