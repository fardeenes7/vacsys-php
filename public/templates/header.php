<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS-->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/single.css">
    <link rel="stylesheet" href="/css/radio.css">
    <link rel="stylesheet" href="/css/login.css">

    <!-- LIbrary and APIs-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/js/generate-vaccine-card.js"></script>
    <link rel="stylesheet" href="/icons/css/all.css">
    <style type="text/css" media="screen">
        #vaccine-card-html {
            visibility: hidden;
            padding: 0 30%;
            margin: 0;
        }

        #download-v-card-btn,
        #error {
            visibility: visible;
        }

        header,
        .single-title-header,
        .body,
        footer {
            background-color: #fff;
        }
    </style>
    <style type="text/css" media="print">
        header,
        .single-title-header,
        #download-v-card-btn,
        .body,
        footer {
            display: none;
        }

        #vaccine-card-html {
            background-color: #FFF;
            margin: 3%;
        }
    </style>


    <title>VACSYS</title>

</head>

<body>

    <!--Header -->

    <header class="">
        <nav class="navbar navbar-expand-md navbar-light">
            <a href="/" class="title navbar-brand">VACSYS</a>
            <div class="navbar-link ms-auto">
                <ul class="navbar-nav text-center">
                    <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
                    <li class="nav-item"><a href="/user/login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="/admin/login.php" target="_blank" class="nav-link btn btn-warning">Admin Portal</a></li>
                </ul>

            </div>
        </nav>
    </header>