<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Notifications\CustomerNotification;
class CustomerController extends Controller
{
  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Customer = Customer::orderBy('id','DESC')->get();
        $Project = Project::orderBy('id','DESC')->get();
        return view('Customer.Customer', compact('Customer',"Project"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Customer = Customer::orderBy('id','DESC')->get();
        return view('Customer.Customertable', compact('Customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Customer = new Customer;
        $Customer->firstname = $request->firstname;
        $Customer->lastname = $request->lastname;
        $Customer->names = $request->names;
        $Customer->dni = $request->dni;
        $Customer->message = $request->message;
        $Customer->project_id = $request->project_id;
        $Customer->cellphone = $request->cellphone;
        $Customer->save();
        return $this->create();
    }
    public function storePublic(StoreCustomerRequest $request)
    {
        $data = $request->validated();
    //      funciona localmente con hos
        // $user = User::find(3); // Encuentra al usuario que recibirá la notificación
        // $user->notify(new CustomerNotification());
        //  $name_ =$request->names;
        // // //funciona en goddady
        $name = $data["names"];
        $email = $data["email"];
        
        try {
            Mail::raw("Estimado/a $name,\n\nGracias por registrarte como Socio Comercial en ComexLat. Nos complace informarte que tu registro ha sido exitoso. \n\nNuestro equipo revisará tu información y pronto nos pondremos en contacto contigo para brindarte más detalles y acompañarte en este proceso.\n\nSi tienes alguna consulta, no dudes en escribirnos.\n\nAtentamente,\nEl equipo de ComexLat", function ($message) use ($name, $email) {
                $message->to($email)
                        ->subject('Registro exitoso como Socio Comercial en ComexLat')
                        ->from('soporte@anthonycode.com', 'ComexLat');
            });
            
            $Customer = new Customer;
            //data es un array
            $Customer->names = $data["names"];
            $Customer->firstname = $data["firstname"];
            $Customer->dni = $data["dni"];
            $Customer->email = $data["email"];
            $Customer->cellphone = $data["code_country"]. $data["phone"];
         
    
            $Customer->save();
      
            return "Correo enviado con éxito";
        } catch (\Exception $e) {
            return "Error al enviar el correo: " . $e->getMessage();
        }
        

    


      
 
    
    }
    public function ProjectList()
    {
        $Project = Project::orderBy('id','DESC')->get();
        return $Project;
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $Customer = Customer::find($request->id);
        return $Customer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $Customer =  Customer::find($request->id);
        $Customer->firstname = $request->firstname;
        $Customer->lastname = $request->lastname;
        $Customer->names = $request->names;
        $Customer->dni = $request->dni;
        $Customer->message = $request->message;
        $Customer->project_id = $request->project_id;
        $Customer->cellphone = $request->cellphone;
        $Customer->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Customer::find($request->id)->delete();
        return $this->create();
    }
}
