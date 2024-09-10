

	<a href="#" class="geex-sidebar__close">
		<i class="uil uil-times"></i>
	</a>
    <style>
        /* Sidebar Styling */
        .sidebar {
            background-color: #fff;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 20px;
            border-radius: 20px;
            position:fixed;
            top: 22px;
            inset-inline-start:22px;
            max-width: 20%;
            padding: 38px 29px;
            border-radius: 33px;
            max-height: calc(100vh - 44px);
            overflow-y:auto;
            scrollbar-width: none;
            border: 1px solid var(--white-color);

            /* Rounded border */
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
            background-color: #f8f9fa;
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
            background: linear-gradient(45deg, #ff6a00, #ee0979);
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
            margin-top: auto;
            padding: 12px;
            font-weight: 600;
            border-radius: 10px;
        }

        /* Logo */
        .logo {
            width: 40px;
            height: 40px;
        }
    </style>
    <div class="sidebar">
        <!-- Logo Section -->
        <div class="sidebar-header d-flex align-items-center justify-content-center py-4">
            <img src="https://via.placeholder.com/40" alt="Logo" class="logo">
            <h5 class="ms-2">Mindtech</h5>
        </div>

        <!-- My Apps Section -->
        <div class="dropdown-section">
            <button class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#appsMenu">
                <i class="fas fa-th-large me-2"></i> My Apps
            </button>
            <div id="appsMenu" class="collapse">
                <ul class="list-unstyled">
                    <li>
                        <button class="dropdown-toggle gradient-btn mb-2" data-bs-toggle="collapse"
                            data-bs-target="#commercialSubMenu">
                            Commercial
                        </button>
                        <ul id="commercialSubMenu" class="collapse list-unstyled ps-3">
                            <li>Vos commandes</li>
                            <li>Maintenance et contrats</li>
                        </ul>
                    </li>
                    <li>
                        <button class="dropdown-toggle gradient-btn mb-2" data-bs-toggle="collapse"
                            data-bs-target="#technicalSubMenu">
                            Technique
                        </button>
                        <ul id="technicalSubMenu" class="collapse list-unstyled ps-3">
                            <li>Support technique</li>
                            <li>Marketing</li>
                        </ul>
                    </li>
                    <li>
                        <button class="dropdown-toggle gradient-btn mb-2" data-bs-toggle="collapse"
                            data-bs-target="#docSubMenu">
                            Documentation
                        </button>
                        <ul id="docSubMenu" class="collapse list-unstyled ps-3">
                            <li>Vos documents & IR</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Events Section -->
        <div class="dropdown-section">
            <button class="dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#eventsMenu">
                <i class="fas fa-calendar-alt me-2"></i> Événements
            </button>
            <div id="eventsMenu" class="collapse">
                <ul class="list-unstyled ps-3">
                    <li>Upcoming Conferences</li> <!-- Added li -->
                </ul>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="contact-section gradient-box mt-4 p-3">
            <h6>Contact</h6>
            <p class="mb-1"><i class="fas fa-phone-alt me-2"></i> 09 78 45 40 60</p>
            <p><i class="fas fa-envelope me-2"></i> contact@mindtech.com</p>
            <a href="#" class="btn btn-light w-100 mt-3">Send message via Microsoft Teams</a>
        </div>

        <!-- Log Out Button -->
        <div class="logout-section mt-auto">
            <button class="btn btn-danger w-100">
                <i class="fas fa-sign-out-alt me-2"></i> Log Out
            </button>
        </div>
    </div>



</div>
