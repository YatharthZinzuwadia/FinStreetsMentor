<section class="contact py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact Us</h3>
        <div class="row">
          <div class="col-md-5 address-grid">
            <div class="addres-office-hour text-center" >
              <ul>
                <li class="mb-2">
                  <h6 data-blast="color">Address</h6>
                </li>
                <li>
                  <p>CG Road,<br>AHMEDABAD</p>
                </li>
              </ul>
              <ul>
                <li class="mt-lg-4 mt-3">
                  <h6 data-blast="color">Phone</h6>
                </li>
                <li class="mt-2">
                  <p>+91 91733-25960</p>
                </li>
                <li class="mt-lg-4 mt-3">
                  <h6 data-blast="color">Email</h6>
                </li>
                <li class="mt-2">
                  <p><a href="mailto:info@example.com">yatharthzinzuwadia@gmail.com</a></p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-7 contact-form">
              <form  data-parsley-validate="true" method="post" action="<?=  base_url()?>/contact/add">
              <div class="row text-center contact-wls-detail">
                <div class="col-md-6 form-group contact-forms">
                  <input type="text" class="form-control" placeholder="Your Name" required="" name="name">
                </div>
                <div class="col-md-6 form-group contact-forms">
                    <input type="email" class="form-control" placeholder="Your Email" required="" name="email">
                </div>
              </div>
              <div class="form-group contact-forms">
                  <input type="text" class="form-control" placeholder="Subject" required="" name="subject">
              </div>
              <div class="form-group contact-forms">
                  <textarea class="form-control" rows="3" placeholder="Your Message" required="" name="message"></textarea>
              </div>
              <div class="sent-butnn text-center">
                  <button type="submit" name="submit" value="submit" class="btn btn-block" data-blast="bgColor">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    