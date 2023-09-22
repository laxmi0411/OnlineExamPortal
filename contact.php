<?php include("header.php"); ?>


<div class="header">
    <img  class="img-fluid" src="./assets/media/newcont.png">   
    <!-- <div class="bg-image img-fluid" style="background-image: url('./assets/media/cont.png');  height: 200px; background-size:cover;"></div> -->
</div>

<div class="form">
    <div class="container mt-5 mb-3">
        <div class="row">
            <h3 class="text-center">Contact Us for Online Exam Software Queries</h3>
            <div class="col-md-8">

                <div class="row">

                    <p class="text-muted pt-2"><small>Thank you for giving us your valuable time to get in touch. Please fill out the below inquiry form; we will get back to you soon. Don’t worry; your personal information is safe with us; we will keep that private.</small></p>
                    <div class="mb-3 col-md-6">
                        <!-- <label for="fn" class="form-label">First Name<span>*</span></label> -->
                        <input type="email" class="form-control" id="fn" placeholder="Name">
                    </div>
                    <div class="mb-3 col-md-6">
                        <!-- <label for="mail" class="form-label">Email</label> -->
                        <input class="form-control" type="mail" id="mail" name="mail" placeholder="Email*"></input>
                    </div>
                    <div class="mb-3 col-md-6">
                        <!-- <label for="mail" class="form-label">Email</label> -->
                        <input class="form-control" type="text" id="orgnisation" name="" placeholder="Orgnisation"></input>
                    </div>
                    <div class="mb-3 col-md-6">
                        <!-- <label for="phone" class="form-label">Phone</label> -->
                        <input class="form-control" type="number" id="number" name="numbar" placeholder="Mobile"></input>
                    </div>
                    <div class="mb-3 col-md-12 ">
                        <label for="floatingTextarea pb-2">Message</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="floatingTextarea" style="height: 35vh"></textarea>
                        </div>
                    </div>
                   
                </div>
                <button type="button" class="btn btn-outline-dark ">Submit</button>
            </div>
            <div class="col-md-4 mt-5">
                <div class="row pt-4">
                    <div class="col-md-12">
                        <div class="card card-form p-3">
                            <div class="card-body ">
                                <h5 class="card-title pb-3" style="color: #002147;">Gyan Pareekshan</h5>

                                <p class="card-text text-muted pb-3">It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within 24 hours!</p>
                                <a href="./about.php#team-member" class="card-link">MEET THE TEAM</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


<div class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.9997360682!2d75.65047149601598!3d26.88514167878653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1665649970227!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php include("footer.php"); ?>

</html>