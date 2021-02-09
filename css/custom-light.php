<?php
function custom_light() {
	
	$appointment_options=theme_setup_data(); 
	$current_options = wp_parse_args(  get_option( 'appointment_options', array() ), $appointment_options );
	$link_color = str_replace("#", "", $current_options['link_color']);
	list($r, $g, $b) = sscanf($current_options['link_color'], "#%02x%02x%02x");
	$r = $r - 50;
	$g = $g - 25;
	$b = $b - 40;
	
	if ( $link_color != '#ff0000' ) :
	?>
<style type="text/css">
iframe{
	width: 762px !important;
} 
.slide-btn-sm, .slide-btn-sm{
    background-color: #<?php echo $link_color; ?> !important;
}
.callout-btn2{
    background-color: #<?php echo $link_color; ?> !important;
}

.featured-trip .grid-latest .text-holder .meta-info svg, .our-deals .grid-latest .text-holder .meta-info svg{
        fill: #<?php echo $link_color; ?>;
}

.trip-post img{
    width: 762.39px;
}
#include-result, #exclude-result {
    margin: 0 0 50px;
}
#include-result li {
    padding-left: 30px;
    margin: 0 0 15px;
}
#exclude-result li {
    padding-left: 30px;
    margin: 0 0 15px;
}
#exclude-result li:before {
    font-size: 10px;
    width: 20px;
    height: 20px;
    border: 2px solid #d80808;
    color: var(--secondary-color);
    line-height: 17px;
    border-radius: 50%;
    text-align: center;
}
.faq .expand-all-faq {
    display: inline-block;
    margin: 0 0 15px;
    text-decoration: none;
    color: #<?php echo $link_color; ?>;
}
.faq .expand-all-faq a {
    color: #<?php echo $link_color; ?>;
}
.wpte-bf-outer {
    box-shadow: 0 0 12px rgba(0,0,0,0.07);
}
.wpte-bf-price-wrap {
    padding: 0;
    text-align: center;
    /* background: rgba(50,182,122, 0.08); */
    border-color: rgba(50,182,122, 0.05);
    -webkit-box-shadow: none;
    box-shadow: none;
}
.wpte-bf-price-wrap .wpte-bf-ptitle {
    margin-top: 13px;
    font-size: 14px;
    font-weight: 600;
    color: rgba(35,35,35,0.8);
    display: block;
    text-align: center;
}
.wpte-bf-price-wrap .wpte-bf-price:last-child {
    padding-bottom: 15px;
    padding-top: 20px;
    background: rgba(50,182,122, 0.08);
}
.wpte-bf-price-wrap .wpte-bf-price del {
    color: rgba(50,182,122, 0.8);
    font-size: 16px;
    font-weight: 500;
}
.wpte-bf-price-wrap .wpte-bf-price ins {
    padding-right: 10px;
    font-weight: 700;
    font-size: 20px;
    color: #111;
}
.wpte-bf-price-wrap .wpte-bf-price .wpte-bf-pqty {
    padding-left: 0;
    padding-right: 10px;
    color: #232323;
}
.wpte-bf-booking-steps {
    margin-top: 0;
}
.wpte-bf-booking-steps .wpte-bf-step-wrap {
    background: transparent;
    border-bottom: solid 1px rgba(50,182,122, 0.2);
    padding: 25px 15px 15px;
}
.wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step.active {
    color: rgba(50,182,122, 1);
    font-size: 14px;
}
.wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step-arrow {
    color: rgba(51,51,51,0.25);
}
.wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step {
    text-transform: capitalize;
}
.category-trips-single .category-trips-single-inner-wrap{
    text-align: left;
}
.category-trips-single { 
    padding: 5px 22.5px;
    margin-bottom: 40px;
    font-size: 18px;
}
div.wpforms-container-full{
    text-align: left;
}
div.wpforms-container-full .wpforms-form .wpforms-field-label{
    font-weight: 700 !important;
}
.activities:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 61%;
    background: transparent;
    content: '';
    z-index: 0;
}
.faq-row {
    border: 1px solid #e5e5e5;
    border-left: 0;
    border-right: 0;
    margin: 0;
}
.faq .faq-row .accordion-tabs-toggle {
    border: 0;
    font-size: 18px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif !important; 
    color: #111;
    padding: 15px 30px;
}
.faq .faq-row .accordion-tabs-toggle .custom-toggle-tabs {
    display: none;
}
.faq-title {
    width: 100%;
}
.faq .faq-row .accordion-tabs-toggle:after {
    position: absolute;
    top: 12px;
    right: 10px;
    content: '';
    background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23b5b5b5' viewBox='0 0 320 512'%3E%3Cpath d='M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z'/%3E%3C/svg%3E") center center no-repeat;
    width: 18px;
    height: 28px;
}
#include-result li:before {
    font-size: 10px;
    width: 20px;
    height: 20px;
    border: 2px solid rgba(var(--primary-color-rgb), 0.5);
    color: var(--primary-color);
    line-height: 17px;
    border-radius: 50%;
    text-align: center;
}
.category-main-wrap.category-grid .category-trip-prc-title-wrap .category-trip-budget {
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: 0;
    position: relative;
    margin-left: -5px;
}
.category-main-wrap.category-grid .category-trip-prc-title-wrap .category-trip-budget .price-holder {
    display: block;
    padding: 10px 15px;
    position: relative;
    background: #<?php echo $link_color; ?>;
    -webkit-border-radius: 5px 0 0 0;
    border-radius: 5px 0 0 0;
}
.category-main-wrap.category-grid .category-trip-prc-title-wrap {
    display: block;
    padding: 0;
    margin-top: -23px;
}
.category-trips-single .category-trips-single-inner-wrap .category-trip-detail-wrap{
    padding: 0;
}
.category-trips-single .category-trips-single-inner-wrap .category-trip-detail-wrap .category-trip-desti {
    padding: 0 5px;
}
.category-trips-single .category-trips-single-inner-wrap .category-trip-detail-wrap .category-trip-desti .category-trip-loc i svg {
    fill: rgb(225 165 3);
}
.category-trips-single .category-trips-single-inner-wrap .category-trip-detail-wrap .category-trip-desti .category-trip-dur i svg {
    fill: rgb(225 165 3);
}
.category-trips-single .category-trips-single-inner-wrap .category-trip-detail-wrap .category-trip-desti .category-trip-loc span {
    color: #666;
    text-decoration: none;
    font-size: 14px;
    font-weight: 400;
}
.category-trips-single .category-trips-single-inner-wrap .category-trip-detail-wrap .category-trip-desti .category-trip-dur {
    color: #666;
    text-decoration: none;
    font-size: 14px;
    font-weight: 400;
}
.category-trips-single .category-trips-single-inner-wrap .category-trip-detail-wrap .category-trip-desti .category-trip-dur span {
    font-size: 1em;
    font-weight: 400;
    color: rgba(35, 35, 35, 0.7);
}
.category-main-wrap.category-grid .category-trip-prc-title-wrap .category-trip-title {
    
    font-size: 18px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif !important;
    padding: 0 20px;
    margin: 8px 0 7px;

}

