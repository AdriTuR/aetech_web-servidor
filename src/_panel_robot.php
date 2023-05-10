<html>

<head>
    <title>First web app for ROS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="roslib.min.js"></script>
    <script src="ros3d.min.js"></script>
    <script src="main.js"></script>
</head>

<body class="d-flex flex-column h-100" onload="init()">
<!-- header of the page -->
<header class="header">
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Hello ROS</h1>
            <p>Let's connect our website to ROS</p>
        </div>
    </div>
</header>

<!-- main content -->
<main>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Menu</h3>
                        <p>This is the left side of my web page. It occupies 33% of the total width</p>
                        <label for="rosbridge_address">RosBridge Address</label>
                        <input id="rosbridge_address" type="text">
                        <button class="mt-2 btn btn-success" id="btn_con">Conectar</button>
                        <button class="mt-2 btn btn-danger" id="btn_dis">Desconectar</button>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Main content</h2>
                        <p>Here it goes the main content of my web page.</p>
                        <button class="mt-2 btn btn-primary" id="btn_moverDelante">Avanzar</button>
                        <button class="mt-2 btn btn-primary" id="btn_moverAtras">Mover Atras</button>
                        <button class="mt-2 btn btn-primary" id="btn_moverIzquierda">Mover Izquierda</button>
                        <button class="mt-2 btn btn-primary" id="btn_moverDerecha">Mover Derecha</button>
                        <button class="mt-2 btn btn-primary" id="btn_parar">Parar</button>

                        <select name="inputDonde" id="inputDonde">
                            <option value="almacen" selected>Almacen</option>
                            <option value="maquinaA" >Maquina A</option>
                        </select>
                        <button class="mt-2 btn btn-primary" id="btn_moverHacia">Mover Hacia</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- footer -->
<footer class="footer mt-auto bg-dark text-light">
    <div class="container">
        <h5>page ends here!</h5>
    </div>
</footer>
</body>

</html>