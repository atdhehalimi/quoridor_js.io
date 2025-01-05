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

        }

        .current::after {
            content: "";
            background: black;
            top: 50%;
            left: 50%;
            width: 50%;
            height: 50%;
            border-radius: 50%;
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
                title: "Gjendja fillestare",
                player: {
                    row: 0,
                    col: 4,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 1,
                            col: 3
                        },
                        {
                            row: 1,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 0,
                            col: 4
                        }, {
                            row: 1,
                            col: 4
                        }, {
                            row: 2,
                            col: 3
                        },
                        {
                            row: 3,
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
                description: "Lojtari fillon në pozitën (0,4), me qëllim të arrijë në rreshtin fillestar. Vlera fillestare e funksionit është 8."
            },
            {
                title: "Lëvizja e parë",
                player: {
                    row: 0,
                    col: 4,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 1,
                            col: 3
                        },
                        {
                            row: 1,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 0,
                            col: 4
                        }, {
                            row: 1,
                            col: 4
                        }, {
                            row: 2,
                            col: 3
                        },
                        {
                            row: 3,
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
                        row: 1,
                        col: 4
                    }
                ],
                openSet: [{
                        row: 1,
                        col: 4,
                        g: 1,
                        f: 8,
                        priority: 8
                    },
                    {
                        row: 0,
                        col: 3,
                        g: 1,
                        f: 9,
                        priority: 9
                    }
                ],
                closedSet: [{
                    row: 0,
                    col: 4
                }],
                description: "Lojtari mund të lëvizë në të majtë dhe poshtë. Funksioni llogarit peshën e lëvizjes dhe numrin e lëvizjeve."
            },
            {
                title: "Lëvizja e rradhës",
                player: {
                    row: 1,
                    col: 4,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 1,
                            col: 3
                        },
                        {
                            row: 1,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 0,
                            col: 4
                        }, {
                            row: 1,
                            col: 4
                        }, {
                            row: 2,
                            col: 3
                        },
                        {
                            row: 3,
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
                }, ],
                openSet: [{
                        row: 1,
                        col: 3,
                        g: 2,
                        f: 9,
                        priority: 9
                    },
                    {
                        row: 0,
                        col: 3,
                        g: 1,
                        f: 9,
                        priority: 9
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
                description: "Duke lëvizur poshtë, distanca nga caku zvogëlohet, duke e bërë këtë drejtim një opsion më të favorshëm."
            },
            {
                title: "Lëvizja e rradhës",
                player: {
                    row: 1,
                    col: 3,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 1,
                            col: 3
                        },
                        {
                            row: 1,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 0,
                            col: 4
                        }, {
                            row: 1,
                            col: 4
                        }, {
                            row: 2,
                            col: 3
                        },
                        {
                            row: 3,
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
                }, ],
                openSet: [{
                        row: 0,
                        col: 3,
                        g: 1,
                        f: 9,
                        priority: 9
                    },
                    {
                        row: 1,
                        col: 2,
                        g: 3,
                        f: 10,
                        priority: 10
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
                description: "Lojtari lëviz anash, pasi në këtë pikë të rrugëtimit nuk ka asnjë opsion tjetër të vlefshëm."
            },
            {
                title: "Lëvizja e rradhës",
                player: {
                    row: 0,
                    col: 3,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 1,
                            col: 3
                        },
                        {
                            row: 1,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 0,
                            col: 4
                        }, {
                            row: 1,
                            col: 4
                        }, {
                            row: 2,
                            col: 3
                        },
                        {
                            row: 3,
                            col: 3
                        }
                    ]
                },
                currentPos: {
                    row: 0,
                    col: 3
                },
                possibleMoves: [{
                    row: 0,
                    col: 2
                }, ],
                openSet: [{
                        row: 0,
                        col: 2,
                        g: 2,
                        f: 10,
                        priority: 10
                    },
                    {
                        row: 1,
                        col: 2,
                        g: 3,
                        f: 10,
                        priority: 10
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
                description: "Blloku lart, edhe pse më larg cakut, preferohet nga algoritmi, pasi ka më pak lëvizje c(s) krahasuar me opsionet e tjera të disponueshme në këtë pikë."
            },
            {
                title: "Lëvizja e rradhës",
                player: {
                    row: 0,
                    col: 2,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 1,
                            col: 3
                        },
                        {
                            row: 1,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 0,
                            col: 4
                        }, {
                            row: 1,
                            col: 4
                        }, {
                            row: 2,
                            col: 3
                        },
                        {
                            row: 3,
                            col: 3
                        }
                    ]
                },
                currentPos: {
                    row: 0,
                    col: 2
                },
                possibleMoves: [{
                    row: 0,
                    col: 1
                }, ],
                openSet: [{
                        row: 1,
                        col: 2,
                        g: 3,
                        f: 10,
                        priority: 10
                    },
                    {
                        row: 0,
                        col: 1,
                        g: 3,
                        f: 11,
                        priority: 11
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
                    },
                    {
                        row: 0,
                        col: 3
                    }
                ],
                description: "Algoritmi vëren se blloqet lart nuk janë më optimale dhe fillon të analizoj rrugët e tjera."
            },
            {
                title: "Lëvizja e rradhës",
                player: {
                    row: 1,
                    col: 2,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 1,
                            col: 3
                        },
                        {
                            row: 1,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 0,
                            col: 4
                        }, {
                            row: 1,
                            col: 4
                        }, {
                            row: 2,
                            col: 3
                        },
                        {
                            row: 3,
                            col: 3
                        }
                    ]
                },
                currentPos: {
                    row: 1,
                    col: 2
                },
                possibleMoves: [{
                        row: 2,
                        col: 2
                    },
                    {
                        row: 1,
                        col: 1
                    },
                ],
                openSet: [{
                        row: 2,
                        col: 2,
                        g: 4,
                        f: 10,
                        priority: 10
                    },
                    {
                        row: 1,
                        col: 1,
                        g: 4,
                        f: 11,
                        priority: 11
                    },
                    {
                        row: 0,
                        col: 1,
                        g: 3,
                        f: 11,
                        priority: 11
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
                    },
                    {
                        row: 0,
                        col: 3
                    },
                    {
                        row: 0,
                        col: 2
                    }
                ],
                description: "Funksioni fillon të lëvizë poshtë, duke zgjedhur një drejtim që redukton më tej distancën deri te caku."
            },
            {
                title: "Lëvizja e rradhës",
                player: {
                    row: 2,
                    col: 2,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 1,
                            col: 3
                        },
                        {
                            row: 1,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 0,
                            col: 4
                        }, {
                            row: 1,
                            col: 4
                        }, {
                            row: 2,
                            col: 3
                        },
                        {
                            row: 3,
                            col: 3
                        }
                    ]
                },
                currentPos: {
                    row: 2,
                    col: 2
                },
                possibleMoves: [{
                        row: 3,
                        col: 2
                    },
                    {
                        row: 2,
                        col: 1
                    },
                    {
                        row: 2,
                        col: 3
                    },
                ],
                openSet: [{
                        row: 3,
                        col: 2,
                        g: 5,
                        f: 10,
                        priority: 10
                    },
                    {
                        row: 2,
                        col: 3,
                        g: 5,
                        f: 11,
                        priority: 11
                    },
                    {
                        row: 2,
                        col: 1,
                        g: 5,
                        f: 11,
                        priority: 11
                    },
                    {
                        row: 1,
                        col: 1,
                        g: 4,
                        f: 11,
                        priority: 11
                    },
                    {
                        row: 0,
                        col: 1,
                        g: 3,
                        f: 11,
                        priority: 11
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
                    },
                    {
                        row: 0,
                        col: 3
                    },
                    {
                        row: 0,
                        col: 2
                    },
                    {
                        row: 1,
                        col: 2
                    }
                ],
                description: "Algoritmi vazhdon të ndjekë rrugën poshtë, pasi ky drejtim mbetet më efikas."
            },
            {
                title: "Lëvizja e rradhës",
                player: {
                    row: 3,
                    col: 2,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 1,
                            col: 3
                        },
                        {
                            row: 1,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 0,
                            col: 4
                        }, {
                            row: 1,
                            col: 4
                        }, {
                            row: 2,
                            col: 3
                        },
                        {
                            row: 3,
                            col: 3
                        }
                    ]
                },
                currentPos: {
                    row: 3,
                    col: 2
                },
                possibleMoves: [{
                        row: 4,
                        col: 2
                    },
                    {
                        row: 3,
                        col: 1
                    },
                    {
                        row: 3,
                        col: 3
                    },
                ],
                openSet: [{
                        row: 4,
                        col: 2,
                        g: 6,
                        f: 10,
                        priority: 10
                    },
                    {
                        row: 3,
                        col: 3,
                        g: 6,
                        f: 11,
                        priority: 11
                    },
                    {
                        row: 3,
                        col: 1,
                        g: 6,
                        f: 11,
                        priority: 11
                    },
                    {
                        row: 2,
                        col: 3,
                        g: 5,
                        f: 11,
                        priority: 11
                    },
                    {
                        row: 2,
                        col: 1,
                        g: 5,
                        f: 11,
                        priority: 11
                    },
                    {
                        row: 1,
                        col: 1,
                        g: 4,
                        f: 11,
                        priority: 11
                    },
                    {
                        row: 0,
                        col: 1,
                        g: 3,
                        f: 11,
                        priority: 11
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
                    },
                    {
                        row: 0,
                        col: 3
                    },
                    {
                        row: 0,
                        col: 2
                    },
                    {
                        row: 1,
                        col: 2
                    },
                    {
                        row: 2,
                        col: 2
                    }
                ],
                description: "Vazhdon të ndjekë rrugën poshtë."
            },
            {
                title: "Rruga e zbuluar",
                player: {
                    row: 8,
                    col: 2,
                    color: 'w'
                },
                walls: {
                    horizontal: [{
                            row: 1,
                            col: 3
                        },
                        {
                            row: 1,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 4
                        },
                        {
                            row: 3,
                            col: 5
                        }
                    ],
                    vertical: [{
                            row: 0,
                            col: 4
                        }, {
                            row: 1,
                            col: 4
                        }, {
                            row: 2,
                            col: 3
                        },
                        {
                            row: 3,
                            col: 3
                        }
                    ]
                },
                path: [{
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
                        row: 0,
                        col: 3
                    },
                    {
                        row: 0,
                        col: 2
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
                description: "Opsionet tani janë të qarta. A* me sukses lëviz nëpër rrugën e lirë pa pengesa. Blloqet e gjelbra tregojnë rrugën e vërtetë që është ndjekur për të arritur cakun"
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
                        // cellEl.textContent = '⚪';
                    } else if (step.path && step.path.some(p => p.row === i && p.col === j)) {
                        cellEl.className += ' path';
                        // cellEl.textContent = '→';
                    } else if (step.currentPos && step.currentPos.row === i && step.currentPos.col === j) {
                        cellEl.className += ' current';
                        //  cellEl.textContent = '⚪';
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