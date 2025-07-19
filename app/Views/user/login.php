<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cyberpunk Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet" />
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Orbitron', sans-serif;
            background: radial-gradient(circle at top left, #1a1a1a, #000);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            overflow: hidden;
        }

        .login-box {
            position: relative;
            background: #111;
            padding: 40px 35px;
            border-radius: 12px;
            width: 100%;
            max-width: 420px;
            box-shadow:
                0 0 15px #f72585,
                inset 0 0 15px #3a0ca3;
            border: 1px solid #3a0ca3;
            animation: fadeInUp 0.8s ease forwards;
        }

        .login-box::before {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            z-index: -1;
            background: linear-gradient(45deg, #f72585, #7209b7, #3a0ca3);
            filter: blur(30px);
            opacity: 0.1;
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #f72585;
            text-transform: uppercase;
            font-size: 24px;
            letter-spacing: 2px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 13px;
            color: #aaa;
            margin-bottom: 5px;
            display: block;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #3a0ca3;
            border-radius: 6px;
            background-color: #0e0e0e;
            color: #fff;
            font-size: 14px;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #f72585;
            box-shadow: 0 0 10px #f72585;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #3a0ca3;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            transition: background 0.3s, box-shadow 0.3s;
        }

        button:hover {
            background: #f72585;
            box-shadow: 0 0 12px #f72585;
        }

        .alert {
            background-color: #ff0044;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 6px;
            font-weight: bold;
            font-size: 13px;
            box-shadow: 0 0 8px #ff0044;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            .login-box {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h2>Admin Login</h2>

        <?php if (session()->getFlashdata('flash_msg')): ?>
            <div class="alert"><?= session()->getFlashdata('flash_msg') ?></div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="InputForEmail">Email</label>
                <input type="email" id="InputForEmail" name="email" value="<?= set_value('email') ?>" required />
            </div>

            <div class="form-group">
                <label for="InputForPassword">Password</label>
                <input type="password" id="InputForPassword" name="password" required />
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>