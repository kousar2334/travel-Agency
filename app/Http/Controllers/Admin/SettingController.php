<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GeneralSettings;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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
            toastNofication('success', 'Settings updated successfully');
            return redirect()->route('admin.setting.general');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
    /**
     * Will return email settings
     * 
     * @return mixed
     */
    public function emailSettings()
    {
        return view('admin.pages.settings.email');
    }
    /**
     * Will update email settings
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     * 
     */
    public function updateEmailSettings(Request $request)
    {
        try {
            setEnvironmentValue('MAIL_HOST', $request->host);
            setEnvironmentValue('MAIL_PORT', $request->port);
            setEnvironmentValue('MAIL_USERNAME', $request->username);
            setEnvironmentValue('MAIL_PASSWORD', $request->password);
            setEnvironmentValue('MAIL_ENCRYPTION', $request->encryption);
            setEnvironmentValue('MAIL_FROM_ADDRESS', $request->mail_form);
            toastNofication('success', 'Email settings updated successfully');
            return redirect()->route('admin.setting.email');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
    /**
     * Will return about us setting page
     * 
     * @return mixed
     */
    public function aboutUs()
    {
        return view('admin.pages.settings.about_us')->with(
            [
                'settings' => GeneralSettings::first()
            ]
        );
    }
    /**
     * Will update about us
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function updateAboutUs(Request $request)
    {
        try {

            DB::beginTransaction();
            DB::table('general_settings')->where('id', $request->id)
                ->update([
                    'about_us' => $request->about_us
                ]);
            DB::commit();
            toastNofication('success', 'About us updated successfully');
            return redirect()->route('admin.setting.about.us');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
    /**
     * Will test mail settings
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function testMail(Request $request)
    {
        try {
            $data = [
                'subject' => $request->subject,
                'email' => $request->mail_to,
                'content' => $request->mail_body
            ];

            Mail::send('mail.test_mail', $data, function ($message) use ($data) {
                $message->to($data['email'])
                    ->subject($data['subject']);
            });

            toastNofication('success', 'Mail sending success');
            return redirect()->route('admin.setting.email');
        } catch (\Exception $e) {
            toastNofication('error', 'Mail sending failed');
            return redirect()->back();
        }
    }
}
