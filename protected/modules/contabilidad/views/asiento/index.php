<?php
$this->breadcrumbs=array(
	'Asiento',
);?>
<h1>Asientos de Diario / Notas de cr&eacute;dito / Dep&oacute;sito</h1>
<div>
    <table>
        <tr>
            <td>Nº de asiento</td>
            <td></td>
            <td>Tipo Comprobante</td>
            <td></td>
            <td>Nº Comprobante</td>
            <td></td>
            <td>Ref</td>
            <td></td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td></td>
            <td>Tipo Documento</td>
            <td></td>
            <td>Nº Documento</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Cuenta Bancario</td>
            <td colspan="3"></td>
            <td>Monto asiento</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Responsable</td>
            <td colspan="5"></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Concepto</td>
            <td colspan="5"></td>
            <td></td>
            <td></td>
        </tr>
        
    </table>
    
    <div id="addDetalleAsiento">
        <form name="addDetalleAsiento" method="POST" enctype="multipart/form-data">       
            <table>
                <tr>
                    <td>CODIGO</td>
                    <td>CUENTA</td>
                    <td>DEBE</td>
                    <td>HABER</td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="text" name="codigo" value="" /></td>
                    <td><input type="text" name="codigo" value="" /></td>
                    <td><input type="text" name="codigo" value="" /></td>
                    <td><input type="text" name="codigo" value="" /></td>
                    <td><input type="button" value="+" name="agregar" /></td>
                </tr>
            </table>
        </form>
    </div>
    
    <div id="detalleAsiento">
        <table>
                <tr>
                    <td>CODIGO</td>
                    <td>CUENTA</td>
                    <td>DEBE</td>
                    <td>HABER</td>
                    <td>SUB-DETALLE</td>
                </tr>
        </table>
    </div>
</div>