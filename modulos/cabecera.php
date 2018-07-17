<div class="cabecera"> 
	<div class="logo"> 
		<span class="titulo_logo">
			<img src="<?php echo $dir ?>../img/logos/logo.png" style="width:36px; margin-top:-10px;"/>
			<span class="software">
				SOFTWARE
			</span> 
			<span class="version">
				V 1.1.0
			</span>
		</span>
	</div>
	<div class="user"  data-toggle="collapse" data-target="#menu_perfil"  aria-haspopup="true" aria-expanded="false">
		<img class="user-profile" src="<?php echo $dir ?>../img/fotos/img.jpg" />
		<div class="alertas animated zoomIn">0</div>
	</div>
	<div id="menu_perfil" class="collapse menu_perfil">
		<a href="">
			<div class="item_menu_perfil">
				 Editar Perfil 
			</div>
		</a>
		<a href="logout.php">
			<div class="item_menu_perfil">
				Cerrar Sesión
			</div>
		</a>
	</div>
</div>