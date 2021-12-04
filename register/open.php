    <!-- Contact Area -->
    <div class="contact-form-l3-area position-relative overflow-hidden bg-mirage" id="ealry_access">
      <div class="contact-l3-image-group">
        <div class="image-1 d-none d-md-block" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
          <img class="vertical-move" src="/static/image/landing-3/con-shape-1.png" alt="image">
        </div>
        <div class="image-2 d-none d-lg-block" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
          <img class="spin" src="/static/image/landing-3/con-shape-2.png" alt="image">
        </div>
        <div class="image-3 d-none d-lg-block" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
          <img class="spin" src="/static/image/landing-3/con-shape-3.png" alt="image">
        </div>
        <div class="image-4 d-none d-md-block" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
          <img class="horizontal-move" src="/static/image/landing-3/con-shape-4.png" alt="image">
        </div>
        <div class="image-5 d-none d-lg-block" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
          <img class="spin" src="/static/image/landing-3/con-shape-5.png" alt="image">
        </div>
        <div class="image-6 d-none d-md-block" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
          <img class="vertical-move" src="/static/image/landing-3/con-shape-6.png" alt="image">
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
            <div class="contact-form-box">
              <div class="section__heading text-center">
                <h2>사전 예약</h2>
              </div>
              <form action="/register/registerAction.php" method="POST" class="contact-form-l3">
              <?php
                if ($_GET['restart'] != 1) {
              ?>
                <div class="form-group">
                  <label>이름</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Write your name" required>
                </div>
                <div class="form-group">
                  <label>이메일</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Write your email address" required>
                </div>
                <div class="form-group">
                  <label>휴대전화 번호</label>
                  <input type="tel" pattern="010[0-9]{8}" name="phone" id="phone" class="form-control" placeholder="Write your phone number" maxlength="11" autocomplete="off">
                </div>
                <!--<div class="form-group">
                  <label></label>
                  <textarea name="" id="" class="form-control" placeholder="Add a brief of your project"></textarea>
                </div>-->
                <div class="form-group">
                  <div class="h-captcha" data-sitekey="d0d7eb01-1e20-4632-b21b-a0afbf14cd3e"></div>
                </div>
                <div class="send-btn">
                  <button class="btn btn-style-04">사전예약 하기</button>
                  <p style="text-align: center;"><br>사전예약 하기를 누르면 개인정보 제공 및 이용에 동의하는 것으로 간주합니다.</p>
                </div>
                <?php
                } else {
                ?>
                <div class="form-group">
                  <label>이름</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="이름을 입력해 주세요!" required value="<?php echo $_GET['name']; ?>">
                </div>
                <div class="form-group">
                  <label>이메일</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="이메일을 입력해 주세요!" required value="<?php echo $_GET['email']; ?>">
                </div>
                <div class="form-group">
                  <label>휴대전화 번호</label>
                  <input type="tel" pattern="010[0-9]{8}" name="phone" id="phone" class="form-control" placeholder="전화번호를 입력해 주세요!" maxlength="11" value="<?php echo $_GET['phone']; ?>" autocomplete="off">
                </div>
                <!--<div class="form-group">
                  <label></label>
                  <textarea name="" id="" class="form-control" placeholder="Add a brief of your project"></textarea>
                </div>-->
                <div class="send-btn">
                  <button class="btn btn-style-04">사전예약 하기</button>
                  <p style="text-align: center;"><br>사전예약 하기를 누르면 개인정보 제공 및 이용에 동의하는 것으로 간주합니다.</p>
                </div>
                <?php
                }
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>