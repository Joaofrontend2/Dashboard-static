<?php include('header.php') ?>

<body>
    <div class="row">
        <div class="right-sidebar col-12 col-md-3">
            <div class="title-sidebar">
                <h2>painel</h2>
            </div>
            <nav>
                <ul class="pages-painel">
                    <li>
                        <a href="#">
                            <button class="btn-dropdown" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                example
                            </button>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-menu">
                                <ul class="list-link">
                                    <li>
                                        <i class="fa-solid fa-sliders"></i>
                                        <a href="#">example</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-money-bill"></i>
                                        <a href="#">example</a>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-calendar"></i>
                                        <a href="#">example</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="left-content col-12 col-md-12 col-lg-9">
            <div class="container">
                <div class="addres-panel">
                    <div class="title-panel">
                        <a href="#">
                            <i class="fa-solid fa-house"></i>
                        </a>
                        <h1>Dashboard</h1>
                    </div>
                    <div class="notification">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-bell"></i>
                        </button>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Example-1</button></li>
                                <li><button class="dropdown-item" type="button">Example-2</button></li>
                                <li><button class="dropdown-item" type="button">Example-3</button></li>
                                <li><button class="dropdown-item" type="button">Example-4</button></li>
                            </ul>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Notifications</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        empty
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card-main">
                    <div class="swiper-wrapper">
                        <div class="content-index">
                            <div class="service-name">
                                <span>example</span>
                                <i class="fa-solid fa-sort"></i>
                            </div>
                            <div class="descript-area">
                                <p>Lorem ipsum dolor sit amnditiis repellat ipsum consequatur odio beatae?</p>
                            </div>
                            <div class="go-to">
                                <a href="#">
                                    <button>Go<i class="fa-solid fa-arrow-right"></i></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="content-index">
                            <div class="service-name">
                                <span>example</span>
                                <i class="fa-solid fa-sort"></i>
                            </div>
                            <div class="descript-area">
                                <p>Lorem ipsum dolor sit amnditiis repellat ipsum consequatur odio beatae?</p>
                            </div>
                            <div class="go-to">
                                <a href="#">
                                    <button>Go<i class="fa-solid fa-arrow-right"></i></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-wrapper">
                        <div class="content-index">
                            <div class="service-name">
                                <span>example</span>
                                <i class="fa-solid fa-sort"></i>
                            </div>
                            <div class="descript-area">
                                <p>Lorem ipsum dolor sit amnditiis repellat ipsum consequatur odio beatae?</p>
                            </div>
                            <div class="go-to">
                                <a href="#">
                                    <button>Go<i class="fa-solid fa-arrow-right"></i></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="all">
                    <table class="table">
                        <div class="title-table">
                            <h1>example</h1>
                            <div class="users-on">
                                <span>Example: 20</span>
                            </div>
                        </div>
                        <thead>
                            <tr>
                                <th scope="col"><span>Name</span></th>
                                <th scope="col"><span>Email</span></th>
                                <th scope="col"><span>Status</span></th>
                                <th scope="col"><span>Team</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="box-persona-info">
                                        <img src="assets/img/personal.png"></img>
                                        <div class="informations">
                                            <label> Example-1</label>
                                            <span>Most example</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:example@ex.com" target="_blank">
                                        Example@ex.com
                                    </a>
                                </td>
                                </a>
                                <td class="active-status"><span><i class="fa-solid fa-circle"></i>Active</span></td>
                                <td>
                                    <ul>
                                        <li><a href="">example</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="box-persona-info">
                                        <img src="assets/img/personal.png"></img>
                                        <div class="informations">
                                            <label> Example-1</label>
                                            <span>Most example</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:example@ex.com" target="_blank">
                                        Example@ex.com
                                    </a>
                                </td>
                                </a>
                                <td class="disable-status"><span><i class="fa-solid fa-circle"></i>Disable</span></td>
                                <td>
                                    <ul>
                                        <li><a href="">example</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="box-persona-info">
                                        <img src="assets/img/personal.png"></img>
                                        <div class="informations">
                                            <label> Example-1</label>
                                            <span>Most example</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:example@ex.com" target="_blank">
                                        Example@ex.com
                                    </a>
                                </td>
                                </a>
                                <td class="active-status"><span><i class="fa-solid fa-circle"></i>Active</span></td>
                                <td>
                                    <ul>
                                        <li><a href="">example</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="box-persona-info">
                                        <img src="assets/img/personal.png"></img>
                                        <div class="informations">
                                            <label> Example-1</label>
                                            <span>Most example</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:example@ex.com" target="_blank">
                                        Example@ex.com
                                    </a>
                                </td>
                                </a>
                                <td class="active-status"><span><i class="fa-solid fa-circle"></i>Active</span></td>
                                <td>
                                    <ul>
                                        <li><a href="">example</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="box-persona-info">
                                        <img src="assets/img/personal.png"></img>
                                        <div class="informations">
                                            <label> Example-1</label>
                                            <span>Most example</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:example@ex.com" target="_blank">
                                        Example@ex.com
                                    </a>
                                </td>
                                </a>
                                <td class="active-status"><span><i class="fa-solid fa-circle"></i>Active</span></td>
                                <td>
                                    <ul>
                                        <li><a href="">example</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="box-persona-info">
                                        <img src="assets/img/personal.png"></img>
                                        <div class="informations">
                                            <label> Example-1</label>
                                            <span>Most example</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:example@ex.com" target="_blank">
                                        Example@ex.com
                                    </a>
                                </td>
                                </a>
                                <td class="active-status"><span><i class="fa-solid fa-circle"></i>Active</span></td>
                                <td>
                                    <ul>
                                        <li><a href="">example</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="box-persona-info">
                                        <img src="assets/img/personal.png"></img>
                                        <div class="informations">
                                            <label> Example-1</label>
                                            <span>Most example</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:example@ex.com" target="_blank">
                                        Example@ex.com
                                    </a>
                                </td>
                                <td class="active-status"><span><i class="fa-solid fa-circle"></i>Active</span></td>
                                <td>
                                    <ul>
                                        <li><a href="">example</a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="box-persona-info">
                                        <img src="assets/img/personal.png"></img>
                                        <div class="informations">
                                            <label> Example-1</label>
                                            <span>Most example</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="mailto:example@ex.com" target="_blank">
                                        Example@ex.com
                                    </a>
                                </td>
                                <td class="active-status"><span><i class="fa-solid fa-circle"></i>Active</span></td>
                                <td>
                                    <ul>
                                        <li><a href="">example</a></li>
                                    </ul>
                                </td>
                            </tr>1
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <?php include('footer.php') ?>