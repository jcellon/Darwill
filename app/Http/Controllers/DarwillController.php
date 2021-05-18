<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OfficeTerritory;
use Illuminate\Support\Facades\DB;

class DarwillController extends Controller
{
    public function index()
    {
        $title = 'Darwill Application';
        return view('darwill')->with('title', $title);
    }
    public function territory()
    {
        $title = 'Office Territories';
        $datas = DB::select('select * from office_territories');

        return view('territory', ['datas' => $datas])->with('title', $title);
    }
    public function customer()
    {
        $title = 'Customer\'s Information';
        $datas = DB::select('select * from customers');

        return view('customer', ['datas' => $datas])->with('title', $title);
    }
    public function queryOne()
    {
        $title = 'Query One';
        $datas = DB::select(
            // 'select distinct any_value(owner_id) as owner_id, office_id, count(assigned_zipcode) as assigned_zipcode from office_territories group by office_id'
            'select distinct owner_id, max(office_id), count(assigned_zipcode) as assigned_zipcode from office_territories group by office_id'
        );

        return view('queryOne', ['datas' => $datas])->with('title', $title);
    }
    public function queryTwo()
    {
        $title = 'Query Two';
        $datas = DB::select(
            'select ot.assigned_zipcode, ot.office_id, ct.assigned_office_id from office_territories ot inner join customers ct on ot.assigned_zipcode = ct.customer_zipcode'
        );

        return view('queryTwo', ['datas' => $datas])->with('title', $title);
    }
    public function queryThree()
    {
        $title = 'Query Three';
        $datas = DB::select(
            'select count(distinct ct.customer_lastname) as customer_lastname, any_value(ot.owner_id) as owner_id, any_value(ot.office_id) as office_id from office_territories ot inner join customers ct on ot.office_id = ct.assigned_office_id group by ct.customer_lastname'
        );

        return view('queryThree', ['datas' => $datas])->with('title', $title);
    }
    public function queryFour()
    {
        $title = 'Query Four';
        $datas = DB::select(
            'select count(ct.customer_lastname) as customer_lastname, any_value(ct.assigned_office_id) as assigned_office_id from office_territories ot right join customers ct on ot.office_id = ct.assigned_office_id WHERE ot.owner_id is null and ot.office_id is null group by ct.customer_lastname'
        );

        return view('queryFour', ['datas' => $datas])->with('title', $title);
    }
}
