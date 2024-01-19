<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function submitForm(Request $request)
    {
        // اعتبارسنجی فرم اطلاعات درخواستی

        // ارسال ایمیل
        $data = $request->all();
        Mail::to('hossein41052@gmail.com')->send(new ContactFormMail($data));

        // موفقیت فرآیند
        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
    }



    public function getLocation(Request $request)
    {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        // الان $latitude و $longitude مقادیر لوکیشن از URL هستند
        // می‌توانید این اطلاعات را برای هرکاری که نیاز دارید، مانند ذخیره در دیتابیس، استفاده کنید.

        return view('admin.index', compact('latitude', 'longitude'));
    }
}
