<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function settings(){
        $settings = DB::table('settings')->orderBy('name', 'asc')->paginate(100);

        $settingsCount = DB::table('settings')->get()->count();
        $page = 1;
        $search = "";

        return view('admin.system-management.settings.index', compact('settings', 'settingsCount', 'page', 'search'));
    }

    public function paginate($page){
        $settings = DB::table('settings')->orderBy('id', 'asc')->paginate(100,'*','page',$page);
        $settingsCount = DB::table('settings')->get()->count();
        $search = "";
        return view('admin.system-management.settings.index', compact('settings', 'settingsCount', 'page', 'search'));
    }

    

    public function search($page, $search){
        $tables = DB::table('settings')
            ->select('*')
            ->whereRaw("name LIKE '%{$search}%'")
            ->orderBy('id', 'asc')
            ->paginate(100,'*','page',$page);

        $tableCount = DB::table('settings')
            ->select('*')
            ->whereRaw("name LIKE '%{$search}%'")
            ->orderBy('id', 'asc')
            ->count();
        return view('admin.system-management.settings.index', compact('settings', 'settingsCount', 'page', 'search'));
    }


    public function add(){
        return view('admin.system-management.settings.add');
    }

    public function store(Request $request){
        $name = $request->name;
        $address = $request->address;
        $number = $request->number;
        $logo = $request->logo;
        $footer = $request->footer;
        $email = $request->email;
        $voidCode = $request->voidCode;
        
        $imagePath = null;
        if($logo != null){
            $filename = 'logo.' . $request->file('logo')->getClientOriginalExtension();
            $path = "images/ico/";
            $imagePath = $path.$filename;
            $request->file('logo')->move(public_path('storage/'.$path), $filename);
            // $imagePath = $request->file('logo')->storeAs('images/ico',$filename , 'public');

            DB::table('settings')->where('id', 1)->insert([
                'name' => $name,
                'address' => $address,
                'number' => $number,
                'logo' => $imagePath,
                'footer' => $footer,
                'void_code' => $voidCode,
                'slug' => Str::random(60),
                'email' => $email,
                'created_at' =>date('Y-m-d h:i:s'),
                'updated_at' =>date('Y-m-d h:i:s')
            ]);
        }else{
            DB::table('settings')->where('id', 1)->insert([
                'name' => $name,
                'address' => $address,
                'number' => $number,
                'footer' => $footer,
                'void_code' => $voidCode,
                'slug' => Str::random(60),
                'email' => $email,
                'created_at' =>date('Y-m-d h:i:s'),
                'updated_at' =>date('Y-m-d h:i:s')
            ]);
        }

        return redirect()->route('settings.index');
    }

    public function edit($slug){
        $settings = DB::table('settings')->where('slug', $slug)->first();
        return view('admin.system-management.settings.edit', compact('settings'));
    }

    public function update(Request $request){
        $name = $request->name;
        $address = $request->address;
        $number = $request->number;
        $logo = $request->logo;
        $footer = $request->footer;
        $email = $request->email;
        $slug = $request->slug;
        $voidCode = $request->voidCode;
        
        $imagePath = null;
        if($logo != null){
            $filename = 'logo.' . $request->file('logo')->getClientOriginalExtension();
            $path = "images/ico/";
            $imagePath = $path.$filename;
            $request->file('logo')->move(public_path('storage/'.$path), $filename);
            // $imagePath = $request->file('logo')->storeAs('images/ico',$filename , 'public');

            DB::table('settings')->where('slug', $slug)->update([
                'name' => $name,
                'address' => $address,
                'number' => $number,
                'logo' => $imagePath,
                'footer' => $footer,
                'void_code' => $voidCode,
                'email' => $email
            ]);
        }else{
            DB::table('settings')->where('slug', $slug)->update([
                'name' => $name,
                'address' => $address,
                'number' => $number,
                'footer' => $footer,
                'void_code' => $voidCode,
                'email' => $email
            ]);
        }

        return redirect()->route('settings.index')->withInput()->with('message', 'Successfully Updated');
    }
}
