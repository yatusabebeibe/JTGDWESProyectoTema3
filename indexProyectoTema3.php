<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jesús Temprano Gallego</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        header {
            background: #4e9645;
            color: white;
            padding: 15px;
            text-align: center;
        }
        h1, h3, p {
            margin: 0;
        }
        main {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px;
            margin-top: 20px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-radius: 8px;
            transition: 0.3s;
        }
        th {
            background-color: #4e9645;
            color: white;
        }
        td {
            background: #ecf0f1;
        }
        tr:hover td {
            background: #d6f8d6;
        }
        a {
            text-decoration: none;
            color: #0077cc;
        }
        a:hover {
            color: #005fa3;
        }
        footer {
            padding-top: 25px;
            margin: auto;
            background-color: #459650;
            text-align: center;
            height: 150px;
            color: white;
            
            a {
                text-decoration: aquamarine wavy underline;
                color: aquamarine;
                transition: 0.3s;
            }
            a:hover {
                color: blue;
                mix-blend-mode: multiply;
                text-decoration: none;
            }
        }
        table > * > tr > *  {text-align: center;}
        table > * > tr > *:nth-child(2)  {text-align: left;}
    </style>
</head>
<body>
    <!-- 😼 -->
    <header>
        <h1>CFGS - Desarrollo de Aplicaciones Web</h1>
        <h3>Jesús Temprano Gallego</h3>
        <p>Curso 2025/2026 - Grupo DAW2</p>
    </header>
    <!-- 😼 -->
    <main>
        <table>
            <thead>
                <tr>
                    <th style="width: max-content">Nº Ej</th>
                    <th style="width: 60%;">Ejercicio</th>
                    <th style="width: 16%;">Ejecutar</th>
                    <th style="width: 16%;">Código</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>Hola mundo y phpinfo()</td>
                    <td><a href="./codigoPHP/ejercicio00.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio00.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump).</td>
                    <td><a href="./codigoPHP/ejercicio01.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio01.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Inicializar y mostrar una variable heredoc.</td>
                    <td><a href="./codigoPHP/ejercicio02.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio02.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)</td>
                    <td><a href="./codigoPHP/ejercicio03.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio03.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</td>
                    <td><a href="./codigoPHP/ejercicio04.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio04.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp).</td>
                    <td><a href="./codigoPHP/ejercicio05.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio05.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</td>
                    <td><a href="./codigoPHP/ejercicio06.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio06.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Mostrar el nombre del fichero que se está ejecutando.</td>
                    <td><a href="./codigoPHP/ejercicio07.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio07.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mostrar la dirección IP del equipo desde el que estás accediendo.</td>
                    <td><a href="./codigoPHP/ejercicio08.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio08.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Mostrar el path donde se encuentra el fichero que se está ejecutando.</td>
                    <td><a href="./codigoPHP/ejercicio09.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio09.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Mostrar el contenido del fichero que se está ejecutando.</td>
                    <td><a href="./codigoPHP/ejercicio10.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio10.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Mostrar el documento PHPDoc del proyecto que se está ejecutando generado con PHP Documentor o ApiGen.</td>
                    <td><a href="./codigoPHP/ejercicio11.php" target="_self"></a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio11.php" target="_self"></a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).</td>
                    <td><a href="./codigoPHP/ejercicio12.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio12.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Crear una función que cuente el número de visitas a la página actual desde una fecha concreta.</td>
                    <td><a href="./codigoPHP/ejercicio13.php" target="_self"></a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio13.php" target="_self"></a></td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación.</td>
                    <td><a href="./codigoPHP/ejercicio14.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio14.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana. (Array asociativo con los nombres de los días de la semana).</td>
                    <td><a href="./codigoPHP/ejercicio15.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio15.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</td>
                    <td><a href="./codigoPHP/ejercicio16.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio16.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.</td>
                    <td><a href="./codigoPHP/ejercicio17.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio17.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</td>
                    <td><a href="./codigoPHP/ejercicio18.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio18.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>Construir una librería de funciones de validación de campos de formularios (LibreríaValidacionFormularios.php) para utilizarla en los siguientes ejercicios. Discusión: diferencia entre librería de funciones y clase.</td>
                    <td><a href="./codigoPHP/ejercicio19.php" target="_self"></a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio19.php" target="_self"></a></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Convertir la LibreriaValidacionFormularios.php en una clase ValidacionFormularios.php. El profesor facilitará a los alumnos la clase AAMMDDValidacionFormularios.php desarrollada en el curso anterior como punto de partida.</td>
                    <td><a href="./codigoPHP/ejercicio20.php" target="_self"></a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio20.php" target="_self"></a></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.</td>
                    <td><a href="./codigoPHP/ejercicio21.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio21.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas.</td>
                    <td><a href="./codigoPHP/ejercicio22.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio22.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.</td>
                    <td><a href="./codigoPHP/ejercicio23.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio23.php" target="_self">Ver código</a></td>
                </tr>
                <!-- <tr>
                    <td>24</td>
                    <td>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.</td>
                    <td><a href="./codigoPHP/ejercicio24.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio24.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.</td>
                    <td><a href="./codigoPHP/ejercicio25.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio25.php" target="_self">Ver código</a></td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Probar la plantilla anterior desarrollando un formulario que recoja la temperatura y la presión atmosférica en una serie de fechas y (cuando el usuario lo decida) genere un informe con los datos recibidos y un promedios, mínimos y máximos de temperatura y presión atmosférica.</td>
                    <td><a href="./codigoPHP/ejercicio26.php" target="_self">Ejecutar</a></td>
                    <td><a href="./mostrarcodigo/muestraEjercicio26.php" target="_self">Ver código</a></td>
                </tr>  -->
            </tbody>
        </table>
    </main>
    <!-- 😼 -->
    <footer><a href="../../" target="_self">Jesús Temprano Gallego</a> | 30/09/2025</footer>
    <!-- 😼 -->
    <!-- muxixima glasia alvelto pol el marivilliosiximo achetemeele que te paxo chatgepete -->
</body>
</html>
