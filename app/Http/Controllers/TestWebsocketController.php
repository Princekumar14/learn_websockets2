<?php

namespace App\Http\Controllers;

use App\Events\PrivateWebsocketEvent;
use App\Events\testWebsocketEvent;
use Illuminate\Http\Request;

class TestWebsocketController extends Controller
{
    public function adminpage(){
        
    }
    public function testwebsocket(){
        event(new testWebsocketEvent);

    }
    public function privatewebsocket(){
        event(new PrivateWebsocketEvent);
    }
}
