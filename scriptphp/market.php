<?php
include_once 'connexion.php';
?>

<div class="container d-flex flex-row ">
   

   <div class="product  d-flex flex-wrap justify-content-between" align="center">
       <?PHP
        
        $sql = "SELECT ref_produit image,descreption , prix FROM produit";
        $resultset = mysqli_query($connect, $sql) or die("database error:" . mysqli_error($connect));
        while ($record = mysqli_fetch_assoc($resultset)) {?>
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?php echo $record['image']; ?>"  class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $record['name']; ?> </h4>
                <p class="card-text">
                 <div class="desc"><?php echo "descreption: "; echo $record['descreption']; ?></div> <br>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/femme3.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox" title="set"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details" ><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
       <?php  } ?>

   </div>

  </div>