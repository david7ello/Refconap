descripciones = baseDeDatos.map((x)=> x.concepto);
conceptos = baseDeDatos.map((x)=> x.descripcion);

contenedor_de_tablero=document.getElementsById("contenedor-de-tablero")

function generarTablaDeJuego(){
	html = `
	<table>
		<tbody>

	`;
	for (const concepto of conceptos) {
		html=`
		<tr>
			<td>
			${conceptos}
			</td>
                                
		</tr>
	`;	

	}
	html = `
	
		</tbody>
		</table>
	`;

	contenedor_de_tablero.innerHTML=html;
}