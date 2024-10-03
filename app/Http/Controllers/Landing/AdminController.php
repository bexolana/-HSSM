<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('Admin.dashboard');
    }
    function UserList()
    {
        return view('Admin.UserList');
    }
    function ManagerList()
    {
        return view('Admin.ManagerList');
    }
    function ManagerProfile()
    {
        return view('Admin.ManagerProfile');
    }

    function role()
    {
        return view('Admin.role');
    }
    function NewOrders()
    {
        return view('Admin.NewOrders');
    }
    function SolvedOrders()
    {
        return view('Admin.SolvedOrders');
    }
    function OnprogressOrders()
    {
        return view('Admin.OnprogressOrders');
    }
    function NewTransaction()
    {
        return view('Admin.NewTransaction');
    }
    function solvedTransaction()
    {
        return view('Admin.solvedTransaction');
    }
    function Catagory()
    {
        return view('Admin.Catagory');
    }
    function Service()
    {
        return view('Admin.Service');
    }
    function Sales()
    {
        return view('Admin.Sales');
    }
    function SalesSoldOut()
    {
        return view('Admin.SalesSoldOut');
    }
    function SalesCatagory()
    {
        return view('Admin.SalesCatagory');
    }
    function Payment()
    {
        return view('Admin.Payment');
    }
    function SocialLinks()
    {
        return view('Admin.SocialLinks');
    }
    function Analytics()
    {
        return view('Admin.Analytics');
    }
    function TransactionReport()
    {
        return view('Admin.TransactionReport');
    }


}