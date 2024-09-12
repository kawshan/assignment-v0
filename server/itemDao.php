<?php

include_once ("db.php");
include_once ("item.php");


class ItemDao {

    public static function setData($row){
        $item = new item();

        $item->setId($row["id"]);
        $item->setTitle($row["title"]);
        $item->setBrand($row["brand"]);
        $item->setDescription($row["description"]);
        $item->setPrice($row["price"]);
        $item->setAvailability($row["availability"]);

        return $item;

    }

    static function getAll(){
        $items=array();

        $query="select * from item";
        $result=CommonDao::getResult($query);

        while ($row=$result->fetch_assoc()) {
            $item=ItemDao::setData($row);
            array_push($items,$item);
        }
        return $items;
    }



    static function insertItem($item){
        $query="insert into item (title,brand,description,price,availability) values ('".$item->title."','".$item->brand."','".$item->description."','".$item->price."','".$item->availability."')";
        return CommonDao::getResult($query);
    }


    static function updateItem($item){
//        $query="update item set title='".$item->title."'where id='".$item->id."'";
          $query="update item set title = '".$item->title."' ,brand='".$item->brand."', description='".$item->description."', price='".$item->price."' ,availability='".$item->availability."' where id=".$item->id;
    }




    static function getById($id){
        $item=null;
        $query="select * from item where id=$id";
        $result=CommonDao::getResult($query);


        if ($row=$result->fetch_assoc()) {
            $item=ItemDao::setData($row);
        }
        return $item;

    }


static function deleteItem($id){
        $query="delete from item where id=".$id;
        return CommonDao::getResult($query);
}



































}
?>
