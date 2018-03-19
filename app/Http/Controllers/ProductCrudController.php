<?php 
namespace App\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TagCrudRequest as StoreRequest;
use App\Http\Requests\TagCrudRequest as UpdateRequest;

class ProductCrudController extends CrudController {

	public function setup() {
        $this->crud->setModel("App\Product");
        $this->crud->setRoute("admin/product");
        $this->crud->setEntityNameStrings('product', 'products');

        $this->crud->setColumns(['code','name']);
        $this->crud->addField([
            'name' => 'code',
            'label' => "Product code"
        ]);
        $this->crud->addField([
            'name' => 'name',
            'label' => "Product name"
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