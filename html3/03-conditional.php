<?php if ( file_exists("../booktop.php") ) {
  require_once "../booktop.php";
  ob_start();
}?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
<head>
  <meta charset="utf-8" />
  <meta name="generator" content="pandoc" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <title>-</title>
  <style>
    code{white-space: pre-wrap;}
    span.smallcaps{font-variant: small-caps;}
    span.underline{text-decoration: underline;}
    div.column{display: inline-block; vertical-align: top; width: 50%;}
    div.hanging-indent{margin-left: 1.5em; text-indent: -1.5em;}
    ul.task-list{list-style: none;}
  </style>
  <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
</head>
<body>
<h1 id="ejecución-condicional">Ejecución condicional</h1>
<h2 id="expresiones-booleanas">Expresiones booleanas</h2>
<p>   </p>
<p>Una <em>expresión booleana</em> es aquella que puede ser verdadera (<code>True</code>) o falsa (<code>False</code>). Los ejemplos siguientes usan el operador <code>==</code>, que compara dos operandos y devuelve <code>True</code> si son iguales y <code>False</code> en caso contrario:</p>
<pre class="python trinket"><code>&gt;&gt;&gt; 5 == 5
True
&gt;&gt;&gt; 5 == 6
False</code></pre>
<p><code>True</code> y <code>False</code> son valores especiales que pertenecen al tipo <code>bool (booleano)</code>; no son cadenas:</p>
<p>     </p>
<pre class="python"><code>&gt;&gt;&gt; type(True)
&lt;class &#39;bool&#39;&gt;
&gt;&gt;&gt; type(False)
&lt;class &#39;bool&#39;&gt;</code></pre>
<p>El operador <code>==</code> es uno de los <em>operadores de comparación</em>; los demás son:</p>
<pre class="python"><code>x != y               # x es distinto de y
x &gt; y                # x es mayor que y
x &lt; y                # x es menor que y
x &gt;= y               # x es mayor o igual que y
x &lt;= y               # x es menor o igual que y
x is y               # x es lo mismo que y
x is not y           # x no es lo mismo que y</code></pre>
<p>A pesar de que estas operaciones probablemente te resulten familiares, los símbolos en Python son diferentes de los símbolos matemáticos que se usan para realizar las mismas operaciones. Un error muy común es usar sólo un símbolo igual (<code>=</code>) en vez del símbolo de doble igualdad (<code>==</code>). Recuerda que <code>=</code> es un operador de asignación, y <code>==</code> es un operador de comparación. No existe algo como <code>=&lt;</code> o <code>=&gt;</code>.</p>
<p> </p>
<h2 id="operadores-lógicos">Operadores lógicos</h2>
<p> </p>
<p>Existen tres <em>operadores lógicos</em>: <code>and (y)</code>, <code>or (o)</code>, y <code>not (no)</code>. El significado semántico de estas operaciones es similar a su significado en inglés. Por ejemplo,</p>
<p><code>x &gt; 0 and x &lt; 10</code></p>
<p>es verdadero sólo cuando <code>x</code> es mayor que 0 <em>y</em> menor que 10.</p>
<p>     </p>
<p><code>n%2 == 0 or n%3 == 0</code> es verdadero si <em>cualquiera</em> de las condiciones es verdadera, es decir, si el número es divisible por 2 <em>o</em> por 3.</p>
<p>Finalmente, el operador <code>not</code> niega una expresión booleana, de modo que <code>not (x &gt; y)</code> es verdadero si <code>x &gt; y</code> es falso; es decir, si <code>x</code> es menor o igual que <code>y</code>.</p>
<p>Estrictamente hablando, los operandos de los operadores lógicos deberían ser expresiones booleanas, pero Python no es muy estricto. Cualquier número distinto de cero se interpreta como “verdadero.”</p>
<pre class="python"><code>&gt;&gt;&gt; 17 and True
True</code></pre>
<p>Esta flexibilidad puede ser útil, pero existen ciertas sutilezas en ese tipo de uso que pueden resultar confusas. Es posible que prefieras evitar usarlo de este modo hasta que estés bien seguro de lo que estás haciendo.</p>
<h2 id="ejecución-condicional-1">Ejecución condicional</h2>
<p>    </p>
<p>Para poder escribir programas útiles, casi siempre vamos a necesitar la capacidad de comprobar condiciones y cambiar el comportamiento del programa de acuerdo a ellas. Las <code>sentencias condicionales</code> nos proporcionan esa capacidad. La forma más sencilla es la sentencia <code>if</code>:</p>
<pre class="python"><code>if x &gt; 0 :
    print(&#39;x es positivo&#39;)</code></pre>
<p>La expresión booleana después de la sentencia <code>if</code> recibe el nombre de <em>condición</em>. La sentencia <code>if</code> se finaliza con un carácter de dos-puntos (:) y la(s) línea(s) que van detrás de la sentencia if van indentadas<a href="#fn1" class="footnote-ref" id="fnref1" role="doc-noteref"><sup>1</sup></a> (es decir, llevan una tabulación o varios espacios en blanco al principio).</p>
<figure>
<img src="../images/if.svg" alt="" /><figcaption>If Logic</figcaption>
</figure>
<p>Si la condición lógica es verdadera, la sentencia indentada será ejecutada. Si la condición es falsa, la sentencia indentada será omitida.</p>
<p>  </p>
<p>La sentencia <code>if</code> tiene la misma estructura que la definición de funciones o los bucles <code>for</code><a href="#fn2" class="footnote-ref" id="fnref2" role="doc-noteref"><sup>2</sup></a>. La sentencia consiste en una línea de encabezado que termina con el carácter dos-puntos (:) seguido por un bloque indentado. Las sentencias de este tipo reciben el nombre de <em>sentencias compuestas</em>, porque se extienden a lo largo de varias líneas.</p>
<p>No hay límite en el número de sentencias que pueden aparecer en el cuerpo, pero debe haber al menos una. Ocasionalmente, puede resultar útil tener un cuerpo sin sentencias (normalmente como emplazamiento reservado para código que no se ha escrito aún). En ese caso, se puede usar la sentencia <code>pass</code>, que no hace nada.</p>
<p> </p>
<pre class="python"><code>if x &lt; 0 :
    pass          # ¡necesito gestionar los valores negativos!</code></pre>
<p>Si introduces una sentencia <code>if</code> en el intérprete de Python, el prompt cambiará su aspecto habitual por puntos suspensivos, para indicar que estás en medio de un bloque de sentencias, como se muestra a continuación:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 3
&gt;&gt;&gt; if x &lt; 10:
...    print(&#39;Pequeño&#39;)
...
Pequeño
&gt;&gt;&gt;</code></pre>
<p>Al usar el intérprete de Python, debe dejar una línea en blanco al final de un bloque, de lo contrario Python devolverá un error:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 3
&gt;&gt;&gt; if x &lt; 10:
...    print(&#39;Pequeño&#39;)
... print(&#39;Hecho&#39;)
  File &quot;&lt;stdin&gt;&quot;, line 3
    print(&#39;Hecho&#39;)
        ^
SyntaxError: invalid syntax</code></pre>
<p>No es necesaria una línea en blanco al final de un bloque de instrucciones al escribir y ejecutar un script, pero puede mejorar la legibilidad de su código.</p>
<h2 id="ejecución-alternativa">Ejecución alternativa</h2>
<p>  </p>
<p>La segunda forma de la sentencia <code>if</code> es la <em>ejecución alternativa</em>, en la cual existen dos posibilidades y la condición determina cual de ellas será ejecutada. La sintaxis es similar a ésta:</p>
<pre class="python"><code>if x%2 == 0 :
    print(&#39;x es par&#39;)
else :
    print(&#39;x es impar&#39;)</code></pre>
<p>Si al dividir <code>x</code> por 2 obtenemos como resto 0, entonces sabemos que <code>x</code> es par, y el programa muestra un mensaje a tal efecto. Si esa condición es falsa, se ejecuta el segundo conjunto de sentencias.</p>
<figure>
<img src="../images/if-else.svg" alt="" /><figcaption>If-Then-Else Logic</figcaption>
</figure>
<p>Dado que la condición debe ser obligatoriamente verdadera o falsa, solamente una de las alternativas será ejecutada. Las alternativas reciben el nombre de <em>ramas</em>, dado que se trata de ramificaciones en el flujo de la ejecución.</p>
<p></p>
<h2 id="condicionales-encadenados">Condicionales encadenados</h2>
<p> </p>
<p>Algunas veces hay más de dos posibilidades, de modo que necesitamos más de dos ramas. Una forma de expresar una operación como ésa es usar un <em>condicional encadenado</em>:</p>
<pre class="python"><code>if x &lt; y:
    print(&#39;x es menor que y&#39;)
elif x &gt; y:
    print(&#39;x es mayor que y&#39;)
else:
    print(&#39;x e y son iguales&#39;)</code></pre>
<p><code>elif</code> es una abreviatura para “else if”. En este caso también será ejecutada únicamente una de las ramas.</p>
<figure>
<img src="../images/elif.svg" alt="" /><figcaption>If-Then-ElseIf Logic</figcaption>
</figure>
<p>No hay un límite para el número de sentencias <code>elif</code>. Si hay una clausula <code>else</code>, debe ir al final, pero tampoco es obligatorio que ésta exista.</p>
<p> </p>
<pre class="python"><code>if choice == &#39;a&#39;:
    print(&#39;Respuesta incorrecta&#39;)
elif choice == &#39;b&#39;:
    print(&#39;Respuesta correcta&#39;)
elif choice == &#39;c&#39;:
    print(&#39;Casi, pero no es correcto&#39;)</code></pre>
<p>Cada condición es comprobada en orden. Si la primera es falsa, se comprueba la siguiente y así con las demás. Si una de ellas es verdadera, se ejecuta la rama correspondiente, y la sentencia termina. Incluso si hay más de una condición que sea verdadera, sólo se ejecuta la primera que se encuentra.</p>
<h2 id="condicionales-anidados">Condicionales anidados</h2>
<p> </p>
<p>Un condicional puede también estar anidado dentro de otro. Podríamos haber escrito el ejemplo anterior de las tres ramas de este modo:</p>
<pre class="python"><code>if x == y:
    print(&#39;x e y son iguales&#39;)
else:
    if x &lt; y:
        print(&#39;x es menor que y&#39;)
    else:
        print(&#39;x es mayor que y&#39;)</code></pre>
<p>El condicional exterior contiene dos ramas. La primera rama ejecuta una sentencia simple. La segunda contiene otra sentencia <code>if</code>, que tiene a su vez sus propias dos ramas. Esas dos ramas son ambas sentencias simples, pero podrían haber sido sentencias condicionales también.</p>
<figure>
<img src="../images/nested.svg" alt="" /><figcaption>Nested If Statements</figcaption>
</figure>
<p>A pesar de que el indentado de las sentencias hace que la estructura esté clara, los <em>condicionales anidados</em> pueden volverse difíciles de leer rápidamente. En general, es buena idea evitarlos si se puede.</p>
<p>Los operadores lógicos a menudo proporcionan un modo de simplificar las sentencias condicionales anidadas. Por ejemplo, el código siguiente puede ser reescrito usando un único condicional:</p>
<pre class="python"><code>if 0 &lt; x:
    if x &lt; 10:
        print(&#39;x es un número positivo con un sólo dígito.&#39;)</code></pre>
<p>La sentencia <code>print</code> se ejecuta solamente si se cumplen las dos condiciones anteriores, así que en realidad podemos conseguir el mismo efecto con el operador <code>and</code>:</p>
<pre class="python"><code>if 0 &lt; x and x &lt; 10:
    print(&#39;x es un número positivo con un sólo dígito.&#39;)</code></pre>
<h2 id="catch1">Captura de excepciones usando try y except</h2>
<p>Anteriormente vimos un fragmento de código donde usábamos las funciones <code>input</code> e <code>int</code> para leer y analizar un número entero introducido por el usuario. También vimos lo poco seguro que podía llegar a resultar hacer algo así:</p>
<pre class="python"><code>&gt;&gt;&gt; velocidad = input(prompt)
¿Cual.... es la velocidad de vuelo de una golondrina sin carga?
¿Te refieres a una golondrina africana o a una europea?
&gt;&gt;&gt; int(velocidad)
ValueError: invalid literal for int() with base 10:
&gt;&gt;&gt;</code></pre>
<p>Cuando estamos trabajando con el intérprete de Python, tras el error simplemente nos aparece de nuevo el prompt, así que pensamos “¡epa, me he equivocado!”, y continuamos con la siguiente sentencia.</p>
<p>Sin embargo, si se escribe ese código en un script de Python y se produce el error, el script se detendrá inmediatamente, y mostrará un “traceback”. No ejecutará la siguiente sentencia.</p>
<p></p>
<p>He aquí un programa de ejemplo para convertir una temperatura desde grados Fahrenheit a grados Celsius:</p>
<p>  </p>
<pre class="python"><code>ent = input(&#39;Introduzca la Temperatura Fahrenheit:&#39;)
fahr = float(ent)
cel = (fahr - 32.0) * 5.0 / 9.0
print(cel)

# Código: https://es.py4e.com/code3/fahren.py</code></pre>
<p>Si ejecutamos este código y le damos una entrada no válida, simplemente fallará con un mensaje de error bastante antipático:</p>
<pre><code>python fahren.py
Introduzca la Temperatura Fahrenheit:72
22.2222222222</code></pre>
<pre><code>python fahren.py
Introduzca la Temperatura Fahrenheit:fred
Traceback (most recent call last):
  File &quot;fahren.py&quot;, line 2, in &lt;module&gt;
    fahr = float(ent)
ValueError: invalid literal for float(): fred</code></pre>
<p>Existen estructuras de ejecución condicional dentro de Python para manejar este tipo de errores esperados e inesperados, llamadas “try / except”. La idea de <code>try</code> y <code>except</code> es que si se sabe que cierta secuencia de instrucciones puede generar un problema, sea posible añadir ciertas sentencias para que sean ejecutadas en caso de error. Estas sentencias extras (el bloque except) serán ignoradas si no se produce ningún error.</p>
<p>Puedes pensar en la característica <code>try</code> y <code>except</code> de Python como una “póliza de seguros” en una secuencia de sentencias.</p>
<p>Se puede reescribir nuestro conversor de temperaturas de esta forma:</p>
<pre class="python"><code>ent = input(&#39;Introduzca la Temperatura Fahrenheit:&#39;)
try:
    fahr = float(ent)
    cel = (fahr - 32.0) * 5.0 / 9.0
    print(cel)
except:
    print(&#39;Por favor, introduzca un número&#39;)

# Código: https://es.py4e.com/code3/fahren2.py</code></pre>
<p>Python comienza ejecutando la secuencia de sentencias del bloque <code>try</code>. Si todo va bien, se saltará todo el bloque <code>except</code> y terminará. Si ocurre una excepción dentro del bloque <code>try</code>, Python saltará fuera de ese bloque y ejecutará la secuencia de sentencias del bloque <code>except</code>.</p>
<pre><code>python fahren2.py
Introduzca la Temperatura Fahrenheit:72
22.2222222222</code></pre>
<pre><code>python fahren2.py
Introduzca la Temperatura Fahrenheit:fred
Por favor, introduzca un número</code></pre>
<p>Gestionar una excepción con una sentencia <code>try</code> recibe el nombre de <em>capturar</em> una excepción. En este ejemplo, la clausula <code>except</code> muestra un mensaje de error. En general, capturar una excepción te da la oportunidad de corregir el problema, volverlo a intentar o, al menos, terminar el programa con elegancia.</p>
<h2 id="evaluación-en-cortocircuito-de-expresiones-lógicas">Evaluación en cortocircuito de expresiones lógicas</h2>
<p></p>
<p>Cuando Python está procesando una expresión lógica, como <code>x &gt;= 2 and (x/y) &gt; 2</code>, evalúa la expresión de izquierda a derecha. Debido a la definición de <code>and</code>, si <code>x</code> es menor de 2, la expresión <code>x &gt;= 2</code> resulta ser <code>falsa</code>, de modo que la expresión completa ya va a resultar <code>falsa</code>, independientemente de si <code>(x/y) &gt; 2</code> se evalúa como <code>verdadera</code> o <code>falsa</code>.</p>
<p>Cuando Python detecta que no se gana nada evaluando el resto de una expresión lógica, detiene su evaluación y no realiza el cálculo del resto de la expresión. Cuando la evaluación de una expresión lógica se detiene debido a que ya se conoce el valor final, eso es conocido como <em>cortocircuitar</em> la evaluación.</p>
<p> </p>
<p>A pesar de que esto pueda parecer hilar demasiado fino, el funcionamiento en cortocircuito nos descubre una ingeniosa técnica conocida como <em>patrón guardián</em>. Examina la siguiente secuencia de código en el intérprete de Python:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 6
&gt;&gt;&gt; y = 2
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2
True
&gt;&gt;&gt; x = 1
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2
False
&gt;&gt;&gt; x = 6
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
ZeroDivisionError: division by zero
&gt;&gt;&gt;</code></pre>
<p>La tercera operación ha fallado porque Python intentó evaluar <code>(x/y)</code> e <code>y</code> era cero, lo cual provoca un runtime error (error en tiempo de ejecución). Pero el segundo ejemplo <em>no</em> falló, porque la primera parte de la expresión <code>x &gt;= 2</code> fue evaluada como <code>falsa</code>, así que <code>(x/y)</code> no llegó a ejecutarse debido a la regla del <em>cortocircuito</em>, y no se produjo ningún error.</p>
<p>Es posible construir las expresiones lógicas colocando estratégicamente una evaluación como <em>guardián</em> justo antes de la evaluación que podría causar un error, como se muestra a continuación:</p>
<pre class="python"><code>&gt;&gt;&gt; x = 1
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and y != 0 and (x/y) &gt; 2
False
&gt;&gt;&gt; x = 6
&gt;&gt;&gt; y = 0
&gt;&gt;&gt; x &gt;= 2 and y != 0 and (x/y) &gt; 2
False
&gt;&gt;&gt; x &gt;= 2 and (x/y) &gt; 2 and y != 0
Traceback (most recent call last):
  File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
ZeroDivisionError: division by zero
&gt;&gt;&gt;</code></pre>
<p>En la primera expresión lógica, <code>x &gt;= 2</code> es <code>falsa</code>, así que la evaluación se detiene en el <code>and</code>. En la segunda expresión lógica, <code>x &gt;= 2</code> es <code>verdadera</code>, pero <code>y != 0</code> es <code>falsa</code>, de modo que nunca se alcanza <code>(x/y)</code>.</p>
<p>En la tercera expresión lógica, el <code>y != 0</code> va <em>después</em> del cálculo de <code>(x/y)</code>, de modo que la expresión falla con un error.</p>
<p>En la segunda expresión, se dice que <code>y != 0</code> actúa como <em>guardián</em> para garantizar que sólo se ejecute <code>(x/y)</code> en el caso de que <code>y</code> no sea cero.</p>
<h2 id="depuración">Depuración</h2>
<p> </p>
<p>Los “traceback” que Python muestra cuando se produce un error contienen un montón de información, pero pueden resultar abrumadores. Las partes más útiles normalmente son:</p>
<ul>
<li><p>Qué tipo de error se ha producido, y</p></li>
<li><p>Dónde ha ocurrido.</p></li>
</ul>
<p>Los errores de sintaxis (syntax errors), normalmente son fáciles de localizar, pero a veces tienen trampa. Los errores debido a espacios en blanco pueden ser complicados, ya que los espacios y las tabulaciones son invisibles, y solemos ignorarlos.</p>
<p></p>
<pre class="python"><code>&gt;&gt;&gt; x = 5
&gt;&gt;&gt;  y = 6
  File &quot;&lt;stdin&gt;&quot;, line 1
    y = 6
    ^
IndentationError: unexpected indent</code></pre>
<p>En este ejemplo, el problema es que la segunda línea está indentada por un espacio. Pero el mensaje de error apunta a <code>y</code>, lo cual resulta engañoso. En general, los mensajes de error indican dónde se ha descubierto el problema, pero el error real podría estar en el código previo, a veces en alguna línea anterior.</p>
<p> </p>
<p>Ocurre lo mismo con los errores en tiempo de ejecución (runtime errors). Supón que estás tratando de calcular una relación señal-ruido en decibelios. La fórmula es <span class="math inline"><em>S</em><em>N</em><em>R</em><sub><em>d</em><em>b</em></sub> = 10log<sub>10</sub>(<em>P</em><sub><em>s</em><em>e</em><em>n</em><em>a</em><em>l</em></sub>/<em>P</em><sub><em>r</em><em>u</em><em>i</em><em>d</em><em>o</em></sub>)</span>. En Python, podrías escribir algo como esto:</p>
<pre class="python"><code>import math
int_senal = 9
int_ruido = 10
relacion = int_senal / int_ruido
decibelios = 10 * math.log10(relacion)
print(decibelios)

# Código: https://es.py4e.com/code3/snr.py</code></pre>
<p>Pero cuando lo haces funcionar, obtienes un mensaje de error<a href="#fn3" class="footnote-ref" id="fnref3" role="doc-noteref"><sup>3</sup></a>:</p>
<p> </p>
<pre class="python"><code>    Traceback (most recent call last):
      File &quot;snr.py&quot;, line 5, in ?
        decibelios = 10 * math.log10(relacion)
    OverflowError: math range error</code></pre>
<p>El mensaje de error apunta a la línea 5, pero no hay nada incorrecto en ese línea. Para encontrar el error real, puede resultar útil mostrar en pantalla el valor de <code>relacion</code>, que resulta ser 0. El problema está en la línea 4, ya que al dividir dos enteros se realiza una división entera. La solución es representar la intensidad de la señal y la intensidad del ruido con valores en punto flotante.</p>
<p> </p>
<p>En general, los mensajes de error te dicen dónde se ha descubierto el problema, pero a menudo no es ahí exactamente donde se ha producido.</p>
<h2 id="glosario">Glosario</h2>
<dl>
<dt>condición</dt>
<dd><p>La expresión booleana en una sentencia condicional que determina qué rama será ejecutada.</p>
</dd>
</dl>
<p></p>
<dl>
<dt>condicional anidado</dt>
<dd><p>Una sentencia condicional que aparece en una de las ramas de otra sentencia condicional.</p>
</dd>
</dl>
<p> </p>
<dl>
<dt>condicional encadenado</dt>
<dd><p>Una sentencia condicional con una serie de ramas alternativas.</p>
</dd>
</dl>
<p> </p>
<dl>
<dt>cortocircuito</dt>
<dd><p>Cuando Python va evaluando una expresión lógica por tramos y detiene el proceso de evaluación debido a que ya conoce el valor final que va a tener el resultado sin necesidad de evaluar el resto de la expresión.</p>
</dd>
</dl>
<p></p>
<dl>
<dt>cuerpo</dt>
<dd><p>La secuencia de sentencias en el interior de una sentencia compuesta.</p>
</dd>
</dl>
<p></p>
<dl>
<dt>expresión booleana</dt>
<dd><p>Un expresión cuyo valor puede ser o bien <code>Verdadero</code> o bien <code>Falso</code>.</p>
</dd>
</dl>
<p> </p>
<dl>
<dt>operadores de comparación</dt>
<dd><p>Uno de los operadores que se utiliza para comparar dos operandos: <code>==</code>, <code>!=</code>, <code>&gt;</code>, <code>&lt;</code>, <code>&gt;=</code>, y <code>&lt;=</code>.</p>
</dd>
<dt>operador lógico</dt>
<dd><p>Uno de los operadores que se combinan en las expresiones booleanas: <code>and</code>, <code>or</code>, y <code>not</code>.</p>
</dd>
<dt>patrón guardián</dt>
<dd><p>Cuando construimos una expresión lógica con comparaciones adicionales para aprovecharnos del funcionamiento en cortocircuito.</p>
</dd>
</dl>
<p> </p>
<dl>
<dt>rama</dt>
<dd><p>Una de las secuencias alternativas de sentencias en una sentencia condicional.</p>
</dd>
</dl>
<p></p>
<dl>
<dt>sentencia compuesta</dt>
<dd><p>Una sentencia que consiste en un encabezado y un cuerpo. El encabezado termina con dos-puntos (:). El cuerpo está indentado con relación al encabezado.</p>
</dd>
</dl>
<p> </p>
<dl>
<dt>sentencia condicional</dt>
<dd><p>Una sentencia que controla el flujo de ejecución, dependiendo de cierta condición.</p>
</dd>
</dl>
<p> </p>
<dl>
<dt>traceback</dt>
<dd><p>Una lista de las funciones que se están ejecutando, que se muestra en pantalla cuando se produce una excepción.</p>
</dd>
</dl>
<p></p>
<h2 id="ejercicios">Ejercicios</h2>
<p>Ejercicio 1: Reescribe el programa del cálculo del salario para darle al empleado 1.5 veces la tarifa horaria para todas las horas trabajadas que excedan de 40.</p>
<pre><code>Introduzca las Horas: 45
Introduzca la Tarifa por hora: 10
Salario: 475.0</code></pre>
<p>Ejercicio 2: Reescribe el programa del salario usando <code>try</code> y <code>except</code>, de modo que el programa sea capaz de gestionar entradas no numéricas con elegancia, mostrando un mensaje y saliendo del programa. A continuación se muestran dos ejecuciones del programa:</p>
<pre><code>Introduzca las Horas: 20
Introduzca la Tarifa por hora: nueve
Error, por favor introduzca un número</code></pre>
<pre><code>Introduzca las Horas: cuarenta
Error, por favor introduzca un número</code></pre>
<p>Ejercicio 3: Escribe un programa que solicite una puntuación entre 0.0 y 1.0. Si la puntuación está fuera de ese rango, muestra un mensaje de error. Si la puntuación está entre 0.0 y 1.0, muestra la calificación usando la tabla siguiente:</p>
<pre><code>
Puntuación Calificación
&gt;= 0.9     Sobresaliente
&gt;= 0.8     Notable
&gt;= 0.7     Bien
&gt;= 0.6     Suficiente
&lt; 0.6      Insuficiente</code></pre>
<pre><code>Introduzca puntuación: 0.95
Sobresaliente</code></pre>
<pre><code>Introduzca puntuación: perfecto
Puntuación incorrecta</code></pre>
<pre><code>Introduzca puntuación: 10.0
Puntuación incorrecta</code></pre>
<pre><code>Introduzca puntuación: 0.75
Bien</code></pre>
<pre><code>Introduzca puntuación: 0.5
Insuficiente</code></pre>
<p>Ejecuta el programa repetidamente, como se muestra arriba, para probar con varios valores de entrada diferentes.</p>
<section class="footnotes" role="doc-endnotes">
<hr />
<ol>
<li id="fn1" role="doc-endnote"><p>el término correcto en español sería “sangradas”, pero en el mundillo de la programación se suele decir que las líneas van “indentadas” (Nota del trad.)<a href="#fnref1" class="footnote-back" role="doc-backlink">↩︎</a></p></li>
<li id="fn2" role="doc-endnote"><p>Estudiaremos las funciones en el capítulo 4 y los bucles en el capítulo 5.<a href="#fnref2" class="footnote-back" role="doc-backlink">↩︎</a></p></li>
<li id="fn3" role="doc-endnote"><p>En Python 3.0, ya no se produce el mensaje de error; el operador de división realiza división en punto flotante incluso con operandos enteros.<a href="#fnref3" class="footnote-back" role="doc-backlink">↩︎</a></p></li>
</ol>
</section>
</body>
</html>
<?php if ( file_exists("../bookfoot.php") ) {
  $HTML_FILE = basename(__FILE__);
  $HTML = ob_get_contents();
  ob_end_clean();
  require_once "../bookfoot.php";
}?>
