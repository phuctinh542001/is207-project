<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Tracks;
use App\Models\Artists;
use App\Models\ThemeDetail;
use App\Models\User;


class PageController extends Controller
{

    public function getAllTracks() {
        $tracks = Tracks::with(["artists"])->get();
        return view('alltracks', compact('tracks'));
    }

    public function getHome() {
        $new = Tracks::with(["artists"])->orderBy('created_at', 'desc')->get();
        $topLike = Tracks::with(["artists"])->orderBy('like', 'desc')->get();
        $topRandom = Tracks::inRandomOrder()->get();
        $themeLove = ThemeDetail::with(['tracks'])->where('id_theme', 1)->get();
        $themeSchool = ThemeDetail::with(['tracks'])->where('id_theme', 2)->get();
        $genrevpop = Tracks::with(['artists'])->where('id_genre', 1)->get();
        $genreRomance = Tracks::with(['artists'])->where('id_genre', 2)->get();
        $artists = Artists::all();
        // print_r($themeSchool);
        // exit;
        return view('pages.home', compact('new', 'topLike', 'topRandom', 'artists', 'themeLove', 'themeSchool', 'genrevpop', 'genreRomance'));
    }

    public function getTheme() {
        $themeLove = ThemeDetail::with(['tracks'])->where('id_theme', 1)->get();
        $themeSchool = ThemeDetail::with(['tracks'])->where('id_theme', 2)->get();
        return view('pages.theme', compact('themeLove', 'themeSchool'));
    }

    public function getGenre() {
        $genrevpop = Tracks::with(['artists'])->where('id_genre', 1)->get();
        $genreRomance = Tracks::with(['artists'])->where('id_genre', 2)->get();
        return view('pages.genre', compact('genrevpop', 'genreRomance'));
    }
   
    public function getArtists() {
        $artists = Artists::all();
        return view('pages.artists', compact('artists'));
    }

    public function getArtistsDetail($art) {
        $artists = Artists::where('id', $art)->get();
        $artistsTracks = Tracks::with(['artists'])->where('id_artists', $art)->get();
        return view('pages.artistsdetail', compact('artists', 'artistsTracks'));
    }
    
    public function getAlbum() {
        $album1 = Tracks::with(['artists'])->where('id_album', 1)->get();
        $album2 = Tracks::with(['artists'])->where('id_album', 2)->get();
        return view('pages.album', compact('album1', 'album2'));
    }
    
    public function getEvent() {
        return view('pages.event');
    }

    public function getNews() {
        return view('pages.news');
    }
   
    public function getEvent1() {
        return view('pages.news1');
    }

    public function getEvent2() {
        return view('pages.news2');
    }

    public function getEvent3() {
        return view('pages.news3');
    }

    public function getSignUp() {
        return view('pages.signup');
    }
    
    public function getSignIn() {
        return view('pages.signin');
    }

    public function postSignUp(Request $req) {
        $this->validate($req,
            [
                'username' => 'required|unique:users,name', 
                'email' => 'required|email|unique:users,email', 
                'password' => 'required|min:6|max:20', 
                're_password' => 'required|same:password'
            ],
            [
                'username.unique' => 'T??n ????ng nh???p ???? t???n t???i',
                'username.required' => 'Vui l??ng nh???p t??n ????ng nh???p',
                'email.required' => 'Vui l??ng nh???p email',
                'email.email' => 'Kh??ng ????ng ?????nh d???ng email', 
                'email.unique'=>'Email ???? c?? ng?????i s??? d???ng', 
                'password.required' => 'Vui l??ng nh???p m???t kh???u',
                're_password.same' => 'M???t kh???u kh??ng gi???ng nhau',
                'password.min' => 'M???t kh???u ??t nh???t 6 k?? t???',
                'password.max' => 'M???t kh???u t???i ??a 20 k?? t???'
            ]);
            $user = new User(); 
            $user->name = $req->username; 
            $user->email = $req->email; 
            $user->password = Hash::make($req->password);
            $user->save();
            return redirect()->back()->with('success', 'T???o t??i kho???n th??nh c??ng');
    }

    public function postSignIn(Request $req) {
        $this->validate($req,
            [
                'username' => 'required', 
                'password' => 'required|min:6|max:20', 
            ],
            [
                'username.required' => 'Vui l??ng nh???p t??n ????ng nh???p',
                'password.required' => 'Vui l??ng nh???p m???t kh???u',
                'password.min' => 'M???t kh???u ??t nh???t 6 k?? t???',
                'password.max' => 'M???t kh???u t???i ??a 20 k?? t???'
            ]);
            $credentials = array('name'=>$req->username, 'password'=>$req->password);
            if (Auth::attempt($credentials)) {
                return redirect()->back()->with('success', '????ng nh???p th??nh c??ng');
            }
            else {
                return redirect()->back()->with('fail', '????ng nh???p th???t b???i');
            }
    }

    public function getSignOut() {
        Auth::logout();
        return redirect()->route('home');
    }
}