.category-main-wrap.category-grid .category-trips-single-inner-wrap .category-trip-fig .category-disc-feat-wrap {
    top: 20px;
}
.category-list .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount, .category-main-wrap.category-grid .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount {
    background: #e54b4b;
    color: #FFF;
    -webkit-border-radius: 0 5px 0 0;
    border-radius: 0 5px 0 0;
}
.category-list .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount .discount-offer, .category-main-wrap.category-grid .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount .discount-offer {
    font-size: 16px;
    display: block;
    padding: 6px 15px;
}
.category-list .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount .discount-offer:before, .category-main-wrap.category-grid .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount .discount-offer:before {
    width: 0;
    height: 0;
    border-top: 17px solid #e5454b;
    border-left: 15px solid transparent;
    position: absolute;
    top: 0;
    left: -15px;
    content: '';
}
.category-main-wrap.category-grid .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount .discount-offer span {
    font-weight: 400;
}
.category-list .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount .discount-offer:after, .category-main-wrap.category-grid .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount .discount-offer:after {
    width: 0;
    height: 0;
    border-bottom: 17px solid #e5454b;
    border-left: 15px solid transparent;
    position: absolute;
    bottom: 0;
    left: -15px;
    content: '';
}
.category-list .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount:after, .category-main-wrap.category-grid .category-trips-single-inner-wrap .category-trip-fig .category-trip-discount:after {
    background: #830000;
    border-bottom-right-radius: 4px;
    bottom: -6px;
    content: "";
    height: 6px;
    right: 0;
    position: absolute;
    width: 6px;
}
.category-main-wrap.category-grid .category-trips-single-inner-wrap .category-trip-aval-time {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 35px;
}
.category-main-wrap.category-grid .category-trips-single-inner-wrap .category-trip-aval-time .category-trip-viewmre-btn {
    display: inline-block;
    margin: 0 auto 0;
    padding: 13px 30px;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: 500;
    -webkit-border-radius: 35px;
    border-radius: 35px;
    border: 2px solid #<?php echo $link_color; ?>;
    -webkit-box-shadow: none;
    box-shadow: none;
    
    color: #<?php echo $link_color; ?>;
}
.category-main-wrap.category-grid .category-trips-single-inner-wrap .category-trip-aval-time .category-trip-viewmre-btn:hover {
    background: #<?php echo $link_color; ?>;
    color: #FFFFFF;
    text-decoration: none;
}
.category-main-wrap.category-grid .category-trip-prc-title-wrap .category-trip-budget .price-holder:before {
    width: 0;
    height: 0;
    border-top: 20px solid #<?php echo $link_color; ?>;
    border-right: 20px solid transparent;
    position: absolute;
    top: 0;
    right: -20px;
    content: '';
}
.category-main-wrap.category-grid .category-trip-prc-title-wrap .category-trip-budget .price-holder .striked-price {
    color: #FFF;
    font-size: 20px;
    display: inline-block;
    vertical-align: middle;
    opacity: 1;
    font-weight: 500;
}
.category-main-wrap.category-grid .category-trip-prc-title-wrap .category-trip-budget .price-holder .actual-price {
    font-size: 20px;
    display: inline-block;
    vertical-align: middle;
    color: #FFF;
    padding-left: 3px;
    font-weight: 500;
}
.category-main-wrap.category-grid .category-trip-prc-title-wrap .category-trip-budget .price-holder:after {
    width: 0;
    height: 0;
    border-bottom: 20px solid #<?php echo $link_color; ?>;
    border-right: 20px solid transparent;
    position: absolute;
    bottom: 0;
    right: -20px;
    content: '';
}
.category-main-wrap.category-grid .category-trip-prc-title-wrap .category-trip-budget:after {
    background: #144e33;
    border-bottom-left-radius: 4px;
    bottom: -6px;
    content: "";
    height: 6px;
    left: 0;
    position: absolute;
    width: 5px;
}
.single-trip .trip-post .entry-header .entry-title {
    font-size: 36px;
    line-height: 1.125em;
    color: #111;
    font-weight: 500;
    font-family: 'Poppins', sans-serif !important; 
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 30px;
}
.single-trip .trip-post .entry-header .entry-title:after {
    content: '';
    position: absolute;
    top: 100%;
    left: 0;
    width: 60px;
    height: 3px;
    background: #<?php echo $link_color; ?>;
}
.page-content, .entry-content, .entry-summary {
    margin: 1.5em 0 0;
}
.clear:before, .clear:after, .entry-content:before, .entry-content:after, .comment-content:before, .comment-content:after, .site-header:before, .site-header:after, .site-content:before, .site-content:after, .site-footer:before, .site-footer:after {
    content: "";
    display: table;
    table-layout: fixed;
}
#tabs-container {
    margin-top: 60px;
}
#tabs-container .nav-tab-wrapper {
    font-size: 12px;
    line-height: 1.666em;
    text-align: center;
    text-transform: uppercase;
    margin: 0 0 20px;
    font-weight: 500;
    /* display: table; */
    width: 100%;
}
#tabs-container .nav-tab-wrapper .tab-inner-wrapper {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
}
#tabs-container .tab-inner-wrapper .tab-anchor-wrapper:first-child {
    border-left: 0;
}
#tabs-container .tab-inner-wrapper .tab-anchor-wrapper {
    float: none;
    border: 0;
    background: #f6f6f6;
    margin: 0;
    border-left: 1px solid #ddd;
    width: 100%;
    /* display: table-cell; */
}
#tabs-container .tab-inner-wrapper .tab-anchor-wrapper .wte-tab-title {
    font-size: 1em;
    font-weight: normal;
    margin: 0;
}
#tabs-container .tab-inner-wrapper .tab-anchor-wrapper .nav-tab-active {
    background: #<?php echo $link_color; ?>;
    border: 0;
    color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    -webkit-transform: scale(1.12);
    transform: scale(1.12);
    position: relative;
}
#tabs-container .tab-inner-wrapper .tab-anchor-wrapper a {
    display: block;
    padding: 15px 5px;
    color: #838383;
}
#tabs-container .tab-inner-wrapper .tab-anchor-wrapper .nav-tab-active:after {
    content: '';
    position: absolute;
    bottom: -9px;
    left: 50%;
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 10px solid #<?php echo $link_color; ?>;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}
#tabs-container .tab-content {
    border: 0;
    margin: 0;
}
.itinerary {
    counter-reset: section;
}
#tabs-container .tab-content h2 {
    font-size: 22px;
    margin: 0 0 25px;
}
#tabs-container .tab-content h1, #tabs-container .tab-content h2, #tabs-container .tab-content h3, #tabs-container .tab-content h4, #tabs-container .tab-content h5, #tabs-container .tab-content h6 {
    color: #111;
    font-weight: 500;
    font-family: 'Poppins', sans-serif !important; 
    position: relative;
    line-height: 1.272em;
    padding: 0 0 5px;
}
#tabs-container .tab-content h1:after, #tabs-container .tab-content h2:after, #tabs-container .tab-content h3:after, #tabs-container .tab-content h4:after, #tabs-container .tab-content h5:after, #tabs-container .tab-content h6:after {
    content: '';
    position: absolute;
    top: 100%;
    left: 0;
    width: 60px;
    height: 3px;
    background: #<?php echo $link_color; ?>;
}
.itinerary-row {
    border: 0;
    margin: 0 0 0 20px;
    position: relative;
    padding: 0 0 40px 60px;
    border-left: 2px dotted rgba(0, 0, 0, 0.1);
}
.itinerary-row:before {
    counter-increment: section;
    content: counter(section);
    position: absolute;
    top: 0;
    left: -24px;
    font-size: 22px;
    color: #fff;
    font-weight: 600;
    font-family: 'Poppins', sans-serif !important; 
    background: #<?php echo $link_color; ?>;
    padding: 10px 18px;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    text-align: center;
}
.itinerary .itinerary-row>.title {
    display: none;
}
.itinerary .itinerary-content {
    overflow: hidden;
}
.itinerary-row {
    border: 0;
    margin: 0 0 0 20px;
    position: relative;
    padding: 0 0 40px 60px;
    border-left: 2px dotted rgba(0, 0, 0, 0.1);
}
    .featured-trip .grid .text-holder .title a:focus, .featured-trip .grid .text-holder .title a:hover {
    text-decoration: none;
    color: #<?php echo $link_color; ?>;
}
.featured-trip .section-header .section-title:after {
    background: #<?php echo $link_color; ?>;
    content: '';
    height: 3px;
    left: 50%;
    position: absolute;
    top: 100%;
    width: 90px;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    transform: translateX(-50%);
}
.featured-trip .grid-latest .text-holder .category-trip-desti, .our-deals .grid-latest .text-holder .category-trip-desti {
    padding: 0 5px;
}
        .featured-trip .grid {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        margin: 0 -15px;
        margin-bottom: 0px;
    justify-content: center!important;
    }
    .featured-trip .grid .col {
    padding: 0 15px;
    width: 33.333%;
    margin: 0 0 30px;
}
    .featured-trip .grid .img-holder {
    position: relative;
} 
    .featured-trip .grid .img-holder img {
    vertical-align: top;
        width: 100%;
    border-radius: 5px 5px 0 0;
        max-height: 366px;
}

