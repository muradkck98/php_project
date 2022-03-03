<?php
if(isset($_GET["sayi"]))
{
    $sayi=$_GET["sayi"];
    control($sayi);

}
function control($sayi)
{
    if($sayi%3==0)
    {
        echo " Girdiginiz sayi 3'e bolunebilir";
    }
    else
    {
        while(true)
        {
            if($sayi%3==0) break;
            else $sayi++;
        }
        echo "Girdiniz sayi 3e bolunemiyor,ilk bolunebildigi sayi:".$sayi;
    }

}

?>