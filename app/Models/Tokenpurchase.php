<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Tokenpurchase extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public static function get_total_sales_of_user($user_id)
    {   $total_sales = 0;
        $tmp_user_id = $user_id; 

        $user = User::find($tmp_user_id);
        $_this = new self();

        $sale = Tokenpurchase::where('user_id',$tmp_user_id)->get()->sum('no_of_tockens');
        $total_sales += $sale;
        $users=User::where('referby',$tmp_user_id)->get();
        // $new_users = collect(new User);
        do{
            
        // $new_users = new \Illuminate\Database\Eloquent\Collection();
           $new_users = User::where('created_at','dummy')->get();   

            if(count($users) > 0)
            {
                foreach($users as $user){ 
                   $sale = Tokenpurchase::where('user_id',$user->id)->get()->sum('no_of_tockens');
                   $total_sales += $sale;
         
                   $resp =  $_this->childs_sales($user->id);  
                   $total_sales += $resp['sales'];

                   $add_users = $resp['users'];
                    if(count($add_users) > 0)
                    {
                        $new_users->push($add_users);
                    }
                  
                }
            }
            // dd($users);
            $users = $new_users; 
        }
        while(count($users) > 0);

        return $total_sales;
    }

    public function childs_sales($user_id)
    {   
        $total_sales = 0;
        $resp = [];
        // $new_users = collect(new User);
                // $new_users = new \Illuminate\Database\Eloquent\Collection();
            $new_users = User::where('created_at','dummy')->get();
                    
            $tmp_users=User::where('referby',$user_id)->get();
            if(count($tmp_users) > 0)
            {
                foreach($tmp_users as $tmp_user)
                {
                    $sale = Tokenpurchase::where('user_id',$tmp_user->id)->get()->sum('no_of_tockens');

                    $total_sales += $sale;
                    $new_users->push($tmp_user);
                    
                }

            }
            $resp = [
                'sales' => $total_sales,
                'users' => $new_users,
            ];
            
  
        return $resp;
        
    }
}
