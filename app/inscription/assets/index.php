<?php header('Content-Type: text/css') ?>
:root {
    --blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace
}

*,::after,::before {
    box-sizing: border-box
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent
}

article,aside,figcaption,figure,footer,header,hgroup,main,nav,section {
    display: block
}

body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff
}

[tabindex="-1"]:focus:not(:focus-visible) {
    outline: 0!important
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible
}

h1,h2,h3,h4,h5,h6 {
    margin-top: 0;
    margin-bottom: .5rem
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

abbr[data-original-title],abbr[title] {
    text-decoration: underline;
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
    cursor: help;
    border-bottom: 0;
    -webkit-text-decoration-skip-ink: none;
    text-decoration-skip-ink: none
}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: inherit
}

dl,ol,ul {
    margin-top: 0;
    margin-bottom: 1rem
}

ol ol,ol ul,ul ol,ul ul {
    margin-bottom: 0
}

dt {
    font-weight: 700
}

dd {
    margin-bottom: .5rem;
    margin-left: 0
}

blockquote {
    margin: 0 0 1rem
}

b,strong {
    font-weight: bolder
}

small {
    font-size: 80%
}

sub,sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent
}

a:hover {
    color: #0056b3;
    text-decoration: underline
}

a:not([href]) {
    color: inherit;
    text-decoration: none
}

a:not([href]):hover {
    color: inherit;
    text-decoration: none
}

code,kbd,pre,samp {
    font-family: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
    font-size: 1em
}

pre {
    margin-top: 0;
    margin-bottom: 1rem;
    overflow: auto
}

figure {
    margin: 0 0 1rem
}

img {
    vertical-align: middle;
    border-style: none
}

svg {
    overflow: hidden;
    vertical-align: middle
}

table {
    border-collapse: collapse
}

caption {
    padding-top: .75rem;
    padding-bottom: .75rem;
    color: #6c757d;
    text-align: left;
    caption-side: bottom
}

th {
    text-align: inherit
}

label {
    display: inline-block;
    margin-bottom: .5rem
}

button {
    border-radius: 0
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color
}

button,input,optgroup,select,textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

button,input {
    overflow: visible
}

button,select {
    text-transform: none
}

select {
    word-wrap: normal
}

[type=button],[type=reset],[type=submit],button {
    -webkit-appearance: button
}

[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled) {
    cursor: pointer
}

[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner {
    padding: 0;
    border-style: none
}

input[type=checkbox],input[type=radio] {
    box-sizing: border-box;
    padding: 0
}

input[type=date],input[type=datetime-local],input[type=month],input[type=time] {
    -webkit-appearance: listbox
}

textarea {
    overflow: auto;
    resize: vertical
}

fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0
}

legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: .5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal
}

progress {
    vertical-align: baseline
}

[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    outline-offset: -2px;
    -webkit-appearance: none
}

[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button
}

output {
    display: inline-block
}

summary {
    display: list-item;
    cursor: pointer
}

template {
    display: none
}

[hidden] {
    display: none!important
}

.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6 {
    margin-bottom: .5rem;
    font-weight: 500;
    line-height: 1.2
}

.h1,h1 {
    font-size: 2.5rem
}

.h2,h2 {
    font-size: 2rem
}

.h3,h3 {
    font-size: 1.75rem
}

.h4,h4 {
    font-size: 1.5rem
}

.h5,h5 {
    font-size: 1.25rem
}

.h6,h6 {
    font-size: 1rem
}

.lead {
    font-size: 1.25rem;
    font-weight: 300
}

.display-1 {
    font-size: 6rem;
    font-weight: 300;
    line-height: 1.2
}

.display-2 {
    font-size: 5.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-3 {
    font-size: 4.5rem;
    font-weight: 300;
    line-height: 1.2
}

.display-4 {
    font-size: 3.5rem;
    font-weight: 300;
    line-height: 1.2
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1)
}

.small,small {
    font-size: 80%;
    font-weight: 400
}

.mark,mark {
    padding: .2em;
    background-color: #fcf8e3
}

.list-unstyled {
    padding-left: 0;
    list-style: none
}

.list-inline {
    padding-left: 0;
    list-style: none
}

.list-inline-item {
    display: inline-block
}

.list-inline-item:not(:last-child) {
    margin-right: .5rem
}

.initialism {
    font-size: 90%;
    text-transform: uppercase
}

.blockquote {
    margin-bottom: 1rem;
    font-size: 1.25rem
}

.blockquote-footer {
    display: block;
    font-size: 80%;
    color: #6c757d
}

.blockquote-footer::before {
    content: "\2014\00A0"
}

.img-fluid {
    max-width: 100%;
    height: auto
}

.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto
}

.figure {
    display: inline-block
}

.figure-img {
    margin-bottom: .5rem;
    line-height: 1
}

.figure-caption {
    font-size: 90%;
    color: #6c757d
}

code {
    font-size: 87.5%;
    color: #e83e8c;
    word-wrap: break-word
}

a>code {
    color: inherit
}

kbd {
    padding: .2rem .4rem;
    font-size: 87.5%;
    color: #fff;
    background-color: #212529;
    border-radius: .2rem
}

kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700
}

pre {
    display: block;
    font-size: 87.5%;
    color: #212529
}

pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal
}

.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll
}

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

@media (min-width: 576px) {
    .container {
        max-width:540px
    }
}

@media (min-width: 768px) {
    .container {
        max-width:720px
    }
}

@media (min-width: 992px) {
    .container {
        max-width:960px
    }
}

@media (min-width: 1200px) {
    .container {
        max-width:1260px
    }
}

.container-fluid,.container-lg,.container-md,.container-sm,.container-xl {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto
}

@media (min-width: 576px) {
    .container,.container-sm {
        max-width:540px
    }
}

@media (min-width: 768px) {
    .container,.container-md,.container-sm {
        max-width:720px
    }
}

@media (min-width: 992px) {
    .container,.container-lg,.container-md,.container-sm {
        max-width:960px
    }
}

@media (min-width: 1200px) {
    .container,.container-lg,.container-md,.container-sm,.container-xl {
        max-width:1260px
    }
}

.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.no-gutters {
    margin-right: 0;
    margin-left: 0
}

.no-gutters>.col,.no-gutters>[class*=col-] {
    padding-right: 0;
    padding-left: 0
}

.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px
}

.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%
}

.row-cols-1>* {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%
}

.row-cols-2>* {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%
}

.row-cols-3>* {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%
}

.row-cols-4>* {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%
}

.row-cols-5>* {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%
}

.row-cols-6>* {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%
}

.col-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%
}

.col-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%
}

.col-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%
}

.col-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%
}

.col-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%
}

.col-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%
}

.col-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}

.col-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%
}

.col-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%
}

.col-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%
}

.col-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%
}

.col-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%
}

.col-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%
}

.order-first {
    -ms-flex-order: -1;
    order: -1
}

.order-last {
    -ms-flex-order: 13;
    order: 13
}

.order-0 {
    -ms-flex-order: 0;
    order: 0
}

.order-1 {
    -ms-flex-order: 1;
    order: 1
}

.order-2 {
    -ms-flex-order: 2;
    order: 2
}

.order-3 {
    -ms-flex-order: 3;
    order: 3
}

.order-4 {
    -ms-flex-order: 4;
    order: 4
}

.order-5 {
    -ms-flex-order: 5;
    order: 5
}

.order-6 {
    -ms-flex-order: 6;
    order: 6
}

.order-7 {
    -ms-flex-order: 7;
    order: 7
}

.order-8 {
    -ms-flex-order: 8;
    order: 8
}

.order-9 {
    -ms-flex-order: 9;
    order: 9
}

.order-10 {
    -ms-flex-order: 10;
    order: 10
}

.order-11 {
    -ms-flex-order: 11;
    order: 11
}

.order-12 {
    -ms-flex-order: 12;
    order: 12
}

.offset-1 {
    margin-left: 8.333333%
}

.offset-2 {
    margin-left: 16.666667%
}

.offset-3 {
    margin-left: 25%
}

.offset-4 {
    margin-left: 33.333333%
}

.offset-5 {
    margin-left: 41.666667%
}

.offset-6 {
    margin-left: 50%
}

.offset-7 {
    margin-left: 58.333333%
}

.offset-8 {
    margin-left: 66.666667%
}

.offset-9 {
    margin-left: 75%
}

.offset-10 {
    margin-left: 83.333333%
}

.offset-11 {
    margin-left: 91.666667%
}

@media (min-width: 576px) {
    .col-sm {
        -ms-flex-preferred-size:0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .row-cols-sm-1>* {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .row-cols-sm-2>* {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .row-cols-sm-3>* {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .row-cols-sm-4>* {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .row-cols-sm-5>* {
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%
    }

    .row-cols-sm-6>* {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-sm-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-sm-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-sm-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-sm-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-sm-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-sm-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-sm-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-sm-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-sm-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-sm-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-sm-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-sm-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-sm-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-sm-first {
        -ms-flex-order: -1;
        order: -1
    }

    .order-sm-last {
        -ms-flex-order: 13;
        order: 13
    }

    .order-sm-0 {
        -ms-flex-order: 0;
        order: 0
    }

    .order-sm-1 {
        -ms-flex-order: 1;
        order: 1
    }

    .order-sm-2 {
        -ms-flex-order: 2;
        order: 2
    }

    .order-sm-3 {
        -ms-flex-order: 3;
        order: 3
    }

    .order-sm-4 {
        -ms-flex-order: 4;
        order: 4
    }

    .order-sm-5 {
        -ms-flex-order: 5;
        order: 5
    }

    .order-sm-6 {
        -ms-flex-order: 6;
        order: 6
    }

    .order-sm-7 {
        -ms-flex-order: 7;
        order: 7
    }

    .order-sm-8 {
        -ms-flex-order: 8;
        order: 8
    }

    .order-sm-9 {
        -ms-flex-order: 9;
        order: 9
    }

    .order-sm-10 {
        -ms-flex-order: 10;
        order: 10
    }

    .order-sm-11 {
        -ms-flex-order: 11;
        order: 11
    }

    .order-sm-12 {
        -ms-flex-order: 12;
        order: 12
    }

    .offset-sm-0 {
        margin-left: 0
    }

    .offset-sm-1 {
        margin-left: 8.333333%
    }

    .offset-sm-2 {
        margin-left: 16.666667%
    }

    .offset-sm-3 {
        margin-left: 25%
    }

    .offset-sm-4 {
        margin-left: 33.333333%
    }

    .offset-sm-5 {
        margin-left: 41.666667%
    }

    .offset-sm-6 {
        margin-left: 50%
    }

    .offset-sm-7 {
        margin-left: 58.333333%
    }

    .offset-sm-8 {
        margin-left: 66.666667%
    }

    .offset-sm-9 {
        margin-left: 75%
    }

    .offset-sm-10 {
        margin-left: 83.333333%
    }

    .offset-sm-11 {
        margin-left: 91.666667%
    }
}

@media (min-width: 768px) {
    .col-md {
        -ms-flex-preferred-size:0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .row-cols-md-1>* {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .row-cols-md-2>* {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .row-cols-md-3>* {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .row-cols-md-4>* {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .row-cols-md-5>* {
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%
    }

    .row-cols-md-6>* {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-md-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-md-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-md-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-md-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-md-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-md-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-md-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-md-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-md-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-md-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-md-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-md-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-md-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-md-first {
        -ms-flex-order: -1;
        order: -1
    }

    .order-md-last {
        -ms-flex-order: 13;
        order: 13
    }

    .order-md-0 {
        -ms-flex-order: 0;
        order: 0
    }

    .order-md-1 {
        -ms-flex-order: 1;
        order: 1
    }

    .order-md-2 {
        -ms-flex-order: 2;
        order: 2
    }

    .order-md-3 {
        -ms-flex-order: 3;
        order: 3
    }

    .order-md-4 {
        -ms-flex-order: 4;
        order: 4
    }

    .order-md-5 {
        -ms-flex-order: 5;
        order: 5
    }

    .order-md-6 {
        -ms-flex-order: 6;
        order: 6
    }

    .order-md-7 {
        -ms-flex-order: 7;
        order: 7
    }

    .order-md-8 {
        -ms-flex-order: 8;
        order: 8
    }

    .order-md-9 {
        -ms-flex-order: 9;
        order: 9
    }

    .order-md-10 {
        -ms-flex-order: 10;
        order: 10
    }

    .order-md-11 {
        -ms-flex-order: 11;
        order: 11
    }

    .order-md-12 {
        -ms-flex-order: 12;
        order: 12
    }

    .offset-md-0 {
        margin-left: 0
    }

    .offset-md-1 {
        margin-left: 8.333333%
    }

    .offset-md-2 {
        margin-left: 16.666667%
    }

    .offset-md-3 {
        margin-left: 25%
    }

    .offset-md-4 {
        margin-left: 33.333333%
    }

    .offset-md-5 {
        margin-left: 41.666667%
    }

    .offset-md-6 {
        margin-left: 50%
    }

    .offset-md-7 {
        margin-left: 58.333333%
    }

    .offset-md-8 {
        margin-left: 66.666667%
    }

    .offset-md-9 {
        margin-left: 75%
    }

    .offset-md-10 {
        margin-left: 83.333333%
    }

    .offset-md-11 {
        margin-left: 91.666667%
    }
}

@media (min-width: 992px) {
    .col-lg {
        -ms-flex-preferred-size:0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .row-cols-lg-1>* {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .row-cols-lg-2>* {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .row-cols-lg-3>* {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .row-cols-lg-4>* {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .row-cols-lg-5>* {
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%
    }

    .row-cols-lg-6>* {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-lg-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-lg-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-lg-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-lg-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-lg-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-lg-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-lg-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-lg-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-lg-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-lg-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-lg-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-lg-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-lg-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-lg-first {
        -ms-flex-order: -1;
        order: -1
    }

    .order-lg-last {
        -ms-flex-order: 13;
        order: 13
    }

    .order-lg-0 {
        -ms-flex-order: 0;
        order: 0
    }

    .order-lg-1 {
        -ms-flex-order: 1;
        order: 1
    }

    .order-lg-2 {
        -ms-flex-order: 2;
        order: 2
    }

    .order-lg-3 {
        -ms-flex-order: 3;
        order: 3
    }

    .order-lg-4 {
        -ms-flex-order: 4;
        order: 4
    }

    .order-lg-5 {
        -ms-flex-order: 5;
        order: 5
    }

    .order-lg-6 {
        -ms-flex-order: 6;
        order: 6
    }

    .order-lg-7 {
        -ms-flex-order: 7;
        order: 7
    }

    .order-lg-8 {
        -ms-flex-order: 8;
        order: 8
    }

    .order-lg-9 {
        -ms-flex-order: 9;
        order: 9
    }

    .order-lg-10 {
        -ms-flex-order: 10;
        order: 10
    }

    .order-lg-11 {
        -ms-flex-order: 11;
        order: 11
    }

    .order-lg-12 {
        -ms-flex-order: 12;
        order: 12
    }

    .offset-lg-0 {
        margin-left: 0
    }

    .offset-lg-1 {
        margin-left: 8.333333%
    }

    .offset-lg-2 {
        margin-left: 16.666667%
    }

    .offset-lg-3 {
        margin-left: 25%
    }

    .offset-lg-4 {
        margin-left: 33.333333%
    }

    .offset-lg-5 {
        margin-left: 41.666667%
    }

    .offset-lg-6 {
        margin-left: 50%
    }

    .offset-lg-7 {
        margin-left: 58.333333%
    }

    .offset-lg-8 {
        margin-left: 66.666667%
    }

    .offset-lg-9 {
        margin-left: 75%
    }

    .offset-lg-10 {
        margin-left: 83.333333%
    }

    .offset-lg-11 {
        margin-left: 91.666667%
    }
}

@media (min-width: 1200px) {
    .col-xl {
        -ms-flex-preferred-size:0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .row-cols-xl-1>* {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .row-cols-xl-2>* {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .row-cols-xl-3>* {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .row-cols-xl-4>* {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .row-cols-xl-5>* {
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%
    }

    .row-cols-xl-6>* {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-xl-auto {
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-xl-1 {
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-xl-2 {
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-xl-3 {
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-xl-4 {
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-xl-5 {
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-xl-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-xl-7 {
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-xl-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-xl-9 {
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-xl-10 {
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-xl-11 {
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-xl-12 {
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-xl-first {
        -ms-flex-order: -1;
        order: -1
    }

    .order-xl-last {
        -ms-flex-order: 13;
        order: 13
    }

    .order-xl-0 {
        -ms-flex-order: 0;
        order: 0
    }

    .order-xl-1 {
        -ms-flex-order: 1;
        order: 1
    }

    .order-xl-2 {
        -ms-flex-order: 2;
        order: 2
    }

    .order-xl-3 {
        -ms-flex-order: 3;
        order: 3
    }

    .order-xl-4 {
        -ms-flex-order: 4;
        order: 4
    }

    .order-xl-5 {
        -ms-flex-order: 5;
        order: 5
    }

    .order-xl-6 {
        -ms-flex-order: 6;
        order: 6
    }

    .order-xl-7 {
        -ms-flex-order: 7;
        order: 7
    }

    .order-xl-8 {
        -ms-flex-order: 8;
        order: 8
    }

    .order-xl-9 {
        -ms-flex-order: 9;
        order: 9
    }

    .order-xl-10 {
        -ms-flex-order: 10;
        order: 10
    }

    .order-xl-11 {
        -ms-flex-order: 11;
        order: 11
    }

    .order-xl-12 {
        -ms-flex-order: 12;
        order: 12
    }

    .offset-xl-0 {
        margin-left: 0
    }

    .offset-xl-1 {
        margin-left: 8.333333%
    }

    .offset-xl-2 {
        margin-left: 16.666667%
    }

    .offset-xl-3 {
        margin-left: 25%
    }

    .offset-xl-4 {
        margin-left: 33.333333%
    }

    .offset-xl-5 {
        margin-left: 41.666667%
    }

    .offset-xl-6 {
        margin-left: 50%
    }

    .offset-xl-7 {
        margin-left: 58.333333%
    }

    .offset-xl-8 {
        margin-left: 66.666667%
    }

    .offset-xl-9 {
        margin-left: 75%
    }

    .offset-xl-10 {
        margin-left: 83.333333%
    }

    .offset-xl-11 {
        margin-left: 91.666667%
    }
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529
}

.table td,.table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6
}

.table tbody+tbody {
    border-top: 2px solid #dee2e6
}

.table-sm td,.table-sm th {
    padding: .3rem
}

.table-bordered {
    border: 1px solid #dee2e6
}

.table-bordered td,.table-bordered th {
    border: 1px solid #dee2e6
}

.table-bordered thead td,.table-bordered thead th {
    border-bottom-width: 2px
}

.table-borderless tbody+tbody,.table-borderless td,.table-borderless th,.table-borderless thead th {
    border: 0
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0,0,0,.05)
}

.table-hover tbody tr:hover {
    color: #212529;
    background-color: rgba(0,0,0,.075)
}

.table-primary,.table-primary>td,.table-primary>th {
    background-color: #b8daff
}

.table-primary tbody+tbody,.table-primary td,.table-primary th,.table-primary thead th {
    border-color: #7abaff
}

.table-hover .table-primary:hover {
    background-color: #9fcdff
}

.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th {
    background-color: #9fcdff
}

.table-secondary,.table-secondary>td,.table-secondary>th {
    background-color: #d6d8db
}

.table-secondary tbody+tbody,.table-secondary td,.table-secondary th,.table-secondary thead th {
    border-color: #b3b7bb
}

.table-hover .table-secondary:hover {
    background-color: #c8cbcf
}

.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th {
    background-color: #c8cbcf
}

.table-success,.table-success>td,.table-success>th {
    background-color: #c3e6cb
}

.table-success tbody+tbody,.table-success td,.table-success th,.table-success thead th {
    border-color: #8fd19e
}

.table-hover .table-success:hover {
    background-color: #b1dfbb
}

.table-hover .table-success:hover>td,.table-hover .table-success:hover>th {
    background-color: #b1dfbb
}

.table-info,.table-info>td,.table-info>th {
    background-color: #bee5eb
}

.table-info tbody+tbody,.table-info td,.table-info th,.table-info thead th {
    border-color: #86cfda
}

.table-hover .table-info:hover {
    background-color: #abdde5
}

.table-hover .table-info:hover>td,.table-hover .table-info:hover>th {
    background-color: #abdde5
}

.table-warning,.table-warning>td,.table-warning>th {
    background-color: #ffeeba
}

.table-warning tbody+tbody,.table-warning td,.table-warning th,.table-warning thead th {
    border-color: #ffdf7e
}

.table-hover .table-warning:hover {
    background-color: #ffe8a1
}

.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th {
    background-color: #ffe8a1
}

.table-danger,.table-danger>td,.table-danger>th {
    background-color: #f5c6cb
}

.table-danger tbody+tbody,.table-danger td,.table-danger th,.table-danger thead th {
    border-color: #ed969e
}

.table-hover .table-danger:hover {
    background-color: #f1b0b7
}

.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th {
    background-color: #f1b0b7
}

.table-light,.table-light>td,.table-light>th {
    background-color: #fdfdfe
}

.table-light tbody+tbody,.table-light td,.table-light th,.table-light thead th {
    border-color: #fbfcfc
}

.table-hover .table-light:hover {
    background-color: #ececf6
}

.table-hover .table-light:hover>td,.table-hover .table-light:hover>th {
    background-color: #ececf6
}

.table-dark,.table-dark>td,.table-dark>th {
    background-color: #c6c8ca
}

.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th {
    border-color: #95999c
}

.table-hover .table-dark:hover {
    background-color: #b9bbbe
}

.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th {
    background-color: #b9bbbe
}

.table-active,.table-active>td,.table-active>th {
    background-color: rgba(0,0,0,.075)
}

.table-hover .table-active:hover {
    background-color: rgba(0,0,0,.075)
}

.table-hover .table-active:hover>td,.table-hover .table-active:hover>th {
    background-color: rgba(0,0,0,.075)
}

.table .thead-dark th {
    color: #fff;
    background-color: #343a40;
    border-color: #454d55
}

.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.table-dark {
    color: #fff;
    background-color: #343a40
}

.table-dark td,.table-dark th,.table-dark thead th {
    border-color: #454d55
}

.table-dark.table-bordered {
    border: 0
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255,255,255,.05)
}

.table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255,255,255,.075)
}

@media (max-width: 575.98px) {
    .table-responsive-sm {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-sm>.table-bordered {
        border: 0
    }
}

@media (max-width: 767.98px) {
    .table-responsive-md {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-md>.table-bordered {
        border: 0
    }
}

@media (max-width: 991.98px) {
    .table-responsive-lg {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-lg>.table-bordered {
        border: 0
    }
}

@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display:block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive-xl>.table-bordered {
        border: 0
    }
}

.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch
}

.table-responsive>.table-bordered {
    border: 0
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #26283f;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

@media (prefers-reduced-motion:reduce) {
    .form-control {
        transition: none
    }
}

.form-control::-ms-expand {
    background-color: transparent;
    border: 0
}

.form-control:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #495057
}

.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.25)
}

.form-control::-webkit-input-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control::-moz-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control::-ms-input-placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control::placeholder {
    color: #6c757d;
    opacity: 1
}

.form-control:disabled,.form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1
}

select.form-control:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.form-control-file,.form-control-range {
    display: block;
    width: 100%
}

.col-form-label {
    padding-top: calc(.375rem + 1px);
    padding-bottom: calc(.375rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5
}

.col-form-label-lg {
    padding-top: calc(.5rem + 1px);
    padding-bottom: calc(.5rem + 1px);
    font-size: 1.25rem;
    line-height: 1.5
}

.col-form-label-sm {
    padding-top: calc(.25rem + 1px);
    padding-bottom: calc(.25rem + 1px);
    font-size: .875rem;
    line-height: 1.5
}

.form-control-plaintext {
    display: block;
    width: 100%;
    padding: .375rem 0;
    margin-bottom: 0;
    font-size: 1rem;
    line-height: 1.5;
    color: #212529;
    background-color: transparent;
    border: solid transparent;
    border-width: 1px 0
}

.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm {
    padding-right: 0;
    padding-left: 0
}

.form-control-sm {
    height: calc(1.5em + .5rem + 2px);
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.form-control-lg {
    height: calc(1.5em + 1rem + 2px);
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

select.form-control[multiple],select.form-control[size] {
    height: auto
}

textarea.form-control {
    height: auto
}

.form-group {
    margin-bottom: 1rem
}

.form-text {
    display: block;
    margin-top: .25rem
}

.form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px
}

.form-row>.col,.form-row>[class*=col-] {
    padding-right: 5px;
    padding-left: 5px
}

.form-check {
    position: relative;
    display: block;
    padding-left: 1.25rem
}

.form-check-input {
    position: absolute;
    margin-top: .3rem;
    margin-left: -1.25rem
}

.form-check-input:disabled~.form-check-label,.form-check-input[disabled]~.form-check-label {
    color: #6c757d
}

.form-check-label {
    margin-bottom: 0
}

.form-check-inline {
    display: -ms-inline-flexbox;
    display: inline-flex;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 0;
    margin-right: .75rem
}

.form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: .3125rem;
    margin-left: 0
}

.valid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #28a745
}

.valid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: .25rem .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(40,167,69,.9);
    border-radius: .25rem
}

.is-valid~.valid-feedback,.is-valid~.valid-tooltip,.was-validated :valid~.valid-feedback,.was-validated :valid~.valid-tooltip {
    display: block
}

.form-control.is-valid,.was-validated .form-control:valid {
    border-color: #28a745;
    padding-right: calc(1.5em + .75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(.375em + .1875rem) center;
    background-size: calc(.75em + .375rem) calc(.75em + .375rem)
}

.form-control.is-valid:focus,.was-validated .form-control:valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.25)
}

.was-validated textarea.form-control:valid,textarea.form-control.is-valid {
    padding-right: calc(1.5em + .75rem);
    background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
}

.custom-select.is-valid,.was-validated .custom-select:valid {
    border-color: #28a745;
    padding-right: calc(.75em + 2.3125rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px,url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem)
}

.custom-select.is-valid:focus,.was-validated .custom-select:valid:focus {
    border-color: #28a745;
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.25)
}

.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label {
    color: #28a745
}

.form-check-input.is-valid~.valid-feedback,.form-check-input.is-valid~.valid-tooltip,.was-validated .form-check-input:valid~.valid-feedback,.was-validated .form-check-input:valid~.valid-tooltip {
    display: block
}

.custom-control-input.is-valid~.custom-control-label,.was-validated .custom-control-input:valid~.custom-control-label {
    color: #28a745
}

.custom-control-input.is-valid~.custom-control-label::before,.was-validated .custom-control-input:valid~.custom-control-label::before {
    border-color: #28a745
}

.custom-control-input.is-valid:checked~.custom-control-label::before,.was-validated .custom-control-input:valid:checked~.custom-control-label::before {
    border-color: #34ce57;
    background-color: #34ce57
}

.custom-control-input.is-valid:focus~.custom-control-label::before,.was-validated .custom-control-input:valid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.25)
}

.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before {
    border-color: #28a745
}

.custom-file-input.is-valid~.custom-file-label,.was-validated .custom-file-input:valid~.custom-file-label {
    border-color: #28a745
}

.custom-file-input.is-valid:focus~.custom-file-label,.was-validated .custom-file-input:valid:focus~.custom-file-label {
    border-color: #28a745;
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.25)
}

.invalid-feedback {
    display: none;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545
}

.invalid-tooltip {
    position: absolute;
    top: 100%;
    z-index: 5;
    display: none;
    max-width: 100%;
    padding: .25rem .5rem;
    margin-top: .1rem;
    font-size: .875rem;
    line-height: 1.5;
    color: #fff;
    background-color: rgba(220,53,69,.9);
    border-radius: .25rem
}

.is-invalid~.invalid-feedback,.is-invalid~.invalid-tooltip,.was-validated :invalid~.invalid-feedback,.was-validated :invalid~.invalid-tooltip {
    display: block
}

.form-control.is-invalid,.was-validated .form-control:invalid {
    border-color: #dc3545;
    padding-right: calc(1.5em + .75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(.375em + .1875rem) center;
    background-size: calc(.75em + .375rem) calc(.75em + .375rem)
}

.form-control.is-invalid:focus,.was-validated .form-control:invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.25)
}

.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid {
    padding-right: calc(1.5em + .75rem);
    background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
}

.custom-select.is-invalid,.was-validated .custom-select:invalid {
    border-color: #dc3545;
    padding-right: calc(.75em + 2.3125rem);
    background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px,url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem)
}

.custom-select.is-invalid:focus,.was-validated .custom-select:invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.25)
}

.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label {
    color: #dc3545
}

.form-check-input.is-invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-tooltip,.was-validated .form-check-input:invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip {
    display: block
}

.custom-control-input.is-invalid~.custom-control-label,.was-validated .custom-control-input:invalid~.custom-control-label {
    color: #dc3545
}

.custom-control-input.is-invalid~.custom-control-label::before,.was-validated .custom-control-input:invalid~.custom-control-label::before {
    border-color: #dc3545
}

.custom-control-input.is-invalid:checked~.custom-control-label::before,.was-validated .custom-control-input:invalid:checked~.custom-control-label::before {
    border-color: #e4606d;
    background-color: #e4606d
}

.custom-control-input.is-invalid:focus~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus~.custom-control-label::before {
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.25)
}

.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before {
    border-color: #dc3545
}

.custom-file-input.is-invalid~.custom-file-label,.was-validated .custom-file-input:invalid~.custom-file-label {
    border-color: #dc3545
}

.custom-file-input.is-invalid:focus~.custom-file-label,.was-validated .custom-file-input:invalid:focus~.custom-file-label {
    border-color: #dc3545;
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.25)
}

.form-inline {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-align: center;
    align-items: center
}

.form-inline .form-check {
    width: 100%
}

@media (min-width: 576px) {
    .form-inline label {
        display:-ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 0
    }

    .form-inline .form-group {
        display: -ms-flexbox;
        display: flex;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 0
    }

    .form-inline .form-control {
        display: inline-block;
        width: auto;
        vertical-align: middle
    }

    .form-inline .form-control-plaintext {
        display: inline-block
    }

    .form-inline .custom-select,.form-inline .input-group {
        width: auto
    }

    .form-inline .form-check {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: auto;
        padding-left: 0
    }

    .form-inline .form-check-input {
        position: relative;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        margin-top: 0;
        margin-right: .25rem;
        margin-left: 0
    }

    .form-inline .custom-control {
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .form-inline .custom-control-label {
        margin-bottom: 0
    }
}

.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .btn {
        transition: none
    }
}

.btn:hover {
    color: #212529;
    text-decoration: none
}

.btn.focus,.btn:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.25)
}

.btn.disabled,.btn:disabled {
    opacity: .65
}

a.btn.disabled,fieldset:disabled a.btn {
    pointer-events: none
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc
}

.btn-primary.focus,.btn-primary:focus {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
    box-shadow: 0 0 0 .2rem rgba(38,143,255,.5)
}

.btn-primary.disabled,.btn-primary:disabled {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active,.show>.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #0062cc;
    border-color: #005cbf
}

.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(38,143,255,.5)
}

.btn-secondary {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-secondary:hover {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62
}

.btn-secondary.focus,.btn-secondary:focus {
    color: #fff;
    background-color: #5a6268;
    border-color: #545b62;
    box-shadow: 0 0 0 .2rem rgba(130,138,145,.5)
}

.btn-secondary.disabled,.btn-secondary:disabled {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active,.show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #545b62;
    border-color: #4e555b
}

.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(130,138,145,.5)
}

.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:hover {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34
}

.btn-success.focus,.btn-success:focus {
    color: #fff;
    background-color: #218838;
    border-color: #1e7e34;
    box-shadow: 0 0 0 .2rem rgba(72,180,97,.5)
}

.btn-success.disabled,.btn-success:disabled {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active,.show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #1e7e34;
    border-color: #1c7430
}

.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus,.show>.btn-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(72,180,97,.5)
}

.btn-info {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:hover {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b
}

.btn-info.focus,.btn-info:focus {
    color: #fff;
    background-color: #138496;
    border-color: #117a8b;
    box-shadow: 0 0 0 .2rem rgba(58,176,195,.5)
}

.btn-info.disabled,.btn-info:disabled {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-info:not(:disabled):not(.disabled).active,.btn-info:not(:disabled):not(.disabled):active,.show>.btn-info.dropdown-toggle {
    color: #fff;
    background-color: #117a8b;
    border-color: #10707f
}

.btn-info:not(:disabled):not(.disabled).active:focus,.btn-info:not(:disabled):not(.disabled):active:focus,.show>.btn-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(58,176,195,.5)
}

.btn-warning {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:hover {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00
}

.btn-warning.focus,.btn-warning:focus {
    color: #212529;
    background-color: #e0a800;
    border-color: #d39e00;
    box-shadow: 0 0 0 .2rem rgba(222,170,12,.5)
}

.btn-warning.disabled,.btn-warning:disabled {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active,.show>.btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #d39e00;
    border-color: #c69500
}

.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(222,170,12,.5)
}

.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130
}

.btn-danger.focus,.btn-danger:focus {
    color: #fff;
    background-color: #c82333;
    border-color: #bd2130;
    box-shadow: 0 0 0 .2rem rgba(225,83,97,.5)
}

.btn-danger.disabled,.btn-danger:disabled {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-danger:not(:disabled):not(.disabled).active,.btn-danger:not(:disabled):not(.disabled):active,.show>.btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #bd2130;
    border-color: #b21f2d
}

.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(225,83,97,.5)
}

.btn-light {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5
}

.btn-light.focus,.btn-light:focus {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5;
    box-shadow: 0 0 0 .2rem rgba(216,217,219,.5)
}

.btn-light.disabled,.btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-light:not(:disabled):not(.disabled).active,.btn-light:not(:disabled):not(.disabled):active,.show>.btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df
}

.btn-light:not(:disabled):not(.disabled).active:focus,.btn-light:not(:disabled):not(.disabled):active:focus,.show>.btn-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(216,217,219,.5)
}

.btn-dark {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:hover {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124
}

.btn-dark.focus,.btn-dark:focus {
    color: #fff;
    background-color: #23272b;
    border-color: #1d2124;
    box-shadow: 0 0 0 .2rem rgba(82,88,93,.5)
}

.btn-dark.disabled,.btn-dark:disabled {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-dark:not(:disabled):not(.disabled).active,.btn-dark:not(:disabled):not(.disabled):active,.show>.btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #1d2124;
    border-color: #171a1d
}

.btn-dark:not(:disabled):not(.disabled).active:focus,.btn-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(82,88,93,.5)
}

.btn-outline-primary {
    color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:hover {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary.focus,.btn-outline-primary:focus {
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.5)
}

.btn-outline-primary.disabled,.btn-outline-primary:disabled {
    color: #007bff;
    background-color: transparent
}

.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active,.show>.btn-outline-primary.dropdown-toggle {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-primary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.5)
}

.btn-outline-secondary {
    color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary.focus,.btn-outline-secondary:focus {
    box-shadow: 0 0 0 .2rem rgba(108,117,125,.5)
}

.btn-outline-secondary.disabled,.btn-outline-secondary:disabled {
    color: #6c757d;
    background-color: transparent
}

.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active,.show>.btn-outline-secondary.dropdown-toggle {
    color: #fff;
    background-color: #6c757d;
    border-color: #6c757d
}

.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(108,117,125,.5)
}

.btn-outline-success {
    color: #28a745;
    border-color: #28a745
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success.focus,.btn-outline-success:focus {
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.btn-outline-success.disabled,.btn-outline-success:disabled {
    color: #28a745;
    background-color: transparent
}

.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active,.show>.btn-outline-success.dropdown-toggle {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745
}

.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-success.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.btn-outline-info {
    color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:hover {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info.focus,.btn-outline-info:focus {
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.btn-outline-info.disabled,.btn-outline-info:disabled {
    color: #17a2b8;
    background-color: transparent
}

.btn-outline-info:not(:disabled):not(.disabled).active,.btn-outline-info:not(:disabled):not(.disabled):active,.show>.btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #17a2b8;
    border-color: #17a2b8
}

.btn-outline-info:not(:disabled):not(.disabled).active:focus,.btn-outline-info:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-info.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.btn-outline-warning {
    color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:hover {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning.focus,.btn-outline-warning:focus {
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.btn-outline-warning.disabled,.btn-outline-warning:disabled {
    color: #ffc107;
    background-color: transparent
}

.btn-outline-warning:not(:disabled):not(.disabled).active,.btn-outline-warning:not(:disabled):not(.disabled):active,.show>.btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107
}

.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-outline-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-warning.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:hover {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger.focus,.btn-outline-danger:focus {
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.btn-outline-danger.disabled,.btn-outline-danger:disabled {
    color: #dc3545;
    background-color: transparent
}

.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active,.show>.btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545
}

.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-danger.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.btn-outline-light {
    color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light.focus,.btn-outline-light:focus {
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.btn-outline-light.disabled,.btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent
}

.btn-outline-light:not(:disabled):not(.disabled).active,.btn-outline-light:not(:disabled):not(.disabled):active,.show>.btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa
}

.btn-outline-light:not(:disabled):not(.disabled).active:focus,.btn-outline-light:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-light.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.btn-outline-dark {
    color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:hover {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark.focus,.btn-outline-dark:focus {
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.btn-outline-dark.disabled,.btn-outline-dark:disabled {
    color: #343a40;
    background-color: transparent
}

.btn-outline-dark:not(:disabled):not(.disabled).active,.btn-outline-dark:not(:disabled):not(.disabled):active,.show>.btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #343a40;
    border-color: #343a40
}

.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-outline-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-dark.dropdown-toggle:focus {
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.btn-link {
    font-weight: 400;
    color: #007bff;
    text-decoration: none
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: underline
}

.btn-link.focus,.btn-link:focus {
    text-decoration: underline;
    box-shadow: none
}

.btn-link.disabled,.btn-link:disabled {
    color: #6c757d;
    pointer-events: none
}

.btn-group-lg>.btn,.btn-lg {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

.btn-group-sm>.btn,.btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.btn-block {
    display: block;
    width: 100%
}

.btn-block+.btn-block {
    margin-top: .5rem
}

input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block {
    width: 100%
}

.fade {
    transition: opacity .15s linear
}

@media (prefers-reduced-motion:reduce) {
    .fade {
        transition: none
    }
}

.fade:not(.show) {
    opacity: 0
}

.collapse:not(.show) {
    display: none
}

.collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    transition: height .35s ease
}

@media (prefers-reduced-motion:reduce) {
    .collapsing {
        transition: none
    }
}

.dropdown,.dropleft,.dropright,.dropup {
    position: relative
}

.dropdown-toggle {
    white-space: nowrap
}

.dropdown-toggle::after {
    display: inline-block;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid;
    border-right: .3em solid transparent;
    border-bottom: 0;
    border-left: .3em solid transparent
}

.dropdown-toggle:empty::after {
    margin-left: 0
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem
}

.dropdown-menu-left {
    right: auto;
    left: 0
}

.dropdown-menu-right {
    right: 0;
    left: auto
}

@media (min-width: 576px) {
    .dropdown-menu-sm-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-sm-right {
        right: 0;
        left: auto
    }
}

@media (min-width: 768px) {
    .dropdown-menu-md-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-md-right {
        right: 0;
        left: auto
    }
}

@media (min-width: 992px) {
    .dropdown-menu-lg-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-lg-right {
        right: 0;
        left: auto
    }
}

@media (min-width: 1200px) {
    .dropdown-menu-xl-left {
        right:auto;
        left: 0
    }

    .dropdown-menu-xl-right {
        right: 0;
        left: auto
    }
}

.dropup .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: .125rem
}

.dropup .dropdown-toggle::after {
    display: inline-block;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: 0;
    border-right: .3em solid transparent;
    border-bottom: .3em solid;
    border-left: .3em solid transparent
}

.dropup .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropright .dropdown-menu {
    top: 0;
    right: auto;
    left: 100%;
    margin-top: 0;
    margin-left: .125rem
}

.dropright .dropdown-toggle::after {
    display: inline-block;
    margin-left: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid transparent;
    border-right: 0;
    border-bottom: .3em solid transparent;
    border-left: .3em solid
}

.dropright .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropright .dropdown-toggle::after {
    vertical-align: 0
}

.dropleft .dropdown-menu {
    top: 0;
    right: 100%;
    left: auto;
    margin-top: 0;
    margin-right: .125rem
}

.dropleft .dropdown-toggle::after {
    display: inline-block;
    margin-left: .255em;
    vertical-align: .255em;
    content: ""
}

.dropleft .dropdown-toggle::after {
    display: none
}

.dropleft .dropdown-toggle::before {
    display: inline-block;
    margin-right: .255em;
    vertical-align: .255em;
    content: "";
    border-top: .3em solid transparent;
    border-right: .3em solid;
    border-bottom: .3em solid transparent
}

.dropleft .dropdown-toggle:empty::after {
    margin-left: 0
}

.dropleft .dropdown-toggle::before {
    vertical-align: 0
}

.dropdown-menu[x-placement^=bottom],.dropdown-menu[x-placement^=left],.dropdown-menu[x-placement^=right],.dropdown-menu[x-placement^=top] {
    right: auto;
    bottom: auto
}

.dropdown-divider {
    height: 0;
    margin: .5rem 0;
    overflow: hidden;
    border-top: 1px solid #e9ecef
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: .25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0
}

.dropdown-item:focus,.dropdown-item:hover {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa
}

.dropdown-item.active,.dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #007bff
}

.dropdown-item.disabled,.dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent
}

.dropdown-menu.show {
    display: block
}

.dropdown-header {
    display: block;
    padding: .5rem 1.5rem;
    margin-bottom: 0;
    font-size: .875rem;
    color: #6c757d;
    white-space: nowrap
}

.dropdown-item-text {
    display: block;
    padding: .25rem 1.5rem;
    color: #212529
}

.btn-group,.btn-group-vertical {
    position: relative;
    display: -ms-inline-flexbox;
    display: inline-flex;
    vertical-align: middle
}

.btn-group-vertical>.btn,.btn-group>.btn {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto
}

.btn-group-vertical>.btn:hover,.btn-group>.btn:hover {
    z-index: 1
}

.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus {
    z-index: 1
}

.btn-toolbar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.btn-toolbar .input-group {
    width: auto
}

.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child) {
    margin-left: -1px
}

.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.dropdown-toggle-split {
    padding-right: .5625rem;
    padding-left: .5625rem
}

.dropdown-toggle-split::after,.dropright .dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after {
    margin-left: 0
}

.dropleft .dropdown-toggle-split::before {
    margin-right: 0
}

.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split {
    padding-right: .375rem;
    padding-left: .375rem
}

.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split {
    padding-right: .75rem;
    padding-left: .75rem
}

.btn-group-vertical {
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: center;
    justify-content: center
}

.btn-group-vertical>.btn,.btn-group-vertical>.btn-group {
    width: 100%
}

.btn-group-vertical>.btn-group:not(:first-child),.btn-group-vertical>.btn:not(:first-child) {
    margin-top: -1px
}

.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn:not(:first-child) {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.btn-group-toggle>.btn,.btn-group-toggle>.btn-group>.btn {
    margin-bottom: 0
}

.btn-group-toggle>.btn input[type=checkbox],.btn-group-toggle>.btn input[type=radio],.btn-group-toggle>.btn-group>.btn input[type=checkbox],.btn-group-toggle>.btn-group>.btn input[type=radio] {
    position: absolute;
    clip: rect(0,0,0,0);
    pointer-events: none
}

.input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%
}

.input-group>.custom-file,.input-group>.custom-select,.input-group>.form-control,.input-group>.form-control-plaintext {
    position: relative;
    -ms-flex: 1 1 0%;
    flex: 1 1 0%;
    min-width: 0;
    margin-bottom: 0
}

.input-group>.custom-file+.custom-file,.input-group>.custom-file+.custom-select,.input-group>.custom-file+.form-control,.input-group>.custom-select+.custom-file,.input-group>.custom-select+.custom-select,.input-group>.custom-select+.form-control,.input-group>.form-control+.custom-file,.input-group>.form-control+.custom-select,.input-group>.form-control+.form-control,.input-group>.form-control-plaintext+.custom-file,.input-group>.form-control-plaintext+.custom-select,.input-group>.form-control-plaintext+.form-control {
    margin-left: -1px
}

.input-group>.custom-file .custom-file-input:focus~.custom-file-label,.input-group>.custom-select:focus,.input-group>.form-control:focus {
    z-index: 3
}

.input-group>.custom-file .custom-file-input:focus {
    z-index: 4
}

.input-group>.custom-select:not(:last-child),.input-group>.form-control:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.custom-select:not(:first-child),.input-group>.form-control:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group>.custom-file {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center
}

.input-group>.custom-file:not(:last-child) .custom-file-label,.input-group>.custom-file:not(:last-child) .custom-file-label::after {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.custom-file:not(:first-child) .custom-file-label {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.input-group-append,.input-group-prepend {
    display: -ms-flexbox;
    display: flex
}

.input-group-append .btn,.input-group-prepend .btn {
    position: relative;
    z-index: 2
}

.input-group-append .btn:focus,.input-group-prepend .btn:focus {
    z-index: 3
}

.input-group-append .btn+.btn,.input-group-append .btn+.input-group-text,.input-group-append .input-group-text+.btn,.input-group-append .input-group-text+.input-group-text,.input-group-prepend .btn+.btn,.input-group-prepend .btn+.input-group-text,.input-group-prepend .input-group-text+.btn,.input-group-prepend .input-group-text+.input-group-text {
    margin-left: -1px
}

.input-group-prepend {
    margin-right: -1px
}

.input-group-append {
    margin-left: -1px
}

.input-group-text {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding: .375rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: .25rem
}

.input-group-text input[type=checkbox],.input-group-text input[type=radio] {
    margin-top: 0
}

.input-group-lg>.custom-select,.input-group-lg>.form-control:not(textarea) {
    height: calc(1.5em + 1rem + 2px)
}

.input-group-lg>.custom-select,.input-group-lg>.form-control,.input-group-lg>.input-group-append>.btn,.input-group-lg>.input-group-append>.input-group-text,.input-group-lg>.input-group-prepend>.btn,.input-group-lg>.input-group-prepend>.input-group-text {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem
}

.input-group-sm>.custom-select,.input-group-sm>.form-control:not(textarea) {
    height: calc(1.5em + .5rem + 2px)
}

.input-group-sm>.custom-select,.input-group-sm>.form-control,.input-group-sm>.input-group-append>.btn,.input-group-sm>.input-group-append>.input-group-text,.input-group-sm>.input-group-prepend>.btn,.input-group-sm>.input-group-prepend>.input-group-text {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem
}

.input-group-lg>.custom-select,.input-group-sm>.custom-select {
    padding-right: 1.75rem
}

.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group>.input-group-append:last-child>.input-group-text:not(:last-child),.input-group>.input-group-append:not(:last-child)>.btn,.input-group>.input-group-append:not(:last-child)>.input-group-text,.input-group>.input-group-prepend>.btn,.input-group>.input-group-prepend>.input-group-text {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0
}

.input-group>.input-group-append>.btn,.input-group>.input-group-append>.input-group-text,.input-group>.input-group-prepend:first-child>.btn:not(:first-child),.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),.input-group>.input-group-prepend:not(:first-child)>.btn,.input-group>.input-group-prepend:not(:first-child)>.input-group-text {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0
}

.custom-control {
    position: relative;
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5rem
}

.custom-control-inline {
    display: -ms-inline-flexbox;
    display: inline-flex;
    margin-right: 1rem
}

.custom-control-input {
    position: absolute;
    left: 0;
    z-index: -1;
    width: 1rem;
    height: 1.25rem;
    opacity: 0
}

.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #007bff;
    background-color: #007bff
}

.custom-control-input:focus~.custom-control-label::before {
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.25)
}

.custom-control-input:focus:not(:checked)~.custom-control-label::before {
    border-color: #80bdff
}

.custom-control-input:not(:disabled):active~.custom-control-label::before {
    color: #fff;
    background-color: #b3d7ff;
    border-color: #b3d7ff
}

.custom-control-input:disabled~.custom-control-label,.custom-control-input[disabled]~.custom-control-label {
    color: #6c757d
}

.custom-control-input:disabled~.custom-control-label::before,.custom-control-input[disabled]~.custom-control-label::before {
    background-color: #e9ecef
}

.custom-control-label {
    position: relative;
    margin-bottom: 0;
    vertical-align: top
}

.custom-control-label::before {
    position: absolute;
    top: .25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 1px
}

.custom-control-label::after {
    position: absolute;
    top: .25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50%/50% 50%
}

.custom-checkbox .custom-control-label::before {
    border-radius: .25rem
}

.custom-checkbox .custom-control-input:checked~.custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e")
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before {
    border-color: #007bff;
    background-color: #007bff
}

.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e")
}

.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0,123,255,.5)
}

.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before {
    background-color: rgba(0,123,255,.5)
}

.custom-radio .custom-control-label::before {
    border-radius: 50%
}

.custom-radio .custom-control-input:checked~.custom-control-label::after {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
}

.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0,123,255,.5)
}

.custom-switch {
    padding-left: 2.25rem
}

.custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: .5rem
}

.custom-switch .custom-control-label::after {
    top: calc(.25rem + 2px);
    left: calc(-2.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: .5rem;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-transform .15s ease-in-out;
    transition: transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-transform .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .custom-switch .custom-control-label::after {
        transition: none
    }
}

.custom-switch .custom-control-input:checked~.custom-control-label::after {
    background-color: #fff;
    -webkit-transform: translateX(.75rem);
    transform: translateX(.75rem)
}

.custom-switch .custom-control-input:disabled:checked~.custom-control-label::before {
    background-color: rgba(0,123,255,.5)
}

.custom-select {
    display: inline-block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem 1.75rem .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right .75rem center/8px 10px;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.custom-select:focus {
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.25)
}

.custom-select:focus::-ms-value {
    color: #495057;
    background-color: #fff
}

.custom-select[multiple],.custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: .75rem;
    background-image: none
}

.custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef
}

.custom-select::-ms-expand {
    display: none
}

.custom-select:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #495057
}

.custom-select-sm {
    height: calc(1.5em + .5rem + 2px);
    padding-top: .25rem;
    padding-bottom: .25rem;
    padding-left: .5rem;
    font-size: .875rem
}

.custom-select-lg {
    height: calc(1.5em + 1rem + 2px);
    padding-top: .5rem;
    padding-bottom: .5rem;
    padding-left: 1rem;
    font-size: 1.25rem
}

.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    margin-bottom: 0
}

.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    margin: 0;
    opacity: 0
}

.custom-file-input:focus~.custom-file-label {
    border-color: #80bdff;
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.25)
}

.custom-file-input:disabled~.custom-file-label,.custom-file-input[disabled]~.custom-file-label {
    background-color: #e9ecef
}

.custom-file-input:lang(en)~.custom-file-label::after {
    content: "Browse"
}

.custom-file-input~.custom-file-label[data-browse]::after {
    content: attr(data-browse)
}

.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem
}

.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + .75rem);
    padding: .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 .25rem .25rem 0
}

.custom-range {
    width: 100%;
    height: 1.4rem;
    padding: 0;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.custom-range:focus {
    outline: 0
}

.custom-range:focus::-webkit-slider-thumb {
    box-shadow: 0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)
}

.custom-range:focus::-moz-range-thumb {
    box-shadow: 0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)
}

.custom-range:focus::-ms-thumb {
    box-shadow: 0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)
}

.custom-range::-moz-focus-outer {
    border: 0
}

.custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -.25rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    -webkit-appearance: none;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-webkit-slider-thumb {
        -webkit-transition: none;
        transition: none
    }
}

.custom-range::-webkit-slider-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: .5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem
}

.custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    -moz-transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    -moz-appearance: none;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-moz-range-thumb {
        -moz-transition: none;
        transition: none
    }
}

.custom-range::-moz-range-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-moz-range-track {
    width: 100%;
    height: .5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem
}

.custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: .2rem;
    margin-left: .2rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    -ms-transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    appearance: none
}

@media (prefers-reduced-motion:reduce) {
    .custom-range::-ms-thumb {
        -ms-transition: none;
        transition: none
    }
}

.custom-range::-ms-thumb:active {
    background-color: #b3d7ff
}

.custom-range::-ms-track {
    width: 100%;
    height: .5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: .5rem
}

.custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem
}

.custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem
}

.custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd
}

.custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default
}

.custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd
}

.custom-range:disabled::-moz-range-track {
    cursor: default
}

.custom-range:disabled::-ms-thumb {
    background-color: #adb5bd
}

.custom-control-label::before,.custom-file-label,.custom-select {
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .custom-control-label::before,.custom-file-label,.custom-select {
        transition: none
    }
}

.nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav-link {
    display: block;
    padding: .5rem 1rem
}

.nav-link:focus,.nav-link:hover {
    text-decoration: none
}

.nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default
}

.nav-tabs {
    border-bottom: 1px solid #dee2e6
}

.nav-tabs .nav-item {
    margin-bottom: -1px
}

.nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover {
    border-color: #e9ecef #e9ecef #dee2e6
}

.nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent
}

.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff
}

.nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.nav-pills .nav-link {
    border-radius: .25rem
}

.nav-pills .nav-link.active,.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #007bff
}

.nav-fill .nav-item {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    text-align: center
}

.nav-justified .nav-item {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    text-align: center
}

.tab-content>.tab-pane {
    display: none
}

.tab-content>.active {
    display: block
}

.navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: .5rem 1rem
}

.navbar .container,.navbar .container-fluid,.navbar .container-lg,.navbar .container-md,.navbar .container-sm,.navbar .container-xl {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.navbar-brand {
    display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap
}

.navbar-brand:focus,.navbar-brand:hover {
    text-decoration: none
}

.navbar-nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none
}

.navbar-text {
    display: inline-block;
    padding-top: .5rem;
    padding-bottom: .5rem
}

.navbar-collapse {
    -ms-flex-preferred-size: 100%;
    flex-basis: 100%;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -ms-flex-align: center;
    align-items: center
}

.navbar-toggler {
    padding: .25rem .75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: .25rem
}

.navbar-toggler:focus,.navbar-toggler:hover {
    text-decoration: none
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%
}

@media (max-width: 575.98px) {
    .navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid,.navbar-expand-sm>.container-lg,.navbar-expand-sm>.container-md,.navbar-expand-sm>.container-sm,.navbar-expand-sm>.container-xl {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        -ms-flex-flow:row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-sm .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid,.navbar-expand-sm>.container-lg,.navbar-expand-sm>.container-md,.navbar-expand-sm>.container-sm,.navbar-expand-sm>.container-xl {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-sm .navbar-collapse {
        display: -ms-flexbox!important;
        display: flex!important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-sm .navbar-toggler {
        display: none
    }
}

@media (max-width: 767.98px) {
    .navbar-expand-md>.container,.navbar-expand-md>.container-fluid,.navbar-expand-md>.container-lg,.navbar-expand-md>.container-md,.navbar-expand-md>.container-sm,.navbar-expand-md>.container-xl {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 768px) {
    .navbar-expand-md {
        -ms-flex-flow:row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-md .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-md>.container,.navbar-expand-md>.container-fluid,.navbar-expand-md>.container-lg,.navbar-expand-md>.container-md,.navbar-expand-md>.container-sm,.navbar-expand-md>.container-xl {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-md .navbar-collapse {
        display: -ms-flexbox!important;
        display: flex!important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-md .navbar-toggler {
        display: none
    }
}

@media (max-width: 991.98px) {
    .navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-lg>.container-lg,.navbar-expand-lg>.container-md,.navbar-expand-lg>.container-sm,.navbar-expand-lg>.container-xl {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 992px) {
    .navbar-expand-lg {
        -ms-flex-flow:row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-lg .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-lg>.container-lg,.navbar-expand-lg>.container-md,.navbar-expand-lg>.container-sm,.navbar-expand-lg>.container-xl {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-lg .navbar-collapse {
        display: -ms-flexbox!important;
        display: flex!important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-lg .navbar-toggler {
        display: none
    }
}

@media (max-width: 1199.98px) {
    .navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid,.navbar-expand-xl>.container-lg,.navbar-expand-xl>.container-md,.navbar-expand-xl>.container-sm,.navbar-expand-xl>.container-xl {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 1200px) {
    .navbar-expand-xl {
        -ms-flex-flow:row nowrap;
        flex-flow: row nowrap;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand-xl .navbar-nav {
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid,.navbar-expand-xl>.container-lg,.navbar-expand-xl>.container-md,.navbar-expand-xl>.container-sm,.navbar-expand-xl>.container-xl {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand-xl .navbar-collapse {
        display: -ms-flexbox!important;
        display: flex!important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand-xl .navbar-toggler {
        display: none
    }
}

.navbar-expand {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.navbar-expand>.container,.navbar-expand>.container-fluid,.navbar-expand>.container-lg,.navbar-expand>.container-md,.navbar-expand>.container-sm,.navbar-expand>.container-xl {
    padding-right: 0;
    padding-left: 0
}

.navbar-expand .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: .5rem;
    padding-left: .5rem
}

.navbar-expand>.container,.navbar-expand>.container-fluid,.navbar-expand>.container-lg,.navbar-expand>.container-md,.navbar-expand>.container-sm,.navbar-expand>.container-xl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap
}

.navbar-expand .navbar-collapse {
    display: -ms-flexbox!important;
    display: flex!important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto
}

.navbar-expand .navbar-toggler {
    display: none
}

.navbar-light .navbar-brand {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0,0,0,.5)
}

.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover {
    color: rgba(0,0,0,.7)
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0,0,0,.3)
}

.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .show>.nav-link {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-toggler {
    color: rgba(0,0,0,.5);
    border-color: rgba(0,0,0,.1)
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
}

.navbar-light .navbar-text {
    color: rgba(0,0,0,.5)
}

.navbar-light .navbar-text a {
    color: rgba(0,0,0,.9)
}

.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover {
    color: rgba(0,0,0,.9)
}

.navbar-dark .navbar-brand {
    color: #fff
}

.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover {
    color: #fff
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255,255,255,.5)
}

.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover {
    color: rgba(255,255,255,.75)
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255,255,255,.25)
}

.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link {
    color: #fff
}

.navbar-dark .navbar-toggler {
    color: rgba(255,255,255,.5);
    border-color: rgba(255,255,255,.1)
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
}

.navbar-dark .navbar-text {
    color: rgba(255,255,255,.5)
}

.navbar-dark .navbar-text a {
    color: #fff
}

.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover {
    color: #fff
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
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem
}

.card>hr {
    margin-right: 0;
    margin-left: 0
}

.card>.list-group:first-child .list-group-item:first-child {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.card>.list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem
}

.card-title {
    margin-bottom: .75rem
}

.card-subtitle {
    margin-top: -.375rem;
    margin-bottom: 0
}

.card-text:last-child {
    margin-bottom: 0
}

.card-link:hover {
    text-decoration: none
}

.card-link+.card-link {
    margin-left: 1.25rem
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125)
}

.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
}

.card-header+.list-group .list-group-item:first-child {
    border-top: 0
}

.card-footer {
    padding: .75rem 1.25rem;
    background-color: rgba(0,0,0,.03);
    border-top: 1px solid rgba(0,0,0,.125)
}

.card-footer:last-child {
    border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
}

.card-header-tabs {
    margin-right: -.625rem;
    margin-bottom: -.75rem;
    margin-left: -.625rem;
    border-bottom: 0
}

.card-header-pills {
    margin-right: -.625rem;
    margin-left: -.625rem
}

.card-img-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1.25rem
}

.card-img,.card-img-bottom,.card-img-top {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 100%
}

.card-img,.card-img-top {
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px)
}

.card-img,.card-img-bottom {
    border-bottom-right-radius: calc(.25rem - 1px);
    border-bottom-left-radius: calc(.25rem - 1px)
}

.card-deck .card {
    margin-bottom: 15px
}

@media (min-width: 576px) {
    .card-deck {
        display:-ms-flexbox;
        display: flex;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .card-deck .card {
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px
    }
}

.card-group>.card {
    margin-bottom: 15px
}

@media (min-width: 576px) {
    .card-group {
        display:-ms-flexbox;
        display: flex;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap
    }

    .card-group>.card {
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0
    }

    .card-group>.card+.card {
        margin-left: 0;
        border-left: 0
    }

    .card-group>.card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .card-group>.card:not(:last-child) .card-header,.card-group>.card:not(:last-child) .card-img-top {
        border-top-right-radius: 0
    }

    .card-group>.card:not(:last-child) .card-footer,.card-group>.card:not(:last-child) .card-img-bottom {
        border-bottom-right-radius: 0
    }

    .card-group>.card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .card-group>.card:not(:first-child) .card-header,.card-group>.card:not(:first-child) .card-img-top {
        border-top-left-radius: 0
    }

    .card-group>.card:not(:first-child) .card-footer,.card-group>.card:not(:first-child) .card-img-bottom {
        border-bottom-left-radius: 0
    }
}

.card-columns .card {
    margin-bottom: .75rem
}

@media (min-width: 576px) {
    .card-columns {
        -webkit-column-count:3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-gap: 1.25rem;
        -moz-column-gap: 1.25rem;
        column-gap: 1.25rem;
        orphans: 1;
        widows: 1
    }

    .card-columns .card {
        display: inline-block;
        width: 100%
    }
}

.accordion>.card {
    overflow: hidden
}

.accordion>.card:not(:last-of-type) {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.accordion>.card:not(:first-of-type) {
    border-top-left-radius: 0;
    border-top-right-radius: 0
}

.accordion>.card>.card-header {
    border-radius: 0;
    margin-bottom: -1px
}

.breadcrumb {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    padding: .75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: .25rem
}

.breadcrumb-item+.breadcrumb-item {
    padding-left: .5rem
}

.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    color: #6c757d;
    content: "/"
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: underline
}

.breadcrumb-item+.breadcrumb-item:hover::before {
    text-decoration: none
}

.breadcrumb-item.active {
    color: #6c757d
}

.pagination {
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: .25rem
}

.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6
}

.page-link:hover {
    z-index: 2;
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6
}

.page-link:focus {
    z-index: 3;
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.25)
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.page-item:last-child .page-link {
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem
}

.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #fff;
    border-color: #dee2e6
}

.pagination-lg .page-link {
    padding: .75rem 1.5rem;
    font-size: 1.25rem;
    line-height: 1.5
}

.pagination-lg .page-item:first-child .page-link {
    border-top-left-radius: .3rem;
    border-bottom-left-radius: .3rem
}

.pagination-lg .page-item:last-child .page-link {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem
}

.pagination-sm .page-link {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5
}

.pagination-sm .page-item:first-child .page-link {
    border-top-left-radius: .2rem;
    border-bottom-left-radius: .2rem
}

.pagination-sm .page-item:last-child .page-link {
    border-top-right-radius: .2rem;
    border-bottom-right-radius: .2rem
}

.badge {
    display: inline-block;
    padding: .25em .4em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .badge {
        transition: none
    }
}

a.badge:focus,a.badge:hover {
    text-decoration: none
}

.badge:empty {
    display: none
}

.btn .badge {
    position: relative;
    top: -1px
}

.badge-pill {
    padding-right: .6em;
    padding-left: .6em;
    border-radius: 10rem
}

.badge-primary {
    color: #fff;
    background-color: #007bff
}

a.badge-primary:focus,a.badge-primary:hover {
    color: #fff;
    background-color: #0062cc
}

a.badge-primary.focus,a.badge-primary:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(0,123,255,.5)
}

.badge-secondary {
    color: #fff;
    background-color: #6c757d
}

a.badge-secondary:focus,a.badge-secondary:hover {
    color: #fff;
    background-color: #545b62
}

a.badge-secondary.focus,a.badge-secondary:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(108,117,125,.5)
}

.badge-success {
    color: #fff;
    background-color: #28a745
}

a.badge-success:focus,a.badge-success:hover {
    color: #fff;
    background-color: #1e7e34
}

a.badge-success.focus,a.badge-success:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(40,167,69,.5)
}

.badge-info {
    color: #fff;
    background-color: #17a2b8
}

a.badge-info:focus,a.badge-info:hover {
    color: #fff;
    background-color: #117a8b
}

a.badge-info.focus,a.badge-info:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(23,162,184,.5)
}

.badge-warning {
    color: #212529;
    background-color: #ffc107
}

a.badge-warning:focus,a.badge-warning:hover {
    color: #212529;
    background-color: #d39e00
}

a.badge-warning.focus,a.badge-warning:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(255,193,7,.5)
}

.badge-danger {
    color: #fff;
    background-color: #dc3545
}

a.badge-danger:focus,a.badge-danger:hover {
    color: #fff;
    background-color: #bd2130
}

a.badge-danger.focus,a.badge-danger:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(220,53,69,.5)
}

.badge-light {
    color: #212529;
    background-color: #f8f9fa
}

a.badge-light:focus,a.badge-light:hover {
    color: #212529;
    background-color: #dae0e5
}

a.badge-light.focus,a.badge-light:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(248,249,250,.5)
}

.badge-dark {
    color: #fff;
    background-color: #343a40
}

a.badge-dark:focus,a.badge-dark:hover {
    color: #fff;
    background-color: #1d2124
}

a.badge-dark.focus,a.badge-dark:focus {
    outline: 0;
    box-shadow: 0 0 0 .2rem rgba(52,58,64,.5)
}

.jumbotron {
    padding: 2rem 1rem;
    margin-bottom: 2rem;
    background-color: #e9ecef;
    border-radius: .3rem
}

@media (min-width: 576px) {
    .jumbotron {
        padding:4rem 2rem
    }
}

.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0
}

.alert {
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem
}

.alert-heading {
    color: inherit
}

.alert-link {
    font-weight: 700
}

.alert-dismissible {
    padding-right: 4rem
}

.alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: .75rem 1.25rem;
    color: inherit
}

.alert-primary {
    color: #004085;
    background-color: #cce5ff;
    border-color: #b8daff
}

.alert-primary hr {
    border-top-color: #9fcdff
}

.alert-primary .alert-link {
    color: #002752
}

.alert-secondary {
    color: #383d41;
    background-color: #e2e3e5;
    border-color: #d6d8db
}

.alert-secondary hr {
    border-top-color: #c8cbcf
}

.alert-secondary .alert-link {
    color: #202326
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb
}

.alert-success hr {
    border-top-color: #b1dfbb
}

.alert-success .alert-link {
    color: #0b2e13
}

.alert-info {
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb
}

.alert-info hr {
    border-top-color: #abdde5
}

.alert-info .alert-link {
    color: #062c33
}

.alert-warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba
}

.alert-warning hr {
    border-top-color: #ffe8a1
}

.alert-warning .alert-link {
    color: #533f03
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb
}

.alert-danger hr {
    border-top-color: #f1b0b7
}

.alert-danger .alert-link {
    color: #491217
}

.alert-light {
    color: #818182;
    background-color: #fefefe;
    border-color: #fdfdfe
}

.alert-light hr {
    border-top-color: #ececf6
}

.alert-light .alert-link {
    color: #686868
}

.alert-dark {
    color: #1b1e21;
    background-color: #d6d8d9;
    border-color: #c6c8ca
}

.alert-dark hr {
    border-top-color: #b9bbbe
}

.alert-dark .alert-link {
    color: #040505
}

@-webkit-keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0
    }

    to {
        background-position: 0 0
    }
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0
    }

    to {
        background-position: 0 0
    }
}

.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem
}

.progress-bar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    background-color: #007bff;
    transition: width .6s ease
}

@media (prefers-reduced-motion:reduce) {
    .progress-bar {
        transition: none
    }
}

.progress-bar-striped {
    background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);
    background-size: 1rem 1rem
}

.progress-bar-animated {
    -webkit-animation: progress-bar-stripes 1s linear infinite;
    animation: progress-bar-stripes 1s linear infinite
}

@media (prefers-reduced-motion:reduce) {
    .progress-bar-animated {
        -webkit-animation: none;
        animation: none
    }
}

.media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start
}

.media-body {
    -ms-flex: 1;
    flex: 1
}

.list-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0
}

.list-group-item-action {
    width: 100%;
    color: #495057;
    text-align: inherit
}

.list-group-item-action:focus,.list-group-item-action:hover {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa
}

.list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef
}

.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125)
}

.list-group-item:first-child {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem
}

.list-group-item:last-child {
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem
}

.list-group-item.disabled,.list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff
}

.list-group-item+.list-group-item {
    border-top-width: 0
}

.list-group-item+.list-group-item.active {
    margin-top: -1px;
    border-top-width: 1px
}

.list-group-horizontal {
    -ms-flex-direction: row;
    flex-direction: row
}

.list-group-horizontal .list-group-item:first-child {
    border-bottom-left-radius: .25rem;
    border-top-right-radius: 0
}

.list-group-horizontal .list-group-item:last-child {
    border-top-right-radius: .25rem;
    border-bottom-left-radius: 0
}

.list-group-horizontal .list-group-item.active {
    margin-top: 0
}

.list-group-horizontal .list-group-item+.list-group-item {
    border-top-width: 1px;
    border-left-width: 0
}

.list-group-horizontal .list-group-item+.list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px
}

@media (min-width: 576px) {
    .list-group-horizontal-sm {
        -ms-flex-direction:row;
        flex-direction: row
    }

    .list-group-horizontal-sm .list-group-item:first-child {
        border-bottom-left-radius: .25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-sm .list-group-item:last-child {
        border-top-right-radius: .25rem;
        border-bottom-left-radius: 0
    }

    .list-group-horizontal-sm .list-group-item.active {
        margin-top: 0
    }

    .list-group-horizontal-sm .list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0
    }

    .list-group-horizontal-sm .list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px
    }
}

@media (min-width: 768px) {
    .list-group-horizontal-md {
        -ms-flex-direction:row;
        flex-direction: row
    }

    .list-group-horizontal-md .list-group-item:first-child {
        border-bottom-left-radius: .25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-md .list-group-item:last-child {
        border-top-right-radius: .25rem;
        border-bottom-left-radius: 0
    }

    .list-group-horizontal-md .list-group-item.active {
        margin-top: 0
    }

    .list-group-horizontal-md .list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0
    }

    .list-group-horizontal-md .list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px
    }
}

@media (min-width: 992px) {
    .list-group-horizontal-lg {
        -ms-flex-direction:row;
        flex-direction: row
    }

    .list-group-horizontal-lg .list-group-item:first-child {
        border-bottom-left-radius: .25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-lg .list-group-item:last-child {
        border-top-right-radius: .25rem;
        border-bottom-left-radius: 0
    }

    .list-group-horizontal-lg .list-group-item.active {
        margin-top: 0
    }

    .list-group-horizontal-lg .list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0
    }

    .list-group-horizontal-lg .list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px
    }
}

@media (min-width: 1200px) {
    .list-group-horizontal-xl {
        -ms-flex-direction:row;
        flex-direction: row
    }

    .list-group-horizontal-xl .list-group-item:first-child {
        border-bottom-left-radius: .25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal-xl .list-group-item:last-child {
        border-top-right-radius: .25rem;
        border-bottom-left-radius: 0
    }

    .list-group-horizontal-xl .list-group-item.active {
        margin-top: 0
    }

    .list-group-horizontal-xl .list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0
    }

    .list-group-horizontal-xl .list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px
    }
}

.list-group-flush .list-group-item {
    border-right-width: 0;
    border-left-width: 0;
    border-radius: 0
}

.list-group-flush .list-group-item:first-child {
    border-top-width: 0
}

.list-group-flush:last-child .list-group-item:last-child {
    border-bottom-width: 0
}

.list-group-item-primary {
    color: #004085;
    background-color: #b8daff
}

.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover {
    color: #004085;
    background-color: #9fcdff
}

.list-group-item-primary.list-group-item-action.active {
    color: #fff;
    background-color: #004085;
    border-color: #004085
}

.list-group-item-secondary {
    color: #383d41;
    background-color: #d6d8db
}

.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover {
    color: #383d41;
    background-color: #c8cbcf
}

.list-group-item-secondary.list-group-item-action.active {
    color: #fff;
    background-color: #383d41;
    border-color: #383d41
}

.list-group-item-success {
    color: #155724;
    background-color: #c3e6cb
}

.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover {
    color: #155724;
    background-color: #b1dfbb
}

.list-group-item-success.list-group-item-action.active {
    color: #fff;
    background-color: #155724;
    border-color: #155724
}

.list-group-item-info {
    color: #0c5460;
    background-color: #bee5eb
}

.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover {
    color: #0c5460;
    background-color: #abdde5
}

.list-group-item-info.list-group-item-action.active {
    color: #fff;
    background-color: #0c5460;
    border-color: #0c5460
}

.list-group-item-warning {
    color: #856404;
    background-color: #ffeeba
}

.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover {
    color: #856404;
    background-color: #ffe8a1
}

.list-group-item-warning.list-group-item-action.active {
    color: #fff;
    background-color: #856404;
    border-color: #856404
}

.list-group-item-danger {
    color: #721c24;
    background-color: #f5c6cb
}

.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover {
    color: #721c24;
    background-color: #f1b0b7
}

.list-group-item-danger.list-group-item-action.active {
    color: #fff;
    background-color: #721c24;
    border-color: #721c24
}

.list-group-item-light {
    color: #818182;
    background-color: #fdfdfe
}

.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover {
    color: #818182;
    background-color: #ececf6
}

.list-group-item-light.list-group-item-action.active {
    color: #fff;
    background-color: #818182;
    border-color: #818182
}

.list-group-item-dark {
    color: #1b1e21;
    background-color: #c6c8ca
}

.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover {
    color: #1b1e21;
    background-color: #b9bbbe
}

.list-group-item-dark.list-group-item-action.active {
    color: #fff;
    background-color: #1b1e21;
    border-color: #1b1e21
}

.close {
    float: right;
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .5
}

.close:hover {
    color: #000;
    text-decoration: none
}

.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover {
    opacity: .75
}

button.close {
    padding: 0;
    background-color: transparent;
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

a.close.disabled {
    pointer-events: none
}

.toast {
    max-width: 350px;
    overflow: hidden;
    font-size: .875rem;
    background-color: rgba(255,255,255,.85);
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.1);
    box-shadow: 0 .25rem .75rem rgba(0,0,0,.1);
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    opacity: 0;
    border-radius: .25rem
}

.toast:not(:last-child) {
    margin-bottom: .75rem
}

.toast.showing {
    opacity: 1
}

.toast.show {
    display: block;
    opacity: 1
}

.toast.hide {
    display: none
}

.toast-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding: .25rem .75rem;
    color: #6c757d;
    background-color: rgba(255,255,255,.85);
    background-clip: padding-box;
    border-bottom: 1px solid rgba(0,0,0,.05)
}

.toast-body {
    padding: .75rem
}

.modal-open {
    overflow: hidden
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: .5rem;
    pointer-events: none
}

.modal.fade .modal-dialog {
    transition: -webkit-transform .3s ease-out;
    transition: transform .3s ease-out;
    transition: transform .3s ease-out,-webkit-transform .3s ease-out;
    -webkit-transform: translate(0,-50px);
    transform: translate(0,-50px)
}

@media (prefers-reduced-motion:reduce) {
    .modal.fade .modal-dialog {
        transition: none
    }
}

.modal.show .modal-dialog {
    -webkit-transform: none;
    transform: none
}

.modal.modal-static .modal-dialog {
    -webkit-transform: scale(1.02);
    transform: scale(1.02)
}

.modal-dialog-scrollable {
    display: -ms-flexbox;
    display: flex;
    max-height: calc(100% - 1rem)
}

.modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 1rem);
    overflow: hidden
}

.modal-dialog-scrollable .modal-footer,.modal-dialog-scrollable .modal-header {
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.modal-dialog-scrollable .modal-body {
    overflow-y: auto
}

.modal-dialog-centered {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    min-height: calc(100% - 1rem)
}

.modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 1rem);
    content: ""
}

.modal-dialog-centered.modal-dialog-scrollable {
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: center;
    justify-content: center;
    height: 100%
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
    max-height: none
}

.modal-dialog-centered.modal-dialog-scrollable::before {
    content: none
}

.modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem;
    outline: 0
}

.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1040;
    width: 100vw;
    height: 100vh;
    background-color: #000
}

.modal-backdrop.fade {
    opacity: 0
}

.modal-backdrop.show {
    opacity: .5
}

.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: calc(.3rem - 1px);
    border-top-right-radius: calc(.3rem - 1px)
}

.modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto
}

.modal-title {
    margin-bottom: 0;
    line-height: 1.5
}

.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem
}

.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: .75rem;
    border-top: 1px solid #dee2e6;
    border-bottom-right-radius: calc(.3rem - 1px);
    border-bottom-left-radius: calc(.3rem - 1px)
}

.modal-footer>* {
    margin: .25rem
}

.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll
}

@media (min-width: 576px) {
    .modal-dialog {
        max-width:500px;
        margin: 1.75rem auto
    }

    .modal-dialog-scrollable {
        max-height: calc(100% - 3.5rem)
    }

    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 3.5rem)
    }

    .modal-dialog-centered {
        min-height: calc(100% - 3.5rem)
    }

    .modal-dialog-centered::before {
        height: calc(100vh - 3.5rem)
    }

    .modal-sm {
        max-width: 300px
    }
}

@media (min-width: 992px) {
    .modal-lg,.modal-xl {
        max-width:800px
    }
}

@media (min-width: 1200px) {
    .modal-xl {
        max-width:1140px
    }
}

.tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: .875rem;
    word-wrap: break-word;
    opacity: 0
}

.tooltip.show {
    opacity: .9
}

.tooltip .arrow {
    position: absolute;
    display: block;
    width: .8rem;
    height: .4rem
}

.tooltip .arrow::before {
    position: absolute;
    content: "";
    border-color: transparent;
    border-style: solid
}

.bs-tooltip-auto[x-placement^=top],.bs-tooltip-top {
    padding: .4rem 0
}

.bs-tooltip-auto[x-placement^=top] .arrow,.bs-tooltip-top .arrow {
    bottom: 0
}

.bs-tooltip-auto[x-placement^=top] .arrow::before,.bs-tooltip-top .arrow::before {
    top: 0;
    border-width: .4rem .4rem 0;
    border-top-color: #000
}

.bs-tooltip-auto[x-placement^=right],.bs-tooltip-right {
    padding: 0 .4rem
}

.bs-tooltip-auto[x-placement^=right] .arrow,.bs-tooltip-right .arrow {
    left: 0;
    width: .4rem;
    height: .8rem
}

.bs-tooltip-auto[x-placement^=right] .arrow::before,.bs-tooltip-right .arrow::before {
    right: 0;
    border-width: .4rem .4rem .4rem 0;
    border-right-color: #000
}

.bs-tooltip-auto[x-placement^=bottom],.bs-tooltip-bottom {
    padding: .4rem 0
}

.bs-tooltip-auto[x-placement^=bottom] .arrow,.bs-tooltip-bottom .arrow {
    top: 0
}

.bs-tooltip-auto[x-placement^=bottom] .arrow::before,.bs-tooltip-bottom .arrow::before {
    bottom: 0;
    border-width: 0 .4rem .4rem;
    border-bottom-color: #000
}

.bs-tooltip-auto[x-placement^=left],.bs-tooltip-left {
    padding: 0 .4rem
}

.bs-tooltip-auto[x-placement^=left] .arrow,.bs-tooltip-left .arrow {
    right: 0;
    width: .4rem;
    height: .8rem
}

.bs-tooltip-auto[x-placement^=left] .arrow::before,.bs-tooltip-left .arrow::before {
    left: 0;
    border-width: .4rem 0 .4rem .4rem;
    border-left-color: #000
}

.tooltip-inner {
    max-width: 200px;
    padding: .25rem .5rem;
    color: #fff;
    text-align: center;
    background-color: #000;
    border-radius: .25rem
}

.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: block;
    max-width: 276px;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-style: normal;
    font-weight: 400;
    line-height: 1.5;
    text-align: left;
    text-align: start;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    white-space: normal;
    line-break: auto;
    font-size: .875rem;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem
}

.popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: .5rem;
    margin: 0 .3rem
}

.popover .arrow::after,.popover .arrow::before {
    position: absolute;
    display: block;
    content: "";
    border-color: transparent;
    border-style: solid
}

.bs-popover-auto[x-placement^=top],.bs-popover-top {
    margin-bottom: .5rem
}

.bs-popover-auto[x-placement^=top]>.arrow,.bs-popover-top>.arrow {
    bottom: calc(-.5rem - 1px)
}

.bs-popover-auto[x-placement^=top]>.arrow::before,.bs-popover-top>.arrow::before {
    bottom: 0;
    border-width: .5rem .5rem 0;
    border-top-color: rgba(0,0,0,.25)
}

.bs-popover-auto[x-placement^=top]>.arrow::after,.bs-popover-top>.arrow::after {
    bottom: 1px;
    border-width: .5rem .5rem 0;
    border-top-color: #fff
}

.bs-popover-auto[x-placement^=right],.bs-popover-right {
    margin-left: .5rem
}

.bs-popover-auto[x-placement^=right]>.arrow,.bs-popover-right>.arrow {
    left: calc(-.5rem - 1px);
    width: .5rem;
    height: 1rem;
    margin: .3rem 0
}

.bs-popover-auto[x-placement^=right]>.arrow::before,.bs-popover-right>.arrow::before {
    left: 0;
    border-width: .5rem .5rem .5rem 0;
    border-right-color: rgba(0,0,0,.25)
}

.bs-popover-auto[x-placement^=right]>.arrow::after,.bs-popover-right>.arrow::after {
    left: 1px;
    border-width: .5rem .5rem .5rem 0;
    border-right-color: #fff
}

.bs-popover-auto[x-placement^=bottom],.bs-popover-bottom {
    margin-top: .5rem
}

.bs-popover-auto[x-placement^=bottom]>.arrow,.bs-popover-bottom>.arrow {
    top: calc(-.5rem - 1px)
}

.bs-popover-auto[x-placement^=bottom]>.arrow::before,.bs-popover-bottom>.arrow::before {
    top: 0;
    border-width: 0 .5rem .5rem .5rem;
    border-bottom-color: rgba(0,0,0,.25)
}

.bs-popover-auto[x-placement^=bottom]>.arrow::after,.bs-popover-bottom>.arrow::after {
    top: 1px;
    border-width: 0 .5rem .5rem .5rem;
    border-bottom-color: #fff
}

.bs-popover-auto[x-placement^=bottom] .popover-header::before,.bs-popover-bottom .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7
}

.bs-popover-auto[x-placement^=left],.bs-popover-left {
    margin-right: .5rem
}

.bs-popover-auto[x-placement^=left]>.arrow,.bs-popover-left>.arrow {
    right: calc(-.5rem - 1px);
    width: .5rem;
    height: 1rem;
    margin: .3rem 0
}

.bs-popover-auto[x-placement^=left]>.arrow::before,.bs-popover-left>.arrow::before {
    right: 0;
    border-width: .5rem 0 .5rem .5rem;
    border-left-color: rgba(0,0,0,.25)
}

.bs-popover-auto[x-placement^=left]>.arrow::after,.bs-popover-left>.arrow::after {
    right: 1px;
    border-width: .5rem 0 .5rem .5rem;
    border-left-color: #fff
}

.popover-header {
    padding: .5rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-top-left-radius: calc(.3rem - 1px);
    border-top-right-radius: calc(.3rem - 1px)
}

.popover-header:empty {
    display: none
}

.popover-body {
    padding: .5rem .75rem;
    color: #212529
}

.carousel {
    position: relative
}

.carousel.pointer-event {
    -ms-touch-action: pan-y;
    touch-action: pan-y
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden
}

.carousel-inner::after {
    display: block;
    clear: both;
    content: ""
}

.carousel-item {
    position: relative;
    display: none;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: -webkit-transform .6s ease-in-out;
    transition: transform .6s ease-in-out;
    transition: transform .6s ease-in-out,-webkit-transform .6s ease-in-out
}

@media (prefers-reduced-motion:reduce) {
    .carousel-item {
        transition: none
    }
}

.carousel-item-next,.carousel-item-prev,.carousel-item.active {
    display: block
}

.active.carousel-item-right,.carousel-item-next:not(.carousel-item-left) {
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
}

.active.carousel-item-left,.carousel-item-prev:not(.carousel-item-right) {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    -webkit-transform: none;
    transform: none
}

.carousel-fade .carousel-item-next.carousel-item-left,.carousel-fade .carousel-item-prev.carousel-item-right,.carousel-fade .carousel-item.active {
    z-index: 1;
    opacity: 1
}

.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    transition: opacity 0s .6s
}

@media (prefers-reduced-motion:reduce) {
    .carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right {
        transition: none
    }
}

.carousel-control-next,.carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: .5;
    transition: opacity .15s ease
}

@media (prefers-reduced-motion:reduce) {
    .carousel-control-next,.carousel-control-prev {
        transition: none
    }
}

.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9
}

.carousel-control-prev {
    left: 0
}

.carousel-control-next {
    right: 0
}

.carousel-control-next-icon,.carousel-control-prev-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: no-repeat 50%/100% 100%
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e")
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e")
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none
}

.carousel-indicators li {
    box-sizing: content-box;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    transition: opacity .6s ease
}

@media (prefers-reduced-motion:reduce) {
    .carousel-indicators li {
        transition: none
    }
}

.carousel-indicators .active {
    opacity: 1
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center
}

@-webkit-keyframes spinner-border {
    to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

@keyframes spinner-border {
    to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

.spinner-border {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    border: .25em solid currentColor;
    border-right-color: transparent;
    border-radius: 50%;
    -webkit-animation: spinner-border .75s linear infinite;
    animation: spinner-border .75s linear infinite
}

.spinner-border-sm {
    width: 1rem;
    height: 1rem;
    border-width: .2em
}

@-webkit-keyframes spinner-grow {
    0% {
        -webkit-transform: scale(0);
        transform: scale(0)
    }

    50% {
        opacity: 1
    }
}

@keyframes spinner-grow {
    0% {
        -webkit-transform: scale(0);
        transform: scale(0)
    }

    50% {
        opacity: 1
    }
}

.spinner-grow {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    vertical-align: text-bottom;
    background-color: currentColor;
    border-radius: 50%;
    opacity: 0;
    -webkit-animation: spinner-grow .75s linear infinite;
    animation: spinner-grow .75s linear infinite
}

.spinner-grow-sm {
    width: 1rem;
    height: 1rem
}

.align-baseline {
    vertical-align: baseline!important
}

.align-top {
    vertical-align: top!important
}

.align-middle {
    vertical-align: middle!important
}

.align-bottom {
    vertical-align: bottom!important
}

.align-text-bottom {
    vertical-align: text-bottom!important
}

.align-text-top {
    vertical-align: text-top!important
}

.bg-primary {
    background-color: #007bff!important
}

a.bg-primary:focus,a.bg-primary:hover,button.bg-primary:focus,button.bg-primary:hover {
    background-color: #0062cc!important
}

.bg-secondary {
    background-color: #6c757d!important
}

a.bg-secondary:focus,a.bg-secondary:hover,button.bg-secondary:focus,button.bg-secondary:hover {
    background-color: #545b62!important
}

.bg-success {
    background-color: #28a745!important
}

a.bg-success:focus,a.bg-success:hover,button.bg-success:focus,button.bg-success:hover {
    background-color: #1e7e34!important
}

.bg-info {
    background-color: #17a2b8!important
}

a.bg-info:focus,a.bg-info:hover,button.bg-info:focus,button.bg-info:hover {
    background-color: #117a8b!important
}

.bg-warning {
    background-color: #ffc107!important
}

a.bg-warning:focus,a.bg-warning:hover,button.bg-warning:focus,button.bg-warning:hover {
    background-color: #d39e00!important
}

.bg-danger {
    background-color: #dc3545!important
}

a.bg-danger:focus,a.bg-danger:hover,button.bg-danger:focus,button.bg-danger:hover {
    background-color: #bd2130!important
}

.bg-light {
    background-color: #f8f9fa!important
}

a.bg-light:focus,a.bg-light:hover,button.bg-light:focus,button.bg-light:hover {
    background-color: #dae0e5!important
}

.bg-dark {
    background-color: #343a40!important
}

a.bg-dark:focus,a.bg-dark:hover,button.bg-dark:focus,button.bg-dark:hover {
    background-color: #1d2124!important
}

.bg-white {
    background-color: #fff!important
}

.bg-transparent {
    background-color: transparent!important
}

.border {
    border: 1px solid #dee2e6!important
}

.border-top {
    border-top: 1px solid #dee2e6!important
}

.border-right {
    border-right: 1px solid #dee2e6!important
}

.border-bottom {
    border-bottom: 1px solid #dee2e6!important
}

.border-left {
    border-left: 1px solid #dee2e6!important
}

.border-0 {
    border: 0!important
}

.border-top-0 {
    border-top: 0!important
}

.border-right-0 {
    border-right: 0!important
}

.border-bottom-0 {
    border-bottom: 0!important
}

.border-left-0 {
    border-left: 0!important
}

.border-primary {
    border-color: #007bff!important
}

.border-secondary {
    border-color: #6c757d!important
}

.border-success {
    border-color: #28a745!important
}

.border-info {
    border-color: #17a2b8!important
}

.border-warning {
    border-color: #ffc107!important
}

.border-danger {
    border-color: #dc3545!important
}

.border-light {
    border-color: #f8f9fa!important
}

.border-dark {
    border-color: #343a40!important
}

.border-white {
    border-color: #fff!important
}

.rounded-sm {
    border-radius: .2rem!important
}

.rounded {
    border-radius: .25rem!important
}

.rounded-top {
    border-top-left-radius: .25rem!important;
    border-top-right-radius: .25rem!important
}

.rounded-right {
    border-top-right-radius: .25rem!important;
    border-bottom-right-radius: .25rem!important
}

.rounded-bottom {
    border-bottom-right-radius: .25rem!important;
    border-bottom-left-radius: .25rem!important
}

.rounded-left {
    border-top-left-radius: .25rem!important;
    border-bottom-left-radius: .25rem!important
}

.rounded-lg {
    border-radius: .3rem!important
}

.rounded-circle {
    border-radius: 50%!important
}

.rounded-pill {
    border-radius: 50rem!important
}

.rounded-0 {
    border-radius: 0!important
}

.clearfix::after {
    display: block;
    clear: both;
    content: ""
}

.d-none {
    display: none!important
}

.d-inline {
    display: inline!important
}

.d-inline-block {
    display: inline-block!important
}

.d-block {
    display: block!important
}

.d-table {
    display: table!important
}

.d-table-row {
    display: table-row!important
}

.d-table-cell {
    display: table-cell!important
}

.d-flex {
    display: -ms-flexbox!important;
    display: flex!important
}

.d-inline-flex {
    display: -ms-inline-flexbox!important;
    display: inline-flex!important
}

@media (min-width: 576px) {
    .d-sm-none {
        display:none!important
    }

    .d-sm-inline {
        display: inline!important
    }

    .d-sm-inline-block {
        display: inline-block!important
    }

    .d-sm-block {
        display: block!important
    }

    .d-sm-table {
        display: table!important
    }

    .d-sm-table-row {
        display: table-row!important
    }

    .d-sm-table-cell {
        display: table-cell!important
    }

    .d-sm-flex {
        display: -ms-flexbox!important;
        display: flex!important
    }

    .d-sm-inline-flex {
        display: -ms-inline-flexbox!important;
        display: inline-flex!important
    }
}

@media (min-width: 768px) {
    .d-md-none {
        display:none!important
    }

    .d-md-inline {
        display: inline!important
    }

    .d-md-inline-block {
        display: inline-block!important
    }

    .d-md-block {
        display: block!important
    }

    .d-md-table {
        display: table!important
    }

    .d-md-table-row {
        display: table-row!important
    }

    .d-md-table-cell {
        display: table-cell!important
    }

    .d-md-flex {
        display: -ms-flexbox!important;
        display: flex!important
    }

    .d-md-inline-flex {
        display: -ms-inline-flexbox!important;
        display: inline-flex!important
    }
}

@media (min-width: 992px) {
    .d-lg-none {
        display:none!important
    }

    .d-lg-inline {
        display: inline!important
    }

    .d-lg-inline-block {
        display: inline-block!important
    }

    .d-lg-block {
        display: block!important
    }

    .d-lg-table {
        display: table!important
    }

    .d-lg-table-row {
        display: table-row!important
    }

    .d-lg-table-cell {
        display: table-cell!important
    }

    .d-lg-flex {
        display: -ms-flexbox!important;
        display: flex!important
    }

    .d-lg-inline-flex {
        display: -ms-inline-flexbox!important;
        display: inline-flex!important
    }
}

@media (min-width: 1200px) {
    .d-xl-none {
        display:none!important
    }

    .d-xl-inline {
        display: inline!important
    }

    .d-xl-inline-block {
        display: inline-block!important
    }

    .d-xl-block {
        display: block!important
    }

    .d-xl-table {
        display: table!important
    }

    .d-xl-table-row {
        display: table-row!important
    }

    .d-xl-table-cell {
        display: table-cell!important
    }

    .d-xl-flex {
        display: -ms-flexbox!important;
        display: flex!important
    }

    .d-xl-inline-flex {
        display: -ms-inline-flexbox!important;
        display: inline-flex!important
    }
}

@media print {
    .d-print-none {
        display: none!important
    }

    .d-print-inline {
        display: inline!important
    }

    .d-print-inline-block {
        display: inline-block!important
    }

    .d-print-block {
        display: block!important
    }

    .d-print-table {
        display: table!important
    }

    .d-print-table-row {
        display: table-row!important
    }

    .d-print-table-cell {
        display: table-cell!important
    }

    .d-print-flex {
        display: -ms-flexbox!important;
        display: flex!important
    }

    .d-print-inline-flex {
        display: -ms-inline-flexbox!important;
        display: inline-flex!important
    }
}

.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden
}

.embed-responsive::before {
    display: block;
    content: ""
}

.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0
}

.embed-responsive-21by9::before {
    padding-top: 42.857143%
}

.embed-responsive-16by9::before {
    padding-top: 56.25%
}

.embed-responsive-4by3::before {
    padding-top: 75%
}

.embed-responsive-1by1::before {
    padding-top: 100%
}

.flex-row {
    -ms-flex-direction: row!important;
    flex-direction: row!important
}

.flex-column {
    -ms-flex-direction: column!important;
    flex-direction: column!important
}

.flex-row-reverse {
    -ms-flex-direction: row-reverse!important;
    flex-direction: row-reverse!important
}

.flex-column-reverse {
    -ms-flex-direction: column-reverse!important;
    flex-direction: column-reverse!important
}

.flex-wrap {
    -ms-flex-wrap: wrap!important;
    flex-wrap: wrap!important
}

.flex-nowrap {
    -ms-flex-wrap: nowrap!important;
    flex-wrap: nowrap!important
}

.flex-wrap-reverse {
    -ms-flex-wrap: wrap-reverse!important;
    flex-wrap: wrap-reverse!important
}

.flex-fill {
    -ms-flex: 1 1 auto!important;
    flex: 1 1 auto!important
}

.flex-grow-0 {
    -ms-flex-positive: 0!important;
    flex-grow: 0!important
}

.flex-grow-1 {
    -ms-flex-positive: 1!important;
    flex-grow: 1!important
}

.flex-shrink-0 {
    -ms-flex-negative: 0!important;
    flex-shrink: 0!important
}

.flex-shrink-1 {
    -ms-flex-negative: 1!important;
    flex-shrink: 1!important
}

.justify-content-start {
    -ms-flex-pack: start!important;
    justify-content: flex-start!important
}

.justify-content-end {
    -ms-flex-pack: end!important;
    justify-content: flex-end!important
}

.justify-content-center {
    -ms-flex-pack: center!important;
    justify-content: center!important
}

.justify-content-between {
    -ms-flex-pack: justify!important;
    justify-content: space-between!important
}

.justify-content-around {
    -ms-flex-pack: distribute!important;
    justify-content: space-around!important
}

.align-items-start {
    -ms-flex-align: start!important;
    align-items: flex-start!important
}

.align-items-end {
    -ms-flex-align: end!important;
    align-items: flex-end!important
}

.align-items-center {
    -ms-flex-align: center!important;
    align-items: center!important
}

.align-items-baseline {
    -ms-flex-align: baseline!important;
    align-items: baseline!important
}

.align-items-stretch {
    -ms-flex-align: stretch!important;
    align-items: stretch!important
}

.align-content-start {
    -ms-flex-line-pack: start!important;
    align-content: flex-start!important
}

.align-content-end {
    -ms-flex-line-pack: end!important;
    align-content: flex-end!important
}

.align-content-center {
    -ms-flex-line-pack: center!important;
    align-content: center!important
}

.align-content-between {
    -ms-flex-line-pack: justify!important;
    align-content: space-between!important
}

.align-content-around {
    -ms-flex-line-pack: distribute!important;
    align-content: space-around!important
}

.align-content-stretch {
    -ms-flex-line-pack: stretch!important;
    align-content: stretch!important
}

.align-self-auto {
    -ms-flex-item-align: auto!important;
    align-self: auto!important
}

.align-self-start {
    -ms-flex-item-align: start!important;
    align-self: flex-start!important
}

.align-self-end {
    -ms-flex-item-align: end!important;
    align-self: flex-end!important
}

.align-self-center {
    -ms-flex-item-align: center!important;
    align-self: center!important
}

.align-self-baseline {
    -ms-flex-item-align: baseline!important;
    align-self: baseline!important
}

.align-self-stretch {
    -ms-flex-item-align: stretch!important;
    align-self: stretch!important
}

@media (min-width: 576px) {
    .flex-sm-row {
        -ms-flex-direction:row!important;
        flex-direction: row!important
    }

    .flex-sm-column {
        -ms-flex-direction: column!important;
        flex-direction: column!important
    }

    .flex-sm-row-reverse {
        -ms-flex-direction: row-reverse!important;
        flex-direction: row-reverse!important
    }

    .flex-sm-column-reverse {
        -ms-flex-direction: column-reverse!important;
        flex-direction: column-reverse!important
    }

    .flex-sm-wrap {
        -ms-flex-wrap: wrap!important;
        flex-wrap: wrap!important
    }

    .flex-sm-nowrap {
        -ms-flex-wrap: nowrap!important;
        flex-wrap: nowrap!important
    }

    .flex-sm-wrap-reverse {
        -ms-flex-wrap: wrap-reverse!important;
        flex-wrap: wrap-reverse!important
    }

    .flex-sm-fill {
        -ms-flex: 1 1 auto!important;
        flex: 1 1 auto!important
    }

    .flex-sm-grow-0 {
        -ms-flex-positive: 0!important;
        flex-grow: 0!important
    }

    .flex-sm-grow-1 {
        -ms-flex-positive: 1!important;
        flex-grow: 1!important
    }

    .flex-sm-shrink-0 {
        -ms-flex-negative: 0!important;
        flex-shrink: 0!important
    }

    .flex-sm-shrink-1 {
        -ms-flex-negative: 1!important;
        flex-shrink: 1!important
    }

    .justify-content-sm-start {
        -ms-flex-pack: start!important;
        justify-content: flex-start!important
    }

    .justify-content-sm-end {
        -ms-flex-pack: end!important;
        justify-content: flex-end!important
    }

    .justify-content-sm-center {
        -ms-flex-pack: center!important;
        justify-content: center!important
    }

    .justify-content-sm-between {
        -ms-flex-pack: justify!important;
        justify-content: space-between!important
    }

    .justify-content-sm-around {
        -ms-flex-pack: distribute!important;
        justify-content: space-around!important
    }

    .align-items-sm-start {
        -ms-flex-align: start!important;
        align-items: flex-start!important
    }

    .align-items-sm-end {
        -ms-flex-align: end!important;
        align-items: flex-end!important
    }

    .align-items-sm-center {
        -ms-flex-align: center!important;
        align-items: center!important
    }

    .align-items-sm-baseline {
        -ms-flex-align: baseline!important;
        align-items: baseline!important
    }

    .align-items-sm-stretch {
        -ms-flex-align: stretch!important;
        align-items: stretch!important
    }

    .align-content-sm-start {
        -ms-flex-line-pack: start!important;
        align-content: flex-start!important
    }

    .align-content-sm-end {
        -ms-flex-line-pack: end!important;
        align-content: flex-end!important
    }

    .align-content-sm-center {
        -ms-flex-line-pack: center!important;
        align-content: center!important
    }

    .align-content-sm-between {
        -ms-flex-line-pack: justify!important;
        align-content: space-between!important
    }

    .align-content-sm-around {
        -ms-flex-line-pack: distribute!important;
        align-content: space-around!important
    }

    .align-content-sm-stretch {
        -ms-flex-line-pack: stretch!important;
        align-content: stretch!important
    }

    .align-self-sm-auto {
        -ms-flex-item-align: auto!important;
        align-self: auto!important
    }

    .align-self-sm-start {
        -ms-flex-item-align: start!important;
        align-self: flex-start!important
    }

    .align-self-sm-end {
        -ms-flex-item-align: end!important;
        align-self: flex-end!important
    }

    .align-self-sm-center {
        -ms-flex-item-align: center!important;
        align-self: center!important
    }

    .align-self-sm-baseline {
        -ms-flex-item-align: baseline!important;
        align-self: baseline!important
    }

    .align-self-sm-stretch {
        -ms-flex-item-align: stretch!important;
        align-self: stretch!important
    }
}

@media (min-width: 768px) {
    .flex-md-row {
        -ms-flex-direction:row!important;
        flex-direction: row!important
    }

    .flex-md-column {
        -ms-flex-direction: column!important;
        flex-direction: column!important
    }

    .flex-md-row-reverse {
        -ms-flex-direction: row-reverse!important;
        flex-direction: row-reverse!important
    }

    .flex-md-column-reverse {
        -ms-flex-direction: column-reverse!important;
        flex-direction: column-reverse!important
    }

    .flex-md-wrap {
        -ms-flex-wrap: wrap!important;
        flex-wrap: wrap!important
    }

    .flex-md-nowrap {
        -ms-flex-wrap: nowrap!important;
        flex-wrap: nowrap!important
    }

    .flex-md-wrap-reverse {
        -ms-flex-wrap: wrap-reverse!important;
        flex-wrap: wrap-reverse!important
    }

    .flex-md-fill {
        -ms-flex: 1 1 auto!important;
        flex: 1 1 auto!important
    }

    .flex-md-grow-0 {
        -ms-flex-positive: 0!important;
        flex-grow: 0!important
    }

    .flex-md-grow-1 {
        -ms-flex-positive: 1!important;
        flex-grow: 1!important
    }

    .flex-md-shrink-0 {
        -ms-flex-negative: 0!important;
        flex-shrink: 0!important
    }

    .flex-md-shrink-1 {
        -ms-flex-negative: 1!important;
        flex-shrink: 1!important
    }

    .justify-content-md-start {
        -ms-flex-pack: start!important;
        justify-content: flex-start!important
    }

    .justify-content-md-end {
        -ms-flex-pack: end!important;
        justify-content: flex-end!important
    }

    .justify-content-md-center {
        -ms-flex-pack: center!important;
        justify-content: center!important
    }

    .justify-content-md-between {
        -ms-flex-pack: justify!important;
        justify-content: space-between!important
    }

    .justify-content-md-around {
        -ms-flex-pack: distribute!important;
        justify-content: space-around!important
    }

    .align-items-md-start {
        -ms-flex-align: start!important;
        align-items: flex-start!important
    }

    .align-items-md-end {
        -ms-flex-align: end!important;
        align-items: flex-end!important
    }

    .align-items-md-center {
        -ms-flex-align: center!important;
        align-items: center!important
    }

    .align-items-md-baseline {
        -ms-flex-align: baseline!important;
        align-items: baseline!important
    }

    .align-items-md-stretch {
        -ms-flex-align: stretch!important;
        align-items: stretch!important
    }

    .align-content-md-start {
        -ms-flex-line-pack: start!important;
        align-content: flex-start!important
    }

    .align-content-md-end {
        -ms-flex-line-pack: end!important;
        align-content: flex-end!important
    }

    .align-content-md-center {
        -ms-flex-line-pack: center!important;
        align-content: center!important
    }

    .align-content-md-between {
        -ms-flex-line-pack: justify!important;
        align-content: space-between!important
    }

    .align-content-md-around {
        -ms-flex-line-pack: distribute!important;
        align-content: space-around!important
    }

    .align-content-md-stretch {
        -ms-flex-line-pack: stretch!important;
        align-content: stretch!important
    }

    .align-self-md-auto {
        -ms-flex-item-align: auto!important;
        align-self: auto!important
    }

    .align-self-md-start {
        -ms-flex-item-align: start!important;
        align-self: flex-start!important
    }

    .align-self-md-end {
        -ms-flex-item-align: end!important;
        align-self: flex-end!important
    }

    .align-self-md-center {
        -ms-flex-item-align: center!important;
        align-self: center!important
    }

    .align-self-md-baseline {
        -ms-flex-item-align: baseline!important;
        align-self: baseline!important
    }

    .align-self-md-stretch {
        -ms-flex-item-align: stretch!important;
        align-self: stretch!important
    }
}

@media (min-width: 992px) {
    .flex-lg-row {
        -ms-flex-direction:row!important;
        flex-direction: row!important
    }

    .flex-lg-column {
        -ms-flex-direction: column!important;
        flex-direction: column!important
    }

    .flex-lg-row-reverse {
        -ms-flex-direction: row-reverse!important;
        flex-direction: row-reverse!important
    }

    .flex-lg-column-reverse {
        -ms-flex-direction: column-reverse!important;
        flex-direction: column-reverse!important
    }

    .flex-lg-wrap {
        -ms-flex-wrap: wrap!important;
        flex-wrap: wrap!important
    }

    .flex-lg-nowrap {
        -ms-flex-wrap: nowrap!important;
        flex-wrap: nowrap!important
    }

    .flex-lg-wrap-reverse {
        -ms-flex-wrap: wrap-reverse!important;
        flex-wrap: wrap-reverse!important
    }

    .flex-lg-fill {
        -ms-flex: 1 1 auto!important;
        flex: 1 1 auto!important
    }

    .flex-lg-grow-0 {
        -ms-flex-positive: 0!important;
        flex-grow: 0!important
    }

    .flex-lg-grow-1 {
        -ms-flex-positive: 1!important;
        flex-grow: 1!important
    }

    .flex-lg-shrink-0 {
        -ms-flex-negative: 0!important;
        flex-shrink: 0!important
    }

    .flex-lg-shrink-1 {
        -ms-flex-negative: 1!important;
        flex-shrink: 1!important
    }

    .justify-content-lg-start {
        -ms-flex-pack: start!important;
        justify-content: flex-start!important
    }

    .justify-content-lg-end {
        -ms-flex-pack: end!important;
        justify-content: flex-end!important
    }

    .justify-content-lg-center {
        -ms-flex-pack: center!important;
        justify-content: center!important
    }

    .justify-content-lg-between {
        -ms-flex-pack: justify!important;
        justify-content: space-between!important
    }

    .justify-content-lg-around {
        -ms-flex-pack: distribute!important;
        justify-content: space-around!important
    }

    .align-items-lg-start {
        -ms-flex-align: start!important;
        align-items: flex-start!important
    }

    .align-items-lg-end {
        -ms-flex-align: end!important;
        align-items: flex-end!important
    }

    .align-items-lg-center {
        -ms-flex-align: center!important;
        align-items: center!important
    }

    .align-items-lg-baseline {
        -ms-flex-align: baseline!important;
        align-items: baseline!important
    }

    .align-items-lg-stretch {
        -ms-flex-align: stretch!important;
        align-items: stretch!important
    }

    .align-content-lg-start {
        -ms-flex-line-pack: start!important;
        align-content: flex-start!important
    }

    .align-content-lg-end {
        -ms-flex-line-pack: end!important;
        align-content: flex-end!important
    }

    .align-content-lg-center {
        -ms-flex-line-pack: center!important;
        align-content: center!important
    }

    .align-content-lg-between {
        -ms-flex-line-pack: justify!important;
        align-content: space-between!important
    }

    .align-content-lg-around {
        -ms-flex-line-pack: distribute!important;
        align-content: space-around!important
    }

    .align-content-lg-stretch {
        -ms-flex-line-pack: stretch!important;
        align-content: stretch!important
    }

    .align-self-lg-auto {
        -ms-flex-item-align: auto!important;
        align-self: auto!important
    }

    .align-self-lg-start {
        -ms-flex-item-align: start!important;
        align-self: flex-start!important
    }

    .align-self-lg-end {
        -ms-flex-item-align: end!important;
        align-self: flex-end!important
    }

    .align-self-lg-center {
        -ms-flex-item-align: center!important;
        align-self: center!important
    }

    .align-self-lg-baseline {
        -ms-flex-item-align: baseline!important;
        align-self: baseline!important
    }

    .align-self-lg-stretch {
        -ms-flex-item-align: stretch!important;
        align-self: stretch!important
    }
}

@media (min-width: 1200px) {
    .flex-xl-row {
        -ms-flex-direction:row!important;
        flex-direction: row!important
    }

    .flex-xl-column {
        -ms-flex-direction: column!important;
        flex-direction: column!important
    }

    .flex-xl-row-reverse {
        -ms-flex-direction: row-reverse!important;
        flex-direction: row-reverse!important
    }

    .flex-xl-column-reverse {
        -ms-flex-direction: column-reverse!important;
        flex-direction: column-reverse!important
    }

    .flex-xl-wrap {
        -ms-flex-wrap: wrap!important;
        flex-wrap: wrap!important
    }

    .flex-xl-nowrap {
        -ms-flex-wrap: nowrap!important;
        flex-wrap: nowrap!important
    }

    .flex-xl-wrap-reverse {
        -ms-flex-wrap: wrap-reverse!important;
        flex-wrap: wrap-reverse!important
    }

    .flex-xl-fill {
        -ms-flex: 1 1 auto!important;
        flex: 1 1 auto!important
    }

    .flex-xl-grow-0 {
        -ms-flex-positive: 0!important;
        flex-grow: 0!important
    }

    .flex-xl-grow-1 {
        -ms-flex-positive: 1!important;
        flex-grow: 1!important
    }

    .flex-xl-shrink-0 {
        -ms-flex-negative: 0!important;
        flex-shrink: 0!important
    }

    .flex-xl-shrink-1 {
        -ms-flex-negative: 1!important;
        flex-shrink: 1!important
    }

    .justify-content-xl-start {
        -ms-flex-pack: start!important;
        justify-content: flex-start!important
    }

    .justify-content-xl-end {
        -ms-flex-pack: end!important;
        justify-content: flex-end!important
    }

    .justify-content-xl-center {
        -ms-flex-pack: center!important;
        justify-content: center!important
    }

    .justify-content-xl-between {
        -ms-flex-pack: justify!important;
        justify-content: space-between!important
    }

    .justify-content-xl-around {
        -ms-flex-pack: distribute!important;
        justify-content: space-around!important
    }

    .align-items-xl-start {
        -ms-flex-align: start!important;
        align-items: flex-start!important
    }

    .align-items-xl-end {
        -ms-flex-align: end!important;
        align-items: flex-end!important
    }

    .align-items-xl-center {
        -ms-flex-align: center!important;
        align-items: center!important
    }

    .align-items-xl-baseline {
        -ms-flex-align: baseline!important;
        align-items: baseline!important
    }

    .align-items-xl-stretch {
        -ms-flex-align: stretch!important;
        align-items: stretch!important
    }

    .align-content-xl-start {
        -ms-flex-line-pack: start!important;
        align-content: flex-start!important
    }

    .align-content-xl-end {
        -ms-flex-line-pack: end!important;
        align-content: flex-end!important
    }

    .align-content-xl-center {
        -ms-flex-line-pack: center!important;
        align-content: center!important
    }

    .align-content-xl-between {
        -ms-flex-line-pack: justify!important;
        align-content: space-between!important
    }

    .align-content-xl-around {
        -ms-flex-line-pack: distribute!important;
        align-content: space-around!important
    }

    .align-content-xl-stretch {
        -ms-flex-line-pack: stretch!important;
        align-content: stretch!important
    }

    .align-self-xl-auto {
        -ms-flex-item-align: auto!important;
        align-self: auto!important
    }

    .align-self-xl-start {
        -ms-flex-item-align: start!important;
        align-self: flex-start!important
    }

    .align-self-xl-end {
        -ms-flex-item-align: end!important;
        align-self: flex-end!important
    }

    .align-self-xl-center {
        -ms-flex-item-align: center!important;
        align-self: center!important
    }

    .align-self-xl-baseline {
        -ms-flex-item-align: baseline!important;
        align-self: baseline!important
    }

    .align-self-xl-stretch {
        -ms-flex-item-align: stretch!important;
        align-self: stretch!important
    }
}

.float-left {
    float: left!important
}

.float-right {
    float: right!important
}

.float-none {
    float: none!important
}

@media (min-width: 576px) {
    .float-sm-left {
        float:left!important
    }

    .float-sm-right {
        float: right!important
    }

    .float-sm-none {
        float: none!important
    }
}

@media (min-width: 768px) {
    .float-md-left {
        float:left!important
    }

    .float-md-right {
        float: right!important
    }

    .float-md-none {
        float: none!important
    }
}

@media (min-width: 992px) {
    .float-lg-left {
        float:left!important
    }

    .float-lg-right {
        float: right!important
    }

    .float-lg-none {
        float: none!important
    }
}

@media (min-width: 1200px) {
    .float-xl-left {
        float:left!important
    }

    .float-xl-right {
        float: right!important
    }

    .float-xl-none {
        float: none!important
    }
}

.overflow-auto {
    overflow: auto!important
}

.overflow-hidden {
    overflow: hidden!important
}

.position-static {
    position: static!important
}

.position-relative {
    position: relative!important
}

.position-absolute {
    position: absolute!important
}

.position-fixed {
    position: fixed!important
}

.position-sticky {
    position: -webkit-sticky!important;
    position: sticky!important
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030
}

.fixed-bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1030
}

@supports ((position: -webkit-sticky) or (position:sticky)) {
    .sticky-top {
        position:-webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020
    }
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border: 0
}

.sr-only-focusable:active,.sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    overflow: visible;
    clip: auto;
    white-space: normal
}

.shadow-sm {
    box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important
}

.shadow {
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important
}

.shadow-none {
    box-shadow: none!important
}

.w-25 {
    width: 25%!important
}

.w-50 {
    width: 50%!important
}

.w-75 {
    width: 75%!important
}

.w-100 {
    width: 100%!important
}

.w-auto {
    width: auto!important
}

.h-25 {
    height: 25%!important
}

.h-50 {
    height: 50%!important
}

.h-75 {
    height: 75%!important
}

.h-100 {
    height: 100%!important
}

.h-auto {
    height: auto!important
}

.mw-100 {
    max-width: 100%!important
}

.mh-100 {
    max-height: 100%!important
}

.min-vw-100 {
    min-width: 100vw!important
}

.min-vh-100 {
    min-height: 100vh!important
}

.vw-100 {
    width: 100vw!important
}

.vh-100 {
    height: 100vh!important
}

.stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0,0,0,0)
}

.m-0 {
    margin: 0!important
}

.mt-0,.my-0 {
    margin-top: 0!important
}

.mr-0,.mx-0 {
    margin-right: 0!important
}

.mb-0,.my-0 {
    margin-bottom: 0!important
}

.ml-0,.mx-0 {
    margin-left: 0!important
}

.m-1 {
    margin: .25rem!important
}

.mt-1,.my-1 {
    margin-top: .25rem!important
}

.mr-1,.mx-1 {
    margin-right: .25rem!important
}

.mb-1,.my-1 {
    margin-bottom: .25rem!important
}

.ml-1,.mx-1 {
    margin-left: .25rem!important
}

.m-2 {
    margin: .5rem!important
}

.mt-2,.my-2 {
    margin-top: .5rem!important
}

.mr-2,.mx-2 {
    margin-right: .5rem!important
}

.mb-2,.my-2 {
    margin-bottom: .5rem!important
}

.ml-2,.mx-2 {
    margin-left: .5rem!important
}

.m-3 {
    margin: 1rem!important
}

.mt-3,.my-3 {
    margin-top: 1rem!important
}

.mr-3,.mx-3 {
    margin-right: 1rem!important
}

.mb-3,.my-3 {
    margin-bottom: 1rem!important
}

.ml-3,.mx-3 {
    margin-left: 1rem!important
}

.m-4 {
    margin: 1.5rem!important
}

.mt-4,.my-4 {
    margin-top: 1.5rem!important
}

.mr-4,.mx-4 {
    margin-right: 1.5rem!important
}

.mb-4,.my-4 {
    margin-bottom: 1.5rem!important
}

.ml-4,.mx-4 {
    margin-left: 1.5rem!important
}

.m-5 {
    margin: 3rem!important
}

.mt-5,.my-5 {
    margin-top: 3rem!important
}

.mr-5,.mx-5 {
    margin-right: 3rem!important
}

.mb-5,.my-5 {
    margin-bottom: 3rem!important
}

.ml-5,.mx-5 {
    margin-left: 3rem!important
}

.p-0 {
    padding: 0!important
}

.pt-0,.py-0 {
    padding-top: 0!important
}

.pr-0,.px-0 {
    padding-right: 0!important
}

.pb-0,.py-0 {
    padding-bottom: 0!important
}

.pl-0,.px-0 {
    padding-left: 0!important
}

.p-1 {
    padding: .25rem!important
}

.pt-1,.py-1 {
    padding-top: .25rem!important
}

.pr-1,.px-1 {
    padding-right: .25rem!important
}

.pb-1,.py-1 {
    padding-bottom: .25rem!important
}

.pl-1,.px-1 {
    padding-left: .25rem!important
}

.p-2 {
    padding: .5rem!important
}

.pt-2,.py-2 {
    padding-top: .5rem!important
}

.pr-2,.px-2 {
    padding-right: .5rem!important
}

.pb-2,.py-2 {
    padding-bottom: .5rem!important
}

.pl-2,.px-2 {
    padding-left: .5rem!important
}

.p-3 {
    padding: 1rem!important
}

.pt-3,.py-3 {
    padding-top: 1rem!important
}

.pr-3,.px-3 {
    padding-right: 1rem!important
}

.pb-3,.py-3 {
    padding-bottom: 1rem!important
}

.pl-3,.px-3 {
    padding-left: 1rem!important
}

.p-4 {
    padding: 1.5rem!important
}

.pt-4,.py-4 {
    padding-top: 1.5rem!important
}

.pr-4,.px-4 {
    padding-right: 1.5rem!important
}

.pb-4,.py-4 {
    padding-bottom: 1.5rem!important
}

.pl-4,.px-4 {
    padding-left: 1.5rem!important
}

.p-5 {
    padding: 3rem!important
}

.pt-5,.py-5 {
    padding-top: 3rem!important
}

.pr-5,.px-5 {
    padding-right: 3rem!important
}

.pb-5,.py-5 {
    padding-bottom: 3rem!important
}

.pl-5,.px-5 {
    padding-left: 3rem!important
}

.m-n1 {
    margin: -.25rem!important
}

.mt-n1,.my-n1 {
    margin-top: -.25rem!important
}

.mr-n1,.mx-n1 {
    margin-right: -.25rem!important
}

.mb-n1,.my-n1 {
    margin-bottom: -.25rem!important
}

.ml-n1,.mx-n1 {
    margin-left: -.25rem!important
}

.m-n2 {
    margin: -.5rem!important
}

.mt-n2,.my-n2 {
    margin-top: -.5rem!important
}

.mr-n2,.mx-n2 {
    margin-right: -.5rem!important
}

.mb-n2,.my-n2 {
    margin-bottom: -.5rem!important
}

.ml-n2,.mx-n2 {
    margin-left: -.5rem!important
}

.m-n3 {
    margin: -1rem!important
}

.mt-n3,.my-n3 {
    margin-top: -1rem!important
}

.mr-n3,.mx-n3 {
    margin-right: -1rem!important
}

.mb-n3,.my-n3 {
    margin-bottom: -1rem!important
}

.ml-n3,.mx-n3 {
    margin-left: -1rem!important
}

.m-n4 {
    margin: -1.5rem!important
}

.mt-n4,.my-n4 {
    margin-top: -1.5rem!important
}

.mr-n4,.mx-n4 {
    margin-right: -1.5rem!important
}

.mb-n4,.my-n4 {
    margin-bottom: -1.5rem!important
}

.ml-n4,.mx-n4 {
    margin-left: -1.5rem!important
}

.m-n5 {
    margin: -3rem!important
}

.mt-n5,.my-n5 {
    margin-top: -3rem!important
}

.mr-n5,.mx-n5 {
    margin-right: -3rem!important
}

.mb-n5,.my-n5 {
    margin-bottom: -3rem!important
}

.ml-n5,.mx-n5 {
    margin-left: -3rem!important
}

.m-auto {
    margin: auto!important
}

.mt-auto,.my-auto {
    margin-top: auto!important
}

.mr-auto,.mx-auto {
    margin-right: auto!important
}

.mb-auto,.my-auto {
    margin-bottom: auto!important
}

.ml-auto,.mx-auto {
    margin-left: auto!important
}

@media (min-width: 576px) {
    .m-sm-0 {
        margin:0!important
    }

    .mt-sm-0,.my-sm-0 {
        margin-top: 0!important
    }

    .mr-sm-0,.mx-sm-0 {
        margin-right: 0!important
    }

    .mb-sm-0,.my-sm-0 {
        margin-bottom: 0!important
    }

    .ml-sm-0,.mx-sm-0 {
        margin-left: 0!important
    }

    .m-sm-1 {
        margin: .25rem!important
    }

    .mt-sm-1,.my-sm-1 {
        margin-top: .25rem!important
    }

    .mr-sm-1,.mx-sm-1 {
        margin-right: .25rem!important
    }

    .mb-sm-1,.my-sm-1 {
        margin-bottom: .25rem!important
    }

    .ml-sm-1,.mx-sm-1 {
        margin-left: .25rem!important
    }

    .m-sm-2 {
        margin: .5rem!important
    }

    .mt-sm-2,.my-sm-2 {
        margin-top: .5rem!important
    }

    .mr-sm-2,.mx-sm-2 {
        margin-right: .5rem!important
    }

    .mb-sm-2,.my-sm-2 {
        margin-bottom: .5rem!important
    }

    .ml-sm-2,.mx-sm-2 {
        margin-left: .5rem!important
    }

    .m-sm-3 {
        margin: 1rem!important
    }

    .mt-sm-3,.my-sm-3 {
        margin-top: 1rem!important
    }

    .mr-sm-3,.mx-sm-3 {
        margin-right: 1rem!important
    }

    .mb-sm-3,.my-sm-3 {
        margin-bottom: 1rem!important
    }

    .ml-sm-3,.mx-sm-3 {
        margin-left: 1rem!important
    }

    .m-sm-4 {
        margin: 1.5rem!important
    }

    .mt-sm-4,.my-sm-4 {
        margin-top: 1.5rem!important
    }

    .mr-sm-4,.mx-sm-4 {
        margin-right: 1.5rem!important
    }

    .mb-sm-4,.my-sm-4 {
        margin-bottom: 1.5rem!important
    }

    .ml-sm-4,.mx-sm-4 {
        margin-left: 1.5rem!important
    }

    .m-sm-5 {
        margin: 3rem!important
    }

    .mt-sm-5,.my-sm-5 {
        margin-top: 3rem!important
    }

    .mr-sm-5,.mx-sm-5 {
        margin-right: 3rem!important
    }

    .mb-sm-5,.my-sm-5 {
        margin-bottom: 3rem!important
    }

    .ml-sm-5,.mx-sm-5 {
        margin-left: 3rem!important
    }

    .p-sm-0 {
        padding: 0!important
    }

    .pt-sm-0,.py-sm-0 {
        padding-top: 0!important
    }

    .pr-sm-0,.px-sm-0 {
        padding-right: 0!important
    }

    .pb-sm-0,.py-sm-0 {
        padding-bottom: 0!important
    }

    .pl-sm-0,.px-sm-0 {
        padding-left: 0!important
    }

    .p-sm-1 {
        padding: .25rem!important
    }

    .pt-sm-1,.py-sm-1 {
        padding-top: .25rem!important
    }

    .pr-sm-1,.px-sm-1 {
        padding-right: .25rem!important
    }

    .pb-sm-1,.py-sm-1 {
        padding-bottom: .25rem!important
    }

    .pl-sm-1,.px-sm-1 {
        padding-left: .25rem!important
    }

    .p-sm-2 {
        padding: .5rem!important
    }

    .pt-sm-2,.py-sm-2 {
        padding-top: .5rem!important
    }

    .pr-sm-2,.px-sm-2 {
        padding-right: .5rem!important
    }

    .pb-sm-2,.py-sm-2 {
        padding-bottom: .5rem!important
    }

    .pl-sm-2,.px-sm-2 {
        padding-left: .5rem!important
    }

    .p-sm-3 {
        padding: 1rem!important
    }

    .pt-sm-3,.py-sm-3 {
        padding-top: 1rem!important
    }

    .pr-sm-3,.px-sm-3 {
        padding-right: 1rem!important
    }

    .pb-sm-3,.py-sm-3 {
        padding-bottom: 1rem!important
    }

    .pl-sm-3,.px-sm-3 {
        padding-left: 1rem!important
    }

    .p-sm-4 {
        padding: 1.5rem!important
    }

    .pt-sm-4,.py-sm-4 {
        padding-top: 1.5rem!important
    }

    .pr-sm-4,.px-sm-4 {
        padding-right: 1.5rem!important
    }

    .pb-sm-4,.py-sm-4 {
        padding-bottom: 1.5rem!important
    }

    .pl-sm-4,.px-sm-4 {
        padding-left: 1.5rem!important
    }

    .p-sm-5 {
        padding: 3rem!important
    }

    .pt-sm-5,.py-sm-5 {
        padding-top: 3rem!important
    }

    .pr-sm-5,.px-sm-5 {
        padding-right: 3rem!important
    }

    .pb-sm-5,.py-sm-5 {
        padding-bottom: 3rem!important
    }

    .pl-sm-5,.px-sm-5 {
        padding-left: 3rem!important
    }

    .m-sm-n1 {
        margin: -.25rem!important
    }

    .mt-sm-n1,.my-sm-n1 {
        margin-top: -.25rem!important
    }

    .mr-sm-n1,.mx-sm-n1 {
        margin-right: -.25rem!important
    }

    .mb-sm-n1,.my-sm-n1 {
        margin-bottom: -.25rem!important
    }

    .ml-sm-n1,.mx-sm-n1 {
        margin-left: -.25rem!important
    }

    .m-sm-n2 {
        margin: -.5rem!important
    }

    .mt-sm-n2,.my-sm-n2 {
        margin-top: -.5rem!important
    }

    .mr-sm-n2,.mx-sm-n2 {
        margin-right: -.5rem!important
    }

    .mb-sm-n2,.my-sm-n2 {
        margin-bottom: -.5rem!important
    }

    .ml-sm-n2,.mx-sm-n2 {
        margin-left: -.5rem!important
    }

    .m-sm-n3 {
        margin: -1rem!important
    }

    .mt-sm-n3,.my-sm-n3 {
        margin-top: -1rem!important
    }

    .mr-sm-n3,.mx-sm-n3 {
        margin-right: -1rem!important
    }

    .mb-sm-n3,.my-sm-n3 {
        margin-bottom: -1rem!important
    }

    .ml-sm-n3,.mx-sm-n3 {
        margin-left: -1rem!important
    }

    .m-sm-n4 {
        margin: -1.5rem!important
    }

    .mt-sm-n4,.my-sm-n4 {
        margin-top: -1.5rem!important
    }

    .mr-sm-n4,.mx-sm-n4 {
        margin-right: -1.5rem!important
    }

    .mb-sm-n4,.my-sm-n4 {
        margin-bottom: -1.5rem!important
    }

    .ml-sm-n4,.mx-sm-n4 {
        margin-left: -1.5rem!important
    }

    .m-sm-n5 {
        margin: -3rem!important
    }

    .mt-sm-n5,.my-sm-n5 {
        margin-top: -3rem!important
    }

    .mr-sm-n5,.mx-sm-n5 {
        margin-right: -3rem!important
    }

    .mb-sm-n5,.my-sm-n5 {
        margin-bottom: -3rem!important
    }

    .ml-sm-n5,.mx-sm-n5 {
        margin-left: -3rem!important
    }

    .m-sm-auto {
        margin: auto!important
    }

    .mt-sm-auto,.my-sm-auto {
        margin-top: auto!important
    }

    .mr-sm-auto,.mx-sm-auto {
        margin-right: auto!important
    }

    .mb-sm-auto,.my-sm-auto {
        margin-bottom: auto!important
    }

    .ml-sm-auto,.mx-sm-auto {
        margin-left: auto!important
    }
}

@media (min-width: 768px) {
    .m-md-0 {
        margin:0!important
    }

    .mt-md-0,.my-md-0 {
        margin-top: 0!important
    }

    .mr-md-0,.mx-md-0 {
        margin-right: 0!important
    }

    .mb-md-0,.my-md-0 {
        margin-bottom: 0!important
    }

    .ml-md-0,.mx-md-0 {
        margin-left: 0!important
    }

    .m-md-1 {
        margin: .25rem!important
    }

    .mt-md-1,.my-md-1 {
        margin-top: .25rem!important
    }

    .mr-md-1,.mx-md-1 {
        margin-right: .25rem!important
    }

    .mb-md-1,.my-md-1 {
        margin-bottom: .25rem!important
    }

    .ml-md-1,.mx-md-1 {
        margin-left: .25rem!important
    }

    .m-md-2 {
        margin: .5rem!important
    }

    .mt-md-2,.my-md-2 {
        margin-top: .5rem!important
    }

    .mr-md-2,.mx-md-2 {
        margin-right: .5rem!important
    }

    .mb-md-2,.my-md-2 {
        margin-bottom: .5rem!important
    }

    .ml-md-2,.mx-md-2 {
        margin-left: .5rem!important
    }

    .m-md-3 {
        margin: 1rem!important
    }

    .mt-md-3,.my-md-3 {
        margin-top: 1rem!important
    }

    .mr-md-3,.mx-md-3 {
        margin-right: 1rem!important
    }

    .mb-md-3,.my-md-3 {
        margin-bottom: 1rem!important
    }

    .ml-md-3,.mx-md-3 {
        margin-left: 1rem!important
    }

    .m-md-4 {
        margin: 1.5rem!important
    }

    .mt-md-4,.my-md-4 {
        margin-top: 1.5rem!important
    }

    .mr-md-4,.mx-md-4 {
        margin-right: 1.5rem!important
    }

    .mb-md-4,.my-md-4 {
        margin-bottom: 1.5rem!important
    }

    .ml-md-4,.mx-md-4 {
        margin-left: 1.5rem!important
    }

    .m-md-5 {
        margin: 3rem!important
    }

    .mt-md-5,.my-md-5 {
        margin-top: 3rem!important
    }

    .mr-md-5,.mx-md-5 {
        margin-right: 3rem!important
    }

    .mb-md-5,.my-md-5 {
        margin-bottom: 3rem!important
    }

    .ml-md-5,.mx-md-5 {
        margin-left: 3rem!important
    }

    .p-md-0 {
        padding: 0!important
    }

    .pt-md-0,.py-md-0 {
        padding-top: 0!important
    }

    .pr-md-0,.px-md-0 {
        padding-right: 0!important
    }

    .pb-md-0,.py-md-0 {
        padding-bottom: 0!important
    }

    .pl-md-0,.px-md-0 {
        padding-left: 0!important
    }

    .p-md-1 {
        padding: .25rem!important
    }

    .pt-md-1,.py-md-1 {
        padding-top: .25rem!important
    }

    .pr-md-1,.px-md-1 {
        padding-right: .25rem!important
    }

    .pb-md-1,.py-md-1 {
        padding-bottom: .25rem!important
    }

    .pl-md-1,.px-md-1 {
        padding-left: .25rem!important
    }

    .p-md-2 {
        padding: .5rem!important
    }

    .pt-md-2,.py-md-2 {
        padding-top: .5rem!important
    }

    .pr-md-2,.px-md-2 {
        padding-right: .5rem!important
    }

    .pb-md-2,.py-md-2 {
        padding-bottom: .5rem!important
    }

    .pl-md-2,.px-md-2 {
        padding-left: .5rem!important
    }

    .p-md-3 {
        padding: 1rem!important
    }

    .pt-md-3,.py-md-3 {
        padding-top: 1rem!important
    }

    .pr-md-3,.px-md-3 {
        padding-right: 1rem!important
    }

    .pb-md-3,.py-md-3 {
        padding-bottom: 1rem!important
    }

    .pl-md-3,.px-md-3 {
        padding-left: 1rem!important
    }

    .p-md-4 {
        padding: 1.5rem!important
    }

    .pt-md-4,.py-md-4 {
        padding-top: 1.5rem!important
    }

    .pr-md-4,.px-md-4 {
        padding-right: 1.5rem!important
    }

    .pb-md-4,.py-md-4 {
        padding-bottom: 1.5rem!important
    }

    .pl-md-4,.px-md-4 {
        padding-left: 1.5rem!important
    }

    .p-md-5 {
        padding: 3rem!important
    }

    .pt-md-5,.py-md-5 {
        padding-top: 3rem!important
    }

    .pr-md-5,.px-md-5 {
        padding-right: 3rem!important
    }

    .pb-md-5,.py-md-5 {
        padding-bottom: 3rem!important
    }

    .pl-md-5,.px-md-5 {
        padding-left: 3rem!important
    }

    .m-md-n1 {
        margin: -.25rem!important
    }

    .mt-md-n1,.my-md-n1 {
        margin-top: -.25rem!important
    }

    .mr-md-n1,.mx-md-n1 {
        margin-right: -.25rem!important
    }

    .mb-md-n1,.my-md-n1 {
        margin-bottom: -.25rem!important
    }

    .ml-md-n1,.mx-md-n1 {
        margin-left: -.25rem!important
    }

    .m-md-n2 {
        margin: -.5rem!important
    }

    .mt-md-n2,.my-md-n2 {
        margin-top: -.5rem!important
    }

    .mr-md-n2,.mx-md-n2 {
        margin-right: -.5rem!important
    }

    .mb-md-n2,.my-md-n2 {
        margin-bottom: -.5rem!important
    }

    .ml-md-n2,.mx-md-n2 {
        margin-left: -.5rem!important
    }

    .m-md-n3 {
        margin: -1rem!important
    }

    .mt-md-n3,.my-md-n3 {
        margin-top: -1rem!important
    }

    .mr-md-n3,.mx-md-n3 {
        margin-right: -1rem!important
    }

    .mb-md-n3,.my-md-n3 {
        margin-bottom: -1rem!important
    }

    .ml-md-n3,.mx-md-n3 {
        margin-left: -1rem!important
    }

    .m-md-n4 {
        margin: -1.5rem!important
    }

    .mt-md-n4,.my-md-n4 {
        margin-top: -1.5rem!important
    }

    .mr-md-n4,.mx-md-n4 {
        margin-right: -1.5rem!important
    }

    .mb-md-n4,.my-md-n4 {
        margin-bottom: -1.5rem!important
    }

    .ml-md-n4,.mx-md-n4 {
        margin-left: -1.5rem!important
    }

    .m-md-n5 {
        margin: -3rem!important
    }

    .mt-md-n5,.my-md-n5 {
        margin-top: -3rem!important
    }

    .mr-md-n5,.mx-md-n5 {
        margin-right: -3rem!important
    }

    .mb-md-n5,.my-md-n5 {
        margin-bottom: -3rem!important
    }

    .ml-md-n5,.mx-md-n5 {
        margin-left: -3rem!important
    }

    .m-md-auto {
        margin: auto!important
    }

    .mt-md-auto,.my-md-auto {
        margin-top: auto!important
    }

    .mr-md-auto,.mx-md-auto {
        margin-right: auto!important
    }

    .mb-md-auto,.my-md-auto {
        margin-bottom: auto!important
    }

    .ml-md-auto,.mx-md-auto {
        margin-left: auto!important
    }
}

@media (min-width: 992px) {
    .m-lg-0 {
        margin:0!important
    }

    .mt-lg-0,.my-lg-0 {
        margin-top: 0!important
    }

    .mr-lg-0,.mx-lg-0 {
        margin-right: 0!important
    }

    .mb-lg-0,.my-lg-0 {
        margin-bottom: 0!important
    }

    .ml-lg-0,.mx-lg-0 {
        margin-left: 0!important
    }

    .m-lg-1 {
        margin: .25rem!important
    }

    .mt-lg-1,.my-lg-1 {
        margin-top: .25rem!important
    }

    .mr-lg-1,.mx-lg-1 {
        margin-right: .25rem!important
    }

    .mb-lg-1,.my-lg-1 {
        margin-bottom: .25rem!important
    }

    .ml-lg-1,.mx-lg-1 {
        margin-left: .25rem!important
    }

    .m-lg-2 {
        margin: .5rem!important
    }

    .mt-lg-2,.my-lg-2 {
        margin-top: .5rem!important
    }

    .mr-lg-2,.mx-lg-2 {
        margin-right: .5rem!important
    }

    .mb-lg-2,.my-lg-2 {
        margin-bottom: .5rem!important
    }

    .ml-lg-2,.mx-lg-2 {
        margin-left: .5rem!important
    }

    .m-lg-3 {
        margin: 1rem!important
    }

    .mt-lg-3,.my-lg-3 {
        margin-top: 1rem!important
    }

    .mr-lg-3,.mx-lg-3 {
        margin-right: 1rem!important
    }

    .mb-lg-3,.my-lg-3 {
        margin-bottom: 1rem!important
    }

    .ml-lg-3,.mx-lg-3 {
        margin-left: 1rem!important
    }

    .m-lg-4 {
        margin: 1.5rem!important
    }

    .mt-lg-4,.my-lg-4 {
        margin-top: 1.5rem!important
    }

    .mr-lg-4,.mx-lg-4 {
        margin-right: 1.5rem!important
    }

    .mb-lg-4,.my-lg-4 {
        margin-bottom: 1.5rem!important
    }

    .ml-lg-4,.mx-lg-4 {
        margin-left: 1.5rem!important
    }

    .m-lg-5 {
        margin: 3rem!important
    }

    .mt-lg-5,.my-lg-5 {
        margin-top: 3rem!important
    }

    .mr-lg-5,.mx-lg-5 {
        margin-right: 3rem!important
    }

    .mb-lg-5,.my-lg-5 {
        margin-bottom: 3rem!important
    }

    .ml-lg-5,.mx-lg-5 {
        margin-left: 3rem!important
    }

    .p-lg-0 {
        padding: 0!important
    }

    .pt-lg-0,.py-lg-0 {
        padding-top: 0!important
    }

    .pr-lg-0,.px-lg-0 {
        padding-right: 0!important
    }

    .pb-lg-0,.py-lg-0 {
        padding-bottom: 0!important
    }

    .pl-lg-0,.px-lg-0 {
        padding-left: 0!important
    }

    .p-lg-1 {
        padding: .25rem!important
    }

    .pt-lg-1,.py-lg-1 {
        padding-top: .25rem!important
    }

    .pr-lg-1,.px-lg-1 {
        padding-right: .25rem!important
    }

    .pb-lg-1,.py-lg-1 {
        padding-bottom: .25rem!important
    }

    .pl-lg-1,.px-lg-1 {
        padding-left: .25rem!important
    }

    .p-lg-2 {
        padding: .5rem!important
    }

    .pt-lg-2,.py-lg-2 {
        padding-top: .5rem!important
    }

    .pr-lg-2,.px-lg-2 {
        padding-right: .5rem!important
    }

    .pb-lg-2,.py-lg-2 {
        padding-bottom: .5rem!important
    }

    .pl-lg-2,.px-lg-2 {
        padding-left: .5rem!important
    }

    .p-lg-3 {
        padding: 1rem!important
    }

    .pt-lg-3,.py-lg-3 {
        padding-top: 1rem!important
    }

    .pr-lg-3,.px-lg-3 {
        padding-right: 1rem!important
    }

    .pb-lg-3,.py-lg-3 {
        padding-bottom: 1rem!important
    }

    .pl-lg-3,.px-lg-3 {
        padding-left: 1rem!important
    }

    .p-lg-4 {
        padding: 1.5rem!important
    }

    .pt-lg-4,.py-lg-4 {
        padding-top: 1.5rem!important
    }

    .pr-lg-4,.px-lg-4 {
        padding-right: 1.5rem!important
    }

    .pb-lg-4,.py-lg-4 {
        padding-bottom: 1.5rem!important
    }

    .pl-lg-4,.px-lg-4 {
        padding-left: 1.5rem!important
    }

    .p-lg-5 {
        padding: 3rem!important
    }

    .pt-lg-5,.py-lg-5 {
        padding-top: 3rem!important
    }

    .pr-lg-5,.px-lg-5 {
        padding-right: 3rem!important
    }

    .pb-lg-5,.py-lg-5 {
        padding-bottom: 3rem!important
    }

    .pl-lg-5,.px-lg-5 {
        padding-left: 3rem!important
    }

    .m-lg-n1 {
        margin: -.25rem!important
    }

    .mt-lg-n1,.my-lg-n1 {
        margin-top: -.25rem!important
    }

    .mr-lg-n1,.mx-lg-n1 {
        margin-right: -.25rem!important
    }

    .mb-lg-n1,.my-lg-n1 {
        margin-bottom: -.25rem!important
    }

    .ml-lg-n1,.mx-lg-n1 {
        margin-left: -.25rem!important
    }

    .m-lg-n2 {
        margin: -.5rem!important
    }

    .mt-lg-n2,.my-lg-n2 {
        margin-top: -.5rem!important
    }

    .mr-lg-n2,.mx-lg-n2 {
        margin-right: -.5rem!important
    }

    .mb-lg-n2,.my-lg-n2 {
        margin-bottom: -.5rem!important
    }

    .ml-lg-n2,.mx-lg-n2 {
        margin-left: -.5rem!important
    }

    .m-lg-n3 {
        margin: -1rem!important
    }

    .mt-lg-n3,.my-lg-n3 {
        margin-top: -1rem!important
    }

    .mr-lg-n3,.mx-lg-n3 {
        margin-right: -1rem!important
    }

    .mb-lg-n3,.my-lg-n3 {
        margin-bottom: -1rem!important
    }

    .ml-lg-n3,.mx-lg-n3 {
        margin-left: -1rem!important
    }

    .m-lg-n4 {
        margin: -1.5rem!important
    }

    .mt-lg-n4,.my-lg-n4 {
        margin-top: -1.5rem!important
    }

    .mr-lg-n4,.mx-lg-n4 {
        margin-right: -1.5rem!important
    }

    .mb-lg-n4,.my-lg-n4 {
        margin-bottom: -1.5rem!important
    }

    .ml-lg-n4,.mx-lg-n4 {
        margin-left: -1.5rem!important
    }

    .m-lg-n5 {
        margin: -3rem!important
    }

    .mt-lg-n5,.my-lg-n5 {
        margin-top: -3rem!important
    }

    .mr-lg-n5,.mx-lg-n5 {
        margin-right: -3rem!important
    }

    .mb-lg-n5,.my-lg-n5 {
        margin-bottom: -3rem!important
    }

    .ml-lg-n5,.mx-lg-n5 {
        margin-left: -3rem!important
    }

    .m-lg-auto {
        margin: auto!important
    }

    .mt-lg-auto,.my-lg-auto {
        margin-top: auto!important
    }

    .mr-lg-auto,.mx-lg-auto {
        margin-right: auto!important
    }

    .mb-lg-auto,.my-lg-auto {
        margin-bottom: auto!important
    }

    .ml-lg-auto,.mx-lg-auto {
        margin-left: auto!important
    }
}

@media (min-width: 1200px) {
    .m-xl-0 {
        margin:0!important
    }

    .mt-xl-0,.my-xl-0 {
        margin-top: 0!important
    }

    .mr-xl-0,.mx-xl-0 {
        margin-right: 0!important
    }

    .mb-xl-0,.my-xl-0 {
        margin-bottom: 0!important
    }

    .ml-xl-0,.mx-xl-0 {
        margin-left: 0!important
    }

    .m-xl-1 {
        margin: .25rem!important
    }

    .mt-xl-1,.my-xl-1 {
        margin-top: .25rem!important
    }

    .mr-xl-1,.mx-xl-1 {
        margin-right: .25rem!important
    }

    .mb-xl-1,.my-xl-1 {
        margin-bottom: .25rem!important
    }

    .ml-xl-1,.mx-xl-1 {
        margin-left: .25rem!important
    }

    .m-xl-2 {
        margin: .5rem!important
    }

    .mt-xl-2,.my-xl-2 {
        margin-top: .5rem!important
    }

    .mr-xl-2,.mx-xl-2 {
        margin-right: .5rem!important
    }

    .mb-xl-2,.my-xl-2 {
        margin-bottom: .5rem!important
    }

    .ml-xl-2,.mx-xl-2 {
        margin-left: .5rem!important
    }

    .m-xl-3 {
        margin: 1rem!important
    }

    .mt-xl-3,.my-xl-3 {
        margin-top: 1rem!important
    }

    .mr-xl-3,.mx-xl-3 {
        margin-right: 1rem!important
    }

    .mb-xl-3,.my-xl-3 {
        margin-bottom: 1rem!important
    }

    .ml-xl-3,.mx-xl-3 {
        margin-left: 1rem!important
    }

    .m-xl-4 {
        margin: 1.5rem!important
    }

    .mt-xl-4,.my-xl-4 {
        margin-top: 1.5rem!important
    }

    .mr-xl-4,.mx-xl-4 {
        margin-right: 1.5rem!important
    }

    .mb-xl-4,.my-xl-4 {
        margin-bottom: 1.5rem!important
    }

    .ml-xl-4,.mx-xl-4 {
        margin-left: 1.5rem!important
    }

    .m-xl-5 {
        margin: 3rem!important
    }

    .mt-xl-5,.my-xl-5 {
        margin-top: 3rem!important
    }

    .mr-xl-5,.mx-xl-5 {
        margin-right: 3rem!important
    }

    .mb-xl-5,.my-xl-5 {
        margin-bottom: 3rem!important
    }

    .ml-xl-5,.mx-xl-5 {
        margin-left: 3rem!important
    }

    .p-xl-0 {
        padding: 0!important
    }

    .pt-xl-0,.py-xl-0 {
        padding-top: 0!important
    }

    .pr-xl-0,.px-xl-0 {
        padding-right: 0!important
    }

    .pb-xl-0,.py-xl-0 {
        padding-bottom: 0!important
    }

    .pl-xl-0,.px-xl-0 {
        padding-left: 0!important
    }

    .p-xl-1 {
        padding: .25rem!important
    }

    .pt-xl-1,.py-xl-1 {
        padding-top: .25rem!important
    }

    .pr-xl-1,.px-xl-1 {
        padding-right: .25rem!important
    }

    .pb-xl-1,.py-xl-1 {
        padding-bottom: .25rem!important
    }

    .pl-xl-1,.px-xl-1 {
        padding-left: .25rem!important
    }

    .p-xl-2 {
        padding: .5rem!important
    }

    .pt-xl-2,.py-xl-2 {
        padding-top: .5rem!important
    }

    .pr-xl-2,.px-xl-2 {
        padding-right: .5rem!important
    }

    .pb-xl-2,.py-xl-2 {
        padding-bottom: .5rem!important
    }

    .pl-xl-2,.px-xl-2 {
        padding-left: .5rem!important
    }

    .p-xl-3 {
        padding: 1rem!important
    }

    .pt-xl-3,.py-xl-3 {
        padding-top: 1rem!important
    }

    .pr-xl-3,.px-xl-3 {
        padding-right: 1rem!important
    }

    .pb-xl-3,.py-xl-3 {
        padding-bottom: 1rem!important
    }

    .pl-xl-3,.px-xl-3 {
        padding-left: 1rem!important
    }

    .p-xl-4 {
        padding: 1.5rem!important
    }

    .pt-xl-4,.py-xl-4 {
        padding-top: 1.5rem!important
    }

    .pr-xl-4,.px-xl-4 {
        padding-right: 1.5rem!important
    }

    .pb-xl-4,.py-xl-4 {
        padding-bottom: 1.5rem!important
    }

    .pl-xl-4,.px-xl-4 {
        padding-left: 1.5rem!important
    }

    .p-xl-5 {
        padding: 3rem!important
    }

    .pt-xl-5,.py-xl-5 {
        padding-top: 3rem!important
    }

    .pr-xl-5,.px-xl-5 {
        padding-right: 3rem!important
    }

    .pb-xl-5,.py-xl-5 {
        padding-bottom: 3rem!important
    }

    .pl-xl-5,.px-xl-5 {
        padding-left: 3rem!important
    }

    .m-xl-n1 {
        margin: -.25rem!important
    }

    .mt-xl-n1,.my-xl-n1 {
        margin-top: -.25rem!important
    }

    .mr-xl-n1,.mx-xl-n1 {
        margin-right: -.25rem!important
    }

    .mb-xl-n1,.my-xl-n1 {
        margin-bottom: -.25rem!important
    }

    .ml-xl-n1,.mx-xl-n1 {
        margin-left: -.25rem!important
    }

    .m-xl-n2 {
        margin: -.5rem!important
    }

    .mt-xl-n2,.my-xl-n2 {
        margin-top: -.5rem!important
    }

    .mr-xl-n2,.mx-xl-n2 {
        margin-right: -.5rem!important
    }

    .mb-xl-n2,.my-xl-n2 {
        margin-bottom: -.5rem!important
    }

    .ml-xl-n2,.mx-xl-n2 {
        margin-left: -.5rem!important
    }

    .m-xl-n3 {
        margin: -1rem!important
    }

    .mt-xl-n3,.my-xl-n3 {
        margin-top: -1rem!important
    }

    .mr-xl-n3,.mx-xl-n3 {
        margin-right: -1rem!important
    }

    .mb-xl-n3,.my-xl-n3 {
        margin-bottom: -1rem!important
    }

    .ml-xl-n3,.mx-xl-n3 {
        margin-left: -1rem!important
    }

    .m-xl-n4 {
        margin: -1.5rem!important
    }

    .mt-xl-n4,.my-xl-n4 {
        margin-top: -1.5rem!important
    }

    .mr-xl-n4,.mx-xl-n4 {
        margin-right: -1.5rem!important
    }

    .mb-xl-n4,.my-xl-n4 {
        margin-bottom: -1.5rem!important
    }

    .ml-xl-n4,.mx-xl-n4 {
        margin-left: -1.5rem!important
    }

    .m-xl-n5 {
        margin: -3rem!important
    }

    .mt-xl-n5,.my-xl-n5 {
        margin-top: -3rem!important
    }

    .mr-xl-n5,.mx-xl-n5 {
        margin-right: -3rem!important
    }

    .mb-xl-n5,.my-xl-n5 {
        margin-bottom: -3rem!important
    }

    .ml-xl-n5,.mx-xl-n5 {
        margin-left: -3rem!important
    }

    .m-xl-auto {
        margin: auto!important
    }

    .mt-xl-auto,.my-xl-auto {
        margin-top: auto!important
    }

    .mr-xl-auto,.mx-xl-auto {
        margin-right: auto!important
    }

    .mb-xl-auto,.my-xl-auto {
        margin-bottom: auto!important
    }

    .ml-xl-auto,.mx-xl-auto {
        margin-left: auto!important
    }
}

.text-monospace {
    font-family: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace!important
}

.text-justify {
    text-align: justify!important
}

.text-wrap {
    white-space: normal!important
}

.text-nowrap {
    white-space: nowrap!important
}

.text-truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap
}

.text-left {
    text-align: left!important
}

.text-right {
    text-align: right!important
}

.text-center {
    text-align: center!important
}

@media (min-width: 576px) {
    .text-sm-left {
        text-align:left!important
    }

    .text-sm-right {
        text-align: right!important
    }

    .text-sm-center {
        text-align: center!important
    }
}

@media (min-width: 768px) {
    .text-md-left {
        text-align:left!important
    }

    .text-md-right {
        text-align: right!important
    }

    .text-md-center {
        text-align: center!important
    }
}

@media (min-width: 992px) {
    .text-lg-left {
        text-align:left!important
    }

    .text-lg-right {
        text-align: right!important
    }

    .text-lg-center {
        text-align: center!important
    }
}

@media (min-width: 1200px) {
    .text-xl-left {
        text-align:left!important
    }

    .text-xl-right {
        text-align: right!important
    }

    .text-xl-center {
        text-align: center!important
    }
}

.text-lowercase {
    text-transform: lowercase!important
}

.text-uppercase {
    text-transform: uppercase!important
}

.text-capitalize {
    text-transform: capitalize!important
}

.font-weight-light {
    font-weight: 300!important
}

.font-weight-lighter {
    font-weight: lighter!important
}

.font-weight-normal {
    font-weight: 400!important
}

.font-weight-bold {
    font-weight: 700!important
}

.font-weight-bolder {
    font-weight: bolder!important
}

.font-italic {
    font-style: italic!important
}

.text-white {
    color: #fff!important
}

.text-primary {
    color: #007bff!important
}

a.text-primary:focus,a.text-primary:hover {
    color: #0056b3!important
}

.text-secondary {
    color: #6c757d!important
}

a.text-secondary:focus,a.text-secondary:hover {
    color: #494f54!important
}

.text-success {
    color: #28a745!important
}

a.text-success:focus,a.text-success:hover {
    color: #19692c!important
}

.text-info {
    color: #17a2b8!important
}

a.text-info:focus,a.text-info:hover {
    color: #0f6674!important
}

.text-warning {
    color: #ffc107!important
}

a.text-warning:focus,a.text-warning:hover {
    color: #ba8b00!important
}

.text-danger {
    color: #dc3545!important
}

a.text-danger:focus,a.text-danger:hover {
    color: #a71d2a!important
}

.text-light {
    color: #f8f9fa!important
}

a.text-light:focus,a.text-light:hover {
    color: #cbd3da!important
}

.text-dark {
    color: #343a40!important
}

a.text-dark:focus,a.text-dark:hover {
    color: #121416!important
}

.text-body {
    color: #212529!important
}

.text-muted {
    color: #6c757d!important
}

.text-black-50 {
    color: rgba(0,0,0,.5)!important
}

.text-white-50 {
    color: rgba(255,255,255,.5)!important
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.text-decoration-none {
    text-decoration: none!important
}

.text-break {
    word-break: break-word!important;
    overflow-wrap: break-word!important
}

.text-reset {
    color: inherit!important
}

.visible {
    visibility: visible!important
}

.invisible {
    visibility: hidden!important
}

@media print {
    *,::after,::before {
        text-shadow: none!important;
        box-shadow: none!important
    }

    a:not(.btn) {
        text-decoration: underline
    }

    abbr[title]::after {
        content: " (" attr(title) ")"
    }

    pre {
        white-space: pre-wrap!important
    }

    blockquote,pre {
        border: 1px solid #adb5bd;
        page-break-inside: avoid
    }

    thead {
        display: table-header-group
    }

    img,tr {
        page-break-inside: avoid
    }

    h2,h3,p {
        orphans: 3;
        widows: 3
    }

    h2,h3 {
        page-break-after: avoid
    }

    @page {
        size: a3
    }

    body {
        min-width: 992px!important
    }

    .container {
        min-width: 992px!important
    }

    .navbar {
        display: none
    }

    .badge {
        border: 1px solid #000
    }

    .table {
        border-collapse: collapse!important
    }

    .table td,.table th {
        background-color: #fff!important
    }

    .table-bordered td,.table-bordered th {
        border: 1px solid #dee2e6!important
    }

    .table-dark {
        color: inherit
    }

    .table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th {
        border-color: #dee2e6
    }

    .table .thead-dark th {
        color: inherit;
        border-color: #dee2e6
    }
}

.fa,.fas,.far,.fal,.fab {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    line-height: 1
}

.fa-lg {
    font-size: 1.33333em;
    line-height: .75em;
    vertical-align: -.0667em
}

.fa-xs {
    font-size: .75em
}

.fa-sm {
    font-size: .875em
}

.fa-1x {
    font-size: 1em
}

.fa-2x {
    font-size: 2em
}

.fa-3x {
    font-size: 3em
}

.fa-4x {
    font-size: 4em
}

.fa-5x {
    font-size: 5em
}

.fa-6x {
    font-size: 6em
}

.fa-7x {
    font-size: 7em
}

.fa-8x {
    font-size: 8em
}

.fa-9x {
    font-size: 9em
}

.fa-10x {
    font-size: 10em
}

.fa-fw {
    text-align: center;
    width: 1.25em
}

.fa-ul {
    list-style-type: none;
    margin-left: 2.5em;
    padding-left: 0
}

.fa-ul>li {
    position: relative
}

.fa-li {
    left: -2em;
    position: absolute;
    text-align: center;
    width: 2em;
    line-height: inherit
}

.fa-border {
    border: solid .08em #eee;
    border-radius: .1em;
    padding: .2em .25em .15em
}

.fa-pull-left {
    float: left
}

.fa-pull-right {
    float: right
}

.fa.fa-pull-left,.fas.fa-pull-left,.far.fa-pull-left,.fal.fa-pull-left,.fab.fa-pull-left {
    margin-right: .3em
}

.fa.fa-pull-right,.fas.fa-pull-right,.far.fa-pull-right,.fal.fa-pull-right,.fab.fa-pull-right {
    margin-left: .3em
}

.fa-spin {
    -webkit-animation: fa-spin 2s infinite linear;
    animation: fa-spin 2s infinite linear
}

.fa-pulse {
    -webkit-animation: fa-spin 1s infinite steps(8);
    animation: fa-spin 1s infinite steps(8)
}

@-webkit-keyframes fa-spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

@keyframes fa-spin {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

.fa-rotate-90 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg)
}

.fa-rotate-180 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg)
}

.fa-rotate-270 {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
    -webkit-transform: rotate(270deg);
    transform: rotate(270deg)
}

.fa-flip-horizontal {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
    -webkit-transform: scale(-1,1);
    transform: scale(-1,1)
}

.fa-flip-vertical {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
    -webkit-transform: scale(1,-1);
    transform: scale(1,-1)
}

.fa-flip-horizontal.fa-flip-vertical {
    -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
    -webkit-transform: scale(-1,-1);
    transform: scale(-1,-1)
}

:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical {
    -webkit-filter: none;
    filter: none
}

.fa-stack {
    display: inline-block;
    height: 2em;
    line-height: 2em;
    position: relative;
    vertical-align: middle;
    width: 2.5em
}

.fa-stack-1x,.fa-stack-2x {
    left: 0;
    position: absolute;
    text-align: center;
    width: 100%
}

.fa-stack-1x {
    line-height: inherit
}

.fa-stack-2x {
    font-size: 2em
}

.fa-inverse {
    color: #fff
}

.fa-500px:before {
    content: "\f26e"
}

.fa-accessible-icon:before {
    content: "\f368"
}

.fa-accusoft:before {
    content: "\f369"
}

.fa-acquisitions-incorporated:before {
    content: "\f6af"
}

.fa-ad:before {
    content: "\f641"
}

.fa-address-book:before {
    content: "\f2b9"
}

.fa-address-card:before {
    content: "\f2bb"
}

.fa-adjust:before {
    content: "\f042"
}

.fa-adn:before {
    content: "\f170"
}

.fa-adversal:before {
    content: "\f36a"
}

.fa-affiliatetheme:before {
    content: "\f36b"
}

.fa-air-freshener:before {
    content: "\f5d0"
}

.fa-algolia:before {
    content: "\f36c"
}

.fa-align-center:before {
    content: "\f037"
}

.fa-align-justify:before {
    content: "\f039"
}

.fa-align-left:before {
    content: "\f036"
}

.fa-align-right:before {
    content: "\f038"
}

.fa-alipay:before {
    content: "\f642"
}

.fa-allergies:before {
    content: "\f461"
}

.fa-amazon:before {
    content: "\f270"
}

.fa-amazon-pay:before {
    content: "\f42c"
}

.fa-ambulance:before {
    content: "\f0f9"
}

.fa-american-sign-language-interpreting:before {
    content: "\f2a3"
}

.fa-amilia:before {
    content: "\f36d"
}

.fa-anchor:before {
    content: "\f13d"
}

.fa-android:before {
    content: "\f17b"
}

.fa-angellist:before {
    content: "\f209"
}

.fa-angle-double-down:before {
    content: "\f103"
}

.fa-angle-double-left:before {
    content: "\f100"
}

.fa-angle-double-right:before {
    content: "\f101"
}

.fa-angle-double-up:before {
    content: "\f102"
}

.fa-angle-down:before {
    content: "\f107"
}

.fa-angle-left:before {
    content: "\f104"
}

.fa-angle-right:before {
    content: "\f105"
}

.fa-angle-up:before {
    content: "\f106"
}

.fa-angry:before {
    content: "\f556"
}

.fa-angrycreative:before {
    content: "\f36e"
}

.fa-angular:before {
    content: "\f420"
}

.fa-ankh:before {
    content: "\f644"
}

.fa-app-store:before {
    content: "\f36f"
}

.fa-app-store-ios:before {
    content: "\f370"
}

.fa-apper:before {
    content: "\f371"
}

.fa-apple:before {
    content: "\f179"
}

.fa-apple-alt:before {
    content: "\f5d1"
}

.fa-apple-pay:before {
    content: "\f415"
}

.fa-archive:before {
    content: "\f187"
}

.fa-archway:before {
    content: "\f557"
}

.fa-arrow-alt-circle-down:before {
    content: "\f358"
}

.fa-arrow-alt-circle-left:before {
    content: "\f359"
}

.fa-arrow-alt-circle-right:before {
    content: "\f35a"
}

.fa-arrow-alt-circle-up:before {
    content: "\f35b"
}

.fa-arrow-circle-down:before {
    content: "\f0ab"
}

.fa-arrow-circle-left:before {
    content: "\f0a8"
}

.fa-arrow-circle-right:before {
    content: "\f0a9"
}

.fa-arrow-circle-up:before {
    content: "\f0aa"
}

.fa-arrow-down:before {
    content: "\f063"
}

.fa-arrow-left:before {
    content: "\f060"
}

.fa-arrow-right:before {
    content: "\f061"
}

.fa-arrow-up:before {
    content: "\f062"
}

.fa-arrows-alt:before {
    content: "\f0b2"
}

.fa-arrows-alt-h:before {
    content: "\f337"
}

.fa-arrows-alt-v:before {
    content: "\f338"
}

.fa-assistive-listening-systems:before {
    content: "\f2a2"
}

.fa-asterisk:before {
    content: "\f069"
}

.fa-asymmetrik:before {
    content: "\f372"
}

.fa-at:before {
    content: "\f1fa"
}

.fa-atlas:before {
    content: "\f558"
}

.fa-atom:before {
    content: "\f5d2"
}

.fa-audible:before {
    content: "\f373"
}

.fa-audio-description:before {
    content: "\f29e"
}

.fa-autoprefixer:before {
    content: "\f41c"
}

.fa-avianex:before {
    content: "\f374"
}

.fa-aviato:before {
    content: "\f421"
}

.fa-award:before {
    content: "\f559"
}

.fa-aws:before {
    content: "\f375"
}

.fa-backspace:before {
    content: "\f55a"
}

.fa-backward:before {
    content: "\f04a"
}

.fa-balance-scale:before {
    content: "\f24e"
}

.fa-ban:before {
    content: "\f05e"
}

.fa-band-aid:before {
    content: "\f462"
}

.fa-bandcamp:before {
    content: "\f2d5"
}

.fa-barcode:before {
    content: "\f02a"
}

.fa-bars:before {
    content: "\f0c9"
}

.fa-baseball-ball:before {
    content: "\f433"
}

.fa-basketball-ball:before {
    content: "\f434"
}

.fa-bath:before {
    content: "\f2cd"
}

.fa-battery-empty:before {
    content: "\f244"
}

.fa-battery-full:before {
    content: "\f240"
}

.fa-battery-half:before {
    content: "\f242"
}

.fa-battery-quarter:before {
    content: "\f243"
}

.fa-battery-three-quarters:before {
    content: "\f241"
}

.fa-bed:before {
    content: "\f236"
}

.fa-beer:before {
    content: "\f0fc"
}

.fa-behance:before {
    content: "\f1b4"
}

.fa-behance-square:before {
    content: "\f1b5"
}

.fa-bell:before {
    content: "\f0f3"
}

.fa-bell-slash:before {
    content: "\f1f6"
}

.fa-bezier-curve:before {
    content: "\f55b"
}

.fa-bible:before {
    content: "\f647"
}

.fa-bicycle:before {
    content: "\f206"
}

.fa-bimobject:before {
    content: "\f378"
}

.fa-binoculars:before {
    content: "\f1e5"
}

.fa-birthday-cake:before {
    content: "\f1fd"
}

.fa-bitbucket:before {
    content: "\f171"
}

.fa-bitcoin:before {
    content: "\f379"
}

.fa-bity:before {
    content: "\f37a"
}

.fa-black-tie:before {
    content: "\f27e"
}

.fa-blackberry:before {
    content: "\f37b"
}

.fa-blender:before {
    content: "\f517"
}

.fa-blender-phone:before {
    content: "\f6b6"
}

.fa-blind:before {
    content: "\f29d"
}

.fa-blogger:before {
    content: "\f37c"
}

.fa-blogger-b:before {
    content: "\f37d"
}

.fa-bluetooth:before {
    content: "\f293"
}

.fa-bluetooth-b:before {
    content: "\f294"
}

.fa-bold:before {
    content: "\f032"
}

.fa-bolt:before {
    content: "\f0e7"
}

.fa-bomb:before {
    content: "\f1e2"
}

.fa-bone:before {
    content: "\f5d7"
}

.fa-bong:before {
    content: "\f55c"
}

.fa-book:before {
    content: "\f02d"
}

.fa-book-dead:before {
    content: "\f6b7"
}

.fa-book-open:before {
    content: "\f518"
}

.fa-book-reader:before {
    content: "\f5da"
}

.fa-bookmark:before {
    content: "\f02e"
}

.fa-bowling-ball:before {
    content: "\f436"
}

.fa-box:before {
    content: "\f466"
}

.fa-box-open:before {
    content: "\f49e"
}

.fa-boxes:before {
    content: "\f468"
}

.fa-braille:before {
    content: "\f2a1"
}

.fa-brain:before {
    content: "\f5dc"
}

.fa-briefcase:before {
    content: "\f0b1"
}

.fa-briefcase-medical:before {
    content: "\f469"
}

.fa-broadcast-tower:before {
    content: "\f519"
}

.fa-broom:before {
    content: "\f51a"
}

.fa-brush:before {
    content: "\f55d"
}

.fa-btc:before {
    content: "\f15a"
}

.fa-bug:before {
    content: "\f188"
}

.fa-building:before {
    content: "\f1ad"
}

.fa-bullhorn:before {
    content: "\f0a1"
}

.fa-bullseye:before {
    content: "\f140"
}

.fa-burn:before {
    content: "\f46a"
}

.fa-buromobelexperte:before {
    content: "\f37f"
}

.fa-bus:before {
    content: "\f207"
}

.fa-bus-alt:before {
    content: "\f55e"
}

.fa-business-time:before {
    content: "\f64a"
}

.fa-buysellads:before {
    content: "\f20d"
}

.fa-calculator:before {
    content: "\f1ec"
}

.fa-calendar:before {
    content: "\f133"
}

.fa-calendar-alt:before {
    content: "\f073"
}

.fa-calendar-check:before {
    content: "\f274"
}

.fa-calendar-minus:before {
    content: "\f272"
}

.fa-calendar-plus:before {
    content: "\f271"
}

.fa-calendar-times:before {
    content: "\f273"
}

.fa-camera:before {
    content: "\f030"
}

.fa-camera-retro:before {
    content: "\f083"
}

.fa-campground:before {
    content: "\f6bb"
}

.fa-cannabis:before {
    content: "\f55f"
}

.fa-capsules:before {
    content: "\f46b"
}

.fa-car:before {
    content: "\f1b9"
}

.fa-car-alt:before {
    content: "\f5de"
}

.fa-car-battery:before {
    content: "\f5df"
}

.fa-car-crash:before {
    content: "\f5e1"
}

.fa-car-side:before {
    content: "\f5e4"
}

.fa-caret-down:before {
    content: "\f0d7"
}

.fa-caret-left:before {
    content: "\f0d9"
}

.fa-caret-right:before {
    content: "\f0da"
}

.fa-caret-square-down:before {
    content: "\f150"
}

.fa-caret-square-left:before {
    content: "\f191"
}

.fa-caret-square-right:before {
    content: "\f152"
}

.fa-caret-square-up:before {
    content: "\f151"
}

.fa-caret-up:before {
    content: "\f0d8"
}

.fa-cart-arrow-down:before {
    content: "\f218"
}

.fa-cart-plus:before {
    content: "\f217"
}

.fa-cat:before {
    content: "\f6be"
}

.fa-cc-amazon-pay:before {
    content: "\f42d"
}

.fa-cc-amex:before {
    content: "\f1f3"
}

.fa-cc-apple-pay:before {
    content: "\f416"
}

.fa-cc-diners-club:before {
    content: "\f24c"
}

.fa-cc-discover:before {
    content: "\f1f2"
}

.fa-cc-jcb:before {
    content: "\f24b"
}

.fa-cc-mastercard:before {
    content: "\f1f1"
}

.fa-cc-paypal:before {
    content: "\f1f4"
}

.fa-cc-stripe:before {
    content: "\f1f5"
}

.fa-cc-visa:before {
    content: "\f1f0"
}

.fa-centercode:before {
    content: "\f380"
}

.fa-certificate:before {
    content: "\f0a3"
}

.fa-chair:before {
    content: "\f6c0"
}

.fa-chalkboard:before {
    content: "\f51b"
}

.fa-chalkboard-teacher:before {
    content: "\f51c"
}

.fa-charging-station:before {
    content: "\f5e7"
}

.fa-chart-area:before {
    content: "\f1fe"
}

.fa-chart-bar:before {
    content: "\f080"
}

.fa-chart-line:before {
    content: "\f201"
}

.fa-chart-pie:before {
    content: "\f200"
}

.fa-check:before {
    content: "\f00c"
}

.fa-check-circle:before {
    content: "\f058"
}

.fa-check-double:before {
    content: "\f560"
}

.fa-check-square:before {
    content: "\f14a"
}

.fa-chess:before {
    content: "\f439"
}

.fa-chess-bishop:before {
    content: "\f43a"
}

.fa-chess-board:before {
    content: "\f43c"
}

.fa-chess-king:before {
    content: "\f43f"
}

.fa-chess-knight:before {
    content: "\f441"
}

.fa-chess-pawn:before {
    content: "\f443"
}

.fa-chess-queen:before {
    content: "\f445"
}

.fa-chess-rook:before {
    content: "\f447"
}

.fa-chevron-circle-down:before {
    content: "\f13a"
}

.fa-chevron-circle-left:before {
    content: "\f137"
}

.fa-chevron-circle-right:before {
    content: "\f138"
}

.fa-chevron-circle-up:before {
    content: "\f139"
}

.fa-chevron-down:before {
    content: "\f078"
}

.fa-chevron-left:before {
    content: "\f053"
}

.fa-chevron-right:before {
    content: "\f054"
}

.fa-chevron-up:before {
    content: "\f077"
}

.fa-child:before {
    content: "\f1ae"
}

.fa-chrome:before {
    content: "\f268"
}

.fa-church:before {
    content: "\f51d"
}

.fa-circle:before {
    content: "\f111"
}

.fa-circle-notch:before {
    content: "\f1ce"
}

.fa-city:before {
    content: "\f64f"
}

.fa-clipboard:before {
    content: "\f328"
}

.fa-clipboard-check:before {
    content: "\f46c"
}

.fa-clipboard-list:before {
    content: "\f46d"
}

.fa-clock:before {
    content: "\f017"
}

.fa-clone:before {
    content: "\f24d"
}

.fa-closed-captioning:before {
    content: "\f20a"
}

.fa-cloud:before {
    content: "\f0c2"
}

.fa-cloud-download-alt:before {
    content: "\f381"
}

.fa-cloud-meatball:before {
    content: "\f73b"
}

.fa-cloud-moon:before {
    content: "\f6c3"
}

.fa-cloud-moon-rain:before {
    content: "\f73c"
}

.fa-cloud-rain:before {
    content: "\f73d"
}

.fa-cloud-showers-heavy:before {
    content: "\f740"
}

.fa-cloud-sun:before {
    content: "\f6c4"
}

.fa-cloud-sun-rain:before {
    content: "\f743"
}

.fa-cloud-upload-alt:before {
    content: "\f382"
}

.fa-cloudscale:before {
    content: "\f383"
}

.fa-cloudsmith:before {
    content: "\f384"
}

.fa-cloudversify:before {
    content: "\f385"
}

.fa-cocktail:before {
    content: "\f561"
}

.fa-code:before {
    content: "\f121"
}

.fa-code-branch:before {
    content: "\f126"
}

.fa-codepen:before {
    content: "\f1cb"
}

.fa-codiepie:before {
    content: "\f284"
}

.fa-coffee:before {
    content: "\f0f4"
}

.fa-cog:before {
    content: "\f013"
}

.fa-cogs:before {
    content: "\f085"
}

.fa-coins:before {
    content: "\f51e"
}

.fa-columns:before {
    content: "\f0db"
}

.fa-comment:before {
    content: "\f075"
}

.fa-comment-alt:before {
    content: "\f27a"
}

.fa-comment-dollar:before {
    content: "\f651"
}

.fa-comment-dots:before {
    content: "\f4ad"
}

.fa-comment-slash:before {
    content: "\f4b3"
}

.fa-comments:before {
    content: "\f086"
}

.fa-comments-dollar:before {
    content: "\f653"
}

.fa-compact-disc:before {
    content: "\f51f"
}

.fa-compass:before {
    content: "\f14e"
}

.fa-compress:before {
    content: "\f066"
}

.fa-concierge-bell:before {
    content: "\f562"
}

.fa-connectdevelop:before {
    content: "\f20e"
}

.fa-contao:before {
    content: "\f26d"
}

.fa-cookie:before {
    content: "\f563"
}

.fa-cookie-bite:before {
    content: "\f564"
}

.fa-copy:before {
    content: "\f0c5"
}

.fa-copyright:before {
    content: "\f1f9"
}

.fa-couch:before {
    content: "\f4b8"
}

.fa-cpanel:before {
    content: "\f388"
}

.fa-creative-commons:before {
    content: "\f25e"
}

.fa-creative-commons-by:before {
    content: "\f4e7"
}

.fa-creative-commons-nc:before {
    content: "\f4e8"
}

.fa-creative-commons-nc-eu:before {
    content: "\f4e9"
}

.fa-creative-commons-nc-jp:before {
    content: "\f4ea"
}

.fa-creative-commons-nd:before {
    content: "\f4eb"
}

.fa-creative-commons-pd:before {
    content: "\f4ec"
}

.fa-creative-commons-pd-alt:before {
    content: "\f4ed"
}

.fa-creative-commons-remix:before {
    content: "\f4ee"
}

.fa-creative-commons-sa:before {
    content: "\f4ef"
}

.fa-creative-commons-sampling:before {
    content: "\f4f0"
}

.fa-creative-commons-sampling-plus:before {
    content: "\f4f1"
}

.fa-creative-commons-share:before {
    content: "\f4f2"
}

.fa-creative-commons-zero:before {
    content: "\f4f3"
}

.fa-credit-card:before {
    content: "\f09d"
}

.fa-critical-role:before {
    content: "\f6c9"
}

.fa-crop:before {
    content: "\f125"
}

.fa-crop-alt:before {
    content: "\f565"
}

.fa-cross:before {
    content: "\f654"
}

.fa-crosshairs:before {
    content: "\f05b"
}

.fa-crow:before {
    content: "\f520"
}

.fa-crown:before {
    content: "\f521"
}

.fa-css3:before {
    content: "\f13c"
}

.fa-css3-alt:before {
    content: "\f38b"
}

.fa-cube:before {
    content: "\f1b2"
}

.fa-cubes:before {
    content: "\f1b3"
}

.fa-cut:before {
    content: "\f0c4"
}

.fa-cuttlefish:before {
    content: "\f38c"
}

.fa-d-and-d:before {
    content: "\f38d"
}

.fa-d-and-d-beyond:before {
    content: "\f6ca"
}

.fa-dashcube:before {
    content: "\f210"
}

.fa-database:before {
    content: "\f1c0"
}

.fa-deaf:before {
    content: "\f2a4"
}

.fa-delicious:before {
    content: "\f1a5"
}

.fa-democrat:before {
    content: "\f747"
}

.fa-deploydog:before {
    content: "\f38e"
}

.fa-deskpro:before {
    content: "\f38f"
}

.fa-desktop:before {
    content: "\f108"
}

.fa-dev:before {
    content: "\f6cc"
}

.fa-deviantart:before {
    content: "\f1bd"
}

.fa-dharmachakra:before {
    content: "\f655"
}

.fa-diagnoses:before {
    content: "\f470"
}

.fa-dice:before {
    content: "\f522"
}

.fa-dice-d20:before {
    content: "\f6cf"
}

.fa-dice-d6:before {
    content: "\f6d1"
}

.fa-dice-five:before {
    content: "\f523"
}

.fa-dice-four:before {
    content: "\f524"
}

.fa-dice-one:before {
    content: "\f525"
}

.fa-dice-six:before {
    content: "\f526"
}

.fa-dice-three:before {
    content: "\f527"
}

.fa-dice-two:before {
    content: "\f528"
}

.fa-digg:before {
    content: "\f1a6"
}

.fa-digital-ocean:before {
    content: "\f391"
}

.fa-digital-tachograph:before {
    content: "\f566"
}

.fa-directions:before {
    content: "\f5eb"
}

.fa-discord:before {
    content: "\f392"
}

.fa-discourse:before {
    content: "\f393"
}

.fa-divide:before {
    content: "\f529"
}

.fa-dizzy:before {
    content: "\f567"
}

.fa-dna:before {
    content: "\f471"
}

.fa-dochub:before {
    content: "\f394"
}

.fa-docker:before {
    content: "\f395"
}

.fa-dog:before {
    content: "\f6d3"
}

.fa-dollar-sign:before {
    content: "\f155"
}

.fa-dolly:before {
    content: "\f472"
}

.fa-dolly-flatbed:before {
    content: "\f474"
}

.fa-donate:before {
    content: "\f4b9"
}

.fa-door-closed:before {
    content: "\f52a"
}

.fa-door-open:before {
    content: "\f52b"
}

.fa-dot-circle:before {
    content: "\f192"
}

.fa-dove:before {
    content: "\f4ba"
}

.fa-download:before {
    content: "\f019"
}

.fa-draft2digital:before {
    content: "\f396"
}

.fa-drafting-compass:before {
    content: "\f568"
}

.fa-dragon:before {
    content: "\f6d5"
}

.fa-draw-polygon:before {
    content: "\f5ee"
}

.fa-dribbble:before {
    content: "\f17d"
}

.fa-dribbble-square:before {
    content: "\f397"
}

.fa-dropbox:before {
    content: "\f16b"
}

.fa-drum:before {
    content: "\f569"
}

.fa-drum-steelpan:before {
    content: "\f56a"
}

.fa-drumstick-bite:before {
    content: "\f6d7"
}

.fa-drupal:before {
    content: "\f1a9"
}

.fa-dumbbell:before {
    content: "\f44b"
}

.fa-dungeon:before {
    content: "\f6d9"
}

.fa-dyalog:before {
    content: "\f399"
}

.fa-earlybirds:before {
    content: "\f39a"
}

.fa-ebay:before {
    content: "\f4f4"
}

.fa-edge:before {
    content: "\f282"
}

.fa-edit:before {
    content: "\f044"
}

.fa-eject:before {
    content: "\f052"
}

.fa-elementor:before {
    content: "\f430"
}

.fa-ellipsis-h:before {
    content: "\f141"
}

.fa-ellipsis-v:before {
    content: "\f142"
}

.fa-ello:before {
    content: "\f5f1"
}

.fa-ember:before {
    content: "\f423"
}

.fa-empire:before {
    content: "\f1d1"
}

.fa-envelope:before {
    content: "\f0e0"
}

.fa-envelope-open:before {
    content: "\f2b6"
}

.fa-envelope-open-text:before {
    content: "\f658"
}

.fa-envelope-square:before {
    content: "\f199"
}

.fa-envira:before {
    content: "\f299"
}

.fa-equals:before {
    content: "\f52c"
}

.fa-eraser:before {
    content: "\f12d"
}

.fa-erlang:before {
    content: "\f39d"
}

.fa-ethereum:before {
    content: "\f42e"
}

.fa-etsy:before {
    content: "\f2d7"
}

.fa-euro-sign:before {
    content: "\f153"
}

.fa-exchange-alt:before {
    content: "\f362"
}

.fa-exclamation:before {
    content: "\f12a"
}

.fa-exclamation-circle:before {
    content: "\f06a"
}

.fa-exclamation-triangle:before {
    content: "\f071"
}

.fa-expand:before {
    content: "\f065"
}

.fa-expand-arrows-alt:before {
    content: "\f31e"
}

.fa-expeditedssl:before {
    content: "\f23e"
}

.fa-external-link-alt:before {
    content: "\f35d"
}

.fa-external-link-square-alt:before {
    content: "\f360"
}

.fa-eye:before {
    content: "\f06e"
}

.fa-eye-dropper:before {
    content: "\f1fb"
}

.fa-eye-slash:before {
    content: "\f070"
}

.fa-facebook:before {
    content: "\f09a"
}

.fa-facebook-f:before {
    content: "\f39e"
}

.fa-facebook-messenger:before {
    content: "\f39f"
}

.fa-facebook-square:before {
    content: "\f082"
}

.fa-fantasy-flight-games:before {
    content: "\f6dc"
}

.fa-fast-backward:before {
    content: "\f049"
}

.fa-fast-forward:before {
    content: "\f050"
}

.fa-fax:before {
    content: "\f1ac"
}

.fa-feather:before {
    content: "\f52d"
}

.fa-feather-alt:before {
    content: "\f56b"
}

.fa-female:before {
    content: "\f182"
}

.fa-fighter-jet:before {
    content: "\f0fb"
}

.fa-file:before {
    content: "\f15b"
}

.fa-file-alt:before {
    content: "\f15c"
}

.fa-file-archive:before {
    content: "\f1c6"
}

.fa-file-audio:before {
    content: "\f1c7"
}

.fa-file-code:before {
    content: "\f1c9"
}

.fa-file-contract:before {
    content: "\f56c"
}

.fa-file-csv:before {
    content: "\f6dd"
}

.fa-file-download:before {
    content: "\f56d"
}

.fa-file-excel:before {
    content: "\f1c3"
}

.fa-file-export:before {
    content: "\f56e"
}

.fa-file-image:before {
    content: "\f1c5"
}

.fa-file-import:before {
    content: "\f56f"
}

.fa-file-invoice:before {
    content: "\f570"
}

.fa-file-invoice-dollar:before {
    content: "\f571"
}

.fa-file-medical:before {
    content: "\f477"
}

.fa-file-medical-alt:before {
    content: "\f478"
}

.fa-file-pdf:before {
    content: "\f1c1"
}

.fa-file-powerpoint:before {
    content: "\f1c4"
}

.fa-file-prescription:before {
    content: "\f572"
}

.fa-file-signature:before {
    content: "\f573"
}

.fa-file-upload:before {
    content: "\f574"
}

.fa-file-video:before {
    content: "\f1c8"
}

.fa-file-word:before {
    content: "\f1c2"
}

.fa-fill:before {
    content: "\f575"
}

.fa-fill-drip:before {
    content: "\f576"
}

.fa-film:before {
    content: "\f008"
}

.fa-filter:before {
    content: "\f0b0"
}

.fa-fingerprint:before {
    content: "\f577"
}

.fa-fire:before {
    content: "\f06d"
}

.fa-fire-extinguisher:before {
    content: "\f134"
}

.fa-firefox:before {
    content: "\f269"
}

.fa-first-aid:before {
    content: "\f479"
}

.fa-first-order:before {
    content: "\f2b0"
}

.fa-first-order-alt:before {
    content: "\f50a"
}

.fa-firstdraft:before {
    content: "\f3a1"
}

.fa-fish:before {
    content: "\f578"
}

.fa-fist-raised:before {
    content: "\f6de"
}

.fa-flag:before {
    content: "\f024"
}

.fa-flag-checkered:before {
    content: "\f11e"
}

.fa-flag-usa:before {
    content: "\f74d"
}

.fa-flask:before {
    content: "\f0c3"
}

.fa-flickr:before {
    content: "\f16e"
}

.fa-flipboard:before {
    content: "\f44d"
}

.fa-flushed:before {
    content: "\f579"
}

.fa-fly:before {
    content: "\f417"
}

.fa-folder:before {
    content: "\f07b"
}

.fa-folder-minus:before {
    content: "\f65d"
}

.fa-folder-open:before {
    content: "\f07c"
}

.fa-folder-plus:before {
    content: "\f65e"
}

.fa-font:before {
    content: "\f031"
}

.fa-font-awesome:before {
    content: "\f2b4"
}

.fa-font-awesome-alt:before {
    content: "\f35c"
}

.fa-font-awesome-flag:before {
    content: "\f425"
}

.fa-font-awesome-logo-full:before {
    content: "\f4e6"
}

.fa-fonticons:before {
    content: "\f280"
}

.fa-fonticons-fi:before {
    content: "\f3a2"
}

.fa-football-ball:before {
    content: "\f44e"
}

.fa-fort-awesome:before {
    content: "\f286"
}

.fa-fort-awesome-alt:before {
    content: "\f3a3"
}

.fa-forumbee:before {
    content: "\f211"
}

.fa-forward:before {
    content: "\f04e"
}

.fa-foursquare:before {
    content: "\f180"
}

.fa-free-code-camp:before {
    content: "\f2c5"
}

.fa-freebsd:before {
    content: "\f3a4"
}

.fa-frog:before {
    content: "\f52e"
}

.fa-frown:before {
    content: "\f119"
}

.fa-frown-open:before {
    content: "\f57a"
}

.fa-fulcrum:before {
    content: "\f50b"
}

.fa-funnel-dollar:before {
    content: "\f662"
}

.fa-futbol:before {
    content: "\f1e3"
}

.fa-galactic-republic:before {
    content: "\f50c"
}

.fa-galactic-senate:before {
    content: "\f50d"
}

.fa-gamepad:before {
    content: "\f11b"
}

.fa-gas-pump:before {
    content: "\f52f"
}

.fa-gavel:before {
    content: "\f0e3"
}

.fa-gem:before {
    content: "\f3a5"
}

.fa-genderless:before {
    content: "\f22d"
}

.fa-get-pocket:before {
    content: "\f265"
}

.fa-gg:before {
    content: "\f260"
}

.fa-gg-circle:before {
    content: "\f261"
}

.fa-ghost:before {
    content: "\f6e2"
}

.fa-gift:before {
    content: "\f06b"
}

.fa-git:before {
    content: "\f1d3"
}

.fa-git-square:before {
    content: "\f1d2"
}

.fa-github:before {
    content: "\f09b"
}

.fa-github-alt:before {
    content: "\f113"
}

.fa-github-square:before {
    content: "\f092"
}

.fa-gitkraken:before {
    content: "\f3a6"
}

.fa-gitlab:before {
    content: "\f296"
}

.fa-gitter:before {
    content: "\f426"
}

.fa-glass-martini:before {
    content: "\f000"
}

.fa-glass-martini-alt:before {
    content: "\f57b"
}

.fa-glasses:before {
    content: "\f530"
}

.fa-glide:before {
    content: "\f2a5"
}

.fa-glide-g:before {
    content: "\f2a6"
}

.fa-globe:before {
    content: "\f0ac"
}

.fa-globe-africa:before {
    content: "\f57c"
}

.fa-globe-americas:before {
    content: "\f57d"
}

.fa-globe-asia:before {
    content: "\f57e"
}

.fa-gofore:before {
    content: "\f3a7"
}

.fa-golf-ball:before {
    content: "\f450"
}

.fa-goodreads:before {
    content: "\f3a8"
}

.fa-goodreads-g:before {
    content: "\f3a9"
}

.fa-google:before {
    content: "\f1a0"
}

.fa-google-drive:before {
    content: "\f3aa"
}

.fa-google-play:before {
    content: "\f3ab"
}

.fa-google-plus:before {
    content: "\f2b3"
}

.fa-google-plus-g:before {
    content: "\f0d5"
}

.fa-google-plus-square:before {
    content: "\f0d4"
}

.fa-google-wallet:before {
    content: "\f1ee"
}

.fa-gopuram:before {
    content: "\f664"
}

.fa-graduation-cap:before {
    content: "\f19d"
}

.fa-gratipay:before {
    content: "\f184"
}

.fa-grav:before {
    content: "\f2d6"
}

.fa-greater-than:before {
    content: "\f531"
}

.fa-greater-than-equal:before {
    content: "\f532"
}

.fa-grimace:before {
    content: "\f57f"
}

.fa-grin:before {
    content: "\f580"
}

.fa-grin-alt:before {
    content: "\f581"
}

.fa-grin-beam:before {
    content: "\f582"
}

.fa-grin-beam-sweat:before {
    content: "\f583"
}

.fa-grin-hearts:before {
    content: "\f584"
}

.fa-grin-squint:before {
    content: "\f585"
}

.fa-grin-squint-tears:before {
    content: "\f586"
}

.fa-grin-stars:before {
    content: "\f587"
}

.fa-grin-tears:before {
    content: "\f588"
}

.fa-grin-tongue:before {
    content: "\f589"
}

.fa-grin-tongue-squint:before {
    content: "\f58a"
}

.fa-grin-tongue-wink:before {
    content: "\f58b"
}

.fa-grin-wink:before {
    content: "\f58c"
}

.fa-grip-horizontal:before {
    content: "\f58d"
}

.fa-grip-vertical:before {
    content: "\f58e"
}

.fa-gripfire:before {
    content: "\f3ac"
}

.fa-grunt:before {
    content: "\f3ad"
}

.fa-gulp:before {
    content: "\f3ae"
}

.fa-h-square:before {
    content: "\f0fd"
}

.fa-hacker-news:before {
    content: "\f1d4"
}

.fa-hacker-news-square:before {
    content: "\f3af"
}

.fa-hackerrank:before {
    content: "\f5f7"
}

.fa-hammer:before {
    content: "\f6e3"
}

.fa-hamsa:before {
    content: "\f665"
}

.fa-hand-holding:before {
    content: "\f4bd"
}

.fa-hand-holding-heart:before {
    content: "\f4be"
}

.fa-hand-holding-usd:before {
    content: "\f4c0"
}

.fa-hand-lizard:before {
    content: "\f258"
}

.fa-hand-paper:before {
    content: "\f256"
}

.fa-hand-peace:before {
    content: "\f25b"
}

.fa-hand-point-down:before {
    content: "\f0a7"
}

.fa-hand-point-left:before {
    content: "\f0a5"
}

.fa-hand-point-right:before {
    content: "\f0a4"
}

.fa-hand-point-up:before {
    content: "\f0a6"
}

.fa-hand-pointer:before {
    content: "\f25a"
}

.fa-hand-rock:before {
    content: "\f255"
}

.fa-hand-scissors:before {
    content: "\f257"
}

.fa-hand-spock:before {
    content: "\f259"
}

.fa-hands:before {
    content: "\f4c2"
}

.fa-hands-helping:before {
    content: "\f4c4"
}

.fa-handshake:before {
    content: "\f2b5"
}

.fa-hanukiah:before {
    content: "\f6e6"
}

.fa-hashtag:before {
    content: "\f292"
}

.fa-hat-wizard:before {
    content: "\f6e8"
}

.fa-haykal:before {
    content: "\f666"
}

.fa-hdd:before {
    content: "\f0a0"
}

.fa-heading:before {
    content: "\f1dc"
}

.fa-headphones:before {
    content: "\f025"
}

.fa-headphones-alt:before {
    content: "\f58f"
}

.fa-headset:before {
    content: "\f590"
}

.fa-heart:before {
    content: "\f004"
}

.fa-heartbeat:before {
    content: "\f21e"
}

.fa-helicopter:before {
    content: "\f533"
}

.fa-highlighter:before {
    content: "\f591"
}

.fa-hiking:before {
    content: "\f6ec"
}

.fa-hippo:before {
    content: "\f6ed"
}

.fa-hips:before {
    content: "\f452"
}

.fa-hire-a-helper:before {
    content: "\f3b0"
}

.fa-history:before {
    content: "\f1da"
}

.fa-hockey-puck:before {
    content: "\f453"
}

.fa-home:before {
    content: "\f015"
}

.fa-hooli:before {
    content: "\f427"
}

.fa-hornbill:before {
    content: "\f592"
}

.fa-horse:before {
    content: "\f6f0"
}

.fa-hospital:before {
    content: "\f0f8"
}

.fa-hospital-alt:before {
    content: "\f47d"
}

.fa-hospital-symbol:before {
    content: "\f47e"
}

.fa-hot-tub:before {
    content: "\f593"
}

.fa-hotel:before {
    content: "\f594"
}

.fa-hotjar:before {
    content: "\f3b1"
}

.fa-hourglass:before {
    content: "\f254"
}

.fa-hourglass-end:before {
    content: "\f253"
}

.fa-hourglass-half:before {
    content: "\f252"
}

.fa-hourglass-start:before {
    content: "\f251"
}

.fa-house-damage:before {
    content: "\f6f1"
}

.fa-houzz:before {
    content: "\f27c"
}

.fa-hryvnia:before {
    content: "\f6f2"
}

.fa-html5:before {
    content: "\f13b"
}

.fa-hubspot:before {
    content: "\f3b2"
}

.fa-i-cursor:before {
    content: "\f246"
}

.fa-id-badge:before {
    content: "\f2c1"
}

.fa-id-card:before {
    content: "\f2c2"
}

.fa-id-card-alt:before {
    content: "\f47f"
}

.fa-image:before {
    content: "\f03e"
}

.fa-images:before {
    content: "\f302"
}

.fa-imdb:before {
    content: "\f2d8"
}

.fa-inbox:before {
    content: "\f01c"
}

.fa-indent:before {
    content: "\f03c"
}

.fa-industry:before {
    content: "\f275"
}

.fa-infinity:before {
    content: "\f534"
}

.fa-info:before {
    content: "\f129"
}

.fa-info-circle:before {
    content: "\f05a"
}

.fa-instagram:before {
    content: "\f16d"
}

.fa-internet-explorer:before {
    content: "\f26b"
}

.fa-ioxhost:before {
    content: "\f208"
}

.fa-italic:before {
    content: "\f033"
}

.fa-itunes:before {
    content: "\f3b4"
}

.fa-itunes-note:before {
    content: "\f3b5"
}

.fa-java:before {
    content: "\f4e4"
}

.fa-jedi:before {
    content: "\f669"
}

.fa-jedi-order:before {
    content: "\f50e"
}

.fa-jenkins:before {
    content: "\f3b6"
}

.fa-joget:before {
    content: "\f3b7"
}

.fa-joint:before {
    content: "\f595"
}

.fa-joomla:before {
    content: "\f1aa"
}

.fa-journal-whills:before {
    content: "\f66a"
}

.fa-js:before {
    content: "\f3b8"
}

.fa-js-square:before {
    content: "\f3b9"
}

.fa-jsfiddle:before {
    content: "\f1cc"
}

.fa-kaaba:before {
    content: "\f66b"
}

.fa-kaggle:before {
    content: "\f5fa"
}

.fa-key:before {
    content: "\f084"
}

.fa-keybase:before {
    content: "\f4f5"
}

.fa-keyboard:before {
    content: "\f11c"
}

.fa-keycdn:before {
    content: "\f3ba"
}

.fa-khanda:before {
    content: "\f66d"
}

.fa-kickstarter:before {
    content: "\f3bb"
}

.fa-kickstarter-k:before {
    content: "\f3bc"
}

.fa-kiss:before {
    content: "\f596"
}

.fa-kiss-beam:before {
    content: "\f597"
}

.fa-kiss-wink-heart:before {
    content: "\f598"
}

.fa-kiwi-bird:before {
    content: "\f535"
}

.fa-korvue:before {
    content: "\f42f"
}

.fa-landmark:before {
    content: "\f66f"
}

.fa-language:before {
    content: "\f1ab"
}

.fa-laptop:before {
    content: "\f109"
}

.fa-laptop-code:before {
    content: "\f5fc"
}

.fa-laravel:before {
    content: "\f3bd"
}

.fa-lastfm:before {
    content: "\f202"
}

.fa-lastfm-square:before {
    content: "\f203"
}

.fa-laugh:before {
    content: "\f599"
}

.fa-laugh-beam:before {
    content: "\f59a"
}

.fa-laugh-squint:before {
    content: "\f59b"
}

.fa-laugh-wink:before {
    content: "\f59c"
}

.fa-layer-group:before {
    content: "\f5fd"
}

.fa-leaf:before {
    content: "\f06c"
}

.fa-leanpub:before {
    content: "\f212"
}

.fa-lemon:before {
    content: "\f094"
}

.fa-less:before {
    content: "\f41d"
}

.fa-less-than:before {
    content: "\f536"
}

.fa-less-than-equal:before {
    content: "\f537"
}

.fa-level-down-alt:before {
    content: "\f3be"
}

.fa-level-up-alt:before {
    content: "\f3bf"
}

.fa-life-ring:before {
    content: "\f1cd"
}

.fa-lightbulb:before {
    content: "\f0eb"
}

.fa-line:before {
    content: "\f3c0"
}

.fa-link:before {
    content: "\f0c1"
}

.fa-linkedin:before {
    content: "\f08c"
}

.fa-linkedin-in:before {
    content: "\f0e1"
}

.fa-linode:before {
    content: "\f2b8"
}

.fa-linux:before {
    content: "\f17c"
}

.fa-lira-sign:before {
    content: "\f195"
}

.fa-list:before {
    content: "\f03a"
}

.fa-list-alt:before {
    content: "\f022"
}

.fa-list-ol:before {
    content: "\f0cb"
}

.fa-list-ul:before {
    content: "\f0ca"
}

.fa-location-arrow:before {
    content: "\f124"
}

.fa-lock:before {
    content: "\f023"
}

.fa-lock-open:before {
    content: "\f3c1"
}

.fa-long-arrow-alt-down:before {
    content: "\f309"
}

.fa-long-arrow-alt-left:before {
    content: "\f30a"
}

.fa-long-arrow-alt-right:before {
    content: "\f30b"
}

.fa-long-arrow-alt-up:before {
    content: "\f30c"
}

.fa-low-vision:before {
    content: "\f2a8"
}

.fa-luggage-cart:before {
    content: "\f59d"
}

.fa-lyft:before {
    content: "\f3c3"
}

.fa-magento:before {
    content: "\f3c4"
}

.fa-magic:before {
    content: "\f0d0"
}

.fa-magnet:before {
    content: "\f076"
}

.fa-mail-bulk:before {
    content: "\f674"
}

.fa-mailchimp:before {
    content: "\f59e"
}

.fa-male:before {
    content: "\f183"
}

.fa-mandalorian:before {
    content: "\f50f"
}

.fa-map:before {
    content: "\f279"
}

.fa-map-marked:before {
    content: "\f59f"
}

.fa-map-marked-alt:before {
    content: "\f5a0"
}

.fa-map-marker:before {
    content: "\f041"
}

.fa-map-marker-alt:before {
    content: "\f3c5"
}

.fa-map-pin:before {
    content: "\f276"
}

.fa-map-signs:before {
    content: "\f277"
}

.fa-markdown:before {
    content: "\f60f"
}

.fa-marker:before {
    content: "\f5a1"
}

.fa-mars:before {
    content: "\f222"
}

.fa-mars-double:before {
    content: "\f227"
}

.fa-mars-stroke:before {
    content: "\f229"
}

.fa-mars-stroke-h:before {
    content: "\f22b"
}

.fa-mars-stroke-v:before {
    content: "\f22a"
}

.fa-mask:before {
    content: "\f6fa"
}

.fa-mastodon:before {
    content: "\f4f6"
}

.fa-maxcdn:before {
    content: "\f136"
}

.fa-medal:before {
    content: "\f5a2"
}

.fa-medapps:before {
    content: "\f3c6"
}

.fa-medium:before {
    content: "\f23a"
}

.fa-medium-m:before {
    content: "\f3c7"
}

.fa-medkit:before {
    content: "\f0fa"
}

.fa-medrt:before {
    content: "\f3c8"
}

.fa-meetup:before {
    content: "\f2e0"
}

.fa-megaport:before {
    content: "\f5a3"
}

.fa-meh:before {
    content: "\f11a"
}

.fa-meh-blank:before {
    content: "\f5a4"
}

.fa-meh-rolling-eyes:before {
    content: "\f5a5"
}

.fa-memory:before {
    content: "\f538"
}

.fa-menorah:before {
    content: "\f676"
}

.fa-mercury:before {
    content: "\f223"
}

.fa-meteor:before {
    content: "\f753"
}

.fa-microchip:before {
    content: "\f2db"
}

.fa-microphone:before {
    content: "\f130"
}

.fa-microphone-alt:before {
    content: "\f3c9"
}

.fa-microphone-alt-slash:before {
    content: "\f539"
}

.fa-microphone-slash:before {
    content: "\f131"
}

.fa-microscope:before {
    content: "\f610"
}

.fa-microsoft:before {
    content: "\f3ca"
}

.fa-minus:before {
    content: "\f068"
}

.fa-minus-circle:before {
    content: "\f056"
}

.fa-minus-square:before {
    content: "\f146"
}

.fa-mix:before {
    content: "\f3cb"
}

.fa-mixcloud:before {
    content: "\f289"
}

.fa-mizuni:before {
    content: "\f3cc"
}

.fa-mobile:before {
    content: "\f10b"
}

.fa-mobile-alt:before {
    content: "\f3cd"
}

.fa-modx:before {
    content: "\f285"
}

.fa-monero:before {
    content: "\f3d0"
}

.fa-money-bill:before {
    content: "\f0d6"
}

.fa-money-bill-alt:before {
    content: "\f3d1"
}

.fa-money-bill-wave:before {
    content: "\f53a"
}

.fa-money-bill-wave-alt:before {
    content: "\f53b"
}

.fa-money-check:before {
    content: "\f53c"
}

.fa-money-check-alt:before {
    content: "\f53d"
}

.fa-monument:before {
    content: "\f5a6"
}

.fa-moon:before {
    content: "\f186"
}

.fa-mortar-pestle:before {
    content: "\f5a7"
}

.fa-mosque:before {
    content: "\f678"
}

.fa-motorcycle:before {
    content: "\f21c"
}

.fa-mountain:before {
    content: "\f6fc"
}

.fa-mouse-pointer:before {
    content: "\f245"
}

.fa-music:before {
    content: "\f001"
}

.fa-napster:before {
    content: "\f3d2"
}

.fa-neos:before {
    content: "\f612"
}

.fa-network-wired:before {
    content: "\f6ff"
}

.fa-neuter:before {
    content: "\f22c"
}

.fa-newspaper:before {
    content: "\f1ea"
}

.fa-nimblr:before {
    content: "\f5a8"
}

.fa-nintendo-switch:before {
    content: "\f418"
}

.fa-node:before {
    content: "\f419"
}

.fa-node-js:before {
    content: "\f3d3"
}

.fa-not-equal:before {
    content: "\f53e"
}

.fa-notes-medical:before {
    content: "\f481"
}

.fa-npm:before {
    content: "\f3d4"
}

.fa-ns8:before {
    content: "\f3d5"
}

.fa-nutritionix:before {
    content: "\f3d6"
}

.fa-object-group:before {
    content: "\f247"
}

.fa-object-ungroup:before {
    content: "\f248"
}

.fa-odnoklassniki:before {
    content: "\f263"
}

.fa-odnoklassniki-square:before {
    content: "\f264"
}

.fa-oil-can:before {
    content: "\f613"
}

.fa-old-republic:before {
    content: "\f510"
}

.fa-om:before {
    content: "\f679"
}

.fa-opencart:before {
    content: "\f23d"
}

.fa-openid:before {
    content: "\f19b"
}

.fa-opera:before {
    content: "\f26a"
}

.fa-optin-monster:before {
    content: "\f23c"
}

.fa-osi:before {
    content: "\f41a"
}

.fa-otter:before {
    content: "\f700"
}

.fa-outdent:before {
    content: "\f03b"
}

.fa-page4:before {
    content: "\f3d7"
}

.fa-pagelines:before {
    content: "\f18c"
}

.fa-paint-brush:before {
    content: "\f1fc"
}

.fa-paint-roller:before {
    content: "\f5aa"
}

.fa-palette:before {
    content: "\f53f"
}

.fa-palfed:before {
    content: "\f3d8"
}

.fa-pallet:before {
    content: "\f482"
}

.fa-paper-plane:before {
    content: "\f1d8"
}

.fa-paperclip:before {
    content: "\f0c6"
}

.fa-parachute-box:before {
    content: "\f4cd"
}

.fa-paragraph:before {
    content: "\f1dd"
}

.fa-parking:before {
    content: "\f540"
}

.fa-passport:before {
    content: "\f5ab"
}

.fa-pastafarianism:before {
    content: "\f67b"
}

.fa-paste:before {
    content: "\f0ea"
}

.fa-patreon:before {
    content: "\f3d9"
}

.fa-pause:before {
    content: "\f04c"
}

.fa-pause-circle:before {
    content: "\f28b"
}

.fa-paw:before {
    content: "\f1b0"
}

.fa-paypal:before {
    content: "\f1ed"
}

.fa-peace:before {
    content: "\f67c"
}

.fa-pen:before {
    content: "\f304"
}

.fa-pen-alt:before {
    content: "\f305"
}

.fa-pen-fancy:before {
    content: "\f5ac"
}

.fa-pen-nib:before {
    content: "\f5ad"
}

.fa-pen-square:before {
    content: "\f14b"
}

.fa-pencil-alt:before {
    content: "\f303"
}

.fa-pencil-ruler:before {
    content: "\f5ae"
}

.fa-penny-arcade:before {
    content: "\f704"
}

.fa-people-carry:before {
    content: "\f4ce"
}

.fa-percent:before {
    content: "\f295"
}

.fa-percentage:before {
    content: "\f541"
}

.fa-periscope:before {
    content: "\f3da"
}

.fa-person-booth:before {
    content: "\f756"
}

.fa-phabricator:before {
    content: "\f3db"
}

.fa-phoenix-framework:before {
    content: "\f3dc"
}

.fa-phoenix-squadron:before {
    content: "\f511"
}

.fa-phone:before {
    content: "\f095"
}

.fa-phone-slash:before {
    content: "\f3dd"
}

.fa-phone-square:before {
    content: "\f098"
}

.fa-phone-volume:before {
    content: "\f2a0"
}

.fa-php:before {
    content: "\f457"
}

.fa-pied-piper:before {
    content: "\f2ae"
}

.fa-pied-piper-alt:before {
    content: "\f1a8"
}

.fa-pied-piper-hat:before {
    content: "\f4e5"
}

.fa-pied-piper-pp:before {
    content: "\f1a7"
}

.fa-piggy-bank:before {
    content: "\f4d3"
}

.fa-pills:before {
    content: "\f484"
}

.fa-pinterest:before {
    content: "\f0d2"
}

.fa-pinterest-p:before {
    content: "\f231"
}

.fa-pinterest-square:before {
    content: "\f0d3"
}

.fa-place-of-worship:before {
    content: "\f67f"
}

.fa-plane:before {
    content: "\f072"
}

.fa-plane-arrival:before {
    content: "\f5af"
}

.fa-plane-departure:before {
    content: "\f5b0"
}

.fa-play:before {
    content: "\f04b"
}

.fa-play-circle:before {
    content: "\f144"
}

.fa-playstation:before {
    content: "\f3df"
}

.fa-plug:before {
    content: "\f1e6"
}

.fa-plus:before {
    content: "\f067"
}

.fa-plus-circle:before {
    content: "\f055"
}

.fa-plus-square:before {
    content: "\f0fe"
}

.fa-podcast:before {
    content: "\f2ce"
}

.fa-poll:before {
    content: "\f681"
}

.fa-poll-h:before {
    content: "\f682"
}

.fa-poo:before {
    content: "\f2fe"
}

.fa-poo-storm:before {
    content: "\f75a"
}

.fa-poop:before {
    content: "\f619"
}

.fa-portrait:before {
    content: "\f3e0"
}

.fa-pound-sign:before {
    content: "\f154"
}

.fa-power-off:before {
    content: "\f011"
}

.fa-pray:before {
    content: "\f683"
}

.fa-praying-hands:before {
    content: "\f684"
}

.fa-prescription:before {
    content: "\f5b1"
}

.fa-prescription-bottle:before {
    content: "\f485"
}

.fa-prescription-bottle-alt:before {
    content: "\f486"
}

.fa-print:before {
    content: "\f02f"
}

.fa-procedures:before {
    content: "\f487"
}

.fa-product-hunt:before {
    content: "\f288"
}

.fa-project-diagram:before {
    content: "\f542"
}

.fa-pushed:before {
    content: "\f3e1"
}

.fa-puzzle-piece:before {
    content: "\f12e"
}

.fa-python:before {
    content: "\f3e2"
}

.fa-qq:before {
    content: "\f1d6"
}

.fa-qrcode:before {
    content: "\f029"
}

.fa-question:before {
    content: "\f128"
}

.fa-question-circle:before {
    content: "\f059"
}

.fa-quidditch:before {
    content: "\f458"
}

.fa-quinscape:before {
    content: "\f459"
}

.fa-quora:before {
    content: "\f2c4"
}

.fa-quote-left:before {
    content: "\f10d"
}

.fa-quote-right:before {
    content: "\f10e"
}

.fa-quran:before {
    content: "\f687"
}

.fa-r-project:before {
    content: "\f4f7"
}

.fa-rainbow:before {
    content: "\f75b"
}

.fa-random:before {
    content: "\f074"
}

.fa-ravelry:before {
    content: "\f2d9"
}

.fa-react:before {
    content: "\f41b"
}

.fa-reacteurope:before {
    content: "\f75d"
}

.fa-readme:before {
    content: "\f4d5"
}

.fa-rebel:before {
    content: "\f1d0"
}

.fa-receipt:before {
    content: "\f543"
}

.fa-recycle:before {
    content: "\f1b8"
}

.fa-red-river:before {
    content: "\f3e3"
}

.fa-reddit:before {
    content: "\f1a1"
}

.fa-reddit-alien:before {
    content: "\f281"
}

.fa-reddit-square:before {
    content: "\f1a2"
}

.fa-redo:before {
    content: "\f01e"
}

.fa-redo-alt:before {
    content: "\f2f9"
}

.fa-registered:before {
    content: "\f25d"
}

.fa-renren:before {
    content: "\f18b"
}

.fa-reply:before {
    content: "\f3e5"
}

.fa-reply-all:before {
    content: "\f122"
}

.fa-replyd:before {
    content: "\f3e6"
}

.fa-republican:before {
    content: "\f75e"
}

.fa-researchgate:before {
    content: "\f4f8"
}

.fa-resolving:before {
    content: "\f3e7"
}

.fa-retweet:before {
    content: "\f079"
}

.fa-rev:before {
    content: "\f5b2"
}

.fa-ribbon:before {
    content: "\f4d6"
}

.fa-ring:before {
    content: "\f70b"
}

.fa-road:before {
    content: "\f018"
}

.fa-robot:before {
    content: "\f544"
}

.fa-rocket:before {
    content: "\f135"
}

.fa-rocketchat:before {
    content: "\f3e8"
}

.fa-rockrms:before {
    content: "\f3e9"
}

.fa-route:before {
    content: "\f4d7"
}

.fa-rss:before {
    content: "\f09e"
}

.fa-rss-square:before {
    content: "\f143"
}

.fa-ruble-sign:before {
    content: "\f158"
}

.fa-ruler:before {
    content: "\f545"
}

.fa-ruler-combined:before {
    content: "\f546"
}

.fa-ruler-horizontal:before {
    content: "\f547"
}

.fa-ruler-vertical:before {
    content: "\f548"
}

.fa-running:before {
    content: "\f70c"
}

.fa-rupee-sign:before {
    content: "\f156"
}

.fa-sad-cry:before {
    content: "\f5b3"
}

.fa-sad-tear:before {
    content: "\f5b4"
}

.fa-safari:before {
    content: "\f267"
}

.fa-sass:before {
    content: "\f41e"
}

.fa-save:before {
    content: "\f0c7"
}

.fa-schlix:before {
    content: "\f3ea"
}

.fa-school:before {
    content: "\f549"
}

.fa-screwdriver:before {
    content: "\f54a"
}

.fa-scribd:before {
    content: "\f28a"
}

.fa-scroll:before {
    content: "\f70e"
}

.fa-search:before {
    content: "\f002"
}

.fa-search-dollar:before {
    content: "\f688"
}

.fa-search-location:before {
    content: "\f689"
}

.fa-search-minus:before {
    content: "\f010"
}

.fa-search-plus:before {
    content: "\f00e"
}

.fa-searchengin:before {
    content: "\f3eb"
}

.fa-seedling:before {
    content: "\f4d8"
}

.fa-sellcast:before {
    content: "\f2da"
}

.fa-sellsy:before {
    content: "\f213"
}

.fa-server:before {
    content: "\f233"
}

.fa-servicestack:before {
    content: "\f3ec"
}

.fa-shapes:before {
    content: "\f61f"
}

.fa-share:before {
    content: "\f064"
}

.fa-share-alt:before {
    content: "\f1e0"
}

.fa-share-alt-square:before {
    content: "\f1e1"
}

.fa-share-square:before {
    content: "\f14d"
}

.fa-shekel-sign:before {
    content: "\f20b"
}

.fa-shield-alt:before {
    content: "\f3ed"
}

.fa-ship:before {
    content: "\f21a"
}

.fa-shipping-fast:before {
    content: "\f48b"
}

.fa-shirtsinbulk:before {
    content: "\f214"
}

.fa-shoe-prints:before {
    content: "\f54b"
}

.fa-shopping-bag:before {
    content: "\f290"
}

.fa-shopping-basket:before {
    content: "\f291"
}

.fa-shopping-cart:before {
    content: "\f07a"
}

.fa-shopware:before {
    content: "\f5b5"
}

.fa-shower:before {
    content: "\f2cc"
}

.fa-shuttle-van:before {
    content: "\f5b6"
}

.fa-sign:before {
    content: "\f4d9"
}

.fa-sign-in-alt:before {
    content: "\f2f6"
}

.fa-sign-language:before {
    content: "\f2a7"
}

.fa-sign-out-alt:before {
    content: "\f2f5"
}

.fa-signal:before {
    content: "\f012"
}

.fa-signature:before {
    content: "\f5b7"
}

.fa-simplybuilt:before {
    content: "\f215"
}

.fa-sistrix:before {
    content: "\f3ee"
}

.fa-sitemap:before {
    content: "\f0e8"
}

.fa-sith:before {
    content: "\f512"
}

.fa-skull:before {
    content: "\f54c"
}

.fa-skull-crossbones:before {
    content: "\f714"
}

.fa-skyatlas:before {
    content: "\f216"
}

.fa-skype:before {
    content: "\f17e"
}

.fa-slack:before {
    content: "\f198"
}

.fa-slack-hash:before {
    content: "\f3ef"
}

.fa-slash:before {
    content: "\f715"
}

.fa-sliders-h:before {
    content: "\f1de"
}

.fa-slideshare:before {
    content: "\f1e7"
}

.fa-smile:before {
    content: "\f118"
}

.fa-smile-beam:before {
    content: "\f5b8"
}

.fa-smile-wink:before {
    content: "\f4da"
}

.fa-smog:before {
    content: "\f75f"
}

.fa-smoking:before {
    content: "\f48d"
}

.fa-smoking-ban:before {
    content: "\f54d"
}

.fa-snapchat:before {
    content: "\f2ab"
}

.fa-snapchat-ghost:before {
    content: "\f2ac"
}

.fa-snapchat-square:before {
    content: "\f2ad"
}

.fa-snowflake:before {
    content: "\f2dc"
}

.fa-socks:before {
    content: "\f696"
}

.fa-solar-panel:before {
    content: "\f5ba"
}

.fa-sort:before {
    content: "\f0dc"
}

.fa-sort-alpha-down:before {
    content: "\f15d"
}

.fa-sort-alpha-up:before {
    content: "\f15e"
}

.fa-sort-amount-down:before {
    content: "\f160"
}

.fa-sort-amount-up:before {
    content: "\f161"
}

.fa-sort-down:before {
    content: "\f0dd"
}

.fa-sort-numeric-down:before {
    content: "\f162"
}

.fa-sort-numeric-up:before {
    content: "\f163"
}

.fa-sort-up:before {
    content: "\f0de"
}

.fa-soundcloud:before {
    content: "\f1be"
}

.fa-spa:before {
    content: "\f5bb"
}

.fa-space-shuttle:before {
    content: "\f197"
}

.fa-speakap:before {
    content: "\f3f3"
}

.fa-spider:before {
    content: "\f717"
}

.fa-spinner:before {
    content: "\f110"
}

.fa-splotch:before {
    content: "\f5bc"
}

.fa-spotify:before {
    content: "\f1bc"
}

.fa-spray-can:before {
    content: "\f5bd"
}

.fa-square:before {
    content: "\f0c8"
}

.fa-square-full:before {
    content: "\f45c"
}

.fa-square-root-alt:before {
    content: "\f698"
}

.fa-squarespace:before {
    content: "\f5be"
}

.fa-stack-exchange:before {
    content: "\f18d"
}

.fa-stack-overflow:before {
    content: "\f16c"
}

.fa-stamp:before {
    content: "\f5bf"
}

.fa-star:before {
    content: "\f005"
}

.fa-star-and-crescent:before {
    content: "\f699"
}

.fa-star-half:before {
    content: "\f089"
}

.fa-star-half-alt:before {
    content: "\f5c0"
}

.fa-star-of-david:before {
    content: "\f69a"
}

.fa-star-of-life:before {
    content: "\f621"
}

.fa-staylinked:before {
    content: "\f3f5"
}

.fa-steam:before {
    content: "\f1b6"
}

.fa-steam-square:before {
    content: "\f1b7"
}

.fa-steam-symbol:before {
    content: "\f3f6"
}

.fa-step-backward:before {
    content: "\f048"
}

.fa-step-forward:before {
    content: "\f051"
}

.fa-stethoscope:before {
    content: "\f0f1"
}

.fa-sticker-mule:before {
    content: "\f3f7"
}

.fa-sticky-note:before {
    content: "\f249"
}

.fa-stop:before {
    content: "\f04d"
}

.fa-stop-circle:before {
    content: "\f28d"
}

.fa-stopwatch:before {
    content: "\f2f2"
}

.fa-store:before {
    content: "\f54e"
}

.fa-store-alt:before {
    content: "\f54f"
}

.fa-strava:before {
    content: "\f428"
}

.fa-stream:before {
    content: "\f550"
}

.fa-street-view:before {
    content: "\f21d"
}

.fa-strikethrough:before {
    content: "\f0cc"
}

.fa-stripe:before {
    content: "\f429"
}

.fa-stripe-s:before {
    content: "\f42a"
}

.fa-stroopwafel:before {
    content: "\f551"
}

.fa-studiovinari:before {
    content: "\f3f8"
}

.fa-stumbleupon:before {
    content: "\f1a4"
}

.fa-stumbleupon-circle:before {
    content: "\f1a3"
}

.fa-subscript:before {
    content: "\f12c"
}

.fa-subway:before {
    content: "\f239"
}

.fa-suitcase:before {
    content: "\f0f2"
}

.fa-suitcase-rolling:before {
    content: "\f5c1"
}

.fa-sun:before {
    content: "\f185"
}

.fa-superpowers:before {
    content: "\f2dd"
}

.fa-superscript:before {
    content: "\f12b"
}

.fa-supple:before {
    content: "\f3f9"
}

.fa-surprise:before {
    content: "\f5c2"
}

.fa-swatchbook:before {
    content: "\f5c3"
}

.fa-swimmer:before {
    content: "\f5c4"
}

.fa-swimming-pool:before {
    content: "\f5c5"
}

.fa-synagogue:before {
    content: "\f69b"
}

.fa-sync:before {
    content: "\f021"
}

.fa-sync-alt:before {
    content: "\f2f1"
}

.fa-syringe:before {
    content: "\f48e"
}

.fa-table:before {
    content: "\f0ce"
}

.fa-table-tennis:before {
    content: "\f45d"
}

.fa-tablet:before {
    content: "\f10a"
}

.fa-tablet-alt:before {
    content: "\f3fa"
}

.fa-tablets:before {
    content: "\f490"
}

.fa-tachometer-alt:before {
    content: "\f3fd"
}

.fa-tag:before {
    content: "\f02b"
}

.fa-tags:before {
    content: "\f02c"
}

.fa-tape:before {
    content: "\f4db"
}

.fa-tasks:before {
    content: "\f0ae"
}

.fa-taxi:before {
    content: "\f1ba"
}

.fa-teamspeak:before {
    content: "\f4f9"
}

.fa-teeth:before {
    content: "\f62e"
}

.fa-teeth-open:before {
    content: "\f62f"
}

.fa-telegram:before {
    content: "\f2c6"
}

.fa-telegram-plane:before {
    content: "\f3fe"
}

.fa-temperature-high:before {
    content: "\f769"
}

.fa-temperature-low:before {
    content: "\f76b"
}

.fa-tencent-weibo:before {
    content: "\f1d5"
}

.fa-terminal:before {
    content: "\f120"
}

.fa-text-height:before {
    content: "\f034"
}

.fa-text-width:before {
    content: "\f035"
}

.fa-th:before {
    content: "\f00a"
}

.fa-th-large:before {
    content: "\f009"
}

.fa-th-list:before {
    content: "\f00b"
}

.fa-the-red-yeti:before {
    content: "\f69d"
}

.fa-theater-masks:before {
    content: "\f630"
}

.fa-themeco:before {
    content: "\f5c6"
}

.fa-themeisle:before {
    content: "\f2b2"
}

.fa-thermometer:before {
    content: "\f491"
}

.fa-thermometer-empty:before {
    content: "\f2cb"
}

.fa-thermometer-full:before {
    content: "\f2c7"
}

.fa-thermometer-half:before {
    content: "\f2c9"
}

.fa-thermometer-quarter:before {
    content: "\f2ca"
}

.fa-thermometer-three-quarters:before {
    content: "\f2c8"
}

.fa-think-peaks:before {
    content: "\f731"
}

.fa-thumbs-down:before {
    content: "\f165"
}

.fa-thumbs-up:before {
    content: "\f164"
}

.fa-thumbtack:before {
    content: "\f08d"
}

.fa-ticket-alt:before {
    content: "\f3ff"
}

.fa-times:before {
    content: "\f00d"
}

.fa-times-circle:before {
    content: "\f057"
}

.fa-tint:before {
    content: "\f043"
}

.fa-tint-slash:before {
    content: "\f5c7"
}

.fa-tired:before {
    content: "\f5c8"
}

.fa-toggle-off:before {
    content: "\f204"
}

.fa-toggle-on:before {
    content: "\f205"
}

.fa-toilet-paper:before {
    content: "\f71e"
}

.fa-toolbox:before {
    content: "\f552"
}

.fa-tooth:before {
    content: "\f5c9"
}

.fa-torah:before {
    content: "\f6a0"
}

.fa-torii-gate:before {
    content: "\f6a1"
}

.fa-tractor:before {
    content: "\f722"
}

.fa-trade-federation:before {
    content: "\f513"
}

.fa-trademark:before {
    content: "\f25c"
}

.fa-traffic-light:before {
    content: "\f637"
}

.fa-train:before {
    content: "\f238"
}

.fa-transgender:before {
    content: "\f224"
}

.fa-transgender-alt:before {
    content: "\f225"
}

.fa-trash:before {
    content: "\f1f8"
}

.fa-trash-alt:before {
    content: "\f2ed"
}

.fa-tree:before {
    content: "\f1bb"
}

.fa-trello:before {
    content: "\f181"
}

.fa-tripadvisor:before {
    content: "\f262"
}

.fa-trophy:before {
    content: "\f091"
}

.fa-truck:before {
    content: "\f0d1"
}

.fa-truck-loading:before {
    content: "\f4de"
}

.fa-truck-monster:before {
    content: "\f63b"
}

.fa-truck-moving:before {
    content: "\f4df"
}

.fa-truck-pickup:before {
    content: "\f63c"
}

.fa-tshirt:before {
    content: "\f553"
}

.fa-tty:before {
    content: "\f1e4"
}

.fa-tumblr:before {
    content: "\f173"
}

.fa-tumblr-square:before {
    content: "\f174"
}

.fa-tv:before {
    content: "\f26c"
}

.fa-twitch:before {
    content: "\f1e8"
}

.fa-twitter:before {
    content: "\f099"
}

.fa-twitter-square:before {
    content: "\f081"
}

.fa-typo3:before {
    content: "\f42b"
}

.fa-uber:before {
    content: "\f402"
}

.fa-uikit:before {
    content: "\f403"
}

.fa-umbrella:before {
    content: "\f0e9"
}

.fa-umbrella-beach:before {
    content: "\f5ca"
}

.fa-underline:before {
    content: "\f0cd"
}

.fa-undo:before {
    content: "\f0e2"
}

.fa-undo-alt:before {
    content: "\f2ea"
}

.fa-uniregistry:before {
    content: "\f404"
}

.fa-universal-access:before {
    content: "\f29a"
}

.fa-university:before {
    content: "\f19c"
}

.fa-unlink:before {
    content: "\f127"
}

.fa-unlock:before {
    content: "\f09c"
}

.fa-unlock-alt:before {
    content: "\f13e"
}

.fa-untappd:before {
    content: "\f405"
}

.fa-upload:before {
    content: "\f093"
}

.fa-usb:before {
    content: "\f287"
}

.fa-user:before {
    content: "\f007"
}

.fa-user-alt:before {
    content: "\f406"
}

.fa-user-alt-slash:before {
    content: "\f4fa"
}

.fa-user-astronaut:before {
    content: "\f4fb"
}

.fa-user-check:before {
    content: "\f4fc"
}

.fa-user-circle:before {
    content: "\f2bd"
}

.fa-user-clock:before {
    content: "\f4fd"
}

.fa-user-cog:before {
    content: "\f4fe"
}

.fa-user-edit:before {
    content: "\f4ff"
}

.fa-user-friends:before {
    content: "\f500"
}

.fa-user-graduate:before {
    content: "\f501"
}

.fa-user-injured:before {
    content: "\f728"
}

.fa-user-lock:before {
    content: "\f502"
}

.fa-user-md:before {
    content: "\f0f0"
}

.fa-user-minus:before {
    content: "\f503"
}

.fa-user-ninja:before {
    content: "\f504"
}

.fa-user-plus:before {
    content: "\f234"
}

.fa-user-secret:before {
    content: "\f21b"
}

.fa-user-shield:before {
    content: "\f505"
}

.fa-user-slash:before {
    content: "\f506"
}

.fa-user-tag:before {
    content: "\f507"
}

.fa-user-tie:before {
    content: "\f508"
}

.fa-user-times:before {
    content: "\f235"
}

.fa-users:before {
    content: "\f0c0"
}

.fa-users-cog:before {
    content: "\f509"
}

.fa-ussunnah:before {
    content: "\f407"
}

.fa-utensil-spoon:before {
    content: "\f2e5"
}

.fa-utensils:before {
    content: "\f2e7"
}

.fa-vaadin:before {
    content: "\f408"
}

.fa-vector-square:before {
    content: "\f5cb"
}

.fa-venus:before {
    content: "\f221"
}

.fa-venus-double:before {
    content: "\f226"
}

.fa-venus-mars:before {
    content: "\f228"
}

.fa-viacoin:before {
    content: "\f237"
}

.fa-viadeo:before {
    content: "\f2a9"
}

.fa-viadeo-square:before {
    content: "\f2aa"
}

.fa-vial:before {
    content: "\f492"
}

.fa-vials:before {
    content: "\f493"
}

.fa-viber:before {
    content: "\f409"
}

.fa-video:before {
    content: "\f03d"
}

.fa-video-slash:before {
    content: "\f4e2"
}

.fa-vihara:before {
    content: "\f6a7"
}

.fa-vimeo:before {
    content: "\f40a"
}

.fa-vimeo-square:before {
    content: "\f194"
}

.fa-vimeo-v:before {
    content: "\f27d"
}

.fa-vine:before {
    content: "\f1ca"
}

.fa-vk:before {
    content: "\f189"
}

.fa-vnv:before {
    content: "\f40b"
}

.fa-volleyball-ball:before {
    content: "\f45f"
}

.fa-volume-down:before {
    content: "\f027"
}

.fa-volume-mute:before {
    content: "\f6a9"
}

.fa-volume-off:before {
    content: "\f026"
}

.fa-volume-up:before {
    content: "\f028"
}

.fa-vote-yea:before {
    content: "\f772"
}

.fa-vr-cardboard:before {
    content: "\f729"
}

.fa-vuejs:before {
    content: "\f41f"
}

.fa-walking:before {
    content: "\f554"
}

.fa-wallet:before {
    content: "\f555"
}

.fa-warehouse:before {
    content: "\f494"
}

.fa-water:before {
    content: "\f773"
}

.fa-weebly:before {
    content: "\f5cc"
}

.fa-weibo:before {
    content: "\f18a"
}

.fa-weight:before {
    content: "\f496"
}

.fa-weight-hanging:before {
    content: "\f5cd"
}

.fa-weixin:before {
    content: "\f1d7"
}

.fa-whatsapp:before {
    content: "\f232"
}

.fa-whatsapp-square:before {
    content: "\f40c"
}

.fa-wheelchair:before {
    content: "\f193"
}

.fa-whmcs:before {
    content: "\f40d"
}

.fa-wifi:before {
    content: "\f1eb"
}

.fa-wikipedia-w:before {
    content: "\f266"
}

.fa-wind:before {
    content: "\f72e"
}

.fa-window-close:before {
    content: "\f410"
}

.fa-window-maximize:before {
    content: "\f2d0"
}

.fa-window-minimize:before {
    content: "\f2d1"
}

.fa-window-restore:before {
    content: "\f2d2"
}

.fa-windows:before {
    content: "\f17a"
}

.fa-wine-bottle:before {
    content: "\f72f"
}

.fa-wine-glass:before {
    content: "\f4e3"
}

.fa-wine-glass-alt:before {
    content: "\f5ce"
}

.fa-wix:before {
    content: "\f5cf"
}

.fa-wizards-of-the-coast:before {
    content: "\f730"
}

.fa-wolf-pack-battalion:before {
    content: "\f514"
}

.fa-won-sign:before {
    content: "\f159"
}

.fa-wordpress:before {
    content: "\f19a"
}

.fa-wordpress-simple:before {
    content: "\f411"
}

.fa-wpbeginner:before {
    content: "\f297"
}

.fa-wpexplorer:before {
    content: "\f2de"
}

.fa-wpforms:before {
    content: "\f298"
}

.fa-wpressr:before {
    content: "\f3e4"
}

.fa-wrench:before {
    content: "\f0ad"
}

.fa-x-ray:before {
    content: "\f497"
}

.fa-xbox:before {
    content: "\f412"
}

.fa-xing:before {
    content: "\f168"
}

.fa-xing-square:before {
    content: "\f169"
}

.fa-y-combinator:before {
    content: "\f23b"
}

.fa-yahoo:before {
    content: "\f19e"
}

.fa-yandex:before {
    content: "\f413"
}

.fa-yandex-international:before {
    content: "\f414"
}

.fa-yelp:before {
    content: "\f1e9"
}

.fa-yen-sign:before {
    content: "\f157"
}

.fa-yin-yang:before {
    content: "\f6ad"
}

.fa-yoast:before {
    content: "\f2b1"
}

.fa-youtube:before {
    content: "\f167"
}

.fa-youtube-square:before {
    content: "\f431"
}

.fa-zhihu:before {
    content: "\f63f"
}

.sr-only {
    border: 0;
    clip: rect(0,0,0,0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px
}

.sr-only-focusable:active,.sr-only-focusable:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto
}

@font-face {
    font-family: 'Font Awesome 5 Brands';
    font-style: normal;
    font-weight: 400;
    src: url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-brands-400.eot);
    src: url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-brands-400.woff2) format("woff2"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-brands-400.woff) format("woff"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-brands-400.ttf) format("truetype"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-brands-400.svg#fontawesome) format("svg")
}

.fab {
    font-family: 'Font Awesome 5 Brands'
}

@font-face {
    font-family: 'Font Awesome 5 Free';
    font-style: normal;
    font-weight: 400;
    src: url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-regular-400.eot);
    src: url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-regular-400.woff2) format("woff2"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-regular-400.woff) format("woff"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-regular-400.ttf) format("truetype"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-regular-400.svg#fontawesome) format("svg")
}

.far {
    font-family: 'Font Awesome 5 Free';
    font-weight: 400
}

@font-face {
    font-family: 'Font Awesome 5 Free';
    font-style: normal;
    font-weight: 900;
    src: url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-solid-900.eot);
    src: url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-solid-900.woff2) format("woff2"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-solid-900.woff) format("woff"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-solid-900.ttf) format("truetype"),url(//rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/vendor/../../fonts/fontawesome-free/webfonts/fa-solid-900.svg#fontawesome) format("svg")
}

.fa,.fas {
    font-family: 'Font Awesome 5 Free';
    font-weight: 900
}

@charset "UTF-8";:root {
    --color-primary:#f9004d;--color-primary-light:#ffedf2;--color-body:#717173;--color-heading:#1f1f25;--color-secondary:#00d09c;--color-tertiary:#030303;--color-success:#3eb75e;--color-danger:#ff0003;--color-border:#e9e9e9;--color-border-2:#0000004d;--color-lighter:#f8f9fc;--color-white:#fff;--radius:4px;--border-width:2px;--border-sdfs:#717173;--color-extra1:#b1b4c1;--h1:72px;--h2:60px;--h3:40px;--h4:30px;--h5:20px;--h6:16px}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

article,aside,details,figcaption,figure,footer,header,nav,section,summary {
    display: block
}

audio,canvas,video {
    display: inline-block
}

audio:not([controls]) {
    display: none;
    height: 0
}

[hidden] {
    display: none
}

a {
    color: var(--color-heading)
}

a {
    text-decoration: none
}

a:hover,a:focus,a:active {
    text-decoration: none;
    outline: none;
    color: var(--color-primary)
}

address {
    margin: 0 0 24px
}

abbr[title] {
    border-bottom: 1px dotted
}

b,strong {
    font-weight: 700
}

mark {
    background: var(--color-primary);
    color: #fff
}

code,kbd,pre,samp {
    font-size: 14px;
    -webkit-hyphens: none;
    -moz-hyphens: none;
    -ms-hyphens: none;
    hyphens: none;
    color: var(--color-primary)
}

kbd,ins {
    color: #fff
}

pre,.wp-block-code {
    font-family: "Courier 10 Pitch",Courier,monospace;
    font-size: 14px;
    margin: 10px 0;
    overflow: auto;
    padding: 20px;
    white-space: pre;
    white-space: pre-wrap;
    word-wrap: break-word;
    color: var(--color-body);
    background: #eee;
    border-radius: 4px
}

blockquote,q {
    -webkit-hyphens: none;
    -moz-hyphens: none;
    -ms-hyphens: none;
    hyphens: none;
    quotes: none
}

blockquote:before,blockquote:after,q:before,q:after {
    content: "";
    content: none
}

blockquote {
    font-size: 18px;
    font-style: italic;
    font-weight: 300;
    margin: 24px 40px
}

blockquote blockquote {
    margin-right: 0
}

blockquote cite,blockquote small {
    font-size: 14px;
    font-weight: 400
}

blockquote strong,blockquote b {
    font-weight: 700
}

small {
    font-size: smaller
}

sub,sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sup {
    top: -.5em
}

sub {
    bottom: -.25em
}

dl {
    margin-top: 0;
    margin-bottom: 10px
}

dd {
    margin: 0 15px 15px
}

dt {
    font-weight: 700;
    color: var(--color-heading)
}

menu,ol,ul {
    margin: 16px 0;
    padding: 0 0 0 40px
}

nav ul,nav ol {
    list-style: none;
    list-style-image: none
}

li>ul,li>ol {
    margin: 0
}

ol ul {
    margin-bottom: 0
}

img {
    border: 0;
    width:100%;
    position:absolute;
    top: calc(100% - 200px);
}

big {
    font-size: 125%
}

svg:not(:root) {
    overflow: hidden
}

figure {
    margin: 0
}

form {
    margin: 0
}

fieldset {
    border: 1px solid var(--color-border);
    margin: 0 2px;
    min-width: inherit;
    padding: .35em .625em .75em
}

legend {
    border: 0;
    padding: 0;
    white-space: normal
}

button,input,select,textarea {
    font-size: 100%;
    margin: 0;
    max-width: 100%;
    vertical-align: baseline
}

button,input {
    line-height: normal
}

button,html input[type=button],input[type=reset],input[type=submit] {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    cursor: pointer
}

button[disabled],input[disabled] {
    cursor: default
}

input[type=checkbox],input[type=radio] {
    padding: 0
}

input[type=search] {
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
    appearance: textfield;
    padding-right: 2px;
    width: 270px
}

input[type=search]::-webkit-search-decoration {
    -webkit-appearance: none;
    appearance: none
}

button::-moz-focus-inner,input::-moz-focus-inner {
    border: 0;
    padding: 0
}

textarea {
    overflow: auto;
    vertical-align: top
}

caption,th,td {
    font-weight: 400
}

th {
    font-weight: 400
}

td,.wp-block-calendar tfoot td {
    border: 1px solid #e9e9e9;
    padding: 7px 10px
}

del {
    color: #333
}

ins {
    background: var(--color-primary);
    text-decoration: none;
    padding: 0 5px
}

hr {
    background-size: 4px 4px;
    border: 0;
    height: 1px;
    margin: 0 0 24px
}

table a,table a:link,table a:visited {
    text-decoration: underline
}

dt {
    font-weight: 700;
    margin-bottom: 10px
}

dd {
    margin: 0 15px 15px
}

caption {
    caption-side: top
}

kbd {
    background: var(--color-primary)
}

dfn,cite,em {
    font-style: italic
}

var {
    color: #757589;
    font-size: 18px
}

code {
    font-family: "Courier 10 Pitch",Courier,monospace
}

a>code {
    color: var(--color-primary)
}

* {
    box-sizing: border-box
}

html {
    overflow: hidden;
    overflow-y: auto;
    font-size: 10px
}

body {
    overflow: hidden;
    font-size: 16px;
    line-height: 30px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-family: "Poppins",sans-serif;
    color: var(--color-body);
    font-weight: 400
}

h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6,address,p,pre,blockquote,menu,ol,ul,table,hr {
    margin: 0;
    margin-bottom: 15px
}

h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6 {
    word-break: break-word;
    font-family: "Poppins",sans-serif;
    line-height: 1.4074;
    color: var(--color-heading)
}

h1,.h1 {
    font-size: var(--h1);
    line-height: 1.3
}

h2,.h2 {
    font-size: var(--h2);
    line-height: 1.4074
}

h3,.h3 {
    font-size: var(--h3);
    line-height: 1.4074
}

h4,.h4 {
    font-size: var(--h4);
    line-height: 1.4074
}

h5,.h5 {
    font-size: var(--h5);
    line-height: 1.4074
}

h6,.h6 {
    font-size: var(--h6);
    line-height: 1.4074
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    h1,.h1 {
        font-size:calc(var(--h1) - 10px)
    }

    h2,.h2 {
        font-size: calc(var(--h2) - 10px)
    }

    h3,.h3 {
        font-size: calc(var(--h3) - 5px)
    }

    h4,.h4 {
        font-size: calc(var(--h4) - 5px)
    }

    h5,.h5 {
        font-size: calc(var(--h5) - 2px)
    }
}

@media only screen and (max-width: 767px) {
    h1,.h1 {
        font-size:calc(var(--h1) - 20px)
    }

    h2,.h2 {
        font-size: calc(var(--h2) - 20px)
    }

    h3,.h3 {
        font-size: calc(var(--h3) - 10px)
    }

    h4,.h4 {
        font-size: calc(var(--h4) - 5px)
    }

    h5,.h5 {
        font-size: calc(var(--h5) - 4px)
    }

    h6,.h6 {
        font-size: calc(var(--h6) - 2px)
    }
}

h1,.h1,h2,.h2,h3,.h3 {
    font-weight: 700
}

h4,.h4,h5,.h5 {
    font-weight: 600
}

h6,.h6 {
    font-weight: 600
}

.rn-blog-details P.has-large-font-size {
    line-height: 1.5;
    font-size: 36px
}

p {
    font-size: 16px;
    line-height: 1.5;
}

p:last-child {
    margin-bottom: 0
}

p.has-large-font-size {
    line-height: 1.5;
    font-size: 36px
}

p.has-medium-font-size {
    font-size: 20px
}

p.has-small-font-size {
    font-size: 13px
}

p.has-very-light-gray-color {
    color: #fff
}

p.has-background {
    padding: 20px 30px
}

input,button,select,textarea {
    background: 0 0;
    border: 1px solid #e9e9e9;
    transition: all .4s ease-out 0s;
    color: var(--color-body)
}

input.no-data, input:focus, input:active, button:focus, button:active, select:focus, select:active, textarea:focus, textarea:active {
    outline: none;
    border-color: var(--color-primary)
}

table {
    border-collapse: collapse;
    border-spacing: 0;
    margin: 0 0 20px;
    width: 100%
}

table a,table a:link,table a:visited {
    text-decoration: none
}

cite,.wp-block-pullquote cite,.wp-block-pullquote.is-style-solid-color blockquote cite,.wp-block-quote cite {
    color: var(--color-heading);
    margin-top: 10px;
    display: inline-block;
    text-transform: inherit
}

var {
    font-family: "Courier 10 Pitch",Courier,monospace
}

ul,ol {
    padding-left: 18px
}

ul {
    list-style: disc;
    margin-bottom: 40px;
    padding-left: 20px
}

ul.liststyle.bullet li {
    font-size: 16px;
    line-height: 28px;
    color: var(--color-body);
    position: relative;
    padding-left: 30px
}

@media only screen and (max-width: 767px) {
    ul.liststyle.bullet li {
        padding-left:19px
    }
}

ul.liststyle.bullet li:before {
    position: absolute;
    content: "";
    width: 6px;
    height: 6px;
    border-radius: 100%;
    background: var(--color-body);
    left: 0;
    top: 10px
}

ul.liststyle.bullet li+li {
    margin-top: 8px
}

ul li {
    font-size: 16px;
    line-height: 1;
    margin-bottom: 10px;
}

ul li a {
    text-decoration: none;
    color: var(--color-heading)
}

ul li a:hover {
    color: var(--color-primary)
}

ul ul {
    margin-bottom: 0
}

ol {
    margin-bottom: 40px
}

ol li {
    font-size: 16px;
    line-height: 1;
    margin-bottom: 10px;
}

ol li a {
    color: var(--color-heading);
    text-decoration: none
}

ol li a:hover {
    color: var(--color-primary)
}

ol ul {
    padding-left: 30px
}

p.cite {
    margin-top: 0
}

.line-separator {
    border-bottom: 1px solid #ebebeb
}

.textBlack {
    color: #000
}

.bodyColor {
    color: #535353
}

.single-service.service__style--2:hover .content p,.single-service.service__style--2:hover .content .title {
    color: #fff
}

.color-1 {
    color: #8956e2
}

.color-2 {
    color: #11ccd3
}

.color-3 {
    color: #f4769a
}

.color-4 {
    color: #2f21b3
}

.bgcolor-4 {
    background: #2f21b3
}

.footer-widget ul,.rbt-single-widget.share ul.social-list,.rbt-single-widget.category ul.category-list,.rbt-single-widget .small-post .content ul.blog-meta,ul.blog-meta,ul.list-style,.list-style--1,ul.nav.tab-style--1,ul.brand-style,.rn-pagination ul.page-numbers,.rn-pagination ul.page-list,.post-breadcrumbs .page-list,.breadcrumb-inner .page-list,.color-black .mainmenunav ul.mainmenu,.color-white .mainmenunav ul.mainmenu,.mainmenunav ul.mainmenu>li ul.submenu,.mainmenunav ul.mainmenu,.trydo-active-onepage-navigation .header-area .mainmenu>li .submenu {
    padding: 0;
    margin: 0;
    list-style: none
}

.liststyle {
    padding: 0;
    margin: 0;
    list-style: none
}

.copyright-text p a,.footer-widget ul li a,.footer-style-2 p a,.footer-default .footer-right .footer-widget ul.ft-link li a,.pv-tab-button li span:after,.pv-tab-button button span:after,.single-demo a,.related-work .inner h4 a,.about-inner .section-title p a,.tagcloud a,.wp-block-tag-cloud a,ul.blog-meta li a,.single-post-content-wrap input,.comment-list .comment .reply-edit .reply a.comment-reply-link,.comment-list .pingback .reply-edit .reply a.comment-reply-link,.comment-list .trackback .reply-edit .reply a.comment-reply-link,.comment-list .comment .reply-edit a.comment-edit-link,.comment-list .pingback .reply-edit a.comment-edit-link,.comment-list .trackback .reply-edit a.comment-edit-link,.comment-list .comment .comment-text a,.comment-list .pingback .comment-text a,.comment-list .trackback .comment-text a,.comment-list .comment .comment-img .commenter a,.comment-list .pingback .comment-img .commenter a,.comment-list .trackback .comment-img .commenter a,.rn-blog-details .single-post-content-wrap p a,.trydo-blog-list .blog-top .title a,.blog.blog-style--1 .content .blog-btn,.blog.blog-style--1 .content .title a,.blog.blog-style--1 .content:before,.blog.blog-style--1 .content,.blog.blog-style--1 .thumbnail a:after,.blog.blog-style--1 .thumbnail a img,.blog.blog-style--1,.trydo-slick-active.slick-dot-bottom ul.slick-dots li button:after,input,textarea,.rn-address .inner p a,.rn-address .icon,.single-tab-content ul li a,ul.nav.tab-style--1 li a:before,ul.nav.tab-style--1 li a,.team .thumbnail:after,.team .thumbnail img,.single-service.service__style--4 .content p,.single-service.service__style--5 .content p,.single-service.service__style--4 .content .title,.single-service.service__style--5 .content .title,.single-service.service__style--4 .icon,.single-service.service__style--5 .icon,.single-service.service__style--4:before,.single-service.service__style--5:before,.single-service.service__style--4,.single-service.service__style--5,.single-service.service__style--3,.single-service.service__style--2 a:before,.single-service.service__style--2 .content p,.single-service.service__style--2 .content .title,.single-service.service__style--2 .icon,.single-service.service__style--2 a,.single-service.service__style--1 .content p,.single-service.service__style--1 .content .title,.single-service.service__style--1 .icon,.single-service.service__style--1,.portfolio-style--3 .content .portfolio-btn,.portfolio-style--3 .content h4.title a,.portfolio-style--3 .content:before,.portfolio-style--3 .content,.portfolio-style--3 .thumbnail a:after,.portfolio-style--3 .thumbnail a img,.portfolio-style--3,.portfolio-sacousel-inner .slick-dots li button:after,.rn-slick-dot .slick-dots li button:after,.portfolio-tilthover .portfolio .content,.portfolio-tilthover .portfolio .bg-blr-image,.portfolio .content .inner .portfolio-button,.portfolio .bg-blr-image,.portfolio .thumbnail:after,.portfolio .thumbnail-inner:before,.portfolio,ul.social-share li a,.rn-pagination .post-page-numbers:before,.page-links .post-page-numbers:before,.rn-pagination .post-page-numbers,.page-links .post-page-numbers,.rn-pagination ul.page-numbers li a:before,.rn-pagination ul.page-list li a:before,a.rn-btn,button.rn-btn,a.btn-transparent:after,a.btn-transparent,.section-title p a,.breadcrumb-inner .page-list li a,.mainmenunav ul.mainmenu>li ul.submenu li>a,.mainmenunav ul.mainmenu>li ul.submenu,.mainmenunav ul.mainmenu>li>a,.trydo-active-onepage-navigation .header-area .mainmenu>li .submenu,.header-area.header--sticky.sticky .header-wrapper .logo img,.header-area .header-wrapper a.rn-btn,.form-group textarea,.form-group input,#scrollUp i,#scrollUp,ul li a,ol li a {
    -webkit-transition: all .3s cubic-bezier(.645,.045,.355,1);
    transition: all .3s cubic-bezier(.645,.045,.355,1)
}

.about-us-list .title {
    font-weight: 500
}

.section-title-default h2.title {
    font-weight: 400
}

.fontWeight900 {
    font-weight: 900 !important
}

.fontWeight800 {
    font-weight: 800 !important
}

.fontWeight700 {
    font-weight: 700 !important
}

.fontWeight600 {
    font-weight: 600 !important
}

.fontWeight500 {
    font-weight: 500 !important
}

.fontWeight400 {
    font-weight: 400 !important
}

.fontWeight300 {
    font-weight: 300 !important
}

.single-service.service__style--3,.single-service.service__style--2,.single-service.service__style--1 {
    position: relative
}

.bg_image {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center
}

.text-default-gradient {
    background: linear-gradient(to right,#f81f01 50%,#ee076e 50%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent
}

.theme-gradient {
    background: linear-gradient(-259deg,#f81f01 0,#ee076e 100%)
}

.rn-pagination .post-page-numbers.current,.page-links .post-page-numbers.current,.rn-pagination .post-page-numbers:before,.page-links .post-page-numbers:before,.rn-pagination ul.page-numbers li .current,.rn-pagination ul.page-list li .current,.rn-pagination ul.page-numbers li a:before,.rn-pagination ul.page-list li a:before {
    background: linear-gradient(-259deg,#f81f01 0,#ee076e 100%)
}

.has-primary-background-color {
    background-color: var(--color-primary)
}

.has-primary-color,.has-primary-color p {
    color: var(--color-primary)
}

.has-secondary-background-color {
    background-color: var(--color-secondary)
}

.has-secondary-color,.has-secondary-color p {
    color: var(--color-secondary)
}

.has-dark-background-color {
    background-color: var(--color-heading)
}

.has-dark-color,.has-dark-color p {
    color: var(--color-heading)
}

.has-gray-background-color {
    background-color: var(--color-body)
}

.has-gray-color,.has-gray-color p {
    color: var(--color-body)
}

.has-light-background-color {
    background-color: var(--color-lighter)
}

.has-light-color,.has-light-color p {
    color: var(--color-lighter)
}

.has-white-background-color {
    background-color: #fff
}

.has-white-color,.has-white-color p {
    color: #fff
}

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.animated.infinite {
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite
}

.animated.hinge {
    -webkit-animation-duration: 2s;
    animation-duration: 2s
}

.animated.bounceIn,.animated.bounceOut {
    -webkit-animation-duration: .75s;
    animation-duration: .75s
}

.animated.flipOutX,.animated.flipOutY {
    -webkit-animation-duration: .75s;
    animation-duration: .75s
}

@-webkit-keyframes bounce {
    from,20%,53%,80%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1);
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    40%,43% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-30px,0);
        transform: translate3d(0,-30px,0)
    }

    70% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-15px,0);
        transform: translate3d(0,-15px,0)
    }

    90% {
        -webkit-transform: translate3d(0,-4px,0);
        transform: translate3d(0,-4px,0)
    }
}

@keyframes bounce {
    from,20%,53%,80%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1);
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    40%,43% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-30px,0);
        transform: translate3d(0,-30px,0)
    }

    70% {
        -webkit-animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        animation-timing-function: cubic-bezier(.755,.05,.855,.06);
        -webkit-transform: translate3d(0,-15px,0);
        transform: translate3d(0,-15px,0)
    }

    90% {
        -webkit-transform: translate3d(0,-4px,0);
        transform: translate3d(0,-4px,0)
    }
}

.bounce {
    -webkit-animation-name: bounce;
    animation-name: bounce;
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom
}

@-webkit-keyframes flash {
    from,50%,to {
        opacity: 1
    }

    25%,75% {
        opacity: 0
    }
}

@keyframes flash {
    from,50%,to {
        opacity: 1
    }

    25%,75% {
        opacity: 0
    }
}

.flash {
    -webkit-animation-name: flash;
    animation-name: flash
}

@-webkit-keyframes pulse {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    50% {
        -webkit-transform: scale3d(1.05,1.05,1.05);
        transform: scale3d(1.05,1.05,1.05)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

@keyframes pulse {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    50% {
        -webkit-transform: scale3d(1.05,1.05,1.05);
        transform: scale3d(1.05,1.05,1.05)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

.pulse {
    -webkit-animation-name: pulse;
    animation-name: pulse
}

@-webkit-keyframes rubberBand {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    30% {
        -webkit-transform: scale3d(1.25,.75,1);
        transform: scale3d(1.25,.75,1)
    }

    40% {
        -webkit-transform: scale3d(.75,1.25,1);
        transform: scale3d(.75,1.25,1)
    }

    50% {
        -webkit-transform: scale3d(1.15,.85,1);
        transform: scale3d(1.15,.85,1)
    }

    65% {
        -webkit-transform: scale3d(.95,1.05,1);
        transform: scale3d(.95,1.05,1)
    }

    75% {
        -webkit-transform: scale3d(1.05,.95,1);
        transform: scale3d(1.05,.95,1)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

@keyframes rubberBand {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    30% {
        -webkit-transform: scale3d(1.25,.75,1);
        transform: scale3d(1.25,.75,1)
    }

    40% {
        -webkit-transform: scale3d(.75,1.25,1);
        transform: scale3d(.75,1.25,1)
    }

    50% {
        -webkit-transform: scale3d(1.15,.85,1);
        transform: scale3d(1.15,.85,1)
    }

    65% {
        -webkit-transform: scale3d(.95,1.05,1);
        transform: scale3d(.95,1.05,1)
    }

    75% {
        -webkit-transform: scale3d(1.05,.95,1);
        transform: scale3d(1.05,.95,1)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

.rubberBand {
    -webkit-animation-name: rubberBand;
    animation-name: rubberBand
}

@-webkit-keyframes shake {
    from,to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    10%,30%,50%,70%,90% {
        -webkit-transform: translate3d(-10px,0,0);
        transform: translate3d(-10px,0,0)
    }

    20%,40%,60%,80% {
        -webkit-transform: translate3d(10px,0,0);
        transform: translate3d(10px,0,0)
    }
}

@keyframes shake {
    from,to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    10%,30%,50%,70%,90% {
        -webkit-transform: translate3d(-10px,0,0);
        transform: translate3d(-10px,0,0)
    }

    20%,40%,60%,80% {
        -webkit-transform: translate3d(10px,0,0);
        transform: translate3d(10px,0,0)
    }
}

.shake {
    -webkit-animation-name: shake;
    animation-name: shake
}

@-webkit-keyframes swing {
    20% {
        -webkit-transform: rotate3d(0,0,1,15deg);
        transform: rotate3d(0,0,1,15deg)
    }

    40% {
        -webkit-transform: rotate3d(0,0,1,-10deg);
        transform: rotate3d(0,0,1,-10deg)
    }

    60% {
        -webkit-transform: rotate3d(0,0,1,5deg);
        transform: rotate3d(0,0,1,5deg)
    }

    80% {
        -webkit-transform: rotate3d(0,0,1,-5deg);
        transform: rotate3d(0,0,1,-5deg)
    }

    to {
        -webkit-transform: rotate3d(0,0,1,0deg);
        transform: rotate3d(0,0,1,0deg)
    }
}

@keyframes swing {
    20% {
        -webkit-transform: rotate3d(0,0,1,15deg);
        transform: rotate3d(0,0,1,15deg)
    }

    40% {
        -webkit-transform: rotate3d(0,0,1,-10deg);
        transform: rotate3d(0,0,1,-10deg)
    }

    60% {
        -webkit-transform: rotate3d(0,0,1,5deg);
        transform: rotate3d(0,0,1,5deg)
    }

    80% {
        -webkit-transform: rotate3d(0,0,1,-5deg);
        transform: rotate3d(0,0,1,-5deg)
    }

    to {
        -webkit-transform: rotate3d(0,0,1,0deg);
        transform: rotate3d(0,0,1,0deg)
    }
}

.swing {
    -webkit-transform-origin: top center;
    transform-origin: top center;
    -webkit-animation-name: swing;
    animation-name: swing
}

@-webkit-keyframes tada {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    10%,20% {
        -webkit-transform: scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);
        transform: scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)
    }

    30%,50%,70%,90% {
        -webkit-transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);
        transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)
    }

    40%,60%,80% {
        -webkit-transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);
        transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

@keyframes tada {
    from {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }

    10%,20% {
        -webkit-transform: scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg);
        transform: scale3d(.9,.9,.9) rotate3d(0,0,1,-3deg)
    }

    30%,50%,70%,90% {
        -webkit-transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg);
        transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,3deg)
    }

    40%,60%,80% {
        -webkit-transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg);
        transform: scale3d(1.1,1.1,1.1) rotate3d(0,0,1,-3deg)
    }

    to {
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

.tada {
    -webkit-animation-name: tada;
    animation-name: tada
}

@-webkit-keyframes wobble {
    from {
        -webkit-transform: none;
        transform: none
    }

    15% {
        -webkit-transform: translate3d(-25%,0,0) rotate3d(0,0,1,-5deg);
        transform: translate3d(-25%,0,0) rotate3d(0,0,1,-5deg)
    }

    30% {
        -webkit-transform: translate3d(20%,0,0) rotate3d(0,0,1,3deg);
        transform: translate3d(20%,0,0) rotate3d(0,0,1,3deg)
    }

    45% {
        -webkit-transform: translate3d(-15%,0,0) rotate3d(0,0,1,-3deg);
        transform: translate3d(-15%,0,0) rotate3d(0,0,1,-3deg)
    }

    60% {
        -webkit-transform: translate3d(10%,0,0) rotate3d(0,0,1,2deg);
        transform: translate3d(10%,0,0) rotate3d(0,0,1,2deg)
    }

    75% {
        -webkit-transform: translate3d(-5%,0,0) rotate3d(0,0,1,-1deg);
        transform: translate3d(-5%,0,0) rotate3d(0,0,1,-1deg)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

@keyframes wobble {
    from {
        -webkit-transform: none;
        transform: none
    }

    15% {
        -webkit-transform: translate3d(-25%,0,0) rotate3d(0,0,1,-5deg);
        transform: translate3d(-25%,0,0) rotate3d(0,0,1,-5deg)
    }

    30% {
        -webkit-transform: translate3d(20%,0,0) rotate3d(0,0,1,3deg);
        transform: translate3d(20%,0,0) rotate3d(0,0,1,3deg)
    }

    45% {
        -webkit-transform: translate3d(-15%,0,0) rotate3d(0,0,1,-3deg);
        transform: translate3d(-15%,0,0) rotate3d(0,0,1,-3deg)
    }

    60% {
        -webkit-transform: translate3d(10%,0,0) rotate3d(0,0,1,2deg);
        transform: translate3d(10%,0,0) rotate3d(0,0,1,2deg)
    }

    75% {
        -webkit-transform: translate3d(-5%,0,0) rotate3d(0,0,1,-1deg);
        transform: translate3d(-5%,0,0) rotate3d(0,0,1,-1deg)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

.wobble {
    -webkit-animation-name: wobble;
    animation-name: wobble
}

@-webkit-keyframes jello {
    from,11.1%,to {
        -webkit-transform: none;
        transform: none
    }

    22.2% {
        -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
        transform: skewX(-12.5deg) skewY(-12.5deg)
    }

    33.3% {
        -webkit-transform: skewX(6.25deg) skewY(6.25deg);
        transform: skewX(6.25deg) skewY(6.25deg)
    }

    44.4% {
        -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
        transform: skewX(-3.125deg) skewY(-3.125deg)
    }

    55.5% {
        -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
        transform: skewX(1.5625deg) skewY(1.5625deg)
    }

    66.6% {
        -webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
        transform: skewX(-.78125deg) skewY(-.78125deg)
    }

    77.7% {
        -webkit-transform: skewX(.390625deg) skewY(.390625deg);
        transform: skewX(.390625deg) skewY(.390625deg)
    }

    88.8% {
        -webkit-transform: skewX(-.1953125deg) skewY(-.1953125deg);
        transform: skewX(-.1953125deg) skewY(-.1953125deg)
    }
}

@keyframes jello {
    from,11.1%,to {
        -webkit-transform: none;
        transform: none
    }

    22.2% {
        -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
        transform: skewX(-12.5deg) skewY(-12.5deg)
    }

    33.3% {
        -webkit-transform: skewX(6.25deg) skewY(6.25deg);
        transform: skewX(6.25deg) skewY(6.25deg)
    }

    44.4% {
        -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
        transform: skewX(-3.125deg) skewY(-3.125deg)
    }

    55.5% {
        -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
        transform: skewX(1.5625deg) skewY(1.5625deg)
    }

    66.6% {
        -webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
        transform: skewX(-.78125deg) skewY(-.78125deg)
    }

    77.7% {
        -webkit-transform: skewX(.390625deg) skewY(.390625deg);
        transform: skewX(.390625deg) skewY(.390625deg)
    }

    88.8% {
        -webkit-transform: skewX(-.1953125deg) skewY(-.1953125deg);
        transform: skewX(-.1953125deg) skewY(-.1953125deg)
    }
}

.jello {
    -webkit-animation-name: jello;
    animation-name: jello;
    -webkit-transform-origin: center;
    transform-origin: center
}

@-webkit-keyframes bounceIn {
    from,20%,40%,60%,80%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    20% {
        -webkit-transform: scale3d(1.1,1.1,1.1);
        transform: scale3d(1.1,1.1,1.1)
    }

    40% {
        -webkit-transform: scale3d(.9,.9,.9);
        transform: scale3d(.9,.9,.9)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03,1.03,1.03);
        transform: scale3d(1.03,1.03,1.03)
    }

    80% {
        -webkit-transform: scale3d(.97,.97,.97);
        transform: scale3d(.97,.97,.97)
    }

    to {
        opacity: 1;
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

@keyframes bounceIn {
    from,20%,40%,60%,80%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    20% {
        -webkit-transform: scale3d(1.1,1.1,1.1);
        transform: scale3d(1.1,1.1,1.1)
    }

    40% {
        -webkit-transform: scale3d(.9,.9,.9);
        transform: scale3d(.9,.9,.9)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03,1.03,1.03);
        transform: scale3d(1.03,1.03,1.03)
    }

    80% {
        -webkit-transform: scale3d(.97,.97,.97);
        transform: scale3d(.97,.97,.97)
    }

    to {
        opacity: 1;
        -webkit-transform: scale3d(1,1,1);
        transform: scale3d(1,1,1)
    }
}

.bounceIn {
    -webkit-animation-name: bounceIn;
    animation-name: bounceIn
}

@-webkit-keyframes bounceInDown {
    from,60%,75%,90%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(0,-3000px,0);
        transform: translate3d(0,-3000px,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0,25px,0);
        transform: translate3d(0,25px,0)
    }

    75% {
        -webkit-transform: translate3d(0,-10px,0);
        transform: translate3d(0,-10px,0)
    }

    90% {
        -webkit-transform: translate3d(0,5px,0);
        transform: translate3d(0,5px,0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

@keyframes bounceInDown {
    from,60%,75%,90%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(0,-3000px,0);
        transform: translate3d(0,-3000px,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0,25px,0);
        transform: translate3d(0,25px,0)
    }

    75% {
        -webkit-transform: translate3d(0,-10px,0);
        transform: translate3d(0,-10px,0)
    }

    90% {
        -webkit-transform: translate3d(0,5px,0);
        transform: translate3d(0,5px,0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

.bounceInDown {
    -webkit-animation-name: bounceInDown;
    animation-name: bounceInDown
}

@-webkit-keyframes bounceInLeft {
    from,60%,75%,90%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(-3000px,0,0);
        transform: translate3d(-3000px,0,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(25px,0,0);
        transform: translate3d(25px,0,0)
    }

    75% {
        -webkit-transform: translate3d(-10px,0,0);
        transform: translate3d(-10px,0,0)
    }

    90% {
        -webkit-transform: translate3d(5px,0,0);
        transform: translate3d(5px,0,0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

@keyframes bounceInLeft {
    from,60%,75%,90%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(-3000px,0,0);
        transform: translate3d(-3000px,0,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(25px,0,0);
        transform: translate3d(25px,0,0)
    }

    75% {
        -webkit-transform: translate3d(-10px,0,0);
        transform: translate3d(-10px,0,0)
    }

    90% {
        -webkit-transform: translate3d(5px,0,0);
        transform: translate3d(5px,0,0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

.bounceInLeft {
    -webkit-animation-name: bounceInLeft;
    animation-name: bounceInLeft
}

@-webkit-keyframes bounceInRight {
    from,60%,75%,90%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    from {
        opacity: 0;
        -webkit-transform: translate3d(3000px,0,0);
        transform: translate3d(3000px,0,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(-25px,0,0);
        transform: translate3d(-25px,0,0)
    }

    75% {
        -webkit-transform: translate3d(10px,0,0);
        transform: translate3d(10px,0,0)
    }

    90% {
        -webkit-transform: translate3d(-5px,0,0);
        transform: translate3d(-5px,0,0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

@keyframes bounceInRight {
    from,60%,75%,90%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    from {
        opacity: 0;
        -webkit-transform: translate3d(3000px,0,0);
        transform: translate3d(3000px,0,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(-25px,0,0);
        transform: translate3d(-25px,0,0)
    }

    75% {
        -webkit-transform: translate3d(10px,0,0);
        transform: translate3d(10px,0,0)
    }

    90% {
        -webkit-transform: translate3d(-5px,0,0);
        transform: translate3d(-5px,0,0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

.bounceInRight {
    -webkit-animation-name: bounceInRight;
    animation-name: bounceInRight
}

@-webkit-keyframes bounceInUp {
    from,60%,75%,90%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    from {
        opacity: 0;
        -webkit-transform: translate3d(0,3000px,0);
        transform: translate3d(0,3000px,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0,-20px,0);
        transform: translate3d(0,-20px,0)
    }

    75% {
        -webkit-transform: translate3d(0,10px,0);
        transform: translate3d(0,10px,0)
    }

    90% {
        -webkit-transform: translate3d(0,-5px,0);
        transform: translate3d(0,-5px,0)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes bounceInUp {
    from,60%,75%,90%,to {
        -webkit-animation-timing-function: cubic-bezier(.215,.61,.355,1);
        animation-timing-function: cubic-bezier(.215,.61,.355,1)
    }

    from {
        opacity: 0;
        -webkit-transform: translate3d(0,3000px,0);
        transform: translate3d(0,3000px,0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0,-20px,0);
        transform: translate3d(0,-20px,0)
    }

    75% {
        -webkit-transform: translate3d(0,10px,0);
        transform: translate3d(0,10px,0)
    }

    90% {
        -webkit-transform: translate3d(0,-5px,0);
        transform: translate3d(0,-5px,0)
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.bounceInUp {
    -webkit-animation-name: bounceInUp;
    animation-name: bounceInUp
}

@-webkit-keyframes bounceOut {
    20% {
        -webkit-transform: scale3d(.9,.9,.9);
        transform: scale3d(.9,.9,.9)
    }

    50%,55% {
        opacity: 1;
        -webkit-transform: scale3d(1.1,1.1,1.1);
        transform: scale3d(1.1,1.1,1.1)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }
}

@keyframes bounceOut {
    20% {
        -webkit-transform: scale3d(.9,.9,.9);
        transform: scale3d(.9,.9,.9)
    }

    50%,55% {
        opacity: 1;
        -webkit-transform: scale3d(1.1,1.1,1.1);
        transform: scale3d(1.1,1.1,1.1)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }
}

.bounceOut {
    -webkit-animation-name: bounceOut;
    animation-name: bounceOut
}

@-webkit-keyframes bounceOutDown {
    20% {
        -webkit-transform: translate3d(0,10px,0);
        transform: translate3d(0,10px,0)
    }

    40%,45% {
        opacity: 1;
        -webkit-transform: translate3d(0,-20px,0);
        transform: translate3d(0,-20px,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }
}

@keyframes bounceOutDown {
    20% {
        -webkit-transform: translate3d(0,10px,0);
        transform: translate3d(0,10px,0)
    }

    40%,45% {
        opacity: 1;
        -webkit-transform: translate3d(0,-20px,0);
        transform: translate3d(0,-20px,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }
}

.bounceOutDown {
    -webkit-animation-name: bounceOutDown;
    animation-name: bounceOutDown
}

@-webkit-keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px,0,0);
        transform: translate3d(20px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }
}

@keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px,0,0);
        transform: translate3d(20px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }
}

.bounceOutLeft {
    -webkit-animation-name: bounceOutLeft;
    animation-name: bounceOutLeft
}

@-webkit-keyframes bounceOutRight {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(-20px,0,0);
        transform: translate3d(-20px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }
}

@keyframes bounceOutRight {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(-20px,0,0);
        transform: translate3d(-20px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }
}

.bounceOutRight {
    -webkit-animation-name: bounceOutRight;
    animation-name: bounceOutRight
}

@-webkit-keyframes bounceOutUp {
    20% {
        -webkit-transform: translate3d(0,-10px,0);
        transform: translate3d(0,-10px,0)
    }

    40%,45% {
        opacity: 1;
        -webkit-transform: translate3d(0,20px,0);
        transform: translate3d(0,20px,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }
}

@keyframes bounceOutUp {
    20% {
        -webkit-transform: translate3d(0,-10px,0);
        transform: translate3d(0,-10px,0)
    }

    40%,45% {
        opacity: 1;
        -webkit-transform: translate3d(0,20px,0);
        transform: translate3d(0,20px,0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }
}

.bounceOutUp {
    -webkit-animation-name: bounceOutUp;
    animation-name: bounceOutUp
}

@-webkit-keyframes fadeIn {
    from {
        opacity: 0
    }

    to {
        opacity: 1
    }
}

@keyframes fadeIn {
    from {
        opacity: 0
    }

    to {
        opacity: 1
    }
}

.fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn
}

@-webkit-keyframes fadeInDown {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown
}

@-webkit-keyframes fadeInDownBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInDownBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInDownBig {
    -webkit-animation-name: fadeInDownBig;
    animation-name: fadeInDownBig
}

@-webkit-keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}

@-webkit-keyframes fadeInLeftBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInLeftBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInLeftBig {
    -webkit-animation-name: fadeInLeftBig;
    animation-name: fadeInLeftBig
}

@-webkit-keyframes fadeInRight {
    from {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight
}

@-webkit-keyframes fadeInRightBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInRightBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInRightBig {
    -webkit-animation-name: fadeInRightBig;
    animation-name: fadeInRightBig
}

@-webkit-keyframes fadeInUp {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp
}

@-webkit-keyframes fadeInUpBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInUpBig {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInUpBig {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig
}

@-webkit-keyframes fadeOut {
    from {
        opacity: 1
    }

    to {
        opacity: 0
    }
}

@keyframes fadeOut {
    from {
        opacity: 1
    }

    to {
        opacity: 0
    }
}

.fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut
}

@-webkit-keyframes fadeOutDown {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }
}

@keyframes fadeOutDown {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }
}

.fadeOutDown {
    -webkit-animation-name: fadeOutDown;
    animation-name: fadeOutDown
}

@-webkit-keyframes fadeOutDownBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }
}

@keyframes fadeOutDownBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,2000px,0);
        transform: translate3d(0,2000px,0)
    }
}

.fadeOutDownBig {
    -webkit-animation-name: fadeOutDownBig;
    animation-name: fadeOutDownBig
}

@-webkit-keyframes fadeOutLeft {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

@keyframes fadeOutLeft {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

.fadeOutLeft {
    -webkit-animation-name: fadeOutLeft;
    animation-name: fadeOutLeft
}

@-webkit-keyframes fadeOutLeftBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }
}

@keyframes fadeOutLeftBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px,0,0);
        transform: translate3d(-2000px,0,0)
    }
}

.fadeOutLeftBig {
    -webkit-animation-name: fadeOutLeftBig;
    animation-name: fadeOutLeftBig
}

@-webkit-keyframes fadeOutRight {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }
}

@keyframes fadeOutRight {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }
}

.fadeOutRight {
    -webkit-animation-name: fadeOutRight;
    animation-name: fadeOutRight
}

@-webkit-keyframes fadeOutRightBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }
}

@keyframes fadeOutRightBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px,0,0);
        transform: translate3d(2000px,0,0)
    }
}

.fadeOutRightBig {
    -webkit-animation-name: fadeOutRightBig;
    animation-name: fadeOutRightBig
}

@-webkit-keyframes fadeOutUp {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }
}

@keyframes fadeOutUp {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }
}

.fadeOutUp {
    -webkit-animation-name: fadeOutUp;
    animation-name: fadeOutUp
}

@-webkit-keyframes fadeOutUpBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }
}

@keyframes fadeOutUpBig {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0,-2000px,0);
        transform: translate3d(0,-2000px,0)
    }
}

.fadeOutUpBig {
    -webkit-animation-name: fadeOutUpBig;
    animation-name: fadeOutUpBig
}

@-webkit-keyframes flip {
    from {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-360deg);
        transform: perspective(400px) rotate3d(0,1,0,-360deg);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    40% {
        -webkit-transform: perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);
        transform: perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    50% {
        -webkit-transform: perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);
        transform: perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    80% {
        -webkit-transform: perspective(400px) scale3d(.95,.95,.95);
        transform: perspective(400px) scale3d(.95,.95,.95);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
}

@keyframes flip {
    from {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-360deg);
        transform: perspective(400px) rotate3d(0,1,0,-360deg);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    40% {
        -webkit-transform: perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);
        transform: perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    50% {
        -webkit-transform: perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);
        transform: perspective(400px) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    80% {
        -webkit-transform: perspective(400px) scale3d(.95,.95,.95);
        transform: perspective(400px) scale3d(.95,.95,.95);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
}

.animated.flip {
    -webkit-backface-visibility: visible;
    backface-visibility: visible;
    -webkit-animation-name: flip;
    animation-name: flip
}

@-webkit-keyframes flipInX {
    from {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,90deg);
        transform: perspective(400px) rotate3d(1,0,0,90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0
    }

    40% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-20deg);
        transform: perspective(400px) rotate3d(1,0,0,-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    60% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,10deg);
        transform: perspective(400px) rotate3d(1,0,0,10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-5deg);
        transform: perspective(400px) rotate3d(1,0,0,-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

@keyframes flipInX {
    from {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,90deg);
        transform: perspective(400px) rotate3d(1,0,0,90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0
    }

    40% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-20deg);
        transform: perspective(400px) rotate3d(1,0,0,-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    60% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,10deg);
        transform: perspective(400px) rotate3d(1,0,0,10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-5deg);
        transform: perspective(400px) rotate3d(1,0,0,-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

.flipInX {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInX;
    animation-name: flipInX
}

@-webkit-keyframes flipInY {
    from {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,90deg);
        transform: perspective(400px) rotate3d(0,1,0,90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0
    }

    40% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-20deg);
        transform: perspective(400px) rotate3d(0,1,0,-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    60% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,10deg);
        transform: perspective(400px) rotate3d(0,1,0,10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-5deg);
        transform: perspective(400px) rotate3d(0,1,0,-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

@keyframes flipInY {
    from {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,90deg);
        transform: perspective(400px) rotate3d(0,1,0,90deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 0
    }

    40% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-20deg);
        transform: perspective(400px) rotate3d(0,1,0,-20deg);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    60% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,10deg);
        transform: perspective(400px) rotate3d(0,1,0,10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-5deg);
        transform: perspective(400px) rotate3d(0,1,0,-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

.flipInY {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInY;
    animation-name: flipInY
}

@-webkit-keyframes flipOutX {
    from {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-20deg);
        transform: perspective(400px) rotate3d(1,0,0,-20deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,90deg);
        transform: perspective(400px) rotate3d(1,0,0,90deg);
        opacity: 0
    }
}

@keyframes flipOutX {
    from {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,-20deg);
        transform: perspective(400px) rotate3d(1,0,0,-20deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotate3d(1,0,0,90deg);
        transform: perspective(400px) rotate3d(1,0,0,90deg);
        opacity: 0
    }
}

.flipOutX {
    -webkit-animation-name: flipOutX;
    animation-name: flipOutX;
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important
}

@-webkit-keyframes flipOutY {
    from {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-15deg);
        transform: perspective(400px) rotate3d(0,1,0,-15deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,90deg);
        transform: perspective(400px) rotate3d(0,1,0,90deg);
        opacity: 0
    }
}

@keyframes flipOutY {
    from {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,-15deg);
        transform: perspective(400px) rotate3d(0,1,0,-15deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotate3d(0,1,0,90deg);
        transform: perspective(400px) rotate3d(0,1,0,90deg);
        opacity: 0
    }
}

.flipOutY {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipOutY;
    animation-name: flipOutY
}

@-webkit-keyframes lightSpeedIn {
    from {
        -webkit-transform: translate3d(100%,0,0) skewX(-30deg);
        transform: translate3d(100%,0,0) skewX(-30deg);
        opacity: 0
    }

    60% {
        -webkit-transform: skewX(20deg);
        transform: skewX(20deg);
        opacity: 1
    }

    80% {
        -webkit-transform: skewX(-5deg);
        transform: skewX(-5deg);
        opacity: 1
    }

    to {
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes lightSpeedIn {
    from {
        -webkit-transform: translate3d(100%,0,0) skewX(-30deg);
        transform: translate3d(100%,0,0) skewX(-30deg);
        opacity: 0
    }

    60% {
        -webkit-transform: skewX(20deg);
        transform: skewX(20deg);
        opacity: 1
    }

    80% {
        -webkit-transform: skewX(-5deg);
        transform: skewX(-5deg);
        opacity: 1
    }

    to {
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.lightSpeedIn {
    -webkit-animation-name: lightSpeedIn;
    animation-name: lightSpeedIn;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
}

@-webkit-keyframes lightSpeedOut {
    from {
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(100%,0,0) skewX(30deg);
        transform: translate3d(100%,0,0) skewX(30deg);
        opacity: 0
    }
}

@keyframes lightSpeedOut {
    from {
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(100%,0,0) skewX(30deg);
        transform: translate3d(100%,0,0) skewX(30deg);
        opacity: 0
    }
}

.lightSpeedOut {
    -webkit-animation-name: lightSpeedOut;
    animation-name: lightSpeedOut;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
}

@-webkit-keyframes rotateIn {
    from {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0,0,1,-200deg);
        transform: rotate3d(0,0,1,-200deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateIn {
    from {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0,0,1,-200deg);
        transform: rotate3d(0,0,1,-200deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateIn {
    -webkit-animation-name: rotateIn;
    animation-name: rotateIn
}

@-webkit-keyframes rotateInDownLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateInDownLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateInDownLeft {
    -webkit-animation-name: rotateInDownLeft;
    animation-name: rotateInDownLeft
}

@-webkit-keyframes rotateInDownRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateInDownRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateInDownRight {
    -webkit-animation-name: rotateInDownRight;
    animation-name: rotateInDownRight
}

@-webkit-keyframes rotateInUpLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateInUpLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateInUpLeft {
    -webkit-animation-name: rotateInUpLeft;
    animation-name: rotateInUpLeft
}

@-webkit-keyframes rotateInUpRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,-90deg);
        transform: rotate3d(0,0,1,-90deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateInUpRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,-90deg);
        transform: rotate3d(0,0,1,-90deg);
        opacity: 0
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateInUpRight {
    -webkit-animation-name: rotateInUpRight;
    animation-name: rotateInUpRight
}

@-webkit-keyframes rotateOut {
    from {
        -webkit-transform-origin: center;
        transform-origin: center;
        opacity: 1
    }

    to {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0,0,1,200deg);
        transform: rotate3d(0,0,1,200deg);
        opacity: 0
    }
}

@keyframes rotateOut {
    from {
        -webkit-transform-origin: center;
        transform-origin: center;
        opacity: 1
    }

    to {
        -webkit-transform-origin: center;
        transform-origin: center;
        -webkit-transform: rotate3d(0,0,1,200deg);
        transform: rotate3d(0,0,1,200deg);
        opacity: 0
    }
}

.rotateOut {
    -webkit-animation-name: rotateOut;
    animation-name: rotateOut
}

@-webkit-keyframes rotateOutDownLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }
}

@keyframes rotateOutDownLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,45deg);
        transform: rotate3d(0,0,1,45deg);
        opacity: 0
    }
}

.rotateOutDownLeft {
    -webkit-animation-name: rotateOutDownLeft;
    animation-name: rotateOutDownLeft
}

@-webkit-keyframes rotateOutDownRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }
}

@keyframes rotateOutDownRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }
}

.rotateOutDownRight {
    -webkit-animation-name: rotateOutDownRight;
    animation-name: rotateOutDownRight
}

@-webkit-keyframes rotateOutUpLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }
}

@keyframes rotateOutUpLeft {
    from {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: left bottom;
        transform-origin: left bottom;
        -webkit-transform: rotate3d(0,0,1,-45deg);
        transform: rotate3d(0,0,1,-45deg);
        opacity: 0
    }
}

.rotateOutUpLeft {
    -webkit-animation-name: rotateOutUpLeft;
    animation-name: rotateOutUpLeft
}

@-webkit-keyframes rotateOutUpRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,90deg);
        transform: rotate3d(0,0,1,90deg);
        opacity: 0
    }
}

@keyframes rotateOutUpRight {
    from {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        opacity: 1
    }

    to {
        -webkit-transform-origin: right bottom;
        transform-origin: right bottom;
        -webkit-transform: rotate3d(0,0,1,90deg);
        transform: rotate3d(0,0,1,90deg);
        opacity: 0
    }
}

.rotateOutUpRight {
    -webkit-animation-name: rotateOutUpRight;
    animation-name: rotateOutUpRight
}

@-webkit-keyframes hinge {
    0% {
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }

    20%,60% {
        -webkit-transform: rotate3d(0,0,1,80deg);
        transform: rotate3d(0,0,1,80deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }

    40%,80% {
        -webkit-transform: rotate3d(0,0,1,60deg);
        transform: rotate3d(0,0,1,60deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(0,700px,0);
        transform: translate3d(0,700px,0);
        opacity: 0
    }
}

@keyframes hinge {
    0% {
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }

    20%,60% {
        -webkit-transform: rotate3d(0,0,1,80deg);
        transform: rotate3d(0,0,1,80deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }

    40%,80% {
        -webkit-transform: rotate3d(0,0,1,60deg);
        transform: rotate3d(0,0,1,60deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(0,700px,0);
        transform: translate3d(0,700px,0);
        opacity: 0
    }
}

.hinge {
    -webkit-animation-name: hinge;
    animation-name: hinge
}

@-webkit-keyframes rollIn {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0) rotate3d(0,0,1,-120deg);
        transform: translate3d(-100%,0,0) rotate3d(0,0,1,-120deg)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes rollIn {
    from {
        opacity: 0;
        -webkit-transform: translate3d(-100%,0,0) rotate3d(0,0,1,-120deg);
        transform: translate3d(-100%,0,0) rotate3d(0,0,1,-120deg)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.rollIn {
    -webkit-animation-name: rollIn;
    animation-name: rollIn
}

@-webkit-keyframes rollOut {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0) rotate3d(0,0,1,120deg);
        transform: translate3d(100%,0,0) rotate3d(0,0,1,120deg)
    }
}

@keyframes rollOut {
    from {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%,0,0) rotate3d(0,0,1,120deg);
        transform: translate3d(100%,0,0) rotate3d(0,0,1,120deg)
    }
}

.rollOut {
    -webkit-animation-name: rollOut;
    animation-name: rollOut
}

@-webkit-keyframes zoomIn {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    50% {
        opacity: 1
    }
}

@keyframes zoomIn {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    50% {
        opacity: 1
    }
}

.zoomIn {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn
}

@-webkit-keyframes zoomInDown {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,-1000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,-1000px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomInDown {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,-1000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,-1000px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomInDown {
    -webkit-animation-name: zoomInDown;
    animation-name: zoomInDown
}

@-webkit-keyframes zoomInLeft {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(-1000px,0,0);
        transform: scale3d(.1,.1,.1) translate3d(-1000px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(10px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(10px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomInLeft {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(-1000px,0,0);
        transform: scale3d(.1,.1,.1) translate3d(-1000px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(10px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(10px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomInLeft {
    -webkit-animation-name: zoomInLeft;
    animation-name: zoomInLeft
}

@-webkit-keyframes zoomInRight {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(1000px,0,0);
        transform: scale3d(.1,.1,.1) translate3d(1000px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(-10px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(-10px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomInRight {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(1000px,0,0);
        transform: scale3d(.1,.1,.1) translate3d(1000px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(-10px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(-10px,0,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomInRight {
    -webkit-animation-name: zoomInRight;
    animation-name: zoomInRight
}

@-webkit-keyframes zoomInUp {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,1000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,1000px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomInUp {
    from {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,1000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,1000px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomInUp {
    -webkit-animation-name: zoomInUp;
    animation-name: zoomInUp
}

@-webkit-keyframes zoomOut {
    from {
        opacity: 1
    }

    50% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    to {
        opacity: 0
    }
}

@keyframes zoomOut {
    from {
        opacity: 1
    }

    50% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3)
    }

    to {
        opacity: 0
    }
}

.zoomOut {
    -webkit-animation-name: zoomOut;
    animation-name: zoomOut
}

@-webkit-keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,2000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,2000px,0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,-60px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,2000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,2000px,0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomOutDown {
    -webkit-animation-name: zoomOutDown;
    animation-name: zoomOutDown
}

@-webkit-keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(42px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(42px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(-2000px,0,0);
        transform: scale(.1) translate3d(-2000px,0,0);
        -webkit-transform-origin: left center;
        transform-origin: left center
    }
}

@keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(42px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(42px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(-2000px,0,0);
        transform: scale(.1) translate3d(-2000px,0,0);
        -webkit-transform-origin: left center;
        transform-origin: left center
    }
}

.zoomOutLeft {
    -webkit-animation-name: zoomOutLeft;
    animation-name: zoomOutLeft
}

@-webkit-keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(-42px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(-42px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(2000px,0,0);
        transform: scale(.1) translate3d(2000px,0,0);
        -webkit-transform-origin: right center;
        transform-origin: right center
    }
}

@keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(-42px,0,0);
        transform: scale3d(.475,.475,.475) translate3d(-42px,0,0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(2000px,0,0);
        transform: scale(.1) translate3d(2000px,0,0);
        -webkit-transform-origin: right center;
        transform-origin: right center
    }
}

.zoomOutRight {
    -webkit-animation-name: zoomOutRight;
    animation-name: zoomOutRight
}

@-webkit-keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,-2000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,-2000px,0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

@keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        transform: scale3d(.475,.475,.475) translate3d(0,60px,0);
        -webkit-animation-timing-function: cubic-bezier(.55,.055,.675,.19);
        animation-timing-function: cubic-bezier(.55,.055,.675,.19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1,.1,.1) translate3d(0,-2000px,0);
        transform: scale3d(.1,.1,.1) translate3d(0,-2000px,0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175,.885,.32,1);
        animation-timing-function: cubic-bezier(.175,.885,.32,1)
    }
}

.zoomOutUp {
    -webkit-animation-name: zoomOutUp;
    animation-name: zoomOutUp
}

@-webkit-keyframes slideInDown {
    from {
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes slideInDown {
    from {
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.slideInDown {
    -webkit-animation-name: slideInDown;
    animation-name: slideInDown
}

@-webkit-keyframes slideInLeft {
    from {
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes slideInLeft {
    from {
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.slideInLeft {
    -webkit-animation-name: slideInLeft;
    animation-name: slideInLeft
}

@-webkit-keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes slideInRight {
    from {
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight
}

@-webkit-keyframes slideInUp {
    from {
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

@keyframes slideInUp {
    from {
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0);
        visibility: visible
    }

    to {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }
}

.slideInUp {
    -webkit-animation-name: slideInUp;
    animation-name: slideInUp
}

@-webkit-keyframes slideOutDown {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }
}

@keyframes slideOutDown {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0)
    }
}

.slideOutDown {
    -webkit-animation-name: slideOutDown;
    animation-name: slideOutDown
}

@-webkit-keyframes slideOutLeft {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

@keyframes slideOutLeft {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(-100%,0,0);
        transform: translate3d(-100%,0,0)
    }
}

.slideOutLeft {
    -webkit-animation-name: slideOutLeft;
    animation-name: slideOutLeft
}

@-webkit-keyframes slideOutRight {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }
}

@keyframes slideOutRight {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(100%,0,0);
        transform: translate3d(100%,0,0)
    }
}

.slideOutRight {
    -webkit-animation-name: slideOutRight;
    animation-name: slideOutRight
}

@-webkit-keyframes slideOutUp {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }
}

@keyframes slideOutUp {
    from {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0,-100%,0);
        transform: translate3d(0,-100%,0)
    }
}

.slideOutUp {
    -webkit-animation-name: slideOutUp;
    animation-name: slideOutUp
}

@-webkit-keyframes headerSlideDown {
    0% {
        margin-top: -100px
    }

    to {
        margin-top: 0
    }
}

@keyframes headerSlideDown {
    0% {
        margin-top: -100px
    }

    to {
        margin-top: 0
    }
}

.hidden {
    display: none
}

.fix {
    overflow: hidden
}

.clearfix:before,.clearfix:after {
    content: " ";
    display: table
}

.clearfix:after {
    clear: both
}

.wrapper {
    position: relative
}

.theme-color {
    color: var(--color-primary)
}

.theme-gradient {
    background-color: #f81f01;
    background: #f81f01;
    background: -moz-linear-gradient(145deg,#f81f01 0%,#ee076e 100%);
    background: -webkit-linear-gradient(145deg,#f81f01 0%,#ee076e 100%);
    background: linear-gradient(145deg,#f81f01 0%,#ee076e 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#f81f01",endColorstr="#ee076e",GradientType=1);
    color: #f81f01
}

.rn-text-white {
    color: #c6c9d8 !important
}

.bg_image.bg-position-fixed {
    background-position: fixed
}

.bg_color--1 {
    background: #fff
}

.bg_color--2 {
    background: var(--color-primary)
}

.bg_color--3 {
    background: #f8f9fc
}

.bg_color--4 {
    background: #1a1b1f
}

.bg_color--5 {
    background: #f8f9fc
}

.bg_color--6 {
    background: #000
}

.bg_color--7 {
    background: #101010
}

.bg_overlay:before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: #00010c;
    opacity: .57
}

.bg_overlay {
    position: relative
}

.bg_image--1 {
    background-image: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/bg/bg-image-1.jpg)
}

.bg_image--3 {
    background-image: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/bg/bg-image-3.jpg)
}

.bg_image--8 {
    background-image: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/bg/bg-image-8.jpg)
}

.font--1 {
    font-size: 1px !important
}

.font--2 {
    font-size: 2px !important
}

.font--3 {
    font-size: 3px !important
}

.font--4 {
    font-size: 4px !important
}

.font--5 {
    font-size: 5px !important
}

.font--6 {
    font-size: 6px !important
}

.font--7 {
    font-size: 7px !important
}

.font--8 {
    font-size: 8px !important
}

.font--9 {
    font-size: 9px !important
}

.font--10 {
    font-size: 10px !important
}

.font--11 {
    font-size: 11px !important
}

.font--12 {
    font-size: 12px !important
}

.font--13 {
    font-size: 13px !important
}

.font--14 {
    font-size: 14px !important
}

.font--15 {
    font-size: 15px !important
}

.font--16 {
    font-size: 16px !important
}

.font--17 {
    font-size: 17px !important
}

.font--18 {
    font-size: 18px !important
}

.font--19 {
    font-size: 19px !important
}

.font--20 {
    font-size: 20px !important
}

.font--21 {
    font-size: 21px !important
}

.font--22 {
    font-size: 22px !important
}

.font--23 {
    font-size: 23px !important
}

.font--24 {
    font-size: 24px !important
}

.font--25 {
    font-size: 25px !important
}

.font--26 {
    font-size: 26px !important
}

.font--27 {
    font-size: 27px !important
}

.font--28 {
    font-size: 28px !important
}

.font--29 {
    font-size: 29px !important
}

.font--30 {
    font-size: 30px !important
}

.font--31 {
    font-size: 31px !important
}

.font--32 {
    font-size: 32px !important
}

.font--33 {
    font-size: 33px !important
}

.font--34 {
    font-size: 34px !important
}

.font--35 {
    font-size: 35px !important
}

.font--36 {
    font-size: 36px !important
}

.font--37 {
    font-size: 37px !important
}

.font--38 {
    font-size: 38px !important
}

.font--39 {
    font-size: 39px !important
}

.font--40 {
    font-size: 40px !important
}

.font--41 {
    font-size: 41px !important
}

.font--42 {
    font-size: 42px !important
}

.font--43 {
    font-size: 43px !important
}

.font--44 {
    font-size: 44px !important
}

.font--45 {
    font-size: 45px !important
}

.font--46 {
    font-size: 46px !important
}

.font--47 {
    font-size: 47px !important
}

.font--48 {
    font-size: 48px !important
}

.font--49 {
    font-size: 49px !important
}

.font--50 {
    font-size: 50px !important
}

.font--51 {
    font-size: 51px !important
}

.font--52 {
    font-size: 52px !important
}

.font--53 {
    font-size: 53px !important
}

.font--54 {
    font-size: 54px !important
}

.font--55 {
    font-size: 55px !important
}

.font--56 {
    font-size: 56px !important
}

.font--57 {
    font-size: 57px !important
}

.font--58 {
    font-size: 58px !important
}

.font--59 {
    font-size: 59px !important
}

.font--60 {
    font-size: 60px !important
}

.font--61 {
    font-size: 61px !important
}

.font--62 {
    font-size: 62px !important
}

.font--63 {
    font-size: 63px !important
}

.font--64 {
    font-size: 64px !important
}

.font--65 {
    font-size: 65px !important
}

.font--66 {
    font-size: 66px !important
}

.font--67 {
    font-size: 67px !important
}

.font--68 {
    font-size: 68px !important
}

.font--69 {
    font-size: 69px !important
}

.font--70 {
    font-size: 70px !important
}

.font--71 {
    font-size: 71px !important
}

.font--72 {
    font-size: 72px !important
}

.font--73 {
    font-size: 73px !important
}

.font--74 {
    font-size: 74px !important
}

.font--75 {
    font-size: 75px !important
}

.font--76 {
    font-size: 76px !important
}

.font--77 {
    font-size: 77px !important
}

.font--78 {
    font-size: 78px !important
}

.font--79 {
    font-size: 79px !important
}

.font--80 {
    font-size: 80px !important
}

.text-italic {
    font-style: italic
}

.text-normal {
    font-style: normal
}

.text-underline {
    font-style: underline
}

.fullscreen {
    min-height: 100vh;
    width: 100%
}

@media only screen and (max-width: 767px) {
    .fullscreen {
        min-height:auto
    }
}

.fullscreen.empty-div {
    pointer-events: none;
    background: 0 0
}

.row--0 {
    margin-left: 0;
    margin-right: 0
}

.row--0>[class*=col] {
    padding-left: 0;
    padding-right: 0
}

.row--5 {
    margin-left: -5px;
    margin-right: -5px
}

.row--5>[class*=col] {
    padding-left: 5px;
    padding-right: 5px
}

.row--10 {
    margin-left: -10px;
    margin-right: -10px
}

.row--10>[class*=col] {
    padding-left: 10px;
    padding-right: 10px
}

.row--20 {
    margin-left: -20px;
    margin-right: -20px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .row--20 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .row--20 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .row--20 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (max-width: 767px) {
    .row--20 {
        margin-left:-15px !important;
        margin-right: -15px !important
    }
}

.row--20>[class*=col],.row--20>[class*=col-] {
    padding-left: 20px;
    padding-right: 20px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .row--20>[class*=col],.row--20>[class*=col-] {
        padding-left:15px;
        padding-right: 15px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .row--20>[class*=col],.row--20>[class*=col-] {
        padding-left:15px;
        padding-right: 15px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .row--20>[class*=col],.row--20>[class*=col-] {
        padding-left:15px !important;
        padding-right: 15px !important
    }
}

@media only screen and (max-width: 767px) {
    .row--20>[class*=col],.row--20>[class*=col-] {
        padding-left:15px !important;
        padding-right: 15px !important
    }
}

.row--25 {
    margin-left: -25px;
    margin-right: -25px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .row--25 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .row--25 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .row--25 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (max-width: 767px) {
    .row--25 {
        margin-left:-15px !important;
        margin-right: -15px !important
    }
}

.row--25>[class*=col],.row--25>[class*=col-] {
    padding-left: 25px;
    padding-right: 25px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .row--25>[class*=col],.row--25>[class*=col-] {
        padding-left:15px;
        padding-right: 15px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .row--25>[class*=col],.row--25>[class*=col-] {
        padding-left:15px;
        padding-right: 15px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .row--25>[class*=col],.row--25>[class*=col-] {
        padding-left:15px !important;
        padding-right: 15px !important
    }
}

@media only screen and (max-width: 767px) {
    .row--25>[class*=col],.row--25>[class*=col-] {
        padding-left:15px !important;
        padding-right: 15px !important
    }
}

.row--30 {
    margin-left: -30px;
    margin-right: -30px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .row--30 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .row--30 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .row--30 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (max-width: 767px) {
    .row--30 {
        margin-left:-15px !important;
        margin-right: -15px !important
    }
}

.row--30>[class*=col],.row--30>[class*=col-] {
    padding-left: 30px;
    padding-right: 30px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .row--30>[class*=col],.row--30>[class*=col-] {
        padding-left:15px;
        padding-right: 15px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .row--30>[class*=col],.row--30>[class*=col-] {
        padding-left:15px;
        padding-right: 15px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .row--30>[class*=col],.row--30>[class*=col-] {
        padding-left:15px !important;
        padding-right: 15px !important
    }
}

@media only screen and (max-width: 767px) {
    .row--30>[class*=col],.row--30>[class*=col-] {
        padding-left:15px !important;
        padding-right: 15px !important
    }
}

.row--35 {
    margin-left: -35px;
    margin-right: -35px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .row--35 {
        margin-left:-25px;
        margin-right: -25px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .row--35 {
        margin-left:-25px;
        margin-right: -25px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .row--35 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (max-width: 767px) {
    .row--35 {
        margin-left:-15px !important;
        margin-right: -15px !important
    }
}

.row--35>[class*=col],.row--35>[class*=col-] {
    padding-left: 35px;
    padding-right: 35px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .row--35>[class*=col],.row--35>[class*=col-] {
        padding-left:25px;
        padding-right: 25px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .row--35>[class*=col],.row--35>[class*=col-] {
        padding-left:25px;
        padding-right: 25px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .row--35>[class*=col],.row--35>[class*=col-] {
        padding-left:15px !important;
        padding-right: 15px !important
    }
}

@media only screen and (max-width: 767px) {
    .row--35>[class*=col],.row--35>[class*=col-] {
        padding-left:15px !important;
        padding-right: 15px !important
    }
}

.row--40 {
    margin-left: -40px;
    margin-right: -40px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .row--40 {
        margin-left:-25px;
        margin-right: -25px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .row--40 {
        margin-left:-25px;
        margin-right: -25px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .row--40 {
        margin-left:-15px;
        margin-right: -15px
    }
}

@media only screen and (max-width: 767px) {
    .row--40 {
        margin-left:-15px !important;
        margin-right: -15px !important
    }
}

.row--40>[class*=col],.row--40>[class*=col-] {
    padding-left: 40px;
    padding-right: 40px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .row--40>[class*=col],.row--40>[class*=col-] {
        padding-left:25px;
        padding-right: 25px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .row--40>[class*=col],.row--40>[class*=col-] {
        padding-left:25px;
        padding-right: 25px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .row--40>[class*=col],.row--40>[class*=col-] {
        padding-left:15px !important;
        padding-right: 15px !important
    }
}

@media only screen and (max-width: 767px) {
    .row--40>[class*=col],.row--40>[class*=col-] {
        padding-left:15px !important;
        padding-right: 15px !important
    }
}

input:-moz-placeholder,textarea:-moz-placeholder {
    opacity: 1;
    -ms-filter: "alpha(opacity=100)"
}

input::-webkit-input-placeholder,textarea::-webkit-input-placeholder {
    opacity: 1;
    -ms-filter: "alpha(opacity=100)"
}

input::-moz-placeholder,textarea::-moz-placeholder {
    opacity: 1;
    -ms-filter: "alpha(opacity=100)"
}

input:-ms-input-placeholder,textarea:-ms-input-placeholder {
    opacity: 1;
    -ms-filter: "alpha(opacity=100)"
}

[data-overlay],[data-black-overlay],[data-white-overlay] {
    position: relative;
    z-index: 1
}

[data-overlay]>div,[data-overlay]>*,[data-black-overlay]>div,[data-black-overlay]>*,[data-white-overlay]>div,[data-white-overlay]>* {
    position: relative;
    z-index: 1
}

[data-overlay]:before,[data-black-overlay]:before,[data-white-overlay]:before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    z-index: -1
}

[data-overlay]:before {
    background-color: var(--color-primary)
}

[data-black-overlay]:before {
    background-color: #00010c
}

[data-white-overlay]:before {
    background-color: #b4abab
}

[data-overlay="1"]:before,[data-black-overlay="1"]:before,[data-white-overlay="1"]:before {
    opacity: .1
}

[data-overlay="2"]:before,[data-black-overlay="2"]:before,[data-white-overlay="2"]:before {
    opacity: .2
}

[data-overlay="3"]:before,[data-black-overlay="3"]:before,[data-white-overlay="3"]:before {
    opacity: .3
}

[data-overlay="4"]:before,[data-black-overlay="4"]:before,[data-white-overlay="4"]:before {
    opacity: .4
}

[data-overlay="5"]:before,[data-black-overlay="5"]:before,[data-white-overlay="5"]:before {
    opacity: .5
}

[data-overlay="6"]:before,[data-black-overlay="6"]:before,[data-white-overlay="6"]:before {
    opacity: .6
}

[data-overlay="7"]:before,[data-black-overlay="7"]:before,[data-white-overlay="7"]:before {
    opacity: .7
}

[data-overlay="8"]:before,[data-black-overlay="8"]:before,[data-white-overlay="8"]:before {
    opacity: .8
}

[data-overlay="9"]:before,[data-black-overlay="9"]:before,[data-white-overlay="9"]:before {
    opacity: .9
}

[data-overlay="10"]:before,[data-black-overlay="10"]:before,[data-white-overlay="10"]:before {
    opacity: 1
}

#scrollUp {
    width: 50px;
    height: 50px;
    background-color: #fff;
    color: var(--color-primary);
    right: 30px;
    bottom: 60px;
    text-align: center;
    overflow: hidden;
    border-radius: 50px;
    z-index: 9811 !important;
    box-shadow: 0 0 10px 0 rgba(0,0,0,.1)
}

@media only screen and (max-width: 767px) {
    #scrollUp {
        right:20px
    }
}

#scrollUp i {
    display: block;
    line-height: 48px;
    font-size: 22px;
    font-weight: 600
}

#scrollUp:hover {
    background: var(--color-primary);
    color: var(--color-white)
}

#scrollUp:hover i {
    color: var(--color-white)
}

.form-message {
    margin-bottom: 0;
    text-align: center
}

.form-message.error {
    margin-top: 20px;
    color: #f80707
}

.form-message.success {
    margin-top: 20px;
    color: #0d8d2d
}

.thumb img,.thumbnail img {
    border-radius: 6px
}

img.react-parallax-bgimage {
    object-fit: contain
}

.page-wrapper {
    min-height: 600px
}

.rn-section-gap {
    padding: 120px 0
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-section-gap {
        padding:80px 0 !important
    }
}

@media only screen and (max-width: 767px) {
    .rn-section-gap {
        padding:80px 0 !important
    }
}

.rn-section-gapBottom {
    padding-bottom: 120px
}

@media only screen and (max-width: 767px) {
    .rn-section-gapBottom {
        padding-bottom:80px !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-section-gapBottom {
        padding-bottom:80px !important
    }
}

.rn-section-gapTop {
    padding-top: 120px
}

@media only screen and (max-width: 767px) {
    .rn-section-gapTop {
        padding-top:60px !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-section-gapTop {
        padding-top:80px !important
    }
}

.mt_dec--40 {
    margin-top: -40px !important
}

.mb_dec--30 {
    margin-bottom: -30px !important
}

.mt_dec--60 {
    margin-top: -60px !important
}

.mt_dec--30 {
    margin-top: -30px !important
}

.letterspacing--2 {
    letter-spacing: 2px !important
}

.pra {
    font-size: 18px;
    line-height: 2em
}

@media only screen and (max-width: 767px) {
    .pra {
        font-size:14px;
        line-height: 24px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .plr--120 {
        padding:0 60px !important
    }
}

@media only screen and (max-width: 767px) {
    .plr--120 {
        padding:0 30px !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .plr--120 {
        padding:0 60px !important
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .plr--120 {
        padding:0 60px !important
    }
}

@media only screen and (max-width: 767px) {
    .plr--120 {
        padding:0 30px !important
    }
}

.pl--0 {
    padding-left: 0 !important
}

.pr--0 {
    padding-right: 0 !important
}

.pt--0 {
    padding-top: 0 !important
}

.pb--0 {
    padding-bottom: 0 !important
}

.mr--0 {
    margin-right: 0 !important
}

.ml--0 {
    margin-left: 0 !important
}

.mt--0 {
    margin-top: 0 !important
}

.mb--0 {
    margin-bottom: 0 !important
}

.pt--260 {
    padding-top: 260px
}

.pt--250 {
    padding-top: 250px
}

.plr--270 {
    padding: 0 270px
}

.plr--300 {
    padding: 0 300px
}

.plr--340 {
    padding: 0 340px
}

.ptb--300 {
    padding: 300px 0
}

.ptb--340 {
    padding: 340px 0
}

.ptb--450 {
    padding: 450px 0
}

.plr_dec--15 {
    margin: 0 -15px
}

.mb-dec--30 {
    margin-bottom: -30px
}

.pt--300 {
    padding-top: 300px
}

.ptb--5 {
    padding: 5px 0 !important
}

.plr--5 {
    padding: 0 5px !important
}

.pt--5 {
    padding-top: 5px !important
}

.pb--5 {
    padding-bottom: 5px !important
}

.pl--5 {
    padding-left: 5px !important
}

.pr--5 {
    padding-right: 5px !important
}

.mt--5 {
    margin-top: 5px !important
}

.mb--5 {
    margin-bottom: 5px !important
}

.mr--5 {
    margin-right: 5px !important
}

.ml--5 {
    margin-left: 5px !important
}

.ptb--10 {
    padding: 10px 0 !important
}

.plr--10 {
    padding: 0 10px !important
}

.pt--10 {
    padding-top: 10px !important
}

.pb--10 {
    padding-bottom: 10px !important
}

.pl--10 {
    padding-left: 10px !important
}

.pr--10 {
    padding-right: 10px !important
}

.mt--10 {
    margin-top: 10px !important
}

.mb--10 {
    margin-bottom: 10px !important
}

.mr--10 {
    margin-right: 10px !important
}

.ml--10 {
    margin-left: 10px !important
}

.ptb--15 {
    padding: 15px 0 !important
}

.plr--15 {
    padding: 0 15px !important
}

.pt--15 {
    padding-top: 15px !important
}

.pb--15 {
    padding-bottom: 15px !important
}

.pl--15 {
    padding-left: 15px !important
}

.pr--15 {
    padding-right: 15px !important
}

.mt--15 {
    margin-top: 15px !important
}

.mb--15 {
    margin-bottom: 15px !important
}

.mr--15 {
    margin-right: 15px !important
}

.ml--15 {
    margin-left: 15px !important
}

.ptb--20 {
    padding: 20px 0 !important
}

.plr--20 {
    padding: 0 20px !important
}

.pt--20 {
    padding-top: 20px !important
}

.pb--20 {
    padding-bottom: 20px !important
}

.pl--20 {
    padding-left: 20px !important
}

.pr--20 {
    padding-right: 20px !important
}

.mt--20 {
    margin-top: 20px !important
}

.mb--20 {
    margin-bottom: 20px !important
}

.mr--20 {
    margin-right: 20px !important
}

.ml--20 {
    margin-left: 20px !important
}

.ptb--25 {
    padding: 25px 0 !important
}

.plr--25 {
    padding: 0 25px !important
}

.pt--25 {
    padding-top: 25px !important
}

.pb--25 {
    padding-bottom: 25px !important
}

.pl--25 {
    padding-left: 25px !important
}

.pr--25 {
    padding-right: 25px !important
}

.mt--25 {
    margin-top: 25px !important
}

.mb--25 {
    margin-bottom: 25px !important
}

.mr--25 {
    margin-right: 25px !important
}

.ml--25 {
    margin-left: 25px !important
}

.ptb--30 {
    padding: 30px 0 !important
}

.plr--30 {
    padding: 0 30px !important
}

.pt--30 {
    padding-top: 30px !important
}

.pb--30 {
    padding-bottom: 30px !important
}

.pl--30 {
    padding-left: 30px !important
}

.pr--30 {
    padding-right: 30px !important
}

.mt--30 {
    margin-top: 30px !important
}

.mb--30 {
    margin-bottom: 30px !important
}

.mr--30 {
    margin-right: 30px !important
}

.ml--30 {
    margin-left: 30px !important
}

.ptb--35 {
    padding: 35px 0 !important
}

.plr--35 {
    padding: 0 35px !important
}

.pt--35 {
    padding-top: 35px !important
}

.pb--35 {
    padding-bottom: 35px !important
}

.pl--35 {
    padding-left: 35px !important
}

.pr--35 {
    padding-right: 35px !important
}

.mt--35 {
    margin-top: 35px !important
}

.mb--35 {
    margin-bottom: 35px !important
}

.mr--35 {
    margin-right: 35px !important
}

.ml--35 {
    margin-left: 35px !important
}

.ptb--40 {
    padding: 40px 0 !important
}

.plr--40 {
    padding: 0 40px !important
}

.pt--40 {
    padding-top: 40px !important
}

.pb--40 {
    padding-bottom: 40px !important
}

.pl--40 {
    padding-left: 40px !important
}

.pr--40 {
    padding-right: 40px !important
}

.mt--40 {
    margin-top: 40px !important
}

.mb--40 {
    margin-bottom: 40px !important
}

.mr--40 {
    margin-right: 40px !important
}

.ml--40 {
    margin-left: 40px !important
}

.ptb--45 {
    padding: 45px 0 !important
}

.plr--45 {
    padding: 0 45px !important
}

.pt--45 {
    padding-top: 45px !important
}

.pb--45 {
    padding-bottom: 45px !important
}

.pl--45 {
    padding-left: 45px !important
}

.pr--45 {
    padding-right: 45px !important
}

.mt--45 {
    margin-top: 45px !important
}

.mb--45 {
    margin-bottom: 45px !important
}

.mr--45 {
    margin-right: 45px !important
}

.ml--45 {
    margin-left: 45px !important
}

.ptb--50 {
    padding: 50px 0 !important
}

.plr--50 {
    padding: 0 50px !important
}

.pt--50 {
    padding-top: 50px !important
}

.pb--50 {
    padding-bottom: 50px !important
}

.pl--50 {
    padding-left: 50px !important
}

.pr--50 {
    padding-right: 50px !important
}

.mt--50 {
    margin-top: 50px !important
}

.mb--50 {
    margin-bottom: 50px !important
}

.mr--50 {
    margin-right: 50px !important
}

.ml--50 {
    margin-left: 50px !important
}

.ptb--55 {
    padding: 55px 0 !important
}

.plr--55 {
    padding: 0 55px !important
}

.pt--55 {
    padding-top: 55px !important
}

.pb--55 {
    padding-bottom: 55px !important
}

.pl--55 {
    padding-left: 55px !important
}

.pr--55 {
    padding-right: 55px !important
}

.mt--55 {
    margin-top: 55px !important
}

.mb--55 {
    margin-bottom: 55px !important
}

.mr--55 {
    margin-right: 55px !important
}

.ml--55 {
    margin-left: 55px !important
}

.ptb--60 {
    padding: 60px 0 !important
}

.plr--60 {
    padding: 0 60px !important
}

.pt--60 {
    padding-top: 60px !important
}

.pb--60 {
    padding-bottom: 60px !important
}

.pl--60 {
    padding-left: 60px !important
}

.pr--60 {
    padding-right: 60px !important
}

.mt--60 {
    margin-top: 60px !important
}

.mb--60 {
    margin-bottom: 60px !important
}

.mr--60 {
    margin-right: 60px !important
}

.ml--60 {
    margin-left: 60px !important
}

.ptb--65 {
    padding: 65px 0 !important
}

.plr--65 {
    padding: 0 65px !important
}

.pt--65 {
    padding-top: 65px !important
}

.pb--65 {
    padding-bottom: 65px !important
}

.pl--65 {
    padding-left: 65px !important
}

.pr--65 {
    padding-right: 65px !important
}

.mt--65 {
    margin-top: 65px !important
}

.mb--65 {
    margin-bottom: 65px !important
}

.mr--65 {
    margin-right: 65px !important
}

.ml--65 {
    margin-left: 65px !important
}

.ptb--70 {
    padding: 70px 0 !important
}

.plr--70 {
    padding: 0 70px !important
}

.pt--70 {
    padding-top: 70px !important
}

.pb--70 {
    padding-bottom: 70px !important
}

.pl--70 {
    padding-left: 70px !important
}

.pr--70 {
    padding-right: 70px !important
}

.mt--70 {
    margin-top: 70px !important
}

.mb--70 {
    margin-bottom: 70px !important
}

.mr--70 {
    margin-right: 70px !important
}

.ml--70 {
    margin-left: 70px !important
}

.ptb--75 {
    padding: 75px 0 !important
}

.plr--75 {
    padding: 0 75px !important
}

.pt--75 {
    padding-top: 75px !important
}

.pb--75 {
    padding-bottom: 75px !important
}

.pl--75 {
    padding-left: 75px !important
}

.pr--75 {
    padding-right: 75px !important
}

.mt--75 {
    margin-top: 75px !important
}

.mb--75 {
    margin-bottom: 75px !important
}

.mr--75 {
    margin-right: 75px !important
}

.ml--75 {
    margin-left: 75px !important
}

.ptb--80 {
    padding: 80px 0 !important
}

.plr--80 {
    padding: 0 80px !important
}

.pt--80 {
    padding-top: 80px !important
}

.pb--80 {
    padding-bottom: 80px !important
}

.pl--80 {
    padding-left: 80px !important
}

.pr--80 {
    padding-right: 80px !important
}

.mt--80 {
    margin-top: 80px !important
}

.mb--80 {
    margin-bottom: 80px !important
}

.mr--80 {
    margin-right: 80px !important
}

.ml--80 {
    margin-left: 80px !important
}

.ptb--85 {
    padding: 85px 0 !important
}

.plr--85 {
    padding: 0 85px !important
}

.pt--85 {
    padding-top: 85px !important
}

.pb--85 {
    padding-bottom: 85px !important
}

.pl--85 {
    padding-left: 85px !important
}

.pr--85 {
    padding-right: 85px !important
}

.mt--85 {
    margin-top: 85px !important
}

.mb--85 {
    margin-bottom: 85px !important
}

.mr--85 {
    margin-right: 85px !important
}

.ml--85 {
    margin-left: 85px !important
}

.ptb--90 {
    padding: 90px 0 !important
}

.plr--90 {
    padding: 0 90px !important
}

.pt--90 {
    padding-top: 90px !important
}

.pb--90 {
    padding-bottom: 90px !important
}

.pl--90 {
    padding-left: 90px !important
}

.pr--90 {
    padding-right: 90px !important
}

.mt--90 {
    margin-top: 90px !important
}

.mb--90 {
    margin-bottom: 90px !important
}

.mr--90 {
    margin-right: 90px !important
}

.ml--90 {
    margin-left: 90px !important
}

.ptb--95 {
    padding: 95px 0 !important
}

.plr--95 {
    padding: 0 95px !important
}

.pt--95 {
    padding-top: 95px !important
}

.pb--95 {
    padding-bottom: 95px !important
}

.pl--95 {
    padding-left: 95px !important
}

.pr--95 {
    padding-right: 95px !important
}

.mt--95 {
    margin-top: 95px !important
}

.mb--95 {
    margin-bottom: 95px !important
}

.mr--95 {
    margin-right: 95px !important
}

.ml--95 {
    margin-left: 95px !important
}

.ptb--100 {
    padding: 100px 0 !important
}

.plr--100 {
    padding: 0 100px !important
}

.pt--100 {
    padding-top: 100px !important
}

.pb--100 {
    padding-bottom: 100px !important
}

.pl--100 {
    padding-left: 100px !important
}

.pr--100 {
    padding-right: 100px !important
}

.mt--100 {
    margin-top: 100px !important
}

.mb--100 {
    margin-bottom: 100px !important
}

.mr--100 {
    margin-right: 100px !important
}

.ml--100 {
    margin-left: 100px !important
}

.ptb--105 {
    padding: 105px 0 !important
}

.plr--105 {
    padding: 0 105px !important
}

.pt--105 {
    padding-top: 105px !important
}

.pb--105 {
    padding-bottom: 105px !important
}

.pl--105 {
    padding-left: 105px !important
}

.pr--105 {
    padding-right: 105px !important
}

.mt--105 {
    margin-top: 105px !important
}

.mb--105 {
    margin-bottom: 105px !important
}

.mr--105 {
    margin-right: 105px !important
}

.ml--105 {
    margin-left: 105px !important
}

.ptb--110 {
    padding: 110px 0 !important
}

.plr--110 {
    padding: 0 110px !important
}

.pt--110 {
    padding-top: 110px !important
}

.pb--110 {
    padding-bottom: 110px !important
}

.pl--110 {
    padding-left: 110px !important
}

.pr--110 {
    padding-right: 110px !important
}

.mt--110 {
    margin-top: 110px !important
}

.mb--110 {
    margin-bottom: 110px !important
}

.mr--110 {
    margin-right: 110px !important
}

.ml--110 {
    margin-left: 110px !important
}

.ptb--115 {
    padding: 115px 0 !important
}

.plr--115 {
    padding: 0 115px !important
}

.pt--115 {
    padding-top: 115px !important
}

.pb--115 {
    padding-bottom: 115px !important
}

.pl--115 {
    padding-left: 115px !important
}

.pr--115 {
    padding-right: 115px !important
}

.mt--115 {
    margin-top: 115px !important
}

.mb--115 {
    margin-bottom: 115px !important
}

.mr--115 {
    margin-right: 115px !important
}

.ml--115 {
    margin-left: 115px !important
}

.ptb--120 {
    padding: 120px 0 !important
}

.plr--120 {
    padding: 0 120px !important
}

.pt--120 {
    padding-top: 120px !important
}

.pb--120 {
    padding-bottom: 120px !important
}

.pl--120 {
    padding-left: 120px !important
}

.pr--120 {
    padding-right: 120px !important
}

.mt--120 {
    margin-top: 120px !important
}

.mb--120 {
    margin-bottom: 120px !important
}

.mr--120 {
    margin-right: 120px !important
}

.ml--120 {
    margin-left: 120px !important
}

.ptb--125 {
    padding: 125px 0 !important
}

.plr--125 {
    padding: 0 125px !important
}

.pt--125 {
    padding-top: 125px !important
}

.pb--125 {
    padding-bottom: 125px !important
}

.pl--125 {
    padding-left: 125px !important
}

.pr--125 {
    padding-right: 125px !important
}

.mt--125 {
    margin-top: 125px !important
}

.mb--125 {
    margin-bottom: 125px !important
}

.mr--125 {
    margin-right: 125px !important
}

.ml--125 {
    margin-left: 125px !important
}

.ptb--130 {
    padding: 130px 0 !important
}

.plr--130 {
    padding: 0 130px !important
}

.pt--130 {
    padding-top: 130px !important
}

.pb--130 {
    padding-bottom: 130px !important
}

.pl--130 {
    padding-left: 130px !important
}

.pr--130 {
    padding-right: 130px !important
}

.mt--130 {
    margin-top: 130px !important
}

.mb--130 {
    margin-bottom: 130px !important
}

.mr--130 {
    margin-right: 130px !important
}

.ml--130 {
    margin-left: 130px !important
}

.ptb--135 {
    padding: 135px 0 !important
}

.plr--135 {
    padding: 0 135px !important
}

.pt--135 {
    padding-top: 135px !important
}

.pb--135 {
    padding-bottom: 135px !important
}

.pl--135 {
    padding-left: 135px !important
}

.pr--135 {
    padding-right: 135px !important
}

.mt--135 {
    margin-top: 135px !important
}

.mb--135 {
    margin-bottom: 135px !important
}

.mr--135 {
    margin-right: 135px !important
}

.ml--135 {
    margin-left: 135px !important
}

.ptb--140 {
    padding: 140px 0 !important
}

.plr--140 {
    padding: 0 140px !important
}

.pt--140 {
    padding-top: 140px !important
}

.pb--140 {
    padding-bottom: 140px !important
}

.pl--140 {
    padding-left: 140px !important
}

.pr--140 {
    padding-right: 140px !important
}

.mt--140 {
    margin-top: 140px !important
}

.mb--140 {
    margin-bottom: 140px !important
}

.mr--140 {
    margin-right: 140px !important
}

.ml--140 {
    margin-left: 140px !important
}

.ptb--145 {
    padding: 145px 0 !important
}

.plr--145 {
    padding: 0 145px !important
}

.pt--145 {
    padding-top: 145px !important
}

.pb--145 {
    padding-bottom: 145px !important
}

.pl--145 {
    padding-left: 145px !important
}

.pr--145 {
    padding-right: 145px !important
}

.mt--145 {
    margin-top: 145px !important
}

.mb--145 {
    margin-bottom: 145px !important
}

.mr--145 {
    margin-right: 145px !important
}

.ml--145 {
    margin-left: 145px !important
}

.ptb--150 {
    padding: 150px 0 !important
}

.plr--150 {
    padding: 0 150px !important
}

.pt--150 {
    padding-top: 150px !important
}

.pb--150 {
    padding-bottom: 150px !important
}

.pl--150 {
    padding-left: 150px !important
}

.pr--150 {
    padding-right: 150px !important
}

.mt--150 {
    margin-top: 150px !important
}

.mb--150 {
    margin-bottom: 150px !important
}

.mr--150 {
    margin-right: 150px !important
}

.ml--150 {
    margin-left: 150px !important
}

.ptb--155 {
    padding: 155px 0 !important
}

.plr--155 {
    padding: 0 155px !important
}

.pt--155 {
    padding-top: 155px !important
}

.pb--155 {
    padding-bottom: 155px !important
}

.pl--155 {
    padding-left: 155px !important
}

.pr--155 {
    padding-right: 155px !important
}

.mt--155 {
    margin-top: 155px !important
}

.mb--155 {
    margin-bottom: 155px !important
}

.mr--155 {
    margin-right: 155px !important
}

.ml--155 {
    margin-left: 155px !important
}

.ptb--160 {
    padding: 160px 0 !important
}

.plr--160 {
    padding: 0 160px !important
}

.pt--160 {
    padding-top: 160px !important
}

.pb--160 {
    padding-bottom: 160px !important
}

.pl--160 {
    padding-left: 160px !important
}

.pr--160 {
    padding-right: 160px !important
}

.mt--160 {
    margin-top: 160px !important
}

.mb--160 {
    margin-bottom: 160px !important
}

.mr--160 {
    margin-right: 160px !important
}

.ml--160 {
    margin-left: 160px !important
}

.ptb--165 {
    padding: 165px 0 !important
}

.plr--165 {
    padding: 0 165px !important
}

.pt--165 {
    padding-top: 165px !important
}

.pb--165 {
    padding-bottom: 165px !important
}

.pl--165 {
    padding-left: 165px !important
}

.pr--165 {
    padding-right: 165px !important
}

.mt--165 {
    margin-top: 165px !important
}

.mb--165 {
    margin-bottom: 165px !important
}

.mr--165 {
    margin-right: 165px !important
}

.ml--165 {
    margin-left: 165px !important
}

.ptb--170 {
    padding: 170px 0 !important
}

.plr--170 {
    padding: 0 170px !important
}

.pt--170 {
    padding-top: 170px !important
}

.pb--170 {
    padding-bottom: 170px !important
}

.pl--170 {
    padding-left: 170px !important
}

.pr--170 {
    padding-right: 170px !important
}

.mt--170 {
    margin-top: 170px !important
}

.mb--170 {
    margin-bottom: 170px !important
}

.mr--170 {
    margin-right: 170px !important
}

.ml--170 {
    margin-left: 170px !important
}

.ptb--175 {
    padding: 175px 0 !important
}

.plr--175 {
    padding: 0 175px !important
}

.pt--175 {
    padding-top: 175px !important
}

.pb--175 {
    padding-bottom: 175px !important
}

.pl--175 {
    padding-left: 175px !important
}

.pr--175 {
    padding-right: 175px !important
}

.mt--175 {
    margin-top: 175px !important
}

.mb--175 {
    margin-bottom: 175px !important
}

.mr--175 {
    margin-right: 175px !important
}

.ml--175 {
    margin-left: 175px !important
}

.ptb--180 {
    padding: 180px 0 !important
}

.plr--180 {
    padding: 0 180px !important
}

.pt--180 {
    padding-top: 180px !important
}

.pb--180 {
    padding-bottom: 180px !important
}

.pl--180 {
    padding-left: 180px !important
}

.pr--180 {
    padding-right: 180px !important
}

.mt--180 {
    margin-top: 180px !important
}

.mb--180 {
    margin-bottom: 180px !important
}

.mr--180 {
    margin-right: 180px !important
}

.ml--180 {
    margin-left: 180px !important
}

.ptb--185 {
    padding: 185px 0 !important
}

.plr--185 {
    padding: 0 185px !important
}

.pt--185 {
    padding-top: 185px !important
}

.pb--185 {
    padding-bottom: 185px !important
}

.pl--185 {
    padding-left: 185px !important
}

.pr--185 {
    padding-right: 185px !important
}

.mt--185 {
    margin-top: 185px !important
}

.mb--185 {
    margin-bottom: 185px !important
}

.mr--185 {
    margin-right: 185px !important
}

.ml--185 {
    margin-left: 185px !important
}

.ptb--190 {
    padding: 190px 0 !important
}

.plr--190 {
    padding: 0 190px !important
}

.pt--190 {
    padding-top: 190px !important
}

.pb--190 {
    padding-bottom: 190px !important
}

.pl--190 {
    padding-left: 190px !important
}

.pr--190 {
    padding-right: 190px !important
}

.mt--190 {
    margin-top: 190px !important
}

.mb--190 {
    margin-bottom: 190px !important
}

.mr--190 {
    margin-right: 190px !important
}

.ml--190 {
    margin-left: 190px !important
}

.ptb--195 {
    padding: 195px 0 !important
}

.plr--195 {
    padding: 0 195px !important
}

.pt--195 {
    padding-top: 195px !important
}

.pb--195 {
    padding-bottom: 195px !important
}

.pl--195 {
    padding-left: 195px !important
}

.pr--195 {
    padding-right: 195px !important
}

.mt--195 {
    margin-top: 195px !important
}

.mb--195 {
    margin-bottom: 195px !important
}

.mr--195 {
    margin-right: 195px !important
}

.ml--195 {
    margin-left: 195px !important
}

.ptb--200 {
    padding: 200px 0 !important
}

.plr--200 {
    padding: 0 200px !important
}

.pt--200 {
    padding-top: 200px !important
}

.pb--200 {
    padding-bottom: 200px !important
}

.pl--200 {
    padding-left: 200px !important
}

.pr--200 {
    padding-right: 200px !important
}

.mt--200 {
    margin-top: 200px !important
}

.mb--200 {
    margin-bottom: 200px !important
}

.mr--200 {
    margin-right: 200px !important
}

.ml--200 {
    margin-left: 200px !important
}

@media only screen and (max-width: 767px) {
    .ptb--120,.ptb--80 {
        padding:60px 0 !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .ptb--120,.ptb--80 {
        padding:80px 0 !important
    }
}

@media only screen and (max-width: 767px) {
    .pt--120,.pt--140,.pt--110 {
        padding-top:60px !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .pt--120,.pt--140,.pt--110 {
        padding-top:80px !important
    }
}

@media only screen and (max-width: 767px) {
    .pb--120,.pb--110,.pb--110 {
        padding-bottom:60px !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .pb--120,.pb--110,.pb--110 {
        padding-bottom:80px !important
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .ptb_lp--5 {
        padding:5px 0
    }

    .plr_lp--5 {
        padding: 0 5px
    }

    .pt_lp--5 {
        padding-top: 5px
    }

    .pb_lp--5 {
        padding-bottom: 5px
    }

    .pl_lp--5 {
        padding-left: 5px
    }

    .pr_lp--5 {
        padding-right: 5px
    }

    .mt_lp--5 {
        margin-top: 5px
    }

    .mb_lp--5 {
        margin-bottom: 5px
    }

    .ptb_lp--10 {
        padding: 10px 0
    }

    .plr_lp--10 {
        padding: 0 10px
    }

    .pt_lp--10 {
        padding-top: 10px
    }

    .pb_lp--10 {
        padding-bottom: 10px
    }

    .pl_lp--10 {
        padding-left: 10px
    }

    .pr_lp--10 {
        padding-right: 10px
    }

    .mt_lp--10 {
        margin-top: 10px
    }

    .mb_lp--10 {
        margin-bottom: 10px
    }

    .ptb_lp--15 {
        padding: 15px 0
    }

    .plr_lp--15 {
        padding: 0 15px
    }

    .pt_lp--15 {
        padding-top: 15px
    }

    .pb_lp--15 {
        padding-bottom: 15px
    }

    .pl_lp--15 {
        padding-left: 15px
    }

    .pr_lp--15 {
        padding-right: 15px
    }

    .mt_lp--15 {
        margin-top: 15px
    }

    .mb_lp--15 {
        margin-bottom: 15px
    }

    .ptb_lp--20 {
        padding: 20px 0
    }

    .plr_lp--20 {
        padding: 0 20px
    }

    .pt_lp--20 {
        padding-top: 20px
    }

    .pb_lp--20 {
        padding-bottom: 20px
    }

    .pl_lp--20 {
        padding-left: 20px
    }

    .pr_lp--20 {
        padding-right: 20px
    }

    .mt_lp--20 {
        margin-top: 20px
    }

    .mb_lp--20 {
        margin-bottom: 20px
    }

    .ptb_lp--25 {
        padding: 25px 0
    }

    .plr_lp--25 {
        padding: 0 25px
    }

    .pt_lp--25 {
        padding-top: 25px
    }

    .pb_lp--25 {
        padding-bottom: 25px
    }

    .pl_lp--25 {
        padding-left: 25px
    }

    .pr_lp--25 {
        padding-right: 25px
    }

    .mt_lp--25 {
        margin-top: 25px
    }

    .mb_lp--25 {
        margin-bottom: 25px
    }

    .ptb_lp--30 {
        padding: 30px 0
    }

    .plr_lp--30 {
        padding: 0 30px
    }

    .pt_lp--30 {
        padding-top: 30px
    }

    .pb_lp--30 {
        padding-bottom: 30px
    }

    .pl_lp--30 {
        padding-left: 30px
    }

    .pr_lp--30 {
        padding-right: 30px
    }

    .mt_lp--30 {
        margin-top: 30px
    }

    .mb_lp--30 {
        margin-bottom: 30px
    }

    .ptb_lp--35 {
        padding: 35px 0
    }

    .plr_lp--35 {
        padding: 0 35px
    }

    .pt_lp--35 {
        padding-top: 35px
    }

    .pb_lp--35 {
        padding-bottom: 35px
    }

    .pl_lp--35 {
        padding-left: 35px
    }

    .pr_lp--35 {
        padding-right: 35px
    }

    .mt_lp--35 {
        margin-top: 35px
    }

    .mb_lp--35 {
        margin-bottom: 35px
    }

    .ptb_lp--40 {
        padding: 40px 0
    }

    .plr_lp--40 {
        padding: 0 40px
    }

    .pt_lp--40 {
        padding-top: 40px
    }

    .pb_lp--40 {
        padding-bottom: 40px
    }

    .pl_lp--40 {
        padding-left: 40px
    }

    .pr_lp--40 {
        padding-right: 40px
    }

    .mt_lp--40 {
        margin-top: 40px
    }

    .mb_lp--40 {
        margin-bottom: 40px
    }

    .ptb_lp--45 {
        padding: 45px 0
    }

    .plr_lp--45 {
        padding: 0 45px
    }

    .pt_lp--45 {
        padding-top: 45px
    }

    .pb_lp--45 {
        padding-bottom: 45px
    }

    .pl_lp--45 {
        padding-left: 45px
    }

    .pr_lp--45 {
        padding-right: 45px
    }

    .mt_lp--45 {
        margin-top: 45px
    }

    .mb_lp--45 {
        margin-bottom: 45px
    }

    .ptb_lp--50 {
        padding: 50px 0
    }

    .plr_lp--50 {
        padding: 0 50px
    }

    .pt_lp--50 {
        padding-top: 50px
    }

    .pb_lp--50 {
        padding-bottom: 50px
    }

    .pl_lp--50 {
        padding-left: 50px
    }

    .pr_lp--50 {
        padding-right: 50px
    }

    .mt_lp--50 {
        margin-top: 50px
    }

    .mb_lp--50 {
        margin-bottom: 50px
    }

    .ptb_lp--55 {
        padding: 55px 0
    }

    .plr_lp--55 {
        padding: 0 55px
    }

    .pt_lp--55 {
        padding-top: 55px
    }

    .pb_lp--55 {
        padding-bottom: 55px
    }

    .pl_lp--55 {
        padding-left: 55px
    }

    .pr_lp--55 {
        padding-right: 55px
    }

    .mt_lp--55 {
        margin-top: 55px
    }

    .mb_lp--55 {
        margin-bottom: 55px
    }

    .ptb_lp--60 {
        padding: 60px 0
    }

    .plr_lp--60 {
        padding: 0 60px
    }

    .pt_lp--60 {
        padding-top: 60px
    }

    .pb_lp--60 {
        padding-bottom: 60px
    }

    .pl_lp--60 {
        padding-left: 60px
    }

    .pr_lp--60 {
        padding-right: 60px
    }

    .mt_lp--60 {
        margin-top: 60px
    }

    .mb_lp--60 {
        margin-bottom: 60px
    }

    .ptb_lp--65 {
        padding: 65px 0
    }

    .plr_lp--65 {
        padding: 0 65px
    }

    .pt_lp--65 {
        padding-top: 65px
    }

    .pb_lp--65 {
        padding-bottom: 65px
    }

    .pl_lp--65 {
        padding-left: 65px
    }

    .pr_lp--65 {
        padding-right: 65px
    }

    .mt_lp--65 {
        margin-top: 65px
    }

    .mb_lp--65 {
        margin-bottom: 65px
    }

    .ptb_lp--70 {
        padding: 70px 0
    }

    .plr_lp--70 {
        padding: 0 70px
    }

    .pt_lp--70 {
        padding-top: 70px
    }

    .pb_lp--70 {
        padding-bottom: 70px
    }

    .pl_lp--70 {
        padding-left: 70px
    }

    .pr_lp--70 {
        padding-right: 70px
    }

    .mt_lp--70 {
        margin-top: 70px
    }

    .mb_lp--70 {
        margin-bottom: 70px
    }

    .ptb_lp--75 {
        padding: 75px 0
    }

    .plr_lp--75 {
        padding: 0 75px
    }

    .pt_lp--75 {
        padding-top: 75px
    }

    .pb_lp--75 {
        padding-bottom: 75px
    }

    .pl_lp--75 {
        padding-left: 75px
    }

    .pr_lp--75 {
        padding-right: 75px
    }

    .mt_lp--75 {
        margin-top: 75px
    }

    .mb_lp--75 {
        margin-bottom: 75px
    }

    .ptb_lp--80 {
        padding: 80px 0
    }

    .plr_lp--80 {
        padding: 0 80px
    }

    .pt_lp--80 {
        padding-top: 80px
    }

    .pb_lp--80 {
        padding-bottom: 80px
    }

    .pl_lp--80 {
        padding-left: 80px
    }

    .pr_lp--80 {
        padding-right: 80px
    }

    .mt_lp--80 {
        margin-top: 80px
    }

    .mb_lp--80 {
        margin-bottom: 80px
    }

    .ptb_lp--85 {
        padding: 85px 0
    }

    .plr_lp--85 {
        padding: 0 85px
    }

    .pt_lp--85 {
        padding-top: 85px
    }

    .pb_lp--85 {
        padding-bottom: 85px
    }

    .pl_lp--85 {
        padding-left: 85px
    }

    .pr_lp--85 {
        padding-right: 85px
    }

    .mt_lp--85 {
        margin-top: 85px
    }

    .mb_lp--85 {
        margin-bottom: 85px
    }

    .ptb_lp--90 {
        padding: 90px 0
    }

    .plr_lp--90 {
        padding: 0 90px
    }

    .pt_lp--90 {
        padding-top: 90px
    }

    .pb_lp--90 {
        padding-bottom: 90px
    }

    .pl_lp--90 {
        padding-left: 90px
    }

    .pr_lp--90 {
        padding-right: 90px
    }

    .mt_lp--90 {
        margin-top: 90px
    }

    .mb_lp--90 {
        margin-bottom: 90px
    }

    .ptb_lp--95 {
        padding: 95px 0
    }

    .plr_lp--95 {
        padding: 0 95px
    }

    .pt_lp--95 {
        padding-top: 95px
    }

    .pb_lp--95 {
        padding-bottom: 95px
    }

    .pl_lp--95 {
        padding-left: 95px
    }

    .pr_lp--95 {
        padding-right: 95px
    }

    .mt_lp--95 {
        margin-top: 95px
    }

    .mb_lp--95 {
        margin-bottom: 95px
    }

    .ptb_lp--100 {
        padding: 100px 0
    }

    .plr_lp--100 {
        padding: 0 100px
    }

    .pt_lp--100 {
        padding-top: 100px
    }

    .pb_lp--100 {
        padding-bottom: 100px
    }

    .pl_lp--100 {
        padding-left: 100px
    }

    .pr_lp--100 {
        padding-right: 100px
    }

    .mt_lp--100 {
        margin-top: 100px
    }

    .mb_lp--100 {
        margin-bottom: 100px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .ptb_lg--5 {
        padding:5px 0
    }

    .plr_lg--5 {
        padding: 0 5px
    }

    .pt_lg--5 {
        padding-top: 5px
    }

    .pb_lg--5 {
        padding-bottom: 5px
    }

    .pl_lg--5 {
        padding-left: 5px
    }

    .pr_lg--5 {
        padding-right: 5px
    }

    .mt_lg--5 {
        margin-top: 5px
    }

    .mb_lg--5 {
        margin-bottom: 5px
    }

    .ptb_lg--10 {
        padding: 10px 0
    }

    .plr_lg--10 {
        padding: 0 10px
    }

    .pt_lg--10 {
        padding-top: 10px
    }

    .pb_lg--10 {
        padding-bottom: 10px
    }

    .pl_lg--10 {
        padding-left: 10px
    }

    .pr_lg--10 {
        padding-right: 10px
    }

    .mt_lg--10 {
        margin-top: 10px
    }

    .mb_lg--10 {
        margin-bottom: 10px
    }

    .ptb_lg--15 {
        padding: 15px 0
    }

    .plr_lg--15 {
        padding: 0 15px
    }

    .pt_lg--15 {
        padding-top: 15px
    }

    .pb_lg--15 {
        padding-bottom: 15px
    }

    .pl_lg--15 {
        padding-left: 15px
    }

    .pr_lg--15 {
        padding-right: 15px
    }

    .mt_lg--15 {
        margin-top: 15px
    }

    .mb_lg--15 {
        margin-bottom: 15px
    }

    .ptb_lg--20 {
        padding: 20px 0
    }

    .plr_lg--20 {
        padding: 0 20px
    }

    .pt_lg--20 {
        padding-top: 20px
    }

    .pb_lg--20 {
        padding-bottom: 20px
    }

    .pl_lg--20 {
        padding-left: 20px
    }

    .pr_lg--20 {
        padding-right: 20px
    }

    .mt_lg--20 {
        margin-top: 20px
    }

    .mb_lg--20 {
        margin-bottom: 20px
    }

    .ptb_lg--25 {
        padding: 25px 0
    }

    .plr_lg--25 {
        padding: 0 25px
    }

    .pt_lg--25 {
        padding-top: 25px
    }

    .pb_lg--25 {
        padding-bottom: 25px
    }

    .pl_lg--25 {
        padding-left: 25px
    }

    .pr_lg--25 {
        padding-right: 25px
    }

    .mt_lg--25 {
        margin-top: 25px
    }

    .mb_lg--25 {
        margin-bottom: 25px
    }

    .ptb_lg--30 {
        padding: 30px 0
    }

    .plr_lg--30 {
        padding: 0 30px
    }

    .pt_lg--30 {
        padding-top: 30px
    }

    .pb_lg--30 {
        padding-bottom: 30px
    }

    .pl_lg--30 {
        padding-left: 30px
    }

    .pr_lg--30 {
        padding-right: 30px
    }

    .mt_lg--30 {
        margin-top: 30px
    }

    .mb_lg--30 {
        margin-bottom: 30px
    }

    .ptb_lg--35 {
        padding: 35px 0
    }

    .plr_lg--35 {
        padding: 0 35px
    }

    .pt_lg--35 {
        padding-top: 35px
    }

    .pb_lg--35 {
        padding-bottom: 35px
    }

    .pl_lg--35 {
        padding-left: 35px
    }

    .pr_lg--35 {
        padding-right: 35px
    }

    .mt_lg--35 {
        margin-top: 35px
    }

    .mb_lg--35 {
        margin-bottom: 35px
    }

    .ptb_lg--40 {
        padding: 40px 0
    }

    .plr_lg--40 {
        padding: 0 40px
    }

    .pt_lg--40 {
        padding-top: 40px
    }

    .pb_lg--40 {
        padding-bottom: 40px
    }

    .pl_lg--40 {
        padding-left: 40px
    }

    .pr_lg--40 {
        padding-right: 40px
    }

    .mt_lg--40 {
        margin-top: 40px
    }

    .mb_lg--40 {
        margin-bottom: 40px
    }

    .ptb_lg--45 {
        padding: 45px 0
    }

    .plr_lg--45 {
        padding: 0 45px
    }

    .pt_lg--45 {
        padding-top: 45px
    }

    .pb_lg--45 {
        padding-bottom: 45px
    }

    .pl_lg--45 {
        padding-left: 45px
    }

    .pr_lg--45 {
        padding-right: 45px
    }

    .mt_lg--45 {
        margin-top: 45px
    }

    .mb_lg--45 {
        margin-bottom: 45px
    }

    .ptb_lg--50 {
        padding: 50px 0
    }

    .plr_lg--50 {
        padding: 0 50px
    }

    .pt_lg--50 {
        padding-top: 50px
    }

    .pb_lg--50 {
        padding-bottom: 50px
    }

    .pl_lg--50 {
        padding-left: 50px
    }

    .pr_lg--50 {
        padding-right: 50px
    }

    .mt_lg--50 {
        margin-top: 50px
    }

    .mb_lg--50 {
        margin-bottom: 50px
    }

    .ptb_lg--55 {
        padding: 55px 0
    }

    .plr_lg--55 {
        padding: 0 55px
    }

    .pt_lg--55 {
        padding-top: 55px
    }

    .pb_lg--55 {
        padding-bottom: 55px
    }

    .pl_lg--55 {
        padding-left: 55px
    }

    .pr_lg--55 {
        padding-right: 55px
    }

    .mt_lg--55 {
        margin-top: 55px
    }

    .mb_lg--55 {
        margin-bottom: 55px
    }

    .ptb_lg--60 {
        padding: 60px 0
    }

    .plr_lg--60 {
        padding: 0 60px
    }

    .pt_lg--60 {
        padding-top: 60px
    }

    .pb_lg--60 {
        padding-bottom: 60px
    }

    .pl_lg--60 {
        padding-left: 60px
    }

    .pr_lg--60 {
        padding-right: 60px
    }

    .mt_lg--60 {
        margin-top: 60px
    }

    .mb_lg--60 {
        margin-bottom: 60px
    }

    .ptb_lg--65 {
        padding: 65px 0
    }

    .plr_lg--65 {
        padding: 0 65px
    }

    .pt_lg--65 {
        padding-top: 65px
    }

    .pb_lg--65 {
        padding-bottom: 65px
    }

    .pl_lg--65 {
        padding-left: 65px
    }

    .pr_lg--65 {
        padding-right: 65px
    }

    .mt_lg--65 {
        margin-top: 65px
    }

    .mb_lg--65 {
        margin-bottom: 65px
    }

    .ptb_lg--70 {
        padding: 70px 0
    }

    .plr_lg--70 {
        padding: 0 70px
    }

    .pt_lg--70 {
        padding-top: 70px
    }

    .pb_lg--70 {
        padding-bottom: 70px
    }

    .pl_lg--70 {
        padding-left: 70px
    }

    .pr_lg--70 {
        padding-right: 70px
    }

    .mt_lg--70 {
        margin-top: 70px
    }

    .mb_lg--70 {
        margin-bottom: 70px
    }

    .ptb_lg--75 {
        padding: 75px 0
    }

    .plr_lg--75 {
        padding: 0 75px
    }

    .pt_lg--75 {
        padding-top: 75px
    }

    .pb_lg--75 {
        padding-bottom: 75px
    }

    .pl_lg--75 {
        padding-left: 75px
    }

    .pr_lg--75 {
        padding-right: 75px
    }

    .mt_lg--75 {
        margin-top: 75px
    }

    .mb_lg--75 {
        margin-bottom: 75px
    }

    .ptb_lg--80 {
        padding: 80px 0
    }

    .plr_lg--80 {
        padding: 0 80px
    }

    .pt_lg--80 {
        padding-top: 80px
    }

    .pb_lg--80 {
        padding-bottom: 80px
    }

    .pl_lg--80 {
        padding-left: 80px
    }

    .pr_lg--80 {
        padding-right: 80px
    }

    .mt_lg--80 {
        margin-top: 80px
    }

    .mb_lg--80 {
        margin-bottom: 80px
    }

    .ptb_lg--85 {
        padding: 85px 0
    }

    .plr_lg--85 {
        padding: 0 85px
    }

    .pt_lg--85 {
        padding-top: 85px
    }

    .pb_lg--85 {
        padding-bottom: 85px
    }

    .pl_lg--85 {
        padding-left: 85px
    }

    .pr_lg--85 {
        padding-right: 85px
    }

    .mt_lg--85 {
        margin-top: 85px
    }

    .mb_lg--85 {
        margin-bottom: 85px
    }

    .ptb_lg--90 {
        padding: 90px 0
    }

    .plr_lg--90 {
        padding: 0 90px
    }

    .pt_lg--90 {
        padding-top: 90px
    }

    .pb_lg--90 {
        padding-bottom: 90px
    }

    .pl_lg--90 {
        padding-left: 90px
    }

    .pr_lg--90 {
        padding-right: 90px
    }

    .mt_lg--90 {
        margin-top: 90px
    }

    .mb_lg--90 {
        margin-bottom: 90px
    }

    .ptb_lg--95 {
        padding: 95px 0
    }

    .plr_lg--95 {
        padding: 0 95px
    }

    .pt_lg--95 {
        padding-top: 95px
    }

    .pb_lg--95 {
        padding-bottom: 95px
    }

    .pl_lg--95 {
        padding-left: 95px
    }

    .pr_lg--95 {
        padding-right: 95px
    }

    .mt_lg--95 {
        margin-top: 95px
    }

    .mb_lg--95 {
        margin-bottom: 95px
    }

    .ptb_lg--100 {
        padding: 100px 0
    }

    .plr_lg--100 {
        padding: 0 100px
    }

    .pt_lg--100 {
        padding-top: 100px
    }

    .pb_lg--100 {
        padding-bottom: 100px
    }

    .pl_lg--100 {
        padding-left: 100px
    }

    .pr_lg--100 {
        padding-right: 100px
    }

    .mt_lg--100 {
        margin-top: 100px
    }

    .mb_lg--100 {
        margin-bottom: 100px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .ptb_md--0 {
        padding:0
    }

    .pl_md--0 {
        padding-left: 0
    }

    .pr_md--0 {
        padding-right: 0
    }

    .pt_md--0 {
        padding-top: 0
    }

    .pb_md--0 {
        padding-bottom: 0
    }

    .mr_md--0 {
        margin-right: 0
    }

    .ml_md--0 {
        margin-left: 0
    }

    .mt_md--0 {
        margin-top: 0
    }

    .mb_md--0 {
        margin-bottom: 0
    }

    .ptb_md--250 {
        padding: 250px 0
    }

    .ptb_md--5 {
        padding: 5px 0 !important
    }

    .plr_md--5 {
        padding: 0 5px !important
    }

    .pt_md--5 {
        padding-top: 5px !important
    }

    .pb_md--5 {
        padding-bottom: 5px !important
    }

    .pl_md--5 {
        padding-left: 5px !important
    }

    .pr_md--5 {
        padding-right: 5px !important
    }

    .mt_md--5 {
        margin-top: 5px !important
    }

    .ml_md--5 {
        margin-left: 5px !important
    }

    .mb_md--5 {
        margin-bottom: 5px !important
    }

    .ptb_md--10 {
        padding: 10px 0 !important
    }

    .plr_md--10 {
        padding: 0 10px !important
    }

    .pt_md--10 {
        padding-top: 10px !important
    }

    .pb_md--10 {
        padding-bottom: 10px !important
    }

    .pl_md--10 {
        padding-left: 10px !important
    }

    .pr_md--10 {
        padding-right: 10px !important
    }

    .mt_md--10 {
        margin-top: 10px !important
    }

    .ml_md--10 {
        margin-left: 10px !important
    }

    .mb_md--10 {
        margin-bottom: 10px !important
    }

    .ptb_md--15 {
        padding: 15px 0 !important
    }

    .plr_md--15 {
        padding: 0 15px !important
    }

    .pt_md--15 {
        padding-top: 15px !important
    }

    .pb_md--15 {
        padding-bottom: 15px !important
    }

    .pl_md--15 {
        padding-left: 15px !important
    }

    .pr_md--15 {
        padding-right: 15px !important
    }

    .mt_md--15 {
        margin-top: 15px !important
    }

    .ml_md--15 {
        margin-left: 15px !important
    }

    .mb_md--15 {
        margin-bottom: 15px !important
    }

    .ptb_md--20 {
        padding: 20px 0 !important
    }

    .plr_md--20 {
        padding: 0 20px !important
    }

    .pt_md--20 {
        padding-top: 20px !important
    }

    .pb_md--20 {
        padding-bottom: 20px !important
    }

    .pl_md--20 {
        padding-left: 20px !important
    }

    .pr_md--20 {
        padding-right: 20px !important
    }

    .mt_md--20 {
        margin-top: 20px !important
    }

    .ml_md--20 {
        margin-left: 20px !important
    }

    .mb_md--20 {
        margin-bottom: 20px !important
    }

    .ptb_md--25 {
        padding: 25px 0 !important
    }

    .plr_md--25 {
        padding: 0 25px !important
    }

    .pt_md--25 {
        padding-top: 25px !important
    }

    .pb_md--25 {
        padding-bottom: 25px !important
    }

    .pl_md--25 {
        padding-left: 25px !important
    }

    .pr_md--25 {
        padding-right: 25px !important
    }

    .mt_md--25 {
        margin-top: 25px !important
    }

    .ml_md--25 {
        margin-left: 25px !important
    }

    .mb_md--25 {
        margin-bottom: 25px !important
    }

    .ptb_md--30 {
        padding: 30px 0 !important
    }

    .plr_md--30 {
        padding: 0 30px !important
    }

    .pt_md--30 {
        padding-top: 30px !important
    }

    .pb_md--30 {
        padding-bottom: 30px !important
    }

    .pl_md--30 {
        padding-left: 30px !important
    }

    .pr_md--30 {
        padding-right: 30px !important
    }

    .mt_md--30 {
        margin-top: 30px !important
    }

    .ml_md--30 {
        margin-left: 30px !important
    }

    .mb_md--30 {
        margin-bottom: 30px !important
    }

    .ptb_md--35 {
        padding: 35px 0 !important
    }

    .plr_md--35 {
        padding: 0 35px !important
    }

    .pt_md--35 {
        padding-top: 35px !important
    }

    .pb_md--35 {
        padding-bottom: 35px !important
    }

    .pl_md--35 {
        padding-left: 35px !important
    }

    .pr_md--35 {
        padding-right: 35px !important
    }

    .mt_md--35 {
        margin-top: 35px !important
    }

    .ml_md--35 {
        margin-left: 35px !important
    }

    .mb_md--35 {
        margin-bottom: 35px !important
    }

    .ptb_md--40 {
        padding: 40px 0 !important
    }

    .plr_md--40 {
        padding: 0 40px !important
    }

    .pt_md--40 {
        padding-top: 40px !important
    }

    .pb_md--40 {
        padding-bottom: 40px !important
    }

    .pl_md--40 {
        padding-left: 40px !important
    }

    .pr_md--40 {
        padding-right: 40px !important
    }

    .mt_md--40 {
        margin-top: 40px !important
    }

    .ml_md--40 {
        margin-left: 40px !important
    }

    .mb_md--40 {
        margin-bottom: 40px !important
    }

    .ptb_md--45 {
        padding: 45px 0 !important
    }

    .plr_md--45 {
        padding: 0 45px !important
    }

    .pt_md--45 {
        padding-top: 45px !important
    }

    .pb_md--45 {
        padding-bottom: 45px !important
    }

    .pl_md--45 {
        padding-left: 45px !important
    }

    .pr_md--45 {
        padding-right: 45px !important
    }

    .mt_md--45 {
        margin-top: 45px !important
    }

    .ml_md--45 {
        margin-left: 45px !important
    }

    .mb_md--45 {
        margin-bottom: 45px !important
    }

    .ptb_md--50 {
        padding: 50px 0 !important
    }

    .plr_md--50 {
        padding: 0 50px !important
    }

    .pt_md--50 {
        padding-top: 50px !important
    }

    .pb_md--50 {
        padding-bottom: 50px !important
    }

    .pl_md--50 {
        padding-left: 50px !important
    }

    .pr_md--50 {
        padding-right: 50px !important
    }

    .mt_md--50 {
        margin-top: 50px !important
    }

    .ml_md--50 {
        margin-left: 50px !important
    }

    .mb_md--50 {
        margin-bottom: 50px !important
    }

    .ptb_md--55 {
        padding: 55px 0 !important
    }

    .plr_md--55 {
        padding: 0 55px !important
    }

    .pt_md--55 {
        padding-top: 55px !important
    }

    .pb_md--55 {
        padding-bottom: 55px !important
    }

    .pl_md--55 {
        padding-left: 55px !important
    }

    .pr_md--55 {
        padding-right: 55px !important
    }

    .mt_md--55 {
        margin-top: 55px !important
    }

    .ml_md--55 {
        margin-left: 55px !important
    }

    .mb_md--55 {
        margin-bottom: 55px !important
    }

    .ptb_md--60 {
        padding: 60px 0 !important
    }

    .plr_md--60 {
        padding: 0 60px !important
    }

    .pt_md--60 {
        padding-top: 60px !important
    }

    .pb_md--60 {
        padding-bottom: 60px !important
    }

    .pl_md--60 {
        padding-left: 60px !important
    }

    .pr_md--60 {
        padding-right: 60px !important
    }

    .mt_md--60 {
        margin-top: 60px !important
    }

    .ml_md--60 {
        margin-left: 60px !important
    }

    .mb_md--60 {
        margin-bottom: 60px !important
    }

    .ptb_md--65 {
        padding: 65px 0 !important
    }

    .plr_md--65 {
        padding: 0 65px !important
    }

    .pt_md--65 {
        padding-top: 65px !important
    }

    .pb_md--65 {
        padding-bottom: 65px !important
    }

    .pl_md--65 {
        padding-left: 65px !important
    }

    .pr_md--65 {
        padding-right: 65px !important
    }

    .mt_md--65 {
        margin-top: 65px !important
    }

    .ml_md--65 {
        margin-left: 65px !important
    }

    .mb_md--65 {
        margin-bottom: 65px !important
    }

    .ptb_md--70 {
        padding: 70px 0 !important
    }

    .plr_md--70 {
        padding: 0 70px !important
    }

    .pt_md--70 {
        padding-top: 70px !important
    }

    .pb_md--70 {
        padding-bottom: 70px !important
    }

    .pl_md--70 {
        padding-left: 70px !important
    }

    .pr_md--70 {
        padding-right: 70px !important
    }

    .mt_md--70 {
        margin-top: 70px !important
    }

    .ml_md--70 {
        margin-left: 70px !important
    }

    .mb_md--70 {
        margin-bottom: 70px !important
    }

    .ptb_md--75 {
        padding: 75px 0 !important
    }

    .plr_md--75 {
        padding: 0 75px !important
    }

    .pt_md--75 {
        padding-top: 75px !important
    }

    .pb_md--75 {
        padding-bottom: 75px !important
    }

    .pl_md--75 {
        padding-left: 75px !important
    }

    .pr_md--75 {
        padding-right: 75px !important
    }

    .mt_md--75 {
        margin-top: 75px !important
    }

    .ml_md--75 {
        margin-left: 75px !important
    }

    .mb_md--75 {
        margin-bottom: 75px !important
    }

    .ptb_md--80 {
        padding: 80px 0 !important
    }

    .plr_md--80 {
        padding: 0 80px !important
    }

    .pt_md--80 {
        padding-top: 80px !important
    }

    .pb_md--80 {
        padding-bottom: 80px !important
    }

    .pl_md--80 {
        padding-left: 80px !important
    }

    .pr_md--80 {
        padding-right: 80px !important
    }

    .mt_md--80 {
        margin-top: 80px !important
    }

    .ml_md--80 {
        margin-left: 80px !important
    }

    .mb_md--80 {
        margin-bottom: 80px !important
    }

    .ptb_md--85 {
        padding: 85px 0 !important
    }

    .plr_md--85 {
        padding: 0 85px !important
    }

    .pt_md--85 {
        padding-top: 85px !important
    }

    .pb_md--85 {
        padding-bottom: 85px !important
    }

    .pl_md--85 {
        padding-left: 85px !important
    }

    .pr_md--85 {
        padding-right: 85px !important
    }

    .mt_md--85 {
        margin-top: 85px !important
    }

    .ml_md--85 {
        margin-left: 85px !important
    }

    .mb_md--85 {
        margin-bottom: 85px !important
    }

    .ptb_md--90 {
        padding: 90px 0 !important
    }

    .plr_md--90 {
        padding: 0 90px !important
    }

    .pt_md--90 {
        padding-top: 90px !important
    }

    .pb_md--90 {
        padding-bottom: 90px !important
    }

    .pl_md--90 {
        padding-left: 90px !important
    }

    .pr_md--90 {
        padding-right: 90px !important
    }

    .mt_md--90 {
        margin-top: 90px !important
    }

    .ml_md--90 {
        margin-left: 90px !important
    }

    .mb_md--90 {
        margin-bottom: 90px !important
    }

    .ptb_md--95 {
        padding: 95px 0 !important
    }

    .plr_md--95 {
        padding: 0 95px !important
    }

    .pt_md--95 {
        padding-top: 95px !important
    }

    .pb_md--95 {
        padding-bottom: 95px !important
    }

    .pl_md--95 {
        padding-left: 95px !important
    }

    .pr_md--95 {
        padding-right: 95px !important
    }

    .mt_md--95 {
        margin-top: 95px !important
    }

    .ml_md--95 {
        margin-left: 95px !important
    }

    .mb_md--95 {
        margin-bottom: 95px !important
    }

    .ptb_md--100 {
        padding: 100px 0 !important
    }

    .plr_md--100 {
        padding: 0 100px !important
    }

    .pt_md--100 {
        padding-top: 100px !important
    }

    .pb_md--100 {
        padding-bottom: 100px !important
    }

    .pl_md--100 {
        padding-left: 100px !important
    }

    .pr_md--100 {
        padding-right: 100px !important
    }

    .mt_md--100 {
        margin-top: 100px !important
    }

    .ml_md--100 {
        margin-left: 100px !important
    }

    .mb_md--100 {
        margin-bottom: 100px !important
    }
}

@media only screen and (max-width: 767px) {
    .ptb_sm--250 {
        padding:250px 0 !important
    }

    .ptb_sm--0 {
        padding: 0 !important
    }

    .pl_sm--0 {
        padding-left: 0 !important
    }

    .pr_sm--0 {
        padding-right: 0 !important
    }

    .pt_sm--0 {
        padding-top: 0 !important
    }

    .pb_sm--0 {
        padding-bottom: 0 !important
    }

    .mr_sm--0 {
        margin-right: 0 !important
    }

    .ml_sm--0 {
        margin-left: 0 !important
    }

    .mt_sm--0 {
        margin-top: 0 !important
    }

    .mb_sm--0 {
        margin-bottom: 0 !important
    }

    .ptb_sm--5 {
        padding: 5px 0 !important
    }

    .plr_sm--5 {
        padding: 0 5px !important
    }

    .pt_sm--5 {
        padding-top: 5px !important
    }

    .pb_sm--5 {
        padding-bottom: 5px !important
    }

    .pl_sm--5 {
        padding-left: 5px !important
    }

    .pr_sm--5 {
        padding-right: 5px !important
    }

    .mt_sm--5 {
        margin-top: 5px !important
    }

    .ml_sm--5 {
        margin-left: 5px !important
    }

    .mb_sm--5 {
        margin-bottom: 5px !important
    }

    .ptb_sm--10 {
        padding: 10px 0 !important
    }

    .plr_sm--10 {
        padding: 0 10px !important
    }

    .pt_sm--10 {
        padding-top: 10px !important
    }

    .pb_sm--10 {
        padding-bottom: 10px !important
    }

    .pl_sm--10 {
        padding-left: 10px !important
    }

    .pr_sm--10 {
        padding-right: 10px !important
    }

    .mt_sm--10 {
        margin-top: 10px !important
    }

    .ml_sm--10 {
        margin-left: 10px !important
    }

    .mb_sm--10 {
        margin-bottom: 10px !important
    }

    .ptb_sm--15 {
        padding: 15px 0 !important
    }

    .plr_sm--15 {
        padding: 0 15px !important
    }

    .pt_sm--15 {
        padding-top: 15px !important
    }

    .pb_sm--15 {
        padding-bottom: 15px !important
    }

    .pl_sm--15 {
        padding-left: 15px !important
    }

    .pr_sm--15 {
        padding-right: 15px !important
    }

    .mt_sm--15 {
        margin-top: 15px !important
    }

    .ml_sm--15 {
        margin-left: 15px !important
    }

    .mb_sm--15 {
        margin-bottom: 15px !important
    }

    .ptb_sm--20 {
        padding: 20px 0 !important
    }

    .plr_sm--20 {
        padding: 0 20px !important
    }

    .pt_sm--20 {
        padding-top: 20px !important
    }

    .pb_sm--20 {
        padding-bottom: 20px !important
    }

    .pl_sm--20 {
        padding-left: 20px !important
    }

    .pr_sm--20 {
        padding-right: 20px !important
    }

    .mt_sm--20 {
        margin-top: 20px !important
    }

    .ml_sm--20 {
        margin-left: 20px !important
    }

    .mb_sm--20 {
        margin-bottom: 20px !important
    }

    .ptb_sm--25 {
        padding: 25px 0 !important
    }

    .plr_sm--25 {
        padding: 0 25px !important
    }

    .pt_sm--25 {
        padding-top: 25px !important
    }

    .pb_sm--25 {
        padding-bottom: 25px !important
    }

    .pl_sm--25 {
        padding-left: 25px !important
    }

    .pr_sm--25 {
        padding-right: 25px !important
    }

    .mt_sm--25 {
        margin-top: 25px !important
    }

    .ml_sm--25 {
        margin-left: 25px !important
    }

    .mb_sm--25 {
        margin-bottom: 25px !important
    }

    .ptb_sm--30 {
        padding: 30px 0 !important
    }

    .plr_sm--30 {
        padding: 0 30px !important
    }

    .pt_sm--30 {
        padding-top: 30px !important
    }

    .pb_sm--30 {
        padding-bottom: 30px !important
    }

    .pl_sm--30 {
        padding-left: 30px !important
    }

    .pr_sm--30 {
        padding-right: 30px !important
    }

    .mt_sm--30 {
        margin-top: 30px !important
    }

    .ml_sm--30 {
        margin-left: 30px !important
    }

    .mb_sm--30 {
        margin-bottom: 30px !important
    }

    .ptb_sm--35 {
        padding: 35px 0 !important
    }

    .plr_sm--35 {
        padding: 0 35px !important
    }

    .pt_sm--35 {
        padding-top: 35px !important
    }

    .pb_sm--35 {
        padding-bottom: 35px !important
    }

    .pl_sm--35 {
        padding-left: 35px !important
    }

    .pr_sm--35 {
        padding-right: 35px !important
    }

    .mt_sm--35 {
        margin-top: 35px !important
    }

    .ml_sm--35 {
        margin-left: 35px !important
    }

    .mb_sm--35 {
        margin-bottom: 35px !important
    }

    .ptb_sm--40 {
        padding: 40px 0 !important
    }

    .plr_sm--40 {
        padding: 0 40px !important
    }

    .pt_sm--40 {
        padding-top: 40px !important
    }

    .pb_sm--40 {
        padding-bottom: 40px !important
    }

    .pl_sm--40 {
        padding-left: 40px !important
    }

    .pr_sm--40 {
        padding-right: 40px !important
    }

    .mt_sm--40 {
        margin-top: 40px !important
    }

    .ml_sm--40 {
        margin-left: 40px !important
    }

    .mb_sm--40 {
        margin-bottom: 40px !important
    }

    .ptb_sm--45 {
        padding: 45px 0 !important
    }

    .plr_sm--45 {
        padding: 0 45px !important
    }

    .pt_sm--45 {
        padding-top: 45px !important
    }

    .pb_sm--45 {
        padding-bottom: 45px !important
    }

    .pl_sm--45 {
        padding-left: 45px !important
    }

    .pr_sm--45 {
        padding-right: 45px !important
    }

    .mt_sm--45 {
        margin-top: 45px !important
    }

    .ml_sm--45 {
        margin-left: 45px !important
    }

    .mb_sm--45 {
        margin-bottom: 45px !important
    }

    .ptb_sm--50 {
        padding: 50px 0 !important
    }

    .plr_sm--50 {
        padding: 0 50px !important
    }

    .pt_sm--50 {
        padding-top: 50px !important
    }

    .pb_sm--50 {
        padding-bottom: 50px !important
    }

    .pl_sm--50 {
        padding-left: 50px !important
    }

    .pr_sm--50 {
        padding-right: 50px !important
    }

    .mt_sm--50 {
        margin-top: 50px !important
    }

    .ml_sm--50 {
        margin-left: 50px !important
    }

    .mb_sm--50 {
        margin-bottom: 50px !important
    }

    .ptb_sm--55 {
        padding: 55px 0 !important
    }

    .plr_sm--55 {
        padding: 0 55px !important
    }

    .pt_sm--55 {
        padding-top: 55px !important
    }

    .pb_sm--55 {
        padding-bottom: 55px !important
    }

    .pl_sm--55 {
        padding-left: 55px !important
    }

    .pr_sm--55 {
        padding-right: 55px !important
    }

    .mt_sm--55 {
        margin-top: 55px !important
    }

    .ml_sm--55 {
        margin-left: 55px !important
    }

    .mb_sm--55 {
        margin-bottom: 55px !important
    }

    .ptb_sm--60 {
        padding: 60px 0 !important
    }

    .plr_sm--60 {
        padding: 0 60px !important
    }

    .pt_sm--60 {
        padding-top: 60px !important
    }

    .pb_sm--60 {
        padding-bottom: 60px !important
    }

    .pl_sm--60 {
        padding-left: 60px !important
    }

    .pr_sm--60 {
        padding-right: 60px !important
    }

    .mt_sm--60 {
        margin-top: 60px !important
    }

    .ml_sm--60 {
        margin-left: 60px !important
    }

    .mb_sm--60 {
        margin-bottom: 60px !important
    }

    .ptb_sm--65 {
        padding: 65px 0 !important
    }

    .plr_sm--65 {
        padding: 0 65px !important
    }

    .pt_sm--65 {
        padding-top: 65px !important
    }

    .pb_sm--65 {
        padding-bottom: 65px !important
    }

    .pl_sm--65 {
        padding-left: 65px !important
    }

    .pr_sm--65 {
        padding-right: 65px !important
    }

    .mt_sm--65 {
        margin-top: 65px !important
    }

    .ml_sm--65 {
        margin-left: 65px !important
    }

    .mb_sm--65 {
        margin-bottom: 65px !important
    }

    .ptb_sm--70 {
        padding: 70px 0 !important
    }

    .plr_sm--70 {
        padding: 0 70px !important
    }

    .pt_sm--70 {
        padding-top: 70px !important
    }

    .pb_sm--70 {
        padding-bottom: 70px !important
    }

    .pl_sm--70 {
        padding-left: 70px !important
    }

    .pr_sm--70 {
        padding-right: 70px !important
    }

    .mt_sm--70 {
        margin-top: 70px !important
    }

    .ml_sm--70 {
        margin-left: 70px !important
    }

    .mb_sm--70 {
        margin-bottom: 70px !important
    }

    .ptb_sm--75 {
        padding: 75px 0 !important
    }

    .plr_sm--75 {
        padding: 0 75px !important
    }

    .pt_sm--75 {
        padding-top: 75px !important
    }

    .pb_sm--75 {
        padding-bottom: 75px !important
    }

    .pl_sm--75 {
        padding-left: 75px !important
    }

    .pr_sm--75 {
        padding-right: 75px !important
    }

    .mt_sm--75 {
        margin-top: 75px !important
    }

    .ml_sm--75 {
        margin-left: 75px !important
    }

    .mb_sm--75 {
        margin-bottom: 75px !important
    }

    .ptb_sm--80 {
        padding: 80px 0 !important
    }

    .plr_sm--80 {
        padding: 0 80px !important
    }

    .pt_sm--80 {
        padding-top: 80px !important
    }

    .pb_sm--80 {
        padding-bottom: 80px !important
    }

    .pl_sm--80 {
        padding-left: 80px !important
    }

    .pr_sm--80 {
        padding-right: 80px !important
    }

    .mt_sm--80 {
        margin-top: 80px !important
    }

    .ml_sm--80 {
        margin-left: 80px !important
    }

    .mb_sm--80 {
        margin-bottom: 80px !important
    }

    .ptb_sm--85 {
        padding: 85px 0 !important
    }

    .plr_sm--85 {
        padding: 0 85px !important
    }

    .pt_sm--85 {
        padding-top: 85px !important
    }

    .pb_sm--85 {
        padding-bottom: 85px !important
    }

    .pl_sm--85 {
        padding-left: 85px !important
    }

    .pr_sm--85 {
        padding-right: 85px !important
    }

    .mt_sm--85 {
        margin-top: 85px !important
    }

    .ml_sm--85 {
        margin-left: 85px !important
    }

    .mb_sm--85 {
        margin-bottom: 85px !important
    }

    .ptb_sm--90 {
        padding: 90px 0 !important
    }

    .plr_sm--90 {
        padding: 0 90px !important
    }

    .pt_sm--90 {
        padding-top: 90px !important
    }

    .pb_sm--90 {
        padding-bottom: 90px !important
    }

    .pl_sm--90 {
        padding-left: 90px !important
    }

    .pr_sm--90 {
        padding-right: 90px !important
    }

    .mt_sm--90 {
        margin-top: 90px !important
    }

    .ml_sm--90 {
        margin-left: 90px !important
    }

    .mb_sm--90 {
        margin-bottom: 90px !important
    }

    .ptb_sm--95 {
        padding: 95px 0 !important
    }

    .plr_sm--95 {
        padding: 0 95px !important
    }

    .pt_sm--95 {
        padding-top: 95px !important
    }

    .pb_sm--95 {
        padding-bottom: 95px !important
    }

    .pl_sm--95 {
        padding-left: 95px !important
    }

    .pr_sm--95 {
        padding-right: 95px !important
    }

    .mt_sm--95 {
        margin-top: 95px !important
    }

    .ml_sm--95 {
        margin-left: 95px !important
    }

    .mb_sm--95 {
        margin-bottom: 95px !important
    }

    .ptb_sm--100 {
        padding: 100px 0 !important
    }

    .plr_sm--100 {
        padding: 0 100px !important
    }

    .pt_sm--100 {
        padding-top: 100px !important
    }

    .pb_sm--100 {
        padding-bottom: 100px !important
    }

    .pl_sm--100 {
        padding-left: 100px !important
    }

    .pr_sm--100 {
        padding-right: 100px !important
    }

    .mt_sm--100 {
        margin-top: 100px !important
    }

    .ml_sm--100 {
        margin-left: 100px !important
    }

    .mb_sm--100 {
        margin-bottom: 100px !important
    }

    .pl_sm--0 {
        padding-left: 0
    }

    .pr_sm--0 {
        padding-right: 0
    }

    .pt_sm--0 {
        padding-top: 0
    }

    .pb_sm--0 {
        padding-bottom: 0
    }

    .mr_sm--0 {
        margin-right: 0
    }

    .ml_sm--0 {
        margin-left: 0
    }

    .mt_sm--0 {
        margin-top: 0
    }

    .mb_sm--0 {
        margin-bottom: 0
    }
}

@media only screen and (max-width: 575px) {
    .ptb_mobile--5 {
        padding:5px 0 !important
    }

    .plr_mobile--5 {
        padding: 0 5px !important
    }

    .pt_mobile--5 {
        padding-top: 5px !important
    }

    .pb_mobile--5 {
        padding-bottom: 5px !important
    }

    .pl_mobile--5 {
        padding-left: 5px !important
    }

    .pr_mobile--5 {
        padding-right: 5px !important
    }

    .mt_mobile--5 {
        margin-top: 5px !important
    }

    .mb_mobile--5 {
        margin-bottom: 5px !important
    }

    .ptb_mobile--10 {
        padding: 10px 0 !important
    }

    .plr_mobile--10 {
        padding: 0 10px !important
    }

    .pt_mobile--10 {
        padding-top: 10px !important
    }

    .pb_mobile--10 {
        padding-bottom: 10px !important
    }

    .pl_mobile--10 {
        padding-left: 10px !important
    }

    .pr_mobile--10 {
        padding-right: 10px !important
    }

    .mt_mobile--10 {
        margin-top: 10px !important
    }

    .mb_mobile--10 {
        margin-bottom: 10px !important
    }

    .ptb_mobile--15 {
        padding: 15px 0 !important
    }

    .plr_mobile--15 {
        padding: 0 15px !important
    }

    .pt_mobile--15 {
        padding-top: 15px !important
    }

    .pb_mobile--15 {
        padding-bottom: 15px !important
    }

    .pl_mobile--15 {
        padding-left: 15px !important
    }

    .pr_mobile--15 {
        padding-right: 15px !important
    }

    .mt_mobile--15 {
        margin-top: 15px !important
    }

    .mb_mobile--15 {
        margin-bottom: 15px !important
    }

    .ptb_mobile--20 {
        padding: 20px 0 !important
    }

    .plr_mobile--20 {
        padding: 0 20px !important
    }

    .pt_mobile--20 {
        padding-top: 20px !important
    }

    .pb_mobile--20 {
        padding-bottom: 20px !important
    }

    .pl_mobile--20 {
        padding-left: 20px !important
    }

    .pr_mobile--20 {
        padding-right: 20px !important
    }

    .mt_mobile--20 {
        margin-top: 20px !important
    }

    .mb_mobile--20 {
        margin-bottom: 20px !important
    }

    .ptb_mobile--25 {
        padding: 25px 0 !important
    }

    .plr_mobile--25 {
        padding: 0 25px !important
    }

    .pt_mobile--25 {
        padding-top: 25px !important
    }

    .pb_mobile--25 {
        padding-bottom: 25px !important
    }

    .pl_mobile--25 {
        padding-left: 25px !important
    }

    .pr_mobile--25 {
        padding-right: 25px !important
    }

    .mt_mobile--25 {
        margin-top: 25px !important
    }

    .mb_mobile--25 {
        margin-bottom: 25px !important
    }

    .ptb_mobile--30 {
        padding: 30px 0 !important
    }

    .plr_mobile--30 {
        padding: 0 30px !important
    }

    .pt_mobile--30 {
        padding-top: 30px !important
    }

    .pb_mobile--30 {
        padding-bottom: 30px !important
    }

    .pl_mobile--30 {
        padding-left: 30px !important
    }

    .pr_mobile--30 {
        padding-right: 30px !important
    }

    .mt_mobile--30 {
        margin-top: 30px !important
    }

    .mb_mobile--30 {
        margin-bottom: 30px !important
    }

    .ptb_mobile--35 {
        padding: 35px 0 !important
    }

    .plr_mobile--35 {
        padding: 0 35px !important
    }

    .pt_mobile--35 {
        padding-top: 35px !important
    }

    .pb_mobile--35 {
        padding-bottom: 35px !important
    }

    .pl_mobile--35 {
        padding-left: 35px !important
    }

    .pr_mobile--35 {
        padding-right: 35px !important
    }

    .mt_mobile--35 {
        margin-top: 35px !important
    }

    .mb_mobile--35 {
        margin-bottom: 35px !important
    }

    .ptb_mobile--40 {
        padding: 40px 0 !important
    }

    .plr_mobile--40 {
        padding: 0 40px !important
    }

    .pt_mobile--40 {
        padding-top: 40px !important
    }

    .pb_mobile--40 {
        padding-bottom: 40px !important
    }

    .pl_mobile--40 {
        padding-left: 40px !important
    }

    .pr_mobile--40 {
        padding-right: 40px !important
    }

    .mt_mobile--40 {
        margin-top: 40px !important
    }

    .mb_mobile--40 {
        margin-bottom: 40px !important
    }

    .ptb_mobile--45 {
        padding: 45px 0 !important
    }

    .plr_mobile--45 {
        padding: 0 45px !important
    }

    .pt_mobile--45 {
        padding-top: 45px !important
    }

    .pb_mobile--45 {
        padding-bottom: 45px !important
    }

    .pl_mobile--45 {
        padding-left: 45px !important
    }

    .pr_mobile--45 {
        padding-right: 45px !important
    }

    .mt_mobile--45 {
        margin-top: 45px !important
    }

    .mb_mobile--45 {
        margin-bottom: 45px !important
    }

    .ptb_mobile--50 {
        padding: 50px 0 !important
    }

    .plr_mobile--50 {
        padding: 0 50px !important
    }

    .pt_mobile--50 {
        padding-top: 50px !important
    }

    .pb_mobile--50 {
        padding-bottom: 50px !important
    }

    .pl_mobile--50 {
        padding-left: 50px !important
    }

    .pr_mobile--50 {
        padding-right: 50px !important
    }

    .mt_mobile--50 {
        margin-top: 50px !important
    }

    .mb_mobile--50 {
        margin-bottom: 50px !important
    }

    .ptb_mobile--55 {
        padding: 55px 0 !important
    }

    .plr_mobile--55 {
        padding: 0 55px !important
    }

    .pt_mobile--55 {
        padding-top: 55px !important
    }

    .pb_mobile--55 {
        padding-bottom: 55px !important
    }

    .pl_mobile--55 {
        padding-left: 55px !important
    }

    .pr_mobile--55 {
        padding-right: 55px !important
    }

    .mt_mobile--55 {
        margin-top: 55px !important
    }

    .mb_mobile--55 {
        margin-bottom: 55px !important
    }

    .ptb_mobile--60 {
        padding: 60px 0 !important
    }

    .plr_mobile--60 {
        padding: 0 60px !important
    }

    .pt_mobile--60 {
        padding-top: 60px !important
    }

    .pb_mobile--60 {
        padding-bottom: 60px !important
    }

    .pl_mobile--60 {
        padding-left: 60px !important
    }

    .pr_mobile--60 {
        padding-right: 60px !important
    }

    .mt_mobile--60 {
        margin-top: 60px !important
    }

    .mb_mobile--60 {
        margin-bottom: 60px !important
    }

    .ptb_mobile--65 {
        padding: 65px 0 !important
    }

    .plr_mobile--65 {
        padding: 0 65px !important
    }

    .pt_mobile--65 {
        padding-top: 65px !important
    }

    .pb_mobile--65 {
        padding-bottom: 65px !important
    }

    .pl_mobile--65 {
        padding-left: 65px !important
    }

    .pr_mobile--65 {
        padding-right: 65px !important
    }

    .mt_mobile--65 {
        margin-top: 65px !important
    }

    .mb_mobile--65 {
        margin-bottom: 65px !important
    }

    .ptb_mobile--70 {
        padding: 70px 0 !important
    }

    .plr_mobile--70 {
        padding: 0 70px !important
    }

    .pt_mobile--70 {
        padding-top: 70px !important
    }

    .pb_mobile--70 {
        padding-bottom: 70px !important
    }

    .pl_mobile--70 {
        padding-left: 70px !important
    }

    .pr_mobile--70 {
        padding-right: 70px !important
    }

    .mt_mobile--70 {
        margin-top: 70px !important
    }

    .mb_mobile--70 {
        margin-bottom: 70px !important
    }

    .ptb_mobile--75 {
        padding: 75px 0 !important
    }

    .plr_mobile--75 {
        padding: 0 75px !important
    }

    .pt_mobile--75 {
        padding-top: 75px !important
    }

    .pb_mobile--75 {
        padding-bottom: 75px !important
    }

    .pl_mobile--75 {
        padding-left: 75px !important
    }

    .pr_mobile--75 {
        padding-right: 75px !important
    }

    .mt_mobile--75 {
        margin-top: 75px !important
    }

    .mb_mobile--75 {
        margin-bottom: 75px !important
    }

    .ptb_mobile--80 {
        padding: 80px 0 !important
    }

    .plr_mobile--80 {
        padding: 0 80px !important
    }

    .pt_mobile--80 {
        padding-top: 80px !important
    }

    .pb_mobile--80 {
        padding-bottom: 80px !important
    }

    .pl_mobile--80 {
        padding-left: 80px !important
    }

    .pr_mobile--80 {
        padding-right: 80px !important
    }

    .mt_mobile--80 {
        margin-top: 80px !important
    }

    .mb_mobile--80 {
        margin-bottom: 80px !important
    }

    .ptb_mobile--85 {
        padding: 85px 0 !important
    }

    .plr_mobile--85 {
        padding: 0 85px !important
    }

    .pt_mobile--85 {
        padding-top: 85px !important
    }

    .pb_mobile--85 {
        padding-bottom: 85px !important
    }

    .pl_mobile--85 {
        padding-left: 85px !important
    }

    .pr_mobile--85 {
        padding-right: 85px !important
    }

    .mt_mobile--85 {
        margin-top: 85px !important
    }

    .mb_mobile--85 {
        margin-bottom: 85px !important
    }

    .ptb_mobile--90 {
        padding: 90px 0 !important
    }

    .plr_mobile--90 {
        padding: 0 90px !important
    }

    .pt_mobile--90 {
        padding-top: 90px !important
    }

    .pb_mobile--90 {
        padding-bottom: 90px !important
    }

    .pl_mobile--90 {
        padding-left: 90px !important
    }

    .pr_mobile--90 {
        padding-right: 90px !important
    }

    .mt_mobile--90 {
        margin-top: 90px !important
    }

    .mb_mobile--90 {
        margin-bottom: 90px !important
    }

    .ptb_mobile--95 {
        padding: 95px 0 !important
    }

    .plr_mobile--95 {
        padding: 0 95px !important
    }

    .pt_mobile--95 {
        padding-top: 95px !important
    }

    .pb_mobile--95 {
        padding-bottom: 95px !important
    }

    .pl_mobile--95 {
        padding-left: 95px !important
    }

    .pr_mobile--95 {
        padding-right: 95px !important
    }

    .mt_mobile--95 {
        margin-top: 95px !important
    }

    .mb_mobile--95 {
        margin-bottom: 95px !important
    }

    .ptb_mobile--100 {
        padding: 100px 0 !important
    }

    .plr_mobile--100 {
        padding: 0 100px !important
    }

    .pt_mobile--100 {
        padding-top: 100px !important
    }

    .pb_mobile--100 {
        padding-bottom: 100px !important
    }

    .pl_mobile--100 {
        padding-left: 100px !important
    }

    .pr_mobile--100 {
        padding-right: 100px !important
    }

    .mt_mobile--100 {
        margin-top: 100px !important
    }

    .mb_mobile--100 {
        margin-bottom: 100px !important
    }
}

.slick-gutter-5 {
    margin-left: -5px;
    margin-right: -5px
}

.slick-gutter-5 .slick-slide {
    padding-left: 5px;
    padding-right: 5px
}

.slick-gutter-10 {
    margin-left: -10px;
    margin-right: -10px
}

.slick-gutter-10 .slick-slide {
    padding-left: 10px;
    padding-right: 10px
}

.slick-gutter-15 {
    margin-left: -15px;
    margin-right: -15px
}

.slick-gutter-15 .slick-slide {
    padding-left: 15px;
    padding-right: 15px
}

.slick-gutter-20 {
    margin-left: -20px;
    margin-right: -20px
}

.slick-gutter-20 .slick-slide {
    padding-left: 20px;
    padding-right: 20px
}

.slick-gutter-25 {
    margin-left: -25px;
    margin-right: -25px
}

.slick-gutter-25 .slick-slide {
    padding-left: 25px;
    padding-right: 25px
}

.slick-gutter-30 {
    margin-left: -30px;
    margin-right: -30px
}

.slick-gutter-30 .slick-slide {
    padding-left: 30px;
    padding-right: 30px
}

.slick-gutter-35 {
    margin-left: -35px;
    margin-right: -35px
}

.slick-gutter-35 .slick-slide {
    padding-left: 35px;
    padding-right: 35px
}

.slick-gutter-40 {
    margin-left: -40px;
    margin-right: -40px
}

.slick-gutter-40 .slick-slide {
    padding-left: 40px;
    padding-right: 40px
}

.slick-gutter-45 {
    margin-left: -45px;
    margin-right: -45px
}

.slick-gutter-45 .slick-slide {
    padding-left: 45px;
    padding-right: 45px
}

.slick-gutter-50 {
    margin-left: -50px;
    margin-right: -50px
}

.slick-gutter-50 .slick-slide {
    padding-left: 50px;
    padding-right: 50px
}

.slick-gutter-55 {
    margin-left: -55px;
    margin-right: -55px
}

.slick-gutter-55 .slick-slide {
    padding-left: 55px;
    padding-right: 55px
}

.slick-gutter-60 {
    margin-left: -60px;
    margin-right: -60px
}

.slick-gutter-60 .slick-slide {
    padding-left: 60px;
    padding-right: 60px
}

.slick-gutter-65 {
    margin-left: -65px;
    margin-right: -65px
}

.slick-gutter-65 .slick-slide {
    padding-left: 65px;
    padding-right: 65px
}

.slick-gutter-70 {
    margin-left: -70px;
    margin-right: -70px
}

.slick-gutter-70 .slick-slide {
    padding-left: 70px;
    padding-right: 70px
}

.slick-gutter-75 {
    margin-left: -75px;
    margin-right: -75px
}

.slick-gutter-75 .slick-slide {
    padding-left: 75px;
    padding-right: 75px
}

.slick-gutter-80 {
    margin-left: -80px;
    margin-right: -80px
}

.slick-gutter-80 .slick-slide {
    padding-left: 80px;
    padding-right: 80px
}

.slick-gutter-85 {
    margin-left: -85px;
    margin-right: -85px
}

.slick-gutter-85 .slick-slide {
    padding-left: 85px;
    padding-right: 85px
}

.slick-gutter-90 {
    margin-left: -90px;
    margin-right: -90px
}

.slick-gutter-90 .slick-slide {
    padding-left: 90px;
    padding-right: 90px
}

.slick-gutter-95 {
    margin-left: -95px;
    margin-right: -95px
}

.slick-gutter-95 .slick-slide {
    padding-left: 95px;
    padding-right: 95px
}

.slick-gutter-100 {
    margin-left: -100px;
    margin-right: -100px
}

.slick-gutter-100 .slick-slide {
    padding-left: 100px;
    padding-right: 100px
}

.rn-blog-area .section-title {
    margin-bottom: 20px
}

button,[type=button],[type=reset],[type=submit] {
    -webkit-appearance: button
}

input,select,textarea {
    width: 100%;
    transition: .3s
}

input {
    height: 40px;
    padding: 0 15px
}

select {
    transition: .3s;
    height: 50px;
    line-height: 28px;
    padding: 5px 20px;
    outline: none;
    color: aliceblue;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    border-radius: var(--radius);
    background: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/arrow-icon.png) 98% center no-repeat #383a4f;
    font-size: 16px;
    line-height: 28px;
    font-weight: 400;
    padding-right: 30px;
}

input[type=text],input[type=password],input[type=email],input[type=number],input[type=tel],textarea {
    font-size: 16px;
    font-weight: 400;
    height: auto;
    line-height: 28px;
    background: 0 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: 0 15px;
    outline: none;
    border-radius: var(--radius);
}

input[type=text]::placeholder,input[type=password]::placeholder,input[type=email]::placeholder,input[type=number]::placeholder,input[type=tel]::placeholder,textarea::placeholder {
    color: var(--body-color);
    opacity: 1
}

input[type=text]:-ms-input-placeholder,input[type=password]:-ms-input-placeholder,input[type=email]:-ms-input-placeholder,input[type=number]:-ms-input-placeholder,input[type=tel]:-ms-input-placeholder,textarea:-ms-input-placeholder {
    color: var(--body-color);
    opacity: 1
}

input[type=text]::-ms-input-placeholder,input[type=password]::-ms-input-placeholder,input[type=email]::-ms-input-placeholder,input[type=number]::-ms-input-placeholder,input[type=tel]::-ms-input-placeholder,textarea::-ms-input-placeholder {
    color: var(--body-color);
    opacity: 1
}

input[type=text].p-holder__active,.input-active input[type=text],input[type=text].input-active,input[type=password].p-holder__active,.input-active input[type=password],input[type=password].input-active,input[type=email].p-holder__active,.input-active input[type=email],input[type=email].input-active,input[type=number].p-holder__active,.input-active input[type=number],input[type=number].input-active,input[type=tel].p-holder__active,.input-active input[type=tel],input[type=tel].input-active,textarea.p-holder__active,textarea.input-active {
    border-color: var(--color-primary)
}

input[type=text].p-holder__active::placeholder,.input-active input[type=text]::placeholder,input[type=text].input-active::placeholder,input[type=password].p-holder__active::placeholder,.input-active input[type=password]::placeholder,input[type=password].input-active::placeholder,input[type=email].p-holder__active::placeholder,.input-active input[type=email]::placeholder,input[type=email].input-active::placeholder,input[type=number].p-holder__active::placeholder,.input-active input[type=number]::placeholder,input[type=number].input-active::placeholder,input[type=tel].p-holder__active::placeholder,.input-active input[type=tel]::placeholder,input[type=tel].input-active::placeholder,textarea.p-holder__active::placeholder,textarea.input-active::placeholder {
    color: var(--color-primary);
    opacity: 1
}

input[type=text].p-holder__active:-ms-input-placeholder,.input-active input[type=text]:-ms-input-placeholder,input[type=text].input-active:-ms-input-placeholder,input[type=password].p-holder__active:-ms-input-placeholder,.input-active input[type=password]:-ms-input-placeholder,input[type=password].input-active:-ms-input-placeholder,input[type=email].p-holder__active:-ms-input-placeholder,.input-active input[type=email]:-ms-input-placeholder,input[type=email].input-active:-ms-input-placeholder,input[type=number].p-holder__active:-ms-input-placeholder,.input-active input[type=number]:-ms-input-placeholder,input[type=number].input-active:-ms-input-placeholder,input[type=tel].p-holder__active:-ms-input-placeholder,.input-active input[type=tel]:-ms-input-placeholder,input[type=tel].input-active:-ms-input-placeholder,textarea.p-holder__active:-ms-input-placeholder,textarea.input-active:-ms-input-placeholder {
    color: var(--color-primary)
}

input[type=text].p-holder__active::-ms-input-placeholder,.input-active input[type=text]::-ms-input-placeholder,input[type=text].input-active::-ms-input-placeholder,input[type=password].p-holder__active::-ms-input-placeholder,.input-active input[type=password]::-ms-input-placeholder,input[type=password].input-active::-ms-input-placeholder,input[type=email].p-holder__active::-ms-input-placeholder,.input-active input[type=email]::-ms-input-placeholder,input[type=email].input-active::-ms-input-placeholder,input[type=number].p-holder__active::-ms-input-placeholder,.input-active input[type=number]::-ms-input-placeholder,input[type=number].input-active::-ms-input-placeholder,input[type=tel].p-holder__active::-ms-input-placeholder,.input-active input[type=tel]::-ms-input-placeholder,input[type=tel].input-active::-ms-input-placeholder,textarea.p-holder__active::-ms-input-placeholder,textarea.input-active::-ms-input-placeholder {
    color: var(--color-primary)
}

input[type=text].p-holder__error,.input-error input[type=text],input[type=text].input-error,input[type=password].p-holder__error,.input-error input[type=password],input[type=password].input-error,input[type=email].p-holder__error,.input-error input[type=email],input[type=email].input-error,input[type=number].p-holder__error,.input-error input[type=number],input[type=number].input-error,input[type=tel].p-holder__error,.input-error input[type=tel],input[type=tel].input-error,textarea.p-holder__error,textarea.input-error {
    border-color: #f4282d
}

input[type=text].p-holder__error::placeholder,.input-error input[type=text]::placeholder,input[type=text].input-error::placeholder,input[type=password].p-holder__error::placeholder,.input-error input[type=password]::placeholder,input[type=password].input-error::placeholder,input[type=email].p-holder__error::placeholder,.input-error input[type=email]::placeholder,input[type=email].input-error::placeholder,input[type=number].p-holder__error::placeholder,.input-error input[type=number]::placeholder,input[type=number].input-error::placeholder,input[type=tel].p-holder__error::placeholder,.input-error input[type=tel]::placeholder,input[type=tel].input-error::placeholder,textarea.p-holder__error::placeholder,textarea.input-error::placeholder {
    color: #f4282d;
    opacity: 1
}

input[type=text].p-holder__error:-ms-input-placeholder,.input-error input[type=text]:-ms-input-placeholder,input[type=text].input-error:-ms-input-placeholder,input[type=password].p-holder__error:-ms-input-placeholder,.input-error input[type=password]:-ms-input-placeholder,input[type=password].input-error:-ms-input-placeholder,input[type=email].p-holder__error:-ms-input-placeholder,.input-error input[type=email]:-ms-input-placeholder,input[type=email].input-error:-ms-input-placeholder,input[type=number].p-holder__error:-ms-input-placeholder,.input-error input[type=number]:-ms-input-placeholder,input[type=number].input-error:-ms-input-placeholder,input[type=tel].p-holder__error:-ms-input-placeholder,.input-error input[type=tel]:-ms-input-placeholder,input[type=tel].input-error:-ms-input-placeholder,textarea.p-holder__error:-ms-input-placeholder,textarea.input-error:-ms-input-placeholder {
    color: #f4282d
}

input[type=text].p-holder__error::-ms-input-placeholder,.input-error input[type=text]::-ms-input-placeholder,input[type=text].input-error::-ms-input-placeholder,input[type=password].p-holder__error::-ms-input-placeholder,.input-error input[type=password]::-ms-input-placeholder,input[type=password].input-error::-ms-input-placeholder,input[type=email].p-holder__error::-ms-input-placeholder,.input-error input[type=email]::-ms-input-placeholder,input[type=email].input-error::-ms-input-placeholder,input[type=number].p-holder__error::-ms-input-placeholder,.input-error input[type=number]::-ms-input-placeholder,input[type=number].input-error::-ms-input-placeholder,input[type=tel].p-holder__error::-ms-input-placeholder,.input-error input[type=tel]::-ms-input-placeholder,input[type=tel].input-error::-ms-input-placeholder,textarea.p-holder__error::-ms-input-placeholder,textarea.input-error::-ms-input-placeholder {
    color: #f4282d
}

input[type=text].p-holder__error:focus,.input-error input[type=text]:focus,input[type=text].input-error:focus,input[type=password].p-holder__error:focus,.input-error input[type=password]:focus,input[type=password].input-error:focus,input[type=email].p-holder__error:focus,.input-error input[type=email]:focus,input[type=email].input-error:focus,input[type=number].p-holder__error:focus,.input-error input[type=number]:focus,input[type=number].input-error:focus,input[type=tel].p-holder__error:focus,.input-error input[type=tel]:focus,input[type=tel].input-error:focus,textarea.p-holder__error:focus,textarea.input-error:focus {
    border-color: #f4282d
}

input[type=text]:focus,input[type=password]:focus,input[type=email]:focus,input[type=number]:focus,input[type=tel]:focus,textarea:focus {
    border-color: var(--color-primary)
}

input[type=checkbox],input[type=radio] {
    opacity: 0;
    position: absolute
}

input[type=checkbox]~label,input[type=radio]~label {
    position: relative;
    font-size: 15px;
    line-height: 25px;
    color: var(--body-color);
    font-weight: 400;
    padding-left: 20px;
    cursor: pointer;
    margin-bottom: 0
}

input[type=checkbox]~label:before,input[type=radio]~label:before {
    content: " ";
    position: absolute;
    top: 6px;
    left: 0;
    width: 14px;
    height: 14px;
    background-color: #fff;
    border: var(--border-width) solid rgba(24,152,165,.2);
    border-radius: 2px;
    transition: all .3s
}

input[type=checkbox]~label:after,input[type=radio]~label:after {
    content: " ";
    position: absolute;
    top: 9px;
    left: 2px;
    width: 10px;
    height: 5px;
    background-color: transparent;
    border-bottom: var(--border-width) solid #fff;
    border-left: var(--border-width) solid #fff;
    border-radius: 2px;
    transform: rotate(-45deg);
    opacity: 0;
    transition: all .3s
}

input[type=checkbox]:checked~label:before,input[type=radio]:checked~label:before {
    background-color: var(--color-primary);
    border-color: var(--color-primary)
}

input[type=checkbox]:checked~label:after,input[type=radio]:checked~label:after {
    opacity: 1
}

input[type=radio]~label:before {
    border-radius: 50%
}

input[type=radio]~label:after {
    width: 8px;
    height: 8px;
    left: 3px;
    background: #fff;
    border-radius: 50%
}

.form-group {
    margin-bottom: 20px
}

.form-group input {
    border-radius: var(--radius);
    height: 50px;
    font-size: 16px;
    padding: 0 15px;
    background: #383a4f;
    color: aliceblue;
}

.form-group input:focus {
    border-color: var(--color-primary)
}

.form-group textarea {
    min-height: 193px;
    border-radius: var(--radius);
    resize: none;
    padding: 15px;
    font-size: 16px;
}

.form-group textarea:focus {
    border-color: var(--color-primary)
}

input[type=submit] {
    width: auto;
    font-size: 16px;
    letter-spacing: 2px;
    padding: 15px 20px;
    border-radius: 6px;
    display: block;
    font-weight: 500;
    transition: .3s;
    border: var(--border-width) solid var(--color-primary);
    background: var(--color-primary);
    color: #fff;
    height: 60px;
    margin-top: 30px
}

input[type=submit]:hover {
    color: #fff;
    -webkit-box-shadow: 0 10px 15px 0 rgba(249,0,77,.1);
    box-shadow: 0 10px 15px 0 rgba(249,0,77,.1);
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px)
}

.contact-form--1 form input::-webkit-input-placeholder,.contact-form--1 form textarea::-webkit-input-placeholder {
    color: var(--color-body) !important
}

.contact-form--1 form input::-moz-placeholder,.contact-form--1 form textarea::-moz-placeholder {
    color: var(--color-body) !important
}

.contact-form--1 form input:-ms-input-placeholder,.contact-form--1 form textarea:-ms-input-placeholder {
    color: var(--color-body) !important
}

.contact-form--1 form input:-moz-placeholder,.contact-form--1 form textarea:-moz-placeholder {
    color: var(--color-body) !important
}

.header-area {
    padding-left: 50px;
    padding-right: 50px;
    z-index: 999;
    position: relative
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .header-area {
        padding-left:30px;
        padding-right: 30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area {
        padding-left:30px;
        padding-right: 30px
    }
}

@media only screen and (max-width: 767px) {
    .header-area {
        padding-left:15px;
        padding-right: 15px
    }
}

.header-area .header-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    flex-wrap: wrap
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper {
        padding:15px 0
    }
}

.header-area .header-wrapper .header-hamberger {
    display: flex;
    align-items: center
}

.header-area .header-wrapper .header-hamberger .hamberger {
    margin-right: 27px
}

.header-area .header-wrapper a.rn-btn {
    padding: 0 25px;
    height: 46px;
    display: inline-block;
    line-height: 42px;
    border: 2px solid var(--color-heading);
    border-radius: 6px;
    color: var(--color-heading);
    font-size: 14px;
    position: relative;
    z-index: 2;
    letter-spacing: 1px;
    font-weight: 500
}

.header-area .header-wrapper a.rn-btn.theme-color {
    border-color: var(--color-primary);
    color: var(--color-primary)
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper a.rn-btn {
        padding:0 11px;
        height: 39px;
        line-height: 33px;
        font-size: 12px
    }
}

@media only screen and (max-width: 575px) {
    .header-area .header-wrapper a.rn-btn {
        height:34px;
        line-height: 29px
    }
}

.header-area .header-wrapper a.rn-btn:before {
    display: none
}

.header-area .header-wrapper a.rn-btn:hover {
    border-color: transparent;
    transform: translateY(-3px);
    color: #fff !important;
    border: 2px solid var(--color-primary) !important;
    background: var(--color-primary);
    border-radius: 6px
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper a.rn-btn {
        display:none
    }
}

.header-area .header-wrapper .logo a {
    display: block;
    font-size: 39px;
    color: var(--color-primary);
    font-weight: 700
}

.header-area .header-wrapper .logo a img {
    max-height: 66px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .header-area .header-wrapper .logo a img {
        max-height:50px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .logo a img {
        max-height:50px
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .logo a img {
        max-height:50px
    }
}

.header-area.header--transparent {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    width: auto
}

.header-area.header--transparent .header-wrapper {
    padding: 30px 0
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .header-area.header--transparent .header-wrapper {
        padding:30px 0
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .header-area.header--transparent .header-wrapper {
        padding:30px 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area.header--transparent .header-wrapper {
        padding:20px 0
    }
}

@media only screen and (max-width: 767px) {
    .header-area.header--transparent .header-wrapper {
        padding:15px 0
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .header-area.header--sticky {
        padding-left:30px;
        padding-right: 30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area.header--sticky {
        padding-left:30px;
        padding-right: 30px
    }
}

@media only screen and (max-width: 767px) {
    .header-area.header--sticky {
        padding-left:15px;
        padding-right: 15px
    }
}

.header-area.header--sticky.sticky {
    position: fixed;
    top: 0;
    z-index: 999;
    padding-left: 50px;
    padding-right: 50px;
    width: 100%;
    background: #fff;
    box-shadow: 0 8px 20px 0 rgba(0,0,0,.1);
    animation: headerSlideDown .95s ease forwards
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .header-area.header--sticky.sticky {
        padding-left:30px;
        padding-right: 30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area.header--sticky.sticky {
        padding-left:15px;
        padding-right: 15px
    }
}

@media only screen and (max-width: 767px) {
    .header-area.header--sticky.sticky {
        padding-left:15px;
        padding-right: 15px
    }
}

.header-area.header--sticky.sticky .header-wrapper {
    padding-top: 15px;
    padding-bottom: 15px
}

.header-area.header--sticky.sticky .header-wrapper .logo img {
    max-height: 50px
}

.header-area.header--sticky.sticky .header-wrapper a.rn-btn {
    color: #1f1f25;
    border-color: #1f1f25
}

.header-area.header--sticky.sticky .header-wrapper a.rn-btn:hover {
    background: var(--color-primary);
    border-color: var(--color-primary);
    color: #fff
}

.header-area.header--sticky.sticky .mainmenunav ul.mainmenu>li>a {
    color: #1f1f25;
    padding: 9px 0
}

.header-area.header--sticky.sticky .mainmenunav ul.mainmenu>li:hover>a {
    color: var(--color-primary)
}

.header-area.sticky-bg-black.header--sticky.sticky {
    background: #1f1f25
}

.header-area.sticky-bg-black.header--sticky.sticky .header-wrapper a.rn-btn {
    color: #c6c9d8;
    border-color: #b1b4c1
}

.header-area.sticky-bg-black.header--sticky.sticky .header-wrapper a.rn-btn:hover {
    background: var(--color-primary);
    border-color: var(--color-primary);
    color: #fff
}

.header-area.sticky-bg-black.header--sticky.sticky .header-wrapper .mainmenunav ul.mainmenu>li>a {
    color: #c6c9d8
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area.sticky-bg-black.header--sticky.sticky .header-wrapper .mainmenunav ul.mainmenu>li>a {
        color:#1f1f25
    }
}

@media only screen and (max-width: 767px) {
    .header-area.sticky-bg-black.header--sticky.sticky .header-wrapper .mainmenunav ul.mainmenu>li>a {
        color:#1f1f25
    }
}

.header-area.sticky-bg-black.header--sticky.sticky .header-wrapper .mainmenunav ul.mainmenu>li:hover>a {
    color: var(--color-primary)
}

.header-area.color-white a.rn-btn {
    border: 2px solid #fff;
    color: #fff
}

.header-area.color-black a.rn-btn {
    border: 2px solid rgba(29,29,36,.5);
    color: #1d1d24
}

.header-area .header-right {
    display: flex;
    align-items: center;
    flex-wrap: wrap
}

.header-area .header-right .header-btn {
    margin-left: 50px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .header-area .header-right .header-btn {
        margin-left:20px
    }
}

@media only screen and (max-width: 575px) {
    .header-area .header-right .header-btn {
        margin-left:0
    }
}

.header-area.header--fixed {
    position: fixed;
    top: 0;
    z-index: 999;
    padding-left: 50px;
    padding-right: 50px;
    width: 100%
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .header-area.header--fixed {
        padding-left:30px;
        padding-right: 30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area.header--fixed {
        padding-left:30px;
        padding-right: 30px;
        padding-top: 10px;
        padding-bottom: 10px
    }
}

@media only screen and (max-width: 767px) {
    .header-area.header--fixed {
        padding-left:30px;
        padding-right: 30px;
        padding-top: 10px;
        padding-bottom: 10px
    }
}

.header-area.header--fixed .header-wrapper {
    padding: 20px 0;
    transition: .3s
}

.header-area.header--fixed .header-wrapper .logo a img {
    transition: .5s
}

.header-area.header--fixed .header-wrapper .logo a img.logo-1 {
    display: block
}

.header-area.header--fixed .header-wrapper .logo a img.logo-2 {
    display: none
}

.header-area.header--fixed .header-wrapper .mainmenunav ul.mainmenu>li>a {
    position: relative
}

.header-area.header--fixed .header-wrapper .mainmenunav ul.mainmenu>li>a:after {
    position: absolute;
    content: "";
    left: 0;
    width: 0;
    height: 3px;
    background: var(--color-primary);
    transition: .3s;
    bottom: 0
}

.header-area.header--fixed .header-wrapper .mainmenunav ul.mainmenu>li.is-current a {
    color: var(--color-primary)
}

.header-area.header--fixed .header-wrapper .mainmenunav ul.mainmenu>li.is-current a:after {
    width: 100%
}

.header-area.header--fixed.default-color.sticky .mainmenunav ul.mainmenu>li>a {
    color: #1f1f25
}

.header-area.header--fixed.default-color.sticky .mainmenunav ul.mainmenu>li.is-current a {
    color: var(--color-primary)
}

.header-area.header--fixed.default-color.sticky .mainmenunav ul.mainmenu>li.is-current a:after {
    width: 100%
}

.header-area.header--fixed.sticky {
    background: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,.1)
}

.header-area.header--fixed.sticky .header-wrapper {
    padding: 0
}

.header-area.header--fixed.sticky .header-wrapper a.rn-btn {
    color: #1f1f25;
    border-color: #1f1f25
}

.header-area.header--fixed.sticky .logo a img {
    height: 50px
}

.header-area.header--fixed.sticky .logo a img.logo-1 {
    display: none
}

.header-area.header--fixed.sticky .logo a img.logo-2 {
    display: block
}

.header-area.header--fixed.sticky .humberger-menu span.text-white {
    color: #1f1f25 !important
}

.header-area.rn-scroll-nav .header-wrapper {
    padding: 20px 0
}

.header-area.rn-scroll-nav.is-affixed {
    background: #fff
}

.header-area.rn-scroll-nav.is-affixed .header-wrapper {
    padding: 0 50px;
    width: 100% !important;
    background: #fff;
    box-shadow: 0 8px 20px 0 rgba(0,0,0,.1);
    animation: headerSlideDown .95s ease forwards
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area.rn-scroll-nav.is-affixed .header-wrapper {
        padding:8px 30px
    }
}

@media only screen and (max-width: 767px) {
    .header-area.rn-scroll-nav.is-affixed .header-wrapper {
        padding:8px 30px
    }
}

.header-area.rn-scroll-nav.is-affixed .header-wrapper .mainmenunav ul.mainmenu>li>a {
    padding: 22px 0
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area.rn-scroll-nav.is-affixed .header-wrapper .mainmenunav ul.mainmenu>li>a {
        padding:0
    }
}

@media only screen and (max-width: 767px) {
    .header-area.rn-scroll-nav.is-affixed .header-wrapper .mainmenunav ul.mainmenu>li>a {
        padding:0
    }
}

.header-area.rn-scroll-nav .mainmenunav ul.mainmenu>li>a {
    position: relative
}

.header-area.rn-scroll-nav .mainmenunav ul.mainmenu>li>a:after {
    position: absolute;
    content: "";
    left: 0;
    width: 0;
    height: 3px;
    background: var(--color-primary);
    -webkit-transition: .3s;
    transition: .3s;
    bottom: 0
}

.header-area.rn-scroll-nav .mainmenunav ul.mainmenu>li>a.active,.header-area.rn-scroll-nav .mainmenunav ul.mainmenu>li>a:hover {
    background: 0 0;
    color: var(--color-primary)
}

.header-area.rn-scroll-nav .mainmenunav ul.mainmenu>li>a.active:after,.header-area.rn-scroll-nav .mainmenunav ul.mainmenu>li>a:hover:after {
    width: 100%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .col-md-8,.header-area .col-6 {
        position:static
    }
}

@media only screen and (max-width: 767px) {
    .header-area .col-md-8,.header-area .col-6 {
        position:static
    }
}

.trydo-active-onepage-navigation .header-area .mainmenu>li {
    margin: 0 15px;
    position: relative
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .trydo-active-onepage-navigation .header-area .mainmenu>li {
        margin:0 9px
    }
}

.trydo-active-onepage-navigation .header-area .mainmenu>li:first-child {
    margin-left: 0
}

.trydo-active-onepage-navigation .header-area .mainmenu>li:last-child {
    margin-right: 0
}

.trydo-active-onepage-navigation .header-area .mainmenu>li>.nav-link {
    position: relative;
    padding: 20px 0
}

.trydo-active-onepage-navigation .header-area .mainmenu>li>.nav-link:before {
    position: absolute;
    content: "";
    left: 0;
    width: 0;
    height: 3px;
    background: var(--color-primary);
    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;
    bottom: 0
}

.trydo-active-onepage-navigation .header-area .mainmenu>li>.nav-link.active,.trydo-active-onepage-navigation .header-area .mainmenu>li>.nav-link:hover {
    background: 0 0;
    color: var(--color-primary) !important
}

.trydo-active-onepage-navigation .header-area .mainmenu>li>.nav-link.active:before,.trydo-active-onepage-navigation .header-area .mainmenu>li>.nav-link:hover:before {
    width: 100%
}

.trydo-active-onepage-navigation .header-area .mainmenu>li .submenu {
    min-width: 247px;
    height: auto;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 90;
    opacity: 0;
    visibility: hidden;
    background-color: #fff;
    box-shadow: 0 0 35px rgba(0,0,0,.1);
    text-align: left;
    padding: 12px 0;
    border-radius: 4px
}

.trydo-active-onepage-navigation .header-area .mainmenu>li .submenu li {
    margin: 0
}

.trydo-active-onepage-navigation .header-area .mainmenu>li .submenu li .nav-link {
    position: relative;
    font-weight: 500;
    padding: 5px 20px;
    font-size: 14px
}

.trydo-active-onepage-navigation .header-area .mainmenu>li .submenu li .nav-link.active,.trydo-active-onepage-navigation .header-area .mainmenu>li .submenu li .nav-link:hover {
    color: var(--color-primary);
    background: var(--color-primary-light)
}

.trydo-active-onepage-navigation .header-area .mainmenu>li:hover .submenu {
    opacity: 1;
    visibility: visible
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav {
        position:absolute
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav {
        position:absolute
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu {
        width:60vw;
        height: 100vh;
        position: fixed;
        top: 0;
        right: -61vw;
        z-index: 99;
        background: #fff;
        -webkit-transition: all .3s cubic-bezier(.77,.2,.05,1);
        -o-transition: all .3s cubic-bezier(.77,.2,.05,1);
        transition: all .3s cubic-bezier(.77,.2,.05,1);
        display: block;
        overflow-y: auto;
        padding: 100px 30px
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu {
        width:60vw;
        height: 100vh;
        position: fixed;
        top: 0;
        right: -61vw;
        z-index: 99;
        padding: 100px 30px;
        background: #fff;
        -webkit-transition: all .3s cubic-bezier(.77,.2,.05,1);
        -o-transition: all .3s cubic-bezier(.77,.2,.05,1);
        transition: all .3s cubic-bezier(.77,.2,.05,1);
        display: block;
        overflow-y: auto
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li {
        margin:0;
        padding: 0
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li {
        margin:0;
        padding: 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li.current_page_item>a {
        color:var(--color-primary) !important
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li.current_page_item>a {
        color:var(--color-primary) !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown {
        position:relative
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown {
        position:relative
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a {
        position:relative
    }

    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a:after {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 7px 7px 0;
        border-color: #1f1f25 transparent transparent;
        position: absolute;
        content: "";
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        transition: all .3s cubic-bezier(.645,.045,.355,1)
    }

    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a.open {
        color: var(--color-primary) !important
    }

    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a.open:after {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 7px 7px;
        border-color: transparent transparent var(--color-primary) transparent
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a {
        position:relative
    }

    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a:after {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 7px 7px 0;
        border-color: #1f1f25 transparent transparent;
        position: absolute;
        content: "";
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        transition: all .3s cubic-bezier(.645,.045,.355,1)
    }

    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a.open {
        color: var(--color-primary)
    }

    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a.open:after {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 7px 7px;
        border-color: transparent transparent var(--color-primary) transparent
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown.current-menu-ancestor>a {
        color:var(--color-primary) !important
    }

    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown.current-menu-ancestor>a:after {
        border-color: var(--color-primary) transparent transparent transparent
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown.current-menu-ancestor>a {
        color:var(--color-primary) !important
    }

    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown.current-menu-ancestor>a:after {
        border-color: var(--color-primary) transparent transparent transparent
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown.current-menu-ancestor>a.open:after {
        border-color:transparent transparent var(--color-primary) transparent
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown.current-menu-ancestor>a.open:after {
        border-color:transparent transparent var(--color-primary) transparent
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li a {
        display:block;
        padding: 10px 0
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li a {
        display:block;
        padding: 10px 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu {
        position:relative;
        transition: .3s;
        padding: 0;
        background: 0 0;
        box-shadow: inherit;
        padding-left: 10px;
        display: none;
        opacity: 1;
        visibility: visible;
        transition: inherit;
        min-width: auto
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu {
        position:relative;
        transition: .3s;
        padding: 0;
        background: 0 0;
        box-shadow: inherit;
        padding-left: 10px;
        display: none;
        opacity: 1;
        visibility: visible;
        transition: inherit;
        min-width: auto
    }
}

.header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu li {
    position: relative
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu li {
        padding:3px 0
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu li {
        padding:3px 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu li a {
        padding:2px 10px;
        margin: 0
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu li a {
        padding:2px 10px;
        margin: 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu li.current_page_item a {
        color:var(--color-primary) !important;
        background: var(--color-primary-light)
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu li.current_page_item a {
        color:var(--color-primary) !important;
        background: var(--color-primary-light)
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li a {
        color:#1f1f25
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper .mainmenunav ul.mainmenu li a {
        color:#1f1f25
    }
}

.header-area .header-wrapper .close-menu {
    position: absolute;
    top: 30px;
    opacity: 0;
    visibility: hidden;
    right: 30px;
    z-index: -10;
    transition: .3s;
    background: var(--color-primary-light);
    border-radius: 100%;
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 46px
}

.header-area .header-wrapper.menu-open .close-menu {
    opacity: 1;
    visibility: visible;
    z-index: 9999
}

.header-area .header-wrapper.menu-open .close-menu span {
    color: #000;
    font-size: 30px;
    cursor: pointer;
    display: block;
    height: 50px;
    width: 50px
}

.header-area .header-wrapper.menu-open .close-menu span svg {
    width: 24px;
    height: 24px;
    color: var(--color-primary)
}

.header-area .header-wrapper.menu-open .close-menu:hover span svg {
    color: var(--color-primary)
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area .header-wrapper.menu-open .mainmenunav ul.mainmenu {
        right:0
    }
}

@media only screen and (max-width: 767px) {
    .header-area .header-wrapper.menu-open .mainmenunav ul.mainmenu {
        right:0
    }
}

@media only screen and (max-width: 575px) {
    .header-area .header-wrapper.menu-open .mainmenunav ul.mainmenu {
        width:86vw
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area.header-style-two .header-wrapper {
        padding:15px 0
    }
}

@media only screen and (max-width: 767px) {
    .header-area.header-style-two .header-wrapper {
        padding:15px 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-area.header-style-two .header-wrapper .logo a img {
        width:auto
    }
}

@media only screen and (max-width: 767px) {
    .header-area.header-style-two .header-wrapper .logo a img {
        width:auto
    }
}

@media only screen and (max-width: 767px) {
    .header-area.header-style-two .header-wrapper ul.social-share li {
        margin:0
    }
}

.humberger-menu span {
    cursor: pointer
}

.humberger-menu span svg {
    width: 30px;
    height: 30px
}

@media only screen and (max-width: 767px) {
    .humberger-menu span {
        font-size:28px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .humberger-menu span {
        font-size:28px
    }
}

.header-wrapper.menu-open .humberger-menu span {
    opacity: 0
}

.header-area.small-logo .header-wrapper .logo a img {
    width: auto !important
}

.header-not-transparent .humberger-menu span.text-white {
    color: #000 !important
}

.header-style-two.header-not-transparent.sticky .humberger-menu span.text-white {
    color: #1d1d24 !important
}

.logo a {
    display: block;
    font-size: 39px;
    color: var(--color-primary);
    font-weight: 700
}

.admin-bar .header-area.header--transparent,.admin-bar .header-area.header--transparent.sticky,.admin-bar .header-area.header--sticky.sticky {
    top: 32px
}

@media screen and (max-width: 782px) {
    .admin-bar .header-area.header--transparent,.admin-bar .header-area.header--transparent.sticky,.admin-bar .header-area.header--sticky.sticky {
        top:46px
    }
}

@media only screen and (min-width: 779px) {
    body.admin-bar .side-nav,body.admin-bar .popup-mobile-manu {
        top:32px
    }
}

@media only screen and (max-width: 779px) and (min-width:601px) {
    body.admin-bar .header-area .header-wrapper .mainmenunav ul.mainmenu {
        top:46px
    }
}

@media only screen and (max-width: 992px) and (min-width:779px) {
    body.admin-bar .popup-mobile-manu,body.admin-bar .side-nav {
        top:0
    }
}

@media only screen and (max-width: 779px) and (min-width:601px) {
    body.admin-bar .popup-mobile-manu,body.admin-bar .side-nav {
        top:0
    }
}

@media only screen and (max-width: 600px) {
    body.admin-bar .popup-mobile-manu,body.admin-bar .side-nav,.admin-bar .header-area.header--transparent.sticky,.admin-bar .header-area.header--sticky.sticky {
        top:0
    }

    body.admin-bar .header-area .header-wrapper .mainmenunav ul.mainmenu {
        top: 46px
    }

    body.admin-bar .header-area.sticky .header-wrapper .mainmenunav ul.mainmenu {
        top: 0
    }
}

.full-overlay {
    position: absolute;
    width: 100vw;
    height: 100vh;
    left: 0;
    top: 0;
    background: rgba(0,0,0,.7);
    opacity: 0;
    visibility: hidden;
    transition: .3s
}

.body-overlay .full-overlay {
    opacity: 1;
    visibility: visible
}

.trydo-active-onepage-navigation .header-area.header--sticky.sticky .header-wrapper {
    padding-top: 0;
    padding-bottom: 0
}

@media only screen and (min-width: 992px) {
    .trydo-active-onepage-navigation .header-area.header--sticky.sticky .mainmenunav ul.mainmenu>li>a {
        padding:20px 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .trydo-active-onepage-navigation .header-area.header--sticky.sticky .header-wrapper {
        padding-top:15px;
        padding-bottom: 15px
    }
}

@media only screen and (max-width: 767px) {
    .trydo-active-onepage-navigation .header-area.header--sticky.sticky .header-wrapper {
        padding-top:15px;
        padding-bottom: 15px
    }
}

@media only screen and (max-width: 992px) and (min-width:779px) {
    body.admin-bar .header-area {
        z-index:99999
    }

    body.admin-bar .header-area .header-wrapper .mainmenunav ul.mainmenu {
        top: 0
    }

    body.admin-bar .header-area .header-wrapper .close-menu {
        top: 0
    }
}

@media only screen and (max-width: 779px) and (min-width:601px) {
    body.admin-bar .header-area {
        z-index:99999
    }

    body.admin-bar .header-area .header-wrapper .mainmenunav ul.mainmenu {
        top: 0
    }

    body.admin-bar .header-area .header-wrapper .close-menu {
        top: -17px
    }
}

@media only screen and (max-width: 600px) {
    body.admin-bar .header-area {
        z-index:99999
    }

    body.admin-bar .header-area .header-wrapper .mainmenunav ul.mainmenu {
        top: 0
    }

    body.admin-bar .header-area .header-wrapper .close-menu {
        top: -17px
    }
}

.sticky .humberger-menu span.text-white {
    color: #1f1f25 !important
}

.header-area.sticky-bg-black.header--sticky.sticky .humberger-menu span.text-white {
    color: #c6c9d8 !important
}

.root-header-transparent .header-area.header-style-two ul.social-share.social-style--2.color-black li a {
    color: #1d1d24
}

.root-header-transparent .header-area.header-style-two.header--transparent .header-wrapper a.rn-btn {
    border: 2px solid var(--color-heading);
    color: #1d1d24
}

.root-header-transparent .header-style-two .humberger-menu span.text-white {
    color: #1d1d24 !important
}

.root-header-transparent .header-area.header-style-two .mainmenunav ul.mainmenu>li>a {
    color: #1f1f25
}

.root-header-transparent .header-area.header-style-two.sticky ul.social-share.social-style--2.color-black li a {
    color: #1d1d24
}

.root-header-transparent .header-area.header-style-two.header--transparent.sticky .header-wrapper a.rn-btn {
    border: 2px solid var(--color-heading);
    color: var(--color-heading)
}

.root-header-transparent .header-style-two.sticky .humberger-menu span.text-white {
    color: #1d1d24 !important
}

.root-header-transparent .header-area.header-style-two ul.social-share.social-style--2.color-black li a,.root-header-transparent .header-area.header-style-two.sticky ul.social-share.social-style--2.color-black li a {
    color: #fff
}

.root-header-transparent .header-area.header-style-two.header--transparent .header-wrapper a.rn-btn,.root-header-transparent .header-area.header-style-two.header--transparent.sticky .header-wrapper a.rn-btn {
    border: 2px solid #1f1f25;
    color: #1f1f25
}

.root-header-transparent .header-area.header-style-two ul.social-share.social-style--2.color-black li a,.root-header-transparent .header-area.header-style-two.sticky ul.social-share.social-style--2.color-black li a {
    opacity: 1;
    color: #1f1f25
}

.mainmenunav ul.mainmenu {
    display: flex;
    justify-content: flex-end;
    flex-wrap: wrap
}

.mainmenunav ul.mainmenu li.current-menu-ancestor>a,.mainmenunav ul.mainmenu li.current_page_item>a,.mainmenunav ul.mainmenu li.current_page_item>a {
    color: var(--color-primary) !important
}

.mainmenunav ul.mainmenu>li {
    margin: 0 15px;
    position: relative
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .mainmenunav ul.mainmenu>li {
        margin:0 9px
    }
}

.mainmenunav ul.mainmenu>li>a {
    color: var(--color-heading);
    font-size: 16px;
    font-weight: 500;
    padding: 20px 0;
    display: inline-block
}

.mainmenunav ul.mainmenu>li.current-menu-ancestor>a,.mainmenunav ul.mainmenu>li.current_page_item>a,.mainmenunav ul.mainmenu>li.current_page_item>a {
    color: var(--color-primary) !important
}

.mainmenunav ul.mainmenu>li ul.submenu {
    min-width: 247px;
    height: auto;
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 90;
    opacity: 0;
    visibility: hidden;
    background-color: #fff;
    box-shadow: 0 0 35px rgba(0,0,0,.1);
    text-align: left;
    padding: 12px 0;
    border-radius: 4px
}

.mainmenunav ul.mainmenu>li ul.submenu li {
    margin: 0;
    padding: 0;
    position: relative
}

.mainmenunav ul.mainmenu>li ul.submenu li>a {
    font-size: 16px;
    font-weight: 500;
    padding: 5px 20px;
    font-size: 14px;
    display: block;
    color: #1f1f25;
    margin: 0 10px;
    border-radius: 3px
}

.mainmenunav ul.mainmenu>li ul.submenu li:hover>a {
    color: var(--color-primary);
    background: var(--color-primary-light)
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mainmenunav ul.mainmenu>li ul.submenu li:hover>a {
        background:0 0
    }
}

@media only screen and (max-width: 767px) {
    .mainmenunav ul.mainmenu>li ul.submenu li:hover>a {
        background:0 0
    }
}

.mainmenunav ul.mainmenu>li ul.submenu li.is-active>a {
    color: var(--color-primary) !important
}

.mainmenunav ul.mainmenu>li ul.submenu li ul.submenu {
    left: 100%;
    top: 0;
    text-align: left
}

.mainmenunav ul.mainmenu>li ul.submenu li ul.submenu li ul.submenu {
    left: auto;
    right: 100%;
    top: 0
}

.mainmenunav ul.mainmenu>li ul.submenu li ul.submenu li:hover>ul.submenu {
    opacity: 1;
    visibility: visible
}

.mainmenunav ul.mainmenu>li ul.submenu li:hover>ul.submenu {
    opacity: 1;
    visibility: visible
}

.mainmenunav ul.mainmenu>li:hover>ul.submenu {
    opacity: 1;
    visibility: visible
}

.mainmenunav ul.mainmenu>li:hover>a {
    color: var(--color-primary)
}

.mainmenunav ul.mainmenu>li.last-elements {
    position: relative
}

.mainmenunav ul.mainmenu>li.last-elements ul.submenu li {
    position: relative
}

.mainmenunav ul.mainmenu>li.last-elements ul.submenu li ul.submenu {
    right: 100%;
    left: auto;
    top: 0
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mainmenunav ul.mainmenu>li.last-elements ul.submenu li ul.submenu {
        right:auto;
        left: initial;
        top: 0
    }
}

@media only screen and (max-width: 767px) {
    .mainmenunav ul.mainmenu>li.last-elements ul.submenu li ul.submenu {
        right:auto;
        left: initial;
        top: 0
    }
}

.mainmenunav ul.mainmenu>li:first-child {
    margin-left: 0
}

.mainmenunav ul.mainmenu>li:last-child {
    margin-right: 0
}

@media only screen and (min-width: 992px) {
    .header-area.header--transparent .mainmenunav ul.mainmenu>li>a {
        color:var(--color-white)
    }

    .header-area.header--transparent .mainmenunav ul.mainmenu>li:hover>a {
        color: var(--color-primary)
    }

    .header-area.header--transparent .header-wrapper a.rn-btn {
        border: 2px solid var(--color-extra1);
        color: var(--color-white)
    }

    .header-area.header-style-two.header--transparent .mainmenunav ul.mainmenu>li:hover>a {
        color: var(--color-primary)
    }
}

.header-area.header--transparent .header-wrapper a.rn-btn {
    border: 2px solid var(--color-extra1);
    color: var(--color-white)
}

.header-area.header-style-two.header--transparent .header-wrapper a.rn-btn {
    border: 2px solid var(--color-heading);
    color: var(--color-heading)
}

.humberger-menu span.text-white {
    color: var(--color-white) !important
}

.color-white .mainmenunav ul.mainmenu>li>a {
    color: var(--color-white)
}

.color-white .mainmenunav ul.mainmenu>li:hover>a {
    color: rgba(255,255,255,.6)
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .color-white .mainmenunav ul.mainmenu>li:hover>a {
        color:var(--color-primary)
    }
}

@media only screen and (max-width: 767px) {
    .color-white .mainmenunav ul.mainmenu>li:hover>a {
        color:var(--color-primary)
    }
}

.color-black .mainmenunav ul.mainmenu>li>a {
    color: #1d1d24
}

.color-black .mainmenunav ul.mainmenu>li:hover>a {
    color: var(--color-primary)
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .header-style-two .humberger-menu span.text-white {
        color:#1d1d24 !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .header-style-two .humberger-menu span.text-white {
        color:#1d1d24 !important
    }

    .mainmenunav ul.mainmenu>li ul.submenu li ul.submenu {
        left: auto;
        top: 0;
        text-align: left
    }

    .mainmenunav ul.mainmenu>li ul.submenu li ul.submenu li ul.submenu {
        left: auto;
        right: 0;
        top: 0
    }
}

@media only screen and (max-width: 767px) {
    .header-style-two .humberger-menu span.text-white {
        color:#1d1d24 !important
    }

    .mainmenunav ul.mainmenu>li ul.submenu li ul.submenu {
        left: auto;
        top: 0;
        text-align: left
    }

    .mainmenunav ul.mainmenu>li ul.submenu li ul.submenu li ul.submenu {
        left: auto;
        right: 0;
        top: 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .blog-single-page-title,.breadcrumb-inner {
        padding-top:20px !important
    }
}

@media only screen and (max-width: 767px) {
    .blog-single-page-title,.breadcrumb-inner {
        padding-top:20px !important
    }
}

.blog-single-page-title .title,.breadcrumb-inner .title {
    background: #f81f01;
    background: linear-gradient(145deg,#f81f01 0%,#ee076e 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    line-height: 1.4;
    font-size: 72px;
    margin: 0
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .blog-single-page-title .title,.breadcrumb-inner .title {
        line-height:1.3;
        font-size: 50px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .blog-single-page-title .title,.breadcrumb-inner .title {
        line-height:1.3;
        font-size: 50px
    }
}

@media only screen and (max-width: 767px) {
    .blog-single-page-title .title,.breadcrumb-inner .title {
        line-height:48px;
        font-size: 36px
    }
}

.breadcrumb-inner {
    text-align: center;
    position: relative;
    z-index: 2
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .breadcrumb-inner {
        padding-top:82px !important
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .breadcrumb-inner {
        padding-top:87px !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .breadcrumb-inner {
        padding-top:55px !important
    }
}

@media only screen and (max-width: 767px) {
    .breadcrumb-inner {
        padding-top:54px !important
    }
}

.breadcrumb-inner .page-list {
    margin-top: 19px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .breadcrumb-inner .page-list {
        margin-top:0
    }
}

@media only screen and (max-width: 767px) {
    .breadcrumb-inner .page-list {
        margin-top:0
    }
}

.breadcrumb-inner .page-list li {
    display: inline-block;
    color: #c6c9d8;
    position: relative;
    margin: 0;
    font-size: 14px;
    line-height: 1.7
}

.breadcrumb-inner .page-list li a {
    color: #c6c9d8
}

.breadcrumb-inner .page-list li:hover a {
    color: var(--color-primary)
}

.breadcrumb-inner .page-list li.item-current {
    color: var(--color-primary)
}

.breadcrumb-inner .page-list li.separator {
    padding: 0 20px
}

.breadcrumb-inner .page-list li.separator:before {
    content: "";
    background: #c6c9d8;
    opacity: .3;
    width: 4px;
    height: 4px;
    border-radius: 100%;
    position: absolute;
    left: 20px;
    top: -5px
}

.post-breadcrumbs {
    background: #f8f9fc;
    padding: 15px 0;
    text-align: center;
    padding-top: 13px
}

.post-breadcrumbs .page-list li {
    display: inline-block;
    position: relative;
    margin: 0;
    font-size: 14px;
    line-height: 1.7;
    color: var(--color-body)
}

.post-breadcrumbs .page-list li a {
    color: var(--color-body);
    transition: .3s
}

.post-breadcrumbs .page-list li a:hover {
    color: var(--color-primary)
}

.post-breadcrumbs .page-list li.separator {
    padding: 0 20px;
    position: relative
}

.post-breadcrumbs .page-list li.separator:before {
    content: "";
    background: #1f1f25;
    opacity: .2;
    width: 4px;
    height: 4px;
    border-radius: 100%;
    position: absolute;
    left: 20px;
    top: -5px
}

.rn-page-title .title {
    font-size: 72px;
    line-height: 1.3;
    margin-bottom: 0
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rn-page-title .title {
        font-size:56px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-page-title .title {
        font-size:50px
    }
}

@media only screen and (max-width: 767px) {
    .rn-page-title .title {
        font-size:40px;
        line-height: 59px
    }
}

.rn-page-title p {
    font-size: 20px;
    line-height: 27px;
    color: #c6c9d8;
    margin-top: 25px;
    margin-bottom: 0
}

.rn-page-title .page-list {
    margin-top: 20px
}

.breadcrupm-style--2 h2.title {
    text-transform: uppercase;
    font-size: 72px
}

@media only screen and (max-width: 767px) {
    .breadcrupm-style--2 h2.title {
        font-size:40px;
        line-height: 59px
    }
}

.breadcrupm-style--2 span {
    font-size: 22px;
    color: #c6c9d8
}

.backto-top>div {
    z-index: 999;
    width: 50px;
    height: 50px;
    line-height: 49px;
    border-radius: 50%;
    background-color: #fff;
    text-align: center;
    overflow: hidden;
    z-index: 999 !important;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12),0 3px 1px -2px rgba(0,0,0,.2)
}

.backto-top svg {
    font-size: 14px !important;
    color: #222;
    width: 27px;
    height: 27px
}

@media only screen and (max-width: 767px) {
    .rn-page-title-area {
        padding-bottom:100px !important;
        padding-top: 94px !important
    }
}

@media only screen and (max-width: 767px) {
    .rn-page-title-area .title {
        font-size:35px
    }
}

@media only screen and (max-width: 767px) {
    .rn-page-title-area p {
        font-size:16px;
        line-height: 28px
    }
}

@media only screen and (max-width: 767px) {
    .rn-page-title-area .rn-page-title {
        padding-top:0 !important
    }
}

.section-title {
    margin-top: -20px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .section-title {
        margin-top:0
    }
}

@media only screen and (max-width: 767px) {
    .section-title {
        margin-top:0
    }
}

.section-title h2 {
    margin-bottom: 8px
}

.section-title p {
    font-size: 18px;
    line-height: 30px;
    color: #717173;
    padding: 0 24%
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .section-title p {
        padding:0 18%
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .section-title p {
        padding:0 4%
    }
}

@media only screen and (max-width: 767px) {
    .section-title p {
        padding:0;
        font-size: 16px;
        line-height: 28px
    }
}

.section-title p a {
    color: #1d1d24;
    font-weight: 500
}

.section-title p a:hover {
    color: var(--color-primary)
}

@media only screen and (max-width: 767px) {
    .section-title p br {
        display:none
    }
}

.section-title.text-left p {
    padding: 0;
    padding: 0 47% 0 0
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .section-title.text-left p {
        padding:0 36% 0 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .section-title.text-left p {
        padding:0 8% 0 0
    }
}

@media only screen and (max-width: 767px) {
    .section-title.text-left p {
        padding:0
    }
}

.section-title.text-right p {
    padding: 0;
    padding: 0 0 0 50%
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .section-title.text-right p {
        padding:0 0 0 36%
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .section-title.text-right p {
        padding:0 0 0 8%
    }
}

@media only screen and (max-width: 767px) {
    .section-title.text-right p {
        padding:0
    }
}

.section-title .service-btn {
    margin-top: 36px
}

@media only screen and (max-width: 767px) {
    .section-title .service-btn {
        margin-top:12px
    }
}

.section-title.section-title--2 p {
    font-weight: 300;
    color: #717173
}

.section-title.service-style--3 p {
    padding: 0 21%;
    font-weight: 300;
    color: #717173
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .section-title.service-style--3 p {
        padding:0 7%
    }
}

@media only screen and (max-width: 767px) {
    .section-title.service-style--3 p {
        padding:0
    }
}

.section-title.service-style--3.text-left p {
    padding: 0 3% 0 0
}

.section-single-title h3 {
    font-size: 36px;
    line-height: 26px
}

@media only screen and (max-width: 767px) {
    .section-single-title h3 {
        font-size:26px;
        margin-bottom: 8px
    }
}

.section-title-default h2.title {
    line-height: 1.34;
    font-size: 48px
}

.rn-contact-area .section-title.text-left P,.rn-contact-area .section-title.text-right P {
    padding: 0
}

a.btn-transparent {
    color: #1f1f25;
    font-size: 16px;
    font-weight: 500;
    position: relative;
    display: inline-block;
    padding-bottom: 3px
}

a.btn-transparent:hover {
    color: var(--color-primary)
}

a.btn-transparent:after {
    position: absolute;
    content: "";
    left: 0;
    bottom: 0;
    width: 40px;
    height: 2px;
    background: var(--color-primary);
    opacity: .75
}

a.btn-transparent:hover:after {
    width: 100%
}

a.rbt-btn-dark {
    color: #1f1f25
}

a.rbt-btn-dark:after {
    background: #1f1f25
}

a.rbt-btn-dark:hover {
    color: var(--color-primary)
}

a.rbt-btn-dark:hover:after {
    background: var(--color-primary)
}

a.rbt-btn-gray {
    color: #c6c9d8
}

a.rbt-btn-gray:after {
    background: #c6c9d8
}

a.rbt-btn-gray:hover {
    color: var(--color-primary)
}

a.rbt-btn-gray:hover:after {
    background: var(--color-primary)
}

a.rbt-btn-white {
    color: #fff
}

a.rbt-btn-white:after {
    background: #fff
}

a.rbt-btn-white:hover {
    color: var(--color-primary)
}

a.rbt-btn-white:hover:after {
    background: var(--color-primary)
}

a.rbt-btn-theme {
    color: var(--color-primary)
}

a.rbt-btn-theme:after {
    background: var(--color-primary)
}

a.rbt-btn-theme:hover {
    color: var(--color-primary)
}

a.rbt-btn-theme:hover:after {
    background: var(--color-primary)
}

a.rn-btn,button.rn-btn {
    padding: 0 23px;
    height: 40px;
    display: inline-block;
    line-height: 34px;
    border: 2px solid var(--color-primary);
    border-radius: 4px;
    font-size: 14px;
    position: relative;
    z-index: 2;
    color: var(--color-primary);
    letter-spacing: .2px;
    background: 0 0
}

a.rn-btn:hover,button.rn-btn:hover {
    border: 2px solid var(--color-primary);
    transform: translateY(-3px);
    color: #fff;
    background: var(--color-primary)
}

a.rn-btn.btn-white,button.rn-btn.btn-white {
    border: 2px solid #fff;
    color: #fff
}

a.rn-btn.btn-white:hover,button.rn-btn.btn-white:hover {
    border-color: var(--color-primary)
}

button.rn-button-style--2,a.rn-button-style--2 {
    color: #c6c9d8;
    font-size: 16px;
    letter-spacing: 2px;
    border: 2px solid #b1b4c1;
    padding: 15px 40px;
    border-radius: 6px;
    display: inline-block;
    font-weight: 500;
    transition: .3s
}

@media only screen and (max-width: 767px) {
    button.rn-button-style--2,a.rn-button-style--2 {
        padding:9px 25px
    }
}

button.rn-button-style--2.btn_solid,a.rn-button-style--2.btn_solid {
    border: 2px solid var(--color-primary);
    background: var(--color-primary);
    color: #fff
}

button.rn-button-style--2.btn_solid.rbt-btn-dark,a.rn-button-style--2.btn_solid.rbt-btn-dark {
    border-color: #1f1f25;
    background-color: #1f1f25;
    color: #fff
}

button.rn-button-style--2.btn_solid.rbt-btn-dark:hover,a.rn-button-style--2.btn_solid.rbt-btn-dark:hover {
    box-shadow: 0 10px 15px 0 rgba(31,31,37,.1);
    background: 0 0;
    color: #1f1f25
}

button.rn-button-style--2.btn_solid.rbt-btn-gray,a.rn-button-style--2.btn_solid.rbt-btn-gray {
    border-color: #c6c9d8;
    background-color: #c6c9d8;
    color: #1f1f25
}

button.rn-button-style--2.btn_solid.rbt-btn-gray:hover,a.rn-button-style--2.btn_solid.rbt-btn-gray:hover {
    box-shadow: 0 10px 15px 0 rgba(198,201,216,.1);
    background: 0 0;
    color: #c6c9d8
}

button.rn-button-style--2.btn_solid.rbt-btn-white,a.rn-button-style--2.btn_solid.rbt-btn-white {
    border-color: #fff;
    background-color: #fff;
    color: var(--color-primary)
}

button.rn-button-style--2.btn_solid.rbt-btn-white:hover,a.rn-button-style--2.btn_solid.rbt-btn-white:hover {
    box-shadow: 0 10px 15px 0 rgba(255,255,255,.1);
    background: 0 0;
    color: #fff
}

button.rn-button-style--2.btn-size-md,a.rn-button-style--2.btn-size-md {
    padding: 9px 15px;
    letter-spacing: 1px;
    font-size: 15px
}

button.rn-button-style--2.btn-size-sm,a.rn-button-style--2.btn-size-sm {
    padding: 11px 15px;
    font-size: 13px;
    letter-spacing: 0;
    line-height: 13px
}

button.rn-button-style--2.btn_border,a.rn-button-style--2.btn_border {
    border: 2px solid var(--color-primary);
    color: var(--color-primary)
}

button.rn-button-style--2.btn_border:hover,a.rn-button-style--2.btn_border:hover {
    background: var(--color-primary);
    color: #fff
}

button.rn-button-style--2.btn_border.rbt-btn-gray,a.rn-button-style--2.btn_border.rbt-btn-gray {
    border: 2px solid #b1b4c1;
    color: #c6c9d8
}

button.rn-button-style--2.btn_border.rbt-btn-gray:hover,a.rn-button-style--2.btn_border.rbt-btn-gray:hover {
    background: var(--color-primary);
    color: #fff;
    border-color: var(--color-primary)
}

button.rn-button-style--2.btn_border.btn_border--dark,button.rn-button-style--2.btn_border.rbt-btn-dark,a.rn-button-style--2.btn_border.btn_border--dark,a.rn-button-style--2.btn_border.rbt-btn-dark {
    border: 2px solid #1f1f25;
    color: #1f1f25
}

button.rn-button-style--2.btn_border.btn_border--dark:hover,button.rn-button-style--2.btn_border.rbt-btn-dark:hover,a.rn-button-style--2.btn_border.btn_border--dark:hover,a.rn-button-style--2.btn_border.rbt-btn-dark:hover {
    background: #1f1f25;
    color: #fff;
    box-shadow: 0 10px 15px 0 rgba(31,31,37,.1)
}

button.rn-button-style--2.btn_border.rbt-btn-white,a.rn-button-style--2.btn_border.rbt-btn-white {
    border: 2px solid #fff;
    color: #fff
}

button.rn-button-style--2.btn_border.rbt-btn-white:hover,a.rn-button-style--2.btn_border.rbt-btn-white:hover {
    background: var(--color-primary);
    color: #fff;
    border-color: var(--color-primary)
}

button.rn-button-style--2.border-opacity-half,a.rn-button-style--2.border-opacity-half {
    border-color: rgba(31,31,37,.1)
}

button.rn-button-style--2.rn-btn-small,a.rn-button-style--2.rn-btn-small {
    padding: 10px 20px
}

button.rn-button-style--2.btn-primary-color:hover,a.rn-button-style--2.btn-primary-color:hover {
    border: 2px solid var(--color-primary);
    background: var(--color-primary);
    color: #fff
}

button.rn-button-style--2.btn-solid,a.rn-button-style--2.btn-solid {
    background: var(--color-primary);
    color: #fff
}

button.rn-button-style--2:hover,a.rn-button-style--2:hover {
    background: 0 0;
    color: var(--color-primary);
    box-shadow: 0 10px 15px 0 rgba(249,0,77,.1);
    transform: translateY(-5px)
}

.button-group {
    margin: -10px
}

.button-group a {
    margin: 10px
}

a.wp-block-button__link {
    background-color: var(--color-primary);
    border: 2px solid var(--color-primary);
    color: #fff;
    font-size: 16px;
    letter-spacing: 2px;
    transition: .3s
}

a.wp-block-button__link:hover {
    background: 0 0;
    color: var(--color-primary);
    -webkit-box-shadow: 0 10px 15px 0 rgba(249,0,77,.1);
    box-shadow: 0 10px 15px 0 rgba(249,0,77,.1);
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px)
}

a.wp-block-file__button,a.wp-block-search__button,a .wp-block-file__button,button.wp-block-file__button,button.wp-block-search__button,button .wp-block-file__button,.wp-block-file.wp-block-file__button,.wp-block-file.wp-block-search__button,.wp-block-file .wp-block-file__button {
    background-color: var(--color-primary) !important;
    border: 2px solid var(--color-primary);
    color: #fff;
    font-size: 16px;
    letter-spacing: 2px;
    transition: .4s
}

a.wp-block-file__button:hover,a.wp-block-search__button:hover,a .wp-block-file__button:hover,button.wp-block-file__button:hover,button.wp-block-search__button:hover,button .wp-block-file__button:hover,.wp-block-file.wp-block-file__button:hover,.wp-block-file.wp-block-search__button:hover,.wp-block-file .wp-block-file__button:hover {
    background: 0 0 !important;
    color: var(--color-primary) !important;
    box-shadow: 0 10px 15px 0 rgba(249,0,77,.1);
    transform: translateY(-5px)
}

.is-style-outline a.wp-block-button__link,.wp-block-button.is-style-outline a.wp-block-button__link {
    background: 0 0;
    color: var(--color-primary);
    border-color: var(--color-primary)
}

.is-style-outline a.wp-block-button__link:hover,.wp-block-button.is-style-outline a.wp-block-button__link:hover {
    background-color: var(--color-primary);
    color: #fff;
    border-color: var(--color-primary)
}

.wp-block-button__link {
    border-radius: 500px
}

.wp-block-button.is-style-squared a.wp-block-button__link {
    border-radius: 0
}

.yu2fvl {
    z-index: 9999;
    top: 0
}

.yu2fvl-iframe {
    display: block;
    height: 100%;
    width: 100%;
    border: 0
}

.yu2fvl-overlay {
    z-index: 9998;
    background: #000;
    opacity: .8
}

.yu2fvl-close {
    position: absolute;
    top: 1px;
    left: 100%;
    display: inline-block;
    height: 35px;
    width: 35px;
    line-height: 35px;
    text-align: center;
    background: #f10 !important;
    background-color: #f10 !important;
    color: #fff;
    border: 0;
    background: 0 0;
    cursor: pointer
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .yu2fvl-close {
        left:auto;
        right: 0;
        top: auto;
        bottom: 100%
    }
}

@media only screen and (max-width: 767px) {
    .yu2fvl-close {
        left:auto;
        right: 0;
        top: auto;
        bottom: 100%
    }

    .video h2 {
        color: #fff;
        font-size: 32px
    }

    .video h4 {
        font-size: 22px;
        line-height: 32px
    }
}

.rn-pagination .page-link-holder {
    margin-right: 10px
}

.rn-pagination ul.page-numbers,.rn-pagination ul.page-list {
    margin: -5px
}

.rn-pagination ul.page-numbers li,.rn-pagination ul.page-list li {
    display: inline-block;
    padding: 5px;
    margin-top: 0;
    margin-bottom: 0
}

.rn-pagination ul.page-numbers li a,.rn-pagination ul.page-list li a {
    padding: 0 10px;
    display: block;
    text-align: center;
    line-height: 38px;
    min-width: 42px;
    height: 42px;
    border: 2px solid var(--color-border);
    background: #fff;
    color: #000;
    position: relative;
    z-index: 2;
    font-weight: 600;
    border-radius: 4px;
    font-size: 14px
}

.rn-pagination ul.page-numbers li a:before,.rn-pagination ul.page-list li a:before {
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    content: "";
    z-index: -1;
    opacity: 0;
    visibility: hidden
}

.rn-pagination ul.page-numbers li a:hover,.rn-pagination ul.page-list li a:hover {
    color: #fff !important;
    border-color: var(--color-primary) !important
}

.rn-pagination ul.page-numbers li a:hover:before,.rn-pagination ul.page-list li a:hover:before {
    opacity: 1;
    visibility: visible
}

.rn-pagination ul.page-numbers li .current,.rn-pagination ul.page-list li .current {
    padding: 0 10px;
    display: block;
    text-align: center;
    line-height: 38px;
    min-width: 42px;
    height: 42px;
    position: relative;
    z-index: 2;
    font-weight: 600;
    border-radius: 4px;
    color: #fff;
    border: 2px solid var(--color-border);
    border-color: var(--color-primary)
}

.rn-pagination ul.page-numbers li .current:before,.rn-pagination ul.page-list li .current:before {
    opacity: 1;
    visibility: visible
}

.rn-pagination ul.page-numbers li.active a,.rn-pagination ul.page-list li.active a {
    color: #fff;
    border-color: var(--color-primary)
}

.rn-pagination ul.page-numbers li.active a:before,.rn-pagination ul.page-list li.active a:before {
    opacity: 1;
    visibility: visible
}

.rn-pagination .post-page-numbers,.page-links .post-page-numbers {
    padding: 0 10px;
    display: inline-block;
    text-align: center;
    line-height: 38px;
    min-width: 42px;
    height: 42px;
    border: 2px solid var(--color-border);
    background: #fff;
    color: #000;
    position: relative;
    z-index: 2;
    font-weight: 600;
    border-radius: 4px;
    font-size: 14px
}

.rn-pagination .post-page-numbers:before,.page-links .post-page-numbers:before {
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    content: "";
    z-index: -1;
    opacity: 0;
    visibility: hidden
}

.rn-pagination .post-page-numbers:hover,.page-links .post-page-numbers:hover {
    color: #fff;
    border-color: var(--color-primary)
}

.rn-pagination .post-page-numbers:hover:before,.page-links .post-page-numbers:hover:before {
    opacity: 1;
    visibility: visible
}

.rn-pagination .post-page-numbers.current,.page-links .post-page-numbers.current {
    border: 2px solid var(--color-primary);
    border-color: var(--color-primary);
    color: #fff
}

.rn-pagination .post-page-numbers.current:before,.page-links .post-page-numbers.current:before {
    opacity: 1;
    visibility: visible
}

ul.social-share {
    padding: 0;
    margin: 0;
    margin: -6px
}

ul.social-share li {
    margin: 6px
}

ul.social-share li a {
    width: 40px;
    display: inline-block;
    height: 40px;
    border: 2px solid rgba(198,201,216,.75);
    line-height: 35px;
    color: rgba(198,201,216,.75);
    border-radius: 100%;
    text-align: center;
    font-size: 14px
}

ul.social-share li:hover a {
    background: var(--color-primary);
    border-color: var(--color-primary);
    color: #fff;
    box-shadow: 0 10px 15px 0 rgba(0,0,0,.1);
    transform: translateY(-3px)
}

ul.social-share.color-theme li a {
    border-color: var(--color-primary);
    color: var(--color-primary)
}

ul.social-share.color-theme li a:hover {
    background: var(--color-primary);
    border-color: var(--color-primary);
    color: #fff
}

ul.social-share.rn-lg-size {
    margin-top: 0 !important
}

ul.social-share.rn-lg-size li a {
    width: 50px;
    height: 50px;
    line-height: 47px;
    font-size: 16px
}

ul.social-share.social-style--2 li a {
    border: 0 none;
    width: 30px;
    height: auto;
    text-align: left;
    line-height: inherit;
    font-size: 16px
}

@media only screen and (max-width: 575px) {
    ul.social-share.social-style--2 li a {
        width:28px;
        font-size: 14px
    }
}

ul.social-share.social-style--2 li:hover a {
    background: 0 0;
    box-shadow: none
}

ul.social-share.social-style--2.color-theme li a {
    color: var(--color-primary)
}

ul.social-share.social-style--2.color-theme li a:hover {
    color: currentColor
}

ul.social-share.social-style--2.color-black li a {
    color: #1d1d24;
    opacity: .8
}

ul.social-share.social-style--2.color-black li a:hover {
    color: var(--color-primary);
    opacity: 1
}

.screen-reader-text {
    border: 0;
    clip: rect(1px,1px,1px,1px);
    clip-path: inset(50%);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute !important;
    width: 1px;
    word-wrap: normal !important
}

.screen-reader-text:focus {
    background-color: #f1f1f1;
    border-radius: 3px;
    box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
    clip: auto !important;
    clip-path: none;
    color: #21759b;
    display: block;
    font-size: 14px;
    font-size: .875rem;
    font-weight: 700;
    height: auto;
    left: 5px;
    line-height: normal;
    padding: 15px 23px 14px;
    text-decoration: none;
    top: 5px;
    width: auto;
    z-index: 100000
}

#content[tabindex="-1"]:focus {
    outline: 0
}

.alignleft {
    display: inline;
    float: left;
    margin-right: 20px;
    margin-bottom: 20px;
    margin-top: 20px
}

.alignright {
    display: inline;
    float: right;
    margin-left: 20px;
    margin-top: 20px
}

.aligncenter {
    clear: both;
    display: block;
    margin-left: auto;
    margin-right: auto
}

.clear:before,.clear:after,.entry-content:before,.entry-content:after,.comment-content:before,.comment-content:after,.site-header:before,.site-header:after,.site-content:before,.site-content:after,.site-footer:before,.site-footer:after {
    content: "";
    display: table;
    table-layout: fixed
}

.clear:after,.entry-content:after,.comment-content:after,.site-header:after,.site-content:after,.site-footer:after {
    clear: both
}

.comment-content a {
    word-wrap: break-word
}

.bypostauthor {
    display: block
}

.sticky {
    display: block
}

.updated:not(.published) {
    display: none
}

.page-content,.entry-content,.entry-summary {
    margin: 1.5em 0 0
}

.page-links {
    clear: both;
    margin: 0 0 1.5em
}

.infinite-scroll .posts-navigation,.infinite-scroll.neverending .site-footer {
    display: none
}

.infinity-end.neverending .site-footer {
    display: block
}

.page-content .wp-smiley,.entry-content .wp-smiley,.comment-content .wp-smiley {
    border: none;
    margin-bottom: 0;
    margin-top: 0;
    padding: 0
}

embed,iframe,object {
    max-width: 100%
}

.custom-logo-link {
    display: inline-block
}

.wp-caption {
    margin-bottom: 1.5em;
    max-width: 100%
}

.wp-caption img[class*=wp-image-] {
    display: block;
    margin-left: auto;
    margin-right: auto
}

.wp-caption .wp-caption-text {
    margin: .8075em 0
}

.wp-caption-text {
    text-align: center
}

.gallery {
    margin-bottom: 1.5em
}

.gallery-item {
    display: inline-block;
    text-align: center;
    vertical-align: top;
    width: 100%
}

.gallery-columns-2 .gallery-item {
    max-width: 50%
}

.gallery-columns-3 .gallery-item {
    max-width: 33.33%
}

.gallery-columns-4 .gallery-item {
    max-width: 25%
}

.gallery-columns-5 .gallery-item {
    max-width: 20%
}

.gallery-columns-6 .gallery-item {
    max-width: 16.66%
}

.gallery-columns-7 .gallery-item {
    max-width: 14.28%
}

.gallery-columns-8 .gallery-item {
    max-width: 12.5%
}

.gallery-columns-9 .gallery-item {
    max-width: 11.11%
}

.gallery-caption {
    display: block
}

.preloader {
    background: #fff;
    width: 100vw;
    height: 100vh;
    position: fixed;
    z-index: 9999999
}

@keyframes bgg {
    0% {
        background: var(--color-primary-light)
    }

    50% {
        background: var(--color-primary)
    }

    100% {
        background: var(--color-primary)
    }
}

.loader {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    width: 70px;
    height: 70px;
    margin: auto
}

.loader .circle {
    position: absolute;
    width: 50px;
    height: 50px;
    opacity: 0;
    transform: rotate(225deg);
    animation-iteration-count: infinite;
    animation-name: orbit;
    animation-duration: 5.5s;
    left: 3px;
    top: -5px
}

.loader .circle:after {
    content: "";
    position: absolute;
    width: 8px;
    height: 8px;
    border-radius: 100%;
    animation: bgg 1.5s ease-in alternate infinite
}

.loader .circle:nth-child(2) {
    animation-delay: .24s
}

.loader .circle:nth-child(3) {
    animation-delay: .48s
}

.loader .circle:nth-child(4) {
    animation-delay: .72s
}

.loader .circle:nth-child(5) {
    animation-delay: .96s
}

@keyframes orbit {
    0% {
        transform: rotate(225deg);
        opacity: 1;
        animation-timing-function: ease-out
    }

    7% {
        transform: rotate(345deg);
        animation-timing-function: linear
    }

    30% {
        transform: rotate(455deg);
        animation-timing-function: ease-in-out
    }

    39% {
        transform: rotate(690deg);
        animation-timing-function: linear
    }

    70% {
        transform: rotate(815deg);
        opacity: 1;
        animation-timing-function: ease-out
    }

    75% {
        transform: rotate(945deg);
        animation-timing-function: ease-out
    }

    76% {
        transform: rotate(945deg);
        opacity: 0
    }

    100% {
        transform: rotate(945deg);
        opacity: 0
    }
}

.mesonry-list {
    margin: 0 -22px
}

.mesonry-list .masonry_item .portfolio-static {
    padding: 0 22px
}

.mesonry-list.grid-metro3 .resizer {
    width: 33.33%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mesonry-list.grid-metro3 .resizer {
        width:50%
    }
}

@media only screen and (max-width: 767px) {
    .mesonry-list.grid-metro3 .resizer {
        width:100%
    }
}

.mesonry-list.grid-metro3 .portfolio-33-33 {
    width: 33.33%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mesonry-list.grid-metro3 .portfolio-33-33 {
        width:50%
    }
}

@media only screen and (max-width: 767px) {
    .mesonry-list.grid-metro3 .portfolio-33-33 {
        width:100%
    }
}

.mesonry-list.grid-metro3.grid-lg-6 .resizer {
    width: 50%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mesonry-list.grid-metro3.grid-lg-6 .resizer {
        width:50%
    }
}

@media only screen and (max-width: 767px) {
    .mesonry-list.grid-metro3.grid-lg-6 .resizer {
        width:100%
    }
}

.mesonry-list.grid-metro3.grid-lg-6 .portfolio-33-33 {
    width: 50%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mesonry-list.grid-metro3.grid-lg-6 .portfolio-33-33 {
        width:50%
    }
}

@media only screen and (max-width: 767px) {
    .mesonry-list.grid-metro3.grid-lg-6 .portfolio-33-33 {
        width:100%
    }
}

.mesonry-list.grid-metro3.grid-lg-4 .resizer {
    width: 33.33%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mesonry-list.grid-metro3.grid-lg-4 .resizer {
        width:50%
    }
}

@media only screen and (max-width: 767px) {
    .mesonry-list.grid-metro3.grid-lg-4 .resizer {
        width:100%
    }
}

.mesonry-list.grid-metro3.grid-lg-4 .portfolio-33-33 {
    width: 33.33%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mesonry-list.grid-metro3.grid-lg-4 .portfolio-33-33 {
        width:50%
    }
}

@media only screen and (max-width: 767px) {
    .mesonry-list.grid-metro3.grid-lg-4 .portfolio-33-33 {
        width:100%
    }
}

.mesonry-list.grid-metro3.grid-lg-3 .resizer {
    width: 25%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mesonry-list.grid-metro3.grid-lg-3 .resizer {
        width:50%
    }
}

@media only screen and (max-width: 767px) {
    .mesonry-list.grid-metro3.grid-lg-3 .resizer {
        width:100%
    }
}

.mesonry-list.grid-metro3.grid-lg-3 .portfolio-33-33 {
    width: 25%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mesonry-list.grid-metro3.grid-lg-3 .portfolio-33-33 {
        width:50%
    }
}

@media only screen and (max-width: 767px) {
    .mesonry-list.grid-metro3.grid-lg-3 .portfolio-33-33 {
        width:100%
    }
}

.mesonry-list.grid-metro3.grid-lg-12 .resizer {
    width: 100%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mesonry-list.grid-metro3.grid-lg-12 .resizer {
        width:100%
    }
}

@media only screen and (max-width: 767px) {
    .mesonry-list.grid-metro3.grid-lg-12 .resizer {
        width:100%
    }
}

.mesonry-list.grid-metro3.grid-lg-12 .portfolio-33-33 {
    width: 100%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .mesonry-list.grid-metro3.grid-lg-12 .portfolio-33-33 {
        width:100%
    }
}

@media only screen and (max-width: 767px) {
    .mesonry-list.grid-metro3.grid-lg-12 .portfolio-33-33 {
        width:100%
    }
}

.portfolio {
    position: relative;
    min-height: 600px;
    width: 100%;
    padding-top: 35%;
    z-index: 4
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .portfolio {
        min-height:500px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio {
        min-height:500px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio {
        min-height:450px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio {
        min-height:400px
    }
}

.portfolio .thumbnail-inner {
    transition: transform .28s ease;
    z-index: 3;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-position: center;
    overflow: hidden;
    border-radius: 5px
}

.portfolio .thumbnail-inner:before {
    background-color: #f6004c;
    background-image: linear-gradient(#f6004c 10%,#000 100%);
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 5;
    opacity: 0
}

.portfolio .thumbnail {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-position: center;
    border-radius: 5px;
    background-color: #0a0a0a;
    transform: scale(1.13) translateZ(0);
    backface-visibility: hidden;
    transition: transform .28s ease;
    z-index: 4
}

.portfolio .thumbnail:after {
    background-color: rgba(45,45,45,.35);
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    content: " ";
    z-index: 1;
    display: block;
    border-radius: 5px;
    background-color: rgba(25,25,25,.37)
}

.portfolio .bg-blr-image {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-position: center;
    background-color: #0a0a0a;
    transform: translateY(38px);
    opacity: 0;
    z-index: 1
}

.portfolio .content {
    position: absolute;
    bottom: 40px;
    left: 40px;
    right: 40px;
    max-width: 100% !important;
    z-index: 10;
    padding: 0
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio .content {
        left:20px;
        right: 20px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio .content {
        left:20px;
        right: 20px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio .content {
        left:15px;
        right: 15px
    }
}

.portfolio .content .inner p {
    color: #c6c9d8;
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 15px
}

.portfolio .content .inner h4 {
    font-size: 24px;
    line-height: 36px;
    font-weight: 600
}

@media only screen and (max-width: 767px) {
    .portfolio .content .inner h4 {
        font-size:20px;
        line-height: 32px
    }
}

.portfolio .content .inner h4 a {
    color: #fff
}

.portfolio .content .inner .portfolio-button {
    margin-top: 35px;
    transition: .7s
}

@media only screen and (max-width: 767px) {
    .portfolio .content .inner .portfolio-button {
        margin-top:20px
    }
}

@media only screen and (max-width: 575px) {
    .portfolio .content .inner .portfolio-button {
        margin-top:25px
    }
}

.portfolio .content .inner .portfolio-button a.rn-btn {
    color: #fff;
    border-color: rgba(255,255,255,.3)
}

.portfolio .content .inner .portfolio-button a.rn-btn:hover {
    border-color: var(--color-primary)
}

.portfolio.text-center .content {
    position: absolute;
    bottom: 40px;
    left: 40px;
    max-width: 80% !important;
    z-index: 10;
    padding: 0;
    right: 40px;
    margin: 0 auto
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio.text-center .content {
        left:20px;
        right: 20px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio.text-center .content {
        left:15px;
        right: 15px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio.text-center .content {
        left:10px;
        right: 10px
    }
}

.portfolio:hover .thumbnail-inner {
    transform: scale(1.08) translateZ(0)
}

.portfolio:hover .thumbnail-inner:before {
    opacity: .85
}

.portfolio:hover .thumbnail {
    transform: scale(1) translateZ(0)
}

.portfolio:hover .thumbnail:after {
    background-color: rgba(25,25,25,.24)
}

.portfolio:hover .bg-blr-image {
    opacity: 0;
    z-index: 9
}

.portfolio.portfolio-style--2 .inner {
    margin: 0 20px
}

.transparent-link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 3
}

.portfolio-tilthover .portfolio {
    margin-top: 30px
}

@media only screen and (max-width: 767px) {
    .portfolio-tilthover .portfolio {
        min-height:400px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-tilthover .portfolio {
        min-height:400px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-tilthover .portfolio {
        min-height:400px
    }
}

.portfolio-tilthover .portfolio .thumbnail {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-position: center;
    border-radius: 5px;
    background-color: #0a0a0a;
    transform: scale(1.13) translateZ(0);
    backface-visibility: hidden;
    transition: transform .28s ease;
    z-index: 4
}

@media only screen and (max-width: 575px) {
    .portfolio-tilthover .portfolio .thumbnail {
        transform:scale(1) translateZ(0)
    }
}

.portfolio-tilthover .portfolio .thumbnail:after {
    display: none
}

@media only screen and (max-width: 575px) {
    .portfolio-tilthover .portfolio .thumbnail-inner {
        transform:scale(1) translateZ(0)
    }

    .portfolio-tilthover .portfolio .thumbnail-inner:before {
        opacity: .85
    }
}

.portfolio-tilthover .portfolio .bg-blr-image {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-position: center;
    background-color: #0a0a0a;
    transform: translateY(38px);
    opacity: 0;
    z-index: 1
}

@media only screen and (max-width: 575px) {
    .portfolio-tilthover .portfolio .bg-blr-image {
        opacity:0;
        z-index: 9
    }
}

.portfolio-tilthover .portfolio .content {
    opacity: 0
}

@media only screen and (max-width: 575px) {
    .portfolio-tilthover .portfolio .content {
        opacity:1
    }
}

.portfolio-tilthover .portfolio:hover .content {
    opacity: 1
}

.portfolio-tilthover .portfolio:hover .thumbnail-inner {
    transform: scale(1) translateZ(0)
}

.portfolio-tilthover .portfolio:hover .thumbnail-inner:before {
    opacity: .85
}

.portfolio-tilthover .portfolio:hover .thumbnail {
    transform: scale(1) translateZ(0)
}

.portfolio-tilthover .portfolio:hover .thumbnail:after {
    background-color: rgba(25,25,25,.24)
}

.portfolio-tilthover .portfolio:hover .bg-blr-image {
    opacity: 0;
    z-index: 9
}

.portfolio-slick-activation.item-fluid.slick-gutter-15 .slick-list {
    margin-left: -200px;
    margin-right: -200px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-slick-activation.item-fluid.slick-gutter-15 .slick-list {
        margin-left:30px;
        margin-right: 30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation.item-fluid.slick-gutter-15 .slick-list {
        margin-left:30px;
        margin-right: 30px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-slick-activation.item-fluid.slick-gutter-15 .slick-list {
        margin-left:15px;
        margin-right: 15px
    }
}

.portfolio-sacousel-inner .slick-list {
    margin-left: -200px;
    margin-right: -200px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-sacousel-inner .slick-list {
        margin-left:30px;
        margin-right: 30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-sacousel-inner .slick-list {
        margin-left:30px;
        margin-right: 30px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-sacousel-inner .slick-list {
        margin-left:30px;
        margin-right: 30px
    }
}

.portfolio-sacousel-inner .slick-slide {
    padding-left: 15px;
    padding-right: 15px;
    margin-bottom: -10px
}

.portfolio-sacousel-inner .slick-list {
    overflow: visible
}

.portfolio-sacousel-inner .slick-dots,.rn-slick-dot .slick-dots {
    bottom: -30px
}

@media only screen and (max-width: 575px) {
    .portfolio-sacousel-inner .slick-dots,.rn-slick-dot .slick-dots {
        bottom:-30px
    }
}

.portfolio-sacousel-inner .slick-dots li,.rn-slick-dot .slick-dots li {
    width: 30px;
    margin: 0;
    opacity: .35;
    position: relative
}

.portfolio-sacousel-inner .slick-dots li button:before,.rn-slick-dot .slick-dots li button:before {
    display: none
}

.portfolio-sacousel-inner .slick-dots li button:after,.rn-slick-dot .slick-dots li button:after {
    background: #333;
    width: 100%;
    display: block;
    content: "";
    position: absolute;
    left: 0;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    margin-left: 11px;
    background-color: transparent;
    box-shadow: inset 0 0 0 5px #000
}

.portfolio-sacousel-inner .slick-dots li.slick-active,.rn-slick-dot .slick-dots li.slick-active {
    opacity: 1
}

.portfolio-sacousel-inner .slick-dots li.slick-active button:after,.rn-slick-dot .slick-dots li.slick-active button:after {
    -webkit-transform: scale(2);
    transform: scale(2);
    box-shadow: inset 0 0 0 1px var(--color-primary);
    background-color: transparent;
    background-color: transparent !important
}

.portfolio-sacousel-inner.dot-light .slick-dots li button:after,.rn-slick-dot.dot-light .slick-dots li button:after {
    background: #fff;
    box-shadow: inset 0 0 0 5px #fff
}

.portfolio-sacousel-inner.dot-light .slick-dots li.slick-active,.rn-slick-dot.dot-light .slick-dots li.slick-active {
    opacity: 1
}

.portfolio-sacousel-inner.dot-light .slick-dots li.slick-active button:after,.rn-slick-dot.dot-light .slick-dots li.slick-active button:after {
    -webkit-transform: scale(2);
    transform: scale(2);
    box-shadow: inset 0 0 0 1px var(--color-primary);
    background-color: transparent;
    background-color: transparent !important
}

.portfolio-slick-activation {
    position: relative
}

@media only screen and (max-width: 767px) {
    .portfolio-slick-activation {
        margin-left:-5px;
        margin-right: -5px
    }
}

.portfolio-slick-activation button.slick-arrow {
    position: absolute;
    z-index: 3;
    background: 0 0;
    font-size: 20px;
    width: 253px;
    height: 100%
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-slick-activation button.slick-arrow {
        width:136px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation button.slick-arrow {
        width:100px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-slick-activation button.slick-arrow {
        width:100px;
        display: none !important
    }
}

.portfolio-slick-activation button.slick-arrow:before {
    line-height: 1;
    opacity: .75;
    font-size: 30px;
    position: relative;
    top: -14px;
    transition: .5s
}

.portfolio-slick-activation button.slick-arrow.slick-prev {
    left: 0;
    background: -moz-linear-gradient(left,#000 0%,rgba(0,0,0,0) 100%);
    background: -webkit-linear-gradient(left,#000 0%,rgba(0,0,0,0) 100%);
    background: linear-gradient(to right,#000 0%,rgba(0,0,0,0) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000",endColorstr="#00000000",GradientType=1)
}

.portfolio-slick-activation button.slick-arrow.slick-prev:before {
    content: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/slick-arrow-left.png)
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation button.slick-arrow.slick-prev {
        display:none !important
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-slick-activation button.slick-arrow.slick-prev {
        display:none !important
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .portfolio-slick-activation button.slick-arrow.slick-prev {
        display:none !important
    }
}

.portfolio-slick-activation button.slick-arrow.slick-next {
    right: 0;
    background: -moz-linear-gradient(right,#000 0%,rgba(0,0,0,0) 100%);
    background: -webkit-linear-gradient(right,#000 0%,rgba(0,0,0,0) 100%);
    background: linear-gradient(to left,#000 0%,rgba(0,0,0,0) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000",endColorstr="#00000000",GradientType=1)
}

.portfolio-slick-activation button.slick-arrow.slick-next:before {
    content: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/slick-arrow-right.png)
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation button.slick-arrow.slick-next {
        display:none !important
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-slick-activation button.slick-arrow.slick-next {
        display:none !important
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .portfolio-slick-activation button.slick-arrow.slick-next {
        display:none !important
    }
}

.portfolio-slick-activation button.slick-arrow:hover.slick-prev {
    padding-right: 50px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation button.slick-arrow:hover.slick-prev {
        padding-right:10px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-slick-activation button.slick-arrow:hover.slick-prev {
        padding-right:10px
    }
}

.portfolio-slick-activation button.slick-arrow:hover.slick-next {
    padding-left: 50px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation button.slick-arrow:hover.slick-next {
        padding-right:10px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-slick-activation button.slick-arrow:hover.slick-next {
        padding-right:10px
    }
}

.portfolio-slick-activation button.slick-arrow:hover:before {
    opacity: 1
}

.portfolio-slick-activation.layout-2 button.slick-arrow {
    position: absolute;
    z-index: 3;
    background: 0 0;
    font-size: 20px;
    width: auto;
    height: 40px;
    left: -60px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow {
        width:136px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow {
        width:100px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow {
        width:100px;
        display: none !important
    }
}

.portfolio-slick-activation.layout-2 button.slick-arrow:before {
    line-height: 1;
    opacity: .75;
    font-size: 30px;
    position: relative;
    transition: .5s;
    filter: invert(.5)
}

.portfolio-slick-activation.layout-2 button.slick-arrow.slick-prev:before {
    content: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/slick-arrow-left.png)
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow.slick-prev {
        display:none !important
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow.slick-prev {
        display:none !important
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow.slick-prev {
        display:none !important
    }
}

.portfolio-slick-activation.layout-2 button.slick-arrow.slick-next {
    left: auto;
    right: -60px
}

.portfolio-slick-activation.layout-2 button.slick-arrow.slick-next:before {
    content: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/slick-arrow-right.png)
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow.slick-next {
        display:none !important
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow.slick-next {
        display:none !important
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow.slick-next {
        display:none !important
    }
}

.portfolio-slick-activation.layout-2 button.slick-arrow:hover.slick-prev {
    padding-right: 50px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow:hover.slick-prev {
        padding-right:10px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow:hover.slick-prev {
        padding-right:10px
    }
}

.portfolio-slick-activation.layout-2 button.slick-arrow:hover.slick-next {
    padding-left: 50px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow:hover.slick-next {
        padding-right:10px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-slick-activation.layout-2 button.slick-arrow:hover.slick-next {
        padding-right:10px
    }
}

.portfolio-slick-activation.layout-2 button.slick-arrow:hover:before {
    opacity: 1
}

.rn-slick-activation.item-fluid .slick-dots {
    bottom: -60px
}

.slick-space-gutter--15 {
    margin-left: -15px;
    margin-right: -15px
}

.slick-space-gutter--15 .slick-slide {
    padding-left: 15px;
    padding-right: 15px
}

.slick-space-gutter--15 .portfolio {
    margin: 40px 0
}

.slickdot--20 .slick-dots {
    bottom: -20px
}

.portfolio-style--3 {
    position: relative;
    margin-bottom: 40px;
    overflow: hidden;
    border-radius: 6px
}

.portfolio-style--3 .thumbnail a {
    display: block;
    position: relative;
    z-index: 1
}

.portfolio-style--3 .thumbnail a:after {
    background: linear-gradient(to bottom,#fc004d 0,#000 100%);
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    content: "";
    z-index: 1;
    opacity: 0
}

@media only screen and (max-width: 575px) {
    .portfolio-style--3 .thumbnail a:after {
        opacity:.85;
        top: 0
    }
}

.portfolio-style--3 .content {
    position: absolute;
    bottom: -92px;
    width: 100%;
    padding: 50px 35px;
    z-index: 3
}

@media only screen and (max-width: 575px) {
    .portfolio-style--3 .content {
        bottom:0
    }
}

@media only screen and (max-width: 575px) {
    .portfolio-style--3 .content {
        padding:30px 20px
    }
}

.portfolio-style--3 .content:before {
    position: absolute;
    content: "";
    background: linear-gradient(to bottom,rgba(0,0,0,0) 0,#000 70%);
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 1;
    z-index: -1
}

@media only screen and (max-width: 575px) {
    .portfolio-style--3 .content:before {
        opacity:0
    }
}

.portfolio-style--3 .content p.portfoliotype {
    font-size: 14px;
    margin-bottom: 5px;
    color: #c6c9d8
}

.portfolio-style--3 .content h4.title {
    margin-bottom: 0
}

.portfolio-style--3 .content h4.title a {
    color: #fff;
    font-size: 24px;
    font-weight: 500;
    line-height: 36px
}

@media only screen and (max-width: 767px) {
    .portfolio-style--3 .content h4.title a {
        font-size:18px;
        line-height: 29px
    }
}

.portfolio-style--3 .content .portfolio-btn {
    margin-top: 35px;
    transition: .7s;
    opacity: 0;
    visibility: hidden
}

@media only screen and (max-width: 575px) {
    .portfolio-style--3 .content .portfolio-btn {
        margin-top:22px
    }
}

@media only screen and (max-width: 575px) {
    .portfolio-style--3 .content .portfolio-btn {
        opacity:1;
        visibility: visible
    }
}

.portfolio-style--3:hover .content {
    bottom: 0
}

.portfolio-style--3:hover .content:before {
    opacity: 0
}

.portfolio-style--3:hover .thumbnail a img {
    transform: scale(1.1)
}

.portfolio-style--3:hover .thumbnail a:before {
    opacity: 0
}

.portfolio-style--3:hover .thumbnail a:after {
    opacity: .85;
    top: 0
}

.portfolio-style--3:hover .content .portfolio-btn {
    opacity: 1;
    visibility: visible
}

.row--5 .portfolio-style--3 {
    margin-bottom: 10px
}

a.item-portfolio-static {
    transition: inherit
}

.item-portfolio-static {
    margin-top: 60px;
    margin-bottom: 0
}

@media only screen and (max-width: 767px) {
    .item-portfolio-static {
        margin-top:30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .item-portfolio-static {
        margin-top:30px
    }
}

.item-portfolio-static .inner {
    padding-top: 20px
}

.item-portfolio-static .inner p {
    margin-bottom: 5px;
    font-size: 16px;
    color: var(--color-heading);
    transition: .3s
}

.item-portfolio-static .inner p:hover {
    color: var(--color-primary)
}

.item-portfolio-static .inner .gallery-title {
    color: var(--color-heading);
    transition: .3s;
    margin-bottom: 0
}

.item-portfolio-static .inner .gallery-title:hover {
    color: var(--color-primary)
}

.item-portfolio-static .thumbnail img {
    transition: .3s;
    width: 100%;
    border-radius: 5px;
    box-shadow: 0 25px 65px rgba(0,0,0,.1)
}

.item-portfolio-static:hover .thumbnail img {
    box-shadow: 0 50px 80px -10px rgba(0,0,0,.17);
    transform: translate3d(0,-10px,0)
}

.portfolio-content-wrap-row.row--5 {
    margin-top: -10px
}

.dialog-type-lightbox {
    background-color: rgba(0,0,0,.8) !important
}

.dialog-lightbox-widget .animated {
    opacity: 1;
    transform: none
}

.rn-service-area .section-title.text-left p {
    padding: 0;
    margin-bottom: 15px
}

.single-service .icon svg {
    width: 54px;
    height: 54px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-service h3.title {
        font-size:22px
    }
}

.single-service.service__style--1 {
    padding: 40px 0;
    z-index: 2
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--1 {
        padding:15px 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--1 {
        padding:20px 0
    }
}

.single-service.service__style--1 .icon {
    font-size: 54px;
    font-weight: 400;
    margin-bottom: 23px;
    display: inline-flex;
    color: var(--color-primary)
}

.single-service.service__style--1 .icon svg {
    stroke-width: 1 !important
}

.single-service.service__style--1 .icon img {
    margin-bottom: 34px
}

.single-service.service__style--1 .content .title {
    margin-bottom: 19px;
    font-weight: 400;
    font-size: 24px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-service.service__style--1 .content .title {
        font-size:22px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--1 .content .title {
        font-size:22px
    }
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--1 .content .title {
        font-size:18px
    }
}

.single-service.service__style--1 .content .title a {
    color: inherit
}

.single-service.service__style--1 .content p {
    color: #717173
}

.single-service.service__style--1.text-white {
    z-index: 2
}

.single-service.service__style--1.text-white .content h3.title {
    color: #c6c9d8
}

.single-service.service__style--1.text-white .content p {
    color: #c6c9d8
}

.single-service.service__style--2 a {
    display: block
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--2 {
        padding:30px 25px
    }
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--2 {
        padding:35px 25px
    }
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--2 {
        margin-top:30px
    }
}

.single-service.service__style--2 .icon {
    font-size: 54px;
    font-weight: 400;
    margin-bottom: 23px;
    display: inline-flex;
    color: var(--color-primary)
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--2 .icon {
        color:#fff
    }
}

.single-service.service__style--2 .icon svg {
    stroke-width: 1 !important
}

.single-service.service__style--2 .content .title {
    margin-bottom: 19px;
    font-weight: 500;
    font-size: 24px
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--2 .content .title {
        color:#fff
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-service.service__style--2 .content .title {
        font-size:20px;
        margin-bottom: 14px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--2 .content .title {
        font-size:22px
    }
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--2 .content .title {
        font-size:18px;
        margin-bottom: 14px
    }
}

.single-service.service__style--2 .content .title a {
    color: inherit
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--2 .content .title a {
        color:#fff
    }
}

.single-service.service__style--2 .content p {
    color: #717173;
    font-size: 18px;
    line-height: 30px
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--2 .content p {
        font-size:16px;
        line-height: 28px
    }
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--2 .content p {
        color:#fff
    }
}

.single-service.service__style--2:hover a {
    transform: translateY(-5px)
}

.single-service.service__style--2:hover .icon {
    color: #fff
}

.single-service.service__style--2.service-left-align {
    display: flex;
    padding: 50px 24px
}

.single-service.service__style--2.service-left-align .icon {
    padding-right: 20px
}

.single-service.service__style--2 a {
    padding: 60px 45px;
    z-index: 2;
    border-radius: 10px
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--2 a {
        padding:60px 14px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-service.service__style--2 a {
        padding:50px 11px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--2 a {
        padding:60px 25px
    }
}

.single-service.service__style--2 a:before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    background-image: linear-gradient(to right,#f61b10,#ef0963);
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0;
    visibility: hidden;
    border-radius: 10px
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--2 a:before {
        opacity:1;
        visibility: visible
    }
}

.single-service.service__style--2.bg-color-gray {
    margin-top: 0;
    height: 100%
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-service.service__style--2.bg-color-gray {
        padding:0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--2.bg-color-gray {
        padding:0
    }
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--2.bg-color-gray {
        padding:0
    }
}

.single-service.service__style--2.bg-color-gray a {
    display: flex;
    height: 100%;
    background: #f6f6f6;
    position: relative
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-service.service__style--2.bg-color-gray a {
        padding:33px 22px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--2.bg-color-gray a {
        padding:35px 20px
    }
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--2.bg-color-gray a {
        padding:35px 20px
    }
}

.single-service.service__style--2:hover a {
    box-shadow: 0 10px 25px 10px rgba(0,0,0,.1)
}

.single-service.service__style--2:hover a:before {
    opacity: 1;
    visibility: visible
}

.single-service.service__style--2:hover.bg-color-gray a {
    background: 0 0
}

.single-service.service__style--3 {
    padding: 40px 0;
    z-index: 2;
    margin-top: 50px
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--3 {
        padding:15px 0;
        margin-top: 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--3 {
        padding:20px 0
    }
}

.single-service.service__style--3 .icon {
    font-size: 54px;
    font-weight: 400;
    display: inline-flex;
    color: var(--color-primary)
}

.single-service.service__style--3 .icon img {
    margin-bottom: 30px
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--3 .icon img {
        margin-bottom:20px
    }
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--3 .icon img {
        margin-bottom:13px;
        height: 45px
    }
}

.single-service.service__style--3 .content .title {
    margin-bottom: 15px;
    font-weight: 400;
    font-size: 24px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-service.service__style--3 .content .title {
        font-size:22px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--3 .content .title {
        font-size:22px
    }
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--3 .content .title {
        font-size:18px;
        margin-bottom: 14px
    }
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--3 .content .title {
        color:#fff
    }
}

.single-service.service__style--3 .content p {
    opacity: .75;
    font-weight: 300;
    color: #c6c9d8;
    font-size: 18px;
    line-height: 30px
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--3 .content p {
        font-size:16px;
        line-height: 28px
    }
}

.single-service.service__style--3.text-white {
    z-index: 2
}

.single-service.service__style--3.text-white .content h3.title {
    color: #c6c9d8
}

.single-service.service__style--3.text-white .content p {
    color: #c6c9d8
}

.single-service.service__style--4,.single-service.service__style--5 {
    padding: 30px 38px;
    z-index: 2;
    border-radius: 10px;
    position: relative;
    cursor: pointer
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-service.service__style--4,.single-service.service__style--5 {
        padding:20px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--4,.single-service.service__style--5 {
        padding:30px 25px
    }
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--4,.single-service.service__style--5 {
        padding:20px
    }
}

.single-service.service__style--4.large-size,.single-service.service__style--5.large-size {
    padding: 60px 45px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-service.service__style--4.large-size,.single-service.service__style--5.large-size {
        padding:25px 20px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--4.large-size,.single-service.service__style--5.large-size {
        padding:30px 25px
    }
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--4.large-size,.single-service.service__style--5.large-size {
        padding:25px 20px
    }
}

.single-service.service__style--4:before,.single-service.service__style--5:before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    background-image: -webkit-gradient(linear,left top,right top,from(#f61b10),to(#ef0963));
    background-image: -webkit-linear-gradient(left,#f61b10,#ef0963);
    background-image: linear-gradient(90deg,#f61b10,#ef0963);
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0;
    visibility: hidden;
    border-radius: 10px
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--4:before,.single-service.service__style--5:before {
        opacity:1;
        visibility: visible
    }
}

.single-service.service__style--4 a,.single-service.service__style--5 a {
    display: block;
    transition: .3s
}

.single-service.service__style--4 .icon,.single-service.service__style--5 .icon {
    display: inline-flex;
    font-size: 54px;
    font-weight: 400;
    margin-bottom: 23px;
    display: inline-flex;
    color: var(--color-primary)
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--4 .icon,.single-service.service__style--5 .icon {
        margin-bottom:18px
    }
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--4 .icon,.single-service.service__style--5 .icon {
        color:#fff
    }
}

.single-service.service__style--4 .icon svg,.single-service.service__style--5 .icon svg {
    stroke-width: 1 !important
}

.single-service.service__style--4 .content .title,.single-service.service__style--5 .content .title {
    margin-bottom: 19px;
    font-weight: 500;
    font-size: 24px;
    line-height: 1.4074
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--4 .content .title,.single-service.service__style--5 .content .title {
        color:#fff
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-service.service__style--4 .content .title,.single-service.service__style--5 .content .title {
        font-size:22px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--4 .content .title,.single-service.service__style--5 .content .title {
        font-size:22px
    }
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--4 .content .title,.single-service.service__style--5 .content .title {
        font-size:18px;
        margin-bottom: 10px
    }
}

.single-service.service__style--4 .content p,.single-service.service__style--5 .content p {
    font-size: 18px;
    line-height: 30px
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--4 .content p,.single-service.service__style--5 .content p {
        font-size:16px;
        line-height: 28px
    }
}

@media only screen and (max-width: 575px) {
    .single-service.service__style--4 .content p,.single-service.service__style--5 .content p {
        color:#fff
    }
}

.single-service.service__style--4:hover,.single-service.service__style--5:hover {
    box-shadow: 0 10px 25px 10px rgba(0,0,0,.1);
    -webkit-transform: translateY(-5px);
    transform: translateY(-5px)
}

.single-service.service__style--4:hover:before,.single-service.service__style--5:hover:before {
    opacity: 1;
    visibility: visible
}

.single-service.service__style--4:hover .icon,.single-service.service__style--5:hover .icon {
    color: #fff
}

.single-service.service__style--4:hover .content .title,.single-service.service__style--5:hover .content .title {
    color: #fff
}

.single-service.service__style--4:hover .content p,.single-service.service__style--5:hover .content p {
    color: #fff
}

.single-service.service__style--4:hover .content a,.single-service.service__style--5:hover .content a {
    color: #fff
}

.service_stylefour-large .service__style--4 {
    padding: 60px 45px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .service_stylefour-large .service__style--4 {
        padding:25px 20px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .service_stylefour-large .service__style--4 {
        padding:30px 25px
    }
}

@media only screen and (max-width: 767px) {
    .service_stylefour-large .service__style--4 {
        padding:25px 20px
    }
}

.rn-paralax-service .service__style--2 {
    z-index: 2;
    padding: 40px;
    background: rgba(255,255,255,.3);
    margin-top: 40px;
    overflow: hidden;
    border: 2px solid transparent
}

@media only screen and (max-width: 767px) {
    .rn-paralax-service .service__style--2 {
        padding:30px 20px;
        background: 0 0;
        margin-top: 30px
    }
}

.rn-paralax-service .service__style--2 .icon {
    color: #fff
}

.rn-paralax-service .service__style--2 .content h3.title {
    font-size: 19px;
    color: #fff
}

.rn-paralax-service .service__style--2 .content p {
    font-size: 18px;
    line-height: 30px
}

@media only screen and (max-width: 767px) {
    .rn-paralax-service .service__style--2 .content p {
        font-size:16px;
        line-height: 28px
    }
}

.rn-paralax-service .service__style--2:hover {
    border: 2px solid var(--color-primary)
}

.rn-paralax-service .service__style--2:hover:before {
    border-radius: 0
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .service-one-wrapper {
        margin:0 -40px
    }
}

@media only screen and (max-width: 767px) {
    .service-one-wrapper {
        margin:0 -40px
    }
}

@media only screen and (max-width: 575px) {
    .service-one-wrapper {
        margin:0 -15px
    }
}

.standard-service {
    margin: 30px 0
}

.standard-service .content {
    margin-top: 30px
}

.standard-service .thumbnai img {
    border-radius: 5px;
    width: 100%
}

.corporate-business-banner .slide.slide-style-2 {
    padding-top: 0
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .corporate-business-banner .slide.slide-style-2 {
        padding-top:0;
        padding-bottom: 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .corporate-business-banner .slide.slide-style-2 {
        padding-top:0;
        padding-bottom: 0
    }
}

@media only screen and (max-width: 767px) {
    .corporate-business-banner .slide.slide-style-2 {
        padding-top:0;
        padding-bottom: 0
    }
}

.service-area--5 .section-title {
    margin-bottom: 5px
}

.single-service.service__style--5 {
    box-shadow: 0 25px 70px rgba(0,0,0,.07);
    background: #fff;
    padding: 40px;
    border-radius: 5px
}

.single-service.service__style--5:before {
    border-radius: 5px
}

.single-service.service__style--5 .service {
    display: flex
}

.single-service.service__style--5 .icon {
    margin-right: 30px
}

.single-service.service__style--5 .content p {
    font-size: 16px
}

.contact-us-today .single-service.service__style--5 {
    cursor: default
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .contact-us-today .single-service.service__style--5 .service {
        display:block
    }

    .contact-us-today .single-service.service__style--5 {
        padding: 30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-service.service__style--5 .service {
        display:block
    }

    .single-service.service__style--5 {
        padding: 30px
    }

    .contact-us-today .single-service.service__style--5 .service {
        display: block
    }

    .contact-us-today .single-service.service__style--5 {
        padding: 30px 17px
    }

    .contact-us-today .single-service.service__style--5 .content p {
        font-size: 14px
    }

    .contact-us-today .single-service.service__style--5 .icon {
        margin-right: 0;
        margin-bottom: 15px
    }
}

@media only screen and (max-width: 767px) {
    .single-service.service__style--5 .service {
        display:block
    }

    .single-service.service__style--5 {
        padding: 30px
    }

    .contact-us-today .single-service.service__style--5 .service {
        display: block
    }

    .contact-us-today .single-service.service__style--5 {
        padding: 30px 17px
    }

    .contact-us-today .single-service.service__style--5 .content p {
        font-size: 14px
    }

    .contact-us-today .single-service.service__style--5 .icon {
        margin-right: 0;
        margin-bottom: 15px
    }
}

@media only screen and (max-width: 575px) {
    .contact-us-today .single-service.service__style--5 .content p a {
        color:#fff
    }
}

.section-title span.sub-title {
    color: var(--color-primary);
    font-size: 16px;
    letter-spacing: 1px
}

.slider-fixed--height {
    min-height: 1080px;
    width: 100%
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .slider-fixed--height {
        min-height:900px
    }
}

@media only screen and (max-width: 767px) {
    .slider-fixed--height {
        min-height:auto;
        padding: 60px 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slider-fixed--height {
        min-height:auto;
        padding: 80px 0;
        padding-bottom: 60px
    }
}

.react-parallax img {
    object-fit: cover
}

.personal-portfolio-slider {
    position: relative
}

@media only screen and (max-width: 767px) {
    .personal-portfolio-slider:before {
        position:absolute;
        content: "";
        width: 100%;
        height: 100%;
        background: #fff;
        opacity: .7
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .personal-portfolio-slider:before {
        position:absolute;
        content: "";
        width: 100%;
        height: 100%;
        background: #fff;
        opacity: .7
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .personal-portfolio-slider:before {
        position:absolute;
        content: "";
        width: 100%;
        height: 100%;
        background: #fff;
        opacity: .7
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slide.personal-portfolio-slider.slider-style-3,.slide.designer-portfolio.slider-style-3 {
        padding:150px 0;
        min-width: auto;
        height: auto
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.personal-portfolio-slider.slider-style-3,.slide.designer-portfolio.slider-style-3 {
        padding:150px 0
    }
}

@media only screen and (max-width: 767px) {
    .slide.personal-portfolio-slider.slider-style-3,.slide.designer-portfolio.slider-style-3 {
        padding:100px 0;
        padding-bottom: 80px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.personal-portfolio-slider.slider-style-3 .inner,.slide.designer-portfolio.slider-style-3 .inner {
        padding-top:76px
    }
}

@media only screen and (max-width: 767px) {
    .slide.personal-portfolio-slider.slider-style-3 .inner,.slide.designer-portfolio.slider-style-3 .inner {
        padding-top:38px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slide.personal-portfolio-slider.slider-style-3 .inner h1.title,.slide.designer-portfolio.slider-style-3 .inner h1.title {
        font-size:58px;
        line-height: 75px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.personal-portfolio-slider.slider-style-3 .inner h1.title,.slide.designer-portfolio.slider-style-3 .inner h1.title {
        font-size:53px;
        line-height: 70px
    }
}

@media only screen and (max-width: 767px) {
    .slide.personal-portfolio-slider.slider-style-3 .inner h1.title,.slide.designer-portfolio.slider-style-3 .inner h1.title {
        font-size:32px;
        line-height: 49px
    }
}

.slide.designer-portfolio {
    height: 700px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.designer-portfolio {
        height:auto
    }
}

@media only screen and (max-width: 767px) {
    .slide.designer-portfolio {
        height:auto
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.designer-portfolio.slider-style-3 {
        height:auto;
        padding: 100px 0
    }
}

@media only screen and (max-width: 767px) {
    .slide.designer-portfolio.slider-style-3 {
        height:auto;
        padding: 100px 0
    }
}

.slide.designer-portfolio.slider-style-3 .inner {
    padding: 0
}

.slide.designer-portfolio.slider-style-3 .inner h1.title {
    width: 100%
}

.slide.designer-portfolio.slider-style-3 .inner .description {
    margin-bottom: 0
}

@media only screen and (max-width: 767px) {
    .slide.designer-portfolio.slider-style-3 .inner .description {
        font-size:35px;
        line-height: 27px
    }
}

.slide.designer-portfolio.slider-style-3 .designer-thumbnail img {
    border-radius: 100%;
    padding: 0;
    border: 14px solid #fff;
    width: 394px;
    height: 394px;
    box-shadow: 0 20px 40px rgba(0,0,0,.1),0 20px 40px rgba(255,255,255,.15)
}

@media only screen and (max-width: 575px) {
    .slide.designer-portfolio.slider-style-3 .designer-thumbnail img {
        width:auto;
        height: auto
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .header-style-two .header-right .header-btn {
        margin-left:7px
    }
}

@media only screen and (max-width: 767px) {
    .bg_image--16 {
        background-position:71% center
    }
}

.slide .inner {
    padding-top: 100px
}

@media only screen and (max-width: 767px) {
    .slide .inner {
        padding-top:70px
    }
}

@media only screen and (max-width: 575px) {
    .slide .inner {
        padding-top:30px
    }
}

.slide .inner h1.title {
    font-size: 125px;
    font-weight: 900;
    text-transform: uppercase;
    font-family: "Montserrat",sans-serif;
    font-weight: 900;
    line-height: 130px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .slide .inner h1.title {
        font-size:100px;
        line-height: 112px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slide .inner h1.title {
        font-size:90px;
        line-height: 103px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide .inner h1.title {
        font-size:70px;
        line-height: 82px;
        margin-bottom: 0
    }
}

@media only screen and (max-width: 767px) {
    .slide .inner h1.title {
        font-size:50px;
        line-height: 70px;
        margin-bottom: 0
    }
}

@media only screen and (max-width: 575px) {
    .slide .inner h1.title {
        font-size:40px;
        line-height: 50px;
        margin-bottom: 20px
    }
}

.slide.slide-style-1 .inner {
    padding-top: 100px
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-1 .inner {
        padding-top:70px
    }
}

@media only screen and (max-width: 575px) {
    .slide.slide-style-1 .inner {
        padding-top:30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-1 .inner {
        padding-top:50px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-1 .inner h1.title {
        font-size:70px;
        line-height: 82px;
        margin-bottom: 26px
    }
}

.slide.slide-style-2 {
    padding-top: 230px;
    padding-bottom: 284px;
    overflow: hidden
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .slide.slide-style-2 {
        padding-top:150px;
        padding-bottom: 150px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slide.slide-style-2 {
        padding-top:160px;
        padding-bottom: 170px;
        min-height: auto
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-2 {
        padding-top:150px;
        padding-bottom: 150px;
        min-height: auto
    }
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2 {
        padding-top:150px;
        padding-bottom: 90px;
        min-height: auto
    }
}

.slide.slide-style-2.fullscreen {
    min-height: 950px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .slide.slide-style-2.fullscreen {
        padding-top:160px;
        padding-bottom: 160px;
        min-height: auto
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slide.slide-style-2.fullscreen {
        min-height:auto
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-2.fullscreen {
        min-height:auto
    }
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2.fullscreen {
        min-height:auto
    }
}

.slide.slide-style-2 .inner {
    padding-top: 100px
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2 .inner {
        padding-top:0;
        text-align: center !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-2 .inner {
        padding-top:30px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slide.slide-style-2 .inner {
        padding-top:30px
    }
}

.slide.slide-style-2 .inner>span {
    color: #fff;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 4px;
    display: block;
    margin-bottom: 9px
}

.slide.slide-style-2 .inner .title {
    color: #fff;
    font-size: 100px;
    font-weight: 900;
    font-family: "Montserrat",sans-serif
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slide.slide-style-2 .inner .title {
        font-size:72px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-2 .inner .title {
        font-size:60px;
        margin-bottom: 8px
    }
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2 .inner .title {
        font-size:52px;
        margin-bottom: 0
    }
}

@media only screen and (max-width: 479px) {
    .slide.slide-style-2 .inner .title {
        font-size:29px
    }
}

.slide.slide-style-2 .inner p.description {
    color: #c6c9d8;
    font-size: 24px;
    line-height: 40px;
    margin: 0;
    padding: 0 16%;
    font-weight: 300
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-2 .inner p.description {
        padding:0 10%
    }
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2 .inner p.description {
        padding:0;
        font-size: 18px;
        line-height: 30px;
        margin-top: 20px
    }
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2 .inner p.description br {
        display:none
    }
}

.slide.slide-style-2 .inner .slide-btn {
    margin-top: 50px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-2 .inner .slide-btn {
        margin-top:42px
    }
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2 .inner .slide-btn {
        margin-top:32px
    }
}

.slide.slide-style-2 .inner.text-left p {
    padding: 0 37% 0 0
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2 .inner.text-left p br {
        display:none
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slide.slide-style-2 .inner.text-left p {
        padding:0 20% 0 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-2 .inner.text-left p {
        padding:0
    }
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2 .inner.text-left p {
        padding:0
    }
}

.slide.slide-style-2 .inner.text-right p {
    padding: 0 0 0 16%
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2 .inner.text-right p br {
        display:none
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-2 .inner.text-right p {
        padding:0
    }
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2 .inner.text-right p {
        padding:0
    }
}

.slide.slider-style-3 .inner>span {
    color: #1f1f25;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 4px;
    display: block;
    margin-bottom: 20px
}

@media only screen and (max-width: 767px) {
    .slide.slider-style-3 .inner>span {
        font-size:13px;
        margin-bottom: 10px
    }
}

.slide.slider-style-3 .inner h1.title {
    color: #1f1f25;
    font-size: 75px;
    font-weight: 900;
    font-family: "Montserrat",sans-serif;
    line-height: 90px;
    text-transform: inherit;
    width: 70%
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slide.slider-style-3 .inner h1.title {
        font-size:70px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slider-style-3 .inner h1.title {
        font-size:60px;
        line-height: 77px;
        width: 85%
    }
}

@media only screen and (max-width: 767px) {
    .slide.slider-style-3 .inner h1.title {
        font-size:42px;
        line-height: 57px;
        width: 100%
    }
}

.slide.slider-style-3 .inner h1.title span {
    color: var(--color-primary)
}

.slider-wrapper.color-white .inner p.description {
    color: #fff
}

@media only screen and (max-width: 767px) {
    .slider-wrapper .service-wrapper {
        margin-bottom:-20px
    }
}

.slider-digital-agency a.rn-button-style--2 {
    color: #fff;
    border-color: #fff
}

.slick-slide.slick-current .slide.slide-style-2 .inner h1.title {
    -webkit-animation: .8s ease-in-out 0s normal none 1 running customOne;
    animation: .8s ease-in-out 0s normal none 1 running customOne
}

.slick-slide.slick-current .slide.slide-style-2 .inner p.description {
    -webkit-animation: 1s ease-in-out 0s normal none 1 running customOne;
    animation: 1s ease-in-out 0s normal none 1 running customOne
}

.slick-slide.slick-current .slide.slide-style-2 .inner .slide-btn {
    -webkit-animation: 1.2s ease-in-out 0s normal none 1 running customOne;
    animation: 1.2s ease-in-out 0s normal none 1 running customOne
}

@-webkit-keyframes customOne {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,50%,0);
        transform: translate3d(0,50%,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes customOne {
    from {
        opacity: 0;
        -webkit-transform: translate3d(0,50%,0);
        transform: translate3d(0,50%,0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.customOne {
    -webkit-animation-name: customOne;
    animation-name: customOne
}

.slider-paralax,.rn-paralax {
    height: 950px
}

@media only screen and (max-width: 767px) {
    .slider-paralax,.rn-paralax {
        height:auto
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .slider-paralax,.rn-paralax {
        height:auto;
        padding-top: 150px;
        padding-bottom: 150px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slider-paralax,.rn-paralax {
        height:auto
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slider-paralax,.rn-paralax {
        height:auto
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .slide.slide-style-2.slider-paralax {
        height:auto;
        padding-top: 100px;
        padding-bottom: 100px
    }
}

.slider-video-bg {
    position: relative;
    z-index: 2
}

.slider-video-bg .video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1
}

.slider-video-bg .inner {
    position: relative;
    z-index: 2
}

.slider-video-bg[data-black-overlay]:before {
    z-index: 1
}

.slider-video-bg .video-inner button.video-popup,.slider-video-bg .video-inner a.video-popup {
    margin: 0 auto !important
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slider-video-bg .video-inner button.video-popup,.slider-video-bg .video-inner a.video-popup {
        margin:0;
        margin-top: 28px
    }
}

@media only screen and (max-width: 767px) {
    .slider-video-bg .video-inner button.video-popup,.slider-video-bg .video-inner a.video-popup {
        margin:0;
        margin-top: 28px
    }
}

@media only screen and (max-width: 767px) {
    .slider-video-bg .video-inner button.video-popup,.slider-video-bg .video-inner a.video-popup {
        width:70px;
        height: 70px;
        margin: 0 auto;
        margin-top: 30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-2.slider-video-bg .inner {
        text-align:center !important
    }
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2.slider-video-bg .inner {
        text-align:center !important
    }
}

.slide.slide-style-2.slider-video-bg .inner .title {
    font-size: 60px;
    line-height: 80px;
    margin-bottom: 20px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide.slide-style-2.slider-video-bg .inner .title {
        font-size:45px;
        line-height: 74px;
        margin-bottom: 10px
    }
}

@media only screen and (max-width: 767px) {
    .slide.slide-style-2.slider-video-bg .inner .title {
        font-size:36px;
        line-height: 51px;
        margin-bottom: 0
    }
}

.slider-activation {
    position: relative
}

.slider-activation .slick-dots {
    bottom: 60px
}

@media only screen and (max-width: 767px) {
    .slider-activation .slick-dots {
        bottom:88px
    }
}

@media only screen and (max-width: 575px) {
    .slider-activation .slick-dots {
        bottom:35px
    }
}

.slider-activation button.slick-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 2;
    transition: .5s;
    opacity: 1;
    width: 68px;
    height: 68px;
    border: 2px solid rgba(255,255,255,.2);
    border-radius: 100%
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slider-activation button.slick-arrow {
        display:none !important
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slider-activation button.slick-arrow {
        display:none !important
    }
}

@media only screen and (max-width: 767px) {
    .slider-activation button.slick-arrow {
        display:none !important
    }
}

.slider-activation button.slick-arrow:hover {
    background: var(--color-primary);
    border-color: var(--color-primary)
}

.slider-activation button.slick-arrow:before {
    line-height: 1;
    opacity: .4;
    position: relative;
    top: -2px;
    transition: .5s;
    z-index: 2
}

.slider-activation button.slick-arrow.slick-prev {
    left: 50px
}

@media only screen and (max-width: 767px) {
    .slider-activation button.slick-arrow.slick-prev {
        left:10px
    }
}

.slider-activation button.slick-arrow.slick-prev:before {
    content: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/slick-arrow-left-small.png)
}

.slider-activation button.slick-arrow.slick-prev:hover {
    left: 30px
}

@media only screen and (max-width: 767px) {
    .slider-activation button.slick-arrow.slick-prev:hover {
        left:20px
    }
}

.slider-activation button.slick-arrow.slick-prev:hover:before {
    opacity: 1
}

.slider-activation button.slick-arrow.slick-next {
    left: auto;
    right: 50px
}

@media only screen and (max-width: 767px) {
    .slider-activation button.slick-arrow.slick-next {
        right:10px
    }
}

.slider-activation button.slick-arrow.slick-next:before {
    content: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/slick-arrow-right-small.png)
}

.slider-activation button.slick-arrow.slick-next:hover {
    right: 30px
}

@media only screen and (max-width: 767px) {
    .slider-activation button.slick-arrow.slick-next:hover {
        right:20px
    }
}

.slider-activation button.slick-arrow.slick-next:hover:before {
    opacity: 1
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slider-creative-agency .slider-paralax {
        height:auto
    }
}

@media only screen and (max-width: 767px) {
    .slider-creative-agency .slider-paralax {
        height:auto
    }
}

.slider-creative-agency.with-particles {
    position: relative
}

.slider-creative-agency.with-particles .frame-layout__particles {
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0
}

.slider-creative-agency.with-particles .frame-layout__particles canvas {
    position: absolute;
    z-index: 1
}

.slider-creative-agency.with-particles .inner {
    position: relative;
    z-index: 4
}

.slide .service {
    margin-top: 50px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .slide .service {
        margin-top:20px
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .slide .service {
        margin-top:0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .slide .service {
        margin-top:20px
    }
}

@media only screen and (max-width: 767px) {
    .slide .service {
        margin-top:20px
    }
}

@media only screen and (max-width: 575px) {
    .slide .service {
        margin-top:0
    }
}

.theme-gradient {
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block
}

.box-model .service-wrapper {
    background-image: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/bg/bg-image-1.jpg);
    padding: 10px 50px;
    border-radius: 6px;
    position: relative
}

.box-model .service-wrapper .service {
    margin: 0
}

.box-model .service-wrapper .service .icon {
    margin: auto;
    text-align: center
}

.box-model .service-wrapper .service .content {
    text-align: center
}

.box-model .service-wrapper:before {
    width: 90%;
    height: 80%;
    position: absolute;
    left: 0;
    bottom: -30px;
    content: "";
    background-color: #f81f01;
    z-index: -1;
    margin: auto;
    right: 0;
    border-radius: 20%;
    background-image: linear-gradient(145deg,#f81f01 0%,#ee076e 100%);
    filter: blur(30px)
}

.box-model .inner {
    text-align: center;
    margin-bottom: 60px
}

.root-header-not-transparent .slide.slide-style-1 .inner,.root-header-not-transparent .slide.slide-style-2 .inner {
    padding-top: 0
}

.root-header-not-transparent .slide .inner {
    padding-top: 0
}

@media only screen and (max-width: 767px) {
    .root-header-not-transparent .slide.slide-style-2 {
        padding-top:90px
    }
}

.root-header-not-transparent .rn-page-title,.root-header-not-transparent .breadcrumb-inner {
    padding-top: 0 !important
}

.root-header-not-transparent .rn-page-title-area {
    padding-top: 125px !important;
    padding-bottom: 145px !important
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .root-header-not-transparent .rn-page-title-area {
        padding-top:80px !important;
        padding-bottom: 80px !important
    }
}

@media only screen and (max-width: 767px) {
    .root-header-not-transparent .rn-page-title-area {
        padding-top:80px !important;
        padding-bottom: 80px !important
    }
}

.root-header-not-transparent .breadcrumb-area {
    padding-top: 100px !important;
    padding-bottom: 120px !important
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .root-header-not-transparent .breadcrumb-area {
        padding-top:80px !important;
        padding-bottom: 80px !important
    }
}

@media only screen and (max-width: 767px) {
    .root-header-not-transparent .breadcrumb-area {
        padding-top:80px !important;
        padding-bottom: 80px !important
    }
}

.active-dark .personal-portfolio-slider.overlay {
    position: relative;
    z-index: 2
}

.active-dark .personal-portfolio-slider.overlay:after {
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    opacity: .7;
    left: 0;
    top: 0
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .active-dark .personal-portfolio-slider.overlay:after {
        background:#000;
        z-index: -1
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .active-dark .personal-portfolio-slider.overlay:after {
        background:#000;
        z-index: -1
    }
}

@media only screen and (max-width: 767px) {
    .active-dark .personal-portfolio-slider.overlay:after {
        background:#000;
        z-index: -1
    }
}

.counterup_style--1 {
    text-align: center;
    margin-top: 40px
}

.counterup_style--1 h5.counter {
    font-size: 72px;
    line-height: 80px;
    display: inline-block;
    margin-bottom: 17px;
    position: relative;
    display: inline-block;
    color: var(--color-primary);
    margin-left: -13px
}

@media only screen and (max-width: 767px) {
    .counterup_style--1 h5.counter {
        font-size:45px;
        line-height: 56px;
        margin-bottom: 5px;
        margin-left: -11px
    }
}

.counterup_style--1 h5.counter:after {
    right: -26px;
    position: absolute;
    top: -17px;
    font-size: 40px;
    content: "+"
}

.counterup_style--1 p.description {
    font-size: 18px;
    line-height: 30px;
    padding: 0 5%;
    color: #717173
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .counterup_style--1 p.description {
        font-size:16px;
        line-height: 28px;
        padding: 0
    }
}

@media only screen and (max-width: 767px) {
    .counterup_style--1 p.description {
        font-size:16px;
        line-height: 28px;
        padding: 0
    }
}

.counterup_style--1.text-left h5.counter {
    margin-left: 0
}

.counterup_style--1.text-left p.description {
    padding: 0 7% 0 0
}

.counterup_style--1.text-right h5.counter {
    margin-left: 0;
    padding-right: 26px
}

.counterup_style--1.text-right h5.counter:after {
    right: 0
}

.counterup_style--1.text-right p.description {
    padding: 0 0 0 7%
}

.counterup_style--1.text-white p.description {
    color: #c6c9d8
}

.rn-paralax-counterup .counterup_style--1 {
    text-align: center
}

.rn-paralax-counterup .counterup_style--1 h5.counter {
    color: var(--color-primary)
}

.rn-paralax-counterup .counterup_style--1 p.description {
    color: #fff
}

.counterup_style--2 {
    text-align: center
}

.counterup_style--2 h5.counter {
    font-size: 50px;
    line-height: 60px;
    color: var(--color-primary);
    display: inline-block;
    margin-bottom: 10px
}

.counterup_style--2 h4.description {
    font-size: 16px;
    line-height: 30px;
    padding: 0 10%;
    margin-bottom: 0
}

.theme-text-white .counterup_style--1 h5.counter {
    color: #fff
}

.theme-text-white .counterup_style--1 p.description {
    color: #fff
}

.rn-testimonial-content {
    text-align: center
}

.rn-testimonial-content .inner {
    padding-bottom: 62px
}

@media only screen and (max-width: 767px) {
    .rn-testimonial-content .inner {
        padding-bottom:20px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-testimonial-content .inner {
        padding-bottom:30px
    }
}

.rn-testimonial-content .inner p {
    font-size: 36px;
    line-height: 58px;
    color: #18181b;
    font-weight: 400;
    padding: 0 9%;
    margin-bottom: 0;
    margin-top: -16px;
    position: relative;
    z-index: 2;
    text-align: center
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rn-testimonial-content .inner p {
        font-size:32px;
        line-height: 53px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-testimonial-content .inner p {
        font-size:28px;
        line-height: 48px;
        padding: 0
    }
}

@media only screen and (max-width: 767px) {
    .rn-testimonial-content .inner p {
        font-size:20px;
        line-height: 35px;
        padding: 0;
        font-weight: 400
    }
}

.rn-testimonial-content .inner p:before {
    position: absolute;
    width: 197px;
    height: 100%;
    left: 25%;
    top: -50px;
    background-image: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/client/image-1.png);
    content: "";
    opacity: 1;
    background-repeat: no-repeat;
    z-index: -1
}

@media only screen and (max-width: 767px) {
    .rn-testimonial-content .inner p:before {
        top:-15px;
        background-size: 100px;
        left: 50%;
        right: 0;
        width: 100%;
        margin-left: -48px
    }
}

.rn-testimonial-content .inner p:after {
    position: absolute;
    width: 197px;
    height: 202px;
    right: 25%;
    bottom: -115px;
    background-image: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/client/image-2.png);
    content: "";
    opacity: 1;
    background-repeat: no-repeat;
    z-index: -1
}

@media only screen and (max-width: 767px) {
    .rn-testimonial-content .inner p:after {
        display:none
    }
}

.rn-testimonial-content .author-info {
    margin-bottom: 50px;
    position: relative;
    z-index: 2
}

@media only screen and (max-width: 767px) {
    .rn-testimonial-content .author-info {
        margin-bottom:30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-testimonial-content .author-info {
        margin-bottom:30px
    }
}

.rn-testimonial-content .author-info h6 {
    font-size: 18px;
    line-height: 50px;
    color: #8c8c8c;
    font-weight: 300
}

@media only screen and (max-width: 767px) {
    .rn-testimonial-content .author-info h6 {
        line-height:20px;
        font-size: 14px
    }
}

.rn-testimonial-content .author-info h6 span {
    color: var(--color-primary);
    font-weight: 400
}

.rn-testimonial-light .rn-testimonial-content .inner p {
    color: #c6c9d8
}

.rn-testimonial-light .rn-testimonial-content .author-info h6 {
    color: #fff;
    font-weight: 300
}

.rn-testimonial-light .rn-testimonial-content .author-info h6 span {
    color: #c6c9d8;
    font-weight: 400
}

.rn-paralax-testimonial .rn-testimonial-content .inner p {
    color: #fff
}

.rn-paralax-testimonial .rn-testimonial-content .inner p:before,.rn-paralax-testimonial .rn-testimonial-content .inner p:after {
    opacity: .1
}

.rn-testimonial-area {
    padding-top: 180px
}

.rn-testimonial-area ul.testimonial-thumb-wrapper {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    max-width: 510px;
    margin: 0 auto;
    margin-bottom: -30px;
    outline: none;
    border: 0 none;
    position: relative
}

@media only screen and (max-width: 575px) {
    .rn-testimonial-area ul.testimonial-thumb-wrapper {
        margin-bottom:-10px
    }
}

.rn-testimonial-area ul.testimonial-thumb-wrapper>li {
    padding-left: 15px;
    padding-right: 15px;
    flex-basis: 20%;
    margin-bottom: 30px;
    outline: none;
    cursor: pointer
}

@media only screen and (max-width: 767px) {
    .rn-testimonial-area ul.testimonial-thumb-wrapper>li {
        flex-basis:20%;
        margin-bottom: 14px;
        padding-left: 7px;
        padding-right: 7px
    }
}

@media only screen and (max-width: 575px) {
    .rn-testimonial-area ul.testimonial-thumb-wrapper>li {
        flex-basis:25%;
        padding-left: 5px;
        padding-right: 5px;
        margin-bottom: 10px
    }
}

.rn-testimonial-area ul.testimonial-thumb-wrapper>li .thumb {
    position: relative;
    display: inline-block;
    width: 100%
}

.rn-testimonial-area ul.testimonial-thumb-wrapper>li .thumb img {
    transition: all .3s;
    border-radius: 6px;
    width: 100%
}

.rn-testimonial-area ul.testimonial-thumb-wrapper>li>a {
    position: relative;
    display: block
}

.rn-testimonial-area ul.testimonial-thumb-wrapper>li>a:after {
    width: 13px;
    height: 13px;
    background: var(--color-primary);
    right: -8.5px;
    top: -8.5px;
    position: absolute;
    content: "";
    border-radius: 100%;
    transition: all .3s;
    opacity: 0;
    transform: scale(0)
}

.rn-testimonial-area ul.testimonial-thumb-wrapper>li>a.active:after {
    opacity: 1;
    transform: scale(1)
}

.rn-testimonial-area ul.testimonial-thumb-wrapper>li>a.active .thumb img {
    transform: scale(1.1);
    object-fit: contain;
    box-shadow: 0 10px 15px 0 rgba(0,0,0,.1)
}

.rn-testimonial-area ul.testimonial-thumb-wrapper>li>a:hover .thumb img {
    transform: scale(1.1);
    object-fit: contain;
    box-shadow: 0 10px 15px 0 rgba(0,0,0,.1)
}

ul.brand-style {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    border-left: 1px solid rgba(0,0,0,.05);
    border-bottom: 1px solid rgba(0,0,0,.05)
}

@media only screen and (max-width: 767px) {
    ul.brand-style {
        border-left:0 none;
        border-bottom: 0 none;
        justify-content: center
    }
}

ul.brand-style li {
    flex-basis: 33.33%;
    text-align: center;
    height: 214px;
    line-height: 214px;
    border-top: 1px solid rgba(0,0,0,.05);
    border-right: 1px solid rgba(0,0,0,.05);
    transition: .4s;
    margin: 0
}

@media only screen and (max-width: 767px) {
    ul.brand-style li {
        border-top:0 none;
        border-right: 0 none;
        height: auto;
        line-height: 10;
        padding: 0 10px
    }
}

ul.brand-style li img {
    opacity: .7;
    max-height: 110px;
    max-width: 150px;
    transition: .4s
}

@media only screen and (max-width: 767px) {
    ul.brand-style li img {
        max-width:80px
    }
}

@media only screen and (max-width: 767px) {
    ul.brand-style li img {
        max-width:100px;
        height: auto
    }
}

ul.brand-style li:hover {
    background-color: var(--color-primary);
    transform: scale(1.1);
    border-radius: 6px
}

@media only screen and (max-width: 767px) {
    ul.brand-style li:hover {
        transform:scale(1)
    }
}

ul.brand-style li:hover img {
    opacity: 1;
    filter: brightness(0) invert(1)
}

ul.brand-style.branstyle--2 li {
    flex-basis: 33.33%
}

ul.brand-style-2 {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin: -25px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    ul.brand-style-2 {
        margin:0 -10px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    ul.brand-style-2 {
        margin:-20px
    }
}

@media only screen and (max-width: 767px) {
    ul.brand-style-2 {
        margin:0 -10px
    }
}

ul.brand-style-2 li {
    padding: 25px;
    flex-basis: 20%;
    text-align: center
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    ul.brand-style-2 li {
        padding:14px 10px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    ul.brand-style-2 li {
        padding:20px
    }
}

@media only screen and (max-width: 767px) {
    ul.brand-style-2 li {
        flex-basis:25%;
        padding: 10px
    }
}

@media only screen and (max-width: 575px) {
    ul.brand-style-2 li {
        flex-basis:33.33%;
        padding: 0 15px;
        margin-bottom: 16px
    }
}

@media only screen and (max-width: 479px) {
    ul.brand-style-2 li {
        max-height:initial;
        max-width: 69%
    }
}

ul.brand-style-2 li a {
    display: block
}

ul.brand-style-2 img {
    opacity: .7;
    transition: .3s;
    max-height: 110px;
    max-width: 150px;
    cursor: pointer
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    ul.brand-style-2 img {
        max-height:100px;
        max-width: 130px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    ul.brand-style-2 img {
        max-height:initial;
        max-width: 98px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    ul.brand-style-2 img {
        max-width:100px;
        cursor: pointer
    }
}

@media only screen and (max-width: 767px) {
    ul.brand-style-2 img {
        max-height:inherit;
        max-width: 100px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    ul.brand-style-2 img {
        max-width:129px
    }
}

@media only screen and (max-width: 575px) {
    ul.brand-style-2 img {
        max-height:initial;
        max-width: 100%
    }
}

ul.brand-style-2 img:hover {
    transform: scale(1.1);
    opacity: 1
}

.react-parallax-content .brand-style-2 a img {
    filter: brightness(0) invert(1)
}

.react-parallax-content .brand-style-2 a:hover img {
    filter: brightness(1) invert(0)
}

.brand-separation {
    position: relative;
    padding-bottom: 217px;
    margin-bottom: -117px;
    padding-top: 60px;
    background: #fff
}

@media only screen and (max-width: 767px) {
    .brand-separation {
        margin-bottom:0;
        padding-bottom: 60px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .brand-separation {
        margin-bottom:0;
        padding-bottom: 60px
    }
}

.team {
    overflow: hidden;
    border-radius: 6px !important;
    position: relative
}

.team .thumbnail {
    display: block;
    position: relative;
    z-index: 1
}

.team .thumbnail img {
    width: 100%;
    object-fit: cover
}

.team .thumbnail:after {
    background: linear-gradient(to bottom,#fc004d 0,#000 100%);
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    content: "";
    z-index: 1;
    opacity: 0
}

.team .content {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 35px 40px;
    z-index: 2
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .team .content {
        padding:35px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .team .content {
        padding:35px
    }
}

@media only screen and (max-width: 767px) {
    .team .content {
        padding:35px
    }
}

.team .content .title {
    color: #fff;
    margin: 0;
    opacity: 0;
    visibility: hidden;
    transition-delay: .25s;
    transform: translateY(10px);
    transition: all .45s cubic-bezier(.23,.88,.34,.99)
}

.team .content .title a {
    color: #fff
}

.team .content p.designation {
    color: #c6c9d8;
    font-size: 14px;
    line-height: 34px;
    opacity: 0;
    visibility: hidden;
    transition: all .45s cubic-bezier(.23,.88,.34,.99);
    transform: translateY(10px)
}

.team ul.social-icon {
    position: absolute;
    top: 25px;
    left: 35px;
    padding: 0;
    z-index: 2;
    list-style: none;
    display: flex;
    margin: 0 -10px
}

.team ul.social-icon li {
    margin: 0 10px;
    transform: translateY(8px) scale(.8);
    opacity: 0;
    visibility: hidden;
    transition: all .45s cubic-bezier(.23,.88,.34,.99)
}

.team ul.social-icon li a {
    color: #fff;
    font-size: 15px;
    transition: .3s
}

.team ul.social-icon li a svg {
    transition: .3s
}

.team ul.social-icon li a:hover svg {
    transform: scale(1.3)
}

.team.team-style--bottom ul.social-icon {
    top: auto;
    left: 40px;
    bottom: 105px
}

.team.team-style--bottom .content .title {
    margin-bottom: 1px
}

.team.team-style--bottom.text-right ul.social-icon {
    left: auto;
    right: 40px
}

.team:hover .content .title {
    transition-delay: .25s;
    opacity: 1;
    visibility: visible;
    transform: translateY(0)
}

.team:hover .content p.designation {
    transition-delay: .33s;
    opacity: 1;
    visibility: visible;
    transform: translateY(0)
}

.team:hover .thumbnail:after {
    opacity: .85;
    top: 0
}

.team:hover ul.social-icon li {
    opacity: 1;
    visibility: visible;
    transform: translateY(0)
}

.team:hover ul.social-icon li:nth-child(1) {
    -webkit-transition-delay: .07692s;
    transition-delay: .07692s
}

.team:hover ul.social-icon li:nth-child(2) {
    -webkit-transition-delay: .15385s;
    transition-delay: .15385s
}

.team:hover ul.social-icon li:nth-child(3) {
    -webkit-transition-delay: .23077s;
    transition-delay: .23077s
}

.team:hover ul.social-icon li:nth-child(4) {
    -webkit-transition-delay: .33077s;
    transition-delay: .23077s
}

.team:hover ul.social-icon li:nth-child(5) {
    -webkit-transition-delay: .43077s;
    transition-delay: .23077s
}

.team:hover .content {
    opacity: 1;
    visibility: visible
}

.team-static img {
    object-fit: cover;
    border-radius: 5px !important;
    box-shadow: 0 25px 65px rgba(0,0,0,.1)
}

.team-static .inner {
    padding-top: 17px
}

.team-static .inner .content .title {
    margin-bottom: 5px
}

.team-static .inner .content p.designation {
    margin-bottom: 5px;
    font-size: 15px;
    font-weight: 300
}

.text-center .social-transparent.liststyle {
    justify-content: center
}

.text-right .social-transparent.liststyle {
    justify-content: flex-end
}

.text-center.team ul.social-icon {
    justify-content: center;
    left: 50%;
    transform: translateX(-50%);
    margin: auto
}

.text-right.team ul.social-icon {
    justify-content: center;
    left: auto;
    right: 40px
}

.text-center.team.team-style--bottom ul.social-icon {
    right: 40px
}

.call-to-action {
    background: linear-gradient(145deg,#f81f01 0%,#ee076e 100%);
    position: relative;
    z-index: 2
}

.call-to-action:before {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background-image: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/pattern-1.png);
    content: "";
    z-index: -1;
    opacity: .5
}

.call-to-action .inner>span {
    color: #fff;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 4px;
    display: block;
    margin-bottom: 9px
}

.call-to-action .inner h2 {
    color: #fff;
    font-size: 75px;
    font-weight: 900;
    font-family: "Montserrat",sans-serif;
    line-height: 90px
}

@media only screen and (max-width: 767px) {
    .call-to-action .inner h2 {
        font-size:47px;
        line-height: 70px
    }
}

.call-to-action .inner a.rn-button-style--2 {
    margin-top: 30px;
    background: 0 0
}

.call-to-action .inner a.rn-button-style--2:hover {
    background: #fff;
    border-color: #fff;
    color: var(--color-primary)
}

ul.nav.tab-style--1 {
    display: flex;
    margin: 0 -20px;
    flex-wrap: wrap;
    border: 0 none
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    ul.nav.tab-style--1 {
        margin:0 -10px
    }
}

ul.nav.tab-style--1 li {
    position: relative;
    margin: 0 20px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    ul.nav.tab-style--1 li {
        margin:0 10px;
        font-size: 17px;
        margin-bottom: 10px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    ul.nav.tab-style--1 li {
        margin-bottom:10px
    }
}

@media only screen and (max-width: 767px) {
    ul.nav.tab-style--1 li {
        margin-bottom:10px
    }
}

ul.nav.tab-style--1 li a {
    border: 0 none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    padding: 0;
    background: 0 0;
    position: relative;
    display: inline-block;
    padding-bottom: 4px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    outline: none;
    color: #717173
}

ul.nav.tab-style--1 li a:before {
    position: absolute;
    content: "";
    width: 30px;
    background: rgba(0,0,0,.2);
    height: 2px;
    bottom: 0
}

ul.nav.tab-style--1 li a.active {
    background: 0 0;
    color: var(--color-primary)
}

ul.nav.tab-style--1 li a.active:before {
    width: 100%;
    background: currentColor
}

.single-tab-content {
    padding-top: 20px
}

@media only screen and (max-width: 767px) {
    .single-tab-content {
        font-size:16px;
        line-height: 26px
    }
}

.single-tab-content p {
    font-weight: 300;
    color: #717173;
    font-size: 18px;
    line-height: 30px
}

@media only screen and (max-width: 767px) {
    .single-tab-content p {
        font-size:16px;
        line-height: 26px
    }
}

.single-tab-content ul {
    padding: 0;
    margin: 0;
    list-style: none
}

.single-tab-content ul.list-style--1 li {
    margin-bottom: 10px
}

.single-tab-content ul li {
    color: #7e7e7e;
    font-size: 16px;
    line-height: inherit;
    font-weight: 300;
    margin: 0;
    margin-bottom: 15px
}

.single-tab-content ul li a {
    font-weight: 500;
    display: block;
    color: #717173
}

.single-tab-content ul li a span {
    font-weight: 300
}

.single-tab-content ul li:hover a {
    color: var(--color-primary)
}

.accodion-style--1 .accordion__item {
    border: none !important;
    overflow: hidden
}

.accodion-style--1 .accordion__item .accordion__heading {
    display: inline-block;
    position: relative;
    padding-bottom: 5px;
    margin-bottom: 5px
}

.accodion-style--1 .accordion__item .accordion__heading .accordion__button {
    background: 0 0;
    color: #1f1f25;
    font-size: 16px;
    font-weight: 500;
    position: relative;
    display: inline-block;
    padding: 0;
    margin: 0;
    border: none;
    box-shadow: none
}

.accodion-style--1 .accordion__item .accordion__heading .accordion__button[aria-disabled=true]:after,.accodion-style--1 .accordion__item .accordion__heading .accordion__button[aria-expanded=true]:after {
    width: 100%;
    background: var(--color-primary)
}

.accodion-style--1 .accordion__item .accordion__heading .accordion__button:after {
    position: absolute;
    content: "";
    left: 0;
    bottom: 0;
    width: 50px;
    height: 2px;
    background: rgba(0,0,0,.2);
    transition: .3s
}

.accodion-style--1 .accordion__item .accordion__heading .accordion__button:before {
    display: none;
    border: none !important
}

.accodion-style--1 .accordion__item .accordion__heading .accordion__button:focus {
    outline: none
}

.accodion-style--1 .accordion__item .accordion__panel {
    background: 0 0;
    border: none;
    padding: 0 0 15px;
    margin: 0;
    font-weight: 300;
    color: #717173;
    animation: fadeInUp .1s
}

.accodion-style--1 .accordion__item+.accordion__item {
    margin-top: 10px
}

.rn-card .rn-card-header {
    display: inline-block;
    position: relative;
    padding-bottom: 5px;
    margin-bottom: 5px
}

.rn-card .rn-card-header a.btn {
    background: 0 0;
    color: #1f1f25;
    font-size: 16px;
    font-weight: 500;
    position: relative;
    display: inline-block;
    padding: 0;
    margin: 0;
    border: none;
    box-shadow: none;
    text-align: left
}

.rn-card .rn-card-header a.btn[aria-disabled=true]:after,.rn-card .rn-card-header a.btn[aria-expanded=true]:after {
    width: 100%;
    background: var(--color-primary)
}

.rn-card .rn-card-header a.btn:after {
    position: absolute;
    content: "";
    left: 0;
    bottom: 0;
    width: 50px;
    height: 2px;
    background: rgba(0,0,0,.2);
    transition: .3s
}

.rn-card .rn-card-body {
    font-size: 18px;
    line-height: 30px;
    background: 0 0;
    border: none;
    padding: 0 0 15px;
    margin: 0;
    font-weight: 300
}

@media only screen and (max-width: 767px) {
    .rn-card .rn-card-body {
        font-size:16px;
        line-height: 26px
    }
}

.rn-card+.rn-card {
    margin-top: 10px
}

.list-style--1 li {
    color: #7e7e7e;
    font-weight: 400;
    font-size: 16px;
    line-height: inherit;
    margin-bottom: 10px;
    display: flex;
    align-items: flex-start;
    text-align: left
}

.list-style--1 li i {
    font-size: 14px
}

.list-style--1 li i,.list-style--1 li svg {
    color: var(--color-primary);
    margin-right: 9px;
    margin-top: 8px
}

.list-style--1 li svg {
    height: 16px;
    width: 16px;
    margin-top: 2px
}

.list-style--1 li .icon img {
    margin-right: 9px
}

.list-style--1.text-white li {
    color: #fff
}

ul.list-style li {
    position: relative;
    padding-left: 16px;
    color: #717173;
    font-size: 18px;
    line-height: 25px;
    display: flex;
    align-items: center
}

@media only screen and (max-width: 767px) {
    ul.list-style li {
        font-size:16px;
        line-height: 22px
    }
}

ul.list-style li:before {
    position: absolute;
    width: 6px;
    height: 6px;
    background: #717173;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    content: "";
    border-radius: 100%
}

ul.list-style li+li {
    margin-top: 10px
}

.contact-form--1 .thumbnail img {
    border-radius: 8px;
    box-shadow: 0 25px 65px rgba(0,0,0,.1)
}

.contact-form--1 label {
    display: block;
    margin-bottom: 0
}

.contact-form--1 input,.contact-form--1 textarea {
    display: block;
    width: 100%;
    padding: 0 20px;
    border: 2px solid rgba(0,0,0,.1);
    border-radius: 5px;
    transition: all .3s ease;
    height: 50px;
    line-height: 46px;
    margin-bottom: 20px;
    outline: none;
    color: var(--color-heading);
    font-size: 15px;
    letter-spacing: .1px
}

.contact-form--1 input:focus,.contact-form--1 textarea:focus {
    border-color: var(--color-primary)
}

.contact-form--1 textarea {
    height: 120px
}

.rn-address {
    margin-top: 30px;
    box-shadow: 0 25px 70px rgba(0,0,0,.07);
    padding: 40px;
    border-radius: 5px;
    padding-top: 65px;
    background: #fff;
    padding-bottom: 50px
}

.rn-address .icon {
    box-shadow: 0 25px 70px rgba(0,0,0,.07);
    width: 78px;
    height: 78px;
    color: var(--color-primary);
    line-height: 73px;
    text-align: center;
    border-radius: 100%;
    background: var(--color-primary-light);
    font-size: 28px;
    position: absolute;
    top: -13px;
    left: 47px
}

.rn-address .inner h4.title {
    font-size: 18px;
    font-weight: 700
}

.rn-address .inner p {
    font-size: 18px;
    margin-bottom: 0;
    color: #717173;
    opacity: .8
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rn-address .inner p {
        font-size:16px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-address .inner p {
        font-size:16px
    }
}

@media only screen and (max-width: 767px) {
    .rn-address .inner p {
        font-size:16px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rn-address .inner p br {
        display:none
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-address .inner p br {
        display:none
    }
}

@media only screen and (max-width: 767px) {
    .rn-address .inner p br {
        display:none
    }
}

.rn-address .inner p a {
    color: #717173
}

.rn-address .inner p a:hover {
    color: var(--color-primary)
}

.blog-comment-form .inner .rnform-group input:focus,.blog-comment-form .inner .rnform-group textarea:focus {
    border-color: var(--color-primary)
}

.google-map-area {
    width: 100%;
    height: 400px
}

.wpcf7 form .wpcf7-response-output {
    margin: 0;
    border: 0 none;
    padding: 0;
    margin-top: 13px
}

.wpcf7-not-valid-tip {
    color: #f10;
    font-size: 15px;
    font-weight: 400;
    display: block;
    margin-bottom: 20px;
    margin-top: -20px
}

.wpcf7 form.sent .wpcf7-response-output {
    color: #46b450
}

.wpcf7 form.invalid .wpcf7-response-output,.wpcf7 form.unaccepted .wpcf7-response-output {
    color: #f10
}

.wpcf7-form-control-wrap {
    position: relative
}

.wpcf7-form-control-wrap span.wpcf7-list-item {
    margin-left: 0;
    display: flex;
    align-items: center
}

.wpcf7-form-control-wrap span.wpcf7-list-item label {
    display: flex;
    align-items: center;
    justify-content: center
}

.wpcf7-form-control-wrap span.wpcf7-list-item label input {
    margin-bottom: 0
}

.wpcf7-form-control-wrap span.wpcf7-list-item input {
    margin-bottom: 0
}

.wpcf7-form-control-wrap input[type=checkbox],.wpcf7-form-control-wrap input[type=radio] {
    opacity: 1;
    position: static;
    pointer-events: auto;
    height: 14px;
    width: auto
}

.wpcf7-form-control-wrap span.wpcf7-list-item .wpcf7-list-item-label {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2;
    padding: 0;
    color: var(--color-body);
    font-size: 16px;
    margin-left: .5rem
}

.contact-form--1 label {
    margin-bottom: 20px
}

.contact-form--1 label label {
    margin-bottom: 0
}

.woocommerce-input-wrapper label.checkbox {
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--color-body)
}

.woocommerce-form__label-for-checkbox {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    color: var(--color-heading);
    font-size: 20px
}

.woocommerce-form__label-for-checkbox span {
    padding-left: 15px
}

.woocommerce-input-wrapper .input-checkbox[type=checkbox],.woocommerce-form__label-for-checkbox input[type=checkbox] {
    opacity: 1;
    position: static;
    pointer-events: auto;
    height: 14px;
    width: auto
}

button.video-popup,a.video-popup {
    display: block;
    position: relative;
    margin: 0 auto;
    width: 96px;
    height: 96px;
    border-radius: 50%;
    background: #fff;
    -webkit-transition: all 1s cubic-bezier(0,0,.2,1);
    -o-transition: all 1s cubic-bezier(0,0,.2,1);
    transition: all 1s cubic-bezier(0,0,.2,1);
    -webkit-box-shadow: 0 20px 30px rgba(0,0,0,.2);
    box-shadow: 0 20px 30px rgba(0,0,0,.2)
}

button.video-popup:before,a.video-popup:before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    -webkit-transform: translate(-6px,-9px);
    -ms-transform: translate(-6px,-9px);
    transform: translate(-6px,-9px);
    border-top: 9px solid transparent;
    border-bottom: 9px solid transparent;
    border-left: 15px solid var(--color-primary)
}

button.video-popup:hover,a.video-popup:hover {
    -webkit-transform: scale3d(1.15,1.15,1.15);
    transform: scale3d(1.15,1.15,1.15)
}

button.video-popup.position-top-center,a.video-popup.position-top-center {
    position: absolute;
    top: 50%;
    left: 50%;
    border: 0 none;
    width: 110px;
    height: 110px;
    margin-left: -55px;
    margin-top: -55px;
    transition: all 1s cubic-bezier(0,0,.2,1);
    box-shadow: 0 20px 30px rgba(0,0,0,.2)
}

@media only screen and (max-width: 767px) {
    button.video-popup.position-top-center,a.video-popup.position-top-center {
        width:70px;
        height: 70px;
        margin-left: -35px;
        margin-top: -35px
    }
}

button.video-popup.position-top-center:hover,a.video-popup.position-top-center:hover {
    transform: scale3d(1.15,1.15,1.15)
}

button.video-popup.theme-color,a.video-popup.theme-color {
    background: var(--color-primary);
    border-color: var(--color-primary)
}

button.video-popup.theme-color:before,a.video-popup.theme-color:before {
    border-left: 15px solid #fff
}

button.video-popup.black-color,a.video-popup.black-color {
    background: #000;
    border-color: #000
}

button.video-popup.black-color:before,a.video-popup.black-color:before {
    border-left: 15px solid #fff
}

button.video-popup.size-medium,a.video-popup.size-medium {
    width: 80px;
    height: 80px;
    margin-left: -40px;
    margin-top: -40px
}

.rn-video-popup-area .thumbnail img {
    border-radius: 6px !important
}

ul.social-transparent {
    margin: -8px
}

ul.social-transparent li {
    margin: 8px
}

ul.social-transparent li a {
    width: auto;
    display: inline-block;
    height: auto;
    border: 0 none;
    line-height: initial;
    color: #000;
    border-radius: 100%;
    text-align: center;
    font-size: 14px;
    transition: .3s
}

ul.social-transparent li a:hover {
    color: var(--color-primary)
}

.progress-wrapper h3.heading {
    font-size: 24px;
    margin-bottom: 60px
}

@media only screen and (max-width: 767px) {
    .progress-wrapper h3.heading {
        margin-bottom:30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .progress-wrapper h3.heading {
        margin-bottom:30px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .progress-wrapper h3.heading {
        margin-bottom:30px
    }
}

.rn-progress-area .heading .title {
    margin-bottom: 30px
}

.rn-progress-charts {
    overflow: hidden
}

.rn-progress-charts h6.heading {
    font-size: 15px;
    color: #1f1f25;
    margin-bottom: 10px;
    font-weight: 500
}

.rn-progress-charts h6.heading span.percent-label {
    color: #222;
    font-weight: 500
}

.rn-progress-charts .progress {
    height: 4px;
    overflow: visible;
    font-size: 14px;
    background-color: #f5f5f5;
    border-radius: 0
}

.rn-progress-charts .progress .progress-bar {
    overflow: visible;
    position: relative;
    background-color: #f81f01;
    background-image: linear-gradient(-224deg,#f81f01,#ee076e)
}

.rn-progress-charts .progress .progress-bar.custom-color--4 {
    color: #e5529a;
    background-color: #e77654;
    background-image: linear-gradient(-224deg,#e77654 0px,#e5529a 100%)
}

.rn-progress-charts .progress .progress-bar span.percent-label {
    position: absolute;
    color: #222;
    right: -7px;
    top: -35px;
    font-size: 14px;
    font-weight: 600
}

.rn-progress-charts.custom-color--2 .progress-bar {
    background-color: #0d8abc;
    background-color: #0d8abc;
    background-image: linear-gradient(-224deg,#0d8abc,#61fded)
}

.rn-progress-charts.custom-color--3 .progress-bar {
    color: #eece90;
    background-color: #d45529;
    background-image: linear-gradient(-224deg,#d45529 0px,#eece90 100%)
}

.rn-progress-charts.custom-color--4 .progress-bar {
    color: #e5529a;
    background-color: #e77654;
    background-image: linear-gradient(-224deg,#e77654 0px,#e5529a 100%)
}

.rn-progress-charts.progress-bar--2 .progress {
    height: 1px;
    border-radius: 1px
}

.rn-progress-charts.progress-bar--3 .progress {
    height: 20px;
    border-radius: 0
}

.single-column h4.tilte {
    margin-bottom: 6px
}

.single-column p {
    font-size: 16px;
    line-height: 28px
}

.single-column.custom-color {
    background: var(--color-primary);
    padding: 37px 29px
}

.single-column.custom-color h4.tilte {
    color: #fff
}

.single-column.custom-color p {
    color: #fff
}

.single-column.custom-color.custom-color--1 {
    background: #001c43
}

.single-column.custom-color.custom-color--2 {
    background: #c93ec7
}

.slick-initialized .slick-slide {
    display: block
}

.slick-initialized .slick-slide {
    margin-bottom: 0
}

.slick-initialized .slick-slide>div {
    height: 100% !important;
    display: flex
}

.trydo-slick-active {
    position: relative
}

.trydo-slick-active.slick-dot-bottom ul.slick-dots {
    position: absolute;
    bottom: 40px
}

.trydo-slick-active.slick-dot-bottom ul.slick-dots li {
    width: 30px;
    margin: 0;
    opacity: .35;
    position: relative
}

.trydo-slick-active.slick-dot-bottom ul.slick-dots li button:before {
    display: none
}

.trydo-slick-active.slick-dot-bottom ul.slick-dots li button:after {
    background: #333;
    width: 100%;
    display: block;
    content: "";
    position: absolute;
    left: 0;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    margin-left: 11px;
    background-color: transparent;
    -webkit-box-shadow: inset 0 0 0 5px #000;
    box-shadow: inset 0 0 0 5px #000
}

.trydo-slick-active.slick-dot-bottom ul.slick-dots li.slick-active {
    opacity: 1
}

.trydo-slick-active.slick-dot-bottom ul.slick-dots li.slick-active button:after {
    -webkit-transform: scale(2);
    -ms-transform: scale(2);
    transform: scale(2);
    -webkit-box-shadow: inset 0 0 0 1px var(--color-primary);
    box-shadow: inset 0 0 0 1px var(--color-primary);
    background-color: transparent;
    background-color: transparent !important
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: 2;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    opacity: 1;
    width: 68px;
    height: 68px;
    border: 2px solid rgba(255,255,255,.2);
    border-radius: 100%
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow:before {
    line-height: 1;
    opacity: .4;
    position: relative;
    top: -2px;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s;
    z-index: 2
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow:hover {
    background: var(--color-primary);
    border-color: var(--color-primary)
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow.slick-prev {
    left: 50px
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow.slick-prev:before {
    content: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/slick-arrow-left-small.png)
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow.slick-prev:hover {
    left: 30px
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow.slick-prev:hover:before {
    opacity: 1
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow.slick-next {
    left: auto;
    right: 50px
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow.slick-next:before {
    content: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/slick-arrow-right-small.png)
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow.slick-next:hover {
    right: 30px
}

.trydo-slick-active.slick-arrow-left-to-right .slick-arrow.slick-next:hover:before {
    opacity: 1
}

.rn-pricing {
    border: 2px solid var(--color-primary);
    border-radius: 5px;
    -webkit-transition: all .6s cubic-bezier(.33,.84,.31,.98);
    -o-transition: all .6s cubic-bezier(.33,.84,.31,.98);
    transition: all .6s cubic-bezier(.33,.84,.31,.98);
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    position: relative;
    z-index: 2
}

.rn-pricing:before {
    z-index: -1;
    display: inline-block;
    content: "";
    -webkit-transition: all .6s cubic-bezier(.33,.84,.31,.98);
    -o-transition: all .6s cubic-bezier(.33,.84,.31,.98);
    transition: all .6s cubic-bezier(.33,.84,.31,.98);
    opacity: 0;
    border-radius: 5px;
    background-color: var(--color-primary);
    background-image: -webkit-linear-gradient(305deg,var(--color-primary) 0%,#ee076e 100%);
    background-image: -o-linear-gradient(305deg,var(--color-primary) 0%,#ee076e 100%);
    background-image: linear-gradient(145deg,var(--color-primary) 0%,#ee076e 100%);
    position: absolute;
    top: -2px;
    right: -2px;
    bottom: -2px;
    left: -2px
}

.rn-pricing .pricing-table-inner {
    padding: 40px
}

.rn-pricing .pricing-table-inner .pricing-header {
    margin-bottom: 30px;
    padding-bottom: 30px;
    text-align: center;
    border-bottom: 1px solid rgba(248,31,1,.1)
}

.rn-pricing .pricing-table-inner .pricing-header .title {
    margin-bottom: 30px
}

.rn-pricing .pricing-table-inner .pricing-header .pricing span {
    display: block
}

.rn-pricing .pricing-table-inner .pricing-header .pricing span.price {
    font-size: 100px;
    color: var(--color-primary);
    line-height: 1
}

.rn-pricing .pricing-table-inner .pricing-header .pricing span.subtitle {
    font-size: 14px;
    color: var(--color-primary)
}

.rn-pricing .pricing-table-inner .pricing-body {
    text-align: center;
    margin-bottom: 48px
}

.rn-pricing .pricing-table-inner .pricing-body ul.list-style--1 li i {
    margin-right: 10px
}

.rn-pricing .pricing-table-inner .pricing-footer {
    text-align: center
}

.rn-pricing .pricing-table-inner .pricing-footer a.rn-btn {
    line-height: 36px
}

.rn-pricing:hover:before,.rn-pricing.active:before {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    opacity: 1
}

.rn-pricing:hover .pricing-table-inner .pricing-header,.rn-pricing.active .pricing-table-inner .pricing-header {
    border-bottom: 1px solid rgba(255,255,255,.2)
}

.rn-pricing:hover .pricing-table-inner .pricing-header .title,.rn-pricing.active .pricing-table-inner .pricing-header .title {
    color: #fff
}

.rn-pricing:hover .pricing-table-inner .pricing-header .pricing span,.rn-pricing.active .pricing-table-inner .pricing-header .pricing span {
    display: block
}

.rn-pricing:hover .pricing-table-inner .pricing-header .pricing span.price,.rn-pricing.active .pricing-table-inner .pricing-header .pricing span.price {
    color: #fff
}

.rn-pricing:hover .pricing-table-inner .pricing-header .pricing span.subtitle,.rn-pricing.active .pricing-table-inner .pricing-header .pricing span.subtitle {
    color: #fff
}

.rn-pricing:hover .pricing-table-inner .pricing-body ul.list-style--1 li,.rn-pricing.active .pricing-table-inner .pricing-body ul.list-style--1 li {
    color: #fff
}

.rn-pricing:hover .pricing-table-inner .pricing-body ul.list-style--1 li i,.rn-pricing.active .pricing-table-inner .pricing-body ul.list-style--1 li i {
    color: #fff
}

.rn-pricing:hover .pricing-table-inner .pricing-footer,.rn-pricing.active .pricing-table-inner .pricing-footer {
    text-align: center
}

.rn-pricing:hover .pricing-table-inner .pricing-footer a.rn-btn,.rn-pricing.active .pricing-table-inner .pricing-footer a.rn-btn {
    background: #fff;
    color: var(--color-primary);
    border-color: #fff
}

body.error404 {
    background: #1a1b1f
}

.error-page-inner {
    height: calc(100vh - 120px);
    display: flex;
    align-items: center;
    min-height: 700px
}

.error-page-inner .inner {
    text-align: center
}

.error-page-inner .inner h1.title {
    font-size: 180px;
    line-height: 1;
    margin-bottom: 0
}

@media only screen and (max-width: 767px) {
    .error-page-inner .inner h1.title {
        font-size:107px
    }
}

.error-page-inner .inner .sub-title {
    margin-bottom: 0;
    font-weight: 400;
    font-size: 48px;
    color: #fff
}

@media only screen and (max-width: 767px) {
    .error-page-inner .inner .sub-title {
        font-size:40px
    }
}

.error-page-inner .inner span {
    font-size: 16px;
    margin-top: 10px;
    color: #c6c9d8;
    opacity: .75;
    font-weight: 300;
    display: block;
    margin-bottom: 28px
}

.blog.blog-style--1 {
    position: relative;
    overflow: hidden;
    border-radius: 6px;
    margin-top: 30px;
    min-height: 532px !important
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .blog.blog-style--1 {
        min-height:497px !important
    }
}

@media only screen and (max-width: 767px) {
    .blog.blog-style--1 {
        margin-top:30px;
        min-height: 493px !important
    }
}

.blog.blog-style--1 .thumbnail {
    height: 100%
}

.blog.blog-style--1 .thumbnail a {
    display: block;
    z-index: 1;
    height: 100%
}

.blog.blog-style--1 .thumbnail a img {
    height: 100%
}

.blog.blog-style--1 .thumbnail a:after {
    background: linear-gradient(to bottom,#fc004d 0,#000 100%);
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    content: "";
    z-index: 1;
    opacity: 0
}

@media only screen and (max-width: 575px) {
    .blog.blog-style--1 .thumbnail a:after {
        opacity:.85;
        top: 0
    }
}

.blog.blog-style--1 .content {
    position: absolute;
    bottom: -92px;
    width: 100%;
    padding: 50px 35px;
    z-index: 3
}

@media only screen and (max-width: 767px) {
    .blog.blog-style--1 .content {
        padding:40px 23px
    }
}

@media only screen and (max-width: 575px) {
    .blog.blog-style--1 .content {
        bottom:0
    }
}

@media only screen and (max-width: 575px) {
    .blog.blog-style--1 .content {
        padding:30px 20px
    }
}

.blog.blog-style--1 .content:before {
    position: absolute;
    content: "";
    background: linear-gradient(to bottom,rgba(0,0,0,0) 0,#000 70%);
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 1;
    z-index: -1
}

@media only screen and (max-width: 575px) {
    .blog.blog-style--1 .content:before {
        opacity:0
    }
}

.blog.blog-style--1 .content p.blogtype {
    font-size: 14px;
    margin-bottom: 5px;
    color: #c6c9d8
}

.blog.blog-style--1 .content p.blogtype span {
    position: relative;
    padding-right: 7px
}

.blog.blog-style--1 .content p.blogtype span:after {
    content: ",";
    position: relative;
    left: 3px
}

.blog.blog-style--1 .content p.blogtype span:last-child {
    padding-right: 0
}

.blog.blog-style--1 .content p.blogtype span:last-child:after {
    display: none
}

.blog.blog-style--1 .content .title {
    margin-bottom: 0;
    font-size: 20px;
    font-weight: 600
}

.blog.blog-style--1 .content .title a {
    color: #fff;
    font-size: 24px;
    font-weight: 500;
    line-height: 36px
}

@media only screen and (max-width: 767px) {
    .blog.blog-style--1 .content .title a {
        font-size:18px;
        line-height: 29px
    }
}

.blog.blog-style--1 .content .blog-btn {
    margin-top: 35px;
    transition: .7s;
    opacity: 0;
    visibility: hidden
}

@media only screen and (max-width: 575px) {
    .blog.blog-style--1 .content .blog-btn {
        margin-top:22px
    }
}

@media only screen and (max-width: 575px) {
    .blog.blog-style--1 .content .blog-btn {
        opacity:1;
        visibility: visible
    }
}

.blog.blog-style--1:hover .content {
    bottom: 0
}

.blog.blog-style--1:hover .content:before {
    opacity: 0
}

.blog.blog-style--1:hover .thumbnail a img {
    transform: scale(1.1)
}

.blog.blog-style--1:hover .thumbnail a:before {
    opacity: 0
}

.blog.blog-style--1:hover .thumbnail a:after {
    opacity: .85;
    top: 0
}

.blog.blog-style--1:hover .content .blog-btn {
    opacity: 1;
    visibility: visible
}

.trydo-blog-list {
    word-break: break-word;
    border: 1px solid var(--color-border);
    border-radius: 4px
}

.trydo-blog-list .blog-content-wrapper {
    padding: 30px 45px;
    padding-bottom: 38px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .trydo-blog-list .blog-content-wrapper {
        padding:30px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .trydo-blog-list .blog-content-wrapper {
        padding:30px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .trydo-blog-list .blog-content-wrapper {
        padding:30px
    }
}

@media only screen and (max-width: 767px) {
    .trydo-blog-list .blog-content-wrapper {
        padding:30px
    }
}

.trydo-blog-list .blog-content-wrapper p {
    font-size: 16px;
    line-height: 1.9
}

.trydo-blog-list:first-child {
    margin-top: 0 !important
}

.trydo-blog-list .blog-top .title {
    font-size: 35px;
    line-height: 46px;
    font-weight: 500
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .trydo-blog-list .blog-top .title {
        font-size:28px;
        line-height: 36px
    }
}

@media only screen and (max-width: 767px) {
    .trydo-blog-list .blog-top .title {
        font-size:24px;
        line-height: 34px
    }
}

.trydo-blog-list .blog-top .title a {
    color: #1f1f25
}

.trydo-blog-list .blog-top .title:hover a {
    color: var(--color-primary)
}

.trydo-blog-list .blog-top .author {
    display: flex
}

.trydo-blog-list .thumbnail {
    display: block
}

.trydo-blog-list .thumbnail img {
    border-radius: 4px 4px 0 0;
    width: auto !important
}

.trydo-blog-list .thumbnail .thumb-inner a {
    display: inline-block
}

.trydo-blog-list .thumbnail .thumb-inner a img {
    display: inline-block !important
}

.trydo-blog-list ul.blog-meta li svg {
    width: 14px;
    margin-right: 6px
}

.trydo-blog-list .content {
    margin-top: 10px
}

.trydo-blog-list.format-link {
    background: 0 0;
    padding: 60px 36px;
    position: relative
}

@media only screen and (max-width: 767px) {
    .trydo-blog-list.format-link {
        padding:40px 19px
    }
}

.trydo-blog-list.format-link .blog-top {
    display: flex;
    align-items: center
}

.trydo-blog-list.format-link .blog-top .title {
    margin-bottom: 0
}

.trydo-blog-list.format-link .sticky {
    margin-right: 18px
}

.trydo-blog-list.format-link .sticky i {
    font-size: 40px;
    color: var(--color-primary)
}

@media only screen and (max-width: 767px) {
    .trydo-blog-list.format-link .sticky i {
        font-size:32px
    }
}

.trydo-blog-list.quote-blog {
    padding: 20px 0;
    position: relative;
    z-index: 2;
    border: 1px solid var(--color-border)
}

.trydo-blog-list.quote-blog blockquote {
    background: 0 0;
    border-radius: 0;
    margin: 0;
    border: transparent
}

.trydo-blog-list.quote-blog blockquote .title {
    font-style: normal;
    margin-bottom: 0
}

.trydo-blog-list.sticky {
    background: var(--color-primary-light);
    position: relative;
    padding: 0;
    border: none;
    position: relative
}

.trydo-blog-list.sticky:before {
    content: "\e919";
    width: 50px;
    height: 55px;
    background: var(--color-primary);
    position: absolute;
    right: 40px;
    top: 0;
    font-family: "feather" !important;
    text-align: center;
    padding: 12px;
    color: #fff;
    font-size: 22px
}

.trydo-blog-list.sticky:after {
    content: "";
    position: absolute;
    right: 40px;
    top: 40px;
    width: 0;
    height: 0;
    z-index: 2;
    border-bottom: 15px solid transparent;
    border-left: 25px solid var(--color-primary);
    border-right: 25px solid var(--color-primary);
    border-top: 15px solid transparent
}

.trydo-blog-list.sticky .blog-content-wrapper {
    padding: 35px 45px;
    padding-bottom: 43px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .trydo-blog-list.sticky .blog-content-wrapper {
        padding:68px 20px;
        padding-bottom: 43px
    }
}

@media only screen and (max-width: 767px) {
    .trydo-blog-list.sticky .blog-content-wrapper {
        padding:70px 20px;
        padding-bottom: 43px
    }
}

.trydo-blog-list.sticky .blog-content-wrapper p {
    color: #616161
}

.trydo-blog-list.format-gallery {
    position: relative;
    display: block
}

.trydo-blog-list.format-gallery .slick-slide {
    position: relative
}

.trydo-blog-list.format-gallery .thumbnail {
    display: block;
    position: relative
}

.trydo-blog-list.format-gallery .thumbnail .thumb-inner {
    display: block;
    position: relative
}

.trydo-blog-list.format-gallery .thumbnail .thumb-inner a {
    display: block !important
}

.trydo-blog-list.format-gallery .thumbnail .thumb-inner a img {
    display: block !important;
    width: 100% !important
}

.trydo-blog-list .blog-meta li.single-post-meta-tag,.trydo-blog-list .blog-meta li.single-post-meta-categories {
    position: relative
}

.trydo-blog-list .blog-meta li.single-post-meta-tag a,.trydo-blog-list .blog-meta li.single-post-meta-categories a {
    position: relative;
    padding-right: 7px
}

.trydo-blog-list .blog-meta li.single-post-meta-tag a:after,.trydo-blog-list .blog-meta li.single-post-meta-categories a:after {
    content: ",";
    left: 3px;
    position: relative
}

.trydo-blog-list .blog-meta li.single-post-meta-tag a:last-child,.trydo-blog-list .blog-meta li.single-post-meta-categories a:last-child {
    padding-right: 0
}

.trydo-blog-list .blog-meta li.single-post-meta-tag a:last-child:after,.trydo-blog-list .blog-meta li.single-post-meta-categories a:last-child:after {
    display: none
}

figure {
    margin-bottom: 30px;
    font-size: 16px;
    line-height: 1.7
}

.wp-block-button {
    margin-bottom: 20px;
    margin-top: 0
}

.alignwide {
    margin-left: -110px;
    margin-right: -110px;
    max-width: 1230px;
    width: auto;
    margin-bottom: 20px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .alignwide {
        margin-left:-50px;
        margin-right: -50px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .alignwide {
        margin-left:-50px;
        margin-right: -50px
    }
}

@media only screen and (max-width: 767px) {
    .alignwide {
        margin-left:0;
        margin-right: 0
    }
}

.alignfull {
    margin-left: calc(50% - 50vw);
    margin-right: calc(50% - 50vw);
    max-width: 100vw;
    width: 100vw;
    margin-bottom: 20px
}

.wp-block-image,.wp-block-cover {
    max-width: 100%;
    margin-bottom: 20px
}

.wp-block-image .alignleft,.wp-block-cover .alignleft {
    float: left;
    display: table;
    margin-left: 0;
    margin-right: 20px
}

.wp-block-image.alignright,.wp-block-cover.alignright {
    float: right;
    margin-left: 20px;
    display: table
}

.wp-block-image figcaption,.wp-block-cover figcaption {
    caption-side: bottom;
    margin: 20px 0 0;
    font-size: 16px
}

.wp-block-image figcaption a,.wp-block-cover figcaption a {
    text-decoration: none;
    color: var(--color-heading)
}

.wp-block-image figcaption a:hover,.wp-block-cover figcaption a:hover {
    color: var(--color-primary)
}

.wp-block-image.alignfull,.wp-block-cover.alignfull {
    margin-left: calc(50% - 50vw);
    margin-right: calc(50% - 50vw);
    width: auto;
    max-width: 100vw;
    margin-bottom: 15px
}

.wp-block-image.alignwide,.wp-block-cover.alignwide {
    margin-left: -110px;
    margin-right: -110px;
    max-width: 1230px;
    width: auto;
    margin-bottom: 40px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .wp-block-image.alignwide,.wp-block-cover.alignwide {
        margin-left:-50px;
        margin-right: -50px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-image.alignwide,.wp-block-cover.alignwide {
        margin-left:-50px;
        margin-right: -50px
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-image.alignwide,.wp-block-cover.alignwide {
        margin-left:0;
        margin-right: 0
    }
}

.wp-block-image.alignwide img,.wp-block-cover.alignwide img {
    width: 100%
}

.wp-block-image.alignfull,.wp-block-cover.alignfull {
    margin-left: calc(50% - 50vw);
    margin-right: calc(50% - 50vw);
    max-width: 100vw;
    width: auto
}

.wp-block-image.alignfull img,.wp-block-cover.alignfull img {
    width: 100%
}

.wp-block-image a,.wp-block-cover a {
    transition: .3s
}

.wp-block-image a:hover,.wp-block-cover a:hover {
    color: var(--color-primary)
}

.wp-block-file a {
    font-size: 16px;
    line-height: 1.8;
    color: var(--color-body);
    display: inline-block;
    transition: .3s
}

.wp-block-file a:hover {
    color: var(--color-primary)
}

.wp-block-archives-dropdown,.wp-block-categories-dropdown {
    margin-bottom: 30px
}

.wp-block-calendar table caption,.wp-block-calendar table tbody,.wp-block-latest-comments__comment-date {
    color: var(--color-body)
}

.wp-block-calendar tbody td,.wp-block-calendar th,.wp-block-table td,.wp-block-table th {
    border: 1px solid var(--color-border)
}

.wp-block-separator {
    border-bottom: 1px solid var(--color-border)
}

.wp-block-calendar tfoot a,.entry-content .wp-block-calendar tfoot a {
    color: var(--color-heading);
    text-decoration: none
}

ol.has-avatars,ol.wp-block-latest-comments {
    padding-left: 0
}

.wp-block-cover.alignleft {
    padding: 0
}

.rn-blog-details p {
    line-height: 1.9
}

.rn-blog-details ul.blocks-gallery-grid {
    padding-left: 0;
    margin-bottom: 0
}

.rn-blog-details iframe {
    border-radius: 5px
}

.rn-blog-details figure.wp-block-gallery,.rn-blog-details figure.wp-block-audio {
    margin-bottom: 30px
}

.rn-blog-details .single-post-content-wrap .wp-block-image:nth-last-of-type(1) {
    margin-bottom: 40px;
    overflow: hidden
}

.blocks-gallery-caption,.wp-block-embed figcaption,.wp-block-image figcaption {
    color: var(--color-body);
    font-size: 15px;
    text-align: center
}

figcaption,.wp-block-image figcaption {
    margin: 10px 0 0;
    line-height: 1.7;
    color: var(--color-body)
}

figcaption a,.wp-block-image figcaption a {
    color: var(--color-body)
}

.rn-blog-details .wp-block-cover .wp-block-cover-text a {
    color: #fff;
    transition: .3s
}

.rn-blog-details .wp-block-cover .wp-block-cover-text a:hover {
    color: var(--color-primary)
}

.single-post-content-wrap>*:first-child,.entry-content>*:first-child {
    margin-top: 0
}

cite.author-name {
    font-style: normal;
    margin-bottom: 5px;
    display: inline-block
}

.gallery-item {
    margin-bottom: 30px;
    padding: 0 15px
}

.wp-caption {
    margin-bottom: 15px;
    max-width: 100%
}

.wp-caption .wp-caption-text {
    margin: 8px 0;
    text-align: center
}

.wp-caption-text {
    text-align: center
}

.screen-reader-text {
    display: none
}

.axil-blog-details-area figure {
    margin-bottom: 3px
}

.axil-blog-details-area select {
    margin-bottom: 30px
}

.rn-blog-details figcaption,.entry-content figcaption {
    font-size: 15px;
    text-align: center;
    margin: 10px 0 0;
    line-height: 1.6;
    color: var(--color-body);
    display: block;
    width: 100%;
    font-weight: 400
}

.blog-single-page-title {
    position: relative;
    padding-left: 50px;
    padding-right: 50px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .blog-single-page-title {
        padding-top:80px !important
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .blog-single-page-title {
        padding-top:70px !important;
        padding-left: 0;
        padding-right: 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .blog-single-page-title {
        padding-top:65px !important;
        padding-left: 0;
        padding-right: 0
    }
}

@media only screen and (max-width: 767px) {
    .blog-single-page-title {
        padding-top:68px !important;
        padding-left: 0;
        padding-right: 0
    }
}

.blog-single-page-title ul.blog-meta {
    margin-top: 30px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .blog-single-page-title ul.blog-meta {
        padding-top:30px !important
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .blog-single-page-title ul.blog-meta {
        padding-top:20px !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .blog-single-page-title ul.blog-meta {
        padding-top:20px !important
    }
}

@media only screen and (max-width: 767px) {
    .blog-single-page-title ul.blog-meta {
        padding-top:10px !important
    }
}

.blog-single-page-title ul.blog-meta li {
    color: #c6c9d8
}

.blog-single-page-title ul.blog-meta li svg {
    margin-right: 7px;
    font-size: 18px;
    width: 14px
}

.blog-single-page-title ul.blog-meta li a {
    color: #c6c9d8;
    transition: .3s
}

.blog-single-page-title ul.blog-meta li a:hover {
    color: var(--color-primary)
}

.blog-single-page-title ul.blog-meta li.single-post-meta-tag,.blog-single-page-title ul.blog-meta li.single-post-meta-categories {
    position: relative
}

.blog-single-page-title ul.blog-meta li.single-post-meta-tag a,.blog-single-page-title ul.blog-meta li.single-post-meta-categories a {
    position: relative;
    padding-right: 7px
}

.blog-single-page-title ul.blog-meta li.single-post-meta-tag a:after,.blog-single-page-title ul.blog-meta li.single-post-meta-categories a:after {
    content: ",";
    left: 3px;
    position: relative
}

.blog-single-page-title ul.blog-meta li.single-post-meta-tag a:last-child,.blog-single-page-title ul.blog-meta li.single-post-meta-categories a:last-child {
    padding-right: 0
}

.blog-single-page-title ul.blog-meta li.single-post-meta-tag a:last-child:after,.blog-single-page-title ul.blog-meta li.single-post-meta-categories a:last-child:after {
    display: none
}

.rn-blog-details .inner-wrapper .inner {
    padding: 0 110px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rn-blog-details .inner-wrapper .inner {
        padding:0 40px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-blog-details .inner-wrapper .inner {
        padding:0 40px
    }
}

@media only screen and (max-width: 767px) {
    .rn-blog-details .inner-wrapper .inner {
        padding:0
    }
}

.rn-blog-details .inner-wrapper .inner .thumbnail {
    margin: 0 -110px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rn-blog-details .inner-wrapper .inner .thumbnail {
        margin-left:-50px;
        margin-right: -50px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-blog-details .inner-wrapper .inner .thumbnail {
        margin-left:-50px;
        margin-right: -50px
    }
}

@media only screen and (max-width: 767px) {
    .rn-blog-details .inner-wrapper .inner .thumbnail {
        margin-left:0;
        margin-right: 0
    }
}

.rn-blog-details .inner-wrapper .blog-single-list-wrapper {
    margin-right: -110px
}

@media only screen and (max-width: 767px) {
    .rn-blog-details .inner-wrapper .blog-single-list-wrapper {
        margin-right:0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-blog-details .inner-wrapper .blog-single-list-wrapper {
        margin-right:0
    }
}

.rn-blog-details .inner-wrapper .blog-single-list-wrapper .thumbnail {
    width: 55%;
    padding-right: 30px;
    margin-right: 0
}

@media only screen and (max-width: 767px) {
    .rn-blog-details .inner-wrapper .blog-single-list-wrapper .thumbnail {
        width:100%;
        padding-right: 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-blog-details .inner-wrapper .blog-single-list-wrapper .thumbnail {
        width:100%;
        padding-right: 0
    }
}

.rn-blog-details .inner-wrapper .blog-single-list-wrapper .thumbnail img {
    width: 100%
}

.rn-blog-details .inner-wrapper .blog-single-list-wrapper .thumbnail span {
    color: var(--color-body);
    font-size: 14px;
    display: block;
    text-align: left;
    padding-top: 10px;
    padding-left: 110px
}

@media only screen and (max-width: 767px) {
    .rn-blog-details .inner-wrapper .blog-single-list-wrapper .thumbnail span {
        font-size:13px;
        padding-left: 0;
        margin-bottom: 23px
    }
}

.rn-blog-details .inner-wrapper .blog-single-list-wrapper h4.title {
    font-size: 24px;
    font-weight: 500;
    margin-bottom: 30px
}

@media only screen and (max-width: 767px) {
    .rn-blog-details .inner-wrapper .blog-single-list-wrapper h4.title {
        margin-bottom:16px
    }
}

.rn-blog-details .inner-wrapper .blog-single-list-wrapper .content {
    width: 45%
}

@media only screen and (max-width: 767px) {
    .rn-blog-details .inner-wrapper .blog-single-list-wrapper .content {
        width:100%
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-blog-details .inner-wrapper .blog-single-list-wrapper .content {
        width:100%
    }
}

.rn-blog-details .inner-wrapper .blog-single-list-wrapper .content ul.list-style {
    margin-bottom: 50px
}

@media only screen and (max-width: 767px) {
    .rn-blog-details .inner-wrapper .blog-single-list-wrapper .content ul.list-style {
        margin-bottom:25px
    }
}

.rn-blog-details p.form-group {
    margin-bottom: 25px
}

.rn-blog-details p.form-group:last-child {
    margin-bottom: 0
}

.rn-blog-details .trydo-comment-form .inner,.rn-blog-details .comment-form .inner {
    padding: 0
}

.rn-blog-details .trydo-comment-form .inner p.logged-in-as,.rn-blog-details .comment-form .inner p.logged-in-as {
    margin-bottom: 30px
}

.rn-blog-details .trydo-comment-form .inner p a,.rn-blog-details .comment-form .inner p a {
    color: var(--color-heading)
}

.rn-blog-details .trydo-comment-form .inner p a:hover,.rn-blog-details .comment-form .inner p a:hover {
    color: var(--color-primary)
}

.comment-list {
    list-style: none;
    padding: 0;
    margin: 0
}

.comment-list>ul {
    list-style: none
}

.comment-list ul.children {
    list-style: none;
    padding-left: 80px
}

.comment-list a {
    text-decoration: none
}

.comment-list ol {
    margin-bottom: 30px
}

.comment-list ol ol {
    margin-bottom: 0
}

.comment-list .comment,.comment-list .pingback,.comment-list .trackback {
    margin: 0;
    padding: 0
}

.comment-list .comment.parent .single-comment,.comment-list .pingback.parent .single-comment,.comment-list .trackback.parent .single-comment {
    background-color: var(--color-lighter);
    border-color: var(--color-lighter)
}

.comment-list .comment.parent ul.children .comment,.comment-list .pingback.parent ul.children .comment,.comment-list .trackback.parent ul.children .comment {
    position: relative
}

.comment-list .comment.parent ul.children .comment:before,.comment-list .pingback.parent ul.children .comment:before,.comment-list .trackback.parent ul.children .comment:before {
    content: "";
    position: absolute;
    top: 0;
    height: 100%;
    border-left: 1px solid var(--color-border);
    left: -45px
}

.comment-list .comment.parent ul.children .comment .single-comment,.comment-list .pingback.parent ul.children .comment .single-comment,.comment-list .trackback.parent ul.children .comment .single-comment {
    position: relative;
    border-color: var(--color-border)
}

.comment-list .comment.parent ul.children .comment .single-comment:before,.comment-list .pingback.parent ul.children .comment .single-comment:before,.comment-list .trackback.parent ul.children .comment .single-comment:before {
    content: "";
    position: absolute;
    top: 50%;
    border-top: 1px solid #dfe5e8;
    left: -45px;
    width: 45px
}

.comment-list .comment.parent ul.children .single-comment,.comment-list .pingback.parent ul.children .single-comment,.comment-list .trackback.parent ul.children .single-comment {
    background-color: transparent
}

.comment-list .comment.byuser .single-comment,.comment-list .pingback.byuser .single-comment,.comment-list .trackback.byuser .single-comment {
    background-color: var(--color-primary-light) !important;
    border-color: var(--color-primary-light) !important
}

.comment-list .comment .single-comment,.comment-list .pingback .single-comment,.comment-list .trackback .single-comment {
    border: 1px solid var(--color-border);
    padding: 40px;
    margin-bottom: 40px;
    border-radius: 4px
}

.comment-list .comment .comment-img,.comment-list .pingback .comment-img,.comment-list .trackback .comment-img {
    display: flex;
    align-items: center;
    padding: 0;
    margin-bottom: 18px
}

.comment-list .comment .comment-img .comment-avatar,.comment-list .pingback .comment-img .comment-avatar,.comment-list .trackback .comment-img .comment-avatar {
    margin-right: 20px;
    border-radius: 3px
}

.comment-list .comment .comment-img h6,.comment-list .pingback .comment-img h6,.comment-list .trackback .comment-img h6 {
    margin-bottom: 0
}

.comment-list .comment .comment-img .commenter,.comment-list .pingback .comment-img .commenter,.comment-list .trackback .comment-img .commenter {
    color: var(--color-heading);
    display: block;
    text-decoration: none;
    font-size: 17px;
    line-height: 24px;
    font-weight: 600;
    margin-bottom: 6px
}

.comment-list .comment .comment-img .commenter a,.comment-list .pingback .comment-img .commenter a,.comment-list .trackback .comment-img .commenter a {
    color: var(--color-heading)
}

.comment-list .comment .comment-img .commenter a:hover,.comment-list .pingback .comment-img .commenter a:hover,.comment-list .trackback .comment-img .commenter a:hover {
    color: var(--color-primary)
}

.comment-list .comment .comment-img .time-spent,.comment-list .pingback .comment-img .time-spent,.comment-list .trackback .comment-img .time-spent {
    font-size: 13px;
    color: var(--color-body);
    font-weight: 400
}

.comment-list .comment .comment-text,.comment-list .pingback .comment-text,.comment-list .trackback .comment-text {
    font-size: 16px;
    line-height: 1.7;
    font-weight: 400
}

.comment-list .comment .comment-text a,.comment-list .pingback .comment-text a,.comment-list .trackback .comment-text a {
    color: var(--color-body)
}

.comment-list .comment .comment-text a:hover,.comment-list .pingback .comment-text a:hover,.comment-list .trackback .comment-text a:hover {
    color: var(--color-primary)
}

.comment-list .comment .comment-text p,.comment-list .pingback .comment-text p,.comment-list .trackback .comment-text p {
    font-size: 16px;
    line-height: 1.7;
    font-weight: 400
}

.comment-list .comment .comment-text p img,.comment-list .pingback .comment-text p img,.comment-list .trackback .comment-text p img {
    padding: 10px 0
}

.comment-list .comment .comment-text p a,.comment-list .pingback .comment-text p a,.comment-list .trackback .comment-text p a {
    color: var(--color-body)
}

.comment-list .comment .reply-edit,.comment-list .pingback .reply-edit,.comment-list .trackback .reply-edit {
    display: flex;
    font-weight: 500;
    margin-top: 15px
}

.comment-list .comment .reply-edit a.comment-edit-link,.comment-list .pingback .reply-edit a.comment-edit-link,.comment-list .trackback .reply-edit a.comment-edit-link {
    margin-right: 14px;
    color: var(--color-heading);
    font-size: 14px
}

.comment-list .comment .reply-edit a.comment-edit-link:hover,.comment-list .pingback .reply-edit a.comment-edit-link:hover,.comment-list .trackback .reply-edit a.comment-edit-link:hover {
    color: var(--color-primary)
}

.comment-list .comment .reply-edit .reply a.comment-reply-link,.comment-list .pingback .reply-edit .reply a.comment-reply-link,.comment-list .trackback .reply-edit .reply a.comment-reply-link {
    color: var(--color-primary);
    font-size: 16px
}

.comment-list .comment .reply-edit .reply a.comment-reply-link:hover,.comment-list .pingback .reply-edit .reply a.comment-reply-link:hover,.comment-list .trackback .reply-edit .reply a.comment-reply-link:hover {
    color: var(--color-heading)
}

.comment-list .comment .reply-edit .reply a.comment-reply-link i,.comment-list .pingback .reply-edit .reply a.comment-reply-link i,.comment-list .trackback .reply-edit .reply a.comment-reply-link i {
    padding-right: 4px
}

@media only screen and (max-width: 575px) {
    .comment-list .comment .content .heading,.comment-list .pingback .content .heading,.comment-list .trackback .content .heading {
        display:block
    }
}

.comment-list .comment .content .heading .title h5,.comment-list .pingback .content .heading .title h5,.comment-list .trackback .content .heading .title h5 {
    margin-bottom: 0
}

.comment-list .comment .content .heading .coment-date,.comment-list .pingback .content .heading .coment-date,.comment-list .trackback .content .heading .coment-date {
    display: flex;
    align-items: center
}

.comment-list .comment .content .heading .coment-date p,.comment-list .pingback .content .heading .coment-date p,.comment-list .trackback .content .heading .coment-date p {
    font-size: 15px;
    line-height: 24px;
    color: var(--color-primary);
    margin-bottom: 0
}

.comment-list .comment .content .heading .coment-date a.reply-btn,.comment-list .pingback .content .heading .coment-date a.reply-btn,.comment-list .trackback .content .heading .coment-date a.reply-btn {
    font-size: 14px;
    line-height: 26px;
    display: inline-block;
    color: var(--color-primary);
    padding-left: 10px
}

.comment-list .comment.comment-reply,.comment-list .pingback.comment-reply,.comment-list .trackback.comment-reply {
    margin-left: 75px
}

@media only screen and (max-width: 767px) {
    .comment-list .comment.comment-reply,.comment-list .pingback.comment-reply,.comment-list .trackback.comment-reply {
        margin-left:0
    }
}

.single-post-content-wrap input {
    border: var(--border-width) solid var(--color-border);
    border-radius: var(--radius);
    height: 50px;
    font-size: 16px
}

.single-post-content-wrap input:focus {
    border-color: var(--color-primary)
}

.comment-respond {
    margin-bottom: 50px
}

.comment-respond .comment-reply-title {
    margin-bottom: 5px;
    display: flex;
    align-items: center;
    font-size: 24px;
    font-weight: 600
}

.comment-respond .logged-in-as {
    margin-bottom: 20px;
    font-size: 16px;
    color: var(--color-body);
    font-weight: 400
}

.comment-respond input {
    border: 2px solid var(--color-border);
    border-radius: 4px;
    height: 50px;
    font-size: 16px;
    padding: 0 20px
}

.comment-respond input[type=submit] {
    border: 0 none;
    margin-top: 0
}

.comment-respond textarea {
    min-height: 230px;
    border: 2px solid var(--color-border);
    border-radius: 4px;
    resize: none;
    padding: 15px;
    font-size: 16px
}

.comment-respond .form-group {
    margin-bottom: 30px
}

.comment-respond .form-submit {
    margin-bottom: 0
}

.comment-respond .comment-form-cookies-consent {
    margin-bottom: 25px;
    margin-top: -10px
}

.comment-respond #cancel-comment-reply-link {
    font-size: 16px;
    padding-left: 36px;
    position: relative;
    color: var(--color-primary);
    text-transform: uppercase
}

.comment-respond #cancel-comment-reply-link:before {
    content: "\ea02";
    position: absolute;
    left: 15px;
    font-family: "feather" !important;
    top: 50%;
    color: var(--color-primary);
    transform: translateY(-50%);
    font-size: 19px
}

.wp-block-quote,blockquote,.wp-block-coblocks-click-to-tweet,.wp-block-pullquote blockquote,.wp-block-quote.is-style-large,.wp-block-quote.is-large,blockquote.has-text-align-right,.wp-block-quote.has-text-align-right {
    padding: 40px 40px 40px 100px;
    position: relative;
    font-size: 20px;
    line-height: 1.7;
    font-style: italic;
    background: 0 0;
    border-radius: 5px;
    margin: 30px 0;
    font-weight: 500;
    color: var(--color-heading);
    z-index: 1;
    border: 1px solid var(--color-border)
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-quote,blockquote,.wp-block-coblocks-click-to-tweet,.wp-block-pullquote blockquote,.wp-block-quote.is-style-large,.wp-block-quote.is-large,blockquote.has-text-align-right,.wp-block-quote.has-text-align-right {
        padding:20px;
        padding-left: 40px
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-quote,blockquote,.wp-block-coblocks-click-to-tweet,.wp-block-pullquote blockquote,.wp-block-quote.is-style-large,.wp-block-quote.is-large,blockquote.has-text-align-right,.wp-block-quote.has-text-align-right {
        padding:20px;
        padding-left: 40px
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-quote,blockquote,.wp-block-coblocks-click-to-tweet,.wp-block-pullquote blockquote,.wp-block-quote.is-style-large,.wp-block-quote.is-large,blockquote.has-text-align-right,.wp-block-quote.has-text-align-right {
        margin:20px 0
    }
}

.wp-block-quote:before,blockquote:before,.wp-block-coblocks-click-to-tweet:before,.wp-block-pullquote blockquote:before,.wp-block-quote.is-style-large:before,.wp-block-quote.is-large:before,blockquote.has-text-align-right:before,.wp-block-quote.has-text-align-right:before {
    content: "â€œ";
    position: absolute;
    color: var(--color-primary);
    z-index: -1;
    height: 40px;
    width: 40px;
    line-height: 1em;
    top: 40px;
    left: 30px;
    font-size: 70px;
    display: inline-block;
    font-weight: 400;
    text-align: center;
    font-family: "Poppins",sans-serif
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-quote:before,blockquote:before,.wp-block-coblocks-click-to-tweet:before,.wp-block-pullquote blockquote:before,.wp-block-quote.is-style-large:before,.wp-block-quote.is-large:before,blockquote.has-text-align-right:before,.wp-block-quote.has-text-align-right:before {
        top:7px;
        left: 0;
        font-size: 48px
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-quote:before,blockquote:before,.wp-block-coblocks-click-to-tweet:before,.wp-block-pullquote blockquote:before,.wp-block-quote.is-style-large:before,.wp-block-quote.is-large:before,blockquote.has-text-align-right:before,.wp-block-quote.has-text-align-right:before {
        top:7px;
        left: 0;
        font-size: 48px
    }
}

.wp-block-quote p,blockquote p,.wp-block-coblocks-click-to-tweet p,.wp-block-pullquote blockquote p,.wp-block-quote.is-style-large p,.wp-block-quote.is-large p,blockquote.has-text-align-right p,.wp-block-quote.has-text-align-right p {
    margin-bottom: 0;
    font-style: normal;
    font-size: 20px;
    line-height: 1.7;
    font-weight: 500;
    color: var(--color-heading)
}

.comment-list .comment .comment-text blockquote p,.comment-list .pingback .comment-text blockquote p,.comment-list .trackback .comment-text blockquote p {
    margin-bottom: 0;
    font-style: normal;
    font-size: 20px;
    line-height: 1.7;
    font-weight: 500;
    color: var(--color-heading)
}

.wp-block-quote.is-style-large {
    padding: 50px 50px 50px 120px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-quote.is-style-large {
        padding:40px;
        padding-left: 70px
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-quote.is-style-large {
        padding:40px;
        padding-left: 70px
    }
}

.wp-block-quote.is-style-large:before {
    height: 52px;
    width: 52px;
    top: 50px;
    left: 34px;
    font-size: 90px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-quote.is-style-large:before {
        top:20px;
        left: 10px;
        font-size: 60px
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-quote.is-style-large:before {
        top:20px;
        left: 10px;
        font-size: 60px
    }
}

.wp-block-quote.has-text-align-right {
    padding: 40px 100px 40px 40px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-quote.has-text-align-right {
        padding:20px;
        padding-right: 40px
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-quote.has-text-align-right {
        padding:20px;
        padding-right: 40px
    }
}

.wp-block-quote.has-text-align-right:before {
    right: 30px;
    left: auto
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-quote.has-text-align-right:before {
        right:0;
        left: auto
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-quote.has-text-align-right:before {
        right:0;
        left: auto
    }
}

.wp-block-quote.has-text-align-right.is-style-large {
    padding: 50px 120px 50px 50px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-quote.has-text-align-right.is-style-large {
        padding:40px;
        padding-left: 70px
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-quote.has-text-align-right.is-style-large {
        padding:40px;
        padding-left: 70px
    }
}

.wp-block-quote.has-text-align-right.is-style-large:before {
    right: 34px;
    left: auto
}

.has-cyan-bluish-gray-background-color blockquote,.has-cyan-bluish-gray-background-color .wp-block-quote,.has-cyan-bluish-gray-background-color .wp-block-coblocks-click-to-tweet,.has-cyan-bluish-gray-background-color .wp-block-pullquote blockquote,.has-cyan-bluish-gray-background-color .wp-block-quote.is-style-large,.has-cyan-bluish-gray-background-color .wp-block-quote.is-large,.has-cyan-bluish-gray-background-color blockquote.has-text-align-right,.has-cyan-bluish-gray-background-color .wp-block-quote.has-text-align-right {
    background: #fff
}

.wp-block-pullquote.alignleft blockquote,.wp-block-pullquote.alignright blockquote,.wp-block-pullquote.alignleft blockquote p,.wp-block-pullquote.alignright blockquote p,.wp-block-pullquote blockquote,.wp-block-pullquote p {
    border: 0 none;
    font-size: 20px;
    line-height: 1.7
}

.wp-block-quote.is-style-large p,.wp-block-quote.is-large p {
    font-size: 30px;
    line-height: 1.8
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-quote.is-style-large p,.wp-block-quote.is-large p {
        font-size:24px
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-quote.is-style-large p,.wp-block-quote.is-large p {
        font-size:24px
    }
}

.alignright blockquote {
    border-left: 0;
    border-right: 4px solid var(--color-primary)
}

.axil-blog-details-area blockquote p {
    margin-bottom: 0;
    font-size: 20px
}

.wp-block-pullquote {
    border: 0 none;
    border-top: 4px solid var(--color-primary);
    border-bottom: 4px solid var(--color-primary);
    border-left: none;
    padding: 30px 0
}

.wp-block-pullquote blockquote {
    margin: 0;
    border: 0 none;
    padding: 10px 20px
}

.wp-block-pullquote blockquote:before {
    display: none
}

.wp-block-pullquote.alignleft,.alignleft {
    text-align: left
}

.wp-block-pullquote.alignright,.alignright {
    text-align: right
}

.wp-block-pullquote.aligncenter,.aligncenter {
    text-align: center
}

.wp-block-pullquote.has-background {
    padding: 30px 0
}

.wp-block-pullquote.is-style-solid-color blockquote {
    padding: 40px 40px 40px 100px
}

ul.blog-meta {
    display: flex;
    margin: 0 -12px;
    flex-wrap: wrap;
    position: relative;
    padding-left: 0
}

@media only screen and (max-width: 767px) {
    ul.blog-meta {
        margin:0 -7px;
        padding: 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    ul.blog-meta {
        padding:0
    }
}

ul.blog-meta li {
    font-size: 14px;
    line-height: 1.3;
    color: var(--color-body);
    margin: 0 12px;
    margin-bottom: 5px;
    position: relative
}

@media only screen and (max-width: 767px) {
    ul.blog-meta li {
        font-size:14px;
        margin: 0 7px;
        margin-bottom: 10px
    }
}

ul.blog-meta li a {
    color: var(--color-body);
    display: inline-block;
    line-height: 22px
}

ul.blog-meta li a:hover {
    color: var(--color-primary)
}

ul.blog-meta li svg {
    margin-right: 13px;
    font-size: 22px
}

.rn-blog-details .wp-block-latest-posts.wp-block-latest-posts__list,.entry-content .wp-block-latest-posts.wp-block-latest-posts__list {
    padding-left: 0
}

.rn-blog-details .wp-block-latest-posts.wp-block-latest-posts__list li a,.entry-content .wp-block-latest-posts.wp-block-latest-posts__list li a {
    font-size: 16px;
    line-height: 22px;
    color: var(--color-heading);
    font-weight: 500;
    transition: .3s
}

.rn-blog-details .wp-block-latest-posts.wp-block-latest-posts__list li a:hover,.entry-content .wp-block-latest-posts.wp-block-latest-posts__list li a:hover {
    color: var(--color-primary)
}

.rn-blog-details .sticky-blog ul.blog-meta li,.entry-content .sticky-blog ul.blog-meta li {
    margin-bottom: 0
}

.rn-blog-details .blog-top .author,.entry-content .blog-top .author {
    display: flex;
    align-items: flex-start;
    margin-bottom: 40px
}

.rn-blog-details .blog-top .info,.entry-content .blog-top .info {
    padding-left: 20px
}

.rn-blog-details .blog-top .info h6,.entry-content .blog-top .info h6 {
    margin-bottom: 6px
}

.rn-blog-details .blog-top .info ul.blog-meta li,.entry-content .blog-top .info ul.blog-meta li {
    position: relative
}

.rn-blog-details .blog-top .info ul.blog-meta li+li:before,.entry-content .blog-top .info ul.blog-meta li+li:before {
    position: absolute;
    background: #d3d3d3;
    height: 14px;
    width: 1px;
    left: -10px;
    top: 50%;
    transform: translateY(-50%);
    content: ""
}

.rn-blog-details .alignleft,.entry-content .alignleft {
    margin-right: 20px
}

.rn-blog-details .alignright,.entry-content .alignright {
    margin-left: 20px
}

.rn-blog-details .aligncenter,.entry-content .aligncenter {
    text-align: center
}

.rn-blog-details .wp-block-calendar,.entry-content .wp-block-calendar {
    margin-bottom: 20px
}

.rn-blog-details .wp-block-calendar a,.entry-content .wp-block-calendar a {
    text-decoration: none
}

.rn-blog-details .wp-block-calendar nav.wp-calendar-nav,.entry-content .wp-block-calendar nav.wp-calendar-nav {
    text-align: left
}

.wp-block-latest-comments__comment-date {
    margin-top: 4px
}

.wp-block-search .wp-block-search__button {
    padding: 0 14px;
    border-radius: 4px
}

.wp-block-search {
    margin-bottom: 30px
}

@media only screen and (max-width: 575px) {
    .wp-block-search {
        display:block
    }
}

@media only screen and (max-width: 575px) {
    .wp-block-search .wp-block-search__input {
        display:block
    }
}

@media only screen and (max-width: 575px) {
    .wp-block-search .wp-block-search__button {
        margin-left:0;
        margin-top: 15px;
        padding: 5px 10px;
        display: inline-block
    }
}

table th,table td,.wp-block-calendar tbody th,.wp-block-calendar tbody td,.wp-block-table td,.wp-block-table th {
    border: 1px solid var(--color-border);
    padding: 7px 10px;
    text-align: center
}

table,.wp-block-calendar {
    font-size: 16px !important;
    line-height: 28px
}

.post-password-form input[type=submit] {
    margin-top: 0;
    border: 0 none;
    display: inline-block;
    padding: 9px 20px;
    margin-left: 10px
}

.wp-block-group.has-background {
    margin-bottom: 20px
}

.wp-block-separator.is-style-dots:before {
    content: "Â·Â·Â·";
    color: #717173;
    font-size: 20px;
    letter-spacing: 2em;
    padding-left: 2em;
    font-family: serif
}

.wp-block-table a,table a {
    transition: .3s
}

.entry-content,.page-entry-content-footer-wrapper {
    padding: 0 110px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .entry-content,.page-entry-content-footer-wrapper {
        padding:0 40px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .entry-content,.page-entry-content-footer-wrapper {
        padding:0 40px
    }
}

@media only screen and (max-width: 767px) {
    .entry-content,.page-entry-content-footer-wrapper {
        padding:0
    }
}

ul.aligncenter {
    list-style: inside
}

ul.aligncenter ul {
    list-style: inside
}

.wp-block-coblocks-alert {
    margin-bottom: 15px
}

.wp-block-coblocks-highlight__content:not(.has-background) {
    background-color: var(--color-primary)
}

.has-secondary-background-color {
    background-color: var(--color-secondary)
}

a.post-edit-link {
    background: var(--color-primary);
    padding: 0 15px;
    font-size: 14px;
    font-weight: 500;
    color: #fff;
    border-radius: 5px;
    margin-top: 20px;
    display: inline-block
}

.wp-block-cover-image .wp-block-cover-image-text,.wp-block-cover .wp-block-cover-text,.wp-block-cover-text,P.wp-block-cover-text,P.wp-block-cover,.rn-blog-details .wp-block-cover .wp-block-cover-text {
    margin-bottom: 0;
    max-width: 1040px;
    color: #fff;
    padding: 15px
}

.wp-block-cover-image .wp-block-cover-image-text,.wp-block-cover .wp-block-cover-text,section.wp-block-cover-image>h2 {
    font-size: 36px;
    line-height: 1.6
}

.blocks-gallery-grid .blocks-gallery-image figcaption,.blocks-gallery-grid .blocks-gallery-item figcaption,.wp-block-gallery .blocks-gallery-image figcaption,.wp-block-gallery .blocks-gallery-item figcaption {
    padding: 40px 20px 20px
}

.wp-block-columns.alignfull,.alignfull:not(.has-background) .wp-block-columns {
    padding-left: 40px;
    padding-right: 40px
}

.wp-block-columns {
    margin-bottom: 30px
}

.wp-block-column>*:last-child {
    margin-bottom: 0
}

.wp-block-column>*:first-child {
    margin-top: 0
}

.wp-block-preformatted {
    margin-top: 30px
}

.wp-block-coblocks-social a.wp-block-button__link {
    border: 0 none
}

:root .editor-styles-wrapper .has-pale-pink-background-color,:root .has-pale-pink-background-color {
    background-color: #000 !important
}

@media (min-width: 1200px) {
    .wp-block-cover-image .wp-block-cover-image-text,.wp-block-cover .wp-block-cover-text,.wp-block-cover-text,P.wp-block-cover-text,P.wp-block-cover,.rn-blog-details .wp-block-cover .wp-block-cover-text {
        max-width:1040px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .wp-block-cover-image .wp-block-cover-image-text,.wp-block-cover .wp-block-cover-text,.wp-block-cover-text,P.wp-block-cover-text,P.wp-block-cover,.rn-blog-details .wp-block-cover .wp-block-cover-text {
        max-width:960px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-cover-image .wp-block-cover-image-text,.wp-block-cover .wp-block-cover-text,.wp-block-cover-text,P.wp-block-cover-text,P.wp-block-cover,.rn-blog-details .wp-block-cover .wp-block-cover-text {
        max-width:720px
    }
}

@media only screen and (min-width: 576px) and (max-width:767px) {
    .wp-block-cover-image .wp-block-cover-image-text,.wp-block-cover .wp-block-cover-text,.wp-block-cover-text,P.wp-block-cover-text,P.wp-block-cover,.rn-blog-details .wp-block-cover .wp-block-cover-text {
        max-width:540px
    }
}

.audio-player-wrapper audio {
    display: block;
    width: 100%
}

.trydo-blog-comment .comment-navigation:first-child {
    margin-bottom: 20px
}

.trydo-blog-list.format-gallery .thumbnail {
    display: block;
    position: relative;
    margin-bottom: 0
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .wp-block-columns.alignfull,.alignfull:not(.has-background) .wp-block-columns {
        padding-left:15px;
        padding-right: 15px
    }
}

@media only screen and (max-width: 767px) {
    .wp-block-columns.alignfull,.alignfull:not(.has-background) .wp-block-columns {
        padding-left:15px;
        padding-right: 15px
    }

    .wp-block-quote.is-large cite,.wp-block-quote.is-large footer,.wp-block-quote.is-style-large cite,.wp-block-quote.is-style-large footer {
        font-size: 14px
    }
}

@media only screen and (max-width: 575px) {
    .post-password-form input[type=submit] {
        margin-left:0;
        margin-top: 15px
    }
}

table th,table td {
    padding: 10px
}

.wp-calendar-table th,.wp-calendar-table td {
    padding: 7px
}

table thead th,.wp-calendar-table thead th {
    color: var(--color-heading)
}

table th {
    font-weight: 600;
    color: var(--color-heading)
}

table a,table a:link,table a:visited {
    font-weight: 400
}

.rn-blog-details figure img {
    border-radius: 10px
}

.rbt-single-widget {
    border-radius: 4px;
    padding: 20px;
    border: 1px solid var(--color-border);
    padding-top: 0
}

.rbt-single-widget:first-child {
    margin-top: 0 !important
}

.rbt-single-widget input,.rbt-single-widget select {
    border: var(--border-width) solid var(--color-primary-light)
}

.rbt-single-widget select {
    background: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/arrow-icon.png) 93% center no-repeat transparent
}

.rbt-single-widget.widget_trydo_info_widget .logo {
    margin-bottom: 20px;
    max-height: 60px;
    margin-top: 20px
}

.rbt-single-widget.widget_trydo_info_widget .logo a {
    display: block
}

.rbt-single-widget.widget_trydo_info_widget .logo a img {
    max-height: 60px
}

.rbt-single-widget.widget_trydo_info_widget .address p {
    margin-bottom: 9px
}

.rbt-single-widget.widget_trydo_info_widget .address p i {
    margin-right: 10px;
    font-size: 15px;
    color: var(--color-primary)
}

.rbt-single-widget.widget_trydo_info_widget .address p a {
    color: var(--color-body);
    transition: .3s
}

.rbt-single-widget.widget_trydo_info_widget .address p a:hover {
    color: var(--color-primary)
}

.rbt-single-widget.widget_trydo_info_widget .address p:last-child {
    margin-bottom: 0
}

.rbt-single-widget.widget_search {
    padding: 0;
    border: 0 none
}

.rbt-single-widget.widget_search .title {
    margin: 0
}

.rbt-single-widget p {
    font-size: 16px;
    line-height: 28px;
    color: #717173
}

.rbt-single-widget .title,.rbt-single-widget h2 {
    line-height: 26px;
    position: relative;
    padding-bottom: 6px;
    font-size: 18px;
    font-weight: 500;
    color: var(--color-primary);
    background: var(--color-primary-light);
    margin: -1px -22px 0;
    padding: 14px 24px;
    border-radius: 4px
}

.rbt-single-widget .title a,.rbt-single-widget h2 a {
    color: var(--color-primary)
}

.rbt-single-widget .title a.rsswidget img,.rbt-single-widget h2 a.rsswidget img {
    height: 13px;
    margin-right: 3px
}

.rbt-single-widget .title img,.rbt-single-widget h2 img {
    vertical-align: 0px
}

.rbt-single-widget .small-post {
    display: flex
}

.rbt-single-widget .small-post .thumbnail {
    padding-right: 20px
}

.rbt-single-widget .small-post .thumbnail a {
    display: block
}

.rbt-single-widget .small-post .thumbnail img {
    max-height: 80px;
    max-width: 100px
}

.rbt-single-widget .small-post .content h6 {
    margin-bottom: 10px;
    font-weight: 500
}

.rbt-single-widget .small-post .content h6 a {
    text-decoration: none;
    transition: .3s;
    display: block
}

.rbt-single-widget .small-post .content ul.blog-meta {
    margin: 0 -10px;
    display: flex
}

.rbt-single-widget .small-post .content ul.blog-meta li {
    color: #717173;
    font-size: 12px;
    line-height: 24px;
    position: relative;
    margin: 0 10px
}

.rbt-single-widget .small-post .content ul.blog-meta li+li:before {
    position: absolute;
    content: "";
    width: 4px;
    height: 4px;
    background: var(--color-body);
    left: -12px;
    top: 50%;
    transform: translateY(-50%);
    border-radius: 100%
}

.rbt-single-widget .small-post+.small-post {
    margin-top: 20px
}

.rbt-single-widget ul {
    padding-left: 0;
    margin-bottom: -10px;
    list-style: none;
    padding-right: 0
}

.rbt-single-widget ul ul {
    margin-bottom: 0
}

.rbt-single-widget ul li {
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 16px;
    line-height: 28px;
    color: #717173
}

.rbt-single-widget ul li a {
    transition: all .3s ease 0s;
    text-decoration: none;
    color: #1f1f25;
    display: initial
}

.rbt-single-widget ul li a:hover {
    color: var(--color-primary)
}

.rbt-single-widget.widget_archive .screen-reader-text,.rbt-single-widget.widget_categories .screen-reader-text {
    display: none
}

.rbt-single-widget.widget_rss ul li a,.rbt-single-widget.widget_recent_comments ul li a {
    text-decoration: none
}

.rbt-single-widget.widget_rss li cite {
    margin-top: 4px;
    font-size: 13px
}

.rbt-single-widget .textwidget img {
    margin: 10px 0
}

.rbt-single-widget.category ul.category-list li a {
    display: block;
    padding: 10px 0;
    padding-right: 20px;
    font-size: 18px;
    line-height: 28px;
    border-bottom: 1px solid var(--color-border);
    text-decoration: none;
    color: #717173;
    transition: .3s;
    position: relative
}

.rbt-single-widget.category ul.category-list li a:after {
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 4.5px 0 4.5px 6px;
    border-color: transparent transparent transparent #1f1f25;
    position: absolute;
    right: 0;
    content: "";
    top: 50%;
    transform: translateY(-50%)
}

.rbt-single-widget.category ul.category-list li:hover a {
    color: var(--color-primary)
}

.rbt-single-widget.category ul.category-list li:first-child a {
    padding-top: 0
}

.rbt-single-widget.share {
    background: #7a19ff;
    padding: 17px 20px
}

.rbt-single-widget.share span {
    font-size: 22px;
    line-height: 26px;
    font-weight: 700;
    color: #fff;
    display: inline-block
}

.rbt-single-widget.share ul.social-list li {
    margin-left: 20px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rbt-single-widget.share ul.social-list li {
        margin-left:10px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rbt-single-widget.share ul.social-list li {
        margin-left:10px
    }
}

@media only screen and (max-width: 767px) {
    .rbt-single-widget.share ul.social-list li {
        margin-left:10px
    }
}

.rbt-single-widget.share ul.social-list li a {
    font-size: 16px;
    line-height: 28px;
    color: #fff
}

.rbt-single-widget.widget_recent_comments ul li,.rbt-single-widget.widget_recent_entries ul li,.rbt-single-widget.widget_archive ul li,.rbt-single-widget.widget_categories ul li,.rbt-single-widget.widget_meta ul li,.rbt-single-widget.widget_pages ul li,.rbt-single-widget.widget_nav_menu ul li {
    position: relative;
    padding-left: 30px;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-top: 0;
    margin-bottom: 0
}

.rbt-single-widget.widget_recent_comments ul li:first-child,.rbt-single-widget.widget_recent_entries ul li:first-child,.rbt-single-widget.widget_archive ul li:first-child,.rbt-single-widget.widget_categories ul li:first-child,.rbt-single-widget.widget_meta ul li:first-child,.rbt-single-widget.widget_pages ul li:first-child,.rbt-single-widget.widget_nav_menu ul li:first-child {
    margin-top: 10px
}

.rbt-single-widget.widget_recent_comments ul li:before,.rbt-single-widget.widget_recent_entries ul li:before,.rbt-single-widget.widget_archive ul li:before,.rbt-single-widget.widget_categories ul li:before,.rbt-single-widget.widget_meta ul li:before,.rbt-single-widget.widget_pages ul li:before,.rbt-single-widget.widget_nav_menu ul li:before {
    position: absolute;
    content: "\e991";
    font-family: "feather";
    left: 0;
    top: 16px;
    font-size: 18px;
    opacity: .3;
    color: var(--color-primary)
}

.rbt-single-widget.widget_recent_comments ul li:first-child,.rbt-single-widget.widget_recent_entries ul li:first-child,.rbt-single-widget.widget_archive ul li:first-child,.rbt-single-widget.widget_categories ul li:first-child,.rbt-single-widget.widget_meta ul li:first-child,.rbt-single-widget.widget_pages ul li:first-child,.rbt-single-widget.widget_nav_menu ul li:first-child {
    padding-top: 0
}

.rbt-single-widget.widget_recent_comments ul li:first-child:before,.rbt-single-widget.widget_recent_entries ul li:first-child:before,.rbt-single-widget.widget_archive ul li:first-child:before,.rbt-single-widget.widget_categories ul li:first-child:before,.rbt-single-widget.widget_meta ul li:first-child:before,.rbt-single-widget.widget_pages ul li:first-child:before,.rbt-single-widget.widget_nav_menu ul li:first-child:before {
    top: 1px
}

.rbt-single-widget.widget_recent_comments ul li:last-child,.rbt-single-widget.widget_recent_entries ul li:last-child,.rbt-single-widget.widget_archive ul li:last-child,.rbt-single-widget.widget_categories ul li:last-child,.rbt-single-widget.widget_meta ul li:last-child,.rbt-single-widget.widget_pages ul li:last-child,.rbt-single-widget.widget_nav_menu ul li:last-child {
    padding-bottom: 0;
    margin-bottom: 0
}

.rbt-single-widget.widget_recent_comments ul li+li,.rbt-single-widget.widget_recent_entries ul li+li,.rbt-single-widget.widget_archive ul li+li,.rbt-single-widget.widget_categories ul li+li,.rbt-single-widget.widget_meta ul li+li,.rbt-single-widget.widget_pages ul li+li,.rbt-single-widget.widget_nav_menu ul li+li {
    border-top: 1px solid var(--color-border)
}

.rbt-single-widget.widget_recent_comments>ul>li,.rbt-single-widget.widget_recent_entries>ul>li,.rbt-single-widget.widget_archive>ul>li,.rbt-single-widget.widget_categories>ul>li,.rbt-single-widget.widget_meta>ul>li,.rbt-single-widget.widget_pages>ul>li {
    margin-top: 0;
    margin-bottom: 0
}

.rbt-single-widget.widget_recent_comments>ul>li:first-child,.rbt-single-widget.widget_recent_entries>ul>li:first-child,.rbt-single-widget.widget_archive>ul>li:first-child,.rbt-single-widget.widget_categories>ul>li:first-child,.rbt-single-widget.widget_meta>ul>li:first-child,.rbt-single-widget.widget_pages>ul>li:first-child {
    margin-top: 0
}

.rbt-single-widget.widget_recent_comments>ul>li:last-child,.rbt-single-widget.widget_recent_entries>ul>li:last-child,.rbt-single-widget.widget_archive>ul>li:last-child,.rbt-single-widget.widget_categories>ul>li:last-child,.rbt-single-widget.widget_meta>ul>li:last-child,.rbt-single-widget.widget_pages>ul>li:last-child {
    margin-bottom: 10px
}

.rbt-single-widget.widget_recent_entries ul li:before {
    content: "\e964";
    font-family: "feather"
}

.rbt-single-widget.widget_archive ul li:before,.rbt-single-widget.widget_categories ul li:before {
    content: "\e968";
    font-family: "feather"
}

.rbt-single-widget.widget_meta ul li,.rbt-single-widget.widget_pages ul li,.rbt-single-widget.widget_nav_menu ul li {
    padding-left: 23px
}

.rbt-single-widget.widget_meta ul li:before,.rbt-single-widget.widget_pages ul li:before,.rbt-single-widget.widget_nav_menu ul li:before {
    content: "\e930";
    font-family: "feather"
}

.rbt-single-widget.widget_meta ul li:first-child,.rbt-single-widget.widget_pages ul li:first-child,.rbt-single-widget.widget_nav_menu ul li:first-child {
    top: 0
}

.rbt-single-widget .wp-block-latest-comments li,.rbt-single-widget .wp-block-archives-list li,.rbt-single-widget .wp-block-latest-posts__list li,.rbt-single-widget .wp-block-categories-list li {
    position: relative;
    padding-left: 30px;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-top: 0;
    margin-bottom: 0
}

.rbt-single-widget .wp-block-latest-comments li:first-child,.rbt-single-widget .wp-block-archives-list li:first-child,.rbt-single-widget .wp-block-latest-posts__list li:first-child,.rbt-single-widget .wp-block-categories-list li:first-child {
    margin-top: 10px
}

.rbt-single-widget .wp-block-latest-comments li:before,.rbt-single-widget .wp-block-archives-list li:before,.rbt-single-widget .wp-block-latest-posts__list li:before,.rbt-single-widget .wp-block-categories-list li:before {
    position: absolute;
    content: "\e991";
    font-family: "feather";
    left: 0;
    top: 16px;
    font-size: 18px;
    opacity: .3;
    color: var(--color-primary)
}

.rbt-single-widget .wp-block-latest-comments li:first-child,.rbt-single-widget .wp-block-archives-list li:first-child,.rbt-single-widget .wp-block-latest-posts__list li:first-child,.rbt-single-widget .wp-block-categories-list li:first-child {
    padding-top: 0
}

.rbt-single-widget .wp-block-latest-comments li:first-child:before,.rbt-single-widget .wp-block-archives-list li:first-child:before,.rbt-single-widget .wp-block-latest-posts__list li:first-child:before,.rbt-single-widget .wp-block-categories-list li:first-child:before {
    top: 1px
}

.rbt-single-widget .wp-block-latest-comments li:last-child,.rbt-single-widget .wp-block-archives-list li:last-child,.rbt-single-widget .wp-block-latest-posts__list li:last-child,.rbt-single-widget .wp-block-categories-list li:last-child {
    padding-bottom: 0;
    margin-bottom: 0
}

.rbt-single-widget .wp-block-latest-comments li+li,.rbt-single-widget .wp-block-archives-list li+li,.rbt-single-widget .wp-block-latest-posts__list li+li,.rbt-single-widget .wp-block-categories-list li+li {
    border-top: 1px solid var(--color-border)
}

.rbt-single-widget .wp-block-latest-comments>li,.rbt-single-widget .wp-block-archives-list>li,.rbt-single-widget .wp-block-latest-posts__list>li,.rbt-single-widget .wp-block-categories-list>li {
    margin-top: 0;
    margin-bottom: 0
}

.rbt-single-widget .wp-block-latest-comments>li:last-child,.rbt-single-widget .wp-block-archives-list>li:last-child,.rbt-single-widget .wp-block-latest-posts__list>li:last-child,.rbt-single-widget .wp-block-categories-list>li:last-child {
    margin-bottom: 10px
}

.rbt-single-widget .wp-block-archives-list li:before,.rbt-single-widget .wp-block-latest-posts__list li:before,.rbt-single-widget .wp-block-categories-list li:before {
    content: "\e968";
    font-family: "feather"
}

.blog-search,.wp-block-search__inside-wrapper {
    position: relative
}

.blog-search input,.wp-block-search__inside-wrapper input {
    height: 60px;
    padding: 0 20px;
    color: var(--color-body);
    padding-right: 80px
}

.blog-search .search-button,.blog-search .wp-block-search__button,.wp-block-search__inside-wrapper .search-button,.wp-block-search__inside-wrapper .wp-block-search__button {
    position: absolute;
    right: 6px;
    top: 50%;
    transform: translateY(-50%);
    border: 0 none;
    background: var(--color-primary-light);
    height: 47px;
    padding: 0 20px;
    border-radius: 3px;
    text-align: center
}

.blog-search .search-button i,.blog-search .wp-block-search__button i,.wp-block-search__inside-wrapper .search-button i,.wp-block-search__inside-wrapper .wp-block-search__button i {
    color: var(--color-primary);
    font-weight: 400
}

.blog-search .search-button:hover,.blog-search .wp-block-search__button:hover,.wp-block-search__inside-wrapper .search-button:hover,.wp-block-search__inside-wrapper .wp-block-search__button:hover {
    transform: translateY(-50%)
}

.tagcloud,.wp-block-tag-cloud {
    margin: -3px
}

.tagcloud a,.wp-block-tag-cloud a {
    background: 0 0;
    display: inline-block;
    height: 40px;
    color: #717173;
    font-size: 16px !important;
    line-height: 38px;
    text-decoration: none;
    margin: 3px;
    border: 1px solid var(--color-border);
    padding: 0 20px;
    border-radius: 3px
}

.tagcloud a:hover,.wp-block-tag-cloud a:hover {
    background: var(--color-primary);
    color: #fff;
    border-color: var(--color-primary)
}

.widget_calendar caption {
    caption-side: top;
    margin: 0;
    font-size: 14px;
    line-height: 24px;
    padding: 0;
    margin-bottom: 10px
}

.widget_calendar #prev {
    text-align: left
}

.widget_calendar #prev a {
    text-decoration: none;
    color: #717173
}

table,.wp-calendar-table {
    font-size: 14px;
    line-height: 24px
}

table thead th,.wp-calendar-table thead th {
    background: 0 0
}

table th,table td,.wp-calendar-table th,.wp-calendar-table td {
    border: 1px solid var(--color-border);
    padding: 7px;
    text-align: center
}

table th#today,table td#today,.wp-calendar-table th#today,.wp-calendar-table td#today {
    background: var(--color-primary);
    color: #fff
}

table th#today a,table td#today a,.wp-calendar-table th#today a,.wp-calendar-table td#today a {
    color: #fff
}

.wp-block-calendar table thead th {
    background: #e9e9e9
}

.wp-calendar-nav span,.wp-calendar-nav a {
    font-size: 16px;
    line-height: 24px;
    display: inline-block
}

.widget_rss ul li {
    position: relative;
    padding-left: 0;
    padding-top: 15px;
    padding-bottom: 15px
}

.widget_rss ul li:first-child {
    margin-top: 0
}

.widget_rss ul li:last-child {
    margin-bottom: 10px
}

.widget_rss ul li+li {
    border-top: 1px solid var(--color-border)
}

.widget_rss ul li:first-child {
    margin-top: 10px
}

.widget_rss ul li a.rsswidget {
    display: block
}

.widget_rss ul li .cite {
    margin-top: 5px
}

.widget_rss ul li .rss-date {
    font-size: 14px
}

.rn-finding-us-area .inner {
    position: relative;
    padding-left: 240px;
    padding-top: 110px;
    padding-bottom: 110px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rn-finding-us-area .inner {
        padding-left:0;
        padding-top: 0;
        padding-bottom: 0;
        display: flex;
        flex-direction: column-reverse
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-finding-us-area .inner {
        padding-left:0;
        padding-top: 0;
        padding-bottom: 0;
        display: flex;
        flex-direction: column-reverse
    }
}

@media only screen and (max-width: 767px) {
    .rn-finding-us-area .inner {
        padding-left:0;
        padding-top: 0;
        padding-bottom: 0;
        display: flex;
        flex-direction: column-reverse
    }
}

.rn-finding-us-area .inner .content-wrapper .content {
    background: #272527;
    padding: 120px 100px;
    position: relative;
    z-index: 2;
    width: 800px;
    border-radius: 10px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rn-finding-us-area .inner .content-wrapper .content {
        padding:60px 50px;
        width: 100%;
        border-radius: 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-finding-us-area .inner .content-wrapper .content {
        padding:60px 50px;
        width: 100%;
        border-radius: 0
    }
}

@media only screen and (max-width: 767px) {
    .rn-finding-us-area .inner .content-wrapper .content {
        padding:30px;
        width: 100%;
        border-radius: 0
    }
}

.rn-finding-us-area .inner .content-wrapper .content h4 {
    color: #fff;
    font-size: 36px;
    font-weight: 500;
    margin-bottom: 20px
}

@media only screen and (max-width: 767px) {
    .rn-finding-us-area .inner .content-wrapper .content h4 {
        font-size:26px;
        margin-bottom: 12px
    }
}

.rn-finding-us-area .inner .content-wrapper .content p {
    font-size: 18px;
    color: #fff;
    font-weight: 300;
    margin-bottom: 41px;
    padding-right: 10%
}

@media only screen and (max-width: 767px) {
    .rn-finding-us-area .inner .content-wrapper .content p {
        margin-bottom:24px;
        padding-right: 0
    }
}

.rn-finding-us-area .inner .thumbnail {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rn-finding-us-area .inner .thumbnail {
        position:static;
        height: 100%
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-finding-us-area .inner .thumbnail {
        position:static;
        height: 100%
    }
}

@media only screen and (max-width: 767px) {
    .rn-finding-us-area .inner .thumbnail {
        position:static;
        height: 100%
    }
}

.rn-finding-us-area .inner .thumbnail img {
    border-radius: 10px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rn-finding-us-area .inner .thumbnail img {
        border-radius:0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rn-finding-us-area .inner .thumbnail img {
        border-radius:0
    }
}

@media only screen and (max-width: 767px) {
    .rn-finding-us-area .inner .thumbnail img {
        border-radius:0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .about-inner {
        padding-top:30px
    }
}

@media only screen and (max-width: 767px) {
    .about-inner {
        padding-top:30px
    }
}

.about-inner .section-title h2.title {
    margin-bottom: 8px
}

.about-inner .section-title p {
    font-weight: 300;
    color: #717173;
    padding: 0
}

.about-inner .section-title p a {
    color: #1d1d24
}

.about-inner .section-title p a:hover {
    color: var(--color-primary)
}

.about-inner .section-title p.description {
    font-weight: 300;
    color: #717173;
    padding: 0
}

.about-inner .section-title p.description a {
    color: #1d1d24
}

.about-inner .section-title p.description a:hover {
    color: var(--color-primary)
}

.about-wrapper .thumbnail {
    position: relative;
    z-index: 2
}

.about-wrapper .thumbnail img {
    border-radius: 8px;
    box-shadow: 0 25px 65px rgba(0,0,0,.1)
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .about-wrapper .thumbnail img {
        width:100%
    }
}

@media only screen and (max-width: 767px) {
    .about-wrapper .thumbnail img {
        width:100%
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .about-position-top {
        padding-top:120px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .about-position-top {
        padding-top:80px
    }
}

@media only screen and (max-width: 767px) {
    .about-position-top {
        padding-top:60px
    }
}

.about-position-top .thumbnail {
    margin-top: -130px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .about-position-top .thumbnail {
        margin-top:0
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .about-position-top .thumbnail {
        margin-top:-89px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .about-position-top .thumbnail {
        margin-top:0
    }
}

@media only screen and (max-width: 767px) {
    .about-position-top .thumbnail {
        margin-top:0
    }
}

.about-us-list {
    margin-top: 15px
}

.about-us-list .title {
    margin-bottom: 20px
}

@media only screen and (max-width: 767px) {
    .about-us-list .title {
        margin-bottom:8px
    }
}

.about-us-list p {
    font-weight: 300;
    color: #717173;
    font-size: 18px;
    line-height: 30px
}

@media only screen and (max-width: 767px) {
    .about-us-list p {
        font-size:16px;
        line-height: 1.7
    }
}

.rn-about-area img {
    border-radius: 5px;
    box-shadow: 0 25px 65px rgba(0,0,0,.1)
}

.rn-about-area .thumbnail img {
    border-radius: 5px;
    box-shadow: 0 25px 65px rgba(0,0,0,.1)
}

.rn-about-area .section-title.text-left p {
    padding: 0
}

.experience-wrap {
    display: flex;
    justify-content: flex-start;
    border-top: 1px solid rgba(0,0,0,.07)
}

.experience-wrap .experience+.experience {
    margin-left: 80px
}

.experience-wrap .experience {
    padding-top: 30px;
    position: relative
}

.experience-wrap .experience .title {
    font-size: 60px;
    display: flex;
    align-items: center
}

.experience-wrap .experience .title span {
    font-size: 75%
}

.experience-wrap .experience>span {
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: block;
    margin-bottom: 10px
}

.experience-wrap .experience:before {
    content: "";
    width: 30px;
    height: 1px;
    background: var(--color-primary);
    left: 0;
    top: -1px;
    position: absolute
}

.about-with-experience-area .about-inner.inner {
    padding-top: 45px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .experience-wrap .experience .title {
        font-size:37px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .experience-wrap .experience .title {
        font-size:37px
    }
}

@media only screen and (max-width: 767px) {
    .experience-wrap .experience .title {
        font-size:37px
    }

    .experience-wrap {
        flex-wrap: wrap
    }

    .experience-wrap .experience+.experience {
        margin-left: 40px
    }

    .experience-wrap {
        margin-top: 28px !important
    }
}

@media only screen and (max-width: 575px) {
    .experience-wrap {
        margin-top:28px !important;
        border: 0 none;
        justify-content: flex-start
    }

    .experience-wrap .experience {
        padding-top: 0;
        flex-basis: 50%
    }

    .experience-wrap .experience>span {
        letter-spacing: 0;
        margin-bottom: 2px;
        line-height: 22px
    }

    .experience-wrap .experience .title {
        font-size: 30px
    }

    .experience-wrap .experience+.experience {
        margin-left: 0
    }

    .experience-wrap .experience:before {
        display: none
    }
}

.portfolio-thumb-inner .thumb {
    position: relative
}

.portfolio-details .inner {
    padding: 0 210px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-details .inner {
        padding:0 100px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-details .inner {
        padding:0 50px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-details .inner {
        padding:0 30px
    }
}

@media only screen and (max-width: 575px) {
    .portfolio-details .inner {
        padding:0
    }
}

.portfolio-details .section-title h2 {
    line-height: 27px;
    display: block;
    margin-bottom: 0;
    padding-bottom: 43px;
    border-bottom: 1px solid #e1e1e1
}

@media only screen and (max-width: 767px) {
    .portfolio-details .section-title h2 {
        line-height:23px;
        padding-bottom: 27px;
        font-size: 32px
    }
}

.portfolio-details .section-title p {
    font-size: 18px;
    line-height: 30px;
    color: #717173;
    margin-bottom: 30px;
    padding-right: 0;
    margin-top: 28px
}

.portfolio-details .section-title p strong {
    font-weight: 400;
    color: #1f1f25;
    font-size: 23px;
    line-height: 44px
}

@media only screen and (max-width: 767px) {
    .portfolio-details .section-title p strong {
        font-size:16px;
        line-height: 30px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-details .section-title p {
        margin-bottom:22px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-details .section-title p {
        margin-bottom:8px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-details .section-title p {
        margin-bottom:8px;
        font-size: 16px;
        line-height: 30px
    }
}

.portfolio-details .section-title p.subtitle {
    color: #1f1f25;
    font-size: 23px;
    line-height: 44px;
    margin-top: 28px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .portfolio-details .section-title p.subtitle {
        font-size:20px;
        line-height: 38px;
        margin-top: 24px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .portfolio-details .section-title p.subtitle {
        font-size:18px;
        line-height: 38px;
        margin-top: 24px
    }
}

@media only screen and (max-width: 767px) {
    .portfolio-details .section-title p.subtitle {
        font-size:18px;
        line-height: 38px;
        margin-top: 24px
    }
}

.portfolio-details .portfolio-view-list {
    margin: 0 -40px
}

@media only screen and (max-width: 767px) {
    .portfolio-details .portfolio-view-list {
        margin:0 -20px
    }
}

.portfolio-details .portfolio-view-list .port-view {
    margin: 0 40px
}

@media only screen and (max-width: 767px) {
    .portfolio-details .portfolio-view-list .port-view {
        padding:0 20px;
        width: 50%;
        margin: 0
    }
}

.portfolio-details .portfolio-view-list .port-view span {
    font-size: 16px;
    color: #717173;
    display: block;
    margin-bottom: 10px;
    font-weight: 500
}

@media only screen and (max-width: 767px) {
    .portfolio-details .portfolio-view-list .port-view span {
        font-size:15px;
        margin-bottom: 5px
    }
}

.portfolio-details .portfolio-view-list .port-view h4 {
    font-size: 22px;
    font-weight: 500
}

@media only screen and (max-width: 767px) {
    .portfolio-details .portfolio-view-list .port-view h4 {
        font-size:18px
    }
}

.portfolio-details ul.social-share li a {
    border: 2px solid #c6c9d8;
    color: #c6c9d8
}

.portfolio-details ul.social-share li a:hover {
    color: #fff;
    border-color: var(--color-primary)
}

.portfolio-details .thumbnail img {
    border-radius: 6px !important
}

.related-work .thumb a img {
    width: 100%
}

.related-work .inner {
    padding-top: 25px
}

.related-work .inner h4 {
    font-size: 24px;
    line-height: 39px;
    margin-bottom: 7px
}

.related-work .inner h4 a {
    color: #1f1f25
}

.related-work .inner h4:hover a {
    color: var(--color-primary)
}

.related-work .inner span.category {
    color: #717173;
    font-size: 16px;
    font-weight: 500
}

.service-details-inner .sercice-details-content .thumb .video-popup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    border: 0 none
}

.service-details-inner .sercice-details-content .details p {
    color: #717173;
    font-size: 18px;
    line-height: 30px;
    margin-bottom: 0
}

.service-details-inner .sercice-details-content .details p+p {
    margin-top: 30px
}

.service-details-inner .sercice-details-content .details h4.title {
    font-size: 36px;
    line-height: 30px;
    font-weight: 500;
    margin-top: 40px;
    margin-bottom: 27px
}

@media only screen and (max-width: 767px) {
    .service-details-inner .sercice-details-content .details h4.title {
        font-size:26px;
        line-height: 38px;
        margin-top: 26px;
        margin-bottom: 18px
    }
}

.particles-js {
    position: absolute;
    width: 100%;
    height: 100%
}

.count-particles {
    background: #002;
    position: absolute;
    top: 48px;
    left: 0;
    width: 80px;
    color: #13e8e9;
    font-size: .8em;
    text-align: left;
    text-indent: 4px;
    line-height: 14px;
    padding-bottom: 2px;
    font-family: Helvetica,Arial,sans-serif;
    font-weight: 700
}

.js-count-particles {
    font-size: 1.1em
}

#stats,.count-particles {
    -webkit-user-select: none
}

#stats {
    border-radius: 3px 3px 0 0;
    overflow: hidden
}

.count-particles {
    border-radius: 0 0 3px 3px
}

.active-dark {
    background: #191919
}

.active-dark [data-overlay="6"]:before,.active-dark [data-black-overlay="6"]:before,.active-dark [data-white-overlay="6"]:before {
    display: none
}

.active-dark [data-overlay]:before,.active-dark [data-black-overlay]:before,.active-dark [data-white-overlay]:before {
    display: none
}

.active-dark .service-white .service__style--1 .content h4.title {
    color: #fff
}

.active-dark .bg_image--3,.active-dark .bg_image--1,.active-dark .rn-testimonial-content .inner p:before,.active-dark .rn-testimonial-content .inner p:after,.active-dark .footer-right {
    background-image: inherit
}

.active-dark .bg_color--1,.active-dark .brand-separation {
    background: #191919
}

.active-dark .bg_color--5,.active-dark .footer-right {
    background: #101010
}

.active-dark .header-area.rn-scroll-nav.is-affixed .header-wrapper {
    background: #101010
}

.active-dark ul.brand-style-2 img {
    filter: invert(1)
}

.active-dark h1,.active-dark h2,.active-dark h3,.active-dark h4,.active-dark h5,.active-dark h6,.active-dark .h1,.active-dark .h2,.active-dark .h3,.active-dark .h4,.active-dark .h5,.active-dark .h6 {
    color: #fff
}

.active-dark a.btn-transparent {
    color: #fff
}

.active-dark .section-title p,.active-dark .about-us-list p,.active-dark .about-inner .section-title p.description,.active-dark .service.service__style--2 .content p,.active-dark .counterup_style--1 p.description,.active-dark .rn-testimonial-content .author-info h6,.active-dark .slide.slider-style-3 .inner>span,.active-dark .single-tab-content ul li a,.active-dark .single-tab-content ul li,.active-dark .single-service.service__style--2 .content p,.active-dark .single-service.service__style--4 .content p {
    color: rgba(198,201,216,.75)
}

.active-dark .service.service__style--2:hover .content h3.title,.active-dark .service.service__style--2:hover .content p,.active-dark .rn-testimonial-content .author-info h6 span,.active-dark .rn-testimonial-content .inner p,.active-dark .section-title p a,.active-dark .slide.slider-style-3 .inner h1.title,.active-dark .color-black .mainmenunav ul.mainmenu>li>a,.active-dark ul.social-share.social-style--2.color-black li a,.active-dark .header-area.color-black a.rn-btn,.active-dark ul.tab-style--1 li,.active-dark ul.nav.tab-style--1 li a,.active-dark .single-service.service__style--2:hover .content p,.active-dark .single-service.service__style--4:hover .content p,.active-dark .header-area.header-style-two.header--transparent .mainmenunav ul.mainmenu>li>a,.active-dark .header-not-transparent .mainmenunav ul.mainmenu>li>a {
    color: #fff
}

.active-dark .header-area.header-style-two.header--transparent .mainmenunav ul.mainmenu>li>a:hover {
    color: var(--color-primary)
}

.active-dark ul.tab-style--1 li a:before {
    background: rgba(198,201,216,.75)
}

.active-dark ul.tab-style--1 li.react-tabs__tab--selected,.active-dark ul.nav.tab-style--1 li a.active {
    color: var(--color-primary)
}

.active-dark ul.tab-style--1 li.react-tabs__tab--selected:before {
    background: currentColor
}

.active-dark .portfolio-sacousel-inner .slick-dots li button:after,.active-dark .rn-slick-dot .slick-dots li button:after {
    background: #fff;
    box-shadow: inset 0 0 0 5px #fff
}

.active-dark .portfolio-sacousel-inner .slick-dots li.slick-active button:after,.active-dark .rn-slick-dot .slick-dots li.slick-active button:after {
    -webkit-box-shadow: inset 0 0 0 1px var(--color-primary);
    box-shadow: inset 0 0 0 1px var(--color-primary);
    background-color: transparent;
    background-color: transparent !important
}

.active-dark .creative-service-wrapper .row.creative-service .service.service__style--2,.active-dark .single-service.service__style--2.bg-color-gray a {
    background: #191919
}

.active-dark .contact-form--1 input,.active-dark .contact-form--1 textarea,.active-dark .header-area.color-black a.rn-btn {
    border: 2px solid rgba(255,255,255,.2)
}

.active-dark .header-area.color-black a.rn-btn:hover {
    border-color: var(--color-primary)
}

.active-dark .header-area.header--fixed.sticky {
    background: #191919
}

.active-dark .header-area.header--fixed.sticky .header-wrapper a.rn-btn {
    color: #fff;
    border-color: #fff
}

.active-dark .header-area.header--fixed.sticky .header-wrapper a.rn-btn:hover {
    color: #fff;
    border-color: var(--color-primary)
}

.active-dark .header-area.sticky .humberger-menu span svg {
    color: #fff
}

.active-dark .header-area.header-style-two.header--transparent .header-wrapper a.rn-btn {
    border: 2px solid rgba(255,255,255,.2);
    color: #fff
}

.active-dark .header-area .header-wrapper .close-menu {
    background: #000
}

.active-dark .bg_image--25 {
    background-color: #101010;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover
}

.active-dark .backto-top>div {
    background-color: #000
}

.active-dark .footer-style-2 {
    background: #101010
}

.active-dark .backto-top svg,.active-dark .about-inner .section-title p.description a {
    color: #fff
}

.active-dark .contact-form--1 input,.active-dark .contact-form--1 textarea {
    color: rgba(198,201,216,.75)
}

.active-dark .personal-portfolio-slider:before {
    display: none
}

.active-dark .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a:after {
    border-color: #fff transparent transparent
}

.active-dark .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a.open:after {
    border-color: transparent transparent var(--color-primary) transparent
}

.active-dark ul.nav.tab-style--1 li a:before {
    background: rgba(198,201,216,.75)
}

.active-dark ul.nav.tab-style--1 li a.active:before {
    background: currentColor
}

.active-dark .header-area.header--sticky.sticky {
    background: #000
}

.active-dark .single-tab-content ul li a:hover {
    color: var(--color-primary)
}

.active-dark .header-area.header--sticky.sticky .mainmenunav ul.mainmenu>li>a {
    color: #c6c9d8
}

.active-dark .header-area.header--sticky.sticky .mainmenunav ul.mainmenu>li>a:hover {
    color: var(--color-primary)
}

.active-dark .header-area.header--sticky.sticky .header-wrapper a.rn-btn {
    color: #c6c9d8;
    border-color: #c6c9d8
}

.active-dark .header-area.header--sticky.sticky .header-wrapper a.rn-btn:hover {
    border-color: var(--color-primary);
    color: #fff
}

.active-dark .footer-default .footer-right {
    background: #101010
}

.active-dark .thumbnail img {
    box-shadow: none !important
}

.active-dark .header-area .mainmenunav ul.mainmenu>li>a {
    color: #c6c9d8
}

.active-dark .header-area .mainmenunav ul.mainmenu>li>a:hover {
    color: var(--color-primary)
}

.active-dark .header-area .header-wrapper a.rn-btn {
    border: 2px solid #b1b4c1;
    color: #c6c9d8
}

.active-dark .header-not-transparent .humberger-menu span.text-white {
    color: #c6c9d8 !important
}

.active-dark .trydo-active-onepage-navigation .header-area .mainmenu>li>.nav-link.active,.active-dark .trydo-active-onepage-navigation .header-area .mainmenu>li>.nav-link:hover {
    color: var(--color-primary) !important
}

.active-dark .single-service.service__style--5 {
    background: #191919
}

.active-dark .single-service.service__style--5 .content p {
    color: rgba(198,201,216,.75)
}

.active-dark .single-service.service__style--5:hover .content p {
    color: #fff
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .active-dark .header-style-two .humberger-menu span.text-white {
        color:#c6c9d8 !important
    }

    .active-dark .header-area .header-wrapper .mainmenunav ul.mainmenu {
        background: #101010
    }

    .active-dark .header-area .header-wrapper.menu-open .close-menu span {
        color: #c6c9d8 !important
    }

    .active-dark .header-area.header--fixed.sticky .humberger-menu span.text-white {
        color: #c6c9d8 !important
    }

    .active-dark .header-area .header-wrapper .mainmenunav ul.mainmenu li a {
        color: rgba(198,201,216,.75) !important
    }
}

@media only screen and (max-width: 767px) {
    .active-dark .header-style-two .humberger-menu span.text-white {
        color:#c6c9d8 !important
    }

    .active-dark .header-area .header-wrapper .mainmenunav ul.mainmenu {
        background: #101010
    }

    .active-dark .header-area .header-wrapper.menu-open .close-menu span {
        color: #c6c9d8 !important
    }

    .active-dark .header-area.header--fixed.sticky .humberger-menu span.text-white {
        color: #c6c9d8 !important
    }

    .active-dark .service.service__style--2 .content p {
        color: #fff
    }

    .active-dark .header-area .header-wrapper .mainmenunav ul.mainmenu li a {
        color: rgba(198,201,216,.75) !important
    }
}

@media only screen and (max-width: 767px) {
    .active-dark .single-service.service__style--2 .content p,.active-dark .single-service.service__style--4 .content p {
        color:#fff
    }
}

@media only screen and (max-width: 575px) {
    .active-dark .single-service.service__style--5 .content p {
        color:#fff
    }
}

.root-header-transparent .active-dark .header-area.header-style-two ul.social-share.social-style--2.color-black li a,.root-header-transparent .active-dark .header-area.header-style-two.sticky ul.social-share.social-style--2.color-black li a {
    color: #fff
}

.root-header-transparent .active-dark .header-area.header-style-two ul.social-share.social-style--2.color-black li a:hover,.root-header-transparent .active-dark .header-area.header-style-two.sticky ul.social-share.social-style--2.color-black li a:hover {
    color: var(--color-primary)
}

.root-header-transparent .active-dark .header-area.header-style-two.header--transparent.sticky .header-wrapper a.rn-btn {
    border: 2px solid rgba(255,255,255,.2);
    color: #fff
}

.main-wrapper {
    position: relative;
    background: #fff
}

.prv-header-area {
    padding: 18px 85px;
    padding-top: 18px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .fullscreen.empty-div {
        display:none
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .fullscreen.empty-div {
        display:none
    }
}

.with-particles {
    position: relative;
    z-index: 3
}

.with-particles .frame-layout__particles {
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0
}

@media only screen and (max-width: 575px) {
    .with-particles .frame-layout__particles {
        display:none
    }
}

.with-particles .inner {
    position: relative;
    z-index: 3
}

.gradient-overlay {
    position: relative
}

.gradient-overlay:before {
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    position: absolute;
    content: "";
    background: -moz-linear-gradient(-45deg,rgba(0,0,0,0) 7%,rgba(0,0,0,0) 50%,rgba(0,0,0,.5) 100%);
    background: -webkit-linear-gradient(-45deg,rgba(0,0,0,0) 7%,rgba(0,0,0,0) 50%,rgba(0,0,0,.5) 100%);
    background: linear-gradient(135deg,rgba(0,0,0,0) 7%,rgba(0,0,0,0) 50%,rgba(0,0,0,.5) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00000000",endColorstr="#80000000",GradientType=1)
}

.prv-banner-wrapper {
    min-height: 100vh;
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    display: flex;
    align-items: center;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0
}

@media only screen and (max-width: 767px) {
    .prv-banner-wrapper {
        min-height:auto;
        position: static;
        padding: 60px 0;
        background-image: none !important;
        background-color: #f6f6f6
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .prv-banner-wrapper {
        min-height:auto;
        position: static;
        padding: 80px 0;
        background-image: none !important;
        background-color: #f6f6f6
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .prv-banner-wrapper {
        min-height:auto;
        position: static;
        padding: 80px 0;
        background-image: none !important;
        background-color: #f6f6f6
    }
}

.prv-banner-wrapper .inner {
    padding: 35px;
    position: relative;
    z-index: 1
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .prv-banner-wrapper .inner {
        padding:35px 0
    }
}

@media only screen and (max-width: 767px) {
    .prv-banner-wrapper .inner {
        padding:0
    }
}

.prv-banner-wrapper .inner .logo img {
    max-height: 70px
}

.prv-banner-wrapper .inner .title {
    font-size: 23px;
    color: #515462;
    line-height: 42px;
    margin: 30px 0 50px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .prv-banner-wrapper .inner .title {
        font-size:20px;
        line-height: 36px;
        margin: 24px 0 40px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .prv-banner-wrapper .inner .title {
        margin:20px 0
    }
}

@media only screen and (max-width: 767px) {
    .prv-banner-wrapper .inner .title {
        margin:20px 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .prv-banner-wrapper .inner .title {
        margin:20px 0
    }
}

.prv-banner-wrapper .inner .purshase-btn {
    margin-left: -15px;
    margin-right: -15px
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .prv-banner-wrapper .inner .purshase-btn {
        margin-left:-10px;
        margin-right: -10px
    }
}

@media only screen and (max-width: 767px) {
    .prv-banner-wrapper .inner .purshase-btn {
        margin-left:-5px;
        margin-right: -5px
    }
}

.prv-banner-wrapper .inner .purshase-btn a {
    margin-left: 15px;
    margin-right: 15px
}

@media only screen and (max-width: 767px) {
    .prv-banner-wrapper .inner .purshase-btn a {
        margin-left:5px;
        margin-right: 5px
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .prv-banner-wrapper .inner .purshase-btn a.rn-button-style--2 {
        padding:10px 25px
    }
}

@media only screen and (max-width: 767px) {
    .prv-banner-wrapper .inner .purshase-btn a.rn-button-style--2 {
        padding:9px 12px;
        font-size: 14px
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .prv-banner-wrapper .inner .purshase-btn a {
        margin-left:10px;
        margin-right: 10px
    }
}

@media only screen and (max-width: 479px) {
    .prv-banner-wrapper .inner .purshase-btn a+a {
        margin-top:10px
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .home-demo-area .wrapper {
        padding:0 50px !important
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .home-demo-area .wrapper {
        padding:0 50px !important
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .home-demo-area .wrapper {
        padding:0 30px !important
    }
}

@media only screen and (max-width: 767px) {
    .home-demo-area .wrapper {
        padding:0 30px !important
    }
}

.home-demo-area .section-title.text-white h2 {
    color: #c6c9d8;
    margin-bottom: 9px
}

.home-demo-area .section-title.text-white p {
    color: #c6c9d8;
    opacity: .75;
    font-weight: 300
}

.bg_color--7 .single-demo {
    position: relative
}

.bg_color--7 .single-demo a>span {
    display: block;
    text-align: center;
    padding: 20px 0;
    color: rgba(255,255,255,.7);
    font-size: 20px;
    font-weight: 500;
    transition: .3s ease-in-out;
    letter-spacing: .2px
}

.single-demo {
    padding: 0 30px;
    margin: 45px 0
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .single-demo {
        padding:0 15px;
        margin: 30px 0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .single-demo {
        padding:0 15px;
        margin: 30px 0
    }
}

@media only screen and (max-width: 767px) {
    .single-demo {
        padding:0 15px;
        margin: 20px 0
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .single-demo {
        padding:0 15px
    }
}

.single-demo a {
    display: block;
    position: relative;
    z-index: 2
}

.single-demo a img {
    box-shadow: 3px 4px 20px 0 rgba(0,0,0,.1);
    transition: .7s cubic-bezier(.26,.76,.3,.75);
    width: 100% !important;
    border-radius: 6px
}

.single-demo a .title {
    display: block;
    text-align: left;
    padding: 25px 0 10px;
    color: #1f1f25;
    font-size: 20px;
    font-weight: 500;
    transition: .3s ease-in-out;
    letter-spacing: .2px;
    margin: 0
}

.single-demo a .info {
    display: block;
    padding: 0;
    color: rgba(29,29,36,.75);
    font-size: 14px;
    font-weight: 300;
    transition: .3s ease-in-out;
    line-height: 25px
}

.single-demo a>span.number {
    display: none;
    position: absolute;
    color: #f6f6f6;
    z-index: -1;
    font-size: 81px;
    bottom: -55px;
    line-height: inherit;
    font-weight: 300;
    letter-spacing: 11px
}

.single-demo a:hover img {
    -webkit-transform: translate3d(0,-10px,0);
    transform: translate3d(0,-10px,0);
    box-shadow: 0 50px 80px -10px rgba(0,0,0,.17)
}

.single-demo a .label-new {
    position: absolute;
    top: 5px;
    background: #f81f01;
    background: linear-gradient(145deg,#f81f01 0%,#ee076e 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#f81f01",endColorstr="#ee076e",GradientType=1);
    padding: 9px 14px;
    color: #fff;
    border-radius: 4px;
    font-size: 14px;
    line-height: 1;
    right: 5px;
    text-transform: uppercase;
    letter-spacing: .5px;
    font-weight: 500
}

.pv-feaq-area .accodion-style--1 .accordion__item+.accordion__item {
    margin-top: 20px
}

.pv-feaq-area .accodion-style--1 .accordion__item .accordion__heading .accordion__button {
    font-size: 18px;
    padding: 10px 0
}

.pv-feaq-area .accodion-style--1 .accordion__item .accordion__heading {
    width: 100%
}

.pv-feaq-area .accodion-style--1 .accordion__item .accordion__heading .accordion__button:after {
    width: 100%
}

.pv-feaq-area .accodion-style--1 .accordion__item .accordion__heading .accordion__button:after {
    height: 1px
}

.tablist-inner {
    display: inline-block
}

.pv-tab-button {
    display: flex;
    justify-content: center;
    list-style: none;
    background: var(--color-primary-light);
    min-width: 570px;
    margin: 0 auto;
    border-radius: 6px;
    flex-wrap: wrap;
    padding: 0;
    padding: 0 36px;
    outline: none
}

@media only screen and (max-width: 767px) {
    .pv-tab-button {
        padding:8px 15px;
        margin: 0 15px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .pv-tab-button {
        padding:0 15px
    }
}

@media only screen and (max-width: 767px) {
    .pv-tab-button {
        min-width:auto
    }
}

.pv-tab-button .label {
    position: relative
}

.pv-tab-button .label:after {
    position: absolute;
    top: 0
}

.pv-tab-button li,.pv-tab-button button {
    padding: 0 14px;
    color: #101010;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    border: 0 none
}

@media only screen and (max-width: 575px) {
    .pv-tab-button li,.pv-tab-button button {
        padding:0 11px
    }
}

.pv-tab-button li span,.pv-tab-button button span {
    position: relative;
    display: block;
    padding: 20px 0;
    cursor: pointer
}

@media only screen and (max-width: 575px) {
    .pv-tab-button li span,.pv-tab-button button span {
        padding:11px 0
    }
}

.pv-tab-button li span:after,.pv-tab-button button span:after {
    position: absolute;
    left: 0;
    background: var(--color-primary);
    bottom: 0;
    height: 3px;
    content: "";
    width: 0
}

.pv-tab-button li.is-checked span,.pv-tab-button button.is-checked span {
    color: var(--color-primary)
}

.pv-tab-button li.is-checked span:after,.pv-tab-button button.is-checked span:after {
    width: 100%
}

.prv-footer .inner h2.title {
    color: #1f1f25;
    font-size: 60px;
    font-weight: 500;
    margin-bottom: 65px
}

a.purchase-btn {
    display: inline-block;
    padding: 0 75px;
    height: 70px;
    line-height: 70px;
    border-radius: 43px;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
    transition: .4s ease-in-out;
    color: #fff;
    background: #1f1f25;
    border: 1px solid #1f1f25
}

a.purchase-btn:hover {
    color: #1f1f25;
    border: 1px solid #1f1f25;
    background: 0 0
}

.prv-feature .content h3.title {
    color: #c6c9d8
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .prv-feature .content h3.title {
        margin-bottom:13px;
        font-size: 20px
    }
}

@media only screen and (max-width: 767px) {
    .prv-feature .content h3.title {
        margin-bottom:13px;
        font-size: 20px
    }
}

.prv-feature .content p.subtitle {
    color: #c6c9d8 !important
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .prv-feature .content p.subtitle {
        font-size:16px;
        line-height: 28px
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .prv-feature .content p.subtitle {
        font-size:16px;
        line-height: 26px
    }
}

@media only screen and (max-width: 767px) {
    .prv-feature .content p.subtitle {
        font-size:16px;
        line-height: 28px;
        color: #fff
    }
}

@media only screen and (max-width: 575px) {
    .prv-feature .content p.subtitle {
        color:#fff !important
    }
}

.prv-feature .single-service.service__style--4:hover .content p {
    color: #fff !important
}

.text-white-wrapper a.rn-button-style--2 {
    border: 2px solid #fff;
    color: #fff
}

.product .shop-thumbnail {
    position: relative;
    z-index: 2;
    overflow: hidden
}

.product .shop-thumbnail img {
    border-radius: 4px
}

.product .shop-thumbnail .woocommerce-LoopProduct-link:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    opacity: 0;
    padding: 10px;
    overflow: hidden;
    background: linear-gradient(to bottom,var(--color-primary) 0,#000 100%);
    z-index: 1;
    content: "";
    transition: all .3s cubic-bezier(.645,.045,.355,1);
    border-radius: 4px
}

.product .shop-thumbnail:hover .woocommerce-LoopProduct-link:before {
    overflow: visible;
    opacity: .85;
    top: 0
}

.product .shop-product-info {
    padding-top: 17px;
    padding-bottom: 5px
}

.product .shop-product-info h3 a {
    font-weight: 700;
    color: #1f1f1f;
    font-size: 18px;
    line-height: 1.5em;
    letter-spacing: -.02em;
    transition: .3s
}

.product .shop-product-info h3 a:hover {
    color: var(--color-primary)
}

.product:hover .shop-thumbnail a.button {
    opacity: 1;
    visibility: visible;
    top: 50%
}

.woocommerce ul.products li.product .onsale {
    top: 15px;
    right: 15px;
    left: auto;
    margin: 0
}

.woocommerce span.onsale {
    min-height: auto;
    min-width: auto;
    position: absolute;
    text-align: center;
    line-height: 14px;
    border-radius: 4px;
    background-color: var(--color-heading);
    color: #fff;
    font-size: 13px;
    z-index: 9;
    font-weight: 400;
    display: inline-block;
    padding: 3px 6px
}

span.woocommerce-Price-amount.amount {
    font-size: 20px;
    font-weight: 500;
    color: var(--color-heading)
}

.woocommerce ul.products li.product .price del {
    opacity: .7
}

.woocommerce ul.products li.product .woocommerce-loop-category__title,.woocommerce ul.products li.product .woocommerce-loop-product__title,.woocommerce ul.products li.product h3 {
    padding: 0
}

.woocommerce #respond input#submit.loading:after,.woocommerce a.button.loading:after,.woocommerce button.button.loading:after,.woocommerce input.button.loading:after {
    top: 10px;
    right: 15px
}

.woocommerce .quantity .qty {
    border-radius: 6px
}

.woocommerce div.product div.summary {
    margin-top: 0
}

.woocommerce div.product .woocommerce-tabs ul.tabs li:after {
    display: none
}

.select2-container--default .select2-selection--single {
    background-color: transparent;
    border-radius: 4px !important
}

.woocommerce #review_form #respond textarea {
    background: 0 0
}

.rbt-mini-cart-wrap {
    margin-left: 30px;
    display: block;
    position: relative;
    z-index: 2;
    width: 40px;
    height: 40px;
    border-radius: 100%;
    transition: .4s;
    text-align: center;
    line-height: 40px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .rbt-mini-cart-wrap {
        margin-left:0
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .rbt-mini-cart-wrap {
        margin-left:15px
    }
}

@media only screen and (max-width: 767px) {
    .rbt-mini-cart-wrap {
        margin-left:4px;
        width: auto;
        height: auto;
        line-height: inherit
    }
}

.rbt-mini-cart-wrap .mini-cart {
    color: var(--color-white);
    position: relative;
    top: 3px
}

.rbt-mini-cart-wrap .mini-cart i {
    padding-right: 5px
}

.rbt-mini-cart-wrap .mini-cart .rbt-cart-count {
    position: absolute;
    top: -6px;
    left: auto;
    z-index: 2;
    min-width: 16px;
    height: 16px;
    background: var(--color-primary);
    border-radius: 10px;
    font-size: 12px;
    text-align: center;
    display: inline-block;
    color: #fff;
    padding: 0 4px;
    line-height: 16px;
    right: -6px;
    font-weight: 600
}

.rbt-mini-cart-wrap:before {
    background: rgba(154,160,166,.157);
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    transition: .3s;
    transform: scale(.9);
    opacity: 0;
    z-index: -1;
    border-radius: 100%
}

@media only screen and (max-width: 767px) {
    .rbt-mini-cart-wrap:before {
        display:none
    }
}

.rbt-mini-cart-wrap:hover:before {
    transform: scale(1);
    opacity: 1
}

.rbt-mini-cart-wrap .mini-cart {
    color: var(--color-heading)
}

.header-area.header--transparent .rbt-mini-cart-wrap .mini-cart {
    color: var(--color-white)
}

.header-area.sticky-bg-black.header--sticky.sticky .rbt-mini-cart-wrap .mini-cart {
    color: #c6c9d8
}

.header-area.header--sticky.sticky .rbt-mini-cart-wrap .mini-cart {
    color: #1f1f25
}

.rbt-single-widget.widget_price_filter .price_slider_amount .button {
    border: 2px solid var(--color-primary);
    background: var(--color-primary);
    color: #fff;
    padding: 11px 15px;
    font-size: 15px;
    line-height: 13px;
    border-radius: 6px;
    display: inline-block;
    font-weight: 500;
    transition: .3s;
    letter-spacing: 1px;
    text-transform: uppercase
}

.rbt-single-widget.widget_price_filter .price_slider_amount .button:hover {
    box-shadow: 0 10px 15px 0 rgba(249,0,77,.1);
    background: 0 0;
    color: var(--color-primary);
    transform: translateY(-5px)
}

.rbt-single-widget.widget_price_filter .price_slider_amount .price_label {
    font-size: 15px;
    font-weight: 400
}

.rn-shop-top select {
    background: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/icons/arrow-icon.png) 93% center no-repeat transparent;
    height: 52px
}

.woocommerce .widget_price_filter .ui-slider .ui-slider-range {
    background-color: var(--color-primary)
}

.woocommerce .widget_price_filter .ui-slider-horizontal {
    height: 2px
}

.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
    width: 10px;
    height: 10px;
    background-color: var(--color-primary);
    top: -4px
}

.footer-wrapper {
    position: relative
}

.footer-default .footer-left {
    background: linear-gradient(145deg,#f81f01 0%,#ee076e 100%);
    padding: 120px;
    position: relative;
    z-index: 2;
    margin-right: -15px;
    border-top-right-radius: 6px
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .footer-default .footer-left {
        padding:120px 80px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .footer-default .footer-left {
        padding:60px 70px
    }
}

@media only screen and (max-width: 767px) {
    .footer-default .footer-left {
        padding:60px 30px
    }
}

.footer-default .footer-left:before {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background-image: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/pattern-1.png);
    content: "";
    z-index: 1;
    opacity: .5;
    border-top-right-radius: 6px
}

.footer-default .footer-left .inner {
    z-index: 5;
    position: relative
}

.footer-default .footer-left .inner img {
    position: absolute;
    right: 0;
    top: 50%;
    z-index: -1;
    transform: translateY(-50%);
    max-width: 295px;
    height: auto
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .footer-default .footer-left .inner img {
        right:-37px;
        width: 253px;
        height: 247px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .footer-default .footer-left .inner img {
        right:-37px;
        width: 253px;
        height: 247px
    }
}

@media only screen and (max-width: 767px) {
    .footer-default .footer-left .inner img {
        right:0;
        width: 253px;
        height: 247px
    }
}

.footer-default .footer-left .inner>span {
    color: #fff;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 4px;
    display: block;
    margin-bottom: 9px
}

@media only screen and (max-width: 575px) {
    .footer-default .footer-left .inner>span {
        letter-spacing:1px;
        margin-bottom: 9px
    }
}

.footer-default .footer-left .inner h2 {
    color: #fff;
    font-size: 75px;
    font-weight: 900;
    font-family: "Montserrat",sans-serif;
    line-height: 90px;
    padding-right: 39%
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .footer-default .footer-left .inner h2 {
        font-size:50px;
        line-height: 61px;
        padding-right: 20%
    }
}

@media only screen and (max-width: 767px) {
    .footer-default .footer-left .inner h2 {
        font-size:45px;
        line-height: 51px;
        padding-right: 20%
    }
}

@media only screen and (min-width: 1200px) and (max-width:1599px) {
    .footer-default .footer-left .inner h2 {
        padding-right:30px
    }
}

.footer-default .footer-left .inner a.rn-button-style--2 {
    margin-top: 30px;
    border-color: #fff;
    color: #fff
}

@media only screen and (max-width: 767px) {
    .footer-default .footer-left .inner a.rn-button-style--2 {
        margin-top:10px;
        padding: 10px 23px
    }
}

@media only screen and (max-width: 575px) {
    .footer-default .footer-left .inner a.rn-button-style--2 {
        padding:7px 16px
    }
}

.footer-default .footer-left .inner a.rn-button-style--2:hover {
    background: #fff;
    border-color: #fff;
    color: var(--color-primary)
}

.footer-default .footer-right {
    background-image: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/bg/bg-image-8.jpg);
    padding: 150px 70px;
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    padding-left: 120px;
    border-radius: 6px 0 0
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .footer-default .footer-right {
        border-radius:0
    }
}

@media only screen and (max-width: 767px) {
    .footer-default .footer-right {
        border-radius:0
    }
}

.footer-default .footer-right[data-black-overlay]:before {
    border-radius: 6px 0 0
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .footer-default .footer-right[data-black-overlay]:before {
        border-radius:0
    }
}

@media only screen and (max-width: 767px) {
    .footer-default .footer-right[data-black-overlay]:before {
        border-radius:0
    }
}

@media only screen and (min-width: 1921px) {
    .footer-default .footer-right {
        padding:150px 350px;
        padding-left: 70px
    }
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .footer-default .footer-right {
        padding:119px 21px;
        padding-left: 70px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .footer-default .footer-right {
        padding:60px 70px
    }
}

@media only screen and (max-width: 767px) {
    .footer-default .footer-right {
        padding:60px 30px
    }
}

.footer-default .footer-right .footer-widget .title {
    color: #c6c9d8;
    font-weight: 500;
    margin-bottom: 30px;
    opacity: .75;
    font-size: 20px
}

@media only screen and (max-width: 767px) {
    .footer-default .footer-right .footer-widget .title {
        margin-bottom:14px
    }
}

.footer-default .footer-right .footer-widget ul.ft-link {
    padding: 0;
    margin: 0;
    list-style: none
}

.footer-default .footer-right .footer-widget ul.ft-link li a {
    color: #c6c9d8;
    font-size: 16px;
    opacity: .75
}

.footer-default .footer-right .footer-widget ul.ft-link li:hover a {
    color: var(--color-primary)
}

.footer-default .footer-right .footer-widget ul.ft-link li+li {
    margin-top: 13px
}

@media only screen and (max-width: 767px) {
    .footer-default .footer-right .footer-widget ul.ft-link li+li {
        margin-top:8px
    }
}

.footer-style-2 p {
    color: #c6c9d8;
    font-size: 14px;
    opacity: .75
}

.footer-style-2 p a {
    color: #c6c9d8
}

.footer-style-2 p a:hover {
    color: var(--color-primary)
}

.footer-style-2 ul.social-share {
    margin: 0
}

.footer-widget ul li {
    margin: 13px 0
}

.footer-widget ul li a {
    font-size: 16px;
    color: #c6c9d8;
    opacity: .75
}

.footer-widget ul li a:hover {
    color: var(--color-primary)
}

.footer-widget ul.social-share {
    margin: 0
}

.footer-widget ul.social-share li {
    line-height: 30px
}

.copyright-text {
    position: absolute;
    bottom: -114px
}

@media only screen and (max-width: 767px) {
    .copyright-text {
        position:static;
        bottom: 0;
        padding-top: 33px
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .copyright-text {
        position:static;
        bottom: 0;
        padding-top: 33px
    }
}

.copyright-text p {
    color: #c6c9d8;
    font-size: 14px;
    opacity: .75
}

.copyright-text p a {
    color: #c6c9d8
}

.copyright-text p a:hover {
    color: var(--color-primary)
}

.footer-style-2 .logo a img,.footer-default .logo a img {
    max-height: 66px
}

@media all and (-ms-high-contrast:none),(-ms-high-contrast:active) {
    .theme-gradient {
        color: var(--color-primary);
        background: 0 0 !important
    }
}

.my_switcher {
    position: fixed;
    left: 30px;
    transform: rotate(90deg);
    z-index: 99;
    bottom: 30px
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .my_switcher {
        left:10px
    }
}

@media only screen and (max-width: 767px) {
    .my_switcher {
        left:4px
    }
}

.my_switcher ul {
    margin: 0;
    padding: 0;
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    padding: 0;
    box-shadow: 0 0 10px rgba(0,0,0,.05);
    width: 40px;
    height: 40px;
    border-radius: 100px;
    line-height: 40px
}

.my_switcher ul li a {
    position: relative;
    font-size: 12px;
    line-height: 22px;
    font-weight: 500;
    text-decoration: none;
    transition: .4s;
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    letter-spacing: .3px
}

.my_switcher ul li a img {
    width: 15px
}

.my_switcher ul li a span {
    transform: rotate(-180deg);
    display: none
}

.my_switcher ul li a.active {
    display: none
}

.my_switcher ul li a.light {
    color: #fff
}

.my_switcher ul li a.dark {
    color: #18191a
}

.active-dark-mode {
    background: #191919;
    color: rgba(198,201,216,.75)
}

.active-dark-mode .bg_image--1 {
    background-image: inherit
}

.active-dark-mode .bg_color--1,.active-dark-mode .brand-separation {
    background: #191919
}

.active-dark-mode h1,.active-dark-mode h2,.active-dark-mode h3,.active-dark-mode h4,.active-dark-mode h5,.active-dark-mode h6,.active-dark-mode .h1,.active-dark-mode .h2,.active-dark-mode .h3,.active-dark-mode .h4,.active-dark-mode .h5,.active-dark-mode .h6 {
    color: #fff
}

.active-dark-mode p {
    color: rgba(198,201,216,.75)
}

.active-dark-mode a {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .rbt-single-widget ul li a {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .item-portfolio-static .inner p {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .item-portfolio-static .inner h4,.active-dark-mode .trydo-blog-list .blog-top .title a {
    color: #fff
}

.active-dark-mode .trydo-blog-list .blog-top .title a:hover {
    color: var(--color-primary)
}

.active-dark-mode .single-service.service__style--1 .content p,.active-dark-mode .service-details-inner .sercice-details-content .details p,.active-dark-mode ul.liststyle.bullet li {
    color: rgba(198,201,216,.75)
}

.active-dark-mode ul.liststyle.bullet li:before {
    background: rgba(198,201,216,.75)
}

.active-dark-mode .bg_color--3,.active-dark-mode .bg_color--5 {
    background-image: inherit;
    background-color: #101010
}

.active-dark-mode .bg_image--3,.active-dark-mode .bg_image--1,.active-dark-mode .footer-right {
    background-image: inherit;
    background-color: #101010
}

.active-dark-mode .section-title p,.active-dark-mode .about-us-list p,.active-dark-mode .about-inner .section-title p.description,.active-dark-mode .service.service__style--2 .content p,.active-dark-mode .counterup_style--1 p.description,.active-dark-mode .rn-testimonial-content .author-info h6,.active-dark-mode .slide.slider-style-3 .inner>span,.active-dark-mode .single-tab-content ul li a,.active-dark-mode .single-tab-content ul li,.active-dark-mode .single-service.service__style--2 .content p,.active-dark-mode .single-service.service__style--4 .content p {
    color: rgba(198,201,216,.75)
}

.active-dark-mode [data-black-overlay]:before {
    background-color: #101010
}

.active-dark-mode .thumbnail img {
    box-shadow: none
}

.active-dark-mode a.btn-transparent {
    color: #fff
}

.active-dark-mode .service.service__style--2:hover .content h3.title,.active-dark-mode .service.service__style--2:hover .content p,.active-dark-mode .rn-testimonial-content .author-info h6 span,.active-dark-mode .rn-testimonial-content .inner p,.active-dark-mode .section-title p a,.active-dark-mode .slide.slider-style-3 .inner h1.title,.active-dark-mode .color-black .mainmenunav ul.mainmenu>li>a,.active-dark-mode ul.social-share.social-style--2.color-black li a,.active-dark-mode .header-area.color-black a.rn-btn,.active-dark-mode ul.tab-style--1 li,.active-dark-mode ul.nav.tab-style--1 li a,.active-dark-mode .single-service.service__style--2:hover .content p,.active-dark-mode .single-service.service__style--4:hover .content p {
    color: #fff
}

.active-dark-mode .portfolio-sacousel-inner .slick-dots li button:after,.active-dark-mode .rn-slick-dot .slick-dots li button:after {
    box-shadow: inset 0 0 0 5px #fff
}

.active-dark-mode .portfolio-sacousel-inner .slick-dots li,.active-dark-mode .rn-slick-dot .slick-dots li {
    opacity: .4
}

.active-dark-mode .portfolio-sacousel-inner .slick-dots li.slick-active button:after,.active-dark-mode .rn-slick-dot .slick-dots li.slick-active button:after {
    box-shadow: inset 0 0 0 1px var(--color-primary);
    background-color: transparent;
    background-color: transparent !important
}

.active-dark-mode .bg_color--5,.active-dark-mode .footer-right {
    background: #101010
}

.active-dark-mode .rn-testimonial-content .inner p:before,.active-dark-mode .rn-testimonial-content .inner p:after {
    display: none
}

.active-dark-mode ul.brand-style-2 img {
    -webkit-filter: invert(1);
    filter: invert(1)
}

.active-dark-mode .single-service.service__style--2.bg-color-gray a,.active-dark-mode .single-service.service__style--2.bg-color-white a {
    background: #101010
}

.active-dark-mode #scrollUp {
    background-color: #191919
}

.active-dark-mode .header-area.header--sticky.sticky {
    background: #000
}

.active-dark-mode .header-area.header--sticky.sticky .header-wrapper .mainmenunav ul.mainmenu>li>a {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .header-area.header--sticky.sticky .header-wrapper a.rn-btn {
    color: rgba(198,201,216,.75);
    border-color: rgba(198,201,216,.75)
}

.active-dark-mode .header-area.header--sticky.sticky .header-wrapper a.rn-btn:hover {
    border-color: var(--color-primary);
    color: #fff
}

.active-dark-mode .contact-form--1 input,.active-dark-mode .contact-form--1 textarea {
    border: 2px solid rgba(198,201,216,.75);
    color: rgba(198,201,216,.75)
}

.active-dark-mode .header-area.color-black a.rn-btn {
    border-color: rgba(198,201,216,.75)
}

.active-dark-mode .header-area.color-black a.rn-btn:hover {
    color: #fff
}

.active-dark-mode .contact-form--1 input::-webkit-input-placeholder {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .contact-form--1 input::-moz-placeholder {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .contact-form--1 input:-ms-input-placeholder {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .contact-form--1 input:-moz-placeholder {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .contact-form--1 textarea::-webkit-input-placeholder {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .contact-form--1 textarea::-moz-placeholder {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .contact-form--1 textarea:-ms-input-placeholder {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .contact-form--1 textarea:-moz-placeholder {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .standard-service .content h3 a {
    color: #fff
}

.active-dark-mode .rn-card .rn-card-header a.btn {
    color: #fff
}

.active-dark-mode .rn-card .rn-card-header a.btn:after {
    background: #fff
}

.active-dark-mode .rn-card .rn-card-header a.btn[aria-disabled=true]:after,.active-dark-mode .rn-card .rn-card-header a.btn[aria-expanded=true]:after {
    background: var(--color-primary) !important;
    color: var(--color-primary)
}

.active-dark-mode ul.social-transparent li a {
    color: #fff
}

.active-dark-mode ul.social-transparent li a:hover {
    color: var(--color-primary)
}

.active-dark-mode ul.brand-style li img {
    filter: invert(1)
}

.active-dark-mode ul.brand-style li:hover {
    filter: invert(0)
}

.active-dark-mode .my_switcher ul {
    background: #191919;
    box-shadow: 0 0 10px rgba(0,0,0,.1)
}

.active-dark-mode ul.brand-style li {
    border-top-color: #4e4e4e;
    border-right-color: #4e4e4e
}

.active-dark-mode ul.brand-style {
    border-left-color: #4e4e4e;
    border-bottom-color: #4e4e4e
}

.active-dark-mode .rn-pricing {
    border-color: #4e4e4e
}

.active-dark-mode .creative-service-wrapper .row.creative-service .service.service__style--2,.active-dark-mode .single-service.service__style--2.bg-color-gray a {
    background: #191919
}

.active-dark-mode .single-service.service__style--2.bg-color-gray a,.active-dark-mode .single-service.service__style--2.bg-color-white a {
    background: #000
}

.active-dark-mode .contact-form--1 input,.active-dark-mode .contact-form--1 textarea,.active-dark-mode .header-area.color-black a.rn-btn {
    border: 2px solid rgba(255,255,255,.2)
}

.active-dark-mode .contact-form--1 input,.active-dark-mode .contact-form--1 textarea {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .bg_image--25 {
    background-color: #101010;
    background-image: url(https://sp-ao.shortpixel.ai/client/to_webp,q_lossless,ret_img/http://rainbowit.net/themes/trydo/wp-content/themes/trydo/assets/css/../images/bg/bg-image-28.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover
}

.active-dark-mode ul.nav.tab-style--1 li a:before {
    background: rgba(255,255,255,.2)
}

.active-dark-mode .pv-tab-button {
    background: rgba(255,255,255,.2)
}

.active-dark-mode .blog-comment-form .inner .rnform-group input,.active-dark-mode .blog-comment-form .inner .rnform-group textarea {
    border-color: rgba(255,255,255,.2);
    color: #fff
}

.active-dark-mode .pv-tab-button li,.active-dark-mode .pv-tab-button button {
    color: #fff
}

.active-dark-mode .item-portfolio-static:hover .thumbnail img {
    box-shadow: none
}

.active-dark-mode .personal-portfolio-slider:after {
    position: absolute;
    content: "";
    background: #000;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    opacity: .5;
    z-index: -1
}

.active-dark-mode .personal-portfolio-slider {
    z-index: 2
}

.active-dark-mode .rn-pagination ul.page-list li a {
    border-color: rgba(255,255,255,.2);
    background: #101010;
    color: #fff
}

.active-dark-mode .rn-blog-details .inner-wrapper .inner p {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .rn-blog-details .inner-wrapper .inner .rn-blog-quote:before {
    display: none
}

.active-dark-mode .rn-blog-details .inner-wrapper .inner .rn-blog-quote {
    color: #fff
}

.active-dark-mode ul.list-style li {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .portfolio-details .inner p.subtitle {
    color: #fff
}

.active-dark-mode .portfolio-details .inner p {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .related-work .inner h4 a {
    color: #fff
}

.active-dark-mode .related-work .inner span.category {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .line-separator {
    border-bottom: 1px solid rgba(255,255,255,.2)
}

.active-dark-mode .rn-progress-charts h6.heading {
    color: #fff
}

.active-dark-mode .rn-progress-charts .progress .progress-bar span.percent-label {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .rn-progress-charts .progress {
    background-color: #000
}

.active-dark-mode .rn-address {
    background-color: #101010;
    border-color: rgba(255,255,255,.2)
}

.active-dark-mode .rn-address .inner p a,.active-dark-mode .rn-address .inner p {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .rn-address .icon {
    background-color: #191919;
    border-color: #191919
}

.active-dark-mode button.rn-button-style--2.btn_border.btn_border--dark,.active-dark-mode a.rn-button-style--2.btn_border.btn_border--dark {
    border: 2px solid rgba(255,255,255,.2);
    color: rgba(255,255,255,.2)
}

.active-dark-mode button.rn-button-style--2.btn_border.btn_border--dark:hover,.active-dark-mode a.rn-button-style--2.btn_border.btn_border--dark:hover {
    border-color: var(--color-primary);
    color: #fff;
    background-color: var(--color-primary)
}

.active-dark-mode .mainmenunav ul.mainmenu>li>ul.submenu,.active-dark-mode .mainmenunav ul.mainmenu>li>ul.submenu ul.submenu {
    background-color: #191919
}

.active-dark-mode .mainmenunav ul.mainmenu>li>ul.submenu li a,.active-dark-mode .mainmenunav ul.mainmenu>li>ul.submenu ul.submenu li a {
    color: #c6c9d8
}

.active-dark-mode .mainmenunav ul.mainmenu>li>ul.submenu li a:hover,.active-dark-mode .mainmenunav ul.mainmenu>li>ul.submenu ul.submenu li a:hover {
    color: var(--color-primary)
}

.active-dark-mode .color-black .humberger-menu span.text-white {
    color: #c6c9d8 !important
}

.active-dark-mode .portfolio-details .inner .portfolio-view-list .port-view span {
    color: #c6c9d8
}

@media only screen and (min-width: 992px) and (max-width:1199px) {
    .active-dark-mode .personal-portfolio-slider:before {
        background:#191919;
        opacity: .7
    }
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .active-dark-mode .header-area .header-wrapper .mainmenunav ul.mainmenu {
        background-color:#191919
    }

    .active-dark-mode .header-area .header-wrapper .mainmenunav ul.mainmenu li a {
        color: #c6c9d8
    }

    .active-dark-mode .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a:after {
        border-color: #c6c9d8 transparent transparent
    }

    .active-dark-mode .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a.open:after {
        border-color: transparent transparent var(--color-primary) transparent
    }

    .active-dark-mode .header-area .header-wrapper.menu-open .close-menu span {
        color: #c6c9d8
    }

    .active-dark-mode .personal-portfolio-slider:before {
        background: #191919;
        opacity: .7
    }

    .active-dark-mode .header-style-two .humberger-menu span.text-white {
        color: #c6c9d8 !important
    }

    .active-dark-mode .header-area.header--sticky.sticky .humberger-menu span.text-white {
        color: #c6c9d8 !important
    }
}

@media only screen and (max-width: 767px) {
    .active-dark-mode .personal-portfolio-slider:before {
        background:#191919;
        opacity: .7
    }

    .active-dark-mode .header-style-two .humberger-menu span.text-white {
        color: #c6c9d8 !important
    }

    .active-dark-mode .header-area.header--sticky.sticky .humberger-menu span.text-white {
        color: #c6c9d8 !important
    }

    .active-dark-mode .header-area .header-wrapper .mainmenunav ul.mainmenu {
        background: #191919
    }

    .active-dark-mode .header-area .header-wrapper .mainmenunav ul.mainmenu li a {
        color: #c6c9d8
    }

    .active-dark-mode .header-area .header-wrapper.menu-open .close-menu span {
        color: #c6c9d8
    }

    .active-dark-mode .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a:after {
        border-color: #c6c9d8 transparent transparent
    }

    .active-dark-mode .header-area .header-wrapper .mainmenunav ul.mainmenu li.has-droupdown>a.open:after {
        border-color: transparent transparent var(--color-primary) transparent
    }
}

.active-dark-mode .rn-service-area.bg_color--1.service-area--5 {
    background: #101010 !important
}

.active-dark-mode .single-service.service__style--5 {
    background: #000
}

.active-dark-mode [data-overlay="5"]:before,.active-dark-mode [data-black-overlay="5"]:before,.active-dark-mode [data-white-overlay="5"]:before {
    opacity: .8
}

.active-dark-mode .portfolio-sacousel-inner .slick-dots li.slick-active button:after,.active-dark-mode .rn-slick-dot .slick-dots li.slick-active button:after {
    -webkit-box-shadow: inset 0 0 0 1px var(--color-primary);
    box-shadow: inset 0 0 0 1px var(--color-primary);
    background-color: transparent;
    background-color: transparent !important
}

.active-dark-mode .active-dark .portfolio-sacousel-inner .slick-dots li.slick-active button:after,.active-dark-mode .active-dark .rn-slick-dot .slick-dots li.slick-active button:after {
    -webkit-box-shadow: inset 0 0 0 1px var(--color-primary);
    box-shadow: inset 0 0 0 1px var(--color-primary);
    background-color: transparent;
    background-color: transparent !important
}

.active-dark-mode .active-dark .portfolio-sacousel-inner .slick-dots li button:after,.active-dark-mode .active-dark .rn-slick-dot .slick-dots li button:after {
    -webkit-box-shadow: inset 0 0 0 5px #fff;
    box-shadow: inset 0 0 0 5px #fff
}

.active-dark-mode .elementor-128 .elementor-element.elementor-element-40163da .rn-portfolio-area,.active-dark-mode .elementor-307 .elementor-element.elementor-element-b57e187 .rn-testimonial-area,.active-dark-mode .elementor-307 .elementor-element.elementor-element-1eeec8a .about-area,.active-dark-mode .elementor-298 .elementor-element.elementor-element-bcce541 .rn-blog-area,.active-dark-mode .elementor-298 .elementor-element.elementor-element-cdc2393 .rn-service-area,.active-dark-mode .elementor-354 .elementor-element.elementor-element-3e7462c .rn-blog-area,.active-dark-mode .elementor-354 .elementor-element.elementor-element-4c6a64f .rn-brand-area,.active-dark-mode .elementor-374 .elementor-element.elementor-element-d935722 .rn-brand-area,.active-dark-mode .elementor-390 .elementor-element.elementor-element-e6be86c .rn-brand-area,.active-dark-mode .elementor-422 .elementor-element.elementor-element-b57e187 .rn-testimonial-area,.active-dark-mode .elementor-422 .elementor-element.elementor-element-1eeec8a .about-area,.active-dark-mode .elementor-458 .elementor-element.elementor-element-88b7b61:not(.elementor-motion-effects-element-type-background),.active-dark-mode .elementor-458 .elementor-element.elementor-element-88b7b61>.elementor-motion-effects-container>.elementor-motion-effects-layer,.active-dark-mode .elementor-654 .elementor-element.elementor-element-4076c32 .rn-service-area,.active-dark-mode .post-breadcrumbs,.active-dark-mode .elementor-1846 .elementor-element.elementor-element-b88c999 .rn-brand-area,.active-dark-mode .elementor-732 .elementor-element.elementor-element-305cfbf .rn-gallery-area,.active-dark-mode .elementor-854 .elementor-element.elementor-element-a646688 .rn-portfolio-area {
    background-color: #101010
}

.active-dark-mode .elementor-128 .elementor-element.elementor-element-84cd214 .rn-testimonial-area,.active-dark-mode .elementor-128 .elementor-element.elementor-element-9819d47 .rn-brand-area,.active-dark-mode .elementor-307 .elementor-element.elementor-element-9819d47 .rn-brand-area,.active-dark-mode .elementor-307 .elementor-element.elementor-element-3caffa5 .rn-blog-area,.active-dark-mode .elementor-307 .elementor-element.elementor-element-6bbea3b .rn-portfolio-area,.active-dark-mode .elementor-263 .elementor-element.elementor-element-2ef6ec5 .rn-contact-area.bg_color--5,.active-dark-mode .elementor-263 .elementor-element.elementor-element-662adda .rn-portfolio-area,.active-dark-mode .elementor-263 .elementor-element.elementor-element-dc8fe47 .rn-brand-area,.active-dark-mode .elementor-298 .elementor-element.elementor-element-7374cc2 .rn-contact-area.bg_color--5,.active-dark-mode .elementor-298 .elementor-element.elementor-element-51214b8 .rn-portfolio-area,.active-dark-mode .elementor-354 .elementor-element.elementor-element-75d3a53:not(.elementor-motion-effects-element-type-background),.active-dark-mode .elementor-354 .elementor-element.elementor-element-75d3a53>.elementor-motion-effects-container>.elementor-motion-effects-layer,.active-dark-mode .elementor-408 .elementor-element.elementor-element-65b9d05 .rn-portfolio-area,.active-dark-mode .elementor-408 .elementor-element.elementor-element-e60b9b5 .rn-blog-area,.active-dark-mode .elementor-422 .elementor-element.elementor-element-9819d47 .rn-brand-area,.active-dark-mode .elementor-422 .elementor-element.elementor-element-e9bc73a .rn-blog-area,.active-dark-mode .elementor-422 .elementor-element.elementor-element-ccbeaed .rn-portfolio-area,.active-dark-mode .elementor-965 .elementor-element.elementor-element-833f1f4 .rn-blog-area,.active-dark-mode .elementor-965 .elementor-element.elementor-element-ff34af3 .rn-portfolio-area,.active-dark-mode .elementor-220 .elementor-element.elementor-element-308165d .rn-brand-area,.active-dark-mode .elementor-654 .elementor-element.elementor-element-be0c2f8 .rn-brand-area,.active-dark-mode .elementor-639 .elementor-element.elementor-element-4b444a5 .rn-portfolio-area,.active-dark-mode .elementor-205 .elementor-element.elementor-element-810e6bd .rn-contact-area.bg_color--5,.active-dark-mode .elementor-1846 .elementor-element.elementor-element-73ab951 .rn-brand-area,.active-dark-mode .elementor-1846 .elementor-element.elementor-element-ed02395 .rn-brand-area,.active-dark-mode .elementor-836 .elementor-element.elementor-element-e296e3f .rn-brand-area,.active-dark-mode .elementor-1844 .elementor-element.elementor-element-c5075c0 .rn-blog-area,.active-dark-mode .elementor-1844 .elementor-element.elementor-element-33d93c5 .rn-portfolio-area,.active-dark-mode .elementor-5 .elementor-element.elementor-element-c5075c0 .rn-blog-area,.active-dark-mode .elementor-5 .elementor-element.elementor-element-33d93c5 .rn-portfolio-area {
    background-color: #191919
}

.active-dark-mode .elementor-654 .elementor-element.elementor-element-4076c32 .service-item .single-service a {
    background-color: #000
}

.active-dark-mode .rn-pagination ul.page-numbers li a,.active-dark-mode .rn-pagination ul.page-list li a {
    border: 2px solid #000;
    background: #000;
    color: #fff
}

.active-dark-mode .portfolio-details .section-title h2 {
    border-color: rgba(255,255,255,.2)
}

.active-dark-mode .rbt-single-widget {
    border-color: #000
}

.active-dark-mode .rbt-single-widget .title {
    color: #fff
}

.active-dark-mode .rbt-single-widget.widget_recent_comments ul li+li,.active-dark-mode .rbt-single-widget.widget_recent_entries ul li+li,.active-dark-mode .rbt-single-widget.widget_archive ul li+li,.active-dark-mode .rbt-single-widget.widget_categories ul li+li,.active-dark-mode .rbt-single-widget.widget_meta ul li+li,.active-dark-mode .rbt-single-widget.widget_pages ul li+li,.active-dark-mode .rbt-single-widget.widget_nav_menu ul li+li,.active-dark-mode .tagcloud a,.active-dark-mode .wp-block-tag-cloud a,.active-dark-mode input[type=text],.active-dark-mode input[type=password],.active-dark-mode input[type=email],.active-dark-mode input[type=number],.active-dark-mode input[type=tel],.active-dark-mode textarea,.active-dark-mode .trydo-blog-list,.active-dark-mode .wp-block-quote,.active-dark-mode blockquote,.active-dark-mode .wp-block-coblocks-click-to-tweet,.active-dark-mode .wp-block-pullquote blockquote,.active-dark-mode .wp-block-quote.is-style-large,.active-dark-mode .wp-block-quote.is-large,.active-dark-mode blockquote.has-text-align-right,.active-dark-mode .wp-block-quote.has-text-align-right,.active-dark-mode .comment-list .comment .single-comment,.active-dark-mode .comment-list .pingback .single-comment,.active-dark-mode .comment-list .trackback .single-comment,.active-dark-mode .comment-list .comment.parent ul.children .comment .single-comment,.active-dark-mode .comment-list .pingback.parent ul.children .comment .single-comment,.active-dark-mode .comment-list .trackback.parent ul.children .comment .single-comment,.active-dark-mode .comment-list .comment.parent ul.children .comment:before,.active-dark-mode .comment-list .pingback.parent ul.children .comment:before,.active-dark-mode .comment-list .trackback.parent ul.children .comment:before,.active-dark-mode .comment-list .comment.parent ul.children .comment .single-comment:before,.active-dark-mode .comment-list .pingback.parent ul.children .comment .single-comment:before,.active-dark-mode .comment-list .trackback.parent ul.children .comment .single-comment:before,.active-dark-mode .rbt-single-widget input,.active-dark-mode .rbt-single-widget select,.active-dark-mode .woocommerce div.product .short-description,.active-dark-mode .woocommerce-product-details__short-description,.active-dark-mode select {
    border-color: #000
}

.active-dark-mode .rbt-single-widget.widget_products ul.product_list_widget li+li,.active-dark-mode .rbt-single-widget.widget_top_rated_products ul.product_list_widget li+li,.active-dark-mode .rbt-single-widget.widget_recently_viewed_products ul.product_list_widget li+li,.active-dark-mode .rbt-single-widget.widget_shopping_cart .cart_list li+li,.active-dark-mode .rbt-single-widget.widget_recent_reviews li+li,.active-dark-mode.woocommerce .widget_shopping_cart .total,.active-dark-mode .woocommerce.widget_shopping_cart .total {
    border-color: #000
}

.active-dark-mode.woocommerce .widget_shopping_cart .total strong,.active-dark-mode .woocommerce.widget_shopping_cart .total strong {
    color: #fff
}

.active-dark-mode.woocommerce .widget_shopping_cart .cart_list li a.remove,.active-dark-mode .woocommerce.widget_shopping_cart .cart_list li a.remove {
    color: #fff !important
}

.active-dark-mode .comment-list .comment.parent .single-comment,.active-dark-mode .comment-list .pingback.parent .single-comment,.active-dark-mode .comment-list .trackback.parent .single-comment {
    background-color: #000
}

.active-dark-mode .comment-list .comment .comment-img .commenter,.active-dark-mode .comment-list .pingback .comment-img .commenter,.active-dark-mode .comment-list .trackback .comment-img .commenter,.active-dark-mode .comment-list .comment .reply-edit a.comment-edit-link,.active-dark-mode .comment-list .pingback .reply-edit a.comment-edit-link,.active-dark-mode .comment-list .trackback .reply-edit a.comment-edit-link,.active-dark-mode .comment-list .comment .comment-img .commenter a,.active-dark-mode .comment-list .pingback .comment-img .commenter a,.active-dark-mode .comment-list .trackback .comment-img .commenter a {
    color: #fff
}

.active-dark-mode .rn-blog-details .trydo-comment-form .inner p a,.active-dark-mode .rn-blog-details .comment-form .inner p a {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .portfolio-details .section-title p strong {
    color: #fff
}

.active-dark-mode .experience-wrap {
    border-color: #000
}

.active-dark-mode .single-service.service__style--5 {
    box-shadow: none
}

.root-header-transparent.active-dark-mode .header-area.header-style-two.sticky ul.social-share.social-style--2.color-black li a {
    color: #fff
}

.root-header-transparent.active-dark-mode .header-area.header-style-two.header--transparent.sticky .header-wrapper a.rn-btn {
    color: rgba(198,201,216,.75);
    border-color: rgba(198,201,216,.75)
}

.active-dark-mode .item-portfolio-static .inner .gallery-title {
    color: var(--color-white)
}

.active-dark-mode .item-portfolio-static .inner .gallery-title:hover {
    color: var(--color-primary)
}

.active-dark-mode .slide.designer-portfolio.slider-style-3 .designer-thumbnail img {
    border: 14px solid #191919;
    box-shadow: 0 20px 40px rgba(0,0,0,.1),0 20px 40px rgba(0,0,0,.15)
}

.dialog-type-lightbox {
    background-color: transparent !important
}

.active-dark-mode .product .shop-product-info h3 a {
    color: #fff
}

.active-dark-mode.woocommerce ul.products li.product .price {
    color: rgba(198,201,216,.75)
}

.active-dark-mode span.woocommerce-Price-amount.amount {
    color: rgba(198,201,216,.75)
}

.active-dark-mode .mainmenunav ul.mainmenu>li ul.submenu li:hover>a {
    background: #101010
}

.root-header-transparent.active-dark-mode .header-area.header-style-two .mainmenunav ul.mainmenu>li>a {
    color: #fff
}

.root-header-transparent.active-dark-mode .header-area.header-style-two ul.social-share.social-style--2.color-black li a {
    color: #fff
}

.root-header-transparent.active-dark-mode .header-area.header-style-two.header--transparent .header-wrapper a.rn-btn {
    border: 2px solid #fff;
    color: #fff
}

@media only screen and (min-width: 768px) and (max-width:991px) {
    .active-dark-mode .header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu li.current_page_item a {
        background:#101010
    }
}

@media only screen and (max-width: 767px) {
    .active-dark-mode .header-area .header-wrapper .mainmenunav ul.mainmenu li ul.submenu li.current_page_item a {
        background:#101010
    }
}

.active-dark-mode.woocommerce div.product .woocommerce-tabs ul.tabs li:before {
    background: rgba(255,255,255,.1)
}

.active-dark-mode.woocommerce div.product .woocommerce-tabs ul.tabs li a {
    color: rgba(198,201,216,.75)
}

.active-dark-mode.woocommerce div.product .woocommerce-tabs h2,.active-dark-mode.woocommerce div.product .woocommerce-tabs #respond .comment-reply-title {
    color: #fff
}

.active-dark-mode.woocommerce div.product .woocommerce-tabs ul.tabs li.active {
    background-color: transparent
}

.active-dark-mode .rbt-single-widget .title,.active-dark-mode .blog-search .search-button,.active-dark-mode .trydo-blog-list.sticky {
    background: #101010
}

.active-dark-mode .product .shop-product-info h3 a:hover {
    color: var(--color-primary)
}

.active-dark-mode table thead th,.active-dark-mode .wp-calendar-table thead th {
    color: #fff
}

.active-dark-mode .woocommerce a.remove {
    color: #fff !important
}

.active-dark-mode .woocommerce .quantity .qty {
    background-color: #191919;
    border-color: #000
}

.active-dark-mode .woocommerce-cart .woocommerce .actions #coupon_code {
    border-color: #000
}

.woocommerce-cart.active-dark-mode .woocommerce table.shop_table th,.woocommerce-cart.active-dark-mode .woocommerce table.shop_table td {
    border-color: #000;
    color: #fff
}

.active-dark-mode .woocommerce table.shop_table {
    border-color: #000
}

.woocommerce-cart.active-dark-mode .woocommerce .actions #coupon_code,.active-dark-mode .select2-container--default .select2-selection--single {
    border-color: #000
}

.active-dark-mode .woocommerce-error,.active-dark-mode .woocommerce-info,.active-dark-mode .woocommerce-message {
    background-color: #101010
}

.active-dark-mode #add_payment_method #payment,.active-dark-mode .woocommerce-cart #payment,.active-dark-mode .woocommerce-checkout #payment {
    background: #101010
}

.active-dark-mode .woocommerce table.shop_table th {
    color: #fff
}

.active-dark-mode .select2-dropdown {
    background-color: #101010;
    border: 1px solid #101010
}

.active-dark-mode.woocommerce-account .woocommerce .woocommerce-MyAccount-navigation ul li a {
    background: #101010;
    border-color: #000
}

.active-dark-mode .woocommerce-form-login__rememberme .woocommerce-form__input-checkbox+span {
    color: #fff
}

.active-dark-mode #add_payment_method #payment ul.payment_methods,.active-dark-mode .woocommerce-cart #payment ul.payment_methods,.active-dark-mode .woocommerce-checkout #payment ul.payment_methods,.active-dark-mode .woocommerce table.shop_table td,.active-dark-mode .woocommerce table.shop_table th {
    border-color: #000
}

.active-dark-mode .woocommerce form.checkout_coupon,.active-dark-mode .woocommerce form.login,.active-dark-mode .woocommerce form.register {
    border-color: #000
}

.active-dark-mode.woocommerce div.product form.cart .variations label {
    color: #fff
}

.active-dark-mode.woocommerce div.product .product-meta a,.active-dark-mode.woocommerce div.product .product_meta a {
    color: #fff
}

.active-dark-mode.woocommerce table.shop_attributes th,.active-dark-mode.woocommerce table.shop_attributes td {
    color: #fff;
    border-color: #000 !important
}

.active-dark-mode #review_form_wrapper {
    border-color: #000
}

.active-dark-mode .header-not-transparent .mainmenunav ul.mainmenu>li>a,.active-dark-mode .header-not-transparent .rbt-mini-cart-wrap .mini-cart {
    color: #fff
}

.active-dark-mode .header-area.header-not-transparent .header-wrapper a.rn-btn {
    border: 2px solid var(--color-extra1);
    color: var(--color-white)
}

.description {font-weight:300;color:#eee;padding:0}
.description a{color:#1d1d24}
.pure-material-checkbox {
    z-index: 0;
    position: relative;
    display: inline-block;
    color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.87);
    font-family: var(--pure-material-font, "Roboto", "Segoe UI", BlinkMacSystemFont, system-ui, -apple-system);
    font-size: 16px;
    line-height: 1.5;
}

/* Input */
.pure-material-checkbox > input {
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    z-index: -1;
    position: absolute;
    left: -10px;
    top: -8px;
    display: block;
    margin: 0;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    background-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
    box-shadow: none;
    outline: none;
    opacity: 0;
    transform: scale(1);
    pointer-events: none;
    transition: opacity 0.3s, transform 0.2s;
}

/* Span */
.pure-material-checkbox > span {
    display: inline-block;
    width: 100%;
    cursor: pointer;
}

/* Box */
.pure-material-checkbox > span::before {
    content: "";
    display: inline-block;
    box-sizing: border-box;
    margin: 3px 11px 3px 1px;
    border: solid 2px; /* Safari */
    border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
    border-radius: 2px;
    width: 18px;
    height: 18px;
    vertical-align: top;
    transition: border-color 0.2s, background-color 0.2s;
}

/* Checkmark */
.pure-material-checkbox > span::after {
    content: "";
    display: block;
    position: absolute;
    top: 3px;
    left: 1px;
    width: 10px;
    height: 5px;
    border: solid 2px transparent;
    border-right: none;
    border-top: none;
    transform: translate(3px, 4px) rotate(-45deg);
}

/* Checked, Indeterminate */
.pure-material-checkbox > input:checked,
.pure-material-checkbox > input:indeterminate {
    background-color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
}

.pure-material-checkbox > input:checked + span::before,
.pure-material-checkbox > input:indeterminate + span::before {
    border-color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
    background-color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
}

.pure-material-checkbox > input:checked + span::after,
.pure-material-checkbox > input:indeterminate + span::after {
    border-color: rgb(var(--pure-material-onprimary-rgb, 255, 255, 255));
}

.pure-material-checkbox > input:indeterminate + span::after {
    border-left: none;
    transform: translate(4px, 3px);
}

/* Hover, Focus */
.pure-material-checkbox:hover > input {
    opacity: 0.04;
}

.pure-material-checkbox > input:focus {
    opacity: 0.12;
}

.pure-material-checkbox:hover > input:focus {
    opacity: 0.16;
}

/* Active */
.pure-material-checkbox > input:active {
    opacity: 1;
    transform: scale(0);
    transition: transform 0s, opacity 0s;
}

.pure-material-checkbox > input:active + span::before {
    border-color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
}

.pure-material-checkbox > input:checked:active + span::before {
    border-color: transparent;
    background-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
}

/* Disabled */
.pure-material-checkbox > input:disabled {
    opacity: 0;
}

.pure-material-checkbox > input:disabled + span {
    color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.38);
    cursor: initial;
}

.pure-material-checkbox > input:disabled + span::before {
    border-color: currentColor;
}

.pure-material-checkbox > input:checked:disabled + span::before,
.pure-material-checkbox > input:indeterminate:disabled + span::before {
    border-color: transparent;
    background-color: currentColor;
}

.button-70 {
  background-image: linear-gradient(#0dccea, #0d70ea);
  border: 0;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .3) 0 5px 15px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: Montserrat,sans-serif;
  font-size: .9em;
  margin: 5px;
  padding: 10px 15px;
  text-align: center;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}
#form-total > div.steps.clearfix > ul {
    margin-bottom: 0;
}

.img-costom-element .img-element {
    width: 100%;
    height: calc(100% - 40px);
    margin: 20px 0;
    background: center / cover no-repeat url(images/profile.webp);
    border-radius: 10px;
}