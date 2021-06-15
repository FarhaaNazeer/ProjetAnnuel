<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>CMS - Dashboard</title>
    <meta name="description" content="Figma htmlGenerator">
    <meta name="author" content="htmlGenerator">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body>
    <header>
        <nav class="top-navbar">
            <div class="navbar-content">
                <div class="sidebar-header">
                    <h2>Tableau de bord</h2>
                </div>
                <p>Super Administrateur - Restaurant Pizza Pino</p>
                <div class="dropdown">
                    <button class="dropdown-btn button button--blue button--dropdown">Ajouter nouveau <i class="fas fa-chevron-down"></i></button>
                    <div class="dropdown-content">
                        <a href="">Pages</a>
                        <a href="">Menus</a>
                        <a href="">Extensions</a>
                        <a href="">Médias</a>
                    </div>
                </div>
                <i class="fas fa-power-off"></i>
            </div>
        </nav>
    </header>
    <main>
        <div class="sidebar">
            <section>
                <h2>Contenu</h2>
                <div>
                    <li><i class="far fa-file title-icon"></i>Pages<i class="fas fa-chevron-down"></i></li>
                    <li><i class="fas fa-puzzle-piece title-icon"></i>Extensions</li>
                    <li><i class="far fa-images title-icon"></i>Médias<i class="fas fa-chevron-down"></i></li>
                </div>
            </section>
            <section>
                <h2>Apparence</h2>
                <div>
                    <li><i class="fas fa-utensils title-icon"></i>Menus<i class="fas fa-chevron-down"></i></li>
                    <li><i class="fas fa-pen-fancy title-icon"></i>Thèmes<i class="fas fa-chevron-down"></i></li>
                </div>
            </section>
            <section>
                <h2><i class="fas fa-utensils title-icon"></i>Restaurant</h2>
                <div>
                    <li><i class="far fa-calendar-alt title-icon"></i>Réservations</li>
                    <li><i class="fas fa-mouse-pointer title-icon"></i>Click'n Collect</li>
                </div>
            </section>
            <section>
                <h2>Administration</h2>
                <div>
                    <li><i class="fas fa-users title-icon"></i>Utilisateurs</li>
                    <li><i class="fas fa-cogs title-icon"></i>Réglages</li>
                </div>
            </section>
            <section>
                <h2></i>Statistiques</h2>
            </section>
        </div>
        <div class="main-dashboard">
            <section class="indicators">
                <h1>Mes indicateurs</h1>
                <div class="card-indicators">
                    <div class="card">
                        <p>70 visiteurs</p>
                    </div>
                    <div class="card">
                        <p>Contenu le plus visité</p>
                    </div>
                    <div class="card">
                        <p>20 réservations</p>
                    </div>
                </div>
            </section>
            <section class="section-content">
                <article class="configuration">
                    <h1>Configurez votre site</h1>
                    <div class="instructions card card--large">
                        <progress class="progress" value="70" max="100"> 70% </progress>
                        <p>70%</p>
                        <ul>
                            <div class="group-instructions">
                                <li>Créer votre nom de domaine</li>
                                <a href="" class="button button--blue" role="button">Créer</a>
                            </div>
                            <div class="group-instructions">
                                <li>Ajouter votre première page</li>
                                <a href="#" role="button" class="button button--blue">Ajouter</a>
                            </div>
                            <div class="group-instructions">
                                <li>Publiez votre site</li>
                                <a href="#" role="button" class="button button--blue">Publier</a>
                            </div>
                        </ul>
                    </div>
                </article>
                <article>
                    <h1>Liste des 5 dernières réservations</h1>
                    <div class="card card--medium">
                        <table>
                            <thead>
                                <th>Heure</th>
                                <th>Nom</th>
                                <th>Places</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12h00</td>
                                    <td>Dupont</td>
                                    <td>3</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>12h45</td>
                                    <td>Cohen</td>
                                    <td>5</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>13h00</td>
                                    <td>Morelli</td>
                                    <td>1</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>13h20</td>
                                    <td>Duval</td>
                                    <td>2</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
            </section>
            <section class="section-content">
                <article>
                    <h1>Suggestion de widgets</h1>
                    <div class="widgets card card--large">
                        <div class="group-widget">
                            <div class="widget">
                                <h2>Google Analytics</h2>
                            </div>
                            <a href="#">Analyser vos données</a>
                        </div>
                        <div class="group-widget">
                            <div class="widget">
                                <h2>Google Maps</h2>
                            </div>
                            <a href="#">Indiquer votre localisation</a>
                        </div>
                        <div class="group-widget">
                            <div class="widget">
                                <h2>Traduction de pages</h2>
                            </div>
                            <a href="#">Proposer une traduction</a>
                        </div>
                    </div>
                </article>
                <article>
                    <h1>Click'n'Collect</h1>
                    <div class="card card--medium click-card">
                        <table>
                            <thead>
                                <th>N° de commande</th>
                                <th>Nom</th>
                                <th>Téléphone</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01500</td>
                                    <td>Marchal</td>
                                    <td>+33182281465</td>
                                </tr>
                                <tr>
                                    <td>01501</td>
                                    <td>Durelli</td>
                                    <td>+33140563212</td>
                                </tr>
                                <tr>
                                    <td>01502</td>
                                    <td>Jammes</td>
                                    <td>+33143896421</td>
                                </tr>
                                <tr>
                                    <td>01503</td>
                                    <td>Rousseau</td>
                                    <td>+33134958632</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
            </section>
        </div>
    </main>
</body>