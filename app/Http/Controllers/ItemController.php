<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

use App\User;

use Nexmo\Laravel\Facade\Nexmo;


class ItemController extends Controller
{
    public function store() {

         $this->validate(request(),[

        'body'       =>   'required'
 
                ]);

        Item::create([
        'user_id'     => auth()->user()->id,
        'body'        => request('body')
        /*'delivertime' => request('delivertime')*/
         ]);

        return redirect('/send-sms/{1}');
	
	}

   /* public function edit(User $user) {

         return view('items.profile',compact('user'));
    }

    public function update(User $user) {

        $c = Comment::Where('id',$user->id)
                           ->update([
                          'body'=>"tryry"
                        ]);

        return redirect('/home');

      }
*/
    public function send(Item $id) {

     Nexmo::message()->send([
    'to'   => '201028483303',
    'from' => 'HussinDelivery',
    'text' => $id->lastest()->body

  ])->where($id->id == auth()->user()->id);

     return redirect('/home');
    }


}
