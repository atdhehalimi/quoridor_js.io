<script>
    function pathExistsToGoal(startRow, startCol, playerColor) {
        // Set to keep track of visited positions to avoid loops
        const visited = new Set();

        // Queue for BFS - starts with initial position
        const queue = [
            [startRow, startCol]
        ];

        // Define goal row (opposite side of board)
        const goalRow = playerColor === 'white' ? 8 : 0;

        while (queue.length > 0) {
            // Get next position to check
            const [currentRow, currentCol] = queue.shift();

            // Success! Found a path to goal
            if (currentRow === goalRow) {
                return true;
            }

            // Create unique position key
            const positionKey = `${currentRow},${currentCol}`;

            // Skip if we've been here before
            if (visited.has(positionKey)) {
                continue;
            }

            // Mark current position as visited
            visited.add(positionKey);

            // Get all possible moves from current position
            const validMoves = getValidMoves(currentRow, currentCol);

            // Add all valid moves to queue
            for (const [nextRow, nextCol] of validMoves) {
                queue.push([nextRow, nextCol]);
            }
        }

        // No path found
        return false;
    }

    function getValidMoves(row, col) {
        const moves = [];

        // Define possible directions (up, right, down, left)
        const directions = [
            [-1, 0], // up
            [0, 1], // right
            [1, 0], // down
            [0, -1] // left
        ];

        for (const [dRow, dCol] of directions) {
            const newRow = row + dRow;
            const newCol = col + dCol;

            // First check if move is within board
            if (!isValidPosition(newRow, newCol)) {
                continue;
            }

            // Check if there's a wall blocking this move
            if (!isWallBlocking(row, col, newRow, newCol)) {
                // Normal move
                moves.push([newRow, newCol]);
            }

            // Check jumping over opponent logic
            if (hasOpponentPawn(newRow, newCol)) {
                const jumpRow = newRow + dRow;
                const jumpCol = newCol + dCol;

                // Check if jump position is valid and not blocked by wall
                if (isValidPosition(jumpRow, jumpCol) &&
                    !isWallBlocking(newRow, newCol, jumpRow, jumpCol)) {
                    moves.push([jumpRow, jumpCol]);
                } else {
                    // Handle diagonal jumps when straight jump is blocked
                    const diagonalMoves = getDiagonalJumps(row, col, newRow, newCol);
                    moves.push(...diagonalMoves);
                }
            }
        }

        return moves;
    }

    function isValidPosition(row, col) {
        return row >= 0 && row < 9 && col >= 0 && col < 9;
    }

    function isWallBlocking(fromRow, fromCol, toRow, toCol) {
        // This depends on how you store walls
        // Example with wall array:
        const horizontal = toRow > fromRow ? fromRow : toRow;
        const vertical = toCol > fromCol ? fromCol : toCol;

        if (toRow !== fromRow) {
            // Check horizontal wall
            return horizontalWalls.some(wall =>
                wall.row === horizontal &&
                wall.col === fromCol
            );
        } else {
            // Check vertical wall
            return verticalWalls.some(wall =>
                wall.row === fromRow &&
                wall.col === vertical
            );
        }
    }

    function hasOpponentPawn(row, col) {
        // Check if opponent's pawn is at this position
        return board[row][col] === opponentColor;
    }

    function getDiagonalJumps(row, col, pawnRow, pawnCol) {
        const moves = [];

        // If blocked going forward, check diagonals
        if (isWallBlocking(pawnRow, pawnCol, pawnRow + (pawnRow - row), pawnCol)) {
            // Try diagonal left
            if (!isWallBlocking(pawnRow, pawnCol, pawnRow, pawnCol - 1)) {
                moves.push([pawnRow, pawnCol - 1]);
            }
            // Try diagonal right
            if (!isWallBlocking(pawnRow, pawnCol, pawnRow, pawnCol + 1)) {
                moves.push([pawnRow, pawnCol + 1]);
            }
        }

        return moves;
    }

    function canPlaceWall(wallRow, wallCol, isVertical) {
        // Save current wall state
        const wallState = saveWallState();

        // Try placing the wall
        placeWall(wallRow, wallCol, isVertical);

        // Check if both players still have a path
        const whitePath = pathExistsToGoal(whitePos.row, whitePos.col, 'white');
        const blackPath = pathExistsToGoal(blackPos.row, blackPos.col, 'black');

        // Restore wall state
        restoreWallState(wallState);

        // Wall can be placed only if both players have a path
        return whitePath && blackPath;
    }



    
</script>