.featured-trip .grid .img-holder .price-holder:after {
    background: #144e33;
    border-bottom-left-radius: 4px;
    bottom: -6px;
    content: "";
    height: 6px;
    left: 0;
    position: absolute;
    width: 5px;
}
    .featured-trip .grid .img-holder .price-holder {
    background: #<?php echo $link_color; ?>;
    border-top-left-radius: 5px;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    left: -5px;
    position: absolute;
    bottom: -20px;
}
    .featured-trip .grid .img-holder .price-holder>span {
    display: block;
    padding: 6px 15px;
    position: relative;
}
    .featured-trip .grid .img-holder .price-holder>span:before {
    width: 0;
    height: 0;
    border-top: 20px solid #<?php echo $link_color; ?>;
    border-right: 20px solid transparent;
    position: absolute;
    top: 0;
    right: -20px;
    content: '';
}
    .featured-trip .grid .img-holder .price-holder>span:after {
    width: 0;
    height: 0;
    border-bottom: 20px solid #<?php echo $link_color; ?>;
    border-right: 20px solid transparent;
    position: absolute;
    bottom: 0;
    right: -20px;
    content: '';
}
    
    .featured-trip .grid .text-holder {
    background: #fff;
    padding: 40px 0 14px;
    border-radius: 0 0 5px 5px;
}
    .featured-trip .grid .text-holder .title {
    font-size: 18px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif !important; 
    padding: 0 20px;
    margin: 0 0 7px;
}
    .featured-trip .grid .text-holder .title a {
    color: #111;
    -webkit-transition: linear .2s;
    -moz-transition: linear .2s;
    transition: linear .2s;
}
    .featured-trip .grid .text-holder .meta-info {
    padding: 0 20px;
    font-size: 14px;
}
    .featured-trip .grid .text-holder .meta-info span {
    display: block;
    margin: 0 0 7px;
}
    .featured-trip .grid .text-holder .meta-info svg {
    font-size: 16px;
    margin-right: 5px;
    color: #<?php echo $link_color; ?>;
}
.featured-trip .btn-holder .btn-more:focus, .featured-trip .btn-holder .btn-more:hover {
    text-decoration: none;
    background: #<?php echo $link_color; ?>;
    color: #fff;
}
    .featured-trip .grid .text-holder .btn-holder {
    padding-top: 15px;
    border-top: 1px solid #e5e5e5;
    text-align: center;
}
    .featured-trip .grid .text-holder .btn-more {
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 1px;
    display: inline-block;
    border: 2px solid #<?php echo $link_color; ?>;
    border-radius: 20px;
    text-transform: uppercase;
    padding: 2px 30px;
    font-family: 'Poppins', sans-serif !important; 
    -webkit-transition: linear .2s;
    -moz-transition: linear .2s;
    transition: linear .2s;
}
    .featured-trip .btn-holder {
    text-align: center;
}
    .featured-trip .btn-holder .btn-more {
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1px;
    display: inline-block;
    border: 2px solid #<?php echo $link_color; ?>;
    border-radius: 5px;
    text-transform: uppercase;
    padding: 6px 29px;
    font-family: 'Poppins', sans-serif !important; 
    -webkit-transition: linear .2s;
    -moz-transition: linear .2s;
    transition: linear .2s;
        color: #<?php echo $link_color; ?>;
}
.featured-trip .grid .text-holder .btn-more:focus, .featured-trip .grid .text-holder .btn-more:hover {
    text-decoration: none;
    background: #<?php echo $link_color; ?>;
    color: #fff;
}
.category-trip-loc{
        margin-left: 15px;
}
.featured-trip .grid-latest .text-holder .category-trip-loc svg, .our-deals .grid-latest .text-holder .category-trip-loc svg {
    fill: #ffba00;
}
.archive .trip-content-area .grid { 
    margin-left: -24px; 
    margin-top: -100px;
}
.wpte-bf-checkout .wpte-bf-step-content-wrap {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    text-align: left;
}
.wpte-bf-step-content .wpte-bf-traveler-block .wpte-bf-traveler, .wpte-bf-step-content .wpte-bf-es-block .wpte-bf-traveler {
    display: flex;
    flex: initial;
    align-items: center;
    position: relative;
    padding-right: 0px;
} 
.wpte-bf-checkout .wpte-bf-booking-steps .wpte-bf-step-wrap {
    padding-bottom: 30px;
    text-align: left;
    -webkit-justify-content: flex-start;
    justify-content: flex-start;
}
body.rightsidebar .wpte-bf-checkout .wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step:first-child {
    margin-left: 0;
}
.wpte-bf-checkout .wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step.completed::before {
    background-color: rgba(50,182,122, 0.1);
    background-image: url('data:image/svg+xml; utf-8, <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%2332b67a" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>');
}
body.rightsidebar .wpte-bf-checkout .wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step {
    margin-left: 40px;
}
.wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step.active {
    color: rgba(50,182,122, 1);
    font-size: 14px;
}
.thank-you #primary {
    width: 100%;
    padding: 0 15px;
}
#primary {
    float: left;
    width: 75%;
    padding-left: 15px;
    padding-right: 65px;
}
.hentry {
    margin: 0 0 1.5em;
}
.thank-you #primary .page .text-holder {
    max-width: 945px;
    margin: 0 auto;
    text-align: center;
}
.page-content, .entry-content, .entry-summary {
    margin: 1.5em 0 0;
}
#primary .entry-content .thank-you-container .trip-details {
    font-size: 18px;
}
#primary .post .entry-content h3, #primary .page .entry-content h3 {
    font-size: 28px;
    line-height: 1.285em;
}
#primary .post .entry-content h1, #primary .page .entry-content h1, #primary .post .entry-content h2, #primary .page .entry-content h2, #primary .post .entry-content h3, #primary .page .entry-content h3, #primary .post .entry-content h4, #primary .page .entry-content h4, #primary .post .entry-content h5, #primary .page .entry-content h5, #primary .post .entry-content h6, #primary .page .entry-content h6 { 
    color: #111;
}
.detail-container {
    margin: 0 auto;
    max-width: 575px;
    border-top: 1px solid #BFBFBF;
    border-bottom: 1px solid #BFBFBF;
    padding: 0;
    text-align: left;
}
.detail-item {
    border-bottom: 1px solid #F2F2F2;
}
.blog-lg-area-left {
    margin: 0px;
    padding: 0px 10px 60px 0px;
    overflow: hidden;
    text-align: center;
}


