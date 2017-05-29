<!-- 
    Code adapted for the lumine framework. 
    Share blog news
    Author: Alex
-->

<html>
<head>
    <meta charset="UTF-8">
    <title>Social NetWorks</title>

    <link rel="stylesheet" type="text/css" media="print" href="css/font-awesome.min.css" />
    <script src="https://use.fontawesome.com/cb32c8a31f.js"></script>

    <style>
        .social {
            margin-left: 481px;
            /* position: relative; */
            display: block;
            margin-bottom: 40px;
        }.social ul {
            display: inline-block;
        }

        .social ul li {
            float: left;
        }

        i.fa.fa-facebook-f, i.fa.fa-twitter {
            font-size: 30px;
            color: #fff;
        }

        li.hover a {
            background: #3b5998;
            padding: 15px 21px;
            position: absolute;
        }

        a.twitter-social {
            background: #00aced;
            padding: 15px 16px;
            position: absolute;
            margin-left: 64px;
        }
    </style>

</head>
<body>
    <div class="social">
        <ul>
            <li style="padding: 15.5px;">Compartilhar:</li>


            <li>
            <a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/share.php?u=http://dominio/noticia.php?id=<?=$noticia->id?>&title=<?php echo $noticia->titulo ?>', 'ventanacompartir', ' toolbar=0, status=0, width=650, height=450');">
                    <li class="hover">
                        <i class="fa fa-facebook-f"></i>
                    </li></a>
            </li>
            <li>
                <a href="javascript: void(0);"  class="twitter-social"
                            onclick="window.open('https://twitter.com/intent/tweet?original_referer=http://dominio/noticia.php?id=<?=$noticia->id?>&source=tweetbutton&text=<?php echo $noticia->titulo; ?>&url=http://dominio/noticia.php?id=<?=$noticia->id?>','ventanacompartir','toolbar=0, status=0, width=650, height=450');">
                    <li>
                        <i class="fa  fa-twitter"></i>

                    </li>
                </a>
            </li>
        </ul>
    </div>
</body>
</html>