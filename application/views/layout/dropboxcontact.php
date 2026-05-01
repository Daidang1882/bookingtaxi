<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS custom -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="sticky-hotline">
        <a href="tel:0345834321 " class="hotline-btn phone-btn">
            <i class="bi bi-telephone-fill"></i>
        </a>

        <a href="https://zalo.me/0345834321" class="hotline-btn zalo-btn" target="_blank">
            <img src="<?php echo base_url('assets/image/logozalo.png'); ?>"
                alt="Zalo"
                class="zalo-icon">
        </a>
        <a href="#" class="hotline-btn mess-btn">
            <i class="bi bi-messenger"></i>
        </a>
    </div>
    <script>
        function toggleHotline() {
            document.querySelector('.sticky-hotline').classList.toggle('active');
        }
    </script>



</body>

</html>