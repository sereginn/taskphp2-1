<?php
function News_GetAll()
{
    mysql_connect('taskphp2-1','root','');
    mysql_select_db('news');

    $sql='SELECT * FROM mynews';
    $res=mysql_query($sql);
    $result=[];
    while (false !== $row =mysql_fetch_assoc($res)){
        $result[]= $row;
    }
    return $result;

/*   return[
       ['title'=>'Новость1','path'=>'\news\new1.txt'],
       ['title'=>'Новость2','path'=>'\news\new2.txt'],
       ['title'=>'Новость3','path'=>'\news\new3.txt'],
         ];
*/
}