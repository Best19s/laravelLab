@extends('layouts.app')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Page Title')
</head>
<body>
    @section('sidebar')
        @parent
        <p>This is appended to the master sidebar.</p>
    @endsection
    
    @section('content')
        <p>This is my body content.</p>
    @endsection
</body>
</html>
