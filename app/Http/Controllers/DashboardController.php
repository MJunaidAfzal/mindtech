<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;



class DashboardController extends Controller
{
    public function index()
    {
        $data ['title'] = 'Dashboard';
        $data ['heading'] = 'Hi! ' . Auth::user()->name;
        return view('dashboard.index',$data);
    }

    public function form()
    {
        $data ['title'] = 'Form';
        $data ['heading'] = 'Mon compte';
        $data ['description'] = 'Modifer les informations';
        $data ['user'] = User::where('id',auth()->user()->id)->first();
        return view('dashboard.pages.form',$data);
    }

    public function profileEdit(Request $request)
{
    $user = auth()->user();


    $directory = public_path('upload/profile');
    if (!file_exists($directory)) {
        mkdir($directory, 0755, true);
    }

    if ($request->hasFile('image')) {
        if ($user->image) {
            @unlink($directory . '/' . $user->image);
        }

        $image = $request->file('image');
        $imageName = 'profile-' . time() . '.' . $image->getClientOriginalExtension();
        $image->move($directory, $imageName);

        $user->image = $imageName;
    }

    $user->name = $request->input('name');
    $user->company_name = $request->input('company_name');
    $user->phone = $request->input('phone');
    $user->email = $request->input('email');
    $user->vat_number = $request->input('vat_number');

    $user->save();

    return redirect()->back()->with('success', 'Profile Updated Successfully!');
}



    public function calender()
    {
        $data ['title'] = 'Calender';
        $data ['heading'] = 'Planning des événements,';
        return view('dashboard.pages.calender',$data);
    }

    public function table()
    {
        $data ['title'] = 'Table';
        $data ['heading'] = 'Participer a un événement,';
        return view('dashboard.pages.table',$data);
    }


}
