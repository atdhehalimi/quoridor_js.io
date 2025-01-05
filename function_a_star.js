
function canReachGoal_a_star(player_color) {
    // Get the current position of the player
    let active_cell = $('.inner-div[data-active="true"][data-color="' + player_color + '"]');
    let start_row = parseInt(active_cell.attr('data-row'), 10);
    let start_col = parseInt(active_cell.attr('data-column'), 10);

    // Define the goal row based on player color
    let goal_row = (player_color === 'w') ? array_size - 1 : 0;

    // Heuristic function: Manhattan distance to goal row
    function heuristic(row, col) {
        return Math.abs(row - goal_row);
    }

    // Priority queue implementation
    class PriorityQueue {
        constructor() {
            this.elements = [];
        }

        enqueue(element, priority) {
            this.elements.push({
                element,
                priority
            });
            this.elements.sort((a, b) => a.priority - b.priority);
        }

        dequeue() {
            return this.elements.shift().element;
        }

        isEmpty() {
            return this.elements.length === 0;
        }
    }

    // Create the open and closed sets
    let openSet = new PriorityQueue();
    let closedSet = new Set();

    // Initial state
    openSet.enqueue({
        row: start_row,
        col: start_col,
        g: 0, // Cost from start
        f: heuristic(start_row, start_col) // Total estimated cost
    }, heuristic(start_row, start_col));

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

    while (!openSet.isEmpty()) {
        // Get the node with the lowest f score
        let current = openSet.dequeue();

        // Check if we've reached the goal row
        if (current.row === goal_row) {
            return true;
        }

        // Add to closed set
        closedSet.add(`${current.row},${current.col}`);

        // Explore neighbors
        for (let dir of directions) {
            let new_row = current.row + dir.row;
            let new_col = current.col + dir.col;

            // Skip if out of bounds
            if (new_row < 0 || new_row >= array_size ||
                new_col < 0 || new_col >= array_size) {
                continue;
            }

            // Skip if already in closed set
            let pos_key = `${new_row},${new_col}`;
            if (closedSet.has(pos_key)) {
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
                // Calculate g score (cost from start)
                let g_score = current.g + 1;

                // Calculate f score (total estimated cost)
                let f_score = g_score + heuristic(new_row, new_col);

                // Add to open set
                openSet.enqueue({
                    row: new_row,
                    col: new_col,
                    g: g_score,
                    f: f_score
                }, f_score);
            }
        }
    }

    // If we've exhausted all possibilities without reaching the goal
    return false;
}
