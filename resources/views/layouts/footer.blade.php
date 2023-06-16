<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fab fa-slack"></i>
                        <div class="cta-text">
                            <h4>{{ trans('mainpage.slack') }}</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>{{ trans('mainpage.call') }}</h4>
                            <span>669226433</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>{{ trans('mainpage.mail') }} </h4>
                            <span>arkadiuszjanholub@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-text">
                            <p>{{ trans('mainpage.about') }}</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>{{ trans('mainpage.media') }}</span>
                            <a href="https://www.facebook.com/profile.php?id=100003682641168"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-slack twitter-bg"></i></a>
                            <a href="https://github.com/Irchasos?tab=repositories"><i class="fab fa-github google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>{{ trans('mainpage.useful_links') }}</h3>
                        </div>
                        <ul>
                            <li><a href="#">{{ trans('mainpage.home') }}</a></li>
                            <li><a href="#">{{ trans('mainpage.portfolio') }}</a></li>
                            <li><a href="https://trello.com/invite/b/S1rFXjpo/fbe7a88a232507be168974a7e1336a11/starwarsapp">{{ trans('mainpage.trello') }}</a></li>
                            <li><a href="#">{{ trans('mainpage.invoice') }}</a></li>
                            <li><a href="#">{{ trans('mainpage.storage') }} </a></li>
                            <li><a href="#">{{ trans('mainpage.blog') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>{{ trans('mainpage.message') }}</h3>
                        </div>
                        <div class="footer-text mb-25"></div>
                        <div class="subscribe-form">
                            <form action="{{ route('sendSlackMessage') }}" method="POST">
                                @csrf
                                <input type="text" name="message" placeholder="{{ trans('mainpage.message') }}">
                                <button type="submit"><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
