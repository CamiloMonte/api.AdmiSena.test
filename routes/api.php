<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseTeacherController;

//courses
Route:: get('/courses',[CourseController::class,'index']);
Route:: get('/courses/{id}',[CourseController::class,'show']);
Route:: post('/courses',[CourseController::class,'store']);
Route:: put('/courses/{id}',[CourseController::class,'update']);
Route:: delete('/courses/{id}',[CourseController::class,'destroy']);

//area
Route:: get('/areas',[AreaController::class,'index']);
Route:: get('/areas{id}',[AreaController::class,'show']);
Route:: post('/areas',[AreaController::class,'store']);
Route:: put('/areas{id}',[AreaController::class,'update']);
Route:: delete('/areas{id}',[AreaController::class,'destroy']);

//apprentice
Route:: get('/apprentices',[ApprenticeController::class,'index']);
Route:: get('/apprentices{id}',[ApprenticeController::class,'show']);
Route:: post('/apprentices',[ApprenticeControlle::class,'store']);
Route:: put('/apprentices{id}',[ApprenticeControlle::class,'update']);
Route:: delete('/apprentices{id}',[ApprenticeControlle::class,'destroy']);

//computer
Route:: get('/computers',[ComputerController::class,'index']);
Route:: get('/computers{id}',[ComputerController::class,'show']);
Route:: post('/computers',[ComputerController::class,'store']);
Route:: put('/computers{id}',[ComputerController::class,'update']);
Route:: delete('/computers{id}',[ComputerController::class,'destroy']);

//teacher
Route:: get('/teachers',[TeacherController::class,'index']);
Route:: get('/teachers{id}',[TeacherController::class,'show']);
Route:: post('/teachers',[TeacherController::class,'store']);
Route:: put('/teachers{id}',[TeacherController::class,'update']);
Route:: delete('/teachers{id}',[TeacherController::class,'destroy']);

//course_teacher
Route:: get('/course_teachers',[CourseTeacherController::class,'index']);
Route:: get('/course_teachers{id}',[CourseTeacherController::class,'show']);

//training center
Route:: get('/training_centers',[TrainingCenterController::class,'index']);
Route:: get('/training_centers{id}',[TrainingCenterController::class,'show']);
Route:: post('/training_centers',[TrainingCenterController::class,'store']);
Route:: put('/training_centers{id}',[TrainingCenterController::class,'update']);
Route:: delete('/training_centers{id}',[TrainingCenterController::class,'destroy']);