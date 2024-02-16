
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('https://images.unsplash.com/photo-1600247565655-4dd0f938b414?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>About us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ###### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <?php foreach ($about as $a) : ?>
                <div class="col-12">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <p> <?= $a['hb'] ?> </p>
                            <h2>BMKG Jawa Barat</h2>
                        </div>
                        <h6 class="mb-4"><?= $a['jb'] ?></h6>
                        <p class="mb-0"> <?= $a['detail_bio'] ?> </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
        </div>
        
    </section>
    <!-- ##### About Area End ###### -->
    

    <!-- ##### Call To Action Start ###### -->
    
    <!-- ##### Call To Action End ###### -->

    
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Team Member Area Start ##### -->
    
    <!-- ##### Team Member Area End ##### -->

    
    <!-- ##### Newsletter Area End ###### -->

