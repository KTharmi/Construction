<?php

namespace App\Http\Controllers\Estimator;

use App\Labourer;
use App\Material;
use App\Http\Requests\LabourerStoreRequest;
use App\Http\Requests\MaterialStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillController extends Controller
{
    public function labourercost()
    {
        return view('estimator.bill.labourerCost');
    }
    public function invoice()
    {
        return view('estimator.bill.invoice');
    }
}
