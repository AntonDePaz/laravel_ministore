<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Countries</title>

    <link rel="stylesheet" href="{{ asset('bootstrap\css\bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('datatable\css\dataTables.bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('datatable\css\dataTables.bootstrap4.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('sweetalert\sweetalert2.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('toastr\toastr.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('bootstrap\css\sb-admin.css') }}" >
</head>