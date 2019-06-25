<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentController extends Controller
{


    public function store(Request $request)
    {
       

        $data = $request->all();

        $this->validate($request, [

        'photo1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1000',    
        'photo2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1000',
        'photo3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1000',

        ]);



        if ($request->hasFile('photo1')) {

        $photo = $request->file('photo1')->getClientOriginalName();

        $destination = base_path() . '/public/uploads';

        $request->file('photo1')->move($destination, $photo);

        $data['photo1'] = $photo;

    	}

        if ($request->hasFile('photo2')) {

        
        $photo2 = $request->file('photo2')->getClientOriginalName();
       
        $destination = base_path() . '/public/uploads';
      
        $request->file('photo2')->move($destination, $photo2);
        
        $data['photo2'] = $photo2;

        }   


        if ($request->hasFile('photo3')) {

        
        $photo3 = $request->file('photo3')->getClientOriginalName();
       
        $destination = base_path() . '/public/uploads';
      
        $request->file('photo3')->move($destination, $photo3);
        
        $data['photo3'] = $photo3;

        }   

        
       	$kode    = $request->get('kode');

        Comment::create($data);


        // return redirect()->route('show', ['kode' => $kode]);

        return redirect()->action(
		    'HomeProductController@show', ['id' => $kode]
		);



    }


}
