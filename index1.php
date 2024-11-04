<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free board of Quoridor">
    <title>Free Board</title>
    <link rel="shortcut icon" href="https://www.quoridorfansite.com/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Neuton:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://www.quoridorfansite.com/qf_freeboard.css">
    <link rel="stylesheet" href="https://www.quoridorfansite.com/qf_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- <script src="https://www.quoridorfansite.com/qf_freeboard.js"></script> -->
</head>

<body>
    <div id="all_elements">
        <div id="header">
            <h1 id="site_title">Free Board</h1>
        </div>

        <hr>

        <div id="site_explanation">
            <p>フリーボード</p>
        </div>

        <hr>

        <div id="qf_contents">
            <h3>フリーボード</h3>
            <div class="qf_freeboard" data-boardsize="10">

                <div class="qf_gameboard" style="width: 520px; height: 520px;">
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 490px; left: 50px; font-size: 20px;">a</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 490px; left: 100px; font-size: 20px;">b</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 490px; left: 150px; font-size: 20px;">c</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 490px; left: 200px; font-size: 20px;">d</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 490px; left: 250px; font-size: 20px;">e</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 490px; left: 300px; font-size: 20px;">f</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 490px; left: 350px; font-size: 20px;">g</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 490px; left: 400px; font-size: 20px;">h</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 490px; left: 450px; font-size: 20px;">i</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 50px; left: 10px; font-size: 20px;">9</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 100px; left: 10px; font-size: 20px;">8</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 150px; left: 10px; font-size: 20px;">7</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 200px; left: 10px; font-size: 20px;">6</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 250px; left: 10px; font-size: 20px;">5</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 300px; left: 10px; font-size: 20px;">4</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 350px; left: 10px; font-size: 20px;">3</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 400px; left: 10px; font-size: 20px;">2</div>
                    <div class="qf_char qf_xchar" style="width: 20px; height: 20px; top: 450px; left: 10px; font-size: 20px;">1</div>
                    <div class="qf_inner_gameboard" style="width: 440px; height: 440px; top: 40px; left: 40px;">
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 400px; left: 0px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 400px; left: 50px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 400px; left: 100px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 400px; left: 150px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 400px; left: 200px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 400px; left: 250px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 400px; left: 300px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 400px; left: 350px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 400px; left: 400px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 350px; left: 0px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 350px; left: 50px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 350px; left: 100px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 350px; left: 150px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 350px; left: 200px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 350px; left: 250px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 350px; left: 300px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 350px; left: 350px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 350px; left: 400px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 300px; left: 0px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 300px; left: 50px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 300px; left: 100px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 300px; left: 150px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 300px; left: 200px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 300px; left: 250px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 300px; left: 300px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 300px; left: 350px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 300px; left: 400px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 250px; left: 0px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 250px; left: 50px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 250px; left: 100px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 250px; left: 150px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 250px; left: 200px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 250px; left: 250px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 250px; left: 300px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 250px; left: 350px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 250px; left: 400px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 200px; left: 0px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 200px; left: 50px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 200px; left: 100px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 200px; left: 150px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 200px; left: 200px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 200px; left: 250px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 200px; left: 300px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 200px; left: 350px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 200px; left: 400px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 150px; left: 0px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 150px; left: 50px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 150px; left: 100px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 150px; left: 150px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 150px; left: 200px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 150px; left: 250px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 150px; left: 300px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 150px; left: 350px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 150px; left: 400px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 100px; left: 0px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 100px; left: 50px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 100px; left: 100px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 100px; left: 150px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 100px; left: 200px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 100px; left: 250px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 100px; left: 300px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 100px; left: 350px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 100px; left: 400px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 50px; left: 0px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 50px; left: 50px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 50px; left: 100px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 50px; left: 150px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 50px; left: 200px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 50px; left: 250px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 50px; left: 300px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 50px; left: 350px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 50px; left: 400px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 0px; left: 0px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 0px; left: 50px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 0px; left: 100px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 0px; left: 150px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 0px; left: 200px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 0px; left: 250px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 0px; left: 300px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 0px; left: 350px;"></div>
                        <div class="qf_board_grid" style="width: 40px; height: 40px; top: 0px; left: 400px;"></div>
                        <div class="qf_piece qf_piece_white" style="width: 34px; height: 34px; top: 403px; left: 203px;"></div>
                        <div class="qf_piece qf_piece_black" style="width: 34px; height: 34px; top: 3px; left: 203px;"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_wwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 390px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 340px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 290px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 240px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 190px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 140px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 90px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 0px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 50px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 100px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 150px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 200px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 250px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 300px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_hwall qf_gwall" style="width: 90px; height: 10px; top: 40px; left: 350px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 350px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 300px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 250px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 200px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 150px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 100px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 50px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 40px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 90px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 140px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 190px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 240px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 290px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 340px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_wall qf_bwall qf_vwall qf_gwall" style="width: 10px; height: 90px; top: 0px; left: 390px; opacity: 0; -webkit-transform: scale(3); -moz-transform: scale(3); -ms-transform: scale(3); -o-transform: scale(3); transform: scale(3);"></div>
                        <div class="qf_piece qf_piece_white2" style="width: 34px; height: 34px; top: 0px; left: 0px; display: none;"></div>
                        <div class="qf_piece qf_piece_black2" style="width: 34px; height: 34px; top: 0px; left: 0px; display: none;"></div>
                        <div class="qf_wall qf_wwall2 qf_hwall qf_gwall2" style="display: none; width: 90px; height: 10px; top: 390px; left: 350px;"></div>
                        <div class="qf_wall qf_wwall2 qf_vwall qf_gwall2" style="display: none; width: 10px; height: 90px; top: 300px; left: 390px;"></div>
                        <div class="qf_wall qf_bwall2 qf_hwall qf_gwall2" style="display: none; width: 90px; height: 10px; top: 0px; left: 0px;"></div>
                        <div class="qf_wall qf_bwall2 qf_vwall qf_gwall2" style="display: none; width: 10px; height: 90px; top: 0px; left: 0px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 400px; left: 0px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 400px; left: 50px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 400px; left: 100px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 400px; left: 150px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 400px; left: 200px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 400px; left: 250px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 400px; left: 300px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 400px; left: 350px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 400px; left: 400px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 350px; left: 0px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 350px; left: 50px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 350px; left: 100px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 350px; left: 150px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 350px; left: 200px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 350px; left: 250px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 350px; left: 300px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 350px; left: 350px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 350px; left: 400px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 300px; left: 0px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 300px; left: 50px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 300px; left: 100px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 300px; left: 150px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 300px; left: 200px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 300px; left: 250px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 300px; left: 300px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 300px; left: 350px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 300px; left: 400px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 250px; left: 0px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 250px; left: 50px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 250px; left: 100px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 250px; left: 150px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 250px; left: 200px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 250px; left: 250px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 250px; left: 300px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 250px; left: 350px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 250px; left: 400px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 200px; left: 0px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 200px; left: 50px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 200px; left: 100px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 200px; left: 150px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 200px; left: 200px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 200px; left: 250px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 200px; left: 300px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 200px; left: 350px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 200px; left: 400px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 150px; left: 0px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 150px; left: 50px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 150px; left: 100px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 150px; left: 150px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 150px; left: 200px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 150px; left: 250px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 150px; left: 300px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 150px; left: 350px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 150px; left: 400px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 100px; left: 0px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 100px; left: 50px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 100px; left: 100px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 100px; left: 150px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 100px; left: 200px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 100px; left: 250px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 100px; left: 300px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 100px; left: 350px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 100px; left: 400px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 50px; left: 0px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 50px; left: 50px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 50px; left: 100px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 50px; left: 150px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 50px; left: 200px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 50px; left: 250px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 50px; left: 300px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 50px; left: 350px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 50px; left: 400px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 0px; left: 0px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 0px; left: 50px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 0px; left: 100px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 0px; left: 150px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 0px; left: 200px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 0px; left: 250px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 0px; left: 300px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 0px; left: 350px;"></div>
                        <div class="qf_board_grid2" style="width: 40px; height: 40px; top: 0px; left: 400px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 390px; left: 0px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 390px; left: 50px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 390px; left: 100px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 390px; left: 150px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 390px; left: 200px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 390px; left: 250px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 390px; left: 300px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 390px; left: 350px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 340px; left: 0px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 340px; left: 50px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 340px; left: 100px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 340px; left: 150px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 340px; left: 200px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 340px; left: 250px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 340px; left: 300px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 340px; left: 350px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 290px; left: 0px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 290px; left: 50px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 290px; left: 100px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 290px; left: 150px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 290px; left: 200px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 290px; left: 250px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 290px; left: 300px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 290px; left: 350px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 240px; left: 0px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 240px; left: 50px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 240px; left: 100px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 240px; left: 150px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 240px; left: 200px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 240px; left: 250px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 240px; left: 300px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 240px; left: 350px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 190px; left: 0px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 190px; left: 50px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 190px; left: 100px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 190px; left: 150px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 190px; left: 200px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 190px; left: 250px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 190px; left: 300px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 190px; left: 350px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 140px; left: 0px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 140px; left: 50px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 140px; left: 100px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 140px; left: 150px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 140px; left: 200px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 140px; left: 250px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 140px; left: 300px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 140px; left: 350px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 90px; left: 0px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 90px; left: 50px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 90px; left: 100px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 90px; left: 150px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 90px; left: 200px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 90px; left: 250px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 90px; left: 300px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 90px; left: 350px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 40px; left: 0px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 40px; left: 50px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 40px; left: 100px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 40px; left: 150px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 40px; left: 200px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 40px; left: 250px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 40px; left: 300px;"></div>
                        <div class="qf_board_space qf_board_hspace" style="width: 40px; height: 10px; top: 40px; left: 350px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 400px; left: 40px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 400px; left: 90px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 400px; left: 140px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 400px; left: 190px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 400px; left: 240px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 400px; left: 290px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 400px; left: 340px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 400px; left: 390px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 350px; left: 40px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 350px; left: 90px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 350px; left: 140px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 350px; left: 190px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 350px; left: 240px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 350px; left: 290px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 350px; left: 340px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 350px; left: 390px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 300px; left: 40px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 300px; left: 90px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 300px; left: 140px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 300px; left: 190px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 300px; left: 240px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 300px; left: 290px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 300px; left: 340px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 300px; left: 390px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 250px; left: 40px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 250px; left: 90px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 250px; left: 140px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 250px; left: 190px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 250px; left: 240px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 250px; left: 290px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 250px; left: 340px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 250px; left: 390px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 200px; left: 40px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 200px; left: 90px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 200px; left: 140px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 200px; left: 190px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 200px; left: 240px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 200px; left: 290px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 200px; left: 340px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 200px; left: 390px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 150px; left: 40px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 150px; left: 90px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 150px; left: 140px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 150px; left: 190px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 150px; left: 240px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 150px; left: 290px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 150px; left: 340px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 150px; left: 390px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 100px; left: 40px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 100px; left: 90px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 100px; left: 140px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 100px; left: 190px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 100px; left: 240px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 100px; left: 290px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 100px; left: 340px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 100px; left: 390px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 50px; left: 40px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 50px; left: 90px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 50px; left: 140px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 50px; left: 190px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 50px; left: 240px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 50px; left: 290px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 50px; left: 340px;"></div>
                        <div class="qf_board_space qf_board_vspace" style="width: 10px; height: 40px; top: 50px; left: 390px;"></div>
                    </div>
                </div>

            </div>

        </div>

        <hr>

        <div id="footer">
            <!-- <table>
			<tr>
				<td></td>
				<td><a href="../index.html">top</a></td>
				<td><a href="qfb.html">next</a></td>
			<tr>
			</table> -->
        </div>
    </div>
</body>

</html>