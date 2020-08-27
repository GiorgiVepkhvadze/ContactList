<?php

namespace App\Repositories\Contacts;

use App\Contacts;

class EloquentContacts implements ContactsRepository
{

    private $model;

    public function __construct(Contacts $model)
    {
      $this->model = $model;

    }


    public function getAll()
    {
        return $this->model->all();

    }

    public function getById($id)
    {

        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {

        $students = $this->getById($id);

        $students->update($attributes);

        return $students;

    }



    public function findcontactbyname($search_value)
    {
        return Contacts::where('contact_name', $search_value)->firstOrFail();
    }



    public function findcontactbyphone($search_value)
    {

        return Contacts::where('contact_number', $search_value)->firstOrFail();
    }




    public function delete($id)
    {

        $this->getById($id)->delete();

        return true;



    }
}
