<?php

   function loadall_sp(){
    $sql = "select * from products";
   $listsp = pdo_query($sql);
   return $listsp;
   }
   function insert_sanpham($name,$price,$hinh,$weight,$mota,$soluong,$id_dm){
      $sql = "insert into products(name,price,image,weight,content,amount,cate_id) values('$name','$price','$hinh','$weight','$mota','$soluong','$id_dm')";
      pdo_execute($sql);
   }
   function loadone_sp($id){
      $sql = "select * from products where id=".$id;
      $listsp = pdo_query_one($sql);
   return $listsp;
   }
   function update_sp($id,$name,$price,$hinh,$weight,$mota,$soluong,$id_dm){
      if($hinh!="")
         $sql="update products set name='".$name."', price='".$price."',image='".$hinh."',weight='".$weight."', content='".$mota."',amount='".$soluong."',cate_id='".$id_dm."' where id=".$id;
      else
      $sql="update products set name='".$name."', price='".$price."',weight='".$weight."', content='".$mota."',amount='".$soluong."',cate_id='".$id_dm."' where id=".$id;
      pdo_execute($sql);
   }
   function delete_sanpham($id){
      $sql = "delete from products where id=" .$id;
      pdo_execute($sql);
   }
?>