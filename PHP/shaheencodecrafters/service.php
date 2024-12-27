<!doctype html>
<html lang="en">


<head>

    <?php include "head.php"; ?>

</head>

<body class="home-dark2 tt-magic-cursor">

    <?php include "header.php"; ?>

    <section class="breadcrumbs">
        <div class="breadcrumb-sm-images">
            <div class="inner-banner-1 magnetic-item">
                <img src="assets/img/inner-pages/inner-banner-1.png" alt>
            </div>
            <div class="inner-banner-2 magnetic-item">
                <img src="assets/img/inner-pages/inner-banner-2.png" alt>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <span>Servives</span>
                            <h1>"Our Providing Services"</h1>
                            <div class="breadcrumb-list">
                                <a href="index-2.html">Home</a><img src="assets/img/inner-pages/breadcrumb-arrow.svg" alt> Servives
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="home3-solution-section sec-mar">
        <div class="container">
            <div class="row justify-content-center g-4" id="Service">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script>
        // Fetch Services
        function fetchServices() {
            $.ajax({
                url: "admin/v3.21.0/code.php?fetch_services=true",
                method: "GET",
                success: function(data) {
                    let services = JSON.parse(data);
                    let html = '';
                    services.forEach(service => {
                        html += `
                        
                <div class="col-lg-4 col-md-6 col-sm-10 wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="solution-card magnetic-item">
                        <div class="icon">
                            <div class="icon">
                            
                  <i class="bi bi-${service.Icon}" style="color: #2c7be5; font-size: 48px; " ></i>
                        </div>
                        </div>
                        <div class="solution-content">
                            <h4><a href="service-details.php?id=${service.id}">${service.Name}</a></h4>
                            <p>${service.Description}</p>
                        </div>
                    </div>
                </div>`;
                    });
                    document.getElementById('Service').innerHTML = html;
                }
            });
        }

        // Call fetchServices on page load
        fetchServices();
    </script>

    <?php include "footer.php"; ?>

</body>


</html>