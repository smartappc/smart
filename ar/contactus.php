

<?= include 'header.php' ?>

<div class="contactus text-center">
    <div class="head-contact">
        <h2>اتصل بنا</h2>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-6">
                <div class="info">
                    <div class="info">
                        <h3>ابقى على تواصل معنا</h3>
                        <div class="info-div">
                            <i class="fa fa-map-marker-alt"></i>
                            <h4>العنوان</h4>
                            <p>حولي - شارع تونس - مجمع فوزان </p>
                        </div>
                        <div class="info-div">
                            <i class="fa fa-phone"></i>
                            <h4>الهواتف</h4>
                            <p>المكتب الرئيسي : 22629266 <br>  الدعم : 51053292 - 50740484</p>
                        </div>
                        <div class="info-div">
                            <i class="fa fa-info"></i>
                            <h4>البريد الالكتروني</h4>
                            <p>  info@smartappc.com </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6">
                <div class="send">
                    <form onsubmit="send_email(event)" method="post">
                        <h3>لأية مشاكل أو استفسارات أو اقتراحات أو شكاوى ، لا تتردد في الكتابة لنا</h3>
                        <div class="row">
                            <div class="col-md-12 center">
                                <div id="result"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="اكتب اسمك"
                                           required="required" id="name" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="اكتب بريدك الإلكترونى"
                                           required="required" id="email" name="email">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="اكتب رقم تليفونك"
                                           required="required" id="phone" name="phone">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="اكتب عنوان الرسالة"
                                           required="required" id="subject" name="subject">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
									<textarea class="form-control" placeholder="اكتب نص الرسالة" required="required" id="message"
                                              name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-form" id="submit_btn">إرسال</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- start contact us -->
<div class="contact">
    <div class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478.0511708794206!2d48.019507915098686!3d29.33949608214426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9cf606064161%3A0x492a5a66836750ef!2sTunisia+St%2C+Hawally!5e0!3m2!1ses!2skw!4v1542035284725" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<!-- end contact us -->
<?= include 'footer.php' ?>
