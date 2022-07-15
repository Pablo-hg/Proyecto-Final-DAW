@extends('layouts.app')

@section('content')
    <div class="container bg-transparent tercera">
        <div class="row align-items-center justify-content-center titulo">
            <div class="fullstack text-center text-white col-sm-6 mt-3 fw-bold">
                <h2 class="fw-bold">Get in touch</h2>
                <p class="fs-5">
                    If you wanna get in touch, talk to me about a project collaboration or just say hi,
                    fill up the awesome form below.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2 mb-6">
            <!-- FORMLARIO -->
            <div class="col-sm-6">
                @if (!isset($_SESSION['formulario']))
                    @csrf
                    <form method="POST" action="{{route('contact')}}">
                        <!-- NAME Y EMAIL -->
                        <div class="row mb-4 justify-content-center">
                            <div class="col-sm-5 name input-effect">
                                    <input class="effect-20" type="text" placeholder="" name="name" required="">
                                    <label>Name</label>
                                    <span class="focus-border">
                                        <i></i>
                                    </span>
                                </div>
                            <div class="col-sm-5 email input-effect">
                                    <input class="effect-20" type="text" placeholder="" name="email" required="">
                                    <label>Email</label>
                                    <span class="focus-border">
                                        <i></i>
                                    </span>
                                </div>
                        </div>
                        <!-- ASUNTO -->
                        <div class="row my-4 justify-content-center">
                            <div class="col-sm-10 subject input-effect">
                                <input class="effect-20" type="text" placeholder="" name="subject" required="">
                                <label>Subject</label>
                                <span class="focus-border">
                                    <i></i>
                                </span>
                            </div>
                        </div>
                        <!-- TEXTO -->
                        <div class="row my-4 justify-content-center">
                            <div class="col-sm-12 input-effect message">
                                <textarea class="effect-20" rows="3" placeholder="" name="msg" required=""></textarea>
                                    <label>Message</label>
                                    <span class="focus-border">
                                            <i></i>
                                    </span>
                            </div>
                        </div>
                        <!-- BT-SUBMIT -->
                        <div class="row justify-content-center my-3">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary" name="enviar">Send Message</button>
                                </div>
                            </div>
                    </form>
                @else
                    <p>An email has been sent with your data. As soon as I can I will answer you.<br> If you want more information, contact
                        <a href="mailto:pablohg.contact@gmail.com" target="_blank" class="text-decoration-none">pablohg.contact@gmail.com</a>.
                    </p>
                    {{ Html::image('img/thankyou.gif', 'gif',['class'=>'w-50']) }}
                @endif
            </div>
            <!-- MAPA -->
            <div class="col-sm-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24360.139444565382!2d-3.72410760079517!3d40.25314393371316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd421f7eeb9cb5c9%3A0xf04b96d431c00e1!2s28320%20Pinto%2C%20Madrid!5e0!3m2!1ses!2ses!4v1653406539275!5m2!1ses!2ses" width="100%" height="100%" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </div>
    </div>
    <!-- script para el efecto de los inputs -->
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection
