<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Nous contactez</h2>
        <p>Pour toute information complémentaire, veuillez prendre contact avec nous</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-5">

                <div class="info-wrap">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Adresse :</h3>
                            <p> Ngaliema, Kinshasa, République Démocratique du Congo</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Téléphone </h3>
                            <p>+243 817 138 062</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email</h3>
                            <p>jktech@jktech.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                        frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-7">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <label for="name-field" class="pb-2">Votre Nom</label>
                            <input type="text" name="name" id="name-field" class="form-control"
                                required="">
                        </div>

                        <div class="col-md-6">
                            <label for="email-field" class="pb-2">Votre Email</label>
                            <input type="email" class="form-control" name="email" id="email-field"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <label for="subject-field" class="pb-2">Sujet</label>
                            <input type="text" class="form-control" name="subject" id="subject-field"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <label for="message-field" class="pb-2">Message</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Envoyer un message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section>
