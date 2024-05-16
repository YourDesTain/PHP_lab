<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP labs</title>
</head>

<body>
    <!-- slider -->
    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="image/img1.png">
                <div class="content" style="color: aqua; letter-spacing: 3px;">
                    <h2>Лабораторная №1</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">>
                    <h2>Лабораторная №1</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">>
                    <h2>Лабораторная №1</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">>
                    <h2>Лабораторная №1</h2>
                </div>
            </div>
            <div class="item">
                <img src="image/img5.jpg">
                <div class="content" style="color: aqua; letter-spacing: 3px;">>
                    <h2>Лабораторная №1</h2>
                </div>
            </div>
        </div>

        <!-- button profile -->
        <div class="profile">
            <button id="user_profile" data-bs-toggle="modal" data-bs-target="#exampleModalprofile">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
            </button>
        </div>
        <div class="modal" id="exampleModalprofile" tabindex="1000" aria-labelledby="exampleModalprofileLabel" aria-hidden="true">
            <div class="modal-dialog" id="modal-profile">
                <div class="modal-content" id="content-profile">
                    <div class="modal-header-profile">
                        <h5 class="modal-title-profile" id="exampleModalprofileLabel"></h5>
                    </div>
                    <div class="modal-body-profile">
                        <div style="display: flex; flex-direction: column; gap: 8px;">
                            <button type="button" class="btn-settings" style="text-align: left;" data-bs-toggle="modal" data-bs-target="#Modalprofile">
                                <span class="btn-icon">
                                    <span role="img" aria-label="setting" class="anticon-settings">
                                        <svg viewBox="64 64 896 896" focusable="false" data-icon="setting" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                            <path d="M924.8 625.7l-65.5-56c3.1-19 4.7-38.4 4.7-57.8s-1.6-38.8-4.7-57.8l65.5-56a32.03 32.03 0 009.3-35.2l-.9-2.6a443.74 443.74 0 00-79.7-137.9l-1.8-2.1a32.12 32.12 0 00-35.1-9.5l-81.3 28.9c-30-24.6-63.5-44-99.7-57.6l-15.7-85a32.05 32.05 0 00-25.8-25.7l-2.7-.5c-52.1-9.4-106.9-9.4-159 0l-2.7.5a32.05 32.05 0 00-25.8 25.7l-15.8 85.4a351.86 351.86 0 00-99 57.4l-81.9-29.1a32 32 0 00-35.1 9.5l-1.8 2.1a446.02 446.02 0 00-79.7 137.9l-.9 2.6c-4.5 12.5-.8 26.5 9.3 35.2l66.3 56.6c-3.1 18.8-4.6 38-4.6 57.1 0 19.2 1.5 38.4 4.6 57.1L99 625.5a32.03 32.03 0 00-9.3 35.2l.9 2.6c18.1 50.4 44.9 96.9 79.7 137.9l1.8 2.1a32.12 32.12 0 0035.1 9.5l81.9-29.1c29.8 24.5 63.1 43.9 99 57.4l15.8 85.4a32.05 32.05 0 0025.8 25.7l2.7.5a449.4 449.4 0 00159 0l2.7-.5a32.05 32.05 0 0025.8-25.7l15.7-85a350 350 0 0099.7-57.6l81.3 28.9a32 32 0 0035.1-9.5l1.8-2.1c34.8-41.1 61.6-87.5 79.7-137.9l.9-2.6c4.5-12.3.8-26.3-9.3-35zM788.3 465.9c2.5 15.1 3.8 30.6 3.8 46.1s-1.3 31-3.8 46.1l-6.6 40.1 74.7 63.9a370.03 370.03 0 01-42.6 73.6L721 702.8l-31.4 25.8c-23.9 19.6-50.5 35-79.3 45.8l-38.1 14.3-17.9 97a377.5 377.5 0 01-85 0l-17.9-97.2-37.8-14.5c-28.5-10.8-55-26.2-78.7-45.7l-31.4-25.9-93.4 33.2c-17-22.9-31.2-47.6-42.6-73.6l75.5-64.5-6.5-40c-2.4-14.9-3.7-30.3-3.7-45.5 0-15.3 1.2-30.6 3.7-45.5l6.5-40-75.5-64.5c11.3-26.1 25.6-50.7 42.6-73.6l93.4 33.2 31.4-25.9c23.7-19.5 50.2-34.9 78.7-45.7l37.9-14.3 17.9-97.2c28.1-3.2 56.8-3.2 85 0l17.9 97 38.1 14.3c28.7 10.8 55.4 26.2 79.3 45.8l31.4 25.8 92.8-32.9c17 22.9 31.2 47.6 42.6 73.6L781.8 426l6.5 39.9zM512 326c-97.2 0-176 78.8-176 176s78.8 176 176 176 176-78.8 176-176-78.8-176-176-176zm79.2 255.2A111.6 111.6 0 01512 614c-29.9 0-58-11.7-79.2-32.8A111.6 111.6 0 01400 502c0-29.9 11.7-58 32.8-79.2C454 401.6 482.1 390 512 390c29.9 0 58 11.6 79.2 32.8A111.6 111.6 0 01624 502c0 29.9-11.7 58-32.8 79.2z"></path>
                                        </svg>
                                    </span>
                                </span>
                                <span>Account settings</span>
                            </button>
                            <button type="button" class="btn-logout" style="text-align: left;" onclick="location.href='logout.php';">
                                <span class="btn-icon">
                                    <span role="img" aria-label="logout" class="anticon-logout">
                                        <svg viewBox="64 64 896 896" focusable="false" data-icon="logout" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                            <path d="M868 732h-70.3c-4.8 0-9.3 2.1-12.3 5.8-7 8.5-14.5 16.7-22.4 24.5a353.84 353.84 0 01-112.7 75.9A352.8 352.8 0 01512.4 866c-47.9 0-94.3-9.4-137.9-27.8a353.84 353.84 0 01-112.7-75.9 353.28 353.28 0 01-76-112.5C167.3 606.2 158 559.9 158 512s9.4-94.2 27.8-137.8c17.8-42.1 43.4-80 76-112.5s70.5-58.1 112.7-75.9c43.6-18.4 90-27.8 137.9-27.8 47.9 0 94.3 9.3 137.9 27.8 42.2 17.8 80.1 43.4 112.7 75.9 7.9 7.9 15.3 16.1 22.4 24.5 3 3.7 7.6 5.8 12.3 5.8H868c6.3 0 10.2-7 6.7-12.3C798 160.5 663.8 81.6 511.3 82 271.7 82.6 79.6 277.1 82 516.4 84.4 751.9 276.2 942 512.4 942c152.1 0 285.7-78.8 362.3-197.7 3.4-5.3-.4-12.3-6.7-12.3zm88.9-226.3L815 393.7c-5.3-4.2-13-.4-13 6.3v76H488c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h314v76c0 6.7 7.8 10.5 13 6.3l141.9-112a8 8 0 000-12.6z"></path>
                                        </svg>
                                    </span>
                                </span>
                                <span>Logout</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal" id="Modalprofile" aria-hidden="true">
            <div class="modal-dialog" id="profile-wrapper">
                <div class="modal-content" id="modal-content-profile">
                    <div class="header-profile">
                        <span class="">
                            <strong>Account Settings</strong>
                        </span>
                        <button type="button" class="header-close">
                            <span class="btn-icon">
                                <span role="img" aria-label="close" class="anticon-close">
                                    <svg viewBox="64 64 896 896" width="24px" height="24px" data-icon="close" aria-hidden="true">
                                        <path d="M799.86 166.31c.02 0 .04.02.08.06l57.69 57.7c.04.03.05.05.06.08a.12.12 0 010 .06c0 .03-.02.05-.06.09L569.93 512l287.7 287.7c.04.04.05.06.06.09a.12.12 0 010 .07c0 .02-.02.04-.06.08l-57.7 57.69c-.03.04-.05.05-.07.06a.12.12 0 01-.07 0c-.03 0-.05-.02-.09-.06L512 569.93l-287.7 287.7c-.04.04-.06.05-.09.06a.12.12 0 01-.07 0c-.02 0-.04-.02-.08-.06l-57.69-57.7c-.04-.03-.05-.05-.06-.07a.12.12 0 010-.07c0-.03.02-.05.06-.09L454.07 512l-287.7-287.7c-.04-.04-.05-.06-.06-.09a.12.12 0 010-.07c0-.02.02-.04.06-.08l57.7-57.69c.03-.04.05-.05.07-.06a.12.12 0 01.07 0c.03 0 .05.02.09.06L512 454.07l287.7-287.7c.04-.04.06-.05.09-.06a.12.12 0 01.07 0z"></path>
                                    </svg>
                                </span>
                            </span>
                        </button>
                    </div>
                    <div class="modal-body-profile">
                        <div class="ant-card-head" style="padding: 0px 12px;">
                            <div class="ant-card-head-wrapper">
                                <div class="ant-card-head-title">
                                    <div class="ant-space css-1kdh1bg ant-space-horizontal ant-space-align-center" style="gap: 15px;">
                                        <div class="ant-space-item">
                                            <span role="img" aria-label="user" class="anticon anticon-user">
                                                <svg viewBox="64 64 896 896" focusable="false" data-icon="user" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                    <path d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="ant-space-item">
                                            <span class="ant-typography css-1y68q4h">User profile</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form class="ant-form ant-form-vertical css-1kdh1bg">
                                <div class="_container_khzzg_1">
                                    <div class="_icon_khzzg_10">
                                        <span role="img" aria-label="idcard"
                                            class="anticon anticon-idcard tertiary">
                                            <svg viewBox="64 64 896 896" focusable="false"
                                                data-icon="idcard" width="1em" height="1em"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 632H136V232h752v560zM610.3 476h123.4c1.3 0 2.3-3.6 2.3-8v-48c0-4.4-1-8-2.3-8H610.3c-1.3 0-2.3 3.6-2.3 8v48c0 4.4 1 8 2.3 8zm4.8 144h185.7c3.9 0 7.1-3.6 7.1-8v-48c0-4.4-3.2-8-7.1-8H615.1c-3.9 0-7.1 3.6-7.1 8v48c0 4.4 3.2 8 7.1 8zM224 673h43.9c4.2 0 7.6-3.3 7.9-7.5 3.8-50.5 46-90.5 97.2-90.5s93.4 40 97.2 90.5c.3 4.2 3.7 7.5 7.9 7.5H522a8 8 0 008-8.4c-2.8-53.3-32-99.7-74.6-126.1a111.8 111.8 0 0029.1-75.5c0-61.9-49.9-112-111.4-112s-111.4 50.1-111.4 112c0 29.1 11 55.5 29.1 75.5a158.09 158.09 0 00-74.6 126.1c-.4 4.6 3.2 8.4 7.8 8.4zm149-262c28.5 0 51.7 23.3 51.7 52s-23.2 52-51.7 52-51.7-23.3-51.7-52 23.2-52 51.7-52z"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="_content_khzzg_15">
                                        <div class="_input_khzzg_21">
                                            <span
                                                class="ant-typography ant-typography-secondary _label_khzzg_34 css-1y68q4h">
                                                Address</span>
                                        </div>
                                    </div>
                                    <div class="_actions_khzzg_46">
                                        <button type="button"
                                            class="ant-btn css-1kdh1bg ant-btn-default ant-btn-icon-only">
                                            <span class="ant-btn-icon">
                                                <span role="img" aria-label="edit"
                                                    class="anticon anticon-edit">
                                                    <svg viewBox="64 64 896 896" focusable="false"
                                                        data-icon="edit" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 000-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 009.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3-362.7 362.6-88.9 15.7 15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        <form class="ant-form ant-form-vertical css-1kdh1bg">
                                <div class="_container_khzzg_1">
                                    <div class="_icon_khzzg_10">
                                        <span role="img" aria-label="phone"
                                            class="anticon anticon-phone tertiary">
                                            <svg viewBox="64 64 896 896" focusable="false"
                                                data-icon="phone" width="1em" height="1em"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M877.1 238.7L770.6 132.3c-13-13-30.4-20.3-48.8-20.3s-35.8 7.2-48.8 20.3L558.3 246.8c-13 13-20.3 30.5-20.3 48.9 0 18.5 7.2 35.8 20.3 48.9l89.6 89.7a405.46 405.46 0 01-86.4 127.3c-36.7 36.9-79.6 66-127.2 86.6l-89.6-89.7c-13-13-30.4-20.3-48.8-20.3a68.2 68.2 0 00-48.8 20.3L132.3 673c-13 13-20.3 30.5-20.3 48.9 0 18.5 7.2 35.8 20.3 48.9l106.4 106.4c22.2 22.2 52.8 34.9 84.2 34.9 6.5 0 12.8-.5 19.2-1.6 132.4-21.8 263.8-92.3 369.9-198.3C818 606 888.4 474.6 910.4 342.1c6.3-37.6-6.3-76.3-33.3-103.4zm-37.6 91.5c-19.5 117.9-82.9 235.5-178.4 331s-213 158.9-330.9 178.4c-14.8 2.5-30-2.5-40.8-13.2L184.9 721.9 295.7 611l119.8 120 .9.9 21.6-8a481.29 481.29 0 00285.7-285.8l8-21.6-120.8-120.7 110.8-110.9 104.5 104.5c10.8 10.8 15.8 26 13.3 40.8z"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="_content_khzzg_15">
                                        <div class="_input_khzzg_21">
                                            <span
                                                class="ant-typography ant-typography-secondary _label_khzzg_34 css-1y68q4h">
                                                Phone</span>
                                            <span class="ant-typography css-1y68q4h">...</span>
                                        </div>
                                    </div>
                                    <div class="_actions_khzzg_46">
                                        <button type="button"
                                            class="ant-btn css-1kdh1bg ant-btn-default ant-btn-icon-only">
                                            <span class="ant-btn-icon">
                                                <span role="img" aria-label="edit"
                                                    class="anticon anticon-edit">
                                                    <svg viewBox="64 64 896 896" focusable="false"
                                                        data-icon="edit" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 000-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 009.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3-362.7 362.6-88.9 15.7 15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form></div>
                    </div>
                </div>
            </div>

            <!-- button arrows -->
            <div class="arrows">
                <button id="prev">
                    << /button>
                        <button id="next">></button>
            </div>

            <!-- thumbnail -->
            <div class="thumbnail">
                <div class="item active">
                    <img src="image/img1.png">
                    <div class="content">
                        Лабораторная №1
                    </div>
                </div>
                <div class="item">
                    <img src="image/img2.jpg">
                    <div class="content">
                        Лабораторная №2
                    </div>
                </div>
                <div class="item">
                    <img src="image/img3.jpg">
                    <div class="content">
                        Лабораторная №3
                    </div>
                </div>
                <div class="item">
                    <img src="image/img4.jpg">
                    <div class="content">
                        Лабораторная №4
                    </div>
                </div>
                <div class="item">
                    <img src="image/img5.jpg">
                    <div class="content">
                        Лабораторная №5
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="container">
                <div class="row gap-2">
                    <div class="col" id="flex_lab_info"></div>
                    <div class="col" id="flex_lab">
                        <div style="position: relative;">
                            <img src="image/img-1.jpeg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal1">Вычисление объема фигур(цилиндр, конус, призма)</div>
                        </div>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal1Label">Первое Задание</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="task" id="cylinder">
                                            <div class="container">
                                                <h3 id="modal-task">Вычисление объема фигур</h3>
                                                <form id="volume_form" method="post">
                                                    <div class="mb-3">
                                                        <label for="shape" class="form-label">Выберите фигуру:</label>
                                                        <select class="form-select" id="shape" name="shape" required>
                                                            <option value="cylinder">Цилиндр</option>
                                                            <option value="cone">Конус</option>
                                                            <option value="prism">Призма</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="radius" class="form-label">Радиус (для цилиндра и конуса) или сторона основания (для призмы):</label>
                                                        <input type="number" class="form-control" id="radius" name="radius" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="height" class="form-label">Высота (для цилиндра и конуса) или высота призмы:</label>
                                                        <input type="number" class="form-control" id="height" name="height" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Рассчитать объем</button>
                                                    <div id="volume_output"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="flex_lab">
                        <div style="position: relative;">
                            <img src="image/img-2.jpeg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal2">Вычисление корней квадратного уравнения</div>
                        </div>
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal2Label">Второе Задание</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="task" id="quadratic">
                                            <div class="container">
                                                <h3 id="modal-task">Вычисление корней квадратного уравнения</h3>
                                                <form id="quadratic_form" method="post">
                                                    <div class="mb-3">
                                                        <label for="a_coefficient" class="form-label">Коэффициент a:</label>
                                                        <input type="number" class="form-control" id="a_coefficient" name="a_coefficient" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="b_coefficient" class="form-label">Коэффициент b:</label>
                                                        <input type="number" class="form-control" id="b_coefficient" name="b_coefficient" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="c_coefficient" class="form-label">Коэффициент c:</label>
                                                        <input type="number" class="form-control" id="c_coefficient" name="c_coefficient" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Рассчитать корни уравнения</button>
                                                    <div id="quadratic_roots_title"></div>
                                                    <div id="no_real_roots"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gap-2 mt-5">
                    <div class="col" id="flex_lab">
                        <div style="position: relative;">
                            <img src="image/img-3.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal3">Вычисление факториала числа</div>
                        </div>
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal3Label">Третье Задание</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="task" id="factorial">
                                            <div class="container">
                                                <h3 id="modal-task">Вычисление факториала числа</h3>
                                                <form id="factorial_form">
                                                    <div class="mb-3">
                                                        <label for="number" class="form-label">Введите число:</label>
                                                        <input type="number" class="form-control" id="number" name="number" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Рассчитать факториал</button>
                                                    <div id="factorial_result"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="flex_lab">
                        <div style="position: relative;">
                            <img src="image/img-4.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal4">
                            <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal4">Вывод буквы "W" из символов "*"</div>
                        </div>
                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal4Label">Четвертое Задание</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="task" id="W" style="text-align: center;">
                                            <div style="font-family: monospace; font-size: 22px; white-space: pre; color: #55AAFF;">
                                                <?php
                                                function printW()
                                                {
                                                    echo "                 \n";
                                                    echo "*               *\n";
                                                    echo "*       *       *\n";
                                                    echo "*     *   *     *\n";
                                                    echo "*   *       *   *\n";
                                                    echo "* *           * *\n";
                                                    echo "*               *\n";
                                                }
                                                printW();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="flex_lab">
                        <div style="position: relative;">
                            <img src="image/img-5.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal5">
                            <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal5">Вычисление значения выражения</div>
                        </div>
                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModal5Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal5Label">Пятое Задание</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="task" id="expression_value">
                                            <div class="container">
                                                <h3 id="modal-task">Вычисление значения выражения</h3>
                                                <form id="expression_form" method="post">
                                                    <div class="mb-3">
                                                        <label for="x_value" class="form-label">Введите значение x:</label>
                                                        <input type="number" step="any" class="form-control" id="x_value" name="x_value" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Вычислить значение</button>
                                                    <div id="expression_result"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gap-2 mt-5">
                    <div class="col" id="flex_lab">
                        <div style="position: relative;">
                            <img src="image/img-6.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal6">
                            <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal6">Вывод названия поры года по номеру месяца</div>
                        </div>
                        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModal6Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal6Label">Шестое Задание</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="task" id="season">
                                            <div class="container">
                                                <h3 id="modal-task">Определение поры года</h3>
                                                <form id="season_form" method="post">
                                                    <div class="mb-3">
                                                        <label for="month_number" class="form-label">Введите номер месяца (1-12):</label>
                                                        <input type="number" class="form-control" id="month_number" name="month_number" min="1" max="12" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Определить пору года</button>
                                                    <div id="season_output"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="flex_lab">
                        <div style="position: relative;">
                            <img src="image/img-7.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal7">
                            <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal7">Нахождение наибольшего числа из трех чисел</div>
                        </div>
                        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModal7Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal7Label">Седьмое Задание</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="task" id="max_number">
                                            <div class="container">
                                                <h3 id="modal-task">Нахождение наибольшего числа из трех</h3>
                                                <form id="max_number_form" method="post">
                                                    <div class="mb-3">
                                                        <label for="number1" class="form-label">Введите первое число:</label>
                                                        <input type="number" class="form-control" id="number1" name="number1" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="number2" class="form-label">Введите второе число:</label>
                                                        <input type="number" class="form-control" id="number2" name="number2" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="number3" class="form-label">Введите третье число:</label>
                                                        <input type="number" class="form-control" id="number3" name="number3" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Найти наибольшее число</button>
                                                    <div id="max_number_output"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="flex_lab">
                        <div style="position: relative;">
                            <img src="image/img-8.jpg" class="img" alt="..." data-bs-toggle="modal" data-bs-target="#exampleModal8">
                            <div class="caption" data-bs-toggle="modal" data-bs-target="#exampleModal8">Перестановка первой и последней цифры трехзначного числа</div>
                        </div>
                        <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModal8Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModal8Label">Восьмое Задание</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="task" id="swap_digits">
                                            <div class="container">
                                                <h3 id="modal-task">Перестановка первой и последней цифры трехзначного числа</h3>
                                                <form id="swap_digits_form" method="post">
                                                    <div class="mb-3">
                                                        <label for="number" class="form-label">Введите трехзначное число:</label>
                                                        <input type="number" class="form-control" id="number" name="number" min="100" max="999" required>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Переставить цифры</button>
                                                    <div id="swapped_number_output"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="site.js"></script>
        <script src="lab1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>