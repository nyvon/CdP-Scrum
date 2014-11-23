<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://selenium-ide.openqa.org/profiles/test-case">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="selenium.base" href="http://localhost:8888/" />
<title>test_afficher_sprint_actuel</title>
</head>
<body>
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr><td rowspan="1" colspan="3">test_afficher_sprint_actuel</td></tr>
</thead><tbody>
<tr>
	<td>open</td>
	<td>/CdP-Scrum/DYF-Scrum/index.php?action=index</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=Connexion »</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>id=pseudo</td>
	<td>nyvon</td>
</tr>
<tr>
	<td>type</td>
	<td>id=pwd</td>
	<td>1234</td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>name=send</td>
	<td></td>
</tr>
<tr>
	<td>open</td>
	<td>/CdP-Scrum/DYF-Scrum/index.php?action=index</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=Afficher mes projets »</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=DYF-Scrum</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=Sprint</td>
	<td></td>
</tr>
<tr>
	<td>verifyText</td>
	<td>css=h1</td>
	<td>Sprint actuel</td>
</tr>

</tbody></table>
</body>
</html>
