<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bimal Sharma - Professional Web developer</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lightbox/css/lightbox.css" rel="stylesheet">
    <link href="assets/textrotator/simpletextrotator.css" rel="stylesheet">
    <link href="assets/flexslider/flexslider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="img/favicon1.png" rel="shortcut icon" type="image/x-icon" />
  </head>
    <body id="top">
@extends('layouts.app')
<div class="alert alert-danger">
    <div class="alert-title">{{ $title }}</div>

    {{ $slot }}
</div>
</body>
</html>