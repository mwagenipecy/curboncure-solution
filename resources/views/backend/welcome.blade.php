@extends('dashboard')

@section('backend-body')
    <!-- Widget -->
    <div class="aJF41JQLhtfw_MCGt5Th mveJTCIb2WII7J4sY22F _Ybd3WwuTVljUT4vEaM3 _wYiJGbRZyFZeCc8y7Sf mngKhi_Rv06PF57lblDI _1jTZ8KXRZul60S6czNi LSIxp7RSuOKhsg28v_u3">
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


@endsection
