<?php

class BookingController extends rooms_methods
{


    public function index()
    {
        $data['datas'] = $this->getRooms();
        view::load('booking', $data);

    }





}