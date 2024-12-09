<?php

namespace App\Http\Controllers;

use App\Models\MainProduct;
use App\Models\SubProductImage;
use App\Models\Advice;
use Illuminate\View\View;
use App\Models\Organization;
use App\Models\Statistic;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Product;
use App\Models\User;

class RoutePages extends Controller
{
    protected $notifications;

    public function __construct()
    {
        $user = User::find(1);
        $this->notifications = $user ? $user->notifications : [];
    }

    public function phoenixsheater(): View
    {
        $arr = MainProduct::find(1);
        $product = MainProduct::all();
        return View('page.PhoenixSheater', [
            'first_item' => $arr, 
            'menu' => $product, 
            'notifications' => $this->notifications
        ]);
    }

    public function company(): View
    {
        $organization = Organization::all();
        $statistic = Statistic::all();
        return View('page.Company', [
            'organization' => $organization, 
            'statistic' => $statistic,
            'notifications' => $this->notifications
        ]);
    }

    public function ecological(): View
    {
        return View('page.Ecological', ['notifications' => $this->notifications]);
    }

    public function calculate(): View
    {
        return View('page.Calculate', ['notifications' => $this->notifications]);
    }

    public function advice(): View
    {
        $data = Advice::all();
        return View('page.Advice', [
            'advice' => $data, 
            'notifications' => $this->notifications
        ]);
    }

    public function buypage(): View
    {
        return View('page.BuyPage', ['notifications' => $this->notifications]);
    }

    public function bpage($id): View
    {
        $production = MainProduct::with('images')->find($id);
        if (!$production) {
            abort(404);
        }
        return View('page.BuyPage', [
            'production' => $production,
            'notifications' => $this->notifications
        ]);
    }

    // public function sbpage($id): View
    // {
    //     $production = SubProductImage::find($id);
    //     if (!$production) {
    //         abort(404);
    //     }
    //     return View('page.BuyPage', [
    //         'production' => $production, 
    //         'notifications' => $this->notifications
    //     ]);
    // }

    public function shoppingcart(): View
    {
        return View('page.ShoppingCart', ['notifications' => $this->notifications]);
    }

    public function shopping($id): View
    {
        $user = User::find(1);

        if ($user) {
            $notificationData = [
                'item' => 'Item Name',
                'message' => 'Сагсанд бүтээгдэхүүн байхгүй байна.',
            ];

            Notification::send($user, new Product($notificationData));
        }

        return View('page.ShoppingCart', ['notifications' => $this->notifications]);
    }

    public function faq(): View
    {
        return View('page.FAQ', ['notifications' => $this->notifications]);
    }
}
