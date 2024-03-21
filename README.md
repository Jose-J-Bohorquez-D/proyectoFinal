link para revisar desde azure:

	* https://campeche.azurewebsites.net/

link para revisar el portafolio 

	* https://drive.google.com/drive/folders/1ZqbFWg_WOPNxS9heJ5JTsietCwdb_iuK?usp=sharing

evidencias pendientes:

trim 5 :

	* presenta manual de usuario segun normas y procedimientos establecidos (va al final despues de que este funcionando todo)

 instalacion:

  	* clonar y correr desde el document root de su servidor Local (xampp, laragon o wamp)

	* es nesesario tener composer instalado, (debe apuntar al php del servidor local), luego
 	  ingresamos al proyecto desde el vscode, abrimos un terminal en el proyecto, y ejecutar el comando
    	  (composer install) y (composer update)

       * luego testear, si aun no funciona revisar config\app\app.php (#public string $baseURL = '')
         y poner el url base que se toma del navegador ingresando por localhost/proyecto/public
    
	* clonar y correr con spark, desde la terminal y ubicados en el root se abre un terminal
   	 y se ejecuta (php spark serve)(aclaro que debe estar php instalado y ajustado en el path)

errores de instalacion con (php spark)

	* se deberia tener instalado composer o ingresar el comando en la terminal 
 	  (composer install )(composer update)(php spark serve) y ya deberia funcionar
    	  puede que de errores en las rutas debido a que es un servidor de testeo rapido
    

configuracion:

	  * se debe editar el archivo env, renombrar y poner ( .env )
	  * luego editar el entorno ENVIRONMENT a CI_ENVIRONMENT = development
	  * despues editar el entorno app y asignar la ruta de app.baseURL =''
	  * por ultimo editar el entorno DATABASE con los datos de su base de datos
