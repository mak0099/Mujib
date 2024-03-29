<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Model\District;
use App\Model\Thana;
use App\Model\Village;
use App\Model\PoliceStation;
use App\User;
use App\Model\ProfessionType;
use App\Model\Gallary;
use App\Model\Advertisement;
use App\Http\Resources\AdvertisementResource;
use App\Model\UserInstitutions;

class HomeController extends Controller
{
    
    public function index(){
        $view = view('panel.public.index');
        $view->with('ControllerName', "HomeController");
        return $view;
    }
    public function komitishomuho(){
        $view = view('panel.public.komiti');
        $view->with('ControllerName', "HomeController");
        return $view;
    }
    public function karjokrom(){
        $view = view('panel.public.karjokrom');
        $view->with('ControllerName', "HomeController");
        return $view;
    }
    public function news(){
        $view = view('panel.public.news');
        $view->with('ControllerName', "NewsController");
        return $view;
    }
    public function newsdetail($id)
    {
      $view = view('panel.public.news_detail');
      $view->with('ControllerName', "NewsDetailController");
      $view->with('detailId', $id);
      return $view;
    }
    public function kroibikroi(){
        $view = view('panel.public.kroibikroi');
        $view->with('ControllerName', "HomeController");
        return $view;
    }
    public function biggopti(){
        $view = view('panel.public.biggopti');
        $view->with('ControllerName', "HomeController");
        return $view;
    }
    public function motamot(){
        $view = view('panel.public.motamot');
        $view->with('ControllerName', "MotamotController");
        return $view;
    }
    public function motamotdetail($id)
    {
      $view = view('panel.public.motamot_detail');
      $view->with('ControllerName', "MotamotDetailController");
      $view->with('detailId', $id);
      return $view;
    }
    public function publicGallery(){
        $view = view('panel.public.gallery');
        $view->with('ControllerName', "GallaryController");
        return $view;
    }
    public function dashboard(){
        $view = view('panel.layout.dashboard');
        $view->with('ControllerName', "EmployeeController");
        return $view;
    }
    public function login(Request $request){
        if($request->redirect_url){
            Session::put('redirect_url', $request->redirect_url);
        }
        $view = view('panel.layout.login');
        $view->with('ControllerName', "AccountController");
        return $view;
    }
    public function register(){
        $view = view('panel.layout.register');
        $view->with('hasSlider', false);
        $view->with('hasMenu', false);
        $view->with('ControllerName', "AccountController");
        return $view;
    }
    public function attemptLogin(Request $request) {
        if (Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])) {
            if(Session::has('redirect_url')){
                return redirect(Session::pull('redirect_url'));
            }
            return redirect()->intended('/profile');
        }else if (Auth::attempt(['phone' => $request->input('username'), 'password' => $request->input('password')])) {
            if(Session::has('redirect_url')){
                return redirect(Session::pull('redirect_url'));
            }
            return redirect()->intended('/profile');
        } else {
            Session::put('alert-danger', 'Invalid username or password');
            return redirect()->back();
        }
    }
    public function attemptRegister(Request $request) {
        //  dd($request->all());
        $this->validate($request, [
            'full_name' => 'required|min:4',
            'phone' => 'required|unique:users',
            'password' => 'required|confirmed|min:4',
        ]);
        $user = new User();
        $user->fill($request->input());
        if($request->new_village_name){
            $village = new Village();
            $village->name = $request->new_village_name;
            $village->district_id = $request->district_id;
            $village->thana_id = $request->thana_id;
            $village->police_station_id = $request->police_station_id;
            $village->save();
            $user->village_id = $village->id;
        }
        $user->password = bcrypt($request->password);
        $user->save();
        $user->assignRole('user');
        $user_institution = new UserInstitutions();
        $user_institution->ProfessionTypeId = $request->ProfessionTypeId;
        $user->institution()->save($user_institution);
        Session::put('alert-success', 'Registration successfull! Please login.');
        return redirect()->route('login');
    }
    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
    public function GetDistrict()
    {
        $districts = District::orderBy('name')->get();
        return response()->json($districts);
    }
    public function GetThana(Request $request)
    {
        $thanas = Thana::where('district_id', $request->districtId)->orderBy('name')->get();
        return response()->json($thanas);
    }
    public function GetPoliceStation(Request $request)
    {
        $policestations = PoliceStation::where('thana_id', $request->thanaId)->orderBy('name')->get();
        return response()->json($policestations);
    }

    public function GetVillage(Request $request)
    {
        $villages = Village::where('police_station_id', $request->policeStationId)->orderBy('name')->get();
        return response()->json($villages);
    }
    public function GetProfessionTypeCbo()
    {
        $professions = ProfessionType::all();
        return response()->json($professions);
    }
    public function GetUserInstructionList()
    {
        $user = Auth::user();
        return response()->json($user->institution);
    }
    public function GetPublicGallary(){
        $gallaries = Gallary::orderBy('id', 'desc')->get();
        return response()->json($gallaries);
    }
    public function GetPublicAdvertise($take){
        return AdvertisementResource::collection(Advertisement::orderBy('id', 'desc')->paginate($take ?? 10));
    }
    public function CheckUserExist(Request $request){
        $user_exist = User::where('phone', $request->phone)->exists();
        $data['message'] = '';
        $data['isExist'] = $user_exist;
        if($user_exist){
            $data['message'] = 'User already exist';
        }
        return $data;
    }
    public function AdvanceSearchUsers(Request $request){
        if($request->districtId){
            $obj_user = User::where('district_id', $request->districtId);
            if($request->thanaId != 'null'){
                $obj_user->where('thana_id', $request->thanaId);
                if($request->policeStationId != 'null'){
                    $obj_user->where('police_station_id', $request->policeStationId);
                    if($request->villageId != 'null'){
                        $obj_user->where('village_id', $request->villageId);
                    }
                }
            }
            $users = $obj_user->get();
            $data['user_count'] = $obj_user->count();
            $data['users'] = [];
            foreach($users as $key => $user){
                $data['users'][] =[
                    'FullName' => $user->full_name,
                    'VillageName' => $user->village ? $user->village->name : null,
                    'PoliceStationName' => $user->police_station ? $user->police_station->name : null,
                    'ThanaName' => $user->thana ? $user->thana->name : null,
                    'DistrictName' => $user->district ? $user->district->name : null,
                    'PhotoPath' => $user->photo_path,
                ];
            }
            return response()->json($data);
        } 
        return false;
    }
}
