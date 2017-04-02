<?php namespace Modules\Product\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Product\Entities\Product;
use Modules\Product\Repositories\ProductRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class AttributeController extends AdminBaseController
{
    /**
     * @var ProductRepository
     */
    private $product;

    public function __construct(ProductRepository $product)
    {
        parent::__construct();

        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $product = $this->product->all();

        return view('product::admin.products.index', compact('products'));
    }


    /**
     * Create Product Attribute
     *
     * @return bool
     */
    public function create()
    {
        return true;
    }
}