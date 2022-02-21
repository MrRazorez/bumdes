<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul?></title>
    <link rel="stylesheet" href="/fix/style-list.css">
    <link rel="stylesheet" href="/fix/semantic/custom-grid.css">
    <link rel="stylesheet" href="/fix/semantic/custom-image.css">
    <link rel="stylesheet" href="/fix/semantic/custom-header.css">
    <link rel="stylesheet" href="/fix/semantic/custom-menu.css">
    <link rel="stylesheet" href="/fix/semantic/custom-item.css">
</head>
<body>
    @include('komponen.header-home')
    @include('komponen.navigation-list')
    @include('komponen.warung-list')
</body>
</html>