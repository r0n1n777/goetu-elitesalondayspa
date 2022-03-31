@extends('layout')

@section('title', 'Services - Elite Salon Day Spa')

@section('content')
<div class="p-5 services-header bg-dark" data-aos="fade-left">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center p-3">
            <h1 class="text-xl text-white">OUR SERVICES</h1>
        </div>
    </div>
</div>

<div class="p-5 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col text-center" data-aos="fade-up">
                <a href="#manicure" class="text-decoration-none text-white h5">Manicure</a>
            </div>
            <div class="col text-center" data-aos="fade-up" data-aos-delay="100">
                <a href="#pedicure" class="text-decoration-none text-white h5">Pedicure</a>
            </div>
            <div class="col text-center" data-aos="fade-up" data-aos-delay="200">
                <a href="#nail-enhancement" class="text-decoration-none text-white h5 text-nowrap">Nail Enhancement</a>
            </div>
            <div class="col text-center" data-aos="fade-up" data-aos-delay="300">
                <a href="#body-care" class="text-decoration-none text-white h5 text-nowrap">Body Care</a>
            </div>
            <div class="col text-center" data-aos="fade-up" data-aos-delay="400">
                <a href="#children-services" class="text-decoration-none text-white h5 text-nowrap">Children Services</a>
            </div>
            <div class="col text-center" data-aos="fade-up" data-aos-delay="500">
                <a href="#additiona-services" class="text-decoration-none text-white h5 text-nowrap">Additional Services</a>
            </div>
            <div class="col text-center" data-aos="fade-up" data-aos-delay="600">
                <a href="#eyelash-extensions" class="text-decoration-none text-white h5 text-nowrap">Eyelash Extensions</a>
            </div>
        </div>
    </div>
</div>

