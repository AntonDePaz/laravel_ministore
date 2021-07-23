<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

      
                
        return view('product.index');
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
        
        $validator = \Validator::make($request->all(),[
            'description' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]); 


       
      

        if(!$validator->passes()){
            
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
        //    $product = new products();
        //    $product->description = $request->description;
        //    $product->quantity = $request->quantity;
        //    $product->price = $request->price;
        //    $query = $product->save();


     $query =  products::updateOrCreate([
             'id' => $request->p_id],[
             'description' => $request->description, 
             'quantity' => $request->quantity,
             'price' => $request->price
            ]);    

           if(!$query){
             return response()->json(['code'=>0,'msg'=>'Something went wrong']);
           }
           else{
             return response()->json(['code'=>1,'msg'=>'Product Successfully Added!']);
           }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    public function getall(){

        $product = products::all();
        return DataTables::of($product)
                ->addIndexColumn()
                ->editColumn('price',function($row){
                    return '<b>&#8369;</b> '.$row['price']; 
                })
                ->addColumn( 'total' , function($row){
                    return '<b>&#8369;</b> '.number_format($row['quantity'] * $row['price'],2);
                })
                ->addColumn( 'actions' , function($row){
                    return '<div class="dropdown">
                                 <a href="#" class="btn dropdown-toggle" data-toggle="dropdown">
                                modify
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                            <li><a href="#" class="edit_product" data-id='.$row['id'].'> <span class="text-primary">  <i class="fa fa-pencil"></i> Edit </span></a></li>
                            <li><a href="#" class="del_product" data-id='.$row['id'].'><span class="text-danger"> <i class="fa fa-trash"></i> Delete</span> </a></li>
                            </ul>
                        </div>';
                } )->rawColumns(['price', 'total' , 'actions'])
                ->make(true);

               
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = products::find($id);
        //return view('product.index')->with('product',$product);

       // $country_id = $request->country_id;
        //$countryDetails = Country::find($country_id);
        return response()->json(['details'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        return 'adsasd';
        $validator = \Validator::make($request->all(),[
            'description' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]); 

        if(!$validator->passes()){
            
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
           $product =  products::find($id);
           $product->description = $request->description;
           $product->quantity = $request->quantity;
           $product->price = $request->price;
           $query = $product->save();

           if(!$query){
             return response()->json(['code'=>0,'msg'=>'Something went wrong']);
           }
           else{
             return response()->json(['code'=>1,'msg'=>'Product Successfully Updated!']);
           }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $query = products::find($id)->delete();

        if(!$query){
            return response()->json(['code'=>0,'msg'=>'Something went wrong']);
          }
          else{
            return response()->json(['code'=>1,'msg'=>'Product Successfully Deleted!']);
          }
    }
}
