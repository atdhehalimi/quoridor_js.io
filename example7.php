<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn {
            padding: 8px 16px;
            background: #3b82f6;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn:disabled {
            background: #cbd5e1;
            cursor: not-allowed;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 2fr 3fr;
            gap: 20px;
        }

        .game-container {
            position: relative;
            border: 1px solid #e5e7eb;
            padding: 16px;
            border-radius: 4px;
        }

        .board {
            display: grid;
            grid-template-columns: repeat(9, 1fr);
            gap: 2px;
        }

        .cell {
            aspect-ratio: 1;
            border: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            position: relative;
        }

        .wall-h {
            position: absolute;
            height: 10px;
            width: 100%;
            background: transparent;
            bottom: -6px;
            left: 0;
            z-index: 1;
        }

        .wall-v {
            position: absolute;
            width: 10px;
            height: 100%;
            background: transparent;
            right: -6px;
            top: 0;
            z-index: 1;
        }

        .wall-active {
            background: #ef4444;
        }

        .current {
            background: white;
            border: 2px solid black;
        }

        .visited {
            background: #e5e7eb;
        }

        .possible {
            background: #dbeafe;
        }

        .path {
            background: #bbf7d0;
        }

        .goal {
            background: #22c55e;
            color: white;
        }

        .data {
            padding: 16px;
        }

        .queue-item {
            background: #dbeafe;
            padding: 8px;
            margin: 4px 0;
            border-radius: 4px;
        }

        .closed-item {
            background: #f1f5f9;
            padding: 4px 8px;
            margin: 0 4px;
            border-radius: 4px;
            display: inline-block;
        }

        .description {
            margin-top: 16px;
            padding: 12px;
            background: #fef9c3;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="controls">
            <button id="prevBtn" class="btn">←</button>
            <h2 id="stepTitle">Initial State</h2>
            <button id="nextBtn" class="btn">→</button>
        </div>

        <div class="grid-container">
            <div class="game-container">
                <div class="board" id="board"></div>
            </div>

            <div class="data">
                <h3>OpenSet (Priority Queue):</h3>
                <div id="openSet"></div>

                <h3>ClosedSet:</h3>
                <div id="closedSet"></div>

                <div id="description" class="description"></div>
            </div>
        </div>
    </div>

    <script>
        const steps = [{
                title: "Initial State",
                player: {
                    row: 0,
                    col: 4,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 2,
                            col: 3
                        },
                        {
                            row: 2,
                            col: 4
                        },
                        {
                            row: 4,
                            col: 4
                        },
                        {
                            row: 4,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 3,
                            col: 3
                        },
                        {
                            row: 4,
                            col: 3
                        }
                    ]
                },
                openSet: [{
                    row: 0,
                    col: 4,
                    g: 0,
                    f: 8,
                    priority: 8
                }],
                closedSet: [],
                description: "White piece starts at (0,4). Goal is bottom row. Red lines show walls. Initial f-value is 8 (distance to goal row)."
            },
            {
                title: "First Expansion",
                player: {
                    row: 0,
                    col: 4,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 2,
                            col: 3
                        },
                        {
                            row: 2,
                            col: 4
                        },
                        {
                            row: 4,
                            col: 4
                        },
                        {
                            row: 4,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 3,
                            col: 3
                        },
                        {
                            row: 4,
                            col: 3
                        }
                    ]
                },
                currentPos: {
                    row: 0,
                    col: 4
                },
                possibleMoves: [{
                        row: 0,
                        col: 3
                    },
                    {
                        row: 0,
                        col: 5
                    },
                    {
                        row: 1,
                        col: 4
                    }
                ],
                openSet: [{
                        row: 1,
                        col: 4,
                        g: 1,
                        f: 7,
                        priority: 7
                    },
                    {
                        row: 0,
                        col: 3,
                        g: 1,
                        f: 8,
                        priority: 8
                    },
                    {
                        row: 0,
                        col: 5,
                        g: 1,
                        f: 8,
                        priority: 8
                    }
                ],
                closedSet: [{
                    row: 0,
                    col: 4
                }],
                description: "Exploring moves from start. Can move left, right, or down. Each move costs 1, f-value is move cost + distance to goal row."
            },
            {
                title: "Moving Down",
                player: {
                    row: 1,
                    col: 4,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 2,
                            col: 3
                        },
                        {
                            row: 2,
                            col: 4
                        },
                        {
                            row: 4,
                            col: 4
                        },
                        {
                            row: 4,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 3,
                            col: 3
                        },
                        {
                            row: 4,
                            col: 3
                        }
                    ]
                },
                currentPos: {
                    row: 1,
                    col: 4
                },
                possibleMoves: [{
                        row: 1,
                        col: 3
                    },
                    {
                        row: 1,
                        col: 5
                    }
                ],
                openSet: [{
                        row: 1,
                        col: 3,
                        g: 2,
                        f: 7,
                        priority: 7
                    },
                    {
                        row: 1,
                        col: 5,
                        g: 2,
                        f: 7,
                        priority: 7
                    },
                    {
                        row: 0,
                        col: 3,
                        g: 1,
                        f: 8,
                        priority: 8
                    },
                    {
                        row: 0,
                        col: 5,
                        g: 1,
                        f: 8,
                        priority: 8
                    }
                ],
                closedSet: [{
                        row: 0,
                        col: 4
                    },
                    {
                        row: 1,
                        col: 4
                    }
                ],
                description: "Moving down as it reduces distance to goal. Can't move further down due to horizontal wall. Must find path around."
            },
            {
                title: "Finding Path Around Walls",
                player: {
                    row: 1,
                    col: 3,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 2,
                            col: 3
                        },
                        {
                            row: 2,
                            col: 4
                        },
                        {
                            row: 4,
                            col: 4
                        },
                        {
                            row: 4,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 3,
                            col: 3
                        },
                        {
                            row: 4,
                            col: 3
                        }
                    ]
                },
                currentPos: {
                    row: 1,
                    col: 3
                },
                possibleMoves: [{
                        row: 1,
                        col: 2
                    },
                    {
                        row: 1,
                        col: 4
                    }
                ],
                openSet: [{
                        row: 1,
                        col: 2,
                        g: 3,
                        f: 7,
                        priority: 7
                    },
                    {
                        row: 1,
                        col: 5,
                        g: 2,
                        f: 7,
                        priority: 7
                    },
                    {
                        row: 0,
                        col: 3,
                        g: 1,
                        f: 8,
                        priority: 8
                    },
                    {
                        row: 0,
                        col: 5,
                        g: 1,
                        f: 8,
                        priority: 8
                    }
                ],
                closedSet: [{
                        row: 0,
                        col: 4
                    },
                    {
                        row: 1,
                        col: 4
                    },
                    {
                        row: 1,
                        col: 3
                    }
                ],
                description: "Moving left to find path around walls. Notice how A* explores multiple potential paths simultaneously."
            },
            {
                title: "Path Found",
                player: {
                    row: 8,
                    col: 4,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 2,
                            col: 3
                        },
                        {
                            row: 2,
                            col: 4
                        },
                        {
                            row: 4,
                            col: 4
                        },
                        {
                            row: 4,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 3,
                            col: 3
                        },
                        {
                            row: 4,
                            col: 3
                        }
                    ]
                },
                path: [{
                        row: 0,
                        col: 4
                    },
                    {
                        row: 1,
                        col: 4
                    },
                    {
                        row: 1,
                        col: 3
                    },
                    {
                        row: 1,
                        col: 2
                    },
                    {
                        row: 2,
                        col: 2
                    },
                    {
                        row: 3,
                        col: 2
                    },
                    {
                        row: 4,
                        col: 2
                    },
                    {
                        row: 5,
                        col: 2
                    },
                    {
                        row: 6,
                        col: 2
                    },
                    {
                        row: 7,
                        col: 2
                    },
                    {
                        row: 8,
                        col: 2
                    }
                ],
                openSet: [],
                closedSet: [{
                        row: 0,
                        col: 4
                    },
                    {
                        row: 1,
                        col: 4
                    },
                    {
                        row: 1,
                        col: 3
                    },
                    {
                        row: 1,
                        col: 2
                    },
                    {
                        row: 2,
                        col: 2
                    },
                    {
                        row: 3,
                        col: 2
                    },
                    {
                        row: 4,
                        col: 2
                    },
                    {
                        row: 5,
                        col: 2
                    },
                    {
                        row: 6,
                        col: 2
                    },
                    {
                        row: 7,
                        col: 2
                    },
                    {
                        row: 8,
                        col: 2
                    }
                ],
                description: "Path found! A* successfully found a path around the walls to reach the goal row. Green arrows show the optimal path."
            }
        ];

        let currentStep = 0;

        function renderBoard(step) {
            const boardEl = document.getElementById('board');
            boardEl.innerHTML = '';

            // Create 9x9 board
            for (let i = 0; i < 9; i++) {
                for (let j = 0; j < 9; j++) {
                    const cellEl = document.createElement('div');
                    cellEl.className = 'cell';

                    // Add horizontal wall div
                    if (i < 8) {
                        const wallH = document.createElement('div');
                        wallH.className = 'wall-h';
                        if (step.walls?.horizontal.some(w => w.row === i && w.col === j)) {
                            wallH.className += ' wall-active';
                        }
                        cellEl.appendChild(wallH);
                    }

                    // Add vertical wall div
                    if (j < 8) {
                        const wallV = document.createElement('div');
                        wallV.className = 'wall-v';
                        if (step.walls?.vertical.some(w => w.row === i && w.col === j)) {
                            wallV.className += ' wall-active';
                        }
                        cellEl.appendChild(wallV);
                    }

                    // Mark cells based on state
                    if (step.player && step.player.row === i && step.player.col === j) {
                        cellEl.className += ' current';
                        cellEl.textContent = '⚪';
                    } else if (step.path && step.path.some(p => p.row === i && p.col === j)) {
                        cellEl.className += ' path';
                        cellEl.textContent = '→';
                    } else if (step.currentPos && step.currentPos.row === i && step.currentPos.col === j) {
                        cellEl.className += ' current';
                        cellEl.textContent = '⚪';
                    } else if (step.possibleMoves && step.possibleMoves.some(p => p.row === i && p.col === j)) {
                        cellEl.className += ' possible';
                    } else if (step.closedSet && step.closedSet.some(p => p.row === i && p.col === j)) {
                        cellEl.className += ' visited';
                    }

                    // Mark goal row
                    if (i === 8) {
                        cellEl.className += ' goal';
                        if (!cellEl.textContent) cellEl.textContent = 'G';
                    }

                    boardEl.appendChild(cellEl);
                }
            }
        }

        function renderOpenSet(openSet) {
            const openSetEl = document.getElementById('openSet');
            openSetEl.innerHTML = openSet.map(item =>
                `<div class="queue-item">{row: ${item.row}, col: ${item.col}, g: ${item.g}, f: ${item.f}}</div>`
            ).join('');
        }

        function renderClosedSet(closedSet) {
            const closedSetEl = document.getElementById('closedSet');
            closedSetEl.innerHTML = closedSet.map(pos =>
                `<span class="closed-item">(${pos.row},${pos.col})</span>`
            ).join('');
        }

        function updateStep() {
            const step = steps[currentStep];
            document.getElementById('stepTitle').textContent = step.title;
            document.getElementById('description').textContent = step.description;
            renderBoard(step);
            renderOpenSet(step.openSet);
            renderClosedSet(step.closedSet);

            document.getElementById('prevBtn').disabled = currentStep === 0;
            document.getElementById('nextBtn').disabled = currentStep === steps.length - 1;
        }



        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentStep > 0) {
                currentStep--;
                updateStep();
            }
        });

        document.getElementById('nextBtn').addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                currentStep++;
                updateStep();
            }
        });

        // Initial render
        updateStep();
    </script>
</body>

</html>