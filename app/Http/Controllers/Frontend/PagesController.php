<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Models\SuccessHistory;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }
    public function pokkt()
    {
       $success = SuccessHistory::get();
    
        return view('frontend.pokkt',compact('success'));

    }
    public function ss_pokkt($empid=0){
        //$success = SuccessHistory::find($empid);
        $success = SuccessHistory::with('successattr')->find($empid);
       $html = "<button type='button' class='btn btn-danger close-sz'
       data-bs-dismiss='modal'>X</button>
   <h1 class='ss-title'>Case Study<span style='color: red; margin-left: 6%;'> $success->adveritser_name </span>
   </h1>
   <div class='ss-top-right'><img src='{{ asset".('frontend/img/ss-content/logos/nagad.png')."}}' alt=''>
   </div>
   <div class='ss-bottom-right'><img src='{{ asset('frontend/img/ss-content/logos/pokkt.png') }}' alt=''>
   </div>
   <div class='ss-bottom-left'><img src='{{ asset('frontend/img/ss-content/logos/bitspearhead.png') }}' alt=''></div>
   <div style='color: aliceblue;''></div>
   <div class='ss-left'>
       <p>Platform:</p>
       <p style='font-weight: bold;'>$success->platform_name</p><br><br>
       <p>Placement:</p>
       <p style='font-weight: bold;'>from db</p><br><br>
       <p>Campaign Objective:</p>
       <p style='font-weight: bold;'>$success->campaign_objective</p><br><br>
       <p>Campaign Module:</p>
       <p style='font-weight: bold;'>$success->campaign_module</p><br><br>
       <p>Campaign Duration:</p>
       <p style='font-weight: bold;'>$success->campaign_duration</p>
   </div>
   <div class='ss-center '>
   
       <img src='{{url(/upload/$success->content_image)}}' alt='img'>
       <video class='videoplayer' autoplay='' webkit-playsinline=''
           playsinline='' muted='' loop=''
           src='{{asset('/upload'.$success->content_video)}}'></video>

   </div>
   <div class='ss-center-pc hidden-center'>
       <img src='{{ asset('frontend/img/ss-8content/pc.png') }}' alt=''>
       <img src='{{ asset('frontend/img/ss-content/mitsub.jpg') }}' alt=''>
   </div>
   
   <div class='ss-right'>
        
       <p>sa</p>
       <p style='font-weight: bold;'>".$success->successattr[0]->dynamic_field[0]."</p>
   </div>

</div>";
    
    $response['html'] = $html;

    return response()->json($response);

    }
    public function imo()
    {
        return view('frontend.imo');
    }
    public function likee()
    {
        return view('frontend.likee');
    }
    public function mcanvas()
    {
        return view('frontend.mcanvas');
    }
    public function appnext()
    {
        return view('frontend.appnext');
    }
    public function gupshup()
    {
        return view('frontend.gupshup');
    }
    public function sizmek()
    {
        return view('frontend.sizmek');
    }
    public function espncricinfo()
    {
        return view('frontend.espncricinfo');
    }
    public function influencermarketing()
    {
        return view('frontend.influencermarketing');
    }
    public function yahoo()
    {
        return view('frontend.yahoo');
    }
    public function miq()
    {
        return view('frontend.miq');
    }
}
