@extends('layouts.master')

<style>
    #bgVideo {
    position: absolute;
    top: 60%; /* 80% se badal kar 50% kar dein */
    left: 50%; /* 55% se badal kar 50% kar dein */
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1;
    transform: translate(-50%, -50%);
    object-fit: cover;
    display: block !important;
}
    .section.contact {
        position: relative;
        overflow: hidden;
        min-height: 100vh;
        background: transparent !important;
        padding-top: 100px;
        padding-bottom: 50px;
    }

    /* Selection Buttons Style */
    .role-selection {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 30px;
        margin-top: 10%;
    }

    .role-btn {
        padding: 15px 30px;
        font-size: 18px;
        font-weight: bold;
        border-radius: 50px;
        border: 2px solid #f5a425;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        cursor: pointer;
        transition: 0.3s;
        backdrop-filter: blur(5px);
    }

    .role-btn.active, .role-btn:hover {
        background: #f5a425;
        color: #1a233b;
        box-shadow: 0px 0px 20px rgba(245, 164, 37, 0.5);
    }

    .google-form-wrapper {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        padding: 20px;
        border-radius: 25px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0px 15px 35px rgba(0,0,0,0.5);
        display: none; /* Pehle se hide rahega */
    }
</style>

@section('content')
<section class="section contact">
    <video autoplay muted loop playsinline id="bgVideo">
        <source src="{{ asset('assets/frontend/images/login-bg.mp4') }}" type="video/mp4">
    </video>
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4); z-index: 0;"></div>

    <div class="container" style="position: relative; z-index: 1;">
        <div class="text-center" style="margin-bottom: 30px;">
            <h2 style="color: #f5a425; text-shadow: 2px 2px 15px rgba(0,0,0,0.9);">
                Join Our <em style="color: #fff; font-style: normal;">Community</em>
            </h2>
            <p style="color: white; margin-top: 10px;">Please select your role to continue registration</p>
        </div>

        <div class="role-selection">
            <button class="role-btn" onclick="showForm('student', this)">Register as Student</button>
            <button class="role-btn" onclick="showForm('teacher', this)">Register as Teacher</button>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div id="student-form" class="google-form-wrapper">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdwCIaUe23B_wRfBqj7RiqW7b_rbVFTRHiJUTHPZoIo38wWRA/viewform?embedded=true"
                            width="100%" height="800" frameborder="0">Loading…</iframe>
                </div>
                <div id="teacher-form" class="google-form-wrapper">
                    <div class="teacher-redirect-box">
                        <h3 style="color: #f5a425; margin-bottom: 15px;">Teacher Application</h3>
                        <p style="color: #d8db20;  margin-bottom: 25px; font-size: 16px;">To upload your CV and certificates, Google requires you to fill the form directly on their platform.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfzJT4SrMgVC-5ElBJYdSBbB6wljn_v8Q9pGC-ybFjyph1Uhg/viewform"
                           target="_blank"
                           class="role-btn active">
                           CLICK HERE TO OPEN FORM
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function showForm(role, btn) {
        // Sab forms hide karein
        document.getElementById('student-form').style.display = 'none';
        document.getElementById('teacher-form').style.display = 'none';

        // Sab buttons se active class hatayein
        let buttons = document.querySelectorAll('.role-btn');
        buttons.forEach(b => b.classList.remove('active'));

        // Selected form dikhayein aur button active karein
        document.getElementById(role + '-form').style.display = 'block';
        btn.classList.add('active');

        // Form par focus karne ke liye thoda scroll karein
        window.scrollTo({
            top: btn.offsetTop + 100,
            behavior: 'smooth'
        });
    }
</script>
@endsection
