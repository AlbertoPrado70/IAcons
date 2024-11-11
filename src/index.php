<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IA Icons</title>
</head>
<body>

    <div class="header">
        <h1>A collection of free icons made with DALL E 3 for your projects ❤️</h1>
        <p>I have been using DALLE 3 to create icons for a few pages and i decided to create a collection with the best of them. Some of the created icons are pretty good and i keep adding new content so be sure to check it.</p>
        <form>
            <input type="text" class="search" placeholder="Search icon">
        </form>
    </div>

    <div class="grid">
        <?php foreach (glob($directory . './**/*.svg') as $file): ?>
            <div class="item">
                <a href="<?= $file ?>" class="svg" download>
                    <?= file_get_contents($file); ?>
                </a>
                <div class="label">
                    <?= str_replace('-', ' ', str_replace('.svg', '', explode('/', $file)[2])) ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
        <span>Made by <a href="https://alprado.com">Alberto Prado</a></span>
    </footer>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0; 
            padding: 10px;
            max-width: 740px;
            margin: 0 auto;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .header {
            padding: 32px 0;
        }

        h1 {
            font-size: 36px;
            line-height: 1;
        }

        .grid {
            display: grid;
            grid-template-columns: 128px 128px 128px 128px 128px;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 32px;
        }

        .item {
            width: 128px;
            margin-bottom: 32px;
        }

        .item .svg {
            position: relative;
            display: flex;
            border: 1px solid #dadada;
            border-radius: 12px;
            align-items: center;
            justify-content: center;
            width: 128px;
            height: 128px;
        }

        .item svg {
            width: 128px;
            height: 128px;
        }

        .item .label {
            width: 128px;
            text-transform: capitalize;
            font-weight: 600;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            display: block;
            text-overflow: ellipsis;
            margin-top: 4px;
            text-align: center;
        }

        .search {
            outline: none;
            background: #f7f7f7;
            padding: 12px 26px;
            border-radius: 99px;
            border: none;
            width: 100%;
            margin-top: 32px;
        }

        footer, footer a {
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            color: #cacaca;
            margin: 32px 0;
        }

        @media (max-width: 640px) {
            .grid {
                grid-template-columns: 128px 128px 128px 128px;
            }
        }

        @media (max-width: 560px) {
            .grid {
                grid-template-columns: 128px 128px 128px;
            }
        }

        @media (max-width: 420px) {
            .grid {
                grid-template-columns: 128px 128px;
            }
        }

    </style>

</body>
</html>