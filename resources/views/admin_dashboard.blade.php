<!doctype html>
<html lang="en">
<title>Equrban - Admin Dashboard</title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{asset('icofont/icofont.min.css')}}">
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
    rel="stylesheet"
    />
    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"
    ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#btnSubmit').click(function() {
                $('#logout').submit();
            });

        });
    </script>

    <style>
        body{
    background:#F0F8FF;
}
.card {
    margin-bottom: 1.5rem;
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #e5e9f2;
    border-radius: .2rem;
}
.card-header:first-child {
    border-radius: calc(.2rem - 1px) calc(.2rem - 1px) 0 0;
}

.card-header {
    border-bottom-width: 1px;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    color: inherit;
    background-color: #fff;
    border-bottom: 1px solid #e5e9f2;
}
svg:not(:root).svg-inline--fa {
    overflow: visible;
}

.svg-inline--fa.fa-fw {
    width: 1.25em;
}

.svg-inline--fa.fa-w-16 {
    width: 1em;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
.thumb-lg {
    height: 88px;
    width: 88px;
}
.profile-user-box {
    position: relative;
    border-radius: 5px
}
.bg-custom {
    background-color: #02c0ce!important;
}
.profile-user-box {
    position: relative;
    border-radius: 5px;
}

.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}
.inbox-widget .inbox-item img {
    width: 40px;
}

.inbox-widget .inbox-item {
    border-bottom: 1px solid #f3f6f8;
    overflow: hidden;
    padding: 10px 0;
    position: relative
}

.inbox-widget .inbox-item .inbox-item-img {
    display: block;
    float: left;
    margin-right: 15px;
    width: 40px
}

.inbox-widget .inbox-item img {
    width: 40px
}

.inbox-widget .inbox-item .inbox-item-author {
    color: #313a46;
    display: block;
    margin: 0
}

.inbox-widget .inbox-item .inbox-item-text {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0
}

.inbox-widget .inbox-item .inbox-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 12px
}

.comment-list .comment-box-item {
    position: relative
}

.comment-list .comment-box-item .commnet-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 2px
}

.comment-list .comment-box-item .commnet-item-msg {
    color: #313a46;
    display: block;
    margin: 10px 0;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px
}

.comment-list .comment-box-item .commnet-item-user {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0
}

.comment-list a+a {
    margin-top: 15px;
    display: block
}

.ribbon-box .ribbon-primary {
    background: #2d7bf4;
}

.ribbon-box .ribbon {
    position: relative;
    float: left;
    clear: both;
    padding: 5px 12px 5px 12px;
    margin-left: -30px;
    margin-bottom: 15px;
    font-family: Rubik,sans-serif;
    -webkit-box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    -o-box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    box-shadow: 2px 5px 10px rgba(49,58,70,.15);
    color: #fff;
    font-size: 13px;
}
.text-custom {
    color: #02c0ce!important;
}

.badge-custom {
    background: #02c0ce;
    color: #fff;
}
.badge {
    font-family: Rubik,sans-serif;
    -webkit-box-shadow: 0 0 24px 0 rgba(0,0,0,.06), 0 1px 0 0 rgba(0,0,0,.02);
    box-shadow: 0 0 24px 0 rgba(0,0,0,.06), 0 1px 0 0 rgba(0,0,0,.02);
    padding: .35em .5em;
    font-weight: 500;
}
.text-muted {
    color: #98a6ad!important;
}

