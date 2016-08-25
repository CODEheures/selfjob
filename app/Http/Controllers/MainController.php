<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Visitor;

class MainController extends Controller
{
    public function __construct() {

    }

    public function index(Request $request) {
        //dd($request->ip());
        $visitor = new Visitor();
        $action = $visitor->getActionKey('index');
        if($action){
            $visitor->ip = $request->ip();
            $visitor->action = $action;
            $visitor->save();
        }

        return view('index');
    }

    public function etape( ) {
        return view('index2');
    }

    public function mentions( ) {
        return view('mentions');
    }

    public function see_pop_candidate(Request $request) {
        $visitor = new Visitor();
        $action = $visitor->getActionKey('see_pop_candidate');
        if($action){
            $visitor->ip = $request->ip();
            $visitor->action = $action;
            $visitor->save();
        }
        return response()->json(['save' => true]);
    }

    public function see_pop_employer(Request $request) {
        $visitor = new Visitor();
        $action = $visitor->getActionKey('see_pop_employer');
        if($action){
            $visitor->ip = $request->ip();
            $visitor->action = $action;
            $visitor->save();
        }
        return response()->json(['save' => false]);
    }

    public function mail_main_page(Request $request, $email, $type) {
        $intType = (int) $type;
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && ($intType === 0 || $intType ===1)) {
            if(!$this->isRegister($email)){
                $visitor = new Visitor();
                $action = $visitor->getActionKey('mail_main_page');
                if($action){
                    $visitor->ip = $request->ip();
                    $visitor->action = $action;
                    $visitor->setType($intType);
                    $visitor->email = $email;
                    $visitor->save();
                    return response()->json(['save' => true]);
                }
            } else {
                return response()->json(['save' => true]);
            }
        }
        return response('Fail to resgister', 400);
    }

    public function mail_pop_up_candidate(Request $request, $email) {
        $intType = 0;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if(!$this->isRegister($email)){
                $visitor = new Visitor();
                $action = $visitor->getActionKey('mail_pop_up_candidate');
                if($action){
                    $visitor->ip = $request->ip();
                    $visitor->action = $action;
                    $visitor->setType($intType);
                    $visitor->email = $email;
                    $visitor->save();
                    return response()->json(['save' => true]);
                }
            } else {
                return response()->json(['save' => true]);
            }
        }
        return response('Fail to resgister', 400);
    }

    public function mail_pop_up_employer(Request $request, $email) {
        $intType = 1;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if(!$this->isRegister($email)){
                $visitor = new Visitor();
                $action = $visitor->getActionKey('mail_pop_up_employer');
                if($action){
                    $visitor->ip = $request->ip();
                    $visitor->action = $action;
                    $visitor->setType($intType);
                    $visitor->email = $email;
                    $visitor->save();
                    return response()->json(['save' => true]);
                }
            } else {
                return response()->json(['save' => true]);
            }
        }
        return response('Fail to resgister', 400);
    }


    private function isRegister($email) {
        $isCandidate = Visitor::where('email', '=', $email)
            ->where('isCandidate', '=', true)->first();

        if(!$isCandidate) {
            $isEmployer = Visitor::where('email', '=', $email)
                ->where('isEmployer', '=', true)->first();
        }

        $exist = $isCandidate || $isEmployer ;

        return $exist;
    }

}
