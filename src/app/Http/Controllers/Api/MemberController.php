<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * index
     *
     * @return $member
     */
    function index() {
        $member = Member::get();
        return response()->json($member);
    }

    /**
     * create
     * 
     * @return mixed
     */
    function create(Request $request) {
        // $member = DB::table('members')->insert([
        //     'name'       => $request->name,
        //     'age'        => $request->age,
        //     'tell'       => $request->tell,
        //     'created_at' => \Carbon\Carbon::now(),
        // ]);

        $member = Member::create([
            'name'       => $request->name,
            'age'        => $request->age,
            'tell'       => $request->tell,
        ]);

        return response()->json($member);
    }

    /**
     * fetch
     * @return mixed
     */
    function fetch() {
        $parses = parse_url($_SERVER["REQUEST_URI"]);
        $index = explode("/",$parses["path"])[3];
        $member = Member::find($index);
        return response()->json($member);
    }

    /**
     * update
     *
     * @return bool
     */
    function update(Request $request) {
        $parses = parse_url($_SERVER["REQUEST_URI"]);
        $index = explode("/", $parses["path"])[3];
        $bool = Member::find($index)->fill($request->all())->save();
        return $bool;
    }
}
