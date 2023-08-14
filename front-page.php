<?php
/*
*
* Template Name: Strona glowna
*
*/
?>

<?php get_header(); ?>



<main class="front-page">
    <div class="hero">
        <div class="background-overlay" style="background:url('<?php echo get_template_directory_uri(); ?>/src/img/laptop.png');">

        </div>
        <section class="giveaway">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="giveaway__desc">
                            <div class="giveaway__desc--top text-main--f48 strong--fw400 ">Enter to get free SentiOne premium account.</div>
                            <div class="giveaway__desc--bottom text-main--f24">This contest is open worldwide, please be sure to read the terms and conditions before entering.</div>
                        </div>
                    </div>
                    <div class="timer-box col-12">
                        <div class="event-timer">
                            <a class="sign-button" href="#">
                                <span>sign up to enter</span>
                            </a>
                            <div class="data">
                                <div class="data__insta">
                                    <div class="data__insta--top">follow</div>
                                    <div class="data__insta--bottom"><a class="insta-link" href="https://www.instagram.com/sentione/reels/?ref=Laciex" target="_blank">@sentione</a></div>
                                </div>
                                <div class="data__timer">
                                    <div class="data__timer--top">Giveaway Ends In</div>
                                    <div id="countdown" class="data__timer--bottom">
                                        <div class="countdown-block">
                                            <span id="days"></span><span class="timer-text">days</span>
                                        </div>
                                        <div class="semicolon">:</div>
                                        <div class="countdown-block">
                                            <span id="hours"></span><span class="timer-text">hours</span>
                                        </div>
                                        <div class="semicolon">:</div>
                                        <div class="countdown-block">
                                            <span id="minutes"></span><span class="timer-text">mins</span>
                                        </div>
                                        <div class="semicolon">:</div>
                                        <div class="countdown-block">
                                            <span id="seconds"></span><span class="timer-text">secs</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="data__ending">
                                    <div class="data__ending--top">ends</div>
                                    <div class="data__ending--bottom" >20 Sep 2023</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
