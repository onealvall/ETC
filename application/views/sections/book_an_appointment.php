<style>
  .form-container {
    background-color: rgba(0, 0, 0, 0.7);
    padding: 40px;
    border-radius: 10px;
    width: 80%;
    color: white;
}

h1 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px;
}

.form-group textarea {
    height: 80px;
    resize: none;
}

.form-buttons {
    display: flex;
    justify-content: space-between;
}

button {
    width: 48%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.book-now {
    background-color: #28a745;
    color: white;
}

.click-here {
    background-color: #007bff;
    color: white;
}

a {
    color: #f8f9fa;
    text-decoration: underline;
}
</style>
<section class="page-section no-bg-color text-white" id="contact-us" style="min-height: 100vh">
    <div class="parallax">
        <video autoplay muted loop playsinline style="position: absolute; width: 100%; height: 100%; object-fit: cover;">
            <source src="<?=base_url('assets/video/book_an_appointment/1.mp4')?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
   <div class="container d-flex flex-column align-items-center justify-content-center h-100 gap-5">
      <div class="form-container">
          <h1>BOOK AN APPOINTMENT</h1>
          <form action="#" method="POST">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="first_name" placeholder="First Name*" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="last_name" placeholder="Last Name*" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <input type="email" name="email" placeholder="Email*" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone Number*" required>
                </div>
              </div>
            </div>
              <div class="form-group">
                  <input type="text" name="company_name" placeholder="Company Name*" required>
              </div>
              <div class="form-group">
                  <select name="country" required>
                      <option value="" disabled selected>Select your country</option>
                      <!-- Add country options here -->
                  </select>
              </div>
              <div class="form-group">
                  <textarea name="message" placeholder="Additional message (optional)"></textarea>
              </div>
              <div class="form-group">
                  <label>
                      <input type="checkbox" name="terms" required>
                      I accept the <a href="#">Terms and Conditions</a>
                  </label>
              </div>
              <div class="form-buttons">
                  <button type="submit" class="book-now">BOOK NOW</button>
                  <button type="button" class="click-here">CLICK HERE</button>
              </div>
          </form>
      </div>
    </div> 
</section>
