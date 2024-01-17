<?php 

namespace App\Http\Controllers;
use App\Models\shortUrlModel;
use App\Http\Requests\shortRequeat;


class shortUrlController extends Controller
{
    public function shorturl(shortRequeat $request){
       if($request->original_url){
        $new_url = shortUrlModel::create([
            'original_url' => $request->original_url,
        ]);
        if($new_url){
            $short_url = base_convert($new_url->id,10,36);
            $new_url->update([
               'short_url' =>$short_url,
            ]);
            return redirect()->back()->with('success_message', [
                'message' => 'Your short URL: <a href="' . url($short_url) . '">' . url($short_url) . '</a>',
            ]);
            
        }
 
       }
    }


    public function show($code){
        $short_url = shortUrlModel::where('short_url',$code)->first();

        if($short_url){
            return redirect()->to(url($short_url->original_url));
        }
        return redirect()->to(url('/'));
    }
}
