<?php
/**
 * Created by PhpStorm.
 * User: nhanl
 * Date: 12/16/2017
 * Time: 10:36 AM
 */
?>
<div class="col-md-12 contact-map outer-bottom-vs">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1224961065045!2d106.63677484487121!3d10.801929010275108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752950430913e9%3A0x340314824caa903b!2zNzMgVMOibiBI4bqjaSwgcGjGsOG7nW5nIDEzLCBUw6JuIELDrG5oLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1513396316563"
            width="100%" height="400" frameborder="0" style="border:0"
            allowfullscreen></iframe>
</div>
<form action="/butky/submit" method="POST">
    <div class="col-md-9 contact-form">
        <div class="col-md-12 contact-title">
            <h4>Hãy liên hệ với chúng tôi.</h4>
        </div>
        <div class="col-md-6 ">
            <div class="register-form" role="form">
                <div class="form-group">
                    <label class="info-title" for="exampleInputName">Họ và tên
                        <span>*</span></label>
                    <input type="text"
                           class="form-control unicase-form-control text-input"
                           name="full_name" id="exampleInputName" required
                           placeholder="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="register-form" role="form">
                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1">Email
                        <span>*</span></label>
                    <input type="email"
                           class="form-control unicase-form-control text-input"
                           required
                           name="email" id="exampleInputEmail1" placeholder="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="register-form" role="form">
                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1">Điện
                        thoại <span>*</span></label>
                    <input type="email"
                           class="form-control unicase-form-control text-input"
                           required
                           name="phone" id="exampleInputEmail1" placeholder="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="register-form" role="form">
                <div class="form-group">
                    <label class="info-title" for="exampleInputTitle">Chủ đề
                        <span>*</span></label>
                    <input type="email"
                           class="form-control unicase-form-control text-input"
                           required
                           id="exampleInputTitle" placeholder="Title">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="register-form" role="form">
                <div class="form-group">
                    <label class="info-title" for="exampleInputComments">Nội
                        dung <span>*</span></label>
                    <textarea class="form-control unicase-form-control"
                              id="exampleInputComments" required></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-12 outer-bottom-small m-t-20">
            <button type="submit"
                    class="btn-upper btn btn-primary checkout-page-button">Gửi
                mail
            </button>
        </div>
    </div>
</form>
<div class="col-md-3 contact-info">
    <div class="contact-title">
        <h4>Thông tin liên hệ</h4>
    </div>
    <div class="clearfix address">
        <span class="contact-i"><i class="fa fa-map-marker"></i></span>
        <span class="contact-span">73/10F Tân Hải, Phường 13, Quận Tân Bình, Tp. HCM</span>
    </div>
    <div class="clearfix phone-no">
        <span class="contact-i"><i class="fa fa-mobile"></i></span>
        <span class="contact-span">028 3812 0089</span>
    </div>
    <div class="clearfix phone-no">
        <span class="contact-i"><i class="fa fa-mobile"></i></span>
        <span class="contact-span">028 2244 8966</span>
    </div>
    <div class="clearfix phone-no">
        <span class="contact-i"><i class="fa fa-mobile"></i></span>
        <span class="contact-span">028 3812 0079</span>
    </div>
    <div class="clearfix email">
        <span class="contact-i"><i class="fa fa-envelope"></i></span>
        <span class="contact-span"><a href="mailto:info@sieuthibutky.vn">info@sieuthibutky.vn</a></span>
    </div>
</div>

