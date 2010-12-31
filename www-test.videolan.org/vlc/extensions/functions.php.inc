<?php

//func to validate db querry
if (!function_exists("GetSQLValueString")) {
    function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") {
        $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

        switch ($theType) {
        case "text":
            $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
            break;
        case "long":
        case "int":
            $theValue = ($theValue != "") ? intval($theValue) : "NULL";
            break;
        case "double":
            $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
            break;
        case "date":
            $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
            break;
        case "defined":
            $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
            break;
        }
        return $theValue;
    }
}

//main time func, supports foreign format, default: show 'ago' time
if (!function_exists("t")) {
    function t($date, $f='') {
        if(($date!='0000-00-00') && ($date!='') && ($date!='0000-00-00 00:00:00')) {
            $h=substr($date,11,2);
            $m=substr($date,14,2);
            $s=substr($date,17,2);
            $mn=substr($date,5,2);
            $d=substr($date,8,2);
            $y=substr($date,0,4);
            $date=mktime($h, $m, $s, $mn, $d, $y);
            $diffrence = time()-$date;
            $minute =  time() - 60;
            $hour =  time() - (60 * 60);
            $day =  time() - (24 * 60 * 60);
            $week =  time() - (7 * 24 * 60 * 60);

            if($f=='') {
                if($date>$minute) {

                    if($diffrence<10) echo 'few second ago';
                    elseif($diffrence<50) echo $diffrence.' seconds ago';
                    else echo 'about a minute ago';

                } elseif($date>$hour) {

                    if(round($diffrence/60)==1) echo 'a minute ago';
                    elseif(round($diffrence/60)<50) echo round($diffrence/60).' minutes  ago';
                    else echo 'about an hour ago';

                } elseif($date>$day) {

                    if(round($diffrence/(60*60))==1) echo 'an hour ago';
                    elseif(round($diffrence/(60*60))<24) echo round($diffrence/(60*60)).' hours  ago';
                    else echo 'yesterday';

                } elseif($date>$week) {

                    if(round($diffrence/(60*60*24))==1) echo 'yesterday';
                    elseif(round($diffrence/(60*60*24))<7) echo round($diffrence/(60*60*24)).' days  ago';
                    else echo 'a week ago';

                } elseif((date("y", $date)) == (date("y", time()))) echo date("jS M", $date);
                else echo date("D, jS M y", $date);
            } elseif($f=='noago') {
                if((date("dmy", $date)) == (date("dmy", time()))) echo date("g:i a", $date);
                elseif((date("y", $date)) == (date("y", time()))) echo date("jS M", $date);
                else echo date("D, jS M y", $date);
            } else echo date($f, $date);
        }
    }
}

//main date, supports foreign format
if (!function_exists("d")) {
    function d($date, $f='') {
        if(($date!='0000-00-00') && ($date!='') && ($date!='0000-00-00 00:00:00')) {
            $mn=substr($date,5,2);
            $d=substr($date,8,2);
            $y=substr($date,0,4);
            $date=mktime(0, 0, 0, $mn, $d, $y);

            if($f=='') {
                if((date("y", $date)) == (date("y", time()))) echo date("jS M", $date);
                else echo date("D, jS M y", $date);
            } else echo date($f, $date);
        }
    }
}

//if not already exists, get the given url variable and assign it to a variable preceeded by 'get'
if (!function_exists("getVariable")) {
    function getVariable() {
        foreach(func_get_args() as $name) {
            global ${'get'.ucfirst($name)};
            if(!isset(${'get'.ucfirst($name)}) && isset($_GET[$name]) && ($_GET[$name]!='')) ${'get'.ucfirst($name)} = htmlentities($_GET[$name], ENT_QUOTES);
        }
    }
}

function addArg($url,$arg,$value) {
    if(!isset($value) or empty($value))
        return $url;
    if( empty($url) )
        return "?$arg=$value";
    else
        return "$url&$arg=$value";
}
?>
