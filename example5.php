<script>
    function visualizeAStarExploration(startRow, startCol, goalRow) {
        let explorationLog = [];

        function heuristic(row) {
            return Math.abs(row - goalRow);
        }

        let openSet = [{
            row: startRow,
            col: startCol,
            g: 0,
            f: heuristic(startRow)
        }];

        let explored = new Set();

        while (openSet.length > 0) {
            // Sort by f-score
            openSet.sort((a, b) => a.f - b.f);

            let current = openSet.shift();

            // Log exploration
            explorationLog.push({
                position: `(${current.row},${current.col})`,
                gScore: current.g,
                fScore: current.f
            });

            // Goal check
            if (current.row === goalRow) {
                return explorationLog;
            }

            explored.add(`${current.row},${current.col}`);

            // Explore neighbors (simplified for demonstration)
            let possibleMoves = [{
                    row: current.row - 1,
                    col: current.col
                },
                {
                    row: current.row + 1,
                    col: current.col
                },
                {
                    row: current.row,
                    col: current.col - 1
                },
                {
                    row: current.row,
                    col: current.col + 1
                }
            ];

            for (let move of possibleMoves) {
                if (!explored.has(`${move.row},${move.col}`)) {
                    openSet.push({
                        row: move.row,
                        col: move.col,
                        g: current.g + 1,
                        f: current.g + 1 + heuristic(move.row)
                    });
                }
            }
        }

        return explorationLog;
    }

    // Example usage
    let exploration = visualizeAStarExploration(1, 1, 4);
    console.log(exploration);
</script>