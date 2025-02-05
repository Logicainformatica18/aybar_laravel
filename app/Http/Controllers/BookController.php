<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $Book = Book::orderBy('id','DESC')->get();
        return view('Book.Book', compact('Book'));
    }
    public function indexPublic()
    {
        $Book = Book::all();
        return view('Book.BookPublic', compact('Book'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePublic(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'names' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'document_type' => 'required|string|max:255',
            'document_number' => 'required|string|max:20',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'claim_type' => 'required|string|max:20',
            'claimed_amount' => 'required|numeric|min:0',
            'currency_type' => 'required|string|max:10',
            'office_address' => 'required|string|max:255',
            'product_or_service_description' => 'required|string',
            'complaint_type' => 'required|string|max:50',
            'complaint_details' => 'required|string|max:50',
            'complaint_request' => 'required|string|max:50',
        ]);




        try {

            $Book_one = Book::where("email", "=", $request->email)->where("state","!=", "Finalizado")->first();
            if ($Book_one) {
                return $Book_one;
            } else {

                $Book = new Book();
                $Book->firstname = $request->firstname;
                $Book->lastname = $request->lastname;
                $Book->names = $request->names;
                $Book->address = $request->address;
                $Book->document_type = $request->document_type;
                $Book->document_number = $request->document_number;
                $Book->phone =  $request->code_country. $request->phone;
                $Book->email = $request->email;
                $Book->claim_type = $request->claim_type;
                $Book->claimed_amount = $request->claimed_amount;
                $Book->currency_type = $request->currency_type;
                $Book->office_address = $request->office_address;
                $Book->product_or_service_description = $request->product_or_service_description;
                $Book->complaint_type = $request->complaint_type;
                $Book->complaint_details = $request->complaint_details;
                $Book->complaint_request = $request->complaint_request;
                $Book->state = "Pendiente";
                $Book->save();
                $Book->ticket = 'TCK-' . str_pad($Book->id, 6, '0', STR_PAD_LEFT); // Genera un número de ticket con ceros
                $Book->save();

                $name = $request->names;
                $email = $request->email;

                Mail::raw("Estimado/a $name,

            📩 Hemos recibido su reclamo en nuestro sistema. Agradecemos su tiempo y confianza en nuestro servicio. 
            
            🎟️ *Número de Ticket:* $Book->ticket
            
            Nuestro equipo revisará su solicitud y se pondrá en contacto con usted a la brevedad para brindarle una respuesta. También puede hacer seguimiento a su reclamo utilizando este número de ticket.
            
            📧 Se ha enviado esta notificación a su correo para su referencia.
            
            Si tiene alguna consulta adicional, no dude en escribirnos.
            
            Atentamente,
            El equipo de ComexLat", function ($message) use ($name, $email) {
                    $message->to($email)
                        ->subject('Confirmación de Reclamo - ComexLat')
                        ->from('soporte@anthonycode.com', 'ComexLat');
                });

                return $Book;
            }
        } catch (\Exception $e) {
            return "Error al enviar el correo: " . $e->getMessage();
        }











        // Guardar en la base de datos

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
