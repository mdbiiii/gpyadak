<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        return view('admin.Tag.tag');
    }


    public function store(Request $request)
    {
        $valid_data=$request->validate([
            'name'=>'required'
        ]);


        Tag::create([
            'name'=>$valid_data['name'],
        ]);

        return redirect(route('show_tag'));


    }

    public function show(Tag $tag)
    {

        $tags=Tag::query();


        if ($key=\request('search')){

            $tags->where('name','LIKE',"%{$key}%")->orWhere('info','LIKE',"%{$key}%");
        }

        $tags=$tags->latest()->paginate(10);


        return view('admin.Tag.tag_show',compact('tags'));
    }



    public function edit(Tag $tag)
    {
        return view('admin.Tag.tag_edit',[
            'tag'=> $tag,
        ]);
    }


    public function update(Request $request, Tag $tag)
    {

        $valid_data=$request->validate([
            'name'=>'required'
        ]);
            $tag->update([
                'name'=>$valid_data['name'],
            ]);



        return redirect(route('show_tag'));
    }



    public function destroy(Tag $tag)
    {
        $tag->delete();
        return back();
    }


}
