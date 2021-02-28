@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if($posts->isEmpty())
        <div class="no-data">
            <h2>You haven't created any posts yet :(</h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <g id="freepik--background-complete--inject-53">
                    <rect y="382.4" width="500" height="0.25" style="fill:#ebebeb"></rect>
                    <rect x="416.78" y="398.49" width="33.12" height="0.25" style="fill:#ebebeb"></rect>
                    <rect x="322.53" y="401.21" width="8.69" height="0.25" style="fill:#ebebeb"></rect>
                    <rect x="396.59" y="389.21" width="19.19" height="0.25" style="fill:#ebebeb"></rect>
                    <rect x="52.46" y="390.89" width="43.19" height="0.25" style="fill:#ebebeb"></rect>
                    <rect x="104.56" y="390.89" width="6.33" height="0.25" style="fill:#ebebeb"></rect>
                    <rect x="131.47" y="395.11" width="93.68" height="0.25" style="fill:#ebebeb"></rect>
                    <path d="M237,337.8H43.91a5.71,5.71,0,0,1-5.7-5.71V60.66A5.71,5.71,0,0,1,43.91,55H237a5.71,5.71,0,0,1,5.71,5.71V332.09A5.71,5.71,0,0,1,237,337.8ZM43.91,55.2a5.46,5.46,0,0,0-5.45,5.46V332.09a5.46,5.46,0,0,0,5.45,5.46H237a5.47,5.47,0,0,0,5.46-5.46V60.66A5.47,5.47,0,0,0,237,55.2Z" style="fill:#ebebeb"></path>
                    <path d="M453.31,337.8H260.21a5.72,5.72,0,0,1-5.71-5.71V60.66A5.72,5.72,0,0,1,260.21,55h193.1A5.71,5.71,0,0,1,459,60.66V332.09A5.71,5.71,0,0,1,453.31,337.8ZM260.21,55.2a5.47,5.47,0,0,0-5.46,5.46V332.09a5.47,5.47,0,0,0,5.46,5.46h193.1a5.47,5.47,0,0,0,5.46-5.46V60.66a5.47,5.47,0,0,0-5.46-5.46Z" style="fill:#ebebeb"></path>
                    <rect x="289.69" y="83.83" width="137.78" height="90.23" transform="translate(717.16 257.89) rotate(180)" style="fill:#e6e6e6"></rect>
                    <rect x="285.49" y="83.83" width="140.02" height="90.23" transform="translate(710.99 257.89) rotate(180)" style="fill:#f0f0f0"></rect>
                    <rect x="289.69" y="174.06" width="137.78" height="17.71" transform="translate(717.16 365.82) rotate(180)" style="fill:#e6e6e6"></rect>
                    <rect x="278.48" y="174.06" width="140.02" height="17.71" transform="translate(696.99 365.82) rotate(180)" style="fill:#f0f0f0"></rect>
                    <rect x="316.27" y="64.82" width="78.46" height="128.25" transform="translate(484.44 -226.55) rotate(90)" style="fill:#fafafa"></rect>
                    <polygon points="390.7 168.17 374.32 89.72 348.76 89.72 365.14 168.17 390.7 168.17" style="fill:#fff"></polygon>
                    <path d="M416.9,162.32a.42.42,0,0,0,.42-.43V93.55a.42.42,0,0,0-.42-.42.41.41,0,0,0-.42.42v68.34A.42.42,0,0,0,416.9,162.32Z" style="fill:#f0f0f0"></path>
                    <polygon points="359.65 168.17 343.27 89.72 333.3 89.72 349.69 168.17 359.65 168.17" style="fill:#fff"></polygon>
                    <rect x="252.52" y="128.57" width="78.46" height="0.75" transform="translate(420.69 -162.8) rotate(90)" style="fill:#e6e6e6"></rect>
                    <polygon points="284.1 98.59 421.88 98.59 422.42 92 284.64 92 284.1 98.59" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <polygon points="284.1 109.39 421.88 109.39 422.42 102.81 284.64 102.81 284.1 109.39" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <polygon points="284.1 120.19 421.88 120.19 422.42 113.61 284.64 113.61 284.1 120.19" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <polygon points="284.1 131 421.88 131 422.42 124.41 284.64 124.41 284.1 131" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <polygon points="284.1 141.8 421.88 141.8 422.42 135.21 284.64 135.21 284.1 141.8" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <polygon points="284.1 152.6 421.88 152.6 422.42 146.01 284.64 146.01 284.1 152.6" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <rect x="378.8" y="316.78" width="28.89" height="5.7" style="fill:#e6e6e6"></rect>
                    <rect x="324.31" y="251.33" width="5.33" height="131.07" transform="translate(653.95 633.73) rotate(180)" style="fill:#e6e6e6"></rect>
                    <rect x="305.84" y="316.78" width="72.96" height="5.7" transform="translate(684.63 639.26) rotate(180)" style="fill:#f5f5f5"></rect>
                    <rect x="378.8" y="347.95" width="28.89" height="5.7" style="fill:#e6e6e6"></rect>
                    <rect x="305.84" y="347.95" width="72.96" height="5.7" transform="translate(684.63 701.59) rotate(180)" style="fill:#f5f5f5"></rect>
                    <rect x="378.8" y="254.45" width="28.89" height="5.7" style="fill:#e6e6e6"></rect>
                    <rect x="305.84" y="254.45" width="72.96" height="5.7" transform="translate(684.63 514.59) rotate(180)" style="fill:#f5f5f5"></rect>
                    <rect x="378.8" y="285.61" width="28.89" height="5.7" style="fill:#e6e6e6"></rect>
                    <rect x="305.84" y="285.61" width="72.96" height="5.7" transform="translate(684.63 576.92) rotate(180)" style="fill:#f5f5f5"></rect>
                    <rect x="397.27" y="251.33" width="5.33" height="131.07" transform="translate(799.88 633.73) rotate(180)" style="fill:#e6e6e6"></rect>
                    <rect x="373.47" y="251.33" width="5.33" height="131.07" transform="translate(752.26 633.73) rotate(180)" style="fill:#f5f5f5"></rect>
                    <rect x="305.84" y="251.33" width="5.33" height="131.07" transform="translate(617 633.73) rotate(180)" style="fill:#f5f5f5"></rect>
                    <rect x="65.37" y="276.51" width="54.58" height="105.89" transform="translate(185.33 658.91) rotate(180)" style="fill:#e6e6e6"></rect>
                    <polygon points="79.95 382.4 65.37 382.4 65.37 367.78 95.23 367.78 79.95 382.4" style="fill:#fafafa"></polygon>
                    <rect x="214.18" y="276.51" width="54.58" height="105.89" transform="translate(482.94 658.91) rotate(180)" style="fill:#e6e6e6"></rect>
                    <rect x="65.37" y="276.51" width="161.53" height="100.86" transform="translate(292.28 653.87) rotate(180)" style="fill:#fafafa"></rect>
                    <polygon points="212.33 382.4 226.9 382.4 226.9 367.78 197.05 367.78 212.33 382.4" style="fill:#fafafa"></polygon>
                    <rect x="76.68" y="314.09" width="138.92" height="25.24" transform="translate(292.28 653.42) rotate(180)" style="fill:#f0f0f0"></rect>
                    <rect x="76.68" y="344.73" width="138.92" height="25.24" transform="translate(292.28 714.69) rotate(180)" style="fill:#f0f0f0"></rect>
                    <path d="M103.08,311.9h86.11a4.58,4.58,0,0,1,4.58,4.58v.31a0,0,0,0,1,0,0H98.51a0,0,0,0,1,0,0v-.31A4.58,4.58,0,0,1,103.08,311.9Z" transform="translate(292.28 628.69) rotate(180)" style="fill:#fafafa"></path>
                    <rect x="76.68" y="283.46" width="138.92" height="25.24" transform="translate(292.28 592.15) rotate(180)" style="fill:#f0f0f0"></rect>
                    <path d="M103.08,281.27h86.11a4.58,4.58,0,0,1,4.58,4.58v.31a0,0,0,0,1,0,0H98.51a0,0,0,0,1,0,0v-.31A4.58,4.58,0,0,1,103.08,281.27Z" transform="translate(292.28 567.42) rotate(180)" style="fill:#fafafa"></path>
                    <path d="M103.08,342.54h86.11a4.58,4.58,0,0,1,4.58,4.58v.31a0,0,0,0,1,0,0H98.51a0,0,0,0,1,0,0v-.31A4.58,4.58,0,0,1,103.08,342.54Z" transform="translate(292.28 689.97) rotate(180)" style="fill:#fafafa"></path>
                    <rect x="74.07" y="83.83" width="137.78" height="90.23" transform="translate(285.92 257.89) rotate(180)" style="fill:#e6e6e6"></rect>
                    <rect x="69.86" y="83.83" width="140.02" height="90.23" transform="translate(279.75 257.89) rotate(180)" style="fill:#f0f0f0"></rect>
                    <rect x="74.07" y="174.06" width="137.78" height="17.71" transform="translate(285.92 365.82) rotate(180)" style="fill:#e6e6e6"></rect>
                    <rect x="62.86" y="174.06" width="140.02" height="17.71" transform="translate(265.74 365.82) rotate(180)" style="fill:#f0f0f0"></rect>
                    <rect x="100.65" y="64.82" width="78.46" height="128.25" transform="translate(268.82 -10.93) rotate(90)" style="fill:#fafafa"></rect>
                    <polygon points="175.08 168.17 158.7 89.72 133.14 89.72 149.52 168.17 175.08 168.17" style="fill:#fff"></polygon>
                    <path d="M201.27,162.32a.42.42,0,0,0,.42-.43V93.55a.41.41,0,0,0-.42-.42.42.42,0,0,0-.42.42v68.34A.42.42,0,0,0,201.27,162.32Z" style="fill:#f0f0f0"></path>
                    <polygon points="144.03 168.17 127.65 89.72 117.68 89.72 134.06 168.17 144.03 168.17" style="fill:#fff"></polygon>
                    <rect x="36.9" y="128.57" width="78.46" height="0.75" transform="translate(205.07 52.82) rotate(90)" style="fill:#e6e6e6"></rect>
                    <polygon points="68.47 98.59 206.25 98.59 206.79 92 69.01 92 68.47 98.59" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <polygon points="68.47 102.31 206.25 102.31 206.79 95.72 69.01 95.72 68.47 102.31" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <polygon points="68.47 106.02 206.25 106.02 206.79 99.44 69.01 99.44 68.47 106.02" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <polygon points="68.47 109.74 206.25 109.74 206.79 103.15 69.01 103.15 68.47 109.74" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <polygon points="68.47 113.45 206.25 113.45 206.79 106.87 69.01 106.87 68.47 113.45" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <polygon points="68.47 117.17 206.25 117.17 206.79 110.58 69.01 110.58 68.47 117.17" style="fill:#ebebeb;opacity:0.6000000000000001"></polygon>
                    <rect x="96.01" y="220.18" width="4.76" height="53.09" transform="translate(196.79 493.45) rotate(180)" style="fill:#f5f5f5"></rect>
                    <rect x="96.63" y="220.14" width="1.35" height="53.09" transform="translate(194.6 493.38) rotate(180)" style="fill:#fafafa"></rect>
                    <rect x="98.54" y="220.14" width="0.53" height="53.09" transform="translate(197.6 493.38) rotate(180)" style="fill:#fafafa"></rect>
                    <path d="M80.76,272.06H116a0,0,0,0,1,0,0v0a4.44,4.44,0,0,1-4.44,4.44H85.21a4.44,4.44,0,0,1-4.44-4.44v0A0,0,0,0,1,80.76,272.06Z" transform="translate(196.79 548.57) rotate(180)" style="fill:#f0f0f0"></path>
                    <path d="M89.84,253.14h0a1.38,1.38,0,0,0,1.37-1.37V217a1.37,1.37,0,0,0-1.37-1.37h0A1.37,1.37,0,0,0,88.46,217v34.81A1.38,1.38,0,0,0,89.84,253.14Z" style="fill:#f0f0f0"></path>
                    <polygon points="77.07 232.8 119.72 232.8 114.81 203 81.98 203 77.07 232.8" style="fill:#e0e0e0"></polygon>
                </g>
                <g id="freepik--Shadow--inject-53">
                    <ellipse id="freepik--path--inject-53" cx="250" cy="416.24" rx="193.89" ry="11.32" style="fill:#f5f5f5"></ellipse>
                </g>
                <g id="freepik--window-no-data--inject-53">
                    <rect x="103.78" y="202.37" width="1" height="18.49" transform="translate(-14.93 8.04) rotate(-4.12)" style="fill:#263238"></rect>
                    <rect x="105.38" y="230.35" width="1" height="6.96" transform="translate(-16.53 8.21) rotate(-4.12)" style="fill:#263238"></rect>
                    <path d="M337.71,315.16H123.55a9.65,9.65,0,0,1-9.44-8.81L103.59,160.22a8.1,8.1,0,0,1,8.17-8.8H325.92a9.65,9.65,0,0,1,9.44,8.8l10.52,146.13A8.11,8.11,0,0,1,337.71,315.16Z" style="fill:#263238"></path>
                    <path d="M338.53,315.16H124.37a9.65,9.65,0,0,1-9.44-8.81L104.41,160.22a8.1,8.1,0,0,1,8.17-8.8H326.74a9.65,9.65,0,0,1,9.44,8.8L346.7,306.35A8.1,8.1,0,0,1,338.53,315.16Z" style="fill:#263238"></path>
                    <path d="M338.53,315.16H124.37a9.65,9.65,0,0,1-9.44-8.81L104.41,160.22a8.1,8.1,0,0,1,8.17-8.8H326.74a9.65,9.65,0,0,1,9.44,8.8L346.7,306.35A8.1,8.1,0,0,1,338.53,315.16Z" style="fill:#fff;opacity:0.5"></path>
                    <path d="M327.06,155.82H112.9l-.72,0c-5.47.45-4.35,8.78,1.17,8.78H327.87c5.53,0,5.45-8.33-.09-8.78Z" style="fill:#263238"></path>
                    <path d="M118.48,160.22a1.85,1.85,0,0,1-1.88,2,2.2,2.2,0,0,1-2.16-2,1.85,1.85,0,0,1,1.87-2A2.2,2.2,0,0,1,118.48,160.22Z" style="fill:#fafafa"></path>
                    <path d="M125.35,160.22a1.85,1.85,0,0,1-1.88,2,2.2,2.2,0,0,1-2.16-2,1.85,1.85,0,0,1,1.87-2A2.2,2.2,0,0,1,125.35,160.22Z" style="fill:#fafafa"></path>
                    <path d="M132.21,160.22a1.85,1.85,0,0,1-1.87,2,2.19,2.19,0,0,1-2.16-2,1.84,1.84,0,0,1,1.87-2A2.2,2.2,0,0,1,132.21,160.22Z" style="fill:#fafafa"></path>
                    <path d="M332.85,300.58H128a3.49,3.49,0,0,1-3.42-3.2l-8.65-120.17a2.92,2.92,0,0,1,3-3.19h204.9a3.48,3.48,0,0,1,3.42,3.19l8.66,120.17A2.94,2.94,0,0,1,332.85,300.58Z" style="fill:#fff"></path>
                    <polygon points="246.53 254.8 243.19 208.48 233.09 202.4 205.28 202.4 209.06 254.8 246.53 254.8" style="fill:#fff"></polygon>
                    <path d="M246.53,255.28H209.06a.48.48,0,0,1-.49-.45l-3.77-52.4a.47.47,0,0,1,.13-.36.48.48,0,0,1,.35-.16h27.81a.55.55,0,0,1,.25.07l10.1,6.08a.48.48,0,0,1,.24.38L247,254.76a.46.46,0,0,1-.13.37A.47.47,0,0,1,246.53,255.28Zm-37-1H246l-3.28-45.55L233,202.88H205.8Z" style="fill:#263238"></path>
                    <polygon points="243.19 208.48 233.09 202.4 236.8 210.46 243.19 208.48" style="fill:#ebebeb"></polygon>
                    <path d="M236.8,210.94a.49.49,0,0,1-.44-.28l-3.71-8.06a.5.5,0,0,1,.11-.57.5.5,0,0,1,.58-.05l10.1,6.08a.5.5,0,0,1,.24.48.49.49,0,0,1-.34.4l-6.4,2Zm-2.61-7.32,2.87,6.25,5-1.53Z" style="fill:#263238"></path>
                    <path d="M221,226a2,2,0,0,1-2,2.11,2.31,2.31,0,0,1-2.26-2.11,1.94,1.94,0,0,1,2-2.12A2.32,2.32,0,0,1,221,226Z" style="fill:#263238"></path>
                    <path d="M234.7,226a1.94,1.94,0,0,1-2,2.11,2.32,2.32,0,0,1-2.27-2.11,2,2,0,0,1,2-2.12A2.31,2.31,0,0,1,234.7,226Z" style="fill:#263238"></path>
                    <path d="M238.58,239.74a.49.49,0,0,1-.48-.45c-.25-3.41-5.59-6.18-11.9-6.18-4.19,0-7.95,1.25-9.81,3.25a3.74,3.74,0,0,0-1.14,2.86.49.49,0,0,1-1,.07,4.76,4.76,0,0,1,1.4-3.59c2-2.19,6.07-3.56,10.52-3.56,6.93,0,12.58,3.11,12.86,7.08a.48.48,0,0,1-.45.51Z" style="fill:#263238"></path>
                    <path d="M213.17,221.72a.51.51,0,0,1-.33-.13.49.49,0,0,1,0-.69l2.13-2.29a.49.49,0,0,1,.68,0,.48.48,0,0,1,0,.68l-2.13,2.29A.48.48,0,0,1,213.17,221.72Z" style="fill:#263238"></path>
                    <path d="M237.58,221.72a.55.55,0,0,1-.33-.13l-2.45-2.29a.48.48,0,0,1,0-.69.49.49,0,0,1,.68,0l2.45,2.29a.48.48,0,0,1,0,.68A.52.52,0,0,1,237.58,221.72Z" style="fill:#263238"></path>
                    <path d="M202.26,265.15h2.26l3.26,4.34-.31-4.34h2.28l.56,7.84H208l-3.24-4.31.31,4.31h-2.28Z" style="fill:#263238"></path>
                    <path d="M211.33,269.07a3.8,3.8,0,0,1,.86-3,3.76,3.76,0,0,1,2.9-1.07,4.38,4.38,0,0,1,3.09,1.05,4.32,4.32,0,0,1,1.27,2.94,4.77,4.77,0,0,1-.3,2.25,3,3,0,0,1-1.24,1.37,4.16,4.16,0,0,1-2.14.49,5.25,5.25,0,0,1-2.23-.42,3.62,3.62,0,0,1-1.5-1.34A4.66,4.66,0,0,1,211.33,269.07Zm2.43,0a2.73,2.73,0,0,0,.56,1.7,1.59,1.59,0,0,0,1.24.52,1.38,1.38,0,0,0,1.17-.51A2.75,2.75,0,0,0,217,269a2.57,2.57,0,0,0-.56-1.62,1.64,1.64,0,0,0-1.25-.51,1.38,1.38,0,0,0-1.14.52A2.53,2.53,0,0,0,213.76,269.09Z" style="fill:#263238"></path>
                    <path d="M224.15,265.15h3.6a4.51,4.51,0,0,1,1.74.29,3.06,3.06,0,0,1,1.14.83,3.76,3.76,0,0,1,.71,1.25,6.3,6.3,0,0,1,.3,1.52,5.08,5.08,0,0,1-.15,1.95,2.8,2.8,0,0,1-.71,1.16,2.3,2.3,0,0,1-1,.62,5.6,5.6,0,0,1-1.43.22h-3.59Zm2.55,1.78.31,4.28h.59a2.45,2.45,0,0,0,1.07-.17,1,1,0,0,0,.46-.59,3.54,3.54,0,0,0,.08-1.36,2.72,2.72,0,0,0-.53-1.7,1.81,1.81,0,0,0-1.38-.46Z" style="fill:#263238"></path>
                    <path d="M237.45,271.69H234.7l-.29,1.3h-2.47l2.38-7.84H237l3.51,7.84h-2.54Zm-.63-1.69-1.06-2.82L235.1,270Z" style="fill:#263238"></path>
                    <path d="M239.37,265.15h7.36l.14,1.94H244.4l.42,5.9H242.4l-.42-5.9h-2.47Z" style="fill:#263238"></path>
                    <path d="M252.37,271.69h-2.75l-.29,1.3h-2.47l2.38-7.84h2.64l3.5,7.84h-2.53Zm-.63-1.69-1.07-2.82L250,270Z" style="fill:#263238"></path>
                </g>
                <g id="freepik--Character--inject-53">
                    <path d="M353.69,173.08c.89-.45,2-1,2.94-1.57s2-1.12,3-1.72c1.95-1.21,3.93-2.4,5.8-3.72a76.94,76.94,0,0,0,10.52-8.66c.41-.38.77-.8,1.16-1.21l.57-.61.28-.3.14-.16s0,0,0,0l0,0c-.14.27,0,.19,0-.07a5.28,5.28,0,0,0,.15-1.09,30.6,30.6,0,0,0-.73-6.32c-.89-4.48-2.24-9.1-3.57-13.62l3.88-1.7a81.31,81.31,0,0,1,6.11,13.6,31.67,31.67,0,0,1,1.72,7.89,12,12,0,0,1-.08,2.51,7.71,7.71,0,0,1-1.22,3.29l-.17.23-.13.16-.15.19-.31.38-.62.75c-.41.49-.81,1-1.25,1.47A71.85,71.85,0,0,1,370.35,173c-2,1.48-4.12,2.9-6.29,4.19-1.07.65-2.16,1.27-3.27,1.88s-2.19,1.17-3.47,1.77Z" style="fill:#ffb573"></path>
                    <path d="M344.79,408.18a10.27,10.27,0,0,0,2.22-.3.22.22,0,0,0,.15-.16.21.21,0,0,0-.09-.2c-.29-.19-2.83-1.83-3.81-1.39a.68.68,0,0,0-.39.56,1.13,1.13,0,0,0,.33,1.05A2.35,2.35,0,0,0,344.79,408.18Zm1.65-.58c-1.45.29-2.55.24-3-.15a.77.77,0,0,1-.2-.71.3.3,0,0,1,.17-.25C343.94,406.26,345.41,407,346.44,407.6Z" style="fill:#263238"></path>
                    <path d="M347,407.88l.1,0a.21.21,0,0,0,.1-.17c0-.11,0-2.52-.92-3.32a1,1,0,0,0-.84-.27.69.69,0,0,0-.67.55c-.19,1,1.33,2.75,2.13,3.21A.18.18,0,0,0,347,407.88Zm-1.43-3.39a.66.66,0,0,1,.44.17,4.53,4.53,0,0,1,.78,2.64c-.8-.64-1.75-2-1.63-2.57,0-.09.07-.21.32-.24Z" style="fill:#263238"></path>
                    <path d="M346.22,148.07c-1,5-3,15,.45,18.35,0,0-1.36,5-10.59,5-10.16,0-4.85-5-4.85-5,5.54-1.32,5.39-5.43,4.43-9.3Z" style="fill:#ffb573"></path>
                    <path d="M329.28,168.42c-1.59.22-.23-3.91.41-4.34,1.5-1,20.86-2.39,20.73,0-.08,1-.56,3-1.4,3.66S343.2,166.34,329.28,168.42Z" style="fill:#263238"></path>
                    <path d="M332.44,167c-1.27.43-1.15-3.73-.72-4.23,1-1.16,16.67-5.18,17.13-2.91.18,1,.27,3-.27,3.71S343.44,163.11,332.44,167Z" style="fill:#263238"></path>
                    <path d="M326.61,139.11a.4.4,0,0,1-.33-.15,3.18,3.18,0,0,0-2.59-1.23.39.39,0,0,1-.44-.35.4.4,0,0,1,.35-.43,3.91,3.91,0,0,1,3.29,1.51.4.4,0,0,1-.05.56A.5.5,0,0,1,326.61,139.11Z" style="fill:#263238"></path>
                    <path d="M324.67,144a17.91,17.91,0,0,1-2,4.53,2.9,2.9,0,0,0,2.44.21Z" style="fill:#ff5652"></path>
                    <path d="M325.16,142.79c.07.67-.24,1.25-.68,1.29s-.85-.46-.91-1.14.24-1.25.67-1.29S325.09,142.11,325.16,142.79Z" style="fill:#263238"></path>
                    <path d="M324.44,141.67l-1.66-.31S323.73,142.54,324.44,141.67Z" style="fill:#263238"></path>
                    <polygon points="356.7 407.69 348.32 407.69 348.98 388.29 357.36 388.29 356.7 407.69" style="fill:#ffb573"></polygon>
                    <path d="M347.66,406.72h9.41a.66.66,0,0,1,.67.57l1.07,7.44a1.34,1.34,0,0,1-1.34,1.49c-3.28-.05-4.86-.25-9-.25-2.55,0-6.27.27-9.78.27s-3.71-3.48-2.24-3.79c6.56-1.42,7.6-3.36,9.81-5.22A2.21,2.21,0,0,1,347.66,406.72Z" style="fill:#263238"></path>
                    <g style="opacity:0.2">
                        <polygon points="357.36 388.29 348.98 388.29 348.64 398.29 357.02 398.29 357.36 388.29"></polygon>
                    </g>
                    <path d="M323.37,178a162.48,162.48,0,0,1-15.05-6.75,91.24,91.24,0,0,1-14.4-8.77,34.31,34.31,0,0,1-3.42-3.07c-.28-.3-.56-.58-.83-.93a11.32,11.32,0,0,1-.88-1.13,7.9,7.9,0,0,1-1.34-3.61,8.22,8.22,0,0,1,.49-3.62,10.64,10.64,0,0,1,1.41-2.6,18.13,18.13,0,0,1,3.39-3.52,42,42,0,0,1,7.3-4.67c1.24-.66,2.5-1.25,3.78-1.8s2.54-1.07,3.91-1.54l1.77,3.85c-4.36,2.75-8.88,5.78-12.2,9.16a13.86,13.86,0,0,0-1.95,2.49c-.48.79-.47,1.38-.39,1.33s0,0,.14.1l.4.43c.15.18.36.36.55.55a25.62,25.62,0,0,0,2.69,2.16,62.92,62.92,0,0,0,6.44,4c2.25,1.26,4.57,2.45,6.93,3.59,4.72,2.26,9.6,4.43,14.39,6.41Z" style="fill:#ffb573"></path>
                    <path d="M312,137.15l1.38-3L307.06,132s-2,5.91.37,8.63h0A6.05,6.05,0,0,0,312,137.15Z" style="fill:#ffb573"></path>
                    <polygon points="313.35 127.66 308.32 126.2 307.06 131.96 313.35 134.15 313.35 127.66" style="fill:#ffb573"></polygon>
                    <path d="M378.35,134.44l.73-7L372.6,129s-.1,6.58,3.33,7.62Z" style="fill:#ffb573"></path>
                    <polygon points="375.96 122.51 371.73 124.48 372.6 128.95 379.08 127.42 375.96 122.51" style="fill:#ffb573"></polygon>
                    <path d="M347.54,138.25c.31,8.31.61,11.82-3.14,16.47-5.65,7-15.92,5.55-18.7-2.5-2.5-7.24-2.58-19.61,5.18-23.69A11.34,11.34,0,0,1,347.54,138.25Z" style="fill:#ffb573"></path>
                    <path d="M343.92,154.71c8.16-3.53,13.52-11,11.26-22.58-2.17-11.11-9.67-12.21-12.77-9.91s-10.83-1.13-15.47,2.77c-8,6.77-.44,14,3.52,18.37C332.82,148.22,335.92,158.16,343.92,154.71Z" style="fill:#263238"></path>
                    <path d="M340.53,130.14a8.29,8.29,0,1,0,1.83-11.92A8.53,8.53,0,0,0,340.53,130.14Z" style="fill:#263238"></path>
                    <path d="M342.65,123c-1.17-6.7,5.16-11.86,13.64-9.37s4,10,2.25,16,2.83,11.72,4.73,7.15-1.3-6-1.3-6,9,2.33.64,12.48-15.93-1.06-13.88-7.67C350.39,130.28,343.76,129.33,342.65,123Z" style="fill:#263238"></path>
                    <path d="M334.18,125.53c-3.87-2-10.42-3.65-14.15,2.63-1.76,3-1.08,7-1.08,7l11.39.75Z" style="fill:#263238"></path>
                    <path d="M317.61,133.18h0a.26.26,0,0,1-.24-.27c0-.17.29-4.19,2.72-6.71,5.87-6.1,12.75-1,14.71.65a.25.25,0,0,1-.32.38c-1.89-1.62-8.47-6.47-14-.69-2.3,2.39-2.58,6.36-2.58,6.4A.25.25,0,0,1,317.61,133.18Z" style="fill:#263238"></path>
                    <path d="M331.85,143a6.89,6.89,0,0,1-1.65,4.28c-1.38,1.62-3,.82-3.33-1-.33-1.61,0-4.4,1.74-5.37S331.87,141.18,331.85,143Z" style="fill:#ffb573"></path>
                    <path d="M330.05,219.12s.54,58.15,5.58,90.55c4.08,26.17,11.61,86.69,11.61,86.69h11.43s1.11-58.43-1-84.31c-5.23-65.5,8.28-77.75-2.62-92.93Z" style="fill:#263238"></path>
                    <path d="M330.05,219.12s.54,58.15,5.58,90.55c4.08,26.17,11.61,86.69,11.61,86.69h11.43s1.11-58.43-1-84.31c-5.23-65.5,8.28-77.75-2.62-92.93Z" style="fill:#fff;opacity:0.1"></path>
                    <path d="M336.06,245.5c4,17.55.81,45.19-1.38,57.36-2.32-18.48-3.49-42.43-4.07-60C332.68,239.52,334.64,239.3,336.06,245.5Z" style="opacity:0.30000000000000004"></path>
                    <polygon points="345.68 396.58 360.23 396.58 360.99 391.48 345.6 390.96 345.68 396.58" style="fill:#263238"></polygon>
                    <path d="M349.83,170c1.37-2.72,8.73-4.43,12.75-4.42l3,13.36s-8,11.89-11.34,10.63C350.31,188.12,346.9,175.87,349.83,170Z" style="fill:#263238"></path>
                    <path d="M349.83,170c1.37-2.72,8.73-4.43,12.75-4.42l3,13.36s-8,11.89-11.34,10.63C350.31,188.12,346.9,175.87,349.83,170Z" style="opacity:0.4"></path>
                    <path d="M341.35,393.31a.19.19,0,0,0,0-.19.2.2,0,0,0-.21-.11c-.42.07-4.12.65-4.62,1.71a.65.65,0,0,0,0,.63,1.1,1.1,0,0,0,.86.57c1.21.12,3-1.56,3.9-2.58Zm-4.44,1.54c.34-.56,2.26-1.08,3.72-1.35-1.32,1.34-2.48,2.09-3.16,2a.71.71,0,0,1-.56-.38.25.25,0,0,1,0-.25S336.9,394.86,336.91,394.85Z" style="fill:#263238"></path>
                    <path d="M341.35,393.31a.05.05,0,0,0,0,0,.19.19,0,0,0,0-.19c-.06-.07-1.54-1.78-2.91-1.87a1.44,1.44,0,0,0-1.09.37c-.41.37-.37.69-.27.89.43.86,3.09,1.16,4.16.93A.18.18,0,0,0,341.35,393.31Zm-3.91-1.26a.79.79,0,0,1,.16-.18,1,1,0,0,1,.79-.27,4.6,4.6,0,0,1,2.39,1.47c-1.19.1-3.11-.26-3.37-.78A.24.24,0,0,1,337.44,392.05Z" style="fill:#263238"></path>
                    <polygon points="350.08 389.76 342.42 393.17 339.01 386.06 334.55 376.76 334.02 375.68 341.68 372.27 342.27 373.49 346.59 382.5 350.08 389.76" style="fill:#ffb573"></polygon>
                    <polygon points="346.59 382.5 339.01 386.06 334.55 376.76 342.27 373.49 346.59 382.5" style="opacity:0.2"></polygon>
                    <path d="M321.07,219.12S296.6,280,303.23,308.6c6,25.89,32.5,74.92,32.5,74.92L346,378.38s-16.39-59.19-18.16-72.05c-3.46-25,18.77-60.33,18.77-87.21Z" style="fill:#263238"></path>
                    <path d="M321.07,219.12S296.6,280,303.23,308.6c6,25.89,32.5,74.92,32.5,74.92L346,378.38s-16.39-59.19-18.16-72.05c-3.46-25,18.77-60.33,18.77-87.21Z" style="fill:#fff;opacity:0.1"></path>
                    <path d="M341.06,392.1l7.6-5.53a.66.66,0,0,1,.88.06l5.25,5.39a1.35,1.35,0,0,1-.21,2c-2.69,1.88-4.08,2.66-7.42,5.09-2.06,1.5-6.16,4.81-9,6.88s-5-.63-4-1.74c4.48-5,5.42-8.1,6.12-10.91A2.17,2.17,0,0,1,341.06,392.1Z" style="fill:#263238"></path>
                    <polygon points="335.07 385.69 348.3 379.64 346.61 374.25 332.44 380.71 335.07 385.69" style="fill:#263238"></polygon>
                    <path d="M327.56,169.36c-1.09-2.84-10.65-6-15.45-7L310,178.08s7.84,11.26,11.27,10.33C325.33,187.31,329.92,175.45,327.56,169.36Z" style="fill:#263238"></path>
                    <path d="M327.56,169.36c-1.09-2.84-10.65-6-15.45-7L310,178.08s7.84,11.26,11.27,10.33C325.33,187.31,329.92,175.45,327.56,169.36Z" style="opacity:0.4"></path>
                    <path d="M317.07,168.57s-4,1.4,4,50.55h34c-.57-13.84-.59-22.38,6-50.8a100.28,100.28,0,0,0-14.45-1.9,107.4,107.4,0,0,0-15.44,0C324.59,167,317.07,168.57,317.07,168.57Z" style="fill:#263238"></path>
                    <path d="M317.07,168.57s-4,1.4,4,50.55h34c-.57-13.84-.59-22.38,6-50.8a100.28,100.28,0,0,0-14.45-1.9,107.4,107.4,0,0,0-15.44,0C324.59,167,317.07,168.57,317.07,168.57Z" style="opacity:0.4"></path>
                    <path d="M355.6,217.13l1.53,3c.12.24-.16.48-.55.48H320.9c-.31,0-.56-.15-.58-.35l-.31-3c0-.21.25-.39.58-.39H355A.61.61,0,0,1,355.6,217.13Z" style="fill:#263238"></path>
                    <path d="M355.6,217.13l1.53,3c.12.24-.16.48-.55.48H320.9c-.31,0-.56-.15-.58-.35l-.31-3c0-.21.25-.39.58-.39H355A.61.61,0,0,1,355.6,217.13Z" style="fill:#fff;opacity:0.30000000000000004"></path>
                    <path d="M351,221h.92c.19,0,.33-.1.31-.21l-.43-4c0-.12-.17-.21-.35-.21h-.93c-.18,0-.32.09-.31.21l.43,4C350.63,220.88,350.79,221,351,221Z" style="fill:#263238"></path>
                    <path d="M328.61,221h.92c.18,0,.32-.1.31-.21l-.43-4c0-.12-.17-.21-.36-.21h-.92c-.19,0-.32.09-.31.21l.43,4C328.26,220.88,328.42,221,328.61,221Z" style="fill:#263238"></path>
                </g>
            </svg>
        </div>
        @else
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="timeline-content">
                <div class="timeline-profile-social">
                    <div class="timeline-profile-image">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="User">
                    </div>
                    <div class="profile-details">
                        <h5>{{ $post->user->username }}</h5>
                        <a href="/profile/{{ $post->user->id }}" target="_blank"><i class="fas fa-link"></i></a>
                    </div>
                </div>
                <div class="timeline-posts">
                    <h4 class="post-title">{{ $post->title }}</h4>
                    <div class="timeline-post">
                        <img src="/storage/{{ $post->image }}" alt="">
                        <div class="post-atributes">
                            <div class="post-stats">
                                <div class="damage">
                                    <i class="fas fa-skull-crossbones"></i> {{ $post->power }}
                                </div>
                                <div class="defence">
                                    <i class="fas fa-shield-alt"></i> {{ $post->defence }}
                                </div>
                            </div>
                            <div class="post-description">
                                {{ $post->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection
