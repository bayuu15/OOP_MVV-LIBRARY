<?php
require 'Controller.php';
require 'models/User.php';
require 'models/Book.php';


class DataPinjamanController extends Controller
{
    public static function index()
    {
        return self::view('views/dataPinjaman.php');
    }
}
DataPinjamanController::index();