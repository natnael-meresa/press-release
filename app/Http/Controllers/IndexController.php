<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Press; 
use App\Models\Service; 
use App\Models\Profile; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function writingPanel(){
        $services = Service::all();
        return view('pages.writingpanel', ['services' => $services]);
    }
    public function writing(){
        return view('pages.writing');
    }

    public function userprofile(){
        $user = Auth::user();
        return view('pages.userprofile', ['user'=> $user]);
    }

    public function pressview(){
        $presses = Press::all();

        return view('pages.pressview', ['presses' => $presses]);
    }

    public function pressrelease(){
        return view('pages.pressrelease');
    }
    public function writingCreate(Request $request){
        $this->validate($request, [
            'package' => 'required',
            'nopackage' => 'required',
            'title' => 'required',
            'desc'  => 'required',
            'bname'  => 'required',
            'contactemail'  => 'required', 
        ]);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. '_'. time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/pressImage', $fileNameToStore);
            }
            
            else {
            $fileNameToStore = 'noimage.jpg';
            }

        $service = new Service;
        $service->image =$fileNameToStore;
        $service->package = $request->input('package');
        $service->nopackage = $request->input('nopackage');
        $service->title = $request->input('title');
        $service->desc = $request->input('desc');
        $service->bname = $request->input('bname');
        $service->contactemail = $request->input('contactemail');
        $service->cweb = $request->input('cweb');
        $service->save();

        return redirect()
                ->route('writingpanel')
                ->with('success', 'Press Create complete.');

    }
    
    public function pressreleaseCreate(Request $request){
        
        
        $this->validate($request, [
            'dist_tier' => 'required',
            'headline' => 'required',
            'r_dates' => 'required',
            'press_body' => 'required',
            'sourceCompany' => 'required',
            'c_name' => 'required',
            'c_email' => 'required',
        ]);
     

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename. '_'. time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/pressImage', $fileNameToStore);
            }
            
            else {
            $fileNameToStore = 'noimage.jpg';
            }

        $press = new Press;

        $press->image =$fileNameToStore;
        $press->p_room = $request->input('p_room');
        $press->dist_tier = $request->input('dist_tier');
        $press->headline = $request->input('headline');
        $press->subhead = $request->input('subhead');
        $press->r_dates = $request->input('r_dates');
        $press->sourceCompany = $request->input('sourceCompany');
        $press->c_email = $request->input('c_email');
        $press->c_phone = $request->input('c_phone');
        $press->c_mobile = $request->input('c_mobile');
        $press->c_address = $request->input('c_address');
        $press->c_website = $request->input('c_website');
        $press->mapAddress = $request->input('mapAddress');
        $press->press_body = $request->input('press_body');
        $press->c_name = $request->input('c_name');
        // $press->user_id = auth()->user()->id;

        $press->save();

        return redirect()
                ->route('pressreleaseName')
                ->with('success', 'Press Create complete.');
    }

     /**
     * Change the current password
     * @param Request $request
     * @return Renderable
     */
    public function changePassword(Request $request)
    {       
        $user = Auth::user();
    
        $userPassword = $user->password;
        
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password'=>'password not match']);
        }

        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->back()->with('success','password successfully updated');
    }

    public function usersUpdate($id, Request $request){

        $user = Auth::user();
        
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->mobile = $request->mobile;

        $user->save();

        return redirect()->back()->with('success','Profile successfully updated');

    }

    public function show(Request $request, Press $press)
    {
        return $press;
    }

    public function viewProfile(){
        $profiles = Profile::all();
        return view('pages.viewprofile', ['profiles' => $profiles]);
    }

    public function businessProfile(){
        return view('pages.bprofile');
    }

    public function businessProfileCreate(Request $request){

        $profile = new Profile;

        $request->validate([
            'business_name' => 'required',
            'contact_email' => 'required',
            'website' => 'required',
        ]);

        $profile->business_name = $request->business_name;
        $profile->contact_email = $request->contact_email;
        $profile->website = $request->website;

        $profile->save();

        return redirect()
        ->route('profileViewprofile')
        ->with('success', 'Profile Createed Successfuly.');
       
    }

    public function guideline(){
        return view('pages.guideline');
    }
}
