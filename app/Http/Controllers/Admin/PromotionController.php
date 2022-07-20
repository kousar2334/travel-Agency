<?php

namespace App\Http\Controllers\Admin;

use App\Models\Campains;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    /**
     * Will return campains list
     *
     *@return mixed
     */
    public function campains()
    {
        return view('admin.pages.promotions.campains.index')->with([
            'campains' => Campains::orderBy('id', 'DESC')->get()
        ]);
    }
    /**
     * Redirect to new campain page
     * 
     * @return mixed
     */
    public function newCampain()
    {
        return view('admin.pages.promotions.campains.new_campain');
    }
    /**
     * Will store new campain data
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function storeNewCampain(Request $request)
    {
        try {
            if ($request->has('banner')) {
                $directory = "uploads/banner/";
                $image = $request->file('banner');
                $imageName = $image->getClientOriginalName();
                $extension = pathinfo($imageName, PATHINFO_EXTENSION);
                $imageName = date('mdYHis') . 'banner.' . $extension;
                $image->move(public_path($directory), $imageName);
                $image = $directory . '' . $imageName;
                $banner = $image;
            } else {
                $banner = "";
            }

            $campain = new Campains;
            $campain->title = $request['title'];
            $campain->banner = $banner;
            $campain->save();
            toastNofication('success', 'New campain added successfully');
            return redirect()->route('admin.promotion.campain');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
    /**
     * Will delete a campain
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function deleteCampain(Request $request)
    {
        try {
            DB::beginTransaction();
            Campains::findOrFail($request->id)->delete();
            DB::commit();
            toastNofication('success', 'Campain deleted successfully');
            return redirect()->route('admin.promotion.campain');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
