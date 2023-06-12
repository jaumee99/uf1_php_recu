<html lang="ca">
<head>
    <meta charset="utf-8">
    <title>PHPMOT | El wordle en català.</title>
    <link href="style.css" rel="stylesheet">
</head>
<body style="--vh: 750px;">
    
    <script>
        // Acceder al resultado de cada letra y asignar la clase correspondiente
        var resultado = '<?php echo implode(',', $_SESSION['resultado']); ?>';
        var teclas = document.getElementsByClassName('lletra-teclat');
    
        for (var i = 0; i < teclas.length; i++) {
          var letraResultado = resultado[i];
    
          if (letraResultado === 'no') {
            teclas[i].classList.add('teclat-no');
          } else if (letraResultado === 'si') {
            teclas[i].classList.add('teclat-si');
          } else if (letraResultado === 'lloc') {
            teclas[i].classList.add('teclat-lloc');
          }
        }
      </script>

<div id="root">
    <main class="flex flex-col justify-between">
        <header id="header" class="flex items-center h-16 space-x-3 px-3 border-b border-gray-300">
            <h1 class="dark:text-white"> PHPMOT </h1>
        </header>
        <div class="py-6">
            <div class="flex justify-center mb-1 ">
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
            </div>
            <div class="flex justify-center mb-1 ">
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
            </div>
            <div class="flex justify-center mb-1 ">
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
            </div>
            <div class="flex justify-center mb-1">
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
            </div>
            <div class="flex justify-center mb-1">
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
            </div>
            <div class="flex justify-center mb-1">
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
                <div class="lletra-taula taula-enblanc">
                    <div class="letter-container"></div>
                </div>
            </div>
        </div>
        <div id="teclat">
            <div class="flex justify-center mb-1">
                <button class="lletra-teclat">Q</button>
                <button class="lletra-teclat">W</button>
                <button class="lletra-teclat">E</button>
                <button class="lletra-teclat">R</button>
                <button class="lletra-teclat">T</button>
                <button class="lletra-teclat">Y</button>
                <button class="lletra-teclat">U</button>
                <button class="lletra-teclat">I</button>
                <button class="lletra-teclat">O</button>
                <button class="lletra-teclat">P</button>
            </div>
            <div class="flex justify-center mb-1">
                <button class="lletra-teclat">A</button>
                <button class="lletra-teclat">S</button>
                <button class="lletra-teclat">D</button>
                <button class="lletra-teclat">F</button>
                <button class="lletra-teclat">G</button>
                <button class="lletra-teclat">H</button>
                <button class="lletra-teclat">J</button>
                <button class="lletra-teclat">K</button>
                <button class="lletra-teclat">L</button>
                <button class="lletra-teclat">Ç</button>
            </div>
            <div class="flex justify-center">
                <button class="lletra-teclat teclat-enviar"> Enviar
                </button>
                <button class="lletra-teclat">Z</button>
                <button class="lletra-teclat">X</button>
                <button class="lletra-teclat">C</button>
                <button class="lletra-teclat">V</button>
                <button class="lletra-teclat">B</button>
                <button class="lletra-teclat">N</button>
                <button class="lletra-teclat">M</button>
                <button class="lletra-teclat teclat-suprimir" aria-label="Suprimir">
                    <svg viewBox="0 0 24 24" role="presentation" class="dark:text-white h-6">
                        <path d="M22,3H7C6.31,3 5.77,3.35 5.41,3.88L0,12L5.41,20.11C5.77,20.64 6.31,21 7,21H22A2,2 0 0,0 24,19V5A2,2 0 0,0 22,3M19,15.59L17.59,17L14,13.41L10.41,17L9,15.59L12.59,12L9,8.41L10.41,7L14,10.59L17.59,7L19,8.41L15.41,12"
                              style="fill: currentcolor;"></path>
                    </svg>
                </button>
            </div>
        </div>
    </main>

    <form id="form" action="processa.php" method="get">
        <input type="hidden" name="lletres" id="lletres">
    </form>

    <script>

        function enviarLletra(element) {
            const caselles_lliures = document.getElementsByClassName("taula-enblanc");

            for (let i = 0; i < caselles_lliures.length && i < 5; i++) {
                if (!caselles_lliures[i].hasAttribute("data-ocupat")) {
                    caselles_lliures[i].getElementsByClassName("letter-container")[0].innerHTML = element;
                    caselles_lliures[i].setAttribute("data-ocupat", "true");
                    break;
                }
            }
        }

        function esborrarLLetra() {
            const caselles_lliures = document.getElementsByClassName("taula-enblanc");

            for (let i = caselles_lliures.length - 1; i >= 0; i--) {
                if (caselles_lliures[i].hasAttribute("data-ocupat")) {
                    caselles_lliures[i].getElementsByClassName("letter-container")[0].innerHTML = "";
                    caselles_lliures[i].removeAttribute("data-ocupat");
                    break;
                }
            }
        }

        function enviarFormulari() {
            let lletres = "";
            const caselles_lliures = document.getElementsByClassName("taula-enblanc");
            for (let i = 0; i < caselles_lliures.length && i < 5; i++) {
                if (caselles_lliures[i].hasAttribute("data-ocupat")) {
                    lletres += caselles_lliures[i].getElementsByClassName("letter-container")[0].innerHTML;
                }
            }
            document.getElementById("lletres").value = lletres;
            document.getElementById("form").submit();
        }

        window.onload = () => {
            const tecles = document.getElementsByClassName("lletra-teclat");

            for (let i = 0; i < tecles.length; i++) {
                tecles[i].onclick = () => {
                    if (tecles[i].classList.contains("teclat-enviar"))
                        enviarFormulari();
                    else if (tecles[i].classList.contains("teclat-suprimir"))
                        esborrarLLetra();
                    else
                        enviarLletra(tecles[i].innerHTML);
                }
            }
        }

    </script>
</div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>