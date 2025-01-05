// Modify the vertical-div click handler


<script>
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