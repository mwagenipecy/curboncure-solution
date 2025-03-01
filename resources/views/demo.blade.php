<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more.">
    <meta name="author" content="Themesberg">
    <meta name="generator" content="Hugo 0.123.8">

    <title>Tailwind CSS Customer Service Dashboard - Flowbite</title>

    <link rel="canonical" href="https://flowbite.com/application-ui/demo/homepages/customer-service/">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <style data-fullcalendar=""></style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://www.unpkg.com/flowbite-datepicker@1.3.2/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="https://flowbite.com/application-ui/demo/app.css">

    <link rel="apple-touch-icon" sizes="180x180" href="https://flowbite.com/application-ui/demo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://flowbite.com/application-ui/demo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://flowbite.com/application-ui/demo/favicon-16x16.png">
    <link rel="icon" type="image/png" href="https://flowbite.com/application-ui/demo/favicon.ico">
    <link rel="manifest" href="https://flowbite.com/application-ui/demo/site.webmanifest">
    <link rel="mask-icon" href="https://flowbite.com/application-ui/demo/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="Tailwind CSS Customer Service Dashboard - Flowbite">
    <meta name="twitter:description"
        content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more.">
    <meta name="twitter:image" content="https://flowbite.com/application-ui/demo/images/og-image.jpg">

    <!-- Facebook -->
    <meta property="og:url" content="https://flowbite.com/application-ui/demo/homepages/customer-service/">
    <meta property="og:title" content="Tailwind CSS Customer Service Dashboard - Flowbite">
    <meta property="og:description"
        content="Get started with a premium admin dashboard interface built with Tailwind CSS and Flowbite featuring over 50 example pages of charts, calendars, kanban boards, dashboards, CRUD pages, mailing systems, and more.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://flowbite.com/application-ui/demo/images/og-image.jpg">
    <meta property="og:image:type" content="image/png">



    <script>
        if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia(
                "(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("v2fLMH8w3xgUEQcl63H9", "dark");
        } else {
            document.documentElement.classList.remove("v2fLMH8w3xgUEQcl63H9", "dark");
        }
    </script>

    <style id="apexcharts-css">
        @keyframes opaque {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes resizeanim {

            0%,
            to {
                opacity: 0
            }
        }

        .apexcharts-canvas {
            position: relative;
            user-select: none
        }

        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
        }

        .apexcharts-inner {
            position: relative
        }

        .apexcharts-text tspan {
            font-family: inherit
        }

        .legend-mouseover-inactive {
            transition: .15s ease all;
            opacity: .2
        }

        .apexcharts-legend-text {
            padding-left: 15px;
            margin-left: -15px;
        }

        .apexcharts-series-collapsed {
            opacity: 0
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, .96)
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, .8)
        }

        .apexcharts-tooltip * {
            font-family: inherit
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #eceff1;
            border-bottom: 1px solid #ddd
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, .7);
            border-bottom: 1px solid #333
        }

        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            margin-left: 5px;
            font-weight: 600
        }

        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-z-value:empty,
        .apexcharts-tooltip-title:empty {
            display: none
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex
        }

        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0;
            margin-right: 10px;
            border-radius: 50%
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px
        }

        .apexcharts-custom-tooltip,
        .apexcharts-tooltip-box {
            padding: 4px 8px
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0
        }

        .apexcharts-tooltip-box span.value {
            font-weight: 700
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: 700;
            display: block;
            margin-bottom: 5px
        }

        .apexcharts-xaxistooltip,
        .apexcharts-yaxistooltip {
            opacity: 0;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae
        }

        .apexcharts-xaxistooltip {
            padding: 9px 10px;
            transition: .15s ease all
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-xaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-left: -6px
        }

        .apexcharts-xaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-left: -7px
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #eceff1
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90a4ae
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #eceff1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90a4ae
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-yaxistooltip {
            padding: 4px 10px
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-yaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-top: -6px
        }

        .apexcharts-yaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-top: -7px
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #eceff1
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90a4ae
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #eceff1
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90a4ae
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1
        }

        .apexcharts-yaxistooltip-hidden {
            display: none
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: .15s ease all
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0
        }

        .apexcharts-selection-rect {
            cursor: move
        }

        .svg_select_boundingRect,
        .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_boundingRect,
        .apexcharts-selection-rect+g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_points_l,
        .apexcharts-selection-rect+g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-menu-icon,
        .apexcharts-pan-icon,
        .apexcharts-reset-icon,
        .apexcharts-selection-icon,
        .apexcharts-toolbar-custom-icon,
        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6e8192;
            text-align: center
        }

        .apexcharts-menu-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg {
            fill: #6e8192
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(.76)
        }

        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
            fill: #f3f4f5
        }

        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
            fill: #008ffb
        }

        .apexcharts-theme-light .apexcharts-menu-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
            fill: #333
        }

        .apexcharts-menu-icon,
        .apexcharts-selection-icon {
            position: relative
        }

        .apexcharts-reset-icon {
            margin-left: 5px
        }

        .apexcharts-menu-icon,
        .apexcharts-reset-icon,
        .apexcharts-zoom-icon {
            transform: scale(.85)
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px
        }

        .apexcharts-pan-icon {
            transform: scale(.62);
            position: relative;
            left: 1px;
            top: 0
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6e8192;
            stroke-width: 2
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008ffb
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0 6px 2px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: .15s ease all;
            pointer-events: none
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: .15s ease all
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, .7);
            color: #fff
        }

        @media screen and (min-width:768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1
            }
        }

        .apexcharts-canvas .apexcharts-element-hidden,
        .apexcharts-datalabel.apexcharts-element-hidden,
        .apexcharts-hide .apexcharts-series-points {
            opacity: 0
        }

        .apexcharts-hidden-element-shown {
            opacity: 1;
            transition: 0.25s ease all;
        }

        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value,
        .apexcharts-datalabels,
        .apexcharts-pie-label {
            cursor: default;
            pointer-events: none
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease
        }

        .apexcharts-radialbar-label {
            cursor: pointer;
        }

        .apexcharts-annotation-rect,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-gridline,
        .apexcharts-line,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-point-annotation-label,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon,
        .apexcharts-toolbar svg,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-xaxis-annotation-label,
        .apexcharts-yaxis-annotation-label,
        .apexcharts-zoom-rect {
            pointer-events: none
        }

        .apexcharts-marker {
            transition: .15s ease all
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
            height: 100%;
            width: 100%;
            overflow: hidden
        }

        .contract-trigger:before,
        .resize-triggers,
        .resize-triggers>div {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0
        }

        .resize-triggers>div {
            height: 100%;
            width: 100%;
            background: #eee;
            overflow: auto
        }

        .contract-trigger:before {
            overflow: hidden;
            width: 200%;
            height: 200%
        }

        .apexcharts-bar-goals-markers {
            pointer-events: none
        }

        .apexcharts-bar-shadows {
            pointer-events: none
        }

        .apexcharts-rangebar-goals-markers {
            pointer-events: none
        }
    </style>
</head>



