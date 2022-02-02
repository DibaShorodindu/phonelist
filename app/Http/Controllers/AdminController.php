<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PhoneListImport;
use App\Exports\PhoneListExport;
use App\Models\PhoneList;


class AdminController extends Controller
{

    protected $data;
    protected $allData;

            // view admin Dashboard

    public function index()
    {
        return view('admin.dashboard');
    }

            //  admin Dashboard file upload


    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImportExport()
    {
        //return view('file-import');
    }

    /**
     * @return \Illuminate\Support\Collection
     * @throws \Illuminate\Validation\ValidationException
     */



    public function fileImport(Request $request)
    {
        Excel::import(new PhoneListImport, $request->file('file')->store('temp'));
        return back()->with('message', 'file imported Successfully');
    }

    /**
     * @return \Illuminate\Support\Collection
     */



    public function fileExport()
    {
        return Excel::download(new PhoneListExport, 'phoneList-collection.xlsx');
    }


            //  admin Dashboard view all data // data edit update delete


    public function manageData(){
        $this->allData = PhoneList::paginate(10);
        return view('admin.manage-data', ['allData' => $this->allData]);
    }
    /*public function getData(){
        $employees = Employee::
        return view('home', compact('employees'));
    }*/
    public function editData($id){
        $this->data = PhoneList::find($id);
        //return view('admin.edit-data', ['data'=>$this->data]);
    }
    public function updateData(Request $request){
        data::updatedata($request);
        return redirect('/manage-data')->with('message', 'data Updated Successfully');
    }
    public function deleteData($id){
        $this->data = PhoneList::find($id);
        /*if (file_exists($this->data->image)){
            unlink($this->data->image);
        }*/
        $this->data->delete();
        return redirect()->back()->with('message', 'data Deleted Successfully');
    }
}
