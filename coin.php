<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Koin - Toko Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .game-area {
            text-align: center;
            margin-bottom: 20px;
        }
        .coin-counter {
            margin-bottom: 10px;
            font-size: 24px;
        }
        .button {
            padding: 10px 20px;
            background-color: #990000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #660000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Game Koin - Toko Online</h1>
        <div class="game-area">
            <p class="coin-counter">Koin Anda: <span id="coinCount">0</span></p>
            <button class="button" onclick="earnCoins()">Mainkan Game</button>
        </div>
    </div>

    <script>
        let coins = 0;

        function earnCoins() {
            // Simulasi koin yang didapatkan dari permainan
            let earnedCoins = Math.floor(Math.random() * 10) + 1; // Contoh: 1 sampai 10 koin

            coins += earnedCoins;
            document.getElementById('coinCount').textContent = coins;
            
            // Di sini Anda bisa memanggil fungsi untuk menyimpan jumlah koin di session atau database
            // Contoh: simpanCoinsKeDatabase(coins);
        }
    </script>
</body>
</html>
