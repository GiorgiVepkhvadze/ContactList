<?php

namespace App\Http\Controllers;

use App\Repositories\Contacts\ContactsRepository;
use Illuminate\Http\Request;


class MainController extends Controller
{

    private $contacts;


    public function __construct(ContactsRepository $contacts)
    {
        $this->contacts = $contacts;
    }

    public function index()
    {
        $data = $this->contacts->getAll();
        return view('welcome', [
            'data' => $data
        ]);
    }


    public function add_new(){
        return view('add_new');
    }



   public function contact_insert(Request $request){

        $data = $request->validate([
            'contact_name' => 'required',
            'contact_number' => 'required',
        ]);
   
        $data = $this->contacts->create($data);
        return redirect()->route('Home_page');

    }


    public function search(){
        return view('search');
    }



    public function edit_contact($id){

        $data = $this->contacts->getById($id);
        return view('edit', [
            'data' => $data
        ]);

    }


    public function contact_update(Request $request){

        $request->validate([
            'contact_name' => 'required',
            'contact_number' => 'required',
            'id' => 'required',
        ]);

        $data = $this->contacts->update($request->id, ['contact_name' => $request->contact_name, 'contact_number' => $request->contact_number]);
        return redirect()->route('Home_page');

    }




    public function findbynumber(Request $request){

        $request->validate([
            'contact_number' => 'required',
        ]);

        $data = $this->contacts->findcontactbyphone($request->contact_number);


        return view('result', [
            'data' => $data
        ]);

    }




    public function findbyname(Request $request){

        $request->validate([
            'contact_name' => 'required',
        ]);

        $data = $this->contacts->findcontactbyname($request->contact_name);
        return view('result', [
            'data' => $data
        ]);

    }




    public function drop_contact($id){

        $delete = $this->contacts->delete($id);
        return redirect()->back();
    }










}
