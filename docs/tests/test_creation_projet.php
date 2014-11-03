<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://selenium-ide.openqa.org/profiles/test-case">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="selenium.base" href="http://localhost:1447/" />
<title>test_creation_projet</title>
</head>
<body>
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr><td rowspan="1" colspan="3">test_creation_projet</td></tr>
</thead><tbody>
<tr>
	<td>open</td>
	<td>/projetCDP/CdP-Scrum/DYF-Scrum/index.php</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>link=Créer un projet »</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>id=nom</td>
	<td>PROJET_TEST</td>
</tr>
<tr>
	<td>type</td>
	<td>id=description</td>
	<td>Ceci est un test</td>
</tr>
<tr>
	<td>type</td>
	<td>id=liengit</td>
	<td>https://github.com</td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>id=submit</td>
	<td></td>
</tr>

</tbody></table>
</body>
</html>
