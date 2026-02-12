@extends('layouts.app')
@section('title', 'desembargos')

@section('content')
<div class="field-item even desembargos-page">
    <a class="skip-link" href="#contenido">Saltar al contenido</a>
    <!-- ----- ----- ----- ----- ----- ----- ----- -----  Fuente Sogar -----  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""><link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet"><!-- ----- ----- ----- ----- ----- ----- ----- ----- Bloque Seccion ----- ----- ----- ----- ----- ----- ----- ----- ----- ------ --><!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Fuente Sogar -  ----- ----- ----- ----- ----- ----- ----- ----- ------ -->
    <div class="container-fluid seccion" id="contenido" role="main">
        <div class="encabezado">
            <div class="row">
                <div class="col-xs-12">
                    <div class="txt-encabezado">
                        <div class="titulo">
                            <h1>
                                Abecé Desembargos
                            </h1>
                        </div>
                        <div class="parrafo">
                            <p>
                                Un embargo es una medida preventiva en la que se busca garantizar el cumplimiento de una obligación con los bienes de propiedad del deudor. En el caso de la Secretaria de Movilidad, las deudas a cargo de los ciudadanos corresponden, en su mayoría, a que no pagaron sus multas de tránsito y como consecuencia de esta situación, la Dirección de Gestión de Cobro puede ordenar embargos que según el artículo 838 del ETN pueden ascender hasta por el doble del capital de la obligación, más sus respectivos intereses.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
                .encabezado {
                    min-height: 380px;
                    background: rgba(102, 224, 38, 1);
                    background: linear-gradient(45deg, rgba(102, 224, 38, 0) 0%, rgba(0, 0, 0, 1) 200%), url('[custom:old_url]/sites/default/files/Paginas/09-07-2025/Marco.png');
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    display: flex;
                    justify-content: center;
                    align-items: end;
                }
                .encabezado .txt-encabezado {
                    min-height: 200px;
                    padding: 18px 28px;
                    background: linear-gradient(45deg, rgba(102, 224, 38, 1) 0%, rgba(255, 255, 255, 0.4) 100%), url('');
                    font-family: 'Sora', sans-serif;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    align-items: center;
                    max-width: 760px;
                }
                .encabezado .txt-encabezado h3 {
                    text-align: center;
                    margin: 0px;
                    font-size: 24px;
                    font-weight: 700;
                    color: #151515;
                    border-top: solid 2px #151515;
                    border-bottom: solid 2px #151515;
                    padding: 8px;
                }
                .encabezado .txt-encabezado h1 {
                    text-align: center;
                    margin: 0px;
                    font-size: 22px;
                    font-weight: 700;
                    color: #151515;
                    border-top: solid 2px #151515;
                    border-bottom: solid 2px #151515;
                    padding: 8px;
                }
                .encabezado .txt-encabezado p {
                    text-align: left;
                    margin: 0px;
                    padding: 10px 4px 0px 4px;
                    color: #151515;
                    font-size: 14px;
                }
                .skip-link {
                    position: absolute;
                    left: -9999px;
                    top: 8px;
                    background: #191c3a;
                    color: #ffffff;
                    padding: 8px 12px;
                    border-radius: 4px;
                    z-index: 1000;
                    text-decoration: none;
                }
                .skip-link:focus,
                .skip-link:focus-visible {
                    left: 8px;
                    outline: 3px solid #66e026;
                    outline-offset: 2px;
                }
                .s1 .parrafos {
                    padding: 20px;
                }
            </style>
        <div class="s1">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="h3-left">
                            Casos frecuentes:
                        </h2>
                        <h3 class="h3-left">
                            1. ¿Por qué me embargaron?.
                        </h3>
                        <div class="titulo">
                            &nbsp;
                        </div>
                        <div class="parrafos">
                            <p class="p-std">
                                Un ciudadano puede ser embargado, por tener multas de tránsito sin pagar, saldos pendientes, acuerdos de pago en mora o por tener vehículos en los patios de la Secretaria Distrital de Movilidad.
                            </p>
                            <p class="p-std">
                                Después de los tiempos que otorga la ley para el pago de las obligaciones, las multas pasan a un cobro coactivo en el que según lo establece la ley, pueden ser ordenados embargos.
                            </p>
                            <p class="p-std">
                                Una vez sea expedida la resolución a través de la cual se declara al ciudadano como contraventor, la multa pasa a cobro coactivo, en un término que, por lo general es de 30 días posteriores a la comisión de la infracción.
                            </p>
                            <p class="p-std">
                                Tenga en cuenta que, a los ciudadanos se les pueden embargar sus cuentas bancarias, bienes inmuebles, vehículos, salarios y honorarios.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3 class="h3-left">
                            2. ¿Cómo puedo solicitar el desembargo de mis bienes?
                        </h3>
                        <div class="titulo">
                            &nbsp;
                        </div>
                        <div class="parrafos">
                            <p class="p-std">
                                Una vez verificado el pago total de las obligaciones pecuniarias a favor de la Secretaría Distrital de Movilidad, que dieron lugar a la imposición de la medida cautelar de embargo, la Entidad procede a gestionar internamente el trámite de levantamiento (desembargo) ante la autoridad competente, ya sea una entidad financiera, empleador, pagador, oficina de tránsito o de registro.
                            </p>
                            <p class="p-std">
                                Dicho trámite se efectúa de forma masiva y automática, sin requerir gestión del interesado, dentro de los quince (15) días hábiles siguientes a la confirmación del pago efectivo o a la verificación de que no subsiste saldo pendiente asociado a la obligación.
                            </p>
                            <p class="p-std">
                                Si prefiere adelantar el proceso o contar con un soporte adicional, el ciudadano interesado podrá presentar solicitud de desembargo de manera presencial en los puntos de correspondencia de la Secretaría, o virtualmente mediante el formulario de radicación de correspondencia disponible en la página web institucional. Para tal fin, deberá diligenciar el formato sugerido por la Entidad, en el que se consignen todos los datos pertinentes.
                            </p>
                            <p class="p-std">
                                El formato puede descargarse a continuación:
                            </p>
                            <div class="text-center">
                                <a class="btn btn-download btn-lg" href="[custom:old_url]/sites/default/files/Paginas/10-02-2022/formato_desembargo_y_tdj.pdf" rel="noopener noreferrer" target="_blank">DESCÁRGUELO AQUÍ</a>
                            </div>
                            <p class="p-std">
                                La solicitud se puede radicar en el siguiente enlace:
                                <a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" rel="noopener noreferrer" target="_blank">https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php</a>
                            </p>
                            <p class="p-std">
                                Antes de radicar cualquier solicitud verifique que la medida cautelar que registra en su contra si fue ordenada por la Secretaría Distrital de Movilidad, lo anterior en atención a que la gestión de desembargo solo es procedente respecto de embargos decretados por esta entidad; si su deuda es con un organismo de otra ciudad, el trámite se debe adelantar directamente en el organismo de tránsito competente, ya que la Secretaría Distrital de Movilidad solo tiene competencia sobre multas y comparendos impuestos en la ciudad de Bogotá D.C.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3 class="h3-left">
                            3. "Me informaron de un embargo de productos financieros y salarios, pero no me han realizado descuentos".
                        </h3>
                        <div class="titulo">
                            &nbsp;
                        </div>
                        <div class="parrafos">
                            <p class="p-std">
                                En este caso y con el fin de evitar el descuento de dineros, usted puede realizar el pago a través de los canales dispuestos por la Secretaría Distrital de Movilidad, a los cuales puede acceder por el sitio web <a href="https://www.movilidadbogota.gov.co" rel="noopener noreferrer" target="_blank">www.movilidadbogota.gov.co</a> – Consulta Comparendos, descargando el volante de pago en la página web <a href="https://www.movilidadbogota.gov.co" rel="noopener noreferrer" target="_blank">www.movilidadbogota.gov.co</a> para realizar la cancelación de la deuda en el Banco de Occidente y/o Caja Social y vía pago electrónico por medio del botón de PSE.
                            </p>
                            <p class="p-std">
                                El sistema liquida los intereses al día, por lo tanto, el pago debe realizarse el mismo día en que se generó el volante.
                            </p>
                            <p class="p-std">
                                La Secretaría Distrital de Movilidad, adelanta internamente el trámite de desembargo ante la entidad correspondiente (entidad financiera, empleador, pagador, oficina de tránsito o de registro); este procedimiento se surte dentro de los quince (15) días hábiles siguientes al pago efectivo de la obligación o una vez se verifica que la obligación motivo de embargo no registra saldo pendiente por cobrar, de forma masiva y sin que medie una solicitud del interesado.
                            </p>
                            <p class="p-std">
                                Si prefiere adelantar el proceso o contar con un soporte adicional, podrá presentar solicitud de desembargo de manera presencial en los puntos de correspondencia de la Secretaría, o virtualmente mediante el formulario de radicación de correspondencia disponible en la página web institucional. Para tal fin, podrá diligenciar el formato sugerido por la Entidad, en el que se consignen todos los datos pertinentes.
                            </p>
                            <p class="p-std">
                                El formato puede descargarse a continuación:
                            </p>
                            <div class="text-center">
                                <a class="btn btn-download btn-lg" href="[custom:old_url]/sites/default/files/Paginas/10-02-2022/formato_desembargo_y_tdj.pdf" rel="noopener noreferrer" target="_blank">DESCÁRGUELO AQUÍ</a>
                            </div>
                            <p class="p-std">
                                La solicitud se puede radicar en el siguiente enlace:
                                <a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" rel="noopener noreferrer" target="_blank">https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3 class="h3-left">
                            4. "Me informaron de un embargo de productos financieros y salarios y ya me descontaron mi plata".
                        </h3>
                        <div class="titulo">
                            &nbsp;
                        </div>
                        <div class="parrafos">
                            <p class="p-std">
                                El descuento de fondos por un embargo representado en dinero tiene como consecuencia la constitución de un depósito judicial, que es una garantía para el cumplimiento de la obligación, pero NO ES UN PAGO y conforme a ello, la Secretaría Distrital de Movilidad sólo puede disponer de este, sí el deudor autoriza la apropiación de dicho dinero o hasta que desarrolle la totalidad del procedimiento descrito en el Estatuto Tributario, lo cual puede llevar a que le sean cobrados los gastos en que incurrió la SDM para recuperar la obligación y sus intereses.
                            </p>
                            <p class="p-std">
                                Si usted decide emitir la autorización expresa para que se pague la deuda con los bienes embargados (suma de dinero), podrá hacerlo en cualquier etapa del proceso. Esta autorización expresa podrá ser radicada de manera presencial en nuestros puntos de correspondencia o virtual a través del formulario para radicación de correspondencia que se relaciona a continuación:
                                <a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" rel="noopener noreferrer" target="_blank">https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php</a>
                            </p>
                            <p class="p-std">
                                Si no conoce como emitir la autorización, se sugiere que diligencie el formato que la Entidad ha dispuesto para este trámite, relacionando todos los datos correspondientes y anexando copia de su documento de identidad, formato que puede ser descargado a continuación:
                            </p>
                            <div class="text-center">
                                <a class="btn btn-download btn-lg" href="[custom:old_url]/sites/default/files/Paginas/10-02-2022/formato_desembargo_y_tdj.pdf" rel="noopener noreferrer" target="_blank">DESCÁRGUELO AQUÍ</a>
                            </div>
                            <p class="p-std">
                                De esta manera, si decide hacer pago de sus deudas, con los recursos que han sido descontados a través del formato sugerido, debe diligenciar el espacio denominado APROPIACIÓN DE TÍTULO DE DEPÓSITO JUDICIAL:
                            </p>
                            <div class="box-img">
                                <p>
                                    <img class="img-responsive w-100" src="[custom:old_url]/sites/default/files/Paginas/10-02-2022/img-dj-1.png" alt="Solicitud Apropiación de Depósito Judicial que ha dispuesto la SDM">
                                </p>
                                <p>
                                    Captura del formulario Desembargo y Títulos de Depósito Judicial
                                </p>
                            </div>
                            <p class="p-std">
                                Si realizada la liquidación de la deuda se encuentra que existe un saldo a su favor, este se devolverá.
                            </p>
                            <p class="p-std">
                                Ahora bien, si es su deseo hacer el trámite más expedito, puede pagar su deuda utilizando los siguientes canales de pago:
                            </p>
                            <ul>
                                <li class="li-std">
                                    En la página web: <a href="https://www.movilidadbogota.gov.co" rel="noopener noreferrer" target="_blank">www.movilidadbogota.gov.co</a> - Consulta Comparendos, generando el volante impreso, para realizar el pago en el Banco de Occidente y/o Caja Social o vía pago electrónico a través de la página web, pago en línea por medio del botón de PSE.
                                </li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-download btn-lg" href="https://consultas.transitobogota.gov.co:8010/publico/index3.php" rel="noopener noreferrer" target="_blank">CONSULTE AQUÍ</a>
                            </div>
                            <p class="p-std">
                                Si usted decide pagar la obligación por los canales antes indicados, puede solicitar la devolución del depósito judicial, usando el formato sugerido ya mencionado.
                            </p>
                            <p class="p-std">
                                Este último trámite es más fácil, pues permite un descargue de la obligación de pago más rápido del sistema de la Secretaría Distrital de Movilidad.
                            </p>
                            <p class="p-std">
                                El formato para esta solicitud también puede ser entregado sin costo por personal de la Secretaría en la sede de Paloquemao.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3 class="h3-left">
                            5. "Pagué la multa y también me hicieron descuento de dineros".
                        </h3>
                        <div class="titulo">
                            &nbsp;
                        </div>
                        <div class="parrafos">
                            <p class="p-std">
                                Si a usted se le practicó un descuento por efecto de un embargo y realizó el pago mediante los canales anteriormente mencionados, debe solicitar a la Dirección de Gestión de Cobro de la Secretaría de Movilidad, la devolución de los títulos de depósito, haciendo uso del formato sugerido que la SDM ha creado para este trámite, diligenciando el espacio denominado DESEMBARGO y ENTREGA DE TÍTULO DE DEPÓSITO JUDICIAL:
                            </p>
                            <div class="box-img">
                                <p>
                                    <img class="img-responsive w-100" src="[custom:old_url]/sites/default/files/Paginas/10-02-2022/img-dj-2.png" alt="Solicitud Apropiación de Depósito Judicial que ha dispuesto la SDM">
                                </p>
                                <p>
                                    Captura del formulario Desembargo y Títulos de Depósito Judicial
                                </p>
                            </div>
                            <p class="p-std">
                                El formato para esta solicitud también puede ser entregado sin costo por personal de la Secretaría en la sede de Paloquemao o bien puede ser descargado aquí:
                            </p>
                            <div class="text-center">
                                <a class="btn btn-download btn-lg" href="[custom:old_url]/sites/default/files/Paginas/10-02-2022/formato_desembargo_y_tdj.pdf" rel="noopener noreferrer" target="_blank">DESCÁRGUELO AQUÍ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3 class="h3-left">
                            6. "Me embargaron un vehículo automotor o un inmueble".
                        </h3>
                        <div class="titulo">
                            &nbsp;
                        </div>
                        <div class="parrafos">
                            <p class="p-std">
                                Cuando se hace el embargo de un vehículo o un inmueble, su dueño no podrá venderlo o disponer de este hasta tanto no se ponga al día con sus obligaciones. Por lo tanto, para desembargarlo deberá realizar el pago y solicitar a la SDM el levantamiento de la medida, y la entidad realizará la actualización correspondiente.
                            </p>
                            <p class="p-std">
                                La Secretaría Distrital de Movilidad, adelanta internamente el trámite de desembargo ante la oficina de tránsito o de registro correspondiente; este procedimiento se surte dentro de los quince (15) días hábiles siguientes al pago efectivo de la obligación o una vez se verifica que la obligación motivo de embargo no registra saldo pendiente por cobrar, de forma masiva y sin que medie una solicitud del interesado.
                            </p>
                            <p class="p-std">
                                Si prefiere adelantar el proceso o contar con un soporte adicional, podrá presentar solicitud de desembargo de manera presencial en los puntos de correspondencia de la Secretaría, o virtualmente mediante el formulario de radicación de correspondencia disponible en la página web institucional. Para tal fin, podrá diligenciar el formato sugerido por la Entidad, en el que se consignen todos los datos pertinentes.
                            </p>
                            <div class="box-img">
                                <p>
                                    <img class="img-responsive w-100" src="[custom:old_url]/sites/default/files/Paginas/10-02-2022/img-dj-3.png" alt="Solicitud Apropiación de Depósito Judicial que ha dispuesto la SDM">
                                </p>
                                <p>
                                    Captura del formulario Desembargo y Títulos de Depósito Judicial
                                </p>
                            </div>
                            <p class="p-std">
                                El formato puede descargarse a continuación:
                            </p>
                            <div class="text-center">
                                <a class="btn btn-download btn-lg" href="[custom:old_url]/sites/default/files/Paginas/10-02-2022/formato_desembargo_y_tdj.pdf" rel="noopener noreferrer" target="_blank">DESCÁRGUELO AQUÍ</a>
                            </div>
                            <p class="p-std">
                                El formato para esta solicitud también puede ser entregado sin costo por personal de la Secretaría en la sede de Paloquemao.
                            </p>
                            <p class="p-std">
                                La solicitud se puede radicar en el siguiente enlace:
                                <a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" rel="noopener noreferrer" target="_blank">https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php</a>
                            </p>
                            <p class="p-std">
                                Si a su vehículo embargado le fue ordenada una medida de inmovilización, la SDM cobrará todos los costos asociados a la retención y los honorarios del secuestre, estos los debe asumir el deudor de forma adicional al valor de la multa, más los intereses moratorios. Si el pago de la obligación no se hace por parte del deudor, la Secretaría Distrital de Movilidad procederá a ordenar el remate del vehículo.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3 class="h3-left">
                            7. "Tengo un embargo por concepto de servicios de patios y grúas de un vehículo que está en los patios".
                        </h3>
                        <div class="titulo">
                            &nbsp;
                        </div>
                        <div class="parrafos">
                            <p class="p-std">
                                Cuando se está embargado por concepto de Patios y Grúas el ciudadano en primera debe acercarse a la SDM de la calle 13, módulo "liquidación de patios remanentes" donde le liquidarán el valor a cancelar por el servicio de Patios y Grúa. Así mismo, se le informará el procedimiento para retirar el vehículo, o si su deseo es la chatarrización del mismo, se le informará el respectivo trámite.
                            </p>
                            <p class="p-std">
                                Una vez obtenga la liquidación e información, el ciudadano tiene 2 opciones:
                            </p>
                            <ul>
                                <li class="li-std">
                                    La primera, es cancelar la totalidad de la deuda y posteriormente acudir a la SDM - sede Paloquemao, para solicitar el desembargo y terminación del proceso por pago total.
                                </li>
                                <li class="li-std">
                                    La segunda, es acudir a la SDM - sede Paloquemao, para realizar acuerdo de pago en caso de no contar con los medios para el pago total de la obligación donde se le informarán los requisitos para concederle dicha facilidad.
                                </li>
                            </ul>
                            <p class="p-std">
                                Cuando haga el pago puede presentar la solicitud de desembargo de manera presencial ante la Secretaría de Movilidad, por medio de un formato sugerido que la Entidad ha dispuesto para este trámite, o virtual a través del formulario para radicación de correspondencia, escribiendo todos los datos correspondientes al desembargo y adjuntando copia de los soportes de pago.
                            </p>
                            <p class="p-std">
                                Es importante precisar que, en cumplimiento de lo establecido en el parágrafo 6 del artículo 125 de la ley 769 de 2002, el cobro del servicio de Patios y Grúas se debe adelantar en contra del propietario del vehículo que figura ante el RUNT, por lo tanto, es este quien debe asumir los costos que se generen para la entrada y salida del vehículo.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3 class="h3-left">
                            8. "Me enviaron un recordatorio sobre un embargo. Pero no tengo licencia de conducción ni carro. ¿Qué hago?".
                        </h3>
                        <div class="titulo">
                            &nbsp;
                        </div>
                        <div class="parrafos">
                            <p class="p-std">
                                Debe acudir a la Subdirección de Contravenciones al Tránsito de la SDM, con el fin de que se verifique su situación como infractor, en la medida que pueden darse casos de suplantación o inconsistencias en la imposición de comparendos por parte de los agentes de tránsito.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <h3 class="h3-left">
                            9. "Me enviaron un mensaje informativo sobre un embargo. Pero yo hice el curso y pagué. ¿Qué hago?".
                        </h3>
                        <div class="titulo">
                            &nbsp;
                        </div>
                        <div class="parrafos">
                            <p class="p-std">
                                Los ciudadanos infractores de las normas de tránsito, luego de la imposición de una multa, deben verificar el sistema de información y de ser el caso acreditar el cumplimiento de la obligación o de lo contrario pueden ser sujetos de un cobro coactivo.
                            </p>
                            <p class="p-std">
                                Por lo anterior, si ya pagó la multa y aún le aparece en los sistemas de información, debe presentar una solicitud ante la Secretaría de Movilidad anexando los soportes del pago y la constancia de realización del curso pedagógico para que esta sea descargada.
                            </p>
                            <p class="p-std">
                                En cuanto a la realización de los cursos recomendamos que los mismos sean presentados directamente en la SDM, de lo contrario, el ciudadano debe presentar toda la documentación que soporte la realización de estos.
                            </p>
                            <p class="p-std">
                                Si prefiere adelantar el proceso o contar con un soporte adicional, el ciudadano interesado podrá presentar solicitud de desembargo de manera presencial en los puntos de correspondencia de la Secretaría, o virtualmente mediante el formulario de radicación de correspondencia disponible en la página web institucional. Para tal fin, deberá diligenciar el formato sugerido por la Entidad, en el que se consignen todos los datos pertinentes.
                            </p>
                            <p class="p-std">
                                El formato puede descargarse a continuación:
                            </p>
                            <div class="text-center">
                                <a class="btn btn-download btn-lg" href="[custom:old_url]/sites/default/files/Paginas/10-02-2022/formato_desembargo_y_tdj.pdf" rel="noopener noreferrer" target="_blank">DESCÁRGUELO AQUÍ</a>
                            </div>
                            <p class="p-std">
                                La solicitud se puede radicar en el siguiente enlace:
                                <a href="https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php" rel="noopener noreferrer" target="_blank">https://www.movilidadbogota.gov.co/radicacionwebsdm/formulario.php</a>
                            </p>
                            <p class="p-std">
                                <strong>Dígale NO a los tramitadores: </strong>La Secretaría Distrital de Movilidad hace un llamado a los ciudadanos sobre los riesgos a la hora de acudir a los "tramitadores" quienes, en algunos casos, generan falsas expectativas y ofrecen servicios ilegales. En cuanto a la realización de los cursos recomendamos que los mismos sean presentados directamente en la SDM, de lo contrario, el ciudadano debe presentar toda la documentación que soporte la realización de estos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----- ----- ----- ----- ----- ----- ----- -----  Hoja de estilo ---- ----- ----- ----- ----- ----- ----- ----- ----- ------ --><!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin Bloque Sección  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><style type="text/css">
        .field-item.even h2 {
            visibility: hidden;
            margin-top: -50px;
        }
        .region-content {
            padding: 0px;
            overflow: hidden;
        }
        .seccion {
            font-size: 13px !important;
            line-height: 1.4 !important;
            max-width: 940px;
        }
        /*
        .seccion [class*='col-'] {
            margin: 0px;
            padding: 0px;
            border: 0;
            outline: 0;
            font-size: 100%;
            vertical-align: baseline;
        }
        */
        .w-100 {
            width: 100%;
        }
        .s1 {
            padding: 20px 30px;
            font-family: 'Sora', sans-serif;
        }
        .s1 p {
            font-size: 15px;
            text-align: left;
            line-height: 1.5;
        }
        .s1 h3 {
            margin: 20px 0px 12px 0px;
            font-size: 18px;
        }
        .s1 .titulo {
            background: linear-gradient(45deg, rgba(25, 28, 58, 1) 0%, rgba(102, 224, 38, 1) 100%);
            height: 2px;
            margin: 5px 0px 10px 0px;
        }
        .s1 ul>li{
            font-size: 15px;
        }
        .s1 li{
            padding-bottom: 6px;
        }
        .s1 .parrafos .box-img{
            padding: 25px;
            text-align: center !important;
            line-height: 1;
        }
        .s1 .parrafos .box-img p{
            font-size: 12px;
            text-align: center;
            line-height: 1;
            padding: 5px;
        }
        .s1 .parrafos p a,
        .s1 .parrafos ul>li a {
            word-wrap: break-word !important;
            overflow-wrap: anywhere;
            word-break: break-word;
        }
        .s1 a {
            text-decoration: underline;
            text-decoration-thickness: 2px;
            text-underline-offset: 2px;
        }
        .s1 a:focus,
        .s1 a:focus-visible,
        .btn-download:focus,
        .btn-download:focus-visible {
            outline: 3px solid #191c3a;
            outline-offset: 2px;
        }
        .desembargos-page .encabezado {
            min-height: 380px !important;
            background: linear-gradient(45deg, rgba(102, 224, 38, 0) 0%, rgba(0, 0, 0, 1) 200%), url('[custom:old_url]/sites/default/files/Paginas/09-07-2025/Marco.png') !important;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
        }
        .desembargos-page .encabezado .txt-encabezado {
            min-height: 200px !important;
            padding: 18px 28px !important;
            background: linear-gradient(45deg, rgba(102, 224, 38, 1) 0%, rgba(255, 255, 255, 0.4) 100%) !important;
            font-family: 'Sora', sans-serif !important;
            max-width: 760px !important;
        }
        .desembargos-page .encabezado .txt-encabezado h1 {
            text-align: center !important;
            font-size: 22px !important;
            font-weight: 700 !important;
            color: #151515 !important;
            border-top: solid 2px #151515 !important;
            border-bottom: solid 2px #151515 !important;
            padding: 8px !important;
        }
        .desembargos-page .encabezado .txt-encabezado p {
            text-align: left !important;
            color: #151515 !important;
            font-size: 14px !important;
            padding: 10px 4px 0px 4px !important;
        }
        .desembargos-page .s1 {
            padding: 20px 30px !important;
            font-family: 'Sora', sans-serif !important;
        }
        .desembargos-page .s1 p {
            font-size: 15px !important;
            text-align: left !important;
            line-height: 1.5 !important;
        }
        .desembargos-page .s1 h3 {
            margin: 20px 0px 12px 0px !important;
            font-size: 18px !important;
        }
        .desembargos-page .s1 ul>li,
        .desembargos-page .li-std {
            font-size: 15px !important;
        }
        .desembargos-page .p-std {
            font-size: 15px !important;
        }
        .desembargos-page .h3-left,
        .desembargos-page .p-std,
        .desembargos-page .li-std {
            color: #353535 !important;
        }
        .desembargos-page .btn-download {
            background-color: rgba(102, 224, 38, 1) !important;
            color: #151515 !important;
        }
        .desembargos-page .s1 .parrafos p a,
        .desembargos-page .s1 .parrafos ul>li a {
            overflow-wrap: anywhere !important;
            word-break: break-word !important;
        }
        .desembargos-page .s1 a {
            text-decoration: underline !important;
            text-decoration-thickness: 2px !important;
            text-underline-offset: 2px !important;
        }
    </style><!-- ----- ----- ----- ----- ----- ----- ----- -----  Fin hoja de estilo  ----- ----- ----- ----- ----- ----- ----- ----- ------ --><style type="text/css">
        .content {
            font-size: 16px;
        }
        .h3-header {
            color: #353535;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
        }
        .h3-left {
            color: #353535;
            font-weight: 700;
            text-align: left;
            margin-bottom: 20px;
            margin-top: 40px;
        }
        .p-std {
            font-size: 15px !important;
            color: #353535;
        }
        .btn-download {
            margin: 30px auto 30px auto !important;
            background-color: rgba(102, 224, 38, 1);
            color: #151515;
            font-weight: 700 !important;
            font-size: 18px !important;
            border-radius: 0px !important;
      transition: 1s ease;
          -webkit-box-shadow: 1px 1px 11px 1px rgba(0, 0, 0, 0.16);
          box-shadow: 1px 1px 11px 1px rgba(0, 0, 0, 0.16);
        }
        .btn-download:hover {
            background: rgba(25, 28, 58, 1);
            color: rgba(255, 255, 255, 1) !important;
        }
        .w-100 {
            width: 100%;
        }
        .li-std {
            font-size: 15px !important;
            color: #353535;
        }
    </style><style>
        @media(max-width:767px){
    .encabezado {
      height: 750px;
      background-position: -175px;
      justify-content: center;
      align-items: center;
    }
    .encabezado .txt-encabezado {
       height: 750px;
      justify-content: center;
      padding: 20px;
    }
    .s1 {
      padding: 0px;
    }
    .s1 .parrafos {
      padding: 0px;
    }
        }
        @media(min-width:768px){}
        @media(min-width:992px){}
        @media(min-width:1200px){}
    </style>
</div>
@endsection
