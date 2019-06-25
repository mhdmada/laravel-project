<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('version', function () {
    $this->comment("versi 1.0 - Projek ini dibuat oleh Muhammad Mada ");
});

Artisan::command('quote', function () {
    $this->comment("                          
          |U|                             
          | |                             
          | |                             
         _| |_                            
        | | | |-.                    
       /|     ` |                        
      | |       |                 
      |         |                      
      \         /                   
       |       |                     
       |       |   

    	");
});