@extends('website.layout.layout')
@section('extra_css')
<style>
    :root {
        --yellow: #FFBD13;
        --blue: #4383FF;
        --blue-d-1: #3278FF;
        --light: #F5F5F5;
        --grey: #AAA;
        --white: #FFF;
        --shadow: 8px 8px 30px rgba(0, 0, 0, .05);
    }

    input[type="time"] {
        position: relative;
        color: #9A9AA3;
        margin: 10px;
    }

    input[type="time"]::-webkit-calendar-picker-indicator {
        display: block;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background: transparent;
    }

    .time-picker {
        margin-right: 10px;
        background-color: #E7E5DC;
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 100%;
        justify-content: center;
        place-items: center;
        margin: auto 12px auto 0;
    }

    .datepicker {
        color: #9A9AA3;
        background-color: #E7E5DC;
        margin: auto 12px;
        padding: 15px 12px;
    }

    input[type="date"] {
        position: relative;
        color: #9A9AA3;
        margin: 10px;
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
        display: block;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background: transparent;
    }

    .date-picker {
        margin-right: 10px;
        background-color: #E7E5DC;
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 100%;
        justify-content: center;
        place-items: center;
        margin: auto 12px auto 0;
    }

    .form {
        margin-top: 0px;
        display: flex;
        flex-direction: column;
    }

    .feedback-wrapper {
        background: var(--white);
        padding: 2rem;
        width: 100%;
        border-radius: .75rem;
        text-align: start;
    }

    /* .feedback-wrapper h3 {
                                font-size: 4rem;
                                margin-bottom: 1rem;
                                font-family: var(--fontFamily-forum);
                                color: #A07E55;
                              } */

    .rating {
        display: flex;
        justify-content: start;
        align-items: center;
        grid-gap: .5rem;
        font-size: 3rem;
        color: #A07E55;
        margin-bottom: 2rem;
    }

    .rating .star {
        cursor: pointer;
    }

    .rating .star.active {
        opacity: 0;
        animation: animate .5s calc(var(--i) * .1s) ease-in-out forwards;
    }

    @keyframes animate {
        0% {
            opacity: 0;
            transform: scale(1);
        }

        50% {
            opacity: 1;
            transform: scale(1.2);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }


    .rating .star:hover {
        transform: scale(1.1);
    }

    textarea {
        width: 100%;
        background: var(--light);
        padding: 1.5rem;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: 2rem;
        color: #A07E55;
    }

    .feedback-text {
        width: 100%;
        background: var(--light);
        padding: 1.5rem;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: 2rem;
        color: #A07E55;
        font-family: var(--fontFamily-dm_sans);
    }

    .email {
        width: 100%;
        background: var(--light);
        padding: 1.5rem;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: 2rem;
        color: #A07E55;
        font-family: var(--fontFamily-dm_sans);
    }

    .phonenumber {
        width: 100%;
        background: var(--light);
        padding: 1.5rem;
        border: none;
        outline: none;
        resize: none;
        margin-bottom: 2rem;
        color: #A07E55;
        font-family: var(--fontFamily-dm_sans);
    }

    .butn-group {
        background-color: #E7E5DC;
        padding: 1rem;
    }

    .butn-group .butn {
        cursor: pointer;
        font-size: 1.5rem;
        font-weight: 500;
        font-family: var(--fontFamily-dm_sans);
    }

    .butn-group .butn.submit {
        color: #A07E55;
        transition: border 0.3s, transform 0.3s;
        font-family: var(--fontFamily-dm_sans);
    }

    .butn-group .butn.submit:hover {
        background: #E7E5DC;
        transform: scale(1.05);
    }


    /**
                            * responsive for larger than 992px screen
                            */

    @media (min-width: 992px) {
        .review-img {
            margin: auto;
            border-radius: 100px;
        }

        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
            padding: 8rem;
        }

        .modal-content {
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 60px auto;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 20%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }


    }


    @media only screen and (max-width: 375px) {
        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .close-btn-wrapper {
            width: 6%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 0px;
        }

        .feedback-wrapper h3 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 20%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }

        .modal-content {
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px 10px 20px 10px;
        }

        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
            /* padding: 8rem; */
        }

        .custom-modal {
            /* display: none; */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1;
        }
    }

    @media only screen and (max-width: 320px) {
        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .feedback-wrapper h3 {
            font-size: 2.2rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .close-btn-wrapper {
            width: 6%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 0px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 30%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }

        .modal-content {
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px 10px 20px 10px;
        }

        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
        }

        .custom-modal {
            /* display: none; */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1;
        }
    }

    @media only screen and (max-width: 425px) {
        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .close-btn-wrapper {
            width: 6%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 0px;
        }

        .feedback-wrapper h3 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .section {
            padding: 25px 0px 25px 0px;
        }

        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 20%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }

        .modal-content {
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px 10px 20px 10px;
        }

        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
        }

        .custom-modal {
            /* display: none; */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1;
        }
    }

    @media only screen and (max-width: 1440px) {
        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
        }

        .close-btn-wrapper {
            width: 10%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 30px;
        }

        .feedback-wrapper h3 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .modal-content {
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 10%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }

    }

    @media only screen and (max-width: 2560px) {
        .feedback-wrapper h3 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .close-btn-wrapper {
            width: 3%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 30px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 10%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }
    }

    @media only screen and (max-width: 1024px) {
        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
        }

        .close-btn-wrapper {
            width: 6%;
            position: relative;
            cursor: pointer;
        }

        .fe-top {
            margin-bottom: 30px;
        }

        .feedback-wrapper h3 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .modal-content {
            width: 78%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px 10px 20px 10px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 10%;
            height: auto;
            padding: 60px 10px 10px 10px;
        }

    }

    @media only screen and (max-width: 768px) {
        .review-img {
            margin: auto;
            border-radius: 100px;
            width: 100px;
            height: 100px;
        }


        .close-btn-wrapper {
            width: 7%;
            position: relative;
            cursor: pointer;
        }


        .feedback-wrapper h3 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-family: var(--fontFamily-forum);
            color: #A07E55;
        }

        .feedback {
            width: 100%;
            justify-content: start;
            align-items: center;
        }

        .modal-content {
            width: 78%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin: 20px 10px 20px 10px;
        }

        .cls-btn {
            cursor: pointer;
            color: #6A432A;
            float: right;
            width: 10%;
            height: auto;
            padding: 10px 10px 10px 10px;
            position: absolute;
            right: 100px;
        }

    }

    .modal-body {
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        /* justify-content: center; */
        align-items: center;
    }

    /* Styles for the modal */
    .custom-modal {
        /* display: none; */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 1;
    }

    .hidden {
        display: none
    }

    .r-body {
        width: 100%;
        position: absolute;
        min-height: 100vh;
        background-color: #fcfcfc;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .r-container {
        position: relative;
        width: 100%;
    }

    .r-container .r-contents-wraper {
        width: 100%;
        min-height: inherit;
        margin: auto;
        text-align: center;
        z-index: 10;
    }

    .r-contents-wraper .header h1 {
        position: relative;
        font-size: 40px;
        text-transform: uppercase;
        font-weight: 500;
        text-align: center;
        letter-spacing: 1px;
    }

    .r-contents-wraper .header h1::before {
        content: '';
        width: 200px;
        height: 2px;
        background-color: #006994;
        border-radius: 15px;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: -10px;
    }

    .r-contents-wraper .testRow {
        width: 90%;
        min-height: inherit;
        position: relative;
        overflow: hidden;
        margin: auto;
    }

    .testRow .testItem {
        width: 100%;
        /* height: 100%; */
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .testRow .testItem:not(.active) {
        top: 0;
        left: -100%;
    }

    .testItem {
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .testItem.active {
        opacity: 1;
    }

    .testRow .testItem img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 5px;
        outline: 2px solid #006994;
        outline-offset: 2px;
    }

    .testRow .testItem h3 {
        font-size: 30px;
        font-style: italic;
        padding: 7px;
    }

    .testRow .testItem h4 {
        font-style: italic;
    }

    .testRow .testItem p {
        font-size: 30px;
        letter-spacing: 1px;
        line-height: 1.2;
        padding: 0px;
        font-family: var(--fontFamily-forum);
    }

    .r-contents-wraper .indicators {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        padding: 5px;
        cursor: pointer;
    }

    .r-contents-wraper .indicators .dot {
        width: 10px;
        height: 10px;
        margin: 0px 3px;
        border: 3px solid #aaa;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.5s ease;
    }

    .r-contents-wraper .indicators .active {
        background-color: #A07E55;
    }

    @keyframes next1 {
        from {
            left: 0%;
        }

        to {
            left: -100%;
        }
    }

    @keyframes next2 {
        from {
            left: 100%;
        }

        to {
            left: 0%;
        }
    }

    @keyframes prev1 {
        from {
            left: 0%;
        }

        to {
            left: 100%;
        }
    }

    @keyframes prev2 {
        from {
            left: -100%;
        }

        to {
            left: 0%;
        }
    }

    @media(max-width: 550px) {
        .r-container .contents-wraper {
            width: 90%;
        }

        .r-contents-wraper .header h1 {
            font-size: 32px;
        }

        .testRow .testItem h3 {
            font-size: 26px;
        }

        .testRow .testItem p {
            font-size: 16px;
            letter-spacing: initial;
            line-height: initial;
        }
    }

    ::placeholder {
        color: #A07E55;
    }

    .address a {
        color: #A07E55;
        font-family: var(--fontFamily-dm_sans);
        font-weight: bold;
        font-size: medium;
        line-height: 30px;
        /* width: 80%; */
        text-align: center;
        margin: auto;
        padding: 5px 0 5px 0;
        text-align: left;
    }

    .contact a {
        color: #A07E55;
        font-family: var(--fontFamily-dm_sans);
        font-weight: bold;
        font-size: medium;
        width: 100%;
        text-align: center;
        margin: 10px 0;
    }

    .banner {
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url(" {{ asset('assets/website/indexImages/banner-img.jpg') }} ") center/cover no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #fff;
        padding: 20px;
    }

    @media (max-width: 320px) {
        .card-container {
            padding: 0 10px 10px 10px;
        }

        h1 {
            padding: 10px 10px 0 10px;
        }

        .hero-title {
            font-size: 4rem;
            font-family: var(--fontFamily-forum);
        }

        .hero-section {
            margin: 0 10px 0 10px;
            height: 300px;
        }

        .tan-img2 {
            width: 100%;
        }

    }



    .center-button {
        text-align: center;
        display: flex;
        justify-content: center;
    }

    /*
                            .card-container {
                            display: grid;
                            grid-template-columns: repeat(2, 1fr);
                            width: 100%;
                            height: 100%;
                            padding: 0 100px;
                            } */

    .card-img {
        background: url(" {{ asset('assets/website/indexImages/4.jpg') }} ") center/cover no-repeat;
        width: 100%;
        height: 100%;
    }

    .card-content {
        width: 100%;
        height: 100%;
    }

    .banner h2 {
        padding-bottom: 40px;
        margin-bottom: 20px;
    }

    .tag {
        text-align: center;
        color: #000;
        font-family: var(--fontFamily-dm_sans);
        font-size: x-large;
        margin: 20px 0 20px 0;
    }

    .card-content {
        background: #fff;
        height: 100%;
    }

    .card-content h3 {
        text-align: center;
        color: #000;
        padding: 20px 0 10px 0;
        font-size: 26px;
        font-weight: 500;
    }

    input[type="time"] {
        position: relative;
    }

    input[type="time"]::-webkit-calendar-picker-indicator {
        display: block;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        position: absolute;
        background: transparent;
    }

    .time-picker {
        margin-right: 10px;
        background-color: white;
        display: flex;
        flex-direction: row;
        width: 100%;
    }

    .form-row {
        margin-bottom: 20px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        place-items: center;
        gap: 15px;
        color: #3E2622;
        font-family: var(--fontFamily-dm_sans);
        text-transform: uppercase;
        font-size: 15px;
    }

    .form-row input[type="text"] {
        background-color: white;
        padding: 8px;
    }

    .form-row input,
    .form-row textarea {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    .form-row input[type="number"],
    .form-row input[type="date"],
    .form-row input[type="time"],
    .form-row input[type="tel"],
    .form-row input[type="email"] {
        background-color: white;
        padding: 8px;
    }

    .form-row p {
        background-color: white;
        padding: 8px;
    }

    .form-row p {
        margin: 0;
    }

    .second-con {
        min-height: 100%;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Lato', sans-serif;
        overflow-x: hidden;
    }


    .one-container {
        max-width: 1100px;
        width: 100%;
        padding: 20px 0;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: transparent;
        border-radius: 5px;

        .left-side {

            height: 450px;
            flex: 3;

            img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }

        .right-side {
            flex: 2;
            text-align: left;
            padding: 0 5rem 0 2rem;
            color: #fff;
            margin: 0;

            h4 {
                opacity: 0.5;
                margin: -0.8rem 0 1.2rem 0;
            }

            ul {
                margin-top: 3rem;
                padding: 0;
                list-style: none;

                li {

                    margin: 2.5rem 0;

                    p {
                        opacity: 0.5;
                    }

                    h3 {
                        margin: -0.5rem 0;
                    }
                }
            }

            .btn {
                border: none;
                outline: none;
                color: #3E2622;
                padding: 1rem;
                width: 100%;
                font-size: 1.5rem;
                cursor: pointer;
                font-family: var(--fontFamily-dm_sans);
                width: 100%;

                /* &:hover {
                                background-color: #f3f3f3;
                                color: #3E2622;
                                transition: 0.4s ease all;
                            } */
            }
        }
    }


    @media(max-width: 800px) {

        .second-con {
            padding: 5rem 0;
        }

        .one-container {
            width: 100%;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: transparent;

            .left-side {

                height: 450px;
                flex: 3;

                img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-top-left-radius: 5px;
                    border-top-right-radius: 5px;
                }
            }

            .right-side {
                flex: 3;
                text-align: center;
                color: #fff;
                padding: 0 2rem 0 2rem;
                margin: 0;

                ul {
                    margin-top: 3rem;
                    list-style: none;
                }

                .btn {
                    margin: 1.5rem 0;
                }
            }
        }
    }

    @media(max-width: 550px) {

        .one-container {
            width: 100%;
        }
    }

    @media(max-width: 400px) {

        .one-container {
            width: 100%;
        }
    }

    @media(max-width: 992px) {
        /* .card-container {
                            grid-template-columns: 100%;
                            width: 100vw;
                            }

                            .card-img {
                            height: 330px;
                            } */
    }

    body.modal-open {
        overflow: hidden;
    }

    .bg-A07E55 {
        background-color: #E7E5DC;
        /* Additional styles go here */
    }

    .hidden {
        display: none;
    }

    .map-container,
    .text-container {
        height: 400px;
        /* Set the desired height */
    }

    .banner-section {
        display: none;
    }

    .modal-container {
        top: 13%;

    }

    .modal-container.hidden {
        display: none;
    }

    /* Style to hide the scrollbar on the body when the modal is open */
    body.modal-open {
        overflow: hidden;
    }

    @media (max-width: 320px) {
        .card-img {
            display: none;
        }

        .card-content {
            width: 80%;
        }

        .location {
            display: block;
            padding: 0 10px 0 10px;
        }

        location-link p {
            text-align: center;
            margin: auto;
            width: 100%;
        }

        p {
            width: 100%;
        }

        .text-container {
            height: 300px;
        }

        .contact {
            display: block;
            padding: 0px 10px 0 10px;
        }

        .order-flex-container {
            display: block;
        }

        .file-body {
            display: block;
        }

        .box-with-para,
        .box-with-html {
            opacity: 0;
            transform: translateX(400%);
            transition: opacity 0.4s ease, transform 0.4s ease;
            box-sizing: border-box;
            object-fit: cover;
            overflow: hidden;
        }


    }

    @media (max-width: 375px) {
        .card-img {
            display: none;
        }

        .card-content {
            width: 80%;
        }

        .location {
            display: block;
            padding: 0 10px 0 10px;
        }

        location-link p {
            text-align: center;
            margin: auto;
            width: 100%;
        }

        p {
            width: 100%;
        }

        .text-container {
            height: 300px;
        }

        .contact {
            display: block;
            padding: 0px 10px 0 10px;
        }

        .order-flex-container {
            display: block;
        }

        .file-body {
            display: block;
        }

        .box-with-para,
        .box-with-html {
            opacity: 0;
            transform: translateX(400%);
            transition: opacity 0.4s ease, transform 0.4s ease;
            box-sizing: border-box;
            object-fit: cover;
            overflow: hidden;
        }

        .footer-distributed {}


    }

    @media (max-width: 425px) {
        .card-img {
            display: none;
        }

        .card-content {
            width: 80%;
        }

        .location {
            display: block;
            padding: 0 10px 0 10px;
        }

        location-link p {
            text-align: center;
            margin: auto;
            width: 100%;
        }

        p {
            width: 100%;
        }

        .text-container {
            height: 300px;
        }

        .contact {
            display: block;
            padding: 0px 10px 0 10px;
        }

        .order-flex-container {
            display: block;
        }

        .file-body {
            display: block;
        }

        .box-with-para,
        .box-with-html {
            opacity: 0;
            transform: translateX(400%);
            transition: opacity 0.4s ease, transform 0.4s ease;
            box-sizing: border-box;
            object-fit: cover;
            overflow: hidden;
        }

    }

    @media (max-width: 768px) {
        .location {
            display: block;
            padding: 0 10px 0 10px;
        }

        location-link p {
            text-align: center;
            margin: auto;
            width: 100%;
        }

        p {
            width: 100%;
        }

        .text-container {
            height: 300px;
        }

        .contact {
            display: block;
            padding: 0px 10px 0 10px;
        }

        .order-flex-container {
            display: block;
        }

        .file-body {
            display: block;
        }

        .box-with-para,
        .box-with-html {
            opacity: 0;
            transform: translateX(400%);
            transition: opacity 0.4s ease, transform 0.4s ease;
            box-sizing: border-box;
            object-fit: cover;
            overflow: hidden;
        }


        .file-body {
            display: block;
        }

        .order-flex-container {
            display: block;
            gap: 0px;
        }

        .box-with-para,
        .box-with-html {
            opacity: 0;
            transform: translateX(400%);
            transition: opacity 0.4s ease, transform 0.4s ease;
            box-sizing: border-box;
            object-fit: cover;
            overflow: hidden;
        }


        .btn-primary {
            padding: 0px 8px;
        }
    }

    @media (min-width: 1440px) {
        .flag {
            display: flex;
        }

        .file-body {
            display: flex;
            font-weight: 300;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
            overflow-x: hidden;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            margin: 10px;
            transform: translateX(400%);
            transition: transform 0.4s ease;
            flex-grow: 1;
            box-sizing: border-box;
        }

        .box:nth-of-type(even) {
            transform: translateX(-400%);
        }

        .box.show {
            transform: translateX(0);
        }

        .order-flex-container {
            display: flex;
            gap: 100px;
        }

        .box-with-para,
        .box-with-html {

            opacity: 0;
            transform: translateX(400%);
            transition: opacity 0.4s ease, transform 0.4s ease;
            box-sizing: border-box;
            object-fit: cover;
            width: 500px;
            height: 450px;
            overflow: hidden;
        }

        .box-with-para.show,
        .box-with-html.show {
            opacity: 1;
            transform: translateX(0);
        }

        .banner-section {
            display: none;
        }
    }

    @media (min-width: 1024px) {
        .flag {
            display: flex;
        }

        .tan-img2 {
            width: 100%;
        }

        .tan-p {
            width: 100%;
        }

        .file-body {
            display: flex;
            font-weight: 300;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
            overflow-x: hidden;
            padding: 0 20px;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            margin: 10px;
            transform: translateX(400%);
            transition: transform 0.4s ease;
            flex-grow: 1;
            box-sizing: border-box;
        }

        .box:nth-of-type(even) {
            transform: translateX(-400%);
        }

        .box.show {
            transform: translateX(0);
        }

        .order-flex-container {
            display: flex;
            gap: 100px;
        }

        .box-with-para,
        .box-with-html {

            opacity: 0;
            transform: translateX(400%);
            transition: opacity 0.4s ease, transform 0.4s ease;
            box-sizing: border-box;
            object-fit: cover;
            width: 500px;
            height: 450px;
            overflow: hidden;
        }

        .box-with-para.show,
        .box-with-html.show {
            opacity: 1;
            transform: translateX(0);
        }

        .banner-section {
            display: none;
        }
    }

    /* Unique Hero Section Styles */
    .hero-section {
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url("{{ asset('assets/website/indexImages/unique-bg.jpg') }}");
        background-size: cover;
        position: relative;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        /* Adjust the overlay color and opacity */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .hero-content {
        text-align: center;
        color: #fff;
        /* Adjust the text color */
    }

    /* Unique Menu Button Styles */
    .unique-btn {
        display: inline-block;
        padding: 10px 20px;
        text-decoration: none;
        color: #fff;
        /* Adjust the button text color */
        /* Adjust the button background color */
        border: 2px solid #fff;
        /* Adjust the button border color */
        transition: background-color 0.3s, color 0.3s;
    }

    .unique-btn:hover {
        /* background-color: #000; */
        /* Adjust the button background color on hover */
        color: #fff;
        /* Adjust the button text color on hover */
    }



    /* Responsive Styles (Add your media queries here) */
    @media screen and (max-width: 768px) {

        /* Adjust styles for smaller screens */
        .unique-hero-title {
            font-size: 24px;
        }

        .unique-btn {
            font-size: 16px;
        }
    }

    .min {
        display: grid;
        /* padding: 2rem 2rem 2rem 0; */
        grid-template-columns: 1fr 1fr;
        /* gap: 10rem; */
        align-items: center;
        max-width: 1800px;
        margin: 0px auto 80px;
        font: 500 100%/1.5 system-ui;
    }

    .min2 {
        display: grid;
        /* padding: 2rem 0 2rem 2rem; */
        grid-template-columns: 1fr 1fr;
        gap: 10rem;
        align-items: center;
        max-width: 1800px;
        justify-items: end;
        margin: 0 auto;
        font: 500 100%/1.5 system-ui;
    }

    .tan-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .tan-img2 {
        width: 100%;
        height: 100%;
        /* overflow: hidden; */
    }

    .tan-img2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }


    @media (max-width: 650px) {
        .min {
            display: block;
            font-size: 80%;
        }

        .tan-text {
            position: relative;
            margin: 0rem 0 2rem 1rem;
            padding: 1rem;
            background: rgba(white, 0.8);
        }

        .min2 {
            display: block;
            font-size: 80%;
        }

        .tan-text2 {
            position: relative;
            margin: 0rem 0 2rem 1rem;
            padding: 1rem;
            background: rgba(white, 0.8);
        }
    }

    .resbtn {
        position: relative;
        color: var(--white);
        font-size: var(--fontSize-label-2);
        font-weight: var(--weight-bold);
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-2);
        max-width: max-content;
        border: 2px solid #2D1E16;
        padding: 10px 40px 0 40px;
        overflow: hidden;
        z-index: 1;
    }

    .resbtn::before {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 200%;
        height: 200%;
        border-radius: var(--radius-circle);
        background-color: #A07E55;
        transition: var(--transition-2);
        z-index: -1;
    }

    .resbtn .text {
        transition: var(--transition-1);
    }

    .resbtn .text-2 {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        min-width: max-content;
        color: whitesmoke;
    }

    .resbtn:is(:hover, :focus-visible)::before {
        bottom: -50%;
    }

    .resbtn:is(:hover, :focus-visible) .text-1 {
        transform: translateY(-40px);
    }

    .resbtn:is(:hover, :focus-visible) .text-2 {
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .resbtn-text {
        color: var(--gold-crayola);
        padding-block-end: 4px;
        margin-inline: auto;
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-3);
        font-weight: var(--weight-bold);
        transition: var(--transition-1);
    }

    .resbtn-text:is(:hover, :focus-visible) {
        color: #6A432A;
    }

    .day-height {
        background: #E7E5DC;
        /* height: 7vh; */
        color: #9A9AA3;
        padding: 15px;
    }

    .book-container-height {

        height: 70vh;
    }

    .special-reqField {
        height: 12vh;
        color: #9A9AA3;
        background: #E7E5DC;
    }

    .button-bg {
        background: #A07E56;
        height: 7vh;
    }

    .label-color {
        color: burlywood
    }

    /* Smartphones (Portrait and Landscape) */
    @media only screen and (max-width: 480px) {
        .review-cont {
            display: flex;
            flex-direction: column;
        }

        .contact-business {
            padding: 10px;
        }

        .min .tan-text {
            padding-right: 0px;
        }

        .min2 .tan-text2 {
            padding-right: 0px;
        }

        .min {
            /* display: grid; */
            /* padding: 2rem 2rem 2rem 0; */
            /* grid-template-columns: 1fr 1fr; */
            /* gap: 10rem; */
            align-items: center;
            max-width: 1800px;
            margin: auto;
            font: 500 100% / 1.5 system-ui;
        }

        .tan-img {
            max-width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .min2 {
            /* display: grid;
                            padding: 2rem 0 2rem 2rem;
                            grid-template-columns: 1fr 1fr;
                            gap: 1rem; */
            align-items: center;
            max-width: 1800px;
            justify-items: end;
            margin: auto;
            font: 500 100%/1.5 system-ui;
        }

        .hero-title {
            text-transform: uppercase;
            letter-spacing: 10px;
            font-family: var(--fontFamily-forum);
            font-size: 4rem;
        }
    }

    @media only screen and (max-width: 380px) {

        /* Styles for screens smaller than 380px */
        .review-cont {
            display: flex;
            flex-direction: column;
        }

        .contact-business {
            padding: 10px;
        }

        .min .tan-text {
            padding-right: 0px;
        }

        .min {
            /* display: grid; */
            /* padding: 2rem 2rem 2rem 0; */
            /* grid-template-columns: 1fr 1fr; */
            /* gap: 10rem; */
            align-items: center;
            max-width: 1800px;
            margin: auto;
            font: 500 100% / 1.5 system-ui;
        }

        .min2 {
            /* display: grid;
                            padding: 2rem 0 2rem 2rem;
                            grid-template-columns: 1fr 1fr;
                            gap: 1rem; */
            align-items: center;
            max-width: 1800px;
            justify-items: end;
            margin: auto;
            font: 500 100%/1.5 system-ui;
        }

        .tan-img {
            max-width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .hero-title {
            text-transform: uppercase;
            letter-spacing: 10px;
            font-family: var(--fontFamily-forum);
            font-size: 4rem;
        }
    }

    /* Tablets (Portrait and Landscape) */
    @media only screen and (min-width: 481px) and (max-width: 768px) {
        .review-cont {
            display: flex;
            flex-direction: column;
        }

        .contact-business {
            padding: 10px;
        }

        .min .tan-text {
            padding-right: 0px;
        }

        .min2 .tan-text2 {
            padding-right: 0px;
        }

        .tan-img {
            max-width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .min {
            display: grid;
            /* padding: 2rem 2rem 2rem 0; */
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: center;
            max-width: 1800px;
            margin: 0px auto 80px;
            font: 500 100% / 1.5 system-ui;
        }

        .min2 {
            display: grid;
            padding: 2rem 0 2rem 2rem;
            grid-template-columns: 1fr 1fr;
            gap: 10rem;
            align-items: center;
            max-width: 1800px;
            justify-items: end;
            margin: 0 auto;
            font: 500 100%/1.5 system-ui;
        }

        .hero-title {
            text-transform: uppercase;
            letter-spacing: 10px;
            font-family: var(--fontFamily-forum);
            font-size: 10rem;
        }
    }



    /* Small Laptops and Desktops */
    @media only screen and (min-width: 769px) and (max-width: 1024px) {
        .review-cont {
            display: flex;
            flex-direction: row;
        }

        .contact-business {
            padding: 50px;
        }

        .min .tan-text {
            padding-right: 70px;
        }

        .min2 .tan-text2 {
            padding-left: 70px;
        }

        .tan-img {
            max-width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .min {
            display: grid;
            /* padding: 2rem 2rem 2rem 0; */
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            align-items: center;
            max-width: 1800px;
            margin: 0px auto 80px;
            font: 500 100% / 1.5 system-ui;
        }

        .min2 {
            display: grid;
            padding: 2rem 0 2rem 2rem;
            /* grid-template-columns: 1fr 1fr; */
            gap: 2rem;
            align-items: center;
            max-width: 1800px;
            justify-items: end;
            margin: 0 auto;
            font: 500 100%/1.5 system-ui;
        }

        .hero-title {
            text-transform: uppercase;
            letter-spacing: 10px;
            font-family: var(--fontFamily-forum);
            font-size: 10rem;
        }
    }

    /* Medium to Large Desktops */
    @media only screen and (min-width: 1025px) and (max-width: 1440px) {
        .review-cont {
            display: flex;
            flex-direction: row;
        }

        .contact-business {
            padding: 50px;
        }

        .min .tan-text {
            padding-right: 70px;
        }

        .min2 .tan-text2 {
            padding-left: 70px;
        }

        .tan-img {
            max-width: 100%;
            height: auto;
            overflow: hidden;
        }

        .form-row {
            margin-bottom: 20px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            place-items: center;
            gap: 15px;
            color: #3E2622;
            font-family: var(--fontFamily-dm_sans);
            text-transform: uppercase;
            font-size: 15px;
        }

        .form-row input[type="text"] {
            background-color: white;
            padding: 8px;
        }

        .form-row input,
        .form-row textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .form-row input[type="number"],
        .form-row input[type="date"],
        .form-row input[type="time"],
        .form-row input[type="tel"],
        .form-row input[type="email"] {
            background-color: white;
            padding: 8px;
        }

        .form-row p {
            background-color: white;
            padding: 8px;
        }

        .form-row p {
            margin: 0;
        }

        .min {
            display: grid;
            /* padding: 2rem 2rem 2rem 0; */
            grid-template-columns: 1fr 1fr;
            gap: 10rem;
            align-items: center;
            max-width: 1800px;
            margin: 0px auto 80px;
            font: 500 100% / 1.5 system-ui;
        }

        .min2 {
            display: grid;
            /* padding: 2rem 0 2rem 2rem; */
            grid-template-columns: 1fr 1fr;
            gap: 10rem;
            align-items: center;
            max-width: 1800px;
            justify-items: end;
            margin: 0 auto;
            font: 500 100%/1.5 system-ui;
        }

        .hero-title {
            text-transform: uppercase;
            letter-spacing: 10px;
            font-family: var(--fontFamily-forum);
            font-size: 15rem;
        }
    }

    /* Large Desktops and Beyond */
    @media only screen and (min-width: 1441px) {
        .review-cont {
            display: flex;
            flex-direction: row;
        }

        .contact-business {
            padding: 50px;
        }

        .min .tan-text {
            padding-right: 70px;
        }

        .min2 .tan-text2 {
            padding-left: 70px;
        }

        .tan-img {
            max-width: 100%;
            height: auto;
            overflow: hidden;
        }

        .min {
            display: grid;
            /* padding: 2rem 2rem 2rem 0; */
            grid-template-columns: 1fr 1fr;
            gap: 10rem;
            align-items: center;
            max-width: 1800px;
            margin: 0px auto 80px;
            font: 500 100% / 1.5 system-ui;
        }

        .min2 {
            display: grid;
            /* padding: 2rem 0 2rem 2rem; */
            grid-template-columns: 1fr 1fr;
            gap: 10rem;
            align-items: center;
            max-width: 1800px;
            justify-items: end;
            margin: 0 auto;
            font: 500 100%/1.5 system-ui;
        }

        .hero-title {
            text-transform: uppercase;
            letter-spacing: 10px;
            font-family: var(--fontFamily-forum);
            font-size: 15rem;
        }
    }


    @media screen and (min-width: 320px) and (max-width: 375px) {

        .discover_seprator {
            width: 22.5rem;
        }

        .chef_seprator {
            width: 22rem;
        }

    }

    @media screen and (min-width: 375px) and (max-width: 425px) {
        .discover_seprator {
            width: 22rem;
        }

        .chef_seprator {
            width: 23rem;
        }

    }

    @media screen and (min-width: 425px) and (max-width: 768px) {
        .discover_seprator {
            width: 23rem;
        }

        .chef_seprator {
            width: 24rem;
        }


    }

    @media screen and (min-width: 768px) and (max-width: 1024px) {
        .discover_seprator {
            width: 29rem;
        }

        .chef_seprator {
            width: 30rem;
        }

    }

    @media screen and (min-width: 1024px) and (max-width: 1440px) {
        .discover_seprator {
            width: 34rem;
        }

        .chef_seprator {
            width: 36rem;
        }


    }

    @media screen and (min-width: 1440px) and (max-width: 2560px) {
        .discover_seprator {
            width: 45rem;
        }

        .chef_seprator {
            width: 43.5rem;
        }


    }
</style>
@endsection
@section('content')

<body id="top">

    <!--
                                - #PRELOADER
                              -->

    <div class="preload" id="loader">
        <div class="circle"></div>
        <p class="text">ANDHRA DINING</p>
    </div>

    <div style="background-color: #FFFFFF;">
        <main>
            <article>

                <!--
                                    - #HERO
                                  -->

                <section class="hero text-center " aria-label="home" id="home" class="banner-section">

                    <ul class="hero-slider" data-hero-slider>
                        <li class="slider-item active" data-hero-slider-item>
                            <div class="slider-bg">
                                <img src=" {{ asset('assets/website/indexImages/ginza.jpeg') }} " width="1880"
                                    height="950" alt="" class="img-cover">
                            </div>
                            <div class="">
                                <h1 class="headline-1" style="color:#fff;">
                                    {!! app()->getLocale() == 'ja' ? $branchData->type_jpn : $branchData->type !!}
                                </h1>
                                <h1 class="hero-title slider-reveal">
                                    {!! app()->getLocale() == 'ja' ? strtoupper($branchData->name_jpn) : strtoupper($branchData->name) !!}

                                </h1>
                            </div>
                        </li>
                    </ul>
                </section>
    </div>

    <section class="section event bg-black-10-1" aria-label="event">
        <div class="container dp-container" style="display: flex; flex-direction: column;">
            <div class="lg:ml-[192px]" style="">
                <img class="discover_seprator" src="{{ asset('assets/website/indexImages/seprator.png') }}" alt="">
                <!-- <p class="section-subtitle-3 label-2-0"></p> -->
                <h2 class=" headline-2-0 text-start font-size-[28px]" style="padding-left:0rem;">
                    {!! translate('discover_our_story') !!}
                </h2>
                <h2 class=" headline-2-0 text-start " style="padding-left:0rem;">{!! translate('The making of') !!}
                    {!! app()->getLocale() == 'ja' ? strtoupper($branchData->name_jpn) : strtoupper($branchData->name) !!}
                </h2>
            </div>

            <div class="dp pt-4"
                style="display: flex; flex-direction: column; align-items: center; text-align: justify">
                {!! translate('Discover the mouthwatering delight of') !!}
            </div>
        </div>
    </section>

    <div style="padding: 100px 0 100px 0; background-color:#FFFFFF;">

        <div class="min">
            <div class="tan-img"><img src=" {{ url($branchData->specialty_1) }} " alt="..." height="" width="" /></div>
            <div class="tan-text">
                <h2 class="headline-1 section-title" style="margin-bottom: 25px;">
                    {!! app()->getLocale() == 'ja' ? $branchData->specialty_1_title_jpn : $branchData->specialty_1_title !!}
                </h2>
                <p class="tan-p w-full lg:w-1/2"
                    style="font-size:15px; display: flex; flex-direction: column; align-items: center; text-align: justify; font-family: var(--fontFamily-dm_sans);">
                    {!! app()->getLocale() == 'ja' ? $branchData->specialty_1_description_jpn : $branchData->specialty_1_desccription !!}
                </p>
            </div>
        </div>

        <div class="min2">
            <div class="tan-text2">
                <h2 class="headline-1 section-title mx-auto" style="margin-bottom: 25px;">
                    {!! app()->getLocale() == 'ja' ? $branchData->specialty_2_title_jpn : $branchData->specialty_2_title !!}
                </h2>
                <p class="tan-p w-full lg:w-1/2 mx-auto"
                    style="font-size:15px; display: flex; flex-direction: column; align-items: center; text-align:justify; font-family: var(--fontFamily-dm_sans);">
                    {!! app()->getLocale() == 'ja' ? $branchData->specialty_2_description_jpn : $branchData->specialty_2_description !!}
                </p>
            </div>
            <div class="tan-img2">
                <img src=" {{ url($branchData->specialty_2) }} " alt="..." height="" width="" />
            </div>
        </div>
    </div>




    <!-- ----------------- menu ------------------  -->
    <section>
        <div class=""
            style="position: relative; background-image: url('{{ asset('assets/website/indexImages/bannerindex2.png') }}'); background-repeat: no-repeat; background-size: cover; height: 500px;">
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
            </div>
            <div class="ind">
                <h1 class="headline-1 section-title" style="color:white">{!! translate('discover_whats_new') !!}</h1>
                <a href="{{ route('website.menuPage', ['id' => $id]) }}" class="btn btn-primary unique-btn"
                    style="margin: 15px 0 0 0;">
                    <span class="text text-1">{!! translate('our_menu') !!} </span>
                    <span class="text text-2" aria-hidden="true">{!! translate('our_menu') !!}</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ------------- Gallery ----------  -->

    <!-- <section>
                                            <div class="light-box-section" style="padding: 100px 0 100px 0">
                                                <h1 class="section-subtitle-2 label-2-0 text-center">Our Gallery</h1>
                                                <h2 class="headline-1 section-title text-center">Gallery</h2>

                                                <div class="lightBox">
                                                    <div class="lightBox_content">
                                                        <i class="fas fa-times close"></i>
                                                        <div class="logo_icons"></div>
                                                        <div class="showImg">
                                                            <div class="image">
                                                                <img src="images/img1.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="image-gallery">
                                                    <div class="image-container">
                                                        <?php
$imageUrls = [
    '1.jpg',
    '2.jpg',
    '3.jpg',
    '4.jpg',
    '5.jpg',
    '6.jpg',
];

foreach ($imageUrls as $imageUrl) {
                            ?>
                                                            <div class="image-box">
                                                                <img class="gImg" src="{{ asset('assets/website/indexImages/' . $imageUrl) }}" alt="" />
                                                                <div class="logo_icons">
                                                                    <a href="#">
                                                                        <div class="text_content">
                                                                            <span class="name">{{ $branchData->name }}</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php
}
                            ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </section> -->


    <section class="section about text-center" aria-labelledby="about-label" id="about"
        style="background-color:#F2F2F2; text-align:left; padding-top:100px;">


        <div class="abt container mx-auto w-full max-w-full" style="gap:80px;">

            <div class="about-content p-10 lg:p-0 md:p-0" style="margin:auto;">
                <div class="" style="">
                    <img class="chef_seprator" src="{{ asset('assets/website/indexImages/seprator.png') }}" alt="">
                    <!-- <p class="section-subtitle-3 label-2-0"></p> -->
                    <h2 class=" headline-2-0 text-start" style="padding-left:0rem;">
                        {!! translate('our_speciality_chef') !!}
                    </h2>
                </div>

                <p class="section-txt my-auto pt-4"
                    style="font-family:var(--fontFamily-dm_sans); padding-right:5px; text-align: justify">
                    {!! stripParagraphTags(translate('our_hyderabad_dum_biryani')) !!}
                </p>
                <div class="contact-label"></div>
            </div>
            <figure class="about-banner lg:h-full lg:object-fill xl:h-full xl:object-fill"
                style="margin-block-end:0px;">
                <img src="{{ asset('assets/website/indexImages/chef2.png') }}" loading="lazy" alt="about banner"
                    class="w-100 h-100 object-cover" data-parallax-item data-parallax-speed="1">
            </figure>
        </div>
    </section>

    <!-- ------- contact form -------  -->

    <div class="text-gray-800 text-xl" style="background-color: #FFFFFF;">

        <div class="container mx-auto lg:p-40" style="background-color: #FFFFFF;">
            <section class="location flex justify-between lg:items-start items-center">
                <div class="w-full h-full lg:pr-8">
                    <div class="map-container" id="gmap_canvas">
                        <!-- Google Maps Embed Goes Here -->
                        <iframe src="{{ $branchData->google_map_link }}" height="100%" width="100%" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <div class=" text-container text-center"
                    style="margin:auto;text-align: center; flex-direction: column;justify-content: center;place-items: self-start;">
                    <h2 class="headline-1 section-title" style="text-align: left; margin-left:60px;" ;>
                        {!! translate('Location') !!}
                    </h2>
                    <div class="address">
                        <a href="#" class="location-link">
                            <p style="width:100%">
                                {!! app()->getLocale() == 'ja' ? $branchData->address_jpn : $branchData->address !!}
                                ({{ $branchData->seating_ability }}
                                seats)
                            </p>
                        </a><br />
                        <a href="#" class="location-link">
                            <p style="width:100%">
                                {!! app()->getLocale() == 'ja' ? $branchData->distance_from_jpn : $branchData->distence_from !!}
                            </p>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="contact-business grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1 place-items-center justify-center gap-14"
        style="background:#E7E5DC;">
        <div class="bg-white contact grid grid-cols-1 place-items-start justify-center text-center lg:text-start md:w-[40%] lg:w-[40%] xl:w-[40%] w-full h-full"
            style="padding: 40px 50px; margin:10px 0; ">
            <a href="#" class="contact-link" style="text-align:left">
                <p class="contact-link font-thin text-5xl" style="letter-spacing: 3px;">
                    {!! translate('business_hours') !!}
                </p>
            </a>
            <a href="#" class="contact-link" style="text-align:left">
                <p class="font-thin lg:text-3xl" style="width:100%;">{!! stripParagraphTags(translate('Weekdays')) !!} -
                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $branchData->weekday_opening)->format('g:iA') }} -
                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $branchData->weekday_noon_close)->format('g:iA') }},
                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $branchData->weekday_noon_open)->format('g:iA') }} -
                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $branchData->weekday_closing)->format('g:iA') }}
                </p>
                <p class="font-thin lg:text-3xl pt-6" style="width:100%">
                    {!! stripParagraphTags(translate('Weekends')) !!}
                    -
                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $branchData->weekend_opening)->format('g:iA') }} -
                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $branchData->weekend_noon_close)->format('g:iA') }},
                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $branchData->weekend_noon_open)->format('g:iA') }} -
                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $branchData->weekend_closing)->format('g:iA') }}
                </p>
            </a>
        </div>

        <div class="bg-white contact grid grid-cols-1 place-items-start justify-center text-center lg:text-start md:w-[40%] lg:w-[40%] xl:w-[40%] w-full h-full"
            style="padding: 40px 50px; margin:10px 0;">
            <a href="#" class="contact-link" style="text-align:left">
                <p class="contact-link font-thin lg:text-5xl" style="letter-spacing: 3px;">
                    {!! stripParagraphTags(translate('contact_us'))!!}
                </p>
            </a>
            <a href="#" class="contact-link" style="text-align:left">
                <p class="font-thin lg:text-3xl" style="width:100%">{!! stripParagraphTags(translate('TEL')) !!} :
                    {{ $branchData->phone }}
                </p>
                <p class="font-thin lg:text-3xl pt-6" style="width:100%">{!! stripParagraphTags(translate('Email')) !!}:
                    Andhradining_ginza@gmail.com
                </p>
            </a>
        </div>
    </div>

    <div class="container mx-auto w-full max-w-full" style="padding: 50px 0; background-color:white;">
        <div class="grid grid-cols-3 gap-8">
            <div class="overflow-hidden">
                <img src=" {{ asset('assets/website/indexImages/chicken.jpg') }} " alt=" Image 1"
                    class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src=" {{ asset('assets/website/indexImages/table.jpg') }} " alt="Image 2"
                    class="w-full h-full object-cover">
            </div>
            <div class="overflow-hidden">
                <img src=" {{ asset('assets/website/indexImages/dosa.jpg') }} " alt="Image 3"
                    class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <section>
        <div class=""
            style="position: relative; background-image: url('{{ asset('assets/website/indexImages/bannerindex2.png') }}'); background-repeat: no-repeat; background-size: cover; height: 500px;">
            <div
                style="position: absolute; top: 0; left: 0; width: fit-content; height: fit-content; background-color: rgba(0, 0, 0, 0.5);">
            </div>
            <div class="ind">
                <h1 class="headline-1 section-title" style="color:white">{!! translate('we_value_your_opinion') !!}</h1>
                {{-- <a class="open-modal-btn btn btn-primary" id="openModalBtn"
                    style="margin: 15px 0 0 0; cursor:pointer;">
                    <span class="text text-1" style="font-family: var(--fontFamily-dm_sans);">Give us a Review</span>
                </a> --}}

                <div class="modal-body" style="">
                    <a class="open-modal-btn btn btn-primary" id="openModalBtn"
                        style="color:white; border-color:white; margin: 15px 0 0 0; cursor:pointer;">
                        <span class="text text-1"
                            style="font-family: var(--fontFamily-dm_sans);">{!! translate('give_review') !!}</span>
                    </a>

                    <!-- Modal -->
                    <div class="custom-modal hidden" id="customModal">
                        <div class="modal-content">
                            <div class="feedback">
                                <div class="feedback-wrapper">
                                    <div class="fe-top flex flex-row-2 items-start gap-14 justify-between">
                                        <h3>{!! translate('give_us_your_feedback') !!}</h3>
                                        <div class="close-btn-wrapper">
                                            <img src="{{ asset('assets/website/indexImages/cancel.png') }}" class=""
                                                id="closeModalBtn" alt="Close">
                                        </div>
                                    </div>
                                    <form action="{{ route('website.storeReview') }}" method="post" class="form">
                                        @csrf
                                        <div class="rating">
                                            <input type="number" name="rating" hidden>
                                            <i class='bx bx-star star' style="--i: 0;"></i>
                                            <i class='bx bx-star star' style="--i: 1;"></i>
                                            <i class='bx bx-star star' style="--i: 2;"></i>
                                            <i class='bx bx-star star' style="--i: 3;"></i>
                                            <i class='bx bx-star star' style="--i: 4;"></i>
                                        </div>
                                        <input type="text" name="name"
                                            placeholder="{!! stripParagraphTags(translate('name')) !!}"
                                            class="feedback-text" required>
                                        <div class="email-phn">
                                            <div style="width: 100%; height: 100%;"><input type="email" name="email"
                                                    placeholder="{!! stripParagraphTags(translate('email_optional')) !!}"
                                                    class="email">
                                            </div>
                                            <div style="width: 100%; height: 100%;"><input type="tel" name="phone"
                                                    placeholder="{!! stripParagraphTags(translate('phone_number_optional')) !!}"
                                                    class="phonenumber"></div>
                                        </div>
                                        <input type="hidden" name="type" id="type" value="0">
                                        <textarea name="opinion" cols="30" rows="5"
                                            placeholder="{!! stripParagraphTags(translate('how_was_your_experience')) !!}"
                                            required></textarea>
                                        <div class="butn-group"
                                            style="padding:1.2rem 2rem; align-self: flex-end; width: 100%">
                                            <button type="submit"
                                                class="butn butn submit">{!! stripParagraphTags(translate('submit')) !!}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <div id="dynamicSectionsContainer" class="dynamic-sections-container pb-10 " style="margin-top: 50px;">
        <section class="banner">
            <h1 style="font-size: var(--fontSize-headline-2);margin: 10px;">
                {!! stripParagraphTags(translate('book_your_table_now')) !!}
                {!! app()->getLocale() == 'ja' ? strtoupper($branchData->name_jpn) : strtoupper($branchData->name) !!}
            </h1>
            <div class="card-container" style="width:100%; height:100%;">
                <div class="grid place-items-center p-6 md:p-20 lg:p-20 xl:p-20 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2"
                    style="column-gap: 30px; ">
                    <div class="card-img" style="margin-left: 30px"></div>
                    <div class="second-con" style="background-color: #f2f2f2">
                        <div class="one-container">
                            <div class="right-side">
                                <form action="{{ route('website.reservation') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <input type="text" name="firstName"
                                            placeholder="{!! stripParagraphTags(translate('first_name')) !!}">
                                        @error('firstName')
                                            <div class="" style="color:red">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <input type="text" name="lastName"
                                            placeholder="{!! stripParagraphTags(translate('last_name')) !!}">
                                        @error('lastName')
                                            <div class="" style="color:red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-row">
                                        <input type="number" name="people"
                                            placeholder="{!! stripParagraphTags(translate('how_many_people')) !!}"
                                            min='1'>
                                        @error('people')
                                            <div class="" style="color:red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-row">
                                        <input type="text" id="datepicker" name="days"
                                            placeholder="{!! stripParagraphTags(translate('select_date')) !!}">
                                        @error('days')
                                            <div class="" style="color:red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <div class="time-picker">
                                            <input type="time" name="start_time" id="start_time"
                                                placeholder="Select hour">

                                            @error('start_time')
                                                <div class="" style="color:red">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="time-picker">
                                            <input type="time" name="till" id="till" placeholder="Select hour">

                                            @error('till')
                                                <div class="" style="color:red">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <input type="tel" name="phone"
                                            placeholder="{!! stripParagraphTags(translate('phone_number')) !!}"
                                            min="1">
                                        @error('phone')
                                            <div class="" style="color:red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <input type="email" name="email"
                                            placeholder="{!! stripParagraphTags(translate('Email')) !!}">
                                        @error('email')
                                            <div class="" style="color:red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-row" style="background-color:white;">
                                        <textarea
                                            placeholder="{!! stripParagraphTags(translate('do_you_have_any_dietary_requirements')) !!}"
                                            class="special-reqField" name="requirements"></textarea>
                                        @error('requirements')
                                            <div class="" style="color:red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="id" value="{{ $id }}">
                                    <div class="form-row" style="background-color: #E7E5DC;">
                                        <button type="submit" class="btn">{!! translate('book_table') !!}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    {{--new code   --}}
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    
    <script>
        $(function(){
            var successMessage = @json(session('success'));
            var errorMessage = @json(session('error'));

            if (successMessage) {
                iziToast.success({
                    title: 'Success',
                    message: successMessage,
                    position: 'topRight',
                    timeout: 5000
                });
            }

            if (errorMessage) {
                iziToast.error({
                    title: 'Error',
                    message: errorMessage,
                    position: 'topRight',
                    timeout: 5000
                });
            }
        });
    </script>
    
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <script>
        @if (session('success'))
            iziToast.success({
                title: 'Success',
                message: '{{ session('
                                                                                                                                                                                                                                                success ') }}',
                position: 'topRight',
                timeout: 5000 // Set timeout to 5000 milliseconds (5 seconds)
            });
        @endif

        @if (session('error'))
            iziToast.error({
                title: 'Error',
                message: '{{ session('
                                                                                                                                                                                                                                                error ') }}',
                position: 'topRight',
                timeout: 5000 // Set timeout to 5000 milliseconds (5 seconds)
            });
        @endif
    </script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#form_one').submit(function (event) {
                var startTime = $('#start_time').val();
                var endTime = $('#till').val();

                // Convert time strings to Date objects for comparison
                var startDate = new Date("2000-01-01 " + startTime);
                var endDate = new Date("2000-01-01 " + endTime);

                // Check if start time is greater than or equal to end time
                if (startDate >= endDate) {
                    iziToast.error({
                        title: 'Error',
                        message: 'Start time must be smaller than end time',
                        position: 'topRight',
                        timeout: 5000
                    });
                    event.preventDefault(); // Prevent form submission
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const boxes = document.querySelectorAll('.box');

            window.addEventListener('scroll', checkBoxes);

            function checkBoxes() {
                const triggerBottom = (window.innerHeight / 5) * 4;

                boxes.forEach((box) => {
                    const boxTop = box.getBoundingClientRect().top;

                    if (boxTop < triggerBottom) {
                        box.classList.add('show');
                    } else {
                        box.classList.remove('show');
                    }
                });
            }
        });

        // Function to create a dynamic reservation form section
        // function createReservationSection(title) {
        //     if (title !== "GINZA") {
        //         return null;
        //     }

        //     const section = document.createElement("section");
        //     section.className = "banner";

        //     const h1 = document.createElement("h1");
        //     h1.textContent = `BOOK YOUR TABLE NOW AT ${title}`;
        //     h1.style.margin = "10px 0 20px 0";
        //     h1.style.fontSize = "var(--fontSize-title-1)";

        //     const cardContainer = document.createElement("div");
        //     cardContainer.className = "card-container";

        //     const cardImg = document.createElement("div");
        //     cardImg.className = "card-img";

        // You can set the background image for cardImg here

        // const cardContent = document.createElement("div");
        // cardContent.className = "card-content";

        // const tag = document.createElement("h1");
        // tag.textContent = "Reservation";
        // tag.className = "tag";
        // tag.style.textAlign = "center";
        // tag.style.color = "#000";
        // tag.style.fontFamily = "var(--fontFamily-dm_sans)";
        // tag.style.fontSize = "larger";

        // const timings = document.createElement("p");
        // timings.className = "mx-auto timings";
        // timings.style.color = "#A07E55";
        // timings.style.fontSize = "small";
        // timings.style.fontWeight = "bold";
        // timings.textContent = "Timings: open at 2am closes at 5pm";

        // const reservationForm = document.createElement("form");

        // Add form elements dynamically
        // reservationForm.innerHTML = `
        //     <div class="form-row">
        //         <select name="days">
        //             <option value="day-select">Select Day</option>
        //             <option value="sunday">Sunday</option>
        //             <option value="monday">Monday</option>
        //             <option value="tuesday">Tuesday</option>
        //             <option value="wednesday">Wednesday</option>
        //             <option value="thursday">Thursday</option>
        //             <option value="friday">Friday</option>
        //             <option value="saturday">Saturday</option>
        //         </select>

        //         <select name="hours">
        //             <option value="hour-select">Select Hour</option>
        //             <option value="10">10: 00</option>
        //             <option value="12">12: 00</option>
        //             <option value="14">14: 00</option>
        //             <option value="16">16: 00</option>
        //             <option value="18">18: 00</option>
        //             <option value="20">20: 00</option>
        //             <option value="22">22: 00</option>
        //         </select>
        // </div>

        // <div class="form-row">
        //     <input type="text" placeholder="Full Name">
        //         <input type="text" placeholder="Phone Number">
        //             <input type="email" placeholder="Email"> <!-- Added email input -->
        //             </div>

        //             <div class="form-row">
        //                 <input type="number" placeholder="How Many Persons?" min="1">
        //                     <div class="btn btn-primary" style="
        //                 width:100%;
        //                 color: black;
        //                 height:100%;
        //                 font-family: var(--fontFamily-dm_sans);
        //                 padding: 6px 20px;
        //                 margin-top: 13px;
        //                 letter-spacing: 1px;
        //             ">
        //                         <span class="text text-1">Book Table</span>
        //                         <span class="text text-2" aria-hidden="true">Book Table</span>
        //                     </div>
        //             </div>`;

        // Add event listener to form inputs for changing text color
        // reservationForm.querySelectorAll('input, select').forEach((input) => {
        //     input.addEventListener('input', () => {
        //         input.style.color = "black";
        //     });
        // });

        // Append elements to the container
        // cardContent.appendChild(tag);
        // cardContent.appendChild(timings);
        // cardContent.appendChild(reservationForm);
        // cardContainer.appendChild(cardImg);
        // cardContainer.appendChild(cardContent);
        // section.appendChild(h1);
        // section.appendChild(cardContainer);

        // return section;
        // }

        // Create dynamic reservation sections based on titles
        // const reservationTitles = ["GINZA", "SHIBUYA", "DAIMON", "OKACHIMACHI", "KOMATSUGAWA"];

        // const dynamicSectionsContainer = document.getElementById("dynamicSectionsContainer");

        // reservationTitles.forEach((title) => {
        //     const reservationSection = createReservationSection(title);
        //     if (reservationSection) {
        //         dynamicSectionsContainer.appendChild(reservationSection);
        //     }
        // });
    </script>
    <script>
        var modal = document.getElementById('customModal');
        var openBtn = document.getElementById('openModalBtn');
        var closeBtn = document.getElementById('closeModalBtn');

        function openModal() {
            modal.classList.remove("hidden");
        }

        function closeModal() {
            modal.classList.add("hidden");
        }

        openBtn.addEventListener('click', openModal);
        closeBtn.addEventListener('click', closeModal);

        window.addEventListener('click', function (event) {
            if (event.target === modal) {
                closeModal();
            }
        });

        const allStar = document.querySelectorAll('.rating .star')
        const ratingValue = document.querySelector('.rating input')

        allStar.forEach((item, idx) => {
            item.addEventListener('click', function () {
                let click = 0
                ratingValue.value = idx + 1

                allStar.forEach(i => {
                    i.classList.replace('bxs-star', 'bx-star')
                    i.classList.remove('active')
                })
                for (let i = 0; i < allStar.length; i++) {
                    if (i <= idx) {
                        allStar[i].classList.replace('bx-star', 'bxs-star')
                        allStar[i].classList.add('active')
                    } else {
                        allStar[i].style.setProperty('--i', click)
                        click++
                    }
                }
            })
        })
    </script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/b1gallery.js"></script>

