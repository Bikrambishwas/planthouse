<?php

namespace App\Repository\Backend\Admin;

use App\Models\Admin\Admins;
use App\Repository\Backend\AdminInterface;

class Admin implements AdminInterface
{
    protected $admin;

    public function __construct(Admins $admin)
    {
        $this->admin = $admin;
    }


    public function getById($memberid)
    {
        return $this->admin->where('id', $memberid)->first();
    }


    public function getByEmail($email)
    {
        return $this->admin->where('email', $email)->first();
    }

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function getAll()
    {
        return $this->admin->latest();
    }

    /**
     * create a
     *
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->admin->create($data);
    }
    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */

    public function update($id, array $data)
    {
        return $this->admin->find($id)->update($data);
    }

    /**
     * Deletes a post.
     *
     * @param int
     */
    public function delete($id)
    {
        return    $this->admin->find($id)->delete();
    }
}
