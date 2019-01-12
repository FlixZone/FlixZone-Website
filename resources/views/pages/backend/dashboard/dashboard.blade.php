@extends('layouts.backend')

@section('content')

<div class="container-fluid">
<!-- Begin Page Header-->
<div class="row">
    <div class="page-header">
        <div class="d-flex align-items-center">
            <h2 class="page-header-title text-gradient-01">Dashboard</h2>
        </div>
    </div>
</div>
<!-- End Page Header -->
                        
<div class="row flex-row">
    <div class="col-xl-4">
        <!-- Begin Widget 8 -->
        <div class="widget widget-08 has-shadow">
            <!-- Begin Widget Header -->
            <div class="widget-header bordered d-flex align-items-center">
                <h2>Tasks List</h2>
                <div class="widget-options">
                    <div class="dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                            <i class="la la-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"> 
                                <i class="la la-plus"></i>Add Task
                            </a>
                            <a href="#" class="dropdown-item"> 
                                <i class="la la-edit"></i>Edit Widget
                            </a>
                            <a href="#" class="dropdown-item faq"> 
                                <i class="la la-question-circle"></i>FAQ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget Header -->
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <div class="today">
                    <div class="title">Today</div>
                    <div class="new-tasks"><span class="nb">12</span> new tasks</div>
                </div>
                <!-- Begin List -->
                <div class="todo-list">
                    <ul id="sortable" class="list">
                        <li class="task-color task-violet">
                            <div class="styled-checkbox">
                                <input type="checkbox" id="task-1">
                                <label class="text-primary" for="task-1">Play Rainbow Six</label>
                            </div>
                        </li>
                        <li>
                            <div class="styled-checkbox">
                                <input type="checkbox" id="task-2">
                                <label class="text-dark" for="task-2">Drink coffee with Megan</label>
                            </div>
                        </li>
                        <li class="task-color task-blue">
                            <div class="styled-checkbox">
                                <input type="checkbox" id="task-3">
                                <label class="text-info" for="task-3">Video conference</label>
                            </div>
                        </li>
                        <li class="task-color task-red">
                            <div class="styled-checkbox">
                                <input type="checkbox" id="task-4">
                                <label class="text-danger" for="task-4">Finish visual design</label>
                            </div>
                        </li>
                        <li>
                            <div class="styled-checkbox">
                                <input type="checkbox" id="task-5">
                                <label class="text-dark" for="task-5">Meeting with team</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End List -->
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 8 -->
    </div>
    <div class="col-xl-4 col-md-6">
        <!-- Begin Widget 06 -->
        <div class="widget widget-06 has-shadow">
            <!-- Begin Widget Header -->
            <div class="widget-header bordered d-flex align-items-center">
                <h2>Reviews</h2>
                <div class="widget-options">
                    <div class="dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                            <i class="la la-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item"> 
                                <i class="la la-edit"></i>Edit Widget
                            </a>
                            <a href="#" class="dropdown-item faq"> 
                                <i class="la la-question-circle"></i>FAQ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget Header -->
            <!-- Begin Widget Body -->
            <div class="widget-body p-0">
                <div id="list-group" class="widget-scroll" style="max-height: 490px; overflow: hidden; outline: none; cursor: grab; touch-action: none;">
                    <ul class="reviews list-group w-100">
                        <!-- 01 -->
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-start">
                                    <img src="assets/img/avatar/avatar-02.jpg" class="user-img rounded-circle" alt="...">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="username">
                                        <h4>Brandon Smith</h4>
                                    </div>
                                    <div class="msg">
                                        <div class="stars">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-half-empty"></i>
                                        </div>
                                        <p>
                                            WoW! Amazing Work!
                                        </p>
                                    </div>
                                    <div class="meta">
                                        <span class="mr-3">30 minutes ago - 1 Reply</span>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                                <div class="media-right pr-3 align-self-center">
                                    <div class="like text-center">
                                        <i class="ion-heart"></i>
                                        <span>12</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End 01 -->
                        <!-- 02 -->
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-start">
                                    <img src="assets/img/avatar/avatar-05.jpg" class="user-img rounded-circle" alt="...">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="username">
                                        <h4>Megan Duncan</h4>
                                    </div>
                                    <div class="msg">
                                        <div class="stars">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </div>
                                        <p>
                                            Very nice! Keep up the beautiful work.
                                        </p>
                                    </div>
                                    <div class="meta">
                                        <span class="mr-3">2 hours ago</span>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                                <div class="media-right pr-3 align-self-center">
                                    <div class="like text-center">
                                        <i class="ion-heart"></i>
                                        <span>4</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End 02 -->
                        <!-- 03 -->
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-start">
                                    <img src="assets/img/avatar/avatar-04.jpg" class="user-img rounded-circle" alt="...">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="username">
                                        <h4>Nathan Hunter</h4>
                                    </div>
                                    <div class="msg">
                                        <div class="stars">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                        </div>
                                        <p>
                                            Nice work, good design!
                                        </p>
                                    </div>
                                    <div class="meta">
                                        <span class="mr-3">4 hours ago</span>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                                <div class="media-right pr-3 align-self-center">
                                    <div class="like text-center">
                                        <i class="ion-heart"></i>
                                        <span>32</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End 03 -->
                        <!-- 04 -->
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-start">
                                    <img src="assets/img/avatar/avatar-09.jpg" class="user-img rounded-circle" alt="...">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="username">
                                        <h4>Michael Bradley</h4>
                                    </div>
                                    <div class="msg">
                                        <div class="stars">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-half-empty"></i>
                                        </div>
                                        <p>
                                            Very nice! Keep up the beautiful work.
                                        </p>
                                    </div>
                                    <div class="meta">
                                        <span class="mr-3">5 hours ago - 2 Reply</span>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                                <div class="media-right pr-3 align-self-center">
                                    <div class="like text-center">
                                        <i class="ion-heart"></i>
                                        <span>2</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End 04 -->
                        <!-- 05 -->
                        <li class="list-group-item">
                            <div class="media">
                                <div class="media-left align-self-start">
                                    <img src="assets/img/avatar/avatar-03.jpg" class="user-img rounded-circle" alt="...">
                                </div>
                                <div class="media-body align-self-center">
                                    <div class="username">
                                        <h4>Louis Henry</h4>
                                    </div>
                                    <div class="msg">
                                        <div class="stars">
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star"></i>
                                            <i class="la la-star-half-empty"></i>
                                        </div>
                                        <p>
                                            I like the color combination!
                                        </p>
                                    </div>
                                    <div class="meta">
                                        <span class="mr-3">1 day ago</span>
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                                <div class="media-right pr-3 align-self-center">
                                    <div class="like text-center">
                                        <i class="ion-heart"></i>
                                        <span>9</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End 05 -->
                    </ul>
                </div>
                <!-- End List -->
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 06 -->
    </div>
    <div class="col-xl-4 col-md-6">
        <!-- Begin Widget 36 -->
        <div class="widget-36 widget has-shadow">
            <!-- Begin Widget Body -->
            <div class="widget-body">
                <div class="row">
                    <div class="col-xl-12 text-center mt-5 mb-5">
                        <div class="nb-visitors">
                            New Users
                        </div>
                        <div class="visitors-nb text-gradient-02">
                            2,861
                        </div>
                    </div>
                    <div class="col-xl-6 text-center mt-5">
                        <p class="text-dark">Registrations</p>
                        <div class="mt-2">
                            <label>
                                <input class="toggle-checkbox" type="checkbox" checked="">
                                <span>
                                    <span></span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xl-6 text-center mt-5">
                        <p class="text-dark">Maintenance Mode</p>
                        <div class="mt-2">
                            <label>
                                <input class="toggle-checkbox" type="checkbox">
                                <span>
                                    <span></span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Widget Body -->
        </div>
        <!-- End Widget 36 -->
    </div>
</div>
<!-- End Row -->
</div>
                        
@endsection