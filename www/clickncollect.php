<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css" />
    <link href="../dist/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js">
    </script>
    <title>Click'n'collect</title>
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
            </nav>    </header>
    <main>
        <!-- SIDEBAR -->
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

        <div class="main_content">
            <h2 class="breadcrumb">Accueil > <strong>Click'N'Collect</strong></h2>


                <div class="wrapper_header">
                    <img src="./images/Filter.svg" id="filter_icon" alt="Filter" />
                    <input type="search" name="" id="search" placeholder="Rechercher">
                </div>

                <table class="clickandcollect">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="" id=""></th>
                            <th>Nom</th>
                            <th>N° Commande</th>
                            <th>Heure de commande</th>
                            <th>Heure prévue de livraison</th>
                            <th>Paiement</th>
                            <th>Status</th>
                            <th><img src="./images/More.svg" alt="Edit" /></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><span class="cell_name">Kadin Herwitz</span><br><span
                                    class="cell_subtitle">0665325421</span>
                            </td>
                            <td>1500</td>
                            <td>12:00<br><span class="cell_subtitle">PM</span></td>
                            <td>
                                <span class="heure_livraison">12:20</span><br>
                                <span class="cell_subtitle">PM</span>
                            </td>
                            <td><span class="button button--lightblue button--xs">Prêt</span></td>
                            <td><span class="button button--lightblue button--xs">Active</span></td>
                            <td>
                                <img src="./images/Edit.svg" alt="Edit" />
                                <img src="./images/Delete.svg" alt="Edit" />
                                <img src="./images/More.svg" alt="Edit" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><span class="cell_name">Kadin Herwitz</span><br><span
                                    class="cell_subtitle">0665325421</span>
                            </td>
                            <td>1501</td>
                            <td>12:00<br><span class="cell_subtitle">PM</span></td>
                            <td>
                                <span class="heure_livraison">12:20</span><br>
                                <span class="cell_subtitle">PM</span>
                            </td>
                            <td><span class="button button--lightblue button--xs">Prêt</span></td>
                            <td><span class="button button--lightblue button--xs">Active</span></td>
                            <td>
                                <img src="./images/Edit.svg" alt="Edit" />
                                <img src="./images/Delete.svg" alt="Edit" />
                                <img src="./images/More.svg" alt="Edit" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                        <td><span class="cell_name">Mckenzie</span><br><span
                                    class="cell_subtitle">0665325421</span>
                            </td>
                            <td>1502</td>
                            <td>12:00<br><span class="cell_subtitle">PM</span></td>
                            <td>
                                <span class="heure_livraison">12:20</span><br>
                                <span class="cell_subtitle">PM</span>
                            </td>
                            <td><span class="button button--lightblue button--xs">Prêt</span></td>
                            <td><span class="button button--lightblue button--xs">Active</span></td>
                            <td>
                                <img src="./images/Edit.svg" alt="Edit" />
                                <img src="./images/Delete.svg" alt="Edit" />
                                <img src="./images/More.svg" alt="Edit" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><span class="cell_name">Kylee</span><br><span
                                    class="cell_subtitle">0665325421</span>
                            </td>
                            <td>1503</td>
                            <td>12:00<br><span class="cell_subtitle">PM</span></td>
                            <td>
                                <span class="heure_livraison">12:20</span><br>
                                <span class="cell_subtitle">PM</span>
                            </td>
                            <td><span class="button button--lightblue button--xs">Prêt</span></td>
                            <td><span class="button button--lightblue button--xs">Active</span></td>
                            <td>
                                <img src="./images/Edit.svg" alt="Edit" />
                                <img src="./images/Delete.svg" alt="Edit" />
                                <img src="./images/More.svg" alt="Edit" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><span class="cell_name">Tremayne</span><br><span
                                    class="cell_subtitle">0665325421</span>
                            </td>
                            <td>1504</td>
                            <td>12:00<br><span class="cell_subtitle">PM</span></td>
                            <td>
                                <span class="heure_livraison">12:20</span><br>
                                <span class="cell_subtitle">PM</span>
                            </td>
                            <td><span class="button button--lightblue button--xs">Prêt</span></td>
                            <td><span class="button button--lightblue button--xs">Active</span></td>
                            <td>
                                <img src="./images/Edit.svg" alt="Edit" />
                                <img src="./images/Delete.svg" alt="Edit" />
                                <img src="./images/More.svg" alt="Edit" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><span class="cell_name">Dexter</span><br><span
                                    class="cell_subtitle">0665325421</span>
                            </td>
                            <td>1505</td>
                            <td>12:00<br><span class="cell_subtitle">PM</span></td>
                            <td>
                                <span class="heure_livraison">12:20</span><br>
                                <span class="cell_subtitle">PM</span>
                            </td>
                            <td><span class="button button--lightblue button--xs">Prêt</span></td>
                            <td><span class="button button--lightblue button--xs">Active</span></td>
                            <td>
                                <img src="./images/Edit.svg" alt="Edit" />
                                <img src="./images/Delete.svg" alt="Edit" />
                                <img src="./images/More.svg" alt="Edit" />
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><span class="cell_name">Anissa</span><br><span
                                    class="cell_subtitle">0665325421</span>
                            </td>
                            <td>1506</td>
                            <td>12:00<br><span class="cell_subtitle">PM</span></td>
                            <td>
                                <span class="heure_livraison">12:20</span><br>
                                <span class="cell_subtitle">PM</span>
                            </td>
                            <td><span class="button button--lightblue button--xs">Prêt</span></td>
                            <td><span class="button button--lightblue button--xs">Active</span></td>
                            <td>
                                <img src="./images/Edit.svg" alt="Edit" />
                                <img src="./images/Delete.svg" alt="Edit" />
                                <img src="./images/More.svg" alt="Edit" />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>Clients actifs: 479/706</p>

        </div>
    </main>


</body>

</html>