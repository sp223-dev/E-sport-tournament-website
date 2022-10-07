<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Players;
use App\User;
use App\Myteam;
use App\Order;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $player = Players::all()->count();
        $user = User::all()->count();
        $team = Myteam::all()->count();
        $order = Order::all()->count();
        return view('backend.dashboard.home',compact('player','user','team','order','user'));
    }




    public function coba()
    {
 
        $num_team = 8;
        $num_week = 1;
        
        
        If($num_team % 2 != 0) {
        
            $num_team ++;
        }
        
        $n2 = ($num_team - 1) / 2;
        

        
        for ($x = 0 ; $x < $num_team; $x++){
            $teams[$x] = $x + 1;
        
        }

        
        for($x = 0; $x < $num_week; $x++) {
                for($i = 0; $i < $n2; $i++) {
                 $team1 = $teams[$n2 - $i];
                 $team2 = $teams[$n2 + $i + 1];
                 $results[$team1][$x] = $team2;
                 $results[$team2][$x] = $team1;
                 echo  $results[$team1][$x] ." vs ".$results[$team2][$x] = $team1."<br/>";
                 }
                 echo "<br>";
                 $tmp = $teams[1]; //2
              
                 for($i = 1; $i < count($teams) - 1; $i++) {
                  $teams[$i] = $teams[$i+1];
                 }
               
              $teams[count($teams)-1] = $tmp;
             
            }
   
    }


}
