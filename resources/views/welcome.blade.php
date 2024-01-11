<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Focus Travel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-md sticky-top bg-body"
     style="box-shadow: 0px 40px 20px 20px var(--bs-body-bg);transform: perspective(2500px);backdrop-filter: opacity(1);position: relative;">
    <div class="container-fluid">
        <div
            style="background: #000000;border-radius: 50px;padding: 10px;padding-bottom: 0px;margin-right: 24px;padding-right: 0px;padding-top: 0px;padding-left: 0px;margin-left: 15px;">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" width="133"
                 height="133"><a class="navbar-brand" href="#"
                                 style="background: var(--bs-navbar-active-color);color: var(--bs-body-color);">Focus
                Travel</a></div>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ms-auto"></ul>
            <button class="btn btn-primary" type="button"
                    style="background: #FF5C00;padding: 30px;border-radius: 50px;border-width: 15px;border-color: var(--bs-body-bg);">
                Download
            </button>
            <button class="btn btn-primary" type="button"
                    style="background: #FF5C00;border-radius: 50px;padding: 30px;border-width: 15px;border-color: var(--bs-body-bg);">
                Focus Travel
            </button>
            <button class="btn btn-primary" type="button"
                    style="background: #FF5C00;padding: 30px;border-radius: 50px;border-width: 15px;border-color: var(--bs-body-bg);">
                About
            </button>
            <button class="btn btn-primary" type="button"
                    style="background: #FF5C00;border-radius: 50px;padding: 30px;border-width: 15px;border-color: var(--bs-body-bg);">
                Contact
            </button>
        </div>
    </div>
</nav>
<div style="position: relative;"><img src="{{ Vite::asset('resources/images/banner.png') }}" width="1416"
                                      height="916" style="filter: contrast(50%);width: 100%;">
    <div class="row justify-content-center page-title"
         style="position: absolute;width: 100%;height: 80px;border-style: none;">
        <div class="col-auto"><h2 class="d-xxl-flex justify-content-xxl-center"
                                  style="color: var(--bs-body-color);font-size: 50px;width: 100%;">Focus Travel</h2>
            <h2 class="d-xxl-flex justify-content-xxl-center"
                style="color: var(--bs-body-color);font-size: 26px;width: 100%;"><br>Meer Focus, meer
                rijplezier!<br><br></h2></div>
    </div>
</div>
<div class="d-flex flex-column align-items-center align-content-center justify-content-xxl-center"
     style="text-align: center;height: 500px;box-shadow: 0px -30px 20px 17px var(--bs-body-bg), 0px 100px 20px 11px var(--bs-body-bg);background: var(--bs-body-bg);overflow: visible;transform: perspective(2500px);width: 100%;">
    <img src="{{ Vite::asset('resources/images/logo.png') }}" width="277" height="284">
    <button class="btn btn-primary text-center" type="button"
            style="position: sticky;background: var(--bs-link-color);padding: 50px;border-radius: 40px;font-size: 30px;"
            data-bs-target="Button">Download
    </button>
</div>
<div style="position: relative;"><img src="{{ Vite::asset('resources/images/weg.jpg') }}" width="1421" height="713"
                                      style="width: 100%;">
    <div class="row justify-content-center focus">
        <div class="col-auto d-xxl-flex justify-content-xxl-center">
            <div
                style="color: var(--bs-body-color);background: rgba(255,255,255,0.82);padding: 50px;border-radius: 40px;filter: contrast(100%) hue-rotate(0deg) saturate(113%);opacity: 1;box-shadow: 0px 0px 0px;width: 100%;">
                <h1 class="d-xxl-flex justify-content-xxl-center"
                    style="color: rgb(0,0,0);text-align: center;width: 100%;"><br>Wat is Focus Travel?<br><br></h1>
                <p style="color: rgb(0,0,0);text-align: center;width: 100%;"><br>Focus travel zorgt ervoor dat je als
                    vrachtwagenchauffeur meer oplettend bent op de weg.<br><br>door onze app kunt u optimaal gebruik
                    maken van uw pauzes, krijgt u iedere keer een melding wanneer u het beste pauze kunt nemen.<br><br>Dit
                    doen wij door verschillende sportieve oefeningen klaar hebben staan in onze app.<br><br>Zo willen
                    wij de Nederlandse wegens een stukje veiliger maken.<br><br></p></div>
        </div>
    </div>
</div>
<div class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-start"
     style="color: var(--bs-body-color);border-color: var(--bs-link-color);height: 500px;background: var(--bs-body-bg);box-shadow: 0px -26px 20px 0px var(--bs-body-bg);transform: perspective(2500px);filter: blur(0px);padding: 50px;width: 100%;">
    <div class="row justify-content-between" style="width: 100%;">
        <div class="col-auto"><h1 class="d-xxl-flex justify-content-xxl-start"><br>About us<br><br></h1>
            <p><br>Wij zijn team Focus Travel,<br>Wij willen de wereld graag een stukje veiliger maken door meer te
                kijken naar de vrachtwagenchauffeurs binnen ons land. <br><br>Hiervoor hebben wij onderzoek gedaan en
                uiteindelijk deze app ontwikkeld.<br><br></p></div>
        <div class="col-auto d-flex justify-content-xxl-end align-items-xxl-center"><img class="float-end d-xxl-flex"
                                                                                         src="{{ Vite::asset('resources/images/logo.png') }}"
                                                                                         width="209" height="209"></div>
    </div>
</div>
<div
    style="color: var(--bs-body-color);border-color: var(--bs-link-color);height: 400px;background: #000000;box-shadow: 0px -26px 20px 0px var(--bs-body-bg);transform: perspective(2500px);filter: blur(0px);">
    <h1 class="d-xxl-flex justify-content-xxl-start"
        style="text-align: left;background: #000000;transform: translate(0px);padding-left: 50px;padding-right: 100px;">
        <br>Contact us</h1>
    <div class="row g-0 justify-content-end focus" style="height: 200px;padding: 100px;">
        <div class="col-auto"><img class="d-xxl-flex justify-content-xxl-start"
                                   src="{{ Vite::asset('resources/images/envelope.png') }}" width="38"
                                   height="44"><img src="{{ Vite::asset('resources/images/phone.png') }}" width="37" height="35"></div>
        <div class="col"><p style="height: 50px;padding: 10px;">support@FocusTravel.nl<br><br>06- 0800 0000<br><br></p>
        </div>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
