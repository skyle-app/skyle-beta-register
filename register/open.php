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
                  <label>이름 (본명 아니어도 됨)</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Write your name" required>
                </div>
                <div class="form-group">
                  <label>이메일 (구글 메일로 해주세요!!)</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Write your email address" required>
                </div>
                <div class="form-group">
                  <label>닉네임</label>
                  <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Write your nickname" required>
                </div>
                <div class="form-group">
                  <label>디스코드 태그 (ex. ! SSKATE ✅#9781)</label>
                  <input type="text" name="tag" id="tag" class="form-control" placeholder="Write your discord tag" required>
                </div>
                <div class="form-group">
                  <label>생년월일 (MM/DD/YYYY, 미성년자 가입 가능)</label>
                  <input type="text" name="birth" id="birth" class="form-control" maxlength="10" placeholder="Write your birth" required autocomplete="off">
                </div>
                <div class="form-group">
                  <label>휴대전화 번호 (선택사항)</label>
                  <input type="tel" pattern="010[0-9]{8}" name="phone" id="phone" class="form-control" placeholder="Write your phone number" maxlength="11" autocomplete="off">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="message_policy" value="true" id="message_policy">
                    <label class="form-check-label" for="defaultCheck1">
                      광고/홍보/공지성 메시지 발송 동의
                    </label>
                  </div>
                </div>
                <!--<div class="form-group">
                  <label></label>
                  <textarea name="" id="" class="form-control" placeholder="Add a brief of your project"></textarea>
                </div>-->
                <div class="send-btn">
                  <button class="btn btn-style-04">사전예약 하기</button>
                  <p style="text-align: center;"><br>사전예약 하기를 누르면 <a href="/policy/tos/">이용약관</a>, <a href="/policy/privacy/">개인정보 제공 및 이용</a>에 동의하는 것으로 간주합니다.</p>
                </div>
                <?php
                } else {
                ?>
                <div class="form-group">
                  <label>이름 (본명 아니어도 됨)</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Write your name" required value="<?php echo $_GET['name']; ?>">
                </div>
                <div class="form-group">
                  <label>이메일 (구글 메일로 해주세요!!)</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Write your email address" required value="<?php echo $_GET['email']; ?>">
                </div>
                <div class="form-group">
                  <label>닉네임</label>
                  <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Write your nickname" required value="<?php echo $_GET['nickname']; ?>">
                </div>
                <div class="form-group">
                  <label>디스코드 태그 (ex. ! SSKATE ✅#9781)</label>
                  <input type="text" name="tag" id="tag" class="form-control" placeholder="Write your discord tag" required value="<?php echo $_GET['tag']; ?>">
                </div>
                <div class="form-group">
                  <label>생년월일 (MM/DD/YYYY, 미성년자 가입 가능)</label>
                  <input type="text" name="birth" id="birth" class="form-control" maxlength="10" placeholder="Write your birth" required value="<?php echo $_GET['birth']; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <label>휴대전화 번호 (선택사항)</label>
                  <input type="tel" pattern="010[0-9]{8}" name="phone" id="phone" class="form-control" placeholder="Write your phone number" maxlength="11" value="<?php echo $_GET['phone']; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="message_policy" value="TRUE" id="message_policy">
                    <label class="form-check-label" for="defaultCheck1">
                      광고/홍보/공지성 메시지 발송 동의
                    </label>
                  </div>
                </div>
                <!--<div class="form-group">
                  <label></label>
                  <textarea name="" id="" class="form-control" placeholder="Add a brief of your project"></textarea>
                </div>-->
                <div class="send-btn">
                  <button class="btn btn-style-04">사전예약 하기</button>
                  <p style="text-align: center;"><br>사전예약 하기를 누르면 <a href="/policy/tos/">이용약관</a>, <a href="/policy/privacy/">개인정보 제공 및 이용</a>에 동의하는 것으로 간주합니다.</p>
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