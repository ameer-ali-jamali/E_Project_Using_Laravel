<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    body {
        font-size: .875rem;
    }

    .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
    }

    /* Sidebar*/

    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        /* Behind the navbar */
        padding: 48px 0 0;
        /* Height of navbar */
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
        .sidebar {
            top: 5rem;
        }
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
        font-weight: bolder;
        color:black;
    }

    .nav-link-item1{
    background-color: darkgrey;
    }

    .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #727272;
    }

    .sidebar .nav-link.active {
        color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
        color: inherit;
    }

    .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
    }

    /*Navbar*/
    .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: rgba(0, 0, 0, .25);
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
        top: .25rem;
        right: 1rem;
    }

    .navbar .form-control {
        padding: .75rem 1rem;
        border-width: 0;
        border-radius: 0;
    }

    .form-control-dark {
        color: #fff;
        background-color: rgba(255, 255, 255, .1);
        border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }

    /*!
 * Bootstrap v5.0.0-alpha1 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
    :root {
        --bs-blue: #0d6efd;
        --bs-indigo: #6610f2;
        --bs-purple: #6f42c1;
        --bs-pink: #d63384;
        --bs-red: #dc3545;
        --bs-orange: #fd7e14;
        --bs-yellow: #ffc107;
        --bs-green: #28a745;
        --bs-teal: #20c997;
        --bs-cyan: #17a2b8;
        --bs-white: #fff;
        --bs-gray: #6c757d;
        --bs-gray-dark: #343a40;
        --bs-primary: #0d6efd;
        --bs-secondary: #6c757d;
        --bs-success: #28a745;
        --bs-info: #17a2b8;
        --bs-warning: #ffc107;
        --bs-danger: #dc3545;
        --bs-light: #f8f9fa;
        --bs-dark: #343a40;
        --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0))
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box
    }

    body {
        margin: 0;
        font-family: var(--bs-font-sans-serif);
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: transparent
    }

    [tabindex="-1"]:focus:not(:focus-visible) {
        outline: 0 !important
    }

    hr {
        margin: 1rem 0;
        color: inherit;
        background-color: currentColor;
        border: 0;
        opacity: .25
    }

    hr:not([size]) {
        height: 1px
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: .5rem;
        font-weight: 500;
        line-height: 1.2
    }

    .h1,
    h1 {
        font-size: calc(1.375rem + 1.5vw)
    }

    @media (min-width:1200px) {

        .h1,
        h1 {
            font-size: 2.5rem
        }
    }

    .h2,
    h2 {
        font-size: calc(1.325rem + .9vw)
    }

    @media (min-width:1200px) {

        .h2,
        h2 {
            font-size: 2rem
        }
    }

    .h3,
    h3 {
        font-size: calc(1.3rem + .6vw)
    }

    @media (min-width:1200px) {

        .h3,
        h3 {
            font-size: 1.75rem
        }
    }

    .h4,
    h4 {
        font-size: calc(1.275rem + .3vw)
    }

    @media (min-width:1200px) {

        .h4,
        h4 {
            font-size: 1.5rem
        }
    }

    .h5,
    h5 {
        font-size: 1.25rem
    }

    .h6,
    h6 {
        font-size: 1rem
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    abbr[data-original-title],
    abbr[title] {
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        -webkit-text-decoration-skip-ink: none;
        text-decoration-skip-ink: none
    }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit
    }

    ol,
    ul {
        padding-left: 2rem
    }

    dl,
    ol,
    ul {
        margin-top: 0;
        margin-bottom: 1rem
    }

    ol ol,
    ol ul,
    ul ol,
    ul ul {
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

    b,
    strong {
        font-weight: bolder
    }

    .small,
    small {
        font-size: .875em
    }

    .mark,
    mark {
        padding: .2em;
        background-color: #fcf8e3
    }

    sub,
    sup {
        position: relative;
        font-size: .75em;
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
        color: #0d6efd;
        text-decoration: underline
    }

    a:hover {
        color: #024dbc
    }

    a:not([href]):not([class]),
    a:not([href]):not([class]):hover {
        color: inherit;
        text-decoration: none
    }

    code,
    kbd,
    pre,
    samp {
        font-family: var(--bs-font-monospace);
        font-size: 1em
    }

    pre {
        display: block;
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
        font-size: .875em;
        -ms-overflow-style: scrollbar
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal
    }

    code {
        font-size: .875em;
        color: #d63384;
        word-wrap: break-word
    }

    a>code {
        color: inherit
    }

    kbd {
        padding: .2rem .4rem;
        font-size: .875em;
        color: #fff;
        background-color: #212529;
        border-radius: .2rem
    }

    kbd kbd {
        padding: 0;
        font-size: 1em;
        font-weight: 700
    }

    figure {
        margin: 0 0 1rem
    }

    img,
    svg {
        vertical-align: middle
    }

    table {
        caption-side: bottom;
        border-collapse: collapse
    }

    caption {
        padding-top: .5rem;
        padding-bottom: .5rem;
        color: #6c757d;
        text-align: left
    }

    th {
        text-align: inherit;
        text-align: -webkit-match-parent
    }

    tbody,
    td,
    tfoot,
    th,
    thead,
    tr {
        border-color: inherit;
        border-style: solid;
        border-width: 0
    }

    label {
        display: inline-block
    }

    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }


    select {
        word-wrap: normal
    }

    [list]::-webkit-calendar-picker-indicator {
        display: none
    }




    ::-moz-focus-inner {
        padding: 0;
        border-style: none
    }

    textarea {
        resize: vertical
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0
    }

    legend {
        float: left;
        width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: calc(1.275rem + .3vw);
        line-height: inherit;
        white-space: normal
    }

    @media (min-width:1200px) {
        legend {
            font-size: 1.5rem
        }
    }

    legend+* {
        clear: left
    }

    ::-webkit-datetime-edit-day-field,
    ::-webkit-datetime-edit-fields-wrapper,
    ::-webkit-datetime-edit-hour-field,
    ::-webkit-datetime-edit-minute,
    ::-webkit-datetime-edit-month-field,
    ::-webkit-datetime-edit-text,
    ::-webkit-datetime-edit-year-field {
        padding: 0
    }

    [type=search] {
        outline-offset: -2px;
        -webkit-appearance: textfield
    }

    ::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-color-swatch-wrapper {
        padding: 0
    }



    output {
        display: inline-block
    }

    iframe {
        border: 0
    }

    summary {
        display: list-item;
        cursor: pointer
    }

    progress {
        vertical-align: baseline
    }

    [hidden] {
        display: none !important
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300
    }

    .display-1 {
        font-size: calc(1.625rem + 4.5vw);
        font-weight: 300;
        line-height: 1.2
    }

    @media (min-width:1200px) {
        .display-1 {
            font-size: 5rem
        }
    }

    .display-2 {
        font-size: calc(1.575rem + 3.9vw);
        font-weight: 300;
        line-height: 1.2
    }

    @media (min-width:1200px) {
        .display-2 {
            font-size: 4.5rem
        }
    }

    .display-3 {
        font-size: calc(1.525rem + 3.3vw);
        font-weight: 300;
        line-height: 1.2
    }

    @media (min-width:1200px) {
        .display-3 {
            font-size: 4rem
        }
    }

    .display-4 {
        font-size: calc(1.475rem + 2.7vw);
        font-weight: 300;
        line-height: 1.2
    }

    @media (min-width:1200px) {
        .display-4 {
            font-size: 3.5rem
        }
    }

    .display-5 {
        font-size: calc(1.425rem + 2.1vw);
        font-weight: 300;
        line-height: 1.2
    }

    @media (min-width:1200px) {
        .display-5 {
            font-size: 3rem
        }
    }

    .display-6 {
        font-size: calc(1.375rem + 1.5vw);
        font-weight: 300;
        line-height: 1.2
    }

    @media (min-width:1200px) {
        .display-6 {
            font-size: 2.5rem
        }
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
        font-size: .875em;
        text-transform: uppercase
    }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1.25rem
    }

    .blockquote>:last-child {
        margin-bottom: 0
    }

    .blockquote-footer {
        margin-top: -1rem;
        margin-bottom: 1rem;
        font-size: .875em;
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
        font-size: .875em;
        color: #6c757d
    }

    .container,
    .container-fluid,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl,
    .container-xxl {
        width: 100%;
        padding-right: 1rem;
        padding-left: 1rem;
        margin-right: auto;
        margin-left: auto
    }

    @media (min-width:576px) {

        .container,
        .container-sm {
            max-width: 540px
        }
    }

    @media (min-width:768px) {

        .container,
        .container-md,
        .container-sm {
            max-width: 720px
        }
    }

    @media (min-width:992px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm {
            max-width: 960px
        }
    }

    @media (min-width:1200px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            max-width: 1140px
        }
    }

    @media (min-width:1400px) {

        .container,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl,
        .container-xxl {
            max-width: 1320px
        }
    }

    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex: 1 0 100%;
        flex-wrap: wrap;
        margin-top: calc(var(--bs-gutter-y) * -1);
        margin-right: calc(var(--bs-gutter-x)/ -2);
        margin-left: calc(var(--bs-gutter-x)/ -2)
    }

    .row>* {
        flex-shrink: 0;
        width: 100%;
        max-width: 100%;
        padding-right: calc(var(--bs-gutter-x)/ 2);
        padding-left: calc(var(--bs-gutter-x)/ 2);
        margin-top: var(--bs-gutter-y)
    }

    .col {
        flex: 1 0 0%
    }

    .row-cols-auto>* {
        flex: 0 0 auto;
        width: auto
    }

    .row-cols-1>* {
        flex: 0 0 auto;
        width: 100%
    }

    .row-cols-2>* {
        flex: 0 0 auto;
        width: 50%
    }

    .row-cols-3>* {
        flex: 0 0 auto;
        width: 33.333333%
    }

    .row-cols-4>* {
        flex: 0 0 auto;
        width: 25%
    }

    .row-cols-5>* {
        flex: 0 0 auto;
        width: 20%
    }

    .row-cols-6>* {
        flex: 0 0 auto;
        width: 16.666667%
    }

    .col-auto {
        flex: 0 0 auto;
        width: auto
    }

    .col-1 {
        flex: 0 0 auto;
        width: 8.333333%
    }

    .col-2 {
        flex: 0 0 auto;
        width: 16.666667%
    }

    .col-3 {
        flex: 0 0 auto;
        width: 25%
    }

    .col-4 {
        flex: 0 0 auto;
        width: 33.333333%
    }

    .col-5 {
        flex: 0 0 auto;
        width: 41.666667%
    }

    .col-6 {
        flex: 0 0 auto;
        width: 50%
    }

    .col-7 {
        flex: 0 0 auto;
        width: 58.333333%
    }

    .col-8 {
        flex: 0 0 auto;
        width: 66.666667%
    }

    .col-9 {
        flex: 0 0 auto;
        width: 75%
    }

    .col-10 {
        flex: 0 0 auto;
        width: 83.333333%
    }

    .col-11 {
        flex: 0 0 auto;
        width: 91.666667%
    }

    .col-12 {
        flex: 0 0 auto;
        width: 100%
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

    .g-0,
    .gx-0 {
        --bs-gutter-x: 0
    }

    .g-0,
    .gy-0 {
        --bs-gutter-y: 0
    }

    .g-1,
    .gx-1 {
        --bs-gutter-x: 0.25rem
    }

    .g-1,
    .gy-1 {
        --bs-gutter-y: 0.25rem
    }

    .g-2,
    .gx-2 {
        --bs-gutter-x: 0.5rem
    }

    .g-2,
    .gy-2 {
        --bs-gutter-y: 0.5rem
    }

    .g-3,
    .gx-3 {
        --bs-gutter-x: 1rem
    }

    .g-3,
    .gy-3 {
        --bs-gutter-y: 1rem
    }

    .g-4,
    .gx-4 {
        --bs-gutter-x: 1.5rem
    }

    .g-4,
    .gy-4 {
        --bs-gutter-y: 1.5rem
    }

    .g-5,
    .gx-5 {
        --bs-gutter-x: 3rem
    }

    .g-5,
    .gy-5 {
        --bs-gutter-y: 3rem
    }

    @media (min-width:576px) {
        .col-sm {
            flex: 1 0 0%
        }

        .row-cols-sm-auto>* {
            flex: 0 0 auto;
            width: auto
        }

        .row-cols-sm-1>* {
            flex: 0 0 auto;
            width: 100%
        }

        .row-cols-sm-2>* {
            flex: 0 0 auto;
            width: 50%
        }

        .row-cols-sm-3>* {
            flex: 0 0 auto;
            width: 33.333333%
        }

        .row-cols-sm-4>* {
            flex: 0 0 auto;
            width: 25%
        }

        .row-cols-sm-5>* {
            flex: 0 0 auto;
            width: 20%
        }

        .row-cols-sm-6>* {
            flex: 0 0 auto;
            width: 16.666667%
        }

        .col-sm-auto {
            flex: 0 0 auto;
            width: auto
        }

        .col-sm-1 {
            flex: 0 0 auto;
            width: 8.333333%
        }

        .col-sm-2 {
            flex: 0 0 auto;
            width: 16.666667%
        }

        .col-sm-3 {
            flex: 0 0 auto;
            width: 25%
        }

        .col-sm-4 {
            flex: 0 0 auto;
            width: 33.333333%
        }

        .col-sm-5 {
            flex: 0 0 auto;
            width: 41.666667%
        }

        .col-sm-6 {
            flex: 0 0 auto;
            width: 50%
        }

        .col-sm-7 {
            flex: 0 0 auto;
            width: 58.333333%
        }

        .col-sm-8 {
            flex: 0 0 auto;
            width: 66.666667%
        }

        .col-sm-9 {
            flex: 0 0 auto;
            width: 75%
        }

        .col-sm-10 {
            flex: 0 0 auto;
            width: 83.333333%
        }

        .col-sm-11 {
            flex: 0 0 auto;
            width: 91.666667%
        }

        .col-sm-12 {
            flex: 0 0 auto;
            width: 100%
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

        .g-sm-0,
        .gx-sm-0 {
            --bs-gutter-x: 0
        }

        .g-sm-0,
        .gy-sm-0 {
            --bs-gutter-y: 0
        }

        .g-sm-1,
        .gx-sm-1 {
            --bs-gutter-x: 0.25rem
        }

        .g-sm-1,
        .gy-sm-1 {
            --bs-gutter-y: 0.25rem
        }

        .g-sm-2,
        .gx-sm-2 {
            --bs-gutter-x: 0.5rem
        }

        .g-sm-2,
        .gy-sm-2 {
            --bs-gutter-y: 0.5rem
        }

        .g-sm-3,
        .gx-sm-3 {
            --bs-gutter-x: 1rem
        }

        .g-sm-3,
        .gy-sm-3 {
            --bs-gutter-y: 1rem
        }

        .g-sm-4,
        .gx-sm-4 {
            --bs-gutter-x: 1.5rem
        }

        .g-sm-4,
        .gy-sm-4 {
            --bs-gutter-y: 1.5rem
        }

        .g-sm-5,
        .gx-sm-5 {
            --bs-gutter-x: 3rem
        }

        .g-sm-5,
        .gy-sm-5 {
            --bs-gutter-y: 3rem
        }
    }

    @media (min-width:768px) {
        .col-md {
            flex: 1 0 0%
        }

        .row-cols-md-auto>* {
            flex: 0 0 auto;
            width: auto
        }

        .row-cols-md-1>* {
            flex: 0 0 auto;
            width: 100%
        }

        .row-cols-md-2>* {
            flex: 0 0 auto;
            width: 50%
        }

        .row-cols-md-3>* {
            flex: 0 0 auto;
            width: 33.333333%
        }

        .row-cols-md-4>* {
            flex: 0 0 auto;
            width: 25%
        }

        .row-cols-md-5>* {
            flex: 0 0 auto;
            width: 20%
        }

        .row-cols-md-6>* {
            flex: 0 0 auto;
            width: 16.666667%
        }

        .col-md-auto {
            flex: 0 0 auto;
            width: auto
        }

        .col-md-1 {
            flex: 0 0 auto;
            width: 8.333333%
        }

        .col-md-2 {
            flex: 0 0 auto;
            width: 16.666667%
        }

        .col-md-3 {
            flex: 0 0 auto;
            width: 25%
        }

        .col-md-4 {
            flex: 0 0 auto;
            width: 33.333333%
        }

        .col-md-5 {
            flex: 0 0 auto;
            width: 41.666667%
        }

        .col-md-6 {
            flex: 0 0 auto;
            width: 50%
        }

        .col-md-7 {
            flex: 0 0 auto;
            width: 58.333333%
        }

        .col-md-8 {
            flex: 0 0 auto;
            width: 66.666667%
        }

        .col-md-9 {
            flex: 0 0 auto;
            width: 75%
        }

        .col-md-10 {
            flex: 0 0 auto;
            width: 83.333333%
        }

        .col-md-11 {
            flex: 0 0 auto;
            width: 91.666667%
        }

        .col-md-12 {
            flex: 0 0 auto;
            width: 100%
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

        .g-md-0,
        .gx-md-0 {
            --bs-gutter-x: 0
        }

        .g-md-0,
        .gy-md-0 {
            --bs-gutter-y: 0
        }

        .g-md-1,
        .gx-md-1 {
            --bs-gutter-x: 0.25rem
        }

        .g-md-1,
        .gy-md-1 {
            --bs-gutter-y: 0.25rem
        }

        .g-md-2,
        .gx-md-2 {
            --bs-gutter-x: 0.5rem
        }

        .g-md-2,
        .gy-md-2 {
            --bs-gutter-y: 0.5rem
        }

        .g-md-3,
        .gx-md-3 {
            --bs-gutter-x: 1rem
        }

        .g-md-3,
        .gy-md-3 {
            --bs-gutter-y: 1rem
        }

        .g-md-4,
        .gx-md-4 {
            --bs-gutter-x: 1.5rem
        }

        .g-md-4,
        .gy-md-4 {
            --bs-gutter-y: 1.5rem
        }

        .g-md-5,
        .gx-md-5 {
            --bs-gutter-x: 3rem
        }

        .g-md-5,
        .gy-md-5 {
            --bs-gutter-y: 3rem
        }
    }

    @media (min-width:992px) {
        .col-lg {
            flex: 1 0 0%
        }

        .row-cols-lg-auto>* {
            flex: 0 0 auto;
            width: auto
        }

        .row-cols-lg-1>* {
            flex: 0 0 auto;
            width: 100%
        }

        .row-cols-lg-2>* {
            flex: 0 0 auto;
            width: 50%
        }

        .row-cols-lg-3>* {
            flex: 0 0 auto;
            width: 33.333333%
        }

        .row-cols-lg-4>* {
            flex: 0 0 auto;
            width: 25%
        }

        .row-cols-lg-5>* {
            flex: 0 0 auto;
            width: 20%
        }

        .row-cols-lg-6>* {
            flex: 0 0 auto;
            width: 16.666667%
        }

        .col-lg-auto {
            flex: 0 0 auto;
            width: auto
        }

        .col-lg-1 {
            flex: 0 0 auto;
            width: 8.333333%
        }

        .col-lg-2 {
            flex: 0 0 auto;
            width: 16.666667%
        }

        .col-lg-3 {
            flex: 0 0 auto;
            width: 25%
        }

        .col-lg-4 {
            flex: 0 0 auto;
            width: 33.333333%
        }

        .col-lg-5 {
            flex: 0 0 auto;
            width: 41.666667%
        }

        .col-lg-6 {
            flex: 0 0 auto;
            width: 50%
        }

        .col-lg-7 {
            flex: 0 0 auto;
            width: 58.333333%
        }

        .col-lg-8 {
            flex: 0 0 auto;
            width: 66.666667%
        }

        .col-lg-9 {
            flex: 0 0 auto;
            width: 75%
        }

        .col-lg-10 {
            flex: 0 0 auto;
            width: 83.333333%
        }

        .col-lg-11 {
            flex: 0 0 auto;
            width: 91.666667%
        }

        .col-lg-12 {
            flex: 0 0 auto;
            width: 100%
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

        .g-lg-0,
        .gx-lg-0 {
            --bs-gutter-x: 0
        }

        .g-lg-0,
        .gy-lg-0 {
            --bs-gutter-y: 0
        }

        .g-lg-1,
        .gx-lg-1 {
            --bs-gutter-x: 0.25rem
        }

        .g-lg-1,
        .gy-lg-1 {
            --bs-gutter-y: 0.25rem
        }

        .g-lg-2,
        .gx-lg-2 {
            --bs-gutter-x: 0.5rem
        }

        .g-lg-2,
        .gy-lg-2 {
            --bs-gutter-y: 0.5rem
        }

        .g-lg-3,
        .gx-lg-3 {
            --bs-gutter-x: 1rem
        }

        .g-lg-3,
        .gy-lg-3 {
            --bs-gutter-y: 1rem
        }

        .g-lg-4,
        .gx-lg-4 {
            --bs-gutter-x: 1.5rem
        }

        .g-lg-4,
        .gy-lg-4 {
            --bs-gutter-y: 1.5rem
        }

        .g-lg-5,
        .gx-lg-5 {
            --bs-gutter-x: 3rem
        }

        .g-lg-5,
        .gy-lg-5 {
            --bs-gutter-y: 3rem
        }
    }

    @media (min-width:1200px) {
        .col-xl {
            flex: 1 0 0%
        }

        .row-cols-xl-auto>* {
            flex: 0 0 auto;
            width: auto
        }

        .row-cols-xl-1>* {
            flex: 0 0 auto;
            width: 100%
        }

        .row-cols-xl-2>* {
            flex: 0 0 auto;
            width: 50%
        }

        .row-cols-xl-3>* {
            flex: 0 0 auto;
            width: 33.333333%
        }

        .row-cols-xl-4>* {
            flex: 0 0 auto;
            width: 25%
        }

        .row-cols-xl-5>* {
            flex: 0 0 auto;
            width: 20%
        }

        .row-cols-xl-6>* {
            flex: 0 0 auto;
            width: 16.666667%
        }

        .col-xl-auto {
            flex: 0 0 auto;
            width: auto
        }

        .col-xl-1 {
            flex: 0 0 auto;
            width: 8.333333%
        }

        .col-xl-2 {
            flex: 0 0 auto;
            width: 16.666667%
        }

        .col-xl-3 {
            flex: 0 0 auto;
            width: 25%
        }

        .col-xl-4 {
            flex: 0 0 auto;
            width: 33.333333%
        }

        .col-xl-5 {
            flex: 0 0 auto;
            width: 41.666667%
        }

        .col-xl-6 {
            flex: 0 0 auto;
            width: 50%
        }

        .col-xl-7 {
            flex: 0 0 auto;
            width: 58.333333%
        }

        .col-xl-8 {
            flex: 0 0 auto;
            width: 66.666667%
        }

        .col-xl-9 {
            flex: 0 0 auto;
            width: 75%
        }

        .col-xl-10 {
            flex: 0 0 auto;
            width: 83.333333%
        }

        .col-xl-11 {
            flex: 0 0 auto;
            width: 91.666667%
        }

        .col-xl-12 {
            flex: 0 0 auto;
            width: 100%
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

        .g-xl-0,
        .gx-xl-0 {
            --bs-gutter-x: 0
        }

        .g-xl-0,
        .gy-xl-0 {
            --bs-gutter-y: 0
        }

        .g-xl-1,
        .gx-xl-1 {
            --bs-gutter-x: 0.25rem
        }

        .g-xl-1,
        .gy-xl-1 {
            --bs-gutter-y: 0.25rem
        }

        .g-xl-2,
        .gx-xl-2 {
            --bs-gutter-x: 0.5rem
        }

        .g-xl-2,
        .gy-xl-2 {
            --bs-gutter-y: 0.5rem
        }

        .g-xl-3,
        .gx-xl-3 {
            --bs-gutter-x: 1rem
        }

        .g-xl-3,
        .gy-xl-3 {
            --bs-gutter-y: 1rem
        }

        .g-xl-4,
        .gx-xl-4 {
            --bs-gutter-x: 1.5rem
        }

        .g-xl-4,
        .gy-xl-4 {
            --bs-gutter-y: 1.5rem
        }

        .g-xl-5,
        .gx-xl-5 {
            --bs-gutter-x: 3rem
        }

        .g-xl-5,
        .gy-xl-5 {
            --bs-gutter-y: 3rem
        }
    }

    @media (min-width:1400px) {
        .col-xxl {
            flex: 1 0 0%
        }

        .row-cols-xxl-auto>* {
            flex: 0 0 auto;
            width: auto
        }

        .row-cols-xxl-1>* {
            flex: 0 0 auto;
            width: 100%
        }

        .row-cols-xxl-2>* {
            flex: 0 0 auto;
            width: 50%
        }

        .row-cols-xxl-3>* {
            flex: 0 0 auto;
            width: 33.333333%
        }

        .row-cols-xxl-4>* {
            flex: 0 0 auto;
            width: 25%
        }

        .row-cols-xxl-5>* {
            flex: 0 0 auto;
            width: 20%
        }

        .row-cols-xxl-6>* {
            flex: 0 0 auto;
            width: 16.666667%
        }

        .col-xxl-auto {
            flex: 0 0 auto;
            width: auto
        }

        .col-xxl-1 {
            flex: 0 0 auto;
            width: 8.333333%
        }

        .col-xxl-2 {
            flex: 0 0 auto;
            width: 16.666667%
        }

        .col-xxl-3 {
            flex: 0 0 auto;
            width: 25%
        }

        .col-xxl-4 {
            flex: 0 0 auto;
            width: 33.333333%
        }

        .col-xxl-5 {
            flex: 0 0 auto;
            width: 41.666667%
        }

        .col-xxl-6 {
            flex: 0 0 auto;
            width: 50%
        }

        .col-xxl-7 {
            flex: 0 0 auto;
            width: 58.333333%
        }

        .col-xxl-8 {
            flex: 0 0 auto;
            width: 66.666667%
        }

        .col-xxl-9 {
            flex: 0 0 auto;
            width: 75%
        }

        .col-xxl-10 {
            flex: 0 0 auto;
            width: 83.333333%
        }

        .col-xxl-11 {
            flex: 0 0 auto;
            width: 91.666667%
        }

        .col-xxl-12 {
            flex: 0 0 auto;
            width: 100%
        }

        .offset-xxl-0 {
            margin-left: 0
        }

        .offset-xxl-1 {
            margin-left: 8.333333%
        }

        .offset-xxl-2 {
            margin-left: 16.666667%
        }

        .offset-xxl-3 {
            margin-left: 25%
        }

        .offset-xxl-4 {
            margin-left: 33.333333%
        }

        .offset-xxl-5 {
            margin-left: 41.666667%
        }

        .offset-xxl-6 {
            margin-left: 50%
        }

        .offset-xxl-7 {
            margin-left: 58.333333%
        }

        .offset-xxl-8 {
            margin-left: 66.666667%
        }

        .offset-xxl-9 {
            margin-left: 75%
        }

        .offset-xxl-10 {
            margin-left: 83.333333%
        }

        .offset-xxl-11 {
            margin-left: 91.666667%
        }

        .g-xxl-0,
        .gx-xxl-0 {
            --bs-gutter-x: 0
        }

        .g-xxl-0,
        .gy-xxl-0 {
            --bs-gutter-y: 0
        }

        .g-xxl-1,
        .gx-xxl-1 {
            --bs-gutter-x: 0.25rem
        }

        .g-xxl-1,
        .gy-xxl-1 {
            --bs-gutter-y: 0.25rem
        }

        .g-xxl-2,
        .gx-xxl-2 {
            --bs-gutter-x: 0.5rem
        }

        .g-xxl-2,
        .gy-xxl-2 {
            --bs-gutter-y: 0.5rem
        }

        .g-xxl-3,
        .gx-xxl-3 {
            --bs-gutter-x: 1rem
        }

        .g-xxl-3,
        .gy-xxl-3 {
            --bs-gutter-y: 1rem
        }

        .g-xxl-4,
        .gx-xxl-4 {
            --bs-gutter-x: 1.5rem
        }

        .g-xxl-4,
        .gy-xxl-4 {
            --bs-gutter-y: 1.5rem
        }

        .g-xxl-5,
        .gx-xxl-5 {
            --bs-gutter-x: 3rem
        }

        .g-xxl-5,
        .gy-xxl-5 {
            --bs-gutter-y: 3rem
        }
    }

    .table {
        --bs-table-bg: transparent;
        --bs-table-accent-bg: transparent;
        --bs-table-striped-color: #212529;
        --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
        --bs-table-active-color: #212529;
        --bs-table-active-bg: rgba(0, 0, 0, 0.1);
        --bs-table-hover-color: #212529;
        --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        vertical-align: top;
        border-color: #dee2e6
    }

    .table>:not(caption)>*>* {
        padding: .5rem .5rem;
        background-color: var(--bs-table-bg);
        background-image: linear-gradient(var(--bs-table-accent-bg), var(--bs-table-accent-bg));
        border-bottom-width: 1px
    }

    .table>tbody {
        vertical-align: inherit
    }

    .table>thead {
        vertical-align: bottom
    }

    .table>:not(:last-child)>:last-child>* {
        border-bottom-color: currentColor
    }

    .caption-top {
        caption-side: top
    }

    .table-sm>:not(caption)>*>* {
        padding: .25rem .25rem
    }

    .table-bordered>:not(caption)>* {
        border-width: 1px 0
    }

    .table-bordered>:not(caption)>*>* {
        border-width: 0 1px
    }

    .table-borderless>:not(caption)>*>* {
        border-bottom-width: 0
    }

    .table-striped>tbody>tr:nth-of-type(odd) {
        --bs-table-accent-bg: var(--bs-table-striped-bg);
        color: var(--bs-table-striped-color)
    }

    .table-active {
        --bs-table-accent-bg: var(--bs-table-active-bg);
        color: var(--bs-table-active-color)
    }

    .table-hover>tbody>tr:hover {
        --bs-table-accent-bg: var(--bs-table-hover-bg);
        color: var(--bs-table-hover-color)
    }

    .table-primary {
        --bs-table-bg: #bbd6fe;
        --bs-table-striped-bg: #b3cdf3;
        --bs-table-striped-color: #212529;
        --bs-table-active-bg: #acc4e9;
        --bs-table-active-color: #212529;
        --bs-table-hover-bg: #afc9ee;
        --bs-table-hover-color: #212529;
        color: #212529;
        border-color: #acc4e9
    }

    .table-secondary {
        --bs-table-bg: #d6d8db;
        --bs-table-striped-bg: #cdcfd2;
        --bs-table-striped-color: #212529;
        --bs-table-active-bg: #c4c6c9;
        --bs-table-active-color: #212529;
        --bs-table-hover-bg: #c8cbce;
        --bs-table-hover-color: #212529;
        color: #212529;
        border-color: #c4c6c9
    }

    .table-success {
        --bs-table-bg: #c3e6cb;
        --bs-table-striped-bg: #bbdcc3;
        --bs-table-striped-color: #212529;
        --bs-table-active-bg: #b3d3bb;
        --bs-table-active-color: #212529;
        --bs-table-hover-bg: #b7d8bf;
        --bs-table-hover-color: #212529;
        color: #212529;
        border-color: #b3d3bb
    }

    .table-info {
        --bs-table-bg: #bee5eb;
        --bs-table-striped-bg: #b6dbe1;
        --bs-table-striped-color: #212529;
        --bs-table-active-bg: #aed2d8;
        --bs-table-active-color: #212529;
        --bs-table-hover-bg: #b2d7dc;
        --bs-table-hover-color: #212529;
        color: #212529;
        border-color: #aed2d8
    }

    .table-warning {
        --bs-table-bg: #ffeeba;
        --bs-table-striped-bg: #f4e4b3;
        --bs-table-striped-color: #212529;
        --bs-table-active-bg: #e9daac;
        --bs-table-active-color: #212529;
        --bs-table-hover-bg: #eedfaf;
        --bs-table-hover-color: #212529;
        color: #212529;
        border-color: #e9daac
    }

    .table-danger {
        --bs-table-bg: #f5c6cb;
        --bs-table-striped-bg: #eabec3;
        --bs-table-striped-color: #212529;
        --bs-table-active-bg: #e0b6bb;
        --bs-table-active-color: #212529;
        --bs-table-hover-bg: #e5babf;
        --bs-table-hover-color: #212529;
        color: #212529;
        border-color: #e0b6bb
    }

    .table-light {
        --bs-table-bg: #f8f9fa;
        --bs-table-striped-bg: #edeef0;
        --bs-table-striped-color: #212529;
        --bs-table-active-bg: #e3e4e5;
        --bs-table-active-color: #212529;
        --bs-table-hover-bg: #e8e9ea;
        --bs-table-hover-color: #212529;
        color: #212529;
        border-color: #e3e4e5
    }

    .table-dark {
        --bs-table-bg: #343a40;
        --bs-table-striped-bg: #3e444a;
        --bs-table-striped-color: #fff;
        --bs-table-active-bg: #484e53;
        --bs-table-active-color: #fff;
        --bs-table-hover-bg: #43494e;
        --bs-table-hover-color: #fff;
        color: #fff;
        border-color: #484e53
    }

    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }

    @media (max-width:575.98px) {
        .table-responsive-sm {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }
    }

    @media (max-width:767.98px) {
        .table-responsive-md {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }
    }

    @media (max-width:991.98px) {
        .table-responsive-lg {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }
    }

    @media (max-width:1199.98px) {
        .table-responsive-xl {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }
    }

    @media (max-width:1399.98px) {
        .table-responsive-xxl {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }
    }

    .form-label {
        margin-bottom: .5rem
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
        font-size: 1.25rem
    }

    .col-form-label-sm {
        padding-top: calc(.25rem + 1px);
        padding-bottom: calc(.25rem + 1px);
        font-size: .875rem
    }

    .form-text {
        margin-top: .25rem;
        font-size: .875em;
        color: #6c757d
    }

    .form-control {
        display: block;
        width: 100%;
        min-height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .form-control {
            transition: none
        }
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #8bbafe;
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .25)
    }

    .form-control::-webkit-input-placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control::-moz-placeholder {
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

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1
    }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding: .375rem 0;
        margin-bottom: 0;
        line-height: 1.5;
        color: #212529;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0
    }

    .form-control-plaintext.form-control-lg,
    .form-control-plaintext.form-control-sm {
        padding-right: 0;
        padding-left: 0
    }

    .form-control-sm {
        min-height: calc(1.5em + .5rem + 2px);
        padding: .25rem .5rem;
        font-size: .875rem;
        border-radius: .2rem
    }

    .form-control-lg {
        min-height: calc(1.5em + 1rem + 2px);
        padding: .5rem 1rem;
        font-size: 1.25rem;
        border-radius: .3rem
    }

    .form-control-color {
        max-width: 3rem;
        padding: .375rem
    }

    .form-control-color::-moz-color-swatch {
        border-radius: .25rem
    }

    .form-control-color::-webkit-color-swatch {
        border-radius: .25rem
    }

    .form-select {
        display: block;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem 1.75rem .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background-color: #fff;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right .75rem center;
        background-size: 16px 12px;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none
    }

    .form-select:focus {
        border-color: #8bbafe;
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .25)
    }

    .form-select:focus::-ms-value {
        color: #495057;
        background-color: #fff
    }

    .form-select[multiple],
    .form-select[size]:not([size="1"]) {
        height: auto;
        padding-right: .75rem;
        background-image: none
    }

    .form-select:disabled {
        color: #6c757d;
        background-color: #e9ecef
    }

    .form-select:-moz-focusring {
        color: transparent;
        text-shadow: 0 0 0 #495057
    }

    .form-select-sm {
        height: calc(1.5em + .5rem + 2px);
        padding-top: .25rem;
        padding-bottom: .25rem;
        padding-left: .5rem;
        font-size: .875rem
    }

    .form-select-lg {
        height: calc(1.5em + 1rem + 2px);
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        font-size: 1.25rem
    }

    .form-check {
        display: block;
        min-height: 1.5rem;
        padding-left: 1.75em;
        margin-bottom: .125rem
    }

    .form-check .form-check-input {
        float: left;
        margin-left: -1.75em
    }

    .form-check-input {
        width: 1.25em;
        height: 1.25em;
        margin-top: .125em;
        vertical-align: top;
        background-color: #fff;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        border: 1px solid rgba(0, 0, 0, .25);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        -webkit-print-color-adjust: exact;
        color-adjust: exact;
        transition: background-color .15s ease-in-out, background-position .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .form-check-input {
            transition: none
        }
    }

    .form-check-input[type=checkbox] {
        border-radius: .25em
    }

    .form-check-input[type=radio] {
        border-radius: 50%
    }

    .form-check-input:active {
        -webkit-filter: brightness(90%);
        filter: brightness(90%)
    }

    .form-check-input:focus {
        border-color: #8bbafe;
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .25)
    }

    .form-check-input:checked {
        background-color: #0d6efd;
        border-color: #0d6efd
    }

    .form-check-input:checked[type=checkbox] {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e")
    }

    .form-check-input:checked[type=radio] {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e")
    }

    .form-check-input[type=checkbox]:indeterminate {
        background-color: #0d6efd;
        border-color: #0d6efd;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e")
    }

    .form-check-input:disabled {
        pointer-events: none;
        -webkit-filter: none;
        filter: none;
        opacity: .5
    }

    .form-check-input:disabled~.form-check-label,
    .form-check-input[disabled]~.form-check-label {
        opacity: .5
    }

    .form-switch {
        padding-left: 2.5em
    }

    .form-switch .form-check-input {
        width: 2em;
        margin-left: -2.5em;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
        background-position: left center;
        border-radius: 2em
    }

    .form-switch .form-check-input:focus {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%238bbafe'/%3e%3c/svg%3e")
    }

    .form-switch .form-check-input:checked {
        background-position: right center;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")
    }

    .form-check-inline {
        display: inline-block;
        margin-right: 1rem
    }

    .btn-check {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none
    }

    .form-file {
        --bs-form-file-height: calc(1.5em + 0.75rem + 2px);
        position: relative
    }

    .form-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: var(--bs-form-file-height);
        margin: 0;
        opacity: 0
    }

    .form-file-input:focus-within~.form-file-label {
        border-color: #8bbafe;
        box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .25)
    }

    .form-file-input:disabled~.form-file-label .form-file-text,
    .form-file-input[disabled]~.form-file-label .form-file-text {
        background-color: #e9ecef
    }

    .form-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        display: flex;
        height: var(--bs-form-file-height);
        border-color: #ced4da;
        border-radius: .25rem
    }

    .form-file-text {
        display: block;
        flex-grow: 1;
        padding: .375rem .75rem;
        overflow: hidden;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-overflow: ellipsis;
        white-space: nowrap;
        background-color: #fff;
        border-color: inherit;
        border-style: solid;
        border-width: 1px;
        border-top-left-radius: inherit;
        border-bottom-left-radius: inherit
    }


    .form-file-sm {
        --bs-form-file-height: calc(1.5em + 0.5rem + 2px);
        font-size: .875rem
    }

    .form-file-sm .form-file-text {
        padding: .25rem .5rem
    }

    .form-file-lg {
        --bs-form-file-height: calc(1.5em + 1rem + 2px);
        font-size: 1.25rem
    }

    .form-file-lg
    .form-file-lg .form-file-text {
        padding: .5rem 1rem
    }

    .form-range {
        width: 100%;
        height: 1.4rem;
        padding: 0;
        background-color: transparent;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none
    }

    .form-range:focus {
        outline: 0
    }

    .form-range:focus::-webkit-slider-thumb {
        box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(13, 110, 253, .25)
    }

    .form-range:focus::-moz-range-thumb {
        box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(13, 110, 253, .25)
    }

    .form-range:focus::-ms-thumb {
        box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(13, 110, 253, .25)
    }

    .form-range::-moz-focus-outer {
        border: 0
    }

    .form-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -.25rem;
        background-color: #0d6efd;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        -webkit-appearance: none;
        appearance: none
    }

    @media (prefers-reduced-motion:reduce) {
        .form-range::-webkit-slider-thumb {
            -webkit-transition: none;
            transition: none
        }
    }

    .form-range::-webkit-slider-thumb:active {
        background-color: #bed8fe
    }

    .form-range::-webkit-slider-runnable-track {
        width: 100%;
        height: .5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
        border-radius: 1rem
    }

    .form-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: #0d6efd;
        border: 0;
        border-radius: 1rem;
        -moz-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        -moz-appearance: none;
        appearance: none
    }

    @media (prefers-reduced-motion:reduce) {
        .form-range::-moz-range-thumb {
            -moz-transition: none;
            transition: none
        }
    }

    .form-range::-moz-range-thumb:active {
        background-color: #bed8fe
    }

    .form-range::-moz-range-track {
        width: 100%;
        height: .5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
        border-radius: 1rem
    }

    .form-range::-ms-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: 0;
        margin-right: .2rem;
        margin-left: .2rem;
        background-color: #0d6efd;
        border: 0;
        border-radius: 1rem;
        -ms-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        appearance: none
    }

    @media (prefers-reduced-motion:reduce) {
        .form-range::-ms-thumb {
            -ms-transition: none;
            transition: none
        }
    }

    .form-range::-ms-thumb:active {
        background-color: #bed8fe
    }

    .form-range::-ms-track {
        width: 100%;
        height: .5rem;
        color: transparent;
        cursor: pointer;
        background-color: transparent;
        border-color: transparent;
        border-width: .5rem
    }

    .form-range::-ms-fill-lower {
        background-color: #dee2e6;
        border-radius: 1rem
    }

    .form-range::-ms-fill-upper {
        margin-right: 15px;
        background-color: #dee2e6;
        border-radius: 1rem
    }

    .form-range:disabled {
        pointer-events: none
    }

    .form-range:disabled::-webkit-slider-thumb {
        background-color: #adb5bd
    }

    .form-range:disabled::-moz-range-thumb {
        background-color: #adb5bd
    }

    .form-range:disabled::-ms-thumb {
        background-color: #adb5bd
    }

    .input-group {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        width: 100%
    }

    .input-group>.form-control,
    .input-group>.form-file,
    .input-group>.form-select {
        position: relative;
        flex: 1 1 auto;
        width: 1%;
        min-width: 0
    }

    .input-group>.form-control:focus,
    .input-group>.form-file .form-file-input:focus~.form-file-label,
    .input-group>.form-select:focus {
        z-index: 3
    }

    .input-group>.form-file>.form-file-input:focus {
        z-index: 4
    }

    .input-group>.form-file:not(:last-child)>.form-file-label {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group>.form-file:not(:first-child)>.form-file-label {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .input-group .btn {
        position: relative;
        z-index: 2
    }

    .input-group .btn:focus {
        z-index: 3
    }

    .input-group-text {
        display: flex;
        align-items: center;
        padding: .375rem .75rem;
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

    .input-group-lg>.form-control {
        min-height: calc(1.5em + 1rem + 2px)
    }

    .input-group-lg>.form-select {
        height: calc(1.5em + 1rem + 2px)
    }

    .input-group-lg>.btn,
    .input-group-lg>.form-control,
    .input-group-lg>.form-select,
    .input-group-lg>.input-group-text {
        padding: .5rem 1rem;
        font-size: 1.25rem;
        border-radius: .3rem
    }

    .input-group-sm>.form-control {
        min-height: calc(1.5em + .5rem + 2px)
    }

    .input-group-sm>.form-select {
        height: calc(1.5em + .5rem + 2px)
    }

    .input-group-sm>.btn,
    .input-group-sm>.form-control,
    .input-group-sm>.form-select,
    .input-group-sm>.input-group-text {
        padding: .25rem .5rem;
        font-size: .875rem;
        border-radius: .2rem
    }

    .input-group-lg>.form-select,
    .input-group-sm>.form-select {
        padding-right: 1.75rem
    }

    .input-group>.dropdown-toggle:nth-last-child(n+3),
    .input-group>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group>:not(:first-child):not(.dropdown-menu) {
        margin-left: -1px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: .25rem;
        font-size: .875em;
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
        color: #fff;
        background-color: rgba(40, 167, 69, .9);
        border-radius: .25rem
    }

    .is-valid~.valid-feedback,
    .is-valid~.valid-tooltip,
    .was-validated :valid~.valid-feedback,
    .was-validated :valid~.valid-tooltip {
        display: block
    }

    .form-control.is-valid,
    .was-validated .form-control:valid {
        border-color: #28a745;
        padding-right: calc(1.5em + .75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(.375em + .1875rem) center;
        background-size: calc(.75em + .375rem) calc(.75em + .375rem)
    }

    .form-control.is-valid:focus,
    .was-validated .form-control:valid:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
    }

    .was-validated textarea.form-control:valid,
    textarea.form-control.is-valid {
        padding-right: calc(1.5em + .75rem);
        background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
    }

    .form-select.is-valid,
    .was-validated .form-select:valid {
        border-color: #28a745;
        padding-right: calc(.75em + 2.3125rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-position: right .75rem center, center right 1.75rem;
        background-size: 16px 12px, calc(.75em + .375rem) calc(.75em + .375rem)
    }

    .form-select.is-valid:focus,
    .was-validated .form-select:valid:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
    }

    .form-check-input.is-valid,
    .was-validated .form-check-input:valid {
        border-color: #28a745
    }

    .form-check-input.is-valid:checked,
    .was-validated .form-check-input:valid:checked {
        background-color: #28a745
    }

    .form-check-input.is-valid:focus,
    .was-validated .form-check-input:valid:focus {
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
    }

    .form-check-input.is-valid~.form-check-label,
    .was-validated .form-check-input:valid~.form-check-label {
        color: #28a745
    }

    .form-check-inline .form-check-input~.valid-feedback {
        margin-left: .5em
    }

    .form-file-input.is-valid~.form-file-label,
    .was-validated .form-file-input:valid~.form-file-label {
        border-color: #28a745
    }

    .form-file-input.is-valid:focus~.form-file-label,
    .was-validated .form-file-input:valid:focus~.form-file-label {
        border-color: #28a745;
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: .25rem;
        font-size: .875em;
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
        color: #fff;
        background-color: rgba(220, 53, 69, .9);
        border-radius: .25rem
    }

    .is-invalid~.invalid-feedback,
    .is-invalid~.invalid-tooltip,
    .was-validated :invalid~.invalid-feedback,
    .was-validated :invalid~.invalid-tooltip {
        display: block
    }

    .form-control.is-invalid,
    .was-validated .form-control:invalid {
        border-color: #dc3545;
        padding-right: calc(1.5em + .75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(.375em + .1875rem) center;
        background-size: calc(.75em + .375rem) calc(.75em + .375rem)
    }

    .form-control.is-invalid:focus,
    .was-validated .form-control:invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
    }

    .was-validated textarea.form-control:invalid,
    textarea.form-control.is-invalid {
        padding-right: calc(1.5em + .75rem);
        background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
    }

    .form-select.is-invalid,
    .was-validated .form-select:invalid {
        border-color: #dc3545;
        padding-right: calc(.75em + 2.3125rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
        background-position: right .75rem center, center right 1.75rem;
        background-size: 16px 12px, calc(.75em + .375rem) calc(.75em + .375rem)
    }

    .form-select.is-invalid:focus,
    .was-validated .form-select:invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
    }

    .form-check-input.is-invalid,
    .was-validated .form-check-input:invalid {
        border-color: #dc3545
    }

    .form-check-input.is-invalid:checked,
    .was-validated .form-check-input:invalid:checked {
        background-color: #dc3545
    }

    .form-check-input.is-invalid:focus,
    .was-validated .form-check-input:invalid:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
    }

    .form-check-input.is-invalid~.form-check-label,
    .was-validated .form-check-input:invalid~.form-check-label {
        color: #dc3545
    }

    .form-check-inline .form-check-input~.invalid-feedback {
        margin-left: .5em
    }

    .form-file-input.is-invalid~.form-file-label,
    .was-validated .form-file-input:invalid~.form-file-label {
        border-color: #dc3545
    }

    .form-file-input.is-invalid:focus~.form-file-label,
    .was-validated .form-file-input:invalid:focus~.form-file-label {
        border-color: #dc3545;
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: center;
        text-decoration: none;
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
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .btn {
            transition: none
        }
    }

    .btn:hover {
        color: #212529
    }

    .btn-check:focus+.btn,
    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .25)
    }

    .btn.disabled,
    .btn:disabled,
    fieldset:disabled .btn {
        pointer-events: none;
        opacity: .65
    }

    .btn-primary {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #025ce2;
        border-color: #0257d5
    }

    .btn-check:focus+.btn-primary,
    .btn-primary:focus {
        color: #fff;
        background-color: #025ce2;
        border-color: #0257d5;
        box-shadow: 0 0 0 .2rem rgba(49, 132, 253, .5)
    }

    .btn-check:active+.btn-primary,
    .btn-check:checked+.btn-primary,
    .btn-primary.active,
    .btn-primary:active,
    .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #0257d5;
        border-color: #0252c9
    }

    .btn-check:active+.btn-primary:focus,
    .btn-check:checked+.btn-primary:focus,
    .btn-primary.active:focus,
    .btn-primary:active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(49, 132, 253, .5)
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd
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

    .btn-check:focus+.btn-secondary,
    .btn-secondary:focus {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
        box-shadow: 0 0 0 .2rem rgba(130, 138, 145, .5)
    }

    .btn-check:active+.btn-secondary,
    .btn-check:checked+.btn-secondary,
    .btn-secondary.active,
    .btn-secondary:active,
    .show>.btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #545b62;
        border-color: #4e555b
    }

    .btn-check:active+.btn-secondary:focus,
    .btn-check:checked+.btn-secondary:focus,
    .btn-secondary.active:focus,
    .btn-secondary:active:focus,
    .show>.btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(130, 138, 145, .5)
    }

    .btn-secondary.disabled,
    .btn-secondary:disabled {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d
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

    .btn-check:focus+.btn-info,
    .btn-info:focus {
        color: #fff;
        background-color: #138496;
        border-color: #117a8b;
        box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
    }

    .btn-check:active+.btn-info,
    .btn-check:checked+.btn-info,
    .btn-info.active,
    .btn-info:active,
    .show>.btn-info.dropdown-toggle {
        color: #fff;
        background-color: #117a8b;
        border-color: #10707f
    }

    .btn-check:active+.btn-info:focus,
    .btn-check:checked+.btn-info:focus,
    .btn-info.active:focus,
    .btn-info:active:focus,
    .show>.btn-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
    }

    .btn-info.disabled,
    .btn-info:disabled {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8
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

    .btn-check:focus+.btn-warning,
    .btn-warning:focus {
        color: #212529;
        background-color: #e0a800;
        border-color: #d39e00;
        box-shadow: 0 0 0 .2rem rgba(222, 170, 12, .5)
    }

    .btn-check:active+.btn-warning,
    .btn-check:checked+.btn-warning,
    .btn-warning.active,
    .btn-warning:active,
    .show>.btn-warning.dropdown-toggle {
        color: #212529;
        background-color: #d39e00;
        border-color: #c69500
    }

    .btn-check:active+.btn-warning:focus,
    .btn-check:checked+.btn-warning:focus,
    .btn-warning.active:focus,
    .btn-warning:active:focus,
    .show>.btn-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(222, 170, 12, .5)
    }

    .btn-warning.disabled,
    .btn-warning:disabled {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107
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

    .btn-check:focus+.btn-danger,
    .btn-danger:focus {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130;
        box-shadow: 0 0 0 .2rem rgba(225, 83, 97, .5)
    }

    .btn-check:active+.btn-danger,
    .btn-check:checked+.btn-danger,
    .btn-danger.active,
    .btn-danger:active,
    .show>.btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #bd2130;
        border-color: #b21f2d
    }

    .btn-check:active+.btn-danger:focus,
    .btn-check:checked+.btn-danger:focus,
    .btn-danger.active:focus,
    .btn-danger:active:focus,
    .show>.btn-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(225, 83, 97, .5)
    }

    .btn-danger.disabled,
    .btn-danger:disabled {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
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

    .btn-check:focus+.btn-light,
    .btn-light:focus {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5;
        box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
    }

    .btn-check:active+.btn-light,
    .btn-check:checked+.btn-light,
    .btn-light.active,
    .btn-light:active,
    .show>.btn-light.dropdown-toggle {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df
    }

    .btn-check:active+.btn-light:focus,
    .btn-check:checked+.btn-light:focus,
    .btn-light.active:focus,
    .btn-light:active:focus,
    .show>.btn-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
    }

    .btn-light.disabled,
    .btn-light:disabled {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
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

    .btn-check:focus+.btn-dark,
    .btn-dark:focus {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124;
        box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
    }

    .btn-check:active+.btn-dark,
    .btn-check:checked+.btn-dark,
    .btn-dark.active,
    .btn-dark:active,
    .show>.btn-dark.dropdown-toggle {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d
    }

    .btn-check:active+.btn-dark:focus,
    .btn-check:checked+.btn-dark:focus,
    .btn-dark.active:focus,
    .btn-dark:active:focus,
    .show>.btn-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
    }

    .btn-dark.disabled,
    .btn-dark:disabled {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-outline-primary {
        color: #0d6efd;
        border-color: #0d6efd
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd
    }

    .btn-check:focus+.btn-outline-primary,
    .btn-outline-primary:focus {
        box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .5)
    }

    .btn-check:active+.btn-outline-primary,
    .btn-check:checked+.btn-outline-primary,
    .btn-outline-primary.active,
    .btn-outline-primary.dropdown-toggle.show,
    .btn-outline-primary:active {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd
    }

    .btn-check:active+.btn-outline-primary:focus,
    .btn-check:checked+.btn-outline-primary:focus,
    .btn-outline-primary.active:focus,
    .btn-outline-primary.dropdown-toggle.show:focus,
    .btn-outline-primary:active:focus {
        box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .5)
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
        color: #0d6efd;
        background-color: transparent
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

    .btn-check:focus+.btn-outline-secondary,
    .btn-outline-secondary:focus {
        box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
    }

    .btn-check:active+.btn-outline-secondary,
    .btn-check:checked+.btn-outline-secondary,
    .btn-outline-secondary.active,
    .btn-outline-secondary.dropdown-toggle.show,
    .btn-outline-secondary:active {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d
    }

    .btn-check:active+.btn-outline-secondary:focus,
    .btn-check:checked+.btn-outline-secondary:focus,
    .btn-outline-secondary.active:focus,
    .btn-outline-secondary.dropdown-toggle.show:focus,
    .btn-outline-secondary:active:focus {
        box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
    }

    .btn-outline-secondary.disabled,
    .btn-outline-secondary:disabled {
        color: #6c757d;
        background-color: transparent
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

    .btn-check:focus+.btn-outline-success,
    .btn-outline-success:focus {
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
    }

    .btn-check:active+.btn-outline-success,
    .btn-check:checked+.btn-outline-success,
    .btn-outline-success.active,
    .btn-outline-success.dropdown-toggle.show,
    .btn-outline-success:active {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745
    }

    .btn-check:active+.btn-outline-success:focus,
    .btn-check:checked+.btn-outline-success:focus,
    .btn-outline-success.active:focus,
    .btn-outline-success.dropdown-toggle.show:focus,
    .btn-outline-success:active:focus {
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
    }

    .btn-outline-success.disabled,
    .btn-outline-success:disabled {
        color: #28a745;
        background-color: transparent
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

    .btn-check:focus+.btn-outline-info,
    .btn-outline-info:focus {
        box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
    }

    .btn-check:active+.btn-outline-info,
    .btn-check:checked+.btn-outline-info,
    .btn-outline-info.active,
    .btn-outline-info.dropdown-toggle.show,
    .btn-outline-info:active {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8
    }

    .btn-check:active+.btn-outline-info:focus,
    .btn-check:checked+.btn-outline-info:focus,
    .btn-outline-info.active:focus,
    .btn-outline-info.dropdown-toggle.show:focus,
    .btn-outline-info:active:focus {
        box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
    }

    .btn-outline-info.disabled,
    .btn-outline-info:disabled {
        color: #17a2b8;
        background-color: transparent
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

    .btn-check:focus+.btn-outline-warning,
    .btn-outline-warning:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
    }

    .btn-check:active+.btn-outline-warning,
    .btn-check:checked+.btn-outline-warning,
    .btn-outline-warning.active,
    .btn-outline-warning.dropdown-toggle.show,
    .btn-outline-warning:active {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107
    }

    .btn-check:active+.btn-outline-warning:focus,
    .btn-check:checked+.btn-outline-warning:focus,
    .btn-outline-warning.active:focus,
    .btn-outline-warning.dropdown-toggle.show:focus,
    .btn-outline-warning:active:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
    }

    .btn-outline-warning.disabled,
    .btn-outline-warning:disabled {
        color: #ffc107;
        background-color: transparent
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

    .btn-check:focus+.btn-outline-danger,
    .btn-outline-danger:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-check:active+.btn-outline-danger,
    .btn-check:checked+.btn-outline-danger,
    .btn-outline-danger.active,
    .btn-outline-danger.dropdown-toggle.show,
    .btn-outline-danger:active {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-check:active+.btn-outline-danger:focus,
    .btn-check:checked+.btn-outline-danger:focus,
    .btn-outline-danger.active:focus,
    .btn-outline-danger.dropdown-toggle.show:focus,
    .btn-outline-danger:active:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-outline-danger.disabled,
    .btn-outline-danger:disabled {
        color: #dc3545;
        background-color: transparent
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

    .btn-check:focus+.btn-outline-light,
    .btn-outline-light:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
    }

    .btn-check:active+.btn-outline-light,
    .btn-check:checked+.btn-outline-light,
    .btn-outline-light.active,
    .btn-outline-light.dropdown-toggle.show,
    .btn-outline-light:active {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-check:active+.btn-outline-light:focus,
    .btn-check:checked+.btn-outline-light:focus,
    .btn-outline-light.active:focus,
    .btn-outline-light.dropdown-toggle.show:focus,
    .btn-outline-light:active:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
    }

    .btn-outline-light.disabled,
    .btn-outline-light:disabled {
        color: #f8f9fa;
        background-color: transparent
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

    .btn-check:focus+.btn-outline-dark,
    .btn-outline-dark:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .btn-check:active+.btn-outline-dark,
    .btn-check:checked+.btn-outline-dark,
    .btn-outline-dark.active,
    .btn-outline-dark.dropdown-toggle.show,
    .btn-outline-dark:active {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-check:active+.btn-outline-dark:focus,
    .btn-check:checked+.btn-outline-dark:focus,
    .btn-outline-dark.active:focus,
    .btn-outline-dark.dropdown-toggle.show:focus,
    .btn-outline-dark:active:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .btn-outline-dark.disabled,
    .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent
    }

    .btn-link {
        font-weight: 400;
        color: #0d6efd;
        text-decoration: underline
    }

    .btn-link:hover {
        color: #024dbc
    }

    .btn-link.disabled,
    .btn-link:disabled {
        color: #6c757d
    }

    .btn-group-lg>.btn,
    .btn-lg {
        padding: .5rem 1rem;
        font-size: 1.25rem;
        border-radius: .3rem
    }

    .btn-group-sm>.btn,
    .btn-sm {
        padding: .25rem .5rem;
        font-size: .875rem;
        border-radius: .2rem
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
        height: 0;
        overflow: hidden;
        transition: height .35s ease
    }

    @media (prefers-reduced-motion:reduce) {
        .collapsing {
            transition: none
        }
    }

    .dropdown,
    .dropleft,
    .dropright,
    .dropup {
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
        min-width: 10rem;
        padding: .5rem 0;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
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

    @media (min-width:576px) {
        .dropdown-menu-sm-left {
            right: auto;
            left: 0
        }

        .dropdown-menu-sm-right {
            right: 0;
            left: auto
        }
    }

    @media (min-width:768px) {
        .dropdown-menu-md-left {
            right: auto;
            left: 0
        }

        .dropdown-menu-md-right {
            right: 0;
            left: auto
        }
    }

    @media (min-width:992px) {
        .dropdown-menu-lg-left {
            right: auto;
            left: 0
        }

        .dropdown-menu-lg-right {
            right: 0;
            left: auto
        }
    }

    @media (min-width:1200px) {
        .dropdown-menu-xl-left {
            right: auto;
            left: 0
        }

        .dropdown-menu-xl-right {
            right: 0;
            left: auto
        }
    }

    @media (min-width:1400px) {
        .dropdown-menu-xxl-left {
            right: auto;
            left: 0
        }

        .dropdown-menu-xxl-right {
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

    .dropdown-menu[x-placement^=bottom],
    .dropdown-menu[x-placement^=left],
    .dropdown-menu[x-placement^=right],
    .dropdown-menu[x-placement^=top] {
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
        padding: .25rem 1rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        text-decoration: none;
        white-space: nowrap;
        background-color: transparent;
        border: 0
    }

    .dropdown-item:focus,
    .dropdown-item:hover {
        color: #16181b;
        background-color: #f8f9fa
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #0d6efd
    }

    .dropdown-item.disabled,
    .dropdown-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: transparent
    }

    .dropdown-menu.show {
        display: block
    }

    .dropdown-header {
        display: block;
        padding: .5rem 1rem;
        margin-bottom: 0;
        font-size: .875rem;
        color: #6c757d;
        white-space: nowrap
    }

    .dropdown-item-text {
        display: block;
        padding: .25rem 1rem;
        color: #212529
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: inline-flex;
        vertical-align: middle
    }

    .btn-group-vertical>.btn,
    .btn-group>.btn {
        position: relative;
        flex: 1 1 auto
    }

    .btn-group-vertical>.btn-check:checked+.btn,
    .btn-group-vertical>.btn-check:focus+.btn,
    .btn-group-vertical>.btn.active,
    .btn-group-vertical>.btn:active,
    .btn-group-vertical>.btn:focus,
    .btn-group-vertical>.btn:hover,
    .btn-group>.btn-check:checked+.btn,
    .btn-group>.btn-check:focus+.btn,
    .btn-group>.btn.active,
    .btn-group>.btn:active,
    .btn-group>.btn:focus,
    .btn-group>.btn:hover {
        z-index: 1
    }

    .btn-toolbar {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start
    }

    .btn-toolbar .input-group {
        width: auto
    }

    .btn-group>.btn-group:not(:first-child),
    .btn-group>.btn:not(:first-child) {
        margin-left: -1px
    }

    .btn-group>.btn-group:not(:last-child)>.btn,
    .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .btn-group>.btn-group:not(:first-child)>.btn,
    .btn-group>.btn:nth-child(n+3),
    .btn-group>:not(.btn-check)+.btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .dropdown-toggle-split {
        padding-right: .5625rem;
        padding-left: .5625rem
    }

    .dropdown-toggle-split::after,
    .dropright .dropdown-toggle-split::after,
    .dropup .dropdown-toggle-split::after {
        margin-left: 0
    }

    .dropleft .dropdown-toggle-split::before {
        margin-right: 0
    }

    .btn-group-sm>.btn+.dropdown-toggle-split,
    .btn-sm+.dropdown-toggle-split {
        padding-right: .375rem;
        padding-left: .375rem
    }

    .btn-group-lg>.btn+.dropdown-toggle-split,
    .btn-lg+.dropdown-toggle-split {
        padding-right: .75rem;
        padding-left: .75rem
    }

    .btn-group-vertical {
        flex-direction: column;
        align-items: flex-start;
        justify-content: center
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group {
        width: 100%
    }

    .btn-group-vertical>.btn-group:not(:first-child),
    .btn-group-vertical>.btn:not(:first-child) {
        margin-top: -1px
    }

    .btn-group-vertical>.btn-group:not(:last-child)>.btn,
    .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group-vertical>.btn-group:not(:first-child)>.btn,
    .btn-group-vertical>.btn:not(:first-child) {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .nav {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .nav-link {
        display: block;
        padding: .5rem 1rem;
        text-decoration: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .nav-link {
            transition: none
        }
    }

    .nav-link.disabled {
        color: #6c757d;
        pointer-events: none;
        cursor: default
    }

    .nav-tabs {
        border-bottom: 1px solid #dee2e6
    }

    .nav-tabs .nav-link {
        margin-bottom: -1px;
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
        border-color: #e9ecef #e9ecef #dee2e6
    }

    .nav-tabs .nav-link.disabled {
        color: #6c757d;
        background-color: transparent;
        border-color: transparent
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
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

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #0d6efd
    }

    .nav-fill .nav-item,
    .nav-fill>.nav-link {
        flex: 1 1 auto;
        text-align: center
    }

    .nav-justified .nav-item,
    .nav-justified>.nav-link {
        flex-basis: 0;
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
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .navbar>.container,
    .navbar>.container-fluid,
    .navbar>.container-lg,
    .navbar>.container-md,
    .navbar>.container-sm,
    .navbar>.container-xl,
    .navbar>.container-xxl {
        display: flex;
        flex-wrap: inherit;
        align-items: center;
        justify-content: space-between
    }

    .navbar-brand {
        padding-top: .3125rem;
        padding-bottom: .3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        text-decoration: none;
        white-space: nowrap
    }

    .navbar-nav {
        display: flex;
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
        position: static
    }

    .navbar-text {
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .navbar-collapse {
        align-items: center;
        width: 100%
    }

    .navbar-toggler {
        padding: .25rem .75rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: box-shadow .15s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .navbar-toggler {
            transition: none
        }
    }

    .navbar-toggler:hover {
        text-decoration: none
    }

    .navbar-toggler:focus {
        text-decoration: none;
        outline: 0;
        box-shadow: 0 0 0 .2rem
    }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100%
    }

    @media (min-width:576px) {
        .navbar-expand-sm {
            flex-wrap: nowrap;
            justify-content: flex-start
        }

        .navbar-expand-sm .navbar-nav {
            flex-direction: row
        }

        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-sm .navbar-collapse {
            display: flex !important
        }

        .navbar-expand-sm .navbar-toggler {
            display: none
        }
    }

    @media (min-width:768px) {
        .navbar-expand-md {
            flex-wrap: nowrap;
            justify-content: flex-start
        }

        .navbar-expand-md .navbar-nav {
            flex-direction: row
        }

        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-md .navbar-collapse {
            display: flex !important
        }

        .navbar-expand-md .navbar-toggler {
            display: none
        }
    }

    @media (min-width:992px) {
        .navbar-expand-lg {
            flex-wrap: nowrap;
            justify-content: flex-start
        }

        .navbar-expand-lg .navbar-nav {
            flex-direction: row
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-lg .navbar-collapse {
            display: flex !important
        }

        .navbar-expand-lg .navbar-toggler {
            display: none
        }
    }

    @media (min-width:1200px) {
        .navbar-expand-xl {
            flex-wrap: nowrap;
            justify-content: flex-start
        }

        .navbar-expand-xl .navbar-nav {
            flex-direction: row
        }

        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-xl .navbar-collapse {
            display: flex !important
        }

        .navbar-expand-xl .navbar-toggler {
            display: none
        }
    }

    @media (min-width:1400px) {
        .navbar-expand-xxl {
            flex-wrap: nowrap;
            justify-content: flex-start
        }

        .navbar-expand-xxl .navbar-nav {
            flex-direction: row
        }

        .navbar-expand-xxl .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-xxl .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-xxl .navbar-collapse {
            display: flex !important
        }

        .navbar-expand-xxl .navbar-toggler {
            display: none
        }
    }

    .navbar-expand {
        flex-wrap: nowrap;
        justify-content: flex-start
    }

    .navbar-expand .navbar-nav {
        flex-direction: row
    }

    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand .navbar-collapse {
        display: flex !important
    }

    .navbar-expand .navbar-toggler {
        display: none
    }

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, .55)
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: rgba(0, 0, 0, .7)
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, .3)
    }

    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .show>.nav-link {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, .55);
        border-color: rgba(0, 0, 0, .1)
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, .55)
    }

    .navbar-light .navbar-text a,
    .navbar-light .navbar-text a:focus,
    .navbar-light .navbar-text a:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-dark .navbar-brand {
        color: #fff
    }

    .navbar-dark .navbar-brand:focus,
    .navbar-dark .navbar-brand:hover {
        color: #fff
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .55)
    }

    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link:hover {
        color: rgba(255, 255, 255, .75)
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, .25)
    }

    .navbar-dark .navbar-nav .nav-link.active,
    .navbar-dark .navbar-nav .show>.nav-link {
        color: #fff
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, .55);
        border-color: rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, .55)
    }

    .navbar-dark .navbar-text a,
    .navbar-dark .navbar-text a:focus,
    .navbar-dark .navbar-text a:hover {
        color: #fff
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem
    }
    .card-item1{
        border-radius: 100px !important;
    }

    .card>hr {
        margin-right: 0;
        margin-left: 0
    }

    .card>.list-group {
        border-top: inherit;
        border-bottom: inherit
    }

    .card>.list-group:first-child {
        border-top-width: 0;
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px)
    }

    .card>.list-group:last-child {
        border-bottom-width: 0;
        border-bottom-right-radius: calc(.25rem - 1px);
        border-bottom-left-radius: calc(.25rem - 1px)
    }

    .card>.card-header+.list-group,
    .card>.list-group+.card-footer {
        border-top: 0
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1rem 1rem;
        background-colour: cadetblue;
    position: relative;
    }

    .card-title {
        margin-bottom: .5rem
    }

    .card-subtitle {
        margin-top: -.25rem;
        margin-bottom: 0
    }

    .card-text:last-child {
        margin-bottom: 0
    }

    .card-link:hover {
        text-decoration: none
    }

    .card-link+.card-link {
        margin-left: 1rem
    }

    .card-header {
        padding: .5rem 1rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125)
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
    }

    .card-footer {
        padding: .5rem 1rem;
        background-color: rgba(0, 0, 0, .03);
        border-top: 1px solid rgba(0, 0, 0, .125)
    }

    .card-footer:last-child {
        border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
    }

    .card-header-tabs {
        margin-right: -.5rem;
        margin-bottom: -.5rem;
        margin-left: -.5rem;
        border-bottom: 0
    }

    .card-header-pills {
        margin-right: -.5rem;
        margin-left: -.5rem
    }

    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1rem;
        border-radius: calc(.25rem - 1px)
    }

    .card-img,
    .card-img-bottom,
    .card-img-top {
        width: 100%
    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px)
    }

    .card-img,
    .card-img-bottom {
        border-bottom-right-radius: calc(.25rem - 1px);
        border-bottom-left-radius: calc(.25rem - 1px)
    }

    .card-group>.card {
        margin-bottom: .75rem
    }

    @media (min-width:576px) {
        .card-group {
            display: flex;
            flex-flow: row wrap
        }

        .card-group>.card {
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

        .card-group>.card:not(:last-child) .card-header,
        .card-group>.card:not(:last-child) .card-img-top {
            border-top-right-radius: 0
        }

        .card-group>.card:not(:last-child) .card-footer,
        .card-group>.card:not(:last-child) .card-img-bottom {
            border-bottom-right-radius: 0
        }

        .card-group>.card:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .card-group>.card:not(:first-child) .card-header,
        .card-group>.card:not(:first-child) .card-img-top {
            border-top-left-radius: 0
        }

        .card-group>.card:not(:first-child) .card-footer,
        .card-group>.card:not(:first-child) .card-img-bottom {
            border-bottom-left-radius: 0
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
        display: flex;
        flex-wrap: wrap;
        padding: .5rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #e9ecef;
        border-radius: .25rem
    }

    .breadcrumb-item {
        display: flex
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

    .breadcrumb-item.active {
        color: #6c757d
    }

    .pagination {
        display: flex;
        padding-left: 0;
        list-style: none
    }

    .page-link {
        position: relative;
        display: block;
        color: #0d6efd;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #dee2e6
    }

    .page-link:hover {
        z-index: 2;
        color: #024dbc;
        background-color: #e9ecef;
        border-color: #dee2e6
    }

    .page-link:focus {
        z-index: 3;
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .25)
    }

    .page-item:not(:first-child) .page-link {
        margin-left: -1px
    }

    .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd
    }

    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff;
        border-color: #dee2e6
    }

    .page-link {
        padding: .375rem .75rem
    }

    .page-item:first-child .page-link {
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .page-item:last-child .page-link {
        border-top-right-radius: .25rem;
        border-bottom-right-radius: .25rem
    }

    .pagination-lg .page-link {
        padding: .75rem 1.5rem;
        font-size: 1.25rem
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
        font-size: .875rem
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
        padding: .25em .5em;
        font-size: .75em;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem
    }

    .badge:empty {
        display: none
    }

    .btn .badge {
        position: relative;
        top: -1px
    }

    .alert {
        position: relative;
        padding: 1rem 1rem;
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
        padding-right: 3.5rem
    }

    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 1rem 1rem;
        color: inherit
    }

    .alert-primary {
        color: #073984;
        background-color: #cfe2ff;
        border-color: #bbd6fe
    }

    .alert-primary .alert-link {
        color: #042454
    }

    .alert-secondary {
        color: #383d41;
        background-color: #e2e3e5;
        border-color: #d6d8db
    }

    .alert-secondary .alert-link {
        color: #202326
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb
    }

    .alert-success .alert-link {
        color: #0b2e13
    }

    .alert-info {
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb
    }

    .alert-info .alert-link {
        color: #062c33
    }

    .alert-warning {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba
    }

    .alert-warning .alert-link {
        color: #533f03
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb
    }

    .alert-danger .alert-link {
        color: #491217
    }

    .alert-light {
        color: #818182;
        background-color: #fefefe;
        border-color: #fdfdfe
    }

    .alert-light .alert-link {
        color: #686868
    }

    .alert-dark {
        color: #1b1e21;
        background-color: #d6d8d9;
        border-color: #c6c8ca
    }

    .alert-dark .alert-link {
        color: #040505
    }

    @-webkit-keyframes progress-bar-stripes {
        0% {
            background-position-x: 1rem
        }
    }

    @keyframes progress-bar-stripes {
        0% {
            background-position-x: 1rem
        }
    }

    .progress {
        display: flex;
        height: 1rem;
        overflow: hidden;
        font-size: .75rem;
        background-color: #e9ecef;
        border-radius: .25rem
    }

    .progress-bar {
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #0d6efd;
        transition: width .6s ease
    }

    @media (prefers-reduced-motion:reduce) {
        .progress-bar {
            transition: none
        }
    }

    .progress-bar-striped {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
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

    .list-group {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        border-radius: .25rem
    }

    .list-group-item-action {
        width: 100%;
        color: #495057;
        text-align: inherit
    }

    .list-group-item-action:focus,
    .list-group-item-action:hover {
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
        padding: .5rem 1rem;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .125)
    }

    .list-group-item:first-child {
        border-top-left-radius: inherit;
        border-top-right-radius: inherit
    }

    .list-group-item:last-child {
        border-bottom-right-radius: inherit;
        border-bottom-left-radius: inherit
    }

    .list-group-item.disabled,
    .list-group-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd
    }

    .list-group-item+.list-group-item {
        border-top-width: 0
    }

    .list-group-item+.list-group-item.active {
        margin-top: -1px;
        border-top-width: 1px
    }

    .list-group-horizontal {
        flex-direction: row
    }

    .list-group-horizontal>.list-group-item:first-child {
        border-bottom-left-radius: .25rem;
        border-top-right-radius: 0
    }

    .list-group-horizontal>.list-group-item:last-child {
        border-top-right-radius: .25rem;
        border-bottom-left-radius: 0
    }

    .list-group-horizontal>.list-group-item.active {
        margin-top: 0
    }

    .list-group-horizontal>.list-group-item+.list-group-item {
        border-top-width: 1px;
        border-left-width: 0
    }

    .list-group-horizontal>.list-group-item+.list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px
    }

    @media (min-width:576px) {
        .list-group-horizontal-sm {
            flex-direction: row
        }

        .list-group-horizontal-sm>.list-group-item:first-child {
            border-bottom-left-radius: .25rem;
            border-top-right-radius: 0
        }

        .list-group-horizontal-sm>.list-group-item:last-child {
            border-top-right-radius: .25rem;
            border-bottom-left-radius: 0
        }

        .list-group-horizontal-sm>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal-sm>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0
        }

        .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px
        }
    }

    @media (min-width:768px) {
        .list-group-horizontal-md {
            flex-direction: row
        }

        .list-group-horizontal-md>.list-group-item:first-child {
            border-bottom-left-radius: .25rem;
            border-top-right-radius: 0
        }

        .list-group-horizontal-md>.list-group-item:last-child {
            border-top-right-radius: .25rem;
            border-bottom-left-radius: 0
        }

        .list-group-horizontal-md>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal-md>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0
        }

        .list-group-horizontal-md>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px
        }
    }

    @media (min-width:992px) {
        .list-group-horizontal-lg {
            flex-direction: row
        }

        .list-group-horizontal-lg>.list-group-item:first-child {
            border-bottom-left-radius: .25rem;
            border-top-right-radius: 0
        }

        .list-group-horizontal-lg>.list-group-item:last-child {
            border-top-right-radius: .25rem;
            border-bottom-left-radius: 0
        }

        .list-group-horizontal-lg>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal-lg>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0
        }

        .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px
        }
    }

    @media (min-width:1200px) {
        .list-group-horizontal-xl {
            flex-direction: row
        }

        .list-group-horizontal-xl>.list-group-item:first-child {
            border-bottom-left-radius: .25rem;
            border-top-right-radius: 0
        }

        .list-group-horizontal-xl>.list-group-item:last-child {
            border-top-right-radius: .25rem;
            border-bottom-left-radius: 0
        }

        .list-group-horizontal-xl>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal-xl>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0
        }

        .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px
        }
    }

    @media (min-width:1400px) {
        .list-group-horizontal-xxl {
            flex-direction: row
        }

        .list-group-horizontal-xxl>.list-group-item:first-child {
            border-bottom-left-radius: .25rem;
            border-top-right-radius: 0
        }

        .list-group-horizontal-xxl>.list-group-item:last-child {
            border-top-right-radius: .25rem;
            border-bottom-left-radius: 0
        }

        .list-group-horizontal-xxl>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal-xxl>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0
        }

        .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px
        }
    }

    .list-group-flush {
        border-radius: 0
    }

    .list-group-flush>.list-group-item {
        border-width: 0 0 1px
    }

    .list-group-flush>.list-group-item:last-child {
        border-bottom-width: 0
    }

    .list-group-item-primary {
        color: #073984;
        background-color: #bbd6fe
    }

    .list-group-item-primary.list-group-item-action:focus,
    .list-group-item-primary.list-group-item-action:hover {
        color: #073984;
        background-color: #a2c7fe
    }

    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #073984;
        border-color: #073984
    }

    .list-group-item-secondary {
        color: #383d41;
        background-color: #d6d8db
    }

    .list-group-item-secondary.list-group-item-action:focus,
    .list-group-item-secondary.list-group-item-action:hover {
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

    .list-group-item-success.list-group-item-action:focus,
    .list-group-item-success.list-group-item-action:hover {
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

    .list-group-item-info.list-group-item-action:focus,
    .list-group-item-info.list-group-item-action:hover {
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

    .list-group-item-warning.list-group-item-action:focus,
    .list-group-item-warning.list-group-item-action:hover {
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

    .list-group-item-danger.list-group-item-action:focus,
    .list-group-item-danger.list-group-item-action:hover {
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

    .list-group-item-light.list-group-item-action:focus,
    .list-group-item-light.list-group-item-action:hover {
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

    .list-group-item-dark.list-group-item-action:focus,
    .list-group-item-dark.list-group-item-action:hover {
        color: #1b1e21;
        background-color: #b9bbbe
    }

    .list-group-item-dark.list-group-item-action.active {
        color: #fff;
        background-color: #1b1e21;
        border-color: #1b1e21
    }

    /* .close {
        font-size: calc(1.275rem + .3vw);
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5
    } */
