<div class="geex-sidebar">
    <a href="#" class="geex-sidebar__close">
        <i class="uil uil-times"></i>
    </a>
    <style>
        /* Sidebar Styling */

        body {
            background-color: #e8e8e8
        }

        .contact-card {
            background: linear-gradient(135deg, #ff832b 0%, #ff56a8 100%);
            border-radius: 15px;
            text-align: left;
            width: 100%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .contact-card h4 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .contact-card div i {
            margin-right: 10px;
        }

        .btn-message {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 0.9rem;
            border-radius: 10px;
            text-align: center;
            transition: background 0.3s ease;
            width: 100%;
        }

        .btn-message:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        @media screen and (max-width: 1024px) {
            .sidebar {
                background-color: #FFFFFF;
                height: 100%;
                display: flex;
                flex-direction: column;
                padding: 20px;
                border-radius: 20px;
                top: 22px;
                inset-inline-start: 22px;
                padding: 38px 29px;
                border-radius: 33px;
                max-height: calc(100vh - 44px);
                overflow-y: auto;
                scrollbar-width: none;
                border: 1px solid white;
            }


        }

        @media screen and (max-width: 100px) {
            .sidebar {
                background-color: #FFFFFF;
                height: 100%;
                display: flex;
                flex-direction: column;
                padding: 20px;
                border-radius: 20px;
                top: 22px;
                inset-inline-start: 22px;
                padding: 38px 29px;
                border-radius: 33px;
                max-height: calc(100vh - 44px);
                overflow-y: auto;
                scrollbar-width: none;
                border: 1px solid white;
                top: 0;
                width: 0;
                inset-inline-start: 0;
                border-radius: 0;
                max-height: 100vh;
                overflow-y: auto;
                z-index: 100

                /* Rounded border */
            }

        }



        .sidebar-header {
            border-bottom: 1px solid #ddd;
        }

        .sidebar h5 {
            color: #212529;
            font-weight: 600;
        }

        .dropdown-section {
            margin-top: 20px;
        }

        .dropdown-toggle {
            border: none;
            width: 100%;
            padding: 10px 15px;
            text-align: left;
            color: #343a40;
            font-weight: 600;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .dropdown-toggle:hover {
            background-color: #e2e6ea;
        }

        .gradient-btn {
            background: linear-gradient(45deg, #ff832b, #ff56a8);
            color: white;
            border: none;
            width: 100%;
            padding: 10px 15px;
            text-align: left;
            font-weight: 600;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gradient-btn:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Collapsed submenus */
        .collapse ul {
            padding-left: 15px;
        }

        .collapse ul li {
            color: #343a40;
            font-weight: 400;
            margin-top: 5px;
            border-bottom: 1px solid #ddd;
            /* Added line */
            padding-bottom: 5px;
            /* Spacing for separation */
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(45deg, #ff6a00, #ee0979);
            color: white;
            border-radius: 15px;
            text-align: center;
        }

        .contact-section h6 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-section p {
            font-weight: 400;
        }

        .contact-section a {
            color: #212529;
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .contact-section a:hover {
            background-color: #f1f1f1;
        }

        /* Log Out Button */
        .logout-section .btn {
            padding: 5px;
            font-weight: 600;
            border-radius: 10px;
            font-size: 15px;
            padding-bottom: 0%;

        }

        /* Logo */
        .logo {
            width: 40px;
            height: 40px;
        }

        #list:hover {
            color: #ff832b;
        }
    </style>
    <div class="sidebar">
        <!-- Logo Section -->
        <div class="sidebar-header d-flex align-items-center justify-content-center py-4">
           <a href="{{ route('dashboard') }}">
            <img width="100%" height="100%" src="{{ asset('assets/logo.png') }}" alt="Logo">
           </a>
        </div>

        <!-- My Apps Section -->
        <div class="dropdown-section">
            <button class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#appsMenu">
                <i style="float: right;" class="uil uil-arrow-down me-2"></i>
                My Apps
            </button>
            <div id="appsMenu" class="collapse">
                <ul class="list-unstyled">
                    <li>
                        <button class="dropdown-toggle gradient-btn mb-2" data-bs-toggle="collapse"
                            data-bs-target="#commercialSubMenu">
                            Commercial
                        </button>
                        <ul id="commercialSubMenu" class="collapse list-unstyled ps-3">
                            <a href="">
                                <li id="list">Vos commandes</li>
                            </a>
                            <a href="">
                                <li id="list">Maintenance et contrats</li>
                            </a>
                        </ul>
                    </li>
                    <li>
                        <button class="dropdown-toggle gradient-btn mb-2" data-bs-toggle="collapse"
                            data-bs-target="#technicalSubMenu">
                            Technique
                        </button>
                        <ul id="technicalSubMenu" class="collapse list-unstyled ps-3">
                            <a href="">
                                <li id="list">Support technique</li>
                            </a>
                            <a href="">
                                <li id="list">Montioring</li>
                            </a>
                        </ul>
                    </li>
                    <li>
                        <button class="dropdown-toggle gradient-btn mb-2" data-bs-toggle="collapse"
                            data-bs-target="#docSubMenu">
                            Documentation
                        </button>
                        <ul id="docSubMenu" class="collapse list-unstyled ps-3">
                            <a href="">
                                <li id="list">Vos documents & KB</li>
                            </a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Events Section -->
        <div style="margin-top: 230px" class="dropdown-section">
            <button class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#eventsMenu">
                <i style="float: right" class="uil uil-arrow-down me-2"></i> Événements
            </button>
            <div id="eventsMenu" class="collapse">
                <ul class="list-unstyled ps-3">
                    <a href="">
                        <li id="list">S'inscrire</li> <!-- Added li -->
                    </a>
                </ul>
            </div>
        </div>

        <!-- Contact Section -->

            <div class="card p-4 text-white contact-card  mt-3">
                <h4 style="color: white" class="mb-3">Contact</h4>
                <div class="mb-2">
                    <i style="color: white" class="uil uil-phone"></i>
                    <span style="color: white;font-size:10px">09 78 25 40 80</span>
                </div>
                <div class="mb-4">
                    <i style="color: white" class="uil uil-envelope"></i>
                    <span style="font-size:8px;color: white">contact@mind-tech.fr</span>
                </div>
                <button style="font-size:10px" class=" btn-message" onclick="window.location.href='https://teams.microsoft.com'">
                    <i class="fab fa-microsoft"></i> Send message via Microsoft Teams
                </button>
            </div>


        <!-- Log Out Button -->
        <div class="logout-section">
            <button style="background-color: #fd9393;color:red;text-align:left" class="btn w-100 mt-3">
                <i style="font-size: 20px;margin-top:15px" class="uil uil-sign-out-alt me-2 "></i> Log Out
            </button>
        </div>
    </div>



</div>

</div>

