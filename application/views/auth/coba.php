<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barbersop</title>
</head>
<style>
  :root {
    /* color */
    --rich-black-fogra-39_50: hsla(0, 0%, 5%, 0.5);
    --rich-black-fogra-39: hsl(0, 0%, 5%);
    --blue-color_10: hsla(36, 61%, 58%, 0.1);
    --blue-color: hsla(232, 95%, 54%, 1);
    --blue-dark: hsla(232, 66%, 53%, 1);
    --eerie-black-1: hsl(0, 0%, 14%);
    --eerie-black-2: hsl(0, 0%, 12%);
    --eerie-black-2_85: hsla(0, 0%, 12%, 0.85);
    --eerie-black-3: hsl(0, 0%, 8%);
    --sonic-silver: hsl(0, 0%, 44%);
    --davys-gray: hsl(210, 9%, 31%);
    --light-gray: hsl(0, 0%, 80%);
    --platinum: hsl(0, 0%, 91%);
    --black_30: hsla(0, 0%, 0%, 0.3);
    --white_10: hsla(0, 0%, 100%, 0.1);
    --white_30: hsla(0, 0%, 100%, 0.3);
    --white_50: hsla(0, 0%, 100%, 0.5);
    --white: hsl(0, 0%, 100%);
    --jet: hsl(0, 0%, 21%);

    /**
 * typography
 */

    --ff-oswald: 'Oswald', sans-serif;
    --ff-rubik: 'Rubik', sans-serif;

    --fs-40: 4rem;
    --fs-30: 3rem;
    --fs-24: 2.4rem;
    --fs-18: 1.8rem;
    --fs-14: 1.4rem;
    --fs-13: 1.3rem;

    --fw-300: 300;
    --fw-500: 500;
    --fw-600: 600;
    --fw-700: 700;

    /**
 * spacing
 */

    --section-padding: 80px;

    /**
 * shadow
 */

    --shadow-1: 10px 0 60px hsla(0, 0%, 15%, 0.07);
    --shadow-2: 10px 0 60px hsla(0, 0%, 15%, 0.1);

    /**
 * radius
 */

    --radius-5: 5px;
    --radius-8: 8px;

    /**
 * transition
 */

    --transition-1: 0.25s ease;
    --transition-2: 0.5s ease;
    --cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);

  }





  /*-----------------------------------*\
#RESET
\*-----------------------------------*/

  *,
  *::before,
  *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  li {
    list-style: none;
  }

  a,
  img,
  span,
  data,
  input,
  select,
  button,
  textarea,
  ion-icon {
    display: block;
  }

  a {
    color: inherit;
    text-decoration: none;
  }

  img {
    height: auto;
  }

  input,
  select,
  button,
  textarea {
    background: none;
    border: none;
    font: inherit;
  }

  input,
  select,
  textarea {
    width: 100%;
  }

  button {
    cursor: pointer;
  }

  ion-icon {
    pointer-events: none;
  }

  address {
    font-style: normal;
  }

  html {
    font-family: var(--ff-rubik);
    font-size: 10px;
    scroll-behavior: smooth;
  }

  body {
    background-color: var(--white_10);
    color: var(--sonic-silver);
    font-size: 1.6rem;
    line-height: 2;
  }

  :focus-visible {
    outline-offset: 4px;
  }

  ::-webkit-scrollbar {
    width: 10px;
  }

  ::-webkit-scrollbar-track {
    background-color: hsl(0, 0%, 98%);
  }

  ::-webkit-scrollbar-thumb {
    background-color: hsl(0, 0%, 80%);
  }

  ::-webkit-scrollbar-thumb:hover {
    background-color: hsl(0, 0%, 70%);
  }





  /*-----------------------------------*\
#REUSED STYLE
\*-----------------------------------*/

  .container {
    padding-inline: 15px;
  }

  .section {
    padding-block: var(--section-padding);
  }

  .has-before,
  .has-after {
    position: relative;
    z-index: 1;
  }

  .has-before::before,
  .has-after::after {
    position: absolute;
    content: "";
  }

  .has-bg-image {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  }

  .h1,
  .h2,
  .h3 {
    font-family: var(--ff-oswald);
    line-height: 1.3;
  }

  .h1,
  .h2 {
    text-transform: uppercase;
  }

  .h1,
  .h3 {
    font-weight: var(--fw-600);
  }

  .h1 {
    color: var(--white);
    font-size: var(--fs-40);
  }

  .h2,
  .h3 {
    color: var(--eerie-black-1);
  }

  .h2 {
    font-size: var(--fs-30);
  }

  .h3 {
    font-size: var(--fs-24);
  }

  .btn {
    color: var(--white);
    background-color: var(--blue-color);
    display: flex;
    align-items: center;
    gap: 10px;
    max-width: max-content;
    padding: 10px 25px;
    font-family: var(--ff-oswald);
    font-size: var(--fs-14);
    font-weight: var(--fw-600);
    text-transform: uppercase;
    border-radius: var(--radius-5);
    overflow: hidden;
  }

  .btn::before {
    background-color: var(--eerie-black-1);
    inset: 0;
    z-index: -1;
    transform: skewY(-15deg) scaleY(0);
    transition: var(--transition-2);
  }

  .btn:is(:hover, :focus)::before {
    transform: skewY(-15deg) scaleY(2.5);
  }

  .text-center {
    text-align: center;
  }

  .grid-list {
    display: grid;
    gap: 30px;
  }

  .img-holder {
    aspect-ratio: var(--width) / var(--height);
    background-color: var(--light-gray);
    overflow: hidden;
  }

  .img-cover {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }





  /*-----------------------------------*\
#HEADER
\*-----------------------------------*/

  .header-top-item,
  .header .btn {
    display: none;
  }

  .header-top-list,
  .header-top-list .social-list {
    display: flex;
    align-items: center;
  }

  .header-top-list {
    justify-content: center;
  }

  .header-top-list .social-list {
    gap: 20px;
    padding-block: 15px;
  }

  .header-top-list .social-link {
    color: var(--sonic-silver);
    font-size: 15px;
    transition: var(--transition-1);
  }

  .header-top-list .social-link:is(:hover, :focus) {
    color: var(--blue-color);
  }

  .header-bottom {
    position: absolute;
    top: 45px;
    left: 0;
    width: 100%;
    padding-block: 10px;
    z-index: 4;
  }

  .header-bottom.active {
    position: fixed;
    top: 0;
    background-color: var(--rich-black-fogra-39);
    transform: translateY(-100%);
    animation: slideIn 0.5s ease forwards;
  }

  @keyframes slideIn {
    0% {
      transform: translateY(-100%);
    }

    100% {
      transform: translateY(0);
    }
  }

  .header-bottom>.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .logo {
    color: var(--blue-color);
    font-family: var(--ff-oswald);
    font-size: 2.7rem;
    font-weight: var(--fw-600);
    text-transform: uppercase;
    line-height: 1.4;
  }

  .logo .span {
    color: var(--white);
    font-family: var(--ff-rubik);
    font-size: 1.3rem;
    font-weight: var(--fw-300);
    text-transform: capitalize;
    letter-spacing: 2px;
  }

  .nav-toggle-btn {
    color: var(--white);
    font-size: 40px;
  }

  .navbar {
    position: absolute;
    padding-inline: 0;
    top: 100%;
    left: 15px;
    right: 15px;
    background-color: var(--rich-black-fogra-39);
    max-height: 0;
    overflow: hidden;
    transition: 0.15s var(--cubic-out);
  }

  .navbar.active {
    max-height: 321px;
    transition-duration: 0.5s;
  }

  .navbar-list {
    border-block-start: 1px solid var(--jet);
    margin-block: 25px;
  }

  .navbar-item {
    border-block-end: 1px solid var(--jet);
  }

  .navbar-link {
    color: var(--white);
    font-family: var(--ff-oswald);
    font-weight: var(--fw-600);
    text-transform: uppercase;
    line-height: 1.5;
    padding: 10px 30px;
    transition: var(--transition-1);
  }

  .navbar-link:is(:hover, :focus) {
    color: var(--blue-color);
  }





  /*-----------------------------------*\
#HERO
\*-----------------------------------*/

  .hero {
    --section-padding: 100px;
    padding-block-start: calc(var(--section-padding) + 40px);
    background-position: left;
  }

  .hero::before {
    inset: 0;
    background-color: var(--rich-black-fogra-39_50);
    mix-blend-mode: multiply;
    z-index: -1;
  }

  .hero-text {
    color: var(--white);
    margin-block: 15px 40px;
  }





  /*-----------------------------------*\
#SERVICE
\*-----------------------------------*/

  .service {
    text-align: center;
  }

  .service .section-text {
    margin-block: 15px 55px;
  }

  .service-card {
    background-color: var(--white);
    padding: 60px 25px;
    box-shadow: var(--shadow-1);
    border-radius: var(--radius-8);
  }

  .service-card .card-icon {
    color: var(--blue-color);
    font-size: 70px;
    line-height: 1;
  }

  .service-card .card-title {
    margin-block: 15px 12px;
    transition: var(--transition-1);
  }

  .service-card .card-title:is(:hover, :focus) {
    color: var(--blue-color);
  }

  .service-card .card-text {
    margin-block-end: 30px;
  }

  .service-card .card-btn {
    color: var(--blue-color);
    background-color: var(--white);
    max-width: max-content;
    margin-inline: auto;
    font-size: 20px;
    padding: 15px;
    box-shadow: var(--shadow-2);
    border-radius: var(--radius-5);
    transition: var(--transition-2);
  }

  .service-card:is(:hover, :focus-within) .card-btn {
    background-color: var(--blue-color);
    color: var(--white);
  }





  /*-----------------------------------*\
#PRICING
\*-----------------------------------*/

  .pricing::before {
    inset: 0;
    background-color: var(--eerie-black-2_85);
    mix-blend-mode: multiply;
    z-index: -1;
  }

  .pricing .section-title {
    color: var(--white_10);
  }

  .pricing .section-text {
    margin-block: 15px 55px;
    color: var(--white_50);
  }

  .pricing-tab-container {
    background-color: var(--white);
    padding: 40px 5px;
  }

  .tab-filter {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 3px;
    margin-block-end: 30px;
  }

  .filter-btn {
    color: var(--eerie-black-1);
    font-family: var(--ff-oswald);
    font-size: var(--fs-14);
    font-weight: var(--fw-600);
    text-transform: uppercase;
    min-width: 130px;
    padding-block: 12px;
    border: 1px solid var(--platinum);
    transition: var(--transition-1);
  }

  .filter-btn .btn-icon {
    display: none;
  }

  .filter-btn.active {
    background-color: var(--blue-color);
    border-color: var(--blue-color);
    color: var(--white);
  }

  .pricing .grid-list {
    padding-inline: 20px;
  }

  .pricing .grid-list>li.active {
    animation: popup 0.75s ease forwards;
  }

  @keyframes popup {

    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }

  }

  .pricing-card {
    background-color: var(--blue-color_10);
    padding: 20px 25px;
    border-radius: var(--radius-5);
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 15px;
  }

  .pricing-card .card-banner {
    border-radius: 50%;
    overflow: hidden;
  }

  .pricing-card .wrapper {
    order: 1;
  }

  .pricing-card .h3 {
    --fs-24: 2rem;
    margin-block-end: 8px;
  }

  .pricing-card .card-price {
    color: var(--blue-color);
    font-family: var(--ff-oswald);
    font-size: var(--fs-30);
    font-weight: var(--fw-500);
  }





  /*-----------------------------------*\
#GALLERY
\*-----------------------------------*/

  .title-wrapper {
    margin-block-end: 60px;
  }

  .gallery .section-text {
    margin-block: 12px 15px;
  }

  .gallery-card {
    position: relative;
  }

  .gallery-card .card-banner .img-cover {
    transition: var(--transition-2);
  }

  .gallery-card:is(:hover, :focus-within) .card-banner .img-cover {
    transform: scale(1.1);
  }

  .gallery-card .card-content {
    position: absolute;
    inset: 15px;
    background-color: var(--eerie-black-2_85);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10px;
    opacity: 0;
    transform: scale(0.8);
    transition: var(--transition-2);
  }

  .gallery-card:is(:hover, :focus-within) .card-content {
    opacity: 1;
    transform: scale(1);
  }

  .gallery-card :is(.card-title, .card-text) {
    color: var(--white);
  }

  .gallery-card .card-btn {
    background-color: var(--white);
    color: var(--blue-color);
    font-size: 18px;
    padding: 16px;
    border-radius: var(--radius-5);
    margin-block-start: 12px;
    transition: var(--transition-1);
  }

  .gallery-card .card-btn:is(:hover, :focus) {
    background-color: var(--blue-color);
    color: var(--white);
  }





  /*-----------------------------------*\
#APPOINTMENT
\*-----------------------------------*/

  .appoin {
    padding-block-start: 0;
  }

  .appoin-card .card-banner {
    display: none;
  }

  .appoin-card .card-content {
    background-color: var(--blue-color);
    padding: 80px 15px;
    text-align: center;
    color: var(--white);
  }

  .appoin-card .section-title {
    color: var(--white);
  }

  .appoin-card .section-text {
    margin-block: 15px 55px;
  }

  .input-field {
    background-color: var(--white);
    color: var(--davys-gray);
    min-height: 56px;
    padding-inline: 25px;
    border-radius: var(--radius-5);
    margin-block-end: 20px;
    outline: none;
    outline-offset: 0;
  }

  .input-field:focus {
    outline: 3px solid var(--black_30);
  }

  select.input-field {
    appearance: none;
  }

  select.input-field,
  .input-field::placeholder,
  .input-field.date {
    font-family: var(--ff-oswald);
    color: var(--eerie-black-1);
    font-weight: var(--fw-500);
  }

  .input-field>option {
    color: var(--sonic-silver);
    font-family: var(--ff-rubik);
  }

  .input-field.date {
    text-transform: uppercase;
  }

  .input-field::-webkit-calendar-picker-indicator {
    opacity: 0.85;
  }

  textarea.input-field {
    padding-block: 15px;
    min-height: 100px;
    height: 120px;
    max-height: 150px;
    resize: vertical;
  }

  .form-btn {
    color: var(--white);
    font-family: var(--ff-oswald);
    font-size: var(--fs-14);
    font-weight: var(--fw-500);
    text-transform: uppercase;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    border: 1px solid var(--white);
    padding: 13px;
    border-radius: var(--radius-5);
    transition: var(--transition-1);
  }

  .form-btn:is(:hover, :focus) {
    background-color: var(--white);
    color: var(--eerie-black-1);
  }





  /*-----------------------------------*\
#FOOTER
\*-----------------------------------*/

  .footer {
    background-color: var(--eerie-black-2);
    padding-block-end: 30px;
  }

  .footer-top {
    margin-block-end: 65px;
  }

  .footer-brand {
    border: 1px solid var(--white_10);
    margin-block-end: 70px;
  }

  .footer .logo {
    text-align: center;
    padding: 25px;
    border-block-end: 1px solid var(--white_10);
  }

  .footer .input-wrapper {
    background-color: var(--white);
    position: relative;
    margin: 25px;
    padding: 15px;
  }

  .footer .input-wrapper:focus-within {
    outline: 3px solid var(--white_30);
  }

  .footer .email-field {
    text-align: center;
    margin-block-end: 15px;
    color: inherit;
    outline: none;
  }

  .footer .btn {
    max-width: 100%;
    width: 100%;
    justify-content: center;
  }

  .footer-link-box {
    display: grid;
    gap: 50px;
  }

  .footer-list-title {
    color: var(--white);
    font-family: var(--ff-oswald);
    font-size: var(--fs-18);
    font-weight: var(--fw-600);
    text-transform: uppercase;
    margin-block-end: 30px;
  }

  .footer-link::before {
    position: static;
    padding: 2.5px;
    background-color: var(--white_30);
    display: block;
    border-radius: 50%;
    transition: var(--transition-1);
  }

  .footer-link,
  .blog-card,
  .blog-card .card-date,
  .footer-list-item {
    display: flex;
    align-items: center;
  }

  .footer-link {
    color: var(--white_50);
    gap: 10px;
    margin-block-start: 8px;
    transition: var(--transition-1);
  }

  .footer-link:is(:hover, :focus) {
    color: var(--white);
  }

  .footer-link:is(:hover, :focus)::before {
    background-color: var(--white);
  }

  .blog-card {
    gap: 25px;
    margin-block-start: 20px;
  }

  .blog-card .card-banner {
    flex-shrink: 0;
  }

  .blog-card .card-title {
    color: var(--white);
    font-family: var(--ff-oswald);
    font-size: var(--fs-14);
    font-weight: var(--fw-500);
    line-height: 1.5;
    margin-block-end: 5px;
    transition: var(--transition-1);
  }

  .blog-card .card-title:is(:hover, :focus) {
    color: var(--blue-color);
  }

  .blog-card .card-date {
    gap: 5px;
    font-size: var(--fs-13);
    text-transform: uppercase;
    color: var(--white_50);
  }

  .blog-card .card-date ion-icon {
    --ionicon-stroke-width: 50px;
  }

  .footer-list-item {
    align-items: flex-start;
    gap: 10px;
    margin-block-start: 10px;
  }

  .footer-list-item ion-icon {
    color: var(--blue-color);
    font-size: 18px;
    flex-shrink: 0;
    --ionicon-stroke-width: 50px;
    margin-block: 7px;
  }

  .contact-link {
    color: var(--white_50);
    transition: var(--transition-1);
  }

  a.contact-link:is(:hover, :focus) {
    color: var(--white);
  }

  .footer-bottom {
    background-color: var(--eerie-black-3);
    text-align: center;
    padding: 15px;
  }

  .copyright-link {
    display: inline-block;
    color: var(--blue-color);
  }





  /*-----------------------------------*\
#BACK TO TOP
\*-----------------------------------*/

  .back-top-btn {
    position: fixed;
    bottom: 10px;
    right: 20px;
    background-color: var(--blue-dark);
    color: var(--white);
    font-size: 20px;
    padding: 10px;
    border-radius: var(--radius-5);
    z-index: 4;
    opacity: 0;
    visibility: hidden;
    transition: var(--transition-1);
  }

  .back-top-btn.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(-10px);
  }

  @media (min-width: 575px) {

    /**
 * CUSTOM PROPERTY
 */

    :root {

      --fs-40: 6rem;

    }

    .container,
    .header-top {
      max-width: 540px;
      width: 100%;
      margin-inline: auto;
    }

    .btn {
      padding: 13px 40px;
    }

    .h2 {
      --fs-30: 3.5rem;
    }

    /**
 * HEADER
 */

    .header-top {
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      max-width: 600px;
      z-index: 4;
      background-color: var(--white);
      border-radius: 0 0 20px 20px;
    }

    .header-top-item:first-child {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .header-top-item ion-icon {
      font-size: 18px;
      color: var(--blue-color);
      --ionicon-stroke-width: 50px;
    }

    .header-top-item .item-title {
      color: var(--eerie-black-1);
      font-weight: var(--fw-500);
    }

    .header-top-item .item-link {
      transition: var(--transition-1);
    }

    .header-top-item .item-link:is(:hover, :focus) {
      color: var(--blue-color);
    }

    .header-top-list {
      justify-content: space-between;
    }

    .logo {
      font-size: 3rem;
    }

    .logo .span {
      font-size: 1.4rem;
    }



    /**
 * HERO
 */

    .hero {
      padding-block-start: calc(var(--section-padding) + 80px);
    }

    .hero-text {
      font-size: var(--fs-18);
    }



    /**
 * PRICING
 */

    .filter-btn .btn-icon {
      display: block;
      font-size: 55px;
      line-height: 1;
      margin-block-end: 5px;
    }

    .pricing-card {
      flex-wrap: nowrap;
      align-items: center;
      gap: 30px;
    }

    .pricing-card .wrapper {
      order: 0;
    }

    .pricing-card .card-price {
      align-self: flex-start;
      line-height: 1.6;
    }



    /**
 * GALLERY
 */

    .gallery .grid-list {
      grid-template-columns: 1fr 1fr;
    }



    /**
 * APPOINTMENT
 */

    .appoin-card .card-content {
      padding-inline: 50px;
    }



    /**
 * FOOTER
 */

    .footer .email-field {
      margin-block-end: 0;
      text-align: left;
      font-size: var(--fs-18);
      padding: 10px 15px;
      padding-inline-end: 210px;
    }

    .footer .btn {
      position: absolute;
      top: 15px;
      right: 15px;
      bottom: 15px;
      width: max-content;
    }

    .footer-link-box {
      grid-template-columns: 1fr 1fr;
    }

    .footer-list:is(:nth-child(3), :nth-child(4)) {
      grid-column: 1 / 3;
    }

    .blog-card .card-title {
      --fs-14: 1.7rem;
      max-width: 25ch;
    }

  }





  /**
* responsive for large than 768px screen
*/

  @media (min-width: 768px) {

    /**
 * CUSTOM PROPERTY
 */

    :root {

      /**
   * typography
   */

      --fs-40: 8rem;

    }



    /**
 * REUSED STYLE
 */

    .container {
      max-width: 720px;
    }

    .h2 {
      --fs-30: 4rem;
    }

    .section-text {
      max-width: 50ch;
      margin-inline: auto;
    }



    /**
 * HEADER
 */

    .header-top {
      max-width: 780px;
    }



    /**
 * SERVICE
 */

    .service .grid-list {
      grid-template-columns: 1fr 1fr;
    }



    /**
 * PRICING
 */

    .pricing-tab-container {
      padding: 40px;
    }

    .pricing-card .wrapper {
      margin-inline-end: auto;
    }



    /**
 * GALLERY
 */

    .gallery .section-text {
      margin-inline: 0;
    }

    .gallery-card .card-content {
      inset: 30px;
    }



    /**
 * APPOINTMENT
 */

    .appoin-card .card-banner {
      display: block;
    }

    .appoin-card {
      display: flex;
    }



    /**
 * FOOTER
 */

    .footer-list:is(:nth-child(3), :nth-child(4)) {
      grid-column: auto;
    }

  }





  /**
* responsive for large than 992px screen
*/

  @media (min-width: 992px) {

    /**
 * CUSTOM PROPERTY
 */

    :root {

      /**
   * typography
   */

      --fs-40: 10rem;

    }



    /**
 * REUSED STYLE
 */

    .container {
      max-width: 960px;
    }



    /**
 * HEADER
 */

    .nav-toggle-btn {
      display: none;
    }

    .header-top {
      max-width: 1020px;
    }

    .header-bottom {
      padding-block: 20px;
    }

    .navbar,
    .navbar-list,
    .navbar-item {
      all: unset;
    }

    .navbar-list,
    .header .btn {
      display: flex;
    }

    .navbar-link {
      padding-inline: 10px;
    }



    /**
 * HERO
 */

    .hero {
      --section-padding: 150px;
      padding-block-start: calc(var(--section-padding) + 100px);
    }

    .hero-title,
    .hero-text {
      max-width: 600px;
    }



    /**
 * SERVICE
 */

    .service .grid-list {
      grid-template-columns: repeat(3, 1fr);
    }



    /**
 * PRICING
 */

    .pricing .grid-list {
      grid-template-columns: 1fr 1fr;
    }

    .pricing-card {
      height: 100%;
    }

    .pricing-card .card-banner {
      flex-shrink: 0;
    }



    /**
 * GALLERY
 */

    .gallery .title-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
    }

    .gallery .section-text {
      margin-block-end: 0;
    }



    /**
 * APPOINTMENT
 */

    .appoin-card .input-wrapper {
      display: flex;
      gap: 20px;
    }



    /**
 * FOOTER
 */

    .footer-brand {
      display: flex;
      align-items: center;
    }

    .footer .logo {
      padding: 60px 70px;
      border-block-end: none;
      border-inline-end: 1px solid var(--white_10);
    }

    .footer .input-wrapper {
      flex-grow: 1;
      margin-inline: 70px;
    }

  }





  /**
* responsive for large than 1200px screen
*/

  @media (min-width: 1200px) {

    /**
 * CUSTOM PROPERTY
 */

    :root {

      /**
   * typography
   */

      --fs-40: 11rem;

      /**
   * spacing
   */

      --section-padding: 120px;

    }

    /**
 * REUSED STYLE
 */
    .container {
      max-width: 1200px;
    }

    /**
 * HEADER
 */
    .header-top {
      max-width: 1260px;
    }

    .header-top-list {
      gap: 30px;
    }

    .header-top-item {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .header-top-item:nth-child(2) {
      margin-inline-end: auto;
    }

    /**
 * HERO
 */
    .hero {
      background-position: left;
      padding-block-end: 200px;
    }

    .hero-title,
    .hero-text {
      max-width: 680px;
    }

    /**
 * PRICING
 */
    .filter-btn {
      min-width: 178px;
    }

    /**
 * GALLERY
 */

    .gallery .grid-list {
      grid-template-columns: repeat(4, 1fr);
    }

    /**
 * APPOINTMENT
 */
    .appoin-card .card-content {
      flex-grow: 1;
    }

    /**
 * FOOTER
 */
    .footer-link-box {
      grid-template-columns: 0.5fr 0.5fr 1fr 0.8fr;
    }

    /**
 * BACK TO TOP
 */
    .back-top-btn {
      padding: 15px;
    }

  }
</style>

<body id="top">
  <!-- 
    - #HEADER
  -->
  <header class="header">
    <div class="header-top">
      <div class="container">
        <ul class="header-top-list">
          <li class="header-top-item">
            <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
            <p class="item-title">Call Us :</p>
            <a href="tel:01234567895" class="item-link">012 (345) 67 895</a>
          </li>
          <li class="header-top-item">
            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
            <p class="item-title">Opening Hour :</p>
            <p class="item-text">Sunday - Friday, 08 am - 09 pm</p>
          </li>
          <li>
            <ul class="social-list">
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="header-bottom" data-header>
      <div class="container">
        <a href="#" class="logo">
          Barbershop
        </a>
        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">
            <li class="navbar-item">
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>
            <li class="navbar-item">
              <a href="#services" class="navbar-link" data-nav-link>Service</a>
            </li>
            <li class="navbar-item">
              <a href="#gallery" class="navbar-link" data-nav-link>Gallery</a>
            </li>
            <li class="navbar-item">
              <a href="#" class="navbar-link" data-nav-link>Contact</a>
            </li>
          </ul>
        </nav>
        <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>
        <a href="#" class="btn has-before">
          <span class="span">Register</span>
          <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
        </a>
      </div>
    </div>
  </header>
  <main>
    <article>

      <!-- 
        - #HERO
      -->
      <section class="section hero has-before has-bg-image" id="home" aria-label="home" style="background-image: url('<?php echo base_url('image/home_page/bg.jpg') ?>')">
        <div class="container">
          <h1 class="h1 hero-title">Barbershop</h1>
          <p class="hero-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vitae exercitationem rerum quibusdam saepe voluptatem quasi est corporis, aliquid non fugiat temporibus esse praesentium, voluptate repellendus totam dolore reprehenderit minus.
          </p>
          <a href="<?php echo base_url('auth/login') ?>" class="btn has-before">
            <span class="span">Login</span>
            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
          </a>
        </div>
      </section>


      <!-- 
        - #SERVICE
      -->
      <section class="section service" id="services" aria-label="services">
        <div class="container">
          <h2 class="h2 section-title text-center">Service We Provide</h2>
          <p class="section-text text-center">
            This is our service, we provide the best service to satisfy you
          </p>
          <ul class="grid-list">
            <li>
              <div class="service-card">
                <div class="card-icon">
                  <i class="flaticon-salon"></i>
                </div>
                <h3 class="h3">
                  <a href="#" class="card-title">Hair Cutting Style</a>
                </h3>
                <p class="card-text">
                  To satisfy our customers, we provide suitable hairstyles for men
                </p>
                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>
            <li>
              <div class="service-card">
                <div class="card-icon">
                  <i class="flaticon-shaving-razor"></i>
                </div>
                <h3 class="h3">
                  <a href="#" class="card-title">Stylist Shaving</a>
                </h3>
                <p class="card-text">
                  We also provide haircut styles to make you more comfortable with your style
                </p>
                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>
            <li>
              <div class="service-card">
                <div class="card-icon">
                  <i class="flaticon-hair-dye"></i>
                </div>
                <h3 class="h3">
                  <a href="#" class="card-title">Multi Hair Colors</a>
                </h3>
                <p class="card-text">
                  We provide hair coloring according to the color you want
                </p>
                <a href="#" class="card-btn" aria-label="more">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>


      <!-- 
        - #PRICING
      -->
      <!-- <section class="section pricing has-bg-image has-before" id="pricing" aria-label="pricing" style="background-image: url('./assets/images/pricing-bg.jpg')">
        <div class="container">
          <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2 pr-4">
              <h2 class="h2 section-title text-left">Awesome Pricing Plan</h2>
              <p class="section-text text-left">
                Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna aliqua suspendisse
              </p>
            </div>
            <div class="w-full md:w-1/2 pl-4">
              <img src="<?php echo base_url('image/home_page/hero-banner.jpg') ?>" alt="image" srcset="">
            </div>
          </div>
      </section> -->
      <!-- 
        - #GALLERY
      -->
      <section class="section gallery" id="gallery" aria-label="photo gallery">
        <div class="container">
          <div class="title-wrapper">
            <div>
              <h2 class="h2 section-title">Latest Photo Gallery</h2>
              <p class="section-text">
                Here are some pictures of haircut styles for you
              </p>
            </div>
            <!-- <a href="#" class="btn has-before">
              <span class="span">Explore More Gallery</span>
              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a> -->
          </div>
          <ul class="grid-list">
            <li>
              <div class="gallery-card">
                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="<?php echo base_url('image/home_page/gallery-1.jpg') ?>" width="422" height="550" loading="lazy" alt="Hair Cutting" class="img-cover">
                </figure>
              </div>
            </li>
            <li>
              <div class="gallery-card">
                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="<?php echo base_url('image/home_page/gallery-2.jpg') ?>" width="422" height="550" loading="lazy" alt="Hair Cutting" class="img-cover">
                </figure>
              </div>
            </li>
            <li>
              <div class="gallery-card">
                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="<?php echo base_url('image/home_page/gallery-3.jpg') ?>" width="422" height="550" loading="lazy" alt="Hair Cutting" class="img-cover">
                </figure>
              </div>
            </li>
            <li>
              <div class="gallery-card">
                <figure class="card-banner img-holder" style="--width: 422; --height: 550;">
                  <img src="<?php echo base_url('image/home_page/gallery-4.jpg') ?>" width="422" height="550" loading="lazy" alt="Hair Cutting" class="img-cover">
                </figure>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- 
    - #FOOTER
  -->

      <footer class="footer has-bg-image" style="background-image: url('<?php echo base_url('image/home_page/footer-bg.png') ?>')">
        <div class="container">
          <div class="footer-top">
            <div class="footer-brand">
            </div>
            <div class="footer-link-box">
              <ul class="footer-list">
                <li>
                  <p class="footer-list-title">Services</p>
                </li>
                <li>  
                  <a href="#" class="footer-link has-before">Hair Cutting</a>
                </li>
                <li>
                  <a href="#" class="footer-link has-before">Shaving Stylist</a>
                </li>
                <li>
                  <a href="#" class="footer-link has-before">Hair Colors</a>
                </li>
              </ul>
              <ul class="footer-list">
                <li>
                  <p class="footer-list-title">Contact Us</p>
                </li>
                <li class="footer-list-item">
                  <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                  <address class="contact-link">
                    7528 Roberts Ave. Palm Bay, FL 32907
                  </address>
                </li>
                <li class="footer-list-item">
                  <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                  <a href="tel:+0123456789" class="contact-link">+62 111 222 444</a>
                </li>
                <li class="footer-list-item">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                  <span class="contact-link">Sun - Friday, 08 am - 09 pm</span>
                </li>
                <li class="footer-list-item">
                  <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                  <a href="mailto:support@gmail.com" class="contact-link">support@gmail.com</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-bottom">
            <p class="copyright">
              &copy; 2024 <a href="#" class="copyright-link">Barbershop</a>. All Rights Reserved.
            </p>
          </div>
        </div>
      </footer>

      <!-- 
    - #BACK TO TOP
  -->

      <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
      </a>


</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
  'use strict';



  /**
   * add event on element
   */

  const addEventOnElem = function(elem, type, callback) {
    if (elem.length > 1) {
      for (let i = 0; i < elem.length; i++) {
        elem[i].addEventListener(type, callback);
      }
    } else {
      elem.addEventListener(type, callback);
    }
  }



  /**
   * navbar toggle
   */

  const navbar = document.querySelector("[data-navbar]");
  const navToggler = document.querySelector("[data-nav-toggler]");
  const navLinks = document.querySelectorAll("[data-nav-link]");

  const toggleNavbar = () => navbar.classList.toggle("active");

  addEventOnElem(navToggler, "click", toggleNavbar);

  const closeNavbar = () => navbar.classList.remove("active");

  addEventOnElem(navLinks, "click", closeNavbar);



  /**
   * header & back top btn active when scroll down to 100px
   */

  const header = document.querySelector("[data-header]");
  const backTopBtn = document.querySelector("[data-back-top-btn]");

  const headerActive = function() {
    if (window.scrollY > 100) {
      header.classList.add("active");
      backTopBtn.classList.add("active");
    } else {
      header.classList.remove("active");
      backTopBtn.classList.remove("active");
    }
  }

  addEventOnElem(window, "scroll", headerActive);



  /**
   * filter function
   */

  const filterBtns = document.querySelectorAll("[data-filter-btn]");
  const filterItems = document.querySelectorAll("[data-filter]");

  let lastClickedFilterBtn = filterBtns[0];

  const filter = function() {
    lastClickedFilterBtn.classList.remove("active");
    this.classList.add("active");
    lastClickedFilterBtn = this;

    for (let i = 0; i < filterItems.length; i++) {
      if (this.dataset.filterBtn === filterItems[i].dataset.filter ||
        this.dataset.filterBtn === "all") {

        filterItems[i].style.display = "block";
        filterItems[i].classList.add("active");

      } else {

        filterItems[i].style.display = "none";
        filterItems[i].classList.remove("active");

      }
    }
  }

  addEventOnElem(filterBtns, "click", filter);
</script>

</html>




<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barbershop</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@300,400;700&display=swap" rel="stylesheet">
</head>




</html> -->