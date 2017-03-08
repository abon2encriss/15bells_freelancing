<?php
$this->title = "15 Bells";
 echo $this->render("partial/_header"); 
  echo $this->render("partial/_slider"); 
?>
<section id="manycircle">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <img src="images/aaa.jpg" class="img-responsive">
            </div>

        </div>
    </div>

</section>

<section id="howitwork">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-primary">HOW IT WORKS</h1>

            </div>
        </div>
        <div class="row">


            <div class="col- lg-4 col-md-4 col-sm-12">
                <div class="inner">

                    <div class="innercircle">
                        <i class="icon-featured fa fa-cog" id="icon"></i>
                        <h1>01 STEP</h1>
                        <P>Lorem ipsum dolor <br> sit amet,</P>
                    </div>

                    <div class="boxcontent">
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

            </div>
            <div class="col- lg-4 col-md-4 col-sm-12">
                <div class="inner">
                    <div class="innercircle">
                        <i class="icon-featured fa fa-cog" id="icon"></i>
                        <h1>01 STEP</h1>
                        <P>Lorem ipsum dolor <br> sit amet,</P>
                    </div>
                    <div class="boxcontent">
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

            </div>

            <div class="col- lg-4 col-md-4 col-sm-12">
                <div class="inner">
                    <div class="innercircle">
                        <i class="icon-featured fa fa-cog" id="icon"></i>
                        <h1>01 STEP</h1>
                        <P>Lorem ipsum dolor <br> sit amet,</P>
                    </div>
                    <div class="boxcontent">
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<div class="contact-container" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12 heading">
                <h1 class="heading">GET IN TOUCH WITH US</h1>
                <div><p>Want to know more? Call us, mail us or drop by
                        for a meeting. <br />
                        We promise to provide detailed and quick responses to all your
                        queries. </p></div>
            </div>
        </div>
    </div>



    <div class="container" style="width:100%; padding-left:0px;
         padding-right:0px;">
        <div class="row">
            <div class="col-md-4  col-xs-12">
                <div class="map"><iframe class="animation-element
                                         slide-left" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d112177.48612040607!2d77.12521425040302!3d28.523290738520128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390ce1fde4b45839%3A0xa37a795a7586ec22!2sOi+Media%2C+F+209%2C+1st+Floor%2C+Lado+Sarai%2C+New+Delhi%2C+Delhi+110030!3m2!1d28.523308699999998!2d77.19525519999999!5e0!3m2!1sen!2sin!4v1484921153164"
                                         width="100%" height="380" frameborder="0" style="border:0"
                                         allowfullscreen></iframe></div>
            </div>

            <div class="col-md-4  col-xs-12 animation-element bounce-up">

                <h2 style="font-size:18px;">ADDRESS DETAILS</h2>
                <p><strong>OurInitiative Media Private Limited (Oi
                        Media)</strong><br />
                    F209,First Floor<br />
                    Lado Sarai<br />
                    New Delhi- 110030<br />
                    Telephone – 011 4053 6526</p>

            </div>
            <div class="col-md-4  col-xs-12 animation-element
                 slide-right" style="width:31%;">
                <h2 style="font-size:18px;">SEND US A MESSAGE</h2>

                <form class="form-horizontal" method="post" id="footer-form">
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="number" name="number" min="10" max="12" placeholder="Number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="9" name="message" id="message" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <div class="g-recaptcha" data-sitekey="6Ld8VxQUAAAAAGrrJD7O7z1e5_MV6F783Z4Zop8j"></div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-10">
                            <input id="submit" name="submit" type="button"  onClick="get_value();"  value="SEND" class="btn btn-primary">
                            <input id="submit1" name="submit" type="Reset" value="RESET" class="btn btn-primary">
                        </div>
                    </div>

                </form>


            </div>

        </div>
    </div>

</div>
<?php echo $this->render("partial/_footer"); ?>