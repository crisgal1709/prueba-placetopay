# placetopay-prueba

## Introduction

> Estad es una prueba técnica para la empresa PlaceTopay. En donde se consume los WebServices a travez de SoapClient.

## Instalación

> Clone o descargue este proyecto.

Luego, instale las dependencias a travez de Composer

-> composer install

Si no tiene Composer, puede descargarlo de <a href="https://getcomposer.org/">La página oficial de Composer</a> <br>
<a href="https://getcomposer.org/doc/">Aquí</a>  puede ver toda la documentación de cómo instalar y usar Composer

## Configuración
Luego de instalar las dependencias, puede configurar sus credenciales de PTP, también, sus datos de la Base de Datos, en el archivo config/placetopay.php en la raíz del proyecto, también puede usar el archivo .env.example, quitándole el ".example" y dejándolo solo como .env, en donde podrá configurar sus variables de entorno.

## Uso
Una Vez configurado, puede correr las migraciones, y registrar un usuario.

Al tener lista la instalación y estar logueado, en el la dirección (transacciones/crear) podrá crear una transacción de prueba, donde se le preguntará algunos datos, para efectos prácticos, hay unos datos de prueba que puede usar tal como están, al hacer clic en "Crear Transacción" Será redirigido a la interfaz del banco de prueba, en donde, puede escoger "Pagar" o dar click en "Debug" y realizar los pasos que allí se le solicitan. 

Ya sea porque presione "Pagar" o Vaya al Debug, lo realice, y presione "Regresar a PPE" esto le redirigirá al proyecto, en la dirección "http://localhost/example/transacciones/callback" y esto, le mostrará en pantalla si la transacción fue Aprobada, Rechazada, quedó como pendiente o Falló, además del ID De la transacción.

Si se dirige a http://localhost/example/transacciones podrá observar un histórico con todas las transacciones que haya realizado

Se puede ver un Demo de la aplicación en <a href="http://placetopay-prueba.herokuapp.com/">http://placetopay-prueba.herokuapp.com/</a>

## Tests
Por último, si se encuentra en un ambiente de desarrollo, puede realizar los tests gracias a PHPUnit, ingresando por consola, situándose en la raíz del proyecto y ejecutando el comando: ./vendor/bin/phpunit

 


