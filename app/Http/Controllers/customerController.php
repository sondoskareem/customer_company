<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Company;
use App\Events\NewUserHasRegisterdEvent;
use Illuminate\Support\Facades\Mail;
use App\Mail\WellcomeNewUserMail;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;



class customerController extends Controller
{
    private function validateRequest(){

        return request()->validate([
            'name' =>'required|min:3',
            'email' =>'required|email',
            'active' =>'required',
            'company_id'=>'required',
            'image' => 'sometimes|file|image|max:5000'
        ]) ;
    }
    public function index(){

        $customers = Customer::with('company')->paginate(12); ///so that it didn't make extra query
        return view('customers/index' , compact('customers'));

    }

    public function create(){
        $companies = Company::all();
        $customer = new Customer();
        return \view('customers.create' , \compact('companies' ,'customer'));
    }

    public function store(){
        $this->authorize('create' , Customer::class);

        $customer = Customer::create($this->validateRequest());
        $this->storeImage($customer);
        event(new NewUserHasRegisterdEvent($customer));

        return redirect('customers');
    }

    public function show(Customer $customer){
        $this->authorize('view' , $customer);

    //   $customer = Customer::where('id',$customer)->firstOrFail();
      return \view('customers.show' , \compact('customer'));
    }

    public  function edit(Customer $customer){
        $companies = Company::all();
        return \view('customers.edit' , \compact('customer' , 'companies'));
    }

    public function update(Customer $customer){

        $customer->update($this->validateRequest());
        $this->storeImage($customer);
        return \redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer){

        $this->authorize('delete' , $customer);
        $customer->delete();
        return \redirect('customers');
    }



    private function storeImage($customer){
        if(request()->has('image')){
            $customer->update([
                'image'=>request()->image->store('upload' , 'public')
            ]);
            $image = Image::make(public_path('storage/' . $customer->image))->fit(200 , 200);
            $image->save();
        }
    }

}
