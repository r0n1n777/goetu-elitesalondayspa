@extends('layout')

@section('title', 'Policy - Elite Salon Day Spa')

@section('content')
<div class="p-5 policy-header bg-dark" data-aos="fade-left">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center p-3">
            <h1 class="text-xl text-white">SALON POLICIES</h1>
        </div>
    </div>
</div>

<div class="p-5 policy bg-secondary" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <div class="row justify-content-center">
            <div class="w-75 h4">
                <b>1. New Clients</b>
                <br><br>
                We are so happy you chose to come to our salon! We kindly ask for you to arrive
                10-15 minutes early to check-in, grab a cold drink from our beverage area, and 
                familiarize yourself with the salon. We would love for you to take your time and 
                peruse through our large assortment of colors and designs before your 
                appointment begins.
                <br><br><br>

                <b>2. Late Arrivals</b>
                <br><br>
                All salon services have been designed to allow appropriate time for full 
                enjoyment of each service. Your late arrival may limit our ability to offer the 
                fullest possible experience. Although we offer a 10 minute grace period, please 
                be aware that late arrivals will not be guaranteed extension of scheduled 
                services. Services will be rendered only for the remainder of scheduled appointment.
                If our nail artists are running behind, we will reach out to you ahead of time so 
                you can plan accordingly.
                <br><br><br>

                <b>3. Late Cancellations </b>
                <br><br>
                Appointments can be cancelled 24 hours in advance by calling the salon. Any 
                other methods of contact, such as texts and emails, will not be accepted. 
                We understand that sometimes emergencies happen, and it's not always 
                possible to give adequate notice when you cannot come to your appointment. 
                However, if a client repeatedly cancels without adequate notice, we reserve the 
                right to ask for a non-refundable deposit to secure all future appointments. The 
                non-refundable deposit will be 50% of your services and will be collected at the 
                time the appointment is made. If you booked your appointment online, please 
                call the salon to provide the payment details for the deposit or else the 
                appointment will be forfeited.
                <br><br><br>

                <b>4. No-Shows</b>
                <br><br>
                If you make an appointment that you don’t show up for, we reserve the right to 
                charge a $20 no-show fee in addition to requiring a non-refundable deposit on 
                your next appointment.
                <br><br><br>
                
                <b>5. Payments</b>
                <br><br>
                We accept payment in the forms of credit cards (excluding American Express, 
                Discover), debit cards, Elite Salon & Day Spa gift cards, and cash. Checks are 
                not accepted. 
                <br><br><br>

                <b>6. Quality Guarantee & Refunds</b>
                <br><br>
                Your satisfaction is our highest priority. If you are not pleased with your 
                services, please make us aware of it before you leave the salon. We are 
                committed to making any needed corrections. 
                Nail enhancements and gel polish manicures are guaranteed for 5 days after 
                your appointment, except for nail breakages or a change in color preference. If 
                there are any lifting or chipping within the first 5 days, please call us to schedule
                a free repair. Any repairs made after 5 days of the original appointment will be 
                priced according to the current repair price on our <a href="{{ route('services') }}">services menu.</a> 
                Traditional nail polish services are not guaranteed. 
                We do not offer refunds on services or products already being rendered.
                <br><br><br>

                <b>7. Child Safety</b>
                <br><br>
                We love children! However, as a concern for your children’s safety, it is not 
                recommended for the children to stay in the salon unless they are receiving a 
                service. Please arrange for a caretaker to provide supervision for them at home 
                while you are at the salon for some “me-time.”
                <br><br><br>

                <b>8. For Your Safety</b>
                <br><br>
                For your comfort and safety, please notify our specialists if you have allergies, 
                any physical issues or disabilities, or if you are pregnant. If you experience 
                discomfort or any other symptoms during the treatment, please alert your 
                service provider immediately. Elite Salon reserves the right to discontinue a 
                service for any reason to ensure the safety of all parties.
                <br><br><br>

                <b>9. Data Privacy</b>
                <br><br>
                Your privacy is very important to us. We collect your personal information such 
                as your name, and telephone number in order to easily book appointments for 
                you. Rest assured we will never disclose your personal information to any third 
                party.
                <br><br><br>

                <b>10. Elite Etiquette</b>
                <br><br>
                Inappropriate and rude behavior does not belong at Elite Salon & Day Spa. Our 
                team at Elite are dedicated, professional technicians who reserve the right to 
                terminate services if clients are excessively intoxicated or make inappropriate 
                comments, suggestions or advances to any member of our team.
            </div>
        </div>
    </div>
</div>

@endsection