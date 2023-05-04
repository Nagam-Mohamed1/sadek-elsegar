<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الألوان في القرآن </title>
    <link rel="icon" href="tech/images/no.jfif">
    <link rel="stylesheet" href="tech/css/boot.css">
    <link rel="stylesheet" href="components/css/footer-3.css">
    <link rel="stylesheet" href="components/css/nav-2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Neonderthaw&family=Rakkas&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
     
     include"components/navbar.php"
  
  ?>
    <div class="container-fluid colors bot  ">
        <div class="row ">
            <div class="right col-lg-8 col-12 p-5 m-lg-3">
                <h1>
                    ورشة الألوان في القرآن

                </h1>

                <p style="font-size:25px;">
                    <b>
                        الوصف:
                    </b>
                </p>
                <p>
                    هذه الورشة تتحدث عن الألوان التي ذكرت في القرآن
                    سنتعرف على:
                </p>
                <ol>
                    <li>كم عدد الألوان</li>
                    <li>هل القرآن ذكر فيه الألوان</li>
                    <li>ما هي الأمثلة القرآنية المرتبطة بالألوان</li>
                    <li>كيف نحصل على لون معين من عدة ألوان</li>


                </ol>
                <p>
                    <b style="font-size:23px;">
                        كل ذلك يتم من خلال:
                    </b>

                </p>
                <ol>
                    <li>أنشطة يدوية</li>
                    <li> تجارب عملية</li>
                    <li> أنشطة حسية</li>
                </ol>
                <div class=" p">
                    <h4>الفئة المستهدفة</h4>
                    <ol>
                        <li>الورشة مقدمة من سن 4 سنوات حتى 9 سنوات</li>
                    </ol>
                    <h4>مدة الورشة</h4>
                    <ol>
                        <li>مرة إسبوعيا </li>
                        <li> لقائين</li>
                    </ol>
                </div>
            </div>

            <div class="left col-lg-3 col-12 m-lg-0 m-5">
                <img class="d-block m-auto w-lg-100 w-75 mb-3 mt-3" src="tech/images/no.jfif" alt="photo">
                <a class="porsline-button " href="#porsline-popup"
                    onclick="clDsFO3mhI('porsline-popup-iframe');showPopUp()">احجز الآن</a>
            </div>
            
            <script>
            (function() {
                var js, q, d = document,
                    gi = d.getElementById,
                    ifid = 'porsline-popup-iframe',
                    ce = d.createElement,
                    gt = d.getElementsByTagName,
                    id = "porsline-share",
                    b = "https://cdn.porsline.com/static/modules/dashboard/controllers/";
                if (!gi.call(d, id)) {
                    js = ce.call(d, "script");
                    js.id = id;
                    js.src = b + "popup.js";
                    q = gt.call(d, "script")[0];
                    q.parentNode.insertBefore(js, q)
                }
            })();
            var clDsFO3mhI = function(ifid) {
                document.getElementById(ifid).src =
                    "https://survey.porsline.com/s/DsFO3mhI/#/?ac=0&ns=0"
            }
            </script>
        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <?php

include"components/footer.php";


?>
</body>


</html>