.font-13 {
    font-size: 13px!important;
}
.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    margin-bottom: 30px;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}
.l-bg-cherry {
    background: linear-gradient(to right, #493240, #f09) !important;
    color: #fff;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #373b44, #4286f4) !important;
    color: #fff;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #0a504a, #38ef7d) !important;
    color: #fff;
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #a86008, #ffba56) !important;
    color: #fff;
}

.card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.card .card-statistic-3 .card-icon {
    text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -5px;
    top: 20px;
    opacity: 0.1;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

.l-bg-green {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
    color: #fff;
}

.l-bg-orange {
    background: linear-gradient(to right, #f9900e, #ffba56) !important;
    color: #fff;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}
a {
    color: #f96332;
}
.m-t-5{
    margin-top: 5px;
}
.card {
    background: #fff;
    margin-bottom: 30px;
    transition: .5s;
    border: 0;
    border-radius: .1875rem;
    display: inline-block;
    position: relative;
    width: 100%;
    box-shadow: none;
}
.card .body {
    font-size: 14px;
    color: #424242;
    padding: 20px;
    font-weight: 400;
}
.profile-page .profile-header {
    position: relative
}

.profile-page .profile-header .profile-image img {
    border-radius: 50%;
    width: 140px;
    border: 3px solid #fff;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23)
}

.profile-page .profile-header .social-icon a {
    margin: 0 5px
}

.profile-page .profile-sub-header {
    min-height: 60px;
    width: 100%
}

.profile-page .profile-sub-header ul.box-list {
    display: inline-table;
    table-layout: fixed;
    width: 100%;
    background: #eee
}

.profile-page .profile-sub-header ul.box-list li {
    border-right: 1px solid #e0e0e0;
    display: table-cell;
    list-style: none
}

.profile-page .profile-sub-header ul.box-list li:last-child {
    border-right: none
}

.profile-page .profile-sub-header ul.box-list li a {
    display: block;
    padding: 15px 0;
    color: #424242
}
.profile-card{
  background: linear-gradient(to bottom, rgba(39,170,225,.8), rgba(28,117,188,.8));
  background-size: cover;
  width: 100%;
  min-height: 90px;
  border-radius: 4px;
  padding: 10px 20px;
  color: #fff;
  margin-bottom: 40px;
}

.profile-card img.profile-photo{
  border: 7px solid #fff;
  float: left;
  margin-right: 20px;
  position: relative;
  top: -30px;
  height: 70px;
  width: 70px;
  border-radius: 50%;
}

.profile-card h5 a{
  font-size: 15px;
}

.profile-card a{
  font-size: 12px;
}

/*Newsfeed Links CSS*/

ul.nav-news-feed{
  padding-left: 20px;
  padding-right: 20px;
  margin: 0 0 40px 0;
    background:#fff;
  padding-top:20px;
}

ul.nav-news-feed li{
  list-style: none;
  display: block;
  padding: 15px 0;
}

ul.nav-news-feed li div{
  position: relative;
  margin-left: 30px;
  }

ul.nav-news-feed li div::after{
  content: "";
  width: 100%;
  height: 1px;
  border-top: 1px solid #f1f2f2;
  position: absolute;
  bottom: -15px;
  left: 0;
}

ul.nav-news-feed li a{color: #6d6e71;}

ul.nav-news-feed li i{
  font-size: 18px;
  margin-right: 15px;
  float: left;
}

ul.nav-news-feed i.icon1{color: #8dc63f;}

ul.nav-news-feed i.icon2{color: #662d91;}

ul.nav-news-feed i.icon3{color: #ee2a7b;}

ul.nav-news-fee i.icon4{color: #f7941e;}

ul.nav-news-fee i.con5{color: #1c75bc;}

ul.nav-news-feed i.icon6{color: #9e1f63;}

/*Chat Block CSS*/

#chat-block{
  margin: 0 0 40px 0;
  text-align: center;
  background:#fff;
  padding-top:20px;
}

#chat-block .title{
  background: #8dc63f;
  padding: 2px 20px;
  width: 70%;
  height: 30px;
  border-radius: 15px;
  position: relative;
  margin: 0 auto 20px;
  color: #fff;
  font-size: 14px;
  font-weight: 600;
}

ul.online-users{
  padding-left: 20px;
  padding-right: 20px;
  text-align: center;
  margin: 0;
}

ul.online-users li{
  list-style: none;
  position: relative;
  margin: 3px auto !important;
  padding-left: 2px;
  padding-right: 2px;
}

ul.online-users li span.online-dot{
  background: linear-gradient(to bottom, rgba(141,198,63, 1), rgba(0,148,68, 1));
  border: none;
  height: 12px;
  width: 12px;
  border-radius: 50%;
  position: absolute;
  bottom: -6px;
  border: 2px solid #fff;
  left: 0;
  right: 0;
  margin: auto;
}

img.profile-photo {
    height: 58px;
    width: 58px;
    border-radius: 50%;
}

ul.online-users {
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    margin: 0;
}

.list-inline {
    padding-left: 0;
    margin-left: -5px;
    list-style: none;
}

.list-inline>li {
    display: inline-block;
    padding-right: 5px;
    padding-left: 5px;
}

.text-white {
    color: #fff;
}



.single-price {
  text-align: center;
  background: #262626;
  transition: .7s;
  margin-top: 12px;
  margin-bottom: 40px;
}
.single-price h3 {
  font-size: 25px;
  color: #000;
  font-weight: 600;
  text-align: center;
  margin: 0;
  margin-top: -80px;
  font-family: poppins;
  color: #fff;
}
.single-price h4 {
  font-size: 48px;
  font-weight: 500;
  color: #fff;
}
.single-price h4 span.sup {
  vertical-align: text-top;
  font-size: 25px;
}
.deal-top {
  position: relative;
  background: #16A086;
  font-size: 16px;
  text-transform: uppercase;
  padding: 100px 24px 0;
}
.deal-top::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -50px;
  width: 0;
  height: 0;
  border-top: 50px solid #16A086;
  border-left: 175px solid transparent;
  border-right: 183px solid transparent;
}
.deal-bottom {
  padding: 35px 16px 0;
}
.deal-bottom ul {
  margin: 0;
  padding: 0;
}
.deal-bottom  ul li {
  font-size: 16px;
  color: #fff;
  font-weight: 300;
  margin-top: 16px;
  border-top: 1px solid #E4E4E4;
  padding-top: 16px;
  list-style: none;
}

.btn-area button {
  display: inline-block;
  font-size: 18px;
  color: #fff;
  background: #16A086;
  padding: 8px 64px;
  margin-top: 32px;
  border-radius: 4px;
  margin-bottom: 40px;
  text-transform: uppercase;
  font-weight: bold;
  text-decoration: none;
}

.btn-tetapan button {
  display: inline-block;
  font-size: 15px;
  color: #fff;
  background: #16A086;
  padding: 5px 10px;
  margin-top: 5px;
  border-radius: 4px;
  text-transform: uppercase;
  text-decoration: none;
}

.single-price:hover {
  background: #16A086;
}
.single-price:hover .deal-top {
  background: #262626;
}
.single-price:hover .deal-top:after {
  border-top: 50px solid #262626;
}

.single-price:hover .btn-area button {
  background: #262626;
}



.navbar .nav-item:not(:last-child) {
  margin-right: 35px;
}

.dropdown-toggle::after {
   transition: transform 0.15s linear;
}

.show.dropdown .dropdown-toggle::after {
  transform: translateY(3px);
}

.dropdown-menu {
  margin-top: 0;
}

.reset-style, .reset-style * {
        all: revert;
    }


.site-footer {
    padding-top: 72px;
    background-color: #374250;
}
@media (max-width: 768px) {
    .site-footer {
        padding-top: 48px;
    }
}
.footer-copyright {
    margin: 0;
    padding-top: 10px;
    padding-bottom: 24px;
    color: rgba(255, 255, 255, 0.5);
    font-size: 14px;
    font-weight: normal;
}
.footer-copyright > a {
    transition: color 0.25s;
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.footer-copyright > a:hover {
    color: #0da9ef;
}
.footer-light {
    background-color: #f5f5f5;
}
.footer-light .footer-copyright {
    color: #9da9b9;
}
.footer-light .footer-copyright > a {
    color: #9da9b9;
}
.footer-light .footer-copyright > a:hover {
    color: #0da9ef;
}
img, figure {
    max-width: 100%;
    height: auto;
    vertical-align: middle;
}

.widget-light-skin .widget-title {
    border-color: rgba(255, 255, 255, 0.12);
    color: rgba(255, 255, 255, 0.5);
}
.widget-light-skin.widget-categories ul > li::before,
.widget-light-skin.widget-links ul > li::before {
    color: rgba(255, 255, 255, 0.15);
}
.widget-light-skin.widget-categories ul > li > a,
.widget-light-skin.widget-links ul > li > a {
    color: #fff;
}
.widget-light-skin.widget-categories ul > li > a:hover,
.widget-light-skin.widget-links ul > li > a:hover {
    color: #0da9ef;
}
.widget-light-skin.widget-categories ul > li.active > a,
.widget-light-skin.widget-links ul > li.active > a {
    color: #0da9ef;
}
.widget-light-skin.widget-categories ul > li > span,
.widget-light-skin.widget-links ul > li > span {
    color: rgba(255, 255, 255, 0.5);
}
.widget-light-skin.widget-featured-posts > .entry .entry-title > a,
.widget-light-skin.widget-featured-products > .entry .entry-title > a {
    color: #fff;
}
.widget-light-skin.widget-featured-posts > .entry .entry-title > a:hover,
.widget-light-skin.widget-featured-products > .entry .entry-title > a:hover {
    color: #0da9ef;
}
.widget-light-skin.widget-featured-posts > .entry .entry-meta,
.widget-light-skin.widget-featured-products > .entry .entry-meta {
    color: rgba(255, 255, 255, 0.5);
}
.widget-light-skin .tag {
    border-color: rgba(255, 255, 255, 0.12);
    color: #fff !important;
}
.widget-light-skin .tag:hover {
    background-color: #f5f5f5;
    color: #606975 !important;
}
.widget-light-skin .tag.active {
    border-color: #0da9ef;
    background-color: #0da9ef;
    color: #fff !important;
}


.widget-title {
    margin-bottom: 20px;
    padding-bottom: 12px;
    border-bottom: 1px solid #e1e7ec;
    color: #9da9b9;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
}

.widget-title-download {
    margin-bottom: 12px;
    padding-bottom: 8px;
    color: #9da9b9;
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    float: left;
}

.market-button {
    display: inline-block;
    margin-right: 14px;
    margin-bottom: 14px;
    padding: 5px 14px 5px 45px;
    transition: background-color 0.3s;
    border: 1px solid #e4e4e4;
    border-radius: 5px;
    background-position: center left 12px;
    background-color: #fff;
    background-size: 24px 24px;
    background-repeat: no-repeat;
    text-decoration: none;
}
.market-button:hover {
    background-color: #f5f5f5;
}
.market-button .mb-subtitle {
    display: block;
    margin-bottom: -4px;
    color: #9da9b9;
    font-size: 12px;
}
.market-button .mb-title {
    display: block;
    color: #606975;
    font-size: 18px;
}
.market-button.apple-button {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDUgMzA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDUgMzA1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF8yMjhfIj4KCTxwYXRoIGlkPSJYTUxJRF8yMjlfIiBkPSJNNDAuNzM4LDExMi4xMTljLTI1Ljc4NSw0NC43NDUtOS4zOTMsMTEyLjY0OCwxOS4xMjEsMTUzLjgyQzc0LjA5MiwyODYuNTIzLDg4LjUwMiwzMDUsMTA4LjIzOSwzMDUgICBjMC4zNzIsMCwwLjc0NS0wLjAwNywxLjEyNy0wLjAyMmM5LjI3My0wLjM3LDE1Ljk3NC0zLjIyNSwyMi40NTMtNS45ODRjNy4yNzQtMy4xLDE0Ljc5Ny02LjMwNSwyNi41OTctNi4zMDUgICBjMTEuMjI2LDAsMTguMzksMy4xMDEsMjUuMzE4LDYuMDk5YzYuODI4LDIuOTU0LDEzLjg2MSw2LjAxLDI0LjI1Myw1LjgxNWMyMi4yMzItMC40MTQsMzUuODgyLTIwLjM1Miw0Ny45MjUtMzcuOTQxICAgYzEyLjU2Ny0xOC4zNjUsMTguODcxLTM2LjE5NiwyMC45OTgtNDMuMDFsMC4wODYtMC4yNzFjMC40MDUtMS4yMTEtMC4xNjctMi41MzMtMS4zMjgtMy4wNjZjLTAuMDMyLTAuMDE1LTAuMTUtMC4wNjQtMC4xODMtMC4wNzggICBjLTMuOTE1LTEuNjAxLTM4LjI1Ny0xNi44MzYtMzguNjE4LTU4LjM2Yy0wLjMzNS0zMy43MzYsMjUuNzYzLTUxLjYwMSwzMC45OTctNTQuODM5bDAuMjQ0LTAuMTUyICAgYzAuNTY3LTAuMzY1LDAuOTYyLTAuOTQ0LDEuMDk2LTEuNjA2YzAuMTM0LTAuNjYxLTAuMDA2LTEuMzQ5LTAuMzg2LTEuOTA1Yy0xOC4wMTQtMjYuMzYyLTQ1LjYyNC0zMC4zMzUtNTYuNzQtMzAuODEzICAgYy0xLjYxMy0wLjE2MS0zLjI3OC0wLjI0Mi00Ljk1LTAuMjQyYy0xMy4wNTYsMC0yNS41NjMsNC45MzEtMzUuNjExLDguODkzYy02LjkzNiwyLjczNS0xMi45MjcsNS4wOTctMTcuMDU5LDUuMDk3ICAgYy00LjY0MywwLTEwLjY2OC0yLjM5MS0xNy42NDUtNS4xNTljLTkuMzMtMy43MDMtMTkuOTA1LTcuODk5LTMxLjEtNy44OTljLTAuMjY3LDAtMC41MywwLjAwMy0wLjc4OSwwLjAwOCAgIEM3OC44OTQsNzMuNjQzLDU0LjI5OCw4OC41MzUsNDAuNzM4LDExMi4xMTl6IiBmaWxsPSIjMmUyZTJlIi8+Cgk8cGF0aCBpZD0iWE1MSURfMjMwXyIgZD0iTTIxMi4xMDEsMC4wMDJjLTE1Ljc2MywwLjY0Mi0zNC42NzIsMTAuMzQ1LTQ1Ljk3NCwyMy41ODNjLTkuNjA1LDExLjEyNy0xOC45ODgsMjkuNjc5LTE2LjUxNiw0OC4zNzkgICBjMC4xNTUsMS4xNywxLjEwNywyLjA3MywyLjI4NCwyLjE2NGMxLjA2NCwwLjA4MywyLjE1LDAuMTI1LDMuMjMyLDAuMTI2YzE1LjQxMywwLDMyLjA0LTguNTI3LDQzLjM5NS0yMi4yNTcgICBjMTEuOTUxLTE0LjQ5OCwxNy45OTQtMzMuMTA0LDE2LjE2Ni00OS43N0MyMTQuNTQ0LDAuOTIxLDIxMy4zOTUtMC4wNDksMjEyLjEwMSwwLjAwMnoiIGZpbGw9IiMyZTJlMmUiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
}
.market-button.google-button {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBvbHlnb24gc3R5bGU9ImZpbGw6IzVDREFERDsiIHBvaW50cz0iMjkuNTMsMCAyOS41MywyNTEuNTA5IDI5LjUzLDUxMiAyOTkuMDA0LDI1MS41MDkgIi8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNCREVDQzQ7IiBwb2ludHM9IjM2OS4wNjcsMTgwLjU0NyAyNjIuMTc1LDExOS40NjcgMjkuNTMsMCAyOTkuMDA0LDI1MS41MDkgIi8+Cjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNEQzY4QTE7IiBwb2ludHM9IjI5LjUzLDUxMiAyOS41Myw1MTIgMjYyLjE3NSwzODMuNTUxIDM2OS4wNjcsMzIyLjQ3IDI5OS4wMDQsMjUxLjUwOSAiLz4KPHBhdGggc3R5bGU9ImZpbGw6I0ZGQ0E5NjsiIGQ9Ik0zNjkuMDY3LDE4MC41NDdsLTcwLjA2Myw3MC45NjFsNzAuMDYzLDcwLjk2MWwxMDguNjg4LTYyLjg3N2M2LjI4OC0zLjU5Myw2LjI4OC0xMS42NzcsMC0xNS4yNyAgTDM2OS4wNjcsMTgwLjU0N3oiLz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
}
.market-button.windows-button {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDQ4MCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ4MCA0ODA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPGc+Cgk8cGF0aCBkPSJNMC4xNzYsMjI0TDAuMDAxLDY3Ljk2M2wxOTItMjYuMDcyVjIyNEgwLjE3NnogTTIyNC4wMDEsMzcuMjQxTDQ3OS45MzcsMHYyMjRIMjI0LjAwMVYzNy4yNDF6IE00NzkuOTk5LDI1NmwtMC4wNjIsMjI0ICAgbC0yNTUuOTM2LTM2LjAwOFYyNTZINDc5Ljk5OXogTTE5Mi4wMDEsNDM5LjkxOEwwLjE1Nyw0MTMuNjIxTDAuMTQ3LDI1NmgxOTEuODU0VjQzOS45MTh6IiBmaWxsPSIjMDBiY2YyIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
}
.market-button.facebook-button {
    background-image: url(https://img.icons8.com/external-justicon-flat-justicon/344/external-facebook-social-media-justicon-flat-justicon.png);
}

.market-button.mb-light-skin {
    border-color: rgba(255, 255, 255, 0.12);
    background-color: transparent;
}
.market-button.mb-light-skin .mb-subtitle,
.market-button.mb-light-skin .mb-title {
    color: #fff;
}
.market-button.mb-light-skin .mb-subtitle {
    opacity: 0.55;
}
.market-button.mb-light-skin:hover {
    background-color: rgba(255, 255, 255, 0.06);
}
.market-button.mb-light-skin.apple-button {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDUgMzA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAzMDUgMzA1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnIGlkPSJYTUxJRF8yMjhfIj4KCTxwYXRoIGlkPSJYTUxJRF8yMjlfIiBkPSJNNDAuNzM4LDExMi4xMTljLTI1Ljc4NSw0NC43NDUtOS4zOTMsMTEyLjY0OCwxOS4xMjEsMTUzLjgyQzc0LjA5MiwyODYuNTIzLDg4LjUwMiwzMDUsMTA4LjIzOSwzMDUgICBjMC4zNzIsMCwwLjc0NS0wLjAwNywxLjEyNy0wLjAyMmM5LjI3My0wLjM3LDE1Ljk3NC0zLjIyNSwyMi40NTMtNS45ODRjNy4yNzQtMy4xLDE0Ljc5Ny02LjMwNSwyNi41OTctNi4zMDUgICBjMTEuMjI2LDAsMTguMzksMy4xMDEsMjUuMzE4LDYuMDk5YzYuODI4LDIuOTU0LDEzLjg2MSw2LjAxLDI0LjI1Myw1LjgxNWMyMi4yMzItMC40MTQsMzUuODgyLTIwLjM1Miw0Ny45MjUtMzcuOTQxICAgYzEyLjU2Ny0xOC4zNjUsMTguODcxLTM2LjE5NiwyMC45OTgtNDMuMDFsMC4wODYtMC4yNzFjMC40MDUtMS4yMTEtMC4xNjctMi41MzMtMS4zMjgtMy4wNjZjLTAuMDMyLTAuMDE1LTAuMTUtMC4wNjQtMC4xODMtMC4wNzggICBjLTMuOTE1LTEuNjAxLTM4LjI1Ny0xNi44MzYtMzguNjE4LTU4LjM2Yy0wLjMzNS0zMy43MzYsMjUuNzYzLTUxLjYwMSwzMC45OTctNTQuODM5bDAuMjQ0LTAuMTUyICAgYzAuNTY3LTAuMzY1LDAuOTYyLTAuOTQ0LDEuMDk2LTEuNjA2YzAuMTM0LTAuNjYxLTAuMDA2LTEuMzQ5LTAuMzg2LTEuOTA1Yy0xOC4wMTQtMjYuMzYyLTQ1LjYyNC0zMC4zMzUtNTYuNzQtMzAuODEzICAgYy0xLjYxMy0wLjE2MS0zLjI3OC0wLjI0Mi00Ljk1LTAuMjQyYy0xMy4wNTYsMC0yNS41NjMsNC45MzEtMzUuNjExLDguODkzYy02LjkzNiwyLjczNS0xMi45MjcsNS4wOTctMTcuMDU5LDUuMDk3ICAgYy00LjY0MywwLTEwLjY2OC0yLjM5MS0xNy42NDUtNS4xNTljLTkuMzMtMy43MDMtMTkuOTA1LTcuODk5LTMxLjEtNy44OTljLTAuMjY3LDAtMC41MywwLjAwMy0wLjc4OSwwLjAwOCAgIEM3OC44OTQsNzMuNjQzLDU0LjI5OCw4OC41MzUsNDAuNzM4LDExMi4xMTl6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8cGF0aCBpZD0iWE1MSURfMjMwXyIgZD0iTTIxMi4xMDEsMC4wMDJjLTE1Ljc2MywwLjY0Mi0zNC42NzIsMTAuMzQ1LTQ1Ljk3NCwyMy41ODNjLTkuNjA1LDExLjEyNy0xOC45ODgsMjkuNjc5LTE2LjUxNiw0OC4zNzkgICBjMC4xNTUsMS4xNywxLjEwNywyLjA3MywyLjI4NCwyLjE2NGMxLjA2NCwwLjA4MywyLjE1LDAuMTI1LDMuMjMyLDAuMTI2YzE1LjQxMywwLDMyLjA0LTguNTI3LDQzLjM5NS0yMi4yNTcgICBjMTEuOTUxLTE0LjQ5OCwxNy45OTQtMzMuMTA0LDE2LjE2Ni00OS43N0MyMTQuNTQ0LDAuOTIxLDIxMy4zOTUtMC4wNDksMjEyLjEwMSwwLjAwMnoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K);
}
.market-button.mb-light-skin.blackberry-button {
    background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MDMuMzIyIDUwMy4zMjIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUwMy4zMjIgNTAzLjMyMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIyNHB4IiBoZWlnaHQ9IjI0cHgiPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0xMTYuMjg1LDYwLjc0Nkg0NS45OTNsLTIwLjgyNyw5NS40NThoNzMuNzYzYzU3LjI3NSwwLDczLjc2My0yOC42MzcsNzMuNzYzLTUzLjgwMyAgICBDMTczLjU1OSw4NC4xNzYsMTYyLjI3OCw2MC43NDYsMTE2LjI4NSw2MC43NDZ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNMjM4LjY0NCwzNDcuMTE5aC03MS4xNTlsLTE5Ljk1OSw5NS40NThoNzMuNzYzYzU3LjI3NSwwLDczLjc2My0yOC42MzcsNzMuNzYzLTUzLjgwMyAgICBDMjk1LjA1MSwzNzAuNTQ5LDI4NC42MzcsMzQ3LjExOSwyMzguNjQ0LDM0Ny4xMTl6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNOTEuMTE5LDE5OS41OTNIMTkuOTU5TDAsMjk1LjA1MWg3My43NjNjNTcuMjc1LDAsNzMuNzYzLTI4LjYzNyw3My43NjMtNTMuODAzICAgIEMxNDcuNTI1LDIyMy4wMjQsMTM3LjExMiwxOTkuNTkzLDkxLjExOSwxOTkuNTkzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTQyMC44ODEsMjk1LjA1MWgtNzEuMTU5bC0xOS45NTksODYuNzhoNzMuNzYzYzU3LjI3NSwwLDczLjc2My0yNC4yOTgsNzMuNzYzLTQ5LjQ2NCAgICBDNDc3LjI4OCwzMTQuMTQyLDQ2Ni44NzUsMjk1LjA1MSw0MjAuODgxLDI5NS4wNTF6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cGF0aCBkPSJNNDQ2LjkxNSwxNDcuNTI1aC03MS4xNTlsLTE5Ljk1OSw4Ni43OGg3My43NjNjNTcuMjc1LDAsNzMuNzYzLTI0LjI5OCw3My43NjMtNDkuNDY0ICAgIEM1MDMuMzIyLDE2Ni42MTcsNDkyLjkwOCwxNDcuNTI1LDQ0Ni45MTUsMTQ3LjUyNXoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KCTxnPgoJCTxwYXRoIGQ9Ik0yNjUuNTQ2LDE5OS41OTNoLTcxLjE1OWwtMTkuOTU5LDk1LjQ1OGg3My43NjNjNTcuMjc1LDAsNzMuNzYzLTI4LjYzNyw3My43NjMtNTMuODAzICAgIEMzMjIuODIsMjIzLjAyNCwzMTEuNTM5LDE5OS41OTMsMjY1LjU0NiwxOTkuNTkzeiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI5MS41OCw2MC43NDZIMjIwLjQybC0xOS45NTksOTUuNDU4aDczLjc2M2M1Ny4yNzUsMCw3My43NjMtMjguNjM3LDczLjc2My01My44MDMgICAgQzM0Ny45ODYsODQuMTc2LDMzNy41NzMsNjAuNzQ2LDI5MS41OCw2MC43NDZ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==);
}
.market-button.mb-light-skin.amazon-button {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2FpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0idXVpZDo1RDIwODkyNDkzQkZEQjExOTE0QTg1OTBEMzE1MDhDOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1QjFCQzQ2QjRGNkQxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1QjFCQzQ2QTRGNkQxMUU3OUY5REJEQzBGNkVBQUI5QiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo2QUM1ODJFMkIxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo2QUM1ODJFM0IxNEExMUUzQkY1NEUzQkNCRjlEODA1RSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4g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);
}
.market-button.mb-light-skin.facebook-button {
    background-image: url(https://img.icons8.com/external-justicon-flat-justicon/344/external-facebook-social-media-justicon-flat-justicon.png);
}

  </style>
  </head>
  <body style="min-height: 100vh">

     <!-- Header -->
     @include('admin_header')
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('success')}}
            </div>
          @endif
          @if (Session::has('fail'))
          <div class="alert alert-danger alert-dismissible fade show">{{Session::get('fail')}}</div>
          @endif
      <div class="row">
          <div class="col-md-4 col-xl-3">
              <div class="card mb-3">
                  <div class="card-header">
                      <h5 class="card-title mb-0">Profil Diri</h5>
                  </div>
                  <div class="card-body text-center">
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Marie Salter" class="img-fluid rounded-circle mb-2" width="128" height="128">
                      <h4 class="card-title mb-0">{{$adminID->nama_ajk}}</h4>
                      <div class="text-muted mb-2">{{$adminID->nama_jawatan}}</div>
                  </div>
                  <hr class="my-0">
                  <div class="list-unstyled mb-0">
                    <ul class="nav-news-feed">
                      <li><a href="manage_tempahan_korban"><i class="fas fa-sticky-note"></i><div>Tempahan Korban</div></a></li>
                      <li><a href="manage_tempahan_korban_jadual"><i class="fa fa-book icon2"></i><div>Jadual Sembelihan Kariah</div></a></li>
                      <li><a href="/manage_pengedar"><i class="fa fa-users icon3"></i><div>Maklumat Pengedar</div></a></li>
                      <li><a href="/manage_kariah"><i class="fa fa-comments icon4"></i><div>Maklumat Kariah</div></a></li>
                      {{-- <li><a href="#"><i class="fa fa-user icon5"></i><div>Profil Diri</div></a></li> --}}
                    </ul><!--news-feed links ends-->
                </div>
              </div>
          </div>

              <div class="col-md-8 col-xl-9">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                          <div class="d-flex justify-content-between px-md-1">
                            <div>
                              <h3 style="color: #009E60">{{$maklumat_korban[0]->kuantiti_lembu}}</h3>
                              <p class="mb-1">Tetapkan Bilangan Lembu Korban Bagi Hari Raya Korban 2023</p>
                              <div class="btn-tetapan">
                              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#kuantiti_lembu" style="background-color: #52B788">
                                Tetapan
                              </button>
                              </div>
                            </div>
                            <div class="align-self-center">
                              <i class="icofont-cow fa-8x me-4"  style="color: #52B788"></i>
                            </div>
                          </div>
                      </div>
                    </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-pattern">
                            <div class="card-body">
                                <div class="float-right">
                                    <i class="fa fa-file text h4 ml-3" ></i>
                                </div>
                                <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_jadual}}</h5>
                                <p class="text-muted mb-4">Tetapkan waktu sembelihan Kariah</p>
                                <div class="text-center">
                                    <a href="manage_tempahan_korban_jadual" class="text-muted mt-0">Tetapan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card bg-pattern">
                            <div class="card-body">
                                <div class="float-right">
                                    <i class="fa fa-file text h4 ml-3"></i>
                                </div>
                                <h5 class="font-size-20 mt-0 pt-1">{{$jumlah_tempahan}}</h5>
                                <p class="text-muted mb-3">Menjana Laporan Tempahan Korban</p>
                                <div class="text-center mt-4">
                                    <a href="manage_tempahan_korban" class="text-muted mb-0">Jana Laporan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pricing-area">
                      <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="single-price">
                            <div class="deal-top">
                              <h3>1 Bahagian</h3>
                              <h4><span>RM</span> {{$maklumat_korban[0]->harga_qurban_bahagian}} </h4>
                            </div>
                            <div class="deal-bottom">
                                <div class="image-thumb">
                                    <img src="{{URL::asset('/images/portion.png')}}" alt="" style="width: 180px; height: 200px;">
                                </div>
                              <div class="btn-area">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#bahagian_lembu">
                                    Tetap Harga
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="single-price">
                            <div class="deal-top">
                              <h3>1 Ekor</h3>
                              <h4><span>RM</span> {{$maklumat_korban[0]->harga_qurban_seekor}}</h4>
                            </div>
                            <div class="deal-bottom">
                                <div class="image-thumb">
                                    <img src="{{URL::asset('/images/cow.png')}}" alt="" style="width: 180px; height: 200px;">
                                </div>
                              <div class="btn-area">
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#seekor_lembu">
                                    Tetap Harga
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                  </div>

              <div class="card-box">
                  <div class="row">
                    <h4 class="col-lg-10 header-title mt-0 mb-3">Maklumat Pengedar</h4>
                    <a href="/manage_pengedar" class="col-lg-2">Lihat semua&nbsp;<i class="fas fa-angle-double-right"></i></a>
                  </div>

                <div class="container profile-page">
                  <div class="row ">
                    @foreach ($manage_pengedar->take(4) as $value)
                      <div class="col-xl-6 col-lg-7 col-md-12 ">
                          <div class="card profile-header ">
                              <div class="body ">
                                  <div class="row ">
                                      <div class="col-lg-4 col-md-4 col-12 d-flex align-items-stretch">
                                        @if(str_contains(strtolower($value->name), 'binti'))
                                            <div class="profile-image float-md-right"><img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt=""></div>
                                        @else
                                            <div class="profile-image float-md-right"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">  </div>
                                        @endif
                                      </div>
                                      <div class="col-lg-8 col-md-8 col-12">
                                          <h4 class="m-t-0 m-b-0">{{$value->name}}</h4>
                                          <span class="job_post">RM {{$value->harga_pengedar}}.00</span>
                                          <p>Unit Lembu : {{$value->available_unit}}</p>
                                          <div>
                                            @if($value -> whatsapp_status == 'Yes')
                                            <a href='https://wa.me/6{{$value->phone}}'><button href='https://wa.me/6{{$value->phone}}' class="btn btn-success btn-round btn-simple">WhatsApp&nbsp;&nbsp;<i class="fab fa-whatsapp fa-lg"></i></button></a>
                                            @else
                                            <button class="btn btn-round btn-simple" style="color:white ;background-color: #F5433F">Not Active&nbsp;&nbsp;<i class="fab fa-whatsapp fa-lg"></i></button>
                                            @endif
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      {{-- <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                      <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                      <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""> --}}
                </div>
              </div>
            </div>
              <div class="card-box">
                <div class="row">
                  <h4 class="col-lg-10 header-title mb-3">Maklumat Kariah</h4>
                  <a href="manage_kariah" class="col-lg-2">Lihat semua&nbsp;<i class="fas fa-angle-double-right"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kariah</th>
                                <th>No IC</th>
                                <th>No Telefon</th>
                                <th>Emel</th>
                                <th>Alamat Line 1</th>
                            </tr>
                        </thead>
                        @foreach ($kariahAkaun->take(5) as $value)
                        <tbody>
                            <tr>
                                <td>{{$value->id}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->ic_number}}</td>
                                <td>{{$value->phone}}</td>
                                <td><span class="label label-info">{{$value->email}}</span></td>
                                <td>{{$value->address1}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

          </div>
          </div>
      </div>
      </div>
      </div>
      @include('footer')
<!-- MODAL -->
<div class="modal fade" id="kuantiti_lembu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tetapkan Kuantiti Lembu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{url('kuantiti_lembu')}}">
         @csrf
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Kuantiti:</label>
              <input type="text" class="form-control" name="kuantiti_lembu">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn" style="background-color: #16A086; color:white">Simpan</button>
        </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="bahagian_lembu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Harga 1 Bahagian Lembu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{url('bahagian_lembu')}}">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Harga:</label>
              <input type="text" class="form-control" name="bahagian_lembu" placeholder="RM 0.00">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn" style="background-color: #16A086; color:white">Simpan</button>
        </div>
    </form>
      </div>
    </div>
</div>

<div class="modal fade" id="seekor_lembu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Harga Seekor Lembu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{url('seekor_lembu')}}">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Kuantiti:</label>
              <input type="text" class="form-control" name="seekor_lembu" placeholder="RM 0.00">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn" style="background-color: #16A086; color:white">Simpan</button>
        </div>
    </form>
      </div>
    </div>
</div>
  </body>
</html>
