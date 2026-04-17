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

        <!-- các nút con -->
        <div class="sub-btns">
            <a href="tel:0901234567" class="btn btn-danger rounded-circle">
                <i class="bi bi-telephone-fill"></i>
            </a>

            <a href="https://zalo.me/0901234567" target="_blank" class="btn btn-primary rounded-circle">
                Z
            </a>

            <a href="https://m.me/yourpage" target="_blank" class="btn btn-info rounded-circle">
                <i class="bi bi-messenger"></i>
            </a>
        </div>

        <!-- nút chính -->
        <a class="btn btn-danger main-btn" onclick="toggleHotline()">
            <i class="bi bi-plus"></i>
        </a>

    </div>

    <script>
        function toggleHotline() {
            document.querySelector('.sticky-hotline').classList.toggle('active');
        }
    </script>



</body>

</html>