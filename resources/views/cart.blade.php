<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="verify-paysera" content="e28a9c10cac94119f5c81155e59805e3">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('pay.request') }}" method="post">
        @csrf
        <input hidden value="ab" name="notoption" />
        <button type="submit">Pay</button>
    </form>
</body>

</html>