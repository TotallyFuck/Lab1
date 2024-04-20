<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    public function infoServer(): JsonResponse
    {
        $php = phpversion();

        return response()->json([$php]);
    }

    public function infoUser(): JsonResponse
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        return response()->json([$ip, $userAgent]);
    }

    public function infoDatabase(): JsonResponse
    {
        $dbName = DB::getDatabaseName();
        $dbDriver = DB::getDriverName();

        return response()->json(['name' => $dbName, 'driver' => $dbDriver]);
    }
}
