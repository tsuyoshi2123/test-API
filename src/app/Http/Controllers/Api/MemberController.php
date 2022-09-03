<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
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
     */
    function create() {
        //
    }
}
