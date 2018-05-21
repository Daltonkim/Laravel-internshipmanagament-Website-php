<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Posts;
use DB;
class SearchController extends Controller
{
    public function getResults(Request $request){

    $search = $request->input('search');
      if (!$search){

        return redirect()->route('view');
      }

     $posts= Posts::where(DB::raw("CONCAT(jobtitle, '' , jobtype, '', jobdesc,'',companyname,'',deadline)"), 'LIKE',  "%{$search}%")
     ->orWhere('location', ' LIKE', '%{$search}%')
     ->get();


    return view ('searchUsers')->with('posts', $posts);

    }
}