.wpte-bf-checkout .wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step.active::before {
    background-color: rgba(50,182,122, 1);
}
.wpte-bf-checkout .wpte-bf-checkout-form, body.rightsidebar .wpte-bf-checkout .wpte-bf-checkout-form {
    width: 60%;
}
.wpte-bf-checkout .wpte-bf-title {
    color: #232323;
    font-size: 20px;
}
.wpte-bf-checkout .wpte-bf-book-summary, body.rightsidebar .wpte-bf-checkout .wpte-bf-book-summary {
    width: 40%;
}
body.rightsidebar .wpte-bf-checkout .wpte-bf-book-summary {
        padding: 0px;
    width: 30% !important;
    box-shadow: none;
    border: 1px solid #eee;
}
.wpte-bf-checkout .wpte-bf-book-summary {
    padding: 45px 60px;
    -webkit-box-shadow: 0px 0px 42px rgba(0,0,0,0.05);
    box-shadow: 0px 0px 42px rgba(0,0,0,0.05);
}
body.rightsidebar .wpte-bf-checkout .wpte-bf-summary-wrap {
    padding: 5% 0;
    background: transparent;
    border: none;
}
.wpte-bf-checkout .wpte-bf-summary-total {
    padding: 5% 0;
    margin-top: 10px;
    background: none;
    border-top: 1px solid rgba(50,182,122, 1);
}
body.rightsidebar .wpte-bf-checkout .wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step::after {
    right: calc(100% + 15px);
    right: -webkit-calc(100% + 15px);
    right: -moz-calc(100% + 15px);
    width: 25px;
}
.wpte-bf-checkout .wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step::after {
    background-color: rgba(50,182,122, 0.1);
}
.wpte-bf-checkout .wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step.active::after {
    background-color: rgba(50,182,122, 1);
}
.wpte-bf-checkout .wpte-bf-booking-steps .wpte-bf-step-wrap .wpte-bf-step::before {
    color: rgba(50,182,122, 1);
    border-color: rgba(50,182,122, 0.1);
}
.wpte-bf-checkout .wpte-bf-summary-wrap .wpte-bf-trip-date {
    font-size: 16px;
    color: #232323;
    display: block;
    margin-top: 10px;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table, .wpte-bf-checkout .wpte-bf-summary-wrap table tr {
    border: none !important;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tbody {
    padding-bottom: 10px;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table, .wpte-bf-checkout .wpte-bf-summary-wrap table tr {
    border: none !important;
    background-color: #fff;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tr:last-child {
    padding-bottom: 10px;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tbody tr td:first-child {
    font-size: 16px;
    color: #232323;
    font-weight: 500;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tbody tr td b {
    background: #FFF;
    display: inline-block;
    position: relative;
    padding-left: 20px;
    font-size: 16px;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tfoot {
    border-top-color: #ffab44;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tr:last-child {
    padding-bottom: 10px;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tr td:last-child {
    text-align: right !important;
}
body.rightsidebar .wpte-bf-checkout .wpte-bf-summary-wrap table tfoot tr td .wpte-bf-total-txt {
    font-size: 14px;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tfoot tr td .wpte-bf-total-txt {
    font-size: 16px;
    color: rgba(35,35,35,0.8);
}
.wpte-bf-checkout .wpte-bf-summary-total {
    padding: 5% 0;
    margin-top: 10px;
    background: none;
    border-top: 1px solid rgba(50,182,122, 1);
}
.wpte-bf-checkout .wpte-bf-step-content-wrap .wpte-bf-total-price {
    text-align: right;
}
.wpte-bf-checkout .wpte-bf-summary-total .wpte-bf-total-price {
    color: #232323;
}
body.rightsidebar .wpte-bf-checkout .wpte-bf-summary-total .wpte-bf-total-txt {
    font-size: 15px;
    margin: 0;
    padding: 0;
}
.wpte-bf-checkout .wpte-bf-step-content-wrap .wpte-bf-total-price .wpte-bf-total-txt {
    font-size: 16px;
    padding-right: 0;
}
.wpte-bf-step-content-wrap .wpte-bf-total-price .wpte-bf-total-txt {
    font-size: 20px;
    font-weight: 500;
    color: rgba(35,35,35,1);
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tr td {
    padding: 10px 0 !important;
    color: #232323;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tbody tr td:first-child span {
    position: relative;
    background: #FFF;
    padding-right: 20px;
}
.wpte-bf-checkout .wpte-bf-summary-wrap table tbody tr td:first-child span:after {
    display: none;
    position: absolute;
    content: "";
    width: 244px;
    height: 1px;
    border: 1px dashed rgba(0,0,0,0.1);
    top: 10px;
    left: 100%;
}
	
	/* roteiros */
	.grid {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		margin: 0 -15px;
		margin-bottom: 50px;
	}
	.grid .col {
    padding: 0 15px;
    width: 33.333%;
    margin: 0 0 30px;
}
	.grid .img-holder {
    position: relative;
} 
	.grid .img-holder img {
    vertical-align: top;
    border-radius: 5px 5px 0 0;
}
	.grid .img-holder .price-holder {
    background: #32b67a;
    border-top-left-radius: 5px;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    left: -5px;
    position: absolute;
    bottom: -20px;
}
	.grid .img-holder .price-holder>span {
    display: block;
    padding: 6px 15px;
    position: relative;
}
	.grid .img-holder .price-holder>span:before {
    width: 0;
    height: 0;
    border-top: 20px solid #32b67a;
    border-right: 20px solid transparent;
    position: absolute;
    top: 0;
    right: -20px;
    content: '';
}
	.grid .img-holder .price-holder>span:after {
    width: 0;
    height: 0;
    border-bottom: 20px solid #32b67a;
    border-right: 20px solid transparent;
    position: absolute;
    bottom: 0;
    right: -20px;
    content: '';
}
	
	.grid .text-holder {
    background: #fff;
    padding: 40px 0 14px;
    border-radius: 0 0 5px 5px;
}
	.grid .text-holder .title {
    font-size: 18px;
    font-weight: 500;
    font-family: Montserrat,sans-serif;
    padding: 0 20px;
    margin: 0 0 7px;
}
	.grid .text-holder .title a {
    color: #111;
    -webkit-transition: linear .2s;
    -moz-transition: linear .2s;
    transition: linear .2s;
}
	.grid .text-holder .meta-info {
    padding: 0 20px;
    font-size: 14px;
}
	.grid .text-holder .meta-info span {
    display: block;
    margin: 0 0 7px;
}
	.grid .text-holder .meta-info svg {
    font-size: 16px;
    margin-right: 5px;
    color: #32b67a;
}
	.grid .text-holder .btn-holder {
    padding-top: 15px;
    border-top: 1px solid #e5e5e5;
    text-align: center;
}
	.grid .text-holder .btn-more {
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 1px;
    display: inline-block;
    border: 2px solid #32b67a;
    border-radius: 20px;
    text-transform: uppercase;
    padding: 2px 30px;
    font-family: Montserrat,sans-serif;
    -webkit-transition: linear .2s;
    -moz-transition: linear .2s;
    transition: linear .2s;
}
	.btn-holder {
    text-align: center;
}
	.btn-holder .btn-more {
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1px;
    display: inline-block;
    border: 2px solid #32b67a;
    border-radius: 5px;
    text-transform: uppercase;
    padding: 6px 29px;
    font-family: Montserrat,sans-serif;
    -webkit-transition: linear .2s;
    -moz-transition: linear .2s;
    transition: linear .2s;
}
	/* fim roteiros */

body { background: #ffffff; color: #8f969c; }
#wrapper { background-color: #ffffff; }

.navbar .navbar-nav > .open > a,
.navbar .navbar-nav > .open > a:hover,
.navbar .navbar-nav > .open > a:focus,
.navbar .navbar-nav > li > a:hover,
.navbar .navbar-nav > li > a:focus {
	color: #<?php echo $link_color; ?>;
}
.navbar .navbar-nav > .active > a,
.navbar .navbar-nav > .active > a:hover,
.navbar .navbar-nav > .active > a:focus, 
.dropdown-menu, 
.dropdown-menu .active > a,
.dropdown-menu .active > a:hover,
.dropdown-menu .active > a:focus {
background-color:#<?php echo $link_color; ?>;
}

.dropdown-menu > li > a { border-bottom:1px solid rgb(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b;?>) }
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus { background-color: rgb(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b;?>) }
.dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {color:#fff !important;}

.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
	background-color: #<?php echo $link_color; ?> !important;
}
@media only screen and (min-width: 480px) and (max-width: 767px) {
.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover { color: #<?php echo $link_color; ?> !important; } 
}

@media only screen and (min-width: 200px) and (max-width: 480px) {
.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover { color: #<?php echo $link_color; ?> !important; }
}
.top-contact-detail-section { background: none repeat scroll 0 0 #<?php echo $link_color; ?>; }

.callout-btn2, a.hrtl-btn, 
.project-scroll-btn li:hover, 
a.works-btn, 
.blog-btn-sm, 
a.more-link,
.top-contact-detail-section,
.clients-btn-lg, .team-showcase-overlay, .blog-post-date-area .date, .blog-btn-lg, .blogdetail-btn a:hover, .cont-btn a:hover, .sidebar-widget > .input-group > .input-group-addon, .sidebar-widget > .input-group > .input-group-addon, .sidebar-widget-tags a:hover, .blog-pagination a:hover, .blog-pagination a.active, .navigation.pagination .nav-links a:hover, .navigation.pagination .nav-links .page-numbers.current, a.error-btn, a.error-btn:hover, a.error-btn:focus, .hc_scrollup, .tagcloud a:hover, .form-submit input, .media-body input[type=submit], .sidebar-widget input[type=submit], .footer-widget-column input[type=submit], .blogdetail-btn, .cont-btn button, .orange-widget-column > .input-group > .input-group-addon, .orange-widget-column-tags a:hover, .slider-btn-sm, .format-video-btn-sm, .slide-btn-sm, .slider-sm-area a.more-link, .blog-pagination span.current, .wpcf7-submit, .page-title-section, ins { background-color: #<?php echo $link_color; ?>; }

/* Font Colors */
.service-icon i,.portfolio-caption:hover h4 a, .portfolio-tabs li.active > a, .portfolio-tabs li > a:hover, .testmonial-area h4, .blog-post-sm a:hover, .blog-tags-sm a:hover, .blog-sm-area h3 > a:hover, .blog-sm-area h3 > a:focus, .footer-contact-icon i, .footer-addr-icon, .footer-blog-post:hover h3 a , .footer-widget-tags a:hover, .footer-widget-column ul li a:hover, .footer-copyright p a:hover, .page-breadcrumb > li.active a, .about-section h2 > span, .blog-post-lg a:hover, .blog-tags-lg a:hover, .blog-lg-area-full h3 > a:hover, .blog-author span, .comment-date a:hover, .reply a, .reply a:hover, .sidebar-blog-post:hover h3 a, ul.post-content li:hover a, .error-404 h1, .media-body th a:hover, .media-body dd a:hover, .media-body li a:hover, .blog-post-info-detail a:hover, .comment-respond a:hover, /* .blog-lg-area-left p > a, .blog-lg-area-right p > a, .blog-lg-area-full p > a, */ .blogdetail-btn a, .cont-btn a, .blog-lg-area-left h3 > a:hover, .blog-lg-area-right h3 > a:hover, .blog-lg-area-full h3 > a:hover, .sidebar-widget > ul > li > a:hover, 
.sidebar-widget table th, 
.footer-widget-column table th,  
.top-header-widget table th, 
.top-contact-detail-section table th, 
blockquote a, 
blockquote a:hover, 
blockquote a:focus, 
#calendar_wrap table > thead > tr > th, 
#calendar_wrap a, 
table tbody a, 
table tbody a:hover,
table tbody a:focus,
.textwidget a:hover, 
.format-quote p:before,
td#prev a, td#next a,
dl > dd > a, dl > dd > a:hover,
.rsswidget:hover, 
.recentcomments a:hover, 
p > a, 
p > a:hover,
ul > li > a:hover, tr.odd a, tr.even a, 
p.wp-caption-text a, 
.footer-copyright a, .footer-copyright a:hover  { color: #<?php echo $link_color; ?>; }

/* Border colors */
.footer-widget-tags a:hover , .sidebar-widget > .input-group > .input-group-addon, .sidebar-widget-tags a:hover, .blog-pagination a:hover, .blog-pagination a.active, .tagcloud a:hover, .media-body input[type=submit], .sidebar-widget input[type=submit], .footer-widget-column input[type=submit]  { border: 1px solid #<?php echo $link_color; ?>;} 

.footer-copyright-section {	border-bottom: 5px solid #<?php echo $link_color; ?>; }
.team-area:hover .team-caption { border-bottom: 2px solid #<?php echo $link_color; ?>; }
.blog-lg-box img { border-bottom: 3px solid #<?php echo $link_color; ?>;; }
blockquote {border-left: 5px solid #<?php echo $link_color; ?>;}

/* Box Shadow*/
.callout-btn2, a.hrtl-btn, a.works-btn, .blog-btn-sm, .more-link, .blogdetail-btn a, .cont-btn a, a.error-btn, .form-submit input, .blogdetail-btn, .cont-btn button, .slider-btn-sm , .slider-sm-area a.more-link, .format-video-btn-sm, .slide-btn-sm, .wpcf7-submit, 
.post-password-form input[type="submit"], .clients-btn-lg { box-shadow: 0 3px 0 0 #<?php echo $link_color; ?>; }

/* Image Background */
.testimonial-section, .contact-detail-section { background: url("<?php echo WEBRITI_TEMPLATE_DIR_URI; ?>/images/bg1.jpg") repeat fixed 0 0 rgba(0, 0, 0, 0); }
.testimonial-section .overlay, .contact-detail-section .overlay { background: none repeat scroll 0 0 rgba(0, 0, 0, 0.7); }
.author-box img {background-color: #2a2a2a;}
.top-header-widget {
    background-color: #21202e;
}
.header-contact-info2 a {
    color: #ffffff;
}



/* Woocommerce Color Css-------------------------*/

.woocommerce .star-rating span, .woocommerce .posted_in a:hover, .woocommerce-product-rating a:hover, .woocommerce .tagged_as a:hover, .woocommerce-message:before, 
.woocommerce-info:before, .woocommerce-message a, .woocommerce-message a:hover, .woocommerce-info a, .woocommerce-info a:hover, .woocommerce-error a, .woocommerce-error a:hover, 
.woocommerce-cart table.cart td a:hover, .woocommerce-account .addresses .title .edit { 
	color: #<?php echo $link_color; ?>; 
}

.woocommerce ul.products li.product:hover .onsale, .woocommerce ul.products li.product:hover .button, .woocommerce ul.products li.product:focus .button, 
.woocommerce div.product form.cart .button:hover, .woocommerce div.product form.cart .button:focus, .woocommerce div.product form.cart .button, .woocommerce a.button, 
.woocommerce a.button:hover, .woocommerce .cart input.button, .woocommerce input.button.alt, .woocommerce input.button, .woocommerce button.button, .woocommerce #respond input#submit, 
.woocommerce .cart input.button:hover, .woocommerce .cart input.button:focus, 
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:focus, 
.woocommerce input.button.alt:hover, .woocommerce input.button.alt:focus, .woocommerce input.button:hover, .woocommerce input.button:focus, 
.woocommerce button.button:hover, .woocommerce button.button:focus, .woocommerce #respond input#submit:hover, .woocommerce #respond input#submit:focus, 
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current, .ui-slider-horizontal .ui-slider-range { 
	background: #<?php echo $link_color; ?>; 
}

.woocommerce ul.products li.product:hover, .woocommerce ul.products li.product:hover, 
.woocommerce-page ul.products li.product:hover, .woocommerce-page ul.products li.product:hover, 
.woocommerce ul.products li.product:hover .button, .woocommerce ul.products li.product:focus .button, 
.woocommerce div.product form.cart .button:hover, .woocommerce div.product form.cart .button:focus, 
.woocommerce div.product form.cart .button, .woocommerce a.button, .woocommerce a.button:hover, 
.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current {
	border: 1px solid #<?php echo $link_color; ?>;
}

.woocommerce ul.products li.product:hover .onsale { border: 2px solid #<?php echo $link_color; ?>; }
.woocommerce-message, .woocommerce-info { border-top-color: #<?php echo $link_color; ?>; }
</style>
<?php
	endif;
}