<?php


function loadall_sp(){
   $sql = "select * from products inner join category on products.cate_id=category.id_cate order by id ";
  $listsp = pdo_query($sql);
  return $listsp;
  }
  function loadall_sp_all(){
     $sql = "select * from products inner join category on products.cate_id=category.id_cate order by id";
    $listsp = pdo_query($sql);
    return $listsp;
    }
  function loadall_sp1(){
     $sql = "select * from products inner join category on products.cate_id=category.id_cate";
    $listsp = pdo_query($sql);
    return $listsp;
    }
   function loadsp_home(){
   $sql="select * from products inner join category on products.cate_id=category.id_cate where 1 order by name desc limit 0,8";
   $listsp = pdo_query($sql);
   return $listsp;
   }

   function loadsp_home_top5(){
      $sql="select * from products where 1 order by status desc limit 0,5";
      $listsp = pdo_query($sql);
      return $listsp;
      }

   function insert_sanpham($name,$price,$hinh,$mota,$soluong,$id_dm){
      $sql = "insert into products(name,price,image,content,amount,cate_id) values('$name','$price','$hinh','$mota','$soluong','$id_dm')";
      pdo_execute($sql);
   }

   function loadAll_sanpham($kyw="", $cate_id=0) {
      $sql = "select * from products inner join category on products.cate_id=category.id_cate where 1"; 
      if($kyw!=""){
          $sql.=" and name like '%".$kyw."%'";
      }
      if($cate_id>0){
          $sql.=" and cate_id ='".$cate_id."'";
      }
      $sql.=" order by id";
      $listsanpham = pdo_query($sql);
      return $listsanpham;
  }
   function loadAll_sanpham_home() {
      $sql = "select * from products where 1 order by id desc limit 0,9"; 
      $listsanpham = pdo_query($sql);
      return $listsanpham;
   }

   function loadAll_product() {
      $sql = "select * from products where 1 order by id desc limit 0,6"; 
      $listsanpham = pdo_query($sql);
      return $listsanpham;
   }
   function load_ten_dm($cate_id) {
      if($cate_id > 0){
         $sql = "select * from category where id_cate=".$cate_id;
         $dm = pdo_query_one($sql);
         extract($dm);
         return $name_cate;
      }else{
         return "";
      }
      $sql = "select * from category where id_cate=".$cate_id;
      $dm = pdo_query_one($sql);
      extract($dm);
      return $name_cate;
   }
   
   function loadAll_product1() {
      $sql = "select * from products where 1 order by id desc limit 0,6"; 
      $listsanpham = pdo_query($sql);
      return $listsanpham;
   }

   function loadone_sp($id){
      $sql = "select * from products inner join category on products.cate_id=category.id_cate where id=".$id;
      $listsp = pdo_query_one($sql);
   return $listsp;
   }
   function update_sp($id,$name,$price,$hinh,$mota,$soluong,$id_dm){
      if($hinh!="")
         $sql="update products set name='".$name."', price='".$price."',image='".$hinh."', content='".$mota."',amount='".$soluong."',cate_id='".$id_dm."' where id=".$id;
      else
      $sql="update products set name='".$name."', price='".$price."', content='".$mota."',amount='".$soluong."',cate_id='".$id_dm."' where id=".$id;
      pdo_execute($sql);
   }
   function delete_sanpham($id){
      $sql = "delete from products where id=" .$id;
      pdo_execute($sql);
   }
   function load_name_dm($cate_id){
      if($cate_id>0){
              $sql="select * from category where id=".$cate_id;
              $dm=pdo_query_one($sql);
              extract($dm);
              return $name_cate;
      }else{
           return "";
      }
  }
  function loadall_sp_cungloai($cate_id){
   $sql = "select * from products inner join category on products.cate_id=category.id_cate where cate_id=" .$cate_id;
  $listsp = pdo_query($sql);
  return $listsp;
  }