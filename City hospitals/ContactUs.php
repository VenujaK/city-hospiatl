<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta charset="UTF-8" />
    <title>Contact Us</title>

    <link href="https://unpkg.com/cirrus-ui" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href=".CSS/ContactUs.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>

<body>
<?php @include('./Components/header.php');?>
    <div class="hero fullscreen">
        <div class="hero-body">
            <div style="margin: auto">
                <form class="frame p-0" method="post">
                    <div class="frame__body p-0">
                        <div class="row p-0 level fill-height">
                            <div class="col">
                                <div class="space xlarge"></div>
                                <div class="padded">
                                    <h1 class="u-text-center u-font-alt">Contact Us</h1>
                                    <div class="divider"></div>
                                    <p class="u-text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="divider"></div>

                                    <div class="form-group">
                                        <label class="form-group-label">
                                            <span class="icon">
                                                <i class="fa-wrapper far fa-user"></i>
                                            </span>
                                        </label>
                                        <input type="text" class="form-group-input" placeholder="Enter your name" />
                                    </div>

                                    <div class="form-group">
                                        <label class="form-group-label">
                                            <span class="icon">
                                                <i class="fa-wrapper far fa-envelope"></i>
                                            </span>
                                        </label>
                                        <input type="email" class="form-group-input" placeholder="Enter your email" />
                                    </div>

                                    <div class="form-section section-inline">
                                        <div class="section-body row">
                                            <div class="form-group col-6 pl-0">
                                                <label class="form-group-label">
                                                    <span class="icon">
                                                        <i class="fa-wrapper far fa-calendar"></i>
                                                    </span>
                                                </label>
                                                <input type="date" class="form-group-input"
                                                    placeholder="Enter your birthday (or not)" />
                                            </div>
                                            <div class="form-group col-6 pr-0">
                                                <label class="form-group-label">
                                                    <span class="icon">
                                                        <i class="fa-wrapper fas fa-list"></i>
                                                    </span>
                                                </label>
                                                <select class="select form-group-input" placeholder="Choose one">
                                                    <option>Bug Report</option>
                                                    <option>Feature Request</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <textarea placeholder="Tell us what's wrong"></textarea>

                                    <div class="form-ext-control form-ext-checkbox">
                                        <input id="check1" class="form-ext-input" type="checkbox">
                                        <label class="form-ext-label" for="check1">Send me a copy.</label>
                                    </div>

                                    <div class="space"></div>

                                    <div class="btn-group u-pull-right">
                                        <button class="btn-info">Send</button>
                                    </div>

                                </div>
                                <div class="space xlarge"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php @include('./Components/footer.php');?>
</body>

</html>