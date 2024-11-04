<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- Bootstrap CSS (local) -->
    <link href="include/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (local) -->
    <script src="include/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery  -->
    <script src="include/jquery-3.6.0.js"></script>


    <!-- Shows after a win-->
    <script src="https://unpkg.com/party-js@latest/bundle/party.min.js"></script>

    <!-- SweetAlert2 CSS and JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- custom style -->
    <link href="include/style.css" rel="stylesheet">

    <style>
        .main-div {
            width: 100%;
            max-width: 575px;
            aspect-ratio: 1/1;
            background-color: #B0A092;
            border-radius: 6px;
            display: flex;
            flex-wrap: wrap;

            padding-top: 1.3rem;
            padding-bottom: 1.3rem;
            padding-left: 1.3rem;
            padding-right: 0.6rem;


        }

        /* sss */

        .inner-div {
            position: relative;
            background-color: #A18E80;
            border-radius: 6px;
            height: 9.1%;
            width: 9.1%;
        }

        .inner-div::before {
            position: absolute;
            content: "";
            width: 80%;
            height: 80%;
            top: 9.1%;
            left: 9.1%;
            border-radius: 50%;
            opacity: 0;
        }

        .inner-div[data-active="true"]::before {
            opacity: 1;
        }

        .inner-div[data-hover="true"]:hover::before {
            opacity: .5;
        }

        .inner-div[data-color="w"]::before {
            background-color: white;
        }

        .inner-div[data-color="b"]::before {
            background-color: #3f3225;

        }

        .vertical-div {
            position: relative;
            background-color: #3f3225;
            border-radius: 3px;
            height: 9.1%;
            width: 2%;
            opacity: 0;
        }

        .vertical-div[data-active="true"] {
            opacity: 1;
        }

        .vertical-div[data-order="first"]::after {
            content: "";
            position: absolute;
            background-color: #3f3225;
            width: 100%;
            top: 90%;
            border-radius: 3px;
        }


        .vertical-div[data-active="true"]::after {
            height: 50%;
        }


        .vertical-div[data-order="first"][data-hover="true"]:hover {
            opacity: 0.5;

        }

        .vertical-div[data-hover="true"]::after {
            height: 130%;
        }



        .horizontal-div {
            position: relative;
            background-color: #3f3225;
            border-radius: 3px;
            height: 2%;
            width: 9.1%;
            margin-right: 2%;
            opacity: 0;

        }

        .horizontal-div[data-active="true"] {
            opacity: 1;
        }

        .horizontal-div[data-order="first"]::after {
            content: "";
            position: absolute;
            background-color: #3f3225;
            height: 100%;
            left: 90%;
            border-radius: 3px;
        }

        .horizontal-div[data-active="true"]::after {
            width: 50%;
        }


        .horizontal-div[data-order="first"][data-hover="true"]:hover {
            opacity: 0.5;
        }

        .horizontal-div[data-hover="true"]::after {
            width: 130%;
        }



        /* Add styles for the block counter display */
        .block-counter {
            margin: 20px auto;
            text-align: center;
            font-size: 1.2rem;
            padding: 10px;
            background-color: #B0A092;

            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .player-info {
            display: inline-block;
            margin: 0 20px;
            padding: 10px 20px;
            border-radius: 4px;
        }

        .white-player {
            background-color: #d7d1c1;
            border: 1px solid #3f3225;
            color: #3f3225;
        }



        .black-player {
            background-color: #3f3225;
            color: white;
            border: 1px solid #3f3225;
        }

        .swal-confirm-button {
            background-color: #3f3225 !important;
            color: white !important;
            border: 1px solid #3f3225 !important;
        }

        .swal-confirm-button:hover {
            background-color: white !important;
            color: #3f3225 !important;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-3">
                <div class="block-counter">
                    <div class="player-info white-player">
                        White blocks: <span id="white-blocks">10</span>
                    </div>
                    <div class="player-info black-player">
                        Black blocks: <span id="black-blocks">10</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-1">
                <div class="main-div" id="main-div">


                </div>



            </div>

        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->








    <script>
        $(document).ready(function() {

            // console.log(`i:${i}, j:${j}`);
            let array_size = 9;
            let array_middle = (array_size - 1) / 2;
            let main_div = $('.main-div');
            let whites_turn_to_play = true;

            // Add block counting variables
            let white_blocks_remaining = 10;
            let black_blocks_remaining = 10;

            // Update the display initially
            updateBlockDisplay();

            function updateBlockDisplay() {
                $('#white-blocks').text(white_blocks_remaining);
                $('#black-blocks').text(black_blocks_remaining);
            }


            for (let i = 0; i < array_size; i++) {
                for (let j = 0; j < array_size; j++) {

                    if ((i == 0) && (j == array_middle)) {
                        // the look of the div where the white ball first appears
                        main_div.append(`<div class="inner-div" data-row="${i}" data-column="${j}" data-active="true" data-color="w" data-hover="false"></div>`);
                    } else if ((i == array_size - 1) && (j == array_middle)) {

                        // the look of the div where the black ball first appears
                        main_div.append(`<div class="inner-div" data-row="${i}" data-column="${j}" data-active="true" data-color="b" data-hover="false"></div>`);
                    } else {
                        // the look of the div where there are no balls
                        main_div.append(`<div class="inner-div" data-row="${i}" data-column="${j}" data-active="false" data-color="n" data-hover="true"></div>`);
                    }

                    if ((i !== array_size - 1) && (j !== array_size - 1)) {
                        // adding vertical divs and making them first if they are not in the last row
                        main_div.append(`<div class="vertical-div" data-row="${i}" data-column="${j}" data-active="false" data-hover="true" data-order="first"></div>`);
                    } else if ((j !== array_size - 1)) {
                        // adding vertical divs of the last row they are automaticlly second, and they cannot be activated
                        main_div.append(`<div class="vertical-div" data-row="${i}" data-column="${j}" data-active="false" data-hover="false" data-order="second"></div>`);
                    }
                }


                for (let j = 0; j < array_size; j++) {
                    if ((i !== array_size - 1) && (j !== array_size - 1)) {
                        // adding horozizontal divs and making them first if they are not in the last column
                        main_div.append(`<div class="horizontal-div" data-row="${i}" data-column="${j}" data-active="false" data-hover="true" data-order="first"></div>`);
                    } else if ((i !== array_size - 1)) {
                        // adding horozizontal divs of the last column they are automaticlly second, and they cannot be activated
                        main_div.append(`<div class="horizontal-div" data-row="${i}" data-column="${j}" data-active="false" data-hover="false" data-order="second"></div>`);
                    }

                }


            }


            // Modify the vertical-div click handler
            $('.vertical-div').on('click', function() {
                let row = parseInt($(this).attr('data-row'), 10);
                let column = parseInt($(this).attr('data-column'), 10);
                let active = $(this).attr('data-active');
                let hover = $(this).attr('data-hover');
                let order = $(this).attr('data-order');

                // Check if the current player has blocks remaining
                let blocks_remaining = whites_turn_to_play ? white_blocks_remaining : black_blocks_remaining;

                if (blocks_remaining <= 0) {
                   // alert("No blocks remaining!");
                    return;
                }

                if (active == "false" && hover == "true" && order === "first") {
                    if (!isValidWallPlacement('vertical-div', row, column)) {
                        return;
                    }

                    // Deduct a block from the current player
                    if (whites_turn_to_play) {
                        white_blocks_remaining--;
                    } else {
                        black_blocks_remaining--;
                    }

                    // Update the display
                    updateBlockDisplay();

                    // Previous wall placement code
                    $('.vertical-div[data-row="' + row + '"][data-column="' + column + '"]').attr({
                        'data-active': 'true',
                        'data-hover': 'false',
                        'data-order': 'first'
                    });

                    $('.vertical-div[data-row="' + (row + 1) + '"][data-column="' + column + '"]').attr({
                        'data-active': 'true',
                        'data-hover': 'false',
                        'data-order': 'second'
                    });

                    $('.vertical-div[data-row="' + (row - 1) + '"][data-column="' + column + '"]').attr({
                        'data-hover': 'false',
                        'data-order': 'second'
                    });

                    $('.horizontal-div[data-row="' + (row) + '"][data-column="' + column + '"]').attr({
                        'data-hover': 'false',
                        'data-order': 'second'
                    });
                }

                whose_turn_is_to_play();
            });

            // Modify the horizontal-div click handler similarly
            $('.horizontal-div').on('click', function() {
                let row = parseInt($(this).attr('data-row'), 10);
                let column = parseInt($(this).attr('data-column'), 10);
                let active = $(this).attr('data-active');
                let hover = $(this).attr('data-hover');
                let order = $(this).attr('data-order');

                // Check if the current player has blocks remaining
                let blocks_remaining = whites_turn_to_play ? white_blocks_remaining : black_blocks_remaining;

                if (blocks_remaining <= 0) {
                    //alert("No blocks remaining!");
                    return;
                }

                if (active == "false" && hover == "true" && order === "first") {
                    if (!isValidWallPlacement('horizontal-div', row, column)) {
                        return;
                    }

                    // Deduct a block from the current player
                    if (whites_turn_to_play) {
                        white_blocks_remaining--;
                    } else {
                        black_blocks_remaining--;
                    }

                    // Update the display
                    updateBlockDisplay();

                    // Previous wall placement code
                    $('.horizontal-div[data-row="' + row + '"][data-column="' + column + '"]').attr({
                        'data-active': 'true',
                        'data-hover': 'false',
                        'data-order': 'first'
                    });

                    $('.horizontal-div[data-row="' + row + '"][data-column="' + (column + 1) + '"]').attr({
                        'data-active': 'true',
                        'data-hover': 'false',
                        'data-order': 'second'
                    });

                    $('.horizontal-div[data-row="' + row + '"][data-column="' + (column - 1) + '"]').attr({
                        'data-hover': 'false',
                        'data-order': 'second'
                    });

                    $('.vertical-div[data-row="' + (row) + '"][data-column="' + column + '"]').attr({
                        'data-hover': 'false',
                        'data-order': 'second'
                    });
                }

                whose_turn_is_to_play();
            });

            $('.inner-div').on('click', function() {
                // Accessing data attributes (prefer using .data())
                let row = parseInt($(this).attr('data-row'), 10); // Parse row as an integer
                let column = parseInt($(this).attr('data-column'), 10);
                let hover = $(this).attr('data-hover');
                let player_color = $(this).attr('data-color');

                // alert(row+'\n'+column+'\n'+active+'\n'+hover+'\n'+order);

                if (hover === "false") {
                    return;
                }

                $('.inner-div[data-active="true"][data-color="' + player_color + '"]').attr({
                    'data-active': 'false'
                });

                $(this).attr({
                    'data-active': 'true',
                    'data-hover': 'false'
                })

                whose_turn_is_to_play();
            });





            //legal_moves('w');
            // legal_moves('b');
            whose_turn_is_to_play();

            /* 

            function legal_moves(player_color) {

                //first deactivate every inner div, which will then be activated manually
                $('.inner-div[data-hover="true"]').attr({
                    'data-hover': 'false'
                })


                let active_cell = $('.inner-div[data-active="true"][data-color="' + player_color + '"]');

                let row = parseInt(active_cell.attr('data-row'), 10); // Parse row as an integer
                let column = parseInt(active_cell.attr('data-column'), 10);


                let right_vertical_div_active = $('.vertical-div[data-row="' + row + '"][data-column="' + column + '"]').attr('data-active');
                let left_vertical_div_active = $('.vertical-div[data-row="' + row + '"][data-column="' + (column - 1) + '"]').attr('data-active');

                let below_horizontal_div_active = $('.horizontal-div[data-row="' + row + '"][data-column="' + column + '"]').attr('data-active');
                let above_horizontal_div_active = $('.horizontal-div[data-row="' + (row - 1) + '"][data-column="' + column + '"]').attr('data-active');

                //  alert(row + ' ' + column + '\n' + right_vertical_div_active + '\n' + left_vertical_div_active + '\n' + below_horizontal_div_active + '\n' + above_horizontal_div_active);


                if (right_vertical_div_active == "false") {

                    console.log(row + ' ' + (column + 1) + ' 1');
                    $('.inner-div[data-row="' + row + '"][data-column="' + (column + 1) + '"]').attr({
                        'data-hover': 'true',
                        'data-color': player_color
                    });
                }

                if (left_vertical_div_active == "false") {
                    console.log(row + ' ' + (column - 1) + ' 2');
                    $('.inner-div[data-row="' + row + '"][data-column="' + (column - 1) + '"]').attr({
                        'data-hover': 'true',
                        'data-color': player_color
                    });
                }

                if (below_horizontal_div_active == "false") {
                    console.log((column + 1) + ' ' + (column) + ' 3');
                    $('.inner-div[data-row="' + (row + 1) + '"][data-column="' + column + '"]').attr({
                        'data-hover': 'true',
                        'data-color': player_color
                    });
                }

                if (above_horizontal_div_active == "false") {
                    console.log((column - 1) + ' ' + (column) + ' 4');
                    $('.inner-div[data-row="' + (row - 1) + '"][data-column="' + column + '"]').attr({
                        'data-hover': 'true',
                        'data-color': player_color
                    });
                }

            }

*/


            function legal_moves(player_color) {

                $('.inner-div[data-hover="true"]').attr({
                    'data-hover': 'false'
                });

                // test 4444444333333333333
                $('.inner-div[data-hover="true"][data-color="' + player_color + '"]').attr({
                    'data-color': 'n'
                })


                let active_cell = $('.inner-div[data-active="true"][data-color="' + player_color + '"]');

                let row = parseInt(active_cell.attr('data-row'), 10); // Parse row as an integer
                let column = parseInt(active_cell.attr('data-column'), 10);



                check_neighbor(player_color, row, column, 0, 1);
                check_neighbor(player_color, row, column, 0, -1)
                check_neighbor(player_color, row, column, 1, 1)
                check_neighbor(player_color, row, column, 1, -1)


            }


            function check_neighbor(player_color, i, j, direction, move) {

                let cell_where_you_want_to_be = find_what_position_you_want_to_be_in(i, j, direction, move);

                if (!is_the_opponent_on_the_cell(cell_where_you_want_to_be.new_i, cell_where_you_want_to_be.new_j)) {
                    is_cell_available(player_color, i, j, direction, move, true);

                } else if (is_cell_available(player_color, i, j, direction, move, false)) { // this is added like this because it should always check if its a block before it,
                    // otherwise it will just move two places even if there is a block infront

                    // it first tries to skip the oponent
                    if (!is_cell_available(player_color, cell_where_you_want_to_be.new_i, cell_where_you_want_to_be.new_j, direction, move, true)) {
                        reverse_direction = (direction == 0) ? 1 : 0;
                        // it it cant two more options potentially open up
                        is_cell_available(player_color, cell_where_you_want_to_be.new_i, cell_where_you_want_to_be.new_j, reverse_direction, 1, true);
                        is_cell_available(player_color, cell_where_you_want_to_be.new_i, cell_where_you_want_to_be.new_j, reverse_direction, -1, true)
                    }
                }

            }


            // funciton check if the cell is used

            function is_cell_available(player_color, i, j, direction, move, add_option) {

                // to undestand what i have done here, just take a random call and see when the player can move to another cell, and when it cant.

                /* when a player moves down or to the right the move is 1 and when it moves up or to the left the move is -1 */

                check_i = (move == 1) ? i : i + move;
                check_j = (move == 1) ? j : j + move;

                move_i = i + move;
                move_j = j + move;

                if (direction == 0) {
                    move_j = j;
                    check_j = j;
                } else {
                    move_i = i;
                    check_i = i;
                }

                let block = (direction == 0) ? 'horizontal-div' : 'vertical-div';

                // 
                let block_div_active = $('.' + block + '[data-row="' + check_i + '"][data-column="' + check_j + '"]').attr('data-active');

                if (block_div_active == "false" && add_option) {
                    console.log(move_i + ' ' + move_j);
                    $('.inner-div[data-row="' + move_i + '"][data-column="' + move_j + '"]').attr({
                        'data-hover': 'true',
                        'data-color': player_color
                    });
                    return true;
                } else if (block_div_active == "false") {
                    // in cases you just want to check
                    return true;
                }

                return false;
            }





            function find_what_position_you_want_to_be_in(i, j, direction, move) {

                let new_i = (direction == 0) ? i + move : i;
                let new_j = (direction == 1) ? j + move : j;

                return {
                    new_i: new_i,
                    new_j: new_j,
                };
            }


            function is_the_opponent_on_the_cell(i, j) {
                let is_the_opponent_there = ($('.inner-div[data-row="' + i + '"][data-column="' + j + '"]').attr('data-active') == "true") ? true : false;

                return is_the_opponent_there;
            }


            // Function to verify wall placement is valid
            function isValidWallPlacement(wall_type, row, col) {
                // Store current state
                let wall_selector = '.' + wall_type + '[data-row="' + row + '"][data-column="' + col + '"]';
                let current_state = $(wall_selector).attr('data-active');

                // Temporarily place the wall
                $(wall_selector).attr('data-active', 'true');
                if (wall_type === 'vertical-div') {
                    $('.vertical-div[data-row="' + (row + 1) + '"][data-column="' + col + '"]')
                        .attr('data-active', 'true');
                } else {
                    $('.horizontal-div[data-row="' + row + '"][data-column="' + (col + 1) + '"]')
                        .attr('data-active', 'true');
                }

                // Check if both players can reach their goals
                let white_can_reach = canReachGoal('w');
                let black_can_reach = canReachGoal('b');

                // Restore previous state
                $(wall_selector).attr('data-active', current_state);
                if (wall_type === 'vertical-div') {
                    $('.vertical-div[data-row="' + (row + 1) + '"][data-column="' + col + '"]')
                        .attr('data-active', current_state);
                } else {
                    $('.horizontal-div[data-row="' + row + '"][data-column="' + (col + 1) + '"]')
                        .attr('data-active', current_state);
                }

                return white_can_reach && black_can_reach;
            }



            function canReachGoal(player_color) {
                // Get the current position of the player
                let active_cell = $('.inner-div[data-active="true"][data-color="' + player_color + '"]');
                let start_row = parseInt(active_cell.attr('data-row'), 10);
                let start_col = parseInt(active_cell.attr('data-column'), 10);

                // Define the goal row based on player color
                let goal_row = (player_color === 'w') ? array_size - 1 : 0;

                // Initialize the queue with the starting position
                let queue = [{
                    row: start_row,
                    col: start_col
                }];

                // Keep track of visited cells
                let visited = new Set();
                visited.add(`${start_row},${start_col}`);

                // Possible moves: up, right, down, left
                let directions = [{
                        row: -1,
                        col: 0
                    }, // up
                    {
                        row: 0,
                        col: 1
                    }, // right
                    {
                        row: 1,
                        col: 0
                    }, // down
                    {
                        row: 0,
                        col: -1
                    } // left
                ];

                while (queue.length > 0) {
                    let current = queue.shift();

                    // If we've reached the goal row, a path exists
                    if (current.row === goal_row) {
                        return true;
                    }

                    // Check all possible moves
                    for (let dir of directions) {
                        let new_row = current.row + dir.row;
                        let new_col = current.col + dir.col;

                        // Skip if out of bounds
                        if (new_row < 0 || new_row >= array_size ||
                            new_col < 0 || new_col >= array_size) {
                            continue;
                        }

                        // Skip if already visited
                        let pos_key = `${new_row},${new_col}`;
                        if (visited.has(pos_key)) {
                            continue;
                        }

                        // Check if there's a wall blocking this move
                        let can_move = true;
                        if (dir.row === 0) { // Horizontal move
                            let check_col = (dir.col === 1) ? current.col : new_col;
                            can_move = $('.vertical-div[data-row="' + current.row + '"][data-column="' + check_col + '"]').attr('data-active') === "false";
                        } else { // Vertical move
                            let check_row = (dir.row === 1) ? current.row : new_row;
                            can_move = $('.horizontal-div[data-row="' + check_row + '"][data-column="' + current.col + '"]').attr('data-active') === "false";
                        }

                        if (can_move) {
                            queue.push({
                                row: new_row,
                                col: new_col
                            });
                            visited.add(pos_key);
                        }
                    }
                }

                // If we've exhausted all possibilities without reaching the goal, no path exists
                return false;
            }






            function whose_turn_is_to_play() {
                did_someone_win();
                if (whites_turn_to_play) {
                    legal_moves("w");
                } else {
                    legal_moves("b");
                }

                whites_turn_to_play = !whites_turn_to_play;
            }


            function did_someone_win() {


                let active_cell_white = $('.inner-div[data-active="true"][data-color="w"]');
                let row_white = parseInt(active_cell_white.attr('data-row'), 10); // Parse row as an integer

                if (row_white == array_size - 1) {
                    //alert("White woooon");
                    //location.reload();
                    celebrateWin('White won');
                }

                let active_cell_black = $('.inner-div[data-active="true"][data-color="b"]');
                let row_black = parseInt(active_cell_black.attr('data-row'), 10); // Parse row as an integer

                if (row_black == 0) {

                    celebrateWin('Black won');
                    //alert("Black woooon");
                    //location.reload();
                }

            }

            function celebrateWin(text) {
                // Trigger multiple rounds of confetti with a delay
                let confettiRounds = 3; // Number of confetti rounds to extend the effect
                let confettiDelay = 500; // Delay in milliseconds between each confetti round

                function triggerConfetti() {
                    // Trigger confetti with a high count for each round
                    party.confetti(document.body, {
                        count: party.variation.range(80, 120)
                    });

                    confettiRounds--;
                    if (confettiRounds > 0) {
                        setTimeout(triggerConfetti, confettiDelay);
                    }
                }

                // Start the confetti effect
                triggerConfetti();

                // Show a nice alert with SweetAlert2
                Swal.fire({
                    title: 'Congratulations!',
                    text: text,

                    confirmButtonText: 'Restart the game',
                    background: '#d7d1c1', // Set background color
                    color: '#3f3225', // Set text color
                    customClass: {
                        confirmButton: 'swal-confirm-button' // Custom class for button styling
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Reload the page when user presses okay
                        location.reload();
                    }
                });
            }

            // Call the function



        });
    </script>





</body>

</html>