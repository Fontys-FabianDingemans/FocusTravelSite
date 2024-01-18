<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Focus Travel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="width: 100%;background: rgb(255,255,255);">
    <nav class="navbar navbar-expand-md fixed-top bg-body border rounded-pill border-1 shadow-sm" style="box-shadow: 0px 40px 20px 20px var(--bs-tertiary-color);transform: perspective(2500px);position: absolute;background: rgb(255,255,255);">
        <div class="container-fluid">
            <div style="background: rgba(255,255,255,0);border-radius: 50px;padding: 10px;padding-bottom: 0px;margin-right: 24px;padding-right: 0px;padding-top: 0px;padding-left: 0px;margin-left: 15px;">
                <img src="{{ Vite::asset('resources/images/logo.png') }}" width="133" height="133" style="width: 149px;height: 149px;">
                <a class="navbar-brand" style="background: #ffffff00;color: var(--bs-navbar-active-color);margin: 0px;margin-bottom: 0px;margin-top: 0px;margin-left: 0px;transform: translate(0px);font-size: 32px;">Focus Travel</a>
            </div>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                </ul>
                <a class="btn btn-primary" role="button"
                   style="background: var(--bs-body-bg);padding: 30px;border-radius: 50px;border: 15px none transparent;margin-left: 0px;margin-bottom: 0px;margin-right: 26px;"
                   href="#download">Download</a>
                    <a class="btn btn-primary"
                       role="button" style="background: var(--bs-body-bg);border-radius: 50px;padding: 30px;border: 15px none var(--bs-body-bg);margin-right: 30px;"
                       href="#FocusTravel">
                        Focus Travel
                    </a>
                    <a class="btn btn-primary"
                       role="button"
                       style="background: var(--bs-body-bg);padding: 30px;border-radius: 50px;border: 15px none var(--bs-body-bg);margin-right: 30px;"
                       href="#About">
                        About
                    </a>
                    <a class="btn btn-primary"
                       role="button"
                        style="background: var(--bs-body-bg);border-radius: 50px;padding: 30px;border: 15px none var(--bs-body-bg);margin-right: 30px;"
                        href="#Contact">
                         Contact
                    </a>
            </div>
        </div>
    </nav>
    <div style="position: relative;width: 100%;">
        <img src="{{ Vite::asset('resources/images/banner.png') }}" width="100%" style="filter: blur(3px) contrast(65%);height: 90%;">
        <div>
            <div class="row justify-content-center align-items-center page-title" style="position: absolute;width: 100%;height: 77%;border-style: none;border-color: var(--bs-danger);margin-top: 75px;box-shadow: 0px 0px;">
                <div class="col justify-content-center align-items-center align-content-center" style="position: static;">
                    <h1 class="text-center d-xxl-flex justify-content-center align-items-center align-content-center align-self-center flex-nowrap justify-content-xxl-center"
                        style="color: var(--bs-body-color);position: relative;">
                        Focus Travel
                    </h1>
                    <h4
                        class="text-center d-xxl-flex justify-content-center align-items-center align-content-center align-self-center flex-nowrap justify-content-xxl-center"
                        style="color: var(--bs-body-color);position: relative;padding: 20px;">
                        Meer focus, Meer rijplezier!
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column align-items-center align-content-center justify-content-xxl-center" id="download" style="text-align: center;height: 515px;box-shadow: 0px -30px 20px 17px var(--bs-body-bg), 0px 67px 20px 11px var(--bs-body-bg);background: var(--bs-body-bg);overflow: visible;transform: perspective(2500px);margin: 0px;position: relative;backdrop-filter: contrast(101%);">
        <img src="{{ Vite::asset('resources/images/logo.png') }}" width="277" height="284" style="width: 313px;height: 313px;backdrop-filter: invert(0%);">
        <a class="btn btn-primary text-center" role="button" style="position: sticky;background: var(--bs-link-color);padding: 44px;border-radius: 40px;font-size: 38px;" href="{{ route('download_app') }}">
            Download
        </a>
    </div>
    <div id="FocusTravel" style="height: 616px;">
        <img src="{{ Vite::asset('resources/images/weg.jpg') }}" width="1421" height="713" style="width: 100%;height: 607px;position: static;">
        <div class="row justify-content-center" style="position: relative;">
            <div class="col">
                <div style="color: #ffffff;background: rgba(255,255,255,0.62);border-radius: 40px;box-shadow: 0px 0px 0px;filter: contrast(100%) hue-rotate(0deg) saturate(113%);opacity: 1;height: 399px;position: relative;transform: translate(0px) rotate(0deg);margin: 0px;margin-top: -536px;margin-right: 5%;margin-left: 5%;">
                    <h1 class="fs-3 text-center d-xxl-flex justify-content-xxl-center" style="color: rgb(0,0,0);transform: translate(0px);filter: brightness(99%);padding: 10px;">
                        Wat is Focus Travel?
                    </h1>
                    <p class="fs-6 text-center d-xxl-flex justify-content-xxl-center align-items-xxl-end" style="color: rgb(0,0,0);position: relative;transform: translate(0px);height: 214px;margin: 0px;margin-right: 10%;margin-left: 10%;">
                        Focus Travel zorgt ervoor dat je als vrachtwagenchauffeur meer oplettend bent op de weg. Door
                        onze app kunt u optimaal gebruik maken van uw pauzes, krijgt u iedere keer een melding wanneer u het
                        beste pauze kunt nemen. Dit doen wij door verschillende sportieve oefeningen klaar hebben staan in
                        onze app. Zo willen wij de Nederlandse wegens een stukje veiliger maken.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-start" id="About"
         style="color: var(--bs-body-color);border-color: var(--bs-link-color);height: 500px;background: var(--bs-body-bg);box-shadow: 0px -26px 20px 0px var(--bs-body-bg);transform: perspective(2500px);filter: blur(0px);padding: 50px;width: 100%;">
        <div class="row justify-content-between" style="width: 100%;">
            <div class="col-auto" style="width: 60%;">
                <h1 class="d-xxl-flex justify-content-xxl-start">About us</h1>
                <p>
                    Wij zijn team Focus Travel, Wij willen de wereld graag een stukje veiliger maken door meer te
                    kijken naar de vrachtwagenchauffeurs binnen ons land. Hiervoor hebben wij onderzoek gedaan en
                    uiteindelijk deze app ontwikkeld.
                </p>
            </div>
            <div class="col d-flex justify-content-xxl-center align-items-xxl-center" style="width: 40%;">
                <img class="float-end d-xxl-flex" src="{{ Vite::asset('resources/images/logo.png') }}" width="209" height="209" style="width: 260px;height: 260px;margin-top: 55px;margin-right: 0px;margin-left: 92px;">
            </div>
        </div>
    </div>
    <div id="Contact" style="color: var(--bs-body-color);border-color: var(--bs-link-color);height: 400px;background: #000000;box-shadow: 0px -26px 20px 0px var(--bs-body-bg);transform: perspective(2500px);filter: blur(0px);">
        <h1 class="d-xxl-flex justify-content-xxl-start" style="text-align: left;background: #000000;transform: translate(0px);padding-left: 50px;padding-right: 100px;">
            <br>Contact us</h1>
        <div class="row g-0 justify-content-end" style="height: 200px;padding: 100px;">
            <div class="col-auto" style="height: 205px;">
                <img class="d-xxl-flex justify-content-xxl-start"
                     src="{{ Vite::asset('resources/images/envelope.png') }}"
                     width="78" height="95" style="height: 100px;">
                <img src="{{ Vite::asset('resources/images/phone.png') }}" width="56" height="50">
            </div>
            <div class="col">
                <p style="padding: 50px;height: 50px;">support@FocusTravel.nl<br><br>+31613308897</p>
            </div>
        </div>
    </div>
</body>
</html>
