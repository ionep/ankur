<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;

class UpdateController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function plan(){
        return view('update.plan');
    }

    public function loan(){
        return view('update.loan');
    }

    public function viewplan(){
        $files= Files::where('type','saving')->get();
        return view('update.viewplan')->with('plans',$files);
    }

    public function viewloan(){
        $files= Files::where('type','loan')->get();
        return view('update.viewloan')->with('loans',$files);
    }

    public function updateplan(Request $request){
        $this->validate($request,[
            'date' => 'required',
            'plan' => 'required|mimes:pdf|max:10000',
        ]);
        //encode date
        $pattern="/[\/]/";
        $date=preg_replace($pattern,'-',$request->input('date'));

        // get filename with extension
        $filenameWithExt = $request->file('plan')->getClientOriginalName();
        // get jst filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //get just extension
        $extension= $request->file('plan')->getClientOriginalExtension();
        //filename to store
        $filenameToStore =$filename.'_'.time().'.'.$extension;
        // $path= $request->file('plan')->storeAs('public/assets',$filenameToStore);
        $path= $request->file('plan')->move(public_path('assets'),$filenameToStore);

        $file= new Files();
        $file->date= $date;
        $file->location= $path;
        $file->type='saving';
        $file->save();

        return view('home')->with('success', 'File Created');
    }

    public function updateloan(Request $request){
        $this->validate($request,[
            'date' => 'required',
            'loan' => 'required|mimes:pdf|max:10000',
        ]);
        //encode date
        $pattern="/[\/]/";
        $date=preg_replace($pattern,'-',$request->input('date'));

        // get filename with extension
        $filenameWithExt = $request->file('loan')->getClientOriginalName();
        // get jst filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //get just extension
        $extension= $request->file('loan')->getClientOriginalExtension();
        //filename to store
        $filenameToStore =$filename.'_'.time().'.'.$extension;
        // $path= $request->file('plan')->storeAs('public/assets',$filenameToStore);
        $path= $request->file('loan')->move(public_path('assets'),$filenameToStore);

        $file= new Files();
        $file->date= $date;
        $file->location= $path;
        $file->type='loan';
        $file->save();

        return view('home')->with('success', 'File Created');
    }

    public function deleteplan($id){
        $file=Files::find($id);
        if(count($file)>0)
        {
            unlink($file->location);
            $file=Files::where('id',$id)->delete();
            $msg='File Deleted';
        }
        else{
            $msg='File not found';
        }
        return redirect('/view/plan')->with('error',$msg);
    }

    public function deleteloan($id){
        $file=Files::find($id);
        if(count($file)>0)
        {
            unlink($file->location);
            $file=Files::where('id',$id)->delete();
            $msg='File Deleted';
        }
        else{
            $msg='File not Found';
        }
        return redirect('/view/loan')->with('error',$msg);
    }
}
