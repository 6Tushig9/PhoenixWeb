<?php

namespace App\Http\Controllers;

use App\Models\MainProduct;
use App\Models\Advice;
use Illuminate\View\View;
use App\Models\Organization;
use App\Models\Statistic;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Product;
use App\Models\User;

class RoutePages extends Controller
{
    public function phoenixsheater(): View
    {
        $arr=MainProduct::find(1) ?? null;
        $product=MainProduct::all() ?? null;
        $user=User::find(1);
        return View('page.PhoenixSheater',['first_item'=>$arr, 'menu'=>$product, 'notifications'=>$user->notifications]);
    }

    public function company(): View
    {
        $organization=Organization::all() ?? null;
        $statistic=Statistic::all() ?? null;
        $user=User::find(1);
        return View('page.Company',['organization'=>$organization, 'statistic'=>$statistic,'notifications'=>$user->notifications]);
    }

    public function ecological(): View
    {
        $user=User::find(1);
        return View('page.Ecological', ['notifications'=>$user->notifications]);
    }

    public function calculate(): View
    {
        $user=User::find(1);
        return View('page.Calculate',['notifications'=>$user->notifications]);
    }

    public function advice(): View
    {
        $user=User::find(1);
        $data=Advice::all() ?? null;
        return View('page.Advice',['advice'=>$data,'notifications'=>$user->notifications]);
    }

    public function buypage(): View
    {
        $user=User::find(1);
        return View('page.BuyPage',['notifications'=>$user->notifications]);
    }

    public function bpage($id): View
    {
        $production=MainProduct::find($id);
        $user=User::find(1);
        if (!$production) {
            abort(404);
        }
        return View('page.BuyPage', ['production'=>$production,'notifications'=>$user->notifications]);
    }

    public function shoppingcart(): View
    {
        $user=User::find(1);
        return View('page.ShoppingCart',['notifications'=>$user->notifications]);
    }

    public function shopping($id): View
    {
       $user = User::find(1);

    if ($user) {
        $notificationData = [
            'item' => 'Item Name',
            'message' => 'You have added an item to your shopping cart.',
        ];

        Notification::send($user, new Product($notificationData));
    }
        return View('page.ShoppingCart',['notifications'=>$user->notifications]);
    }

    public function faq(): View
    {
        $user=User::find(1);
        return View('page.FAQ',['notifications'=>$user->notifications]);
    }

}
