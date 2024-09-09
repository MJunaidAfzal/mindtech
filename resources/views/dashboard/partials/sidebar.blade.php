

<div class="geex-sidebar">
	<a href="#" class="geex-sidebar__close">
		<i class="uil uil-times"></i>
	</a>
	<div class="geex-sidebar__wrapper">
		<div class="geex-sidebar__header">
			<a class='geex-sidebar__logo' href='{{ route('dashboard') }}'>
				<img class="logo-lite" src="{{asset('assets/img/logo-dark.svg')}}" alt="logo">
				<img class="logo-dark" src="{{asset('assets/img/logo-lite.svg')}}" alt="logo">
			</a>
		</div>
		<nav class="geex-sidebar__menu-wrapper">
            <ul class="geex-sidebar__menu">
                <li class="geex-sidebar__menu__item has-children">
                  <a href="#" class="geex-sidebar__menu__link">
                    <span>My Apps </span><i style="float: right;margin-left:60px" class="uil uil-arrow-down"></i>
                  </a>
                  <!-- Submenu for 'My Apps' -->
                  <ul style="display: block" class="geex-sidebar__submenu">
                    <li class="geex-sidebar__menu__item has-children">
                      <a class="geex-sidebar__menu__link" href="#">
                        Commercial  <i style="font-size:13px;float: right;margin-left:30px" class="uil uil-arrow-down"></i>
                        <!-- Submenu for 'Commercial' -->
                        <ul style="margin-top: -30px;margin-left:20px" class="geex-sidebar__menu">
                          <li class="geex-sidebar__menu__item">
                            <a style="font-size:13px" class="geex-sidebar__menu__link" href="#">Vos Commandes</a>
                          </li>
                          <li class="geex-sidebar__menu__item">
                            <a style="font-size:13px" class="geex-sidebar__menu__link" href="#">Maintenance et contrats</a>
                          </li>
                        </ul>
                      </a>
                    </li>
                    <li class="geex-sidebar__menu__item">
                      <a class="geex-sidebar__menu__link" href="#">Technique   <i style="font-size:13px;float: right;margin-left:45px" class="uil uil-arrow-down"></i>
                        <ul style="margin-top: -30px;margin-left:20px" class="geex-sidebar__menu">
                            <li class="geex-sidebar__menu__item">
                              <a style="font-size:13px" class="geex-sidebar__menu__link" href="#">Support technique</a>
                            </li>
                            <li class="geex-sidebar__menu__item">
                              <a style="font-size:13px" class="geex-sidebar__menu__link" href="#">Monitoring</a>
                            </li>
                          </ul>
                      </a>
                    </li>
                    <li class="geex-sidebar__menu__item">
                      <a class="geex-sidebar__menu__link" href="#">Documentation   <i style="font-size:13px;float: right;margin-left:10px" class="uil uil-arrow-down"></i>
                        <ul style="margin-top: -30px;margin-left:20px" class="geex-sidebar__menu">
                            <li class="geex-sidebar__menu__item">
                              <a style="font-size:13px" class="geex-sidebar__menu__link" href="#">Vos Documents & KB</a>
                            </li>
                            <li class="geex-sidebar__menu__item">
                                <a href="#" class="geex-sidebar__menu__link geex-customizer__btn--light">Light Demo</a>
                            </li>
                            <li class="geex-sidebar__menu__item">
                                <a href="#" class="geex-sidebar__menu__link geex-customizer__btn--dark">Dark Demo</a>
                            </li>
                          </ul>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>

              <ul class="geex-sidebar__menu">
                <li class="geex-sidebar__menu__item has-children">
                  <a href="#" class="geex-sidebar__menu__link">
                    <span>My Apps </span><i style="float: right;margin-left:60px" class="uil uil-arrow-down"></i>
                  </a>
                  <!-- Submenu for 'My Apps' -->
                  <ul style="display: block" class="geex-sidebar__submenu">
                    <li class="geex-sidebar__menu__item">
                      <a class="geex-sidebar__menu__link" href="#">Technique   <i style="font-size:13px;float: right;margin-left:45px" class="uil uil-arrow-down"></i>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            <a href="">
                <p style="margin-top: 50px;background-color:lightgrey;color:black;border-radius:10px;padding:10px">Evenements <i style="float: right" class="uil uil-arrow-up"></i></p>
            </a>

            <div style="margin-top: 20px;background: linear-gradient(to bottom, rgb(255, 154, 39), #ff6699);;color:#fff;border-radius:10px;padding:10px" class="card">
                <div class="card-body">
                    <b>Contact</b><br>
                    <div style="margin-top:20px">
                        <i  class="uil uil-phone"></i> <span style="margin-left: 10px;font-size:12px">09 78 25 40 80</span>
                    </div>
                    <div style="margin-top:10px">
                        <i  class="uil uil-envelope"></i> <span style="margin-left: 10px;font-size:12px">contact@mind-tech.fr</span>
                    </div>
                    <div style="margin-top:15px">
                       <button style=" background: #ffffff00;color: #fff;border-radius:10px;padding:10px;font-size:13px" class="button">Send message via <br> <b>Microsofts teams</b></button>
                    </div>
                </div>
            </div>
            <a href="">
                <p style="margin-top: 20px;background-color:rgb(234, 166, 166);color:red;border-radius:10px;padding:10px"><i style="float: left" class="uil uil-power-off"></i> Logout </p>
            </a>


			</ul>
		</nav>
	</div>
</div>
