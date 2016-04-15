 <!-- Aside Start-->
<aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="#" class="logo-expanded">
                    <i class="ion-social-buffer"></i>
                    <span href="{!!route('dashboard')!!}" class="nav-label">{!! Config::get('customConfig.names.siteName')!!}</span>

                </a>
            </div>
            <!-- / brand -->


            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">

                     <li class="{!! Menu::areActiveURLs(['dashboard', 'change-password']) !!}"><a href="#"><i class="ion-flask"></i> <span class="nav-label">Home</span></a>
                        <ul class="list-unstyled">

                            <li class="{!! Menu::isActiveURL('dashboard') !!}">
                                <a href="{!!  URL::to( 'dashboard') !!}">Dashboard</a>
                            </li>

                            <!-- <li class="{!! Menu::isActiveURL('change-password') !!}">
                                <a href="{!!  URL::to( 'change-password') !!}">Password Change</a>
                            </li> -->
                        </ul>
                    </li>


                    <!-- Skill -->
                    <li class="{!! Menu::areActiveRoutes(['skill.index', 'skill.create']) !!}"><a href="#"><i class="ion-compose"></i> <span class="nav-label">Skill</span></a>
                        <ul class="list-unstyled">

                            <li class="{!! Menu::isActiveRoute('skill.index') !!}">
                                <a href="{!!  URL::route( 'skill.index') !!}">Skill List</a>
                            </li>

                            <li class="{!! Menu::isActiveRoute('skill.create') !!}">
                                <a href="{!!  URL::route( 'skill.create') !!}">Add new skill</a>
                            </li>
                        </ul>
                    </li>





                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Routine</span></a>
                        <ul class="list-unstyled">
                            <li class="{!! Menu::isActiveRoute('routine.index') !!}">
                                <a href="{!!  URL::route( 'routine.index') !!}">Routine</a>
                            </li>
                            <li><a href="#">Data Table</a></li>

                        </ul>
                    </li>


                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Projects</span></a>
                        <ul class="list-unstyled">
                            <li class="{!! Menu::isActiveRoute('project.index') !!}">
                                <a href="{!!  URL::route( 'project.index') !!}">Project List</a>
                            </li>
                            <li class="{!! Menu::isActiveRoute('project.create') !!}">
                                <a href="{!!  URL::route( 'project.create') !!}">Add New Project</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Notices</span></a>
                        <ul class="list-unstyled">
                            <li class="{!! Menu::isActiveRoute('notice.index') !!}">
                                <a href="{!!  URL::route( 'notice.index') !!}">Previous Notices</a>
                            </li>
                            <li class="{!! Menu::isActiveRoute('notice.create') !!}">
                                <a href="{!!  URL::route( 'notice.create') !!}">Add a Notice</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">FIles</span></a>
                        <ul class="list-unstyled">
                            <li class="{!! Menu::isActiveRoute('file.index') !!}">
                                <a href="{!!  URL::route( 'file.index') !!}">All Files</a>
                            </li>
                            <li class="{!! Menu::isActiveRoute('file.create') !!}">
                                <a href="{!!  URL::route( 'file.create') !!}">Upload File</a>
                            </li>

                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Dialogue</span></a>
                        <ul class="list-unstyled">
                            <li class="{!! Menu::isActiveRoute('dialog.index') !!}">
                                <a href="{!!  URL::route( 'dialog.index') !!}">All Dialogues</a>
                            </li>
                            <li class="{!! Menu::isActiveRoute('dialog.create') !!}">
                                <a href="{!!  URL::route( 'dialog.create') !!}">My Dialogue</a>
                            </li>

                        </ul>
                    </li>

                    <!-- <li class="has-submenu"><a href="#"><i class="ion-email"></i> <span class="nav-label">Notices</span></a>
                        <ul class="list-unstyled">
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Compose Mail</a></li>
                            <li><a href="#">View Mail</a></li>

                        </ul>
                    </li>


                    <li class="has-submenu"><a href="#"><i class="ion-location"></i> <span class="nav-label">Projects</span></a>
                        <ul class="list-unstyled">
                            <li><a href="gmap.html"> Google Map</a></li>
                            <li><a href="vector-map.html"> Vector Map</a></li>
                        </ul>
                    </li> -->

                </ul>
            </nav>



</aside>
        <!-- Aside Ends-->



