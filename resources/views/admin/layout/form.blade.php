<form action="{{ route('contact.submit') }}" method="post" role="form" class="php-email-form">
    @csrf
    <div class="row">
        <div class="form-group col-md-6">
            <label for="name">نام</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group col-md-6">
            <label for="name">ایمیل</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
    </div>
    <div class="form-group">
        <label for="name">موضوع</label>
        <input type="text" class="form-control" name="subject" id="subject" required>
    </div>
    <div class="form-group">
        <label for="name">پیام</label>
        <textarea class="form-control" name="message" rows="10" required></textarea>
    </div>
    <div class="my-3">
        <div class="loading">درحال ارسال</div>
        <div class="error-message"></div>
        <div class="sent-message">پیام شما با موفقیت ارسال شد</div>
    </div>
    <div class="text-center"><button type="submit">ارسال</button></div>
</form>

