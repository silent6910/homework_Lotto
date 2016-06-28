<?php
    header("content-type: text/html; charset=utf-8");
    // 法一 建立樂透陣列，從中搜尋,並將其取代成0
    $Lotto=array();
    for($i=0;$i<48;$i++)
    {
        $Lotto[$i]=$i+1;
    }
  /*  unset($Lotto[45]);
    unset($Lotto[19]);
    foreach($Lotto as $vot)
    echo $vot.'<br>' ;*/
/*oreach($Lotto as $vot)
echo $vot;*/
    for($i=0;$i<6;$i++)
    {
        $L=rand(1,48);
        if($Lotto[$L-1]!=0)
        {
        $Lotto[$L-1]=0;
        $p=$i+1;
        echo "第 $p 個號碼是$L".'<br>';
        }
        else 
            $i--;
    }
    echo "第二種作法".'<br>';
    // 第二種作法  如果有重複就不印出
    $Lotto2=array();
    for($i=0;$i<6;$i++)
    {
        $L=rand(1,48);
        if(!in_array($L,$Lotto2))
        {
            array_push($Lotto2,$L);
            $p=$i+1;
            echo "第 $p 個號碼是$L".'<br>';
        }
        else
            $i--;
    }
    //第三種作法 老師的作法
    echo "第三種作法".'<br>';
     $Lotto3=array();
    for($i=0;$i<48;$i++)
    {
        $Lotto3[$i]=$i+1;
    }
    for($i=0;$i<6;$i++)
    {
        $rand=rand(1+$i,48);
        $switch=$Lotto3[$rand-1];
        $Lotto3[$rand-1]=$Lotto3[$i];
        $Lotto3[$i]=$switch;
    }
    for($i=0;$i<6;$i++)
    {
        $p=$i+1;
        echo "第 $p 個號碼是".$Lotto3[$i].'<br>';
    }
    echo "驗證:";
    foreach($Lotto3 as $l)
    echo $l.",";
    
    
?>