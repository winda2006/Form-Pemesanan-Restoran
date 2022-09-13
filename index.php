<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/frameset.dtd">
<html lang="en">
<head>
<title>Form Pemesanan</title>
</head>
<body>
<script language="JavaScript" type="text/javascript">
function jumlah() {
var myForm = document.form1;
var bakso = 12000 * eval(myForm.order1.value);
var soto = 10000 * eval(myForm.order2.value);
var mie = 15000 * eval(myForm.order3.value);
var degan = 5000 * eval(myForm.order4.value);
var campur = 7000 * eval(myForm.order5.value);
var hasil = bakso+soto+mie+degan+campur;
if (hasil > 50000) {
    myForm.total.value = hasil;
    myForm.diskon.value = 10000;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
 } else {
    myForm.total.value = hasil;
    myForm.diskon.value = 0;
    myForm.bayar.value = hasil - eval(myForm.diskon.value);
 }
}
function resetForm(){
document.form1.reset();
}
</script>
<form name="form1" action="#">
<font  size="6">WINDA'S RESTAURANT</font>
<table border="2" cellspacing=0 cellpadding=5 >
<colgroup align="center">
<colgroup align="center">
<colgroup align="center">
<thead valign="middle">
<tr>
<th width="35"><font color="black" size="4">No</font>
<th width="200"><font color="black" size="4">Makanan/Minuman</font>
<th width="180"><font color="black" size="4">Harga Satuan</font>
<th width="100"><font color="black" size="4">Pesan</font>
</tr>
<tbody>
<tr>
<td>1<td>Bakso Istimewa<td>@<input  type="text"    value="12000" disabled="true"/><td>
<input  type="text"  name="order1" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>2<td>Soto Spesial<td>@<input  type="text"    value="10000" disabled="true"/><td>
<input  type="text"  name="order2" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>3<td>Mie Ayam Super<td>@<input  type="text"   value="15000" disabled="true"/> <td>
<input  type="text"  name="order3" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td>4<td>Es Degan<td>@<input  type="text"   value="5000" disabled="true"/>
<td><input  type="text"  name="order4" value="0" onChange="jumlah()" />
</tr>
<tr>
<td>5<td>Es Campur<td>@<input  type="text"   value="7000" disabled="true"/> <td>
<input  type="text"  name="order5" value="0" onChange="jumlah()"/>
</tr>
<tr>
<td colspan=3 align="right">Jumlah Total<td><input  type="text"  name="total"  disabled="true"/>
</tr>
<tr>
<td colspan=3 align="right">Diskon<td><input  type="text"  name="diskon" disabled="true" />
</tr>
<tr>
<td colspan=3 align="right">Jumlah Bayar<td><input  type="text"  name="bayar"  disabled="true"/>
</tr>
</table>
<br/>
<input type="button" value="CANCEL" onClick="resetForm()" />
</form>
</body>