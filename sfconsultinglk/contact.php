<?php 
/*
*Template Name: Contact
*/
get_header();?>
	<!-- Start Doctor List Section -->
    <div id="doctor-page" class="layer-stretch">
        <div class="layer-wrapper layer-bottom-10">
            <div class="row">
                <!-- Start Contact Detail Section -->

    <div id="contact-page" class="layer-stretch">

        <div class="layer-wrapper">

            <div class="row text-center">

                <div class="col-md-6 col-lg-3 contact-info-block">

                    <div class="contact-info-inner">

                        <i class="fa fa-plus-square-o"></i>

                        <span>APPOINTMENT</span>

                        <p class="paragraph-medium paragraph-black">+ 01 1122 333 333</p>

                        <p>appointment@yourdomain.com </p>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3 contact-info-block">

                    <div class="contact-info-inner">

                        <i class="fa fa-phone"></i>

                        <span>Call Us</span>

                        <p class="paragraph-medium paragraph-black">+ 01 1122 333 333</p>

                        <p>+ 01 1122 333 333 </p>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3 contact-info-block">

                    <div class="contact-info-inner">

                        <i class="fa fa-envelope"></i>

                        <span>Email Us</span>

                        <p class="paragraph-medium paragraph-black">sales@yourdomain.com</p>

                        <p>support@yourdomain.com </p>

                    </div>

                </div>

                <div class="col-md-6 col-lg-3 contact-info-block">

                    <div class="contact-info-inner">

                        <i class="fa fa-map-marker"></i>

                        <span>Location</span>

                        <p class="paragraph-medium paragraph-black">Street name, City, State</p>

                        <p class="paragraph-medium paragraph-black">Country, Pincode</p>

                    </div>

                </div>

            </div>

        </div>

    </div><!-- End Contact Detail Section -->

    <!-- Start Request Form Section -->

    <div id="contact-form" class="layer-stretch">

        <div class="layer-wrapper">

            <div class="layer-ttl"><h3>Make a Request</h3></div>

            <div class="contact-form row text-center">

                <div class="col-md-4">

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">

                        <i class="fa fa-user-o"></i>

                        <input id="contact-name" class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*">

                        <label class="mdl-textfield__label" for="contact-name">Your Name</label>

                        <span class="mdl-textfield__error">Please Enter Valid Name!</span>

                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">

                        <i class="fa fa-envelope-o"></i>

                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="contact-email">

                        <label class="mdl-textfield__label" for="contact-email">Your Email</label>

                        <span class="mdl-textfield__error">Please Enter Valid Email!</span>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">

                        <i class="fa fa-phone"></i>

                        <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="contact-mobile">

                        <label class="mdl-textfield__label" for="contact-mobile">Your Mobile Number</label>

                        <span class="mdl-textfield__error">Please Enter Valid Mobile Number!</span>

                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">

                        <i class="fa fa-rocket"></i>

                        <input class="mdl-textfield__input" type="text" id="contact-subject">

                        <label class="mdl-textfield__label" for="contact-subject">Your Subject</label>

                        <span class="mdl-textfield__error">Please Enter Subject Related to Your Query!</span>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">

                        <i class="fa fa-paper-plane"></i>

                        <textarea class="mdl-textfield__input" id="contact-message"></textarea>

                        <label class="mdl-textfield__label" for="contact-message">Your Request</label>

                        <span class="mdl-textfield__error">Please Enter Your Query!</span>

                    </div>

                </div>

                <div class="col-md-12 contact-error">



                </div>

                <div class="col-md-12">

                    <div class="form-submit">

                        <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-primary contact-submit">Submit your Query</button>

                    </div>

                </div>

            </div>

        </div>

    </div><!-- End Request Form Section -->

    <!-- Start Google Map Section -->

    <div id="map">

        <div class="map-wrapper">

            <div id="map-container"></div>

        </div>

        <div class="map-address">

            <div class="map-icon"><i class="fa fa-map-marker"></i></div>

            <div class="map-address-ttl">Our Location</div>

            <div class="paragraph-medium paragraph-black">Street name, City, Country</div>

        </div>

    </div><!-- End Google Map Section -->

                
            </div>
        </div>
    </div><!-- End Doctor List Section -->
	
<?php get_footer();?>