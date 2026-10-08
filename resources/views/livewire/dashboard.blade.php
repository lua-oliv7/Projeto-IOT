<div>
    
</div>













{{-- <div class="container">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

        <link rel="stylesheet" href="http://10.137.11.6/css/style.css">

        <title>Page Title</title>

        <!-- Livewire Styles -->
        <style>
            [wire\:loading][wire\:loading],
            [wire\:loading\.delay][wire\:loading\.delay],
            [wire\:loading\.inline-block][wire\:loading\.inline-block],
            [wire\:loading\.inline][wire\:loading\.inline],
            [wire\:loading\.block][wire\:loading\.block],
            [wire\:loading\.flex][wire\:loading\.flex],
            [wire\:loading\.table][wire\:loading\.table],
            [wire\:loading\.grid][wire\:loading\.grid],
            [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {
                display: none;
            }

            [wire\:loading\.delay\.none][wire\:loading\.delay\.none],
            [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest],
            [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter],
            [wire\:loading\.delay\.short][wire\:loading\.delay\.short],
            [wire\:loading\.delay\.default][wire\:loading\.delay\.default],
            [wire\:loading\.delay\.long][wire\:loading\.delay\.long],
            [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer],
            [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {
                display: none;
            }

            [wire\:offline][wire\:offline] {
                display: none;
            }

            [wire\:dirty]:not(textarea):not(input):not(select) {
                display: none;
            }

            :root {
                --livewire-progress-bar-color: #2299dd;
            }

            [x-cloak] {
                display: none !important;
            }

            [wire\:cloak] {
                display: none !important;
            }
        </style>
        <style>
            /* Make clicks pass-through */

            #nprogress {
                pointer-events: none;
            }

            #nprogress .bar {
                background: var(--livewire-progress-bar-color, #29d);

                position: fixed;
                z-index: 1031;
                top: 0;
                left: 0;

                width: 100%;
                height: 2px;
            }

            /* Fancy blur effect */
            #nprogress .peg {
                display: block;
                position: absolute;
                right: 0px;
                width: 100px;
                height: 100%;
                box-shadow: 0 0 10px var(--livewire-progress-bar-color, #29d), 0 0 5px var(--livewire-progress-bar-color, #29d);
                opacity: 1.0;

                -webkit-transform: rotate(3deg) translate(0px, -4px);
                -ms-transform: rotate(3deg) translate(0px, -4px);
                transform: rotate(3deg) translate(0px, -4px);
            }

            /* Remove these to get rid of the spinner */
            #nprogress .spinner {
                display: block;
                position: fixed;
                z-index: 1031;
                top: 15px;
                right: 15px;
            }

            #nprogress .spinner-icon {
                width: 18px;
                height: 18px;
                box-sizing: border-box;

                border: solid 2px transparent;
                border-top-color: var(--livewire-progress-bar-color, #29d);
                border-left-color: var(--livewire-progress-bar-color, #29d);
                border-radius: 50%;

                -webkit-animation: nprogress-spinner 400ms linear infinite;
                animation: nprogress-spinner 400ms linear infinite;
            }

            .nprogress-custom-parent {
                overflow: hidden;
                position: relative;
            }

            .nprogress-custom-parent #nprogress .spinner,
            .nprogress-custom-parent #nprogress .bar {
                position: absolute;
            }

            @-webkit-keyframes nprogress-spinner {
                0% {
                    -webkit-transform: rotate(0deg);
                }

                100% {
                    -webkit-transform: rotate(360deg);
                }
            }

            @keyframes nprogress-spinner {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }
        </style>
    </head>

    <body>
        <div class="d-flex">
        <aside class="sidebar">
            <div class="logo d-flex align-items-center gap-3">
                <div class="icon-box">
                    <i class="bi bi-shield-lock-fill"></i>
                </div>
                <div>
                    <h6 class="mb-0 fw-semibold">MonitorIoT</h6>
                </div>
            </div>

            <div class="nav-section-title">Menu Principal</div>

            <nav class="nav flex-column px-2">
                <a href="/" class="nav-link"><i class="bi bi-speedometer2"></i> Dashboard</a>
                <a href="http://10.137.11.6/ambiente/list" class="nav-link"><i class="bi bi-building"></i> Ambientes</a>
                <a href="http://10.137.11.6/sensor/list" class="nav-link"><i class="bi bi-thermometer-sun"></i> Sensores</a>
                <a href="#" class="nav-link"><i class="bi bi-people"></i> Usuários</a>
                <a href="#" class="nav-link"><i class="bi bi-exclamation-triangle"></i> Alertas</a>
                <a href="#" class="nav-link"><i class="bi bi-gear"></i> Configurações</a>

            </nav>

            <div class="mt-auto px-3 py-4 border-top">
                <div class="status-box">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <div class="status-dot"></div>
                        <span class="fw-medium">Sistema Online</span>
                    </div>
                    <div class="text-muted">Monitorando...</div>
                </div>
            </div>
        </aside>

        <div class="flex-grow-1 d-flex flex-column">
            <header class="header">
                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-shield-lock text-primary fs-4"></i>
                    <h5 class="mb-0 fw-semibold">Ambiente Seguro</h5>
                </div>
                <small class="text-muted">Escola SESI/SENAI de Presidente Epitácio</small>
            </header>

            <main class="main-content">
                <div wire:snapshot="{&quot;data&quot;:{&quot;temperatura&quot;:null,&quot;luminosidade&quot;:null,&quot;umidade&quot;:null,&quot;ultimoRegistro&quot;:null,&quot;labelsTemperatura&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;dadosTemperatura&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;labelsSensores&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;dadosSensores&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;xDI8PXxHDvfhnHl16oj3&quot;,&quot;name&quot;:&quot;dashboard&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;33a3102704e4511dea83affd3acd2ebdea85040ca56f6562f3e0bcc3a11f6d02&quot;}" wire:effects="[]" wire:id="xDI8PXxHDvfhnHl16oj3">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Painel de Monitoramento</h4>
        <small class="text-muted">Atualizado há 2 minutos</small>
    </div>

    <div class="row g-4 mb-4 ">
        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted">Temperatura</h6>
                        <h3 class="fw-bold text-danger">50 °C</h3>
                    </div>

                    <i class="bi bi-thermometer-half fs-2 text-danger"></i>

                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted">Umidade</h6>
                        <h3 class="fw-bold text-primary">50%</h3>
                        <div class="progress mt-2 " style="height: 5px;">
                            <div class="progress-bar bg-primary" style="width: 50%;"></div>
                        </div>
                    </div>
                    <i class="bi bi-moisture fs-2 text-primary"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted">Luminosidade</h6>
                        <h3 class="fw-bold text-warning">500 </h3>
                    </div>

                    <i class="bi bi-lightbulb fs-2 text-warning"></i>

                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card shadow-sm border-0">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h6 class="text-muted">Último Registro</h6>
                        <h4 class="fw-bold text-success">21/08/25 15:30</h4>
                    </div>

                    <i class="bi bi-clock-history fs-2 text-success"></i>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4 ">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h6 class="mb-0 ">Histórico de Temperatura</h6>
                </div>

                <div class="card-body ">
                    <canvas id="graficoTemperatura" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4 ">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h6 class="mb-0 ">Sensores por Tipo</h6>
                </div>

                <div class="card-body ">
                    <canvas id="graficoSensores" height="200"></canvas>
                </div>
            </div>
        </div>


    </div>

</div>
            </main>
        </div>
    </div>
    </body>


</div> --}}
