link para revisar desde azure:

	*	https://campeche.azurewebsites.net/

link para revisar el portafolio 

	*	https://drive.google.com/drive/folders/1ZqbFWg_WOPNxS9heJ5JTsietCwdb_iuK?usp=sharing

evidencias pendientes:

trim 5 :

	*	presenta manual de usuario segun normas y procedimientos establecidos (va al final despues de que este funcionando todo)

 instalacion:

  * clonar y correr desde el document root de su servidor Local (xampp, laragon o wamp)
  * clonar y correr con spark, desde la terminal y ubicados en el root se abre un terminal
    y se ejecuta (php spark serve)(aclaro que debe estar php instalado y ajustado en el path)

configuracion:

  * se debe editar el archivo env, renombrar y poner ( .env )
  * luego editar el entorno ENVIRONMENT a CI_ENVIRONMENT = development
  * despues editar el entorno app y asignar la ruta de app.baseURL =''
  * por ultimo editar el entorno DATABASE con los datos de su base de datos
