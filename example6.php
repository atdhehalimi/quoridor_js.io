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
    
    .board {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 4px;
      border: 1px solid #e5e7eb;
      padding: 16px;
      border-radius: 4px;
    }
    
    .cell {
      aspect-ratio: 1;
      border: 1px solid #e5e7eb;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
    }
    
    .current { background: white; border: 2px solid black; }
    .visited { background: #e5e7eb; }
    .possible { background: #dbeafe; }
    .path { background: #bbf7d0; }
    .goal { background: #22c55e; color: white; }
    .wall { background: #ef4444; }
    
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
      <div class="board" id="board"></div>
      
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
    const steps = [
      {
        title: "Initial State",
        board: [
          [0, 0, 1, 0, 0, 0, 0],
          [0, 0, 0, 0, 0, 0, 0],
          [0, 'W', 'W', 'W', 0, 0, 0],
          [0, 0, 0, 0, 0, 0, 0],
          [0, 0, 'W', 'W', 0, 0, 0],
          [0, 0, 0, 0, 0, 0, 0],
          ['G', 'G', 'G', 'G', 'G', 'G', 'G'],
        ],
        openSet: [
          { row: 0, col: 2, g: 0, f: 6, priority: 6 }
        ],
        closedSet: [],
        description: "White piece starts at (0,2). Any position in bottom row is a goal. 'W' represents walls. Initial f-value is 6 (shortest possible distance to goal row)."
      },
      {
        title: "First Expansion",
        board: [
          [0, 0, 2, 0, 0, 0, 0],
          [0, 3, 0, 3, 0, 0, 0],
          [0, 'W', 'W', 'W', 0, 0, 0],
          [0, 0, 0, 0, 0, 0, 0],
          [0, 0, 'W', 'W', 0, 0, 0],
          [0, 0, 0, 0, 0, 0, 0],
          ['G', 'G', 'G', 'G', 'G', 'G', 'G'],
        ],
        openSet: [
          { row: 1, col: 1, g: 1, f: 5, priority: 5 },
          { row: 1, col: 3, g: 1, f: 5, priority: 5 }
        ],
        closedSet: [{row: 0, col: 2}],
        description: "Can't move down due to wall. Only left and right moves are valid. Each move costs 1, and f-value is move cost + distance to goal row."
      },
      {
        title: "Exploring Left Path",
        board: [
          [0, 0, 2, 0, 0, 0, 0],
          [0, 1, 0, 2, 0, 0, 0],
          [0, 'W', 'W', 'W', 0, 0, 0],
          [0, 3, 0, 0, 0, 0, 0],
          [0, 0, 'W', 'W', 0, 0, 0],
          [0, 0, 0, 0, 0, 0, 0],
          ['G', 'G', 'G', 'G', 'G', 'G', 'G'],
        ],
        openSet: [
          { row: 3, col: 1, g: 2, f: 4, priority: 4 },
          { row: 1, col: 3, g: 1, f: 5, priority: 5 }
        ],
        closedSet: [
          {row: 0, col: 2},
          {row: 1, col: 1}
        ],
        description: "Exploring left path first. Notice how we have to go around the wall. The heuristic (distance to goal) helps guide the search toward promising paths."
      },
      {
        title: "Finding Path Around Walls",
        board: [
          [0, 0, 2, 0, 0, 0, 0],
          [0, 2, 0, 2, 0, 0, 0],
          [0, 'W', 'W', 'W', 0, 0, 0],
          [0, 1, 0, 0, 3, 0, 0],
          [0, 0, 'W', 'W', 0, 0, 0],
          [0, 3, 0, 0, 0, 0, 0],
          ['G', 'G', 'G', 'G', 'G', 'G', 'G'],
        ],
        openSet: [
          { row: 5, col: 1, g: 3, f: 3, priority: 3 },
          { row: 3, col: 4, g: 3, f: 4, priority: 4 },
          { row: 1, col: 3, g: 1, f: 5, priority: 5 }
        ],
        closedSet: [
          {row: 0, col: 2},
          {row: 1, col: 1},
          {row: 3, col: 1}
        ],
        description: "Algorithm finds path around walls. Lower f-values indicate better paths. Multiple paths are explored simultaneously, prioritizing the most promising ones."
      },
      {
        title: "Path Found",
        board: [
          [0, 0, 2, 0, 0, 0, 0],
          [0, 2, 0, 2, 0, 0, 0],
          [0, 'W', 'W', 'W', 0, 0, 0],
          [0, 'P', 0, 0, 2, 0, 0],
          [0, 'P', 'W', 'W', 0, 0, 0],
          [0, 'P', 0, 0, 0, 0, 0],
          ['G', 'G', 'G', 'G', 'G', 'G', 'G'],
        ],
        openSet: [],
        closedSet: [
          {row: 0, col: 2},
          {row: 1, col: 1},
          {row: 3, col: 1},
          {row: 4, col: 1},
          {row: 5, col: 1}
        ],
        description: "Optimal path found! Notice how A* found the shortest path around the walls to reach the goal row. 'P' marks the final path."
      }
    ];

    let currentStep = 0;

    function renderBoard(board) {
      const boardEl = document.getElementById('board');
      boardEl.innerHTML = '';
      
      board.forEach((row, i) => {
        row.forEach((cell, j) => {
          const cellEl = document.createElement('div');
          cellEl.className = 'cell';
          
          switch(cell) {
            case 1: 
              cellEl.className += ' current';
              cellEl.textContent = '⚪';
              break;
            case 2:
              cellEl.className += ' visited';
              break;
            case 3:
              cellEl.className += ' possible';
              break;
            case 'P':
              cellEl.className += ' path';
              cellEl.textContent = '→';
              break;
            case 'G':
              cellEl.className += ' goal';
              cellEl.textContent = 'G';
              break;
            case 'W':
              cellEl.className += ' wall';
              cellEl.textContent = '■';
              break;
          }
          
          boardEl.appendChild(cellEl);
        });
      });
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
      renderBoard(step.board);
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