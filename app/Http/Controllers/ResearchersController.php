<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authors;
use App\Research;

class ResearchersController extends Controller
{
    public function delete($id){

        $researcher = Authors::where('id','=',$id)->first();
        $researcher->delete($researcher);

        return redirect()->back();

    }

    public function create(Request $request, $id){

        $research = Research::find($id);
        $researcher = Authors::create([
            'research_id' => $research->id,
            'name' => $request->input('name'),
        ]);

        return redirect()->back();

    }

    public function update(Request $request, $id){

        $researcher = Authors::where('id','=',$id)->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->back();

    }
}
