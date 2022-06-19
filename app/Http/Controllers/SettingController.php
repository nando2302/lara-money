<?php

namespace App\Http\Controllers;
// use Sess
use App\Models\Setting;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// use PhpParser\Node\Expr\New_;

class SettingController extends Controller
{
    public function index()
    {
        // $setting = Setting::first();
        return view('admin.setting.setting')->with('setting', Setting::first());
    }
    public function update(Request $request)
    {
        // dd($request->all());
        echo asset('');
        $setting = Setting::first();
        if ($request->file('logoCompany') == "") {

            $status = $setting->update([
                'appname' => $request->appname,
                'nameCompany' => $request->nameCompany,
                'phoneCompany' => $request->phoneCompany,
                'emailCompany' => $request->emailCompany,
                'addressCompany' => $request->addressCompany,
                'descCompany' => $request->descCompany,
            ]);
        } else if ($request->file('logoCompany') == $setting->logoCompany) {
            // $logo = $request->file('logo');
            $status = $setting->update([
                'appname' => $request->appname,
                'nameCompany' => $request->nameCompany,
                'phoneCompany' => $request->phoneCompany,
                'emailCompany' => $request->emailCompany,
                'addressCompany' => $request->addressCompany,
                'descCompany' => $request->descCompany,
            ]);
        } else {

            Storage::disk('local')->delete('public/images', $setting->logoCompany);
            $logoCompany = $request->file('logoCompany');
            $logoCompany->storeAs('public/images', $logoCompany->hashName());
            $status = $setting->update([
                'appname' => $request->appname,
                'nameCompany' => $request->nameCompany,
                'phoneCompany' => $request->phoneCompany,
                'emailCompany' => $request->emailCompany,
                'addressCompany' => $request->addressCompany,
                'descCompany' => $request->descCompany,
                'logoCompany' => $logoCompany->hashName()
            ]);
        }
        // $status->save();
        if ($status) {
            return back()->with('success', 'setting successsfully update');
        } else {
            return back()->with('success', 'setting successsfully update');
        }
        // dd(request());
        // $this->validate(request(), [
        //     'appname' => 'required',
        //     'nameCompany' => 'required',
        //     'phoneCompany' => 'required',
        //     'emailCompany' => 'required',
        //     'addressCompany' => 'required',
        //     'descCompany' => 'required'
        // ]);


        // $setting = Setting::first();
        // $setting->appname = 'tangkas exprees';
        // $setting->nameCompany = $request->nameCompany;
        // $setting->phoneCompany = $request->phoneCompany;
        // $setting->emailCompany = $request->emailCompany;
        // $setting->addressCompany = $request->addressCompany;
        // $setting->descCompany = $request->descCompany;
        // $setting->save();


        // Session::flash('success', 'Setting Updated');
        // return redirect()->back(); 
    }
}
