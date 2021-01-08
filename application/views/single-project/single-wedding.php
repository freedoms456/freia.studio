<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Magnet - Minimal Portfolio Template</title>


<?php $this->load->view('single-project/layout/header'); ?>



<!-- Single Project Section -->

<section id="single-project">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <h1>Wedding Template</h1>
                    <a href="<?php echo base_url()?>demo/qwedding/"><i class="fa fa-long-arrow-right"></i> Lihat Demo</a>

                    <div class="col-md-12 col-sm-12">
                         <img src="<?php echo base_url()?>assets/Magnet/images/wedding1.png" class="img-responsive" alt="Portfolio">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <img src="<?php echo base_url()?>assets/Magnet/images/wedding2.png" class="img-responsive" alt="Portfolio">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <img src="<?php echo base_url()?>assets/Magnet/images/wedding3.png" class="img-responsive" alt="Portfolio">
                    </div>

                    <div class="col-md-12 col-sm-12">
                          <h2> <strong> Pesan Sekarang  </strong> </h2>

                    <div class="clearfix"></div>
                         <div class="col-md-6 col-sm-6 text-center">
                              <div class="card">
                                   <h3>Fitur Basic (Promo)</h3>
                                   <p class="price">IDR.150 K</p>
                                   <p> Groom and Bride <br>
                                   Backsound<br>
                                   Gallery (4 Foto)<br>
                                   Google Maps<br>
                                   Akad & Resepsi<br>
                                   Durasi Undangan (3 Bulan)<br>
                                   Protokol COVID-19<br>-</p>
                                   <a style="padding-left:0px" href="https://api.whatsapp.com/send?phone=6285820857949&text=Hello+%2C+saya+mau+mesan+undangan+template+qwedding+dengan+Basic+fitur+Total+harga+300.000"><button>Pesan</button></a></p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6 text-center">
                              <div class="card">
                                   <h3>Fitur Custom</h3>
                                   <p class="price">IDR. <span id="total-price">150</span> K</p>
                                   <div class="card-container">
                                        <p>
                                        <label style="font-weight:400;" > Semua Fitur Standar</label>
                                      <br>
                                        <label style="font-weight:400;" > Pengiring (+25k)</label>
                                        <label class="switch right">
                                             <input id ="pengiring" type="checkbox" >
                                             <span class="slider round"></span>
                                        </label><br>
                                        <label style="font-weight:400;" > Love Story (+25k)</label>
                                        <label class="switch right">
                                             <input id ="love-story" type="checkbox" >
                                             <span class="slider round"></span>
                                        </label><br>
                                        <label style="font-weight:400;" > Ganti Warna (+50k)</label>
                                        <label class="switch right">
                                             <input id ="color-scheme" type="checkbox" >
                                             <span class="slider round"></span>
                                        </label><br>
                                        <label style="font-weight:400;" > Galeri Video (+25k) </label>
                                        <label class="switch right">
                                             <input id ="galeri-video" type="checkbox" >
                                             <span class="slider round"></span>
                                        </label><br>
                                             </p>
                                   </div>
                               
                                   <a style="padding-left:0px" id="order-custom" href="#"><button>Pesan</button></a>
                              </div>
                         
                         </div>
                    </div>         

                         <div class="col-md-12 col-sm-12 text-center">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              <strong>James Otto ( Project Manager )..</strong>
                         </div>
               </div>

          </div>
     </div>
</section>

<!-- Footer Section -->

<?php $this->load->view('single-project/layout/footer'); ?>

<script>
$(document).ready(function(){
     var totalHarga = 150;
     var fitur =" "
     var hrefordercustom = "https://api.whatsapp.com/send?phone=6285820857949&text=Hello+%2C+saya+mau+mesan+undangan+template+qwedding+dengan+custom+fitur+"+fitur+'+%2C+total+harga : '+totalHarga+'.000'
     $('#order-custom').attr('href',hrefordercustom)
  $(".card-container input").click(function(){
       var harga = 300;
    if($('#pengiring').is(':checked')){
         var pengiring = 25;
         var fiturpengiring = 'Pengiring, ';
    } else{
         var pengiring =0;
         var fiturpengiring = '';
    }
    if($('#love-story').is(':checked')){
         var lovestory = 25;
         var fiturlove = 'Love Story, ';
    } else{
         var lovestory =0;
         var fiturlove = '';
    }
    if($('#color-scheme').is(':checked')){
         var colorscheme = 50;
         var fiturcolor = 'Color Scheme, ';
    } else{
         var colorscheme =0;
         var fiturcolor = '';
    }
    if($('#galeri-video').is(':checked')){
         var galerivideo = 25;
         var fiturgaleri = 'Galeri Video, ';
    } else{
         var galerivideo =0;
         var fiturgaleri = '';
    }
    fitur = fiturpengiring+fiturlove+fiturcolor+fiturgaleri;
    totalHarga = harga + pengiring + lovestory + colorscheme + galerivideo;
    $("#total-price").text(totalHarga);
    var hrefordercustom = "https://api.whatsapp.com/send?phone=6285820857949&text=Hello+%2C+saya+mau+mesen+undangan+template+qwedding+dengan+custom+fitur+"+fitur+'+%2C+Total+harga : '+totalHarga+'.000'
     $('#order-custom').attr('href',hrefordercustom)
    
  });

});

</script>

</body>
</html>