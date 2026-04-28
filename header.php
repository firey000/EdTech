<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <style>

        body { margin: 0; padding: 0; }


        .main-header {
            background-color: #FFF9C4; 
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-bottom: 2px solid #000;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo {
            font-size: 28px;
            font-weight: 900;
            color: #000;
            margin-right: 15px;
            letter-spacing: -1px;
        }

        .header-nav {
            display: flex;
            gap: 8px;
        }

        .nav-link {
            text-decoration: none;
            color: #000;
            border: 1px solid #000;
            padding: 6px 12px;
            font-size: 13px;
            transition: 0.2s;
        }

        .nav-link:hover {
            background-color: rgba(0,0,0,0.05);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-grow: 1;
            justify-content: flex-end;
            margin-left: 40px;
        }

        .search-box {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .search-input {
            width: 100%;
            border: 1px solid #000;
            border-radius: 25px;
            padding: 10px 40px 10px 20px;
            font-size: 16px;
            outline: none;
            background: transparent;
        }

        .search-btn {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        .user-menu {
            display: flex;
            gap: 12px;
        }

        .icon-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border: 1.5px solid #000;
            border-radius: 8px;
            background: #fff;
            text-decoration: none;
            color: #000;
            font-size: 20px;
        }

    
        .icon-btn.dark {
            background: #000;
            color: #fff;
        }
    </style>
</head>
<body>

<header class="main-header">
    
    <div class="header-left">
        <div class="logo">EdTech</div>
        <nav class="header-nav">
            <a href="#" class="nav-link">Каталог курсов</a>
            <a href="#" class="nav-link">Учиться бесплатно</a>
            <a href="#" class="nav-link">Медиа Нетологии</a>
        </nav>
    </div>
    
\
    <div class="header-right">
        <div class="search-box">
            <input type="text" class="search-input" placeholder="Поиск">
            <button class="search-btn">🔍</button>
        </div>
        
        <div class="user-menu">
            <a href="#" class="icon-btn">👤</a>
            <a href="#" class="icon-btn dark">🕊️</a>
        </div>
    </div>
</header>

</body>
</html>
