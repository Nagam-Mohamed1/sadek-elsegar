<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>أم</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="components/css/contact.css">
    <link rel="stylesheet" href="components/css/footer-3.css">
    <link rel="stylesheet" href="components/css/nav-2.css">
    <link rel="stylesheet" href="tech/css/boot.css">
    <link rel="shortcut icon" href="tech/images/mum.png" type="image/x-icon">
</head>

<body>
    <?php
     
     include"components/navbar.php"
  
  ?>
    <div class="container-fluid mother bot">
        <div class="row">
            <div class="right col-lg-8 col-12 p-5">
                <h1>استشارات الأمهات:</h1>
                <p style="font-size:25px;">
                    <b>
                        الوصف:
                    </b>
                </p>
                <p>
                    يمكن للمعلمة إسراء مساعدتك في
                </p>
                <ol>
                    <li>التعامل مع طفلك أثناء تحفيظه القرآن الكريم</li>
                    <li>إعداد منهج مناسب له</li>
                    <li>تقديم
                        نصائح حول التغلب على المشاكل التي يمكنك مواجهتها معه
                        <br>
                        للوصول لأفضل نتيجة ممكنة.
                    </li>
                </ol>
                <p>
                    <b>
                        المدة : ساعة .
                    </b>

                </p>
            </div>
            <div class="left col-lg-3 col-12 mt-lg-5">
                <img class="d-block m-auto w-lg-100 w-75 mt-3 mb-3" src="tech/images/mum.png" alt="photo">
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
    <?php

   include"components/footer.php";


?>
</body>

</html>