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
        return $member;
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
}
