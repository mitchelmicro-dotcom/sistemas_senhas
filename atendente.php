<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel Atendente - Sistema de Senhas</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #f8f9fa;
            }
        </style>
    </head>

   

    <body>

        //Inicia o corpo da pagina
        <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Painel do Atendente</h3>
                    </div>
                    <div class="card-body text-center">
                        
                        <div class="mb-4">
                            <label for="guiche" class="form-label fw-bold">Número do Guichê:</label>
                            <input type="number" id="guiche" class="form-control text-center mx-auto" style="max-width: 100px;" value="1">
                        </div>

                        <hr>

                        <div class="my-4">
                            <p class="text-muted mb-1">Última senha chamada:</p>
                            <h1 class="display-1 fw-bold text-primary" id="senha-atual">--</h1>
                        </div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-success btn-lg" id="btn-chamar">CHAMAR PRÓXIMA</button>
                            <button class="btn btn-outline-secondary" id="btn-repetir">Repetir Chamada</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
        
    </body>
</html>