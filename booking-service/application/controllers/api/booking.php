<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

use chriskacerguis\RestServer\RestController;

class Booking extends RestController{
    public function __construct(){
        parent::__construct();
        $this->load->model('Booking_model');
    }

    public function index_get(){
        $id = $this->get('id');
        if ($id === null){
            $booking = $this->Booking_model->getBooking();
        }else{
            $booking = $this->Booking_model->getBooking($id);
        }

        if($booking){
            $this->response([
                'status' => true,
                'data' => $booking
            ], RestController::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'id not found'
            ], RestController::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $id = $this->delete('id');

        if($id === null){
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ], RestController::HTTP_BAD_REQUEST);
        }else{
            if($this->Booking_model->deleteBooking($id) > 0){
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted'
                ], RestController::HTTP_OK);
            }else{
                $this->response([
                    'status' => false,
                    'message' => 'id not found!'
                ], RestController::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data = [
            'nama' => $this->post('nama'),
            'lapangan' => $this->post('lapangan'),
            'waktu' => $this->post('waktu'),
            'harga' => $this->post('harga'),
            'total_harga' => $this->post('total_harga'),
            'status' => $this->post('status')
        ];

        if($this->Booking_model->createBooking($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'new data booking has been created'
            ], RestController::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to create new data!'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id = $this->put('id');
        $data = [
            'nama' => $this->put('nama'),
            'lapangan' => $this->put('lapangan'),
            'waktu' => $this->put('waktu'),
            'harga' => $this->put('harga'),
            'total_harga' => $this->put('total_harga'),
            'status' => $this->put('status')
        ];

        if($this->Booking_model->updateBooking($data, $id) > 0){
            $this->response([
                'status' => true,
                'message' => 'data booking has been updated'
            ], RestController::HTTP_OK);
        }else{
            $this->response([
                'status' => false,
                'message' => 'failed to update data!'
            ], RestController::HTTP_BAD_REQUEST);
        }
    }

}

?>