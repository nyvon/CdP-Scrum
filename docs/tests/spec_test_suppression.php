<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://selenium-ide.openqa.org/profiles/test-case">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="selenium.base" href="http://localhost/" />
<title>spec_test_suppression</title>
</head>
<body>
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr><td rowspan="1" colspan="3">spec_test_suppression</td></tr>
</thead><tbody>
<tr>
	<td>open</td>
	<td>/projetCDP/CdP-Scrum/CdP-Scrum/DYF-Scrum/index.php</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=Afficher mes projets »</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=TEST1</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=Del Tache</td>
	<td></td>
</tr>
<tr>
	<td>click</td>
	<td>xpath=(//input[@name='id_rep[]'])[2]</td>
	<td></td>
</tr>
<tr>
	<td>click</td>
	<td>xpath=(//button[@id='del'])[2]</td>
	<td></td>
</tr>
<tr>
	<td>assertConfirmation</td>
	<td>Voulez-vous supprimer cette tache</td>
	<td></td>
</tr>

</tbody></table>
</body>
</html>
