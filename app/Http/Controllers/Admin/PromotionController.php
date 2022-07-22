<?php

namespace App\Http\Controllers\Admin;

use App\Models\Campains;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Deals;

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
    /**
     * Will return deals
     * 
     * @return mixed
     */
    public function deals()
    {
        return view('admin.pages.promotions.deals.index')->with([
            'deals' => Deals::orderBy('id', 'DESC')->get()
        ]);
    }
    /**
     * Will redirect new deal page
     * 
     * @return mixed
     */
    public function newDeal()
    {
        return view('admin.pages.promotions.deals.create_new');
    }
    /**
     * Will store new deal
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function storeNewDeal(Request $request)
    {
        try {
            if ($request->has('banner')) {
                $directory = "uploads/banner/";
                $image = $request->file('banner');
                $imageName = $image->getClientOriginalName();
                $extension = pathinfo($imageName, PATHINFO_EXTENSION);
                $imageName = date('mdYHis') . 'dealbanner.' . $extension;
                $image->move(public_path($directory), $imageName);
                $image = $directory . '' . $imageName;
                $banner = $image;
            } else {
                $banner = "";
            }

            $deal = new Deals;
            $deal->title = $request['title'];
            $deal->start_date = $request['start_date'];
            $deal->end_date = $request['end_date'];
            $deal->description = $request['description'];
            $deal->banner = $banner;
            $deal->save();
            toastNofication('success', 'New deal added successfully');
            return redirect()->route('admin.promotion.deals');
        } catch (\Exception $e) {

            return redirect()->back();
        }
    }
    /**
     * Will delete deal
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function deleteDeal(Request $request)
    {
        try {
            DB::beginTransaction();
            $deal = Deals::findOrFail($request['id']);
            $deal->delete();
            DB::commit();
            toastNofication('success', 'New deal added successfully');
            return redirect()->route('admin.promotion.deals');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
    /**
     * Will redirect edit deal page
     * 
     * @param Int $id
     * @return mixed
     */
    public function editDeal($id)
    {
        return view('admin.pages.promotions.deals.edit')->with([
            'deal' => Deals::findOrFail($id)
        ]);
    }
    /**
     * Will update deal 
     * 
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function updateDeal(Request $request)
    {
        try {
            $deal = Deals::findOrFail($request['id']);
            if ($request->has('banner')) {
                $directory = "uploads/banner/";
                $image = $request->file('banner');
                $imageName = $image->getClientOriginalName();
                $extension = pathinfo($imageName, PATHINFO_EXTENSION);
                $imageName = date('mdYHis') . 'dealbanner.' . $extension;
                $image->move(public_path($directory), $imageName);
                $image = $directory . '' . $imageName;
                $banner = $image;
            } else {
                $banner = $deal->banner;
            }


            $deal->title = $request['title'];
            $deal->start_date = $request['start_date'];
            $deal->end_date = $request['end_date'];
            $deal->description = $request['description'];
            $deal->status = $request['status'];
            $deal->banner = $banner;
            $deal->save();
            toastNofication('success', 'Deal updated successfully');
            return redirect()->route('admin.promotion.deals');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back();
        }
    }
}
