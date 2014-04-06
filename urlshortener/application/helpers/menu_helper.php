<?php
	function contruirMenu(){
		$menu = '<nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <!--<a class="navbar-brand" href="#">Brand</a>-->
                    </div>
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                          <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ciudad <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Guadalajara</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Tlaquepaque</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Tonal&aacute;</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Zapopan</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Tequila</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Playa <b class="caret"></b></a>
                            <ul class="dropdown-menu">               
                              <li>
                                <a class="trigger right-caret" href="#">PTO. VALLARTA</a>
                                <ul class="dropdown-menu sub-menu">
                                  <li><a href="historia.php">historia</a></li>
                                  <li><a href="hoteles.php?seccion=1">hoteles</a></li>
                                  <li><a href="restaurantes.php">restaurantes</a></li>
                                  <li><a href="vida_nocturna.php">vida nocturna</a></li>
                                  <li><a href="gourment.php">gourment</a></li>
                                  <li><a href="taxis.php">taxis</a></li>
                                  <li><a href="hospitales.php">hospitales</a></li>
                                  <li><a href="casa_de_cambio.php">casa de cambio</a></li>
                                  <li><a href="artesanias.php">artesan&iacute;as</a></li>
                                  <li><a href="atracciones.php">atracciones</a></li>
                                  <li><a href="mapa.php">mapa</a></li>
                                  <li><a href="galeria.php">galer&iacute;a</a></li>      
                                </ul>          
                              </li> 
                              <li>
                                <a class="trigger right-caret" href="#">COSTA ALEGRE</a>
                                <ul class="dropdown-menu sub-menu">
                                  <li><a href="historia.php">historia</a></li>
                                  <li><a href="hoteles.php?seccion=1">hoteles</a></li>
                                  <li><a href="restaurantes.php">restaurantes</a></li>
                                  <li><a href="vida_nocturna.php">vida nocturna</a></li>
                                  <li><a href="gourment.php">gourment</a></li>
                                  <li><a href="taxis.php">taxis</a></li>
                                  <li><a href="hospitales.php">hospitales</a></li>
                                  <li><a href="casa_de_cambio.php">casa de cambio</a></li>
                                  <li><a href="artesanias.php">artesan&iacute;as</a></li>
                                  <li><a href="atracciones.php">atracciones</a></li>
                                  <li><a href="mapa.php">mapa</a></li>
                                  <li><a href="galeria.php">galer&iacute;a</a></li>      
                                </ul>          
                              </li>
                            </ul>
                          </a>
                        </li>      
                       <li><a href="#">Monta&ntilde;a</a></li>
                         <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jalisco <b class="caret"></b></a>
                           <ul class="dropdown-menu">
                            <li>
                              <a class="trigger right-caret" href="#">¿POR QUE JALISCO?</a>
                                <ul class="dropdown-menu sub-menu">
                                  <li><a href="zona-centro.php">zona centro</a></li>              
                                  <li><a href="zona-costa.php">zona costa</a></li>              
                                  <li><a href="zona-altos.php">zona altos</a></li>              
                                  <li><a href="zona-montania.php">zona monta&ntilde;a</a></li>              
                                  <li><a href="zona-norte.php">zona norte</a></li>              
                                  <li><a href="zona-chapala.php">zona chapala</a></li>              
                                  <li><a href="zona-sierra.php">zona sierra</a></li>
                                </ul> 
                            </li>
                            <li><a href="clima.php">CLIMA</a></li>
                            <li>
                              <a class="trigger right-caret" href="#">HISTORIA</a>
                               <ul class="dropdown-menu sub-menu">
                                  <li><a href="antecedentes.php">Antecedentes hist&oacute;ricos</a></li>              
                                  <li><a href="epoca-actual.php">&Eacute;poca Actual</a></li>             
                                  <li><a href="la-colonia.php">La Colonia</a></li>              
                                  <li><a href="la-independencia.php">La Independencia</a></li>              
                                  <li><a href="revolucion-y-reforma.php">Revoluci&oacute;n y Reforma</a></li>             
                               </ul>
                            </li>   
                            <li><a href="#">GEOGRAFIA</a></li>
                            <li>
                              <a class="trigger right-caret" href="#">NEGOCIOS</a>
                               <ul class="dropdown-menu sub-menu">
                                  <li><a href="centro-convenciones.php">Centro de Convenciones Puerto Vallarta</a></li>
                                  <li><a href="expo-guadalajara.php">Expo Guadalajara</a></li>
                                </ul>  
                            </li>
                             <li>
                              <a class="trigger right-caret" href="#">CULTURA</a>
                               <ul class="dropdown-menu sub-menu">
                                 <li><a href="recintos-culturales-jalisco.php">Recintos culturales de Jalisco</a></li>                                  
                                </ul>  
                            </li>  
                            <li>
                              <a class="trigger right-caret" href="#">TRADICIONES</a>
                               <ul class="dropdown-menu sub-menu">
                                  <li><a href="charreria.php">Charrería</a></li>
                                  <li><a href="mariachi.php">Mariachi</a></li>
                                  <li><a href="tequila.php">Tequila</a></li>
                                  <li><a href="fiestas-y-costumbres-jaliscienses.php">Fiestas y costumbres jaliscienses</a></li>
                                  <li><a href="fiestas-chapala.php">Fiestas y Costumbres más representativas de Chapala</a></li>
                                  <li><a href="fiestas-guadalajara.php">Fiestas y Costumbres más representativas de Guadalajara</a></li>
                                  <li><a href="fiestas-tlaquepaque.php">Fiestas y Costumbres más representativas de Tlaquepaque</a></li>
                                  <li><a href="fiestas-zapopan.php">Fiestas y Costumbres más representativas de Zapopan</a></li>
                                  <li><a href="fiestas-san-juan-de-los-lagos.php"> Fiestas y costumbres más representativas de San Juan de los Lagos</a></li>                                 
                                </ul>  
                            </li>  

                          </ul>  
                        </li>
                         <li class="rutas"><a href="#">Rutas</a></li>
                        <li class="lamx"><a href="#">Lamx</a></li>
                        <li class="mapa"><a href="#">Mapa</a></li>
                        <li class="utilidades"><a href="#">Utilidades</a></li>
                    </ul>

                </div>
            </nav>';
		return $menu;
	}