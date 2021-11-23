<?php

/*Thief*/

function experienceNextLevel ($level)
{
    $xp = "0";

    switch($level)
    {
        case 1:
            $xp = "1,250";
            break;
            
        case 2:
            $xp = "2,500";
            break;
            
        case 3:
            $xp = "5,000";
            break;
            
        case 4:
            $xp = "10,000";
            break;
            
        case 5:
            $xp = "20,000";
            break;
            
        case 6:
            $xp = "40,000";
            break;
            
        case 7:
            $xp = "80,000";
            break;
            
        case 8:
            $xp = "160,000";
            break;
            
        case 9:
            $xp = "320,000";
            break;
            
        case 10:
            $xp = "---";
            break;
                  
        default:
            $xp = "___";
            
    }
    
    return $xp;
}

/*
function savingThrowOption ($option)
{
    if(option == 1)
    {
        return 
    }
}*/


function singleSave ($level)
{
    
    $save = 0;

    switch($level)
    {
        case 1:
            $save = 14;
            break;
            
        case 2:
            $save = 13;
            break;
            
        case 3:
            $save = 12;
            break;
            
        case 4:
            $save = 11;
            break;
            
        case 5:
            $save = 10;
            break;
            
        case 6:
            $save = 9;
            break;
            
        case 7:
            $save = 8;
            break;
            
        case 8:
            $save = 7;
            break;
            
        case 9:
            $save = 6;
            break;
            
        case 10:
            $save = 5;
            break;
                  
        default:
            $save = 20;
            
    }
    
    return $save;
}

/*0=death
1=wands
2=paraluze
3=breath
4=spells*/
function savingThrowMatrix ($level)
{
    $savingThrows = array(13, 14, 13, 15, 16);
    
    if($level >=2 && $level <=3)
    {
        $savingThrows = array(12, 14, 12, 14, 15);
    }
    else if($level >=4 && $level <=5)
    {
        $savingThrows = array(11, 11, 11, 13, 14);
    }
    else if($level >=6 && $level <=7)
    {
        $savingThrows = array(10, 11, 10, 12, 13);
    }
    else if($level >=8 && $level <=9)
    {
        $savingThrows = array(9, 8, 9, 11, 12);
    }
    else if($level ==10)
    {
        $savingThrows = array(8, 8, 8, 10, 11);
    }
    
    return $savingThrows;
    
}

function thievery ($level)
{
    $skill = 2;
    
    if($level >=4 && $level <=6)
    {
        $skill = 3;
    }
    else if($level >=7 && $level <=9)
    {
        $skill = 4;
    }
    else if($level ==10)
    {
        $skill = 5;
    }
    
    return $skill;
    
}


?>
