<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Passport;

class PassportController extends Controller
{
    public function save(Request $request)
    {
        $name = $request->data[0]['text'];
        $fname = $request->data[1]['text'];
        $tname = $request->data[2]['text'];
        $sex = $request->data[3]['text'];
        $birthday = $request->data[4]['text'];
        $city = $request->data[5]['text'];
        $series = $request->data[6]['text'];
        $giver = $request->data[7]['text'];
        $date_give = $request->data[8]['text'];
        $code = $request->data[9]['text'];

        $pass = new Passport();

        $pass->user_id = '2';
        $pass->name = $name;
        $pass->f_name = $fname;
        $pass->t_name = $tname;
        $pass->series = $series;
        $pass->number = '2';
        $pass->giver = $giver;
        $pass->date_birthday = $birthday;
        $pass->sex = $sex;
        $pass->place_birthday = $city;
        $pass->code = $code;
        $pass->date_giver = $date_give;

        $pass->save();

        return response()->json([
            'status'=>'success',
            'data' => $pass
        ]);

    }

    public function remove(Request $request)
    {
        $pass = Passport::where('id',$request['id'])->delete();
    }
}
