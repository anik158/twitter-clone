<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{

    public function store(Request $request){

        $request->validate([
           'content' => 'required|min:2|max:240',
        ]);

        Idea::create([
          'content' => $request->get('content'),
      ]);

        return redirect()->route('dashboard')->with('success','Idea created successfully');
    }

    public function show(Idea $idea){
        return view('idea.show',compact('idea'));
    }

    public function edit(Idea $idea){

        $editing  = true;
        return view('idea.show',compact('idea','editing'));
    }


    public function update(Request $request, Idea $idea){
        $request->validate([
            'content' => 'required|min:2|max:240',
        ]);

        $idea->content = $request->get('content');
        $idea->save();

        return redirect()->route('idea.show',$idea->id)->with('success','Idea Updated successfully');
    }

    public function destroy(Idea $idea){
        $idea->delete();
        return redirect()->route('dashboard')->with('success','Idea delete successfully');
    }
}
