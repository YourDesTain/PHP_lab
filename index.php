<?php
session_start();

include("database.php");

// Проверка, если пользователь авторизован
if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    $fio = isset($_SESSION['fio']) ? $_SESSION['fio'] : 'ФИО не найдено';
    $address = isset($_SESSION['address']) ? $_SESSION['address'] : 'Адрес не найден';
    $telephone = isset($_SESSION['telephone']) ? $_SESSION['telephone'] : 'Телефон не найден';
    $pass = isset($_SESSION['pass']) ? $_SESSION['pass'] : 'Пароль не найден';
} else {
    $fio = 'Пользователь не авторизован';
    $address = 'Пользователь не авторизован';
    $telephone = 'Пользователь не авторизован';
}
?>

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
						<?php
						// Проверяем роль текущего пользователя
						if (isset($_SESSION['login']) && $_SESSION['role'] === 'клиент') {    // Выводим кнопку только если роль не является "исполнитель"
						?>								
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
							<?php
							}
							?>							
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
                        <span class="header-title">
                            <strong>Account Settings</strong>
                        </span>
                        <button type="button" class="header-close">
                            <span class="btn-icon">
                                <span role="img" aria-label="close" class="anticon-close">
                                    <svg viewBox="64 64 896 896" width="18px" height="18px" data-icon="close" aria-hidden="true">
                                        <path d="M799.86 166.31c.02 0 .04.02.08.06l57.69 57.7c.04.03.05.05.06.08a.12.12 0 010 .06c0 .03-.02.05-.06.09L569.93 512l287.7 287.7c.04.04.05.06.06.09a.12.12 0 010 .07c0 .02-.02.04-.06.08l-57.7 57.69c-.03.04-.05.05-.07.06a.12.12 0 01-.07 0c-.03 0-.05-.02-.09-.06L512 569.93l-287.7 287.7c-.04.04-.06.05-.09.06a.12.12 0 01-.07 0c-.02 0-.04-.02-.08-.06l-57.69-57.7c-.04-.03-.05-.05-.06-.07a.12.12 0 010-.07c0-.03.02-.05.06-.09L454.07 512l-287.7-287.7c-.04-.04-.05-.06-.06-.09a.12.12 0 010-.07c0-.02.02-.04.06-.08l57.7-57.69c.03-.04.05-.05.07-.06a.12.12 0 01.07 0c.03 0 .05.02.09.06L512 454.07l287.7-287.7c.04-.04.06-.05.09-.06a.12.12 0 01.07 0z"></path>
                                    </svg>
                                </span>
                            </span>
                        </button>
                    </div>
                    <div class="modal-body-profile" id="profile-body">
                        <div class="card-body">
                            <div class="card-head">
                                <div class="head-wrapper">
                                    <div class="card-head-title">
                                        <div class="" style="display: flex; align-items: center; gap: 15px;">
                                            <div class="ant-space-item">
                                                <span role="img" aria-label="user" class="anticon-user">
                                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="user" width="16px" height="16px" fill="currentColor" aria-hidden="true">
                                                        <path d="M858.5 763.6a374 374 0 00-80.6-119.5 375.63 375.63 0 00-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 00-80.6 119.5A371.7 371.7 0 00136 901.8a8 8 0 008 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 008-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="ant-space-item">
                                                <span class="typography">User profile</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="fio" method="post" id="profile-form">
							    <input type="hidden" name="field" id="field-name">
								<input type="hidden" name="value" id="field-value">
                                <div class="container-profile">
                                    <div class="icon-name">
                                        <span role="img" aria-label="idcard" class="">
                                            <svg viewBox="64 64 896 896" focusable="false" data-icon="idcard" width="1em" height="1em" fill="currentColor" aria-hidden="true">
                                                <path d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 632H136V232h752v560zM610.3 476h123.4c1.3 0 2.3-3.6 2.3-8v-48c0-4.4-1-8-2.3-8H610.3c-1.3 0-2.3 3.6-2.3 8v48c0 4.4 1 8 2.3 8zm4.8 144h185.7c3.9 0 7.1-3.6 7.1-8v-48c0-4.4-3.2-8-7.1-8H615.1c-3.9 0-7.1 3.6-7.1 8v48c0 4.4 3.2 8 7.1 8zM224 673h43.9c4.2 0 7.6-3.3 7.9-7.5 3.8-50.5 46-90.5 97.2-90.5s93.4 40 97.2 90.5c.3 4.2 3.7 7.5 7.9 7.5H522a8 8 0 008-8.4c-2.8-53.3-32-99.7-74.6-126.1a111.8 111.8 0 0029.1-75.5c0-61.9-49.9-112-111.4-112s-111.4 50.1-111.4 112c0 29.1 11 55.5 29.1 75.5a158.09 158.09 0 00-74.6 126.1c-.4 4.6 3.2 8.4 7.8 8.4zm149-262c28.5 0 51.7 23.3 51.7 52s-23.2 52-51.7 52-51.7-23.3-51.7-52 23.2-52 51.7-52z"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="content-profile">
                                        <div class="input-variables">
                                            <span class="title-variables">ФИО</span>
                                            <span class="add-text" id="editable-fio"><?php echo htmlspecialchars($fio); ?></span>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <button type="button" class="btn-edit" id="edit-button-fio" onclick="makeEditable('fio')">
                                            <span class="btn-icon">
                                                <span role="img" aria-label="edit" class="edit">
                                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="edit" width="18px" height="18px" fill="currentColor" aria-hidden="true">
                                                        <path d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 000-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 009.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3-362.7 362.6-88.9 15.7 15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn-cancel" id="cancel-button-fio" onclick="cancelChanges('fio')" style="display:none;">Отменить</button>
                                        <button type="button" class="btn-save" id="save-button-fio" onclick="saveChanges('fio')" style="display:none;">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                            <form class="address" method="post" id="profile-form">
                                <div class="container-profile">
                                    <div class="icon-name">
                                        <span role="img" aria-label="idcard" class="">
                                            <svg width="1em" height="1em" viewBox="0 0 1024 1024" fill="currentColor" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M512 1012.8c-253.6 0-511.2-54.4-511.2-158.4 0-92.8 198.4-131.2 283.2-143.2h3.2c12 0 22.4 8.8 24 20.8 0.8 6.4-0.8 12.8-4.8 17.6-4 4.8-9.6 8.8-16 9.6-176.8 25.6-242.4 72-242.4 96 0 44.8 180.8 110.4 463.2 110.4s463.2-65.6 463.2-110.4c0-24-66.4-70.4-244.8-96-6.4-0.8-12-4-16-9.6-4-4.8-5.6-11.2-4.8-17.6 1.6-12 12-20.8 24-20.8h3.2c85.6 12 285.6 50.4 285.6 143.2 0.8 103.2-256 158.4-509.6 158.4z m-16.8-169.6c-12-11.2-288.8-272.8-288.8-529.6 0-168 136.8-304.8 304.8-304.8S816 145.6 816 313.6c0 249.6-276.8 517.6-288.8 528.8l-16 16-16-15.2zM512 56.8c-141.6 0-256.8 115.2-256.8 256.8 0 200.8 196 416 256.8 477.6 61.6-63.2 257.6-282.4 257.6-477.6C768.8 172.8 653.6 56.8 512 56.8z m0 392.8c-80 0-144.8-64.8-144.8-144.8S432 160 512 160c80 0 144.8 64.8 144.8 144.8 0 80-64.8 144.8-144.8 144.8zM512 208c-53.6 0-96.8 43.2-96.8 96.8S458.4 401.6 512 401.6c53.6 0 96.8-43.2 96.8-96.8S564.8 208 512 208z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="content-profile">
                                        <div class="input-variables">
                                            <span class="title-variables">Адрес</span>
                                            <span class="add-text" id="editable-address"><?php echo htmlspecialchars($address); ?></span>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <button type="button" class="btn-edit" id="edit-button-address" onclick="makeEditable('address')">
                                            <span class="btn-icon">
                                                <span role="img" aria-label="edit" class="edit">
                                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="edit" width="18px" height="18px" fill="currentColor" aria-hidden="true">
                                                        <path d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 000-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 009.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3-362.7 362.6-88.9 15.7 15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn-cancel" id="cancel-button-address" onclick="cancelChanges('address')" style="display:none;">Отменить</button>
                                        <button type="button" class="btn-save" id="save-button-address" onclick="saveChanges('address')" style="display:none;">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                            <form class="telephone" method="post" id="profile-form">
                                <div class="container-profile">
                                    <div class="icon-name">
                                        <span role="img" aria-label="idcard" class="">
                                            <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.3308 15.9402L15.6608 14.6101C15.8655 14.403 16.1092 14.2384 16.3778 14.1262C16.6465 14.014 16.9347 13.9563 17.2258 13.9563C17.517 13.9563 17.8052 14.014 18.0739 14.1262C18.3425 14.2384 18.5862 14.403 18.7908 14.6101L20.3508 16.1702C20.5579 16.3748 20.7224 16.6183 20.8346 16.887C20.9468 17.1556 21.0046 17.444 21.0046 17.7351C21.0046 18.0263 20.9468 18.3146 20.8346 18.5833C20.7224 18.8519 20.5579 19.0954 20.3508 19.3L19.6408 20.02C19.1516 20.514 18.5189 20.841 17.8329 20.9541C17.1469 21.0672 16.4427 20.9609 15.8208 20.6501C10.4691 17.8952 6.11008 13.5396 3.35083 8.19019C3.03976 7.56761 2.93414 6.86242 3.04914 6.17603C3.16414 5.48963 3.49384 4.85731 3.99085 4.37012L4.70081 3.65015C5.11674 3.23673 5.67937 3.00464 6.26581 3.00464C6.85225 3.00464 7.41488 3.23673 7.83081 3.65015L9.40082 5.22021C9.81424 5.63615 10.0463 6.19871 10.0463 6.78516C10.0463 7.3716 9.81424 7.93416 9.40082 8.3501L8.0708 9.68018C8.95021 10.8697 9.91617 11.9926 10.9608 13.04C11.9994 14.0804 13.116 15.04 14.3008 15.9102L14.3308 15.9402Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="content-profile">
                                        <div class="input-variables">
                                            <span class="title-variables">Номер телефона</span>
                                            <span class="add-text" id="editable-telephone"><?php echo htmlspecialchars($telephone); ?></span>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <button type="button" class="btn-edit" id="edit-button-telephone" onclick="makeEditable('telephone')">
                                            <span class="btn-icon">
                                                <span role="img" aria-label="edit" class="edit">
                                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="edit" width="18px" height="18px" fill="currentColor" aria-hidden="true">
                                                        <path d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 000-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 009.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3-362.7 362.6-88.9 15.7 15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn-cancel" id="cancel-button-telephone" onclick="cancelChanges('telephone')" style="display:none;">Отменить</button>
                                        <button type="button" class="btn-save" id="save-button-telephone" onclick="saveChanges('telephone')" style="display:none;">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                            <form class="password" method="post">
                                <div class="container-profile">
                                    <div class="icon-name">
                                        <span role="img" aria-label="idcard" class="">
                                            <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 10V14M10.2676 11L13.7317 13M13.7314 11L10.2673 13" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M6.73241 10V14M4.99999 11L8.46409 13M8.46386 11L4.99976 13" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M17.2681 10V14M15.5356 11L18.9997 13M18.9995 11L15.5354 13" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                                <path d="M22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C21.4816 5.82475 21.7706 6.69989 21.8985 8" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="content-profile">
                                        <div class="input-variables">
                                            <span class="title-variables">Пароль</span>
                                            <span class="add-text" id="editable-password">***</span>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <button type="button" class="btn-edit" id="edit-button-password" onclick="makeEditable('password')">
                                            <span class="btn-icon">
                                                <span role="img" aria-label="edit" class="edit">
                                                    <svg viewBox="64 64 896 896" focusable="false" data-icon="edit" width="18px" height="18px" fill="currentColor" aria-hidden="true">
                                                        <path d="M257.7 752c2 0 4-.2 6-.5L431.9 722c2-.4 3.9-1.3 5.3-2.8l423.9-423.9a9.96 9.96 0 000-14.1L694.9 114.9c-1.9-1.9-4.4-2.9-7.1-2.9s-5.2 1-7.1 2.9L256.8 538.8c-1.5 1.5-2.4 3.3-2.8 5.3l-29.5 168.2a33.5 33.5 0 009.4 29.8c6.6 6.4 14.9 9.9 23.8 9.9zm67.4-174.4L687.8 215l73.3 73.3-362.7 362.6-88.9 15.7 15.6-89zM880 836H144c-17.7 0-32 14.3-32 32v36c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-36c0-17.7-14.3-32-32-32z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                        <button type="button" class="btn-cancel" id="cancel-button-password" onclick="cancelChanges('password')" style="display:none;">Отменить</button>
                                        <button type="button" class="btn-save" id="save-button-password" onclick="saveChanges('password')" style="display:none;">Сохранить</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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