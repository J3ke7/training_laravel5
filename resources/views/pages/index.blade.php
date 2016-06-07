<html>
<head>
    <meta charset="UTF-8">
    <title>About me</title>

</head>
<body>
<h3>Infomation {{ $name }} {{ $age }}</h3>

<h3>About me <?php echo $name ?></h3>
<h3>Age <?php echo $age ?></h3>
<p>I'm Hieu, I'm PHP Developer, I love you ^_^</p>
<hr/>
@foreach($customersLst as $item)
    <li>Name : {{$item->name}} | Author : {{$item->email}}</li>
@endforeach
</body>
</html>
