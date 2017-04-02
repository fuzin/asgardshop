<?php namespace Modules\Product\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('product::menu.title'), function (Item $item) {
                $item->icon('fa fa-tag');
                $item->weight(10);
                $item->authorize(

                // list products
                );
                $item->item(trans('product::menu.list'), function (Item $item) {
                    $item->icon('fa fa-tags');
                    $item->weight(0);
                    $item->append('admin.product.product.create');
                    $item->route('admin.product.product.index');
                    $item->authorize(
                        $this->auth->hasAccess('product.products.index')
                    );
                });

                // list attribute groups
                /*
                $item->item(trans('product::menu.attribute.group.list'), function (Item $item) {
                    $item->icon('fa fa-tags');
                    $item->weight(1);
                    $item->append('admin.product.attribute.group.create');
                    $item->route('admin.product.attribute.group.index');
                    $item->authorize(
                        $this->auth->hasAccess('product.products.attribute.groups')
                    );
                });
                */



                // list attributes

                $item->item(trans('product::menu.attribute.list'), function (Item $item) {
                    $item->icon('fa fa-tags');
                    $item->weight(0);
                    $item->append('admin.product.attribute.create');
                    $item->route('admin.product.attribute.index');
                    $item->authorize(
                        $this->auth->hasAccess('product.products.attributes')
                    );
                });




            });
        });

        return $menu;
    }
}
