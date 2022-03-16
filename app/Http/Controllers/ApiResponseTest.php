<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiResponseTest extends Controller
{
    public $token;

    public function __construct()
    {
        $this->token = "BEbZiyEO8Ax5vFf3s21C4EshXFlx";
    }

    public function login(Request $request)
    {
        if (
            $request->email == "marcelo.d.schneider@gmail.com" &&
            $request->password == "15061506"
        ) {
            return response()->json(
                [
                    "auth" => ["token" => $this->token],
                ],
                200
            );
        }
        return response()->json(
            [
                "auth" => ["error" => "Email o password non valide"],
            ],
            401
        );
    }

    public function recovery(Request $request)
    {
        if ($request->email == "marcelo.d.schneider@gmail.com") {
            return response()->json(
                [
                    "recovery" => ["message" => "Controlla la tua e-mail"],
                ],
                200
            );
        }
        return response()->json(
            [
                "recovery" => ["error" => "Questa email non è registrata"],
            ],
            401
        );
    }

    public function sigin(Request $request)
    {
        if (
            $request->name != "" &&
            $request->email != "" &&
            $request->password != ""
        ) {
            return response()->json(
                [
                    "sigin" => ["message" => "Utente registrato"],
                ],
                200
            );
        }
        return response()->json(
            [
                "sigin" => ["error" => "Utente non registrato"],
            ],
            401
        );
    }

    public function sidebarLinks(Request $request)
    {
        return response()->json(
            [
                "sidebarLinks" => [
                    "calendar" => route('dashboard.calendar'),
                    "dishes" => route('dashboard.dishes')
                ],
            ],
            200
        );
    }

    public function typologies(Request $request)
    {
        return response()->json(
            [
                "typologies" => [
                    ["id" => 1, "name" => "Primi"],
                    ["id" => 2, "name" => "Secondi"],
                    ["id" => 3, "name" => "Contorni"],
                    ["id" => 4, "name" => "Dolci"]
                ],
            ],
            200
        );
    }

    public function intolerances(Request $request)
    {
        return response()->json(
            [
                "intolerances" => [
                    ["id" => 1, "name" => "Gluten Free"],
                    ["id" => 2, "name" => "Senza Lattosio"],
                    ["id" => 3, "name" => "Vegano"]
                ],
            ],
            200
        );
    }

    public function ingredients(Request $request)
    {
        return response()->json(
            [
                "ingredients" => [
                    ['id' => 1, 'name' => 'lorem'],
                    ['id' => 2, 'name' => 'ipsum'],
                    ['id' => 3, 'name' => 'dolor'],
                    ['id' => 4, 'name' => 'sit'],
                    ['id' => 5, 'name' => 'amet'],
                    ['id' => 6, 'name' => 'consectetur'],
                    ['id' => 7, 'name' => 'adipisicing'],
                    ['id' => 8, 'name' => 'elit'],
                    ['id' => 9, 'name' => 'nisi'],
                    ['id' => 10, 'name' => 'quibusdam'],
                    ['id' => 11, 'name' => 'molestiae'],
                    ['id' => 12, 'name' => 'sit']
                ],
            ],
            200
        );
    }

    public function dishes(Request $request)
    {
        return response()->json(
            [
                "dishes" => [
                    [
                        "id" => 1,
                        "name" => "Ipsum",
                        "typology" => [
                            "id" => 1, "name" => "Primo",
                        ],
                        "intolerance" => [
                            "id" => 3, "name" => "Vegano"
                        ],
                        "ingredients" => [
                            ['id' => 1, 'name' => 'lorem'],
                            ['id' => 2, 'name' => 'ipsum'],
                            ['id' => 3, 'name' => 'dolor'],
                            ['id' => 4, 'name' => 'sit'],
                            ['id' => 5, 'name' => 'amet'],
                            ['id' => 6, 'name' => 'consectetur']
                        ]
                    ],
                    [
                        "id" => 2,
                        "name" => "Loren",
                        "typology" => [
                            "id" => 2, "name" => "Secondi"
                        ],
                        "intolerance" => [
                            "id" => 1, "name" => "Senza Lattosio"
                        ],
                        "ingredients" => [
                            ['id' => 3, 'name' => 'dolor'],
                            ['id' => 4, 'name' => 'sit'],
                            ['id' => 5, 'name' => 'amet'],
                            ['id' => 6, 'name' => 'consectetur'],
                            ['id' => 7, 'name' => 'adipisicing'],
                        ]
                    ],
                    [
                        "id" => 3,
                        "name" => "Dolor",
                        "typology" => [
                            "id" => 3, "name" => "Contorni"
                        ],
                        "intolerance" => [
                            "id" => 1, "name" => "Senza Lattosio"
                        ],
                        "ingredients" => [
                            ['id' => 6, 'name' => 'consectetur'],
                            ['id' => 7, 'name' => 'adipisicing'],
                            ['id' => 8, 'name' => 'elit'],
                            ['id' => 9, 'name' => 'nisi'],
                        ]
                    ],
                    [
                        "id" => 4,
                        "name" => "Sit",
                        "typology" => [
                            "id" => 4, "name" => "Dolce"
                        ],
                        "intolerance" => [],
                        "ingredients" => [
                            ['id' => 5, 'name' => 'amet'],
                            ['id' => 6, 'name' => 'consectetur'],
                            ['id' => 7, 'name' => 'adipisicing'],
                            ['id' => 8, 'name' => 'elit'],
                            ['id' => 9, 'name' => 'nisi'],
                            ['id' => 10, 'name' => 'quibusdam'],
                            ['id' => 11, 'name' => 'molestiae'],
                            ['id' => 12, 'name' => 'sit']
                        ]
                    ]
                ],
            ],
            200
        );
    }
}