/*
    @media (min-width:1200px) {
        .close {
            font-size: 1.5rem
        }
    } */

    /* .close:hover {
        color: #000;
        text-decoration: none
    } */
/*
    .close:focus,
    .close:hover {
        opacity: .75
    } */

    /* .close.disabled,
    .close:disabled {
        pointer-events: none
    } */


    .toast {
        max-width: 350px;
        overflow: hidden;
        font-size: .875rem;
        background-color: rgba(255, 255, 255, .85);
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .1);
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15);
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
        display: flex;
        align-items: center;
        padding: .25rem .75rem;
        color: #6c757d;
        background-color: rgba(255, 255, 255, .85);
        background-clip: padding-box;
        border-bottom: 1px solid rgba(0, 0, 0, .05)
    }

    .toast-body {
        padding: .75rem
    }


    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: var(--bs-font-sans-serif);
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

    .tooltip .tooltip-arrow {
        position: absolute;
        display: block;
        width: .8rem;
        height: .4rem
    }

    .tooltip .tooltip-arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid
    }

    .bs-tooltip-auto[x-placement^=top],
    .bs-tooltip-top {
        padding: .4rem 0
    }

    .bs-tooltip-auto[x-placement^=top] .tooltip-arrow,
    .bs-tooltip-top .tooltip-arrow {
        bottom: 0
    }

    .bs-tooltip-auto[x-placement^=top] .tooltip-arrow::before,
    .bs-tooltip-top .tooltip-arrow::before {
        top: 0;
        border-width: .4rem .4rem 0;
        border-top-color: #000
    }

    .bs-tooltip-auto[x-placement^=right],
    .bs-tooltip-right {
        padding: 0 .4rem
    }

    .bs-tooltip-auto[x-placement^=right] .tooltip-arrow,
    .bs-tooltip-right .tooltip-arrow {
        left: 0;
        width: .4rem;
        height: .8rem
    }

    .bs-tooltip-auto[x-placement^=right] .tooltip-arrow::before,
    .bs-tooltip-right .tooltip-arrow::before {
        right: 0;
        border-width: .4rem .4rem .4rem 0;
        border-right-color: #000
    }

    .bs-tooltip-auto[x-placement^=bottom],
    .bs-tooltip-bottom {
        padding: .4rem 0
    }

    .bs-tooltip-auto[x-placement^=bottom] .tooltip-arrow,
    .bs-tooltip-bottom .tooltip-arrow {
        top: 0
    }

    .bs-tooltip-auto[x-placement^=bottom] .tooltip-arrow::before,
    .bs-tooltip-bottom .tooltip-arrow::before {
        bottom: 0;
        border-width: 0 .4rem .4rem;
        border-bottom-color: #000
    }

    .bs-tooltip-auto[x-placement^=left],
    .bs-tooltip-left {
        padding: 0 .4rem
    }

    .bs-tooltip-auto[x-placement^=left] .tooltip-arrow,
    .bs-tooltip-left .tooltip-arrow {
        right: 0;
        width: .4rem;
        height: .8rem
    }

    .bs-tooltip-auto[x-placement^=left] .tooltip-arrow::before,
    .bs-tooltip-left .tooltip-arrow::before {
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
        font-family: var(--bs-font-sans-serif);
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
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem
    }

    .popover .popover-arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: .5rem;
        margin: 0 .3rem
    }

    .popover .popover-arrow::after,
    .popover .popover-arrow::before {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid
    }

    .bs-popover-auto[x-placement^=top],
    .bs-popover-top {
        margin-bottom: .5rem
    }

    .bs-popover-auto[x-placement^=top]>.popover-arrow,
    .bs-popover-top>.popover-arrow {
        bottom: calc(-.5rem - 1px)
    }

    .bs-popover-auto[x-placement^=top]>.popover-arrow::before,
    .bs-popover-top>.popover-arrow::before {
        bottom: 0;
        border-width: .5rem .5rem 0;
        border-top-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=top]>.popover-arrow::after,
    .bs-popover-top>.popover-arrow::after {
        bottom: 1px;
        border-width: .5rem .5rem 0;
        border-top-color: #fff
    }

    .bs-popover-auto[x-placement^=right],
    .bs-popover-right {
        margin-left: .5rem
    }

    .bs-popover-auto[x-placement^=right]>.popover-arrow,
    .bs-popover-right>.popover-arrow {
        left: calc(-.5rem - 1px);
        width: .5rem;
        height: 1rem;
        margin: .3rem 0
    }

    .bs-popover-auto[x-placement^=right]>.popover-arrow::before,
    .bs-popover-right>.popover-arrow::before {
        left: 0;
        border-width: .5rem .5rem .5rem 0;
        border-right-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=right]>.popover-arrow::after,
    .bs-popover-right>.popover-arrow::after {
        left: 1px;
        border-width: .5rem .5rem .5rem 0;
        border-right-color: #fff
    }

    .bs-popover-auto[x-placement^=bottom],
    .bs-popover-bottom {
        margin-top: .5rem
    }

    .bs-popover-auto[x-placement^=bottom]>.popover-arrow,
    .bs-popover-bottom>.popover-arrow {
        top: calc(-.5rem - 1px)
    }

    .bs-popover-auto[x-placement^=bottom]>.popover-arrow::before,
    .bs-popover-bottom>.popover-arrow::before {
        top: 0;
        border-width: 0 .5rem .5rem .5rem;
        border-bottom-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=bottom]>.popover-arrow::after,
    .bs-popover-bottom>.popover-arrow::after {
        top: 1px;
        border-width: 0 .5rem .5rem .5rem;
        border-bottom-color: #fff
    }

    .bs-popover-auto[x-placement^=bottom] .popover-header::before,
    .bs-popover-bottom .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -.5rem;
        content: "";
        border-bottom: 1px solid #f7f7f7
    }

    .bs-popover-auto[x-placement^=left],
    .bs-popover-left {
        margin-right: .5rem
    }

    .bs-popover-auto[x-placement^=left]>.popover-arrow,
    .bs-popover-left>.popover-arrow {
        right: calc(-.5rem - 1px);
        width: .5rem;
        height: 1rem;
        margin: .3rem 0
    }

    .bs-popover-auto[x-placement^=left]>.popover-arrow::before,
    .bs-popover-left>.popover-arrow::before {
        right: 0;
        border-width: .5rem 0 .5rem .5rem;
        border-left-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=left]>.popover-arrow::after,
    .bs-popover-left>.popover-arrow::after {
        right: 1px;
        border-width: .5rem 0 .5rem .5rem;
        border-left-color: #fff
    }

    .popover-header {
        padding: .5rem 1rem;
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
        padding: 1rem 1rem;
        color: #212529
    }

    .carousel {
        position: relative
    }

    .carousel.pointer-event {
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
        transition: transform .6s ease-in-out
    }

    @media (prefers-reduced-motion:reduce) {
        .carousel-item {
            transition: none
        }
    }

    .carousel-item-next,
    .carousel-item-prev,
    .carousel-item.active {
        display: block
    }

    .active.carousel-item-right,
    .carousel-item-next:not(.carousel-item-left) {
        transform: translateX(100%)
    }

    .active.carousel-item-left,
    .carousel-item-prev:not(.carousel-item-right) {
        transform: translateX(-100%)
    }

    .carousel-fade .carousel-item {
        opacity: 0;
        transition-property: opacity;
        transform: none
    }

    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right,
    .carousel-fade .carousel-item.active {
        z-index: 1;
        opacity: 1
    }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        z-index: 0;
        opacity: 0;
        transition: opacity 0s .6s
    }

    @media (prefers-reduced-motion:reduce) {

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            transition: none
        }
    }

    .carousel-control-next,
    .carousel-control-prev {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: .5;
        transition: opacity .15s ease
    }

    @media (prefers-reduced-motion:reduce) {

        .carousel-control-next,
        .carousel-control-prev {
            transition: none
        }
    }

    .carousel-control-next:focus,
    .carousel-control-next:hover,
    .carousel-control-prev:focus,
    .carousel-control-prev:hover {
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

    .carousel-control-next-icon,
    .carousel-control-prev-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background-repeat: no-repeat;
        background-position: 50%;
        background-size: 100% 100%
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e")
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e")
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 2;
        display: flex;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none
    }

    .carousel-indicators li {
        box-sizing: content-box;
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
        bottom: 1.25rem;
        left: 15%;
        padding-top: 1.25rem;
        padding-bottom: 1.25rem;
        color: #fff;
        text-align: center
    }

    @-webkit-keyframes spinner-border {
        to {
            transform: rotate(360deg)
        }
    }

    @keyframes spinner-border {
        to {
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
            transform: scale(0)
        }

        50% {
            opacity: 1;
            transform: none
        }
    }

    @keyframes spinner-grow {
        0% {
            transform: scale(0)
        }

        50% {
            opacity: 1;
            transform: none
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

    .clearfix::after {
        display: block;
        clear: both;
        content: ""
    }

    .link-primary {
        color: #0d6efd
    }

    .link-primary:focus,
    .link-primary:hover {
        color: #024dbc
    }

    .link-secondary {
        color: #6c757d
    }

    .link-secondary:focus,
    .link-secondary:hover {
        color: #494f54
    }

    .link-success {
        color: #28a745
    }

    .link-success:focus,
    .link-success:hover {
        color: #19692c
    }

    .link-info {
        color: #17a2b8
    }

    .link-info:focus,
    .link-info:hover {
        color: #0f6674
    }

    .link-warning {
        color: #ffc107
    }

    .link-warning:focus,
    .link-warning:hover {
        color: #ba8b00
    }

    .link-danger {
        color: #dc3545
    }

    .link-danger:focus,
    .link-danger:hover {
        color: #a71d2a
    }

    .link-light {
        color: #f8f9fa
    }

    .link-light:focus,
    .link-light:hover {
        color: #cbd3da
    }

    .link-dark {
        color: #343a40
    }

    .link-dark:focus,
    .link-dark:hover {
        color: #121416
    }

    .embed-responsive {
        position: relative;
        width: 100%
    }

    .embed-responsive::before {
        display: block;
        content: ""
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive embed,
    .embed-responsive iframe,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
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

    .sticky-top {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 1020
    }

    @media (min-width:576px) {
        .sticky-sm-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }
    }

    @media (min-width:768px) {
        .sticky-md-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }
    }

    @media (min-width:992px) {
        .sticky-lg-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }
    }

    @media (min-width:1200px) {
        .sticky-xl-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }
    }

    @media (min-width:1400px) {
        .sticky-xxl-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }
    }

    .sr-only,
    .sr-only-focusable:not(:focus) {
        position: absolute !important;
        width: 1px !important;
        height: 1px !important;
        padding: 0 !important;
        margin: -1px !important;
        overflow: hidden !important;
        clip: rect(0, 0, 0, 0) !important;
        white-space: nowrap !important;
        border: 0 !important
    }

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        content: ""
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .align-baseline {
        vertical-align: baseline !important
    }

    .align-top {
        vertical-align: top !important
    }

    .align-middle {
        vertical-align: middle !important
    }

    .align-bottom {
        vertical-align: bottom !important
    }

    .align-text-bottom {
        vertical-align: text-bottom !important
    }

    .align-text-top {
        vertical-align: text-top !important
    }

    .float-left {
        float: left !important
    }

    .float-right {
        float: right !important
    }

    .float-none {
        float: none !important
    }

    .overflow-auto {
        overflow: auto !important
    }

    .overflow-hidden {
        overflow: hidden !important
    }

    .d-none {
        display: none !important
    }

    .d-inline {
        display: inline !important
    }

    .d-inline-block {
        display: inline-block !important
    }

    .d-block {
        display: block !important
    }

    .d-table {
        display: table !important
    }

    .d-table-row {
        display: table-row !important
    }

    .d-table-cell {
        display: table-cell !important
    }

    .d-flex {
        display: flex !important
    }

    .d-inline-flex {
        display: inline-flex !important
    }

    .shadow {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
    }

    .shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
    }

    .shadow-lg {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
    }

    .shadow-none {
        box-shadow: none !important
    }

    .position-static {
        position: static !important
    }

    .position-relative {
        position: relative !important
    }

    .position-absolute {
        position: absolute !important
    }

    .position-fixed {
        position: fixed !important
    }

    .position-sticky {
        position: -webkit-sticky !important;
        position: sticky !important
    }

    .border {
        border: 1px solid #dee2e6 !important
    }

    .border-0 {
        border: 0 !important
    }

    .border-top {
        border-top: 1px solid #dee2e6 !important
    }

    .border-top-0 {
        border-top: 0 !important
    }

    .border-right {
        border-right: 1px solid #dee2e6 !important
    }

    .border-right-0 {
        border-right: 0 !important
    }

    .border-bottom {
        border-bottom: 1px solid #dee2e6 !important
    }

    .border-bottom-0 {
        border-bottom: 0 !important
    }

    .border-left {
        border-left: 1px solid #dee2e6 !important
    }

    .border-left-0 {
        border-left: 0 !important
    }

    .border-primary {
        border-color: #0d6efd !important
    }

    .border-secondary {
        border-color: #6c757d !important
    }

    .border-success {
        border-color: #28a745 !important
    }

    .border-info {
        border-color: #17a2b8 !important
    }

    .border-warning {
        border-color: #ffc107 !important
    }

    .border-danger {
        border-color: #dc3545 !important
    }

    .border-light {
        border-color: #f8f9fa !important
    }

    .border-dark {
        border-color: #343a40 !important
    }

    .border-white {
        border-color: #fff !important
    }

    .w-25 {
        width: 25% !important
    }

    .w-50 {
        width: 50% !important
    }

    .w-75 {
        width: 75% !important
    }

    .w-100 {
        width: 100% !important
    }

    .w-auto {
        width: auto !important
    }

    .mw-100 {
        max-width: 100% !important
    }

    .vw-100 {
        width: 100vw !important
    }

    .min-vw-100 {
        min-width: 100vw !important
    }

    .h-25 {
        height: 25% !important
    }

    .h-50 {
        height: 50% !important
    }

    .h-75 {
        height: 75% !important
    }

    .h-100 {
        height: 100% !important
    }

    .h-auto {
        height: auto !important
    }

    .mh-100 {
        max-height: 100% !important
    }

    .vh-100 {
        height: 100vh !important
    }

    .min-vh-100 {
        min-height: 100vh !important
    }

    .flex-fill {
        flex: 1 1 auto !important
    }

    .flex-row {
        flex-direction: row !important
    }

    .flex-column {
        flex-direction: column !important
    }

    .flex-row-reverse {
        flex-direction: row-reverse !important
    }

    .flex-column-reverse {
        flex-direction: column-reverse !important
    }

    .flex-grow-0 {
        flex-grow: 0 !important
    }

    .flex-grow-1 {
        flex-grow: 1 !important
    }

    .flex-shrink-0 {
        flex-shrink: 0 !important
    }

    .flex-shrink-1 {
        flex-shrink: 1 !important
    }

    .flex-wrap {
        flex-wrap: wrap !important
    }

    .flex-nowrap {
        flex-wrap: nowrap !important
    }

    .flex-wrap-reverse {
        flex-wrap: wrap-reverse !important
    }

    .justify-content-start {
        justify-content: flex-start !important
    }

    .justify-content-end {
        justify-content: flex-end !important
    }

    .justify-content-center {
        justify-content: center !important
    }

    .justify-content-between {
        justify-content: space-between !important
    }

    .justify-content-around {
        justify-content: space-around !important
    }

    .justify-content-evenly {
        justify-content: space-evenly !important
    }

    .align-items-start {
        align-items: flex-start !important
    }

    .align-items-end {
        align-items: flex-end !important
    }

    .align-items-center {
        align-items: center !important
    }

    .align-items-baseline {
        align-items: baseline !important
    }

    .align-items-stretch {
        align-items: stretch !important
    }

    .align-content-start {
        align-content: flex-start !important
    }

    .align-content-end {
        align-content: flex-end !important
    }

    .align-content-center {
        align-content: center !important
    }

    .align-content-between {
        align-content: space-between !important
    }

    .align-content-around {
        align-content: space-around !important
    }

    .align-content-stretch {
        align-content: stretch !important
    }

    .align-self-auto {
        align-self: auto !important
    }

    .align-self-start {
        align-self: flex-start !important
    }

    .align-self-end {
        align-self: flex-end !important
    }

    .align-self-center {
        align-self: center !important
    }

    .align-self-baseline {
        align-self: baseline !important
    }

    .align-self-stretch {
        align-self: stretch !important
    }

    .order-first {
        order: -1 !important
    }

    .order-0 {
        order: 0 !important
    }

    .order-1 {
        order: 1 !important
    }

    .order-2 {
        order: 2 !important
    }

    .order-3 {
        order: 3 !important
    }

    .order-4 {
        order: 4 !important
    }

    .order-5 {
        order: 5 !important
    }

    .order-last {
        order: 6 !important
    }

    .m-0 {
        margin: 0 !important
    }

    .m-1 {
        margin: .25rem !important
    }

    .m-2 {
        margin: .5rem !important
    }

    .m-3 {
        margin: 1rem !important
    }

    .m-4 {
        margin: 1.5rem !important
    }

    .m-5 {
        margin: 3rem !important
    }

    .m-auto {
        margin: auto !important
    }

    .mx-0 {
        margin-right: 0 !important;
        margin-left: 0 !important
    }

    .mx-1 {
        margin-right: .25rem !important;
        margin-left: .25rem !important
    }

    .mx-2 {
        margin-right: .5rem !important;
        margin-left: .5rem !important
    }

    .mx-3 {
        margin-right: 1rem !important;
        margin-left: 1rem !important
    }

    .mx-4 {
        margin-right: 1.5rem !important;
        margin-left: 1.5rem !important
    }

    .mx-5 {
        margin-right: 3rem !important;
        margin-left: 3rem !important
    }

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important
    }

    .my-0 {
        margin-top: 0 !important;
        margin-bottom: 0 !important
    }

    .my-1 {
        margin-top: .25rem !important;
        margin-bottom: .25rem !important
    }

    .my-2 {
        margin-top: .5rem !important;
        margin-bottom: .5rem !important
    }

    .my-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important
    }

    .my-4 {
        margin-top: 1.5rem !important;
        margin-bottom: 1.5rem !important
    }

    .my-5 {
        margin-top: 3rem !important;
        margin-bottom: 3rem !important
    }

    .my-auto {
        margin-top: auto !important;
        margin-bottom: auto !important
    }

    .mt-0 {
        margin-top: 0 !important
    }

    .mt-1 {
        margin-top: .25rem !important
    }

    .mt-2 {
        margin-top: .5rem !important
    }

    .mt-3 {
        margin-top: 1rem !important
    }

    .mt-4 {
        margin-top: 1.5rem !important
    }

    .mt-5 {
        margin-top: 3rem !important
    }

    .mt-auto {
        margin-top: auto !important
    }

    .mr-0 {
        margin-right: 0 !important
    }

    .mr-1 {
        margin-right: .25rem !important
    }

    .mr-2 {
        margin-right: .5rem !important
    }

    .mr-3 {
        margin-right: 1rem !important
    }

    .mr-4 {
        margin-right: 1.5rem !important
    }

    .mr-5 {
        margin-right: 3rem !important
    }

    .mr-auto {
        margin-right: auto !important
    }

    .mb-0 {
        margin-bottom: 0 !important
    }

    .mb-1 {
        margin-bottom: .25rem !important
    }

    .mb-2 {
        margin-bottom: .5rem !important
    }

    .mb-3 {
        margin-bottom: 1rem !important
    }

    .mb-4 {
        margin-bottom: 1.5rem !important
    }

    .mb-5 {
        margin-bottom: 3rem !important
    }

    .mb-auto {
        margin-bottom: auto !important
    }

    .ml-0 {
        margin-left: 0 !important
    }

    .ml-1 {
        margin-left: .25rem !important
    }

    .ml-2 {
        margin-left: .5rem !important
    }

    .ml-3 {
        margin-left: 1rem !important
    }

    .ml-4 {
        margin-left: 1.5rem !important
    }

    .ml-5 {
        margin-left: 3rem !important
    }

    .ml-auto {
        margin-left: auto !important
    }

    .p-0 {
        padding: 0 !important
    }

    .p-1 {
        padding: .25rem !important
    }

    .p-2 {
        padding: .5rem !important
    }

    .p-3 {
        padding: 1rem !important
    }

    .p-4 {
        padding: 1.5rem !important
    }

    .p-5 {
        padding: 3rem !important
    }

    .px-0 {
        padding-right: 0 !important;
        padding-left: 0 !important
    }

    .px-1 {
        padding-right: .25rem !important;
        padding-left: .25rem !important
    }

    .px-2 {
        padding-right: .5rem !important;
        padding-left: .5rem !important
    }

    .px-3 {
        padding-right: 1rem !important;
        padding-left: 1rem !important
    }

    .px-4 {
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important
    }

    .px-5 {
        padding-right: 3rem !important;
        padding-left: 3rem !important
    }

    .py-0 {
        padding-top: 0 !important;
        padding-bottom: 0 !important
    }

    .py-1 {
        padding-top: .25rem !important;
        padding-bottom: .25rem !important
    }

    .py-2 {
        padding-top: .5rem !important;
        padding-bottom: .5rem !important
    }

    .py-3 {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important
    }

    .py-4 {
        padding-top: 1.5rem !important;
        padding-bottom: 1.5rem !important
    }

    .py-5 {
        padding-top: 3rem !important;
        padding-bottom: 3rem !important
    }

    .pt-0 {
        padding-top: 0 !important
    }

    .pt-1 {
        padding-top: .25rem !important
    }

    .pt-2 {
        padding-top: .5rem !important
    }

    .pt-3 {
        padding-top: 1rem !important
    }

    .pt-4 {
        padding-top: 1.5rem !important
    }

    .pt-5 {
        padding-top: 3rem !important
    }

    .pr-0 {
        padding-right: 0 !important
    }

    .pr-1 {
        padding-right: .25rem !important
    }

    .pr-2 {
        padding-right: .5rem !important
    }

    .pr-3 {
        padding-right: 1rem !important
    }

    .pr-4 {
        padding-right: 1.5rem !important
    }

    .pr-5 {
        padding-right: 3rem !important
    }

    .pb-0 {
        padding-bottom: 0 !important
    }

    .pb-1 {
        padding-bottom: .25rem !important
    }

    .pb-2 {
        padding-bottom: .5rem !important
    }

    .pb-3 {
        padding-bottom: 1rem !important
    }

    .pb-4 {
        padding-bottom: 1.5rem !important
    }

    .pb-5 {
        padding-bottom: 3rem !important
    }

    .pl-0 {
        padding-left: 0 !important
    }

    .pl-1 {
        padding-left: .25rem !important
    }

    .pl-2 {
        padding-left: .5rem !important
    }

    .pl-3 {
        padding-left: 1rem !important
    }

    .pl-4 {
        padding-left: 1.5rem !important
    }

    .pl-5 {
        padding-left: 3rem !important
    }

    .font-weight-light {
        font-weight: 300 !important
    }

    .font-weight-lighter {
        font-weight: lighter !important
    }

    .font-weight-normal {
        font-weight: 400 !important
    }

    .font-weight-bold {
        font-weight: 700 !important
    }

    .font-weight-bolder {
        font-weight: bolder !important
    }

    .text-lowercase {
        text-transform: lowercase !important
    }

    .text-uppercase {
        text-transform: uppercase !important
    }

    .text-capitalize {
        text-transform: capitalize !important
    }

    .text-left {
        text-align: left !important
    }

    .text-right {
        text-align: right !important
    }

    .text-center {
        text-align: center !important
    }

    .text-primary {
        color: #0d6efd !important
    }

    .text-secondary {
        color: #6c757d !important
    }

    .text-success {
        color: #28a745 !important
    }

    .text-info {
        color: #17a2b8 !important
    }

    .text-warning {
        color: #ffc107 !important
    }

    .text-danger {
        color: #dc3545 !important
    }

    .text-light {
        color: #f8f9fa !important
    }

    .text-dark {
        color: #343a40 !important
    }

    .text-white {
        color: #fff !important
    }

    .text-body {
        color: #212529 !important
    }

    .text-muted {
        color: #6c757d !important
    }

    .text-black-50 {
        color: rgba(0, 0, 0, .5) !important
    }

    .text-white-50 {
        color: rgba(255, 255, 255, .5) !important
    }

    .text-reset {
        color: inherit !important
    }

    .lh-1 {
        line-height: 1 !important
    }

    .lh-sm {
        line-height: 1.25 !important
    }

    .lh-base {
        line-height: 1.5 !important
    }

    .lh-lg {
        line-height: 2 !important
    }

    .bg-primary {
        background-color: #0d6efd !important
    }

    .bg-secondary {
        background-color: #6c757d !important
    }

    .bg-success {
        background-color: #28a745 !important
    }

    .bg-info {
        background-color: #17a2b8 !important
    }

    .bg-warning {
        background-color: #ffc107 !important
    }

    .bg-danger {
        background-color: #dc3545 !important
    }

    .bg-light {
        background-color: #f8f9fa !important
    }

    .bg-dark {
        background-color: #343a40 !important
    }

    .bg-body {
        background-color: #fff !important
    }

    .bg-white {
        background-color: #fff !important
    }

    .bg-transparent {
        background-color: transparent !important
    }

    .bg-gradient {
        background-image: var(--bs-gradient) !important
    }

    .text-wrap {
        white-space: normal !important
    }

    .text-nowrap {
        white-space: nowrap !important
    }

    .text-decoration-none {
        text-decoration: none !important
    }

    .text-decoration-underline {
        text-decoration: underline !important
    }

    .text-decoration-line-through {
        text-decoration: line-through !important
    }

    .font-italic {
        font-style: italic !important
    }

    .font-normal {
        font-style: normal !important
    }

    .text-break {
        word-wrap: break-word !important;
        word-break: break-word !important
    }

    .font-monospace {
        font-family: var(--bs-font-monospace) !important
    }

    .user-select-all {
        -webkit-user-select: all !important;
        -moz-user-select: all !important;
        -ms-user-select: all !important;
        user-select: all !important
    }

    .user-select-auto {
        -webkit-user-select: auto !important;
        -moz-user-select: auto !important;
        -ms-user-select: auto !important;
        user-select: auto !important
    }

    .user-select-none {
        -webkit-user-select: none !important;
        -moz-user-select: none !important;
        -ms-user-select: none !important;
        user-select: none !important
    }

    .pe-none {
        pointer-events: none !important
    }

    .pe-auto {
        pointer-events: auto !important
    }

    .rounded {
        border-radius: .25rem !important
    }

    .rounded-sm {
        border-radius: .2rem !important
    }

    .rounded-lg {
        border-radius: .3rem !important
    }

    .rounded-circle {
        border-radius: 50% !important
    }

    .rounded-pill {
        border-radius: 50rem !important
    }

    .rounded-0 {
        border-radius: 0 !important
    }

    .rounded-top {
        border-top-left-radius: .25rem !important;
        border-top-right-radius: .25rem !important
    }

    .rounded-right {
        border-top-right-radius: .25rem !important;
        border-bottom-right-radius: .25rem !important
    }

    .rounded-bottom {
        border-bottom-right-radius: .25rem !important;
        border-bottom-left-radius: .25rem !important
    }

    .rounded-left {
        border-bottom-left-radius: .25rem !important;
        border-top-left-radius: .25rem !important
    }

    .visible {
        visibility: visible !important
    }

    .invisible {
        visibility: hidden !important
    }

    @media (min-width:576px) {
        .float-sm-left {
            float: left !important
        }

        .float-sm-right {
            float: right !important
        }

        .float-sm-none {
            float: none !important
        }

        .d-sm-none {
            display: none !important
        }

        .d-sm-inline {
            display: inline !important
        }

        .d-sm-inline-block {
            display: inline-block !important
        }

        .d-sm-block {
            display: block !important
        }

        .d-sm-table {
            display: table !important
        }

        .d-sm-table-row {
            display: table-row !important
        }

        .d-sm-table-cell {
            display: table-cell !important
        }

        .d-sm-flex {
            display: flex !important
        }

        .d-sm-inline-flex {
            display: inline-flex !important
        }

        .flex-sm-fill {
            flex: 1 1 auto !important
        }

        .flex-sm-row {
            flex-direction: row !important
        }

        .flex-sm-column {
            flex-direction: column !important
        }

        .flex-sm-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-sm-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-sm-grow-0 {
            flex-grow: 0 !important
        }

        .flex-sm-grow-1 {
            flex-grow: 1 !important
        }

        .flex-sm-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-sm-shrink-1 {
            flex-shrink: 1 !important
        }

        .flex-sm-wrap {
            flex-wrap: wrap !important
        }

        .flex-sm-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-sm-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .justify-content-sm-start {
            justify-content: flex-start !important
        }

        .justify-content-sm-end {
            justify-content: flex-end !important
        }

        .justify-content-sm-center {
            justify-content: center !important
        }

        .justify-content-sm-between {
            justify-content: space-between !important
        }

        .justify-content-sm-around {
            justify-content: space-around !important
        }

        .justify-content-sm-evenly {
            justify-content: space-evenly !important
        }

        .align-items-sm-start {
            align-items: flex-start !important
        }

        .align-items-sm-end {
            align-items: flex-end !important
        }

        .align-items-sm-center {
            align-items: center !important
        }

        .align-items-sm-baseline {
            align-items: baseline !important
        }

        .align-items-sm-stretch {
            align-items: stretch !important
        }

        .align-content-sm-start {
            align-content: flex-start !important
        }

        .align-content-sm-end {
            align-content: flex-end !important
        }

        .align-content-sm-center {
            align-content: center !important
        }

        .align-content-sm-between {
            align-content: space-between !important
        }

        .align-content-sm-around {
            align-content: space-around !important
        }

        .align-content-sm-stretch {
            align-content: stretch !important
        }

        .align-self-sm-auto {
            align-self: auto !important
        }

        .align-self-sm-start {
            align-self: flex-start !important
        }

        .align-self-sm-end {
            align-self: flex-end !important
        }

        .align-self-sm-center {
            align-self: center !important
        }

        .align-self-sm-baseline {
            align-self: baseline !important
        }

        .align-self-sm-stretch {
            align-self: stretch !important
        }

        .order-sm-first {
            order: -1 !important
        }

        .order-sm-0 {
            order: 0 !important
        }

        .order-sm-1 {
            order: 1 !important
        }

        .order-sm-2 {
            order: 2 !important
        }

        .order-sm-3 {
            order: 3 !important
        }

        .order-sm-4 {
            order: 4 !important
        }

        .order-sm-5 {
            order: 5 !important
        }

        .order-sm-last {
            order: 6 !important
        }

        .m-sm-0 {
            margin: 0 !important
        }

        .m-sm-1 {
            margin: .25rem !important
        }

        .m-sm-2 {
            margin: .5rem !important
        }

        .m-sm-3 {
            margin: 1rem !important
        }

        .m-sm-4 {
            margin: 1.5rem !important
        }

        .m-sm-5 {
            margin: 3rem !important
        }

        .m-sm-auto {
            margin: auto !important
        }

        .mx-sm-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .mx-sm-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .mx-sm-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .mx-sm-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .mx-sm-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .mx-sm-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .mx-sm-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-sm-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .my-sm-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .my-sm-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .my-sm-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .my-sm-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .my-sm-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .my-sm-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }

        .mt-sm-0 {
            margin-top: 0 !important
        }

        .mt-sm-1 {
            margin-top: .25rem !important
        }

        .mt-sm-2 {
            margin-top: .5rem !important
        }

        .mt-sm-3 {
            margin-top: 1rem !important
        }

        .mt-sm-4 {
            margin-top: 1.5rem !important
        }

        .mt-sm-5 {
            margin-top: 3rem !important
        }

        .mt-sm-auto {
            margin-top: auto !important
        }

        .mr-sm-0 {
            margin-right: 0 !important
        }

        .mr-sm-1 {
            margin-right: .25rem !important
        }

        .mr-sm-2 {
            margin-right: .5rem !important
        }

        .mr-sm-3 {
            margin-right: 1rem !important
        }

        .mr-sm-4 {
            margin-right: 1.5rem !important
        }

        .mr-sm-5 {
            margin-right: 3rem !important
        }

        .mr-sm-auto {
            margin-right: auto !important
        }

        .mb-sm-0 {
            margin-bottom: 0 !important
        }

        .mb-sm-1 {
            margin-bottom: .25rem !important
        }

        .mb-sm-2 {
            margin-bottom: .5rem !important
        }

        .mb-sm-3 {
            margin-bottom: 1rem !important
        }

        .mb-sm-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-sm-5 {
            margin-bottom: 3rem !important
        }

        .mb-sm-auto {
            margin-bottom: auto !important
        }

        .ml-sm-0 {
            margin-left: 0 !important
        }

        .ml-sm-1 {
            margin-left: .25rem !important
        }

        .ml-sm-2 {
            margin-left: .5rem !important
        }

        .ml-sm-3 {
            margin-left: 1rem !important
        }

        .ml-sm-4 {
            margin-left: 1.5rem !important
        }

        .ml-sm-5 {
            margin-left: 3rem !important
        }

        .ml-sm-auto {
            margin-left: auto !important
        }

        .p-sm-0 {
            padding: 0 !important
        }

        .p-sm-1 {
            padding: .25rem !important
        }

        .p-sm-2 {
            padding: .5rem !important
        }

        .p-sm-3 {
            padding: 1rem !important
        }

        .p-sm-4 {
            padding: 1.5rem !important
        }

        .p-sm-5 {
            padding: 3rem !important
        }

        .px-sm-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .px-sm-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .px-sm-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .px-sm-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .px-sm-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .px-sm-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-sm-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .py-sm-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .py-sm-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .py-sm-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .py-sm-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .py-sm-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .pt-sm-0 {
            padding-top: 0 !important
        }

        .pt-sm-1 {
            padding-top: .25rem !important
        }

        .pt-sm-2 {
            padding-top: .5rem !important
        }

        .pt-sm-3 {
            padding-top: 1rem !important
        }

        .pt-sm-4 {
            padding-top: 1.5rem !important
        }

        .pt-sm-5 {
            padding-top: 3rem !important
        }

        .pr-sm-0 {
            padding-right: 0 !important
        }

        .pr-sm-1 {
            padding-right: .25rem !important
        }

        .pr-sm-2 {
            padding-right: .5rem !important
        }

        .pr-sm-3 {
            padding-right: 1rem !important
        }

        .pr-sm-4 {
            padding-right: 1.5rem !important
        }

        .pr-sm-5 {
            padding-right: 3rem !important
        }

        .pb-sm-0 {
            padding-bottom: 0 !important
        }

        .pb-sm-1 {
            padding-bottom: .25rem !important
        }

        .pb-sm-2 {
            padding-bottom: .5rem !important
        }

        .pb-sm-3 {
            padding-bottom: 1rem !important
        }

        .pb-sm-4 {
            padding-bottom: 1.5rem !important
        }

        .pb-sm-5 {
            padding-bottom: 3rem !important
        }

        .pl-sm-0 {
            padding-left: 0 !important
        }

        .pl-sm-1 {
            padding-left: .25rem !important
        }

        .pl-sm-2 {
            padding-left: .5rem !important
        }

        .pl-sm-3 {
            padding-left: 1rem !important
        }

        .pl-sm-4 {
            padding-left: 1.5rem !important
        }

        .pl-sm-5 {
            padding-left: 3rem !important
        }

        .text-sm-left {
            text-align: left !important
        }

        .text-sm-right {
            text-align: right !important
        }

        .text-sm-center {
            text-align: center !important
        }
    }

    @media (min-width:768px) {
        .float-md-left {
            float: left !important
        }

        .float-md-right {
            float: right !important
        }

        .float-md-none {
            float: none !important
        }

        .d-md-none {
            display: none !important
        }

        .d-md-inline {
            display: inline !important
        }

        .d-md-inline-block {
            display: inline-block !important
        }

        .d-md-block {
            display: block !important
        }

        .d-md-table {
            display: table !important
        }

        .d-md-table-row {
            display: table-row !important
        }

        .d-md-table-cell {
            display: table-cell !important
        }

        .d-md-flex {
            display: flex !important
        }

        .d-md-inline-flex {
            display: inline-flex !important
        }

        .flex-md-fill {
            flex: 1 1 auto !important
        }

        .flex-md-row {
            flex-direction: row !important
        }

        .flex-md-column {
            flex-direction: column !important
        }

        .flex-md-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-md-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-md-grow-0 {
            flex-grow: 0 !important
        }

        .flex-md-grow-1 {
            flex-grow: 1 !important
        }

        .flex-md-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-md-shrink-1 {
            flex-shrink: 1 !important
        }

        .flex-md-wrap {
            flex-wrap: wrap !important
        }

        .flex-md-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-md-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .justify-content-md-start {
            justify-content: flex-start !important
        }

        .justify-content-md-end {
            justify-content: flex-end !important
        }

        .justify-content-md-center {
            justify-content: center !important
        }

        .justify-content-md-between {
            justify-content: space-between !important
        }

        .justify-content-md-around {
            justify-content: space-around !important
        }

        .justify-content-md-evenly {
            justify-content: space-evenly !important
        }

        .align-items-md-start {
            align-items: flex-start !important
        }

        .align-items-md-end {
            align-items: flex-end !important
        }

        .align-items-md-center {
            align-items: center !important
        }

        .align-items-md-baseline {
            align-items: baseline !important
        }

        .align-items-md-stretch {
            align-items: stretch !important
        }

        .align-content-md-start {
            align-content: flex-start !important
        }

        .align-content-md-end {
            align-content: flex-end !important
        }

        .align-content-md-center {
            align-content: center !important
        }

        .align-content-md-between {
            align-content: space-between !important
        }

        .align-content-md-around {
            align-content: space-around !important
        }

        .align-content-md-stretch {
            align-content: stretch !important
        }

        .align-self-md-auto {
            align-self: auto !important
        }

        .align-self-md-start {
            align-self: flex-start !important
        }

        .align-self-md-end {
            align-self: flex-end !important
        }

        .align-self-md-center {
            align-self: center !important
        }

        .align-self-md-baseline {
            align-self: baseline !important
        }

        .align-self-md-stretch {
            align-self: stretch !important
        }

        .order-md-first {
            order: -1 !important
        }

        .order-md-0 {
            order: 0 !important
        }

        .order-md-1 {
            order: 1 !important
        }

        .order-md-2 {
            order: 2 !important
        }

        .order-md-3 {
            order: 3 !important
        }

        .order-md-4 {
            order: 4 !important
        }

        .order-md-5 {
            order: 5 !important
        }

        .order-md-last {
            order: 6 !important
        }

        .m-md-0 {
            margin: 0 !important
        }

        .m-md-1 {
            margin: .25rem !important
        }

        .m-md-2 {
            margin: .5rem !important
        }

        .m-md-3 {
            margin: 1rem !important
        }

        .m-md-4 {
            margin: 1.5rem !important
        }

        .m-md-5 {
            margin: 3rem !important
        }

        .m-md-auto {
            margin: auto !important
        }

        .mx-md-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .mx-md-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .mx-md-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .mx-md-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .mx-md-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .mx-md-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .mx-md-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-md-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .my-md-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .my-md-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .my-md-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .my-md-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .my-md-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .my-md-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }

        .mt-md-0 {
            margin-top: 0 !important
        }

        .mt-md-1 {
            margin-top: .25rem !important
        }

        .mt-md-2 {
            margin-top: .5rem !important
        }

        .mt-md-3 {
            margin-top: 1rem !important
        }

        .mt-md-4 {
            margin-top: 1.5rem !important
        }

        .mt-md-5 {
            margin-top: 3rem !important
        }

        .mt-md-auto {
            margin-top: auto !important
        }

        .mr-md-0 {
            margin-right: 0 !important
        }

        .mr-md-1 {
            margin-right: .25rem !important
        }

        .mr-md-2 {
            margin-right: .5rem !important
        }

        .mr-md-3 {
            margin-right: 1rem !important
        }

        .mr-md-4 {
            margin-right: 1.5rem !important
        }

        .mr-md-5 {
            margin-right: 3rem !important
        }

        .mr-md-auto {
            margin-right: auto !important
        }

        .mb-md-0 {
            margin-bottom: 0 !important
        }

        .mb-md-1 {
            margin-bottom: .25rem !important
        }

        .mb-md-2 {
            margin-bottom: .5rem !important
        }

        .mb-md-3 {
            margin-bottom: 1rem !important
        }

        .mb-md-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-md-5 {
            margin-bottom: 3rem !important
        }

        .mb-md-auto {
            margin-bottom: auto !important
        }

        .ml-md-0 {
            margin-left: 0 !important
        }

        .ml-md-1 {
            margin-left: .25rem !important
        }

        .ml-md-2 {
            margin-left: .5rem !important
        }

        .ml-md-3 {
            margin-left: 1rem !important
        }

        .ml-md-4 {
            margin-left: 1.5rem !important
        }

        .ml-md-5 {
            margin-left: 3rem !important
        }

        .ml-md-auto {
            margin-left: auto !important
        }

        .p-md-0 {
            padding: 0 !important
        }

        .p-md-1 {
            padding: .25rem !important
        }

        .p-md-2 {
            padding: .5rem !important
        }

        .p-md-3 {
            padding: 1rem !important
        }

        .p-md-4 {
            padding: 1.5rem !important
        }

        .p-md-5 {
            padding: 3rem !important
        }

        .px-md-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .px-md-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .px-md-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .px-md-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .px-md-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .px-md-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-md-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .py-md-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .py-md-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .py-md-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .py-md-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .py-md-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .pt-md-0 {
            padding-top: 0 !important
        }

        .pt-md-1 {
            padding-top: .25rem !important
        }

        .pt-md-2 {
            padding-top: .5rem !important
        }

        .pt-md-3 {
            padding-top: 1rem !important
        }

        .pt-md-4 {
            padding-top: 1.5rem !important
        }

        .pt-md-5 {
            padding-top: 3rem !important
        }

        .pr-md-0 {
            padding-right: 0 !important
        }

        .pr-md-1 {
            padding-right: .25rem !important
        }

        .pr-md-2 {
            padding-right: .5rem !important
        }

        .pr-md-3 {
            padding-right: 1rem !important
        }

        .pr-md-4 {
            padding-right: 1.5rem !important
        }

        .pr-md-5 {
            padding-right: 3rem !important
        }

        .pb-md-0 {
            padding-bottom: 0 !important
        }

        .pb-md-1 {
            padding-bottom: .25rem !important
        }

        .pb-md-2 {
            padding-bottom: .5rem !important
        }

        .pb-md-3 {
            padding-bottom: 1rem !important
        }

        .pb-md-4 {
            padding-bottom: 1.5rem !important
        }

        .pb-md-5 {
            padding-bottom: 3rem !important
        }

        .pl-md-0 {
            padding-left: 0 !important
        }

        .pl-md-1 {
            padding-left: .25rem !important
        }

        .pl-md-2 {
            padding-left: .5rem !important
        }

        .pl-md-3 {
            padding-left: 1rem !important
        }

        .pl-md-4 {
            padding-left: 1.5rem !important
        }

        .pl-md-5 {
            padding-left: 3rem !important
        }

        .text-md-left {
            text-align: left !important
        }

        .text-md-right {
            text-align: right !important
        }

        .text-md-center {
            text-align: center !important
        }
    }

    @media (min-width:992px) {
        .float-lg-left {
            float: left !important
        }

        .float-lg-right {
            float: right !important
        }

        .float-lg-none {
            float: none !important
        }

        .d-lg-none {
            display: none !important
        }

        .d-lg-inline {
            display: inline !important
        }

        .d-lg-inline-block {
            display: inline-block !important
        }

        .d-lg-block {
            display: block !important
        }

        .d-lg-table {
            display: table !important
        }

        .d-lg-table-row {
            display: table-row !important
        }

        .d-lg-table-cell {
            display: table-cell !important
        }

        .d-lg-flex {
            display: flex !important
        }

        .d-lg-inline-flex {
            display: inline-flex !important
        }

        .flex-lg-fill {
            flex: 1 1 auto !important
        }

        .flex-lg-row {
            flex-direction: row !important
        }

        .flex-lg-column {
            flex-direction: column !important
        }

        .flex-lg-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-lg-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-lg-grow-0 {
            flex-grow: 0 !important
        }

        .flex-lg-grow-1 {
            flex-grow: 1 !important
        }

        .flex-lg-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-lg-shrink-1 {
            flex-shrink: 1 !important
        }

        .flex-lg-wrap {
            flex-wrap: wrap !important
        }

        .flex-lg-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-lg-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .justify-content-lg-start {
            justify-content: flex-start !important
        }

        .justify-content-lg-end {
            justify-content: flex-end !important
        }

        .justify-content-lg-center {
            justify-content: center !important
        }

        .justify-content-lg-between {
            justify-content: space-between !important
        }

        .justify-content-lg-around {
            justify-content: space-around !important
        }

        .justify-content-lg-evenly {
            justify-content: space-evenly !important
        }

        .align-items-lg-start {
            align-items: flex-start !important
        }

        .align-items-lg-end {
            align-items: flex-end !important
        }

        .align-items-lg-center {
            align-items: center !important
        }

        .align-items-lg-baseline {
            align-items: baseline !important
        }

        .align-items-lg-stretch {
            align-items: stretch !important
        }

        .align-content-lg-start {
            align-content: flex-start !important
        }

        .align-content-lg-end {
            align-content: flex-end !important
        }

        .align-content-lg-center {
            align-content: center !important
        }

        .align-content-lg-between {
            align-content: space-between !important
        }

        .align-content-lg-around {
            align-content: space-around !important
        }

        .align-content-lg-stretch {
            align-content: stretch !important
        }

        .align-self-lg-auto {
            align-self: auto !important
        }

        .align-self-lg-start {
            align-self: flex-start !important
        }

        .align-self-lg-end {
            align-self: flex-end !important
        }

        .align-self-lg-center {
            align-self: center !important
        }

        .align-self-lg-baseline {
            align-self: baseline !important
        }

        .align-self-lg-stretch {
            align-self: stretch !important
        }

        .order-lg-first {
            order: -1 !important
        }

        .order-lg-0 {
            order: 0 !important
        }

        .order-lg-1 {
            order: 1 !important
        }

        .order-lg-2 {
            order: 2 !important
        }

        .order-lg-3 {
            order: 3 !important
        }

        .order-lg-4 {
            order: 4 !important
        }

        .order-lg-5 {
            order: 5 !important
        }

        .order-lg-last {
            order: 6 !important
        }

        .m-lg-0 {
            margin: 0 !important
        }

        .m-lg-1 {
            margin: .25rem !important
        }

        .m-lg-2 {
            margin: .5rem !important
        }

        .m-lg-3 {
            margin: 1rem !important
        }

        .m-lg-4 {
            margin: 1.5rem !important
        }

        .m-lg-5 {
            margin: 3rem !important
        }

        .m-lg-auto {
            margin: auto !important
        }

        .mx-lg-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .mx-lg-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .mx-lg-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .mx-lg-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .mx-lg-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .mx-lg-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .mx-lg-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-lg-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .my-lg-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .my-lg-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .my-lg-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .my-lg-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .my-lg-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .my-lg-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }

        .mt-lg-0 {
            margin-top: 0 !important
        }

        .mt-lg-1 {
            margin-top: .25rem !important
        }

        .mt-lg-2 {
            margin-top: .5rem !important
        }

        .mt-lg-3 {
            margin-top: 1rem !important
        }

        .mt-lg-4 {
            margin-top: 1.5rem !important
        }

        .mt-lg-5 {
            margin-top: 3rem !important
        }

        .mt-lg-auto {
            margin-top: auto !important
        }

        .mr-lg-0 {
            margin-right: 0 !important
        }

        .mr-lg-1 {
            margin-right: .25rem !important
        }

        .mr-lg-2 {
            margin-right: .5rem !important
        }

        .mr-lg-3 {
            margin-right: 1rem !important
        }

        .mr-lg-4 {
            margin-right: 1.5rem !important
        }

        .mr-lg-5 {
            margin-right: 3rem !important
        }

        .mr-lg-auto {
            margin-right: auto !important
        }

        .mb-lg-0 {
            margin-bottom: 0 !important
        }

        .mb-lg-1 {
            margin-bottom: .25rem !important
        }

        .mb-lg-2 {
            margin-bottom: .5rem !important
        }

        .mb-lg-3 {
            margin-bottom: 1rem !important
        }

        .mb-lg-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-lg-5 {
            margin-bottom: 3rem !important
        }

        .mb-lg-auto {
            margin-bottom: auto !important
        }

        .ml-lg-0 {
            margin-left: 0 !important
        }

        .ml-lg-1 {
            margin-left: .25rem !important
        }

        .ml-lg-2 {
            margin-left: .5rem !important
        }

        .ml-lg-3 {
            margin-left: 1rem !important
        }

        .ml-lg-4 {
            margin-left: 1.5rem !important
        }

        .ml-lg-5 {
            margin-left: 3rem !important
        }

        .ml-lg-auto {
            margin-left: auto !important
        }

        .p-lg-0 {
            padding: 0 !important
        }

        .p-lg-1 {
            padding: .25rem !important
        }

        .p-lg-2 {
            padding: .5rem !important
        }

        .p-lg-3 {
            padding: 1rem !important
        }

        .p-lg-4 {
            padding: 1.5rem !important
        }

        .p-lg-5 {
            padding: 3rem !important
        }

        .px-lg-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .px-lg-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .px-lg-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .px-lg-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .px-lg-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .px-lg-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-lg-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .py-lg-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .py-lg-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .py-lg-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .py-lg-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .py-lg-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .pt-lg-0 {
            padding-top: 0 !important
        }

        .pt-lg-1 {
            padding-top: .25rem !important
        }

        .pt-lg-2 {
            padding-top: .5rem !important
        }

        .pt-lg-3 {
            padding-top: 1rem !important
        }

        .pt-lg-4 {
            padding-top: 1.5rem !important
        }

        .pt-lg-5 {
            padding-top: 3rem !important
        }

        .pr-lg-0 {
            padding-right: 0 !important
        }

        .pr-lg-1 {
            padding-right: .25rem !important
        }

        .pr-lg-2 {
            padding-right: .5rem !important
        }

        .pr-lg-3 {
            padding-right: 1rem !important
        }

        .pr-lg-4 {
            padding-right: 1.5rem !important
        }

        .pr-lg-5 {
            padding-right: 3rem !important
        }

        .pb-lg-0 {
            padding-bottom: 0 !important
        }

        .pb-lg-1 {
            padding-bottom: .25rem !important
        }

        .pb-lg-2 {
            padding-bottom: .5rem !important
        }

        .pb-lg-3 {
            padding-bottom: 1rem !important
        }

        .pb-lg-4 {
            padding-bottom: 1.5rem !important
        }

        .pb-lg-5 {
            padding-bottom: 3rem !important
        }

        .pl-lg-0 {
            padding-left: 0 !important
        }

        .pl-lg-1 {
            padding-left: .25rem !important
        }

        .pl-lg-2 {
            padding-left: .5rem !important
        }

        .pl-lg-3 {
            padding-left: 1rem !important
        }

        .pl-lg-4 {
            padding-left: 1.5rem !important
        }

        .pl-lg-5 {
            padding-left: 3rem !important
        }

        .text-lg-left {
            text-align: left !important
        }

        .text-lg-right {
            text-align: right !important
        }

        .text-lg-center {
            text-align: center !important
        }
    }

    @media (min-width:1200px) {
        .float-xl-left {
            float: left !important
        }

        .float-xl-right {
            float: right !important
        }

        .float-xl-none {
            float: none !important
        }

        .d-xl-none {
            display: none !important
        }

        .d-xl-inline {
            display: inline !important
        }

        .d-xl-inline-block {
            display: inline-block !important
        }

        .d-xl-block {
            display: block !important
        }

        .d-xl-table {
            display: table !important
        }

        .d-xl-table-row {
            display: table-row !important
        }

        .d-xl-table-cell {
            display: table-cell !important
        }

        .d-xl-flex {
            display: flex !important
        }

        .d-xl-inline-flex {
            display: inline-flex !important
        }

        .flex-xl-fill {
            flex: 1 1 auto !important
        }

        .flex-xl-row {
            flex-direction: row !important
        }

        .flex-xl-column {
            flex-direction: column !important
        }

        .flex-xl-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-xl-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-xl-grow-0 {
            flex-grow: 0 !important
        }

        .flex-xl-grow-1 {
            flex-grow: 1 !important
        }

        .flex-xl-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-xl-shrink-1 {
            flex-shrink: 1 !important
        }

        .flex-xl-wrap {
            flex-wrap: wrap !important
        }

        .flex-xl-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-xl-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .justify-content-xl-start {
            justify-content: flex-start !important
        }

        .justify-content-xl-end {
            justify-content: flex-end !important
        }

        .justify-content-xl-center {
            justify-content: center !important
        }

        .justify-content-xl-between {
            justify-content: space-between !important
        }

        .justify-content-xl-around {
            justify-content: space-around !important
        }

        .justify-content-xl-evenly {
            justify-content: space-evenly !important
        }

        .align-items-xl-start {
            align-items: flex-start !important
        }

        .align-items-xl-end {
            align-items: flex-end !important
        }

        .align-items-xl-center {
            align-items: center !important
        }

        .align-items-xl-baseline {
            align-items: baseline !important
        }

        .align-items-xl-stretch {
            align-items: stretch !important
        }

        .align-content-xl-start {
            align-content: flex-start !important
        }

        .align-content-xl-end {
            align-content: flex-end !important
        }

        .align-content-xl-center {
            align-content: center !important
        }

        .align-content-xl-between {
            align-content: space-between !important
        }

        .align-content-xl-around {
            align-content: space-around !important
        }

        .align-content-xl-stretch {
            align-content: stretch !important
        }

        .align-self-xl-auto {
            align-self: auto !important
        }

        .align-self-xl-start {
            align-self: flex-start !important
        }

        .align-self-xl-end {
            align-self: flex-end !important
        }

        .align-self-xl-center {
            align-self: center !important
        }

        .align-self-xl-baseline {
            align-self: baseline !important
        }

        .align-self-xl-stretch {
            align-self: stretch !important
        }

        .order-xl-first {
            order: -1 !important
        }

        .order-xl-0 {
            order: 0 !important
        }

        .order-xl-1 {
            order: 1 !important
        }

        .order-xl-2 {
            order: 2 !important
        }

        .order-xl-3 {
            order: 3 !important
        }

        .order-xl-4 {
            order: 4 !important
        }

        .order-xl-5 {
            order: 5 !important
        }

        .order-xl-last {
            order: 6 !important
        }

        .m-xl-0 {
            margin: 0 !important
        }

        .m-xl-1 {
            margin: .25rem !important
        }

        .m-xl-2 {
            margin: .5rem !important
        }

        .m-xl-3 {
            margin: 1rem !important
        }

        .m-xl-4 {
            margin: 1.5rem !important
        }

        .m-xl-5 {
            margin: 3rem !important
        }

        .m-xl-auto {
            margin: auto !important
        }

        .mx-xl-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .mx-xl-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .mx-xl-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .mx-xl-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .mx-xl-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .mx-xl-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .mx-xl-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-xl-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .my-xl-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .my-xl-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .my-xl-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .my-xl-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .my-xl-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .my-xl-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }

        .mt-xl-0 {
            margin-top: 0 !important
        }

        .mt-xl-1 {
            margin-top: .25rem !important
        }

        .mt-xl-2 {
            margin-top: .5rem !important
        }

        .mt-xl-3 {
            margin-top: 1rem !important
        }

        .mt-xl-4 {
            margin-top: 1.5rem !important
        }

        .mt-xl-5 {
            margin-top: 3rem !important
        }

        .mt-xl-auto {
            margin-top: auto !important
        }

        .mr-xl-0 {
            margin-right: 0 !important
        }

        .mr-xl-1 {
            margin-right: .25rem !important
        }

        .mr-xl-2 {
            margin-right: .5rem !important
        }

        .mr-xl-3 {
            margin-right: 1rem !important
        }

        .mr-xl-4 {
            margin-right: 1.5rem !important
        }

        .mr-xl-5 {
            margin-right: 3rem !important
        }

        .mr-xl-auto {
            margin-right: auto !important
        }

        .mb-xl-0 {
            margin-bottom: 0 !important
        }

        .mb-xl-1 {
            margin-bottom: .25rem !important
        }

        .mb-xl-2 {
            margin-bottom: .5rem !important
        }

        .mb-xl-3 {
            margin-bottom: 1rem !important
        }

        .mb-xl-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-xl-5 {
            margin-bottom: 3rem !important
        }

        .mb-xl-auto {
            margin-bottom: auto !important
        }

        .ml-xl-0 {
            margin-left: 0 !important
        }

        .ml-xl-1 {
            margin-left: .25rem !important
        }

        .ml-xl-2 {
            margin-left: .5rem !important
        }

        .ml-xl-3 {
            margin-left: 1rem !important
        }

        .ml-xl-4 {
            margin-left: 1.5rem !important
        }

        .ml-xl-5 {
            margin-left: 3rem !important
        }

        .ml-xl-auto {
            margin-left: auto !important
        }

        .p-xl-0 {
            padding: 0 !important
        }

        .p-xl-1 {
            padding: .25rem !important
        }

        .p-xl-2 {
            padding: .5rem !important
        }

        .p-xl-3 {
            padding: 1rem !important
        }

        .p-xl-4 {
            padding: 1.5rem !important
        }

        .p-xl-5 {
            padding: 3rem !important
        }

        .px-xl-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .px-xl-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .px-xl-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .px-xl-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .px-xl-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .px-xl-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-xl-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .py-xl-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .py-xl-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .py-xl-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .py-xl-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .py-xl-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .pt-xl-0 {
            padding-top: 0 !important
        }

        .pt-xl-1 {
            padding-top: .25rem !important
        }

        .pt-xl-2 {
            padding-top: .5rem !important
        }

        .pt-xl-3 {
            padding-top: 1rem !important
        }

        .pt-xl-4 {
            padding-top: 1.5rem !important
        }

        .pt-xl-5 {
            padding-top: 3rem !important
        }

        .pr-xl-0 {
            padding-right: 0 !important
        }

        .pr-xl-1 {
            padding-right: .25rem !important
        }

        .pr-xl-2 {
            padding-right: .5rem !important
        }

        .pr-xl-3 {
            padding-right: 1rem !important
        }

        .pr-xl-4 {
            padding-right: 1.5rem !important
        }

        .pr-xl-5 {
            padding-right: 3rem !important
        }

        .pb-xl-0 {
            padding-bottom: 0 !important
        }

        .pb-xl-1 {
            padding-bottom: .25rem !important
        }

        .pb-xl-2 {
            padding-bottom: .5rem !important
        }

        .pb-xl-3 {
            padding-bottom: 1rem !important
        }

        .pb-xl-4 {
            padding-bottom: 1.5rem !important
        }

        .pb-xl-5 {
            padding-bottom: 3rem !important
        }

        .pl-xl-0 {
            padding-left: 0 !important
        }

        .pl-xl-1 {
            padding-left: .25rem !important
        }

        .pl-xl-2 {
            padding-left: .5rem !important
        }

        .pl-xl-3 {
            padding-left: 1rem !important
        }

        .pl-xl-4 {
            padding-left: 1.5rem !important
        }

        .pl-xl-5 {
            padding-left: 3rem !important
        }

        .text-xl-left {
            text-align: left !important
        }

        .text-xl-right {
            text-align: right !important
        }

        .text-xl-center {
            text-align: center !important
        }
    }

    @media (min-width:1400px) {
        .float-xxl-left {
            float: left !important
        }

        .float-xxl-right {
            float: right !important
        }

        .float-xxl-none {
            float: none !important
        }

        .d-xxl-none {
            display: none !important
        }

        .d-xxl-inline {
            display: inline !important
        }

        .d-xxl-inline-block {
            display: inline-block !important
        }

        .d-xxl-block {
            display: block !important
        }

        .d-xxl-table {
            display: table !important
        }

        .d-xxl-table-row {
            display: table-row !important
        }

        .d-xxl-table-cell {
            display: table-cell !important
        }

        .d-xxl-flex {
            display: flex !important
        }

        .d-xxl-inline-flex {
            display: inline-flex !important
        }

        .flex-xxl-fill {
            flex: 1 1 auto !important
        }

        .flex-xxl-row {
            flex-direction: row !important
        }

        .flex-xxl-column {
            flex-direction: column !important
        }

        .flex-xxl-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-xxl-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-xxl-grow-0 {
            flex-grow: 0 !important
        }

        .flex-xxl-grow-1 {
            flex-grow: 1 !important
        }

        .flex-xxl-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-xxl-shrink-1 {
            flex-shrink: 1 !important
        }

        .flex-xxl-wrap {
            flex-wrap: wrap !important
        }

        .flex-xxl-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-xxl-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .justify-content-xxl-start {
            justify-content: flex-start !important
        }

        .justify-content-xxl-end {
            justify-content: flex-end !important
        }

        .justify-content-xxl-center {
            justify-content: center !important
        }

        .justify-content-xxl-between {
            justify-content: space-between !important
        }

        .justify-content-xxl-around {
            justify-content: space-around !important
        }

        .justify-content-xxl-evenly {
            justify-content: space-evenly !important
        }

        .align-items-xxl-start {
            align-items: flex-start !important
        }

        .align-items-xxl-end {
            align-items: flex-end !important
        }

        .align-items-xxl-center {
            align-items: center !important
        }

        .align-items-xxl-baseline {
            align-items: baseline !important
        }

        .align-items-xxl-stretch {
            align-items: stretch !important
        }

        .align-content-xxl-start {
            align-content: flex-start !important
        }

        .align-content-xxl-end {
            align-content: flex-end !important
        }

        .align-content-xxl-center {
            align-content: center !important
        }

        .align-content-xxl-between {
            align-content: space-between !important
        }

        .align-content-xxl-around {
            align-content: space-around !important
        }

        .align-content-xxl-stretch {
            align-content: stretch !important
        }

        .align-self-xxl-auto {
            align-self: auto !important
        }

        .align-self-xxl-start {
            align-self: flex-start !important
        }

        .align-self-xxl-end {
            align-self: flex-end !important
        }

        .align-self-xxl-center {
            align-self: center !important
        }

        .align-self-xxl-baseline {
            align-self: baseline !important
        }

        .align-self-xxl-stretch {
            align-self: stretch !important
        }

        .order-xxl-first {
            order: -1 !important
        }

        .order-xxl-0 {
            order: 0 !important
        }

        .order-xxl-1 {
            order: 1 !important
        }

        .order-xxl-2 {
            order: 2 !important
        }

        .order-xxl-3 {
            order: 3 !important
        }

        .order-xxl-4 {
            order: 4 !important
        }

        .order-xxl-5 {
            order: 5 !important
        }

        .order-xxl-last {
            order: 6 !important
        }

        .m-xxl-0 {
            margin: 0 !important
        }

        .m-xxl-1 {
            margin: .25rem !important
        }

        .m-xxl-2 {
            margin: .5rem !important
        }

        .m-xxl-3 {
            margin: 1rem !important
        }

        .m-xxl-4 {
            margin: 1.5rem !important
        }

        .m-xxl-5 {
            margin: 3rem !important
        }

        .m-xxl-auto {
            margin: auto !important
        }

        .mx-xxl-0 {
            margin-right: 0 !important;
            margin-left: 0 !important
        }

        .mx-xxl-1 {
            margin-right: .25rem !important;
            margin-left: .25rem !important
        }

        .mx-xxl-2 {
            margin-right: .5rem !important;
            margin-left: .5rem !important
        }

        .mx-xxl-3 {
            margin-right: 1rem !important;
            margin-left: 1rem !important
        }

        .mx-xxl-4 {
            margin-right: 1.5rem !important;
            margin-left: 1.5rem !important
        }

        .mx-xxl-5 {
            margin-right: 3rem !important;
            margin-left: 3rem !important
        }

        .mx-xxl-auto {
            margin-right: auto !important;
            margin-left: auto !important
        }

        .my-xxl-0 {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }

        .my-xxl-1 {
            margin-top: .25rem !important;
            margin-bottom: .25rem !important
        }

        .my-xxl-2 {
            margin-top: .5rem !important;
            margin-bottom: .5rem !important
        }

        .my-xxl-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important
        }

        .my-xxl-4 {
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important
        }

        .my-xxl-5 {
            margin-top: 3rem !important;
            margin-bottom: 3rem !important
        }

        .my-xxl-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }

        .mt-xxl-0 {
            margin-top: 0 !important
        }

        .mt-xxl-1 {
            margin-top: .25rem !important
        }

        .mt-xxl-2 {
            margin-top: .5rem !important
        }

        .mt-xxl-3 {
            margin-top: 1rem !important
        }

        .mt-xxl-4 {
            margin-top: 1.5rem !important
        }

        .mt-xxl-5 {
            margin-top: 3rem !important
        }

        .mt-xxl-auto {
            margin-top: auto !important
        }

        .mr-xxl-0 {
            margin-right: 0 !important
        }

        .mr-xxl-1 {
            margin-right: .25rem !important
        }

        .mr-xxl-2 {
            margin-right: .5rem !important
        }

        .mr-xxl-3 {
            margin-right: 1rem !important
        }

        .mr-xxl-4 {
            margin-right: 1.5rem !important
        }

        .mr-xxl-5 {
            margin-right: 3rem !important
        }

        .mr-xxl-auto {
            margin-right: auto !important
        }

        .mb-xxl-0 {
            margin-bottom: 0 !important
        }

        .mb-xxl-1 {
            margin-bottom: .25rem !important
        }

        .mb-xxl-2 {
            margin-bottom: .5rem !important
        }

        .mb-xxl-3 {
            margin-bottom: 1rem !important
        }

        .mb-xxl-4 {
            margin-bottom: 1.5rem !important
        }

        .mb-xxl-5 {
            margin-bottom: 3rem !important
        }

        .mb-xxl-auto {
            margin-bottom: auto !important
        }

        .ml-xxl-0 {
            margin-left: 0 !important
        }

        .ml-xxl-1 {
            margin-left: .25rem !important
        }

        .ml-xxl-2 {
            margin-left: .5rem !important
        }

        .ml-xxl-3 {
            margin-left: 1rem !important
        }

        .ml-xxl-4 {
            margin-left: 1.5rem !important
        }

        .ml-xxl-5 {
            margin-left: 3rem !important
        }

        .ml-xxl-auto {
            margin-left: auto !important
        }

        .p-xxl-0 {
            padding: 0 !important
        }

        .p-xxl-1 {
            padding: .25rem !important
        }

        .p-xxl-2 {
            padding: .5rem !important
        }

        .p-xxl-3 {
            padding: 1rem !important
        }

        .p-xxl-4 {
            padding: 1.5rem !important
        }

        .p-xxl-5 {
            padding: 3rem !important
        }

        .px-xxl-0 {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        .px-xxl-1 {
            padding-right: .25rem !important;
            padding-left: .25rem !important
        }

        .px-xxl-2 {
            padding-right: .5rem !important;
            padding-left: .5rem !important
        }

        .px-xxl-3 {
            padding-right: 1rem !important;
            padding-left: 1rem !important
        }

        .px-xxl-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important
        }

        .px-xxl-5 {
            padding-right: 3rem !important;
            padding-left: 3rem !important
        }

        .py-xxl-0 {
            padding-top: 0 !important;
            padding-bottom: 0 !important
        }

        .py-xxl-1 {
            padding-top: .25rem !important;
            padding-bottom: .25rem !important
        }

        .py-xxl-2 {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important
        }

        .py-xxl-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important
        }

        .py-xxl-4 {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important
        }

        .py-xxl-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important
        }

        .pt-xxl-0 {
            padding-top: 0 !important
        }

        .pt-xxl-1 {
            padding-top: .25rem !important
        }

        .pt-xxl-2 {
            padding-top: .5rem !important
        }

        .pt-xxl-3 {
            padding-top: 1rem !important
        }

        .pt-xxl-4 {
            padding-top: 1.5rem !important
        }

        .pt-xxl-5 {
            padding-top: 3rem !important
        }

        .pr-xxl-0 {
            padding-right: 0 !important
        }

        .pr-xxl-1 {
            padding-right: .25rem !important
        }

        .pr-xxl-2 {
            padding-right: .5rem !important
        }

        .pr-xxl-3 {
            padding-right: 1rem !important
        }

        .pr-xxl-4 {
            padding-right: 1.5rem !important
        }

        .pr-xxl-5 {
            padding-right: 3rem !important
        }

        .pb-xxl-0 {
            padding-bottom: 0 !important
        }

        .pb-xxl-1 {
            padding-bottom: .25rem !important
        }

        .pb-xxl-2 {
            padding-bottom: .5rem !important
        }

        .pb-xxl-3 {
            padding-bottom: 1rem !important
        }

        .pb-xxl-4 {
            padding-bottom: 1.5rem !important
        }

        .pb-xxl-5 {
            padding-bottom: 3rem !important
        }

        .pl-xxl-0 {
            padding-left: 0 !important
        }

        .pl-xxl-1 {
            padding-left: .25rem !important
        }

        .pl-xxl-2 {
            padding-left: .5rem !important
        }

        .pl-xxl-3 {
            padding-left: 1rem !important
        }

        .pl-xxl-4 {
            padding-left: 1.5rem !important
        }

        .pl-xxl-5 {
            padding-left: 3rem !important
        }

        .text-xxl-left {
            text-align: left !important
        }

        .text-xxl-right {
            text-align: right !important
        }

        .text-xxl-center {
            text-align: center !important
        }
    }

    @media print {
        .d-print-none {
            display: none !important
        }

        .d-print-inline {
            display: inline !important
        }

        .d-print-inline-block {
            display: inline-block !important
        }

        .d-print-block {
            display: block !important
        }

        .d-print-table {
            display: table !important
        }

        .d-print-table-row {
            display: table-row !important
        }

        .d-print-table-cell {
            display: table-cell !important
        }

        .d-print-flex {
            display: flex !important
        }

        .d-print-inline-flex {
            display: inline-flex !important
        }
    }

    /*# sourceMappingURL=bootstrap.min.css.map */

/* .admin-books-iframe{
    object-fit: cover;
    width: 100%;
    height: 100%;
}
.admin-books-info{
    display: grid;
} */

</style>