</body>
@endsection
@section('extra_js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
{{-- <script>
    $(document).ready(function () {
        $('form').submit(function (event) {
            var startTime = $('#start_time').val();
            var endTime = $('#till').val();

            // Convert time strings to Date objects for comparison
            var startDate = new Date("2000-01-01 " + startTime);
            var endDate = new Date("2000-01-01 " + endTime);

            // Check if start time is greater than or equal to end time
            if (startDate >= endDate) {
                iziToast.error({
                    title: 'Error',
                    message: 'Start time must be smaller than end time',
                    position: 'topRight',
                    timeout: 5000
                });
                event.preventDefault(); // Prevent form submission
            }
        });
    });
</script> --}}
<script>
    $(document).ready(function () {
        $('form').submit(function (event) {
            var startTime = $('#start_time').val();
            var endTime = $('#till').val();

            // Convert time strings to Date objects for comparison
            var startDate = new Date("2000-01-01 " + startTime);
            var endDate = new Date("2000-01-01 " + endTime);

            // Define the allowed time range (5:00 PM to 9:30 PM)
            var minTime = new Date("2000-01-01 17:00");
            var maxTime = new Date("2000-01-01 21:30");

            // Validate start and end time within the allowed range
            if (startDate < minTime || startDate > maxTime) {
                iziToast.error({
                    title: 'Error',
                    message: 'Start time must be between 5:00 PM and 9:30 PM',
                    position: 'topRight',
                    timeout: 5000
                });
                event.preventDefault();
                return;
            }

            if (endDate < minTime || endDate > maxTime) {
                iziToast.error({
                    title: 'Error',
                    message: 'End time must be between 5:00 PM and 9:30 PM',
                    position: 'topRight',
                    timeout: 5000
                });
                event.preventDefault();
                return;
            }

            // Ensure start time is less than end time
            if (startDate >= endDate) {
                iziToast.error({
                    title: 'Error',
                    message: 'Start time must be smaller than end time',
                    position: 'topRight',
                    timeout: 5000
                });
                event.preventDefault();
            }
        });
    });
</script>

<script>
    $(function () {
        
        $("#datepicker").datepicker({
                minDate: 0 // Disables past dates
            });

    });
</script>
@endsection