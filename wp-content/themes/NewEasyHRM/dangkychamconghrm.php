<?php
/* Template name: Đăng ký 1 năm sử dụng miễn phí Giải pháp chấm công EasyHRM  */ ?>

<?php get_header(); ?>

<style>
    .form-label {
        text-align: left !important;
    }

    .form-label>span {
        color: red;
    }

    .form-row {
        margin-bottom: 20px;
    }

    .event-btn {
        display: flex;
        padding: 10px 20px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 8px;
        border: 1px solid var(--Primary-2, #EA5626);
        background: var(--Red-2, #E11B1C);
        color: #FFF;
        text-align: center;

        /* Text/16/Bold */
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: 150%;
        /* 24px */
    }

    .event-btn input {
        border-radius: 6px;
        border: 1px solid var(--gray-300, #D1D5DB);
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.05);
        color: white;
        font-family: "Nunito Sans";
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: 150%;
        background-color: transparent;
        border: none;
    }

    #receive_document_form {}
</style>
<section style="padding: 40px 0" id="">
    <div class="container">
        <h1 class="hrm-title justify-content-center">Đăng ký 1 năm sử dụng miễn phí Giải pháp chấm công EasyHRM" </h1>
        <form action="../xu-ly-dang-ky-cham-cong-hrm" method="POST" id="receive_document_form">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-row">
                        <div class="form-label">
                            Họ và tên <span>*</span>
                        </div>
                        <div class="form-input">
                            <input type="text" name="fullname" data-msg="Hãy nhập họ tên đầy đủ" id="fullname"
                                placeholder="Nhập họ và tên" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-row">
                        <div class="form-label">
                            Số điện thoại <span>*</span>
                        </div>
                        <div class="form-input">
                            <input type="text" data-msg="Hãy nhập đúng số điện thoại" name="phoneNumber"
                                id="phoneNumber" placeholder="Nhập số điện thoại" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-row">
                        <div class="form-label">
                            Email <span>*</span>
                        </div>
                        <div class="form-input">
                            <input type="email" data-msg="Email sai định định dạng" name="email" id="email"
                                placeholder="Nhập email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-row">
                        <div class="form-label">
                            Mã số thuế công ty<span>*</span>
                        </div>
                        <div class="form-input">
                            <input data-msg="Hãy nhập đúng mã số thuế" type="text" name="taxNumber" id="taxNumber"
                                placeholder="Nhập mã số thuế" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-row">
                        <div class="form-label">
                            Chức vụ <span>*</span>
                        </div>
                        <div class="form-input">
                            <select class="form-control" required name="position" id="position">
                                <option hidden value="">Chọn chức vụ</option>
                                <option value="hr">HR</option>
                                <option value="hrm">HRM</option>
                                <option value="ceo">CEO</option>
                                <option value="ke_toan">Kế toán</option>
                                <option value="khac">Khác</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="form-row">
                        <div class="form-label">
                            Quy mô công việc <span>*</span>
                        </div>
                        <div class="form-input">
                            <select class="form-control" required name="workscale" id="workscale">
                                <option hidden value="">Quy mô công việc</option>
                                <option value="duoi_10">Dưới 10 nhân sự</option>
                                <option value="10den50">10 - 50 nhân sự</option>
                                <option value="50den100">50 - 100 nhân sự</option>
                                <option value="100den250">100 - 250 nhân sự</option>
                                <option value="250den500">250 - 500 nhân sự</option>
                                <option value="500den1000">500 - 1000 nhân sự</option>
                                <option value="tren1000">Trên 1000 nhân sự</option>
                            </select>

                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-12">
                        <div class="form-row">
                            <div class="g-recaptcha" data-sitekey="6Lc1VAgpAAAAAFaT1LTpGwvXCI6nh4BCH6vL1sio"></div>
                        </div>
                    </div> -->
            </div>
            <div class="event-btn">
                <input style="width: 100%" id="dat_cho" type="submit" value="Nhận tài liệu ngay">
            </div>
        </form>
    </div>
</section>
<!-- Thêm script validate trước thẻ đóng </body> -->
<script>
    document.getElementById('receive_document_form').addEventListener('submit', function (event) {
        // Validate Họ và tên, ít nhất 10 ký tự
        var fullname = document.getElementById('fullname');
        if (fullname.value.trim().length < 6) {
            alert('Hãy nhập đúng họ tên');
            fullname.focus();
            event.preventDefault();
            return false;
        }

        // Validate Số điện thoại
        var phoneNumber = document.getElementById('phoneNumber');
        var phoneRegex = /^[0-9]{10}$/;
        if (!phoneRegex.test(phoneNumber.value)) {
            alert('Hãy nhập đúng số điện thoại');
            phoneNumber.focus();
            event.preventDefault();
            return false;
        }

        // Validate Email
        var email = document.getElementById('email');
        if (email.value.trim() === '' || !email.checkValidity()) {
            alert('Email sai định dạng');
            email.focus();
            event.preventDefault();
            return false;
        }

        // Validate Mã số thuế, ít nhất 6 ký tự
        var taxNumber = document.getElementById('taxNumber');
        var taxRegex = /^[0-9a-zA-Z]{6,}$/; // giả sử mã số thuế tối thiểu 6 ký tự
        if (!taxRegex.test(taxNumber.value)) {
            alert('Hãy nhập đầy đủ mã số thuế');
            taxNumber.focus();
            event.preventDefault();
            return false;
        }
        // Nếu tất cả các điều kiện trên đều đúng, form sẽ được submit
        return true;
    });
</script>

<?php get_footer() ?>