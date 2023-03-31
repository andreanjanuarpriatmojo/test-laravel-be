<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CostDetailController extends Controller {
    public function index() {
        return [
            "Welcome this is Cost Detail"
        ];
    }

    public function type() {
        return [
            "status" => 1,
            "data" => [
                [
                    "id" => 1,
                    "name" => "Cost Detail"
                ],
                [
                    "id" => 2,
                    "name" => "Send Detail"
                ],
                [
                    "id" => 3,
                    "name" => "Payment Detail"
                ],
            ]
        ];
    }

    public function uom() {
        return [
            "status" => 1,
            "data" => [
                [
                    "id" => 1,
                    "name" => "SHP"
                ],
                [
                    "id" => 2,
                    "name" => "GRT"
                ],
                [
                    "id" => 3,
                    "name" => "NRT"
                ],
                [
                    "id" => 4,
                    "name" => "LOA"
                ],
                [
                    "id" => 5,
                    "name" => "LWL"
                ],
            ]
        ];
    }

    public function currency() {
        return [
            "status" => 1,
            "data" => [
                [
                    "id" => 1,
                    "name" => "USD"
                ],
                [
                    "id" => 2,
                    "name" => "AED"
                ],
            ]
        ];
    }

    public function chargeto() {
        return [
            "status" => 1,
            "data" => [
                [
                    "id" => 1,
                    "name" => "MITO"
                ],
                [
                    "id" => 2,
                    "name" => "AMD"
                ],
                [
                    "id" => 3,
                    "name" => "Intel"
                ],
                [
                    "id" => 4,
                    "name" => "NVIDIA"
                ],
                [
                    "id" => 5,
                    "name" => "	IBM"
                ],
            ]
        ];
    }
}