<body class="jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom KRANKvs7gs1E_d0fCA0k">



    <nav
        class="_LPVUrp9Uina5fcERqWC QhmQ_v3mmDFIP9VaVOfb YRrCJSr_j5nopfm4duUc mU8yQmXJPYHX95JD515m t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 RZmKBZs1E1eXw8vkE6jY _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi">
        <div class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j">
            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _HgeI6Dx9I__pBEYsPz0">
                <button id="togglSidebarButton" aria-expanded="true" aria-controls="sidebar"
                    class="_6aYwdjzDCvXK0bVJQOb _SmdlCf6eUKB_V9S5IDj SA5DoMHfwOFtY4h_qzuM Y3FxyuXtj2gecrGXvLEI Z4DH5a4vmjReSFRBpPgz iyrgFoJBjXFzXLcq5BhU _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW wfEkkXhq1BXGkg7xpnO1 N3Gb8rTHzm26fWGpfaqP">
                    <svg class="bLH_DeiQ7Cp4iBqeW3kq RWlOLn85L9w5_1l9GIaX" data-sidebar-toggle-collapse-icon=""
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10">
                        </path>
                    </svg>
                    <svg class="_SmdlCf6eUKB_V9S5IDj bLH_DeiQ7Cp4iBqeW3kq RWlOLn85L9w5_1l9GIaX"
                        data-sidebar-toggle-expand-icon="" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h14"></path>
                    </svg>
                </button>
                <button data-drawer-target="sidebar" data-drawer-toggle="sidebar" aria-expanded="false"
                    aria-controls="sidebar"
                    class="_6aYwdjzDCvXK0bVJQOb oPlV3cK5HfQEd_TT8sK9 SA5DoMHfwOFtY4h_qzuM Y3FxyuXtj2gecrGXvLEI Z4DH5a4vmjReSFRBpPgz iyrgFoJBjXFzXLcq5BhU _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW wfEkkXhq1BXGkg7xpnO1 F34pkf_DAj2DlPtfAEMV">
                    <svg class="bLH_DeiQ7Cp4iBqeW3kq RWlOLn85L9w5_1l9GIaX" data-sidebar-toggle-collapse-icon=""
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h10"></path>
                    </svg>
                </button>
                <a href="https://flowbite.com/application-ui/demo/" class="y7LTF_4HCOoAzmZm_v8k YRrCJSr_j5nopfm4duUc">
                    <img src="https://flowbite.com/application-ui/demo/images/logo.svg"
                        class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP" alt="Flowbite Logo">
                    <span
                        class="_rCfAafI7lqYALljdSxM BHrWGjM1Iab_fAz0_91H q1oXbofRCOhVhOSB8tiU yM_AorRf2jSON3pDsdrz OyABRrnTV_kvHV7dJ0uE">Flowbite</span>
                </a>
                <form action="#" method="GET"
                    class="_SmdlCf6eUKB_V9S5IDj Yv6MasvLpkmInnA0LqbC _ZEjWxRKuh31dvJ40NGj">
                    <label for="topbar-search" class="_DVAfiyo21kM68EUVzEQ">Search</label>
                    <div class="ahOqFrhzLjivRe8a1kX_ skGrjyHRlWNG_cHY40Cg">
                        <div
                            class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 aa_y6SeayB9fNgBD5ROa">
                            <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"></path>
                            </svg>
                        </div>
                        <input type="text" name="email" id="topbar-search"
                            class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx nbfkCvNleKWN7Pz3_DQF __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput gx_pYWtAG2cJIqhquLbx"
                            placeholder="Search">
                    </div>
                </form>
            </div>
            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 WD962RTivt8M5sMg7WrS">
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ tS181Wfa_gkJpFt03pqL">
                    <button id="toggleSidebarMobileSearch" type="button"
                        class="mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n _q0p_O8QLU1paqtuqmI2 KLtw3_OqL54e_zEQU_yi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW ICV24pqO8p1LJm4GEOgS F34pkf_DAj2DlPtfAEMV">
                        <span class="_DVAfiyo21kM68EUVzEQ">Search</span>

                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"></path>
                        </svg>
                    </button>

                    <button type="button" data-dropdown-toggle="notification-dropdown"
                        class="mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n _q0p_O8QLU1paqtuqmI2 KLtw3_OqL54e_zEQU_yi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW ICV24pqO8p1LJm4GEOgS">
                        <span class="_DVAfiyo21kM68EUVzEQ">View notifications</span>

                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M17.133 12.632v-1.8a5.407 5.407 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.933.933 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175Zm-13.267-.8a1 1 0 0 1-1-1 9.424 9.424 0 0 1 2.517-6.391A1.001 1.001 0 1 1 6.854 5.8a7.43 7.43 0 0 0-1.988 5.037 1 1 0 0 1-1 .995Zm16.268 0a1 1 0 0 1-1-1A7.431 7.431 0 0 0 17.146 5.8a1 1 0 0 1 1.471-1.354 9.424 9.424 0 0 1 2.517 6.391 1 1 0 0 1-1 .995ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z">
                            </path>
                        </svg>
                    </button>

                    <div class="Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th _Vb9igHms0hI1PQcvp_S _SmdlCf6eUKB_V9S5IDj ZhzOGpbwY0R4TKKYr5pG Zy1Pypi71Xu6guex6urN NIAblPiyeuYQ0zW671xb wBVMFkIGfrKshbvi2gS1 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mfNtySJCsKVaP2xnoGBY PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                        id="notification-dropdown" data-popper-placement="bottom"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1265px, 60px);">
                        <div
                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j _9dH7mrOkzM4RTmidHTs RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE">
                            <h3>Notifications</h3>
                            <button type="button" data-tooltip-target="tooltip-options-notification"
                                class="YRrCJSr_j5nopfm4duUc SA5DoMHfwOFtY4h_qzuM Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4">
                                    </path>
                                </svg>

                                <span class="_DVAfiyo21kM68EUVzEQ">Options</span>
                            </button>
                            <div id="tooltip-options-notification" role="tooltip"
                                class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 8px);">
                                Options
                                <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                                    style="position: absolute; left: 0px; transform: translate(0px, 0px);"></div>
                            </div>
                        </div>
                        <div
                            class="ahOqFrhzLjivRe8a1kX_ DQNz_SZt35NaATwiWXi8 sO_tinfrMVt7QYxF_dd8 _1jTZ8KXRZul60S6czNi">
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc EpUSgjHdM6oyMXUiK_8_ RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_"
                                        src="https://flowbite.com/application-ui/demo/images/users/lana-byrd.png"
                                        alt="Lana avatar">
                                    <div
                                        class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o g40_g3BQzYCOX5eZADgY y6GKdvUrd7vp_pxsFb57 _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div
                                        class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        New message from <span
                                            class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Lana
                                            Byrd</span>: "Hey, what's up? All set for the presentation?"</div>
                                    <div
                                        class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">
                                        a few moments ago</div>
                                </div>
                            </a>
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc EpUSgjHdM6oyMXUiK_8_ RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_"
                                        src="https://flowbite.com/application-ui/demo/images/users/jese-leos.png"
                                        alt="Jese Leos avatar">
                                    <div
                                        class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o foDHZclRWUf2bqma2a8U _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="iRRyDh3hk0uKgmcxvdhD MNmifiddIP3pgI1Ifwlm y6GKdvUrd7vp_pxsFb57"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 18">
                                            <path
                                                d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div
                                        class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <span
                                            class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Jese
                                            leos</span> started following you.</div>
                                    <div
                                        class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">
                                        10 minutes ago</div>
                                </div>
                            </a>
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc EpUSgjHdM6oyMXUiK_8_ RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_"
                                        src="https://flowbite.com/application-ui/demo/images/users/bonnie-green.png"
                                        alt="Bonnie avatar">
                                    <div
                                        class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o zor3C6otq8jG5rQgLVwO _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf y6GKdvUrd7vp_pxsFb57"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M20.337 3.664c.213.212.354.486.404.782.294 1.711.657 5.195-.906 6.76-1.77 1.768-8.485 5.517-10.611 6.683a.987.987 0 0 1-1.176-.173l-.882-.88-.877-.884a.988.988 0 0 1-.173-1.177c1.165-2.126 4.913-8.841 6.682-10.611 1.562-1.563 5.046-1.198 6.757-.904.296.05.57.191.782.404ZM5.407 7.576l4-.341-2.69 4.48-2.857-.334a.996.996 0 0 1-.565-1.694l2.112-2.111Zm11.357 7.02-.34 4-2.111 2.113a.996.996 0 0 1-1.69-.565l-.422-2.807 4.563-2.74Zm.84-6.21a1.99 1.99 0 1 1-3.98 0 1.99 1.99 0 0 1 3.98 0Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div
                                        class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <span
                                            class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Bonnie
                                            Green</span> is requesting to upgrade the Flowbite Plan.</div>
                                    <div
                                        class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 EU43bH15DCmsqkGyVBGj">
                                        <button type="button"
                                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM icxWjIgUd9_dzYucx1nx">
                                            Accept
                                        </button>
                                        <button type="button"
                                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j icxWjIgUd9_dzYucx1nx">
                                            Decline
                                        </button>
                                    </div>
                                    <div
                                        class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">
                                        32 minutes ago</div>
                                </div>
                            </a>
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc EpUSgjHdM6oyMXUiK_8_ RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_"
                                        src="https://flowbite.com/application-ui/demo/images/users/joseph-mcfall.png"
                                        alt="Joseph McFall avatar">
                                    <div
                                        class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o SdPDrbResNmgnA0L4Iki _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="iRRyDh3hk0uKgmcxvdhD MNmifiddIP3pgI1Ifwlm y6GKdvUrd7vp_pxsFb57"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 18">
                                            <path
                                                d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div
                                        class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <span
                                            class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Joseph
                                            Mcfall</span> and <span
                                            class="ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">141
                                            others</span> love your story. See it and view more stories.
                                    </div>
                                    <div
                                        class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">
                                        44 minutes ago</div>
                                </div>
                            </a>
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc EpUSgjHdM6oyMXUiK_8_ RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_"
                                        src="https://flowbite.com/application-ui/demo/images/users/roberta-casas.png"
                                        alt="Roberta Casas image">
                                    <div
                                        class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _8jNXfz935bbH_fAUIpN _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="iRRyDh3hk0uKgmcxvdhD MNmifiddIP3pgI1Ifwlm y6GKdvUrd7vp_pxsFb57"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 18">
                                            <path
                                                d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div
                                        class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <span
                                            class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Leslie
                                            Livingston</span> mentioned you in a comment: <span
                                            class="ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ fZf6W_ZtzEh6EEqmWMA9">@bonnie.green</span>
                                        what do you say?
                                    </div>
                                    <div
                                        class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">
                                        1 hour ago</div>
                                </div>
                            </a>
                            <a href="#"
                                class="YRrCJSr_j5nopfm4duUc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 _7KA5gD55t2lxf9Jkj20 RzANcaqunVvlLrO6_tal">
                                <div class="VQS2tmQ_zFyBOC2tkmto">
                                    <img class="TZANVyZaogC2vtqxZ7oo Rr_S4jo1he4sYSgq5LE_ RpVwy4sO7Asb86CncKJ_"
                                        src="https://flowbite.com/application-ui/demo/images/users/robert-brown.png"
                                        alt="Robert image">
                                    <div
                                        class="pq2JRWtiWcwYnw3xueNl XZQ1UNoAcQMIV4si4Jk_ MNgnvsy4e42uHuBwxxJg YRrCJSr_j5nopfm4duUc rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU RpVwy4sO7Asb86CncKJ_ pXhVRBC8yaUNllmIWxln MGZ9bvBP5fgetIhNCD_o _I92_RswYrnpS0B5dKZO _fGhMnSfYmaGrv7DvZ00">
                                        <svg class="iRRyDh3hk0uKgmcxvdhD MNmifiddIP3pgI1Ifwlm y6GKdvUrd7vp_pxsFb57"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 14">
                                            <path
                                                d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="t6gkcSf0Bt4MLItXvDJ_ aa_y6SeayB9fNgBD5ROa">
                                    <div
                                        class="iPpA4AtZi__uabBE5IKW c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        <span
                                            class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Robert
                                            Brown</span> posted a new video: Glassmorphism - learn how to implement the
                                        new design trend.
                                    </div>
                                    <div
                                        class="gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ s1eV9SScay8owH_251UR">
                                        3 hours ago</div>
                                </div>
                            </a>
                        </div>
                        <a href="#"
                            class="_Vb9igHms0hI1PQcvp_S _9dH7mrOkzM4RTmidHTs b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl lBgPGkku8NiP5ReH09_2 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal Eu6DAInc_AYT0KJ7LY1L">
                            <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                <svg class="IRKzgyPj4qWOh2vq2xBg rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                View all
                            </div>
                        </a>
                    </div>

                    <button type="button" data-dropdown-toggle="apps-dropdown"
                        class="_SmdlCf6eUKB_V9S5IDj mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n _q0p_O8QLU1paqtuqmI2 KLtw3_OqL54e_zEQU_yi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW ICV24pqO8p1LJm4GEOgS rvdRhGyExrNYTA6euxsF">
                        <span class="_DVAfiyo21kM68EUVzEQ">View notifications</span>

                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div class="Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th _SmdlCf6eUKB_V9S5IDj ZhzOGpbwY0R4TKKYr5pG xdunzYpzbwcYs_0Tjgcz wBVMFkIGfrKshbvi2gS1 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 d3C8uAdJKNl1jzfE9ynq mfNtySJCsKVaP2xnoGBY jqg6J89cvxmDiFpnV56r"
                        id="apps-dropdown" data-popper-placement="bottom"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1305px, 60px);">
                        <div
                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _9dH7mrOkzM4RTmidHTs RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE">
                            <h3>Applications</h3>
                            <button type="button" data-tooltip-target="tooltip-options-apps"
                                class="YRrCJSr_j5nopfm4duUc SA5DoMHfwOFtY4h_qzuM Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4">
                                    </path>
                                </svg>

                                <span class="_DVAfiyo21kM68EUVzEQ">Options</span>
                            </button>
                            <div id="tooltip-options-apps" role="tooltip"
                                class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 8px);">
                                Options
                                <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                                    style="position: absolute; left: 0px; transform: translate(0px, 0px);"></div>
                            </div>
                        </div>
                        <div
                            class="xCPtuxM4_gihvpPwv9bX VWCEsSASYzme_Objbtiq iHPddplqYvrN6qWgvntn _wYiJGbRZyFZeCc8y7Sf _1jTZ8KXRZul60S6czNi">
                            <a href="https://flowbite.com/application-ui/demo/calendar/"
                                class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <div
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Calendar</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/video/meeting-room/"
                                class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M14 7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7Zm2 9.387 4.684 1.562A1 1 0 0 0 22 17V7a1 1 0 0 0-1.316-.949L16 7.613v8.774Z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <div
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Meeting</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/pages/text-editor/"
                                class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 7a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7Zm5.01 1H5v2.01h2.01V8Zm3 0H8v2.01h2.01V8Zm3 0H11v2.01h2.01V8Zm3 0H14v2.01h2.01V8Zm3 0H17v2.01h2.01V8Zm-12 3H5v2.01h2.01V11Zm3 0H8v2.01h2.01V11Zm3 0H11v2.01h2.01V11Zm3 0H14v2.01h2.01V11Zm3 0H17v2.01h2.01V11Zm-12 3H5v2.01h2.01V14ZM8 14l-.001 2 8.011.01V14H8Zm11.01 0H17v2.01h2.01V14Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Text Editor</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/chat/"
                                class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z"
                                        clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                        d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <div
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Chat Room</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/pages/datatables/"
                                class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Zm2 8v-2h7v2H4Zm0 2v2h7v-2H4Zm9 2h7v-2h-7v2Zm7-4v-2h-7v2h7Z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <div
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Datatables</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/kanban/"
                                class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-3 8a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Zm2 5a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1Zm-2-1a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H9Z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <div
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Tasks</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/mailing/inbox/"
                                class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <div
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Inbox</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/support/tickets/"
                                class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                <div
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Support</div>
                            </a>
                            <a href="https://flowbite.com/application-ui/demo/pages/api/"
                                class="BpcA_ZTX79XDgSc71n2v _Vb9igHms0hI1PQcvp_S W5n_NSFnC6y2nqoHw_5x jtAJHOc7mn7b4IKRO59D _wYiJGbRZyFZeCc8y7Sf ijrOHNoSVGATsWYKl4Id _7KA5gD55t2lxf9Jkj20 jqg6J89cvxmDiFpnV56r RzANcaqunVvlLrO6_tal">
                                <svg class="YajDCE_nRj_FDIevNpsd TR_P65x9ie7j6uxFo_Cs rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ _JmTNv5EiHqK2A1jcQSf NzWVK_7tC7RieYegqwsr XIIs8ZOri3wm8Wnj9N_y rshXnTqHveA3RK6my333"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M6.94318 11h-.85227l.96023-2.90909h1.07954L9.09091 11h-.85227l-.63637-2.10795h-.02272L6.94318 11Zm-.15909-1.14773h1.60227v.59093H6.78409v-.59093ZM9.37109 11V8.09091h1.25571c.2159 0 .4048.04261.5667.12784.162.08523.2879.20502.3779.35937.0899.15436.1349.33476.1349.5412 0 .20833-.0464.38873-.1392.54119-.0918.15246-.2211.26989-.3878.35229-.1657.0824-.3593.1236-.5809.1236h-.75003v-.61367h.59093c.0928 0 .1719-.0161.2372-.0483.0663-.03314.1169-.08002.152-.14062.036-.06061.054-.13211.054-.21449 0-.08334-.018-.15436-.054-.21307-.0351-.05966-.0857-.10511-.152-.13636-.0653-.0322-.1444-.0483-.2372-.0483h-.2784V11h-.78981Zm3.41481-2.90909V11h-.7898V8.09091h.7898Z">
                                    </path>
                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                        d="M8.31818 2c-.55228 0-1 .44772-1 1v.72878c-.06079.0236-.12113.04809-.18098.07346l-.55228-.53789c-.38828-.37817-1.00715-.37817-1.39543 0L3.30923 5.09564c-.19327.18824-.30229.44659-.30229.71638 0 .26979.10902.52813.30229.71637l.52844.51468c-.01982.04526-.03911.0908-.05785.13662H3c-.55228 0-1 .44771-1 1v2.58981c0 .5523.44772 1 1 1h.77982c.01873.0458.03802.0914.05783.1366l-.52847.5147c-.19327.1883-.30228.4466-.30228.7164 0 .2698.10901.5281.30228.7164l1.88026 1.8313c.38828.3781 1.00715.3781 1.39544 0l.55228-.5379c.05987.0253.12021.0498.18102.0734v.7288c0 .5523.44772 1 1 1h2.65912c.5523 0 1-.4477 1-1v-.7288c.1316-.0511.2612-.1064.3883-.1657l.5435.2614v.4339c0 .5523.4477 1 1 1H14v.0625c0 .5523.4477 1 1 1h.0909v.0625c0 .5523.4477 1 1 1h.6844l.4952.4823c1.1648 1.1345 3.0214 1.1345 4.1863 0l.2409-.2347c.1961-.191.3053-.454.3022-.7277-.0031-.2737-.1183-.5342-.3187-.7207l-6.2162-5.7847c.0173-.0398.0342-.0798.0506-.12h.7799c.5522 0 1-.4477 1-1V8.17969c0-.55229-.4478-1-1-1h-.7799c-.0187-.04583-.038-.09139-.0578-.13666l.5284-.51464c.1933-.18824.3023-.44659.3023-.71638 0-.26979-.109-.52813-.3023-.71637l-1.8803-1.8313c-.3883-.37816-1.0071-.37816-1.3954 0l-.5523.53788c-.0598-.02536-.1201-.04985-.1809-.07344V3c0-.55228-.4477-1-1-1H8.31818Z">
                                    </path>
                                </svg>

                                <div
                                    class="c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    API</div>
                            </a>
                            <button type="button"
                                class="zlX75_iyhXwEnDUj6uRa YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                View all
                            </button>
                        </div>
                    </div>
                    <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button"
                        class="mveJTCIb2WII7J4sY22F Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 BkIbg_JwkgiyRW804Hhu _q0p_O8QLU1paqtuqmI2 _6wdnQrxT_dGdAdNk5AQ XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX yChACvAr1v8czJ2VO22j">
                        <svg id="theme-toggle-dark-icon" class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12.3224 5.68708c.2935-.31028.3575-.77266.1594-1.15098-.1981-.37832-.6146-.5891-1.0368-.52467-1.50847.2302-2.93175.83665-4.12869 1.76276-1.19717.92628-2.12732 2.1411-2.69465 3.52702-.56744 1.38619-.75115 2.89299-.53164 4.37079.2195 1.4776.83393 2.8711 1.77895 4.0436.9448 1.1722 2.18683 2.0826 3.60103 2.6449 1.414.5623 2.9539.7584 4.4683.57 1.5145-.1884 2.9549-.7551 4.1784-1.6475 1.2237-.8924 2.1892-2.0806 2.7972-3.4499.1723-.3879.0809-.8423-.2279-1.1335-.3089-.2911-.7679-.3556-1.145-.1608-.8631.4459-1.8291.6799-2.8118.6791h-.0018c-1.1598.0013-2.2925-.3234-3.2596-.931-.9667-.6074-1.7244-1.4697-2.1856-2.4779-.4611-1.0078-.6079-2.1209-.4243-3.20511.1835-1.08442.6905-2.09837 1.4645-2.91681Z">
                            </path>
                        </svg>

                        <svg id="theme-toggle-light-icon"
                            class="_SmdlCf6eUKB_V9S5IDj MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M13 3a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0V3ZM6.343 4.929A1 1 0 0 0 4.93 6.343l1.414 1.414a1 1 0 0 0 1.414-1.414L6.343 4.929Zm12.728 1.414a1 1 0 0 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 1.414 1.414l1.414-1.414ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-9 4a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H3Zm16 0a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2h-2ZM7.757 17.657a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414Zm9.9-1.414a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM13 19a1 1 0 1 0-2 0v2a1 1 0 1 0 2 0v-2Z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div id="tooltip-toggle" role="tooltip"
                        class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf"
                        data-popper-placement="bottom"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1273px, 58px);">
                        Toggle dark mode
                        <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                            style="position: absolute; left: 0px; transform: translate(69px, 0px);"></div>
                    </div>
                </div>
                <div
                    class="_SmdlCf6eUKB_V9S5IDj rxe6apEJoEk8r75xaVNG xUcCzntJXjlyYV0K8cfa _9dH7mrOkzM4RTmidHTs jqg6J89cvxmDiFpnV56r q9tHTtfvjP4K5atJnf4v">
                </div>
                <button type="button"
                    class="gtlIjUq8I0xb1BZjyfWO YRrCJSr_j5nopfm4duUc _VPh6kIywCMfXFfQLas4 RpVwy4sO7Asb86CncKJ_ RwT9RGumnuqUj7lx7fdb c8dCx6gnV43hTOLV6ks5 _q0p_O8QLU1paqtuqmI2 KLtw3_OqL54e_zEQU_yi ICV24pqO8p1LJm4GEOgS _pefCw3mdzwgpGQST5xB"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="accountDropdown">
                    <span class="_DVAfiyo21kM68EUVzEQ">Open user menu</span>
                    <img class="mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf _VPh6kIywCMfXFfQLas4 RpVwy4sO7Asb86CncKJ_"
                        src="https://flowbite.com/application-ui/demo/images/users/roberta-casas.png"
                        alt="user photo">
                </button>

                <div id="accountDropdown"
                    class="_SmdlCf6eUKB_V9S5IDj bRYMMxpZGWWpnEZnNVhh Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH wBVMFkIGfrKshbvi2gS1 _lTTGxW9MVI40FyDCtmr mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                    data-popper-placement="bottom"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1408px, 58px);">
                    <ul
                        class="FJRldeiG2gFGZfuKgp88 Sh_nhSr0Y5lUywmHhhs_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        <li>
                            <a href="#" title=""
                                class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Account
                            </a>
                        </li>
                        <li>
                            <a href="#" title=""
                                class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M9.586 2.586A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2v.089l.473.196.063-.063a2.002 2.002 0 0 1 2.828 0l1.414 1.414a2 2 0 0 1 0 2.827l-.063.064.196.473H20a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-.089l-.196.473.063.063a2.002 2.002 0 0 1 0 2.828l-1.414 1.414a2 2 0 0 1-2.828 0l-.063-.063-.473.196V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.089l-.473-.196-.063.063a2.002 2.002 0 0 1-2.828 0l-1.414-1.414a2 2 0 0 1 0-2.827l.063-.064L4.089 15H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h.09l.195-.473-.063-.063a2 2 0 0 1 0-2.828l1.414-1.414a2 2 0 0 1 2.827 0l.064.063L9 4.089V4a2 2 0 0 1 .586-1.414ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Settings
                            </a>
                        </li>
                        <li>
                            <a href="#" title=""
                                class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Privacy
                            </a>
                        </li>
                        <li>
                            <a href="#" title=""
                                class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM6 6a1 1 0 0 1-.707-.293l-1-1a1 1 0 0 1 1.414-1.414l1 1A1 1 0 0 1 6 6Zm-2 4H3a1 1 0 0 1 0-2h1a1 1 0 1 1 0 2Zm14-4a1 1 0 0 1-.707-1.707l1-1a1 1 0 1 1 1.414 1.414l-1 1A1 1 0 0 1 18 6Zm3 4h-1a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z">
                                    </path>
                                </svg>
                                Notifications
                            </a>
                        </li>
                    </ul>

                    <ul
                        class="FJRldeiG2gFGZfuKgp88 Sh_nhSr0Y5lUywmHhhs_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        <li>
                            <a href="#" title=""
                                class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Help Guide
                            </a>
                        </li>
                        <li>
                            <a href="#" title=""
                                class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Help Center
                            </a>
                        </li>
                    </ul>

                    <ul
                        class="FJRldeiG2gFGZfuKgp88 Sh_nhSr0Y5lUywmHhhs_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        <li>
                            <span
                                class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                        clip-rule="evenodd"></path>
                                </svg>

                                Limited Access

                                <label
                                    class="zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R SA5DoMHfwOFtY4h_qzuM Q_jg_EPdNf9eDMn1mLI2">
                                    <input type="checkbox" value=""
                                        class="aOpxpduJhFdYT26YEhfy _DVAfiyo21kM68EUVzEQ" name="time-limit-mode">
                                    <div
                                        class="aOpxpduJhFdYT26YEhfy ahOqFrhzLjivRe8a1kX_ rxe6apEJoEk8r75xaVNG _Ny9QDPUchYYWYAZdFEM RpVwy4sO7Asb86CncKJ_ WwS1mve_UI16RedcVHEs S_YYrpbZltCzhBNM_SJm _TBUtzAY4pgBKqt_xlfa suTnhPGy2O_0tdt_JtLf T5NeULPeRaxbuMOTvCZ4 pvtdS0kDVQDBbBe9R4XA B0lYQ0_9vlBf0CZnE9ef UnITYitJpD1sMNddmIZ9 mVEwBMPbZ9_uWPD1J6FL _o9AusRI8qWv3B0gIXh4 _6REaLtGbw9GOx78YcIB mckNmP7av8zMKc516vkZ _LFgmR5pGKzbcmZZxpN3 k0G8B6nnxyBP2SOsOaeZ K9lI4s8CJ1eWRBhVkBu_ BprGbFuFZu_JMvPp_KVR _zhHKgVWUHLt2EvhvLe2 nmPW5_vZUJWfg188gd6P _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK wFpbzujv4k1ue7OGEHIk __DpA37hFv9xxwpmWpYq">
                                    </div>
                                    <span class="_DVAfiyo21kM68EUVzEQ">Toggle time-limited access on</span>
                                </label>
                            </span>
                        </li>
                    </ul>

                    <ul
                        class="FJRldeiG2gFGZfuKgp88 Sh_nhSr0Y5lUywmHhhs_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        <li>
                            <a href="#" title=""
                                class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _5Tr_VpHPDHkr3MEHnD3 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 m_WzesDEb91pTPmX64rt _0tuqSFFgAPtInMS4ZnM Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"></path>
                                </svg>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div
        class="YRrCJSr_j5nopfm4duUc wBVMFkIGfrKshbvi2gS1 jtAJHOc7mn7b4IKRO59D UZ9xFK4mqjHjj8e8yJwf h8KYXnua2NT4kTVzieom">

        <aside id="sidebar"
            class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM uQByIGHtHssL9HoPQXR4 rBEQnDddLcKNSnbv_P6W rhJ7qSuv_H6qJxmzGcAa nUVQqdd_RQjvvOrcRIpD gJkA1vzadgWLGEfN5oKt tydApFk2TI9aladuOmdP gZ3KuFw1JESHhOJhjT8j l1DoGdw3bRhV5LHHY_iu mJTIhpUssMkzLKe2zbZD N5jaibiQ4mxzTXKEGva7 _4WgNWc3cZlZk30Mtf_0 left-0 top-0"
            aria-label="Sidebar" aria-hidden="true">
            <div
                class="uLPch_bqyJDXwe5tynMV _lTTGxW9MVI40FyDCtmr hEIh0_vxSXD_ZBXYxnd0 qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI _9igzqn_6D3Qq5Hcwkfk _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi">
                <ul class="TVHgSaRh3muGJct_epr9">
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-dashboards" data-collapse-toggle="dropdown-dashboards"
                            data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z">
                                </path>
                                <path
                                    d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z">
                                </path>
                            </svg>

                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">Dashboards</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-dashboards" class="TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/saas/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">SaaS</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/e-commerce/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">E-commerce</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/marketing/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Marketing</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/car-service/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Car Service</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/logistics/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Logistics</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/bank/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Bank</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/crypto/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Crypto</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/music/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Music</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/project-management/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Project Management</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/homepages/customer-service/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX _9dH7mrOkzM4RTmidHTs jqg6J89cvxmDiFpnV56r BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Customer Service</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages"
                            data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M9 7V2.221a2 2 0 0 0-.5.365L4.586 6.5a2 2 0 0 0-.365.5H9Zm2 0V2h7a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Zm2-2a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2h-3Zm0 3a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2h-3Zm-6 4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-6Zm8 1v1h-2v-1h2Zm0 3h-2v1h2v-1Zm-4-3v1H9v-1h2Zm0 3H9v1h2v-1Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">Pages</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-pages"
                                class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/kanban/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Kanban</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/calendar/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Calendar</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/chat-room/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Chat Room</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/text-editor/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Text Editor</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/ai-chat/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">AI Chat</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/datatables/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Data Tables</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/notifications/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Notifications</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/events/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Events</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/integrations/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Integrations</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/api/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">API Keys</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/pages/pricing/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Pricing</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales"
                            data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">E-commerce</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-sales"
                                class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/products/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Products</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/billing/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Billing</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/invoices/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Invoices</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/invoice/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Single Invoice</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/create-invoice/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Create Invoice</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/transactions/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Transactions</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/e-commerce/transaction/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Single Transaction</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-users" data-collapse-toggle="dropdown-users"
                            data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                                    clip-rule="evenodd"></path>
                            </svg>

                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">Users</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-users"
                                class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/users/list/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">All Users</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/users/settings/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Settings</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/users/profile/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Profile</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/users/feed/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Activity</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-support" data-collapse-toggle="dropdown-support"
                            data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z"
                                    clip-rule="evenodd"></path>
                            </svg>

                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">Support</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-support"
                                class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/support/tickets/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Tickets Overview</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/support/ticket/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Ticket Reply</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-project-management"
                            data-collapse-toggle="dropdown-project-management" data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2a1 1 0 0 0-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.707 8.707a1 1 0 0 0-1.414-1.414L11 14.586l-1.293-1.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4Z"
                                    clip-rule="evenodd"></path>
                            </svg>

                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">Projects</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-project-management"
                                class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/to-do/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">To Do</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/all-projects/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">All Projects</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/my-projects/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">My Projects</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/project-summary/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Project Summary</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/to-do-upcoming/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">My Tasks</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/project-management/all-files/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">All Files</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-mailing" data-collapse-toggle="dropdown-mailing"
                            data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z">
                                </path>
                            </svg>
                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">Mailing</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-mailing"
                                class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/mailing/inbox/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Inbox</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/mailing/read/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Read</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/mailing/reply/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Reply</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-video-call" data-collapse-toggle="dropdown-video-call"
                            data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M14 7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7Zm2 9.387 4.684 1.562A1 1 0 0 0 22 17V7a1 1 0 0 0-1.316-.949L16 7.613v8.774Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">Video Call</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-video-call"
                                class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/video/create-meeting/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Create Meeting</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/video/join-call/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Join Call</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/video/meeting-room/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Meeting Room</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/video/rate-conversation/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Rate Conversation</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-audio-call" data-collapse-toggle="dropdown-audio-call"
                            data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z">
                                </path>
                            </svg>
                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">Audio Call</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-audio-call"
                                class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/audio/outgoing-call/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Outgoing Call</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/audio/incoming-call/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Incoming Call</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/audio/in-call/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">In Call</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/audio/call-ended/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Call Ended</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication"
                            data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
                                    clip-rule="evenodd"></path>
                            </svg>

                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">Authentication</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-authentication"
                                class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/sign-in/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Sign In</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/sign-up/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Sign Up</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/forgot-password/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Forgot Password</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/reset-password/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Reset Password</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/two-factor/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Two Factor</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/authentication/profile-lock/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Profile Lock</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button type="button"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX"
                            aria-controls="dropdown-status" data-collapse-toggle="dropdown-status"
                            data-sidebar-collapse-item="">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                    clip-rule="evenodd"></path>
                            </svg>

                            <span
                                class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe BHrWGjM1Iab_fAz0_91H upQp7iWehfaU8VTbfx_w"
                                data-sidebar-collapse-hide="">Status Pages</span>
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" data-sidebar-collapse-hide=""
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div data-sidebar-collapse-hide="" class="">
                            <ul id="dropdown-status"
                                class="_SmdlCf6eUKB_V9S5IDj TVHgSaRh3muGJct_epr9 b9aD6g2qw84oyZNsMO8j">
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/status/404/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">404 Not Found</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/status/500/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">500 Server Error</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/status/maintenance/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Maintenance</a>
                                </li>
                                <li>
                                    <a href="https://flowbite.com/application-ui/demo/status/server-status/"
                                        class="_7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE"
                                        data-sidebar-collapse-subitem="">Server Status</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul
                    class="tWsY5Fnz4tNG7Tvdaxnz TVHgSaRh3muGJct_epr9 pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V LVS5VhNiuUNp2iESGVfr _fGhMnSfYmaGrv7DvZ00">
                    <li>
                        <a data-sidebar-collapse-item="" href="https://flowbite.com/pro/#pricing" target="_blank"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq _74lpPUMEtHf6F0_fjLe"
                                data-sidebar-collapse-hide="">Unlock Code</span>
                            <svg data-sidebar-collapse-hide="" class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778">
                                </path>
                            </svg>

                        </a>
                    </li>
                    <li>
                        <a data-sidebar-collapse-item=""
                            href="https://flowbite.com/docs/getting-started/introduction/" target="_blank"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq" data-sidebar-collapse-hide="">Docs</span>
                        </a>
                    </li>
                    <li>
                        <a data-sidebar-collapse-item="" href="https://flowbite.com/blocks/" target="_blank"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M5 3a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5Zm14 18a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4ZM5 11a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H5Zm14 2a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h4Z">
                                </path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq" data-sidebar-collapse-hide="">Components</span>
                        </a>
                    </li>
                    <li>
                        <a data-sidebar-collapse-item="" href="https://flowbite.com/contact/" target="_blank"
                            class="BpcA_ZTX79XDgSc71n2v YRrCJSr_j5nopfm4duUc Mln3CkDzLcoVQAC3Uqsd Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 OyABRrnTV_kvHV7dJ0uE OPrb_iG5WDy_7F05BDOX">
                            <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_ VQS2tmQ_zFyBOC2tkmto _JmTNv5EiHqK2A1jcQSf _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="m7.4 3.736 3.43 3.429A5.046 5.046 0 0 1 12.133 7c.356.01.71.06 1.056.147l3.41-3.412a2.32 2.32 0 0 1 .451-.344A9.89 9.89 0 0 0 12.268 2a10.022 10.022 0 0 0-5.322 1.392c.165.095.318.211.454.344Zm11.451 1.54-.127-.127a.5.5 0 0 0-.706 0l-2.932 2.932c.03.023.05.054.078.077.237.194.454.41.651.645.033.038.077.067.11.107l2.926-2.927a.5.5 0 0 0 0-.707Zm-2.931 9.81c-.025.03-.058.052-.082.082a4.97 4.97 0 0 1-.633.639c-.04.036-.072.083-.115.117l2.927 2.927a.5.5 0 0 0 .707 0l.127-.127a.5.5 0 0 0 0-.707l-2.932-2.931Zm-1.443-4.763a3.037 3.037 0 0 0-1.383-1.1l-.012-.007a2.956 2.956 0 0 0-1-.213H12a2.964 2.964 0 0 0-2.122.893c-.285.29-.509.634-.657 1.013l-.009.016a2.96 2.96 0 0 0-.21 1 2.99 2.99 0 0 0 .488 1.716l.032.04a3.04 3.04 0 0 0 1.384 1.1l.012.007c.319.129.657.2 1 .213.393.015.784-.05 1.15-.192.012-.005.021-.013.033-.018a3.01 3.01 0 0 0 1.676-1.7v-.007a2.89 2.89 0 0 0 0-2.207 2.868 2.868 0 0 0-.27-.515c-.007-.012-.02-.025-.03-.039Zm6.137-3.373a2.53 2.53 0 0 1-.349.447l-3.426 3.426c.112.428.166.869.161 1.311a4.954 4.954 0 0 1-.148 1.054l3.413 3.412c.133.134.249.283.347.444A9.88 9.88 0 0 0 22 12.269a9.913 9.913 0 0 0-1.386-5.319ZM16.6 20.264l-3.42-3.421c-.386.1-.782.152-1.18.157h-.135c-.356-.01-.71-.06-1.056-.147L7.4 20.265a2.503 2.503 0 0 1-.444.347A9.884 9.884 0 0 0 11.732 22H12a9.9 9.9 0 0 0 5.044-1.388 2.515 2.515 0 0 1-.444-.348ZM3.735 16.6l3.426-3.426a4.608 4.608 0 0 1-.013-2.367L3.735 7.4a2.508 2.508 0 0 1-.349-.447 9.889 9.889 0 0 0 0 10.1 2.48 2.48 0 0 1 .35-.453Zm5.101-.758a4.959 4.959 0 0 1-.65-.645c-.034-.038-.078-.067-.11-.107L5.15 18.017a.5.5 0 0 0 0 .707l.127.127a.5.5 0 0 0 .706 0l2.932-2.933c-.029-.018-.049-.053-.078-.076Zm-.755-6.928c.03-.037.07-.063.1-.1.183-.22.383-.423.6-.609.046-.04.081-.092.128-.13L5.983 5.149a.5.5 0 0 0-.707 0l-.127.127a.5.5 0 0 0 0 .707l2.932 2.931Z">
                                </path>
                            </svg>
                            <span class="oA7zcT_42jVeFuWTXQnq" data-sidebar-collapse-hide="">Help</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="main-content"
            class="ahOqFrhzLjivRe8a1kX_ uLPch_bqyJDXwe5tynMV t6gkcSf0Bt4MLItXvDJ_ pdl952ted2i71qBLPIcQ jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom MKeLnCkZhCbipNorZ2hW">
            <main>

                <div class="RZmKBZs1E1eXw8vkE6jY">
                    <!-- Widget -->
                    <div
                        class="aJF41JQLhtfw_MCGt5Th mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                        <div
                            class="_7_AEkSp_Gi6KH9ZW6st sJNGKHxFYdN5Nzml5J2j EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00 rvdRhGyExrNYTA6euxsF kCQGtERD_aSAXf29CPQZ">
                            <div class="hD0sTTDgbxakubcHVW2X tkZo48dB4RhnHSlDXzoe">
                                <h2
                                    class="TR_P65x9ie7j6uxFo_Cs vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Website performance</h2>
                                <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Last month website stats.</p>
                            </div>
                            <button id="performanceActionsDropdownButton"
                                data-dropdown-toggle="performanceActionsDropdown"
                                data-dropdown-ignore-click-outside-class="datepicker"
                                class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j icxWjIgUd9_dzYucx1nx"
                                type="button">
                                <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 5c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1h1c.6 0 1-.4 1-1a1 1 0 1 1 2 0c0 .6.4 1 1 1a2 2 0 0 1 2 2v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1V7c0-1.1.9-2 2-2ZM3 19v-7c0-.6.4-1 1-1h16c.6 0 1 .4 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6-6c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1ZM7 17a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Zm6 0c0-.6-.4-1-1-1a1 1 0 1 0 0 2c.6 0 1-.4 1-1Zm2 0a1 1 0 1 1 2 0c0 .6-.4 1-1 1a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Dec 31 - Jan 31
                                <svg class="cZGr4DL6HOaMXQmjciUj gtlIjUq8I0xb1BZjyfWO _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 9-7 7-7-7"></path>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div class="Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th _SmdlCf6eUKB_V9S5IDj xdunzYpzbwcYs_0Tjgcz Jp6TEt_2I3_NPd5T8ucc Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                id="performanceActionsDropdown" data-popper-placement="bottom"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1312px, 150px);">
                                <ul class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                    role="none" aria-labelledby="referrersActionsDropdown">
                                    <li>
                                        <button type="button"
                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                            role="menuitem">Yesterday</button>
                                    </li>
                                    <li>
                                        <button type="button"
                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                            role="menuitem">Today</button>
                                    </li>
                                    <li>
                                        <button type="button"
                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                            role="menuitem">Last 7 days</button>
                                    </li>
                                    <li>
                                        <button type="button"
                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                            role="menuitem">Last 30 days</button>
                                    </li>
                                    <li>
                                        <button type="button"
                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                            role="menuitem">Last 90 days</button>
                                    </li>
                                </ul>
                                <div class="TcRv2CxEufCAnWVUJnDf">
                                    <span
                                        class="__9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S">Custom
                                        period:</span>
                                    <div id="date-range-picker" date-rangepicker=""
                                        class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 ziREpHQPVq5qSN_QPxXy">
                                        <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                                            <div
                                                class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _0VbwdpFdmHwQ2geg0Xp">
                                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input id="datepicker-range-start" name="start" type="text"
                                                class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 CZURRWrw0Zimq2s_t6jr c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput datepicker-input"
                                                placeholder="Start date">
                                        </div>
                                        <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                                            <div
                                                class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _0VbwdpFdmHwQ2geg0Xp">
                                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input id="datepicker-range-end" name="end" type="text"
                                                class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 CZURRWrw0Zimq2s_t6jr c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput datepicker-input"
                                                placeholder="End date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _9igzqn_6D3Qq5Hcwkfk _fGhMnSfYmaGrv7DvZ00 vnHApz1m20WwjPZA_VbB _8poyx3QkKTfGebRMcQW">
                            <div
                                class="xCPtuxM4_gihvpPwv9bX t6gkcSf0Bt4MLItXvDJ_ iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp _8_o7ahaIGkNXiF_VRG0 xpaiYVuW232U2PfLQ5oc mEGPDrt1G8dDmX8vTfbx">
                                <div>
                                    <svg class="TR_P65x9ie7j6uxFo_Cs mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M4 5a2 2 0 0 0-2 2v2.5a1 1 0 0 0 1 1 1.5 1.5 0 1 1 0 3 1 1 0 0 0-1 1V17a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2.5a1 1 0 0 0-1-1 1.5 1.5 0 1 1 0-3 1 1 0 0 0 1-1V7a2 2 0 0 0-2-2H4Z">
                                        </path>
                                    </svg>
                                    <h3 class="TR_P65x9ie7j6uxFo_Cs PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        Received tickets</h3>
                                    <span
                                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">15,475
                                        <span
                                            class="KLo3NZfrGYYPkMcjEWNN _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">
                                            <svg class="TjZ7WRU8N07qtufg9BOd _j7jrBV2UWRXe__bk9uf _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6v13m0-13 4 4m-4-4-4 4"></path>
                                            </svg>
                                            6,4%
                                        </span>
                                    </span>
                                    <p
                                        class="gC_jEY75u_oxfOOKnLpH YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _fJoMOe9mwdGl9PfDHMr">
                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207">
                                            </path>
                                        </svg>

                                        vs 14,987 last week
                                    </p>
                                </div>
                                <div>
                                    <svg class="TR_P65x9ie7j6uxFo_Cs mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M15.03 9.684h3.965c.322 0 .64.08.925.232.286.153.532.374.717.645a2.109 2.109 0 0 1 .242 1.883l-2.36 7.201c-.288.814-.48 1.355-1.884 1.355-2.072 0-4.276-.677-6.157-1.256-.472-.145-.924-.284-1.348-.404h-.115V9.478a25.485 25.485 0 0 0 4.238-5.514 1.8 1.8 0 0 1 .901-.83 1.74 1.74 0 0 1 1.21-.048c.396.13.736.397.96.757.225.36.32.788.269 1.211l-1.562 4.63ZM4.177 10H7v8a2 2 0 1 1-4 0v-6.823C3 10.527 3.527 10 4.176 10Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <h3 class="TR_P65x9ie7j6uxFo_Cs PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Solved
                                        tickets</h3>
                                    <span
                                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">15,001
                                        <span
                                            class="KLo3NZfrGYYPkMcjEWNN _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">
                                            <svg class="TjZ7WRU8N07qtufg9BOd _j7jrBV2UWRXe__bk9uf _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M12 19V5m0 14-4-4m4 4 4-4"></path>
                                            </svg>
                                            1%
                                        </span>
                                    </span>
                                    <p
                                        class="gC_jEY75u_oxfOOKnLpH YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _fJoMOe9mwdGl9PfDHMr">
                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207">
                                            </path>
                                        </svg>

                                        vs 15,221 last month
                                    </p>
                                </div>
                                <div>
                                    <svg class="TR_P65x9ie7j6uxFo_Cs mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <h3 class="TR_P65x9ie7j6uxFo_Cs PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        Rejected tickets</h3>
                                    <span
                                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">56
                                        <span
                                            class="KLo3NZfrGYYPkMcjEWNN _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">
                                            <svg class="TjZ7WRU8N07qtufg9BOd _j7jrBV2UWRXe__bk9uf _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6v13m0-13 4 4m-4-4-4 4"></path>
                                            </svg>
                                            9,1%
                                        </span>
                                    </span>
                                    <p
                                        class="gC_jEY75u_oxfOOKnLpH YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _fJoMOe9mwdGl9PfDHMr">
                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207">
                                            </path>
                                        </svg>

                                        vs 49 last week
                                    </p>
                                </div>
                                <div>
                                    <svg class="TR_P65x9ie7j6uxFo_Cs mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm5.495.93A.5.5 0 0 0 6.5 13c0 1.19.644 2.438 1.618 3.375C9.099 17.319 10.469 18 12 18c1.531 0 2.9-.681 3.882-1.625.974-.937 1.618-2.184 1.618-3.375a.5.5 0 0 0-.995-.07.764.764 0 0 1-.156.096c-.214.106-.554.208-1.006.295-.896.173-2.111.262-3.343.262-1.232 0-2.447-.09-3.343-.262-.452-.087-.792-.19-1.005-.295a.762.762 0 0 1-.157-.096ZM8.99 8a1 1 0 0 0 0 2H9a1 1 0 1 0 0-2h-.01Zm6 0a1 1 0 1 0 0 2H15a1 1 0 1 0 0-2h-.01Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <h3 class="TR_P65x9ie7j6uxFo_Cs PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Average
                                        CSAT</h3>
                                    <span
                                        class="YRrCJSr_j5nopfm4duUc C5zbBMfA_zX8ND7xBYbd q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">4.7
                                        <span
                                            class="KLo3NZfrGYYPkMcjEWNN d3C8uAdJKNl1jzfE9ynq PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                            of 5 </span>
                                    </span>
                                    <a href="#"
                                        class="gC_jEY75u_oxfOOKnLpH YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 ezMFUVl744lvw6ht0lFe OQflBVxALl1Ntbyc2J2_ oJZU4OQzzfXeLbF7UKZ_ fZf6W_ZtzEh6EEqmWMA9">
                                        See all responses
                                        <svg class="gtlIjUq8I0xb1BZjyfWO _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="_SmdlCf6eUKB_V9S5IDj _Zd6CFkEZSNEHC9TBkyE" id="service-level-chart"
                                style="min-height: 180px;">
                                <div id="apexchartsdzvyg1xjf" class="apexcharts-canvas apexchartsdzvyg1xjf"
                                    style="width: 0px; height: 180px;"><svg id="SvgjsSvg1210" width="0"
                                        height="180" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="0" height="180">
                                            <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml">
                                            </div>
                                        </foreignObject>
                                        <g id="SvgjsG1212" class="apexcharts-inner apexcharts-graphical">
                                            <defs id="SvgjsDefs1211"></defs>
                                        </g>
                                    </svg></div>
                            </div>
                        </div>
                        <div class="XJih04pKHf8Cekga6Hj3 FFcQetUrTcbSdxPEonbj" id="tickets-overview-chart"
                            style="min-height: 535px;">
                            <div id="apexchartsj4mf1de1f"
                                class="apexcharts-canvas apexchartsj4mf1de1f apexcharts-theme-light"
                                style="width: 1104px; height: 520px;"><svg id="SvgjsSvg1149" width="1104"
                                    height="520" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="1104" height="520">
                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="inset: auto 0px 1px; position: absolute; max-height: 260px;">
                                            <div class="apexcharts-legend-series" rel="1"
                                                seriesname="Receivedxtickets" data:collapsed="false"
                                                style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                    rel="1" data:collapsed="false"
                                                    style="background: rgb(26, 86, 219); color: rgb(26, 86, 219); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="Received%20tickets" data:collapsed="false"
                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Inter, sans-serif;">Received
                                                    tickets</span></div>
                                            <div class="apexcharts-legend-series" rel="2"
                                                seriesname="SolvedxTickets" data:collapsed="false"
                                                style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                    rel="2" data:collapsed="false"
                                                    style="background: rgb(255, 153, 99); color: rgb(255, 153, 99); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="Solved%20Tickets" data:collapsed="false"
                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Inter, sans-serif;">Solved
                                                    Tickets</span></div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <rect id="SvgjsRect1153" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1202" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-18, 0)"></g>
                                    <g id="SvgjsG1151" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(2, 4)">
                                        <defs id="SvgjsDefs1150">
                                            <clipPath id="gridRectMaskj4mf1de1f">
                                                <rect id="SvgjsRect1155" width="1110" height="508" x="-8"
                                                    y="-14" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskj4mf1de1f"></clipPath>
                                            <clipPath id="nonForecastMaskj4mf1de1f"></clipPath>
                                            <clipPath id="gridRectMarkerMaskj4mf1de1f">
                                                <rect id="SvgjsRect1156" width="1104" height="484" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1161" x1="0"
                                                y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1162" stop-opacity="0.55"
                                                    stop-color="rgba(26,86,219,0.55)" offset="0"></stop>
                                                <stop id="SvgjsStop1163" stop-opacity="0"
                                                    stop-color="rgba(26,86,219,0)" offset="1"></stop>
                                                <stop id="SvgjsStop1164" stop-opacity="0"
                                                    stop-color="rgba(26,86,219,0)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1170" x1="0"
                                                y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1171" stop-opacity="0.55"
                                                    stop-color="rgba(255,153,99,0.55)" offset="0"></stop>
                                                <stop id="SvgjsStop1172" stop-opacity="0"
                                                    stop-color="rgba(255,153,99,0)" offset="1"></stop>
                                                <stop id="SvgjsStop1173" stop-opacity="0"
                                                    stop-color="rgba(255,153,99,0)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1154" x1="0" y1="0" x2="0"
                                            y2="480" stroke="#b6b6b6" stroke-dasharray="3"
                                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                            width="1" height="480" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1176" class="apexcharts-grid">
                                            <g id="SvgjsG1177" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine1180" x1="0" y1="0"
                                                    x2="1100" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1181" x1="0" y1="53.333333333333336"
                                                    x2="1100" y2="53.333333333333336" stroke="#e0e0e0"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1182" x1="0" y1="106.66666666666667"
                                                    x2="1100" y2="106.66666666666667" stroke="#e0e0e0"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1183" x1="0" y1="160"
                                                    x2="1100" y2="160" stroke="#e0e0e0"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1184" x1="0" y1="213.33333333333334"
                                                    x2="1100" y2="213.33333333333334" stroke="#e0e0e0"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1185" x1="0" y1="266.6666666666667"
                                                    x2="1100" y2="266.6666666666667" stroke="#e0e0e0"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1186" x1="0" y1="320"
                                                    x2="1100" y2="320" stroke="#e0e0e0"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1187" x1="0" y1="373.3333333333333"
                                                    x2="1100" y2="373.3333333333333" stroke="#e0e0e0"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1188" x1="0" y1="426.66666666666663"
                                                    x2="1100" y2="426.66666666666663" stroke="#e0e0e0"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1189" x1="0" y1="479.99999999999994"
                                                    x2="1100" y2="479.99999999999994" stroke="#e0e0e0"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1178" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine1191" x1="0" y1="480"
                                                x2="1100" y2="480" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1190" x1="0" y1="1"
                                                x2="0" y2="480" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1179" class="apexcharts-grid-borders" style="display: none;">
                                        </g>
                                        <g id="SvgjsG1157" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1158" class="apexcharts-series" zIndex="0"
                                                seriesName="Receivedxtickets" data:longestSeries="true"
                                                rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1165"
                                                    d="M 0 480 L 0 373.33333333333337C 77 373.33333333333337 143 222.08000000000004 220 222.08000000000004C 297 222.08000000000004 363 378.0266666666667 440 378.0266666666667C 517 378.0266666666667 583 50.56000000000006 660 50.56000000000006C 737 50.56000000000006 803 356.6933333333334 880 356.6933333333334C 957 356.6933333333334 1023 335.36 1100 335.36C 1100 335.36 1100 335.36 1100 480M 1100 335.36z"
                                                    fill="url(#SvgjsLinearGradient1161)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskj4mf1de1f)"
                                                    pathTo="M 0 480 L 0 373.33333333333337C 77 373.33333333333337 143 222.08000000000004 220 222.08000000000004C 297 222.08000000000004 363 378.0266666666667 440 378.0266666666667C 517 378.0266666666667 583 50.56000000000006 660 50.56000000000006C 737 50.56000000000006 803 356.6933333333334 880 356.6933333333334C 957 356.6933333333334 1023 335.36 1100 335.36C 1100 335.36 1100 335.36 1100 480M 1100 335.36z"
                                                    pathFrom="M 0 480 L 0 373.33333333333337C 77 373.33333333333337 143 222.08000000000004 220 222.08000000000004C 297 222.08000000000004 363 378.0266666666667 440 378.0266666666667C 517 378.0266666666667 583 50.56000000000006 660 50.56000000000006C 737 50.56000000000006 803 356.6933333333334 880 356.6933333333334C 957 356.6933333333334 1023 335.36 1100 335.36C 1100 335.36 1100 335.36 1100 480M 1100 335.36z">
                                                </path>
                                                <path id="SvgjsPath1166"
                                                    d="M 0 373.33333333333337C 77 373.33333333333337 143 222.08000000000004 220 222.08000000000004C 297 222.08000000000004 363 378.0266666666667 440 378.0266666666667C 517 378.0266666666667 583 50.56000000000006 660 50.56000000000006C 737 50.56000000000006 803 356.6933333333334 880 356.6933333333334C 957 356.6933333333334 1023 335.36 1100 335.36"
                                                    fill="none" fill-opacity="1" stroke="#1a56db"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMaskj4mf1de1f)"
                                                    pathTo="M 0 373.33333333333337C 77 373.33333333333337 143 222.08000000000004 220 222.08000000000004C 297 222.08000000000004 363 378.0266666666667 440 378.0266666666667C 517 378.0266666666667 583 50.56000000000006 660 50.56000000000006C 737 50.56000000000006 803 356.6933333333334 880 356.6933333333334C 957 356.6933333333334 1023 335.36 1100 335.36"
                                                    pathFrom="M 0 373.33333333333337C 77 373.33333333333337 143 222.08000000000004 220 222.08000000000004C 297 222.08000000000004 363 378.0266666666667 440 378.0266666666667C 517 378.0266666666667 583 50.56000000000006 660 50.56000000000006C 737 50.56000000000006 803 356.6933333333334 880 356.6933333333334C 957 356.6933333333334 1023 335.36 1100 335.36"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG1159"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1206" r="0" cx="0"
                                                            cy="0"
                                                            class="apexcharts-marker whq9llxkd no-pointer-events"
                                                            stroke="#ffffff" fill="#1a56db" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1167" class="apexcharts-series" zIndex="1"
                                                seriesName="SolvedxTickets" data:longestSeries="true"
                                                rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1174"
                                                    d="M 0 480 L 0 464.74666666666667C 77 464.74666666666667 143 275.9466666666667 220 275.9466666666667C 297 275.9466666666667 363 451.73333333333335 440 451.73333333333335C 517 451.73333333333335 583 169.3866666666667 660 169.3866666666667C 737 169.3866666666667 803 381.54666666666674 880 381.54666666666674C 957 381.54666666666674 1023 348.6933333333334 1100 348.6933333333334C 1100 348.6933333333334 1100 348.6933333333334 1100 480M 1100 348.6933333333334z"
                                                    fill="url(#SvgjsLinearGradient1170)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="1"
                                                    clip-path="url(#gridRectMaskj4mf1de1f)"
                                                    pathTo="M 0 480 L 0 464.74666666666667C 77 464.74666666666667 143 275.9466666666667 220 275.9466666666667C 297 275.9466666666667 363 451.73333333333335 440 451.73333333333335C 517 451.73333333333335 583 169.3866666666667 660 169.3866666666667C 737 169.3866666666667 803 381.54666666666674 880 381.54666666666674C 957 381.54666666666674 1023 348.6933333333334 1100 348.6933333333334C 1100 348.6933333333334 1100 348.6933333333334 1100 480M 1100 348.6933333333334z"
                                                    pathFrom="M 0 480 L 0 464.74666666666667C 77 464.74666666666667 143 275.9466666666667 220 275.9466666666667C 297 275.9466666666667 363 451.73333333333335 440 451.73333333333335C 517 451.73333333333335 583 169.3866666666667 660 169.3866666666667C 737 169.3866666666667 803 381.54666666666674 880 381.54666666666674C 957 381.54666666666674 1023 348.6933333333334 1100 348.6933333333334C 1100 348.6933333333334 1100 348.6933333333334 1100 480M 1100 348.6933333333334z">
                                                </path>
                                                <path id="SvgjsPath1175"
                                                    d="M 0 464.74666666666667C 77 464.74666666666667 143 275.9466666666667 220 275.9466666666667C 297 275.9466666666667 363 451.73333333333335 440 451.73333333333335C 517 451.73333333333335 583 169.3866666666667 660 169.3866666666667C 737 169.3866666666667 803 381.54666666666674 880 381.54666666666674C 957 381.54666666666674 1023 348.6933333333334 1100 348.6933333333334"
                                                    fill="none" fill-opacity="1" stroke="#ff9963"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-area" index="1"
                                                    clip-path="url(#gridRectMaskj4mf1de1f)"
                                                    pathTo="M 0 464.74666666666667C 77 464.74666666666667 143 275.9466666666667 220 275.9466666666667C 297 275.9466666666667 363 451.73333333333335 440 451.73333333333335C 517 451.73333333333335 583 169.3866666666667 660 169.3866666666667C 737 169.3866666666667 803 381.54666666666674 880 381.54666666666674C 957 381.54666666666674 1023 348.6933333333334 1100 348.6933333333334"
                                                    pathFrom="M 0 464.74666666666667C 77 464.74666666666667 143 275.9466666666667 220 275.9466666666667C 297 275.9466666666667 363 451.73333333333335 440 451.73333333333335C 517 451.73333333333335 583 169.3866666666667 660 169.3866666666667C 737 169.3866666666667 803 381.54666666666674 880 381.54666666666674C 957 381.54666666666674 1023 348.6933333333334 1100 348.6933333333334"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG1168"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="1">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1207" r="0" cx="0"
                                                            cy="0"
                                                            class="apexcharts-marker wl5jmfaddg no-pointer-events"
                                                            stroke="#ffffff" fill="#ff9963" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1160" class="apexcharts-datalabels" data:realIndex="0">
                                            </g>
                                            <g id="SvgjsG1169" class="apexcharts-datalabels" data:realIndex="1">
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1192" x1="0" y1="0" x2="1100"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                            stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                        </line>
                                        <line id="SvgjsLine1193" x1="0" y1="0" x2="1100"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1194" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1195" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"></g>
                                        </g>
                                        <g id="SvgjsG1203" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1204" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1205" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1208" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1209" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(26, 86, 219);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Inter, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(255, 153, 99);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Inter, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: Inter, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V p_2EXc_a2sDA_h41l8QU _fGhMnSfYmaGrv7DvZ00 WoJnkQmBGtEPqYedyh7V">
                            <button type="button"
                                class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j icxWjIgUd9_dzYucx1nx">
                                View full report
                                <svg class="cZGr4DL6HOaMXQmjciUj gtlIjUq8I0xb1BZjyfWO _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"></path>
                                </svg>
                            </button>
                        </div>
                    </div>



                    <div
                        class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp _ekOa3Ka0rurm5lYYxYh">
                        <div
                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                            <div
                                class="YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F YccXYy5sNIz6FJlLxw0D OQflBVxALl1Ntbyc2J2_ V9HgZms3_2W5sanRatci s1eV9SScay8owH_251UR">
                                <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h2
                                    class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    15 min</h2>
                                <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Average response time</p>
                            </div>
                        </div>
                        <div
                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                            <div
                                class="YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F YccXYy5sNIz6FJlLxw0D OQflBVxALl1Ntbyc2J2_ V9HgZms3_2W5sanRatci s1eV9SScay8owH_251UR">
                                <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m16 10 3-3m0 0-3-3m3 3H5v3m3 4-3 3m0 0 3 3m-3-3h14v-3">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h2
                                    class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    12%</h2>
                                <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Ticket reopening rate</p>
                            </div>
                        </div>
                        <div
                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                            <div
                                class="YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F YccXYy5sNIz6FJlLxw0D OQflBVxALl1Ntbyc2J2_ V9HgZms3_2W5sanRatci s1eV9SScay8owH_251UR">
                                <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h2
                                    class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    20</h2>
                                <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Active agents today</p>
                            </div>
                        </div>
                        <div
                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6 mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                            <div
                                class="YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F YccXYy5sNIz6FJlLxw0D OQflBVxALl1Ntbyc2J2_ V9HgZms3_2W5sanRatci s1eV9SScay8owH_251UR">
                                <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h2
                                    class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    0.6%</h2>
                                <p class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Escalated tickets</p>
                            </div>
                        </div>
                    </div>
                    <div class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn h6ZjYPWLn_mAxjSYNWsM">
                        <div
                            class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                            <div
                                class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V pjVv_HvtzX_QkbymyvoG _fGhMnSfYmaGrv7DvZ00">
                                <div class="Q_jg_EPdNf9eDMn1mLI2 rvdRhGyExrNYTA6euxsF">
                                    <div
                                        class="hD0sTTDgbxakubcHVW2X X0NLFXe8iqRzqv1kWpUA YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _9dH7mrOkzM4RTmidHTs jqg6J89cvxmDiFpnV56r tkZo48dB4RhnHSlDXzoe">
                                        <svg class="MnxxlQlR1H0xJuMEE8Yr YIUegm7fh_CpJbivTu6B PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5
                                            class="_3emD9T4VCnJMhi3MYYf q1oXbofRCOhVhOSB8tiU IOPhczRgtphv6NdNBDjj wgkxUJNDca22__ptDPRh __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Reasons for tickets</h5>
                                        <p class="_VPh6kIywCMfXFfQLas4 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Top
                                            reasons for tickets this week</p>
                                    </div>
                                </div>
                            </div>

                            <div class="xCPtuxM4_gihvpPwv9bX AqVNvLG_H6VHhym2yKMp">
                                <dl
                                    class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 tkZo48dB4RhnHSlDXzoe">
                                    <dt class="_j7jrBV2UWRXe__bk9uf PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Tickets
                                        received:</dt>
                                    <dd class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">3,232
                                    </dd>
                                </dl>
                                <dl class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 n8sxvjGHwzwKnEL9Mnm_">
                                    <dt class="_j7jrBV2UWRXe__bk9uf PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                        Response rate:</dt>
                                    <dd class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">93%
                                    </dd>
                                </dl>
                            </div>

                            <!-- Radial Chart -->
                            <ul
                                class="qDsn8ha5_HppqMcLKJwF YHiWkESJ_FRThRhSUhlR ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                <li>
                                    <div
                                        class="Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j bhR_PkwU_R7UbU0M5yyi rvdRhGyExrNYTA6euxsF rqGq6uNViNQgg6BXiRrZ">
                                        <h3
                                            class="TR_P65x9ie7j6uxFo_Cs _QPa0IBUUsH_7SMjJbQQ _VPh6kIywCMfXFfQLas4 tkZo48dB4RhnHSlDXzoe">
                                            Product/Service problems</h3>
                                        <div
                                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 bhR_PkwU_R7UbU0M5yyi rqGq6uNViNQgg6BXiRrZ">
                                            <div
                                                class="rxe6apEJoEk8r75xaVNG t6gkcSf0Bt4MLItXvDJ_ W5n_NSFnC6y2nqoHw_5x WwS1mve_UI16RedcVHEs jqg6J89cvxmDiFpnV56r">
                                                <div class="rxe6apEJoEk8r75xaVNG W5n_NSFnC6y2nqoHw_5x g40_g3BQzYCOX5eZADgY d8_fVOcgDmbt7UdpfeLK"
                                                    style="width: 41%"></div>
                                            </div>
                                            <span>41%</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j bhR_PkwU_R7UbU0M5yyi rvdRhGyExrNYTA6euxsF rqGq6uNViNQgg6BXiRrZ">
                                        <h3
                                            class="TR_P65x9ie7j6uxFo_Cs _QPa0IBUUsH_7SMjJbQQ _VPh6kIywCMfXFfQLas4 tkZo48dB4RhnHSlDXzoe">
                                            Technical issues</h3>
                                        <div
                                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 bhR_PkwU_R7UbU0M5yyi rqGq6uNViNQgg6BXiRrZ">
                                            <div
                                                class="rxe6apEJoEk8r75xaVNG t6gkcSf0Bt4MLItXvDJ_ W5n_NSFnC6y2nqoHw_5x WwS1mve_UI16RedcVHEs jqg6J89cvxmDiFpnV56r">
                                                <div class="rxe6apEJoEk8r75xaVNG W5n_NSFnC6y2nqoHw_5x TdN_rgqCTju0IuQUjOfH"
                                                    style="width: 22%"></div>
                                            </div>
                                            <span>22%</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j bhR_PkwU_R7UbU0M5yyi rvdRhGyExrNYTA6euxsF rqGq6uNViNQgg6BXiRrZ">
                                        <h3
                                            class="TR_P65x9ie7j6uxFo_Cs _QPa0IBUUsH_7SMjJbQQ _VPh6kIywCMfXFfQLas4 tkZo48dB4RhnHSlDXzoe">
                                            Payment issues</h3>
                                        <div
                                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 bhR_PkwU_R7UbU0M5yyi rqGq6uNViNQgg6BXiRrZ">
                                            <div
                                                class="rxe6apEJoEk8r75xaVNG t6gkcSf0Bt4MLItXvDJ_ W5n_NSFnC6y2nqoHw_5x WwS1mve_UI16RedcVHEs jqg6J89cvxmDiFpnV56r">
                                                <div class="rxe6apEJoEk8r75xaVNG W5n_NSFnC6y2nqoHw_5x _9l2MVOj9uksi1brcZMM"
                                                    style="width: 15%"></div>
                                            </div>
                                            <span>15%</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j bhR_PkwU_R7UbU0M5yyi rvdRhGyExrNYTA6euxsF rqGq6uNViNQgg6BXiRrZ">
                                        <h3
                                            class="TR_P65x9ie7j6uxFo_Cs _QPa0IBUUsH_7SMjJbQQ _VPh6kIywCMfXFfQLas4 tkZo48dB4RhnHSlDXzoe">
                                            Product issues</h3>
                                        <div
                                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 bhR_PkwU_R7UbU0M5yyi rqGq6uNViNQgg6BXiRrZ">
                                            <div
                                                class="rxe6apEJoEk8r75xaVNG t6gkcSf0Bt4MLItXvDJ_ W5n_NSFnC6y2nqoHw_5x WwS1mve_UI16RedcVHEs jqg6J89cvxmDiFpnV56r">
                                                <div class="rxe6apEJoEk8r75xaVNG W5n_NSFnC6y2nqoHw_5x hsjHdNWKGt1JJp9qkvYZ"
                                                    style="width: 12%"></div>
                                            </div>
                                            <span>12%</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div
                                        class="Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j bhR_PkwU_R7UbU0M5yyi rvdRhGyExrNYTA6euxsF rqGq6uNViNQgg6BXiRrZ">
                                        <h3
                                            class="TR_P65x9ie7j6uxFo_Cs _QPa0IBUUsH_7SMjJbQQ _VPh6kIywCMfXFfQLas4 tkZo48dB4RhnHSlDXzoe">
                                            New account</h3>
                                        <div
                                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 bhR_PkwU_R7UbU0M5yyi rqGq6uNViNQgg6BXiRrZ">
                                            <div
                                                class="rxe6apEJoEk8r75xaVNG t6gkcSf0Bt4MLItXvDJ_ W5n_NSFnC6y2nqoHw_5x WwS1mve_UI16RedcVHEs jqg6J89cvxmDiFpnV56r">
                                                <div class="rxe6apEJoEk8r75xaVNG W5n_NSFnC6y2nqoHw_5x _I92_RswYrnpS0B5dKZO"
                                                    style="width: 10%"></div>
                                            </div>
                                            <span>10%</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div
                                class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU d4louhNic5PFgJGRKqn6 pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V p_2EXc_a2sDA_h41l8QU _fGhMnSfYmaGrv7DvZ00 WoJnkQmBGtEPqYedyh7V">
                                <a href="#"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                    <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M5.024 3.783A1 1 0 0 1 6 3h12a1 1 0 0 1 .976.783L20.802 12h-4.244a1.99 1.99 0 0 0-1.824 1.205 2.978 2.978 0 0 1-5.468 0A1.991 1.991 0 0 0 7.442 12H3.198l1.826-8.217ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.43a4.978 4.978 0 0 1-9.14 0H3Zm5-7a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 2a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H8Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Go to inbox</a>
                                <a href="#"
                                    class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">Download
                                    report</a>
                            </div>
                        </div>
                        <div
                            class="mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                            <h2
                                class="hD0sTTDgbxakubcHVW2X vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE _8exizyun8Av9ozDV0B8">
                                Best agents this week</h2>
                            <ul>
                                <li
                                    class="EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V vTpAekp7oFIVJp20D6YV _fGhMnSfYmaGrv7DvZ00">
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                        <img src="https://flowbite.com/application-ui/demo/images/users/avatar-10.png"
                                            alt="User avatar"
                                            class="mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf RpVwy4sO7Asb86CncKJ_">
                                        <div class="G4dLHP1O7x3gaD0_p7Kc _74lpPUMEtHf6F0_fjLe">
                                            <p
                                                class="vfNYjqjYMlN1XskEucCt yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                                Jese Leos</p>
                                            <p
                                                class="vfNYjqjYMlN1XskEucCt c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                email@example.com</p>
                                        </div>
                                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                            <p
                                                class="_SmdlCf6eUKB_V9S5IDj PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y rvdRhGyExrNYTA6euxsF">
                                                120 tickets answered</p>
                                            <span
                                                class="YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _tepP3DhMXaKjsjDMaF6 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">4.9/5</span>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V cexDVMRjens2nRrMcG96 _fGhMnSfYmaGrv7DvZ00">
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                        <img src="https://flowbite.com/application-ui/demo/images/users/avatar-8.png"
                                            alt="User avatar"
                                            class="mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf RpVwy4sO7Asb86CncKJ_">
                                        <div class="G4dLHP1O7x3gaD0_p7Kc _74lpPUMEtHf6F0_fjLe">
                                            <p
                                                class="vfNYjqjYMlN1XskEucCt yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                                Roberta Casas</p>
                                            <p
                                                class="vfNYjqjYMlN1XskEucCt c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                email@example.com</p>
                                        </div>
                                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                            <p
                                                class="_SmdlCf6eUKB_V9S5IDj PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y rvdRhGyExrNYTA6euxsF">
                                                100 tickets answered</p>
                                            <span
                                                class="YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _tepP3DhMXaKjsjDMaF6 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">4.9/5</span>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V cexDVMRjens2nRrMcG96 _fGhMnSfYmaGrv7DvZ00">
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                        <img src="https://flowbite.com/application-ui/demo/images/users/avatar-1.png"
                                            alt="User avatar"
                                            class="mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf RpVwy4sO7Asb86CncKJ_">
                                        <div class="G4dLHP1O7x3gaD0_p7Kc _74lpPUMEtHf6F0_fjLe">
                                            <p
                                                class="vfNYjqjYMlN1XskEucCt yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                                Bonnie Green</p>
                                            <p
                                                class="vfNYjqjYMlN1XskEucCt c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                email@example.com</p>
                                        </div>
                                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                            <p
                                                class="_SmdlCf6eUKB_V9S5IDj PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y rvdRhGyExrNYTA6euxsF">
                                                92 tickets answered</p>
                                            <span
                                                class="YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _tepP3DhMXaKjsjDMaF6 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">4.8/5</span>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V cexDVMRjens2nRrMcG96 _fGhMnSfYmaGrv7DvZ00">
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                        <img src="https://flowbite.com/application-ui/demo/images/users/avatar-3.png"
                                            alt="User avatar"
                                            class="mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf RpVwy4sO7Asb86CncKJ_">
                                        <div class="G4dLHP1O7x3gaD0_p7Kc _74lpPUMEtHf6F0_fjLe">
                                            <p
                                                class="vfNYjqjYMlN1XskEucCt yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                                Micheal Gough</p>
                                            <p
                                                class="vfNYjqjYMlN1XskEucCt c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                email@example.com</p>
                                        </div>
                                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                            <p
                                                class="_SmdlCf6eUKB_V9S5IDj PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y rvdRhGyExrNYTA6euxsF">
                                                71 tickets answered</p>
                                            <span
                                                class="YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _tepP3DhMXaKjsjDMaF6 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">4.7/5</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="cexDVMRjens2nRrMcG96">
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                        <img src="https://flowbite.com/application-ui/demo/images/users/avatar-5.png"
                                            alt="User avatar"
                                            class="mWvJQyBFgwNGEt0h7bSP yNvZ2JlUalNo5uPPv1sf RpVwy4sO7Asb86CncKJ_">
                                        <div class="G4dLHP1O7x3gaD0_p7Kc _74lpPUMEtHf6F0_fjLe">
                                            <p
                                                class="vfNYjqjYMlN1XskEucCt yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                                Robert Brown</p>
                                            <p
                                                class="vfNYjqjYMlN1XskEucCt c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                email@example.com</p>
                                        </div>
                                        <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                            <p
                                                class="_SmdlCf6eUKB_V9S5IDj PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y rvdRhGyExrNYTA6euxsF">
                                                49 tickets answered</p>
                                            <span
                                                class="YRrCJSr_j5nopfm4duUc upPzuI0jdXVPOpgOwfrU yD3CkTNbBj1zsvysfuUm Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F _tepP3DhMXaKjsjDMaF6 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe _slPOgYG58UZfxi9teaV pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">4.5/5</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div
                                class="xCPtuxM4_gihvpPwv9bX Nu4HUn5EQpnNJ1itNkrd Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V _fGhMnSfYmaGrv7DvZ00">
                                <div
                                    class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j LVS5VhNiuUNp2iESGVfr">
                                    <!-- Button -->
                                    <button id="bestAgentsDropdownButton" data-dropdown-toggle="bestAgentsDropdown"
                                        data-dropdown-ignore-click-outside-class="datepicker"
                                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW"
                                        type="button">
                                        Last 7 days
                                        <svg class="UwVmaTmxbsmvnpCB2B1K _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div class="Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th _SmdlCf6eUKB_V9S5IDj xdunzYpzbwcYs_0Tjgcz Jp6TEt_2I3_NPd5T8ucc Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                        id="bestAgentsDropdown" data-popper-placement="top"
                                        data-popper-reference-hidden="" data-popper-escaped=""
                                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(936px, 1302px);">
                                        <ul class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                            role="none" aria-labelledby="bestAgentsDropdownButton">
                                            <li>
                                                <button type="button"
                                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                                    role="menuitem">Yesterday</button>
                                            </li>
                                            <li>
                                                <button type="button"
                                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                                    role="menuitem">Today</button>
                                            </li>
                                            <li>
                                                <button type="button"
                                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                                    role="menuitem">Last 7 days</button>
                                            </li>
                                            <li>
                                                <button type="button"
                                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                                    role="menuitem">Last 30 days</button>
                                            </li>
                                            <li>
                                                <button type="button"
                                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                                    role="menuitem">Last 90 days</button>
                                            </li>
                                        </ul>
                                        <div class="TcRv2CxEufCAnWVUJnDf">
                                            <span
                                                class="__9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S">Custom
                                                period:</span>
                                            <div id="date-range-picker-3" date-rangepicker=""
                                                class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 ziREpHQPVq5qSN_QPxXy">
                                                <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                                                    <div
                                                        class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _0VbwdpFdmHwQ2geg0Xp">
                                                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    <input id="datepicker-range-start-3" name="start"
                                                        type="text"
                                                        class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 CZURRWrw0Zimq2s_t6jr c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput datepicker-input"
                                                        placeholder="Start date">
                                                </div>
                                                <div class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_">
                                                    <div
                                                        class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _0VbwdpFdmHwQ2geg0Xp">
                                                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    <input id="datepicker-range-end-3" name="end"
                                                        type="text"
                                                        class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 CZURRWrw0Zimq2s_t6jr c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput datepicker-input"
                                                        placeholder="End date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 yM_AorRf2jSON3pDsdrz sdSaZcRa4_We5kKaX4pf OQflBVxALl1Ntbyc2J2_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 fZf6W_ZtzEh6EEqmWMA9 OPrb_iG5WDy_7F05BDOX yChACvAr1v8czJ2VO22j">
                                        Agents report
                                        <svg class="UwVmaTmxbsmvnpCB2B1K _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table Widget -->
                    <div
                        class="hD0sTTDgbxakubcHVW2X mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
                        <h2
                            class="hD0sTTDgbxakubcHVW2X vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE _8exizyun8Av9ozDV0B8">
                            Latest tickets</h2>
                        <div class="EpUSgjHdM6oyMXUiK_8_ _fGhMnSfYmaGrv7DvZ00">
                            <div
                                class="YRrCJSr_j5nopfm4duUc Sg_3d5zRNStcQDmbq_hb Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j pjVv_HvtzX_QkbymyvoG tuEYdQFQ7IyWJ8f7A6Ss IfjsJ_KBYZ_X91Cj395g">
                                <div
                                    class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ e8VqoQNK0mbkRFDL3LMV tI6ZVpHcCWxY_MKHSQWC tuEYdQFQ7IyWJ8f7A6Ss hhVyfLYO5HBNKAsXwK1v eVEHKvmQTgrcFfcnBoRJ DyG7A4viMuur4z1rJih8">
                                    <form
                                        class="t6gkcSf0Bt4MLItXvDJ_ _74lpPUMEtHf6F0_fjLe a3EJmRhrdW6VRIp0Gu76 Z2d7o_G19oPf0CMPzz5e">
                                        <label for="default-search"
                                            class="_DVAfiyo21kM68EUVzEQ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Search</label>
                                        <div class="ahOqFrhzLjivRe8a1kX_">
                                            <div
                                                class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 aa_y6SeayB9fNgBD5ROa">
                                                <svg aria-hidden="true"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </div>
                                            <input type="search" id="default-search"
                                                class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ _xm_BhmxwigUvBT3w2Ty mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 phuq9OcM4E3Gy9MJy0RC c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                                placeholder="Search invoice" required="">
                                            <button type="submit"
                                                class="pq2JRWtiWcwYnw3xueNl VuoyqWQkm5MTiE515qz8 ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 _McrmMbFrEkc_sTK9IC8 g40_g3BQzYCOX5eZADgY RZmKBZs1E1eXw8vkE6jY b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                                Search
                                            </button>
                                        </div>
                                    </form>
                                    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                            data-dropdown-ignore-click-outside-class="datepicker"
                                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j _f8XqZvYJf7DNydLmFyI"
                                            type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Filters
                                            <svg class="cZGr4DL6HOaMXQmjciUj gtlIjUq8I0xb1BZjyfWO _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7">
                                                </path>
                                            </svg>
                                        </button>
                                        <!-- Dropdown menu -->
                                        <form action="#" method="get" id="filterDropdown"
                                            class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj p4AJk9ET4ZlyzNjHjPnM UYOSZJ1_pv3B5nt1ujCP mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r"
                                            aria-labelledby="dropdownDefault" data-popper-placement="top"
                                            data-popper-reference-hidden="" data-popper-escaped=""
                                            style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(750px, 1454px);">
                                            <h5 id="drawer-label"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                                Filter</h5>
                                            <div>
                                                <label for="tags"
                                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Tags</label>
                                                <div class="ahOqFrhzLjivRe8a1kX_">
                                                    <div
                                                        class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _JkMHdqR7opeZfvAIXNl">
                                                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-width="2"
                                                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <input type="text" id="tags"
                                                        class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 n_1ZsN_bGSniwE3IxRHu c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="ticket-status"
                                                    class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                                    Ticket status
                                                    <button data-popover-target="popover-ticket-status-description"
                                                        type="button"
                                                        class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
                                                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
                                                    </button>
                                                </label>
                                                <select id="ticket-status"
                                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                                    <option selected="">Any</option>
                                                    <option value="personal">Pending</option>
                                                    <option value="business">Solved</option>
                                                    <option value="education">Deleted</option>
                                                </select>
                                                <div id="popover-ticket-status-description" role="tooltip"
                                                    class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK"
                                                    data-popper-reference-hidden="" data-popper-escaped=""
                                                    data-popper-placement="bottom"
                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                                    Ticket status refers to the current state of a support ticket in
                                                    various contexts.
                                                    <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(0px, 0px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="requester"
                                                    class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Requester</label>
                                                <div class="ahOqFrhzLjivRe8a1kX_">
                                                    <div
                                                        class="qArZHwmmp1ULq_EXc7FF pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua QwmoUJgpayek67mTbNEE YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 _JkMHdqR7opeZfvAIXNl">
                                                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-width="2"
                                                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <input type="text" id="requester"
                                                        class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D FJRldeiG2gFGZfuKgp88 n_1ZsN_bGSniwE3IxRHu c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                                        placeholder="e.g. Bonnie Green">
                                                </div>
                                            </div>
                                            <div>
                                                <label for="ticket-type"
                                                    class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                                    Type
                                                    <button data-popover-target="popover-type-description"
                                                        type="button"
                                                        class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
                                                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
                                                    </button>
                                                </label>
                                                <select id="ticket-type"
                                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                                    <option selected="">Any</option>
                                                    <option value="personal">Question</option>
                                                    <option value="business">Refund</option>
                                                    <option value="business">Service request</option>
                                                    <option value="business">Task</option>
                                                </select>
                                                <div id="popover-type-description" role="tooltip"
                                                    class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK"
                                                    data-popper-reference-hidden="" data-popper-escaped=""
                                                    data-popper-placement="bottom"
                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                                    Each ticket type represents a specific kind of issue or task that
                                                    requires attention.
                                                    <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(0px, 0px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="priority-type"
                                                    class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                                    Priority
                                                    <button data-popover-target="popover-priority-description"
                                                        type="button"
                                                        class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
                                                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" fill="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
                                                    </button>
                                                </label>
                                                <select id="priority-type"
                                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                                    <option selected="">Any</option>
                                                    <option value="personal">High</option>
                                                    <option value="business">Medium</option>
                                                    <option value="business">Low</option>
                                                </select>
                                                <div id="popover-priority-description" role="tooltip"
                                                    class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK"
                                                    data-popper-reference-hidden="" data-popper-escaped=""
                                                    data-popper-placement="bottom"
                                                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                                    Ticket priority is a classification that helps determine the
                                                    importance of a request.
                                                    <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                                                        style="position: absolute; left: 0px; transform: translate(0px, 0px);">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="lK4YcZMYuPJXBsFBM5Hv YRrCJSr_j5nopfm4duUc d4louhNic5PFgJGRKqn6">
                                                <button type="submit"
                                                    class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                                    Apply
                                                </button>
                                                <button type="reset"
                                                    class="t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                                    Reset
                                                </button>
                                            </div>
                                        </form>
                                        <button type="button"
                                            class="YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j _f8XqZvYJf7DNydLmFyI">
                                            <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M9 2.2V7H4.2l.4-.5 3.9-4 .5-.3Zm2-.2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7c0 1.1.9 2 2 2 0 1.1.9 2 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm1 8.8A2.3 2.3 0 0 0 9.6 13a2.3 2.3 0 0 0 2.1 2.5h.7a.3.3 0 0 1 .2.4l-.4.1h-1a1 1 0 1 0 0 2h1c.5 0 1 0 1.4-.3a2 2 0 0 0 1-1.1 2.3 2.3 0 0 0-2.2-3l-.5-.1a.3.3 0 0 1-.3-.4.3.3 0 0 1 .4-.3h1a1 1 0 1 0 0-2h-1Zm8 1.5a1 1 0 1 0-2-.6l-.5 1.7-.5-1.7a1 1 0 0 0-2 .6l1.5 4.8a1 1 0 0 0 1.9 0l1.6-4.8Zm-13.8.9.4-.2h1a1 1 0 1 0 0-2h-1A2.6 2.6 0 0 0 4 13.6v1.8A2.6 2.6 0 0 0 6.6 18h1a1 1 0 1 0 0-2h-1a.6.6 0 0 1-.6-.6v-1.8c0-.1 0-.3.2-.4Z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Export CSV
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="_hpGev6RXFut0Jm_iRgf YRrCJSr_j5nopfm4duUc t6gkcSf0Bt4MLItXvDJ_ _VPh6kIywCMfXFfQLas4 e8VqoQNK0mbkRFDL3LMV RL7uPEoqj_KRubJO6Kau URF_PdoDtDpDi8BZQL94 _ZI9D_boHHl7De08RAA7 _f8XqZvYJf7DNydLmFyI tuEYdQFQ7IyWJ8f7A6Ss hhVyfLYO5HBNKAsXwK1v kx7ZbxfUTd59O6XuY2J0">
                                    <button id="createTicketButton" data-modal-target="createTicketModal"
                                        data-modal-toggle="createTicketModal" type="button"
                                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                        <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"></path>
                                        </svg>
                                        Create ticket
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="YRrCJSr_j5nopfm4duUc hP1M5IgfjJiY8_B1VUN1 _9igzqn_6D3Qq5Hcwkfk">
                            <div
                                class="y7LTF_4HCOoAzmZm_v8k _SmdlCf6eUKB_V9S5IDj Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE _TsbEtxNT5XPbTk6VlSv">
                                Show only:</div>
                            <div class="YRrCJSr_j5nopfm4duUc hP1M5IgfjJiY8_B1VUN1 iHPddplqYvrN6qWgvntn">
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="inline-radio" type="radio" value=""
                                        name="inline-radio-group"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="inline-radio"
                                        class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">All</label>
                                </div>
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="inline-2-radio" type="radio" value=""
                                        name="inline-radio-group"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="inline-2-radio"
                                        class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Solved</label>
                                </div>
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="inline-3-radio" type="radio" value=""
                                        name="inline-radio-group"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="inline-3-radio"
                                        class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Pending</label>
                                </div>
                                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                    <input id="inline-4-radio" type="radio" value=""
                                        name="inline-radio-group"
                                        class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                    <label for="inline-4-radio"
                                        class="t1I6QaLqvCmfaYJcpWU_ c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl EJIoL6514Ry8r7nh011L">Archived</label>
                                </div>
                            </div>
                        </div>
                        <div class="_IebywwKB6L2zG0BTy63 ahOqFrhzLjivRe8a1kX_">
                            <table
                                class="t6gkcSf0Bt4MLItXvDJ_ upQp7iWehfaU8VTbfx_w c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                <thead
                                    class="jtAJHOc7mn7b4IKRO59D gMXmdpOPfqG_3CKkL0VD sdSaZcRa4_We5kKaX4pf PeR2JZ9BZHYIH8Ea3F36 jqg6J89cvxmDiFpnV56r XIIs8ZOri3wm8Wnj9N_y">
                                    <tr>
                                        <th scope="col" class="_wYiJGbRZyFZeCc8y7Sf">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-all" type="checkbox"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-all"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                            ID</th>
                                        <th scope="col"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                            Requested by
                                            <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                    d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                                </path>
                                            </svg>
                                        </th>
                                        <th scope="col"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                            Subject</th>
                                        <th scope="col"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                            Priority
                                            <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                    d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                                </path>
                                            </svg>
                                        </th>
                                        <th scope="col"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                            Agent
                                            <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                    d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                                </path>
                                            </svg>
                                        </th>
                                        <th scope="col"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                            Create Date
                                            <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                    d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                                </path>
                                            </svg>
                                        </th>
                                        <th scope="col"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                            Status
                                            <svg class="c2LzVf9SsdSEMBrRjNwS VPGGthdu3cy_ZP7AL7dt bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                    d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z">
                                                </path>
                                            </svg>
                                        </th>
                                        <th scope="col"
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 yM_AorRf2jSON3pDsdrz">
                                            <span class="_DVAfiyo21kM68EUVzEQ">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                        <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    onclick="event.stopPropagation()"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-table-search-1"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <a class="oJZU4OQzzfXeLbF7UKZ_"
                                                href="https://flowbite.com/application-ui/demo/support/ticket">#1846325</a>
                                        </th>
                                        <td
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Mark Duan</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Help with my purchase</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <span
                                                class="Y3FxyuXtj2gecrGXvLEI _qcCy_0dlurLpzJ4ppIr St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe zQVlolag4_pvTO3oDD8a ___gGfijsXOewjo0iitJ lH1yMVzg_5vXNS47miKb">Medium</span>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <div
                                                class="R9nujHypnXyuHrBww9QK YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <img src="https://flowbite.com/application-ui/demo/images/users/avatar-10.png"
                                                    alt="Avatar"
                                                    class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP _QV5Y5YHkBJZSFfAsN1O RpVwy4sO7Asb86CncKJ_">
                                                Jese Leos
                                            </div>
                                        </th>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            02 Mar 2025</td>
                                        <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <span
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI _qcCy_0dlurLpzJ4ppIr St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe zQVlolag4_pvTO3oDD8a ___gGfijsXOewjo0iitJ lH1yMVzg_5vXNS47miKb">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5.5 3a1 1 0 0 0 0 2H7v2.3c0 .7.2 1.3.6 1.8L9 11.9l.1.1v.1L7.5 15a3 3 0 0 0-.6 1.8V19H5.5a1 1 0 1 0 0 2h13a1 1 0 1 0 0-2H17v-2.3a3 3 0 0 0-.6-1.8l-1.6-2.8v-.2l1.6-2.8a3 3 0 0 0 .6-1.8V5h1.5a1 1 0 1 0 0-2h-13Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <button id="ticket-1-dropdown-button" type="button"
                                                data-dropdown-toggle="ticket-1-dropdown"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="4" d="M6 12h0m6 0h0m6 0h0"></path>
                                                </svg>
                                            </button>
                                            <div id="ticket-1-dropdown"
                                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                                data-popper-placement="top" data-popper-reference-hidden=""
                                                data-popper-escaped=""
                                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1370px, 1623px);">
                                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-labelledby="ticket-1-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m5 12 4.7 4.5 9.3-9"></path>
                                                            </svg>
                                                            Mark as solved
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="assigneeTicketModalButton"
                                                            data-modal-target="assigneeTicketModal"
                                                            data-modal-toggle="assigneeTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Assignee
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="archiveTicketModalButton"
                                                            data-modal-target="archiveTicketModal"
                                                            data-modal-toggle="archiveTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                                                                    clip-rule="evenodd"></path>
                                                                <path
                                                                    d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z">
                                                                </path>
                                                            </svg>
                                                            Archive
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="FJRldeiG2gFGZfuKgp88">
                                                    <button type="button" id="deleteInvoiceButton"
                                                        data-modal-target="deleteTicketModal"
                                                        data-modal-toggle="deleteTicketModal"
                                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                        <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    onclick="event.stopPropagation()"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-table-search-1"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <a class="oJZU4OQzzfXeLbF7UKZ_"
                                                href="https://flowbite.com/application-ui/demo/support/ticket">#1846325</a>
                                        </th>
                                        <td
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Donnie Gree</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Support for Flowbite</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <span
                                                class="_6aYwdjzDCvXK0bVJQOb Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">High</span>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <div
                                                class="R9nujHypnXyuHrBww9QK YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <img src="https://flowbite.com/application-ui/demo/images/users/avatar-9.png"
                                                    alt="Avatar"
                                                    class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP _QV5Y5YHkBJZSFfAsN1O RpVwy4sO7Asb86CncKJ_">
                                                Neil Simss
                                            </div>
                                        </th>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            03 Mar 2025</td>
                                        <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <span
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI _qcCy_0dlurLpzJ4ppIr St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe zQVlolag4_pvTO3oDD8a ___gGfijsXOewjo0iitJ lH1yMVzg_5vXNS47miKb">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5.5 3a1 1 0 0 0 0 2H7v2.3c0 .7.2 1.3.6 1.8L9 11.9l.1.1v.1L7.5 15a3 3 0 0 0-.6 1.8V19H5.5a1 1 0 1 0 0 2h13a1 1 0 1 0 0-2H17v-2.3a3 3 0 0 0-.6-1.8l-1.6-2.8v-.2l1.6-2.8a3 3 0 0 0 .6-1.8V5h1.5a1 1 0 1 0 0-2h-13Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <button id="ticket-2-dropdown-button" type="button"
                                                data-dropdown-toggle="ticket-2-dropdown"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="4" d="M6 12h0m6 0h0m6 0h0"></path>
                                                </svg>
                                            </button>
                                            <div id="ticket-2-dropdown"
                                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                                data-popper-placement="top" data-popper-reference-hidden=""
                                                data-popper-escaped=""
                                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1370px, 1680px);">
                                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-labelledby="ticket-2-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m5 12 4.7 4.5 9.3-9"></path>
                                                            </svg>
                                                            Mark as solved
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="assigneeTicketModalButton"
                                                            data-modal-target="assigneeTicketModal"
                                                            data-modal-toggle="assigneeTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Assignee
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="archiveTicketModalButton"
                                                            data-modal-target="archiveTicketModal"
                                                            data-modal-toggle="archiveTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                                                                    clip-rule="evenodd"></path>
                                                                <path
                                                                    d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z">
                                                                </path>
                                                            </svg>
                                                            Archive
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="FJRldeiG2gFGZfuKgp88">
                                                    <button type="button" id="deleteInvoiceButton"
                                                        data-modal-target="deleteTicketModal"
                                                        data-modal-toggle="deleteTicketModal"
                                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                        <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    onclick="event.stopPropagation()"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-table-search-1"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <a class="oJZU4OQzzfXeLbF7UKZ_"
                                                href="https://flowbite.com/application-ui/demo/support/ticket">#1846325</a>
                                        </th>
                                        <td
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            User123</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Verify my email and my account</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <span
                                                class="_6aYwdjzDCvXK0bVJQOb Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">High</span>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <div
                                                class="R9nujHypnXyuHrBww9QK YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <img src="https://flowbite.com/application-ui/demo/images/users/avatar-2.png"
                                                    alt="Avatar"
                                                    class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP _QV5Y5YHkBJZSFfAsN1O RpVwy4sO7Asb86CncKJ_">
                                                Roberta Casas
                                            </div>
                                        </th>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            03 Mar 2025</td>
                                        <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <span
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI _qcCy_0dlurLpzJ4ppIr St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe zQVlolag4_pvTO3oDD8a ___gGfijsXOewjo0iitJ lH1yMVzg_5vXNS47miKb">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5.5 3a1 1 0 0 0 0 2H7v2.3c0 .7.2 1.3.6 1.8L9 11.9l.1.1v.1L7.5 15a3 3 0 0 0-.6 1.8V19H5.5a1 1 0 1 0 0 2h13a1 1 0 1 0 0-2H17v-2.3a3 3 0 0 0-.6-1.8l-1.6-2.8v-.2l1.6-2.8a3 3 0 0 0 .6-1.8V5h1.5a1 1 0 1 0 0-2h-13Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <button id="ticket-3-dropdown-button" type="button"
                                                data-dropdown-toggle="ticket-3-dropdown"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="4" d="M6 12h0m6 0h0m6 0h0"></path>
                                                </svg>
                                            </button>
                                            <div id="ticket-3-dropdown"
                                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                                data-popper-placement="top" data-popper-reference-hidden=""
                                                data-popper-escaped=""
                                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1370px, 1737px);">
                                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-labelledby="ticket-3-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m5 12 4.7 4.5 9.3-9"></path>
                                                            </svg>
                                                            Mark as solved
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="assigneeTicketModalButton"
                                                            data-modal-target="assigneeTicketModal"
                                                            data-modal-toggle="assigneeTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Assignee
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="archiveTicketModalButton"
                                                            data-modal-target="archiveTicketModal"
                                                            data-modal-toggle="archiveTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                                                                    clip-rule="evenodd"></path>
                                                                <path
                                                                    d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z">
                                                                </path>
                                                            </svg>
                                                            Archive
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="FJRldeiG2gFGZfuKgp88">
                                                    <button type="button" id="deleteInvoiceButton"
                                                        data-modal-target="deleteTicketModal"
                                                        data-modal-toggle="deleteTicketModal"
                                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                        <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    onclick="event.stopPropagation()"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-table-search-1"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <a class="oJZU4OQzzfXeLbF7UKZ_"
                                                href="https://flowbite.com/application-ui/demo/support/ticket">#1846328</a>
                                        </th>
                                        <td
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Leslie Livingston</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            New components</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <span
                                                class="Y3FxyuXtj2gecrGXvLEI _9dH7mrOkzM4RTmidHTs St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe kAEXvwFGb849z6BUdJjG jqg6J89cvxmDiFpnV56r EJIoL6514Ry8r7nh011L">Low</span>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <div
                                                class="R9nujHypnXyuHrBww9QK YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <img src="https://flowbite.com/application-ui/demo/images/users/avatar-2.png"
                                                    alt="Avatar"
                                                    class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP _QV5Y5YHkBJZSFfAsN1O RpVwy4sO7Asb86CncKJ_">
                                                Roberta Casas
                                            </div>
                                        </th>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            07 Mar 2025</td>
                                        <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <span
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2c0-.6-.4-1-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.7 8.7a1 1 0 0 0-1.4-1.4L11 14.6l-1.3-1.3a1 1 0 0 0-1.4 1.4l2 2c.4.4 1 .4 1.4 0l4-4Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Solved
                                            </span>
                                        </td>
                                        <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <button id="ticket-4-dropdown-button" type="button"
                                                data-dropdown-toggle="ticket-4-dropdown"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="4" d="M6 12h0m6 0h0m6 0h0"></path>
                                                </svg>
                                            </button>
                                            <div id="ticket-4-dropdown"
                                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                                data-popper-placement="top" data-popper-reference-hidden=""
                                                data-popper-escaped=""
                                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1370px, 1798px);">
                                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-labelledby="ticket-4-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m5 12 4.7 4.5 9.3-9"></path>
                                                            </svg>
                                                            Mark as solved
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="assigneeTicketModalButton"
                                                            data-modal-target="assigneeTicketModal"
                                                            data-modal-toggle="assigneeTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Assignee
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="archiveTicketModalButton"
                                                            data-modal-target="archiveTicketModal"
                                                            data-modal-toggle="archiveTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                                                                    clip-rule="evenodd"></path>
                                                                <path
                                                                    d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z">
                                                                </path>
                                                            </svg>
                                                            Archive
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="FJRldeiG2gFGZfuKgp88">
                                                    <button type="button" id="deleteInvoiceButton"
                                                        data-modal-target="deleteTicketModal"
                                                        data-modal-toggle="deleteTicketModal"
                                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                        <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    onclick="event.stopPropagation()"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-table-search-1"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <a class="oJZU4OQzzfXeLbF7UKZ_"
                                                href="https://flowbite.com/application-ui/demo/support/ticket">#1846329</a>
                                        </th>
                                        <td
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            User123</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Figma variants missing</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <span
                                                class="_6aYwdjzDCvXK0bVJQOb Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">High</span>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <div
                                                class="R9nujHypnXyuHrBww9QK YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <img src="https://flowbite.com/application-ui/demo/images/users/avatar-10.png"
                                                    alt="Avatar"
                                                    class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP _QV5Y5YHkBJZSFfAsN1O RpVwy4sO7Asb86CncKJ_">
                                                Jese Leos
                                            </div>
                                        </th>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            07 Mar 2025</td>
                                        <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <span
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI _qcCy_0dlurLpzJ4ppIr St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe zQVlolag4_pvTO3oDD8a ___gGfijsXOewjo0iitJ lH1yMVzg_5vXNS47miKb">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M5.5 3a1 1 0 0 0 0 2H7v2.3c0 .7.2 1.3.6 1.8L9 11.9l.1.1v.1L7.5 15a3 3 0 0 0-.6 1.8V19H5.5a1 1 0 1 0 0 2h13a1 1 0 1 0 0-2H17v-2.3a3 3 0 0 0-.6-1.8l-1.6-2.8v-.2l1.6-2.8a3 3 0 0 0 .6-1.8V5h1.5a1 1 0 1 0 0-2h-13Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <button id="ticket-5-dropdown-button" type="button"
                                                data-dropdown-toggle="ticket-5-dropdown"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="4" d="M6 12h0m6 0h0m6 0h0"></path>
                                                </svg>
                                            </button>
                                            <div id="ticket-5-dropdown"
                                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                                data-popper-placement="top" data-popper-reference-hidden=""
                                                data-popper-escaped=""
                                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1370px, 1859px);">
                                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-labelledby="ticket-5-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m5 12 4.7 4.5 9.3-9"></path>
                                                            </svg>
                                                            Mark as solved
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="assigneeTicketModalButton"
                                                            data-modal-target="assigneeTicketModal"
                                                            data-modal-toggle="assigneeTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Assignee
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="archiveTicketModalButton"
                                                            data-modal-target="archiveTicketModal"
                                                            data-modal-toggle="archiveTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                                                                    clip-rule="evenodd"></path>
                                                                <path
                                                                    d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z">
                                                                </path>
                                                            </svg>
                                                            Archive
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="FJRldeiG2gFGZfuKgp88">
                                                    <button type="button" id="deleteInvoiceButton"
                                                        data-modal-target="deleteTicketModal"
                                                        data-modal-toggle="deleteTicketModal"
                                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                        <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    onclick="event.stopPropagation()"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-table-search-1"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <a class="oJZU4OQzzfXeLbF7UKZ_"
                                                href="https://flowbite.com/application-ui/demo/support/ticket">#1846330</a>
                                        </th>
                                        <td
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Bergside LLC</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            How to change colors</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <span
                                                class="Y3FxyuXtj2gecrGXvLEI _qcCy_0dlurLpzJ4ppIr St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe zQVlolag4_pvTO3oDD8a ___gGfijsXOewjo0iitJ lH1yMVzg_5vXNS47miKb">Medium</span>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <div
                                                class="R9nujHypnXyuHrBww9QK YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <img src="https://flowbite.com/application-ui/demo/images/users/avatar-2.png"
                                                    alt="Avatar"
                                                    class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP _QV5Y5YHkBJZSFfAsN1O RpVwy4sO7Asb86CncKJ_">
                                                Roberta Casas
                                            </div>
                                        </th>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            08 Mar 2025</td>
                                        <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <span
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2c0-.6-.4-1-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.7 8.7a1 1 0 0 0-1.4-1.4L11 14.6l-1.3-1.3a1 1 0 0 0-1.4 1.4l2 2c.4.4 1 .4 1.4 0l4-4Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Solved
                                            </span>
                                        </td>
                                        <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <button id="ticket-6-dropdown-button" type="button"
                                                data-dropdown-toggle="ticket-6-dropdown"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="4" d="M6 12h0m6 0h0m6 0h0"></path>
                                                </svg>
                                            </button>
                                            <div id="ticket-6-dropdown"
                                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                                data-popper-placement="top" data-popper-reference-hidden=""
                                                data-popper-escaped=""
                                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1370px, 1916px);">
                                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-labelledby="ticket-6-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m5 12 4.7 4.5 9.3-9"></path>
                                                            </svg>
                                                            Mark as solved
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="assigneeTicketModalButton"
                                                            data-modal-target="assigneeTicketModal"
                                                            data-modal-toggle="assigneeTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Assignee
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="archiveTicketModalButton"
                                                            data-modal-target="archiveTicketModal"
                                                            data-modal-toggle="archiveTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                                                                    clip-rule="evenodd"></path>
                                                                <path
                                                                    d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z">
                                                                </path>
                                                            </svg>
                                                            Archive
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="FJRldeiG2gFGZfuKgp88">
                                                    <button type="button" id="deleteInvoiceButton"
                                                        data-modal-target="deleteTicketModal"
                                                        data-modal-toggle="deleteTicketModal"
                                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                        <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    onclick="event.stopPropagation()"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-table-search-1"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <a class="oJZU4OQzzfXeLbF7UKZ_"
                                                href="https://flowbite.com/application-ui/demo/support/ticket">#1846331</a>
                                        </th>
                                        <td
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Faye Drake</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Invoice issues</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <span
                                                class="Y3FxyuXtj2gecrGXvLEI _qcCy_0dlurLpzJ4ppIr St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe zQVlolag4_pvTO3oDD8a ___gGfijsXOewjo0iitJ lH1yMVzg_5vXNS47miKb">Medium</span>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <div
                                                class="R9nujHypnXyuHrBww9QK YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <img src="https://flowbite.com/application-ui/demo/images/users/avatar-10.png"
                                                    alt="Avatar"
                                                    class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP _QV5Y5YHkBJZSFfAsN1O RpVwy4sO7Asb86CncKJ_">
                                                Jese Leos
                                            </div>
                                        </th>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            08 Mar 2025</td>
                                        <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <span
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2c0-.6-.4-1-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.7 8.7a1 1 0 0 0-1.4-1.4L11 14.6l-1.3-1.3a1 1 0 0 0-1.4 1.4l2 2c.4.4 1 .4 1.4 0l4-4Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Solved
                                            </span>
                                        </td>
                                        <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <button id="ticket-7-dropdown-button" type="button"
                                                data-dropdown-toggle="ticket-7-dropdown"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="4" d="M6 12h0m6 0h0m6 0h0"></path>
                                                </svg>
                                            </button>
                                            <div id="ticket-7-dropdown"
                                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                                data-popper-placement="top" data-popper-reference-hidden=""
                                                data-popper-escaped=""
                                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1370px, 1973px);">
                                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-labelledby="ticket-7-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m5 12 4.7 4.5 9.3-9"></path>
                                                            </svg>
                                                            Mark as solved
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="assigneeTicketModalButton"
                                                            data-modal-target="assigneeTicketModal"
                                                            data-modal-toggle="assigneeTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Assignee
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="archiveTicketModalButton"
                                                            data-modal-target="archiveTicketModal"
                                                            data-modal-toggle="archiveTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                                                                    clip-rule="evenodd"></path>
                                                                <path
                                                                    d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z">
                                                                </path>
                                                            </svg>
                                                            Archive
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="FJRldeiG2gFGZfuKgp88">
                                                    <button type="button" id="deleteInvoiceButton"
                                                        data-modal-target="deleteTicketModal"
                                                        data-modal-toggle="deleteTicketModal"
                                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                        <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    onclick="event.stopPropagation()"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-table-search-1"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <a class="oJZU4OQzzfXeLbF7UKZ_"
                                                href="https://flowbite.com/application-ui/demo/support/ticket">#1846332</a>
                                        </th>
                                        <td
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Karen Nelson</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Hello there!</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <span
                                                class="Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">High</span>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <div
                                                class="R9nujHypnXyuHrBww9QK YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <img src="https://flowbite.com/application-ui/demo/images/users/avatar-10.png"
                                                    alt="Avatar"
                                                    class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP _QV5Y5YHkBJZSFfAsN1O RpVwy4sO7Asb86CncKJ_">
                                                Jese Leos
                                            </div>
                                        </th>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            10 Mar 2025</td>
                                        <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <span
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2c0-.6-.4-1-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.7 8.7a1 1 0 0 0-1.4-1.4L11 14.6l-1.3-1.3a1 1 0 0 0-1.4 1.4l2 2c.4.4 1 .4 1.4 0l4-4Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Solved
                                            </span>
                                        </td>
                                        <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <button id="ticket-8-dropdown-button" type="button"
                                                data-dropdown-toggle="ticket-8-dropdown"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="4" d="M6 12h0m6 0h0m6 0h0"></path>
                                                </svg>
                                            </button>
                                            <div id="ticket-8-dropdown"
                                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                                data-popper-placement="top" data-popper-reference-hidden=""
                                                data-popper-escaped=""
                                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1370px, 2030px);">
                                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-labelledby="ticket-8-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m5 12 4.7 4.5 9.3-9"></path>
                                                            </svg>
                                                            Mark as solved
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="assigneeTicketModalButton"
                                                            data-modal-target="assigneeTicketModal"
                                                            data-modal-toggle="assigneeTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Assignee
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="archiveTicketModalButton"
                                                            data-modal-target="archiveTicketModal"
                                                            data-modal-toggle="archiveTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                                                                    clip-rule="evenodd"></path>
                                                                <path
                                                                    d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z">
                                                                </path>
                                                            </svg>
                                                            Archive
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="FJRldeiG2gFGZfuKgp88">
                                                    <button type="button" id="deleteInvoiceButton"
                                                        data-modal-target="deleteTicketModal"
                                                        data-modal-toggle="deleteTicketModal"
                                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                        <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    onclick="event.stopPropagation()"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-table-search-1"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <a class="oJZU4OQzzfXeLbF7UKZ_"
                                                href="https://flowbite.com/application-ui/demo/support/ticket">#1846333</a>
                                        </th>
                                        <td
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Lana Byrd</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Pricing questions</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <span
                                                class="Y3FxyuXtj2gecrGXvLEI __CUdK3mSkcMQpxc1Lod St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe ZN_OBnKt2VQjvkKnCO6j _GlwOcA9YuerMlQx_c88 _XapmO5DQjdm9xWcSSv9">High</span>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <div
                                                class="R9nujHypnXyuHrBww9QK YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <img src="https://flowbite.com/application-ui/demo/images/users/avatar-7.png"
                                                    alt="Avatar"
                                                    class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP _QV5Y5YHkBJZSFfAsN1O RpVwy4sO7Asb86CncKJ_">
                                                Bonnie Green
                                            </div>
                                        </th>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            11 Mar 2025</td>
                                        <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <span
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2c0-.6-.4-1-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.7 8.7a1 1 0 0 0-1.4-1.4L11 14.6l-1.3-1.3a1 1 0 0 0-1.4 1.4l2 2c.4.4 1 .4 1.4 0l4-4Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Solved
                                            </span>
                                        </td>
                                        <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <button id="ticket-9-dropdown-button" type="button"
                                                data-dropdown-toggle="ticket-9-dropdown"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="4" d="M6 12h0m6 0h0m6 0h0"></path>
                                                </svg>
                                            </button>
                                            <div id="ticket-9-dropdown"
                                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                                data-popper-placement="top" data-popper-reference-hidden=""
                                                data-popper-escaped=""
                                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1370px, 2087px);">
                                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-labelledby="ticket-9-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m5 12 4.7 4.5 9.3-9"></path>
                                                            </svg>
                                                            Mark as solved
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="assigneeTicketModalButton"
                                                            data-modal-target="assigneeTicketModal"
                                                            data-modal-toggle="assigneeTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Assignee
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="archiveTicketModalButton"
                                                            data-modal-target="archiveTicketModal"
                                                            data-modal-toggle="archiveTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                                                                    clip-rule="evenodd"></path>
                                                                <path
                                                                    d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z">
                                                                </path>
                                                            </svg>
                                                            Archive
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="FJRldeiG2gFGZfuKgp88">
                                                    <button type="button" id="deleteInvoiceButton"
                                                        data-modal-target="deleteTicketModal"
                                                        data-modal-toggle="deleteTicketModal"
                                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        class="EpUSgjHdM6oyMXUiK_8_ _7KA5gD55t2lxf9Jkj20 _fGhMnSfYmaGrv7DvZ00 OPrb_iG5WDy_7F05BDOX">
                                        <td class="E9GV5sZJIbfO_GEQ_moc RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    onclick="event.stopPropagation()"
                                                    class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc Y3FxyuXtj2gecrGXvLEI vpDN1VEJLu5FmLkr5WCk _9dH7mrOkzM4RTmidHTs _6MyV8SXoSWq_PQ6KWI6 _q0p_O8QLU1paqtuqmI2 GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r _GL8_lXmAgroY9ZBWGLH BO8JrKgx4qkHG27c4wVR">
                                                <label for="checkbox-table-search-1"
                                                    class="_DVAfiyo21kM68EUVzEQ">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <a class="oJZU4OQzzfXeLbF7UKZ_"
                                                href="https://flowbite.com/application-ui/demo/support/ticket">#1846334</a>
                                        </th>
                                        <td
                                            class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            User12345</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Flowbite license</td>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <span
                                                class="Y3FxyuXtj2gecrGXvLEI _9dH7mrOkzM4RTmidHTs St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe kAEXvwFGb849z6BUdJjG jqg6J89cvxmDiFpnV56r EJIoL6514Ry8r7nh011L">Low</span>
                                        </td>
                                        <th scope="row"
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            <div
                                                class="R9nujHypnXyuHrBww9QK YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                                                <img src="https://flowbite.com/application-ui/demo/images/users/avatar-2.png"
                                                    alt="Avatar"
                                                    class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP _QV5Y5YHkBJZSFfAsN1O RpVwy4sO7Asb86CncKJ_">
                                                Roberta Casas
                                            </div>
                                        </th>
                                        <td
                                            class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            12 Mar 2025</td>
                                        <td class="BHrWGjM1Iab_fAz0_91H RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <span
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Y3FxyuXtj2gecrGXvLEI Dnqe3vvw22y12_oWDYvR St_AVDyTHE88JaawJoRQ Zs2BLzUMh0_yTpU6xCcU gMXmdpOPfqG_3CKkL0VD ezMFUVl744lvw6ht0lFe UptwuMAvsdRjvAaYNP6r pI9ZemAPEselrh3XVsBm nsxYwRasy6VBGnh2oIHS">
                                                <svg class="_j7jrBV2UWRXe__bk9uf bHAdXFPNFeidKlaOkKvl nXHmt07_6T25v6kTjTzf"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2c0-.6-.4-1-1-1H9Zm1 2h4v2h1a1 1 0 1 1 0 2H9a1 1 0 0 1 0-2h1V4Zm5.7 8.7a1 1 0 0 0-1.4-1.4L11 14.6l-1.3-1.3a1 1 0 0 0-1.4 1.4l2 2c.4.4 1 .4 1.4 0l4-4Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Solved
                                            </span>
                                        </td>
                                        <td class="RZmKBZs1E1eXw8vkE6jY i8v96MUlFwGv9qJUkAx7">
                                            <button id="ticket-10-dropdown-button" type="button"
                                                data-dropdown-toggle="ticket-10-dropdown"
                                                class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F sQaK4IH7BIQSgBTGX8Pe ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n BkIbg_JwkgiyRW804Hhu XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-width="4" d="M6 12h0m6 0h0m6 0h0"></path>
                                                </svg>
                                            </button>
                                            <div id="ticket-10-dropdown"
                                                class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                                                data-popper-placement="top" data-popper-reference-hidden=""
                                                data-popper-escaped=""
                                                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1370px, 2144px);">
                                                <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                                                    aria-labelledby="ticket-10-dropdown-button">
                                                    <li>
                                                        <a href="#"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m5 12 4.7 4.5 9.3-9"></path>
                                                            </svg>
                                                            Mark as solved
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="assigneeTicketModalButton"
                                                            data-modal-target="assigneeTicketModal"
                                                            data-modal-toggle="assigneeTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            Assignee
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" id="archiveTicketModalButton"
                                                            data-modal-target="archiveTicketModal"
                                                            data-modal-toggle="archiveTicketModal"
                                                            class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                                                            <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                                aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1c0 .6-.4 1-1 1h-4a1 1 0 0 1-1-1Z"
                                                                    clip-rule="evenodd"></path>
                                                                <path
                                                                    d="M2 6c0-1.1.9-2 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z">
                                                                </path>
                                                            </svg>
                                                            Archive
                                                        </button>
                                                    </li>
                                                </ul>
                                                <div class="FJRldeiG2gFGZfuKgp88">
                                                    <button type="button" id="deleteInvoiceButton"
                                                        data-modal-target="deleteTicketModal"
                                                        data-modal-toggle="deleteTicketModal"
                                                        class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe m_WzesDEb91pTPmX64rt _7KA5gD55t2lxf9Jkj20 Sz97zU8r72z_pjE9zQnR RzANcaqunVvlLrO6_tal">
                                                        <svg class="IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 24 24">
                                                            <path fill-rule="evenodd"
                                                                d="M8.6 2.6A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4c0-.5.2-1 .6-1.4ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Delete ticket
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Table Footer -->
                        <div class="ahOqFrhzLjivRe8a1kX_ wBVMFkIGfrKshbvi2gS1">
                            <nav class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV _7_AEkSp_Gi6KH9ZW6st sJNGKHxFYdN5Nzml5J2j tI6ZVpHcCWxY_MKHSQWC p_2EXc_a2sDA_h41l8QU tuEYdQFQ7IyWJ8f7A6Ss hhVyfLYO5HBNKAsXwK1v eVEHKvmQTgrcFfcnBoRJ WoJnkQmBGtEPqYedyh7V"
                                aria-label="Table navigation">
                                <span
                                    class="c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">Showing
                                    <span
                                        class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">1-15</span>
                                    of <span
                                        class="yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">1000</span></span>
                                <ul class="_k0lTW0vvzboctTxDi2R RL7uPEoqj_KRubJO6Kau EVsptO6LmMeSj8z3lntE">
                                    <li>
                                        <a href="#"
                                            class="CoXBDf_LlsdMbiNfGE67 YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU Zbcg0Bjzm_C_64FAwnE3 pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI Qkdk47eO_FsOcXfaC9zb PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                            <span class="_DVAfiyo21kM68EUVzEQ">Previous</span>
                                            <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                            1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                            2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page"
                                            class="QhmQ_v3mmDFIP9VaVOfb YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln XQGFRdlxLbhbEMzeaRuO OHD_pMp_ehzJj42EmDyF _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu _6MyV8SXoSWq_PQ6KWI6 M7HoUYpjoEdw_y87xeWn YXx9oZ15oLXSCG32YPBT _fGhMnSfYmaGrv7DvZ00 jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE">
                                            3
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                            ...
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                            100
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="YRrCJSr_j5nopfm4duUc uLPch_bqyJDXwe5tynMV Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _McrmMbFrEkc_sTK9IC8 pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI Qkdk47eO_FsOcXfaC9zb OXyBmUnmaFHYN14c7Giu PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 n2xFO60c4M2k5KjGtElq _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
                                            <span class="_DVAfiyo21kM68EUVzEQ">Next</span>
                                            <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Delete Ticket modal -->
                <div id="deleteTicketModal" tabindex="-1" aria-hidden="true"
                    class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX justify-center items-center">
                    <div
                        class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ ZhzOGpbwY0R4TKKYr5pG _wYiJGbRZyFZeCc8y7Sf">
                        <!-- Modal content -->
                        <div
                            class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                            <button type="button"
                                class="pq2JRWtiWcwYnw3xueNl g11v7hv2nftKJig5bsCt tUrUahyB6juka_LhwvrY LAjAGvS_n5tUL9Q_7i85 _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                data-modal-toggle="deleteTicketModal">
                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"></path>
                                </svg>

                                <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                            </button>
                            <h3
                                class="Z3N7I2IDDsoXK6xJ1cSW y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Are you sure?</h3>
                            <p class="hD0sTTDgbxakubcHVW2X PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">You are about to
                                delete this ticket, this cannot be undone.</p>
                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                <button data-modal-toggle="deleteTicketModal" type="button"
                                    class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T _8kDN2mZyAf_kSS0wRR7 jqg6J89cvxmDiFpnV56r EJIoL6514Ry8r7nh011L RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW ICV24pqO8p1LJm4GEOgS">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F SdPDrbResNmgnA0L4Iki _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 w8mVIEFJVQG7skDEVVw8 BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 wGCv_lBIef6dPW_LgqPQ o8x8vWHZQ0qZRIeZ05II _G1H5DlsGdZNDYF1Me2f g0psQAXAFirvUBcDyMSb">
                                    <svg aria-hidden="true"
                                        class="Hf613rHdsiopu7YakI_r IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                        fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Create ticket modal -->
                <div id="createTicketModal" tabindex="-1" aria-hidden="true"
                    class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX justify-center items-center">
                    <div
                        class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ TnCneWVBJS9LByVLKjZH _wYiJGbRZyFZeCc8y7Sf">
                        <!-- Modal content -->
                        <div
                            class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                            <!-- Modal header -->
                            <div
                                class="hD0sTTDgbxakubcHVW2X YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j zQeL_bQRwh9WGEnvS5ug N4SFnsqiVKm1oFHmSTyG">
                                <h3
                                    class="y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Add new ticket</h3>
                                <button type="button"
                                    class="zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    data-modal-toggle="createTicketModal">
                                    <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"></path>
                                    </svg>
                                    <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form action="#">
                                <div
                                    class="hD0sTTDgbxakubcHVW2X xCPtuxM4_gihvpPwv9bX iHPddplqYvrN6qWgvntn AqVNvLG_H6VHhym2yKMp">
                                    <div>
                                        <label for="requester"
                                            class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Requester
                                            <button data-popover-target="popover-requester-description"
                                                type="button"
                                                class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
                                            </button>
                                        </label>
                                        <select id="requester"
                                            class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                            <option selected="">Jese Leos</option>
                                            <option value="bergside">Bergside LLC</option>
                                            <option value="user">User1029</option>
                                            <option value="leslie">Leslie Livingston</option>
                                            <option value="micheal">Micheal Gough</option>
                                            <option value="karen">Karen Nelson</option>
                                        </select>
                                        <div id="popover-requester-description" role="tooltip"
                                            class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK"
                                            data-popper-reference-hidden="" data-popper-escaped=""
                                            data-popper-placement="bottom"
                                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                            The requester is typically the person experiencing an issue or the
                                            individual seeking assistance, or information from a support team.
                                            <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                                                style="position: absolute; left: 0px; transform: translate(0px, 0px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="agent"
                                            class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Agent
                                            <button data-popover-target="popover-agent" type="button"
                                                class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
                                            </button>
                                        </label>
                                        <select id="agent"
                                            class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                            <option selected="">Bonnie Green</option>
                                            <option value="thomas">Thomas Lean</option>
                                            <option value="roberta">Roberta Casas</option>
                                        </select>
                                        <div id="popover-agent" role="tooltip"
                                            class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK"
                                            data-popper-reference-hidden="" data-popper-escaped=""
                                            data-popper-placement="bottom"
                                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                            An agent is a member of a support team who is responsible for managing and
                                            resolving service requests through the ticketing system.
                                            <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                                                style="position: absolute; left: 0px; transform: translate(0px, 0px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="follower"
                                            class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Follower</label>
                                        <select id="follower"
                                            class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                            <option selected="">Bonnie Green</option>
                                            <option value="thomas">Thomas Lean</option>
                                            <option value="roberta">Roberta Casas</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="tags"
                                            class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Tags</label>
                                        <input type="text" id="tags"
                                            class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                            placeholder="" required="">
                                    </div>
                                    <div>
                                        <label for="ticket-type-modal"
                                            class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Type
                                            <button data-popover-target="popover-ticket-type" type="button"
                                                class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
                                            </button>
                                        </label>
                                        <select id="ticket-type-modal"
                                            class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                            <option selected="">Question</option>
                                            <option value="refund">Refund</option>
                                            <option value="roberta">Service request</option>
                                            <option value="roberta">Task</option>
                                        </select>
                                        <div id="popover-ticket-type" role="tooltip"
                                            class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK"
                                            data-popper-reference-hidden="" data-popper-escaped=""
                                            data-popper-placement="bottom"
                                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                            Ticket types help organize and prioritize different types of requests within
                                            the ticketing system.
                                            <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                                                style="position: absolute; left: 0px; transform: translate(0px, 0px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="ticket-priority"
                                            class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                            Priority
                                            <button data-popover-target="popover-priority-modal" type="button"
                                                class="UwVmaTmxbsmvnpCB2B1K _JmTNv5EiHqK2A1jcQSf ZnBoTVi7VOJdCLSSU62n dMTOiA3mf3FTjlHu6DqW">
                                                <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.008-3.018a1.502 1.502 0 0 1 2.522 1.159v.024a1.44 1.44 0 0 1-1.493 1.418 1 1 0 0 0-1.037.999V14a1 1 0 1 0 2 0v-.539a3.44 3.44 0 0 0 2.529-3.256 3.502 3.502 0 0 0-7-.255 1 1 0 0 0 2 .076c.014-.398.187-.774.48-1.044Zm.982 7.026a1 1 0 1 0 0 2H12a1 1 0 1 0 0-2h-.01Z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="_DVAfiyo21kM68EUVzEQ">Show information</span>
                                            </button>
                                        </label>
                                        <select id="ticket-priority"
                                            class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl _8kDN2mZyAf_kSS0wRR7 yVD6UHmZ_BcStq0KYFeK OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                            <option selected="">Any</option>
                                            <option value="personal">High</option>
                                            <option value="business">Medium</option>
                                            <option value="business">Low</option>
                                        </select>
                                        <div id="popover-priority-modal" role="tooltip"
                                            class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt p4AJk9ET4ZlyzNjHjPnM mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf yVD6UHmZ_BcStq0KYFeK"
                                            data-popper-reference-hidden="" data-popper-escaped=""
                                            data-popper-placement="bottom"
                                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                                            Ticket priority is a classification that helps determine the urgency and
                                            importance of a service request.
                                            <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                                                style="position: absolute; left: 0px; transform: translate(0px, 0px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="NM7Z1HBVjN_86WhEcXan">
                                        <label for="subject"
                                            class="TR_P65x9ie7j6uxFo_Cs _Vb9igHms0hI1PQcvp_S c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">Your
                                            message</label>
                                        <textarea id="subject" rows="4"
                                            class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D olxDi3yL6f0gpdsOFDhx c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE B6xjPKbspU6m_EWVKPv2 q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput"
                                            placeholder="Write your thoughts here..."></textarea>
                                    </div>
                                </div>

                                <div
                                    class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6 _sxUUp1E5_OSG60aCHKi">
                                    <button type="button"
                                        class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                        Cancel
                                    </button>
                                    <button type="submit"
                                        class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY ZjWEEmDsdPvU2GdH53LK cexDVMRjens2nRrMcG96 ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                        <svg class="_Tk8743voA_rOget_8jS IRKzgyPj4qWOh2vq2xBg _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"></path>
                                        </svg>
                                        Add ticket
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Archive ticket modal -->
                <div id="archiveTicketModal" tabindex="-1" aria-hidden="true"
                    class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX justify-center items-center">
                    <div
                        class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ uv4ZnT9l0TZhdd_Ia_EC _wYiJGbRZyFZeCc8y7Sf">
                        <!-- Modal content -->
                        <div
                            class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                            <button type="button"
                                class="pq2JRWtiWcwYnw3xueNl MsWprSx3_qpThIj5XLSY tUrUahyB6juka_LhwvrY zjZIaeYZzHaaBqxD5KzF _k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F mW4LfSTbez3WHPeTDguY Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 _JmTNv5EiHqK2A1jcQSf _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                data-modal-toggle="archiveTicketModal">
                                <svg class="rxe6apEJoEk8r75xaVNG ADSeKHR1DvUUA48Chci_" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"></path>
                                </svg>
                                <span class="_DVAfiyo21kM68EUVzEQ">Close modal</span>
                            </button>
                            <h3
                                class="Z3N7I2IDDsoXK6xJ1cSW y0nOgdpiqOUaFDbjAxwD yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                Archive ticket</h3>
                            <p
                                class="hD0sTTDgbxakubcHVW2X LIY8CTZOqy5iiXBQA539 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                                You are about to archive the following ticket:</p>
                            <ul role="list"
                                class="hD0sTTDgbxakubcHVW2X TVHgSaRh3muGJct_epr9 upQp7iWehfaU8VTbfx_w PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y N4SFnsqiVKm1oFHmSTyG">
                                <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_">
                                    <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc _VPh6kIywCMfXFfQLas4 _JmTNv5EiHqK2A1jcQSf qIT6vrYn0Fr1U3wlPXaS"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>#1846354 - Mark Duan</span>
                                </li>
                            </ul>
                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                <button data-modal-toggle="archiveTicketModal" type="button"
                                    class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                    No, cancel
                                </button>
                                <button type="button"
                                    class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                    <svg class="Hf613rHdsiopu7YakI_r C_aqJ70iNmOTNL788uQu _o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"></path>
                                    </svg>
                                    Archive this ticket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Assignee modal -->
                <div id="assigneeTicketModal" tabindex="-1" aria-hidden="true"
                    class="_LPVUrp9Uina5fcERqWC TYmpscr1PwuC1dpYXDpM ZjE1E_5ejL_PlLNIq3MM uQByIGHtHssL9HoPQXR4 Jq3rRDG6Hsr3eAZ0KJeH _SmdlCf6eUKB_V9S5IDj _dZO1Z7EjPZTzv7NappG D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU _lTTGxW9MVI40FyDCtmr LQrvJzHhtGuotyv_EF_N k6hbvxXxe_du942IR0vX justify-center items-center">
                    <div
                        class="ahOqFrhzLjivRe8a1kX_ D5X3kHheOzrTNzgpkKYX t6gkcSf0Bt4MLItXvDJ_ ZhzOGpbwY0R4TKKYr5pG _wYiJGbRZyFZeCc8y7Sf">
                        <!-- Modal content -->
                        <div
                            class="ahOqFrhzLjivRe8a1kX_ mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi _aDtgllJkTzUlILozHgX">
                            <form class="YajDCE_nRj_FDIevNpsd hD0sTTDgbxakubcHVW2X ZhzOGpbwY0R4TKKYr5pG">
                                <label for="assignee"
                                    class="TR_P65x9ie7j6uxFo_Cs YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 sJNGKHxFYdN5Nzml5J2j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                                    Agent
                                    <a href="#"
                                        class="OQflBVxALl1Ntbyc2J2_ oJZU4OQzzfXeLbF7UKZ_ fZf6W_ZtzEh6EEqmWMA9">take
                                        it</a>
                                </label>
                                <select id="assignee"
                                    class="_Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk jtAJHOc7mn7b4IKRO59D _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl LceKfSImrGKQrtDGkpBV GdTcGtoKP5_bET3syLDl Mmx5lX7HVdrWCgh3EpTP jqg6J89cvxmDiFpnV56r OyABRrnTV_kvHV7dJ0uE H7KQDhgKsqZaTUouEUQL q6szSHqGtBufkToFe_s5 KpCMWe32PQyrSFbZVput">
                                    <option selected="">Bonnie Green</option>
                                    <option value="jese">Jese Leos</option>
                                    <option value="roberta">Roberta Casas</option>
                                    <option value="neil">Neil Sims</option>
                                </select>
                            </form>

                            <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 d4louhNic5PFgJGRKqn6">
                                <button data-modal-toggle="assigneeTicketModal" type="button"
                                    class="mveJTCIb2WII7J4sY22F pXhVRBC8yaUNllmIWxln qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl _7KA5gD55t2lxf9Jkj20 YXx9oZ15oLXSCG32YPBT xKUZEM163cLLvNnDh2ZN BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y Mmx5lX7HVdrWCgh3EpTP _1jTZ8KXRZul60S6czNi XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW yChACvAr1v8czJ2VO22j">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 mveJTCIb2WII7J4sY22F g40_g3BQzYCOX5eZADgY _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 YoPCmQ0E_V5W0GGmSIdm BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 KmgKPWh7pHX4ztLneO0T d8_fVOcgDmbt7UdpfeLK WuKugQzwTT7o1wwBck2R _ZsTMX_gz275093orLWM">
                                    Apply
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <footer
                class="pVSXSlnJdgskzP7BxPBe qUWbS_LTZujDB4XCd11V _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf _fGhMnSfYmaGrv7DvZ00 _1jTZ8KXRZul60S6czNi _TsbEtxNT5XPbTk6VlSv hhVyfLYO5HBNKAsXwK1v t5cz8HTvFaREjnieK5hv">
                <div
                    class="hD0sTTDgbxakubcHVW2X _ZI9D_boHHl7De08RAA7 _8poyx3QkKTfGebRMcQW VLrMSo_5m63EfxOYDcRb qq_IRCWs_IG1qC5_oFW7">
                    <p
                        class="hD0sTTDgbxakubcHVW2X ijrOHNoSVGATsWYKl4Id c8dCx6gnV43hTOLV6ks5 PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y roTtmJKSiubwdmgJkwrv">
                        © 2025 <a href="https://flowbite.com/" class="oJZU4OQzzfXeLbF7UKZ_"
                            target="_blank">Flowbite</a>. All rights reserved.</p>
                    <ul class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU">
                        <li>
                            <a href="#"
                                class="_JjoYNe60qQ8rCHaq_Lj __9sbu0yrzdhGIkLWNXl W_sCP6_PDfz0Lqf875WU _JuCjEvnRAY7i_IOYa7l OyABRrnTV_kvHV7dJ0uE">Privacy
                                Policy</a>
                        </li>
                        <li>
                            <a href="#"
                                class="_JjoYNe60qQ8rCHaq_Lj __9sbu0yrzdhGIkLWNXl W_sCP6_PDfz0Lqf875WU _JuCjEvnRAY7i_IOYa7l OyABRrnTV_kvHV7dJ0uE">API</a>
                        </li>
                        <li>
                            <a href="#"
                                class="__9sbu0yrzdhGIkLWNXl W_sCP6_PDfz0Lqf875WU _JuCjEvnRAY7i_IOYa7l OyABRrnTV_kvHV7dJ0uE">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 Nm7xMnguzOx6J5Ao7yCU hLiU_EU6hK5DGt8Nzo2B">
                    <button id="dropdownLanguageButton" data-dropdown-toggle="dropdownLanguage"
                        class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 RpVwy4sO7Asb86CncKJ_ Z4DH5a4vmjReSFRBpPgz c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl NoMYHiWi1FFNSSKvv2nd _dylIDxYTN3qgvD4U597 XGQIxPVjm_m7D0aLHB7Y OyABRrnTV_kvHV7dJ0uE vOAl8Rxpm90wAOreazXP yChACvAr1v8czJ2VO22j UDKveXWAUBVsk_hrtEsM"
                        type="button">
                        <span class="_DVAfiyo21kM68EUVzEQ">Open user menu</span>
                        <svg aria-hidden="true"
                            class="_6aYwdjzDCvXK0bVJQOb gtlIjUq8I0xb1BZjyfWO bHAdXFPNFeidKlaOkKvl E9GV5sZJIbfO_GEQ_moc"
                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                            <g fill-rule="evenodd">
                                <g stroke-width="1pt">
                                    <path fill="#bd3d44"
                                        d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                        transform="scale(3.9385)"></path>
                                    <path fill="#fff"
                                        d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                        transform="scale(3.9385)"></path>
                                </g>
                                <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"></path>
                                <path fill="#fff"
                                    d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                    transform="scale(3.9385)"></path>
                            </g>
                        </svg>
                        English (US)
                        <svg class="ka_AH_0vul4aSdj1co8A LBw_xNY6RemSb6arrxbk ZCcDCx3VW8mhFqKa8r5J"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4"></path>
                        </svg>
                    </button>

                    <div id="dropdownLanguage"
                        class="QhmQ_v3mmDFIP9VaVOfb _SmdlCf6eUKB_V9S5IDj DMl_3kYwIL0gEDUdNWka Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 mngKhi_Rv06PF57lblDI PoeKYEQfG4WfmL9xM6vu jqg6J89cvxmDiFpnV56r"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1263px, 2304px);">
                        <ul class="FJRldeiG2gFGZfuKgp88 c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y"
                            role="none">
                            <li>
                                <a href="#"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">
                                    <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                        <svg aria-hidden="true"
                                            class="_6aYwdjzDCvXK0bVJQOb OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_"
                                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us"
                                            viewBox="0 0 512 512">
                                            <g fill-rule="evenodd">
                                                <g stroke-width="1pt">
                                                    <path fill="#bd3d44"
                                                        d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                        transform="scale(3.9385)"></path>
                                                    <path fill="#fff"
                                                        d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                        transform="scale(3.9385)"></path>
                                                </g>
                                                <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)">
                                                </path>
                                                <path fill="#fff"
                                                    d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                                    transform="scale(3.9385)"></path>
                                            </g>
                                        </svg>
                                        English (US)
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">
                                    <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                        <svg aria-hidden="true"
                                            class="_6aYwdjzDCvXK0bVJQOb OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_"
                                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de"
                                            viewBox="0 0 512 512">
                                            <path fill="#ffce00" d="M0 341.3h512V512H0z"></path>
                                            <path d="M0 0h512v170.7H0z"></path>
                                            <path fill="#d00" d="M0 170.7h512v170.6H0z"></path>
                                        </svg>
                                        Deutsch
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">
                                    <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                        <svg aria-hidden="true"
                                            class="_6aYwdjzDCvXK0bVJQOb OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_"
                                            xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it"
                                            viewBox="0 0 512 512">
                                            <g fill-rule="evenodd" stroke-width="1pt">
                                                <path fill="#fff" d="M0 0h512v512H0z"></path>
                                                <path fill="#009246" d="M0 0h170.7v512H0z"></path>
                                                <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"></path>
                                            </g>
                                        </svg>
                                        Italiano
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="_k0lTW0vvzboctTxDi2R t6gkcSf0Bt4MLItXvDJ_ Q_jg_EPdNf9eDMn1mLI2 W5n_NSFnC6y2nqoHw_5x _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j _7KA5gD55t2lxf9Jkj20 ZnBoTVi7VOJdCLSSU62n RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW"
                                    role="menuitem">
                                    <div class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                                        <svg aria-hidden="true"
                                            class="_6aYwdjzDCvXK0bVJQOb OEd3yuKfmszRdDeW_2zu _AA3rO_G7gzZSX90mzZi RpVwy4sO7Asb86CncKJ_"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                                            viewBox="0 0 512 512">
                                            <defs>
                                                <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z">
                                                </path>
                                            </defs>
                                            <path fill="#de2910" d="M0 0h512v512H0z"></path>
                                            <use width="30" height="20"
                                                transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"></use>
                                            <use width="30" height="20"
                                                transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a">
                                            </use>
                                            <use width="30" height="20"
                                                transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"></use>
                                            <use width="30" height="20"
                                                transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a">
                                            </use>
                                            <use width="30" height="20"
                                                transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a">
                                            </use>
                                        </svg>
                                        中文 (繁體)
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button type="button" data-tooltip-target="tooltip-settings"
                        class="_k0lTW0vvzboctTxDi2R SA5DoMHfwOFtY4h_qzuM Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2">
                            </path>
                        </svg>
                        <span class="_DVAfiyo21kM68EUVzEQ">Settings</span>
                    </button>
                    <div id="tooltip-settings" role="tooltip"
                        class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1069px, -56px);">
                        Settings
                        <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                            style="position: absolute; left: 0px; transform: translate(36px, 0px);"></div>
                    </div>
                    <button type="button" data-tooltip-target="tooltip-options"
                        class="_k0lTW0vvzboctTxDi2R SA5DoMHfwOFtY4h_qzuM Nm7xMnguzOx6J5Ao7yCU mveJTCIb2WII7J4sY22F FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 lBgPGkku8NiP5ReH09_2 ZnBoTVi7VOJdCLSSU62n XIIs8ZOri3wm8Wnj9N_y RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW">
                        <svg class="_o2IXcpM0qnG3JPReKus E9GV5sZJIbfO_GEQ_moc" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path
                                    d="M19 11V9a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L12 2.757V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L2.929 4.343a1 1 0 0 0 0 1.414l.536.536L2.757 8H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535L8 17.243V18a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H18a1 1 0 0 0 1-1Z">
                                </path>
                                <path d="M10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                            </g>
                        </svg>
                        <span class="_DVAfiyo21kM68EUVzEQ">Options</span>
                    </button>
                    <div id="tooltip-options" role="tooltip"
                        class="H78G_4yayxs5C3xdFbnK ZBSHeVK3dmgzHTRX3hLO pq2JRWtiWcwYnw3xueNl QhmQ_v3mmDFIP9VaVOfb VPGGthdu3cy_ZP7AL7dt mveJTCIb2WII7J4sY22F foDHZclRWUf2bqma2a8U _Cj_M6jt2eLjDgkBBNgI b9aD6g2qw84oyZNsMO8j c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 Db4Wzva4DMepJJiQLY7M fzhbbDQ686T8arwvi_bJ mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf jqg6J89cvxmDiFpnV56r"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(1108px, -56px);">
                        Options
                        <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""
                            style="position: absolute; left: 0px; transform: translate(40px, 0px);"></div>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <script src="https://flowbite.com/application-ui/demo/app.bundle.js"></script>




    <svg id="SvgjsSvg1065" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1066"></defs>
        <polyline id="SvgjsPolyline1067" points="0,0"></polyline>
        <path id="SvgjsPath1068"
            d="M-1 533.3333333333334L-1 533.3333333333334C-1 533.3333333333334 220 533.3333333333334 220 533.3333333333334C220 533.3333333333334 440 533.3333333333334 440 533.3333333333334C440 533.3333333333334 660 533.3333333333334 660 533.3333333333334C660 533.3333333333334 880 533.3333333333334 880 533.3333333333334C880 533.3333333333334 1100 533.3333333333334 1100 533.3333333333334C1100 533.3333333333334 1100 533.3333333333334 1100 533.3333333333334 ">
        </path>
    </svg>
    <div class="datepicker hidden datepicker-dropdown dropdown absolute top-0 left-0 z-50 pt-2 datepicker-orient-bottom datepicker-orient-left"
        style="top: 0px; left: 0px;">
        <div class="datepicker-picker inline-block rounded-lg bg-white dark:bg-gray-700 shadow-lg p-4">
            <div class="datepicker-header">
                <div class="datepicker-title bg-white dark:bg-gray-700 dark:text-white px-2 py-3 text-center font-semibold"
                    style="display: none;"></div>
                <div class="datepicker-controls flex justify-between mb-2"><button type="button"
                        class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 prev-btn"><svg
                            class="w-4 h-4 rtl:rotate-180 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"></path>
                        </svg></button><button type="button"
                        class="text-sm rounded-lg text-gray-900 dark:text-white bg-white dark:bg-gray-700 font-semibold py-2.5 px-5 hover:bg-gray-100 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-200 view-switch">February
                        2025</button><button type="button"
                        class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 next-btn"><svg
                            class="w-4 h-4 rtl:rotate-180 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                        </svg></button></div>
            </div>
            <div class="datepicker-main p-1">
                <div class="datepicker-view flex">
                    <div class="days">
                        <div class="days-of-week grid grid-cols-7 mb-1"><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Su</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Mo</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Tu</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">We</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Th</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Fr</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Sa</span>
                        </div>
                        <div class="datepicker-grid w-64 grid grid-cols-7"><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1737838800000">26</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1737925200000">27</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738011600000">28</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738098000000">29</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738184400000">30</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738270800000">31</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738357200000">1</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738443600000">2</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738530000000">3</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738616400000">4</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738702800000">5</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738789200000">6</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738875600000">7</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738962000000">8</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739048400000">9</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day focused"
                                data-date="1739134800000">10</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739221200000">11</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739307600000">12</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739394000000">13</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739480400000">14</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739566800000">15</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739653200000">16</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739739600000">17</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739826000000">18</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739912400000">19</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739998800000">20</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740085200000">21</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740171600000">22</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740258000000">23</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740344400000">24</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740430800000">25</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740517200000">26</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740603600000">27</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740690000000">28</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740776400000">1</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740862800000">2</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740949200000">3</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741035600000">4</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741122000000">5</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741208400000">6</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741294800000">7</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741381200000">8</span></div>
                    </div>
                </div>
            </div>
            <div class="datepicker-footer">
                <div class="datepicker-controls flex space-x-2 rtl:space-x-reverse mt-2"><button type="button"
                        class="button today-btn text-white bg-blue-700 !bg-primary-700 dark:bg-blue-600 dark:!bg-primary-600 hover:bg-blue-800 hover:!bg-primary-800 dark:hover:bg-blue-700 dark:hover:!bg-primary-700 focus:ring-4 focus:ring-blue-300 focus:!ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2"
                        style="display: none;">Today</button><button type="button"
                        class="button clear-btn text-gray-900 dark:text-white bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 focus:ring-4 focus:ring-blue-300 focus:!ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2"
                        style="display: none;">Clear</button></div>
            </div>
        </div>
    </div>
    <div class="datepicker hidden datepicker-dropdown dropdown absolute top-0 left-0 z-50 pt-2 datepicker-orient-bottom datepicker-orient-left"
        style="top: 0px; left: 0px;">
        <div class="datepicker-picker inline-block rounded-lg bg-white dark:bg-gray-700 shadow-lg p-4">
            <div class="datepicker-header">
                <div class="datepicker-title bg-white dark:bg-gray-700 dark:text-white px-2 py-3 text-center font-semibold"
                    style="display: none;"></div>
                <div class="datepicker-controls flex justify-between mb-2"><button type="button"
                        class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 prev-btn"><svg
                            class="w-4 h-4 rtl:rotate-180 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"></path>
                        </svg></button><button type="button"
                        class="text-sm rounded-lg text-gray-900 dark:text-white bg-white dark:bg-gray-700 font-semibold py-2.5 px-5 hover:bg-gray-100 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-200 view-switch">February
                        2025</button><button type="button"
                        class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 next-btn"><svg
                            class="w-4 h-4 rtl:rotate-180 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                        </svg></button></div>
            </div>
            <div class="datepicker-main p-1">
                <div class="datepicker-view flex">
                    <div class="days">
                        <div class="days-of-week grid grid-cols-7 mb-1"><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Su</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Mo</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Tu</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">We</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Th</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Fr</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Sa</span>
                        </div>
                        <div class="datepicker-grid w-64 grid grid-cols-7"><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1737838800000">26</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1737925200000">27</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738011600000">28</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738098000000">29</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738184400000">30</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738270800000">31</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738357200000">1</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738443600000">2</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738530000000">3</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738616400000">4</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738702800000">5</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738789200000">6</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738875600000">7</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738962000000">8</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739048400000">9</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day focused"
                                data-date="1739134800000">10</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739221200000">11</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739307600000">12</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739394000000">13</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739480400000">14</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739566800000">15</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739653200000">16</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739739600000">17</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739826000000">18</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739912400000">19</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739998800000">20</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740085200000">21</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740171600000">22</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740258000000">23</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740344400000">24</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740430800000">25</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740517200000">26</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740603600000">27</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740690000000">28</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740776400000">1</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740862800000">2</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740949200000">3</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741035600000">4</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741122000000">5</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741208400000">6</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741294800000">7</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741381200000">8</span></div>
                    </div>
                </div>
            </div>
            <div class="datepicker-footer">
                <div class="datepicker-controls flex space-x-2 rtl:space-x-reverse mt-2"><button type="button"
                        class="button today-btn text-white bg-blue-700 !bg-primary-700 dark:bg-blue-600 dark:!bg-primary-600 hover:bg-blue-800 hover:!bg-primary-800 dark:hover:bg-blue-700 dark:hover:!bg-primary-700 focus:ring-4 focus:ring-blue-300 focus:!ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2"
                        style="display: none;">Today</button><button type="button"
                        class="button clear-btn text-gray-900 dark:text-white bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 focus:ring-4 focus:ring-blue-300 focus:!ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2"
                        style="display: none;">Clear</button></div>
            </div>
        </div>
    </div>
    <div class="datepicker hidden datepicker-dropdown dropdown absolute top-0 left-0 z-50 pt-2 datepicker-orient-bottom datepicker-orient-left"
        style="top: 0px; left: 0px;">
        <div class="datepicker-picker inline-block rounded-lg bg-white dark:bg-gray-700 shadow-lg p-4">
            <div class="datepicker-header">
                <div class="datepicker-title bg-white dark:bg-gray-700 dark:text-white px-2 py-3 text-center font-semibold"
                    style="display: none;"></div>
                <div class="datepicker-controls flex justify-between mb-2"><button type="button"
                        class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 prev-btn"><svg
                            class="w-4 h-4 rtl:rotate-180 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"></path>
                        </svg></button><button type="button"
                        class="text-sm rounded-lg text-gray-900 dark:text-white bg-white dark:bg-gray-700 font-semibold py-2.5 px-5 hover:bg-gray-100 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-200 view-switch">February
                        2025</button><button type="button"
                        class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 next-btn"><svg
                            class="w-4 h-4 rtl:rotate-180 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                        </svg></button></div>
            </div>
            <div class="datepicker-main p-1">
                <div class="datepicker-view flex">
                    <div class="days">
                        <div class="days-of-week grid grid-cols-7 mb-1"><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Su</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Mo</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Tu</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">We</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Th</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Fr</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Sa</span>
                        </div>
                        <div class="datepicker-grid w-64 grid grid-cols-7"><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1737838800000">26</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1737925200000">27</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738011600000">28</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738098000000">29</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738184400000">30</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738270800000">31</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738357200000">1</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738443600000">2</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738530000000">3</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738616400000">4</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738702800000">5</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738789200000">6</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738875600000">7</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738962000000">8</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739048400000">9</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day focused"
                                data-date="1739134800000">10</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739221200000">11</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739307600000">12</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739394000000">13</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739480400000">14</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739566800000">15</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739653200000">16</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739739600000">17</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739826000000">18</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739912400000">19</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739998800000">20</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740085200000">21</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740171600000">22</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740258000000">23</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740344400000">24</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740430800000">25</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740517200000">26</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740603600000">27</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740690000000">28</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740776400000">1</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740862800000">2</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740949200000">3</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741035600000">4</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741122000000">5</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741208400000">6</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741294800000">7</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741381200000">8</span></div>
                    </div>
                </div>
            </div>
            <div class="datepicker-footer">
                <div class="datepicker-controls flex space-x-2 rtl:space-x-reverse mt-2"><button type="button"
                        class="button today-btn text-white bg-blue-700 !bg-primary-700 dark:bg-blue-600 dark:!bg-primary-600 hover:bg-blue-800 hover:!bg-primary-800 dark:hover:bg-blue-700 dark:hover:!bg-primary-700 focus:ring-4 focus:ring-blue-300 focus:!ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2"
                        style="display: none;">Today</button><button type="button"
                        class="button clear-btn text-gray-900 dark:text-white bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 focus:ring-4 focus:ring-blue-300 focus:!ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2"
                        style="display: none;">Clear</button></div>
            </div>
        </div>
    </div>
    <div class="datepicker hidden datepicker-dropdown dropdown absolute top-0 left-0 z-50 pt-2 datepicker-orient-bottom datepicker-orient-left"
        style="top: 0px; left: 0px;">
        <div class="datepicker-picker inline-block rounded-lg bg-white dark:bg-gray-700 shadow-lg p-4">
            <div class="datepicker-header">
                <div class="datepicker-title bg-white dark:bg-gray-700 dark:text-white px-2 py-3 text-center font-semibold"
                    style="display: none;"></div>
                <div class="datepicker-controls flex justify-between mb-2"><button type="button"
                        class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 prev-btn"><svg
                            class="w-4 h-4 rtl:rotate-180 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"></path>
                        </svg></button><button type="button"
                        class="text-sm rounded-lg text-gray-900 dark:text-white bg-white dark:bg-gray-700 font-semibold py-2.5 px-5 hover:bg-gray-100 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-200 view-switch">February
                        2025</button><button type="button"
                        class="bg-white dark:bg-gray-700 rounded-lg text-gray-500 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-white text-lg p-2.5 focus:outline-none focus:ring-2 focus:ring-gray-200 next-btn"><svg
                            class="w-4 h-4 rtl:rotate-180 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                        </svg></button></div>
            </div>
            <div class="datepicker-main p-1">
                <div class="datepicker-view flex">
                    <div class="days">
                        <div class="days-of-week grid grid-cols-7 mb-1"><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Su</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Mo</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Tu</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">We</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Th</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Fr</span><span
                                class="dow text-center h-6 leading-6 text-sm font-medium text-gray-500 dark:text-gray-400">Sa</span>
                        </div>
                        <div class="datepicker-grid w-64 grid grid-cols-7"><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1737838800000">26</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1737925200000">27</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738011600000">28</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738098000000">29</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738184400000">30</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day prev text-gray-500"
                                data-date="1738270800000">31</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738357200000">1</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738443600000">2</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738530000000">3</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738616400000">4</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738702800000">5</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738789200000">6</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738875600000">7</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1738962000000">8</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739048400000">9</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day focused"
                                data-date="1739134800000">10</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739221200000">11</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739307600000">12</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739394000000">13</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739480400000">14</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739566800000">15</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739653200000">16</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739739600000">17</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739826000000">18</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739912400000">19</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1739998800000">20</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740085200000">21</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740171600000">22</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740258000000">23</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740344400000">24</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740430800000">25</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740517200000">26</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740603600000">27</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day"
                                data-date="1740690000000">28</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740776400000">1</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740862800000">2</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1740949200000">3</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741035600000">4</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741122000000">5</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741208400000">6</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741294800000">7</span><span
                                class="datepicker-cell hover:bg-gray-100 dark:hover:bg-gray-600 block flex-1 leading-9 border-0 rounded-lg cursor-pointer text-center text-gray-900 dark:text-white font-semibold text-sm day next text-gray-500"
                                data-date="1741381200000">8</span></div>
                    </div>
                </div>
            </div>
            <div class="datepicker-footer">
                <div class="datepicker-controls flex space-x-2 rtl:space-x-reverse mt-2"><button type="button"
                        class="button today-btn text-white bg-blue-700 !bg-primary-700 dark:bg-blue-600 dark:!bg-primary-600 hover:bg-blue-800 hover:!bg-primary-800 dark:hover:bg-blue-700 dark:hover:!bg-primary-700 focus:ring-4 focus:ring-blue-300 focus:!ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2"
                        style="display: none;">Today</button><button type="button"
                        class="button clear-btn text-gray-900 dark:text-white bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-600 focus:ring-4 focus:ring-blue-300 focus:!ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center w-1/2"
                        style="display: none;">Clear</button></div>
            </div>
        </div>
    </div>
</body>

</html>
