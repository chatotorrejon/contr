function imprimirContrato() {
    var contenido = document.documentElement.innerHTML;
    var ventanaImpresion = window.open('', '', 'height=500,width=500');
    ventanaImpresion.document.write('<html><head>');
    ventanaImpresion.document.write('<title>Contrato de Servicios</title>');
    ventanaImpresion.document.write('</head><body>');
    ventanaImpresion.document.write(contenido);
    ventanaImpresion.document.write('</body></html>');
    ventanaImpresion.document.close();
    ventanaImpresion.print();
}