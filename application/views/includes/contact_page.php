<link rel="stylesheet" href="<?php echo base_url(); ?>css/contact_us.css">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div class="banner-background container-fluid" style="background-image: url(<?php echo base_url() ?>/assets/img/team/3.png)">
    <div class="contact-overlay"></div>
    <div class="banner container">
        <h1 class="banner_text" data-aos="fade-down">CONTACT US</h1>
    </div>
</div>
<div class="contact_form container shadow-lg p-5" data-aos="fade-up">
    <div class="row my-5">

        <div class="col-12 col-sm-12 col-lg-5 px-1 px-sm-5">

            <h3 class="mb-3">Let's Connect!</h3>
            <p class="text-justify">
                Thank you for your interest in E-Teleconnect. Please reach out to us through the form
                or through one of
                the options below so that we may address your needs.
            </p>
            <hr>
            <h6 class="mb-3">Contact Numbers</h6>
            <div class="row">
                <div class="col-12 row m-3">
                    <div class="col-auto d-flex justify-content-center align-items-center">
                        <img class="shadow" src="<?php echo base_url() ?>assets/img/headquarters/us-flag.jpg" style="height: auto; width: 50px;" alt="..." />
                    </div>
                    <div class="col d-flex flex-column justify-content-center">
                        <p class="mb-0">
                            <strong>Tel No:</strong> 808.445.6527
                        </p>
                        <p class="mb-0">
                            <strong>Direct US line:</strong> 855.800.0710 ext. 801
                        </p>
                    </div>
                </div>

                <div class="col-12 row m-3">
                    <div class="col-auto d-flex justify-content-center align-items-center">
                        <img class="shadow" src="<?php echo base_url() ?>assets/img/headquarters/ph-flag.PNG" style="height: auto; width: 50px;" alt="..." />
                    </div>
                    <div class="col d-flex flex-column justify-content-center">
                        <p class="-0">
                            <strong>Tel No:</strong> 6349.501.1210 loc. 117
                        </p>
                        <!-- <p class="text-justify mb-0">
                            <strong>Tel No:</strong> 63.968.893.7999
                        </p> -->
                        <p class="mb-0">
                            <strong>Tel No:</strong> 63.8829.0703 loc. 102
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <h6 class="mb-3">Social Media</h6>
            <a href="https://www.facebook.com/eteleconnectincph" target="_blank">
                <img class="social_icon ml-3 my-auto" src="<?php echo base_url() ?>/assets/img/contact/fb-icon.png" alt="..." /></a>
            <a href="https://www.linkedin.com/company/eteleconnect-inc-/?originalSubdomain=ph" target="_blank">
                <img class="social_icon ml-3 my-auto" src="<?php echo base_url() ?>/assets/img/contact/li-icon.png" alt="..." /></a>
            <!-- <a href="https://twitter.com/EtcPhilippines" target="_blank">
                <img class="social_icon ml-3 my-auto" src="<?php echo base_url() ?>/assets/img/contact/twitter.png" alt="..." /></a> -->
            <a href="https://www.instagram.com/eteleconnect/" target="_blank">
                <img class="social_icon ml-3 my-auto" src="<?php echo base_url() ?>/assets/img/contact/Instagram.png" alt="..." /></a>
            <!-- <a href="https://www.tiktok.com/@eteleconnect" target="_blank">
                <img class="social_icon ml-3 my-auto" src="<?php echo base_url() ?>/assets/img/contact/tiktok.png" alt="..." /></a> -->
            <br><br>

        </div>
        <!-- order-lg-last order-sm-first -->
        <div class="col-12 col-sm-12 col-lg-7 ">
            <form method="POST" action="<?php echo base_url(); ?>index.php/ContactUs/submitForm" class="my-5 mx-3" id="inquiry">
                <h4 class="mb-3">Contact Form</h4>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="interestSelect"><span style="color: red;">*</span> I am interested in..</label>
                        <select required class="form-select" id="interest" name="interest" aria-label="interestSelect" onchange="getInterestValue()">
                            <option value='' selected disabled>Select One..</option>
                            <option data-email="info@eteleconnectinc.com">Sales/Products & Services
                            </option>
                            <option data-email="recruitment@eteleconnectinc.com">Careers</option>
                            <option data-email="info@eteleconnectinc.com">Business Development</option>
                            <option data-email="info@eteleconnectinc.com">General Inquiry</option>
                        </select>
                        <div class="error"></div>
                        <input type="hidden" id="email_to" name="email_to" value="info@eteleconnectinc.com">
                    </div>

                    <div class="form-group col-md-6" id="fnamelabel">
                        <label for="inputEmail4"><span style="color: red;">*</span> First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                        <div class="error"></div>
                    </div>
                    <div class="form-group col-md-6" id="lnamelabel">
                        <label for="inputEmail4"><span style="color: red;">*</span> Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                        <div class="error"></div>
                    </div>

                    <div class="form-group col-md-6" id="email_fromlabel">
                        <label for="inputEmail4"><span style="color: red;">*</span> Business Email</label>
                        <input type="email" class="form-control" id="email_from" name="email_from" placeholder="Email">
                        <div class="error"></div>
                    </div>

                    <div class="form-group col-md-6" id="companylabel">
                        <label for="inputEmail4"><span style="color: red;">*</span> Company</label>
                        <input type="text" class="form-control" id="company" name="company" placeholder="Company">
                        <div class="error"></div>
                    </div>

                    <div class="form-group col-md-6" id="joblvllabel">
                        <label for="inputPassword4"><span style="color: red;">*</span> Job Level</label>
                        <input type="text" class="form-control" id="joblvl" name="joblvl" placeholder="Job Level">
                        <div class="error"></div>
                    </div>
                    <div class="form-group col-md-6" id="industrylabel">
                        <label for="interestSelect"><span style="color: red;">*</span> Industry</label>
                        <select class="form-select" id="industry" name="industry" aria-label="interestSelect">
                            <option value="" selected disabled>Select One..</option>
                            <option>Automotive</option>
                            <option>Banking/Financial Services</option>
                            <option>Consumer Electronics</option>
                            <option>Energy/Utilities</option>
                            <option>Government/Public Sector</option>
                            <option>Healthcare/Pharmaceutical</option>
                            <option>Industrial</option>
                            <option>Insurance</option>
                            <option>Manufacturing</option>
                            <option>Media/Communications</option>
                            <option>Retail/eCommerce</option>
                            <option>Technology/Telecommunications</option>
                            <option>Travel/Transportation/Tourism</option>
                            <option>Other</option>
                        </select>
                        <div class="error"></div>
                    </div>
                    <div class="form-group col-md-6" id="countrylabel">
                        <label for="inputcountry"><span style="color: red;">*</span> Country</label>
                        <select class="form-select country-select" id="country" name="country" aria-label="inputcountry">

                        </select>
                        <div class="error"></div>
                    </div>
                    <div class="form-group col-md-6" id="about_uslabel">
                        <label for="about_usSelect"><span style="color: red;">*</span> How did you hear about us?</label>
                        <select class="form-select" id="about_us" name="about_us" aria-label="about_usSelect">
                            <option value="" selected disabled>Select One..</option>
                            <option>E-Teleconnect Location</option>
                            <option>Event/Tradeshows</option>
                            <option>Industry Knowledge</option>
                            <option>Job Fairs</option>
                            <option>Past Experience</option>
                            <option>Publications/Magazines</option>
                            <option>Referral</option>
                            <option>Search Engine</option>
                            <option>Social Media</option>
                            <option>Webinar</option>
                        </select>
                        <div class="error"></div>
                    </div>
                    <div class="form-group col-md-12" id="phonelabel">
                        <label for="inputPassword4"><span style="color: red;">*</span> Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                        <div class="error"></div>
                    </div>

                    <div class="form-group col-md-12" id="messagelabel">
                        <label for="exampleFormControlTextarea1"> <span style="color: red;">*</span>Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        <div class="error"></div>
                    </div>

                </div>

                <!-- <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div> -->
                <div class="d-flex d-flex justify-content-center my-3" id="gcaptchalabel">
                    <div class="g-recaptcha" data-sitekey="6LebLn8jAAAAAA3FOM3h_4x576KDLVA5VJLg8Aey"></div>
                </div>
                <div id="captchamessage" class="d-flex d-flex justify-content-center"></div>

                <div class="d-flex d-flex justify-content-center" id="submitlabel">
                    <button type="button" id="btnSubmit" class="btn btn-md btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal- inquirymodal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm show">
        <div class="modal-content p-4 text-center primary-font">
            <?php echo $this->session->flashdata('submitmessage'); ?>
        </div>
    </div>
</div>

<?php if ($this->session->flashdata('submitmessage')) : ?>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('.inquirymodal').modal('show');
        });
    </script>
<?php endif; ?>

<script src="<?php echo base_url() ?>/js/contact.js"></script>