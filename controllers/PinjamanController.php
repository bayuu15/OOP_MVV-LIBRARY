<?php
require 'Controller.php';
require 'models/User.php';
require 'models/Book.php';


class PinjamanController extends Controller{
    public static function index(){
        return self::view('views/pinjaman.php');
    }
}
PinjamanController::index();