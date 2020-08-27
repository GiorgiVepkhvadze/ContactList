<?php


namespace App\Repositories\Contacts;


interface ContactsRepository
{

    public function getAll();

    public function getById($id);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function delete($id);

    public function findcontactbyname($contact_name);

    public function findcontactbyphone($contact_number);



}
