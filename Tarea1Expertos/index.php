<!DOCTYPE html>
<html lang="en" class="no-js"> 
    <head>
        <meta charset="utf-8">
        <!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- Page Title -->
        <title>Tarea 1 Sistemas Expertos</title>		
        <!-- Meta Description -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <!-- CSS
        ================================================== -->
        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">
        <!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

        <!-- Estilo para las tablas -->
        <style type="text/css">
            body {
                font: normal medium/1.4 sans-serif;
            }
            table {
                border-collapse: collapse;
                width: 70%;
                text-align: center;
                margin: auto;
            }
            th, td {
                padding: 0.25rem;
                border: 1px solid #ccc;
            }
            tbody tr:nth-child(odd) {
                background: #eee;
            }
            .titulo{
                padding: 0.5rem;
                background: #484848 ;
                color: white;
                text-align: center;
                font-size: 21px;
            }
            #cuadro{
                width: 90%;
                background: #F8F8F8 ;
                padding: 25px;
                margin: 5px auto;
                border: 3px solid #D8D8D8;
            }
        </style>

    </head>
    <body id="body">
        <!-- preloader -->
        <div id="preloader">
            <img src="img/preloader.gif" alt="Preloader">
        </div>
        <!-- end preloader -->
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <!-- /responsive nav button -->
                </div>
                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#Estilo">Estilo</a></li>
                        <li><a href="#Recinto">Recinto</a></li>
                        <li><a href="#Sexo">Sexo</a></li>
                        <li><a href="#Estilo2">Estilo #2</a></li>
                        <li><a href="#Profesor">Profesor</a></li>
                        <li><a href="#Redes">Redes</a></li> 
                    </ul>
                </nav>
                <!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
        <!--
        Home Slider
        ==================================== -->
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- single slide -->
                    <div class="item active" style="background-image: url(img/banner.jpg);">
                        <div class="carousel-caption">
                            <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">Tarea <span> #1</span>!</h2>
                            <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">Cálculo </span>  de distancia de Euclides.</h3>
                            <p data-wow-duration="1000ms" class="wow slideInRight animated">Sistemas Expertos</p>
                        </div>
                    </div>
                    <!-- end single slide -->
                </div>
                <!-- End Wrapper for slides -->
            </div>
        </section>

        <!--
        End Home SliderEnd
        ==================================== -->

        <!--
        Estilo
        ==================================== -->
        <section id="Estilo" class="container-1">
            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <br><h2>Estilo</h2><br>
            </div> 
            <div class="container">
                <div class="container">
                    <div class="row">
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"></font></p>

                        <font size="3"><b>Instrucciones:</b></font><p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> </font></font></p>

                        <p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> Para
                            utilizar el instrumento usted debe conceder una calificación alta a
                            aquellas palabras que mejor caracterizan la forma en que usted
                            aprende, y, una calificación baja a las palabras que menos
                            caracterizan su estilo de aprendizaje.</font></font></p><br>

                
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> De
                            inmediato encontrará nueve series de cuatro palabras de cada línea.
                            Ordene de mayor a menor cada serie o juego de cuatro palabras,
                            ubicando 4 en la palabra que mejor caracteriza su estilo de
                            aprendizaje, un 3 en la palabra siguiente en cuanto a la
                            correspondencia con su estilo; a la siguiente un 2, y un 1 a la
                            palabra que menos caracteriza su estilo. Tenga cuidado de ubicar un
                            número distinto al lado de cada palabra. </font></font></p><br>                   
                    </div>
                </div>
            </div> 
            <div class="container">
                <div class="container">
                    <div class="row">
                        <big><big>Yo aprendo...</big></big>
                        <table style="text-align: left; width: 100%;" cellspacing="2" cellpadding="2" border="1">
                            <tbody>
                                <tr>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c1" id="c1">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Discerniendo<br>
                                    </td>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c2" id="c2">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Ensayando<br>
                                    </td>
                                    <td style="vertical-align: top;">
                                        <select name="c3" id="c3">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Involucrándome</td>
                                    <td style="vertical-align: top;">
                                        <select name="c4" id="c4">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Practicando</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c5" id="c5">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Receptivamente </td>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c6" id="c6">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Relacionando </td>
                                    <td style="vertical-align: top;">
                                        <select name="c7" id="c7">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Analíticamente </td>
                                    <td style="vertical-align: top;">
                                        <select name="c8" id="c8">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Imparcialmente </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c9" id="c9">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Sintiendo </td>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c10" id="c10">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Observando </td>
                                    <td style="vertical-align: top;">
                                        <select name="c11" id="c11">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Pensando </td>
                                    <td style="vertical-align: top;">
                                        <select name="c12" id="c12">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Haciendo </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c13" id="c13">>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Aceptando </td>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c14" id="c14">>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Arriesgando </td>
                                    <td style="vertical-align: top;">
                                        <select name="c15"  id="c15">>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Evaluando </td>
                                    <td style="vertical-align: top;">
                                        <select name="c16" id="c16">>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Con Cautela </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c17" id="c17">>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Intuitivamente </td>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c18" id="c18">>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Productivamente </td>
                                    <td style="vertical-align: top;">
                                        <select name="c19" id="c19">>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Lógicamente </td>
                                    <td style="vertical-align: top;">
                                        <select name="c20" id="c20">>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Cuestionando </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c21" id="c21">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Abstracto </td>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c22" id="c22">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Observando </td>
                                    <td style="vertical-align: top;">
                                        <select name="c23" id="c23">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Concreto </td>
                                    <td style="vertical-align: top;">
                                        <select name="c24" id="c24">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Activo </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c25" id="c25">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Orientado al Presente </td>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c26" id="c26">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Reflexivamente </td>
                                    <td style="vertical-align: top;">
                                        <select name="c27" id="c27" >
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Orientado hacia el Futuro </td>
                                    <td style="vertical-align: top;">
                                        <select name="c28" id="c28">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Pragmático </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c29" id="c29">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Aprendo más de la Experiencia </td>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c30" id="c30">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Aprendo más de la Observación </td>
                                    <td style="vertical-align: top;">
                                        <select name="c31" id="c31">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Aprendo más de la Conceptualización </td>
                                    <td style="vertical-align: top;">
                                        <select name="c32" id="c32">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Aprendo más de la Experimentación </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c33" id="c33">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Emotivo </td>
                                    <td style="vertical-align: top; width: 25%;">
                                        <select name="c34" id="c34">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Reservado </td>
                                    <td style="vertical-align: top;">
                                        <select name="c35" id="c35">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Racional </td>
                                    <td style="vertical-align: top;">
                                        <select name="c36"id="c36">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        Abierto </td>
                                </tr>
                            </tbody>
                        </table>
                        <br> 
                        <table>
                            <tr>
                                <td>Escoja su recinto:</td>
                                <td>
                                    <select name="selectRecinto" id="selectRecinto"value="Recinto">
                                        <option value="1">Paraíso</option>
                                        <option value="2">Turrialba</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td>Columna EC:</td>
                                <td><input type="text"  id="txtEC" name="txtEC"  ></input></td>

                                <td>Columna EA:</td>
                                <td><input type="text"  id="txtEA" name="txtEA"  ></input></td>
                            </tr> 
                            <tr>
                                <td>Columna CA:</td>
                                <td><input type="text"  id="txtCA" name="txtCA"  ></input></td>

                                <td>Eje Vertical CA-EC:</td>
                                <td><input type="text"  id="txtCA_EC" name="txtCA_EC"  ></input></td>
                            </tr>
                            <tr>
                                <td>Columna OR:</td>
                                <td><input type="text"  id="txtOR" name="txtOR"  ></input></td>

                                <td>Eje Horizontal EA-OR:</td>
                                <td><input type="text"  id="txtEA_OR" name="txtEA_OR"  ></input></td>
                            </tr>

                        </table>
                        <table>
                            <tr>
                                <td></td>                            
                                <td><input value="Calcular Estilo" type="submit" onclick="calcularEstilo()()"></td>
                                <td></td>
                            </tr>
                        </table>
                        <table>
                            <tr>    
                                <td>ESTILO:</td>
                                <td><input type="text"  id="txtEstilo" name="txtEstilo"  ></input></td> 
                                <td><input value="\(*_*)/" type="submit" onclick="limpiar()"></td>
                            </tr>
                        </table>
                        <br><br><br><br><br><br>
                    </div>
                </div>
        </section>    
        <!--
        End Estilo
        ==================================== -->


        <!--
        Recinto
        ==================================== -->
        <section id="Recinto" class="works clearfix">
            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <br>
                <h2>Recinto</h2> 
                <br>
            </div>
            <div class="container">
                <div class="container">
                    <div class="row">
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"></font></p>

                        <font size="3"><b>Instrucciones:</b></font><p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> </font></font></p>
                        
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> Para
                            poder adivinar su estilo de aprendizaje usted debe brindar la información que se le
                            solicita en el siguiente instrumento.</font></font></p><br><br><br>

                    </div>
                </div> 
            </div>
            <div class="container">
                <div class="row">  
                    <table>
                        <tr>
                            <td>Estilo:</td>
                            <td>
                                <select name="selectEstilo_Recinto" id="selectEstilo_Recinto">
                                    <option value="1">Acomodador</option>
                                    <option value="2">Asimilador</option>
                                    <option value="3">Convergente</option>
                                    <option value="4">Divergente</option>
                                </select>
                            </td>
                        </tr> 
                        <tr>
                            <td>Promedio:</td>
                            <td><input type="text"  id="txtPromedio_Recinto" name="txtPromedio_Recinto"  ></input></td>
                        </tr>
                        <tr>
                            <td>Sexo:</td>
                            <td>
                                <select name="selectSexo_Recinto" id="selectSexo_Recinto">
                                    <option value="1">Femenino</option>
                                    <option value="2">Masculino</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>                            
                            <td><input value="CALCULAR RECINTO" onclick="calcularRecinto()" type="submit"></td>
                            <td></td>
                        </tr>
                    </table> 
                    <table>
                            <tr>    
                                <td>Recinto:</td>
                                <td><input type="text"  id="txtrecintoRecinto" name="txtrecintoRecinto"  ></input></td> 
                                <td><input value="\(*_*)/" type="submit" onclick="limpiar2()"></td>
                            </tr>
                    </table>
                    <br><br><br><br><br><br>
                </div>
            </div> 
        </section>
        <!--
        End Recinto
        ==================================== -->


        <!--
        Sexo
        ==================================== -->
        <section id="Sexo" class="container-1">
            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <br>
                <h2>Sexo</h2> 
                <br>
            </div> 
            <div class="container">
                <div class="container">
                    <div class="row">
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"></font></p>

                        <font size="3"><b>Instrucciones:</b></font><p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> </font></font></p>

                        <p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> Para
                            poder adivinar su sexo o genero usted debe brindar la información que se le
                            solicita en el siguiente instrumento.</font></font></p><br><br><br>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">  
                    <table>
                        <tr>
                            <td>Estilo:</td>
                            <td>
                                <select name="selectEstilo_Recinto" id="selectEstilo_Recinto">
                                    <option value="1">Acomodador</option>
                                    <option value="2">Asimilador</option>
                                    <option value="3">Convergente</option>
                                    <option value="4">Divergente</option>
                                </select>
                            </td>
                        </tr> 
                        <tr>
                            <td>Promedio:</td>
                            <td><input type="text"  id="txtPromedio_Sexo" name="txtPromedio_Sexo"  ></input></td>
                        </tr>
                        <tr>
                            <td>Recinto:</td>
                            <td>
                                <select name="selectRecinto_Sexo" id="selectRecinto_Sexo">
                                    <option value="1">Paraiso</option>
                                    <option value="2">Turrialba</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td></td>                            
                            <td><input value="CALCULAR SEXO" onclick="calcularSexo()" type="submit"></td>
                            <td></td>
                        </tr>
                    </table> 
                    <table>
                            <tr>    
                                <td>Sexo:</td>
                                <td><input type="text"  id="txtsexoRecinto" name="txtsexoRecinto"  ></input></td> 
                                <td><input value="\(*_*)/" type="submit" onclick="limpiar3()"></td>
                            </tr>
                    </table>
                    <br><br><br><br><br><br>
                </div>
            </div>
        </section>
        <!--
        End Sexo
        ==================================== -->


        <!--
        Estilo 2
        ==================================== -->
        <section id="Estilo2" class="works clearfix">
            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <br>
                <h2>Estilo #2</h2> 
                <br>
            </div>  
            <div class="container">
                <div class="container">
                    <div class="row">
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"></font></p>

                        <font size="3"><b>Instrucciones:</b></font><p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> </font></font></p>
                        
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> Para
                            poder adivinar su estilo de aprendizaje usted debe brindar la información que se le
                            solicita en el siguiente instrumento.</font></font></p><br><br><br>

                    </div>
                </div> 
            </div>
            <div class="container">
                <div class="row">  
                    <table>
                        <tr>
                            <td>Recinto:</td>
                            <td>
                                <select name="selectRecinto_Estilo2" id="selectRecinto_Estilo2">
                                    <option value="1">Paraiso</option>
                                    <option value="2">Turrialba</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Promedio:</td>
                            <td><input type="text"  id="txtPromedio_Estilo2" name="txtPromedio_Estilo2"  ></input></td>
                        </tr>
                        <tr>
                            <td>Sexo:</td>
                            <td>
                                <select name="selectSexo_Estilo2" id="selectSexo_Estilo2">
                                    <option value="1">Femenino</option>
                                    <option value="2">Masculino</option>
                                </select>
                            </td>
                        </tr> 
                    </table>
                    <table>
                        <tr>
                            <td></td>                            
                            <td><input value="CALCULAR ESTILO" onclick="calcularEstilo2()" type="submit"></td>
                            <td></td>
                        </tr>
                    </table> 
                    <table>
                            <tr>    
                                <td>Estilo:</td>
                                <td><input type="text"  id="txtEstilo2" name="txtEstilo2"  ></input></td> 
                                <td><input value="\(*_*)/" type="submit" onclick="limpiar4()"></td>
                            </tr>
                    </table>
                    <br><br><br><br><br><br>
                </div>
            </div>
        </section>
        <!--
        End Estilo 2
        ==================================== -->


        <!--
        Profesor
        ==================================== -->
        <section id="Profesor" class="container-1">
            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <br>
                <h2>Profesor</h2>
                <br>
            </div>
            <div class="container">
                <div class="container">
                    <div class="row">
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"></font></p>

                        <font size="3"><b>Instrucciones:</b></font><p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> </font></font></p>

                        <p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> Para
                            poder adivinar el tipo de profesor usted debe brindar la información que se le
                            solicita en el siguiente instrumento.</font></font></p><br><br><br>

                    </div>
                </div> 
            </div>
            <div class="container">
                <div class="row"> 
                    <table>
                        <tr>
                            <td>Edad:</td>
                            <td>
                                <select name="selectEdad_Profesor" id="selectEdad_Profesor">
                                    <option value="1">Menor o igual a 30 años </option>
                                    <option value="2">De 30 a 55 años</option>
                                    <option value="3">Mayor de 55 años</option>
                                </select>
                            </td>

                            <td>Sexo:</td>
                            <td>
                                <select name="selectSexo_Profesor" id="selectSexo_Profesor">
                                    <option value="1">Femenino</option>
                                    <option value="2">Masculino</option>
                                    <option value="3">No Definido</option>
                                </select>
                            </td>
                        </tr> 
                        <tr>
                            <td>Autoevaluación:</td>
                            <td>
                                <select name="selectAutoevaluacion" id="selectAutoevaluacion">
                                    <option value="1">Principiante</option>
                                    <option value="2">Intermedio</option>
                                    <option value="3">Avanzado</option>
                                </select>
                            </td>

                            <td>Cantidad de veces que da el curso:</td>
                            <td><select name="selectCantidadCurso" id="selectCantidadCurso">
                                    <option value="1">Nunca</option>
                                    <option value="2">De 1 a 5 veces</option>
                                    <option value="3">Más de 5 veces</option>
                                </select></input></td>
                        </tr>
                        <tr>
                            <td>Área de Especialización:</td>
                            <td>
                                <select name="selectEspecializacion" id="selectEspecializacion">
                                    <option value="1">Toma de decisiones</option>
                                    <option value="2">Diseño de red</option> 
                                    <option value="3">Otra</option> 
                                </select>
                            </td>  
                            <td>Habilidades usando la PC:</td>
                            <td>
                                <select name="selectHabilidades" id="selectHabilidades">
                                    <option value="1">Bajo</option>
                                    <option value="2">Intermedio</option>
                                    <option value="3">Alto</option>
                                </select>
                            </td> 
                        </tr>
                        <tr>
                            <td>Experiencia en enseñanza via Web:</td>
                            <td>
                                <select name="selectExpEnseñanza" value="selectExpEnseñanza">
                                    <option value="1">Nunca</option>
                                    <option value="2">A veces</option>
                                    <option value="3">A menudo</option>
                                </select>
                            </td>
                            <td>Experiencia utilizando sitios Web:</td>
                            <td>
                                <select name="selectExpWeb" value="selectExpWeb">
                                    <option value="1">Nunca</option>
                                    <option value="2">A veces</option>
                                    <option value="3">A menudo</option>
                                </select>
                            </td>
                        </tr> 
                    </table>
                    <table>
                        <tr>
                            <td></td>                            
                            <td><input value="CALCULAR PROFESOR" onclick="calcularProfesor()" type="submit"></td>
                            <td></td>
                        </tr>
                    </table>
                    <table>
                        <tr>    
                            <td>Clase Profesor:</td>
                            <td><input type="text"  id="txtClaseProfesor" name="txtClaseProfesor"></input></td> 
                            <td><input value="\(*_*)/" type="submit" onclick="limpiar5()"></td>
                        </tr>
                    </table>
                    <br><br><br><br><br><br>
                </div>
            </div>
        </section>
        <!--
        End Profesor
        ==================================== -->

        <!--
        Redes
        ==================================== -->
        <section id="Redes" class="works clearfix">
            <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                <br><h2>Redes</h2><br> 
            </div>
            <div class="container">
                <div class="container">
                <div class="container">
                    <div class="row">
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"></font></p>

                        <font size="3"><b>Instrucciones:</b></font><p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> </font></font></p>
                        
                        <p class="western" lang="es-ES" align="justify"><font color="#000000"><font size="3"> Para
                            poder adivinar su estilo de aprendizaje usted debe brindar la información que se le
                            solicita en el siguiente instrumento.</font></font></p><br><br><br>

                    </div>
                </div> 
            </div>
                <div class="container">
                    <div class="row">  
                        <table>
                            <tr>
                                <td>Confiabilidad de la red:</td>
                                <td><input type="number"  min="2" max="5" id="txtConfiabilidad" name="txtConfiabilidad"  ></input></td>

                                <td>Número de enlaces:</td>
                                <td><input type="number"  min="7" max="20" id="txtEnlaces" name="txtEnlaces"  ></input></td>
                            </tr>   
                            <tr>
                                <td>Capacidad:</td>
                                <td>
                                    <select name="selectCapacidad" id="selectCapacidad">
                                        <option value="1">Bajo</option>
                                        <option value="2">Intermedio</option>
                                        <option value="3">Alto</option>
                                    </select>
                                </td>

                                <td>Costo:</td>
                                <td>
                                    <select name="selectCosto" id="selectCosto">
                                        <option value="1">Bajo</option>
                                        <option value="2">Intermedio</option>
                                        <option value="3">Alto</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td></td>                            
                                <td><input value="CALCULAR RED" onclick="calcularRed()" type="submit"></td>
                                <td></td>
                            </tr>
                        </table> 
                        <table>
                            <tr>    
                                <td>Clase Red:</td>
                                <td><input type="text"  id="txtClaseRed" name="txtClaseRed"></input></td> 
                                <td><input value="\(*_*)/" type="submit" onclick="limpiar6()"></td>
                            </tr>
                        </table>
                        <br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End Redes
        ==================================== -->


        <footer id="footer" class="footer">
        </footer>

        <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

        <!-- Essential jQuery Plugins
        ================================================== -->

        <script src="js/Controlador.js"></script>
        <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
        <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
        <!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
        <!-- Contact form validation -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
        <!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- jquery easing -->
        <script src="js/wow.min.js"></script>
        <script>
                                    var wow = new WOW({
                                        boxClass: 'wow', // animated element css class (default is wow)
                                        animateClass: 'animated', // animation css class (default is animated)
                                        offset: 120, // distance to the element when triggering the animation (default is 0)
                                        mobile: false, // trigger animations on mobile devices (default is true)
                                        live: true        // act on asynchronously loaded content (default is true)
                                    }
                                    );
                                    wow.init();
        </script> 
        <!-- Custom Functions -->
        <script src="js/custom.js"></script>


    </body>
</html>
