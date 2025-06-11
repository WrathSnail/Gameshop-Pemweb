<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameshop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php if (session()->get('role') == 'admin') : ?>
        <?= $this->include('layout/admin_header'); ?>
    <?php else : ?>
        <?= $this->include('layout/header'); ?>
    <?php endif; ?>
    <!-- <div id="toast" class="toast-container"></div> -->
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/footer'); ?>
</body>
<script>
    // const showToast = (message, className) => {
    //     toast.innerHTML = message;
    //     toast.className = `toast ${className}`;
    //     toast.style.display = 'block';
    //     setTimeout(() => {
    //         toast.style.display = 'none';
    //     }, 3000);
    // }

    // if (flashdata.success) {
    //     showToast(flashdata.success, 'success');
    // } else if (flashdata.error) {
    //     showToast(flashdata.error, 'error');
    // }
</script>

</html>