<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!--<link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="barra-lateral">
        <div class="nombre-pagina">
            <ion-icon id="cloud" name="cloud-outline"></ion-icon>
            <span>Apex</span>
        </div>
        <buttom class="boton">
            <ion-icon name="add-outline"></ion-icon>
            <span>Create new</span>
        </buttom>
        <nav class="navegacion">
            <ul>
                <li>
                    <a href="#">
                        <ion-icon name="mail-unread-outline"></ion-icon>
                        <span>Inbox</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="send-outline"></ion-icon>
                        <span>Send</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>Draft</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="bookmark-outline"></ion-icon>
                        <span>Inportante</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="trash-outline"></ion-icon>
                        <span>Trash</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="linea"></div>
        <div class="modo-oscuro">
            <div class="info">
                <ion-icon name="moon-outline"></ion-icon>
                <span>Dark Mode</span>
            </div>
            <div class="switch">
                <div class="base">
                    <div class="circulo">

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/script.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
