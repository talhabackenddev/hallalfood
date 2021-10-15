<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\ChefRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use function GuzzleHttp\Promise\all;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeChefRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 
        public function status()
    {
        $status = User::find(Auth::id());
        return view('backend.applicationstatus',compact('status'));
        
    }
    public function index(Request $request)
    {

        if ($request->ajax()) {
            return Datatables::of(User::where('role','chef')->get())
                ->addIndexColumn()
                ->editcolumn('certificate', function ($row) {
                    switch ($row->certificate) {
                        case 1:
                            return 'Yes';

                        case 0:
                            return 'No';
                    }
                })
                ->editcolumn('status', function ($row) {
                    switch ($row->status) {
                        case 1:
                            return 'Rejected';

                        case 0:
                            return 'Pending';
                        case 2:
                            return 'Accepted';
                    }
                })

                ->addColumn('action', function ($row) {
                    switch ($row->status) {
                        case 1 || 2:
                            return
                                '<a href="javascript:void(0)" data-toggle="tooltip"   data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"> Delete</a>';

                        case 0:
                            return
                                '<button data-id="' . $row->id . '" class="btn btn-success btn-sm btn-success  ml-1" id="accept">Accept</button>
              <a href="javascript:void(0)" data-toggle="modal" data-target="#edit_new_modal"  data-id="' . $row->id . '" data-original-title="Edit" class=" btn btn-danger btn-sm editProduct" >Reject</a>';
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = User::find($id);
        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $data = User::find($request->requestId);
        $data->update([
            $data->status = 1,
            $data->reject_reason = $request->reject_reason,
        ]);
        return response()->json(['success' => 'Status Update Successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = User::find($id);
        $employee->delete();
        return [
            'code' => 200,
            'message' => 'Record Delete successfully!'
        ];
    }

    public function accept(Request $request)
    {
        $data = User::find($request->id);
        $data->update([
            $data->status = 2,
        ]);
        return response()->json([
            'status' => 1,
            'message' => 'Successfully updated!',

        ]);
    }
}
