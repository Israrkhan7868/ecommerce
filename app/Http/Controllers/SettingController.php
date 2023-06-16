<?php

namespace App\Http\Controllers;

use App\Models\setting;
use App\Models\sociallink;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function setting()
    {
        $setting = setting::first();
        return view('admin.setting', compact('setting'));
    }




    public function update(Request $request)
    {
        $setting = Setting::first();
        if (!$setting) {
            $setting = new setting;
        }
        $setting->name = $request->input('name');
        $setting->address = $request->input('address');
        $setting->contact = $request->input('contact');
        $setting->email = $request->input('email');
        

        if ($request->hasFile('logo')) {
            $files = $request->file('logo');

            foreach ($files as $file) {
                $imagename = time() . '_' . $file->getClientOriginalName();
                $file->move('logo', $imagename);
                $logos[] = $imagename;
            }

            $setting->logo = json_encode($logos);
        }


        if ($request->hasFile('icon')) {
            $files = $request->file('icon');
            $filenames = [];
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file->move('icon', $filename);
                $filenames[] = $filename;
            }
            $setting->icon = json_encode($filenames);
        }




        $setting->save();
        return redirect()->back();
    }

    public function unlinkicon($icon)
{
    // Get the setting record from the database
    $setting = Setting::first();

    if ($setting && $setting->icon) {
        // Check if the filename exists in the setting record
        $filenames = json_decode($setting->icon, true);
        if (in_array($icon, $filenames)) {
            // Get the path to the icon image file
            $icon_path = base_path('icon/' . $icon);

            // Delete the icon image file from the icon folder
            if (file_exists($icon_path)) {
                unlink($icon_path);
            }

            // Remove the filename from the setting record
            $filenames = array_diff($filenames, [$icon]);
            $setting->icon = json_encode(array_values($filenames));
            $setting->save();
        }
    }

    // Redirect back to the current page
    return back();
}



    public function unlinklogo($logo)
{
    // Get the setting record from the database
    $setting = Setting::first();

    if ($setting && $setting->logo) {
        // Check if the logo exists in the setting record
        $logos = json_decode($setting->logo, true);
        if (in_array($logo, $logos)) {
            // Get the path to the logo image file
            $logo_path = base_path('logo/' . $logo);

            // Delete the logo image file from the logo folder
            if (file_exists($logo_path)) {
                unlink($logo_path);
            }

            // Remove the logo name from the setting record
            $logos = array_diff($logos, [$logo]);
            $setting->logo = json_encode(array_values($logos));
            $setting->save();
        }
    }

    // Redirect back to the current page
    return back();
}


public function sociallink()
{
    $setting = sociallink::first();
    return view('admin.sociallink', compact('setting'));
}

public function updatesocial(Request $request)
    {
        $setting = sociallink::first();
        if (!$setting) {
            $setting = new sociallink;
        }
        
        $setting->facebook = $request->input('facebook');
        $setting->twitter = $request->input('twitter');
        $setting->linkedin = $request->input('linkedin');
        $setting->insta = $request->input('insta');
        $setting->save();
        return back();
    }

}
