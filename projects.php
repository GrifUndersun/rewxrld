
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="res/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="jscroller-0.4.js"></script>

    <title>REWXRLD PORTFOLIO</title>
</head>
<body>
    <div class="headset">
        <div class="title">
            <a href="index.html"><span class="logo">REWXRLD</span></a>
        </div>
        <div class="menu">
            <a href="projects.html">PROJECTS</a>
            <a href="about.html">ABOUT</a>
        </div>
    </div>

    <div class="content">        
        <!----- Endless Scroll ----->
        <div class="box-scroll">
            <div id="track1">
                <div class="marquee">
                    <span class="x1"> REWXRLD </span>
                    <span class="x2"> REWXRLD </span>
                    <span class="x3"> REWXRLD </span>
                </div>
            </div>
            <div id="track2">
                <div class="marquee">
                    <span class="x3"> REWXRLD </span>
                    <span class="x2"> REWXRLD </span>
                    <span class="x1"> REWXRLD </span>
                </div>
            </div>
            <div id="track3">
                <div class="marquee">
                    <span class="x2"> REWXRLD </span>
                    <span class="x1"> REWXRLD </span>
                    <span class="x3"> REWXRLD </span>
                </div>
            </div>
        </div>
    </div>



    <script src="endless_scroll.js"></script>
    
    <script type="text/javascript">
        $(window).load(function () {
            $("#track1").endlessScroll({ 
			    width: "100%", // Ширина строки
			    height: "12em", // Высота строки
			    steps: -1, // Шаг анимации в пикселях. Если число отрицательное - движение влево, положительное - вправо
			    speed: 15, // Скорость анимации (0 - максимальная)
			    mousestop: false // Останавливать ли полосу при наведении мыши (да - true, нет - false)
		    });
	    });

        $(window).load(function () {
            $("#track2").endlessScroll({ 
			    width: "100%", // Ширина строки
			    height: "12em", // Высота строки
			    steps: 1, // Шаг анимации в пикселях. Если число отрицательное - движение влево, положительное - вправо
			    speed: 0, // Скорость анимации (0 - максимальная)
			    mousestop: false // Останавливать ли полосу при наведении мыши (да - true, нет - false)
		    });
	    });

        $(window).load(function () {
            $("#track3").endlessScroll({ 
			    width: "100%", // Ширина строки
			    height: "12em", // Высота строки
			    steps: -1, // Шаг анимации в пикселях. Если число отрицательное - движение влево, положительное - вправо
			    speed: 30, // Скорость анимации (0 - максимальная)
			    mousestop: false // Останавливать ли полосу при наведении мыши (да - true, нет - false)
		    });
	    });
	
    </script>
</body>
