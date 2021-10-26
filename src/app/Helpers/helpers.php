<?php

if (! function_exists('format_currency')) 
{
    function format_currency($amount)
    {
        return number_format($amount, 2, '.', ',');
    }
}

if (! function_exists('format_date')) 
{
    function format_date($date)
    {
        return date('d-m-Y', strtotime($date));
    }
}