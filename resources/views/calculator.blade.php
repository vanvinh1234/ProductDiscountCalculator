<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discount calculator</title>
</head>
<body>
<h1>Discount calculator</h1>
<form action="/calculator" method="post">
    @csrf
    <table border="1" style="border-color: darkred">
        <tr>
            <td>Product Description:<input style ="width:100%" type="text" name="detail"/></td>
        </tr>
        <tr>
            <td>List Price:<input style ="width:100%" type="text" name="price"/></td>
        </tr>
        <tr>
            <td>Discount Percent:<input style="width: 100%" type="text" name="discount"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit"/></td>
        </tr>
    </table>
</form>
</body>
</html>
