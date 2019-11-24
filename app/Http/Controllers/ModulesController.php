<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modules;
use App\Review;

class ModulesController extends Controller
{

    public function index()
    {
        return view('modules', with([
            'modules' => modules::all()
        ]));
    }

    public function getModuelByIdAndCode($id, $code)
    {
        $module = modules::where('id', '=', $id)->where('code', '=', $code)->get();
        $reviews = modules::find($id)->reviews()->get();
        return view('module', with([
            'module' => (object) $module[0],
            'reviews' => $reviews
        ]));
    }

    public function searcher(Request $request)
    {

        $query = $request->module_name;

        $modules = modules::where('name', 'like', '%' . $query . '%')
            ->orWhere('code', 'like', '%' . $query . '%')->get();

        return view('modules')->with([
            'modules' => $modules,
            'query' => $request->module_name
        ]);
    }
}
