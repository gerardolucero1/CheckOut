<notifications-component :user-id="{{ Auth::user()->id }}"></notifications-component>

<div class="xp-rightbar">  
    <!-- Start XP Topbar -->
    <div class="xp-topbar">
        <!-- Start XP Row -->
        <div class="row">
            <!-- Start XP Col -->
            <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                <div class="xp-menubar">
                    <a class="xp-menu-hamburger" href="javascript:void();">
                       <i class="icon-menu font-20 text-white"></i>
                     </a>
                 </div>
            </div> 
            <!-- End XP Col -->
            <!-- Start XP Col -->
            <div class="col-10 col-md-11 col-lg-11 order-1 order-md-2">
                <div class="xp-profilebar text-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="dropdown xp-message">
                                <a class="dropdown-toggle text-white" href="#" role="button" id="xp-message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-speech font-18 v-a-m"></i>
                                    <span class="badge badge-pill bg-success-gradient xp-badge-up">8</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-message">
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <div class="media-body">
                                              <h5 class="mt-0 mb-0 py-3 text-white text-center font-16">8 New Messages</h5>
                                            </div>
                                        </li>  
                                        <li class="media xp-msg">
                                            <img class="mr-3 align-self-center rounded-circle" src="https://www.menon.no/wp-content/uploads/thumb-71-personae-big.jpeg" width="40px" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <a href="#">  
                                                    <h5 class="mt-0 mb-1 font-14">Ariel Blue<span class="font-12 f-w-4 float-right">3 min ago</span></h5>
                                                    <p class="mb-0 font-13">Thank you for attending...<span class="badge badge-pill badge-success float-right">2</span></p>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="media xp-msg">
                                            <img class="mr-3 align-self-center rounded-circle" src="https://www.menon.no/wp-content/uploads/thumb-71-personae-big.jpeg" width="40px" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 class="mt-0 mb-1 font-14">Jammy Moon<span class="font-12 f-w-4 float-right">5 min ago</span></h5>
                                                    <p class="mb-0 font-13">Hey no worries! Trust me...<span class="badge badge-pill badge-success float-right">3</span></p>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="media xp-msg">
                                            <img class="mr-3 align-self-center rounded-circle" src="https://www.menon.no/wp-content/uploads/thumb-71-personae-big.jpeg" width="40px" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 class="mt-0 mb-1 font-14">Lisa Ross<span class="font-12 f-w-4 float-right">5:25 PM</span></h5>
                                                    <p class="mb-0 font-13">We can do it better? i don't...<span class="badge badge-pill badge-success float-right">5</span></p>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0 py-3 text-black text-center font-14">
                                                    <a href="#" class="text-primary">View all</a>
                                                </h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="dropdown xp-notification">
                                <a class="dropdown-toggle text-white" href="#" role="button" id="xp-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-bell font-18 v-a-m"></i>
                                    <span class="badge badge-pill bg-danger-gradient xp-badge-up">3</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-notification">
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0 py-3 text-white text-center font-16">3 New Notifications</h5>
                                            </div>
                                        </li>  
                                        <li class="media xp-noti" data-toggle="modal" data-target="#exampleModal">                                                
                                            <div class="mr-3 xp-noti-icon success-rgba"><i class="icon-basket-loaded text-success"></i></div>
                                            <div class="media-body">
                                                <a>
                                                    <h5 class="mt-0 mb-1 font-14">
                                                        New Requeriment</h5>
                                                    <p class="mb-0 font-12 f-w-4">5 min ago</p>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="media xp-noti" data-toggle="modal" data-target="#exampleModal2">
                                            <div class="mr-3 xp-noti-icon danger-rgba"><i class="icon-basket-loaded text-success"></i></div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 class="mt-0 mb-1 font-14">New ticket</h5>
                                                    <p class="mb-0 font-12 f-w-4">8:45 AM</p>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="media xp-noti">
                                            <div class="mr-3 xp-noti-icon danger-rgba"><i class="icon-basket-loaded text-success"></i></div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 class="mt-0 mb-1 font-14">
                                                        Low Product</h5>
                                                    <p class="mb-0 font-12 f-w-4">Yesterday</p>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0 py-3 text-black text-center font-14">
                                                    <a href="#" class="text-primary">View all</a>
                                                </h5>
                                            </div>
                                        </li>
                                    </ul>                                            
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-0">
                            <div class="dropdown xp-userprofile">
                                <a class="dropdown-toggle" href="#" role="button" id="xp-userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://www.menon.no/wp-content/uploads/thumb-71-personae-big.jpeg" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-user-live"></span></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">
                                    <a class="dropdown-item py-3 text-white text-center font-16" href="#">Welcome, {{ Auth::user()->name }}</a>
                                    <a class="dropdown-item" href="#"><i class="icon-user text-primary mr-2"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="icon-wallet text-success mr-2"></i> Billing</a>
                                    <a class="dropdown-item" href="#"><i class="icon-settings text-warning mr-2"></i> Setting</a>
                                    <a class="dropdown-item" href="#"><i class="icon-lock text-info mr-2"></i> Lock Screen</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="icon-power text-danger mr-2"></i> Log Out </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>                                   
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End XP Col -->
        </div> 
        <!-- End XP Row -->
    </div>

    <!--Modales-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pending Requirements</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table style="text-align: center; width: 100%">
                  <tr>
                  <th># Room</th>
                  <th>Description</th>
                  <th>Status</th>
                </tr>
                <tr style="border-bottom: dotted gray 1px;">
                    <td>103</td>
                    <td style="padding-top: 10px">2 Toallas Extra<br>
                        <span style="font-style:italic; font-size: 9px">5 Minutes ago</span>
                    </td>
                    <td><p class="badge badge-pill badge-warning">Pendiente</p></td>
                </tr>
                <tr style="border-bottom: dotted gray 1px;">
                    <td>206</td>
                    <td style="padding-top: 10px">Dejar aguas extra<br>
                        <span style="font-style:italic; font-size: 9px">3 Hours ago</span>
                    </td>
                    <td><p class="badge badge-pill badge-warning">Pendiente</p></td>
                </tr>
                <tr style="border-bottom: dotted gray 1px;">
                    <td>153</td>
                    <td style="padding-top: 10px">Solicitan papel de baño<br>
                        <span style="font-style:italic; font-size: 9px">5 Hours ago</span>
                    </td>
                    <td><p class="badge badge-pill badge-success">Atendido</p></td>
                </tr>
                <tr style="border-bottom: dotted gray 1px;">
                    <td>163</td>
                    <td style="padding-top: 10px">2 Toallas Extra<br>
                        <span style="font-style:italic; font-size: 9px">Yesterday at 09:35PM</span>
                    </td>
                    <td><p class="badge badge-pill badge-warning">Pendiente</p></td>
                </tr>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      @php
          $tickets = App\Ticket::orderBy('id', 'DESC')->where('type', 1)->get();
      @endphp

      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pending Tickets</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table style="text-align: center; width: 100%">
                    <thead>
                        <tr>
                            <th># Room</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                            <tr style="border-bottom: dotted gray 1px;">
                                <td>{{ $ticket->numRoom }}</td>
                                <td style="padding-top: 10px">{{ $ticket->message }}<br>
                                    <span style="font-style:italic; font-size: 9px">{{ \Carbon\Carbon::parse($ticket->created_at)->toFormattedDateString() }}</span>
                                </td>
                                <td>
                                    @if ($ticket->attended)
                                        <p class="badge badge-pill badge-success">Pending Review</p>
                                    @else
                                        <p class="badge badge-pill badge-success">Pending attend</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('control.show.verification_ticket_room', $ticket->id) }}" class="btn btn-round btn-outline-primary"><i class="mdi mdi-send"></i> </a>
                                </td>
                                
                            </tr>  
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>


    <!-- End XP Topbar -->
    @yield('rightbar-content')
    <!-- Start XP Footerbar -->
    <div class="xp-footerbar">
        <footer class="footer">
            <p class="mb-0">© 2019 CheckOut - Crafted with <i class="fa fa-heart"></i> By PartnerGrammer.</p>
        </footer>
    </div>
    <!-- End XP Footerbar -->
</div>