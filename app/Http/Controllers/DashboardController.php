<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data ['title'] = 'Dashboard';
        $data ['heading'] = 'Hi Mahabbub Alum,';
        return view('dashboard.index',$data);
    }

    public function form()
    {
        $data ['title'] = 'Form';
        $data ['heading'] = 'Mon compte';
        $data ['description'] = 'Modifer les informations';
        return view('dashboard.pages.form',$data);
    }

    public function calender()
    {
        $data ['title'] = 'Calender';
        $data ['heading'] = 'Planning des événements,';
        return view('dashboard.pages.calender',$data);
    }
}
