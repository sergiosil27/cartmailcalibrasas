<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Ticket</title>

		<!-- Favicon -->
		<link rel="icon" href="./images/favicon.png" type="image/x-icon" />

		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: left;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="4">
						<table>
							<tr>
								<td class="title">
									<img src="img/LOGO AGR.png" alt="Company logo" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									Factura #: {{$ventas[0]->factura_id}} <br />
									Created: {{$ventas[0]->created_at}} <br />
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="4">
						<table>
							<tr>
								<td>
									<b>Empresa</b> <br />
									<b>Razon social:</b>Calibrasas, Inc.<br />
									<b>Dirrecion:</b>Cr 67 #3 45B sur<br />
									Barrio, Centro
								</td>
								<td></td>
								<td style="">
									<b>Cliente</b> <br />
									<b>Documento:</b>{{$ventas[0]->documento}}.<br />
									<b>Nombres:</b>{{$ventas[0]->nombres.' '.$ventas[0]->apellido}} <br />
									<b>Correo:</b> {{$ventas[0]->correo_electronico}}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td>Metodo de pago</td>

					<td>Check #</td>
				</tr>

				<tr class="details">
					<td>Check</td>

					<td>1000</td>
				</tr>

				<tr class="heading">
					<td>Item</td>
					<td>Cantidad</td>
					<td>Precio</td>
					<td>Subtotal</td>
				</tr>
				<?php $total=0?>
				@foreach ($ventas as $venta)
				<tr class="item">
					<td>{{$venta->nombre}} </td>
					<td>{{$venta->cantidad}} </td>
					<td>${{number_format($venta->precio,2)}} </td>
					<td>${{number_format($venta->cantidad*$venta->precio,2)}} </td>
				</tr>
				<?php $total=$total+($venta->cantidad*$venta->precio) ?>
				@endforeach

				

				<tr class="total">
					<td></td>
					<td></td>
					<td><b>Total:</b></td>

					<td>${{number_format($total,2)}} </td>
				</tr>
			</table>
		</div>

		<?php #echo ($ventas) ?>
	</body>
</html>