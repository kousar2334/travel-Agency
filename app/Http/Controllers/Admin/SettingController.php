<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GeneralSettings;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    /**
     * Will return general settings
     * 
     * @return mixed
     */
    public function generalSettings()
    {
        return view('admin.pages.settings.general')->with(
            [
                'settings' => GeneralSettings::first()
            ]
        );
    }
    /**
     * Will update general Settings
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function updateGeneralSettings(Request $request)
    {
        try {
            if ($request->has('logo')) {
                $directory = "uploads/general/";
                $image = $request->file('logo');
                $imageName = $image->getClientOriginalName();
                $extension = pathinfo($imageName, PATHINFO_EXTENSION);
                $imageName = date('mdYHis') . 'logo.' . $extension;
                $image->move(public_path($directory), $imageName);
                $image = $directory . '' . $imageName;
                $logo = $image;
            } else {
                $logo = DB::table('general_settings')->where('id', $request->id)->first()->logo;
            }
            if ($request->has('favicon')) {
                $directory = "uploads/general/";
                $image = $request->file('favicon');
                $imageName = $image->getClientOriginalName();
                $extension = pathinfo($imageName, PATHINFO_EXTENSION);
                $imageName = date('mdYHis') . 'favicon.' . $extension;
                $image->move(public_path($directory), $imageName);
                $image = $directory . '' . $imageName;
                $favicon = $image;
            } else {
                $favicon = DB::table('general_settings')->where('id', $request->id)->first()->favicon;
            }
            DB::beginTransaction();
            DB::table('general_settings')->where('id', $request->id)
                ->update([
                    'logo' => $logo,
                    'favicon' => $favicon,
                    'site_name' => $request->site_name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'address' => $request->address
                ]);
            DB::commit();
            return redirect()->route('admin.setting.general');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
