<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listItem;

class TodolistController extends Controller
{

    public function index()
    {
       // dd('check');
        // $listItems = listItem::all();
        $listItems = listItem::where('is_complete',0)->get();
        return view('welcome',compact('listItems'));
    }

    public function markComplete($id)
    {
       // dd('check');
        // $listItems = listItem::all();
        // return view('welcome',compact('listItems'));
        $listItem=ListItem::find($id);
        $listItem->is_complete=1;
        $listItem->save();
        return redirect('/');
    }




    public function saveItem(Request $request)
    {
        // \Log::info(json_encode($request->all()));
        $request->validate([
            'listItem'=>'required|string|max:255',
        ]);





        $newListItem=new ListItem;
        $newListItem->name=$request->listItem;
        $newListItem->is_complete=0;
        $newListItem->save();
         return redirect('/')->with('message','Item inserted successfully');
        //return redirect()->back()->with('success','Item Inserted Sucessfully');
    }
}
