<?php 
namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ProductCrudRequest as StoreRequest;
use App\Http\Requests\ProductCrudRequest as UpdateRequest;

class PurchaseCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Purchase");
        $this->crud->setRoute("admin/purchase");
        $this->crud->setEntityNameStrings('purchase', 'purchases');

        $this->crud->setColumns(['number','price']);
        $this->crud->addField([
            'name' => 'number',
            'label' => "Purchase Number"
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