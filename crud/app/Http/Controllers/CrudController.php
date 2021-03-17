<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    //
    /*****************
 * @function name:register
 * @function:inserting  details
 * @author:Varsha s
 * @Date:17/03/2021
 * ***************/
    function register(Request $req)
    {
    
        $req->validate([
           'firstname'=>'required',
           'lastname'=>'required',
           'age'=>'required',
           'gender'=>'required',
           'address'=>'required',
           'phone'=>'required',

          'email'=>'required|email',
          'password'=>'required|min:5|max:12'
          ]);
    
    
    
    $data=new Register ;
        $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->age=$req->age;
        $data->gender=$req->gender;
        $data->address=$req->address;
        $data->phone=$req->phone;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $query=$data->save();
        if($query)
        {
            return back()->with('sucess','sucessfully registered');
        }
        else{
            return back()->with('fail','something wrong');
        }
        
    }
    
  /*****************
 * @function name:view
 * @function:viewing details
 * @author:Varsha s
 * @Date:17/03/2021
 * ***************/
function view()
{   $data=DB::table('registers')
    ->get();

    return view('view',['data'=>$data]);
}
/*****************
 * @function name:delete
 * @function:delete action
 * @author:Varsha s
 * @Date:17/03/2021
 * ***************/
function delete($id)
{
    $data=Register::find($id);
    $data->delete();

}
/*****************
 * @function name:updateview
 * @function:viewing updating form
 * @author:Varsha s
 * @Date:17/03/2021
 * ***************/
public function updateview($id)
{
    $data=Register::find($id);
    
   return view('updateview',['data'=>$data]);
}
/*****************
 * @function name:update
 * @function:updating action
 * @author:Varsha s
 * @Date:17/03/2021
 * ***************/
public function update(Request $req)
{
    $data=Register::find($req->id);
    $data->firstname=$req->firstname;
    $data->lastname=$req->lastname;
    $data->age=$req->age;
    $data->gender=$req->gender;
    $data->address=$req->address;
    $data->phone=$req->phone;
    $data->email=$req->email;
    $data->save();
    return redirect('view');

    }
}
