<?php
	/* conexion para internet */
			$servidor="localhost";
			$usuario="anprorgm_admin";
			$contrasena="Admin_*2016";
			$basededatos="anprorgm_registro_asociacion";

			 $conex=mysql_connect($servidor,$usuario,$contrasena) ;
			 if(!$conex)
			    {
				  echo "Imposible conectar a la Base de Datos";
				}
				 else
				    {
						mysql_query("SET NAMES utf8");
					 mysql_select_db($basededatos);

					} 
?>