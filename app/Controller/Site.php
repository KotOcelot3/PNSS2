<?php

namespace Controller;

use Model\Doctor;
use Model\Record;
use Model\Spec;
use Model\Diagnosis;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{


    public function index(): string
    {
        return new View('site.index', ['message' => 'hello working']);
    }


    public function SpecList(): string
    {
        $spec = Spec::all();
        return new View('site.SpecializationList', ['spec' => $spec]);
    }


    public function DoctorList(): string
    {
        $doctor = Doctor::all();
        $spec = Spec::all();
        return new View('site.DoctorList', ['doctor' => $doctor, 'spec' => $spec]);
    }


    public function DiagnosisList(): string
    {
        $diagnosis = Diagnosis::all();
        return new View('site.DiagnosisList', ['diagnosis' => $diagnosis]);
    }


    public function RecordList(): string
    {

        $record = Record::all();
        $diagnosis = Diagnosis::all();
        $patient = User::all();
        $doctor = Doctor::all();
        return new View('site.RecordList', ['record' => $record, 'diagnosis' => $diagnosis, 'patient' => $patient, 'doctor' => $doctor]);
    }


//    public function RecordView(Request $request): string
//    {
//        $record = Record::where('id', $request->id)->first();
//        $diagnosis = Diagnosis::where('id', $request->id)->first();
//        $patient = User::all();
//        $doctor = Doctor::where('id', $request->id)->first();
//        return (new View())->render('site.RecordDetail', ['record' => $record, 'diagnosis' => $diagnosis,
//            'patient' => $patient, 'doctor' => $doctor]);
//    }


    public function RegisterUser(Request $request): string
    {

        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required', 'cyrillic'],
                'login' => ['required', 'unique:users,login', 'latinNumber'],
                'password' => ['required', 'latinNumber']
            ], [
                'required' => 'Поле :field пусто',
                'cyrillic' => 'Поле :field может состоять из кириллицы и латиницы',
                'number' => 'Поле :field должно состоять из цифр',
                'latinNumber' => 'Поле :field должно состоять из латинских букв или цифр',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if($validator->fails()){
                return new View('site.RegisterUser', ['message' => $validator->errors()]);
            }   else{

            $project = User::create($request->all());
            $project->photo($_FILES['photo']);
            $project->save();
            app()->route->redirect('/login');
             }
        }

        return new View('site.RegisterUser');
    }


    public function RegisterDoctor(Request $request): string
    {

        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required', 'cyrillic'],
                'spec' => ['required'],
                'password' => ['required', 'latinNumber']
            ], [
                'required' => 'Поле :field пусто',
                'cyrillic' => 'Поле :field может состоять из кириллицы и латиницы',
                'latinNumber' => 'Поле :field должно состоять из латинских букв или цифр',
            ]);

            if($validator->fails()){
                return new View('site.RegisterDoctor', ['message' => $validator->errors()]);
            }   else{

                $project = Doctor::create($request->all());
                $project->save();
                app()->route->redirect('/index');
            }
        }

        return new View('site.RegisterDoctor');
    }


    public function CreateRecordAdmin(Request $request): string
    {

        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'title' => ['required'],
                'patient' => ['required', 'latinNumber'],
                'doctor' => ['required', 'latinNumber'],
                'diagnosis' => ['required', 'latinNumber'],
            ], [
                'required' => 'Поле :field пусто',
                'cyrillic' => 'Поле :field может состоять из кириллицы и латиницы',
                'latinNumber' => 'Поле :field должно состоять из латинских букв или цифр',
            ]);

            if($validator->fails()){
                return new View('site.AddRecord', ['message' => $validator->errors()]);
            }   else{

                $record = Record::create($request->all());
                $record->save();
                return (new View())->render('site.RecordDetail', ['record' => $record]);
            }
        }

        return new View('site.AddRecord');
    }


        public function CreateRecordUser(Request $request): string
    {

        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'title' => ['required'],
                'patient' => ['required', 'latinNumber'],
                'doctor' => ['required', 'latinNumber'],
                'diagnosis' => ['required', 'latinNumber'],
            ], [
                'required' => 'Поле :field пусто',
                'cyrillic' => 'Поле :field может состоять из кириллицы и латиницы',
                'latinNumber' => 'Поле :field должно состоять из латинских букв или цифр',
            ]);

            if($validator->fails()){
                return new View('site.AddRecord', ['message' => $validator->errors()]);
            }   else{

                $record = Record::create($request->all());
                $record->save();
                return (new View())->render('site.RecordDetailUser', ['record' => $record]);
            }
        }

        return new View('site.AddRecord');
    }
    

    public function SpecView(Request $request): string
    {
        $spec = Spec::where('id', $request->id)->first();
        $doctor = Doctor::where('spec', $request->id)->first();
        return (new View())->render('site.SpecializationDetail', ['spec' => $spec, 'doctor' => $doctor]);
    }


    public function DoctorView(Request $request): string
    {
        $doctor = Doctor::where('id', $request->id)->first();
        $spec = Spec::all();
        return (new View())->render('site.DoctorDetail', ['doctor' => $doctor, 'spec' => $spec]);
    }


    public function DiagnosisView(Request $request): string
    {
        $diagnosis = Diagnosis::where('id', $request->id)->first();
        return (new View())->render('site.DiagnosisDetail', ['diagnosis' => $diagnosis]);
    }


    public function RecordView(Request $request): string
    {
        $record = Record::where('id', $request->id)->first();
//        $diagnosis = Diagnosis::where('id', $request->id)->first();
//        $patient = User::all();
//        $doctor = Doctor::where('id', $request->id)->first();
        return (new View())->render('site.RecordDetail', ['record' => $record]);
    }


    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }

        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/index');
        }

        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }


    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/index');
    }


    public function searchdb(Request $request): string
    {
       // var_dump($request->search); die();
        $room = Spec::where('name','LIKE',"%{$request->search}%")->get();

        //var_dump($room[0]); die();
        return (new View())->render('site.searchdb', ['room' => $room]);
    }


}
