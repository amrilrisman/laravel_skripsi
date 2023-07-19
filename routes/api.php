<?php

use App\Http\Controllers\ApiChatController;
use App\Http\Controllers\ApiLoginController;
use App\Http\Controllers\SocialitationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post("/login", [ApiLoginController::class, "login"]);

Route::middleware("auth:sanctum")->post("/logout", [ApiLoginController::class, "logout"]);

Route::middleware("auth:sanctum")->get("/pengumuman", [SocialitationsController::class, "data"]);

Route::middleware("auth:sanctum")->post("/pengumuman", [SocialitationsController::class, "create"]);

Route::middleware("auth:sanctum")->post("/message", [ApiChatController::class, "send"]);

Route::middleware("auth:sanctum")->get("/message/{id}", [ApiChatController::class, "detail"]);
