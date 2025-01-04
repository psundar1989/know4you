@extends('layouts.app')
@section('title', 'Erfolgskompass: Führung, Wachstum und Resilienz | Know4you')
@section('content')
    <!-- Hero Section Start -->
    <div class="hero hero-video cus_height cus-bg-section">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <video autoplay muted loop id="myVideo">
                <source src="{{ asset('assets/videos/b_video1.mp4') }}" type="video/mp4" />
            </video>
            <!-- <button id="muteButton" class="mute-button"><i class="fa-solid fa-play"></i>Unmute
                </button> -->
            <button id="muteButton" class="mute-button">
                <i class="fa-solid fa-volume-xmark"></i>
                <!-- <span>Unmute</span> -->
            </button>
            <!-- <div class="video-play-button mute-button" id="muteButton"><a href="" class=""><i class="fa-solid fa-play"></i></a><p>watch video</p></div> -->
        </div>
        <!-- Video End -->
        <div class="hero-section">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-10 col-md-12">
                        <div class="hero-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">Willkommen bei Know4you.</h3>
                                <h1 class="wow fadeInUp" data-wow-delay="0.2s"> Erfolg neu definiert: <span> Entfessle deine
                                        Stärke! </span>
                                </h1>
                            </div>
                            <p class="wow fadeInUp text-white" data-wow-delay="0.4s"
                                style="
                        visibility: visible;
                        animation-delay: 0.4s;
                        animation-name: fadeInUp;
                      ">
                                Ihre größte Stärke sind Sie selbst! Erkennen Sie mehr, um mehr zu erreichen – der Schlüssel
                                zu unendlichen Möglichkeiten liegt in Ihnen! </p>
                            <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                <a href="{{ url('/contact-us') }}" class="btn-default">get in touch</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <div class="about-us-img-1">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/images/home/familiar.jpg') }}" alt="" />
                            </figure>
                        </div>
                        <div class="about-us-img-2">
                            <figure class="image-anime" style="width: 235px">
                                <img src="{{ asset('assets/images/home/contact.jpeg') }}" alt="" />

                            </figure>
                        </div>
                        <div class="about-experience-box">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-company-experience.svg') }}" alt="" />
                            </div>
                            <div class="about-experience-content">
                                <h3>
                                    <span class="counter">10</span>+ jährigen
                                </h3>
                            </div>
                        </div>
                        <div class="company-review">
                            <h3>5200+ Top-Bewertungen</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Über uns</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s"> Mut zur Veränderung – <span> Schlüssel zum
                                    Erfolg</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"> Know4You – Der Schlüssel, um in jeder Situation
                                das eigeneSelbstzu verstehen und sofort in die richtigeRichtungzulenken. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"> Das eigeneBewusstsein, die Seele und die
                                eigeneWahrheitsind das stärkste Fundament, auf dem man aufbauenkann. Dies in
                                jedemBereichzufinden, zuverstärken und zuerhöhen, ist der Kern der Effizienz von Know4You.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"> Der Name Know4you, wurde von einem 10jährigen
                                Jungen kreiert, der in seinen jungen Jahren verstanden hat, dass es eine Technik gibt, die
                                Menschen innert kürzester Zeit aus Situationen, in welchen sie feststecken herausholt. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"> "Know" steht für Wissen, Klarheit und
                                Orientierung. "4You" bedeutet, etwas für dich zugänglich zu machen, genauer hinzusehen und
                                es zu verstehen. Indem man genauer hinschaut, kann man die Details erkennen, die den
                                Unterschied ausmachen. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"> Wenn man die Struktur des Bewusstseins versteht,
                                kann man Erkenntnisse gewinnen, die anderen herkömmlich Methoden Jahre abverlangen. Warum
                                nicht von Anfang an direkt, schnell und zielgerichtet vorankommen? </p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"> Egal, in welcher Situation jemand ist und wie
                                lange er oder sie sich schon bemüht hat, die Dinge zum Besseren zu wenden, mit der
                                Technologie von Know4you, sind sämtliche Leerläufe, Missverstände und Fehlschläge Schnee von
                                gestern. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.4s"> Unsere Methode basiert auf den neuesten
                                Durchbrüchen in der Bewusstseinsforschung und hebt Sie auf ein neues Level des Verstehens
                                und Handelns. Mit Know4you lassen sich festgefahrene Situationen im Handumdrehen lösen, egal
                                wie lange der Kampf gegen Rückschläge und Missverständnisse schon andauert. </p>
                        </div>
                        <!-- Section Title End -->
                        <!-- About Us List Start -->
                        <div class="about-us-list wow fadeInUp" data-wow-delay="0.6s">
                            <ul>
                                <li>Der Beginn einer neuen Branche</li>
                                <li> Know" steht für Mut, Entschlossenheit, Durchsetzungsvermögen </li>
                            </ul>
                        </div>
                        <!-- About Us List End -->
                        <!-- About Us Body Start -->
                        <div class="about-us-body">
                            <!-- About Company Client Start -->
                            <div class="about-comapny-client wow fadeInUp" data-wow-delay="0.8s">
                                <!-- Company Client Images Start -->
                                <div class="company-client-images">
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/satisfy-client-img-1.jpg') }}" alt="" />
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/satisfy-client-img-2.jpg') }}" alt="" />
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/satisfy-client-img-3.jpg') }}" alt="" />
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/satisfy-client-img-4.jpg') }}" alt="" />
                                        </figure>
                                    </div>
                                    <div class="client-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/images/satisfy-client-img-5.jpg') }}" alt="" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About Us Footet Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="1s">
                            <a href="{{ url('/contact-us') }}" class="btn-default">get in touch</a>
                        </div>
                        <!-- About Us Footet End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Video Gallery Start -->
    <div class="page-video-gallery">
        <div class="container">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Videos ansehen</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.25s"> Sehen sie sich die folgenden videos an, <span>um mehr
                            zu erfahren</span>
                    </h2>
                </div>
                <p> Sehen Sie sich die folgenden Videos an, um mehr zu erfahren ermutigt die Zuschauer, Videos anzusehen, um
                    mehr Informationen und tiefere Einblicke zu erhalten. </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- video1 gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-cursor-text="Play">
                        <a href="{{ asset('assets/videos/v1.mp4') }}" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/home/v1.png') }}" alt="" />
                            </figure>
                        </a>
                    </div>
                </div>
                 <!-- video2 gallery start -->
                <div class="col-lg-4 col-md-6">
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.2s" data-cursor-text="Play">
                        <a href="{{ asset('assets/videos/v2.mp4') }}" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/home/v2.png') }}" alt="" />
                            </figure>
                        </a>
                    </div>
                </div>
                 <!-- video3 gallery start -->
                 <div class="col-lg-4 col-md-6">
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.4s" data-cursor-text="Play">
                        <a href="{{ asset('assets/videos/v3.mp4') }}" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/home/v3.png') }}" alt="" />
                            </figure>
                        </a>
                    </div>
                </div>
                 <!-- video4 gallery start -->
                 <div class="col-lg-4 col-md-6">
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.6s" data-cursor-text="Play">
                        <a href="{{ asset('assets/videos/v4.mp4')}}" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/home/v4.png') }}" alt="" />
                            </figure>
                        </a>
                    </div>
                </div>
                 <!-- video5 gallery start -->
                 <div class="col-lg-4 col-md-6">
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.8s" data-cursor-text="Play">
                        <a href="{{ asset('assets/videos/v5.mp4')}}" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/home/v5.png') }}" alt="" />
                            </figure>
                        </a>
                    </div>
                </div>
                 <!-- video6 gallery start -->
                 <div class="col-lg-4 col-md-6">
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="1s" data-cursor-text="Play">
                        <a href="{{ asset('assets/videos/v6.mp4')}}" class="popup-video">
                            <figure>
                                <img src="{{ asset('assets/images/home/v6.png') }}" alt="" />
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- video7 gallery start -->
                    <div class="video-gallery-image wow fadeInUp" data-cursor-text="Play">
                        <a href="{{ asset('assets/videos/v7.mp4') }}" class="popup-video">
                            <figure>
                            <img src="{{ asset('assets/images/home/v7.png') }}" alt="" />
                            </figure>
                        </a>
                    </div>
                </div>
                 <!-- video8 gallery start -->
                <div class="col-lg-4 col-md-6">
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.2s" data-cursor-text="Play">
                        <a href="{{ asset('assets/videos/v8.mp4') }}" class="popup-video">
                            <figure>
                            <img src="{{ asset('assets/images/home/v8.png') }}" alt="" />
                            </figure>
                        </a>
                    </div>
                </div>
                 <!-- video9 gallery start -->
                 <div class="col-lg-4 col-md-6">
                    <div class="video-gallery-image wow fadeInUp" data-wow-delay="0.4s" data-cursor-text="Play">
                        <a href="{{ asset('assets/videos/v9.mp4') }}" class="popup-video">
                            <figure>
                            <img src="{{ asset('assets/images/home/v9.png') }}" alt="" />
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Video Gallery End -->
    <div class="how-we-work">
        <div class="container">
            <div class="row section-row align-items-center mb-4">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Erfolgsschlüssel</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.25s"> Mut zur Veränderung – <span>Schlüssel zum
                                Erfolg</span>
                        </h2>
                        <p> EHier sind die inhaltlichen Erklärungen zu den Schlüsselwörtern für die Verbesserung von Business-Personen in Zürich, in prägnanter Kurzform. </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <!-- list1 -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <!-- How Work Item Start -->
                    <div class="how-work-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-how-work-1.svg') }}" alt="" />
                        </div>
                        <div class="how-work-content">
                            <h3>
                                <span>01.</span> Führung und Leadership 
                            </h3>
                            <div class="member-experience-list wow fadeInUp" data-wow-delay="0.25s">
                                <ul>
                                    <li>
                                        <b>Leadership-Entwicklung:</b> Werde zu einer inspirierenden Führungspersönlichkeit, die andere motiviert.
                                    </li>
                                    <li>
                                        <b>Führungsstil verbessern: </b> Entwickle deinen individuellen Stil, der Vertrauen und Effizienz fördert.
                                    </li>
                                    <li>
                                        <b>Entscheidungsfindung optimieren: </b> Triff klare, fundierte Entscheidungen, auch unter Druck.
                                    </li>
                                    <li>
                                        <b>Change-Management: </b> Führe dein Team erfolgreich durch Veränderungen und Umstrukturierungen.
                                    </li>
                                    <li>
                                        <b>Mitarbeiterführung: </b> Fördere deine Mitarbeiter durch klare Ziele und gezielte Unterstützung. 
                                    </li>
                                    <li>
                                        <b>Delegationskompetenz: </b> Lerne, Aufgaben effektiv abzugeben und Ressourcen optimal zu nutzen. 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- How Work Item End -->
                </div>
                <!-- list2 -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <!-- How Work Item Start -->
                    <div class="how-work-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-how-work-1.svg') }}" alt="" />
                        </div>
                        <div class="how-work-content">
                            <h3>
                                <span>02.</span> Karriere und berufliche Entwicklung
                            </h3>
                            <div class="member-experience-list wow fadeInUp" data-wow-delay="0.25s">
                                <ul>
                                    <li>
                                        <b>Karriere-Coaching:</b> Finde deinen nächsten Karriereschritt und setze ihn gezielt um.
                                    </li>
                                    <li>
                                        <b>Networking: </b> Baue gezielt Beziehungen auf, die dir beruflich weiterhelfen. 
                                    </li>
                                    <li>
                                        <b>Work-Life-Balance: </b> Schaffe eine gesunde Balance zwischen Beruf und Privatleben.
                                    </li>
                                    <li>
                                        <b>Auftrittskompetenz: </b> Präsentiere dich souverän und überzeugend in jeder Situation.
                                    </li>
                                    <li>
                                        <b>Zeitmanagement: </b> Organisiere deinen Arbeitsalltag effizient und ohne Überforderung. 
                                    </li>
                                    <li>
                                        <b>Zielorientierung: </b> Arbeite strategisch und fokussiert an klar definierten Zielen.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- How Work Item End -->
                </div>
                <!-- list3 -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <!-- How Work Item Start -->
                    <div class="how-work-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-how-work-1.svg') }}" alt="" />
                        </div>
                        <div class="how-work-content">
                            <h3>
                                <span>03.</span> Kommunikation und Zusammenarbeit  
                            </h3>
                            <div class="member-experience-list wow fadeInUp" data-wow-delay="0.25s">
                                <ul>
                                    <li>
                                        <b>Konfliktmanagement:</b> Löse berufliche Konflikte konstruktiv und nachhaltig.  
                                    </li>
                                    <li>
                                        <b>Kommunikationsstärke: </b> Überzeuge mit klaren und präzisen Botschaften. 
                                    </li>
                                    <li>
                                        <b>Teamdynamik verbessern: </b> Fördere ein produktives und harmonisches Arbeitsklima. 
                                    </li>
                                    <li>
                                        <b>Verhandlungskompetenz: </b> Erziele bessere Ergebnisse durch geschickte Verhandlungsstrategien. 
                                    </li>
                                    <li>
                                        <b>Interkulturelle Kommunikation: </b> Lerne, in globalen Kontexten erfolgreich zu kommunizieren.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- How Work Item End -->
                </div>
                <!-- list4 -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <!-- How Work Item Start -->
                    <div class="how-work-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-how-work-1.svg') }}" alt="" />
                        </div>
                        <div class="how-work-content">
                            <h3>
                                <span>04.</span> Produktivität und Effizienz 
                            </h3>
                            <div class="member-experience-list wow fadeInUp" data-wow-delay="0.25s">
                                <ul>
                                    <li>
                                        <b>Produktivitätssteigerung:</b> Maximiere deine Leistung durch fokussiertes Arbeiten. 
                                    </li>
                                    <li>
                                        <b>Prozesse optimieren: </b> Identifiziere Schwachstellen und steigere die Effizienz in Arbeitsabläufen. 
                                    </li>
                                    <li>
                                        <b>Innovationsförderung: </b> Entwickle kreative Lösungen und fördere neue Ideen in deinem Team.  

                                    </li>
                                    <li>
                                        <b>Digitalisierung umsetzen: </b> Nutze digitale Tools, um Prozesse zu automatisieren und zu vereinfachen. 
                                    </li>
                                    <li>
                                        <b>Selbstmanagement: </b> Plane und priorisiere deine Aufgaben eigenständig und effektiv.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- How Work Item End -->
                </div>
                <!-- list5 -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <!-- How Work Item Start -->
                    <div class="how-work-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-how-work-1.svg') }}" alt="" />
                        </div>
                        <div class="how-work-content">
                            <h3>
                                <span>05.</span> Unternehmerisches Wachstum 
                            </h3>
                            <div class="member-experience-list wow fadeInUp" data-wow-delay="0.25s">
                                <ul>
                                    <li>
                                        <b>Geschäftsentwicklung:</b>  Wachstumschancen und setze neue Strategien erfolgreich um. 
                                    </li>
                                    <li>
                                        <b>Strategieplanung: </b> Erstelle eine klare Roadmap für langfristigen Erfolg.
                                    </li>
                                    <li>
                                        <b>Kundenbindung verbessern: </b> Stärke die Beziehung zu deinen Kunden durch echten Mehrwert. 
                                    </li>
                                    <li>
                                        <b>Nachhaltigkeit im Business: </b> Integriere umweltfreundliche und nachhaltige Praktiken in dein Geschäft.  
                                    </li>
                                    <li>
                                        <b>Markenaufbau: </b> Positioniere dein Unternehmen und dich selbst erfolgreich am Markt. 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- How Work Item End -->
                </div>
                <!-- list6 -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <!-- How Work Item Start -->
                    <div class="how-work-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-how-work-1.svg') }}" alt="" />
                        </div>
                        <div class="how-work-content">
                            <h3>
                                <span>06.</span> Persönliche Resilienz im Berufsleben 
                            </h3>
                            <div class="member-experience-list wow fadeInUp" data-wow-delay="0.25s">
                                <ul>
                                    <li>
                                        <b>Stressbewältigung:</b> Lerne, Druck zu bewältigen, ohne auszubrennen.  
                                    </li>
                                    <li>
                                        <b>Resilienz stärken: </b> Baue mentale Stärke auf, um beruflichen Herausforderungen zu trotzen.
                                    </li>
                                    <li>
                                        <b>Achtsamkeit im Arbeitsalltag: </b> Finde Momente der Ruhe und Konzentration im hektischen Berufsleben.
                                    </li>
                                    <li>
                                        <b>Burnout-Prävention: </b> Schütze dich vor Überlastung durch bewusste Pausen und Selbstpflege.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- How Work Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- test -->
    <!-- Our Service Start -->
    <div class="our-service bg-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <!-- Service Content Start -->
                    <div class="service-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <!-- <h3 class="wow fadeInUp">services</h3> -->
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s"> Vertrautes aus <span class="">dem
                                    Leben </span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"> Wenn trotz umfassender Informationen der Zugang
                                zu Lösungen versperrt bleibt und sich die notwendigen Schritte nicht ergeben, bietet es sich
                                an, den eigenen Bewusstseinsstand zu überprüfen. </p>
                        </div>
                        <!-- Section Title End -->
                        <!-- Service Btn Start -->
                        <div class="service-btn wow fadeInUp" data-wow-delay="0.75s">
                            <a href="#" class="btn-default">Alles Anzeigen </a>
                        </div>
                        <!-- Service Btn End -->
                    </div>
                    <!-- Service Content End -->
                </div>
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h4 class="wow fadeInUp text-white" data-wow-delay="0.25s"> Mögliche Auswirkungen <span
                                class="greadient_text">eines fehlenden Bewusstseins: </span>
                        </h4>
                    </div>
                    <!-- Section Title End -->
                    <!-- Service Item List Start -->
                    <div class="service-item-list">
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-services-1.svg') }}" alt="" />
                            </div>
                            <div class="service-item-content">
                                <h3>Fehlende Selbstreflexion</h3>
                                <p> Ohne Bewusstsein fehlt die Fähigkeit, über eigene Gedanken, Gefühle und Handlungen
                                    nachzudenken. Das kann dazu führen, dass man immer wieder in die gleichen
                                    problematischen Muster verfällt, ohne zu verstehen, warum. </p>
                            </div>
                        </div>
                        <!-- Service Item Start -->
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-services-2.svg') }}" alt="" />
                            </div>
                            <div class="service-item-content">
                                <h3>Unbewusste Entscheidungen</h3>
                                <p> Entscheidungen werden möglicherweise impulsiv oder automatisch getroffen, ohne die
                                    zugrunde liegenden Motive oder Konsequenzen zu berücksichtigen. Das kann zu unüberlegten
                                    Handlungen und unerwünschten Ergebnissen führen. </p>
                            </div>
                        </div>
                        <!-- Service Item Start -->
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-services-3.svg') }}" alt="" />
                            </div>
                            <div class="service-item-content">
                                <h3>Emotionale Reaktionen</h3>
                                <p> Ohne Bewusstsein für die eigenen Emotionen können diese unkontrolliert und intensiv
                                    auftreten. Das kann zu Konflikten und Missverständnissen in zwischenmenschlichen
                                    Beziehungen führen. </p>
                            </div>
                        </div>
                        <!-- Service Item Start -->
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-services-4.svg') }}" alt="" />
                            </div>
                            <div class="service-item-content">
                                <h3>Mangelnde Problemlösungsfähigkeiten</h3>
                                <p> Bewusstsein ermöglicht es, Probleme aus verschiedenen Perspektiven zu betrachten und
                                    kreative Lösungen zu finden. Ohne diese Fähigkeit bleibt man möglicherweise in einer
                                    engen Denkweise gefangen und findet keine effektiven Losungen. </p>
                            </div>
                        </div>
                        <!-- Service Item Start -->
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-services-5.svg') }}" alt="" />
                            </div>
                            <div class="service-item-content">
                                <h3>Gesundheitliche Auswirkungen</h3>
                                <p> Langfristig kann das Fehlen von Bewusstsein zu Stress, Angst und anderen
                                    gesundheitlichen Problemen führen, da man nicht in der Lage ist, die eigenen Bedürfnisse
                                    und Grenzen zu erkennen und entsprechend zu handeln. </p>
                            </div>
                        </div>
                        <!-- Service Item Start -->
                        <!-- Service Item Start -->
                        <div class="service-item wow fadeInUp" data-wow-delay="1s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/images/icon-services-6.svg') }}" alt="" />
                            </div>
                            <div class="service-item-content">
                                <h3>Eingeschränkte persönliche Entwicklung</h3>
                                <p> Bewusstsein ist ein Schlüssel zur persönlichen Weiterentwicklung. Ohne es bleibt man
                                    möglicherweise in alten Mustern und Verhaltensweisen stecken und verpasst die Chance, zu
                                    wachsen und sich zu verbessern. </p>
                            </div>
                        </div>
                        <!-- Service Item Start -->
                    </div>
                    <!-- Service Item List End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Service End -->
    <!-- Our Expertise Section Start -->
    <div class="our-expertise">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Expertise Content Start -->
                    <div class="our-expertise-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">unsere Expertise</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s"> Zertifizierte und erfahrene
                                <span>Coaching-Experten</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"> Wenn Sie sich für uns entscheiden, arbeiten Sie
                                mit erfahrenen Trainern zusammen, die Ihr Potenzial voll entfalten möchten. Wir bieten
                                personalisierte Strategien und bewährte Methoden. </p>
                        </div>
                        <!-- Section Title End -->
                        <!-- Expertise Button Start -->
                        <div class="expertise-btn wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ url('/contact-us') }}" class="btn-default">get in touch</a>
                        </div>
                        <!-- Expertise Button End -->
                    </div>
                    <!-- Our Expertise Content End -->
                </div>
                <div class="col-lg-6">
                    <div class="expertise-list">
                        <!-- Expertise Item Start -->
                        <div class="expertise-item wow fadeInUp">
                            <div class="expertise-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/expertise-image-1.jpg') }}" alt="" />
                                </figure>
                            </div>
                            <div class="expertise-content">
                                <p>Kommunikationscoaching</p>
                            </div>
                        </div>
                        <!-- Expertise Item End -->
                        <!-- Expertise Item Start -->
                        <div class="expertise-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="expertise-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/expertise-image-2.jpg') }}" alt="" />
                                </figure>
                            </div>
                            <div class="expertise-content">
                                <p>Persönliches Coaching</p>
                            </div>
                        </div>
                        <!-- Expertise Item End -->
                        <!-- Expertise Item Start -->
                        <div class="expertise-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="expertise-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/expertise-image-3.jpg') }}" alt="" />
                                </figure>
                            </div>
                            <div class="expertise-content">
                                <p>Strategie</p>
                            </div>
                        </div>
                        <!-- Expertise Item End -->
                        <!-- Expertise Item Start -->
                        <div class="expertise-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="expertise-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/expertise-image-4.jpg') }}" alt="" />
                                </figure>
                            </div>
                            <div class="expertise-content">
                                <p>Effizienz Coaching</p>
                            </div>
                        </div>
                        <!-- Expertise Item End -->
                        <!-- Expertise Item Start -->
                        <div class="expertise-item wow fadeInUp" data-wow-delay="1s">
                            <div class="expertise-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/expertise-image-5.jpg') }}" alt="" />
                                </figure>
                            </div>
                            <div class="expertise-content">
                                <p>Gesundheitscoach</p>
                            </div>
                        </div>
                        <!-- Expertise Item End -->
                        <!-- Expertise Item Start -->
                        <div class="expertise-item wow fadeInUp" data-wow-delay="1.2s">
                            <div class="expertise-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/expertise-image-6.jpg') }}" alt="" />
                                </figure>
                            </div>
                            <div class="expertise-content">
                                <p>Führung</p>
                            </div>
                        </div>
                        <!-- Expertise Item End -->
                        <!-- Expertise Item Start -->
                        <div class="expertise-item wow fadeInUp" data-wow-delay="1.4s">
                            <div class="expertise-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/expertise-image-7.jpg') }}" alt="" />
                                </figure>
                            </div>
                            <div class="expertise-content">
                                <p>Marketing-Schulung</p>
                            </div>
                        </div>
                        <!-- Expertise Item End -->
                        <!-- Expertise Item Start -->
                        <div class="expertise-item wow fadeInUp" data-wow-delay="1.6s">
                            <div class="expertise-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/images/expertise-image-8.jpg') }}" alt="" />
                                </figure>
                            </div>
                            <div class="expertise-content">
                                <p>Karriereübergang</p>
                            </div>
                        </div>
                        <!-- Expertise Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Expertise Section End -->
    <div class="our-expertise">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Potential Image Start -->
                    <div class="our-potential-img">
                        <figure class="image-anime reveal">
                            <!-- <img src="images/our-potential-img.jpg" alt="" /> -->
                            <img src="{{ asset('assets/images/our-potential-img.jpg') }}" alt="" />
                        </figure>
                    </div>
                    <!-- Our Potential Image End -->
                </div>
                <div class="col-lg-6">
                    <!-- Our Expertise Content Start -->
                    <div class="our-expertise-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Zusammenfassung</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s"> Schnelle Durchbrüche <span>mit
                                    Tiefgang</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"> In 2-3 Stunden vermag manches erreicht werden,
                                was andere selbst in 10 oder 20 Jahren, sofern überhaupt, nur mühsam erlangen können. Diese
                                Effizienz und Tiefe der Erkenntnisse sind auf die sorgfältig entwickelte Methodik und die
                                langjährige Expertise des UM-Teams zurückzuführen. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"> Es ist erstaunlich, wie schnell sich komplexe
                                Zusammenhänge erschliessen lassen, wenn man mit der richtigen Unterstützung und den
                                passenden Werkzeugen arbeitet. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"> Viele Teilnehmer berichten, dass sie nach einer
                                oder mehreren Sitzungen nicht nur beruflich, sondern auch persönlich bedeutende Fortschritte
                                gemacht haben. Die neu gewonnene Klarheit ermöglicht es ihnen, selbstbewusster
                                Entscheidungen zu treffen und zielgerichteter zu handeln, wodurch sich ihre Lebensqualität
                                insgesamt verbessert. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"> Eine Teilnehmerin sagte: " <b>Ich hätte nie
                                    gedacht, dass ich in so kurzer Zeit so viel über mich selbst und meine Ziele lernen
                                    würde. Es fühlt sich an, als hätte sich ein Schleier gelüftet und ich sehe endlich den
                                    Weg vor mir klar und deutlich.</b>" </p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"> Diese positiven Rückmeldungen zeigen, wie
                                wertvoll und bewegend die Erfahrung sein kann. Es ist nicht nur eine Investition in Wissen,
                                sondern auch in persönliches Wachstum und Selbstverwirklichung. </p>
                        </div>
                        <!-- Section Title End -->
                        <!-- Expertise Button Start -->
                        <div class="expertise-btn wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ url('/contact-us') }}" class="btn-default">Get In Touch</a>
                        </div>
                        <!-- Expertise Button End -->
                    </div>
                    <!-- Our Expertise Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section Start -->
    <div class="our-testimonial bg-section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8">
                    <div class="our-testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Was Kunden sagen</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s"> Unsere <span>Klienten im Erfolg</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <!-- <div class="testimonial-slider-image"><figure class="image-anime"><img src="images/testimonial-img-1.jpg" alt="" /></figure></div> -->
                                        <div class="testimonial-slider-content">
                                            <div class="testimonial-header">
                                                <div class="testimonial-rating-company">
                                                    <!-- <img
                                      src="images/icon-testimonial-rating-4.svg"
                                      alt=""
                                    /> -->
                                                </div>
                                                <div class="testimonial-quote">
                                                    <img src="{{ asset('assets/images/testimonial-quote.svg') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p> Durch dieses befähigt werden, Altes los lassen zu können, konnte ich
                                                    meine Prioritäten neu ausrichten und zeitgemässe Anpassungen vornehmen.
                                                    Obwohl ich von vielen geschätzt wurde, spürte ich eine gewisse Distanz
                                                    in Form von fehlendem Vertrauen. Dies ist jetzt nicht mehr so. Diese
                                                    Umstellung führte zu einer gesteigerten Lebensfreude. Dinge fingen sich
                                                    an mühelos zu fügen, die zuvor eine grosse Herausforderung darstellten.
                                                </p>
                                            </div>
                                            <div class="author-content">
                                                <h3>- Lisa B.</h3>
                                                <p>
                                                    <i>Angestellte</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <!-- <div class="testimonial-slider-image"><figure class="image-anime"><img src="images/testimonial-img-2.jpg" alt="" /></figure></div> -->
                                        <div class="testimonial-slider-content">
                                            <div class="testimonial-header">
                                                <div class="testimonial-rating-company">
                                                    <!-- <img
                                      src="images/icon-testimonial-rating-4.svg"
                                      alt=""
                                    /> -->
                                                </div>
                                                <div class="testimonial-quote">
                                                    <img src="{{ asset('assets/images/testimonial-quote.svg') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p> Meine lange Zeit im Business hat mir gezeigt, wie der Hase läuft. Diese
                                                    festen Überzeugungen haben mir zwar Halt gegeben, aber mich auch etwas
                                                    festgefahren. Doch nach einem kurzen Zwischenstopp bei Know4you, konnte
                                                    ich endlich wieder einen Umsatzrekord verbuchen. </p>
                                            </div>
                                            <div class="author-content">
                                                <h3>- Roberte S</h3>
                                                <p>
                                                    <i>Finanzdienstleister</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <!-- <div class="testimonial-slider-image"><figure class="image-anime"><img src="images/testimonial-img-2.jpg" alt="" /></figure></div> -->
                                        <div class="testimonial-slider-content">
                                            <div class="testimonial-header">
                                                <div class="testimonial-rating-company">
                                                    <!-- <img
                                      src="images/icon-testimonial-rating-4.svg"
                                      alt=""
                                    /> -->
                                                </div>
                                                <div class="testimonial-quote">
                                                    <img src="{{ asset('assets/images/testimonial-quote.svg') }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p> Meine lange Zeit im Business hat mir gezeigt, wie der Hase läuft. Diese
                                                    festen Überzeugungen haben mir zwar Halt gegeben, aber mich auch etwas
                                                    festgefahren. Doch nach einem kurzen Zwischenstopp bei KNOW4YOU, konnte
                                                    ich endlich wieder einen Umsatzrekord verbuchen. </p>
                                            </div>
                                            <div class="author-content">
                                                <h3>- Roberte S</h3>
                                                <p>
                                                    <i>Finanzdienstleister</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-button-prev"></div>
                                <div class="testimonial-button-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial Section End -->
    <!-- Our Potential Start -->
    <div class="our-potential">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Our Potential Content Start -->
                    <div class="our-potential-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Kontakt</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.25s"> „Stehen Sie vor <span> einer
                                    Herausforderung?</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"> Kommen Sie immer wieder an den gleichen Punkt?
                                <b>Tief in Ihrem Inneren wissen Sie, dass es mit Ihnen zu tun hat, doch die Lösung scheint
                                    unerreichbar?</b> Sie finden sich in einem endlosen Kreis wieder, und der Ausweg scheint
                                nicht in Sicht. </p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">
                                <b>Aber lassen Sie mich Ihnen sagen: Veränderung ist möglich!</b> Wenn Sie das Gefühl haben,
                                dass Unterstützung der Schlüssel zum Vorankommen ist, dann sind Sie hier genau richtig! Ich
                                bin bereit, Ihnen zu helfen, diese Hürde zu überwinden.
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"> Mit einem gezielten Dialog und konkreten
                                Schritten befähigen wir Sie, das, was Sie zurückhält, hinter sich zu lassen. <b>Sie werden
                                    überrascht sein, wie schnell Sie vorankommen können!</b>
                            </p>
                            <p class="wow fadeInUp" data-wow-delay="0.5s"> Zögern Sie nicht, mich zu kontaktieren – <b>ich
                                    beiße nicht!</b> Gemeinsam ist man stärker. </p>
                            <div class="pull-right">
                                <p>
                                    <b>Remo Martins</b>
                                </p>
                                <p class="mt-0">Know4you Berater</p>
                            </div>
                        </div>
                    </div>
                    <!-- Our Potential Content End -->
                </div>
                <div class="col-lg-6">
                    <!-- Our Potential Image Start -->
                    <div class="our-potential-img">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('assets/images/home/contact.jpeg') }}" alt="" />

                        </figure>
                    </div>
                    <!-- Our Potential Image End -->
                </div>
            </div>
        </div>
    </div>
@endsection
