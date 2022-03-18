<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
//        try {
//            $dbh = new \PDO('mysql:host=mysql;dbname=mysql', 'root', '123456');
//        }
//        catch (\PDOException $e) {
//            die("数据库连接失败" . $e->getMessage());
//        }
//        $sql="SELECT * FROM user ";
//
//        $rs=$dbh->query($sql);
//        $row=$rs->fetch();
//        echo '<pre>';var_dump($row);exit;

//        echo '<pre>';var_dump($dbh);exit;
        return view('pages.root');
    }
}
