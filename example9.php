<script>
    /* This below is an explenaition ive done in albanianin to this procedure  */


    /* 
    
    4.2	Lwvizja

Lwvizja e njw lojtari prej njw pozitte nw tjeterwn bwhet duke manipuluar me atributet e elementeve kuti tw DOM (Document Object Model). 
Kur lojtari fiton rradhwn pwr tw lujatur ajtivizohet funksioni legal_moves, detyra e tw cilit eshtw tw i identifikoj kutitw nw tw cilat
 mund tw lwvizw. Fillimisht bwhet identifikimi i rreshtit dhe kolonws nw tw cilwn pjesmarrwsi po qwndron pastaj me anw tw funksionit 
 check_neighbor kontrollon pozitat nw tw 4 anwt e lojtarit dhe vlerwson nwse janw nw dispozicion pwr tw lwvizur. Qwlllimi primar i kwtij
  funksoni wshtw tw zbuloj nwse kundwrshtari po qwndron nw pozitwn e dwshiruar dhe tw veproj varwsisht prej asaj pwrgjigjie. Funkioni i 
  implementon is_cell_available() pwr tw kuptuar nwse pozita wshtw e lirw, dhe nw raste tw caktuara edhe pwr tw lwvizur lojtarin kur 
  gjithçka wshtw nw rregull. Check_neighbor nw rast se kutia wshtw e lirw dhe e arritshme bwn lwvizjen menjeherw , pwrndryshe tenton 
  tw kapwrcejw kundwrshtarin pwr njw kuti njw drejtim tw ngjashwm mw atw nw mes tw pozitws aktuale dhe asaj tw dwshiruar. Duke pasur 
  parasysh se ka raste kur kapwrcimi i lojtarit tjetwr bwhet i pamundur nga prania e pengesave ose faktit se do dilnim twrwsisht nga 
  , loja hap deri nw dy kuti tw reja nw drejtim tw kundwrt, nw rast se asnjwra prej tyre nuk wshtw e arritshme lojtari duhet tw shikoj 
  hapwsira tw tjera lwvizjejesh.

    
    */

    whose_turn_is_to_play();

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


    function whose_turn_is_to_play() {
        did_someone_win();
        if (whites_turn_to_play) {
            legal_moves("w");
        } else {
            legal_moves("b");
        }

        whites_turn_to_play = !whites_turn_to_play;
    }


    function legal_moves(player_color) {

        // remove the hover ability to the boxes that were hoverable the last time (needed when going from black to white turn)
        $('.inner-div[data-hover="true"]').attr({
            'data-hover': 'false'
        });

        //This may not be needed since all of the divs have hover false
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