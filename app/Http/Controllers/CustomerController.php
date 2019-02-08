<?php

namespace App\Http\Controllers;

use App\Users;
use App\Types;
use App\Profiles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    /**
     * Returns all the data
     *
     * @return void
     */

    public function index(Request $request)
    {

        return response()->json([
            'userDetails' => Users::join('profiles','profiles.user_id', '=','users.id')
            ->join('types','types.id','=','profiles.types_id')
            ->select('profiles.id','id_number','first_name','last_name','profiles.value','types.type','types.description')
            ->get(),
        ]);

    }
    /**
     * Creates new data
     *
     * @return void
     */

    public function store(Request $request)
    {
        return response()->json([
            Types::create([
                'type' => $request->type,
                'description' => $request->description
            ]),
            Users::create([
                'id_number' => $request->id_number,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name
            ]),
            Profiles::create([
                'profiles.user_id' => Users::orderBy('id', 'desc')->first()->id,
                'profiles.types_id' => Types::orderBy('id', 'desc')->first()->id,
                'profiles.value' =>$request->value,
            ])
        ]);

    }

    /**
     * retrieves specific data
     *
     * @return void
     */

    public function show(Request $request)
    {
        return response()->json([
            'userDetails' => Profiles::find($request->id)
            ->join('types','types.id','=','profiles.types_id')->where('types.id',Types::orderBy('id', 'desc')->first()->id)
            ->join('users','users.id','=','profiles.types_id')->where('users.id',Users::orderBy('id', 'desc')->first()->id)
            ->select('profiles.id','id_number','first_name','last_name','profiles.value','types.type','types.description')
            ->get()
        ]);       

    }

    /**
     * Updates existing data
     *
     * @return void
     */

    public function update(Request $request)
    {
       
        return response()->json([
            Profiles::where('id',$request->id)->update([
                'value' => $request->value
            ]),
            Types::where('id',Profiles::where('types_id',$request->id)->first()->id)->update([
                'type' => $request->type,
                'description' => $request->description
            ]),
            Users::where('id',Profiles::where('user_id',$request->id)->first()->id)->update([
                'id_number' => $request->id_number,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name
            ])
        ]);
    }

    /**
     * Deletes existing data
     *
     * @return void
     */

    public function delete(Request $request)
    {
        return response()->json([
            Profiles::find($request->id)->delete(),
            Types::find($request->id)->delete(),
            Users::find($request->id)->delete()
        ]);
    }

}
