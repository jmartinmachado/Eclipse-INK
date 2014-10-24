<? include("Men.php"); ?>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" src="js/startstop-slider.js"></script>


<div class="Modulo">

	<div class="titulo_ICO">
	
		<div class='Mini_BOX_Izq'>
			<div class="borde_negro">
				<div class="Titulo_Derecha"><b>Buscador</b></div>
					<p>
						<img src="images/lado_1.gif" class="leftbuscador_interno" alt="">
						
						
					</p>
			</div>
		</div>
		
		<div class='Mini_BOX_Izq'>
			<div class="borde_negro">
			<div class="Titulo_Derecha"><b>Comentarios recientes </b></div>
				<p>
					<div id="ult_com">
						<? echo Escribir_Ult_Comentarios(); ?>
					</div>
				</p>
		</div>
		</div>
		
		<div class='Mini_BOX_Izq'>
			<div class="borde_negro">
			<div class="Titulo_Derecha"><b>Top 10</b></div>
				<p>
					<?
						$todo="<UL class='Texto_3'>";
						$const=10*2;
						$i=1;
						$todo_array=Obtener_Mejores_Art();
						if (!empty($todo_array)){
							$LS=count($todo_array);
							while ($i<$LS-1 && $i < $const){
								$todo.="<li>".Generar_Mejores_Art($todo_array[$i],$todo_array[$i+1])."</li>";
								$i=$i+2;
							}
							$todo.="</UL>";
						}else{
							$todo="<span class='Texto_2'>UP's</span>";
						}
						echo $todo;
					?>
			</p>
		</div>
		</div>
		
		
	<div class='Mini_BOX_Izq'>
		<div class="borde_negro">
			<div class="Titulo_Derecha"><b>En Facebook</b></div>
			<p>
				<div align="center" >
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FEclipse-INK%2F133588253349109&amp;width=220&amp;colorscheme=light&amp;connections=10&amp;stream=false&amp;header=true&amp;height=287" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:230px; height:287px;" allowTransparency="true"></iframe>
				</div>
			</p>
		</div>
	</div>
		
		<div class='Mini_BOX_Izq'>
	<div class="borde_negro">
			<div class="Titulo_Derecha"><b>En Twitter</b></div>
				<p align="center">
					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
						new TWTR.Widget({
							version: 2,
							type: 'profile',
							rpp: 6,
							interval: 6000,
							width: 'auto',
							height: 300,
							theme: {
								shell: {
									background: '#dbe0e4',
									color: '#000000'
								},
								tweets: {
									background: '#FFF',
									color: '#1a1a1a',
									links: '#000000',
								}
							},
							features: {
								scrollbar: true,
								loop: false,
								live: true,
								hashtags: true,
								timestamp: true,
								avatars: false,
								behavior: 'all'
							}
						}).render().setUser('EclipseINK').start();
					</script>
				</p>
			</div>
			</div>

		<div class='Mini_BOX_Izq'>
			<div class="borde_negro">
			<div class="Titulo_Derecha"><b>Nube de Tag's</b></div>
				<p>
					<div align="center"  class="espaciosss">
				<?
					$todo="";
					$todo_array=Obtener_TAG();
					if (!empty($todo_array)){
						$LS=count($todo_array);
						for ($i=0;$i<$LS;$i++){
							$todo.=Gen_TAG($todo_array[$i]);
						}
					}else{
						$todo="<span class='Texto_2'>UP's</span>";
					}
					echo $todo;
				?>
					</div>
			</p>
		</div>
				</div>

		<? /*
			<div class='Mini_BOX_Izq'>
			<div class="Titulo_Derecha"><b>Publicidad</b></div>
				<p>
					<? echo Obtener_Banner("v",0) ?>
			</p>
		</div>
		*/ ?>
		<div class="BOX_Modulo ">
			<p class="Texto_2 BOX_Modulo_TiT"></p>
			<p align="center">
			</p>
		</div>

		
		
	</div>

	<div class="titulo_ICO">
		<?
			if (!isset($pagina)){
				$pagina=0;
			}
			if ($pagina==0){
					$todo_array=Obtener_Frase();
					if(empty($todo_array[0])){
						$todo=Generar_Frase("No hay laberintos sin Salida","GANTZ");
					}else{
						if (count($todo_array)!=0){
							$todo=Generar_Frase($todo_array[0],$todo_array[1]);
						}
					}
		?>
			<div class="BOX_Modulo BOX_Modulo_DER">
				<? echo $todo; ?>
			</div>
			<div class="BOX_Modulo BOX_Modulo_DER">
				<div class='Mini_BOX Mini_BOX_Slider'>
					<div id="page-wrap">
						<div id="slider">
							<div id="mover">
								<div id="slide-1" class="slide">
									<h1>Ejemplos</h1>
									<p>Donec gravida posuere arcu. Nulla facilisi. Phasellus imperdiet. Vestibulum at metus. Integer euismod. Nullam placerat rhoncus sapien. Ut euismod. Praesent libero. Morbi pellentesque libero sit amet ante. Maecenas tellus.</p>
									<br>
									<a href="#"><img src="images/sider_ejemplo.png" alt="learn more" /></a>
								</div>
								
								<div class="slide">
									<h1>Descargas</h1>
									<p>Donec gravida posuere arcu. Nulla facilisi. Phasellus imperdiet. Vestibulum at metus. Integer euismod. Nullam placerat rhoncus sapien. Ut euismod. Praesent libero. Morbi pellentesque libero sit amet ante. Maecenas tellus.</p>
									<a href="#"><img src="images/sider_descargar.png" alt="learn more" /></a>
								</div>
								
								<div class="slide">
									<h1>Mundo Geek</h1>
									<p>Donec gravida posuere arcu. Nulla facilisi. Phasellus imperdiet. Vestibulum at metus. Integer euismod. Nullam placerat rhoncus sapien. Ut euismod. Praesent libero. Morbi pellentesque libero sit amet ante. Maecenas tellus.</p>
									<a href="#"><img src="images/sider_geek.png" alt="learn more" /></a>
								</div>
								
								<div class="slide">
									<h1>Eclipse</h1>
									<p>Donec gravida posuere arcu. Nulla facilisi. Phasellus imperdiet. Vestibulum at metus. Integer euismod. Nullam placerat rhoncus sapien. Ut euismod. Praesent libero. Morbi pellentesque libero sit amet ante. Maecenas tellus.</p>
									<a href="#"><img src="images/sider_eclipse.png" alt="learn more" /></a>
								</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		<? } ?>
	
	
	<div class="BOX_Modulo BOX_Modulo_DER">
		<p align="center">
			<? if ($pagina==0){ ?>
				<img src="images/whatsnew.png">
			<? } ?>
		</p>
		<?
			$todo="";
			$const=10*3;
			$i=1;
			$todo_array=ObtenerNWS($pagina);
			$LS=count($todo_array);
			if(empty($todo_array)){
				$todo=Generar_Men("No hay buenas nuevas... T.T");
			}else{
				while ($i<count($todo_array)-1&&$i<$const){
					$todo.=Gen_Ult_Art($todo_array[$i],$todo_array[$i+1],$todo_array[$i+2],($i/3));
					$i=$i+3;
				}
			}/*
			$todo.="<div align='center' class='Texto_4'>";
			if ($pagina>0){
				if (($pagina-1)==0){
					$todo.="<a class='Link_2' href='".traducir_url("inicio.php")."' title='Siguiente (m&aacute;s nuevo)'><b>[ << Siguiente ]</b></a>";
				}else{
					$todo.="<a class='Link_2' href='".traducir_url("inicio.php?pagina=".($pagina-1))."' title='Siguiente (m&aacute;s nuevo)'><b>[ << Siguiente ]</b></a>";
				}
			}
			if ($const<$LS&&$pagina>0){
				$todo.="&nbsp&nbsp|&nbsp&nbsp";
			}
			if ($const<$LS){
				$todo.="<a class='Link_2' href='".traducir_url("inicio.php?pagina=".($pagina+1))."' title='Anterior (m&aacute;s viejo)'><b>[ Anterior >> ]</b></a>";
			}
			$todo.="</div>";*/
			echo $todo;
		?>
		</div>
			<? /*---*/ ?>
	
		</div>
	
	
	