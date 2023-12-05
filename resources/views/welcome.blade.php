<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Webpage Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <!-- Tabs Navigation -->
    <ul class="nav nav-tabs" id="myTabs">
        <li class="nav-item">
            <a class="nav-link active" id="header-tab" data-toggle="tab" href="#header">Sales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="content-tab" data-toggle="tab" href="#content">Owner</a>
        </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content">

        <!-- Header Tab -->
        <div class="tab-pane fade show active" id="header">
            {{-- Header Start --}}
            <section class="py-4 d-flex justify-content-center">
                <div class="row mt-4">
                    tes 1 Sales
                </div>
            </section>
            {{-- Header End --}}
        </div>

        <!-- Content Tab -->
        <div class="tab-pane fade" id="content">
            {{-- Content quotation anda Start --}}
            <section id="content1" class="content menu-1 mobile-show text-center">
                <div class="container">
                    <div class="row pb-4">
                        tes 2 owner
                    </div>
                </div>
            </section>
            {{-- Content quotation anda End --}}
        </div>

    </div>

    <!-- Bootstrap Scripts (Ensure jQuery and Popper.js are included before Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
