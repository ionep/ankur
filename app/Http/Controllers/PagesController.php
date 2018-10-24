<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;
use App\News;

class PagesController extends Controller
{
    public function index(){
        $news=News::orderBy('created_at','desc')->take(5)->get();
        return view('pages.index')->with('news',$news);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function boardmembers(){
        return view('pages.about.boardmembers');
    }

    public function accountmembers(){
        return view ('pages.about.accountmembers');
    }

    public function advisors(){
        return view('pages.about.advisors');
    }

    public function loancommittee(){
        return view('pages.about.loancommittee');
    }

    public function staff(){
        return view('pages.about.staff');
    }

    public function introduction(){
        return view('pages.about.introduction');
    }

    public function plans(){
        $files=Files::orderBy('created_at','desc')->where('type','saving')->get();
        return view('pages.services.plans')->with('files',$files);
    }

    public function loans(){
        $files=Files::orderBy('created_at','desc')->where('type','loan')->get();
        return view('pages.services.loans')->with('files',$files);
    }

    public function hours(){
        return view('pages.services.hours');
    }

    public function internalservice(){
        return view('pages.services.internalservice');
    }

    public function contact(){
        return view('pages.faq.contact');
    }

    public function openaccount(){
        return view('pages.faq.openaccount');
    }

    public function buyvehicle(){
        return view('pages.faq.buyvehicle');
    }
    public function getloan(){
        return view('pages.faq.getloan');
    }

    public function gallery()
    {
        return view('pages.extras.gallery');
    }

    public function remit(){
        return view('pages.extras.remit');
    }

    public function online(){
        return view('pages.extras.online');
    }

    public function easy(){
        return view('pages.extras.easy');
    }

    public function chairmessage(){
        return view('pages.faq.chairmessage');
    }
}
