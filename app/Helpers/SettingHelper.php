<?php

use App\Models\Setting;

if (!function_exists('DummyFunction')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function DummyFunction()
    {
        function Setting($name,$default=null)
        {
    
            return Setting::getByName($name,$default);
    
        }
    }
}
