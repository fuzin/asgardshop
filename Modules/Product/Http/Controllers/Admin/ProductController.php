<?php namespace Modules\Product\Http\Controllers\Admin;

use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use Modules\Product\Entities\Product;
use Modules\Product\Repositories\ProductRepository;
use Modules\Product\Http\Requests\CreateProductRequest;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ProductController extends AdminBaseController
{
    /**
     * @var ProductRepository
     */
    private $product;

    public function __construct(
        ProductRepository $product
    ) {
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
        $products = $this->product->all();

        return view('product::admin.products.index', compact('products'));
    }

    /**
     * Create new product.
     *
     * @return Respone
     */
    public function create()
    {
        return view('product::admin.products.create');
    }

    /**
     * Store product.
     * @param CreateProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateProductRequest $request)
    {
        $this->product->create($request->all());

        flash(trans('product::messages.product created'));

        return redirect()->route('admin.product.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Product $product)
    {
        // $post->tags()->detach();

        $this->product->destroy($product);

        flash(trans('product::messages.product deleted'));

        return redirect()->route('admin.product.product.index');
    }

}