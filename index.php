<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        /* ========================================================
        /* CATALOG MENU */
        /* ========================================================

        Каждый уровень вложенности это несортированные список c классом для каждого элемента.
        Звездочка в конце это подстановочный символ, вместо неё цифра, для каждого уровня вложенности.
        Самый первый уровень меню это 1, следующий 2 и т.д.

        <ul class="catalog-menu-ul-level-*">
            <li class="catalog-menu-li-level-*">
                <a class="catalog-menu-a-level-*"></a>
                <ul class="catal...">
                    .....
                </ul>
            </li>
        </ul>

        Активнная ссылка, вложенность которой разврнута имеет класс catalog-menu-active-a-level-*

        Выбранные ссылки в последнем уровне вложенности имеют класс .catalog-menu-a-level-last
        Он одинаковый для всех уровней.

        */

        /*Общие настройки*/

        .catalog-menu {
            margin: 50px;
        }

        .catalog-menu li {
            list-style-type: none;
        }

        .catalog-menu a {
            font-size: 20px;
        }

        /* catalog menu level 1 */

        .catalog-menu-a-level-1 {
            color: #9e262c;
        }


        .catalog-menu-active-a-level-1 {
            color: #ff4238;
        }

        /* catalog menu level 2 */

        .catalog-menu-a-level-2 {
            color: #006800;
        }

        .catalog-menu-active-a-level-2 {
            color: #3abc00;
        }

        /* catalog menu level 3 */

        .catalog-menu-a-level-3 {
            color: #545107;
        }

        .catalog-menu-active-a-level-3 {
            color: #afb912;
        }

        /* catalog menu level 4 */

        .catalog-menu-a-level-4 {
            color: #6e1367;
        }

        .catalog-menu-active-a-level-4 {
            color: #e22ddb;
        }

        /* catalog menu level last */

       .catalog-menu-a-level-last {
           color: black;
       }

    </style>

</head>
<body>
        <?php require_once "catalog_menu.php"; ?>
        <?php show_menu(); ?>
</body>
</html>