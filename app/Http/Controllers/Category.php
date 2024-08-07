<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CategoryPageRequest;
use App\Models\Categorys;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
class Category extends Controller
{
    //
    public function adduser(CategoryPageRequest $request){
        DB::beginTransaction();
        try {
            $data = new Categorys();
            $data->username = $request->username;
            $data->lastname = $request->lastname;
            $data->age = $request->age;
            $data->created_at = $request->created_at;
            $data->save();
            DB::commit();
            return response()->json(['message' => 'successful'], 201);
        
        } catch ( \Exception $e ) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 501);
        }
      
    }
    
}
