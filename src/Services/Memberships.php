<?php

namespace TZK\Taiga\Services;

use TZK\Taiga\RestClient;
use TZK\Taiga\Service;

class Memberships extends Service
{

    public function __construct(RestClient $taiga)
    {
        parent::__construct($taiga, 'memberships');
    }


    public function getList(array $param)
    {
        return $this->get(null, $param);
    }


    public function create(array $data)
    {
        return $this->post(null, [], $data);
    }


    public function bulkCreate(array $data)
    {
        return $this->post(null, [], $data);
    }


    public function getById($id)
    {
        return $this->get($id);
    }


    public function getByToken($token)
    {
        return $this->get($token);
    }


    public function edit($id, array $data)
    {
        return $this->put($id, [], $data);
    }


    public function remove($id)
    {
        return $this->delete($id);
    }


    public function resendInvitation($id)
    {
        return $this->post(sprintf('%s/resend_invitation', $id));
    }
}