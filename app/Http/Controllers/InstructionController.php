<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class InstructionController extends Controller {
    public function index() {
        return [
            "Welcome this is Instruction"
        ];
    }

    public function type() {
        return [
            "status" => 1,
            "data" => [
                [
                    "id" => 1,
                    "name" => "Logistic Instruction"
                ],
                [
                    "id" => 2,
                    "name" => "Transport Instruction"
                ],
                [
                    "id" => 3,
                    "name" => "Admin Instruction"
                ],
            ]
        ];
    }

    public function vendor() {
        return [
            "status" => 1,
            "data" => [
                [
                    "id" => 1,
                    "name" => "Amarit % Associates Co Ltd"
                ],
                [
                    "id" => 2,
                    "name" => "PopBox Asia Services"
                ],
                [
                    "id" => 3,
                    "name" => "Logistic Expert Consulting"
                ],
                [
                    "id" => 4,
                    "name" => "IMS Logistics"
                ],
            ]
        ];
    }

    public function invoice() {
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

    public function customer() {
        return [
            "status" => 1,
            "data" => [
                [
                    "id" => 1,
                    "name" => "ADNOC-ONSHORE"
                ],
                [
                    "id" => 2,
                    "name" => "ADNOC-OFFSHORE"
                ],
                [
                    "id" => 3,
                    "name" => "BP-ONSHORE"
                ],
                [
                    "id" => 4,
                    "name" => "BP-OFFSHORE"
                ],
                [
                    "id" => 5,
                    "name" => "	CHEVRON-ONSHORE"
                ],
                [
                    "id" => 6,
                    "name" => "	CHEVRON-OFFSHORE"
                ],
            ]
        ];
    }

    public function po() {
        return [
            "status" => 1,
            "data" => [
                [
                    "id" => 1,
                    "number" => "5WX38FMSH2UYU"
                ],
                [
                    "id" => 2,
                    "number" => "TWHNU8Q57BGYL"
                ],
                [
                    "id" => 3,
                    "number" => "0J7AZKUBF69U0"
                ],
                [
                    "id" => 4,
                    "number" => "W14SP2TLWP7H0"
                ],
                [
                    "id" => 5,
                    "number" => "LGR0QHN5YD5YG"
                ],
                [
                    "id" => 6,
                    "number" => "H8CFO9K38QBCT"
                ],
                [
                    "id" => 7,
                    "number" => "DV8H2NVMIGBLE"
                ],
                [
                    "id" => 8,
                    "number" => "EBH4VCQAT12YF"
                ],
                [
                    "id" => 9,
                    "number" => "BOUTOEN9HWAH0"
                ],
                [
                    "id" => 10,
                    "number" => "XJV3XSLKZX0JZ"
                ],
            ]
        ];
    }
}