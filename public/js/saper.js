const boardSize = 10; // Rozmiar planszy
const numMines = 10;  // Liczba min
const mineSymbol = 'M';
const mineIconHTML = '<img src="/images/games/death-star.png" alt="Death Star" class="mine-icon" />';
const flagSymbol = 'F';
let board = [];
let revealedCount = 0;
let flagsCount = 0;
let gameOver = false;

// Inicjalizacja gry
function initGame() {
    // Przygotuj planszę jako tablicę 2D
    board = Array.from({ length: boardSize }, () => Array(boardSize).fill(0));
    revealedCount = 0;
    flagsCount = 0;
    gameOver = false;
    placeMines();
    updateNumbers();
    createBoard();
    clearMessage();
}

// Umieszczanie min na planszy
function placeMines() {
    let minesPlaced = 0;
    while (minesPlaced < numMines) {
        const row = Math.floor(Math.random() * boardSize);
        const col = Math.floor(Math.random() * boardSize);
        // Wstaw minę tylko, jeśli w tej komórce nie ma już miny
        if (board[row][col] !== mineSymbol) {
            board[row][col] = mineSymbol;
            minesPlaced++;
        }
    }
}

// Aktualizacja liczby min wokół danej komórki
function updateNumbers() {
    for (let row = 0; row < boardSize; row++) {
        for (let col = 0; col < boardSize; col++) {
            if (board[row][col] !== mineSymbol) {
                let mineCount = 0;
                for (let r = Math.max(0, row - 1); r <= Math.min(boardSize - 1, row + 1); r++) {
                    for (let c = Math.max(0, col - 1); c <= Math.min(boardSize - 1, col + 1); c++) {
                        if (board[r][c] === mineSymbol) {
                            mineCount++;
                        }
                    }
                }
                board[row][col] = mineCount;
            }
        }
    }
}

// Tworzenie planszy gry i przypisywanie zdarzeń do komórek
function createBoard() {
    const gameBoard = document.getElementById('game-board');
    gameBoard.innerHTML = '';

    for (let row = 0; row < boardSize; row++) {
        for (let col = 0; col < boardSize; col++) {
            const cellDiv = document.createElement('div');
            cellDiv.classList.add('cell');
            cellDiv.dataset.row = row;
            cellDiv.dataset.col = col;

            // Kliknięcie lewym przyciskiem odkrywa pole
            cellDiv.addEventListener('click', () => revealCell(row, col));
            // Kliknięcie prawym przyciskiem (contextmenu) przełącza flagę
            cellDiv.addEventListener('contextmenu', (e) => {
                e.preventDefault();
                toggleFlag(row, col, cellDiv);
            });

            gameBoard.appendChild(cellDiv);
        }
    }
}

// Funkcja odkrywająca pole
function revealCell(row, col) {
    if (gameOver) return;

    const cellDiv = document.querySelector(`div[data-row="${row}"][data-col="${col}"]`);

    // Jeżeli pole jest już oznaczone flagą lub odkryte, nie rób nic
    if (cellDiv.classList.contains('flagged') || cellDiv.classList.contains('revealed')) return;

    if (board[row][col] === mineSymbol) {
        // Trafienie na minę: oznacz pole, wyświetl komunikat i odkryj wszystkie miny
        cellDiv.classList.add('mine');
        // Zamiast innerText, używamy innerHTML, aby wstawić obrazek
        cellDiv.innerHTML = mineIconHTML;
        displayMessage("Przegrałeś!");
        revealAllMines();
        gameOver = true;
        setTimeout(() => initGame(), 1500);
        return;
    } else {
        // Odkryj pole – wyświetl liczbę sąsiadujących min (lub puste, jeśli 0)
        cellDiv.classList.add('revealed');
        const cellNumber = board[row][col];
        cellDiv.innerHTML = (cellNumber === 0) ? "" : cellNumber;
        if (cellNumber > 0) {
            cellDiv.classList.add(`number-${cellNumber}`);
        }
        revealedCount++;

        // Jeśli pole jest puste, automatycznie odkryj sąsiednie pola
        if (cellNumber === 0) {
            autoReveal(row, col);
        }

        // Sprawdzenie warunku zwycięstwa
        if (revealedCount === boardSize * boardSize - numMines) {
            displayMessage("Gratulacje, wygrałeś!");
            gameOver = true;
            revealAllMines();
            setTimeout(() => initGame(), 1500);
        }
    }
}

// Automatyczne odkrywanie sąsiednich pustych pól
function autoReveal(row, col) {
    for (let r = Math.max(0, row - 1); r <= Math.min(boardSize - 1, row + 1); r++) {
        for (let c = Math.max(0, col - 1); c <= Math.min(boardSize - 1, col + 1); c++) {
            // Pomijanie aktualnej komórki
            if (r === row && c === col) continue;
            const neighborDiv = document.querySelector(`div[data-row="${r}"][data-col="${c}"]`);
            if (!neighborDiv.classList.contains('revealed') && !neighborDiv.classList.contains('flagged')) {
                revealCell(r, c);
            }
        }
    }
}

// Funkcja przełączająca flagę na polu
function toggleFlag(row, col, cellDiv) {
    if (gameOver) return;
    if (cellDiv.classList.contains('revealed')) return;

    // Przełączenie flagi: dodaj lub usuń klasę 'flagged'
    if (cellDiv.classList.contains('flagged')) {
        cellDiv.classList.remove('flagged');
        cellDiv.innerText = "";
        flagsCount--;
    } else if (flagsCount < numMines) {
        cellDiv.classList.add('flagged');
        cellDiv.innerText = flagSymbol;
        flagsCount++;
    }
}

// Odkrywa wszystkie miny – przydatne w przypadku przegranej lub wygranej
function revealAllMines() {
    board.forEach((rowArr, rIndex) => {
        rowArr.forEach((cell, cIndex) => {
            if (cell === mineSymbol) {
                const cellDiv = document.querySelector(`div[data-row="${rIndex}"][data-col="${cIndex}"]`);
                if (!cellDiv.classList.contains('revealed')) {
                    cellDiv.classList.add('revealed', 'mine');
                    cellDiv.innerHTML = mineIconHTML;
                }
            }
        });
    });
}

// Wyświetlanie komunikatu o zakończeniu gry
function displayMessage(message) {
    const messageDiv = document.getElementById('message');
    if (messageDiv) {
        messageDiv.innerText = message;
    } else {
        // Jeśli element nie istnieje – użyj alert
        alert(message);
    }
}

// Czyszczenie komunikatu
function clearMessage() {
    const messageDiv = document.getElementById('message');
    if (messageDiv) {
        messageDiv.innerText = "";
    }
}

// Ustawienia zdarzeń
window.addEventListener('load', initGame);