<div class="p-5 services bg-warning">
    <div class="container">
        <div class="card mb-3" data-aos="fade-left" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('images/services/manicure.webp') }}" class="img-fluid rounded-start h-100">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h1 class="card-title text-xl">Manicure</h1>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Classic Manicure (Reg. colors)</b>
                            <b>$23</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Deluxe Manicure<br>(Sugar scrub, Paraffin wax, Longer massage)</b>
                            <b>$42</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Gel Manicure</b>
                            <b>$33</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Gel Polish Color Change</b>
                            <b>$25</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Classic Gel Manicure</b>
                            <b>$49</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Gel Polish change on toes<br>*$6 Extra to soak off previous gel polish, $6 Extra for French.</b>
                            <b>$23</b>
                        </p>
                        <p class="card-text"><small class="text-muted">Updated 2022</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" data-aos="fade-right" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('images/services/pedicure.webp') }}" class="img-fluid rounded-start h-100">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h1 class="card-title text-xl">Pedicure</h1>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <span>
                                <b>Classic Pedicure</b><br>
                                - Nail shaping & cuticle care<br>
                                - Pumice heels<br>
                                - Organic sugar scrub<br>
                                - Massage with lotion, hot stones, and a hot towel<br>
                                - Regular polish
                            </span>
                            <b>$32</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <span>
                                <b>Luxury Pedicure</b><br>
                                - Nail shaping & cuticle care<br>
                                - Pumice heels<br>
                                - Callus removal treatment<br>
                                - Organic sugar scrub<br>
                                - Massage with hydrating cucumber cream, hot stones, and a hot towel<br>
                                - Regular polish
                            </span>
                            <b>$42</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <span>
                                <b>Elite V.I.P. Pedicure</b><br>
                                - Nail shaping & cuticle care<br>
                                - Pumice heels<br>
                                - Organic sugar scrub<br>
                                - Callus removal treatment<br>
                                - Cucumber heel cream application<br>
                                - Mint masque wrap<br>
                                - Massage with lotion, hot oil, hot stones, and a hot towel<br>
                                - Regular polish
                            </span>
                            <b>$52</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <span>
                                <b>Elite Organic Spa Pedicure</b><br>
                                The Elite Organic Spa Pedicure includes fresh orange slices and 100% organic spa products.<br>
                                - Choice of bath salt soak<br>
                                - Nail shaping & cuticle care<br>
                                - Pumice heels<br>
                                - Choice of sugar scrub<br>
                                - Callus removal treatment<br>
                                - Cucumber heel cream application<br>
                                - Choice of clay masque wrap<br>
                                - Massage with hot oil, peach paraffin wax, hot stones, and your choice of massage lotion<br>
                                - Hot towel wrap & Regular polish
                            </span>
                            <b>$70</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <span>
                                <b>Elite Jelly Pedicure</b><br>
                                The Elite Jelly Pedicure includes fresh orange slices and 100% organic spa products<br>
                                - Choice of bath salt soak<br>
                                - Nail shaping & cuticle care<br>
                                - Pumice heels<br>
                                - Choice of sugar scrub<br>
                                - Callus removal treatment<br>
                                - Cucumber heel cream application<br>
                                - Choice of clay masque wrap<br>
                                - Massage with hot oil, peach paraffin wax, hot stones, and your choice of massage lotion<br>
                                - Hot towel wrap & Regular polish
                            </span>
                            <b>$82</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <span>
                                <b>Mini-Pedicure</b><br>
                                The mini-pedicure solely focuses on nail care and does not include a leg massage or sugar scrub.<br>
                                - Nail shaping & cuticle care<br>
                                - Pumice sole conditioning<br>
                                - Lotion application<br>
                                - Regular polish
                            </span>
                            <b>$26</b>
                        </p>
                        <p class="card-text"><small class="text-muted">Updated 2022</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" data-aos="fade-left" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('images/services/nail-enhancements.webp') }}" class="img-fluid rounded-start h-100">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h1 class="card-title text-xl">Nail Enhancements</h1>
                        <h5>Healthy Dipping Powder(SNS)<br>Extra charge for special shape or length of nails vary from $5 & up.</h5>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>DIP Overlay</b>
                            <b>$41+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>DIP with Tips</b>
                            <b>$49+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Add on Gel Polish</b>
                            <b>$5 add</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>DIP Overlay Pink & White</b>
                            <b>$50+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>DIP Pink & White w/ Tips</b>
                            <b>$55+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>DIP Pink & White Ombre</b>
                            <b>$55+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Extra for Manicure</b>
                            <b>$10</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Extra for soak off previous DIP</b>
                            <b>$6</b>
                        </p>

                        <h5>Acrylics<br>Extra charge for special shape or length of nails vary from $10 & up.</h5>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Full Set Regular Polish</b>
                            <b>$48+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Apres Gel-X Full Set</b>
                            <b>$46+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Full Set with Gel Polish</b>
                            <b>$50+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Fill Regular Polish</b>
                            <b>$40+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Fill with Gel Polish</b>
                            <b>$42+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>P&W Full Set</b>
                            <b>$56+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>P&W Ombre Full Set</b>
                            <b>$61</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>P&W BackFill</b>
                            <b>$52+</b>
                        </p>

                        <h5>Builder (Hard) Gel</h5>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Full Set</b>
                            <b>$51</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Full Set with Gel Polish</b>
                            <b>$56</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Fill-in</b>
                            <b>$40+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Fill-in with Gel Polish</b>
                            <b>$45+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Pink & White Full Set</b>
                            <b>$61+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Pink & White BackFill</b>
                            <b>$56+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Pink & White Fill-in<br>Extra charge for special shape or length of nails vary from $10 and up.</b>
                            <b>$60</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Pink Only Fill-in</b>
                            <b>$38</b>
                        </p>
                        <p class="card-text"><small class="text-muted">Updated 2022</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" data-aos="fade-right" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('images/services/body-care.webp') }}" class="img-fluid rounded-start h-100">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h1 class="card-title text-xl">Body Care</h1>
                        <h5>Waxing</h5>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Eyebrow</b>
                            <b>$15</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Lip</b>
                            <b>$7</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Chin</b>
                            <b>$9</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Face</b>
                            <b>$41</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Half Leg</b>
                            <b>$41+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Full Leg</b>
                            <b>$51+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Half Arm</b>
                            <b>$31+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Full Arm</b>
                            <b>$41+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Back</b>
                            <b>$51+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Stomach</b>
                            <b>$31+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Stomach & Chest</b>
                            <b>$46+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Bikini</b>
                            <b>$41+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Brazilian</b>
                            <b>$56+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Under Arm</b>
                            <b>$25+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Chest</b>
                            <b>$31+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Full-Body Women</b>
                            <b>$300</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Full-Body Men</b>
                            <b>$350+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Eyebrow or Eyelash Tint</b>
                            <b>$21</b>
                        </p>

                        <p class="card-text"><small class="text-muted">Updated 2022</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" data-aos="fade-left" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('images/services/children.webp') }}" class="img-fluid rounded-start h-100">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h1 class="card-title text-xl">Children's Services</h1>
                        <h5>10 & under</h5>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Manicure</b>
                            <b>$16</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Manicure with flower design</b>
                            <b>$20</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Gel Manicure</b>
                            <b>$23</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Pedicure</b>
                            <b>$25</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Pedicure with flower design</b>
                            <b>$28</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Gel Pedicure</b>
                            <b>$30</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Polish Change</b>
                            <b>$12</b>
                        </p>

                        <p class="card-text"><small class="text-muted">Updated 2022</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" data-aos="fade-right" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('images/services/eyelash-extensions.webp') }}" class="img-fluid rounded-start h-100">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h1 class="card-title text-xl">Eyelash Extensions</h1>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Lashes Full Set</b>
                            <b>$120 & up</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Lashes Fill</b>
                            <b>$70 & up</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Eyelash Take Off</b>
                            <b>$25</b>
                        </p>

                        <p class="card-text"><small class="text-muted">Updated 2022</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" data-aos="fade-left" data-aos-duration="1000">
            <div class="row g-0">
                <div class="col-md-5">
                    <img src="{{ asset('images/services/additional-services.webp') }}" class="img-fluid rounded-start h-100">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h1 class="card-title text-xl">Additional Services</h1>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Paraffin Wax Treatment</b>
                            <b>$16</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Callus Treatment<br>(with Cucumber Heel Cream)</b>
                            <b>$15</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>French Design</b>
                            <b>$6</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Nail Art</b>
                            <b>$6+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Swarovski Crystal</b>
                            <b>$5+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Chrome Powder</b>
                            <b>$10+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>French Polish Change</b>
                            <b>$20</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Regular Polish Change</b>
                            <b>$15</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Nail Trim</b>
                            <b>$10</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Buff Shine</b>
                            <b>$5</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Acrylic Toenail</b>
                            <b>$6+</b>
                        </p>
                        <p class="card-text d-flex justify-content-between align-items-end border-bottom">
                            <b>Gel Polish Change</b>
                            <b>$23</b>
                        </p>

                        <p class="card-text"><small class="text-muted">Updated 2022</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection