<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // Usa o trait 'AuthorizesRequests' para adicionar funcionalidade de autorização aos controladores.
    use AuthorizesRequests;  

    // Usa o trait 'ValidatesRequests' para adicionar funcionalidade de validação aos controladores.
    use ValidatesRequests;   
}
