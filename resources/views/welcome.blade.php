<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Internship Task</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#F4F9FF,#EAF3FF);
            padding:20px;
        }

        .container{
            width:900px;
            max-width:100%;
            display:flex;
            background:#fff;
            border-radius:22px;
            overflow:hidden;
            box-shadow:0 15px 35px rgba(0,0,0,0.08);
        }

        .left{
            width:35%;
            background:#2563EB;
            color:white;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            padding:40px;
        }

        .avatar{
            width:110px;
            height:110px;
            border-radius:50%;
            background:white;
            color:#2563EB;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:38px;
            font-weight:700;
            margin-bottom:20px;
        }

        .left h2{
            font-size:28px;
            text-align:center;
            margin-bottom:10px;
        }

        .roll{
            opacity:.9;
            font-size:17px;
        }

        .right{
            width:65%;
            padding:45px;
        }

        .heading{
            color:#2563EB;
            font-weight:600;
            font-size:16px;
            letter-spacing:1px;
        }

        hr{
            border:none;
            height:2px;
            background:#E5E7EB;
            margin:15px 0 30px;
        }

        h1{
            font-size:34px;
            color:#1E293B;
            margin-bottom:15px;
        }

        .subtitle{
            color:#64748B;
            line-height:1.8;
            margin-bottom:30px;
        }

        .section-title{
            color:#2563EB;
            font-weight:600;
            margin-bottom:15px;
        }

        .badges{
            display:flex;
            flex-wrap:wrap;
            gap:12px;
            margin-bottom:30px;
        }

        .badge{
            background:#EFF6FF;
            color:#2563EB;
            padding:10px 18px;
            border-radius:25px;
            font-size:14px;
            font-weight:500;
            transition:.3s;
        }

        .badge:hover{
            background:#2563EB;
            color:white;
        }

        .quote{
            background:#F8FAFC;
            border-left:4px solid #2563EB;
            padding:18px;
            border-radius:10px;
            color:#475569;
            font-style:italic;
        }

        .footer{
            margin-top:35px;
            color:#94A3B8;
            font-size:14px;
        }

        @media(max-width:768px){

            .container{
                flex-direction:column;
            }

            .left,
            .right{
                width:100%;
            }

        }

    </style>

</head>

<body>

<div class="container">

    <div class="left">

        <div class="avatar">
            MJ
        </div>

        <h2>Merin Joys</h2>

        <div class="roll">
            Roll No: 5024136
        </div>

    </div>

    <div class="right">

        <div class="heading">
            Laravel Internship Task
        </div>

        <hr>

        <h1>Hello!</h1>

        <div class="subtitle">
            Welcome to my first Laravel project. This page has been customized as part of my internship assignment using HTML and CSS in Laravel.
        </div>

        <div class="section-title">
            Currently Learning
        </div>

        <div class="badges">

            <div class="badge">Laravel</div>

            <div class="badge">PHP</div>

            <div class="badge">MVC Architecture</div>

            <div class="badge">Git & GitHub</div>

        </div>

        <div class="quote">
            "Every expert was once a beginner. Every project is a step towards growth."
        </div>

        <div class="footer">
            Learning • Building • Growing
        </div>

    </div>

</div>

</body>
</html>